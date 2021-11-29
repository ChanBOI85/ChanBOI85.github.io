var prevScrollpos = window.pageYOffset;
const sections = document.querySelectorAll("section");
const navLi = document.querySelectorAll("nav ul li");

window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  // if (prevScrollpos > currentScrollPos) {
  //   document.querySelector(".navigation").style.left = "0";
  // } else {
  //   document.querySelector(".navigation").style.left = "-130px";
  // }

  var current = "";
  
  sections.forEach((section) => {
    const sectionTop = section.offsetTop;
    if (window.scrollY >= sectionTop - 60) {
      current = section.getAttribute("id"); 
    }
  });

  navLi.forEach((li) => {
    li.classList.remove("active");
    if (li.classList.contains(current)) {
      li.classList.add("active");
    }
  });

  if (window.scrollY == 0 && window.innerWidth < 860) {
    document.querySelector(".header-container").style.boxShadow = "none";
    document.querySelector(".header-container").style.background = "rgba(242, 242, 242, 0.5)";

  } else if (window.scrollY != 0 && window.innerWidth < 860) {
    document.querySelector(".header-container").style.boxShadow = "1px 1px 12px 0px #7272725e";
    document.querySelector(".header-container").style.background = "#f2f2f2";
  } else if (window.innerWIdth > 860){
    document.querySelector(".header-container").style.background = "none";
  }

  prevScrollpos = currentScrollPos;
}


function openNav() {
  document.getElementById("mySidenav").style.right = "0px";
}

function closeNav() {
  document.getElementById("mySidenav").style.right = "-100%";
}

