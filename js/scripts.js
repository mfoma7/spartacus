jQuery(document).ready(function ($) {
    //jQuery function for showing submenu items in the sidenav
    $(".menu-item-has-children").on("click", function () {
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


    var headertext = [];
    var headers = document.querySelectorAll("thead");
    var tablebody = document.querySelectorAll("tbody");

    for (var i = 0; i < headers.length; i++) {
        headertext[i] = [];
        for (var j = 0, headrow; headrow = headers[i].rows[0].cells[j]; j++) {
            var current = headrow;
            headertext[i].push(current.textContent);
        }
    }

    for (var h = 0, tbody; tbody = tablebody[h]; h++) {
        for (var i = 0, row; row = tbody.rows[i]; i++) {
            for (var j = 0, col; col = row.cells[j]; j++) {
                col.setAttribute("data-th", headertext[h][j]);
            }
        }
    }
});
