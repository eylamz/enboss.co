
          // scale up button script 
          let slideshowContainer = document.querySelector(".carousel-container");
          let scaleButton = document.querySelector(".scale-button");
          let slideshowDiv = document.querySelector(".slideshowDiv");
          let isScaled = false;
      
          // Add keyboard event listeners
        document.addEventListener("keydown", handleKeyPress);
        
        function handleKeyPress(event) {
          if (event.key === "ArrowLeft") {
            prevSlide();
          } else if (event.key === "ArrowRight") {
            nextSlide();
          }
        }
        function scaleSlideshow() {
          isScaled = !isScaled;
          const slideshowDiv = document.getElementById('picDiv');
          if (isScaled) {
              slideshowDiv.classList.add("scaleUp");
          } else {
              slideshowDiv.classList.remove("scaleUp");
          }
      }

      let slideIndex = 0;
      showSlides();
      
      // Next-previous control
      function nextSlide() {
          slideIndex++;
          showSlides();
          timer = _timer; // reset timer
      }
      
      function prevSlide() {
          slideIndex--;
          showSlides();
          timer = _timer;
      }
      
      // Thumbnail image controls
      function currentSlide(n) {
          slideIndex = n - 1;
          showSlides();
          timer = _timer;
      }
      
      function showSlides() {
          let slides = document.querySelectorAll(".mySlides");
          let dots = document.querySelectorAll(".dots");
      
          if (slideIndex > slides.length - 1) slideIndex = 0;
          if (slideIndex < 0) slideIndex = slides.length - 1;
          
          // hide all slides
          slides.forEach((slide) => {
              slide.style.display = "none";
          });
          
          // show one slide base on index number
          slides[slideIndex].style.display = "block";
          
          dots.forEach((dot) => {
              dot.classList.remove("active");
          });
          
          dots[slideIndex].classList.add("active");
      }

      // autoplay slides
      let timer = 7; // sec
      const _timer = timer;
      
      // this function runs every 1 second
      setInterval(() => {
          timer--;
      
          if (timer < 1) {
              nextSlide();
              timer = _timer; // reset timer
          }
      }, 1000); // 1 sec
      
      window.onload = function() {
          let firstImage = document.querySelector(".mySlides:first-child img");
          firstImage.onload = function() {
              loadRemainingImages();
              showSlides();
          };
      };
      
      function loadRemainingImages() {
          let slides = document.querySelectorAll(".mySlides");
          for (let i = 1; i < slides.length; i++) {
              let image = slides[i].querySelector("img");
              let src = image.dataset.src;
              image.setAttribute("src", src);
          }
      }





              // Event listeners for touch events
        slideshowDiv.addEventListener("touchstart", startSwipe);
        slideshowDiv.addEventListener("touchmove", moveSwipe);
        slideshowDiv.addEventListener("touchend", endSwipe);
        slideshowDiv.addEventListener("touchcancel", endSwipe);
          
              let startTouchX = 0; // Initial touch position when swiping starts
          
              function startSwipe(event) {
          if (event.touches.length === 1) {
            startTouchX = event.touches[0].clientX;
          }
        }
      
        function moveSwipe(event) {
          if (event.touches.length === 1) {
            const currentTouchX = event.touches[0].clientX;
            const differenceX = startTouchX - currentTouchX;
      
            // Move to the previous slide if the user swipes to the right
            if (differenceX > 65) {
              nextSlide();
              startTouchX = currentTouchX; // Update start position for one-image swipe
            }
      
            // Move to the next slide if the user swipes to the left
            if (differenceX < -65) {
              prevSlide();
              startTouchX = currentTouchX; // Update start position for one-image swipe
            }
          }
        }
      
        function endSwipe() {
          startTouchX = 0;
        }
          
// Function to toggle fullscreen from the image carousel
function toggleFullscreen() {
  var picDiv = document.getElementById('picDiv');
  var carousel = document.getElementById('carousel');
  var header = document.querySelector('header');
  var parkHead = document.querySelector('.parkHead');
  var mobileH1 = document.getElementById('mobileH1');

  if (!picDiv.classList.contains('fullscreen')) {
      // Move picDiv to be the first child of the body
      document.body.insertBefore(picDiv, document.body.firstChild);

      picDiv.classList.add('fullscreen');
      carousel.classList.add('fullscreen');
      header.style.zIndex = '0';
      picDiv.style.overflow = "hidden";
      window.scrollTo(0, 0);

  } else {
      // Move picDiv back to its original location
      if (mobileH1) {
          // If mobileH1 exists, insert picDiv just after it inside parkHead
          mobileH1.insertAdjacentElement('afterend', picDiv);
      } else {
          // If mobileH1 doesn't exist, insert picDiv as the second child of parkHead
          var secondChild = parkHead.children[1];
          parkHead.insertBefore(picDiv, secondChild);
      }

      picDiv.classList.remove('fullscreen');
      carousel.classList.remove('fullscreen');
      header.style.zIndex = '';
      picDiv.style.overflow = "auto";
      window.scrollTo(0, 0);
  }
}


// Function to close fullscreen mode when Esc key is pressed
function closeFullscreenOnEsc(event) {
  var picDiv = document.getElementById('picDiv');
  if (event.key === 'Escape' && picDiv.classList.contains('fullscreen')) {
      toggleFullscreen();
  }
}

// Add event listener to the fullscreen button
document.getElementById('scaleBtn').addEventListener('click', function(event) {
  event.stopPropagation(); // Prevent the event from bubbling up to the document
  toggleFullscreen();
});

// Add event listener to the document for detecting clicks outside the carousel
document.addEventListener('click', function(event) {
  var picDiv = document.getElementById('picDiv');
  var carousel = document.getElementById('carousel');

  // Check if the clicked target is not within the carousel or the button
  if (!carousel.contains(event.target) && !event.target.closest('#scaleBtn')) {
      if (picDiv.classList.contains('fullscreen')) {
          toggleFullscreen();
      }
  }
});

// Add event listener for the Esc key to close fullscreen mode
document.addEventListener('keydown', closeFullscreenOnEsc);

