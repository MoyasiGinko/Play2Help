<?php

function createConnection($host, $db, $user, $pass) {
    try {
        $conn = new PDO("mysql:host={$host};dbname={$db}", $user, $pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    }
}

$conn = createConnection("sql306.infinityfree.com", "if0_34834355_play2db", "if0_34834355", "zUZME8105P");

$query = "SELECT username, email, GROUP_CONCAT(DISTINCT CASE WHEN table_name = 'users' THEN 'up' WHEN table_name = 'yumm' THEN 'yum' END SEPARATOR ', ') as games, SUM(score) as total_score
          FROM (
              SELECT username, email, score, 'users' as table_name FROM users
              UNION ALL
              SELECT `name`, email, score, 'yumm' as table_name FROM yumm
          ) AS combined_scores
          GROUP BY email
          ORDER BY total_score DESC";

$totalScore = $conn->query($query)->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<!-- renewed simplified version -->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--[endif]-->

<head>
    <meta charset="utf-8" />
    <title>Play2 Help World: Rewards for you && Charities</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-KB9X0NFQ37"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-KB9X0NFQ37');
    </script>
    <!-- Place favicon.ico in the root directory -->
    <link rel="icon" type="image/png" sizes="16x16" href="/images/play2help_logo.webp">
    <meta name="description" content="Our reward programme it's simple and transparent. The more you play, the more rewards, it's that simple! Start playing now." />
    <meta name="keywords" content="free, fun, game, gaming, online gaming, pc game, android game, ios game, rewards, charity, charities" />
    <meta name="MobileOptimized" content="320" />
    <!-- Animation Css -->

    <script src="https://accounts.google.com/gsi/client" async defer></script>
    <script type="text/javascript" src="https://alcdn.msauth.net/lib/1.4.4/js/msal.js" integrity="sha384-fTmwCjhRA6zShZq8Ow5ZkbWwmgp8En46qW6yWpNEkp37MkV50I/V2wjzlEkQ8eWD" crossorigin="anonymous"></script>

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
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- Style CSS -->
    <link href="/css/style.css" rel="stylesheet">
    <!-- Responsive CSS -->
    <link href="/css/responsive.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/css/highscorers.css">
    <link rel="stylesheet" href="/css/custom.css">
    <!-- Signin CSS -->
    <link rel="stylesheet" href="/css/signin.css">

    <!-- Database CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" />

    <style>
        :root {
            --color-primary: #63c000;
        }

        .table,
        th,
        td {
            border: 2px solid var(--white-clr) !important;
            background: rgba(0, 0, 0, 0.4) !important;
            background-repeat: no-repeat !important;
            color: var(--white-clr) !important;
            width: 100% !important;
        }

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

            #jg-widget-play2helpworldwateraid-551,
            #jg-widget-play2helpworldmsfdocswithoutborders-936 {
                display: none;
            }
        }

        /*tooltip Box*/
        .con-tooltip {

            position: relative;
            background: #fff;
            color: #000;

            border-radius: 9px;
            padding: 0 20px;
            margin: 10px;

            display: inline-block;

            transition: all 0.3s ease-in-out;
            cursor: default;

        }

        /*tooltip */
        .tooltip {
            visibility: hidden;
            z-index: 1;
            opacity: .40;

            width: 100%;
            padding: 0px 20px;

            background: #fff;
            color: #000;

            position: absolute;
            top: -140%;
            left: -25%;


            border-radius: 9px;
            font: 16px;

            transform: translateY(9px);
            transition: all 0.3s ease-in-out;

            box-shadow: 0 0 3px rgba(56, 54, 54, 0.86);
        }


        /* tooltip  after*/
        .tooltip::after {
            content: " ";
            width: 0;
            height: 0;

            border-style: solid;
            border-width: 12px 12.5px 0 12.5px;
            border-color: #333 transparent transparent transparent;
            text-align: center !important;
            position: absolute;
            left: 40%;

        }

        .con-tooltip:hover .tooltip {
            visibility: visible;
            transform: translateY(-10px);
            opacity: 1;
            transition: .3s linear;
            animation: odsoky 1s ease-in-out infinite alternate;

        }

        @keyframes odsoky {
            0% {
                transform: translateY(6px);
            }

            100% {
                transform: translateY(1px);
            }

        }

        /*hover ToolTip*/
        .left:hover {
            transform: translateX(-6px);
        }

        .top:hover {
            transform: translateY(-6px);
        }

        .bottom:hover {
            transform: translateY(6px);
        }

        .right:hover {
            transform: translateX(6px);
        }

        #charitiesInline {
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
        }
    </style>
    <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=6303d8657db1160019f426d2&product=sop' async='async'></script>
    <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=6303d355a2413d00197af76a&product=sticky-share-buttons" async="async"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>
    <input type="hidden" name="email" id="email">
    <a href="javascript:" id="return-to-top"><i class="fas fa-arrow-up"></i> <br>top</a>

    <!-- Preloader start -->
    <!--  <div id="preloader">
        <div id="status">
            <div class="status-mes"></div>
        </div>
    </div> -->
    <!-- Preloader end -->

    <div data-scroll='0' class="full_width">

        <div class="container">
            <?php include('navbar.php') ?>
        </div>
        <div id="header-banner"></div>
    </div>

    <!-- slider wrapper end-->
    <!-- process wrapper start-->
    <div data-scroll='1' class="full_width">
        <div class="row items-container bottom-wrapper">
            <p>&nbsp;<br>&nbsp;</p>
        </div>
        <div class="web_pricing_section">
            <div id="charitiesInline">
                <div id="jg-widget-play2helpworldwateraid-551"></div>
                <script>
                    (function() {
                        var id = "jg-widget-play2helpworldwateraid-551",
                            doc = document,
                            pfx = (window.location.toString().indexOf("https") == 0) ? "https" : "http";
                        var el = doc.getElementById(id);
                        if (el) {
                            var js = doc.createElement('script');
                            js.src = pfx + "://widgets.justgiving.com/fundraisingpage/play2helpworldwateraid?enc=ZT1qZy13aWRnZXQtcGxheTJoZWxwd29ybGR3YXRlcmFpZC01NTEmdz00MDAmYj1pbm5lcixkb25hdGUmaWI9dGl0bGUscHJvZ3Jlc3M%3D";
                            el.parentNode.insertBefore(js, el);
                        }
                    })();
                </script>
                <div id="jg-widget-play2helpalzheimerssociety-224"></div>
                <script>
                    (function() {
                        var id = "jg-widget-play2helpalzheimerssociety-224",
                            doc = document,
                            pfx = (window.location.toString().indexOf("https") == 0) ? "https" : "http";
                        var el = doc.getElementById(id);
                        if (el) {
                            var js = doc.createElement('script');
                            js.src = pfx + "://widgets.justgiving.com/fundraisingpage/play2helpalzheimerssociety?enc=ZT1qZy13aWRnZXQtcGxheTJoZWxwYWx6aGVpbWVyc3NvY2lldHktMjI0Jnc9NDAwJmI9aW5uZXIsZG9uYXRlJmliPXRpdGxlLHN1bW1hcnkscHJvZ3Jlc3M%3D";
                            el.parentNode.insertBefore(js, el);
                        }
                    })();
                </script>
                <div id="jg-widget-play2helpworldmsfdocswithoutborders-936"></div>
                <script>
                    (function() {
                        var id = "jg-widget-play2helpworldmsfdocswithoutborders-936",
                            doc = document,
                            pfx = (window.location.toString().indexOf("https") == 0) ? "https" : "http";
                        var el = doc.getElementById(id);
                        if (el) {
                            var js = doc.createElement('script');
                            js.src = pfx + "://widgets.justgiving.com/fundraisingpage/play2helpworldmsfdocswithoutborders?enc=ZT1qZy13aWRnZXQtcGxheTJoZWxwd29ybGRtc2Zkb2Nzd2l0aG91dGJvcmRlcnMtOTM2Jnc9NDAwJmI9aW5uZXIsZG9uYXRlJmliPXRpdGxlLHN1bW1hcnkscHJvZ3Jlc3M%3D";
                            el.parentNode.insertBefore(js, el);
                        }
                    })();
                </script>
            </div>
            <div class="container mt-5">
                <div class="row">
                    <div class="ml-2 web_heading_wraper animated fadeIn my-5" data-animate="fadeIn">
                        <h3>Total scores & Rewards peek &#128064; &#128640;</h3>
                        <p>These are our amazing players scores, see your scores and rewards below:</p>
                    </div>
                    <!-- <div class="col-lg-10 offset-lg-2 col-md-12 col-sm-12">
                    </div> -->
                </div>
                    <div id="collapseFour" class="">
                        <div class="panel-body">
                            <table id="example4" class="table-striped table-bordered" style="width: 100%;/* text-align: center !important; */color: rgb(0, 0, 0) !important;position: relative;table-layout: fixed; background-image: url('images/Play2Help=Charity.png'); background-repeat:no-repeat;">
                                <thead>
                                    <tr>
                                        <th style="width: 20% !important;">Email</th>
                                        <th style="width: 20% !important;">Username</th>
                                        <th style="width: 30% !important;">Games</th>
                                        <th style="width: 20% !important; text-align: center !important;">Total Score</th>
                                        <th style="width: 30% !important;">$Charity</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($totalScore as $row): ?>
                                        <tr>
                                            <td><?php echo htmlspecialchars($row['email']); ?></td>
                                            <td><?php echo htmlspecialchars($row['username']); ?></td>
                                            <td><?php echo htmlspecialchars($row['games']); ?></td>
                                            <td><?php echo htmlspecialchars($row['total_score']); ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            <div data-scroll='4' class="full_width">


