<html>
    <head>
        <?php
            $navButtons = [
                [
                    "navCaption" => "Home",
                    "navLink" => "./index.php"
                ],
                [
                    "navCaption" => "Songs",
                    "navLink" => "./songs.php"
                ],
                [
                    "navCaption" => "Your Collection",
                    "navLink" => "./usercollection.php"
                ],
                [
                    "navCaption" => "Profile",
                    "navLink" => "#"
                ]
            ]
        ?>
    </head>
    <body>
        <nav>
            <?php foreach ($navButtons as $navItem): ?>
                <a href=<?php echo $navItem['navLink']?>><?php echo $navItem['navCaption'] ?></a>
            <?php endforeach; ?>
            <p id='date'> Today is <a><?php echo date('D, F, j') ; ?> </a> </p>
        </nav>
    </body>
</html>