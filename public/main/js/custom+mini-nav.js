jQuery(window).on("load", function () {
    $('#preloader').fadeOut(500);
    $('#main-wrapper').addClass('show');
});

(function ($) {
    "use strict";



    /*
    -------------------
    List item active
    -------------------*/
    $('.icons')
        .on('click', function () {
            $(".icons.active")
                .removeClass("active");
            $(this)
                .addClass('active');
        });

    $(".icons")
        .on("click", function (event) {
            event.stopPropagation();
        });

    $(document)
        .on("click", function () {
            $(".icons")
                .removeClass("active");

        });


    $("#menu").metisMenu();

    $('.nk-nav-scroll').slimscroll({
        position: "left",
        size: "5px",
        height: "100%",
        color: "transparent"
    });


    $(".nav-control").on('click', function () {
        $("body").toggleClass("mini-nav");
        $(".hamburger").toggleClass("is-active");
    });


    $(function () {
        for (var nk = window.location, o = $("ul#menu a").filter(function () {
            return this.href == nk;
        })
            .addClass("active")
            .parent()
            .addClass("active"); ;) {
            if (!o.is("li")) break;
            o = o.parent()
                .addClass("in")
                .parent()
                .addClass("active");
        }
    });

    $(function () {
        var win_w = window.innerWidth;
        var win_h = window.innerHeight;
        if (win_w <= 1170) {
            $("body").addClass("mini-nav");

        }
        var win_h = window.innerHeight;
        if (win_h > 0 ? win_h : screen.height) {
            $(".content-body").css("min-height", (win_h + 60) + "px");
        };
    });




    /*==============================================
		Custom Dropdown
		 ===============================================*/


    $('.drop-menu').on('click', function () {
        $(this).attr('tabindex', 1).focus();
        $(this).toggleClass('active');
        $(this).find('.dropeddown').slideToggle(300);
    });
    $('.drop-menu').focusout(function () {
        $(this).removeClass('active');
        $(this).find('.dropeddown').slideUp(300);
    });
    $('.drop-menu .dropeddown li').on('click', function () {
        $(this).parents('.drop-menu').find('span').text($(this).text());
        $(this).parents('.drop-menu').find('input').attr('value', $(this).attr('id'));
    });




    $('[data-toggle="popover"]').popover();
    $('[data-toggle="tooltip"]').tooltip();


    $('a[data-action="collapse"]').on("click", function (i) {
        i.preventDefault(),
            $(this).closest(".card").find('[data-action="collapse"] i').toggleClass("ti-minus ti-plus"),
            $(this).closest(".card").children(".card-body").collapse("toggle");
    });

    $('a[data-action="expand"]').on("click", function (i) {
        i.preventDefault(),
            $(this).closest(".card").find('[data-action="expand"] i').toggleClass("mdi-arrow-expand mdi-arrow-compress"),
            $(this).closest(".card").toggleClass("card-fullscreen");
    });



    $('[data-action="close"]').on("click", function () {
        $(this).closest(".card").removeClass().slideUp("fast");
    });

    $('[data-action="reload"]').on("click", function () {
        var e = $(this);
        e.parents(".card").addClass("card-load"),
            e.parents(".card").append('<div class="card-loader"><i class=" ti-reload rotate-refresh"></div>'),
            setTimeout(function () {
                e.parents(".card").children(".card-loader").remove(),
                    e.parents(".card").removeClass("card-load")
            }, 2000)
    });




})(jQuery);

