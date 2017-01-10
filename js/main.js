$(function () {
    var i = 0;
    $('#mobileMenuLink').on('click', function () {
        i++;
        if (i % 2 != 0) {
            $('#mobileNav').css({
                'max-height': '999px',
                'transition-property': 'all',
                'transition-duration': '.5s',
                'transition-timing-function': 'cubic-bezier(0, 1, 0.5, 1)',
                'overflow': 'visible',
                'visibility': 'visible'

            });
        } else {
            $('#mobileNav').css({
                'max-height': '0',
                'overflow': 'hidden',
                'visibility': 'hidden'
            });
        }
    });
});

//Prevent the function to run before the document is loaded
document.addEventListener('readystatechange', function () {
    if (document.readyState === "complete") {

    }
});