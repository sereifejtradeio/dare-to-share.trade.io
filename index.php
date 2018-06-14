<?php
//    $contents = file_get_contents("https://gleam.io/TDvJ6/leaderboard?limit=30");
//    $res = file_put_contents('temp.html', $contents);

// set the url of the page you would have previously linked to in the iframe
//$url = 'http://www.website-to-request.com/';
$url = 'https://gleam.io/TDvJ6/leaderboard?limit=30';

// Setup the new css you want to inject into the page 
$css = '
<style type="text/css">

body { background: transparent; }

</style>
';

// Get the file contents (you may want to replace this with a curl request 
$site_content = file_get_contents($url);

// a simple way to inject style into this page would be to ad it directly above the closing head tag (if there is one) 
// this can be changed to any element, or even using the dom class you could ammend this with more detail. 
$site_content = str_replace('</head>', $css.'</head>', $site_content);

// you may also need to inject a base href tag so all the links inside are still correct
// comment out the next line if not needed 
$site_content = str_replace('<head>', '<head><base href="'.$url.'" />', $site_content);

// return the site contents to the browser

 file_put_contents('temp.html', $site_content);


?>

<!DOCTYPE html>
<html class="no-js" lang="en-us">

<head>
    <meta charset="utf-8">
    <title>trade.io - Dare to Share</title>
    <meta content="Viral Campaign - Dare to Share Competition" name="description">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="trade.io" name="author">
    <meta property="og:url" content="https://gleam.io/TDvJ6/dare-to-share-test" />
    <meta property="og:title" content="DARE TO SHARE" />
    <meta property="og:image" content="" />
    <meta property="twitter:card" content="summary" />
    <meta property="twitter:image" content="" />
    <meta property="og:description" content="Do you have any social media accounts? Yes, we thought so. You - like others in our community - are probably already active across your favourite social channels. We have decided to reward 90 PEOPLE simply by staying active on their own social channels. In doing so, we are rewarding the most loyal members of our community with a life-changing gift, without having to participate in a complicated competition mechanic. Just share and engage with trade.io posts and updates on social, then we will measure your activity and you could be eligible to win! 90 winners will win a fully paid trip to sunny Cyprus! 1 of these winners will ALSO win a luxury VIP holiday around the world, with 100,000 USD spending money Agenda: Welcome cocktails, luxury cruise around the island, tour of the old city of Limassol, visit and goodie bags to the trade.io Cyprus serviced office, black tie gala dinner extravaganza!" />
	<link href="https://cdn.rawgit.com/necolas/normalize.css/master/normalize.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

</head>

<body>
	
	
	

<!--    <a class="action-btn" id="open-newsletter">Notify me</a>-->
    <div id="loading">
        <div id="preloader">
            <img alt="" class="loading-logo" src="img/logo-colored.png"><span class="loading-text">Loading Viral Campaign</span><span class="load"><span class="loading-dot"></span><span class="loading-dot"></span><span class="loading-dot"></span><span class="loading-dot"></span></span>
        </div>
    </div>
	
    <div id="fullpage">
		
        <div class="section" id="section0">
			
            <!--<img alt="" class="home-logo" src="img/logo.png">-->
			
            <div class="slideshow-home">


<!--

				                <video id="videofront" autoplay loop muted>
                      <source src="https://tradeio-marketing-cdn.azureedge.net/new-120adv-website/videos/video.mp4" type="video/mp4">
                </video>
-->
            </div>
            <!--
            <video class="home-video" autoplay loop>
              <source src="video/video.mp4" type="video/mp4">
            </video>
            -->
            <div class="slide-overlay">


            </div>
            <div class="intro">
				
                <div class="container open-anim opacity-0" id="clock">
                </div>
                <h1 class="boldify"> DARE TO SHARE </h1>
                <p class="open-anim opacity-0"><strong>90 winners win a fully paid holiday</strong> to the sunnny island of Cyprus
                    <br> plus one lucky tionaut will win the luxury holiday of a lifetime worth up to</p>
                <p class="open-anim opacity-0 money"><strong>$100,000</strong></p>
                <a class="light-btn open-anim opacity-0" id="button-more">WATCH VIDEO</a>
				<a class="light-btn open-anim opacity-0 button-details">ENTER COMPETITION</a>
            </div>
            <div class="scroll-indicator">
                <a id="indicator-scroll"><i class="icon ion-ios-arrow-down"></i></a>
            </div>
			<div id="gd-modal-overlay" class="gd-modal">
				<div class="gd-inner">
					<div class="gd-video-wrapper">
						<a href="#" class="gd-close gd-hide-modal" id="gd-close-anchor"><i class="far fa-times-circle"></i></a>
						                <video id="videofront2" controls>
                      <source src="video/video.mp4" type="video/mp4">
                </video> 
					</div>
				</div>
			</div>
        </div>
