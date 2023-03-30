const menuToggleBtn = document.querySelector('.menutoggle');
const siteNav = document.getElementById('site-navigation');

menuToggleBtn.addEventListener('click', () => {
  siteNav.classList.toggle('toggled');
});

// Get the link with class name "learn-more"
var learnMoreLink = document.querySelector(".learn-more");

// When the link is clicked, scroll to the container with class name "container__2"
learnMoreLink.addEventListener("click", function(event) {
  event.preventDefault();
  var container2 = document.querySelector(".container__2");
  container2.scrollIntoView({ behavior: "smooth" });
});

//Close menu after link is clicked
const nav = document.getElementById('site-navigation');
const menuLinks = document.querySelectorAll('.menu-box-list--item a');

menuLinks.forEach(link => {
  link.addEventListener('click', () => {
    nav.classList.remove('toggled');
  });
});
