
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
            if (isScaled) {
              slideshowContainer.style.maxWidth = "1000px";
              slideshowContainer.style.maxHeight = "750px";
              slideshowDiv.classList.add("scaleUp");
            } else {
              slideshowContainer.style.maxWidth = "500px";
              slideshowContainer.style.maxHeight = "350px";
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
          
              // Thumbnail image controlls
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
              fadeIn(slides[slideIndex]);

              
              dots.forEach((dot) => {
                  dot.classList.remove("active");
              });
              
              dots[slideIndex].classList.add("active");
              }
          
              function fadeIn(element) {
                let opacity = 0;
                element.style.opacity = opacity;
              
                // adds fade transition to the slideshow images
                const fadeInterval = setInterval(() => {
                  if (opacity < 1) {
                    opacity += 0.05;
                    element.style.opacity = opacity;
                  } else {
                    clearInterval(fadeInterval);
                  }
                }, 15);
              }

              // autoplay slides --------
              let timer = 7; // sec
              const _timer = timer;
          
              // this function runs every 1 second
              setInterval(() => {
              timer--;
          
              if (timer < 1) {
                  nextSlide();
                  timer = _timer; // reset timer
              }
              }, 1000); // 1sec
          
          
          
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
          