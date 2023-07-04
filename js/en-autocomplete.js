




let availableKeywords = [
  'Ashdod',
  "Be'er Sheva",
  "Be'er Sheva Bike Park",
  'Caesarea',
  'Dimona',
  'Gedera',
  "Giv'atayim",
  'Hadera',
  'Haifa',
  'Herzliya',
  'Hod Hasharon',
  'Holon',
  "Jerusalem Gan Hapa'amon",
  'Jerusalem Gan Sacher',
  'Kadima Zoran',
  'Kfar Saba',
  'Kfar Yona',
  'Kiryat Ata',
  'Lod',
  'Mitzpe Ramon',
  "Modi'in Buchman Park",
  "Modi'in Park Moriah",
  'Nahariya',
  'Netanya',
  'Petah Tikva',
  "Ra'anana",
  'Ramla',
  'Ramat Gan - National Park',
  'Ramat Gan - Kiryat Krinitsi',
  "Rosh Ha'ayin",
  'Rishon LeZion',
  'Tel Aviv',
  'Tzur Yigal',
  "Zichron Ya'akov",
  "Kidron",
  "Yehud-Monosson",
  "Ari'el",
  "Sderot",
  "Kiryat Gat",
  "Bat Yam",
  'אשדוד',
  "באר שבע",
  "באר שבע בייק פארק",
  "גבעתיים",
  'גדרה',
  'דימונה',
  'הוד השרון',
  'הרצליה',
  "זכרון יעקב",
  'חדרה',
  'חולון',
  'חיפה',
  "ירושלים גן הפעמון",
  'ירושלים גן סאקר',
  'כפר יונה',
  'כפר סבא',
  'לוד',
  "מודיעין פארק בוכמן ",
  "מודיעין פארק מוריה",
  'מצפה רמון',
  'נהריה',
  'נתניה',
  'פתח תקווה',
  'צור יגאל',
  'קדימה צורן',
  'קיסריה',
  'קרית אתא',
  "ראש העין",
  'ראשון לציון',
  "רעננה",
  'רמלה',
  'רמת גן - פארק לאומי',
  'רמת גן - קרית קריניצי',
  'תל אביב',
  'קדרון',
  'יהוד-מונוסון',
  'אריאל',
  'שדרות',
  'קרית גת',
  'בת ים'
];

const resultsBox = document.querySelector(".result-box");
const inputBox = document.getElementById("input-box");


inputBox.onkeyup = function(){
let input = inputBox.value;
if(input.length){
    result = availableKeywords.filter((keyword)=>{
        return keyword.toLowerCase().replace("'", "").includes(input.toLowerCase().replace("'", ""));
    });
  
  // Map user input to a keyword if necessary
  if (input.toLowerCase().startsWith('ג')) {
    result = [ ...result,'תל אביב'];
    } else if (input.toLowerCase().startsWith('ג')) {
      result = [ ...result,'תל אביב'];        
    } else if (input.toLowerCase() === 'גל') {
      result = [ ...result,'תל אביב'];
    } else if (input.toLowerCase() === 'g') {
        result = [...result, 'Tel Aviv'];
    } else if (input.toLowerCase() === 'ga') {
        result = [...result, 'Tel Aviv'];
    } else if (input.toLowerCase() === 'gal') {
        result = [...result, 'Tel Aviv'];
    } else if (input.toLowerCase() === 'gali') {
        result = [...result, 'Tel Aviv'];
    } else if (input.toLowerCase() === 'galit') {
        result = [...result, 'Tel Aviv'];
  }
  
  
  // Sort the results by whether they start with the input text
  result = result.sort((a, b) => {
      // Check if the keywords are in Hebrew or not
      const regex = /^[\u0590-\u05FF]+$/;
      if (regex.test(a) && regex.test(b)) {
          // Use localeCompare to sort Hebrew keywords alphabetically
          return a.localeCompare(b, 'he');
      } else if (a.toLowerCase().startsWith(input.toLowerCase()) && !b.toLowerCase().startsWith(input.toLowerCase())) {
          return -1;
      } else if (!a.toLowerCase().startsWith(input.toLowerCase()) && b.toLowerCase().startsWith(input.toLowerCase())) {
          return 1;
      } else {
          return 0;
      }
  });

    // Check if there are any results to display
    if (!result.length) {
      resultsBox.innerHTML = '';
      const notFoundMessage = "<li class='not-found'>Park not found.</li>";
      resultsBox.innerHTML = "<ul>" + notFoundMessage + "</ul>";
    } else {
      display(result);
    }
} else {
  resultsBox.innerHTML = '';
}
};

function display(result){
const maxResults = 6; // set the maximum number of results to display
const content = result.slice(0, maxResults).map((list)=>{
    return "<li onclick=selectInput(this)>" + list + "</li>";
});

resultsBox.innerHTML = "<ul>" + content.join('') + "</ul>";
}

