<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <link rel="stylesheet" href="../Css/MainStyles.css">
    <link rel="stylesheet" href="../Css/login.css">


</head>
<body>
    <?php require "../Components/navigation.php" ?>
        <div id="content">
            <h1>Login</h1>
            <form name="login" action="../Components/logindisplay.php" method="post">
                <label for="Username">Username: </label>
                <input type="text" id="Username" name="Username" value="">
                <label for="Password">Password: </label>
                <input type="text" id="Password" name="Password" value="">
                <button type="submit">Login!</button>
            </form>
            <p>Don't have an account? <a href="#">Create one</a>!</p>
            <?php require "../Components/password.php"?>
        </div>
    <?php require "../Components/footer.php" ?>
</body>
</html>