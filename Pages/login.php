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
            <form action="logindisplay.php" method="POST">
                <input type="hidden"  name="form_id" value="login_form">

                <label for="username">Username: </label>
                <input type="text" id="username" name="username" value="" required>

                <label for="password">Password: </label>
                <input type="text" id="password" name="password" value="" required>
                    <!-- Really wanted to combine the 2 units here, but doesn't seem to work -->
<!--                --><?php //require "../Components/password.php"?>
<!--                --><?php //if (isset($errors["password_errors"])): ?>
<!--                    <span class="error">--><?php //= $errors["password_errors"] ?><!--</span>-->
<!--                --><?php //endif; ?>

                <button type="submit" name="submit_login">Login!</button>
            </form>
            <p>Don't have an account? <a href="#">Create one</a>!</p>

        </div>
    <?php require "../Components/footer.php" ?>
</body>
</html>