<div class="mt-5 container">
    <h2>How Rewards Work</h2>
    <p class="row">
        We aim to make the Rewards programme as simple and transparent as possible. You play fun, free games here and if you choose to join the Rewards programme your game scores on the game leaderboards will be used to calculate your rewards. The more you play, the more rewards, it's that simple! For now, the Rewards will be a fair share of the revenues that the games bring in eg from advertising after costs are deducted which we aim to keep to a minimum. We plan to be 100% transparent at all times with dashboards from well-known independent companies showing how much the $ treasury & cost deductions are at all times plus we will add new ways to boost Treasury over time. You can cash out your rewards on a monthly basis and you will only need to pay cash transfer costs of your selected payment channel eg Paypal. Alternatively, you can save them up to cash out later, donate them to charity or even convert them to 'community ownership tokens' in future - watch this space! We are always looking to improve so do let us know if you have suggestions for making the Rewards programme even better.
    </p>
</div>
</div>

<div id="collapseOne" class="panel-collapse collapse in">
<div class="panel-body" style="background-color: rgba(255,255, 255,0.5);">

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter" style="position: relative; left: 40%; margin-top: 1.5%">
        Get your rewards
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Choose Payout Method</h5>


                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab5" data-toggle="tab">Payout for Yourself</a></li>
                        <li class="active"><a href="#tab6" data-toggle="tab">Donate to Charity</a></li>
                    </ul>
                    <div class="tab-content">

                        <div class="tab-pane" id="tab5">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent=".tab-pane" href="#collapseTwo">
                                            Payout for Yourself
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <form action="highscorers.php" method="post">
                                            <input type="hidden" name="method" value="personal-payout">
                                            <div class="web_contect_form1 mt-4">
                                                <input type="text" name="name" placeholder="Enter your Name" class="require">
                                            </div>
                                            <div class="web_contect_form1">
                                                <input type="email" name="email" placeholder="Enter Your Email (preferably same as score table)" class="require">
                                            </div>

                                            <span style="color: red;font-size: 14px;">* By clicking submit - your scores will be set to zero and a payout request will be sent to the administrator!</span>
                                            <div class="web_contect_btn" style="margin-top:20px !important">
                                                <button type="submit" name="self-payout-submit" class="submitForm">submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="tab6">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent=".tab-pane" href="#collapseTwo">
                                            Donate to Charity
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <form action="highscorers.php" method="post">
                                            <input type="hidden" name="method" value="donate-to-charity">
                                            <input type="text" class="form-control mb-4 mt-4" name="name" placeholder="Enter your Name" class="require">

                                            <input type="email" class="form-control mt-4 mb-4" name="email" placeholder="Enter Your Email (preferably same as score table)" class="require">

                                            <div class="web_contect_form1">
                                                <select class="form-control mb-4 mt-4" name="charity_name" aria-placeholder="Select a Charity" id="exampleFormControlSelect1">
                                                    <option value="https://www.justgiving.com/fundraising/play2helpworldwwf">World Wildlife Fund - (www.worldwildlife.org)</option>
                                                    <option value="https://www.justgiving.com/fundraising/play2helpworldwateraid">WaterAid - (www.wateraid.org)</option>
                                                    <option value="https://www.justgiving.com/fundraising/play2helpworldmsfdocswithoutborders">Doctors Without Borders - (www.msf.org)</option>

                                                </select>
                                            </div>

                                            <span style="color: red;font-size: 14px;">* By clicking submit - your scores will be set to zero and a payout request will be sent to the administrator!</span>
                                            <div class="web_contect_btn" style="margin-top:0px !important">
                                                <button type="submit" name="donate-submit" class="submitForm">submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- <?php
            $users = $conn->query("SELECT * FROM users ORDER BY score DESC")->fetchAll(PDO::FETCH_ASSOC);
            ?>
                -->
