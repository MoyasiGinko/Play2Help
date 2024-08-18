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
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>High Scorers</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">High Scorers</h1>
        <table class="table table-striped mt-3">
            <thead>
                <tr>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Games</th>
                    <th>Total Score</th>
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
    </div>
    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
</body>
</html>