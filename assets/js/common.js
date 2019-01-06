var nav2Top;
var scrollTop;

var dark_mode;

var fontIncr;

function googleTranslateElementInit() {
    new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'hi', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL}, 'google_translate_element');
}

function toHindi() {
    var language = "hi";
    var selectField = document.querySelector("#google_translate_element select");
    for(var i=0; i < selectField.children.length; i++){
        var option = selectField.children[i];
        if(option.value==language){
            selectField.selectedIndex = i;
            selectField.dispatchEvent(new Event('change'));
            break;
        }
    }
}

function wResize() {
    if($("#hamburger-container").is(":hidden")) {
        $("#nav-1").css({
            "position": "relative"
        });
        nav2Top = $("#nav-2").offset().top;
        scrollTop = $(document).scrollTop();
    }
}

$(window).resize(wResize());

var mobileMenu = $("#mobile-menu");
var hamContainer = $("#hamburger-container");

$(document).click(function(ev) {
    if(!($(mobileMenu).is(":hidden"))) {
        if (!$(ev.target).is(mobileMenu) && mobileMenu.has(ev.target).length == 0) {
            $('#mobile-menu').collapse('hide');
            if(!$(ev.target).is(hamContainer) && hamContainer.has(ev.target).length == 0) {
                $("#ham-one").css({
                    "transform": "rotate(0)",
                    "top": "0"
                });
                $("#ham-two").css({
                    "opacity": "1"
                });
                $("#ham-three").css({
                    "transform": "rotate(0)",
                    "bottom": "0rem"
                });
            }
        }
    }
});

$(document).ready(function() {

    // $("#home-carousel").carousel({
    //     interval: 3600000
    // });

    wResize();

    // alert(document.cookie);

    if(document.cookie.indexOf('darkMode=active') >= 0) {
        if(!$("body").hasClass("dark-mode")) {
            $("body").addClass("dark-mode");
        }
    }

    $("#m-nav-hindi, #footer-hindi").click(function() {
        $("#d-nav-hindi").trigger("click");
    })

    fontIncr = 0;

    $(".nav-a-plus").click(function() {
        fontIncr ++;
        $(":root").css({
            "--font-size": "calc(var(--font-size-2) + " + fontIncr + "px)"
        });
    });

    $(".nav-a").click(function() {
        $(":root").css({
            "--font-size": "16px"
        });
    });

    $(".nav-a-minus").click(function() {
        fontIncr --;
        $(":root").css({
            "--font-size": "calc(var(--font-size-2) + " + fontIncr + "px)"
        });
    });

    $(".nav-light").click(function() {
        if($("body").hasClass("dark-mode")) {
            $("body").removeClass("dark-mode");
            document.cookie = "darkMode=no;path=/";
        }
    });

    $(".nav-dark").click(function() {
        if(!$("body").hasClass("dark-mode")) {
            $("body").addClass("dark-mode");
            document.cookie = "darkMode=active;path=/";
        }
    });

    $("#hamburger-container").click(function() {
        if(!$('#mobile-menu').hasClass('show')) {
            $("#ham-one").css({
                "transform": "rotate(45deg)",
                "top": "0.4rem"
            });
            $("#ham-two").css({
                "opacity": "0"
            });
            $("#ham-three").css({
                "transform": "rotate(-45deg)",
                "bottom": "0.4rem"
            });
        }
        else {
            $("#ham-one").css({
                "transform": "rotate(0)",
                "top": "0"
            });
            $("#ham-two").css({
                "opacity": "1"
            });
            $("#ham-three").css({
                "transform": "rotate(0)",
                "bottom": "0rem"
            });
        }
    });

    $(document).scroll(function() {
        scrollTop = $(this).scrollTop();
        // console.log(scrollTop);
        if($("#hamburger-container").is(":hidden")) {

            if(scrollTop > nav2Top) {
                $(".institute-caption").css({
                    "margin-bottom": "2.5rem",
                    "margin-top": "0"
                });

                $("#nav-2").css({
                    "position": "fixed",
                    "top": "0",
                    "left": "0"
                });
            }
            else {
                $(".institute-caption").css({
                    "margin-bottom": "0",
                    "margin-top": "0"
                });
                $("#nav-2").css({
                    "position": "relative"
                });
            }
        }
        else {
            $("#nav-1").css({
                "position": "fixed",
                "top": "0",
                "left": "0"
            });
            $(".institute-caption").css({
                "margin-bottom": "0",
                "margin-top": "2.5rem"
            });
        }

        if(scrollTop > 1000) {
            $("#anchor-top").show();
        }
        else {
            $("#anchor-top").hide();
        }
    });

    $("#anchor-top").click(function() {
        $("html, body").animate({scrollTop:0}, 500);
    });
});
