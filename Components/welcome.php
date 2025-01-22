<html>
    <head>
        <?php

            if (session_status() !== PHP_SESSION_ACTIVE) {
                session_start();
            }
        ?>
        <title></title>
    </head>
    <body>
        <?php
            if (!$_SESSION['isLoggedIn']) {
                echo "
                    <div class='header'>
                        <h1>Welcome to <a>Melos</a></h1>
                        <h3>The best collection of melodies</h3>
                    </div>
                    
                    <div id='login'>
                        <h4>Be sure to <a href='../Pages/login.php'>login</a></h4>
                        <h4>or <a href='#'>create</a> an account!</h4>
                    </div>";
            } else {
                echo "
                    <div class='header'>
                        <h1>Welcome to <a>Melos</a>, " . $_SESSION['username'] . "</h1>
                        <h3>The best collection of melodies</h3>
                    </div>";
            }
        ?>
    </body>
</html>