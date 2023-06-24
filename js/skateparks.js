// scroll to top button script

// Get the button
let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}


/// shuffle the divs script

// Get the parent div and the child divs
const parentDiv = document.querySelector('.image-contain');
const childDivs = Array.from(document.querySelectorAll('.skate-gal'));

// Shuffle the child divs randomly
function shuffleDivs() {
  for (let i = childDivs.length - 1; i > 0; i--) {
    const j = Math.floor(Math.random() * (i + 1));
    [childDivs[i], childDivs[j]] = [childDivs[j], childDivs[i]];
  }
}

shuffleDivs();

// Append the shuffled child divs to the parent div
childDivs.forEach(div => {
  parentDiv.appendChild(div);
});

// end of skateparks javascript
  // Get all the image elements on the page
  const images = document.querySelectorAll('img');

  // Loop through each image and add an event listener to it
  images.forEach(image => {
    // Add a grey background to the parent div
    image.parentElement.classList.add('grey-background');

    // Add an event listener to the image to remove the grey background
    // once the image has finished loading
    image.addEventListener('load', () => {
      image.parentElement.classList.remove('grey-background');
    });
  });