<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<!--[endif]-->
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Play2Help Fun Free Games Rewards For You And Charities</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Enjoy our fun free games, select rewards for you and popular charities." />
    <meta name="keywords" content="free, fun, game, gaming, online gaming, pc game, android game, ios game, rewards, charity, charities" />
    <meta name="author" content="Play2Help World Maurice Flynn" />
    <meta name="MobileOptimized" content="320" />
    <!-- <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" /> -->

    <meta name="theme-color" content="#ffffff" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-KB9X0NFQ37" async></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-KB9X0NFQ37');
    </script>
    <script type="text/javascript" src="https://alcdn.msauth.net/lib/1.4.4/js/msal.js" integrity="sha384-fTmwCjhRA6zShZq8Ow5ZkbWwmgp8En46qW6yWpNEkp37MkV50I/V2wjzlEkQ8eWD" crossorigin="anonymous" async></script>
    <script src="https://accounts.google.com/gsi/client" async defer></script>

    <script src="/js/timeme.min.js"></script>
    <script type="text/javascript">
        TimeMe.initialize({
            currentPageName: "index", // current page
            idleTimeoutInSeconds: 5, // stop recording time due to inactivity
            //websocketOptions: { // optional
            //	websocketHost: "ws://your_host:your_port",
            //	appId: "insert-your-made-up-app-id"
            //}
        });

        // TimeMe.callAfterTimeElapsedInSeconds(4, function () {
        // 	console.log("The user has been using the page for 4 seconds! Let's prompt them with something.");
        // })

        // TimeMe.callAfterTimeElapsedInSeconds(9, function () {
        // 	console.log("The user has been using the page for 9 seconds! Let's prompt them with something.");
        // });


        window.onload = function() {
            setInterval(function() {
                let timeSpentOnPage = TimeMe.getTimeOnCurrentPageInSeconds();
                document.getElementById('timeInSeconds').textContent = timeSpentOnPage.toFixed(2);

                if (TimeMe.isUserCurrentlyOnPage && TimeMe.isUserCurrentlyIdle === false) {
                    document.getElementById('activityStatus').textContent = "You are actively using this page."
                } else {
                    document.getElementById('activityStatus').textContent = "You have left the page."
                }
            }, 37);
        }
    </script>

    <meta name="am-api-token" content="xOvEtmIoh">

    <!-- End Google Tag Manager -->
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" href="/images/play2help_image.webp" type="image/x-icon">
    <link href="/css/animate.css" rel="stylesheet">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!-- font-awesome -->
    <link href="/css/font-awesome.css" rel="stylesheet">
    <!-- Web Fonts -->
    <link href="/css/fonts.css" rel="stylesheet">
    <!-- Flaticon Css -->
    <link href="/flaticon/web/flaticon.css" rel="stylesheet">
    <!-- Owl Carousel -->
    <link href="/css/owl.theme.default.css" rel="stylesheet">
    <link href="/css/owl.carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/magnific-popup.css">
    <!-- Style CSS -->
    <link href="/css/style.css" rel="stylesheet">
    <!-- Responsive CSS -->
    <link href="/css/responsive.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/css/custom.css">
    <!-- Cookie CSS -->
    <link rel="stylesheet" href="/css/cookie.css">
    <!-- Signin CSS -->
    <link rel="stylesheet" href="/css/signin.css">
    <!-- Microsoft Clarity Analytics Tracker-->
    <script type="text/javascript">
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "isjlgsliow");
</script>


    <style>
        #header-banner {
            background-image: url('/images/Website Banner_Play2Help_Desktop.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            height: 67vh;
        }

        @media screen and (max-width: 600px) {
            #header-banner {
                background-image: url('/images/Website Banner_Play2Help_mobilev2.png');
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center;
                height: 70vh;
            }
        }

        .adblocker-popup {
            position: fixed;
            background: #be1818;
            display: none;
            visibility: hidden;
            width: 100%;
            height: 100vh;
            left: 0;
            top: 0;
            overflow: hidden;
            display: flex;
            z-index: 99999999;
        }

        .adblocker-popup .adblocker-popup_inner {
            display: block;
            position: relative;
            margin: auto;
            padding: 40px 10px;
            background: #fff;
            width: 650px;
            border-radius: 4px;

        }

        .adblocker-popup .adblocker-popup_inner img {
            max-width: 20%;
            display: block;
            margin: auto;
        }

        .adblocker-popup .adblocker-popup_inner .ad-title {
            text-align: center;
            margin-top: 30px;
            font-size: 36px;
            line-height: normal;
            font-weight: 600;
            font-family: 'Roboto Mono', monospace;
        }

        .adblocker-popup .adblocker-popup_inner .ad-title span {
            color: #be1818;
        }

        .adblocker-popup .adblocker-popup_inner .ad-desc {
            font-size: 16px;
            line-height: normal;
            font-weight: 600;
            font-family: 'Nunito', sans-serif;
            text-align: center;
        }

        button.disable-ad {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 100%;
            padding: 14px 15px 12px 15px;
            max-width: 180px;
            margin-top: 30px;
            font-family: 'Nunito', sans-serif;
            font-size: 16px;
            text-transform: uppercase;
            background: #2196f3;
            color: #fff;
            cursor: pointer;
            line-height: normal;
            border-radius: 4px;
            border: 3px solid #03a9f400;
        }

        button.disable-ad:hover {
            opacity: 0.8;
        }
    </style>

    <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=6303d8657db1160019f426d2&product=sop' async='async'></script>
    <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=6303d355a2413d00197af76a&product=sticky-share-buttons" async="async"></script>
    <meta name="ahrefs-site-verification" content="d4eae4e5ab156ef33c7c1e84bb75df8a4d460fea86858a826becdf6ada428737">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <!--** Testing propeller ads**-->
    <!-- <script>
        (function(d, z, s) {
            s.src = 'https://' + d + '/401/' + z;
            try {
                (document.body || document.documentElement).appendChild(s)
            } catch (e) {}
        })('goomaphy.com', 5319655, document.createElement('script'))
    </script> -->
    <a href="javascript:" id="return-to-top" alt="link to go to beginning of page with an arrow pointing up"><i class="fas fa-arrow-up"></i> <br>top</a>

    <!-- Preloader start -->
    <div id="preloader">
        <div id="status">
            <div class="status-mes"></div>
        </div>
    </div>
    <!-- Preloader end -->

    <div data-scroll='0' class="full_width">
        <div class="container">
            <?php include('navbar.php'); ?>
        </div>
        <div id="header-banner"></div>

    </div>
    <!-- newsletter pop  up-->
    <script type="text/javascript">
        var EhAPI = EhAPI || {};
        EhAPI.after_load = function() {
            EhAPI.set_account('6ep6euktvtrqado8npu0ar2vif', 'play2helpworld');
            EhAPI.execute('rules');
        };
        (function(d, s, f) {
            var sc = document.createElement(s);
            sc.type = 'text/javascript';
            sc.async = true;
            sc.src = f;
            var m = document.getElementsByTagName(s)[0];
            m.parentNode.insertBefore(sc, m);
        })(document, 'script', '//d2p078bqz5urf7.cloudfront.net/jsapi/ehform.js');
    </script>
    <!-- slider wrapper end-->
    <div class="sharethis-sticky-share-buttons"></div>
    <div data-scroll='1' class="full_width">
        <div class="web_pricing_section" id="ourGames">

            <div class="time-message" style="display: none; visibility: hidden;">
                <h1>
                    <span id="timeInSeconds">0</span> <span>seconds</span>
                </h1>
                <h4 id="activityStatus">You are actively using this page.</h4>
            </div>

            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-lg-10 offset-lg-1 col-md-12">
                                <div class="web_pricing-table-default text-center menu_scroll">

                                    <a href="https://www.swagbucks.com/lp-savings-button?cmp=695&cxid=swagbuttonref&rb=127116045&extRefCmp=1&extRb=127116045" alt="swagbucks affiliate link" target="_blank">
                                        <div class="price">
                                            <h1>GRAB EXTRA $$REWARDS</h1>
                                            <img src="images/watch_ads.png" alt="games and rewards image">
                                        </div>
                                    </a>
                                    <div class="sharethis-inline-reaction-buttons"></div>
                                    <h2>You can have more cash with 3 easy fun steps.</h2>
                                    <ul>
                                        <li>1. Sign up</li>
                                        <li>2. Play games, watch ads or answer surveys</li>
                                        <li><strong>3. Get more extra fun rewards!</strong></li>
                                    </ul>

                                    <a href="https://www.swagbucks.com/lp-savings-button?cmp=695&cxid=swagbuttonref&rb=127116045&extRefCmp=1&extRb=127116045" class="web_btn_style" alt="swagbucks affiliate link" target="_blank">JOIN NOW</a>

                                </div>
                                <!-- /.pricing-table-wrapper -->
                            </div>
                        </div>
                        <!-- /.row -->
                    </div>

                </div>

            </div>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-lg-10 offset-lg-2 col-md-12 col-sm-12">
                        <div class="web_heading_wraper animated fadeIn my-5" data-animate="fadeIn">
                            <h2>Our Games</h2>
                            <p>These are our free games
                                <br> Try them out now and enjoy!
                            </p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-lg-10 offset-lg-1 col-md-12">
                                <div class="web_pricing-table-default text-center menu_scroll">
                                    <div class="price">
                                        <img src="/images/UP_Summer.webp" alt="">
                                    </div>

                                    <h2>UP!</h2>
                                    <ul class="web_pricing-list">
                                        <li>Can you stop the UP blocks to save the world?</li>
                                        <li>If you can, you can help charity Cancer Research UK.</li>
                                        <li>Every point you gain will increase a $ donation to Cancer Research.</li>
                                        <li>So start smashing those blocks now. See <a href="https://www.facebook.com/Play2.HelpWorld" alt="link to play2help facebook media page">social media</a> for
                                            tips and tricks.</li>
                                    </ul>

                                    <a href="http://play2helpup.free.nf/" class="web_btn_style" alt="up game link">Play |
                                        Share</a>
                                </div>
                                <!-- /.pricing-table-wrapper -->
                            </div>
                            <script id="PDS779459" type="text/javascript">
                                (function(d) {
                                    var wrapper = d.createElement("script");
                                    wrapper.id = "WDS779459";
                                    wrapper.type = "text/javascript";
                                    wrapper.src = "https://s.adlane.info/?content_page_url=" + encodeURIComponent(window.location.href) + "&width=320&height=50&cb=" + (new Date()).getTime().toString() + "&aid=779459";
                                    var s = d.getElementById("PDS779459");
                                    s.parentNode.insertBefore(wrapper, s);
                                }(document));
                            </script>
                            <!-- /.col-sm-4 -->
                            <div class="col-lg-10 offset-lg-1 col-md-12 mt-5">
                                <div class="web_pricing-table-default text-center menu_scroll">
                                    <div class="price">
                                        <img src="images/YUM_Summer.webp" alt="">
                                    </div>

                                    <h2>YUM Game</h2>
                                    <ul class="web_pricing-list">
                                        <li>Can you eat up YUM to save the world?</li>
                                        <li>If you can, you can help charity OXFAM.</li>
                                        <li>Every point you gain will increase a $ donation to OXFAM.</li>
                                        <li>So start catching those ingredients now. See <a href="https://www.facebook.com/Play2.HelpWorld" alt="">social media</a>
                                            for tips and tricks.</li>
                                    </ul>

                                    <a href="https://play2helpworld.com/yum/" class="web_btn_style" alt="yum game link">Play | Share</a>
                                </div>
                                <!-- /.pricing-table-wrapper -->
                            </div>
                            <!-- /.col-sm-4 -->
                            <div class="col-lg-10 offset-lg-1 col-md-12 mt-5">
                                <div class="web_pricing-table-default text-center menu_scroll">
                                    <div class="price">
                                        <!-- <a href="https://daf7f8k0buj1j.cloudfront.net/bubble-invasion/index.html"> -->
                                        <img src="/images/POP+WATER_AID.webp" alt="pop game image">
                                        <!-- </a> -->
                                    </div>

                                    <h2>POP!</h2>
                                    <ul class="web_pricing-list">
                                        <li>Can you stop the POP bubbles to save the world?</li>
                                        <li>If you can, you can help charity WaterAid.</li>
                                        <li>Every point you gain will increase a $ donation to WaterAid.</li>
                                        <li>So start smashing those bubbles now. See <a href="https://www.facebook.com/Play2.HelpWorld" alt="">social media</a> for
                                            tips and tricks.</li>
                                    </ul>

                                    <a href="https://daf7f8k0buj1j.cloudfront.net/bubble-invasion/index.html" class="web_btn_style" alt="pop game link">Play | Share</a>
                                </div>
                                <!-- /.pricing-table-wrapper -->
                            </div>
                            <!-- /.col-sm-4 -->
                        </div>
                        <!-- /.row -->
                    </div>

                </div>

            </div>

            <!--=======================
            Players testimonials Start
            ========================-->
            <section id="testimonial" class="testimonial common">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="section-head">
                                <h2 class="heading-font">Players Testimonials</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row testimonial-slick" style="justify-content: center;">
                        <div class="col-md-6 text-center">
                            <div class="testimonial-inner red-left">
                                <video width="400" controls>
                                    <source src="/assets/Vid_Testi.webm" type="video/webm">
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--=======================
            Players Testimonials End
            ========================-->
            <div class="container mt-5 coming_soon">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-12">
                        <div class="web_heading_wraper animated fadeIn my-5" data-animate="fadeIn">
                            <h3>New Games</h3>
                            <p>These are our new and coming soon games
                            </p>
                        </div>
                    </div>
                    <div class="item col-md-12">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="web_pricing-table-default text-center">
                                    <div class="price">
                                        <img src="/images/HISS+WWF-UK.webp" alt="">
                                    </div>

                                    <h2>HISS!</h2>
                                    <ul class="web_pricing-list">
                                        <li>Can you stop the HISS snake to save the world?</li>
                                        <li>If you can, you can help charity WWF-UK.</li>
                                        <li>Every point you gain will increase a $ donation to WWF.</li>
                                        <li>So start smashing those snakes now. See <a href="https://www.facebook.com/Play2.HelpWorld" alt="play2help facebook link">social media</a> for
                                            tips tricks.</li>
                                        <!-- <li></li> -->
                                    </ul>

                                    <button class="web_btn_style" alt="coming soon button" disabled>Coming Soon</button>
                                </div>
                                <!-- /.pricing-table-wrapper -->
                            </div>
                            <!-- /.col-sm-4 -->
                            <div class="item col-lg-6 col-md-12">
                                <div class="web_pricing-table-default text-center menu_scroll">
                                    <div class="price">
                                        <img src="/images/321+RED_CROSS.webp" alt="">
                                    </div>

                                    <h2> 3-2-1!</h2>
                                    <ul class="web_pricing-list">
                                        <li>Can you be the best 321 Racer to save the world?</li>
                                        <li>If you can, you can help charity Red Cross.</li>
                                        <li>Every point you gain will increase a $ donation to Red Cross.</li>
                                        <li>So start smashing those roads now. See <a href="https://www.facebook.com/Play2.HelpWorld" alt="">social media</a> for tips
                                            tricks.</li>
                                    </ul>

                                    <button class="web_btn_style" alt="coming soon button" disabled>Coming Soon</button>
                                </div>
                                <!-- /.pricing-table-wrapper -->
                            </div>
                            <!-- /.col-sm-4 -->
                            <div class="item col-lg-6 col-md-12">
                                <div class="web_pricing-table-default text-center menu_scroll">
                                    <div class="price">
                                        <img src="/images/MORE+MSF.webp" alt="">
                                    </div>

                                    <h2>MORE!</h2>
                                    <ul class="web_pricing-list">
                                        <li>Can you stop the Rail Rush to save the world?</li>
                                        <li>If you can you can help charity MSF.</li>
                                        <li>Every point you gain will increase a $ donation to MSF.</li>
                                        <li>So start smashing those rails rush now. See <a href="https://www.facebook.com/Play2.HelpWorld" alt="">social media</a> for
                                            tips tricks.</li>
                                        <!-- <li></li> -->
                                    </ul>

                                    <button class="web_btn_style" alt="coming soon button" disabled>Coming Soon</button>
                                </div>
                                <!-- /.pricing-table-wrapper -->
                            </div>
                            <!-- /.col-sm-4 -->
                            <div class="item col-lg-6 col-md-12">
                                <div class="web_pricing-table-default text-center menu_scroll">
                                    <div class="price">
                                        <img src="/images/GRRR+ALZEIMERS.webp" alt="">
                                    </div>

                                    <h2>GRRR!</h2>
                                    <ul class="web_pricing-list">
                                        <li>Can you stop the grrr Orcs to save the world?</li>
                                        <li>If you can, you can help charity Alzheimer.</li>
                                        <li>Every point you gain will increase a $ donation to Alzheimer.</li>
                                        <li>So start smashing those GRRR! Orcs now. See <a href="https://www.facebook.com/Play2.HelpWorld" alt="">social media</a> for
                                            tips tricks.</li>
                                    </ul>

                                    <button class="web_btn_style" alt="coming soon button" disabled>Coming Soon</button>
                                </div>
                                <!-- /.pricing-table-wrapper -->
                            </div>
                            <!-- /.col-sm-4 -->
                            <div class="item col-lg-6 col-md-12">
                                <div class="web_pricing-table-default text-center menu_scroll">
                                    <div class="price">
                                        <img src="/images/FLY+UNICEF.webp" alt="">
                                    </div>

                                    <h2>FLY!</h2>
                                    <ul class="web_pricing-list">
                                        <li>Can you stop the flying Crazy Rockets to save the world?</li>
                                        <li>If you can, you can help charity UNICEF.</li>
                                        <li>Every point you gain will increase a $ donation to UNICEF.</li>
                                        <li>So start smashing those crazy rockets now. See <a href="https://www.facebook.com/Play2.HelpWorld" alt="">social media</a>
                                            for tips tricks.</li>

                                    </ul>

                                    <button class="web_btn_style" alt="coming soon button" disabled>Coming Soon</button>
                                </div>
                                <!-- /.pricing-table-wrapper -->
                            </div>
                            <!-- /.col-sm-4 -->
                            <div class="item col-lg-6 col-md-12">
                                <div class="web_pricing-table-default text-center menu_scroll">
                                    <div class="price">
                                        <img src="/images/GO+KIVA.webp" alt="">
                                    </div>

                                    <h2>GO!</h2>
                                    <ul class="web_pricing-list">
                                        <li>Can you stop the GO! Invaders to save the world?</li>
                                        <li>If you can, you can help charity Kiva.</li>
                                        <li>Every point you gain will increase a $ donation to Kiva.</li>
                                        <li>So start smashing those GO invaders now. See social media for tips tricks.
                                        </li>
                                    </ul>

                                    <button class="web_btn_style" alt="coming soon button" disabled>Coming Soon</button>
                                </div>
                                <!-- /.pricing-table-wrapper -->
                            </div>
                        </div>
                        <!-- /.row -->
                    </div>

                </div>

            </div>

        </div>

    </div>
