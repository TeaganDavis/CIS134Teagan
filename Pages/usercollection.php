<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <link rel="stylesheet" href="../Css/MainStyles.css">
</head>
<body>
<?php require "../Components/navigation.php" ?>
<div id="content">
    <h1>Your Collection</h1>
    <form method="POST">
        <h3>New Playlist</h3>
        <input type="hidden"  name="form_id" value="new_playlist_form">

        <label for="playlist_name">Playlist name: </label>
        <input type="text" id="playlist_name" name="playlist_name" value="">

        
        <button type="submit" name="submit_new_playlist">Create!</button>
    </form>
</div>
<?php require "../Components/footer.php" ?>
</body>
</html>