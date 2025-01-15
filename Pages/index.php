<html>
<head>
    <!-- Created 11/26/2024 by Teagan -->
    <!-- Unit 6 worked on: 1/14/2025 -->
    <!-- This page is a mock business/music page -->
    <!-- Melos is the shortened Greek version of 'melody' -->
    <title>Melos</title>
    <meta http-equiv="Content-Type"
content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" href="../Css/MainStyles.css">

    <?php
        require_once "../init.php";
    ?>
</head>

<body>
    <?php require "../Components/navigation.php" ?>
    <div id="content">
        <?php include "../Components/welcome.php" ?>

        <h2>Your Recently Played</h2>
        <div id="recent-playlists">
            <div class="playlists" id="playlist-id1">
                <a href="#playlist-id1" class="playlist-links">
                    <!-- <img src="#"> Add an image from
                    the first song, or let them chose one -->
                    <h3>Playlist name1</h3>
                    <!-- Song count -->
                    <h4>## songs</h4>
                    <!-- Playlist length -->
                    <h4>1 hr. 34 min.</h4>
                </a>
            </div>
            <div class="playlists" id="playlist-id2">
                <a href="#playlist-id2" class="playlist-links">
                    <!-- <img src="#"> -->
                    <h3>Playlist name2</h3>
                    <h4>## songs</h4>
                    <h4>1 hr. 34 min.</h4>
                </a>
            </div>
            <div class="playlists" id="playlist-id3">
                <a href="#playlist-id3" class="playlist-links">
                    <!-- <img src="#"> -->
                    <h3>Playlist name3</h3>
                    <h4>## songs</h4>
                    <h4>1 hr. 34 min.</h4>
                </a>
            </div>
            <div class="playlists" id="playlist-id4">
                <a href="#playlist-id4" class="playlist-links">
                    <!-- <img src="#"> -->
                    <h3>Playlist name4</h3>
                    <h4>## songs</h4>
                    <h4>1 hr. 34 min.</h4>
                </a>
            </div>
            <div class="playlists" id="playlist-id5">
                <a href="#playlist-id5" class="playlist-links">
                    <!-- <img src="#"> -->
                    <h3>Playlist name5</h3>
                    <h4>## songs</h4>
                    <h4>1 hr. 34 min.</h4>
                </a>
            </div>
        </div>
    </div>

    <?php require "../Components/footer.php" ?>
</body>
</html>