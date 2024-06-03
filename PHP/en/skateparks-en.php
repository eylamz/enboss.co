<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <title>Skateparks | ENBOSS</title>
  <meta property="og:type" content="website">
  <meta property="og:title" content="Skateparks | ENBOSS">
  <meta property="og:image" content="http://enboss.co/svg/wall-link.png">
  <meta property="og:image:secure_url" content="https://enboss.co/svg/wall-link.png">
  <meta property="og:description" content="Discover the perfect skatepark for your next thrilling adventure!">  
  <meta property="og:url" content="http://www.enboss.co/en/skateparks">
  <meta property="og:site_name" content="ENBOSS">
  <link rel="icon" href="/svg/EnbossFavIcon.svg">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>



          <!--- Google Fonts -->
          <link rel="preconnect" href="https://fonts.googleapis.com">
          <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
          <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Public+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

           <!--English Skateparks CSS File-->
           <link rel="StyleSheet" href="/css/EnglishCSS/parks.css" />

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
  <?php include('../../view/en/english-header.php'); ?>
<!-- End of Header Section-->
<main class="body-move">
    <div class="park-container">
        <h1>Skateparks</h1>
        <h2>Find your special place</h2>
        <div class="park-menu">
            <button class="btn active" data-name="all">All</button>
            <button class="btn" data-name="north">North</button>
            <button class="btn" data-name="center">Center</button>
            <button class="btn" data-name="south">South</button>
        </div>

                <div class="items">

                  <div class="item center">
                    <a href="/en/skateparks/ramat-gan-2">
                      <div class="itemImg">
                      <img src="/images/Park480-webp/ramat-gan(2).webp" alt="Ramat Gan - National Park" loading="lazy">
                        </div>
                      <div class="gallery-text"><h2>Ramat Gan - National Park</h2></div>
                    </a>
                  </div>

                    <div class="item north">
                      <a href="/en/skateparks/kiryat-ata">
                      <div class="itemImg">
                        <img src="/images/Park480-webp/kiryat-ata.webp" alt="Kiryat Ata" loading="lazy">
                        </div>
                      <div class="gallery-text"><h2>Kiryat Ata</h2></div>
                      </a>
                    </div>

                    <div class="item north">
                      <a href="/en/skateparks/zichron-yaakov">
                      <div class="itemImg">
                        <img src="/images/Park480-webp/zichron-yaakov.webp" alt="Zichron Yaakov" loading="lazy">
                        </div>
                       <div class="gallery-text"><h2>Zichron Ya'akov</h2></div>
                    </a>
                </div>
                    
                <div class="item south">
                  <a href="/en/skateparks/dimona">
                  <div class="itemImg">
                      <img src="/images/Park480-webp/dimona.webp" alt="Dimona" loading="lazy">
                      </div>
                    <div class="gallery-text"><h2>Dimona</h2></div>
                  </a>
              </div>    

                    <div class="item north">
                      <a href="/en/skateparks/nahariya">
                      <div class="itemImg">
                        <img src="/images/Park480-webp/nahariya.webp" alt="Nahariya" loading="lazy">
                        </div>
                      <div class="gallery-text"><h2>Nahariya</h2></div>
                    </a>
                  </div>

                    <div class="item center">
                      <a href="/en/skateparks/raanana">
                      <div class="itemImg">
                        <img src="/images/Park480-webp/raanana.webp" alt="Raanana" loading="lazy">
                        </div>
                      <div class="gallery-text"><h2>Ra'anana</h2></div>
                    </a>
                </div> 
                
                    <div class="item south">
                      <a href="/en/skateparks/jerusalem-gan-sacher">
                      <div class="itemImg">
                        <img src="/images/Park480-webp/jeruGanSacher.webp" alt="Jerusalem Gan Sacher" loading="lazy">
                        </div>
                        <div class="gallery-text"><h2>Jerusalem Gan Sacher</h2></div>
                      </a>
                  </div>

                  <div class="item center">
                    <a href="/en/skateparks/holon">
                      <div class="itemImg">
                      <img src="/images/Park480-webp/holon.webp" alt="Holon" loading="lazy">
                      </div>
                      <div class="gallery-text"><h2>Holon</h2></div>
                  </a>
              </div> 


                  <div class="item north">
                    <a href="/en/skateparks/hadera">
                      <div class="itemImg">
                      <img src="/images/Park480-webp/hadera.webp" alt="Hadera" loading="lazy">
                      </div>
                      <div class="gallery-text"><h2>Hadera</h2></div>
                    </a>
                </div>  


                  <div class="item center">
                    <a href="/en/skateparks/lod">
                      <div class="itemImg">
                      <img src="/images/Park480-webp/lod.webp" alt="Lod" loading="lazy">
                      </div>
                      <div class="gallery-text"><h2>Lod</h2></div>
                  </a>
              </div>

                  <div class="item south">
                    <a href="/en/skateparks/mitzpe-ramon">
                      <div class="itemImg">
                      <img src="/images/Park480-webp/mitzpe-ramon.webp" alt="Mitzpe Ramon" loading="lazy">
                      </div>
                      <div class="gallery-text"><h2>Mitzpe Ramon</h2></div>
                  </a>
              </div>  

                  <div class="item south">
                    <a href="/en/skateparks/beer-sheva">
                      <div class="itemImg">
                      <img src="/images/Park480-webp/beer-sheva.webp" alt="Beer Sheva" loading="lazy">
                      </div>
                      <div class="gallery-text"><h2>Be'er Sheva</h2></div>
                    </a>
                  </div>  

                  <div class="item south">
                    <a href="/en/skateparks/jerusalem-gan-hapaamon">
                      <div class="itemImg">
                      <img src="/images/Park480-webp/jeruGanHapaamon.webp" alt="Jerusalem Gan Hapa'amon" loading="lazy">
                      </div>
                      <div class="gallery-text"><h2>Jerusalem Gan Haapa'amon</h2></div>
                  </a>
              </div>

                  <div class="item south">
                    <a href="/en/skateparks/ashdod">
                      <div class="itemImg">
                      <img src="/images/Park480-webp/ashdod.webp" alt="Ashdod" loading="lazy">
                      </div>
                      <div class="gallery-text"><h2>Ashdod</h2></div>
                  </a>
              </div> 

                  <div class="item center">
                    <a href="/en/skateparks/kfar-saba">
                      <div class="itemImg">
                      <img src="/images/Park480-webp/kfar-saba.webp" alt="Kfar Saba" loading="lazy">
                      </div>
                      <div class="gallery-text"><h2>Kfar Saba</h2></div>
                  </a>
              </div>  

                  <div class="item south">
                    <a href="/en/skateparks/beer-sheva-bike-park">
                      <div class="itemImg">
                      <img src="/images/Park480-webp/beer-sheva-bike.webp" alt="Beer Sheva Bike Park" loading="lazy">
                      </div>
                      <div class="gallery-text"><h2>Be'er Sheva Bike Park</h2></div>
                  </a>
              </div> 

                  <div class="item center">
                    <a href="/en/skateparks/givatayim">
                      <div class="itemImg">
                      <img src="/images/Park480-webp/givatayim.webp" alt="Givatayim" loading="lazy">
                      </div>
                      <div class="gallery-text"><h2>Giv'atayim</h2></div>
                  </a>
              </div> 

                  <div class="item center">
                    <a href="/en/skateparks/herzliya">
                      <div class="itemImg">
                      <img src="/images/Park480-webp/herzliya.webp" alt="Herzliya" loading="lazy">
                      </div>
                      <div class="gallery-text"><h2>Herzliya</h2></div>
                  </a>
              </div>  
                  <div class="item center">
                    <a href="/en/skateparks/netanya">
                      <div class="itemImg">
                      <img src="/images/Park480-webp/netanya.webp" alt="Netanya" loading="lazy">
                      </div>
                      <div class="gallery-text"><h2>Netanya</h2></div>
                  </a>
              </div>  

                  <div class="item center">
                    <a href="/en/skateparks/tel-aviv">
                      <div class="itemImg">
                      <img src="/images/Park480-webp/tel-aviv.webp" alt="Tel Aviv" loading="lazy">
                      </div>
                      <div class="gallery-text"><h2>Tel Aviv</h2></div>
                  </a>
              </div>  

                  <div class="item center">
                    <a href="/en/skateparks/rosh-haayin">
                      <div class="itemImg">
                      <img src="/images/Park480-webp/rosh-haayin.webp" alt="Rosh Haayin" loading="lazy">
                      </div>
                      <div class="gallery-text"><h2>Rosh Ha'ayin</h2></div>
                  </a>
              </div>  

                  <div class="item center">
                    <a href="/en/skateparks/modiin-moriah-park">
                      <div class="itemImg">
                      <img src="/images/Park480-webp/modiinMoriah.webp" alt="Modiin Moriah Park" loading="lazy">
                      </div>
                      <div class="gallery-text"><h2>Modi'in Moriah Park</h2></div>
                  </a>
              </div>  

                  <div class="item center">
                    <a href="/en/skateparks/hod-hasharon">
                      <div class="itemImg">
                      <img src="/images/Park480-webp/hod-hasharon.webp" alt="Hod Hasharon" loading="lazy">
                      </div>
                      <div class="gallery-text"><h2>Hod Hasharon</h2></div>
                  </a>
              </div>   

                  <div class="item north">
                    <a href="/en/skateparks/haifa">
                      <div class="itemImg">
                      <img src="/images/Park480-webp/haifa.webp" alt="Haifa" loading="lazy">
                      </div>
                      <div class="gallery-text"><h2>Haifa</h2></div>
                  </a>
              </div>

                  <div class="item center">
                    <a href="/en/skateparks/rishon-lezion">
                      <div class="itemImg">
                      <img src="/images/Park480-webp/rishon-lezion.webp" alt="Rishon LeZion" loading="lazy">
                      </div>
                      <div class="gallery-text"><h2>Rishon LeZion</h2></div>
                  </a>
              </div>  

                  <div class="item center">
                    <a href="/en/skateparks/petah-tikva">
                      <div class="itemImg">
                      <img src="/images/Park480-webp/petah-tikva.webp" alt="Petah Tika" loading="lazy">
                      </div>
                      <div class="gallery-text"><h2>Petah Tikva</h2></div>
                  </a>
              </div>

              
                  <div class="item center">
                    <a href="/en/skateparks/ramat-gan">
                      <div class="itemImg">
                      <img src="/images/Park480-webp/ramat-gan.webp" alt="Ramat Gan" loading="lazy">
                      </div>
                      <div class="gallery-text"><h2>Ramat Gan - Kiryat Krinitsi<!-- <strong style="font-size: 0.75rem; text-transform: uppercase;"> - permanently closed</strong> --></h2></div>
                  </a>
              </div>  

                  <div class="item center">
                    <a href="/en/skateparks/modiin-buchman-park">
                      <div class="itemImg">
                      <img src="/images/Park480-webp/modiinBuchman.webp" alt="Modiin Buchman Park" loading="lazy">
                      </div>
                      <div class="gallery-text"><h2>Modi'in Buchman Park</h2></div>
                  </a>
              </div>  

                  <div class="item center">
                    <a href="/en/skateparks/kfar-yona">
                      <div class="itemImg">
                      <img src="/images/Park480-webp/kfar-yona.webp" alt="Kfar Yona" loading="lazy">
                      </div>
                      <div class="gallery-text"><h2>Kfar Yona</h2></div>
                  </a>
              </div> 

                  <div class="item center">
                    <a href="/en/skateparks/tzur-yigal">
                      <div class="itemImg">
                      <img src="/images/Park480-webp/tzur-yigal.webp" alt="Tzur Yigal" loading="lazy">
                      </div>
                      <div class="gallery-text"><h2>Tzur Yigal</h2></div>
                  </a>
              </div>

                  <div class="item center">
                    <a href="/en/skateparks/ramla">
                      <div class="itemImg">
                      <img src="/images/Park480-webp/ramla.webp" alt="Ramla" loading="lazy">
                      </div>
                      <div class="gallery-text"><h2>Ramla</h2></div>
                  </a>
              </div>

                  <div class="item north">
                    <a href="/en/skateparks/caesarea">
                      <div class="itemImg">
                      <img src="/images/Park480-webp/caesarea.webp" alt="Caesarea" loading="lazy">
                      </div>
                      <div class="gallery-text"><h2>Caesarea</h2></div>
                  </a>
              </div>

                  <div class="item center">
                    <a href="/en/skateparks/gedera">
                      <div class="itemImg">
                      <img src="/images/Park480-webp/gedera.webp" alt="Gedera" loading="lazy">
                      </div>
                      <div class="gallery-text"><h2>Gedera</h2></div>
                  </a>
              </div>

              <div class="item center">
                <a href="/en/skateparks/kadima-zoran">
                      <div class="itemImg">
                  <img src="/images/Park480-webp/kadima-zoran.webp" alt="Kadima Zoran" loading="lazy">
                      </div>
                  <div class="gallery-text"><h2>Kadima Tzoran</h2></div>
              </a>
          </div>
          
          <div class="item south">
                <a href="/en/skateparks/kidron">
                      <div class="itemImg">
                  <img src="/images/Park480-webp/kidron.webp" style="filter: saturate(1.2);" alt="Kidron" loading="lazy">
                      </div>
                  <div class="gallery-text"><h2>Kidron</h2></div>
              </a>
          </div>

          <div class="item center">
                <a href="/en/skateparks/yehud">
                      <div class="itemImg">
                  <img src="/images/Park480-webp/yehud.webp" style="filter: saturate(1.2);" alt="Yehud-Monosson" loading="lazy">
                      </div>
                  <div class="gallery-text"><h2>Yehud-Monosson</h2></div>
              </a>
          </div>

          <div class="item center">
                <a href="/en/skateparks/ariel">
                      <div class="itemImg">
                  <img src="/images/Park480-webp/ariel.webp" style="filter: saturate(1.2);" alt="Ari'el" loading="lazy">
                      </div>
                  <div class="gallery-text"><h2>Ari'el</h2></div>
              </a>
          </div>

          <div class="item south">
                <a href="/en/skateparks/sderot">
                      <div class="itemImg">
                  <img src="/images/Park480-webp/sderot.webp" alt="Sderot" loading="lazy">
                      </div>
                  <div class="gallery-text"><h2>Sderot</h2></div>
              </a>
          </div>

          <div class="item south">
                <a href="/en/skateparks/kiryat-gat">
                      <div class="itemImg">
                  <img src="/images/Park480-webp/kiryat-gat.webp" alt="Kiryat Gat" loading="lazy">
                      </div>
                  <div class="gallery-text"><h2>Kiryat Gat</h2></div>
              </a>
          </div>


          <div class="item center">
                <a href="/en/skateparks/bat-yam">
                      <div class="itemImg">
                  <img src="/images/Park480-webp/bat-yam.webp" alt="Bat Yam" loading="lazy">
                      </div>
                  <div class="gallery-text"><h2>Bat Yam</h2></div>
              </a>
          </div>

          <div class="item south">
                <a href="/en/skateparks/eilat">
                      <div class="itemImg">
                  <img src="/images/Park480-webp/eilat.webp" alt="Eilat" loading="lazy">
                      </div>
                  <div class="gallery-text"><h2>Eilat</h2></div>
              </a>
          </div>

          <div class="item center">
                <a href="/en/skateparks/tel-aviv-2">
                      <div class="itemImg">
                  <img src="/images/Park480-webp/tel-aviv(2).webp" alt="Tel Aviv" loading="lazy">
                      </div>
                  <div class="gallery-text"><h2>Tel Aviv - Ramat HaHayal</h2></div>
              </a>
          </div>

        </div>
    </div>

<!--   Footer Section    -->
<?php include('../../view/en/english-footer.php'); ?>
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
        var clickSound = new Audio('../../sound/ipad_click-99325.mp3');

        // Set custom volume (0.0 to 1.0)
        clickSound.volume = 0.4; // Adjust the volume as needed (0.0 to 1.0)

        // Set custom playback speed (1.0 is normal speed)
        clickSound.playbackRate = 1.0; // Adjust the speed as needed (1.0 is normal speed)

        // Set the start time in seconds (e.g., starting from 10 seconds)
        var startTime = 0;
        clickSound.currentTime = startTime;

        // Play the audio
        clickSound.play();

        // Set the end time in seconds (e.g., ending at 20 seconds)
        var endTime = 2;

        // Stop the audio after the specified duration
        clickSound.addEventListener('timeupdate', function () {
          if (clickSound.currentTime > endTime) {
            clickSound.pause();
          }
        });
      });
    });
  });
</script>

</html>