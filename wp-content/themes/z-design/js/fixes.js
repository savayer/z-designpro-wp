var aboutMenuItem = document.querySelector('[data-modal="about"]');
var img = document.querySelector('#change_to_gif_js');
var imgAboutTemplate = document.querySelector('#change_to_gif_js_about_template');
var gifLoaderModal = document.querySelector('.gif_block__loader--modal')
var gifLoader = document.querySelector('.gif_block__loader--template')

var gifSource = '/wp-content/themes/z-design/img/about/about.gif';

if (imgAboutTemplate) {
    window.addEventListener('load', function() {
        var block = document.querySelector('.gif_block--template')
        var gif = new Image();
        gif.src = gifSource;
        gif.onload = function() {
            gifLoader.style.display = 'none';
            imgAboutTemplate.style.display = 'none';
            block.insertAdjacentElement('beforeend', gif)
        }
    })
} else if (img) {
    aboutMenuItem.addEventListener('click', function() {
        if (img.dataset.gif) return;
        var block = document.querySelector('.gif_block--modal')
        var gif = new Image();
        gif.src = gifSource;
        gif.onload = function() {
            gifLoaderModal.style.display = 'none';
            img.style.display = 'none';
            img.dataset.gif = true
            block.insertAdjacentElement('beforeend', gif)
        }
    })
}