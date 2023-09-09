<?php include('db/dbpdo.php');

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];;
    $message = $_POST['message'];


    $data = [
        'name' => $name,
        'email' => $email,
        'message' => $message
    ];

    $sql = "INSERT INTO dashboard.contact (name, email, message) 
    VALUES (:name, :email, :message)";
    $stmt = $conn->prepare($sql);
    $stmt->execute($data);

    echo "<script> location.replace('/contactus.php'); </script>";
}



?>
<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--[endif]-->

<head>
    <meta charset="utf-8" />
    <title>Play2 Help World: Contacts</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link rel="icon" type="image/png" sizes="16x16" href="/images/play2help_image.webp">
    <meta name="description" content="Play2 Help World Mission is to help charities while playing fun free games. Feel free to contact us." />
    <meta name="keywords" content="play2earn, free games, fun, rewards, charities, help, games, arcade, play2world, play2helpworld" />
    <meta name="MobileOptimized" content="320" />
    <!-- Animation Css -->
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
    <!-- Signin CSS -->
    <link rel="stylesheet" href="/css/signin.css">
    <!-- Contact CSS -->
    <link rel="stylesheet" href="/css/contact.css">
    <script src="https://accounts.google.com/gsi/client" async defer></script>
    <script type="text/javascript" src="https://alcdn.msauth.net/lib/1.4.4/js/msal.js" integrity="sha384-fTmwCjhRA6zShZq8Ow5ZkbWwmgp8En46qW6yWpNEkp37MkV50I/V2wjzlEkQ8eWD" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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
    </style>
    <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=6303d8657db1160019f426d2&product=sop' async='async'></script>
</head>

<body>



    <a href="javascript:" id="return-to-top"><i class="fas fa-arrow-up"></i> <br>top</a>
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
    <!-- Preloader start -->
    <div id="preloader">
        <div id="status">
            <div class="status-mes"></div>
        </div>
    </div>
    <!-- Preloader end -->

    <div data-scroll='0' class="full_width">

        <div class="container">
            <?php include('navbar.php') ?>
        </div>
        <div id="header-banner"></div>
        <!-- responsive web_header end -->

    </div>

    <!-- Contact content starts -->
    <div style="visibility: hidden; display: none;" class="time-message">
        <h1>
            <span id="timeInSeconds">0</span> <span>seconds</span>
        </h1>
        <h4 id="activityStatus">You are actively using this page.</h4>
    </div>
    <!-- contact icon section start-->
    <div class="it_comp_contact_icon_section full_width">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-12 col-sm-12 my-2">
                    <div class="it_comp_contact_main full_width">
                        <a href="tel:+07762293742">
                            <div class="it_comp_contact_rotate">
                                <i class="fas fa-phone"></i>
                            </div>
                            <h4>Give us a Call</h4>
                            <p>+077-622-93742</p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 my-2">
                    <div class="it_comp_contact_main it_comp_contact_main2 full_width">
                        <a href="mailto:support@play2world.com">
                            <div class="it_comp_contact_rotate">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <h4>Drop us an Email</h4>
                            <p>support@play2world.com</p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 my-2">
                    <div class="it_comp_contact_main it_comp_contact_main3 full_width">
                        <div class="it_comp_contact_rotate">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <h4>Our location</h4>
                        <p>3 Wetherell Road, London.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 col-sm-12 my-2">
                    <div class="it_comp_contact_main it_comp_contact_main2 full_width">
                        <a href="https://www.facebook.com/Play2.HelpWorld">
                            <div class="it_comp_contact_rotate">
                                <i class="fab fa-facebook"></i>
                            </div>
                            <h4>Facebook Page</h4>
                            <p>Like, Comment and Share</p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 my-2">
                    <div class="it_comp_contact_main it_comp_contact_main3 full_width">
                        <a href="https://twitter.com/Play2HelpWorld">
                            <div class="it_comp_contact_rotate">
                                <i class="fab fa-twitter"></i>
                            </div>
                            <h4>Twitter Page</h4>
                            <p>Send us a tweet</p>
                    </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 my-2">
                    <div class="it_comp_contact_main full_width">
                        <a href="https://www.youtube.com/channel/UC6PENDkMRLo8Or4-jjtJ3aw">
                            <div class="it_comp_contact_rotate">
                                <i class="fab fa-youtube"></i>
                            </div>
                            <h4>Our Channel</h4>
                            <p>Subscribe now</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact info section end -->
    <!--location wrapper start-->
    <div class="web_location_wrapper full_width">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 abt_section">
                    <div class="abt_heading_wrapper">
                        <h1>contact us</h1>
                    </div>
                    <form method="POST" action="/contactus.php">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="web_contect_form1">
                                    <input type="text" name="name" placeholder="Full Name" class="require">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="web_contect_form1">
                                    <input required type="email" name="email" placeholder="Email" class="require" data-valid="email" data-error="Email should be valid.">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="web_contect_form1">
                                    <textarea rows="6" name="message" placeholder="Message" class="require"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="response"></div>
                                <div class="web_contect_btn">
                                    <button type="submit" name="submit" class="submitForm">submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--location wrapper end-->
    <!-- Contact content ends -->
    <?php include('footer.php') ?>
    <!-- footer wrapper end-->
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Signin script -->
    <script src="/js/signin.js"></script>

    <script type="text/javascript" src="/js/authConfig.js"></script>
    <script type="text/javascript" src="/js/graphConfig.js"></script>
    <script type="text/javascript" src="/js/ui.js"></script>

    <!-- replace next line with authRedirect.js if you would like to use the redirect flow -->
    <!-- <script type="text/javascript" src="./authRedirect.js"></script>   -->
    <script type="text/javascript" src="/js/authPopup.js"></script>
    <script src="https://unpkg.com/jwt-decode/build/jwt-decode.js"></script>

    <script type="text/javascript" src="/js/graph.js"></script>
    <script src="/google.js"></script>
    <script src="/facebook.js"></script>
    <script src="/lib/device-uuid.js" type="text/javascript"></script>
    <script>
        $(document).ready(function() {
            if (localStorage.getItem("logged_in")) {

                $.ajax({
                    type: 'POST',
                    url: '/all_activity.php',
                    async: false, //IMPORTANT, the call will be synchronous
                    data: {
                        email: localStorage.getItem("email"),
                        activity_name: "Checking Contact Us",
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

        let browser = du.browser;
        let language = du.language;

        console.log(du);
    </script>
<!-- 
    <script>
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
        var current_url = <?php echo json_encode($currentURL); ?>;
        var user_ip_address = <?php echo json_encode($user_ip_address); ?>;
        var referrer_url = <?php echo json_encode($referrer_url); ?>;
        var user_agent = <?php echo json_encode($user_agent); ?>;


        setInterval(LoadFinance, 50000);

        function LoadFinance() {
            let timeSpentOnPage = document.getElementById('timeInSeconds').textContent;

            console.log(timeSpentOnPage);

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
                    browser: browser
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