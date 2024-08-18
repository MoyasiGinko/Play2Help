<?php


// Include the database configuration file 
include('db/dbpdo.php');

// Get current page URL 
$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$currentURL = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . $_SERVER['QUERY_STRING'];

// Get server related info 
$user_ip_address = $_SERVER['REMOTE_ADDR'];
$referrer_url = !empty($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '/';
$user_agent = $_SERVER['HTTP_USER_AGENT'];

// Insert visitor log into database 
$sql = "INSERT INTO visitor_logs (page_url, referrer_url, user_ip_address, user_agent, created) VALUES (:page_url, :referrer_url, :user_ip_address, :user_agent, NOW())";
$stmt = $conn->prepare($sql);
$stmt->bindParam(":page_url", $currentURL);
$stmt->bindParam(":referrer_url", $referrer_url);
$stmt->bindParam(":user_ip_address", $user_ip_address);
$stmt->bindParam(":user_agent", $user_agent);

$insert = $stmt->execute();


?>

<style>
    li{
        list-style: none;
    }
</style>



<div class="web_header">

    <div class="row">
        <div class="col-xl-2 col-md-2 col-sm-4 col-6 col-lg-2">

            <div class="web_logo_wrapper">
                <a href="/index.php">
                    <img src="/images/play2help_image.webp" alt="play2help logo" style="width: 45px;" />
                </a>
            </div>

        </div>
        <div class="col-xl-10 col-lg-10 col-md-10 col-sm-8 col-6 resp_main_heade">
            <div class="web_menu_right_wrapper">
                <div id="web_toggle" class="d-block d-sm-block d-md-block d-lg-none d-xl-none">
                    <button class="web_searchd_bar"><i class="fas fa-bars"></i></button>
                </div>
                <!-- <a href="#" class="web_btn_style d-none d-sm-block d-md-block d-lg-block d-xl-block">Get Started</a> -->
            </div>
            <div class="web_menu_wrapper d-none d-sm-none d-md-none d-lg-block d-xl-block">
                <nav class="menu_scroll">
                    <ul>
                        <li class="pt-c7 active"><a href="http://play2helpup.free.nf/" target="_blank">Play</a></li>
                        <li class="pt-c7 "><a href="/highscorers.php" target="_blank">Rewards </a></li>
                        <li class="pt-c7 "><a href="/charities.php" alt="charities page">Charities</a></li>
                        <li class="pt-c7 "><a href="/booster.php" target="_blank">Booster </a></li>
                         <!--** Redeem points commented to be used later
                         <li class="pt-c7 ">
                            <form action="scripts/redeem.php" method="post">
                                <input type="hidden" name="email" id="email">
                                <input type="submit" style="/* position: relative; *//* border: none; */background-color: transparent;border: none;font-size: 19px;" name="redeem" value="Redeem Points">
                            </form>
                        </li>**-->
                        <li><a class="dropdown show">
                                <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Join In
                                </a>
                                <span class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="https://www.youtube.com/channel/UC6PENDkMRLo8Or4-jjtJ3aw" 
                                        alt="play2help youtube link" target="_blank">YouTube</a>
                                    <a class="dropdown-item" href="https://mauricebigmoflynn.wordpress.com/" 
                                        alt="play2help blog" target="_blank">Blog</a>
                                    <a class="dropdown-item" href="https://www.eventbrite.com/e/full-community-meetup-tickets-346061678797" 
                                        alt="play2help events media" target="_blank">Events</a>
                                    <a class="dropdown-item" href="https://www.surveymonkey.com/r/ZKM37SK" 
                                        alt="play2help survey votes link">Votes</a>
                                    <a class="dropdown-item" href="https://www.facebook.com/Play2.HelpWorld/photos/a.210431825738952/5317915491657201/"
                                         alt="jobs from our facebook page">Job</a>
                                    
                                    <a class="dropdown-item Click-here" id="signinbtn" href="#">Signin</a>
                                </span>
                            </a>
                        </li>

                        <li class="pt-c7"> <a href="/aboutus.php" id="hidethis" alt="about play2help community page" target="_blank">Why</a> </li>    
                        <!--<li class="pt-c7"><a href="countdown.php" alt="play2help countdown page">Countdown</a></li>-->
                        <li class="pt-c7"><a href="/contactus.php" alt="play2help contacts page">Contact Us</a></li> 
                        <li  id="helloUser" style="display: none;"><a  class="dropdown show" >
                                <a  href="javascript:void(0)" id="editThis dropdownMenuLink" class="btn dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Hello!
                                </a>
                                <span class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" style="border-bottom: 1px solid rgba(0,0,0,0.4);" id="nameThis" href="#"></a>
                                    <button type="button" id="logout" name="logout" class="dropdown-item">Log Out</button>
                                </span>
                            </a>
                        </li>
  
    
                </ul>
            </nav>
        </div>

        </div>
    </div>
</div>
<!--web_header wrapper end-->
<!--*************************************THIS IS THE NAVBAR FOR MOBILE**************************-->
<div id="web_sidebar" class="d-block d-sm-block d-md-block d-lg-none d-xl-none">
    <a class="web_sidebar_logo" href="index.php">
        <img src="images/play2help_image.webp" alt="play2help logo" style="width:70px;">
    </a>
    <div id="web_toggle_close">&times;</div>
    <div id='web_cssmenu' class="menu_scroll">
        <ul class="sidebb">
            <li><a href="http://play2helpup.free.nf/" target="_blank"
                alt="play2help up game">Play</a></li>
            <li><a href="/viewscore.php" target="_blank"
                alt="play2help rewards page">Rewards</a></li>
            <li><a href="/charities.php" alt="charities page">Charities</a></li>
            <li><a href="/booster.php" alt="play2help booster page">Booster</a></li>
            <li><a class="dropdown show d-none">
                    <a class="btn d-flex align-items-center dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Join In
                    </a>
                    <span class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item p-1" href="https://www.youtube.com/channel/UC6PENDkMRLo8Or4-jjtJ3aw" 
                            alt="play2help youtube link" target="_blank">YouTube</a>
                        <a class="dropdown-item p-1" href="https://mauricebigmoflynn.wordpress.com/" 
                            alt="play2help blog" target="_blank">Blog</a>
                        <a class="dropdown-item p-1" href="https://www.eventbrite.com/e/full-community-meetup-tickets-346061678797" 
                            alt="play2help events media" target="_blank">Events</a>
                        <a class="dropdown-item p-1" href="https://www.surveymonkey.com/r/ZKM37SK" 
                            alt="play2help survey votes link">Votes</a>
                        <a class="dropdown-item p-1" href="https://www.facebook.com/Play2.HelpWorld/photos/a.210431825738952/5317915491657201/"
                             alt="jobs from our facebook page">Jobs</a>
                        <a class="dropdown-item p-1 Click-here" href="#" alt="">Signin</a>
                        <a class="dropdown-item p-1" href="https://play2helpworld.com/dashboard/auth/userLogin.php" alt="">Dashboard</a>
                    </span>
                </a>
            </li>
            <li><a id="hidethis" href="/aboutus.php" alt="about play2help community page" target="_blank">Why</a></li>
            <li><a href="/contactus.php" alt="play2help contacts page">Contact Us</a></li>
            <!--<li><a href="countdown.php" alt="play2help countdown page">Countdown</a></li>-->

            <!-- <li><a href="javascript:void(0)" style="display:none;" id="helloUser"></a></li>  -->
            <li style="display:none;" id="helloUser"><a href="javascript:void(0)"  class="dropdown show d-none">
                    <a class="btn d-flex align-items-center dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Hello, User!
                    </a>
                    <span class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item p-1" href="https://www.youtube.com/channel/UC6PENDkMRLo8Or4-jjtJ3aw" 
                            alt="play2help youtube link" target="_blank">YouTube</a>
                        <a class="dropdown-item p-1" href="https://mauricebigmoflynn.wordpress.com/" 
                            alt="play2help blog" target="_blank">Blog</a>
                        <a class="dropdown-item p-1" href="https://www.eventbrite.com/e/full-community-meetup-tickets-346061678797" 
                            alt="play2help events media" target="_blank">Events</a>
                        <a class="dropdown-item p-1" href="https://www.surveymonkey.com/r/ZKM37SK" 
                            alt="play2help survey votes link">Votes</a>
                        <a class="dropdown-item p-1" href="https://www.facebook.com/Play2.HelpWorld/photos/a.210431825738952/5317915491657201/" 
                            alt="jobs from our facebook page">Jobs</a>
                        <a class="dropdown-item p-1 Click-here" href="#" alt="">Signin</a>
                    </span>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- responsive web_header end -->

<script>
    var emailField = document.getElementById("email");

    if (localStorage.getItem('email')) {
        emailField.value = localStorage.getItem('email');
        var signinbtn = document.getElementById("signinbtn");
        var helloUser = document.getElementById("helloUser");
        var hidethis = document.getElementById("hidethis");

        signinbtn.style.display = 'none';

        $.ajax({
                    type: 'POST',
                    url: '/getName.php',
                    async: false, //IMPORTANT, the call will be synchronous
                    data: {
                        email: emailField.value
                    },
                    success: function(response) {
                        hidethis.style.display = 'none';
                        helloUser.style.display = 'inline';
                        var nameThis = document.getElementById('nameThis');
                        nameThis.innerHTML = response;
                    }

                })

    }


    if (localStorage.getItem('email')) {

        var logout = document.getElementById('logout');

        logout.addEventListener('click', function() {
            localStorage.removeItem('logged_in');
            localStorage.removeItem('email');

            if(localStorage.getItem('provider_uid')) {
                localStorage.removeItem('provider_uid');
            }

            window.location.reload();

        })

     }

</script>



<script>

var current_url = <?php echo json_encode($currentURL); ?>;
            var user_ip_address = <?php echo json_encode($user_ip_address); ?>;
            var referrer_url = <?php echo json_encode($referrer_url); ?>;
            var user_agent = <?php echo json_encode($user_agent); ?>;

    var endpoint = `http://ip-api.com/json/${user_ip_address}?fields=status,message,country,countryCode,region,regionName,city,zip,lat,lon,timezone,isp,org,as,query`;
    let country;
    let timezone;

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var response = JSON.parse(this.responseText);
            country = response.country;
            timezone = response.timezone;
            if (response.status !== 'success') {
                console.log('query failed: ' + response.message);
                return
            }
        }
    }

    xhr.open('GET', endpoint, true);
    xhr.send();
</script>