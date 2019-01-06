var img;
var iframeWidth;
var iframeHeight;

$(document).ready(function() {

    $("#nav-home").addClass("active");

    $(".carousel").carousel({
        interval: 3000
    });
    $("#home-carousel .next-container").each(function() {
        img = $(this).attr("data-bg-img");
        $(this).css({
            "background-image": "url('assets/img/carousel/" + img + "')"
        });
    });
    $("#home-carousel .prev-container").each(function() {
        img = $(this).attr("data-bg-img");
        $(this).css({
            "background-image": "url('assets/img/carousel/" + img + "')"
        });
    });
    iframeWidth = $("#iframe-1").width();
    iframeHeight = 0.5625 * iframeWidth;
    $("#iframe-1").css({
        "height": iframeHeight
    });
});
