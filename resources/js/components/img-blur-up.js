window.onload = function() {

    let placeholder = document.querySelector('.placeholder')

    // 2: load large image
    let imgLarge = new Image();
    imgLarge.src = placeholder.dataset.large;
    imgLarge.onload = function () {
        imgLarge.classList.add('loaded');
    };
    placeholder.appendChild(imgLarge);
}