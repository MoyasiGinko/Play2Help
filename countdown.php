<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--[endif]-->

<head>
    <meta charset="utf-8" />
    <title>Play2 Help World: Countdown</title>
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
    <!-- Countdown css -->
    <link rel="stylesheet" href="/css/countdown.css">
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
</head>

<body>

    <a href="javascript:" id="return-to-top"><i class="fas fa-arrow-up"></i> <br>top</a>

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

    </div>

    <!-- Countdown content starts -->
    <div class="container">
      <div class="row text-center justify-content-center">
              <h1 class="text-center countdown-head mt-5">
                  Redeem Codes
              </h1>
          </div>
          <div class="row text-center justify-content-center soon-div">
              <h3 class="text-center soon">
                  Coming soon!!!
              </h3>
          </div>
          <div class="row text-center justify-content-center time-div">
              <h3 class="text-center time">
                  30 free redeem codes has just arrived <br>
                  Grab Yours!
              </h3>
          </div>
          <div class="firework"></div>
      <div class="row countdown-div">
        <div class="col-6 col-sm-6 col-md-3 col-lg-3 justify-content-center align-items-center">
          <div class="minutes d-flex justify-content-center align-items-center">
            <h1 id="days">00</h1>
          </div>
          <h3 class="d-flex justify-content-center align-items-center">
            Days
          </h3> 
        </div>
        <div class="col-6 col-sm-6 col-md-3 col-lg-3 justify-content-center align-items-center">
          <div class="minutes d-flex justify-content-center align-items-center">
            <h1 id="hours">00</h1>
          </div>
          <h3 class="d-flex justify-content-center align-items-center">
            Hours
          </h3> 
        </div>
        <div class="col-6 col-sm-6 col-md-3 col-lg-3 justify-content-center align-items-center">
          <div class="minutes d-flex justify-content-center align-items-center">
            <h1 id="minutes">00</h1>
          </div>
          <h3 class="d-flex justify-content-center align-items-center">
            Minutes
          </h3> 
        </div>

        <div class="col-6 col-sm-6 col-md-3 col-lg-3 justify-content-center align-items-center">
          <div class="seconds d-flex justify-content-center align-items-center">
            <h1 id="seconds">00</h1>
          </div>
          <h3 class="d-flex justify-content-center align-items-center">
            Seconds
          </h3>
        </div>
      </div>
      <div class="col-8 col-md-8 col-md-6 col-lg-12 justify-content-center align-items-center">
      <div class="engage-hub-form-embed" id="eh_form_5671333543804928" data-id="5671333543804928"> </div>  
      </div>
  </div>
    <!-- Countdown content ends -->
    
    <?php include('footer.php') ?>
    <!-- footer wrapper end-->
    <!-- Sign in popup -->

    <?php include('popup.php') ?>
    <!-- Sign in popup ends-->

    <!-- Bootstrap core JavaScript -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <script src="js/jquery.inview.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/jquery.bxslider.min.js"></script>
    <script src="js/jquery.magnific-popup.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <!-- Contact Form js -->
    <script src="js/contact_form.js"></script>
    <script src="js/custom.js"></script>
    <!-- Countdown JS -->
    <script src="countDown.js"></script>
    <!-- Boostrap, jquery and popper link -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Signin script -->
    <script src="js/signin.js"></script>

    <script type="text/javascript" src="js/authConfig.js"></script>
    <script type="text/javascript" src="js/graphConfig.js"></script>
    <script type="text/javascript" src="js/ui.js"></script>

    <!-- replace next line with authRedirect.js if you would like to use the redirect flow -->
    <!-- <script type="text/javascript" src="./authRedirect.js"></script>   -->
    <script type="text/javascript" src="js/authPopup.js"></script>
    <script src="https://unpkg.com/jwt-decode/build/jwt-decode.js"></script>

    <script type="text/javascript" src="js/graph.js"></script>
    <script src="google.js"></script>
    <script src="facebook.js"></script>
    <!-- Signin script ends -->

    <script type="text/javascript" >
var EhAPI = EhAPI || {}; EhAPI.after_load = function(){
EhAPI.set_account('6ep6euktvtrqado8npu0ar2vif', 'play2world');
EhAPI.execute('rules');};(function(d,s,f) {
var sc=document.createElement(s);sc.type='text/javascript';
sc.async=true;sc.src=f;var m=document.getElementsByTagName(s)[0];
m.parentNode.insertBefore(sc,m);   
})(document, 'script', '//d2p078bqz5urf7.cloudfront.net/jsapi/ehform.js');
</script>   
</body>

</html>