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