<!--
        <div class="section" id="section_video">

                <video id="videofront" controls>
                      <source src="video/video.mp4" type="video/mp4">
                </video> 
-->
<!--
           <div class="SpanFrame"> <span class="span1"></span><span class="span2"></span><span class="span3"></span><span class="span4"></span>

            </div>
-->
<!--
            <div id="videoFrame">

                <h1 class="Boldify"> Video <br> Section </h1></div>
        </div>
-->
<!--        </div>-->
        <div class="section" id="section1">
            <section class="text-left-block" id="about">
                <div class="row row-no-margin">
                    <div class="col-xs-12 col-sm-6 col-lg-6 slideshow-about split-section" id="invert-slideshow">
                    </div>
                    <div class="col-xs-12 col-sm-6 col-lg-6 left-center-text split-section" id="invert-text">
                        <div id="overlay12"></div>
                        <div id="overlayplus2"></div>
                        <div class="left-center-part">
                            <h2>About The Competition</h2>
                            <p style="font-size:1.8rem;">Do you have any social media accounts? </p>
                            <br>
                            <p style="font-size:2rem;color:white">Yes, we thought so. You - like others in our community - are probably already active across your favourite social channels. We have decided to reward 90 PEOPLE simply by staying active on their own social channels. In doing so, we are rewarding the most loyal members of our community with a life-changing gift, without having to participate in a complicated competition mechanic. Just share and engage with trade.io posts and updates on social, then we will measure your activity and you could be eligible to win!</p>
							<br>
							<a class=" light-btn open-anim opacity-0 button-details">ENTER COMPETITION</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="section" id="section2">
            <div id="overlay2"></div>
            <div class="text-left-center" id="facts">
                <div class="col-xs-12 col-sm-12 col-lg-12 left-center-text split-section spec-padding-bottom">
                    <br>
                    <h3 class="boldify" style="font-size: 6rem;font-family: Montserrat;letter-spacing: 0.25rem;">THE FACTS</h3>
					
<!--
					                <video id="videofront" controls>
                      <source src="video/video.mp4" type="video/mp4">
                </video>
-->
					
                    <div class="facts-container">
                        <a class="fact">
                            <div class="fact-item">
                                <p class="fact-title"></p>
                                <p class="fact-number">90</p>
                                <p class="fact-sub-text">winners</p>
                                <i class="fas fa-users"></i>
                            </div>
                        </a>
                        <a class="fact">
                            <div class="fact-item">
                                <p class="fact-title"></p>
                                <p class="fact-number">1</p>
                                <p class="fact-sub-text">top winner</p>
                                <i class="fas fa-user-astronaut"></i>
                            </div>
                        </a>
                        <a class="fact">
                            <div class="fact-item">
                                <p class="fact-title"></p>
                                <p class="fact-number">3</p>
                                <p class="fact-sub-text">nights in Cyprus</p>
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                        </a>
                        <a class="fact">
                            <div class="fact-item">
                                <p class="fact-title"></p>
                                <p class="fact-number">$100k</p>
                                <p class="fact-sub-text">holiday top prize</p>
                                <i class="fas fa-coins"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="section" id="section3">
            <section class="text-left-block" id="services">
                <div class="row row-no-margin">
                    <div class="col-xs-12 col-sm-6 col-lg-6 left-center-text split-section">
                        <div class="left-center-part">
                            <div id="overlay1"></div>
                            <div id="overlayplus"></div>
                            <h2>The Holiday Of A Lifetime</h2>
                            <p>90 active members of our community will be chosen to win simply by sharing, liking, writing or upvoting some of our company posts.</p>
                            <div class="carousel slide" data-interval="6000" data-ride="carousel" id="carousel-services">
                                <ol class="carousel-indicators">
                                    <li class="active" data-slide-to="0" data-target="#carousel-services">
                                    </li>
                                    <li data-slide-to="1" data-target="#carousel-services">
                                    </li>
                                    <li data-slide-to="2" data-target="#carousel-services">
                                    </li>
                                    <li data-slide-to="3" data-target="#carousel-services">
                                    </li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="active item">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6 col-lg-6 block-services">
                                                <span class="icon-services"><i class="fas fa-plane"></i></span>
                                                <h4>FLIGHTS</h4>
                                                <p class="serviceText">From wherever you are in the world to Cyprus, 25-28 October 2018</p>
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-lg-6 block-services">
                                                <span class="icon-services"><i class="fas fa-building"></i></span>
                                                <h4>HOTEL</h4>
                                                <p class="serviceText">Beachfront Accommodation at one of our favourite beach front hotels in Limassol</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6 col-lg-6 block-services">
                                                <span class="icon-services"><i class="fas fa-utensils"></i></span>
                                                <h4>FOOD</h4>
                                                <p class="serviceText">Experience the world-famous Mediterranean Cuisine</p>
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-lg-6 block-services">
                                                <span class="icon-services"><i class="fas fa-crown"></i></span>

                                                <h4>LUXURY</h4>
                                                <p class="serviceText">VIP black-tie gala dinner & extravanza designed to stimulate your imagination</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6 col-lg-6 block-services">
                                                <span class="icon-services"><i class="fas fa-comments"></i></span>
                                                <h4>MEET & GREET</h4>
                                                <p class="serviceText">Personally meet the senior trade.io management team </p>
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-lg-6 block-services">
                                                <span class="icon-services"><i class="fab fa-fort-awesome"></i></span>
                                                <h4>CULTURE</h4>
                                                <p class="serviceText">Tour the old town of Limassol with our local hosts and discover the island</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6 col-lg-6 block-services">
                                                <span class="icon-services"><i class="fas fa-user-astronaut"></i></span>
                                                <h4>LIFETIME EXPERIENCE</h4>
                                                <p class="serviceText">Join our catamaran cruise around the island, and dance along the coastline in style</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control left" data-slide="prev" href="#carousel-services"><span class="icon-prev"></span></a> <a class="carousel-control right" data-slide="next" href="#carousel-services"><span class="icon-next"></span></a>
                            </div>
                            <div id="features-bg"></div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-lg-6 slideshow-services split-section">
                    </div>
                </div>
            </section>
        </div>
        <div class="section" id="section4">
            <section class="text-left-block" id="about">
                <div class="row row-no-margin">
                    <div class="col-xs-12 col-sm-6 col-lg-6 slideshow-about split-section" id="invert-slideshow">
                    <a class="e-widget no-button generic-loader" href="https://gleam.io/TDvJ6/dare-to-share-test" rel="nofollow"></a>
                    <script type="text/javascript" src="https://js.gleam.io/e.js"></script>

                    </div>
                    <div class="col-xs-12 col-sm-6 col-lg-6 left-center-text split-section" id="invert-text">
                        <div id="overlay12"></div>
                        <div id="overlayplus2"></div>
                        <div class="left-center-part">
                            <h2>DARE TO SHARE</h2>
                            <p style="font-size:1.8rem;">Start Sharing to Win</p>
                            <br>
                            <p style="font-size:2rem;color:white">   90 winners will win a fully paid trip to sunny Cyprus! 1 of these winners will ALSO win a luxury VIP holiday around the world, with 100,000 USD spending money
                        <br>
                        <br> Agenda: Welcome cocktails, luxury cruise around the island, tour of the old city of Limassol, visit and goodie bags to the trade.io Cyprus serviced office, black tie gala dinner extravaganza!
