<<<<<<< HEAD
var names = [
  "Jennie", "Lisa", "Jisoo", "Rose", 
  "Blackpink", "Twice", "Itzy", "Red Velvet",
  "BTS", "Le sserafim", "Aespa", "Seventeen",
  "EXO", "Enhypen", "GOT7", "Stray Kids"
];

var pics = [
  "images/jennie.jpg", "images/lisa.jpg", "images/jisoo.jpg", "images/rose.jpg", 
  "images/blackpink.jpg", "images/twice.jpg", "images/itzy.jpg", "images/redvelvet.jpg",
  "images/bts.jpg", "images/lesserafim.jpg", "images/aespa.jpg", "images/seventeen.jpg",
  "images/exo.jpg", "images/enhypen.jpg", "images/got7.jpg", "images/straykids.jpg"
];

var descriptions = [
  "Jennie Kim, K-pop singer and rapper, member of BLACKPINK. Born January 16, 1996. Known for her solo hit 'SOLO' and her fashion collaborations. Global fashion icon.",
  "Lisa Manoban, K-pop singer and dancer, member of BLACKPINK. Born March 27, 1997, in Thailand. Renowned for her powerful dance skills and unique rap style. Solo debut with 'LALISA' in 2021. Global fashion icon and ambassador for major brands.",
  "Jisoo Kim, K-pop singer and actress, member of BLACKPINK. Born January 3, 1995. Known for her strong vocals and charismatic stage presence. Made her solo debut with 'FLOWER' in 2023. Also recognized for her work in fashion and acting.",
  "Roséanne Park (Rosé), K-pop singer and dancer, member of BLACKPINK. Born February 11, 1997, in New Zealand. Known for her unique vocal tone and emotional performances. Made her solo debut with the EP 'R' in 2021, featuring the hit 'On The Ground.' Fashion icon and brand ambassador.",
  "South Korean girl group formed by YG Entertainment, debuting in 2016. Consists of members Jennie, Rosé, Lisa, and Jisoo. Known for their powerful performances, catchy songs, and global influence. Hits include 'DDU-DU DDU-DU,' 'Kill This Love,' and 'How You Like That.' Major fashion icons and cultural trendsetters.",
  "South Korean girl group formed by JYP Entertainment, debuting in 2015. Consists of nine members: Nayeon, Jeongyeon, Momo, Sana, Jihyo, Mina, Dahyun, Chaeryeong, and Tzuyu. Known for catchy melodies and vibrant concepts. Hits include 'Cheer Up,' 'TT,' and 'Fancy.' Renowned for their strong fanbase, 'ONCE.'",
  "South Korean girl group formed by JYP Entertainment, debuting in 2019. Consists of five members: Yeji, Ryujin, Lia, Chaeryeong, and Yuna. Known for their empowering themes and strong performances. Hits include 'DALLA DALLA,' 'WANNABE,' and 'LOCO.' Recognized for their unique style and fierce confidence.",
  "South Korean girl group formed by SM Entertainment, debuting in 2014. Consists of five members: Irene, Seulgi, Wendy, Joy, and Yeri. Known for their versatile musical style, blending pop, R&B, and hip-hop. Hits include 'Red Flavor,' 'Bad Boy,' and 'Psycho.' Renowned for their unique concepts and strong vocal performances.",
  "South Korean boy band formed by Big Hit Entertainment, debuting in 2013. Consists of seven members: RM, Jin, Suga, J-Hope, Jimin, V, and Jungkook. Known for their impactful lyrics, diverse music styles, and energetic performances. Global hits include 'Dynamite,' 'Butter,' and 'Boy With Luv.' Influential cultural icons and advocates for mental health and self-love.",
  "South Korean girl group formed by Source Music and HYBE, debuting in 2022. Consists of six members: Sakura, Kim Chae-won, Heo Yunjin, Kazuha, Hong Eun-chae, and Yoon Jin. Known for their bold concepts and powerful performances. Hits include 'FEARLESS' and 'ANTIFREEZE.' Recognized for their strong stage presence and growing global popularity.",
  "South Korean girl group formed by SM Entertainment, debuting in 2020. Consists of four members: Karina, Winter, Giselle, and Ningning. Known for their unique concept blending real and virtual worlds. Hits include 'Black Mamba,' 'Next Level,' and 'Savage.' Recognized for their innovative music style and captivating performances.",
  "South Korean boy band formed by Pledis Entertainment, debuting in 2015. Consists of 13 members divided into three sub-units: Hip-Hop, Vocal, and Performance. Known for their self-produced music, intricate choreography, and strong teamwork. Hits include 'Don't Wanna Cry,' 'HOME;RUN,' and 'Left & Right.' Renowned for their energetic performances and engaging fan interactions.",
  "South Korean-Chinese boy band formed by SM Entertainment, debuting in 2012. Originally consisting of 12 members, currently active with 9. Known for their diverse music styles, powerful performances, and strong vocal abilities. Hits include 'Growl,' 'Call Me Baby,' and 'Love Shot.' Renowned for their fan engagement and influence in K-pop.",
  "South Korean boy band formed through the reality survival show 'I-LAND,' debuting in 2020. Consists of seven members: Heeseung, Hee-seung, Sunghoon, Sunoo, Jungwon, Niki, and Ni-ki. Known for their dynamic performances and engaging storytelling in music. Hits include 'Given-Taken,' 'Drunk-Dazed,' and 'FEVER.' Recognized for their strong global presence and dedicated fanbase, ENGENE.",
  "South Korean boy band formed by JYP Entertainment, debuting in 2014. Consists of seven members: JB, Mark, Jackson, Jinyoung, Youngjae, BamBam, and Yugyeom. Known for their versatile music styles, impressive choreography, and strong international fanbase, Ahgase. Hits include 'Just Right,' 'Hard Carry,' and 'Lullaby.' They are recognized for their engaging performances and individual pursuits in music and acting.",
  "South Korean boy band formed by JYP Entertainment, debuting in 2018. Consists of eight members: Bang Chan, Lee Know, Changbin, Hyunjin, Han, Felix, Seungmin, and I.N. Known for their self-produced music, powerful performances, and energetic concepts. Hits include 'God's Menu,' 'Back Door,' and 'MANIAC.' Renowned for their strong fan engagement and dedicated fandom, STAY."
];

