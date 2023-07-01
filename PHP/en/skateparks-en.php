<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <title>Skateparks | ENBOSS</title>
  <meta property="og:type" content="website">
  <meta property="og:title" content="Skateparks | ENBOSS">
  <meta property="og:image" content="http://enboss.co/svg/EnbossColorImg.jpg">
  <meta property="og:image:secure_url" content="https://enboss.co/svg/EnbossColorImg.jpg">
  <meta property="og:description" content="Discover the perfect skatepark for your next thrilling adventure!">  
  <meta property="og:url" content="http://www.enboss.co/en/skateparks">
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
          <!--- English Header CSS File -->
<link rel="StyleSheet" href="/css/EnglishCSS/english-header.css" />
 
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
<div class="background-image"></div>

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
                      <img src="/images/Park480-webp/ramat-gan(2).webp" alt="Ramat Gan - National Park" loading="lazy">
                      <div class="gallery-text"><h2>Ramat Gan - National Park</h2></div>
                    </a>
                  </div>

                    <div class="item north">
                      <a href="/en/skateparks/kiryat-ata">
                        <img src="/images/Park480-webp/kiryat-ata.webp" alt="Kiryat Ata" loading="lazy">
                        <div class="gallery-text"><h2>Kiryat Ata</h2></div>
                      </a>
                    </div>

                    <div class="item north">
                      <a href="/en/skateparks/zichron-yaakov">
                        <img src="/images/Park480-webp/zichron-yaakov.webp" alt="Zichron Yaakov" loading="lazy">
                        <div class="gallery-text"><h2>Zichron Ya'akov</h2></div>
                    </a>
                </div>
                    
                <div class="item south">
                  <a href="/en/skateparks/dimona">
                      <img src="/images/Park480-webp/dimona.webp" alt="Dimona" loading="lazy">
                      <div class="gallery-text"><h2>Dimona</h2></div>
                  </a>
              </div>    

                    <div class="item north">
                      <a href="/en/skateparks/nahariya">
                        <img src="/images/Park480-webp/nahariya.webp" alt="Nahariya" loading="lazy">
                        <div class="gallery-text"><h2>Nahariya</h2></div>
                    </a>
                  </div>

                    <div class="item center">
                      <a href="/en/skateparks/raanana">
                        <img src="/images/Park480-webp/raanana.webp" alt="Raanana" loading="lazy">
                        <div class="gallery-text"><h2>Ra'anana</h2></div>
                    </a>
                </div> 
                
                    <div class="item south">
                      <a href="/en/skateparks/jerusalem-gan-sacher">
                        <img src="/images/Park480-webp/jeruGanSacher.webp" alt="Jerusalem Gan Sacher" loading="lazy">
                        <div class="gallery-text"><h2>Jerusalem Gan Sacher</h2></div>
                      </a>
                  </div>

                  <div class="item center">
                    <a href="/en/skateparks/holon">
                      <img src="/images/Park480-webp/holon.webp" alt="Holon" loading="lazy">
                      <div class="gallery-text"><h2>Holon</h2></div>
                  </a>
              </div> 


                  <div class="item north">
                    <a href="/en/skateparks/hadera">
                      <img src="/images/Park480-webp/hadera.webp" alt="Hadera" loading="lazy">
                      <div class="gallery-text"><h2>Hadera</h2></div>
                    </a>
                </div>  


                  <div class="item center">
                    <a href="/en/skateparks/lod">
                      <img src="/images/Park480-webp/lod.webp" alt="Lod" loading="lazy">
                      <div class="gallery-text"><h2>Lod</h2></div>
                  </a>
              </div>

                  <div class="item south">
                    <a href="/en/skateparks/mitzpe-ramon">
                      <img src="/images/Park480-webp/mitzpe-ramon.webp" alt="Mitzpe Ramon" loading="lazy">
                      <div class="gallery-text"><h2>Mitzpe Ramon</h2></div>
                  </a>
              </div>  

                  <div class="item south">
                    <a href="/en/skateparks/beer-sheva">
                      <img src="/images/Park480-webp/beer-sheva.webp" alt="Beer Sheva" loading="lazy">
                      <div class="gallery-text"><h2>Be'er Sheva</h2></div>
                    </a>
                  </div>  

                  <div class="item south">
                    <a href="/en/skateparks/jerusalem-gan-hapaamon">
                      <img src="/images/Park480-webp/jeruGanHapaamon.webp" alt="Jerusalem Gan Hapa'amon" loading="lazy">
                      <div class="gallery-text"><h2>Jerusalem Gan Haapa'amon</h2></div>
                  </a>
              </div>

                  <div class="item south">
                    <a href="/en/skateparks/ashdod">
                      <img src="/images/Park480-webp/ashdod.webp" alt="Ashdod" loading="lazy">
                      <div class="gallery-text"><h2>Ashdod</h2></div>
                  </a>
              </div> 

                  <div class="item center">
                    <a href="/en/skateparks/kfar-saba">
                      <img src="/images/Park480-webp/kfar-saba.webp" alt="Kfar Saba" loading="lazy">
                      <div class="gallery-text"><h2>Kfar Saba</h2></div>
                  </a>
              </div>  

                  <div class="item south">
                    <a href="/en/skateparks/beer-sheva-bike-park">
                      <img src="/images/Park480-webp/beer-sheva-bike.webp" alt="Beer Sheva Bike Park" loading="lazy">
                      <div class="gallery-text"><h2>Be'er Sheva Bike Park</h2></div>
                  </a>
              </div> 

                  <div class="item center">
                    <a href="/en/skateparks/givatayim">
                      <img src="/images/Park480-webp/givatayim.webp" alt="Givatayim" loading="lazy">
                      <div class="gallery-text"><h2>Giv'atayim</h2></div>
                  </a>
              </div> 

                  <div class="item center">
                    <a href="/en/skateparks/herzliya">
                      <img src="/images/Park480-webp/herzliya.webp" alt="Herzliya" loading="lazy">
                      <div class="gallery-text"><h2>Herzliya</h2></div>
                  </a>
              </div>  
                  <div class="item center">
                    <a href="/en/skateparks/netanya">
                      <img src="/images/Park480-webp/netanya.webp" alt="Netanya" loading="lazy">
                      <div class="gallery-text"><h2>Netanya</h2></div>
                  </a>
              </div>  

                  <div class="item center">
                    <a href="/en/skateparks/tel-aviv">
                      <img src="/images/Park480-webp/tel-aviv.webp" alt="Tel Aviv" loading="lazy">
                      <div class="gallery-text"><h2>Tel Aviv</h2></div>
                  </a>
              </div>  

                  <div class="item center">
                    <a href="/en/skateparks/rosh-haayin">
                      <img src="/images/Park480-webp/rosh-haayin.webp" alt="Rosh Haayin" loading="lazy">
                      <div class="gallery-text"><h2>Rosh Ha'ayin</h2></div>
                  </a>
              </div>  

                  <div class="item center">
                    <a href="/en/skateparks/modiin-moriah-park">
                      <img src="/images/Park480-webp/modiinMoriah.webp" alt="Modiin Moriah Park" loading="lazy">
                      <div class="gallery-text"><h2>Modi'in Moriah Park</h2></div>
                  </a>
              </div>  

                  <div class="item center">
                    <a href="/en/skateparks/hod-hasharon">
                      <img src="/images/Park480-webp/hod-hasharon.webp" alt="Hod Hasharon" loading="lazy">
                      <div class="gallery-text"><h2>Hod Hasharon</h2></div>
                  </a>
              </div>   

                  <div class="item north">
                    <a href="/en/skateparks/haifa">
                      <img src="/images/Park480-webp/haifa.webp" alt="Haifa" loading="lazy">
                      <div class="gallery-text"><h2>Haifa</h2></div>
                  </a>
              </div>

                  <div class="item center">
                    <a href="/en/skateparks/rishon-lezion">
                      <img src="/images/Park480-webp/rishon-lezion.webp" alt="Rishon LeZion" loading="lazy">
                      <div class="gallery-text"><h2>Rishon LeZion</h2></div>
                  </a>
              </div>  

                  <div class="item center">
                    <a href="/en/skateparks/petah-tikva">
                      <img src="/images/Park480-webp/petah-tikva.webp" alt="Petah Tika" loading="lazy">
                      <div class="gallery-text"><h2>Petah Tikva</h2></div>
                  </a>
              </div>

              
                  <div class="item center">
                    <a href="/en/skateparks/ramat-gan">
                      <img src="/images/Park480-webp/ramat-gan.webp" alt="Ramat Gan" loading="lazy">
                      <div class="gallery-text"><h2>Ramat Gan - Kiryat Krinitsi<!-- <strong style="font-size: 0.75rem; text-transform: uppercase;"> - permanently closed</strong> --></h2></div>
                  </a>
              </div>  

                  <div class="item center">
                    <a href="/en/skateparks/modiin-buchman-park">
                      <img src="/images/Park480-webp/modiinBuchman.webp" alt="Modiin Buchman Park" loading="lazy">
                      <div class="gallery-text"><h2>Modi'in Buchman Park</h2></div>
                  </a>
              </div>  

                  <div class="item center">
                    <a href="/en/skateparks/kfar-yona">
                      <img src="/images/Park480-webp/kfar-yona.webp" alt="Kfar Yona" loading="lazy">
                      <div class="gallery-text"><h2>Kfar Yona</h2></div>
                  </a>
              </div> 

                  <div class="item center">
                    <a href="/en/skateparks/tzur-yigal">
                      <img src="/images/Park480-webp/tzur-yigal.webp" alt="Tzur Yigal" loading="lazy">
                      <div class="gallery-text"><h2>Tzur Yigal</h2></div>
                  </a>
              </div>

                  <div class="item center">
                    <a href="/en/skateparks/ramla">
                      <img src="/images/Park480-webp/ramla.webp" alt="Ramla" loading="lazy">
                      <div class="gallery-text"><h2>Ramla</h2></div>
                  </a>
              </div>

                  <div class="item north">
                    <a href="/en/skateparks/caesarea">
                      <img src="/images/Park480-webp/caesarea.webp" alt="Caesarea" loading="lazy">
                      <div class="gallery-text"><h2>Caesarea</h2></div>
                  </a>
              </div>

                  <div class="item center">
                    <a href="/en/skateparks/gedera">
                      <img src="/images/Park480-webp/gedera.webp" alt="Gedera" loading="lazy">
                      <div class="gallery-text"><h2>Gedera</h2></div>
                  </a>
              </div>

              <div class="item center">
                <a href="/en/skateparks/kadima-zoran">
                  <img src="/images/Park480-webp/kadima-zoran.webp" alt="Kadima Zoran" loading="lazy">
                  <div class="gallery-text"><h2>Kadima Tzoran</h2></div>
              </a>
          </div>
          
          <div class="item south">
                <a href="/en/skateparks/kidron">
                  <img src="/images/Park480-webp/kidron.webp" style="filter: saturate(1.2);" alt="Kidron" loading="lazy">
                  <div class="gallery-text"><h2>Kidron</h2></div>
              </a>
          </div>

          <div class="item center">
                <a href="/en/skateparks/yehud">
                  <img src="/images/Park480-webp/yehud.webp" style="filter: saturate(1.2);" alt="Yehud-Monosson" loading="lazy">
                  <div class="gallery-text"><h2>Yehud-Monosson</h2></div>
              </a>
          </div>

          <div class="item center">
                <a href="/en/skateparks/ariel">
                  <img src="/images/Park480-webp/ariel.webp" style="filter: saturate(1.2);" alt="Ari'el" loading="lazy">
                  <div class="gallery-text"><h2>Ari'el</h2></div>
              </a>
          </div>

          <div class="item south">
                <a href="/en/skateparks/sderot">
                  <img src="/images/Park480-webp/sderot.webp" alt="Sderot" loading="lazy">
                  <div class="gallery-text"><h2>Sderot</h2></div>
              </a>
          </div>

          <div class="item south">
                <a href="/en/skateparks/kiryat-gat">
                  <img src="/images/Park480-webp/kiryat-gat.webp" alt="Kiryat Gat" loading="lazy">
                  <div class="gallery-text"><h2>Kiryat Gat</h2></div>
              </a>
          </div>



        </div>
    </div>

<!--   Footer Section    -->
<?php include('../../view/en/english-footer.php'); ?>
  </main>
</body>

</html>