<!-- 
    <div id="detect" class="ads ad adsbox doubleclick ad-placement carbon-ads"></div>
    <div class="adblocker-popup">
        <div class="adblocker-popup_inner">
            <img src="https://i.ibb.co/9t4QvYn/ad-blocker.png">
            <div class="ad-title">Please disable <span>Ad Blocker</span> </div>
            <p class="ad-desc">Uh oh. Looks like you're using an ad blocker. Please, disable it</p>

            <button type="button" class="disable-ad">Refresh Page</button>
        </div>
    </div> -->

    <div data-scroll='4' class="full_width">
        <!-- **engangebay**-->
        <div class="engage-hub-form-embed" id="eh_form_5127023530344448" alt="form to subscribe newsletter" data-id="5127023530344448"></div>
        <?php include('footer.php') ?>

        <!-- Sign in popup -->

        <?php include('popup.php') ?>

        <!-- Sign in popup ends-->

        <!-- Bootstrap core JavaScript -->
        <script src="/js/jquery-3.3.1.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/jquery.countTo.js"></script>
        <script src="/js/jquery.inview.min.js"></script>
        <script src="/js/owl.carousel.js"></script>
        <script src="/js/jquery.bxslider.min.js"></script>
        <script src="/js/jquery.magnific-popup.js"></script>
        <script src="/js/imagesloaded.pkgd.min.js"></script>
        <script src="/js/isotope.pkgd.min.js"></script>
        <!-- Contact Form js -->
        <script src="/js/contact_form.js"></script>
        <script src="/js/custom.js"></script>
        <!-- Boostrap, jquery and popper link -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
        <script type="text/javascript" src="/js/authConfig.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fuckadblock/3.2.1/fuckadblock.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/fuckadblock@3.2.1/fuckadblock.min.js"></script>

        <script type="text/javascript" src="/js/graphConfig.js"></script>
        <script type="text/javascript" src="/js/ui.js"></script>

        <!-- replace next line with authRedirect.js if you would like to use the redirect flow -->
        <!-- <script type="text/javascript" src="./authRedirect.js"></script>   -->
        <script type="text/javascript" src="/js/authPopup.js"></script>
        <script src="https://unpkg.com/jwt-decode/build/jwt-decode.js"></script>

        <script type="text/javascript" src="/js/graph.js"></script>
        <script src="/google.js"></script>
        <script src="/facebook.js"></script>

        <!-- Cookie script -->
        <script src="/js/cookie.js"></script>
        <!-- Signin script -->
        <script src="/js/signin.js"></script>
        <!-- Signin script ends -->

        <script src="/js/prebid-ads.js"></script>

        <script src="/lib/device-uuid.js" type="text/javascript"></script>

        <script>
            $(document).ready(function() {
                console.log(localStorage.getItem('email'));
                if (localStorage.getItem("logged_in")) {

                    console.log('here');
                    $.ajax({
                        type: 'POST',
                        url: '/all_activity.php',
                        async: false, //IMPORTANT, the call will be synchronous
                        data: {
                            email: localStorage.getItem("email"),
                            activity_name: "Checking Main Page",
                            website: 'Play2Help'
                        },
                        success: function(response) {
                            console.log(response);
                        }

                    }).done(function(data) {
                        console.log('complete');
                    });
                }
            });
        </script>

        <script>
            var du = new DeviceUUID().parse();
            var dua = [
                du.language,
                du.platform,
                du.os,
                du.cpuCores,
                du.isAuthoritative,
                du.silkAccelerated,
                du.isKindleFire,
                du.isDesktop,
                du.isMobile,
                du.isTablet,
                du.isWindows,
                du.isLinux,
                du.isLinux64,
                du.isMac,
                du.isiPad,
                du.isiPhone,
                du.isiPod,
                du.isSmartTV,
                du.pixelDepth,
                du.isTouchScreen
            ];
            var uuid = du.hashMD5(dua.join(':'));


            let device_uuid = uuid;
            let browser = du.browser;
            let language = du.language;

            console.log(du);
        </script>

        <!-- <script>
            document.getElementById("detect").style.display = 'none';
            if (window.adsAreWithUs === undefined) {
                // adblocker detected, show fallback
                document.querySelector('.adblocker-popup').style.visibility = 'visible';
            }

            // window.adBlockRunning = function() {
            //     return (getComputedStyle(document.getElementById("detect"))["display"] == "none") ? true : false;
            // }()

            $('.disable-ad').click(function() {
                location.reload(true);
            });
        </script> -->

        <script>
            // console.log('http://ip-api.com/json/42.201.187.197?fields=status,message,country,countryCode,region,regionName,city,zip,lat,lon,timezone,isp,org,as,query');
            var current_url = <?php echo json_encode($currentURL); ?>;
            var user_ip_address = <?php echo json_encode($user_ip_address); ?>;
            var referrer_url = <?php echo json_encode($referrer_url); ?>;
            var user_agent = <?php echo json_encode($user_agent); ?>;

            // var endpoint = `http://ip-api.com/json/${user_ip_address}?fields=status,message,country,countryCode,region,regionName,city,zip,lat,lon,timezone,isp,org,as,query`;
            // let country;
            // let timezone;

            // var xhr = new XMLHttpRequest();
            // xhr.onreadystatechange = function() {
            //     if (this.readyState == 4 && this.status == 200) {
            //         var response = JSON.parse(this.responseText);
            //         country = response.country;
            //         timezone = response.timezone;
            //         if (response.status !== 'success') {
            //             console.log('query failed: ' + response.message);
            //             return
            //         }
            //     }
            // }

            // xhr.open('GET', endpoint, true);
            // xhr.send();


            setInterval(LoadFinance, 120000);

            function LoadFinance() {
                let timeSpentOnPage = document.getElementById('timeInSeconds').textContent;

                $.ajax({
                    type: 'POST',
                    url: '/saveTime.php',
                    async: false, //IMPORTANT, the call will be synchronous
                    data: {
                        timeSpentOnPage: timeSpentOnPage,
                        current_url: current_url,
                        user_ip_address: user_ip_address,
                        user_agent: user_agent,
                        referrer_url: referrer_url,
                        country: country,
                        timezone: timezone,
                        language: language,
                        browser: browser,
                        device_uuid: device_uuid
                    },
                    success: function(response) {
                        console.log(response);
                    }

                }).done(function(data) {
                    console.log('complete');
                });
            };
        </script>
</body>

</html>