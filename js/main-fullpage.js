$(window).load(function() {
    "use strict";
    setTimeout(function() {
        $("#loading").addClass("vanish"), $(".open-anim").each(function(e) {
            ! function(t) {
                setTimeout(function() {
                    $(t).removeClass("opacity-0").addClass("animated-middle fadeInUp")
                }, 150 * e + 150)
            }(this)
        })
    }, 1e3), setTimeout(function() {
        $("#loading").remove(), $("#open-newsletter").removeClass("opacity-0").addClass("animated-middle jello")
    }, 1400)
}), $(document).ready(function() {
    "use strict";
    $("#open-newsletter , .close-newsletter").on("click", function() {
        return $(".fp-section , #info").toggleClass("newsletter-opened"), $("body").toggleClass("bodyfix"),$(".action-btn").toggleClass("Notifyfix"), !1
    }), $(document).click(function(e) {
        "info" === e.target.id || $("#info").find(e.target).length || $(".fp-section , #info").removeClass("newsletter-opened");$("body").removeClass("bodyfix");$(".action-btn").removeClass("Notifyfix")
    }), $("#notifyMe").notifyMe(), $("#fullpage").fullpage({
        navigation: !0,
        navigationTooltips: ["Home", "About", "The Facts", "The Holiday", "Dare-To-Share", "Announcements & Updates", "Contact"],
        responsiveWidth: 1025
    }), $(window).width() < 1025 && $("#invert-slideshow").insertAfter("#invert-text"), $(window).resize(function() {
        $(window).width() < 1025 ? $("#invert-slideshow").insertAfter("#invert-text") : $("#invert-text").insertAfter("#invert-slideshow")
    }), $(".gallery-link").each(function() {
        $(this).append('<div class="photo"></div>').children(".photo").css({
            "background-image": "url(" + $(this).attr("data-image") + ")"
        })
    })
//    (function(d, t){
//        if(window.location.hash!='#gleam'&&(''+document.cookie).match(/(^|;)\s*GleamTDvJ6=X($|;)/))
//        {
//            return;
//        }
//            var g = d.createElement(t), s = d.getElementsByTagName(t)[0];
//            g.src = "https://js.gleam.io/TDvJ6/ol.js"; 
//            s.parentNode.insertBefore(g, s);
//    }(document, "script"));
});


