<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Response</title>

    <link rel="stylesheet" href="../Css/MainStyles.css">
    <?php
        require_once "../init.php";
    ?>
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
                    searchPasswordFile($username, $password);
                } /* elseif ($form_id == 'register_form') {
                    $email = htmlspecialchars($_POST['email']);
                    $username = htmlspecialchars($_POST['username']);
                    $password = htmlspecialchars($_POST['password']);

                    echo "<p>Register Success!</p>";
                } else {
                    echo "<p>Unknown form received.</p>";
                } */
            } else {
                echo "<p>Error: Form ID is wrong.</p>";
            }
        } else {
            echo "<p>Error: Data is empty, please retry the login!</p>";
        }

        function searchPasswordFile($username, $password) {
            $userlogins = fopen('../Data/password.txt', 'r');

            if ($userlogins) {
                while (!feof($userlogins)) {
                    $fileUsername = trim(fgets($userlogins)); // Read username
                    $filePassword = trim(fgets($userlogins)); // Read password

                    // Check if both the username and the password match
                    if ($username === $fileUsername && $password === $filePassword) {
                        Globals::$isLoggedIn = true;
                        echo "<p>Login Success! Welcome, $username.</p>";
                        fclose($userlogins);
                        return;
                    }
                }
                fclose($userlogins);
            }

            // If no match found
            echo "<p>Invalid username or password. Please try again.</p>";
        }

    ?>
</div>
<?php require "../Components/footer.php" ?>
</body>
</html>