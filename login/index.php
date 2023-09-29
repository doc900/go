<?php

session_start();

if (isset($_SESSION["user_id"])) {

    $mysqli = require __DIR__ . "/database.php";

    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";

    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require '/wamp64/www/Allsite/navbar/header.php'; ?>
    <?php require '/wamp64/www/Allsite/navbar/footer.php'; ?>
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
</head>
<body>
    <h1>HOME</h1>

    <?php if (isset($user)): ?>

        <p>Hello <?= htmlspecialchars($user["name"]) ?></p>
        <p><a href="logout.php">Log out</a></p>

    <?php else: ?>

    <p><a href="login.php">Login</a> or <a href="signup.php">sign up</a></p>
    
<?php endif; ?>

<ul class="porno">
    <li><img src="/img/porno/A1.jpg" alt="a1"></li>
    <li><img src="/img/porno/A2.jpg" alt="a2"></li>
    <li><img src="/img/porno/A3.jpg" alt="a3"></li>
    <li><img src="/img/porno/A4.jpg" alt="a4"></li>
    <li><img src="/img/porno/A5.jpg" alt="a5"></li>
    <li><img src="/img/porno/A6.jpg" alt="a6"></li>
    <li><img src="/img/porno/A7.jpg" alt="a7"></li>
    <li><img src="/img/porno/A8.jpg" alt="a8"></li>
    <li><img src="/img/porno/A9.jpg" alt="a9"></li>
    <li><img src="/img/porno/A10.jpg" alt="a10"></li>
</ul>


</body>
</html>