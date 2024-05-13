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


    

    // BURGER MENU SCRIPT
    document.getElementById("burger").addEventListener("click", function() {
      var headNav = document.querySelector(".head-nav");
      headNav.classList.toggle("active-menu");
  });


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