// Loop to generate the gallery cards
for (var i = 0; i < names.length; i++) {
  var myContainer = document.getElementById("cardContainer");
  var additionalClass = (i >= 4 && i < 8) ? " second-row-card" : ""; // For first 8 cards

  // Add an additional class for the new rows as needed
  if (i >= 8) {
    additionalClass = " second-row-card"; // Align all additional cards to the second row
  }

  myContainer.innerHTML += "<div class=\"col-xl-3 col-md-4 col-sm-6 col-12" + additionalClass + "\"><div class=\"card\" id=\"c" + i +
    "\" onmouseenter=\"addShadow('c" + i + "')\" onmouseleave=\"removeShadow('c" + i + "')\"><img src=\"" +
    pics[i] + "\" class=\"card-img-top\" alt=\"" + names[i] + "\"><div class=\"card-body\"><h5 class=\"card-title\">" + names[i] +
    "</h5><p class=\"card-text\">" + descriptions[i] + "</p></div></div></div>";
}

var featureNames = [
  "BIAS", "", "Latest Comebacks", "", "Fanbase"
];

var featurePics = [
  "images/bias.jpg", "images/feature2.jpg", "images/cb.jpg", "images/feature4.jpg", "images/fanbase.jpg"
];

// Function to generate feature cards with onmouseover event
function generateFeatureCards() {
  var featuresContainer = document.getElementById("featuresContainer");

  for (var i = 0; i < featureNames.length; i++) {
    let cardClass = "col-xl-2 col-md-4 col-sm-6 col-12"; // Default class

    // Adjust the card size and alignment for Feature 3, 4, and 5
    if (i === 2) { // Feature 3
      cardClass = "col-xl-3 col-md-6 col-sm-12"; // Make it larger
    } else if (i >= 3) { // Feature 4 and 5
      cardClass = "col-xl-2 col-md-3 col-sm-6 col-12"; // Smaller and aligned to the right
    }

    featuresContainer.innerHTML += "<div class=\"" + cardClass + "\"><div class=\"card\" onmouseover=\"hoverEffect(this)\" onmouseleave=\"removeHoverEffect(this)\"><img src=\"" + featurePics[i] +
      "\" class=\"card-img-top\"><div class=\"card-body\"><h5 class=\"card-title\">" + featureNames[i] + "</h5></div></div></div>";
  }
}

