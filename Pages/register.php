<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>

    <link rel="stylesheet" href="../Css/MainStyles.css">
    <link rel="stylesheet" href="../Css/login.css">

    <?php
        require_once "../init.php";
        require "../Components/password.php";

        // This is the form handler
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['form_id'])) {
                $form_id = $_POST['form_id'];

                if ($form_id == 'register_form') {
                    $username = trim($_POST['registerusername']);
                    $password = trim($_POST['registerpassword']);
                    $email = trim($_POST['registeremail']);
                    checkPassword($password, $username, $email);
                }
            }
        }
    ?>
</head>
<body>
<?php require "../Components/navigation.php" ?>
<div id="content">
    <h1>Register</h1>
    <form method="POST">
        <input type="hidden"  name="form_id" value="register_form">

        <label for="username">Username: </label>
        <input type="text" id="username" name="registerusername" value="" required>

        <label for="password">Password: </label>
        <input type="text" id="password" name="registerpassword" value="" required>


        <label for="email">Email: </label>
        <input type="text" id="email" name="registeremail" value="" required>

        <button type="submit" name="create_account">Create!</button>
    </form>
    <p>Already have an account? <a href="./login.php">Login in</a>!</p>

    <!-- This displays any invalid requirements with the password -->
    <?php if (!empty($errors)): ?>
        <div class="error-messages">
            <?php foreach ($errors as $error): ?>
                <p style="color: red;"><?php echo $error . "<br>"; ?></p>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

</div>
<?php require "../Components/footer.php" ?>
</body>
</html>