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
        return $(".fp-section , #info").toggleClass("newsletter-opened"), !1
    }), $(document).click(function(e) {
        "info" === e.target.id || $("#info").find(e.target).length || $(".fp-section , #info").removeClass("newsletter-opened")
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
});