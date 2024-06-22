// URL CHAGNER BUTTON SCRIPT
document.getElementById("urlChanger").addEventListener("click", function(event) {
  event.preventDefault();
  
  var url = window.location.href;
  
  if (url.includes(".co/en/")) {
    var modifiedURL = url.replace(".co/en/", ".co/he/");
    window.location.href = modifiedURL;
  } else if (url.includes(".co/en")) {
    var modifiedURL = url.replace(".co/en", ".co/he");
    window.location.href = modifiedURL;
  } else if (url.includes(".co/he/")) {
    var modifiedURL = url.replace(".co/he/", ".co/en/");
    window.location.href = modifiedURL;
  } else if (url.includes(".co/he")) {
    var modifiedURL = url.replace(".co/he", ".co/en");
    window.location.href = modifiedURL;
  } else if (url.endsWith(".co/")) {
    var modifiedURL = url + "en";
    window.location.href = modifiedURL;
  } else if (url.endsWith(".co")) {
    var modifiedURL = url + "/en";
    window.location.href = modifiedURL;
  }
});




document.getElementById("burger").addEventListener("click", function() {
    var headNav = document.querySelector(".head-nav");
    headNav.classList.toggle("active-menu");
});
document.addEventListener("DOMContentLoaded", function() {
  const checkbox = document.getElementById("check");
  const headNav = document.querySelector(".head-nav");
  const searchSVG = document.querySelector('.search-svg');
  const theHeader = document.querySelector('header');
  const headerMiddle = document.querySelector('.header-middle');
  const headerBottom = document.querySelector('.header-bottom');

  function handleOutsideClick(event) {
      if (checkbox.checked && !headNav.contains(event.target) && !event.target.closest("#burger")) {
          executeCheckboxUncheckedLogic();
      }
  }

  function executeCheckboxUncheckedLogic() {
      headNav.classList.add('disabled');
      setTimeout(function() {
          headNav.classList.remove('disabled');
      }, 400);
      headNav.classList.remove("active-menu");
      theHeader.classList.remove('active-menu');
      checkbox.checked = false;
  }

  function removeMiddleSearch() {
      if (headerMiddle.classList.contains('active-search')) {
          headerMiddle.classList.add('searched');
          setTimeout(function() {
              headerMiddle.classList.remove('searched');
          }, 400);
          headerMiddle.classList.remove('active-search');
          headerBottom.classList.remove('active-searched');
      }
  }

  checkbox.addEventListener("change", function() {
      if (this.checked) {
        removeMiddleSearch();
          headNav.classList.add("active-menu");
          theHeader.classList.add('active-menu');
          theHeader.classList.remove('active-search');

          // Other checkbox checked logic
      } else {
          executeCheckboxUncheckedLogic();

      }

      // Toggle clicked and disabled classes on searchSVG
      if (searchSVG.classList.contains('clicked')) {
          searchSVG.classList.remove('clicked');
          searchSVG.classList.add('disabled');
      }
  });

  document.addEventListener("click", handleOutsideClick);

  // Call the function when needed
});







function moveHeadNav() {
const screenWidth = window.innerWidth;
const headNav = document.querySelector(".head-nav");
const mobileMenuSection = document.querySelector(".mobile-menu");
const headerTopSection = document.querySelector(".header-top");

if (screenWidth < 1025 && !mobileMenuSection.contains(headNav)) {
  // If screen width is under 1025px and head-nav is not already in mobile-menu section
  mobileMenuSection.appendChild(headNav);
} else if (screenWidth >= 1025 && mobileMenuSection.contains(headNav)) {
  // If screen width is 1025px or more and head-nav is in mobile-menu section
  const secondChild = headerTopSection.children[1];
  if (secondChild) {
      headerTopSection.insertBefore(headNav, secondChild);
  } else {
      headerTopSection.appendChild(headNav);
  }
}
}

// Initial call to move the head-nav and change its position on page load
moveHeadNav();

// Listen for window resize events to move head-nav dynamically
window.addEventListener("resize", moveHeadNav);




// Dark Mode switcher  
const prefersDark = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;

document.addEventListener('DOMContentLoaded', function() {
if (prefersDark) {
  document.body.classList.add('dark');
  var colorButton = document.getElementById('colorButton');
  colorButton.classList.add('active');
  updateMetaThemeColor('#202124'); // var(--ne-grey)
}

const darkModeSwitcher = document.querySelector('.dark-mode-switcher');
if (darkModeSwitcher) {
  darkModeSwitcher.addEventListener('click', function(e) {
    document.body.classList.toggle('dark');
    e.preventDefault();
    const isDarkMode = document.body.classList.contains('dark');
    updateMetaThemeColor(isDarkMode ? '#202124' : '#f0f2f4');
  });
}
});

var colorButton = document.getElementById('colorButton');
var isColorChanged = false;
var isActive = false;

colorButton.addEventListener('click', function() {
var body = document.body;
var activeMode = document.querySelector('.active-mode');
var inactiveMode = document.querySelector('.inactive-mode');
var toggleButton = document.querySelector('.toggle-button');

isActive = !isActive;

if (isActive) {
  colorButton.classList.add('active');
  body.classList.add('dark');
  updateMetaThemeColor('#202124'); // var(--ne-grey)
} else {
  colorButton.classList.remove('active');
  body.classList.remove('dark');
  updateMetaThemeColor('#f0f2f4');
}
});

// Function to update the meta theme-color value
function updateMetaThemeColor(color) {
var metaThemeColor = document.querySelector("meta[name='theme-color']");
if (metaThemeColor) {
  metaThemeColor.setAttribute('content', color);
} else {
  var newMetaTag = document.createElement('meta');
  newMetaTag.setAttribute('name', 'theme-color');
  newMetaTag.setAttribute('content', color);
  document.head.appendChild(newMetaTag);
}
}

// Set the button to active if the user is already in dark mode
if (prefersDark) {
isActive = true;
isColorChanged = true;
updateMetaThemeColor('#000000');
} else {
updateMetaThemeColor('#f0f2f4');
}