<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <link rel="stylesheet" href="../Css/MainStyles.css">
    <link rel="stylesheet" href="../Css/login.css">

    <?php

    require_once "../init.php";

    if (session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }

    if (!isset($_SESSION['isLoggedIn']) || !$_SESSION['isLoggedIn']) {
        header("Location: login.php");
        exit;
    }

    if (isset($_POST['logout'])) {
        unset($_SESSION['isLoggedIn'], $_SESSION['username']);
        session_destroy();

        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 3600, $params['path'], $params['domain'], $params['secure'], $params['httponly']);
        }

        header("Location: login.php");
        exit;
    }
    ?>
</head>
<body>
<?php require "../Components/navigation.php" ?>
<div id="content" style="padding-top: 0">
    <?php
        echo "<h3>". $_SESSION['username'] . "</h3>";
    ?>
    <form method="post">
        <button type="submit" name="logout" value="logout">Log Out</button>
    </form>


</div>
<?php require "../Components/footer.php" ?>
</body>
</html>