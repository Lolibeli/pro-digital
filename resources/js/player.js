let isPlaying = false;
const audioPlayer = document.getElementById('audio-player');
const progress = document.querySelector('.progress');

function playPause() {
    if (isPlaying) {
        audioPlayer.pause();
        document.querySelector('.control-button').innerHTML = '&#9654;'; // Play icon
    } else {
        audioPlayer.play();
        document.querySelector('.control-button').innerHTML = '&#9208;'; // Pause icon
    }
    isPlaying = !isPlaying;
}

audioPlayer.addEventListener('timeupdate', () => {
    const percentage = (audioPlayer.currentTime / audioPlayer.duration) * 100;
    progress.style.width = percentage + '%';
});
