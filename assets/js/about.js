var imgWidth;

function docResize() {
    if($("#first").length != 0) {
        imgWidth = $("#first").width();
        $("#gallery-page img").height(imgWidth);
    }
}

$(document).ready(function() {

    $(document).resize(function() {
        docResize();
    });

    $(window).resize(function() {
        docResize();
    });

    $("#nav-about").addClass("active");

    if($("#first").length != 0) {
        imgWidth = $("#first").width();
        $("#gallery-page img").height(imgWidth);
    }
});
