window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.querySelector(".navbar").style.padding = "10px 0px";
    document.querySelector(".navbar").style.backgroundColor = "black";
    document.querySelector(".navbar-brand img").style.width = "50px";
  } else {
    document.querySelector(".navbar").style.padding = "20px 0px";
    document.querySelector(".navbar").style.backgroundColor = "transparent";
    document.querySelector(".navbar-brand img").style.width = "60px";
  }
}


function openTab(evt, tabName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  herocontent = document.getElementsByClassName("tabherocontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
    herocontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(tabName).style.display = "block";
  document.getElementById(tabName + "Hero").style.display = "block";
  document.querySelector(".ohub3-drop-down button").innerText = tabName;
  evt.currentTarget.className += " active";
}

// var slideIndex = 1;
// showSlides(slideIndex);

// function plusSlides(n) {
//   showSlides(slideIndex += n);
// }

// function currentSlide(n) {
//   showSlides(slideIndex = n);
// }

// function showSlides(n) {
//   var i;
//   var slides = document.getElementsByClassName("mySlides");
//   var dots = document.getElementsByClassName("dot");
//   if (n > slides.length) {slideIndex = 1}    
//   if (n < 1) {slideIndex = slides.length}
//   for (i = 0; i < slides.length; i++) {
//       slides[i].style.display = "none";  
//   }
//   for (i = 0; i < dots.length; i++) {
//       dots[i].className = dots[i].className.replace(" active", "");
//   }
//   slides[slideIndex-1].style.display = "flex";  
  
//   if (slideIndex === 5) {
//     document.getElementById("next").style.display = "none"
//   } else {
//     document.getElementById("next").style.display = "block";
//     document.getElementById("prev").style.display = "block";
//   }

//   if (slideIndex === 1) {
//     document.getElementById("prev").style.display = "none";
//   }
  
// }

var cw = $('#contactCircle').width();
$('#contactCircle').css({'height':cw+'px'});


function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}