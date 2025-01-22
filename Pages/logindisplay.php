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
                    $username = trim($_POST['loginusername']);
                    $password = trim($_POST['loginpassword']);
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

                    // Check for admin login
                    if ($username === "nagaeT" && $password === "Ii75xrT&SO6af") {
                        $_SESSION['isLoggedIn'] = true;
                        $_SESSION['username'] = $username;
                        fclose($userlogins);
                        header("Location: index.php");
                        exit;
                    }

                    // Check if both the username and the password match
                    if ($username === $fileUsername && $password === $filePassword) {
                        $_SESSION['isLoggedIn'] = true;
                        echo "<p>Debug: Username set in session is " . htmlspecialchars($_SESSION['username']) . "</p>";
                        $_SESSION['username'] = $username;
                        echo "<p>Debug: Username set in session is " . htmlspecialchars($_SESSION['username']) . "</p>";
                        echo "<p>Login Success! Welcome, " . htmlspecialchars($_SESSION['username']) . ".</p>";
                        echo "<p><a href='./index.php'>Go back</a></p>";
                        fclose($userlogins);
                        return;
                    }
                }
                fclose($userlogins);
            }

            // If there's no match found
            echo "<p>Invalid username or password. Please try again.</p>";
        }

    ?>
</div>
<?php require "../Components/footer.php" ?>
</body>
</html>