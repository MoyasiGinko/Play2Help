<?php

$servername = "sql306.infinityfree.com";
$username = "if0_34834355";
$password = "zUZME8105P";
$db = "if0_34834355_play2db";
/*Create connection*/

try {
    $conn = new PDO("mysql:host={$servername};dbname={$db}", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOEXCEPTION $e) {
    $e->getMessage();
}


$query = "SELECT DISTINCT Date, MAX(Impressions) AS Impressions, MAX(Profit) AS Profit, MAX(CPM) AS CPM FROM if0_34834355_play2db.revenue_partners
GROUP BY Date ORDER BY Date DESC";

$revenues = $conn->query($query)->fetchAll(PDO::FETCH_ASSOC);


?>
<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--[endif]-->

<head>
    <meta charset="utf-8" />
    <title>What, why and how Play2help works</title>
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
    <link rel="icon" type="image/png" sizes="16x16" href="/images/play2help_image.webp">
    <meta name="description" content="Play2Help World is a fab new place online where you can play fun, free games,
         via almost any device you choose. You can donate your rewards and $$$ to major charities." />
    <meta name="keywords" content="free, fun, game, gaming, online gaming, pc game, android game, ios game, rewards, charity, charities" />
    <meta name="author" content="Play2help Maurice Flynn" />
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
    <script src="https://accounts.google.com/gsi/client" async defer></script>
    <script type="text/javascript" src="https://alcdn.msauth.net/lib/1.4.4/js/msal.js" integrity="sha384-fTmwCjhRA6zShZq8Ow5ZkbWwmgp8En46qW6yWpNEkp37MkV50I/V2wjzlEkQ8eWD" crossorigin="anonymous"></script>
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
    <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=6303d355a2413d00197af76a&product=sticky-share-buttons" async="async"></script>
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
    <!-- slider wrapper end-->
    <div data-scroll='1' class="full_width">
        <!-- Page Content here -->
        <div class="container">
            <div class="row items-container bottom-wrapper">
                <p>&nbsp;<br>&nbsp;</p>
            </div>
            <div class="row pt-5">
                <h1>What Is Play2World?</h1>
                <p class="section-description">
                    Play2World is a fab new place online where you can play fun, free games, via almost any device you choose. On top of that you can claim rewards for yourself and grab other benefits too. On Play2WorkWorld.com it's all about the work and the $$$ you earn this for yourself. On Play2HelpWorld.com you can donate your rewards and $$$ to major charities. On Play2HealthWorld.com you grab rewards and also get help with your healthy lifestyle. On Play2LearnWorld.com you are earning and learning. And on Play2LiveWellWorld.com grab your rewards while improving your lived environment. The more you play the more rewards you earn - it's super simple, fun and always free!
                </p>
            </div>
            <div class="row items-container bottom-wrapper">
                <p>&nbsp;<br>&nbsp;</p>
            </div>
            <div class="row">
                <h2>How Do Rewards Work</h2>
                <p class="section-description">
                    We aim to make the Rewards programme as simple and transparent as possible. You play fun, free games here and if you choose to join the Rewards programme your game scores on the game score leaderboards will be used to calculate your rewards. The more you play, the more rewards, it's that simple! For now the Rewards will be a fair share of the revenues that the games bring in, after costs are deducted, which we aim to keep to a minimum. We plan to be 100% transparent at all times with dashboards from well known independent companies showing how much the revenues & cost deductions are. Rewards payments will be made on a monthly basis via your selected payment channels eg Paypal. You can also donate your rewards to top charities. We list all the charities on the website with direct links to them there via a 100% independent charity donation management company. That way you can click and verify all the donations that we are able to make! We are always looking to improve so do let us know if you have suggestions for making the Rewards programme even better.
                </p>
            </div>
            <div class="row items-container bottom-wrapper">
                <p>&nbsp;<br>&nbsp;</p>
            </div>
            <div class="row" style="padding-bottom: 10px;">
                <h2>Why Do We Do This</h2>
                <p class="section-description">
                    Given all that's going on in the world today we think it's important to give back and help others, especially those less fortunate. We also love fun, free casual games that we can play anytime on almost any device! So one day we decided to combine those two things and created Play2.Help World. We are a small community of friendly folk who really believe in this initiative and are working passionately to make it a reality. We welcome all help and in fact you can see on our website different areas where more people can help support this in various ways. So if you feel the same jump in and play the games then contact us on social media to find out more!
                </p>
            </div>
            <div class="row items-container bottom-wrapper">
                <p>&nbsp;<br>&nbsp;</p>
            </div>

            <div class="row">
                <table id="example4" class="table-striped table-bordered" style="width: 100%;/* text-align: center !important; */color: #fff !important;position: relative;table-layout: fixed; background-image: url('images/Play2Help=Charity.png'); background-repeat:no-repeat;">
                    <thead>
                        <tr>
                            <th style="width: 20% !important;">Date</th>
                            <th style="width: 20% !important;">Impressions</th>
                            <th>Profit</th>
                            <th style="width: 10% !important;">CPM</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($revenues as $revenue) { ?>
                            <tr>
                                <td><?php echo $revenue['Date'] ?></td>
                                <td><?php echo $revenue['Impressions'] ?></td>
                                <td><?php echo $revenue['Profit'] ?></td>
                                <td><?php echo $revenue['CPM'] ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>

                </table>
            </div>
        </div>



    </div>
    <!-- Page Content ends -->
    </div>

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <!-- Signin script -->
    <script src="js/signin.js"></script>

    <script type="text/javascript" src="js/authConfig.js"></script>
    <script type="text/javascript" src="js/graphConfig.js"></script>
    <script type="text/javascript" src="js/ui.js"></script>

    <!-- replace next line with authRedirect.js if you would like to use the redirect flow -->
    <!-- <script type="text/javascript" src="./authRedirect.js"></script>   -->
    <script type="text/javascript" src="/js/authPopup.js"></script>
    <script src="https://unpkg.com/jwt-decode/build/jwt-decode.js"></script>

    <script type="text/javascript" src=/js/graph.js"></script>
    <script src="/google.js"></script>
    <script src="/facebook.js"></script>


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
                        activity_name: "Checking About Us",
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
        $(document).ready(function() {
            $('#example4').DataTable({
                "ordering": false,
                info: false,
                rowReorder: {
                    selector: 'td:nth-child(2)'
                },
                responsive: true
            });

        });
    </script>
    <!-- Signin script ends -->
</body>

</html>