<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Response</title>

    <link rel="stylesheet" href="../Css/MainStyles.css">
</head>
<body>
<?php require "../Components/navigation.php" ?>
<div id="content">
    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['form_id'])) {
                $form_id = $_POST['form_id'];

                if ($form_id == 'login_form') {
                    $username = htmlspecialchars($_POST['username']);
                    $password = htmlspecialchars($_POST['password']);

                    echo "<p>Login Success!</p>";
                    echo "<p>Your username: $username</p>";
                    echo "<p>Your password: $password</p>";
                } /* elseif ($form_id == 'register_form') {
                    $email = htmlspecialchars($_POST['email']);
                    $username = htmlspecialchars($_POST['username']);
                    $password = htmlspecialchars($_POST['password']);

                    echo "<p>Register Success!</p>";
                    echo "<p>Your email: $email</p>";
                    echo "<p>Your username: $username</p>";
                    echo "<p>Your password: $password</p>";
                } else {
                    echo "<p>Unknown form received.</p>";
                } */
            } else {
                echo "<p>Error: Form ID is wrong.</p>";
            }
        } else {
            echo "<p>Error: Data is empty, please retry the login!</p>";
        }
    ?>
</div>
<?php require "../Components/footer.php" ?>
</body>
</html>