// Function to handle hover effect
function hoverEffect(card) {
  card.style.border = "2px solid #ef5b9c"; // Change border color
  card.style.transition = "border 0.3s"; // Smooth transition
}

// Function to remove hover effect
function removeHoverEffect(card) {
  card.style.border = ""; // Reset border
}


// Call to generate feature cards
generateFeatureCards();


// Adds a shadow Bootstrap class when mouse enters the card
function addShadow(id) {
  document.getElementById(id).classList.add("shadow");
}

// Removes the shadow Bootstrap class when mouse leaves the card
function removeShadow(id) {
  document.getElementById(id).classList.remove("shadow");
}

function expandContent() {
  var extraContent = document.getElementById('extraContent');
  var btnExpand = document.getElementById('btnExpand');

  if (extraContent.style.display === "none") {
    extraContent.style.display = "block";
    btnExpand.textContent = "Collapse";
  } else {
    extraContent.style.display = "none";
    btnExpand.textContent = "Expand";
  }
}


// Function to toggle dark and light modes
var colorMode = "light";
function changeMode() {
  var bodyElement = document.getElementById("body");
  colorMode = colorMode === "dark" ? "light" : "dark";
  bodyElement.setAttribute("data-bs-theme", colorMode);
}

function setActive(link) {
  // Remove 'active' class from all links
  const links = document.querySelectorAll('.nav-link');
  links.forEach((l) => {
    l.classList.remove('active');
  });

  // Add 'active' class to the clicked link
  link.classList.add('active');
}
=======
var names = [
  "Jennie", "Lisa", "Jisoo", "Rose", 
  "Blackpink", "Twice", "Itzy", "Red Velvet",
  "BTS", "Le sserafim", "Aespa", "Seventeen",
  "EXO", "Enhypen", "GOT7", "Stray Kids"
];

var pics = [
  "images/jennie.jpg", "images/lisa.jpg", "images/jisoo.jpg", "images/rose.jpg", 
  "images/blackpink.jpg", "images/twice.jpg", "images/itzy.jpg", "images/redvelvet.jpg",
  "images/bts.jpg", "images/lesserafim.jpg", "images/aespa.jpg", "images/seventeen.jpg",
  "images/exo.jpg", "images/enhypen.jpg", "images/got7.jpg", "images/straykids.jpg"
];

