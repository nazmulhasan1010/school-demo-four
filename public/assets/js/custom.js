$(document).ready(function () {
    let navbar = $('header .nav-menu'),
        sticky = $(navbar).offset().top;
    $(window).scroll(function () {
        if (window.pageYOffset >= sticky) {
            $(navbar).addClass('sticky')
        } else {
            $(navbar).removeClass('sticky')
        }
    })
})





