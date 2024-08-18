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


$host = "sql306.infinityfree.com"; // Host name 
$dbuser = "if0_34834355"; // Mysql database username 
$dbpass = "zUZME8105P"; // Mysql database password 
$db2 = "scoreboard"; // Database table

try {
    $db2 = new PDO("mysql:host={$host};dbname={$db2}", $dbuser, $dbpass);
    $db2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOEXCEPTION $e) {
    $e->getMessage();
}

// $host = "sql306.infinityfree.com"; // Host name 
// $dbuser = "if0_34834355"; // Mysql database username 
// $dbpass = "zUZME8105P"; // Mysql database password 
// $db3 = "popgame"; // Database name *prob table and not db, review later with old dev***AG

// try {
//     $db3 = new PDO("mysql:host={$host};dbname={$db3}", $dbuser, $dbpass);
//     $db3->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// } catch (PDOEXCEPTION $e) {
//     $e->getMessage();
// }

$servername = "sql306.infinityfree.com";
$username = "if0_34834355";
$password = "zUZME8105P";
$dbBank = "if0_34834355_play2db";
/*Create connection*/

try {
    $dbBank = new PDO("mysql:host={$servername};dbname={$dbBank}", $username, $password);
    $dbBank->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOEXCEPTION $e) {
    $e->getMessage();
}

// $query = "SELECT DISTINCT * FROM play2helpdb.users JOIN yumplay2helpdb.users ON play2helpdb.users.email = yumplay2helpdb.users.email";
// $totalScore = $db->query($query)->fetchAll(PDO::FETCH_ASSOC);

// $query = "SELECT game,email, SUM(score) as score, username, geolocation, start_date FROM unionization GROUP BY email ORDER BY score DESC";

$query = "SELECT SUM(up) as up, SUM(yumm) as yumm, game, email, SUM(score) as score
FROM
(
    (SELECT if0_34834355_play2db.users.score, if0_34834355_play2db.users.game, if0_34834355_play2db.users.email FROM if0_34834355_play2db.users)
    UNION
    (SELECT if0_34834355_play2db.yumm.up, if0_34834355_play2db.yumm.yumm, if0_34834355_play2db.yumm.social, if0_34834355_play2db.yumm.game, if0_34834355_play2db.yumm.email, if0_34834355_play2db.yumm.score, if0_34834355_play2db.yumm.name, if0_34834355_play2db.yumm.geolocation, if0_34834355_play2db.yumm.start_date, if0_34834355_play2db.yumm.ranks, if0_34834355_play2db.yumm.team FROM if0_34834355_play2db.yumm)
    -- (SELECT if0_34834355_play2db.users.up, if0_34834355_play2db.users.yumm, if0_34834355_play2db.users.social, if0_34834355_play2db.users.game, if0_34834355_play2db.users.email, if0_34834355_play2db.users.score, if0_34834355_play2db.users.username, if0_34834355_play2db.users.geolocation, if0_34834355_play2db.users.start_date, if0_34834355_play2db.users.ranks, if0_34834355_play2db.users.team FROM if0_34834355_play2db.users)
    -- UNION
    -- (SELECT if0_34834355_play2db.yumm.up, if0_34834355_play2db.yumm.yumm, if0_34834355_play2db.yumm.social, if0_34834355_play2db.yumm.game, if0_34834355_play2db.yumm.email, if0_34834355_play2db.yumm.score, if0_34834355_play2db.yumm.name, if0_34834355_play2db.yumm.geolocation, if0_34834355_play2db.yumm.start_date, if0_34834355_play2db.yumm.ranks, if0_34834355_play2db.yumm.team FROM if0_34834355_play2db.yumm)
   -- >>>>>>>> Old code for other communities bought together <<<<<<<<
    -- UNION
    -- (SELECT play2health.users.up, play2health.users.yumm, play2health.users.social, play2health.users.game, play2health.users.email, play2health.users.score, play2health.users.username, play2health.users.geolocation, play2health.users.start_date, play2health.users.ranks, play2health.users.team FROM play2health.users)
    -- UNION
    -- (SELECT play2health.yumm.up, play2health.yumm.yumm, play2health.yumm.social, play2health.yumm.game, play2health.yumm.email, play2health.yumm.score, play2health.yumm.name, play2health.yumm.geolocation, play2health.yumm.start_date, play2health.yum.ranks, play2health.yum.team FROM play2health.yum)
    -- UNION
    -- (SELECT play2learn.users.up, play2learn.users.yum, play2learn.users.social, play2learn.users.game, play2learn.users.email, play2learn.users.score, play2learn.users.username, play2learn.users.geolocation, play2learn.users.start_date, play2learn.users.ranks, play2learn.users.team FROM play2learn.users)
    -- UNION
    -- (SELECT play2learn.yum.up, play2learn.yum.yum, play2learn.yumm.social, play2learn.yum.game, play2learn.yumm.email, play2learn.yumm.score, play2learn.yumm.name, play2learn.yum.geolocation, play2learn.yum.start_date, play2learn.yum.ranks, play2learn.yum.team FROM play2learn.yum)
    -- UNION
    -- (SELECT play2livedb.users.up, play2livedb.users.yumm, play2livedb.users.social, play2livedb.users.game, play2livedb.users.email, play2livedb.users.score, play2livedb.users.username, play2livedb.users.geolocation, play2livedb.users.start_date, play2livedb.users.ranks, play2livedb.users.team FROM play2livedb.users)
    -- UNION
    -- (SELECT play2livedb.yum.up, play2livedb.yumm.yumm, play2livedb.yum.social, play2livedb.yum.game, play2livedb.yum.email, play2livedb.yum.score, play2livedb.yum.name, play2livedb.yum.geolocation, play2livedb.yum.start_date, play2livedb.yum.ranks, play2livedb.yum.team FROM play2livedb.yum)
    -- UNION
    -- (SELECT play2workdb.users.up, play2workdb.users.yum, play2workdb.users.social, play2workdb.users.game, play2workdb.users.email, play2workdb.users.score, play2workdb.users.username, play2workdb.users.geolocation, play2workdb.users.start_date, play2workdb.users.ranks, play2workdb.users.team FROM play2workdb.users)
    -- UNION
    -- (SELECT play2workdb.yumm.up, play2workdb.yum.yum, play2workdb.yumm.social, play2workdb.yum.game, play2workdb.yum.email, play2workdb.yum.score, play2workdb.yum.name, play2workdb.yum.geolocation, play2workdb.yum.start_date, play2workdb.yum.ranks, play2workdb.yum.team FROM play2workdb.yum)
    --UNION
    --(SELECT popgame.users.up, popgame.users.yumm, popgame.users.social, popgame.users.game, popgame.users.email, popgame.users.score, popgame.users.username, popgame.users.geolocation, popgame.users.start_date, popgame.users.ranks, popgame.users.team FROM popgame.users)
    ) AS tt
GROUP BY email ORDER BY score DESC";

$totalScore = $conn->query($query)->fetchAll(PDO::FETCH_ASSOC);

$sumOfScore = 0;

foreach ($totalScore as $ttlscr) {
    $sumOfScore += $ttlscr['score'];
}

$rewards = $conn->query("SELECT * from if0_34834355_play2db.reward_formula")->fetchAll(PDO::FETCH_ASSOC);


$memberQuery = "SELECT * FROM if0_34834355_play2db.workers";

$members = $conn->query($memberQuery)->fetchAll(PDO::FETCH_ASSOC);

$game = '';
// $website = '';

