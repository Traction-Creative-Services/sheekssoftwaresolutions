var last;
$(document).ready(function() {
    $('#nav a').hover(function(el) {
            var childI = $(this).children("i");
            var dashPos = childI.attr('class');
            var dashPos = dashPos.indexOf('-');
            var id = childI.attr('class').substr(dashPos +1);
            $('.flyout').each(function() {
                if($(this).attr('id') == id) {
                    animate(true, $(this));
                }
            })
        },
        function() {
            animate(false);
        })
})

function animate(tf, el) {
    el = (typeof el === "undefined") ? $(".flyout .active") : el;
    var l = 94;
    var topEL = 0;
    if(tf) {
        var targetLink = el.attr('id') + ".php";
        $('#nav a').each(function(el) {
            var href = $(this).attr('href');
            if(href == targetLink) {
                topEl = $(this).offset().top;
            }
        })
        el.css('top',topEl);
        el.css('left',l);
        el.css('width',0);
        el.animate({width:'130px', padding:'0 10px'})
        last = el;
    }
    if(!tf) {
        last.animate({width:'0', padding:'0'});
    }
}