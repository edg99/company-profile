function playVideo() {
    var videoThumbnail = document.querySelector('.video-thumbnail');
    var playButton = document.querySelector('.play-button');
    var videoPlayer = document.getElementById('videoPlayer');

    // Hide the thumbnail and play button
    videoThumbnail.classList.add('hidden');
    playButton.classList.add('hidden');

    // Show the video player
    videoPlayer.classList.remove('hidden');

    // Play the video
    videoPlayer.play();
}

function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