</div>
</div>
</div>
</div>


</div>

<!--</div>-->

</div>

</div>


<!--</div>-->

</div>
<div data-scroll='4' class="full_width">
<!--location wrapper start-->
<div class="web_location_wrapper full_width">
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-12 abt_section">
<div class="engage-hub-form-embed" id="eh_form_5127023530344448" data-id="5127023530344448"> </div>
</div>

</div>

</div>
</div>
</div>
<!--location wrapper end-->

<!--partners wrapper end-->
<?php include('footer.php') ?>

</div>
<!-- Sign in popup -->

<?php include('popup.php') ?>
<!-- Sign in popup ends-->


<!-- footer wrapper end-->
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
<!-- Signin script ends -->


<!-- Script for Database -->

<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/rowreorder/1.2.8/js/dataTables.rowReorder.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.8/css/rowReorder.dataTables.min.css">

<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.dataTables.min.css">

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
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
activity_name: "Checking Highscores",
website: 'Play2Help'
},
success: function(response) {
console.log("Added Activity Log");
}

}).done(function(data) {
console.log('complete');
});
}
});
</script>
<script>
$(document).ready(function() {
$('#example').DataTable({
"ordering": false,
info: false,
rowReorder: {
selector: 'td:nth-child(2)'
},
responsive: true
});

});

