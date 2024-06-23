<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Player</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/player.css') }}">
</head>
<body>
    <div class="player-container">
        <div class="album-art"></div>
        <div class="track-info">
            <h2>Lonely at the top</h2>
            <p>Asake</p>
        </div>
        <div class="progress-bar">
            <div class="progress"></div>
        </div>
        <div class="controls">
            <button class="control-button play-pause" onclick="playPause()">&#9654;</button>
            <button class="control-button stop" onclick="stop()">&#9632;</button>
        </div>
    </div>

    <audio id="audio-player" src="/music/your-music-file.mp3"></audio>

    <script src="{{ asset('js/player.js') }}"></script>
</body>
</html>
