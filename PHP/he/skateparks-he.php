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
  <meta property="og:image" content="http://enboss.co/svg/wall-link.png">
  <meta property="og:image:secure_url" content="https://enboss.co/svg/wall-link.png">
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
 
          <!--Hebrew Skateparks CSS File-->
<link rel="StyleSheet" href="/css/HebrewCSS/parks.css" />
<link rel="StyleSheet" href="/css/HebrewCSS/dark.css" />


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
<div class="background-image"></div>

  <!-- Header Section -->
  <?php include('http://localhost/projects/enboss.co/view/he/hebrew-header.php'); ?>
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
                      <div class="itemImg">
                        <img src="/images/Park480-webp/kiryat-ata.webp" alt="סקייטפארק קרית אתא" loading="lazy">
                        </div>
                        <div class="gallery-text"><h2>קרית אתא</h2></div>
                      </a>
                    </div>

                    <div class="item north">
                      <a href="/he/skateparks/zichron-yaakov">
                      <div class="itemImg">
                        <img src="/images/Park480-webp/zichron-yaakov.webp" alt="סקייטפארק זכרון יעקב" loading="lazy">
                        </div>
                        <div class="gallery-text"><h2>זכרון יעקב</h2></div>
                    </a>
                </div>
                    
                <div class="item south">
                  <a href="/he/skateparks/dimona">
                      <div class="itemImg">
                      <img src="/images/Park480-webp/dimona.webp" alt="סקייטפארק דימונה" loading="lazy">
                        </div>
                      <div class="gallery-text"><h2>דימונה</h2></div>
                  </a>
              </div>    

                    <div class="item north">
                      <a href="/he/skateparks/nahariya">
                      <div class="itemImg">
                        <img src="/images/Park480-webp/nahariya.webp" alt="סקייטפארק נהריה" loading="lazy">
                        </div>
                        <div class="gallery-text"><h2>נהריה</h2></div>
                    </a>
                  </div>

                    <div class="item center">
                      <a href="/he/skateparks/raanana">
                      <div class="itemImg">
                        <img src="/images/Park480-webp/raanana.webp" alt="סקייטפארק רעננה" loading="lazy">
                        </div>
                        <div class="gallery-text"><h2>רעננה</h2></div>
                    </a>
                </div> 
                
                    <div class="item south">
                      <a href="/he/skateparks/jerusalem-gan-sacher">
                      <div class="itemImg">
                        <img src="/images/Park480-webp/jeruGanSacher.webp" alt="סקייטפארק ירושלים גן סאקר" loading="lazy">
                        </div>
                        <div class="gallery-text"><h2>ירושלים גן סאקר</h2></div>
                      </a>
                  </div>

                  <div class="item center">
                    <a href="/he/skateparks/holon">
                      <div class="itemImg">
                      <img src="/images/Park480-webp/holon.webp" alt="סקייטפארק חולון" loading="lazy">
                        </div>
                      <div class="gallery-text"><h2>חולון</h2></div>
                  </a>
              </div> 


                  <div class="item north">
                    <a href="/he/skateparks/hadera">
                      <div class="itemImg">
                      <img src="/images/Park480-webp/hadera.webp" alt="סקייטפארק חדרה" loading="lazy">
                        </div>
                      <div class="gallery-text"><h2>חדרה</h2></div>
                    </a>
                </div>  


                  <div class="item center">
                    <a href="/he/skateparks/lod">
                      <div class="itemImg">
                      <img src="/images/Park480-webp/lod.webp" alt="סקייטפארק לוד" loading="lazy">
                        </div>
                      <div class="gallery-text"><h2>לוד</h2></div>
                  </a>
              </div>

                  <div class="item south">
                    <a href="/he/skateparks/mitzpe-ramon">
                      <div class="itemImg">
                      <img src="/images/Park480-webp/mitzpe-ramon.webp" alt="סקייטפארק מצפה רמון" loading="lazy">
                        </div>
                      <div class="gallery-text"><h2>מצפה רמון</h2></div>
                  </a>
              </div>  

                  <div class="item south">
                    <a href="/he/skateparks/beer-sheva">
                      <div class="itemImg">
                      <img src="/images/Park480-webp/beer-sheva.webp" alt="סקייטפארק באר שבע" loading="lazy">
                        </div>
                      <div class="gallery-text"><h2>באר שבע</h2></div>
                    </a>
                  </div>  

                  <div class="item south">
                    <a href="/he/skateparks/jerusalem-gan-hapaamon">
                      <div class="itemImg">
                      <img src="/images/Park480-webp/jeruGanHapaamon.webp" alt="סקייטפארק ירושלים גן הפעמון" loading="lazy">
                        </div>
                      <div class="gallery-text"><h2>ירושלים גן הפעמון</h2></div>
                  </a>
              </div>

                  <div class="item south">
                    <a href="/he/skateparks/ashdod">
                      <div class="itemImg">
                      <img src="/images/Park480-webp/ashdod.webp" alt="סקייטפארק אשדוד" loading="lazy">
                        </div>
                      <div class="gallery-text"><h2>אשדוד</h2></div>
                  </a>
              </div> 

                  <div class="item center">
                    <a href="/he/skateparks/kfar-saba">
                      <div class="itemImg">
                      <img src="/images/Park480-webp/kfar-saba.webp" alt="סקייטפארק כפר סבא" loading="lazy">
                        </div>
                      <div class="gallery-text"><h2>כפר סבא</h2></div>
                  </a>
              </div>  

                  <div class="item south">
                    <a href="/he/skateparks/beer-sheva-bike-park">
                      <div class="itemImg">
                      <img src="/images/Park480-webp/beer-sheva-bike.webp" alt="בייקפארק באר שבע" loading="lazy">
                        </div>
                      <div class="gallery-text"><h2>באר שבע בייק פארק</h2></div>
                  </a>
              </div> 

                  <div class="item center">
                    <a href="/he/skateparks/givatayim">
                      <div class="itemImg">
                      <img src="/images/Park480-webp/givatayim.webp" alt="סקייטפארק גבעתיים" loading="lazy">
                        </div>
                      <div class="gallery-text"><h2>גבעתיים</h2></div>
                  </a>
              </div> 

                  <div class="item center">
                    <a href="/he/skateparks/herzliya">
                      <div class="itemImg">
                      <img src="/images/Park480-webp/herzliya.webp" alt="סקייטפארק הרצליה" loading="lazy">
                        </div>
                      <div class="gallery-text"><h2>הרצליה</h2></div>
                  </a>
              </div>  
                  <div class="item center">
                    <a href="/he/skateparks/netanya">
                      <div class="itemImg">
                      <img src="/images/Park480-webp/netanya.webp" alt="סקייטפארק נתניה" loading="lazy">
                        </div>
                      <div class="gallery-text"><h2>נתניה</h2></div>
                  </a>
              </div>  

                  <div class="item center">
                    <a href="/he/skateparks/tel-aviv">
                      <div class="itemImg">
                      <img src="/images/Park480-webp/tel-aviv.webp" alt="סקייטפארק תל אביב" loading="lazy">
                        </div>
                      <div class="gallery-text"><h2>תל אביב</h2></div>
                  </a>
              </div>  

                  <div class="item center">
                    <a href="/he/skateparks/rosh-haayin">
                      <div class="itemImg">
                      <img src="/images/Park480-webp/rosh-haayin.webp" alt="סקייטפארק ראש העין" loading="lazy">
                        </div>
                      <div class="gallery-text"><h2>ראש העין</h2></div>
                  </a>
              </div>  

                  <div class="item center">
                    <a href="/he/skateparks/modiin-moriah-park">
                      <div class="itemImg">
                      <img src="/images/Park480-webp/modiinMoriah.webp" alt="סקייטפארק מוריה מודיעין" loading="lazy">
                        </div>
                      <div class="gallery-text"><h2>מודיעין פארק מוריה</h2></div>
                  </a>
              </div>  

                  <div class="item center">
                    <a href="/he/skateparks/hod-hasharon">
                      <div class="itemImg">
                      <img src="/images/Park480-webp/hod-hasharon.webp" alt="סקייטפארק הוד השרון" loading="lazy">
                        </div>
                      <div class="gallery-text"><h2>הוד השרון</h2></div>
                  </a>
              </div>   

                  <div class="item north">
                    <a href="/he/skateparks/haifa">
                      <div class="itemImg">
                      <img src="/images/Park480-webp/haifa.webp" alt="סקייטפארק חיפה" loading="lazy">
                        </div>
                      <div class="gallery-text"><h2>חיפה</h2></div>
                  </a>
              </div>

                  <div class="item center">
                    <a href="/he/skateparks/rishon-lezion">
                      <div class="itemImg">
                      <img src="/images/Park480-webp/rishon-lezion.webp" alt="סקייטפארק ראשון לציון" loading="lazy">
                        </div>
                      <div class="gallery-text"><h2>ראשון לציון</h2></div>
                  </a>
              </div>  

                  <div class="item center">
                    <a href="/he/skateparks/petah-tikva">
                      <div class="itemImg">
                      <img src="/images/Park480-webp/petah-tikva.webp" alt="סקייטפארק פתח תקווה" loading="lazy">
                        </div>
                      <div class="gallery-text"><h2>פתח תקווה</h2></div>
                  </a>
              </div>

              <div class="item center">
                <a href="/he/skateparks/ramat-gan-2">
                      <div class="itemImg">
                  <img src="/images/Park480-webp/ramat-gan(2).webp" alt="סקייטפארק רמת גן" loading="lazy">
                        </div>
                  <div class="gallery-text"><h2>רמת גן</h2></div>
              </a>
          </div>  

                  <div class="item center">
                    <a href="/he/skateparks/ramat-gan">
                      <div class="itemImg">
                      <img src="/images/Park480-webp/ramat-gan.webp" alt="סקייטפארק רמת גן - קרית קריניצי" loading="lazy">
                        </div>
                      <div class="gallery-text"><h2>רמת גן -קרית קריניצי<!--<strong style="font-size: 0.75rem;">- נסגר לצמיתות</strong>--></h2></div>
                  </a>
              </div>  

                  <div class="item center">
                    <a href="/he/skateparks/modiin-buchman-park">
                      <div class="itemImg">
                      <img src="/images/Park480-webp/modiinBuchman.webp" alt="סקייטפארק בוכמן מודיעין" loading="lazy">
                        </div>
                      <div class="gallery-text"><h2>מודיעין פארק בוכמן</h2></div>
                  </a>
              </div>  

                  <div class="item center">
                    <a href="/he/skateparks/kfar-yona">
                      <div class="itemImg">
                      <img src="/images/Park480-webp/kfar-yona.webp" alt="סקייטפארק כפר יונה" loading="lazy">
                        </div>
                      <div class="gallery-text"><h2>כפר יונה</h2></div>
                  </a>
              </div> 

                  <div class="item center">
                    <a href="/he/skateparks/tzur-yigal">
                      <div class="itemImg">
                      <img src="/images/Park480-webp/tzur-yigal.webp" alt="סקייטפארק צור יגאל" loading="lazy">
                        </div>
                      <div class="gallery-text"><h2>צור יגאל</h2></div>
                  </a>
              </div>

                  <div class="item center">
                    <a href="/he/skateparks/ramla">
                      <div class="itemImg">
                      <img src="/images/Park480-webp/ramla.webp" alt="סקייטפארק רמלה" loading="lazy">
                        </div>
                      <div class="gallery-text"><h2>רמלה</h2></div>
                  </a>
              </div>

                  <div class="item north">
                    <a href="/he/skateparks/caesarea">
                      <div class="itemImg">
                      <img src="/images/Park480-webp/caesarea.webp" alt="סקייטפארק קיסריה" loading="lazy">
                        </div>
                      <div class="gallery-text"><h2>קיסריה</h2></div>
                  </a>
              </div>

                  <div class="item center">
                    <a href="/he/skateparks/gedera">
                      <div class="itemImg">
                      <img src="/images/Park480-webp/gedera.webp" alt="סקייטפארק גדרה" loading="lazy">
                        </div>
                      <div class="gallery-text"><h2>גדרה</h2></div>
                  </a>
              </div>

              <div class="item center">
                <a href="/he/skateparks/kadima-zoran">
                      <div class="itemImg">
                  <img src="/images/Park480-webp/kadima-zoran.webp" alt="סקייטפארק קדימה צורן" loading="lazy">
                        </div>
                  <div class="gallery-text"><h2>קדימה צורן</h2></div>
              </a>
          </div>

          <div class="item south">
                <a href="/he/skateparks/kidron">
                      <div class="itemImg">
                  <img src="/images/Park480-webp/kidron.webp" style="filter: saturate(1.2);" alt="סקייטפארק קדרון" loading="lazy">
                        </div>
                  <div class="gallery-text"><h2>קדרון</h2></div>
              </a>
          </div>

          <div class="item center">
                <a href="/he/skateparks/yehud">
                      <div class="itemImg">
                  <img src="/images/Park480-webp/yehud.webp" style="filter: saturate(1.2);" alt="סקייטפארק יהוד-מונוסון" loading="lazy">
                        </div>
                  <div class="gallery-text"><h2>יהוד-מונוסון</h2></div>
              </a>
          </div>

          <div class="item center">
                <a href="/he/skateparks/ariel">
                      <div class="itemImg">
                  <img src="/images/Park480-webp/ariel.webp" style="filter: saturate(1.2);" alt="סקייטפארק אריאל" loading="lazy">
                        </div>
                  <div class="gallery-text"><h2>אריאל</h2></div>
              </a>
          </div>

          <div class="item south">
          <a href="/he/skateparks/sderot">
                      <div class="itemImg">
                  <img src="/images/Park480-webp/sderot.webp" alt="סקייטפארק שדרות" loading="lazy">
                        </div>
                  <div class="gallery-text"><h2>שדרות</h2></div>
              </a>
          </div>
          
          <div class="item south">
          <a href="/he/skateparks/kiryat-gat">
                      <div class="itemImg">
                  <img src="/images/Park480-webp/kiryat-gat.webp" alt="סקייטפארק קרית גת" loading="lazy">
                    </div>
                  <div class="gallery-text"><h2>קרית גת</h2></div>
              </a>
          </div>


          <div class="item center">
                <a href="/he/skateparks/bat-yam">
                      <div class="itemImg">
                  <img src="/images/Park480-webp/bat-yam.webp" alt="סקייטפארק בת ים" loading="lazy">
                  </div>
                  <div class="gallery-text"><h2>בת ים</h2></div>
              </a>
          </div>


          <div class="item south">
          <a href="/he/skateparks/eilat">
                      <div class="itemImg">
                  <img src="/images/Park480-webp/eilat.webp" alt="סקייטפארק אילת" loading="lazy">
                    </div>
                  <div class="gallery-text"><h2>אילת</h2></div>
              </a>
          </div>

          <div class="item center">
          <a href="/he/skateparks/tel-aviv-2">
                      <div class="itemImg">
                  <img src="/images/Park480-webp/tel-aviv(2).webp" alt="סקייטפארק תל אביב" loading="lazy">
                    </div>
                  <div class="gallery-text"><h2>תל אביב - רמת החייל</h2></div>
              </a>
          </div>

                            <div class="item south">
          <a href="/he/skateparks/jerusalem-har-homa">
                      <div class="itemImg">
                  <img src="/images/Park480-webp/har-homa.webp" alt="סקייטפארק ירושלים הר חומה" loading="lazy">
                    </div>
                  <div class="gallery-text"><h2>ירושלים - הר חומה</h2></div>
              </a>
          </div>

        </div>
    </div>

        <!--   Footer Section    -->
        <?php include('../../view/he/hebrew-footer.php'); ?>
</main>
</body>

<script>
  // Wait for the DOM to be fully loaded before executing the script
  document.addEventListener("DOMContentLoaded", function () {
    // Get all elements with the class 'itemImg'
    var itemImgs = document.querySelectorAll('.itemImg');

    // Iterate over each 'itemImg' element
    itemImgs.forEach(function (itemImg) {
      // Attach a 'mouseover' event listener to each 'itemImg'
      itemImg.addEventListener('mouseover', function () {
        // Create an audio element
        var audio = new Audio('../../sound/ipad_click-99325.mp3');

        // Set custom volume (0.0 to 1.0)
        audio.volume = 0.4; // Adjust the volume as needed (0.0 to 1.0)

        // Set custom playback speed (1.0 is normal speed)
        audio.playbackRate = 1.0; // Adjust the speed as needed (1.0 is normal speed)

        // Play the audio
        audio.play();
      });
    });
  });
</script>

</html>