$(document).ready(function() {
$('#example2').DataTable({
"ordering": false,
info: false,

rowReorder: {
selector: 'td:nth-child(2)'
},
responsive: true
});
});

$(document).ready(function() {
$('#example3').DataTable({
"ordering": false,
rowReorder: {
selector: 'td:nth-child(2)'
},
responsive: true
});
});

$(document).ready(function() {
$('#example4').DataTable({
responsive: true,
order: [
[0, 'desc']
]
});
});

$(document).ready(function() {
$('#example5').DataTable({
"ordering": false,
rowReorder: {
selector: 'td:nth-child(2)'
},
responsive: true
});
});
</script>
<!-- 
<script>
let leaderboardData;
let userData;

const formData = new FormData();
const fileField = document.querySelector('input[type="file"]');

formData.append('output_type', 'json');
formData.append('game_id', "6445513429745664");
formData.append('interval', "alltime");


fetch('https://marketjs-vas.appspot.com/api/leaderboard_entry/read', {
method: 'POST',
body: formData
})
.then(response => response.json())
.then(result => {
leaderboardData = result.data;

console.log('Success:', leaderboardData);
})
.catch(error => {
console.error('Error:', error);
});

const userFormData = new FormData();

userFormData.append('game_id', "6445513429745664");
userFormData.append('secret_key', "12345");
userFormData.append('date', "07-01-2022");

fetch('https://marketjs-vas.appspot.com/api/leaderboard_entry/read', {
method: 'POST',
body: userFormData
})
.then(response => response.json())
.then(result => {
userData = result.data;

console.log('Success:', userData);
})
.catch(error => {
console.error('Error:', error);
});
</script> -->

</body>
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



</html>