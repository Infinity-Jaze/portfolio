var yposition = 0; var range = 10;
function smoothscroll(id) {
    var target = document.getElementById(id).offsetTop;
    var scrollanimate = setTimeout(function () {
        smoothscroll(id)
    }, 10)

    yposition += range;

    if (yposition >= target) {
        clearTimeout(scrollanimate);
        yposition = 0;
    } else {
        window.scroll(0, yposition)
    }

    return false;
}
function toggleMenu() {
    var menu = document.getElementById('menu-3');
    menu.classList.toggle('menu-open');
}

function validate(form) {
    var escape = true;
    var errorText = '';

    for (i = 0; i < 3; i++) {
        if (form[i].value.trim().length <= 0) {
            switch (i) {
                case 0: errorText = 'Name'; break;
                case 1: errorText = 'Email'; break;
                case 2: errorText = 'Message'; break;
                default:
            }
            if (form[i].nextElementSibling.className != 'error') {
                form[i].style.borderColor = 'red';
                form[i].style.borderWidth = 'thick';
                form[i].insertAdjacentHTML('afterend', '<div class="error">*' + errorText + 'must be filled </div>');
            }
            // https://www.w3schools.com/jsref/prop_style_borderwidth.asp

            escape = false;

        } else {
            if (form[i].nextElementSibling.className == 'error') {
                form[i].style.borderColor = 'rgb(242, 164, 19)';
                form[i].nextElementSibling.remove();
            }
        }
    }
    return escape;
}