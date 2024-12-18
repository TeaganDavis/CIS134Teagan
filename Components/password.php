<html>
    <head>
        <?php
            $passwords = [
                "ayUf!R6nG12l",
                "h99urj",
                "dogname09",
                "j_wi3o0q!kan",
                "HIAL372IE__Ems",
                "SuperKid13_",
                "Ii75xrT&SO6af",
                "SGDn7!!20Ijan",
                "EasyMoney"
            ];

            function checkPassword( $password){
                $validCounter = 0;

                if (preg_match( "/.{12,}/", $password)){
                    $validCounter += 1;
                } else {
                    echo $password . " is too short.";
                }

                if (preg_match( "/(?=.*[a-z])/", $password)){
                    $validCounter += 1;
                } else {
                    echo $password . " doesn't have a lowercase letter.";
                }

                if (preg_match( "/(?=.*[A-Z])/", $password)){
                    $validCounter += 1;
                } else {
                    echo $password . " doesn't have a uppercase letter.";
                }

                if (preg_match( "/(?=.*\d)/", $password)){
                    $validCounter += 1;
                } else {
                    echo $password . " doesn't have a number.";
                }

                if (preg_match( "/(?=.*[\W_])/", $password)){
                    $validCounter += 1;
                } else {
                    echo $password . " doesn't have a special character.";
                }

                if (preg_match("/\s/", $password)) {
                    echo $password . " contains a space, no spaces in passwords.";
                } else {
                    $validCounter += 1;
                }

                if ($validCounter == 6){
                    echo true;
                }
            }

            /* This is the same thing, but looks utterly atrocious
            and I don't think I should implement it...
             *
             * if (preg_match( "/.{12,}/", $password)){
                  if (preg_match( "/(?=.*[a-z])/", $password)){
                    if (preg_match( "/(?=.*[A-Z])/", $password)){
                        if (preg_match( "/(?=.*\d)/", $password)){
                            if (preg_match( "/(?=.*[\W_])/", $password)){
                                if (preg_match("/\s/", $password)) {
                                    echo $password . " contains a space, no spaces in passwords.";
                                } else {
                                    echo true;
                                }
                            } else {
                                echo $password . " doesn't have a special character.";
                            }
                        } else {
                            echo $password . " doesn't have a number.";
                        }
                    } else {
                        echo $password . " doesn't have a uppercase letter.";
                    }
                  } else {
                      echo $password . " doesn't have a lowercase letter.";
                  }
              } else {
                  echo $password . " is too short.";
              }
             * */
        ?>
    </head>
    <body>
        
    </body>
</html>