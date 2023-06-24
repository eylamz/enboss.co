// start mobile maps icon animation when the users scrolls down to view the icons
var waze = document.querySelector('.waze');
var apple = document.querySelector('.apple');
var google = document.querySelector('.google');
var social = document.querySelector('.social-maps');

function animateMapIcons() {
  var observer = new IntersectionObserver(function(entries, observer) {
    entries.forEach(function(entry) {
      if (entry.isIntersecting) {
        waze.classList.add('animate');
        google.classList.add('animate');
        apple.classList.add('animate');
        social.style.opacity = 1;
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: [0] });

  observer.observe(google);
}

animateMapIcons();


const observer = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('animate');
    }
  });
});