/**
 * Created by mac on 15.04.16.
 */
//Old verison
/*    $(document).on('click', '.slideto', function () {
        var elementClick = $(this).attr('href').replace('#','');
        var elem = document.getElementById(elementClick);
        //var destination = parseInt($(elementClick).offset().top) - parseInt($('#header').innerHeight());
        var destination = elem.offsetTop;
        console.log(destination);
        $('html, body, #main').animate({scrollTop: destination}, 600);
        //alert('yes');
        //$('#mobile-nav').removeClass('active-menu');
        return true;
    });*/

$(document).on('click', '.menu-title, .menu-item a', function () {
    elementClick = $(this).attr("href");
    destination = parseInt($(elementClick).offset().top) - parseInt($('#header').innerHeight());
    console.log(destination);
    $('html, body, #main').animate({
        scrollTop: destination
    }, 600);
    ////alert('yes');
    //$('#mobile-nav').removeClass('active-menu');
    return false;
});

