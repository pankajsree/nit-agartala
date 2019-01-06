$(document).ready(function() {
    $("#sub-hamburger-container").click(function() {
        if(!$('#sub-mobile-menu').hasClass('show')) {
            $("#sub-ham-one").css({
                "transform": "rotate(45deg)",
                "top": "0.4rem"
            });
            $("#sub-ham-two").css({
                "opacity": "0"
            });
            $("#sub-ham-three").css({
                "transform": "rotate(-45deg)",
                "bottom": "0.4rem"
            });
        }
        else {
            $("#sub-ham-one").css({
                "transform": "rotate(0)",
                "top": "0"
            });
            $("#sub-ham-two").css({
                "opacity": "1"
            });
            $("#sub-ham-three").css({
                "transform": "rotate(0)",
                "bottom": "0rem"
            });
        }
    });
});
