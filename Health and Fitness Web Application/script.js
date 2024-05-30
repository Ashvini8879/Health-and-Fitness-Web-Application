document.getElementById('explore-btn').addEventListener('click', function() {
  document.querySelector('.explore-buttons').style.display = 'block';
  document.querySelector('.video-container').style.transform = 'translateY(-50vh)';
  document.querySelector('.video-container').style.overflowY = 'scroll';
});
