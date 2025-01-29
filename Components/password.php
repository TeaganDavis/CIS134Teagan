<html>
    <head>

    </head>
    <body>
    <?php
        function checkPassword($username, $password, $email): array
        {
            $validCounter = 0;
            $errors = [];

            if (preg_match( "/.{12,}/", $password)){
                $validCounter++;
            } else {
                $errors[] = "Password must contain at least 12 characters";
            }

            if (preg_match( "/(?=.*[a-z])/", $password)){
                $validCounter++;
            } else {
                $errors[] = "Password doesn't have a lowercase letter.";
            }

            if (preg_match( "/(?=.*[A-Z])/", $password)){
                $validCounter++;
            } else {
                $errors[] = "Password doesn't have an uppercase letter.";
            }

            if (preg_match( "/(?=.*\d)/", $password)){
                $validCounter++;
            } else {
                $errors[] = "Password doesn't have a number.";
            }

            if (preg_match( "/(?=.*[\W_])/", $password)){
                $validCounter++;
            } else {
                $errors[] = "Password doesn't have a special character.";
            }

            if (preg_match("/\s/", $password)) {
                $errors[] = "Password contains a space, no spaces in passwords.";
            } else {
                $validCounter++;
            }

            if ($validCounter == 6){
                // Check for duplicates here
                return checkPasswordFile($username, $password, $email);
            }

            return $errors;
        }

        function checkPasswordFile($username, $password, $email):array
        {
            $useraccounts = fopen("password.txt", "r");
            $errors = [];

            // This will be checking for duplicates of usernames and passwords
            if ($useraccounts){
                while (!feof($useraccounts)){
                    $fileUsername = trim(fgets($useraccounts)); // Read username
                    $filePassword = trim(fgets($useraccounts)); // Read password, not really used
                    $fileEmail = trim(fgets($useraccounts)); // Read email (actually used here)

                    if ($username === $fileUsername){
                        $errors = "Username is already taken.";
                    } elseif ($email === $fileEmail){
                        $errors = "Email is already taken.";
                    }
                }
                fclose($useraccounts);
            }

            if (empty($errors)){
                return createUser($username, $password, $email);
            }

            return $errors;
        }

        // Add the new user, each data type is given its own row
        function createUser($username, $password, $email): array
        {
    //                $useraccounts = fopen("password.txt", "a+");
    //                fwrite($useraccounts, $username . "\n");
    //                fwrite($useraccounts, $password . "\n");
    //                fwrite($useraccounts, $email . "\n");
    //                fclose($useraccounts);
            $_SESSION['isLoggedIn'] = true;
            $_SESSION['username'] = $username;
            header("Location: index.php");
            return [];
        }
    ?>
    </body>
</html>