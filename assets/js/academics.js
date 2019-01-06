var imgHeight;

function docResize() {
    if($("#first").length !== 0) {
        imgHeight = $("#first").width() * 0.5625;
        $(".img-container").height(imgHeight);
    }
}

$(document).ready(function() {

    $("html, body").resize(function() {
        docResize();
    });

    $("#nav-academics").addClass("active");

    if($("#first").length !== 0) {
        $("#first img").load(function() {
            docResize();
        });
    }

});
