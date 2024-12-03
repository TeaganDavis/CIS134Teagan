<html>
<head>
    <title>Songs</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" href="../Css/MainStyles.css">
    <link rel="stylesheet" href="../Css/SongsPage.css">
</head>
<body>
    <nav>
        <a href="../index.php">Home</a>
        <a href="songs.php">Songs</a>
        <a href="#">Your Collection</a>
        <p id="date"> Today is <a><?php echo date("D, F, j") ; ?> </a> </p>
        <a href="#">Profile</a>
    </nav>
    <div id="content">
        <div class="header">
            <h2>Our Song Collection</h2>

            <!-- I do plan on having a search option and filter options in the future
            <input type="text" id="song-searchBox" placeholder="Search Songs">
            <button id="song-searchBtn">Find!</button>
            -->
        </div>
        <div id="song-collection">
            <!-- I decided to do a 'dictionary', AKA an associative array,
             because then I could just target the song name or genre individually
             when I build out the playlist or song boxes. -->
            <?php
                $songList = [
                    [
                        "songName" => "Heavy is the Crown",
                        "artist" => "Linkin Park",
                        "album" => "From Zero",
                        "genre" => ["Rock"],
                        "length" => "2:47"
                    ],
                    [
                        "songName" => "Basket Case",
                        "artist" => "Green Day",
                        "album" => "Dookie",
                        "genre" => ["Punk Rock", "Alternative Rock"],
                        "length" => "3:02"
                    ],
                    [
                        "songName" => "Emptiness Machine",
                        "artist" => "Linkin Park",
                        "album" => "From Zero",
                        "genre" => ["Rock"],
                        "length" => "3:10"
                    ],
                    [
                        "songName" => "Shame Shame",
                        "artist" => "Foo Fighters",
                        "album" => "Medicine At Midnight",
                        "genre" => ["Classic Rock"],
                        "length" => "4:17"
                    ],
                    [
                        "songName" => "My Band",
                        "artist" => "D12",
                        "album" => "D12 World",
                        "genre" => ["Pop Rap", "Hip Hop"],
                        "length" => "4:58"
                    ]
                ]
            ?>
            <table id="song-table">
                <tr>
                    <th>Song Name</th>
                    <th>Artist</th>
                    <th>Album</th>
                    <th>Length</th>
                    <th>Genre(s)</th>
                </tr>
                <?php foreach ($songList as $song): ?>
                    <tr class="song-row">
                        <td><?php echo $song['songName']; ?></td>
                        <td><?php echo $song['artist']; ?></td>
                        <td><?php echo $song['album']; ?></td>
                        <td><?php echo $song['length']; ?></td>
                        <td><?php echo implode(", ", $song['genre']); ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</body>
</html>