</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="section" id="section5">
            <div id="overlay34"></div>
            <div id="overlayplus34">
                <div class="text-left-center" id="section_nan">
                    <div class="center-col">
<!--                        <hr class="separator">-->
                        <div class="col-xs-12 col-sm-6 col-lg-6 left-center-text split-section spec-padding-bottom">
                            <div class="center-col" style="height: 210px">
<div style="
    transform: scale(0.9);
    height: 210px;
    position: absolute;
    width: 100%;
    left: 0;
    right: 0;
    margin: auto;
    text-align: center;
"> <span class="span1"></span><span class="span2"></span><span class="span3"></span><span class="span4"></span></div>
                                <h3 class="boldify">THE TOP PRIZES</h3>
                                <h4>1 of our 90 social winners who will visit Cyprus, will ALSO be chosen at random to win a luxury VIP holiday around the world, worth 100,000 USD!This top winner will be announced during the Cyprus Gala Dinner in October 2018.</h4>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-6 left-center-text split-section spec-padding-bottom">
<div style="
    transform: scale(0.9);
    height: 210px;
    position: absolute;
    width: 100%;
    left: 0;
    right: 0;
    margin: auto;
    text-align: center;
"> <span class="span1"></span><span class="span2"></span><span class="span3"></span><span class="span4"></span></div>
                            <div class="center-col" style="height: 210px">
                                <h3 class="boldify">ANNOUNCEMENTS & UPDATES</h3>
                                <h4>Make sure that you are subscribed to our Telegram channel and to our main website https://trade.io in order to keep up to date with the latest announcements.</h4>
                            </div>

                        </div>
                       <hr class="separator"/>
                        <div class="col-xs-12 col-sm-12 col-lg-12 center-text split-section spec-padding-bottom box1">
                            <span class="span1"></span><span class="span2"></span><span class="span3"></span><span class="span4"></span>
                            <div class="col-sm-4 col-lg-4 left-center-text split-section spec-padding-bottom">

                                <div class="center-col">
                                    <h3 class="boldify number">30</h3>
                                    <h3 class="boldify txtnumber">WINNERS</h3>
                                    <h4>will be announced</h4>
                                    <h4 class="boldify number">31 July 2018</h4>
                                </div>
                            </div>
                            <div class="col-sm-4 col-lg-4 left-center-text split-section spec-padding-bottom">

                                <div class="center-col">
                                    <h3 class="boldify number">30</h3>
                                    <h3 class="boldify txtnumber">WINNERS</h3>
                                    <h4>will be announced</h4>
                                    <h4 class="boldify number">31 August 2018</h4>
                                </div>
                            </div>
                            <div class="col-sm-4 col-lg-4 right-center-text split-section spec-padding-bottom">

                                <div class="center-col">
                                    <h3 class="boldify number">30</h3>
                                    <h3 class="boldify txtnumber">WINNERS</h3>
                                    <h4>will be announced</h4>
                                    <h4 class="boldify number">01 October 2018</h4>
                                </div>
                            </div>
                            <hr class="separator"/>
                            <div class="center-col" style="margin-top: 2rem;letter-spacing: 0.25rem;text-transform: uppercase;" />
                            <h4 class="boldify number">The top winner for the prize worth $100,000 will be announced in Cyprus, October 2018. </h4>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section" id="section6">
        <section class="text-left-block" id="contact">
            <div class="row row-no-margin">

                <div class="col-xs-12 col-sm-12 col-lg-12 map-info split-section">
                    <div class="col-xs-12 col-sm-6 col-lg-6">
                    <div id="map">
                    </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-lg-6" id="LeaderboardCont">
						<br>
						<h1>Leaderboard</h1>
						<br>
                        <iframe id="lb" frameborder='0' src='temp.html' allowtransparency="true"></iframe>

                    </div>
                </div>
         
                
            </div>
        </section>
    </div>

