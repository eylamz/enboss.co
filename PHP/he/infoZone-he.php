<!DOCTYPE html>
<!DOCTYPE html>
<html lang="he_IL">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <title>אזור המידע | ENBOSS</title>
  <meta property="og:type" content="website">
  <meta property="og:title" content="אזור המידע | ENBOSS">
  <meta property="og:image" content="http://enboss.co/svg/wall-link.png">
  <meta property="og:image:secure_url" content="https://enboss.co/svg/wall-link.png">
  <meta property="og:description" content="ENBOSS - Unite & Ride">
  <meta property="og:url" content="http://www.enboss.co/he/info-zone">
  <meta property="og:site_name" content="ENBOSS">
  <meta name="theme-color" content="#f0f2f4">
  <link rel="icon" href="/svg/EnbossFavIcon.svg">

  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>



          <!--- Google Fonts -->
          <link rel="preconnect" href="https://fonts.googleapis.com">
          <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
          <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Public+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
          <link rel="StyleSheet" href="/css/HebrewCSS/hebrew-header.css" />
 
          <!--Hebrew Skateparks CSS File-->
<link rel="StyleSheet" href="/css/infoZoneCSS/he/infoZone.css">

          <!--- Hebrew Footer CSS File -->
          <link rel="StyleSheet" href="/css/HebrewCSS/hebrew-footer.css" />

<script> // filtering parks function
  // Wait for the document to load
  document.addEventListener("DOMContentLoaded", function () {
    // Get all the category buttons
    const buttons = document.querySelectorAll(".park-menu button");

    // Attach a click event listener to each button
    buttons.forEach(function (button) {
      button.addEventListener("click", function () {
        // Remove the 'active' class from all buttons
        buttons.forEach(function (btn) {
          btn.classList.remove("active");
        });

        // Add the 'active' class to the clicked button
        button.classList.add("active");

        // Get the category name from the button's data attribute
        const categoryName = button.getAttribute("data-name");

        // Get all the park items
        const items = document.querySelectorAll(".item");

        // Show or hide park items based on the selected category
        items.forEach(function (item) {
          if (categoryName === "all") {
            // Show all items if 'All' category is selected
            item.style.display = "block";
          } else if (item.classList.contains(categoryName)) {
            // Show items that belong to the selected category
            item.style.display = "block";
          } else {
            // Hide items that don't belong to the selected category
            item.style.display = "none";
          }
        });
      });
    });
  });
</script>

<script>// Shuffle items on page load and refresh
window.addEventListener("DOMContentLoaded", () => {
  shuffleItems();
});

function shuffleItems() {
  const itemsContainer = document.querySelector(".items");
  const items = Array.from(itemsContainer.children);
  const shuffledItems = shuffle(items);

  // Remove existing items
  itemsContainer.innerHTML = "";

  // Append shuffled items
  shuffledItems.forEach((item) => {
    itemsContainer.appendChild(item);
  });
}

function shuffle(array) {
  let currentIndex = array.length;
  let temporaryValue, randomIndex;

  // While there remain elements to shuffle...
  while (currentIndex !== 0) {
    // Pick a remaining element...
    randomIndex = Math.floor(Math.random() * currentIndex);
    currentIndex--;

    // And swap it with the current element.
    temporaryValue = array[currentIndex];
    array[currentIndex] = array[randomIndex];
    array[randomIndex] = temporaryValue;
  }

  return array;
}
</script>
            <!-- Enboss.co Google tag (gtag.js) -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=G-Q7RY353T78"></script>
            <script>
              window.dataLayer = window.dataLayer || [];
              function gtag(){dataLayer.push(arguments);}
              gtag('js', new Date());
            
              gtag('config', 'G-Q7RY353T78');
            </script> 
            <!-- End of Google Tag -->
            
</head>

<body>
  <!-- Header Section -->
  <?php include('../../view/he/hebrew-header.php'); ?>
<!-- End of Header Section-->
<main class="body-move">
    <div class="park-container">
        <h1>אזור המידע</h1>
        <h2>גלו, חקרו ולמדו </h2>
        <div class="park-menu">
            <button class="btn" data-name="roller">רולר</button>
            <button class="btn active" data-name="all">הכל</button>
        </div>

                <div class="items">
                    
                    <div class="item roller">
                        <a href="/he/info-zone/choosing-rollerblading-wheels">
                      <div class="itemImg">
                          <img src="/images/SVG/ChooseYourWheelThumb-he.svg" alt="איך לבחור הגלגלים לרולר שלכם" loading="lazy">
                      </div>
                          <div class="gallery-text"><h2>איך לבחור גלגלים לרולר שלכם</h2></div>
                        </a>
                      </div>

                    <div class="item roller">
                    <a href="/he/info-zone/choosing-the-right-frame">
                      <div class="itemImg">
                      <img src="/images/SVG/ChooseYourFrameThumb.svg" alt="בחירת הפריים הנכון בשבילך" loading="lazy">
                      </div>
                      <div class="gallery-text"><h2>בחירת הפריים הנכון בשבילך</h2></div>
                    </a>
                  </div>


        </div>
    </div>

<!--   Footer Section    -->
<?php include('../../view/he/hebrew-footer.php'); ?>
  </main>
</body>

</html>