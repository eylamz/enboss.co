<!DOCTYPE html>
<!DOCTYPE html>
<html lang="he_IL">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <title>פארקים | ENBOSS</title>
  <meta property="og:type" content="website">
  <meta property="og:title" content="פארקים | ENBOSS">
  <meta property="og:image" content="http://enboss.co/svg/EnbossColorImg.webp">
  <meta property="og:image:secure_url" content="https://enboss.co/svg/EnbossColorImg.webp">
  <meta property="og:description" content="ENBOSS - Unite & Ride">
  <meta property="og:url" content="http://www.enboss.co/he/skateparks">
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
<link rel="StyleSheet" href="/css/HebrewCSS/parks.css" />

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
<div class="background-image"></div>

  <!-- Header Section -->
  <?php include('../../view/he/hebrew-header.php'); ?>
<!-- End of Header Section-->
<main class="body-move">
    <div class="park-container">
        <h1>סקייטפארקים</h1>
        <h2>מצא את המקום המיוחד שלך
        </h2>
        <div class="park-menu">
            <button class="btn" data-name="south">דרום</button>
            <button class="btn" data-name="center">מרכז</button>
            <button class="btn" data-name="north">צפון</button>
            <button class="btn active" data-name="all">הכל</button>
        </div>

                <div class="items">
                    <div class="item north">
                      <a href="/he/skateparks/kiryat-ata">
                        <img src="/images/Park480-webp/kiryat-ata.webp" alt="סקייטפארק קרית אתא" loading="lazy">
                        <div class="gallery-text"><h2>קרית אתא</h2></div>
                      </a>
                    </div>

                    <div class="item north">
                      <a href="/he/skateparks/zichron-yaakov">
                        <img src="/images/Park480-webp/zichron-yaakov.webp" alt="סקייטפארק זכרון יעקב" loading="lazy">
                        <div class="gallery-text"><h2>זכרון יעקב</h2></div>
                    </a>
                </div>
                    
                <div class="item south">
                  <a href="/he/skateparks/dimona">
                      <img src="/images/Park480-webp/dimona.webp" alt="סקייטפארק דימונה" loading="lazy">
                      <div class="gallery-text"><h2>דימונה</h2></div>
                  </a>
              </div>    

                    <div class="item north">
                      <a href="/he/skateparks/nahariya">
                        <img src="/images/Park480-webp/nahariya.webp" alt="סקייטפארק נהריה" loading="lazy">
                        <div class="gallery-text"><h2>נהריה</h2></div>
                    </a>
                  </div>

                    <div class="item center">
                      <a href="/he/skateparks/raanana">
                        <img src="/images/Park480-webp/raanana.webp" alt="סקייטפארק רעננה" loading="lazy">
                        <div class="gallery-text"><h2>רעננה</h2></div>
                    </a>
                </div> 
                
                    <div class="item south">
                      <a href="/he/skateparks/jerusalem-gan-sacher">
                        <img src="/images/Park480-webp/jeruGanSacher.webp" alt="סקייטפארק ירושלים גן סאקר" loading="lazy">
                        <div class="gallery-text"><h2>ירושלים גן סאקר</h2></div>
                      </a>
                  </div>

                  <div class="item center">
                    <a href="/he/skateparks/holon">
                      <img src="/images/Park480-webp/holon.webp" alt="סקייטפארק חולון" loading="lazy">
                      <div class="gallery-text"><h2>חולון</h2></div>
                  </a>
              </div> 


                  <div class="item north">
                    <a href="/he/skateparks/hadera">
                      <img src="/images/Park480-webp/hadera.webp" alt="סקייטפארק חדרה" loading="lazy">
                      <div class="gallery-text"><h2>חדרה</h2></div>
                    </a>
                </div>  


                  <div class="item center">
                    <a href="/he/skateparks/lod">
                      <img src="/images/Park480-webp/lod.webp" alt="סקייטפארק לוד" loading="lazy">
                      <div class="gallery-text"><h2>לוד</h2></div>
                  </a>
              </div>

                  <div class="item south"
                    <a href="/he/skateparks/mitzpe-ramon">
                      <img src="/images/Park480-webp/mitzpe-ramon.webp" alt="סקייטפארק מצפה רמון" loading="lazy">
                      <div class="gallery-text"><h2>מצפה רמון</h2></div>
                  </a>
              </div>  

                  <div class="item south">
                    <a href="/he/skateparks/beer-sheva">
                      <img src="/images/Park480-webp/beer-sheva.webp" alt="סקייטפארק באר שבע" loading="lazy">
                      <div class="gallery-text"><h2>באר שבע</h2></div>
                    </a>
                  </div>  

                  <div class="item south">
                    <a href="/he/skateparks/jerusalem-gan-hapaamon">
                      <img src="/images/Park480-webp/jeruGanHapaamon.webp" alt="סקייטפארק ירושלים גן הפעמון" loading="lazy">
                      <div class="gallery-text"><h2>ירושלים גן הפעמון</h2></div>
                  </a>
              </div>

                  <div class="item south">
                    <a href="/he/skateparks/ashdod">
                      <img src="/images/Park480-webp/ashdod.webp" alt="סקייטפארק אשדוד" loading="lazy">
                      <div class="gallery-text"><h2>אשדוד</h2></div>
                  </a>
              </div> 

                  <div class="item center">
                    <a href="/he/skateparks/kfar-saba">
                      <img src="/images/Park480-webp/kfar-saba.webp" alt="סקייטפארק כפר סבא" loading="lazy">
                      <div class="gallery-text"><h2>כפר סבא</h2></div>
                  </a>
              </div>  

                  <div class="item south">
                    <a href="/he/skateparks/beer-sheva-bike-park">
                      <img src="/images/Park480-webp/beer-sheva-bike.webp" alt="בייקפארק באר שבע" loading="lazy">
                      <div class="gallery-text"><h2>באר שבע בייק פארק</h2></div>
                  </a>
              </div> 

                  <div class="item center">
                    <a href="/he/skateparks/givatayim">
                      <img src="/images/Park480-webp/givatayim.webp" alt="סקייטפארק גבעתיים" loading="lazy">
                      <div class="gallery-text"><h2>גבעתיים</h2></div>
                  </a>
              </div> 

                  <div class="item center">
                    <a href="/he/skateparks/herzliya">
                      <img src="/images/Park480-webp/herzliya.webp" alt="סקייטפארק הרצליה" loading="lazy">
                      <div class="gallery-text"><h2>הרצליה</h2></div>
                  </a>
              </div>  
                  <div class="item center">
                    <a href="/he/skateparks/netanya">
                      <img src="/images/Park480-webp/netanya.webp" alt="סקייטפארק נתניה" loading="lazy">
                      <div class="gallery-text"><h2>נתניה</h2></div>
                  </a>
              </div>  

                  <div class="item center">
                    <a href="/he/skateparks/tel-aviv">
                      <img src="/images/Park480-webp/tel-aviv.webp" alt="סקייטפארק תל אביב" loading="lazy">
                      <div class="gallery-text"><h2>תל אביב</h2></div>
                  </a>
              </div>  

                  <div class="item center">
                    <a href="/he/skateparks/rosh-haayin">
                      <img src="/images/Park480-webp/rosh-haayin.webp" alt="סקייטפארק ראש העין" loading="lazy">
                      <div class="gallery-text"><h2>ראש העין</h2></div>
                  </a>
              </div>  

                  <div class="item center">
                    <a href="/he/skateparks/modiin-moriah-park">
                      <img src="/images/Park480-webp/modiinMoriah.webp" alt="סקייטפארק מוריה מודיעין" loading="lazy">
                      <div class="gallery-text"><h2>מודיעין פארק מוריה</h2></div>
                  </a>
              </div>  

                  <div class="item center">
                    <a href="/he/skateparks/hod-hasharon">
                      <img src="/images/Park480-webp/hod-hasharon.webp" alt="סקייטפארק הוד השרון" loading="lazy">
                      <div class="gallery-text"><h2>הוד השרון</h2></div>
                  </a>
              </div>   

                  <div class="item north">
                    <a href="/he/skateparks/haifa">
                      <img src="/images/Park480-webp/haifa.webp" alt="סקייטפארק חיפה" loading="lazy">
                      <div class="gallery-text"><h2>חיפה</h2></div>
                  </a>
              </div>

                  <div class="item center">
                    <a href="/he/skateparks/rishon-lezion">
                      <img src="/images/Park480-webp/rishon-lezion.webp" alt="סקייטפארק ראשון לציון" loading="lazy">
                      <div class="gallery-text"><h2>ראשון לציון</h2></div>
                  </a>
              </div>  

                  <div class="item center">
                    <a href="/he/skateparks/petah-tikva">
                      <img src="/images/Park480-webp/petah-tikva.webp" alt="סקייטפארק פתח תקווה" loading="lazy">
                      <div class="gallery-text"><h2>פתח תקווה</h2></div>
                  </a>
              </div>

              <div class="item center">
                <a href="/he/skateparks/ramat-gan-2">
                  <img src="/images/Park480-webp/ramat-gan(2).webp" alt="סקייטפארק רמת גן" loading="lazy">
                  <div class="gallery-text"><h2>רמת גן</h2></div>
              </a>
          </div>  

                  <div class="item center">
                    <a href="/he/skateparks/ramat-gan">
                      <img src="/images/Park480-webp/ramat-gan.webp" alt="סקייטפארק רמת גן - קרית קריניצי" loading="lazy">
                      <div class="gallery-text"><h2>רמת גן -קרית קריניצי<!--<strong style="font-size: 0.75rem;">- נסגר לצמיתות</strong>--></h2></div>
                  </a>
              </div>  

                  <div class="item center">
                    <a href="/he/skateparks/modiin-buchman-park">
                      <img src="/images/Park480-webp/modiinBuchman.webp" alt="סקייטפארק בוכמן מודיעין" loading="lazy">
                      <div class="gallery-text"><h2>מודיעין פארק בוכמן</h2></div>
                  </a>
              </div>  

                  <div class="item center">
                    <a href="/he/skateparks/kfar-yona">
                      <img src="/images/Park480-webp/kfar-yona.webp" alt="סקייטפארק כפר יונה" loading="lazy">
                      <div class="gallery-text"><h2>כפר יונה</h2></div>
                  </a>
              </div> 

                  <div class="item center">
                    <a href="/he/skateparks/tzur-yigal">
                      <img src="/images/Park480-webp/tzur-yigal.webp" alt="סקייטפארק צור יגאל" loading="lazy">
                      <div class="gallery-text"><h2>צור יגאל</h2></div>
                  </a>
              </div>

                  <div class="item center">
                    <a href="/he/skateparks/ramla">
                      <img src="/images/Park480-webp/ramla.webp" alt="סקייטפארק רמלה" loading="lazy">
                      <div class="gallery-text"><h2>רמלה</h2></div>
                  </a>
              </div>

                  <div class="item north">
                    <a href="/he/skateparks/caesarea">
                      <img src="/images/Park480-webp/caesarea.webp" alt="סקייטפארק קיסריה" loading="lazy">
                      <div class="gallery-text"><h2>קיסריה</h2></div>
                  </a>
              </div>

                  <div class="item center">
                    <a href="/he/skateparks/gedera">
                      <img src="/images/Park480-webp/gedera.webp" alt="סקייטפארק גדרה" loading="lazy">
                      <div class="gallery-text"><h2>גדרה</h2></div>
                  </a>
              </div>

              <div class="item center">
                <a href="/he/skateparks/kadima-zoran">
                  <img src="/images/Park480-webp/kadima-zoran.webp" alt="סקייטפארק קדימה צורן" loading="lazy">
                  <div class="gallery-text"><h2>קדימה צורן</h2></div>
              </a>
          </div>

          <div class="item south">
                <a href="/he/skateparks/kidron">
                  <img src="/images/Park480-webp/kidron.webp" style="filter: saturate(1.2);" alt="סקייטפארק קדרון" loading="lazy">
                  <div class="gallery-text"><h2>קדרון</h2></div>
              </a>
          </div>

          <div class="item center">
                <a href="/he/skateparks/yehud">
                  <img src="/images/Park480-webp/yehud.webp" style="filter: saturate(1.2);" alt="סקייטפארק יהוד-מונוסון" loading="lazy">
                  <div class="gallery-text"><h2>יהוד-מונוסון</h2></div>
              </a>
          </div>

          <div class="item center">
                <a href="/he/skateparks/ariel">
                  <img src="/images/Park480-webp/ariel.webp" style="filter: saturate(1.2);" alt="סקייטפארק אריאל" loading="lazy">
                  <div class="gallery-text"><h2>אריאל</h2></div>
              </a>
          </div>

          <div class="item south">
          <a href="/he/skateparks/sderot">
                  <img src="/images/Park480-webp/sderot.webp" alt="סקייטפארק שדרות" loading="lazy">
                  <div class="gallery-text"><h2>שדרות</h2></div>
              </a>
          </div>
          
          <div class="item south">
          <a href="/he/skateparks/kiryat-gat">
                  <img src="/images/Park480-webp/kiryat-gat.webp" alt="סקייטפארק קרית גת" loading="lazy">
                  <div class="gallery-text"><h2>קרית גת</h2></div>
              </a>
          </div>


          <div class="item center">
                <a href="/he/skateparks/bat-yam">
                  <img src="/images/Park480-webp/bat-yam.webp" alt="סקייטפארק בת ים" loading="lazy">
                  <div class="gallery-text"><h2>בת ים</h2></div>
              </a>
          </div>

        </div>
    </div>

<!--   Footer Section    -->
<?php include('../../view/he/hebrew-footer.php'); ?>
  </main>
</body>

</html>