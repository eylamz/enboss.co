
      // Start of other English Parks Shuffle Script for park page >>
// List of images and headings
const items = [
  {img: "/images/Park480-webp/dimona.webp", heading: "Dimona", link: "/en/skateparks/dimona"},
  {img: "/images/Park480-webp/hadera.webp", heading: "Hadera", link: "/en/skateparks/hadera"},
  {img: "/images/Park480-webp/kiryat-ata.webp", heading: "Kiryat Ata", link: "/en/skateparks/kiryat-ata"},
  {img: "/images/Park480-webp/lod.webp", heading: "Lod", link: "/en/skateparks/lod"},
  {img: "/images/Park480-webp/kfar-saba.webp", heading: "Kfar Saba", link: "/en/skateparks/kfar-saba"},
  {img: "/images/Park480-webp/haifa.webp", heading: "Haifa", link: "/en/skateparks/haifa"},
  {img: "/images/Park480-webp/beer-sheva.webp", heading: "Be'er Sheva", link: "/en/skateparks/beer-sheva"},
  {img: "/images/Park480-webp/beer-sheva-bike.webp", heading: "Be'er Sheva Bike Park", link: "/en/skateparks/beer-sheva-bike-park"},
  {img: "/images/Park480-webp/herzliya.webp", heading: "Herzliya", link: "/en/skateparks/herzliya"},
  {img: "/images/Park480-webp/holon.webp", heading: "Holon", link: "/en/skateparks/holon"},
  {img: "/images/Park480-webp/jeruGanHapaamon.webp", heading: "Jerusalem Gan Hapa'amon", link: "/en/skateparks/jerusalem-gan-hapaamon"},
  {img: "/images/Park480-webp/jeruGanSacher.webp", heading: "Jerusalem Gan Sacher", link: "/en/skateparks/jerusalem-gan-sacher"},
  {img: "/images/Park480-webp/kadima-zoran.webp", heading: "Kadima Zoran", link: "/en/skateparks/kadima-zoran"},
  {img: "/images/Park480-webp/tel-aviv.webp", heading: "Tel Aviv", link: "/en/skateparks/tel-aviv"},
  {img: "/images/Park480-webp/caesarea.webp", heading: "Caesarea", link: "/en/skateparks/caesarea"},
  {img: "/images/Park480-webp/kfar-yona.webp", heading: "Kfar Yona", link: "/en/skateparks/kfar-yona"},
  {img: "/images/Park480-webp/mitzpe-ramon.webp", heading: "Mitzpe Ramon", link: "/en/skateparks/mitzpe-ramon"},
  {img: "/images/Park480-webp/modiinBuchman.webp", heading: "Modi'in Buchman Park", link: "/en/skateparks/modiin-buchman-park"},
  {img: "/images/Park480-webp/modiinMoriah.webp", heading: "Modi'in Moriah Park", link: "/en/skateparks/modiin-moriah-park"},
  {img: "/images/Park480-webp/nahariya.webp", heading: "Nahariya", link: "/en/skateparks/nahariya"},
  {img: "/images/Park480-webp/netanya.webp", heading: "Netanya", link: "/en/skateparks/netanya"},
  {img: "/images/Park480-webp/petah-tikva.webp", heading: "Petah Tikva", link: "/en/skateparks/petah-tikva"},
  {img: "/images/Park480-webp/raanana.webp", heading: "Ra'anana", link: "/en/skateparks/raanana"},
  {img: "/images/Park480-webp/ramat-gan(2).webp", heading: "Ramat Gan - National Park", link: "/en/skateparks/ramat-gan-2"},
  {img: "/images/Park480-webp/ramat-gan.webp", heading: "Ramat Gan - Kiryat Krinitsi", link: "/en/skateparks/ramat-gan"},
  {img: "/images/Park480-webp/ramla.webp", heading: "Ramla", link: "/en/skateparks/ramla"},
  {img: "/images/Park480-webp/rishon-lezion.webp", heading: "Rishon LeZion", link: "/en/skateparks/rishon-lezion"},
  {img: "/images/Park480-webp/rosh-haayin.webp", heading: "Rosh Ha'ayin", link: "/en/skateparks/rosh-haayin"},
  {img: "/images/Park480-webp/tzur-yigal.webp", heading: "Tzur Yigal", link: "/en/skateparks/tzur-yigal"},
  {img: "/images/Park480-webp/gedera.webp", heading: "Gedera", link: "/en/skateparks/gedera"},
  {img: "/images/Park480-webp/kidron.webp", heading: "Kidron", link: "/en/skateparks/kidron"},
  {img: "/images/Park480-webp/yehud.webp", heading: "Yehud-Monosson", link: "/en/skateparks/yehud"},
  {img: "/images/Park480-webp/ariel.webp", heading: "Ari'el", link: "/en/skateparks/ariel"},
  {img: "/images/Park480-webp/sderot.webp", heading: "Sderot", link: "/en/skateparks/sderot"},
  {img: "/images/Park480-webp/kiryat-gat.webp", heading: "Kiryat Gat", link: "/en/skateparks/kiryat-gat"},
  {img: "/images/Park480-webp/bat-yam.webp", heading: "Bat Yam", link: "/en/skateparks/bat-yam"}
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