var descriptions = [
  "Jennie Kim, K-pop singer and rapper, member of BLACKPINK. Born January 16, 1996. Known for her solo hit 'SOLO' and her fashion collaborations. Global fashion icon.",
  "Lisa Manoban, K-pop singer and dancer, member of BLACKPINK. Born March 27, 1997, in Thailand. Renowned for her powerful dance skills and unique rap style. Solo debut with 'LALISA' in 2021. Global fashion icon and ambassador for major brands.",
  "Jisoo Kim, K-pop singer and actress, member of BLACKPINK. Born January 3, 1995. Known for her strong vocals and charismatic stage presence. Made her solo debut with 'FLOWER' in 2023. Also recognized for her work in fashion and acting.",
  "Roséanne Park (Rosé), K-pop singer and dancer, member of BLACKPINK. Born February 11, 1997, in New Zealand. Known for her unique vocal tone and emotional performances. Made her solo debut with the EP 'R' in 2021, featuring the hit 'On The Ground.' Fashion icon and brand ambassador.",
  "South Korean girl group formed by YG Entertainment, debuting in 2016. Consists of members Jennie, Rosé, Lisa, and Jisoo. Known for their powerful performances, catchy songs, and global influence. Hits include 'DDU-DU DDU-DU,' 'Kill This Love,' and 'How You Like That.' Major fashion icons and cultural trendsetters.",
  "South Korean girl group formed by JYP Entertainment, debuting in 2015. Consists of nine members: Nayeon, Jeongyeon, Momo, Sana, Jihyo, Mina, Dahyun, Chaeryeong, and Tzuyu. Known for catchy melodies and vibrant concepts. Hits include 'Cheer Up,' 'TT,' and 'Fancy.' Renowned for their strong fanbase, 'ONCE.'",
  "South Korean girl group formed by JYP Entertainment, debuting in 2019. Consists of five members: Yeji, Ryujin, Lia, Chaeryeong, and Yuna. Known for their empowering themes and strong performances. Hits include 'DALLA DALLA,' 'WANNABE,' and 'LOCO.' Recognized for their unique style and fierce confidence.",
  "South Korean girl group formed by SM Entertainment, debuting in 2014. Consists of five members: Irene, Seulgi, Wendy, Joy, and Yeri. Known for their versatile musical style, blending pop, R&B, and hip-hop. Hits include 'Red Flavor,' 'Bad Boy,' and 'Psycho.' Renowned for their unique concepts and strong vocal performances.",
  "South Korean boy band formed by Big Hit Entertainment, debuting in 2013. Consists of seven members: RM, Jin, Suga, J-Hope, Jimin, V, and Jungkook. Known for their impactful lyrics, diverse music styles, and energetic performances. Global hits include 'Dynamite,' 'Butter,' and 'Boy With Luv.' Influential cultural icons and advocates for mental health and self-love.",
  "South Korean girl group formed by Source Music and HYBE, debuting in 2022. Consists of six members: Sakura, Kim Chae-won, Heo Yunjin, Kazuha, Hong Eun-chae, and Yoon Jin. Known for their bold concepts and powerful performances. Hits include 'FEARLESS' and 'ANTIFREEZE.' Recognized for their strong stage presence and growing global popularity.",
  "South Korean girl group formed by SM Entertainment, debuting in 2020. Consists of four members: Karina, Winter, Giselle, and Ningning. Known for their unique concept blending real and virtual worlds. Hits include 'Black Mamba,' 'Next Level,' and 'Savage.' Recognized for their innovative music style and captivating performances.",
  "South Korean boy band formed by Pledis Entertainment, debuting in 2015. Consists of 13 members divided into three sub-units: Hip-Hop, Vocal, and Performance. Known for their self-produced music, intricate choreography, and strong teamwork. Hits include 'Don't Wanna Cry,' 'HOME;RUN,' and 'Left & Right.' Renowned for their energetic performances and engaging fan interactions.",
  "South Korean-Chinese boy band formed by SM Entertainment, debuting in 2012. Originally consisting of 12 members, currently active with 9. Known for their diverse music styles, powerful performances, and strong vocal abilities. Hits include 'Growl,' 'Call Me Baby,' and 'Love Shot.' Renowned for their fan engagement and influence in K-pop.",
  "South Korean boy band formed through the reality survival show 'I-LAND,' debuting in 2020. Consists of seven members: Heeseung, Hee-seung, Sunghoon, Sunoo, Jungwon, Niki, and Ni-ki. Known for their dynamic performances and engaging storytelling in music. Hits include 'Given-Taken,' 'Drunk-Dazed,' and 'FEVER.' Recognized for their strong global presence and dedicated fanbase, ENGENE.",
  "South Korean boy band formed by JYP Entertainment, debuting in 2014. Consists of seven members: JB, Mark, Jackson, Jinyoung, Youngjae, BamBam, and Yugyeom. Known for their versatile music styles, impressive choreography, and strong international fanbase, Ahgase. Hits include 'Just Right,' 'Hard Carry,' and 'Lullaby.' They are recognized for their engaging performances and individual pursuits in music and acting.",
  "South Korean boy band formed by JYP Entertainment, debuting in 2018. Consists of eight members: Bang Chan, Lee Know, Changbin, Hyunjin, Han, Felix, Seungmin, and I.N. Known for their self-produced music, powerful performances, and energetic concepts. Hits include 'God's Menu,' 'Back Door,' and 'MANIAC.' Renowned for their strong fan engagement and dedicated fandom, STAY."
];

