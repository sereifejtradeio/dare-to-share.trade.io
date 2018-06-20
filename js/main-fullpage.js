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
	
	  var widthL = $('#LeaderboardCont').width();
//	var heightL = $('#LeaderboardCont').height();

  $('#LeaderboardCont > iframe').css("width", widthL/2 );
//$('#LeaderboardCont > iframe').css("height", heightL );
	
		var dw = $('#invert-text').height();
	var dh = $(document).height();
	$('.sl2').css("height", dw);
	

	
		setTimeout(
	  function() 
	  {
		  $('iframe > body').css("background", "black");
		  			var docWidth = $(document).width();
	var docHeight = $(document).height();
	var videoWidth = $("#videofront").width();
	var videoHeight = $("#videofront").height();
	var calcLeft = (videoWidth / docWidth )*-333;
	$(".vegas-wrapper > video").css("left", calcLeft);
		
	}, 2000);
	
    $("#open-newsletter , .close-newsletter").on("click", function() {
        return $(".fp-section , #info").toggleClass("newsletter-opened"), $("body").toggleClass("bodyfix"),$(".action-btn").toggleClass("Notifyfix"), !1
    }), $(document).click(function(e) {
        "info" === e.target.id || $("#info").find(e.target).length || $(".fp-section , #info").removeClass("newsletter-opened");$("body").removeClass("bodyfix");$(".action-btn").removeClass("Notifyfix")
    }), $("#notifyMe").notifyMe(), $("#fullpage").fullpage({
        navigation: !0,
        navigationTooltips: ["Home", "About", "The Facts", "Dare-To-Share", "Announcements & Updates"],
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


/*
Project/design by Jonathan Quintin
https://dribbble.com/shots/1346874-Weather-Dashboard-Global-Outlook-5?list=users&offset=71

View in Full Page mode!
*/

$('.main-navG ul li').click(function() {
  $('.main-navG ul li').removeClass('active');
  $(this).addClass('active');
});

$('.menuicon').click(function() {
  $('.ul-menuG').css('bottom', '-150%');
  $(this).next('.ul-menu').css('bottom', '0');
});

$('.ul-menu-close').click(function() {
  $('.ul-menuG').css('bottom', '-150%');
});
