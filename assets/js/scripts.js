'use strict';

$(window).on('beforeunload ajaxStart', function()
{
    $('body').prepend('<div data-ajax-loader><div class="loader"></div></div>');
});

$(window).on('ajaxStop', function()
{
    $('body').find('[data-ajax-loader]').remove();
});

$(document).ready(function ()
{
    nav_scroll_down('#desktop_menu', 'down', 0);

    $('[data-action="open_mobile_menu"]').on('click', function()
    {
        $('#mobile_menu').addClass('open');
    });

    $(document).on('click', '[data-action="close_mobile_menu"], #mobile_menu > nav > ul > li > a', function()
    {
        $('#mobile_menu').removeClass('open');
    });
});

function nav_scroll_down(target, css, height)
{
    var nav = {

        initialize: function()
        {
            $(document).each(function()
            {
                nav.scroller()
            });

            $(document).on('scroll', function()
            {
                nav.scroller()
            });
        },
        scroller: function()
        {
            if ($(document).scrollTop() > height)
                $(target).addClass(css);
            else
                $(target).removeClass(css);
        }
    }

    nav.initialize();
}

function animate_scroll_down(target, style, position)
{
    var offcicle = 0;

    $(window).scroll(function()
    {
        var is_visible = is_element_visible_on_screen(target, true);

        if (is_visible == true && offcicle < 1)
        {
            offcicle += 1;

            $(target).addClass('animate__animated');
            $(target).removeClass('animate__hidden');
            $(target).addClass('animate__show');
            $(target).addClass(style);
        }
    });
}

function is_element_visible_on_screen(id, jquery = false)
{
    if (jquery == true)
    {
        id = id.split('#');
        id = id[1];
    }

    var target = document.getElementById(id);
    var widthViewport = window.innerWidth || document.documentElement.clientWidth;
    var heightViewport = window.innerHeight || document.documentElement.clientHeight;
    var position = target.getBoundingClientRect();
    
    if (position.top >= 0 && position.bottom <= heightViewport && position.left >= 0 && position.right <= widthViewport)
        return true;
    else
        return false;
}
