let DataTable = require('datatables.net-dt')
require('datatables.net-responsive-dt')
$.fn.dataTable = DataTable
$.fn.dataTableSettings = DataTable.settings
$.fn.dataTableExt = DataTable.ext
DataTable.$ = $

$.fn.DataTable = function (opts) {
  return $(this).dataTable(opts).api()
}

Object.byString = function (o, s) {
  s = s.replace(/\[(\w+)\]/g, '.$1') // convert indexes to properties
  s = s.replace(/^\./, '')           // strip a leading dot
  let a = s.split('.')
  for (let i = 0, n = a.length; i < n; ++i) {
    let k = a[i]
    if (k in o) {
      o = o[k]
    } else {
      return
    }
  }
  return o
}

let isExternal = function (url) {
  if (!url) return false
  if (url[0] === '/') return false
  let domain = function (url) {
    return url.replace('http://', '').replace('https://', '').split('/')[0]
  }
  return domain(location.href) !== domain(url)
}

$(document).ready(function () {
  let tables = $('.table')

  $.each(tables, function (index, element) {
    let table = $(this)
    let lengthMenu = (table.data('length')) ? JSON.parse('[' + table.data('length') + ']') : [[50, 100, 250, -1], [50, 100, 250, 'All']]

    if (table.data('route')) {

      let order = 0
      let orderDirection = 'asc'


      let columns = []
      $.each(table.find('thead tr th'), function (index, column) {
        column = $(column)
        // Hide invisible columns
        let suffix = (column.data('suffix')) ? column.data('suffix') : null
        let prefix = (column.data('prefix')) ? column.data('prefix') : null

        if (column.data('sort-default')) {
          order = index
          orderDirection = column.data('sort-default')
        }

        columns[index] = {
          name: column.data('column-name'),
          data: column.data('column-name'),
          visible: column.data('invisible') === undefined,
          render: function (data, type, row, meta) {
            if (suffix) data = data + suffix
            if (prefix) data = prefix + data

            // Check array first
            if (column.data('array')) {
              //let column = column.data(Object.byString(row, column.data("column-name")));
              let items = row[column.data('array')]
              $arrayHTML = ''
              $.each(items, function (type, item) {
                if (column.data('link')) {
                  $arrayHTML += '<a class="option"' + (isExternal(item[column.data('link')]) ? ' target="_blank"' : '') +
                    ' href="' + item[column.data('link')] + '">' + item[column.data('column-name')] + '</a>'
                } else {
                  $arrayHTML += '<span class="option">' + item[column.data('column-name')] + '</span>'
                }
              })
              return $arrayHTML
            }

            if (column.data('image')) {

              let img_path = (column.data('image')) ? column.data('image') : ''

              let sprite_html = '<svg class="icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="' + img_path + Object.byString(row, column.data('filename')) + '"></use></svg>'

              if (column.data('link')) {
                let path = (column.data('path')) ? column.data('path') : table.data('route')
                let url = '/' + path + '/' + Object.byString(row, column.data('link'))



                return '<a href="' + url + '"' + (isExternal(url) ? ' target="_blank" rel="noreferrer"' : '') + '>' + sprite_html + '</a>'
              }

              return sprite_html
            }

            if (column.data('depends-on')) {
              if (!Object.byString(row, column.data('depends-on'))) {
                return '<span class="disabled">' + data + '</span>'
              }
            }

            if (column.data('checkbox')) {
              return '<label class="checkbox"><input type="checkbox" checked name="bibles[' + Object.byString(row, column.data('column-name')) + ']" /><span class="checkmark"></span></label>'
            }

            if (column.data('link')) {
              let path = (column.data('path')) ? column.data('path') : table.data('route')
              let url = '/' + path + '/' + Object.byString(row, column.data('link'))

              return '<a href="' + url + '"' + '>' + data + '</a>'
            }

            return data
          }
        }
      })

      let dt = table.DataTable({
        ajax: {
          url: '/assets/data/' + table.data('route') + '.json',
          dataSrc: ''
        },
        dom: '<<"dataTables_header"lf><t>ip>',
        fixedHeader: true,
        deferRender: true,
        responsive: true,
        order: [order, orderDirection],
        lengthMenu: lengthMenu,
        columns: columns,
        stateSave: true,
        language: {
          search: '',
          lengthMenu: '_MENU_',
          loadingRecords: '<div class="datatables_loader"></div>',
          searchPlaceholder: table.data('searchplaceholder'),
          paginate: {
            previous: '‹',
            next: '›'
          }
        },
        'fnInitComplete': function (oSettings, json) {
          // Load up Fonts
          let RequiredFonts = $('.requires-font').map(function () {
            return $(this).data('font')
          }).get()
          RequiredFonts = jQuery.unique(RequiredFonts)
          for (let i = 0; i < RequiredFonts.length; i++) {
            let link = document.createElement('link')
            link.href = 'https://fonts.googleapis.com/earlyaccess/' + RequiredFonts[i] + '.css'
            link.type = 'text/css'
            link.rel = 'stylesheet'
            link.media = 'screen,print'
            document.getElementsByTagName('head')[0].appendChild(link)
          }

          table.removeClass('loading')

          let path = table.data('route')
          if (path.includes('/')) path = path.split('/')[0]
          let ItemsCount = $('.' + path + '_count')
          ItemsCount.append('(' + dt.rows().count() + ')')

        }
      })

    } else {
      table.DataTable({
        fixedHeader: true,
        deferRender: true,
        responsive: true,
        order: [0, 'desc'],
        lengthMenu: lengthMenu,
        language: {
          search: '',
          lengthMenu: '_MENU_',
          searchPlaceholder: 'Search',
          paginate: {
            previous: '‹',
            next: '›'
          }
        },
        'fnInitComplete': function (oSettings, json) {
          // Load up Fonts
          let RequiredFonts = $('.requires-font').map(function () {
            return $(this).data('font')
          }).get()
          RequiredFonts = jQuery.unique(RequiredFonts)
          if(RequiredFonts) {
            for (i = 0; i < RequiredFonts.length; i++) {
              let link = document.createElement('link')
              link.href = 'https://fonts.googleapis.com/earlyaccess/' + RequiredFonts[i] + '.css'
              link.type = 'text/css'
              link.rel = 'stylesheet'
              link.media = 'screen,print'
              document.getElementsByTagName('head')[0].appendChild(link)
            }
          }

          table.removeClass('loading')
        }
      })

    }

  })

  let filters = $('fieldset.filters')
  $.each(filters, function (type, filter) {
    $(filter).on('click', 'label', function () {
      let currentTable = $.fn.dataTable.Api('#' + $(filter).attr('data-table'))
      if (!currentTable) currentTable = $.fn.dataTable.Api('.table')

        if($(filter).data('name')) {
            currentTable.column($(filter).data('name') + ':name').search($(this).prev().val()).draw()
        } else {
            currentTable.column($(filter).data('selector')).search($(this).prev().val()).draw()
        }


    })
  })

})