const urlMap = {
'Ashdod': '/en/skateparks/ashdod',
"Be'er Sheva": '/en/skateparks/beer-sheva',
"Be'er Sheva Bike Park": '/en/skateparks/beer-sheva-bike-park',
'Caesarea': '/en/skateparks/caesarea',
'Dimona': '/en/skateparks/dimona',
'Gedera': '/en/skateparks/gedera',
"Giv'atayim": '/en/skateparks/givatayim',
'Hadera': '/en/skateparks/hadera',
'Haifa': '/en/skateparks/haifa',
'Herzliya': '/en/skateparks/herzliya',
'Hod Hasharon': '/en/skateparks/hod-hasharon',
'Holon': '/en/skateparks/holon',
"Jerusalem Gan Hapa'amon": '/en/skateparks/jerusalem-gan-hapaamon',
"Jerusalem Gan Sacher": '/en/skateparks/jerusalem-gan-sacher',
'Kadima Zoran': '/en/skateparks/kadima-zoran',
'Kfar Saba': '/en/skateparks/kfar-saba',
'Kfar Yona': '/en/skateparks/Kfar-yona',
'Kiryat Ata': '/en/skateparks/kiryat-ata',
'Lod': '/en/skateparks/lod',
'Mitzpe Ramon': '/en/skateparks/mitzpe-ramon',
"Modi'in Buchman Park": '/en/skateparks/modiin-buchman-park',
"Modi'in Park Moriah": '/en/skateparks/modiin-park-moriah',
'Nahariya': '/en/skateparks/nahariya',
'Netanya': '/en/skateparks/netanya',
'Petah Tikva': '/en/skateparks/petah-tikva',
"Ra'anana": '/en/skateparks/raanana',
'Ramla': '/en/skateparks/ramla',
'Ramat Gan - National Park': '/en/skateparks/ramat-gan-2',
'Ramat Gan - Kiryat Krinitsi': '/en/skateparks/ramat-gan',
"Rosh Ha'ayin": '/en/skateparks/rosh-haayin',
'Rishon LeZion': '/en/skateparks/rishon-lezion',
'Tel Aviv': '/en/skateparks/tel-aviv',
'Tzur Yigal': '/en/skateparks/tzur-yigal',
"Zichron Ya'akov": '/en/skateparks/zichron-yaakov',
"Kidron": '/en/skateparks/kidron',
"Yehud-Monosson": '/en/skateparks/yehud',
"Ari'el": '/en/skateparks/ariel',
"Sderot": '/en/skateparks/sderot',
"Kiryat Gat": '/en/skateparks/kiryat-gat',
"Bat Yam": '/en/skateparks/bat-yam',
'אשדוד': '/he/skateparks/ashdod',
"באר שבע": '/he/skateparks/beer-sheva',
"באר שבע בייק פארק": '/he/skateparks/beer-sheva-bike-park',
'קיסריה': '/he/skateparks/caesarea',
'דימונה': '/he/skateparks/dimona',
'גדרה': '/he/skateparks/gedera',
"גבעתיים": '/he/skateparks/givatayim',
'חדרה': '/he/skateparks/hadera',
'חיפה': '/he/skateparks/haifa',
'הרצליה': '/he/skateparks/herzliya',
'הוד השרון': '/he/skateparks/hod-hasharon',
'חולון': '/he/skateparks/holon',
"ירושלים גן הפעמון": '/he/skateparks/jerusalem-gan-hapaamon',
"ירושלים גן סאקר": '/he/skateparks/jerusalem-gan-sacher',
'קדימה צורן': '/he/skateparks/kadima-zoran',
'כפר סבא': '/he/skateparks/kfar-saba',
'כפר יונה': '/he/skateparks/kfar-yona',
'קרית אתא': '/he/skateparks/kiryat-ata',
'לוד': '/he/skateparks/lod',
'מצפה רמון': '/he/skateparks/mitzpe-ramon',
"מודיעין פארק בוכמן": '/he/skateparks/modiin-buchman-park',
"מודיעין פארק מוריה": '/he/skateparks/modiin-park-moriah',
'נהריה': '/he/skateparks/nahariya',
'נתניה': '/he/skateparks/netanya',
'פתח תקווה': '/he/skateparks/petah-tikva',
"רעננה": '/he/skateparks/raanana',
'רמלה': '/he/skateparks/ramla',
'רמת גן - פארק לאומי': '/he/skateparks/ramat-gan-2',
'רמת גן - קרית קריניצי': '/he/skateparks/ramat-gan',
"ראש העין": '/he/skateparks/rosh-haayin',
'ראשון לציון': '/he/skateparks/rishon-lezion',
'תל אביב': '/he/skateparks/tel-aviv',
'צור יגאל': '/he/skateparks/tzur-yigal',
"זכרון יעקב": '/he/skateparks/zichron-yaakov',
"קדרון": '/he/skateparks/kidron',
"יהוד-מונוסון": '/he/skateparks/yehud',
"אריאל": '/he/skateparks/ariel',
"שדרות": '/he/skateparks/sderot',
"קרית גת": '/he/skateparks/kiryat-gat',
"בת ים": '/he/skateparks/bat-yam'
};

