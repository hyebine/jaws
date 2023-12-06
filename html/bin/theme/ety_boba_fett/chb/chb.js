$(document).ready(function () {

    $(window).on('scroll', function () {
        if ($(window).scrollTop() > 80) {
            $("body").addClass("hdblackmode ").removeClass('notscroll');
        } else {
            $("body").removeClass("hdblackmode").addClass('notscroll');
        }
    })

    $("#bby_gnb").on('mouseenter', function () {
        $("body.notscroll").addClass("hdblackmode");
    }).on('mouseleave', function () {
        $("body.notscroll").removeClass("hdblackmode");
    })

})