<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <link rel="stylesheet" href="../Css/MainStyles.css">
    <link rel="stylesheet" href="../Css/login.css">

    <?php

    require_once "../init.php";

    if (session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }

    if (!isset($_SESSION['isLoggedIn']) || !$_SESSION['isLoggedIn']) {
        header("Location: login.php");
        exit;
    }

        $available_genres = [
            "Rock",
            "Pop",
            "Hip Hop",
            "Country",
            "R&B",
            "Classical",
            "Blues",
            "Grunge",
            "K-pop",
            "Phonk"
        ];

        $name = $description = $privacy = "";
        $genres = [];
        $errors = [];
        $message = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // trimming whitespace at the beginning or end of the name
            $name = trim($_POST["playlist_name"] ?? "");
            if (empty($name)) {
                $errors["name"] = "Playlist name is required.";
            }
            // needs at least 3 or more characters
            if (!preg_match("/.{3,}/", $name)) {
                $errors["name"] = "Playlist name must be 3 characters or more.";
            }

            // again, trims
            $description = trim($_POST["playlist_desc"] ?? "");

            if (!empty($_POST['genre'] && is_array($_POST['genre']))) {
                $genres = $_POST['genre'];
            } else {
                $errors["genres"] = "Please select at least one genre.";
            }

            $mood = trim($_POST["playlist_mood"] ?? "");

            // this won't really be used since I have the 'private' preselected
            // but just in case and so the variable gets instantiated
            $privacy = $_POST["playlist_privacy"] ?? "";
            if (!in_array($privacy, ["Public", "Friends only", "Private"])) {
                $errors["privacy"] = "Please select a valid privacy option.";
            }

            if (empty($errors)) {
                echo "<h2>$privacy playlist created!</h2>";
                echo "<p><b>Name:</b> $name</p>";
                echo "<p><b>Description:</b> $description</p>";
                echo "<p><b>Genre(s):</b>" . implode(", ",$genres) . "</p>";
            }
        }
    ?>
</head>
<body>
<?php require "../Components/navigation.php" ?>
<div id="content" style="padding-top: 0">
    <h1>Your Collection</h1>

    <form method="POST" action="">
        <h3>New Playlist</h3>

        <!-- Playlist Name -->
        <label for="playlist_name">Playlist name: </label>
        <input type="text" id="playlist_name" name="playlist_name" value="<?= htmlspecialchars($name) ?>" required>
        <?php if (isset($errors["name"])): ?>
            <span class="error"><?= $errors["name"] ?></span>
        <?php endif; ?>

        <!-- Description -->
        <label for="playlist_desc">Description: </label>
        <input type="text" id="playlist_desc" name="playlist_desc" value="<?= htmlspecialchars($description) ?>">

        <!-- Genres -->
        <label for="playlist_genres">Genre(s): </label>
        <div id="playlist_genres">
            <?php foreach ($available_genres as $genre): ?>
                <label>
                    <input type="checkbox" name="genre[]" value="<?= htmlspecialchars($genre) ?>"
                        <?= in_array($genre, $genres) ? 'checked' : '' ?>>
                    <?= htmlspecialchars($genre) ?>
                </label>
            <?php endforeach; ?>
        </div>
        <?php if (isset($errors["genre"])): ?>
            <span class="error"><?= $errors["genre"] ?></span>
        <?php endif; ?>

        <label for="playlist_mood">Mood: </label>
        <select id="playlist_mood" name="playlist_mood">
            <option value="Happy">Happy</option>
            <option value="Sad">Sad</option>
            <option value="Relaxing">Relaxing</option>
            <option value="Workout">Workout</option>
            <option value="Party">Party</option>
        </select>

        <!-- Privacy -->
        <h4>Privacy:</h4>
        <div id="playlist_privacy_options">
            <label>
                <input type="radio" name="playlist_privacy" value="Public" <?= $privacy === "Public" ? "checked" : "" ?>>
                Public
            </label>
            <label>
                <input type="radio" name="playlist_privacy" value="Friends only" <?= $privacy === "Friends only" ? "checked" : "" ?>>
                Friends only
            </label>
            <label>
                <input type="radio" name="playlist_privacy" value="Private" <?= $privacy === "Private" || empty($privacy) ? "checked" : "" ?>>
                Private
            </label>
        </div>
        <?php if (isset($errors["privacy"])): ?>
            <span class="error"><?= $errors["privacy"] ?></span>
        <?php endif; ?>

        <!-- Reset and Submit Buttons -->
        <button type="submit" name="submit_new_playlist">Create!</button>

    </form>

    <!-- for whatever reason the message only shows in the top left corner...  -->
    <?php if (!empty($message)): ?>
        <div class="success">
            <?= $message ?>
        </div>
    <?php endif ?>
</div>
<?php require "../Components/footer.php" ?>
</body>
</html>