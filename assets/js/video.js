window.onload = function () {
  setTimeout(function () {
    showVideo();
  }, 1500);
};

// Event closes video popup
document.querySelector('.video')
  .addEventListener('click', closeVideo);

function showVideo() {
  const element = document.querySelector('.video');
  const body = document.querySelector('body');

  element.style.display = "block";
  element.classList.remove('d-none');

  body.style.overflowY = "hidden";
  body.style.height = '100vh';
};

function closeVideo(e) {
  const target = e.target;

  if (target.classList.contains('video-close')) {
    const element = document.querySelector('.video');
    const body = document.querySelector('body');

    element.remove();

    body.style.overflowY = "visible";
    body.style.height = '100%';
  }

}