<!--    <a class="action-btn" id="open-newsletter">Notify me</a>-->
    <div class="home-logo"></div>
    <!--    <img alt="" class="home-logo">-->
    <div id="social-nav">
        <ul>
            <li>
                <a href="https://www.facebook.com/trade.io/" target="_blank"><i class="fab fa-facebook-f"></i></a>
            </li>
            <li>
                <a href="https://twitter.com/tradetoken?lang=en" target="_blank"><i class="fab fa-twitter"></i></a>
            </li>
            <li>
                <a href="https://www.reddit.com/r/TradeIOICO/" target="_blank"><i class="fab fa-reddit-alien"></i></a>
            </li>
            <li>
                <a href="https://t.me/TradeToken" target="_blank"><i class="fab fa-telegram"></i></a>
            </li>
            <li>
                <a href="https://www.linkedin.com/company/trade-io/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
            </li>
        </ul>
    </div>
    
    <div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">
        <!-- Background of PhotoSwipe. It's a separate element as animating opacity is faster than rgba(). -->
        <div class="pswp__bg">
        </div>
        <div class="pswp__scroll-wrap">
            <!-- Container that holds slides. PhotoSwipe keeps only 3 of them in the DOM to save memory. Don't modify these 3 item elements, data is added later on. -->
            <div class="pswp__container">
                <div class="pswp__item">
                </div>
                <div class="pswp__item">
                </div>
                <div class="pswp__item">
                </div>
            </div>
            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter">
                    </div>
                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                    <button class="pswp__button pswp__button--share" title="Share"></button>
                    <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip">
                    </div>
                </div>
                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center">
                    </div>
                </div>
            </div>
        </div>
    </div>
	
	
    
    <script src="https://code.jquery.com/jquery-1.12.3.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js">
    </script>
    <script src="js/jquery.fullPage.js">
    </script>
    <script src="js/jquery.countdown.js">
    </script>
    <script src="js/vegas.js">
    </script>
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyCkXz3NwNqP5IMo-ii_BuR0bhOgZeMbNF0">
    </script>
    <script src="js/map.js">
    </script>
    <script src="js/photoswipe.js">
    </script>
    <script src="js/photoswipe-ui-default.js">
    </script>
    <script src="js/contact-me.js">
    </script>
    <script src="js/notifyMe.js">
    </script>
    <script>
        // Set up your end date just below
        $('#clock').countdown('2018/10/01 10:30:00', function(event) {
            var $this = $(this).html(event.strftime('' + '<div class="col-xs-6 col-sm-3 col-lg-3">%D<span>Days<\/span><\/div>' + '<div class="col-xs-6 col-sm-3 col-lg-3">%H<span>Hours<\/span><\/div>' + '<div class="col-xs-6 col-sm-3 col-lg-3">%M<span>Minutes<\/span><\/div>' + '<div class="col-xs-6 col-sm-3 col-lg-3">%S<span>Seconds<\/span><\/div>'));
        });
    </script>
    <script src="js/main-fullpage.js">
		
    </script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/392/jquery.fitvids.js">
    </script>
	
	
</body>

</html>