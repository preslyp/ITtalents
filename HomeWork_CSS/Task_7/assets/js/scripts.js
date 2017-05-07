$(window).ready(function() {

    $(document).on('click', '.open-search > a', function(e) {
        $('.search').slideToggle(300);
    });

    $(document).on('click', '.call > a', function(e) {
        $('.widget').slideToggle(300);
        $("i", this).toggleClass("fa-angle-up fa-angle-down");
    });


    $('.flexslider').flexslider({
        animation: "slide",
        controlNav: "thumbnails",
        start: function(slider) {
            $('body').removeClass('loading');
        }
    });

    $(window).load(function() {
        $('.testimonials').flexslider({
            animation: "slide",
            controlNav: false
        });
    });

    $(".menu-button").click(function(){
     $(this).closest("body").toggleClass("active");
    });

    $(function() {

        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 2000);
                    return false;
                }
            }
        });

    });

});
