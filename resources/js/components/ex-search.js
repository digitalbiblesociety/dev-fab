import axios from 'axios'
import Fuse from 'fuse.js'

window.onload = function() {

    let openCtrl = document.getElementById('btn_search'),
        closeCtrl = document.getElementById('btn_search_close'),
        inputSearch = document.getElementById('search_input');

    axios.get('/data/site_index.json').then(site => {

        const fuse = new Fuse(site.data, {
            shouldSort: true,
            includeMatches: true,
            threshold: 0.4,
            location: 0,
            distance: 50,
            maxPatternLength: 12,
            minMatchCharLength: 1,
            keys: ["tt", "tv"]
        })

        openCtrl.addEventListener('click', openSearch);
        closeCtrl.addEventListener('click', closeSearch);
        document.addEventListener('keyup', function (e) {
            if (e.key === "Escape") {
                closeSearch()
            }
        })

        inputSearch.addEventListener('input', e => {
            instantSearch(fuse, inputSearch)
        })

    })

}

let instantSearch = function (fuse, inputSearch) {
    let searchResults = document.getElementById('search_results')
    searchResults.innerHTML = ''
    let results = fuse.search(inputSearch.value)

    console.log(results.length)

    results.forEach((resultItem) => {
        highlighter(resultItem);
    })

    let results_html = ''
    let results_ordered    = {}
    let template = document.querySelector('#search_results_template')

    let total_count = 0
    results.every(function(result, index) {
        if(!results_ordered[result.item.type]) {
            results_ordered[result.item.type] = { 'count': 0, 'html': '' }
        }

        if(results_ordered[result.item.type]['count'] < 8) {
            results_ordered[result.item.type]['count']++;
            total_count++;
            results_ordered[result.item.type]['html'] += `<a href="/${result.item.type}/${result.item.id}">
          <h3>${ result.highlight_key == 'tt' ? result.highlight : (result.item.tt ? result.item.tt : '') }</h3>
          <small>${ result.highlight_key == 'tv' ? result.highlight : (result.item.tv ? result.item.tv : '') }</small>
          <div class="lang">${result.item.ln ?? ''}</div>
          </a><br>`
        }

        return (total_count > 25) ? false : true
    })



    let searchResults_template = template.content.cloneNode(true)
    let search_sections = searchResults_template.querySelectorAll("section")

    search_sections.forEach(search_section => {
        if (results_ordered[search_section.dataset.type]) {
            search_section.innerHTML = results_ordered[search_section.dataset.type]['html']
            search_section.parentNode.setAttribute("data-count", results_ordered[search_section.dataset.type]['count'])
        } else {
            search_section.style.display = 'none'
        }
    });

    searchResults.appendChild(searchResults_template)
}

let highlighter = function(resultItem) {
    resultItem.matches.forEach((matchItem) => {
        let text = resultItem.item[matchItem.key]
        let result = []
        let matches = [].concat(matchItem.indices)
        let pair = matches.shift()

        for (let i = 0; i < text.length; i++) {
            let char = text.charAt(i)
            if (pair && i == pair[0]) {
                result.push('<b>')
            }
            result.push(char)
            if (pair && i == pair[1]) {
                result.push('</b>')
                pair = matches.shift()
            }
        }
        resultItem.highlight = result.join('')
        resultItem.highlight_key = matchItem.key

        if (resultItem.children && resultItem.children.length > 0) {
            resultItem.children.forEach((child) => {
                highlighter(child);
            });
        }
    })
}


function openSearch() {
    document.querySelector('main').classList.add('main-move');
    document.querySelector('.search').classList.add('search--open');
    setTimeout(function() {
        document.getElementById('search_input').focus();
    }, 600);
}

function closeSearch() {
    document.querySelector('main').classList.remove('main-move');
    document.querySelector('.search').classList.remove('search--open');
    document.getElementById('search_input').blur();
    document.getElementById('search_input').value = '';
}
