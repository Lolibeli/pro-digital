<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Site</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
</head>
<body>
    <div class="profile">
        <img src="{{ asset('images/profile-icon.png') }}" alt="Profile Icon">
        <div class="profile-name">GNAMKOULAMBA Lolita</div>
    </div>
    <div class="container">
        <div class="heading">Welcome to Loli Track</div>
        <button class="music-button" onclick="playMusic()">🎵 Play Music</button>
        <button class="video-button" onclick="playVideo()">🎥 Play Video</button>
    </div>
    <script src="{{ asset('js/welcome.js') }}"></script>
</body>
</html>
