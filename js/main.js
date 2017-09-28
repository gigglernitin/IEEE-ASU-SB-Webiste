$(document).ready(function() {

    $("#fakeLoader").fakeLoader({
        timeToHide: 2000, //Time in milliseconds for fakeLoader disappear
        zIndex: "999", //Default zIndex
        spinner: "spinner3", //Options: 'spinner1', 'spinner2', 'spinner3', 'spinner4', 'spinner5', 'spinner6', 'spinner7'
        bgColor: "#3498db", //Hex, RGB or RGBA colors
    });

    $(".testemonials-slider").slick({
        arrows: true,
        dots: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000
    });

    /*Smooth Scroll*/
    $(function() {
        $('a[href*="#"]:not([href="#"])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html, body').animate({
                        scrollTop: target.offset(20).top
                    }, 1000);
                    return false;
                }
            }
        });
    });

    /*Perfect Scrollbar*/
    $('').perfectScrollbar();


});