if (isset($_POST['submit'])) {
    $game = ($_POST['game'] != 'Select Game') ? $_POST['game'] : '';
    // $website = ($_POST['website'] != 'Select Website') ? $_POST['website'] : '';
}

if (isset($_POST['update'])) {
    $email = $_POST['email'];
    $confirmEmail = $_POST['confirmEmail'];

    if ($email == $confirmEmail) {

        $social = $_POST['social'];

        $checkInUP = $conn->prepare('SELECT *
            FROM if0_34834355_play2db.users
            WHERE email = :email');
        $checkInUP->bindParam('email', $email);

        $checkInUP->execute();

        $checkInUP = $checkInUP->fetchAll();

        if (count($checkInUP) > 0) {
            $newSql = "UPDATE if0_34834355_play2db.users SET social = '$social' WHERE email = '$email'";

            $newStmt = $conn->prepare($newSql);
            $newStmt->execute();
        }

        // UP Check (Work)
        // $checkInUP = $conn->prepare('SELECT *
        //     FROM play2workdb.users
        //     WHERE email = :email');
        // $checkInUP->bindParam('email', $email);

        // $checkInUP->execute();

        // $checkInUP = $checkInUP->fetchAll();

        // if (count($checkInUP) > 0) {
        //     $newSql = "UPDATE play2workdb.users SET social = '$social' WHERE email = '$email'";

        //     $newStmt = $conn->prepare($newSql);
        //     $newStmt->execute();
        // }

        // UP Check (Health)
        // $checkInUP = $conn->prepare('SELECT *
        //     FROM play2health.users
        //     WHERE email = :email');
        // $checkInUP->bindParam('email', $email);

        // $checkInUP->execute();

        // $checkInUP = $checkInUP->fetchAll();

        // if (count($checkInUP) > 0) {
        //     $newSql = "UPDATE play2health.users SET social = '$social' WHERE email = '$email'";

        //     $newStmt = $conn->prepare($newSql);
        //     $newStmt->execute();
        // }

        // UP Check (Live)
        // $checkInUP = $conn->prepare('SELECT *
        //     FROM play2livedb.users
        //     WHERE email = :email');
        // $checkInUP->bindParam('email', $email);

        // $checkInUP->execute();

        // $checkInUP = $checkInUP->fetchAll();

        // if (count($checkInUP) > 0) {
        //     $newSql = "UPDATE play2livedb.users SET social = '$social' WHERE email = '$email'";

        //     $newStmt = $conn->prepare($newSql);
        //     $newStmt->execute();
        // }

        // UP Check (Learn)
        // $checkInUP = $conn->prepare('SELECT *
        //     FROM play2learn.users
        //     WHERE email = :email');
        // $checkInUP->bindParam('email', $email);

        // $checkInUP->execute();

        // $checkInUP = $checkInUP->fetchAll();

        // if (count($checkInUP) > 0) {
        //     $newSql = "UPDATE play2learn.users SET social = '$social' WHERE email = '$email'";

        //     $newStmt = $conn->prepare($newSql);
        //     $newStmt->execute();
        // }

        // POP Check
        // $checkInPOP = $$db3->prepare('SELECT *
        //     FROM users
        //     WHERE email = :email');
        // $checkInPOP->bindParam('email', $email);

        // $checkInPOP->execute();

        // $checkInPOP = $checkInPOP->fetchAll();

        // if (count($checkInPOP) > 0) {
        //     $newSql = "UPDATE users SET social = '$social' WHERE email = '$email'";

        //     $newStmt = $db3->prepare($newSql);
        //     $newStmt->execute();
        // }

        // YUM Check (Help)
        $checkInYUM = $conn->prepare('SELECT *
            FROM if0_34834355_play2db.yumm
            WHERE email = :email');
        $checkInYUM->bindParam('email', $email);

        $checkInYUM->execute();

        $checkInYUM = $checkInYUM->fetchAll();

        if (count($checkInYUM) > 0) {
            $newSql = "UPDATE if0_34834355_play2db.yumm SET social = '$social' WHERE email = '$email'";

            $newStmt = $conn->prepare($newSql);
            $newStmt->execute();
        }

        // YUM Check (Work)
        // $checkInYUM = $db2->prepare('SELECT *
        //     FROM play2workdb.yum
        //     WHERE email = :email');
        // $checkInYUM->bindParam('email', $email);

        // $checkInYUM->execute();

        // $checkInYUM = $checkInYUM->fetchAll();

        // if (count($checkInYUM) > 0) {
        //     $newSql = "UPDATE play2workdb.yum SET social = '$social' WHERE email = '$email'";

        //     $newStmt = $conn->prepare($newSql);
        //     $newStmt->execute();
        // }

        // // YUM Check (Health)
        // $checkInYUM = $db2->prepare('SELECT *
        //     FROM play2health.yum
        //     WHERE email = :email');
        // $checkInYUM->bindParam('email', $email);

        // $checkInYUM->execute();

        // $checkInYUM = $checkInYUM->fetchAll();

        // if (count($checkInYUM) > 0) {
        //     $newSql = "UPDATE play2health.yum SET social = '$social' WHERE email = '$email'";

        //     $newStmt = $conn->prepare($newSql);
        //     $newStmt->execute();
        // }

        // // YUM Check (Live)
        // $checkInYUM = $conn->prepare('SELECT *
        //     FROM play2livedb.yum
        //     WHERE email = :email');
        // $checkInYUM->bindParam('email', $email);

        // $checkInYUM->execute();

        // $checkInYUM = $checkInYUM->fetchAll();

        // if (count($checkInYUM) > 0) {
        //     $newSql = "UPDATE play2livedb.yum SET social = '$social' WHERE email = '$email'";

        //     $newStmt = $conn->prepare($newSql);
        //     $newStmt->execute();
        // }

        // // YUM Check (Learn)
        // $checkInYUM = $conn->prepare('SELECT *
        //     FROM play2learn.yum
        //     WHERE email = :email');
        // $checkInYUM->bindParam('email', $email);

        // $checkInYUM->execute();

        // $checkInYUM = $checkInYUM->fetchAll();

        // if (count($checkInYUM) > 0) {
        //     $newSql = "UPDATE play2learn.yum SET social = '$social' WHERE email = '$email'";

        //     $newStmt = $conn->prepare($newSql);
        //     $newStmt->execute();
        // }

        echo "<script>alert('Successfully updated!')</script>";
        echo "<script>location.replace('highscorers.php');</script>";
    } else {
        echo "<script>alert('Email you have entered - does NOT match the email associated with this account.')</script>";
        echo "<script>location.replace('highscorers.php');</script>";
    }
}

if (isset($_POST['donate-submit'])) {
    $method = $_POST['method'];
    $charity_name = $_POST['charity_name'];
    $email = $_POST['email'];
    $name = $_POST['name'];

    $upFlagHelp = 0;
    $upFlagWork = 0;
    $upFlagLive = 0;
    $upFlagHealth = 0;
    $upFlagLearn = 9;

    $yumFlagHelp = 0;
    $yumFlagWork = 0;
    $yumFlagLive = 0;
    $yumFlagHealth = 0;
    $yumFlagLearn = 0;

    // $popFlag = 0;
    $count = 0;

    $upScore = 0;
    $yumScore = 0;
    // $popScore = 0;

    $checkUser = $conn->prepare('SELECT *
            FROM payouts
            WHERE email = :email');
    $checkUser->bindParam('email', $email);

    $checkUser->execute();

    $checkUser = $checkUser->fetchAll();

    if (count($checkUser) > 0) {
        echo "<script>alert('You have already cashed out recently - please try again later.')</script>";
        echo "<script>location.replace('highscorers.php');</script>";
    } else {

        // UP Check (Help)
        $checkInUP = $conn->prepare('SELECT *
            FROM if0_34834355_play2db.users
            WHERE email = :email');
        $checkInUP->bindParam('email', $email);

        $checkInUP->execute();

        $checkInUP = $checkInUP->fetchAll();

        if (count($checkInUP) > 0) {
            $upFlagHelp = 1;
            $upScore += $checkInUP[0]['score'];
        }

        // UP Check (Work)
        // $checkInUP = $conn->prepare('SELECT *
        //     FROM play2workdb.users
        //     WHERE email = :email');
        // $checkInUP->bindParam('email', $email);

        // $checkInUP->execute();

        // $checkInUP = $checkInUP->fetchAll();

        // if (count($checkInUP) > 0) {
        //     $upFlagWork = 1;
        //     $upScore += $checkInUP[0]['score'];
        // }

        // // UP Check (Health)
        // $checkInUP = $conn->prepare('SELECT *
        //     FROM play2health.users
        //     WHERE email = :email');
        // $checkInUP->bindParam('email', $email);

        // $checkInUP->execute();

        // $checkInUP = $checkInUP->fetchAll();

        // if (count($checkInUP) > 0) {
        //     $upFlagHealth = 1;
        //     $upScore += $checkInUP[0]['score'];
        // }

        // // UP Check (Live)
        // $checkInUP = $conn->prepare('SELECT *
        //     FROM play2livedb.users
        //     WHERE email = :email');
        // $checkInUP->bindParam('email', $email);

        // $checkInUP->execute();

        // $checkInUP = $checkInUP->fetchAll();

        // if (count($checkInUP) > 0) {
        //     $upFlagLive = 1;
        //     $upScore += $checkInUP[0]['score'];
        // }

        // // UP Check (Learn)
        // $checkInUP = $conn->prepare('SELECT *
        //     FROM play2learn.users
        //     WHERE email = :email');
        // $checkInUP->bindParam('email', $email);

        // $checkInUP->execute();

        // $checkInUP = $checkInUP->fetchAll();

        // if (count($checkInUP) > 0) {
        //     $upFlagLearn = 1;
        //     $upScore += $checkInUP[0]['score'];
        // }

        // POP Check
        // $checkInPOP = $$db3->prepare('SELECT *
        //     FROM users
        //     WHERE email = :email');
        // $checkInPOP->bindParam('email', $email);

        // $checkInPOP->execute();

        // $checkInPOP = $checkInPOP->fetchAll();

        // if (count($checkInPOP) > 0) {
        //     $popFlag = 1;
        //     $popScore = $checkInPOP[0]['score'];
        // }

        // YUM Check (Help)
        $checkInYUM = $conn->prepare('SELECT *
            FROM if0_34834355_play2db.yumm
            WHERE email = :email');
        $checkInYUM->bindParam('email', $email);

        $checkInYUM->execute();

        $checkInYUM = $checkInYUM->fetchAll();

        if (count($checkInYUM) > 0) {
            $yumFlagHelp = 1;
            $yumScore += $checkInYUM[0]['score'];
        }

        // YUM Check (Work)
        // $checkInYUM = $conn->prepare('SELECT *
        //     FROM play2workdb.yum
        //     WHERE email = :email');
        // $checkInYUM->bindParam('email', $email);

        // $checkInYUM->execute();

        // $checkInYUM = $checkInYUM->fetchAll();

        // if (count($checkInYUM) > 0) {
        //     $yumFlagWork = 1;
        //     $yumScore += $checkInYUM[0]['score'];
        // }

        // // YUM Check (Health)
        // $checkInYUM = $conn->prepare('SELECT *
        //     FROM play2health.yum
        //     WHERE email = :email');
        // $checkInYUM->bindParam('email', $email);

        // $checkInYUM->execute();

        // $checkInYUM = $checkInYUM->fetchAll();

        // if (count($checkInYUM) > 0) {
        //     $yumFlagHealth = 1;
        //     $yumScore += $checkInYUM[0]['score'];
        // }

        // // YUM Check (Live)
        // $checkInYUM = $conn->prepare('SELECT *
        //     FROM play2livedb.yum
        //     WHERE email = :email');
        // $checkInYUM->bindParam('email', $email);

        // $checkInYUM->execute();

        // $checkInYUM = $checkInYUM->fetchAll();

        // if (count($checkInYUM) > 0) {
        //     $yumFlagLive = 1;
        //     $yumScore += $checkInYUM[0]['score'];
        // }

        // // YUM Check (Learn)
        // $checkInYUM = $conn->prepare('SELECT *
        //     FROM play2learn.yum
        //     WHERE email = :email');
        // $checkInYUM->bindParam('email', $email);

        // $checkInYUM->execute();

        // $checkInYUM = $checkInYUM->fetchAll();

        // if (count($checkInYUM) > 0) {
        //     $yumFlagLearn = 1;
        //     $yumScore += $checkInYUM[0]['score'];
        // }


        // $totalScore = $upScore + $yumScore + $popScore;
        $totalScore = $upScore + $yumScore;

        $bankBalance = $conn->prepare('SELECT *
            FROM bank');

        $bankBalance->execute();

        $bankBalance = $bankBalance->fetchAll();

        $amount = ($bankBalance[0]['balance'] * $totalScore) / $sumOfScore;

        $finalBankBalance = $bankBalance[0]['balance'] - $amount;

        if ($amount > 8.00 && $amount < $bankBalance[0]['balance']) {

            $data = [
                'email' => $email,
                'method' => $method,
                'charity_name' => $charity_name,
                'score' => $totalScore,
                'name' => $name
            ];

            $data2 = [
                'email' => $email,
                'method' => $method,
                'charity_name' => $charity_name,
                'amount' => $amount,
                'name' => $name
            ];

            // 4,087,435

            $sql = "INSERT INTO if0_34834355_play2db.payouts (email, method, charity_name, score, name) VALUES (:email, :method, :charity_name, :score, :name)";
            $stmt = $conn->prepare($sql)->execute($data);

            // Checking if user exists in Payout History
            $checkPayout = $conn->prepare('SELECT *
            FROM payout_history
            WHERE email = :email');
            $checkPayout->bindParam('email', $email);

            $checkPayout->execute();

            $checkPayout = $checkPayout->fetchAll();

            // If he does, update him. Else, insert him.

            if (count($checkPayout) > 0) {
                $oldAmount = $checkPayout[0]['amount'];
                $newAmount = $oldAmount + $amount;

                $newSql = "UPDATE payout_history SET amount = $newAmount WHERE email = '$email'";

                $newStmt = $conn->prepare($newSql);
                $newStmt->execute();
            } else {
                $sql2 = "INSERT INTO payout_history (email, method, charity_name, amount, name) VALUES (:email, :method, :charity_name, :amount, :name)";
                $stmt2 = $conn->prepare($sql2)->execute($data2);
            }

            if ($upFlagHelp == 1) {
                $data = [
                    'score' => 0,
                    'email' => $email
                ];
                $sql = "UPDATE if0_34834355_play2db.users SET score = :score WHERE email = :email";
                $stmt = $conn->prepare($sql);
                $stmt->execute($data);
            }

            // if ($upFlagWork == 1) {
            //     $data = [
            //         'score' => 0,
            //         'email' => $email
            //     ];
            //     $sql = "UPDATE if0_34834355_play2db.users SET score = :score WHERE email = :email";
            //     $stmt = $conn->prepare($sql);
            //     $stmt->execute($data);
            // }

            // if ($upFlagHealth == 1) {
            //     $data = [
            //         'score' => 0,
            //         'email' => $email
            //     ];
            //     $sql = "UPDATE play2health.users SET score = :score WHERE email = :email";
            //     $stmt = $conn->prepare($sql);
            //     $stmt->execute($data);
            // }

            // if ($upFlagLive == 1) {
            //     $data = [
            //         'score' => 0,
            //         'email' => $email
            //     ];
            //     $sql = "UPDATE play2livedb.users SET score = :score WHERE email = :email";
            //     $stmt = $conn->prepare($sql);
            //     $stmt->execute($data);
            // }

            // if ($upFlagLearn == 1) {
            //     $data = [
            //         'score' => 0,
            //         'email' => $email
            //     ];
            //     $sql = "UPDATE play2learn.users SET score = :score WHERE email = :email";
            //     $stmt = $conn->prepare($sql);
            //     $stmt->execute($data);
            // }

            if ($yumFlagHelp == 1) {
                $data = [
                    'score' => 0,
                    'email' => $email
                ];
                $sql = "UPDATE play2health.yumm SET score = :score WHERE email = :email";
                $stmt = $conn->prepare($sql);
                $stmt->execute($data);
            }

            // if ($yumFlagWork == 1) {
            //     $data = [
            //         'score' => 0,
            //         'email' => $email
            //     ];
            //     $sql = "UPDATE play2workdb.yumm SET score = :score WHERE email = :email";
            //     $stmt = $conn->prepare($sql);
            //     $stmt->execute($data);
            // }
            // if ($yumFlagLive == 1) {
            //     $data = [
            //         'score' => 0,
            //         'email' => $email
            //     ];
            //     $sql = "UPDATE play2livedb.yumm SET score = :score WHERE email = :email";
            //     $stmt = $conn->prepare($sql);
            //     $stmt->execute($data);
            // }
            // if ($yumFlagHealth == 1) {
            //     $data = [
            //         'score' => 0,
            //         'email' => $email
            //     ];
            //     $sql = "UPDATE play2health.yumm SET score = :score WHERE email = :email";
            //     $stmt = $conn->prepare($sql);
            //     $stmt->execute($data);
            // }
            // if ($yumFlagLearn == 1) {
            //     $data = [
            //         'score' => 0,
            //         'email' => $email
            //     ];
            //     $sql = "UPDATE play2learn.yumm SET score = :score WHERE email = :email";
            //     $stmt = $conn->prepare($sql);
            //     $stmt->execute($data);
            // }


            // if ($popFlag == 1) {
            //     $data = [
            //         'score' => 0,
            //         'email' => $email
            //     ];
            //     $sql = "UPDATE users SET score = :score WHERE email = :email";
            //     $stmt = $$db3->prepare($sql);
            //     $stmt->execute($data);
            // }

            $data = [
                'balance' => $finalBankBalance
            ];
            $sql = "UPDATE bank SET balance = :balance WHERE id = 1";
            $stmt = $dbBank->prepare($sql);
            $stmt->execute($data);

            echo "<script>alert('Your donation request has been forwarded! Thank you for donating!');</script>";
            echo "<script>location.replace('highscorers.php');</script>";
        } else {
            echo "<script>alert('You must have a minimum amount of $8 to donate!');</script>";
            echo "<script>location.replace('highscorers.php');</script>";
        }
    }
}


if (isset($_POST['self-payout-submit'])) {
    $method = $_POST['method'];
    $email = $_POST['email'];
    $name = $_POST['name'];

    $upFlagHelp = 0;
    $upFlagWork = 0;
    $upFlagLive = 0;
    $upFlagHealth = 0;
    $upFlagLearn = 9;

    $yumFlagHelp = 0;
    $yumFlagWork = 0;
    $yumFlagLive = 0;
    $yumFlagHealth = 0;
    $yumFlagLearn = 0;

    $popFlag = 0;
    $count = 0;

    $upScore = 0;
    $yumScore = 0;
    $popScore = 0;

    $checkUser = $conn->prepare('SELECT *
            FROM payouts
            WHERE email = :email');
    $checkUser->bindParam('email', $email);

    $checkUser->execute();

    $checkUser = $checkUser->fetchAll();

    if (count($checkUser) > 0) {
        echo "<script>alert('You have already cashed out recently - please try again later.')</script>";
        echo "<script>location.replace('highscorers.php');</script>";
    } else {

        // UP Check (Help)
        $checkInUP = $conn->prepare('SELECT *
            FROM if0_34834355_play2db.users
            WHERE email = :email');
        $checkInUP->bindParam('email', $email);

        $checkInUP->execute();

        $checkInUP = $checkInUP->fetchAll();

        if (count($checkInUP) > 0) {
            $upFlagHelp = 1;
            $upScore += $checkInUP[0]['score'];
        }

        // UP Check (Work)
        // $checkInUP = $conn->prepare('SELECT *
        //     FROM play2workdb.users
        //     WHERE email = :email');
        // $checkInUP->bindParam('email', $email);

        // $checkInUP->execute();

        // $checkInUP = $checkInUP->fetchAll();

        // if (count($checkInUP) > 0) {
        //     $upFlagWork = 1;
        //     $upScore += $checkInUP[0]['score'];
        // }

        // // UP Check (Health)
        // $checkInUP = $conn->prepare('SELECT *
        //     FROM play2health.users
        //     WHERE email = :email');
        // $checkInUP->bindParam('email', $email);

        // $checkInUP->execute();

        // $checkInUP = $checkInUP->fetchAll();

        // if (count($checkInUP) > 0) {
        //     $upFlagHealth = 1;
        //     $upScore += $checkInUP[0]['score'];
        // }

        // // UP Check (Live)
        // $checkInUP = $conn->prepare('SELECT *
        //     FROM play2livedb.users
        //     WHERE email = :email');
        // $checkInUP->bindParam('email', $email);

        // $checkInUP->execute();

        // $checkInUP = $checkInUP->fetchAll();

        // if (count($checkInUP) > 0) {
        //     $upFlagLive = 1;
        //     $upScore += $checkInUP[0]['score'];
        // }

        // // UP Check (Learn)
        // $checkInUP = $conn->prepare('SELECT *
        //     FROM play2learn.users
        //     WHERE email = :email');
        // $checkInUP->bindParam('email', $email);

        // $checkInUP->execute();

        // $checkInUP = $checkInUP->fetchAll();

        // if (count($checkInUP) > 0) {
        //     $upFlagLearn = 1;
        //     $upScore += $checkInUP[0]['score'];
        // }

        // POP Check
    //     $checkInPOP = $db3->prepare('SELECT *
    //  FROM users
    //  WHERE email = :email');
    //     $checkInPOP->bindParam('email', $email);

    //     $checkInPOP->execute();

    //     $checkInPOP = $checkInPOP->fetchAll();

    //     if (count($checkInPOP) > 0) {
    //         $popFlag = 1;
    //         $popScore = $checkInPOP[0]['score'];
    //     }

        // YUM Check (Play2Help)
        $checkInYUM = $conn->prepare('SELECT *
         FROM if0_34834355_play2db.yumm
         WHERE email = :email');
        $checkInYUM->bindParam('email', $email);

        $checkInYUM->execute();

        $checkInYUM = $checkInYUM->fetchAll();

        if (count($checkInYUM) > 0) {
            $yumFlagHelp = 1;
            $yumScore += $checkInYUM[0]['score'];
        }

        // YUM Check (Work)
        // $checkInYUM = $conn->prepare('SELECT *
        //  FROM play2workdb.yumm
        //  WHERE email = :email');
        // $checkInYUM->bindParam('email', $email);

        // $checkInYUM->execute();

        // $checkInYUM = $checkInYUM->fetchAll();

        // if (count($checkInYUM) > 0) {
        //     $yumFlagWork = 1;
        //     $yumScore += $checkInYUM[0]['score'];
        // }

        // // YUM Check (Health)
        // $checkInYUM = $conn->prepare('SELECT *
        //  FROM play2health.yumm
        //  WHERE email = :email');
        // $checkInYUM->bindParam('email', $email);

        // $checkInYUM->execute();

        // $checkInYUM = $checkInYUM->fetchAll();

        // if (count($checkInYUM) > 0) {
        //     $yumFlagHealth = 1;
        //     $yumScore += $checkInYUM[0]['score'];
        // }

        // // YUM Check (Live)
        // $checkInYUM = $conn->prepare('SELECT *
        //  FROM play2livedb.yum
        //  WHERE email = :email');
        // $checkInYUM->bindParam('email', $email);

        // $checkInYUM->execute();

        // $checkInYUM = $checkInYUM->fetchAll();

        // if (count($checkInYUM) > 0) {
        //     $yumFlagLive = 1;
        //     $yumScore += $checkInYUM[0]['score'];
        // }

        // // YUM Check (Learn)
        // $checkInYUM = $conn->prepare('SELECT *
        //  FROM play2learn.yumm
        //  WHERE email = :email');
        // $checkInYUM->bindParam('email', $email);

        // $checkInYUM->execute();

        // $checkInYUM = $checkInYUM->fetchAll();

        // if (count($checkInYUM) > 0) {
        //     $yumFlagLearn = 1;
        //     $yumScore += $checkInYUM[0]['score'];
        // }


        // $totalScore = $upScore + $yumScore + $popScore;
        $totalScore = $upScore + $yumScore;

        $bankBalance = $conn->prepare('SELECT *
            FROM bank');

        $bankBalance->execute();

        $bankBalance = $bankBalance->fetchAll();

        $amount = ($bankBalance[0]['balance'] * $totalScore) / $sumOfScore;

        $finalBankBalance = $bankBalance[0]['balance'] - $amount;

        if ($amount > 8.00 && $amount < $bankBalance[0]['balance']) {

            $data = [
                'email' => $email,
                'method' => $method,
                'charity_name' => 'none',
                'score' => $totalScore,
                'name' => $name
            ];

            $data2 = [
                'email' => $email,
                'method' => $method,
                'charity_name' => 'none',
                'amount' => $amount,
                'name' => $name
            ];

            // 4,087,435

            $sql = "INSERT INTO payouts (email, method, charity_name, score, name) VALUES (:email, :method, :charity_name, :score, :name)";
            $stmt = $conn->prepare($sql)->execute($data);

            // Checking if user exists in Payout History
            $checkPayout = $conn->prepare('SELECT *
            FROM payout_history
            WHERE email = :email');
            $checkPayout->bindParam('email', $email);

            $checkPayout->execute();

            $checkPayout = $checkPayout->fetchAll();

            // If he does, update him. Else, insert him.

            if (count($checkPayout) > 0) {
                $oldAmount = $checkPayout[0]['amount'];
                $newAmount = $oldAmount + $amount;

                $newSql = "UPDATE payout_history SET amount = $newAmount WHERE email = '$email'";

                $newStmt = $conn->prepare($newSql);
                $newStmt->execute();
            } else {
                $sql2 = "INSERT INTO payout_history (email, method, charity_name, amount, name) VALUES (:email, :method, :charity_name, :amount, :name)";
                $stmt2 = $conn->prepare($sql2)->execute($data2);
            }

            if ($upFlagHelp == 1) {
                $data = [
                    'score' => 0,
                    'email' => $email
                ];
                $sql = "UPDATE play2helpdb.users SET score = :score WHERE email = :email";
                $stmt = $conn->prepare($sql);
                $stmt->execute($data);
            }

            // if ($upFlagWork == 1) {
            //     $data = [
            //         'score' => 0,
            //         'email' => $email
            //     ];
            //     $sql = "UPDATE play2workdb.users SET score = :score WHERE email = :email";
            //     $stmt = $conn->prepare($sql);
            //     $stmt->execute($data);
            // }

            // if ($upFlagHealth == 1) {
            //     $data = [
            //         'score' => 0,
            //         'email' => $email
            //     ];
            //     $sql = "UPDATE play2health.users SET score = :score WHERE email = :email";
            //     $stmt = $conn->prepare($sql);
            //     $stmt->execute($data);
            // }

            // if ($upFlagLive == 1) {
            //     $data = [
            //         'score' => 0,
            //         'email' => $email
            //     ];
            //     $sql = "UPDATE play2livedb.users SET score = :score WHERE email = :email";
            //     $stmt = $conn->prepare($sql);
            //     $stmt->execute($data);
            // }

            // if ($upFlagLearn == 1) {
            //     $data = [
            //         'score' => 0,
            //         'email' => $email
            //     ];
            //     $sql = "UPDATE play2learn.users SET score = :score WHERE email = :email";
            //     $stmt = $conn->prepare($sql);
            //     $stmt->execute($data);
            // }

            if ($yumFlagHelp == 1) {
                $data = [
                    'score' => 0,
                    'email' => $email
                ];
                $sql = "UPDATE play2health.yum SET score = :score WHERE email = :email";
                $stmt = $conn->prepare($sql);
                $stmt->execute($data);
            }

            // if ($yumFlagWork == 1) {
            //     $data = [
            //         'score' => 0,
            //         'email' => $email
            //     ];
            //     $sql = "UPDATE play2workdb.yum SET score = :score WHERE email = :email";
            //     $stmt = $conn->prepare($sql);
            //     $stmt->execute($data);
            // }
            // if ($yumFlagLive == 1) {
            //     $data = [
            //         'score' => 0,
            //         'email' => $email
            //     ];
            //     $sql = "UPDATE play2livedb.yum SET score = :score WHERE email = :email";
            //     $stmt = $conn->prepare($sql);
            //     $stmt->execute($data);
            // }
            // if ($yumFlagHealth == 1) {
            //     $data = [
            //         'score' => 0,
            //         'email' => $email
            //     ];
            //     $sql = "UPDATE play2health.yum SET score = :score WHERE email = :email";
            //     $stmt = $conn->prepare($sql);
            //     $stmt->execute($data);
            // }
            // if ($yumFlagLearn == 1) {
            //     $data = [
            //         'score' => 0,
            //         'email' => $email
            //     ];
            //     $sql = "UPDATE play2learn.yum SET score = :score WHERE email = :email";
            //     $stmt = $conn->prepare($sql);
            //     $stmt->execute($data);
            // }

            if ($popFlag == 1) {
                $data = [
                    'score' => 0,
                    'email' => $email
                ];
                $sql = "UPDATE users SET score = :score WHERE email = :email";
                $stmt = $db3->prepare($sql);
                $stmt->execute($data);
            }

            $data = [
                'balance' => $finalBankBalance
            ];
            $sql = "UPDATE bank SET balance = :balance WHERE id = 1";
            $stmt = $dbBank->prepare($sql);
            $stmt->execute($data);

            echo "<script>alert('Your request for withdrawal has been forwarded!');</script>";
            echo "<script>location.replace('highscorers.php');</script>";
        } else {
            echo "<script>alert('You must have a minimum amount of $8 to withdraw!');</script>";
            echo "<script>location.replace('highscorers.php');</script>";
        }
    }
}

// Owners

$servername3 = "sql306.infinityfree.com";
$username3 = "if0_34834355";
$password3 = "zUZME8105P";
$dbOwner = "owners";
/*Create connection*/

try {
    $dbOwner = new PDO("mysql:host={$servername3};dbname={$dbOwner}", $username3, $password3);
    $dbOwner->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOEXCEPTION $e) {
    $e->getMessage();
}

$owners = $dbOwner->query("SELECT * FROM token_rewards")->fetchAll(PDO::FETCH_ASSOC);

$data = file_get_contents("https://pixabay.com/api/?key=29256024-9e5fb60a69851af90b23d6c93&q=game&image_type=photo&per_page=200");

$jsonArray = json_decode($data, true);

// var_dump($jsonArray['hits'][0]["previewURL"]);

?>
<!DOCTYPE html>

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
                        <p>These are our amazing players scores, <br>
                            see your scores and rewards below:</p>
                    </div>
                    <!-- <div class="col-lg-10 offset-lg-2 col-md-12 col-sm-12">
                    </div> -->



                    <div id="collapseFour" class="">
                        <div class="panel-body">
                            <?php
                            ?>
                            <form action="highscorers.php" method="POST">
                                <div class="form-row mt-4 mb-3">
                                    <!-- <div class="col-lg-2">
                                        <select id="inputState" name="website" class="form-control">
                                            <option value="" selected>Select Website</option>
                                            <option value="play2help">Play2Help</option>
                                            <option value="play2work">Play2Work</option>
                                            <option value="play2health">Play2Health</option>
                                            <option value="play2learn">Play2Learn</option>
                                            <option value="play2live">Play2LiveWell</option>

                                        </select>
                                    </div> -->
                                    <div class="col-lg-2">
                                        <select id="inputState" name="game" class="form-control">
                                            <option value="" selected>Select Game</option>
                                            <option value="super-tetris">UP Game</option>
                                            <option value="yum">YUM Game</option>
                                            <option value="pop">POP Game</option>

                                        </select>
                                    </div>
                                    <div class="col-lg-2">
                                        <input type="submit" name="submit" class="btn btn-success" value="Update">
                                    </div>
                                </div>
                            </form>

                            <table id="example4" class="table-striped table-bordered" style="width: 100%;/* text-align: center !important; */color: rgb(0, 0, 0) !important;position: relative;table-layout: fixed; background-image: url('images/Play2Help=Charity.png'); background-repeat:no-repeat;">
                                <thead>
                                    <tr>
                                        <th style="width: 20% !important;">$Total</th>
                                        <th style="width: 20% !important;">$CashOut</th>
                                        <th>$Owner</th>
                                        <th style="width: 10% !important;">$Charity</th>
                                        <th style="width: 10% !important; text-align: center !important;">Avatar</th>
                                        <th style="width: 30% !important;">Name</th>
                                        <th>ReBirthday</th>
                                        <th>Rank</th>
                                        <th>Team</th>
                                        <th>Social</th>
                                        <th>Update</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $ranking = 0;
                                    $i = 0;
                                    $ownerKey = -1;
                                    $memberObj = null;

                                    foreach ($totalScore as $ttlscr) {
                                        $memberTotal = 0;
                                        $memberFlag = 0;

                                        foreach ($members as $member) {
                                            $memberEmail = $ttlscr['email'];
                                            if (in_array($memberEmail, $member)) {
                                                // $ownerKey = array_search($emailOfOwner, $owner);
                                                $memberFlag = 1;
                                                $memberObj = $member;
                                            }

                                            if ($memberFlag == 1) {
                                                $memberTotal = $member['total'];
                                            }
                                        }



                                        $bankBalance = $dbBank->prepare('SELECT * FROM bank');
                                        $bankBalance->execute();
                                        $bankBalance = $bankBalance->fetchAll();
                                        $amount = ($bankBalance[0]['balance'] * $ttlscr['score']) / $sumOfScore;

                                        foreach ($rewards as $reward) {
                                            if ($ttlscr['ranks'] == $reward['rank_name']) {
                                                $amount = $amount * $reward['multiplier'];
                                            }

                                            if ($ttlscr['ranks'] == $reward['rank_name']) {
                                                // $score = $ttlscr['score'] * $reward['multiplier']; 
                                                // $amount = ($bankBalance[0]['balance'] * $score / $sumOfScore);
                                            }
                                        }

                                        $amount = number_format($amount, 2);

                                        if ($memberFlag == 1) {
                                            // $amount += $memberTotal;
                                        }


                                        $ranking++;
                                        $i++;

                                        if ($i == 199) {
                                            $i = 0;
                                        }

                                        if ($game != '' && $game == 'pop') {
                                            if ($ttlscr['game'] == $game) {
                                    ?>
                                                <tr>

                                                    <?php
                                                    $amountToShow =  ($memberFlag == 1) ? ($amount + $memberObj['total']) : $amount;
                                                    if ($memberFlag != 1) {
                                                        foreach ($rewards as $reward) {
                                                            if ($ttlscr['ranks'] == $reward['rank_name']) {
                                                                $amountToShow = $amountToShow * $reward['multiplier'];
                                                            }
                                                        }
                                                    }
                                                    $amountToShow = number_format($amountToShow, 2);
                                                    ?>
                                                    <td>$<?php
                                                            echo $amountToShow;
                                                            ?></td>
                                                    <?php
                                                    $payEmail = $ttlscr['email'];
                                                    $cashHistory = $conn->prepare("SELECT * FROM payout_history WHERE email = '$payEmail' AND method = 'personal-payout'");
                                                    $cashHistory->execute();
                                                    $cashHistory = $cashHistory->fetchAll();

                                                    if (count($cashHistory) > 0) {
                                                        $cashOut = $cashHistory[0]['amount'];
                                                        if ($memberFlag == 1) {
                                                            $cashOut += $memberObj['cashout'];
                                                        }
                                                    } else {
                                                        $cashOut = 0;
                                                        if ($memberFlag == 1) {
                                                            $cashOut += $memberObj['cashout'];
                                                        }
                                                    }
                                                    ?>
                                                    <td>
                                                        $<?php echo $cashOut; ?>
                                                    </td>


                                                    <td>
                                                        $<?php echo ($memberFlag == 1) ? $memberObj['owner'] : 0; ?>
                                                    </td>
                                                    <?php
                                                    $payEmail = $ttlscr['email'];
                                                    $payoutHistory = $conn->prepare("SELECT * FROM payout_history WHERE email = '$payEmail' AND method = 'donate-to-charity'");
                                                    $payoutHistory->execute();
                                                    $payoutHistory = $payoutHistory->fetchAll();

                                                    if (count($payoutHistory) > 0) {
                                                        $withdrawn = $payoutHistory[0]['amount'];

                                                        if ($memberFlag == 1) {
                                                            $withdrawn += $memberObj['charity'];
                                                        }
                                                    } else {
                                                        $withdrawn = 0;

                                                        if ($memberFlag == 1) {
                                                            $withdrawn += $memberObj['charity'];
                                                        }
                                                    }
                                                    ?>
                                                    <td>
                                                        $<?php echo $withdrawn; ?>
                                                    </td>


                                                    <td style="text-align: center;"><img src="<?php echo $jsonArray['hits'][$i]["previewURL"] ?>" width="45" height="45" style="border-radius: 200px;"></td>
                                                    <td><?php echo $ttlscr['username']; ?></td>
                                                    <td><?php echo $ttlscr['start_date']; ?></td>
                                                    <td><?php echo $ttlscr['ranks'] ?></td>
                                                    <td><?php echo $ttlscr['team'] ?></td>
                                                    <?php
                                                    if ($ttlscr['social'] == null) {
                                                        $social = '';
                                                    } else {
                                                        $social = $ttlscr['social'];
                                                    }
                                                    ?>
                                                    <td>
                                                        <?php if ($social != '') { ?>
                                                            <a href="<?php echo $social; ?>"><img src="https://static.thenounproject.com/png/640392-200.png" style="width: 30px !important; height: 30px !important;" alt=""></a>
                                                        <?php }  ?>
                                                    </td>
                                                    <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal-<?php echo $ttlscr['email'] ?>">
                                                            Update
                                                        </button>

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="exampleModal-<?php echo $ttlscr['email'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Update User Settings</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form action="highscorers.php" method="POST">
                                                                            <input type="hidden" name="email" value="<?php echo $ttlscr['email'] ?>">
                                                                            <div class="form-group">
                                                                                <input type="email" name="confirmEmail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email assosciated with this account">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <?php if ($ttlscr['social'] == null) { ?>
                                                                                    <input type="text" class="form-control" name="social" id="exampleInputPassword1" placeholder="Enter URL to Social Profile">
                                                                                <?php } else { ?>
                                                                                    <input type="text" class="form-control" name="social" id="exampleInputPassword1" value="<?php echo $ttlscr['social'] ?>">
                                                                                <?php } ?>
                                                                            </div>

                                                                            <button type="submit" name="update" class="btn btn-primary">Confirm</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>

                                                </tr>
                                            <?php

                                            }
                                        } else if ($game != '' && $game == 'super-tetris') {
                                            if ($ttlscr['up'] > '0') { ?>
                                                <tr>

                                                    <?php
                                                    $amountToShow =  ($memberFlag == 1) ? ($amount + $memberObj['total']) : $amount;
                                                    if ($memberFlag != 1) {
                                                        foreach ($rewards as $reward) {
                                                            if ($ttlscr['ranks'] == $reward['rank_name']) {
                                                                $amountToShow = $amountToShow * $reward['multiplier'];
                                                            }
                                                        }
                                                    }
                                                    $amountToShow = number_format($amountToShow, 2);
                                                    ?>
                                                    <td>$<?php
                                                            echo $amountToShow;
                                                            ?></td>
                                                    <?php
                                                    $payEmail = $ttlscr['email'];
                                                    $cashHistory = $conn->prepare("SELECT * FROM payout_history WHERE email = '$payEmail' AND method = 'personal-payout'");
                                                    $cashHistory->execute();
                                                    $cashHistory = $cashHistory->fetchAll();

                                                    if (count($cashHistory) > 0) {
                                                        $cashOut = $cashHistory[0]['amount'];
                                                        if ($memberFlag == 1) {
                                                            $cashOut += $memberObj['cashout'];
                                                        }
                                                    } else {
                                                        $cashOut = 0;
                                                        if ($memberFlag == 1) {
                                                            $cashOut += $memberObj['cashout'];
                                                        }
                                                    }
                                                    ?>
                                                    <td>
                                                        $<?php echo $cashOut; ?>
                                                    </td>


                                                    <td>
                                                        $<?php echo ($memberFlag == 1) ? $memberObj['owner'] : 0; ?>
                                                    </td>
                                                    <?php
                                                    $payEmail = $ttlscr['email'];
                                                    $payoutHistory = $conn->prepare("SELECT * FROM payout_history WHERE email = '$payEmail' AND method = 'donate-to-charity'");
                                                    $payoutHistory->execute();
                                                    $payoutHistory = $payoutHistory->fetchAll();

                                                    if (count($payoutHistory) > 0) {
                                                        $withdrawn = $payoutHistory[0]['amount'];

                                                        if ($memberFlag == 1) {
                                                            $withdrawn += $memberObj['charity'];
                                                        }
                                                    } else {
                                                        $withdrawn = 0;

                                                        if ($memberFlag == 1) {
                                                            $withdrawn += $memberObj['charity'];
                                                        }
                                                    }
                                                    ?>
                                                    <td>
                                                        $<?php echo $withdrawn; ?>
                                                    </td>


                                                    <td style="text-align: center;"><img src="<?php echo $jsonArray['hits'][$i]["previewURL"] ?>" width="45" height="45" style="border-radius: 200px;"></td>
                                                    <td><?php echo $ttlscr['username']; ?></td>
                                                    <td><?php echo $ttlscr['start_date']; ?></td>
                                                    <td><?php echo $ttlscr['ranks'] ?></td>
                                                    <td><?php echo $ttlscr['team'] ?></td>
                                                    <?php
                                                    if ($ttlscr['social'] == null) {
                                                        $social = '';
                                                    } else {
                                                        $social = $ttlscr['social'];
                                                    }
                                                    ?>
                                                    <td>
                                                        <?php if ($social != '') { ?>
                                                            <a href="<?php echo $social; ?>"><img src="https://static.thenounproject.com/png/640392-200.png" style="width: 30px !important; height: 30px !important;" alt=""></a>
                                                        <?php }  ?>
                                                    </td>
                                                    <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal-<?php echo $ttlscr['email'] ?>">
                                                            Update
                                                        </button>

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="exampleModal-<?php echo $ttlscr['email'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Update User Settings</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form action="/highscorers.php" method="POST">
                                                                            <input type="hidden" name="email" value="<?php echo $ttlscr['email'] ?>">
                                                                            <div class="form-group">
                                                                                <input type="email" name="confirmEmail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email assosciated with this account">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <?php if ($ttlscr['social'] == null) { ?>
                                                                                    <input type="text" class="form-control" name="social" id="exampleInputPassword1" placeholder="Enter URL to Social Profile">
                                                                                <?php } else { ?>
                                                                                    <input type="text" class="form-control" name="social" id="exampleInputPassword1" value="<?php echo $ttlscr['social'] ?>">
                                                                                <?php } ?>
                                                                            </div>

                                                                            <button type="submit" name="update" class="btn btn-primary">Confirm</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>

                                                </tr>
                                            <?php  }
                                        } else if ($game != '' && $game == 'yum') {
                                            if ($ttlscr['yum'] > '0') { ?>
                                                <tr>

                                                    <?php
                                                    $amountToShow =  ($memberFlag == 1) ? ($amount + $memberObj['total']) : $amount;
                                                    if ($memberFlag != 1) {
                                                        foreach ($rewards as $reward) {
                                                            if ($ttlscr['ranks'] == $reward['rank_name']) {
                                                                $amountToShow = $amountToShow * $reward['multiplier'];
                                                            }
                                                        }
                                                    }
                                                    $amountToShow = number_format($amountToShow, 2);
                                                    ?>
                                                    <td>$<?php
                                                            echo $amountToShow;
                                                            ?></td>
                                                    <?php
                                                    $payEmail = $ttlscr['email'];
                                                    $cashHistory = $conn->prepare("SELECT * FROM payout_history WHERE email = '$payEmail' AND method = 'personal-payout'");
                                                    $cashHistory->execute();
                                                    $cashHistory = $cashHistory->fetchAll();

                                                    if (count($cashHistory) > 0) {
                                                        $cashOut = $cashHistory[0]['amount'];
                                                        if ($memberFlag == 1) {
                                                            $cashOut += $memberObj['cashout'];
                                                        }
                                                    } else {
                                                        $cashOut = 0;
                                                        if ($memberFlag == 1) {
                                                            $cashOut += $memberObj['cashout'];
                                                        }
                                                    }
                                                    ?>
                                                    <td>
                                                        $<?php echo $cashOut; ?>
                                                    </td>


                                                    <td>
                                                        $<?php echo ($memberFlag == 1) ? $memberObj['owner'] : 0; ?>
                                                    </td>
                                                    <?php
                                                    $payEmail = $ttlscr['email'];
                                                    $payoutHistory = $conn->prepare("SELECT * FROM payout_history WHERE email = '$payEmail' AND method = 'donate-to-charity'");
                                                    $payoutHistory->execute();
                                                    $payoutHistory = $payoutHistory->fetchAll();

                                                    if (count($payoutHistory) > 0) {
                                                        $withdrawn = $payoutHistory[0]['amount'];

                                                        if ($memberFlag == 1) {
                                                            $withdrawn += $memberObj['charity'];
                                                        }
                                                    } else {
                                                        $withdrawn = 0;

                                                        if ($memberFlag == 1) {
                                                            $withdrawn += $memberObj['charity'];
                                                        }
                                                    }
                                                    ?>
                                                    <td>
                                                        $<?php echo $withdrawn; ?>
                                                    </td>


                                                    <td style="text-align: center;"><img src="<?php echo $jsonArray['hits'][$i]["previewURL"] ?>" width="45" height="45" style="border-radius: 200px;"></td>
                                                    <td><?php echo $ttlscr['username']; ?></td>
                                                    <td><?php echo $ttlscr['start_date']; ?></td>
                                                    <td><?php echo $ttlscr['ranks'] ?></td>
                                                    <td><?php echo $ttlscr['team'] ?></td>
                                                    <?php
                                                    if ($ttlscr['social'] == null) {
                                                        $social = '';
                                                    } else {
                                                        $social = $ttlscr['social'];
                                                    }
                                                    ?>
                                                    <td>
                                                        <?php if ($social != '') { ?>
                                                            <a href="<?php echo $social; ?>"><img src="https://static.thenounproject.com/png/640392-200.png" style="width: 30px !important; height: 30px !important;" alt=""></a>
                                                        <?php }  ?>
                                                    </td>
                                                    <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal-<?php echo $ttlscr['email'] ?>">
                                                            Update
                                                        </button>

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="exampleModal-<?php echo $ttlscr['email'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Update User Settings</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form action="/highscorers.php" method="POST">
                                                                            <input type="hidden" name="email" value="<?php echo $ttlscr['email'] ?>">
                                                                            <div class="form-group">
                                                                                <input type="email" name="confirmEmail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email assosciated with this account">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <?php if ($ttlscr['social'] == null) { ?>
                                                                                    <input type="text" class="form-control" name="social" id="exampleInputPassword1" placeholder="Enter URL to Social Profile">
                                                                                <?php } else { ?>
                                                                                    <input type="text" class="form-control" name="social" id="exampleInputPassword1" value="<?php echo $ttlscr['social'] ?>">
                                                                                <?php } ?>
                                                                            </div>

                                                                            <button type="submit" name="update" class="btn btn-primary">Confirm</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>

                                                </tr>

                                            <?php }
                                        } else { ?>
                                            <tr>

                                                <?php
                                                $amountToShow =  ($memberFlag == 1) ? ($amount + $memberObj['total']) : $amount;
                                                if ($memberFlag != 1) {
                                                    foreach ($rewards as $reward) {
                                                        if ($ttlscr['ranks'] == $reward['rank_name']) {
                                                            $amountToShow = $amountToShow * $reward['multiplier'];
                                                        }
                                                    }
                                                }
                                                $amountToShow = number_format($amountToShow, 2);
                                                ?>
                                                <td>$<?php
                                                        echo $amountToShow;
                                                        ?></td>
                                                <?php
                                                $payEmail = $ttlscr['email'];
                                                $cashHistory = $conn->prepare("SELECT * FROM payout_history WHERE email = '$payEmail' AND method = 'personal-payout'");
                                                $cashHistory->execute();
                                                $cashHistory = $cashHistory->fetchAll();

                                                if (count($cashHistory) > 0) {
                                                    $cashOut = $cashHistory[0]['amount'];
                                                    if ($memberFlag == 1) {
                                                        $cashOut += $memberObj['cashout'];
                                                    }
                                                } else {
                                                    $cashOut = 0;
                                                    if ($memberFlag == 1) {
                                                        $cashOut += $memberObj['cashout'];
                                                    }
                                                }
                                                ?>
                                                <td>
                                                    $<?php echo $cashOut; ?>
                                                </td>


                                                <td>
                                                    $<?php echo ($memberFlag == 1) ? $memberObj['owner'] : 0; ?>
                                                </td>
                                                <?php
                                                $payEmail = $ttlscr['email'];
                                                $payoutHistory = $conn->prepare("SELECT * FROM payout_history WHERE email = '$payEmail' AND method = 'donate-to-charity'");
                                                $payoutHistory->execute();
                                                $payoutHistory = $payoutHistory->fetchAll();

                                                if (count($payoutHistory) > 0) {
                                                    $withdrawn = $payoutHistory[0]['amount'];

                                                    if ($memberFlag == 1) {
                                                        $withdrawn += $memberObj['charity'];
                                                    }
                                                } else {
                                                    $withdrawn = 0;

                                                    if ($memberFlag == 1) {
                                                        $withdrawn += $memberObj['charity'];
                                                    }
                                                }
                                                ?>
                                                <td>
                                                    $<?php echo $withdrawn; ?>
                                                </td>


                                                <td style="text-align: center;"><img src="<?php echo $jsonArray['hits'][$i]["previewURL"] ?>" width="45" height="45" style="border-radius: 200px;"></td>
                                                <td><?php echo $ttlscr['username']; ?></td>
                                                <td><?php echo $ttlscr['start_date']; ?></td>
                                                <td><?php echo $ttlscr['ranks'] ?></td>
                                                <td><?php echo $ttlscr['team'] ?></td>
                                                <?php
                                                if ($ttlscr['social'] == null) {
                                                    $social = '';
                                                } else {
                                                    $social = $ttlscr['social'];
                                                }
                                                ?>
                                                <td>
                                                    <?php if ($social != '') { ?>
                                                        <a href="<?php echo $social; ?>"><img src="https://static.thenounproject.com/png/640392-200.png" style="width: 30px !important; height: 30px !important;" alt=""></a>
                                                    <?php }  ?>
                                                </td>
                                                <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal-<?php echo $ttlscr['email'] ?>">
                                                        Update
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModal-<?php echo $ttlscr['email'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Update User Settings</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="highscorers.php" method="POST">
                                                                        <input type="hidden" name="email" value="<?php echo $ttlscr['email'] ?>">
                                                                        <div class="form-group">
                                                                            <input type="email" name="confirmEmail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email assosciated with this account">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <?php if ($ttlscr['social'] == null) { ?>
                                                                                <input type="text" class="form-control" name="social" id="exampleInputPassword1" placeholder="Enter URL to Social Profile">
                                                                            <?php } else { ?>
                                                                                <input type="text" class="form-control" name="social" id="exampleInputPassword1" value="<?php echo $ttlscr['social'] ?>">
                                                                            <?php } ?>
                                                                        </div>

                                                                        <button type="submit" name="update" class="btn btn-primary">Confirm</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>

                                            </tr>
                                    <?php }
                                    } ?>


                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>

                <div class="tab-pane active" id="tab4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent=".tab-pane" href="#collapseOne">
                                    Total Scores
                                </a>
                            </h4>
                        </div>


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