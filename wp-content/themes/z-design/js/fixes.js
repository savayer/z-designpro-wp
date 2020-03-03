var aboutMenuItem = document.querySelector('[data-modal="about"]');
var img = document.querySelector('#change_to_gif_js');
var imgAboutTemplate = document.querySelector('#change_to_gif_js_about_template');

if (imgAboutTemplate) {
    window.addEventListener('load', function() {
        fetch('/wp-content/themes/z-design/img/about/about.gif')
        .then(function(data) {
            if (data.status === 200) {
                imgAboutTemplate.setAttribute('src', data.url);
                imgAboutTemplate.classList.remove('loading');
            }
        })
    })
} else if (img) {
    aboutMenuItem.addEventListener('click', function() {
        if (img.dataset.gif) return;
        fetch('/wp-content/themes/z-design/img/about/about.gif')
        .then(function(data) {
            if (data.status === 200) {
                img.setAttribute('src', data.url);
                img.dataset.gif = true
            }
        })
    })
}