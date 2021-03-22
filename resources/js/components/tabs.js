toggle_tabs(window.location.hash)

let tabs = document.querySelectorAll("nav[role='tablist'] a")
for(let i=0; i < tabs.length; i++){
  tabs[i].onclick = function() {
    toggle_tabs(tabs[i].getAttribute('href'))
  };
}

function toggle_tabs (hash) {
  document.querySelectorAll("nav[role='tablist'] a").forEach(function (el) {
    if(hash) {
      el.setAttribute("aria-selected", (el.getAttribute('href') == hash) ? "true" : "false")
      let tabpanels = document.querySelectorAll('[role="tabpanel"]');
      for(let i=0; i < tabpanels.length; i++) {
        tabpanels[i].setAttribute("aria-hidden", (tabpanels[i].id == hash.substring(1)) ? "false" : "true")
      }
    }
  });
}
