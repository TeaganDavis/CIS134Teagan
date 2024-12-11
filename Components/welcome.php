<html>
    <head>
        <?php
            $isLogin = false;
            $username = null;
        ?>
    </head>
    <body>
        <?php
            if (!$isLogin) {
                echo "
                    <div class='header'>
                        <h1>Welcome to <a>Melos</a></h1>
                        <h3>The best collection of melodies</h3>
                    </div>
                    
                    <div id='login'>
                        <h4>Be sure to <a href='#'>login</a>,</h4>
                        <h4>or create an account <a href='#'>here</a>!</h4>
                    </div>";
            } else {
                echo "
                    <div class='header'>
                        <h1>Welcome to <a>Melos</a>, $username</h1>
                        <h3>The best collection of melodies</h3>
                    </div>";
            }
        ?>
    </body>
</html>