// Loop to generate the gallery cards
for (var i = 0; i < names.length; i++) {
  var myContainer = document.getElementById("cardContainer");
  var additionalClass = (i >= 4 && i < 8) ? " second-row-card" : ""; // For first 8 cards

  // Add an additional class for the new rows as needed
  if (i >= 8) {
    additionalClass = " second-row-card"; // Align all additional cards to the second row
  }

  myContainer.innerHTML += "<div class=\"col-xl-3 col-md-4 col-sm-6 col-12" + additionalClass + "\"><div class=\"card\" id=\"c" + i +
    "\" onmouseenter=\"addShadow('c" + i + "')\" onmouseleave=\"removeShadow('c" + i + "')\"><img src=\"" +
    pics[i] + "\" class=\"card-img-top\" alt=\"" + names[i] + "\"><div class=\"card-body\"><h5 class=\"card-title\">" + names[i] +
    "</h5><p class=\"card-text\">" + descriptions[i] + "</p></div></div></div>";
}

var featureNames = [
  "BIAS", "", "Latest Comebacks", "", "Fanbase"
];

var featurePics = [
  "images/bias.jpg", "images/feature2.jpg", "images/cb.jpg", "images/feature4.jpg", "images/fanbase.jpg"
];

// Function to generate feature cards with onmouseover event
function generateFeatureCards() {
  var featuresContainer = document.getElementById("featuresContainer");

  for (var i = 0; i < featureNames.length; i++) {
    let cardClass = "col-xl-2 col-md-4 col-sm-6 col-12"; // Default class

    // Adjust the card size and alignment for Feature 3, 4, and 5
    if (i === 2) { // Feature 3
      cardClass = "col-xl-3 col-md-6 col-sm-12"; // Make it larger
    } else if (i >= 3) { // Feature 4 and 5
      cardClass = "col-xl-2 col-md-3 col-sm-6 col-12"; // Smaller and aligned to the right
    }

    featuresContainer.innerHTML += "<div class=\"" + cardClass + "\"><div class=\"card\" onmouseover=\"hoverEffect(this)\" onmouseleave=\"removeHoverEffect(this)\"><img src=\"" + featurePics[i] +
      "\" class=\"card-img-top\"><div class=\"card-body\"><h5 class=\"card-title\">" + featureNames[i] + "</h5></div></div></div>";
  }
}

// Function to handle hover effect
function hoverEffect(card) {
  card.style.border = "2px solid #ef5b9c"; // Change border color
  card.style.transition = "border 0.3s"; // Smooth transition
}

// Function to remove hover effect
function removeHoverEffect(card) {
  card.style.border = ""; // Reset border
}


// Call to generate feature cards
generateFeatureCards();


// Adds a shadow Bootstrap class when mouse enters the card
function addShadow(id) {
  document.getElementById(id).classList.add("shadow");
}

// Removes the shadow Bootstrap class when mouse leaves the card
function removeShadow(id) {
  document.getElementById(id).classList.remove("shadow");
}

function expandContent() {
  var extraContent = document.getElementById('extraContent');
  var btnExpand = document.getElementById('btnExpand');

  if (extraContent.style.display === "none") {
    extraContent.style.display = "block";
    btnExpand.textContent = "Collapse";
  } else {
    extraContent.style.display = "none";
    btnExpand.textContent = "Expand";
  }
}


// Function to toggle dark and light modes
var colorMode = "light";
function changeMode() {
  var bodyElement = document.getElementById("body");
  colorMode = colorMode === "dark" ? "light" : "dark";
  bodyElement.setAttribute("data-bs-theme", colorMode);
}

function setActive(link) {
  // Remove 'active' class from all links
  const links = document.querySelectorAll('.nav-link');
  links.forEach((l) => {
    l.classList.remove('active');
  });

  // Add 'active' class to the clicked link
  link.classList.add('active');
}
>>>>>>>>> Temporary merge branch 2
