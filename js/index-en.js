
    // Parks Number Counter Script
    var count = 0;
    var counterElement = document.getElementById("headCount");
    
    var options = {
      root: null,
      rootMargin: '0px',
      threshold: 1.0
    };
    
    var observer = new IntersectionObserver(function(entries, observer) {
      if (entries[0].isIntersecting) {
        var intervalId = setInterval(function() {
          if (count <= 40) {
            counterElement.innerHTML = count;
            count++;
          } else {
            clearInterval(intervalId);
          }
        }, 50); // update the counter every second (1000 milliseconds)
        observer.unobserve(counterElement);
      }
    }, options);
    
    observer.observe(counterElement);
  
//   Image Horizonal scroll bar 

const slider = document.querySelector('.scroll-parent');
let isDown = false;
let startX;
let scrollLeft;

slider.addEventListener('mousedown', (e) => {
  isDown = true;
  slider.classList.add('active');
  startX = e.pageX - slider.offsetLeft;
  scrollLeft = slider.scrollLeft;
});
slider.addEventListener('mouseleave', () => {
  isDown = false;
  slider.classList.remove('active');
});
slider.addEventListener('mouseup', () => {
  isDown = false;
  slider.classList.remove('active');
});
slider.addEventListener('mousemove', (e) => {
  if(!isDown) return;
  e.preventDefault();
  const x = e.pageX - slider.offsetLeft;
  const walk = (x - startX) * 3; //scroll-fast
  slider.scrollLeft = scrollLeft - walk;
  console.log(walk);
});



// Hide the element until the animation starts-- enboss first paragraph
const element = document.querySelector('#atEnboss');

element.addEventListener('animationend', () => {
  element.classList.remove('animated');
});

// To trigger the animation and show the element:
element.classList.add('animated');


// start Updated Parks animation only when the parent element is in the user viewport
function isElementInViewport(el) {
  var rect = el.getBoundingClientRect();
  return (
    rect.top >= 0 &&
    rect.left >= 0 &&
    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
  );
}





// Create a new IntersectionObserver object
var observer = new IntersectionObserver(function(entries) {
  // Loop through the entries
  entries.forEach(function(entry) {
    // If the element is in the viewport
    if (entry.isIntersecting) {
      // Add the 'animate' class
      entry.target.classList.add('animate');
      // Unobserve the target element to stop watching for changes
      observer.unobserve(entry.target);
    }
  });
});

// Find the element you want to observe
var heading3 = document.querySelector('#heading3');

// Start observing the element
observer.observe(heading3);
///end of heading 3 animation



 // Image slideshow home page 
 const slideshowContainer = document.getElementById("slideshow-container");
 const slideshowImages = document.querySelectorAll(".slideshow-image");
 const prevButton = document.getElementById("prev-btn");
 const nextButton = document.getElementById("next-btn");
 const dots = document.querySelectorAll(".dot");
 
 // Initialize variables
 let currentIndex = 0;
 let intervalId;
 
 // Show first image and active dot
 showImage(currentIndex);
 activateDot(currentIndex);
 
 // Event listeners for buttons and dots
 prevButton.addEventListener("click", () => {
   currentIndex--;
   if (currentIndex < 0) {
     currentIndex = slideshowImages.length - 1;
   }
   showImage(currentIndex);
   activateDot(currentIndex);
 });
 
 nextButton.addEventListener("click", () => {
   currentIndex++;
   if (currentIndex >= slideshowImages.length) {
     currentIndex = 0;
   }
   showImage(currentIndex);
   activateDot(currentIndex);
 });
 
 dots.forEach((dot, index) => {
   dot.addEventListener("click", () => {
     currentIndex = index;
     showImage(currentIndex);
     activateDot(currentIndex);
   });
 });
 
 // Functions to show image and active dot
 function showImage(index) {
   slideshowImages.forEach((image) => {
     image.classList.remove("active");
   });
   slideshowImages[index].classList.add("active");
 }
 
 function activateDot(index) {
   dots.forEach((dot) => {
     dot.classList.remove("active-dot");
   });
   dots[index].classList.add("active-dot");
 }
 
 // Slideshow interval (optional)
 function startSlideshow() {
   intervalId = setInterval(() => {
     currentIndex++;
     if (currentIndex >= slideshowImages.length) {
       currentIndex = 0;
     }
     showImage(currentIndex);
     activateDot(currentIndex);
   }, 5000);
 }
 
 function stopSlideshow() {
   clearInterval(intervalId);
 }
 
 // Start or stop slideshow based on user interaction (optional)
 slideshowContainer.addEventListener("mouseover", stopSlideshow);
 slideshowContainer.addEventListener("mouseout", startSlideshow);
 
 // Start slideshow by default (optional)
 startSlideshow();





// End of index JavaScript
