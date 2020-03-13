/*
* Load gif
*/
var aboutMenuItem = document.querySelector('[data-modal="about"]');
var img = document.querySelector('#change_to_gif_js');
var imgAboutTemplate = document.querySelector('#change_to_gif_js_about_template');

var gifSource = '/wp-content/themes/z-design/img/about/about.gif';

if (imgAboutTemplate) {
    window.addEventListener('load', function () {
        var block = document.querySelector('.gif_block--template')
        var gif = new Image();
        gif.src = gifSource;
        gif.onload = function () {
            imgAboutTemplate.style.display = 'none';
            block.insertAdjacentElement('beforeend', gif)
        }
    })
} else if (img) {
    aboutMenuItem.addEventListener('click', function () {
        if (img.dataset.gif) return;
        var block = document.querySelector('.gif_block--modal')
        var gif = new Image();
        gif.src = gifSource;
        gif.onload = function () {
            img.style.display = 'none';
            img.dataset.gif = true
            block.insertAdjacentElement('beforeend', gif)
        }
    })
}
/*************************************************** */
/*
* Detect IE to show that the browser does not support the site
*/
function GetIEVersion() {
    var sAgent = window.navigator.userAgent;
    var Idx = sAgent.indexOf("MSIE");

    // If IE, return version number.
    if (Idx > 0)
        return parseInt(sAgent.substring(Idx + 5, sAgent.indexOf(".", Idx)));

    // If IE 11 then look for Updated user agent string.
    else if (!!navigator.userAgent.match(/Trident\/7\./))
        return 11;

    else
        return 0; //It is not IE
}

if (GetIEVersion() > 0) {
    var ie = document.getElementById('internet-explorer')
    ie.classList.add('active')
}


/******************************** */
/*
* Coin animation lang
*/
var lang = document.querySelector('.nav__lang_wrapper')

lang.addEventListener('click', function(e) {
    e.preventDefault();    
    var href = this.dataset.href
    this.classList.add('hover')
    setTimeout(function() {
        var pathname = document.location.pathname
        if (pathname.indexOf('/en') != -1) {
            document.location.href = document.location.origin + '/' + pathname.slice(3)
        } else {
            document.location.href = document.location.origin + '/' + href + pathname
        }
    }, 250)
})

/************************************** */
/*
* change blog thumbs when screen resize
*/

document.addEventListener('DOMContentLoaded', function() {
    loadAppropriateBlogThumb();
    loadAppropriatePostThumb();
})

window.addEventListener('resize', function() {
    loadAppropriateBlogThumb();
    loadAppropriatePostThumb();
})

function loadAppropriateBlogThumb() {
    var blogThumb = document.querySelectorAll('.blog-thumb')
    if (blogThumb) {
        if (document.documentElement.clientWidth <= 450 && document.documentElement.clientWidth > 350) {
            blogThumb.forEach(function(thumb) {
                thumb.setAttribute('src', thumb.dataset.md)
            })
        } else if (document.documentElement.clientWidth <= 350) {
            blogThumb.forEach(function(thumb) {
                thumb.setAttribute('src', thumb.dataset.xs)
            })
        } else {
            blogThumb.forEach(function(thumb) {
                thumb.setAttribute('src', thumb.dataset.main)
            })
        }
    }
}

function loadAppropriatePostThumb() {
    var postThumb = document.querySelector('.post-thumb')

    if (postThumb) {
        if (document.documentElement.clientWidth <= 868 && document.documentElement.clientWidth > 538) {
            postThumb.setAttribute('src', postThumb.dataset.lg)
        } else if (document.documentElement.clientWidth <= 538 && document.documentElement.clientWidth > 400) {
            postThumb.setAttribute('src', postThumb.dataset.md)
        } else if (document.documentElement.clientWidth <= 400) {
            postThumb.setAttribute('src', postThumb.dataset.xs)
        } else {
            postThumb.setAttribute('src', postThumb.dataset.main)
        }
    }
}

/************************************** */
/*
* detect form errors
*/
if (document.documentElement.clientWidth > 500) {
    var nameInput = document.querySelector('input[name="your-name"]')
    var telInput = document.querySelector('input[name="your-phone"]')
    var emailInput = document.querySelector('input[name="your-email"]')
} else {
    var nameInput = document.querySelectorAll('input[name="your-name"]')[1]
    var telInput = document.querySelectorAll('input[name="your-phone"]')[1]
    var emailInput = document.querySelectorAll('input[name="your-email"]')[1]
}

if (telInput) {

    nameInput.addEventListener('input', function() {
        if (!this.value) {
            this.closest('.contact__group').querySelector('.field_label').classList.add('wpcf7-not-valid')
            this.classList.add('wpcf7-not-valid')
            this.closest('.contact__group').querySelector('.wpcf7-not-valid-tip').style.display = 'block'
        } else {
            this.classList.remove('wpcf7-not-valid')
            this.closest('.contact__group').querySelector('.field_label').classList.remove('wpcf7-not-valid')
            this.closest('.contact__group').querySelector('.wpcf7-not-valid-tip').style.display = 'none'
        }
    })

    telInput.addEventListener('input', function(e) {
        if (/[^0-9-]/.test(this.value)) {
            this.closest('.contact__group').querySelector('.field_label').classList.add('wpcf7-not-valid')            
            this.classList.add('wpcf7-not-valid')
        } else {
            this.classList.remove('wpcf7-not-valid')
            this.closest('.contact__group').querySelector('.field_label').classList.remove('wpcf7-not-valid')
        }
        if (!this.value) {
            this.closest('.contact__group').querySelector('.wpcf7-not-valid-tip').style.display = 'block'
        } else {
            this.closest('.contact__group').querySelector('.wpcf7-not-valid-tip').style.display = 'none'            
        }
    })


    function validateEmail(email) {
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(email).toLowerCase());
    }

    emailInput.addEventListener('input', function() {
        if (validateEmail(this.value)) {
            this.classList.remove('wpcf7-not-valid')
            this.closest('.contact__group').querySelector('.field_label').classList.remove('wpcf7-not-valid')
            this.closest('.contact__group').querySelector('.wpcf7-not-valid-tip').style.display = 'none'
        } else {
            this.closest('.contact__group').querySelector('.field_label').classList.add('wpcf7-not-valid')
            this.classList.add('wpcf7-not-valid')
            this.closest('.contact__group').querySelector('.wpcf7-not-valid-tip').style.display = 'block'
        }
        if (!this.value) {
            this.closest('.contact__group').querySelector('.wpcf7-not-valid-tip').style.display = 'block'
        } else {
            this.closest('.contact__group').querySelector('.wpcf7-not-valid-tip').style.display = 'none'            
        }
    })
}

