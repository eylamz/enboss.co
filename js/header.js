const navbarMenu = document.getElementById("menu");
const burgerMenu = document.getElementById("burger");
const headerMenu = document.getElementById("header");
const bodyMove = document.querySelector('.body-move');


// Toggle Navbar Menu on Burger Click
if (burgerMenu && navbarMenu) {
   burgerMenu.addEventListener("click", () => {
     burgerMenu.classList.toggle("is-active");
     navbarMenu.classList.toggle("is-active");
     bodyMove.classList.toggle("slide");
   });
 }

// Close Navbar Menu on Links Click
document.querySelectorAll(".menu-link").forEach((link) => {
   link.addEventListener("click", () => {
      burgerMenu.classList.remove("is-active");
      navbarMenu.classList.remove("is-active");
   });
});

// Remove Navbar Menu Active Class on Click Outside of Menu
document.addEventListener("click", (event) => {
   const isClickInsideMenu = navbarMenu.contains(event.target) || burgerMenu.contains(event.target);
   if (!isClickInsideMenu && navbarMenu.classList.contains("is-active")) {
      navbarMenu.classList.remove("is-active");
      burgerMenu.classList.remove("is-active");
   }
});

// Fixed Navbar Menu on Window Resize
window.addEventListener("resize", () => {
   if (window.innerWidth >= 769) {
      if (navbarMenu.classList.contains("is-active")) {
         navbarMenu.classList.remove("is-active");
         burgerMenu.classList.remove("is-active");
      }
   }
});









// End of Header JavaScript
