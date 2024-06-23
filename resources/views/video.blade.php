<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Player</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/video.css') }}">
</head>
<body>
    <div class="video-container">
        <video id="video-player" controls>
            <source src="{{ asset('videos/your-video-file.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="video-details">
            <h1 id="video-title">Lonely at the top</h1>
            <h2 id="video-artist">Asake</h2>
        </div>
    </div>
    <script src="{{ asset('js/video.js') }}"></script>
</body>
</html>
