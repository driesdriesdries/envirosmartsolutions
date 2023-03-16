// Get the link with class name "learn-more"
var learnMoreLink = document.querySelector(".learn-more");

// When the link is clicked, scroll to the container with class name "container__2"
learnMoreLink.addEventListener("click", function(event) {
  event.preventDefault();
  var container2 = document.querySelector(".container__2");
  container2.scrollIntoView({ behavior: "smooth" });
});

//Navigation Scrolling
// Select all navigation links
const navLinks = document.querySelectorAll('#site-navigation .menu-box a');

// Loop through each navigation link
navLinks.forEach(link => {
  // Add a click event listener to each link
  link.addEventListener('click', e => {
    // Prevent the default behavior of the link
    e.preventDefault();

    // Get the name of the section to scroll to
    const sectionName = link.textContent.toLowerCase().replace(' ', '-');

    // Get the section element by its class name
    const section = document.querySelector(`.section__${sectionName}`);

    // Scroll smoothly to the section
    section.scrollIntoView({ behavior: 'smooth' });
  });
});
