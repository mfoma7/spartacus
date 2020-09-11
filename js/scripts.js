jQuery(document).ready(function ($) {
    //jQuery function for showing submenu items in the sidenav
    $("#slideout-menu .menu-item-has-children").on("click", function () {
        $(".sub-menu", this).slideToggle();
    });

    //Back to top button
    var btn = $('#back-to-top');

    $(window).scroll(function () {
        if ($(window).scrollTop() > 300) {
            btn.addClass('show');
        } else {
            btn.removeClass('show');
        }
    });

    btn.on('click', function (e) {
        e.preventDefault();
        $('html, body').animate({ scrollTop: 0 }, '300');
    });

    //Header search button 
    $(".header-search").on("click", function () {
        $('.search-header').slideToggle();
    });

    //Disable click on table of contents elements when slideout menu is open
    document.querySelector('.toggle-button').addEventListener('click', function () {
        $(".header-block__toc").toggleClass("disable-click");
    });

    document.querySelector('.slideout-close').addEventListener('click', function () {
        $(".header-block__toc").toggleClass("disable-click");
    });

    //Add open/close effect for sidenav button
    $('#nav-icon3').click(function () {
        $(this).toggleClass('open');
        $("#slideout-menu").toggleClass("show animate__animated animate__slideInLeft");
    });

    //Close menu inside sidenav
    $('.slideout-close').click(function () {
        $("#nav-icon3").removeClass('open');
        $("#slideout-menu").toggleClass("show animate__animated animate__slideInLeft");
    });

    //Toggle terms of content in front page
    $('.toc-toggle span').click(function () {
        $('.toc-hp').slideToggle();
    });

    // Main menu dropdown
    var $menu_item = $('.main-menu .menu-item-has-children');

    $menu_item.append('<i class="icon-angle-down"></i>');

    $(".main-menu .menu-item-has-children .icon-angle-down").on("click", function () {
        $(this).siblings(".sub-menu").slideToggle();
    });

});
