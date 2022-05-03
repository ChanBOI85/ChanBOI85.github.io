const sections = document.querySelectorAll(".brands-section");
const navLi = document.querySelectorAll(".links-container a");
window.onscroll = () => {
  var current = "client";

  sections.forEach((section) => {
    const sectionTop = section.offsetTop;
    if (window.scrollY >= sectionTop - 80) {
      current = section.getAttribute("id"); 
    }
  });

  navLi.forEach((li) => {
    li.classList.remove("active");
    if (li.classList.contains(current)) {
      li.classList.add("active");
    }
  });
};
