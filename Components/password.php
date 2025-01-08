<html>
    <head>
        <?php
            $passwords = [
                "ayUf!R6nG12l",
                "h99urj",
                "dogname09",
                "j_Wi3o0q!Kan",
                "HIAL372IE__Ems",
                "SuperKid13_",
                "Ii75xrT&SO6af",
                "SGDn7!!20Ijan",
                "EasyMoney"
            ];
            $errors = [];

            function checkPassword( $password){
                $validCounter = 0;

                if (preg_match( "/.{12,}/", $password)){
                    $validCounter += 1;
                } else {
                    echo $password . " is too short.<br>";
                }

                if (preg_match( "/(?=.*[a-z])/", $password)){
                    $validCounter += 1;
                } else {
                    echo $password . " doesn't have a lowercase letter.<br>";
                }

                if (preg_match( "/(?=.*[A-Z])/", $password)){
                    $validCounter += 1;
                } else {
                    echo $password . " doesn't have an uppercase letter.<br>";
                }

                if (preg_match( "/(?=.*\d)/", $password)){
                    $validCounter += 1;
                } else {
                    echo $password . " doesn't have a number.<br>";
                }

                if (preg_match( "/(?=.*[\W_])/", $password)){
                    $validCounter += 1;
                } else {
                    echo $password . " doesn't have a special character.<br>";
                }

                if (preg_match("/\s/", $password)) {
                    echo $password . " contains a space, no spaces in passwords.<br>";
                } else {
                    $validCounter += 1;
                }

                if ($validCounter == 6){
                    echo $password . " is valid.<br>";
                }
            }
        ?>
    </head>
    <body>
        <div>
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if (isset($_POST['form_id'])) {
                    $form_id = $_POST['form_id'];

                    if ($form_id == 'login_form') {
                        $user_password = htmlspecialchars($_POST['password']);
                        checkPassword($user_password);
                    }
                }
            }

//                foreach ($passwords as $password){
//                    echo "Currently testing password: " . $password . "<br>";
//                    checkPassword( $password );
//                    echo "<br>";
//                }
            ?>
        </div>
    </body>
</html>