function selectInput(list, index) {
const selectedKeyword = list.innerHTML;
const selectedUrl = urlMap[selectedKeyword];
if (selectedUrl) {
  window.location.href = selectedUrl;
}
resultsBox.innerHTML = '';
selectedResultIndex = -1; // Reset the selectedResultIndex after redirecting
}





let selectedResultIndex = -1; // Tracks the index of the currently selected result

inputBox.onkeydown = function (e) {
const results = document.querySelectorAll('.result-box li');
const numResults = results.length;

if (e.keyCode === 38) {
  // Up arrow key
  e.preventDefault(); // Prevents the cursor from moving in the input box

  if (selectedResultIndex > 0) {
    results[selectedResultIndex].classList.remove('selected');
    selectedResultIndex--;
    results[selectedResultIndex].classList.add('selected');
  }
} else if (e.keyCode === 40) {
  // Down arrow key
  e.preventDefault(); // Prevents the cursor from moving in the input box

  if (selectedResultIndex < numResults - 1) {
    if (selectedResultIndex > -1) {
      results[selectedResultIndex].classList.remove('selected');
    }
    selectedResultIndex++;
    results[selectedResultIndex].classList.add('selected');
  } else if (selectedResultIndex === numResults - 1) {
    results[selectedResultIndex].classList.remove('selected');
    selectedResultIndex = 0;
    results[selectedResultIndex].classList.add('selected');
  }
} else if (e.keyCode === 13) {
  // Enter key
  e.preventDefault(); // Prevents form submission

  if (selectedResultIndex > -1) {
    const selectedKeyword = results[selectedResultIndex].textContent.trim(); // Trim whitespace
    const selectedUrl = urlMap[selectedKeyword];
    if (selectedUrl) {
      window.location.href = selectedUrl;
    }
    resultsBox.innerHTML = '';
    selectedResultIndex = -1; // Reset the selectedResultIndex after redirecting
  }
}
};

function display(result) {
const maxResults = 6; // set the maximum number of results to display
const content = result
  .slice(0, maxResults)
  .map((list, index) => {
    const isSelected = index === selectedResultIndex ? 'selected' : '';
    return (
      `<li class="${isSelected}" onclick="selectInput(this, ${index})">` +
      list +
      '</li>'
    );
  });

resultsBox.innerHTML = '<ul>' + content.join('') + '</ul>';
}





































  // english header
  //when you click the search icon the search box will be visible 
  const svgElement = document.querySelector('#my-svg');
  const searchIcon = document.querySelector('.search-icon');
  const searchTest = document.querySelector('.search-test');
  const searchBtn = document.querySelector('.searchBtn');
  const searchBox = document.querySelector('.search-box');
  const navi = document.querySelector('.navi');
  
  searchIcon.addEventListener('click', function() {
    if (!searchBox.classList.contains('active')) {
      searchBox.classList.add('active');
      navi.classList.add('active');
      svgElement.classList.add('clicked');
      svgElement.classList.remove('disable');
    } else {
      searchBox.classList.remove('active');
      navi.classList.remove('active');
      if (svgElement.classList.contains('clicked')) {
        svgElement.classList.remove('clicked');
        svgElement.classList.add('disable');
      }
      inputBox.value = ''; // clear input box
      resultsBox.innerHTML = ''; // clear search results
    }
  });
  
  searchBtn.addEventListener('click', function() {
    if (searchBox.classList.contains('active')) {
      searchBox.classList.remove('active');
      navi.classList.add('active');
      if (svgElement.classList.contains('clicked')) {
        svgElement.classList.remove('clicked');
        svgElement.classList.add('disable');
      }
      inputBox.value = ''; // clear input box
      resultsBox.innerHTML = ''; // clear search results
    }
  });
  
  
  
  
    
  // hebrew header
  //when you click the search icon the search box will be visible 

  const searchIconHe = document.querySelector('.search-icon-he');
  const searchTestHe = document.querySelector('.search-test-he');
  const searchBtnHe = document.querySelector('.searchBtn-he');
  
  searchIconHe.addEventListener('click', function() {
    if (searchTestHe.style.display === 'none' || searchTestHe.style.display === '') {
      searchTestHe.style.display = 'block';
    } else {
      searchTestHe.style.display = 'none';
    }
  });
  searchBtnHe.addEventListener('click', function() {
      if (searchTestHe.style.display === 'block' || searchTestHe.style.display === '') {
        searchTestHe.style.display = 'none';
      }
    });

    