/**
 * Created with JetBrains PhpStorm.
 * User: martin.sheeks
 * Date: 9/4/13
 * Time: 11:03 AM
 * To change this template use File | Settings | File Templates.
 */
$(document).ready(function() {
    initTracking('UA-36362540-1');
    initModern();
    initPortfolio();
})

function initTracking(accountID) {
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', accountID]);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
}

function initModern() {
    //handles date input by default. add to this as needed.
    Modernizr.load({
        test: Modernizr.inputtypes.date,
        nope: ['http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.7/jquery-ui.min.js', 'jquery-ui.css'],
    });
}

function initPortfolio() {
    $('.project').click(function() {
        toggleBiggy($(this));
    });
}

function toggleBiggy(el) {
    if(el.hasClass('biggy')) {
        el.removeClass('biggy');
        el.stop().animate({width:'30%'}, 1500, function() {
            el.addClass('notBiggy');
            $('.notBiggy').css('display','block');
        });
        el.find('.project-desc').css('display','none');

    }
    else {
        el.removeClass('notBiggy');
        el.addClass('biggy');
        $('.notBiggy').css('display','none');
        el.stop().animate({width:'100%'}, 1500, function() {
            el.find('.project-desc').css('display','block');
        });


    }
}