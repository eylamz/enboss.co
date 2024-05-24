
      // Start of other Hebrew Parks Shuffle Script for park page >>
// List of images and headings
const items = [
  {img: "/images/Park480-webp/dimona.webp", heading: "דימונה", link: "/he/skateparks/dimona"},
  {img: "/images/Park480-webp/hadera.webp", heading: "חדרה", link: "/he/skateparks/hadera"},
  {img: "/images/Park480-webp/kiryat-ata.webp", heading: "קרית אתא", link: "/he/skateparks/kiryat-ata"},
  {img: "/images/Park480-webp/lod.webp", heading: "לוד", link: "/he/skateparks/lod"},
  {img: "/images/Park480-webp/kfar-saba.webp", heading: "כפר סבא", link: "/he/skateparks/kfar-saba"},
  {img: "/images/Park480-webp/haifa.webp", heading: "חיפה", link: "/he/skateparks/haifa"},
  {img: "/images/Park480-webp/beer-sheva.webp", heading: "באר שבע", link: "/he/skateparks/beer-sheva"},
  {img: "/images/Park480-webp/beer-sheva-bike.webp", heading: "באר שבע בייק פארק", link: "/he/skateparks/beer-sheva-bike-park"},
  {img: "/images/Park480-webp/herzliya.webp", heading: "הרצליה", link: "/he/skateparks/herzliya"},
  {img: "/images/Park480-webp/holon.webp", heading: "חולון", link: "/he/skateparks/holon"},
  {img: "/images/Park480-webp/jeruGanHapaamon.webp", heading: "ירושלים גן הפעמון", link: "/he/skateparks/jerusalem-gan-hapaamon"},
  {img: "/images/Park480-webp/jeruGanSacher.webp", heading: "ירושלים גן סאקר", link: "/he/skateparks/jerusalem-gan-sacher"},
  {img: "/images/Park480-webp/kadima-zoran.webp", heading: "קדימה צורן", link: "/he/skateparks/kadima-zoran"},
  {img: "/images/Park480-webp/tel-aviv.webp", heading: "תל אביב", link: "/he/skateparks/tel-aviv"},
  {img: "/images/Park480-webp/caesarea.webp", heading: "קיסריה", link: "/he/skateparks/caesarea"},
  {img: "/images/Park480-webp/kfar-yona.webp", heading: "כפר יונה", link: "/he/skateparks/kfar-yona"},
  {img: "/images/Park480-webp/mitzpe-ramon.webp", heading: "מצפה רמון", link: "/he/skateparks/mitzpe-ramon"},
  {img: "/images/Park480-webp/modiinBuchman.webp", heading: "מודיעין", link: "/he/skateparks/modiin-buchman-park"},
  {img: "/images/Park480-webp/modiinMoriah.webp", heading: "מודיעין פארק מוריה", link: "/he/skateparks/modiin-moriah-park"},
  {img: "/images/Park480-webp/nahariya.webp", heading: "נהריה", link: "/he/skateparks/nahariya"},
  {img: "/images/Park480-webp/netanya.webp", heading: "נתניה", link: "/he/skateparks/netanya"},
  {img: "/images/Park480-webp/petah-tikva.webp", heading: "פתח תקווה", link: "/he/skateparks/petah-tikva"},
  {img: "/images/Park480-webp/raanana.webp", heading: "רעננה", link: "/he/skateparks/raanana"},
  {img: "/images/Park480-webp/ramat-gan(2).webp", heading: "רמת גן - פארק לאומי", link: "/he/skateparks/ramat-gan-2"},
  {img: "/images/Park480-webp/ramat-gan.webp", heading: "רמת גן - קרית קריניצי", link: "/he/skateparks/ramat-gan"},
  {img: "/images/Park480-webp/ramla.webp", heading: "רמלה", link: "/he/skateparks/ramla"},
  {img: "/images/Park480-webp/rishon-lezion.webp", heading: "ראשון לציון", link: "/he/skateparks/rishon-lezion"},
  {img: "/images/Park480-webp/rosh-haayin.webp", heading: "ראש העין", link: "/he/skateparks/rosh-haayin"},
  {img: "/images/Park480-webp/tzur-yigal.webp", heading: "צור יגאל", link: "/he/skateparks/tzur-yigal"},
  {img: "/images/Park480-webp/gedera.webp", heading: "גדרה", link: "/he/skateparks/gedera"},
  {img: "/images/Park480-webp/kidron.webp", heading: "קדרון", link: "/he/skateparks/kidron"},
  {img: "/images/Park480-webp/yehud.webp", heading: "יהוד-מונוסון", link: "/he/skateparks/yehud"},
  {img: "/images/Park480-webp/ariel.webp", heading: "אריאל", link: "/he/skateparks/ariel"},
  {img: "/images/Park480-webp/sderot.webp", heading: "שדרות", link: "/he/skateparks/sderot"},
  {img: "/images/Park480-webp/kiryat-gat.webp", heading: "קרית גת", link: "/he/skateparks/kiryat-gat"},
  {img: "/images/Park480-webp/bat-yam.webp", heading: "בת ים", link: "/he/skateparks/bat-yam"},
  {img: "/images/Park480-webp/eilat.webp", heading: "אילת", link: "/he/skateparks/eilat"},
  {img: "/images/Park480-webp/tel-aviv(2).webp", heading: "תל אביב - רמת החייל", link: "/he/skateparks/tel-aviv-2"}
];
 



// Shuffle function
function shuffle(array) {
  for (let i = array.length - 1; i > 0; i--) {
    const j = Math.floor(Math.random() * (i + 1));
    [array[i], array[j]] = [array[j], array[i]];
  }
}


// Randomize the items array
shuffle(items);

// Select a random box div and update its image, heading, and link
const boxes = document.querySelectorAll('.box');
for (let i = 0; i < boxes.length; i++) {
  const box = boxes[i];
  const item = items[i];
  box.querySelector('img').src = item.img;
  box.querySelector('h4').textContent = item.heading;
  box.querySelector('a').href = item.link;
}

// End of other Parks Shuffle Script



