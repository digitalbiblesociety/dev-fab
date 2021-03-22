window.onload = function(){
    let i18nwrap = document.querySelector('#i18n_wrap')
    let i18nwrap_open = document.querySelector('#i18n_wrap_open')
    let i18nwrap_close = document.querySelector('#i18n_wrap_close')

    if(i18nwrap_open) {
        i18nwrap_open.onclick = function() {
            i18nwrap.className = 'active'
        }
    }

    if(i18nwrap_close) {
        i18nwrap_close.onclick = function() {
            i18nwrap.className = ''
        }
    }

}
