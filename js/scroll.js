// Get the link with class name "learn-more"
var learnMoreLink = document.querySelector(".learn-more");

// When the link is clicked, scroll to the container with class name "container__2"
learnMoreLink.addEventListener("click", function(event) {
  event.preventDefault();
  var container2 = document.querySelector(".container__2");
  container2.scrollIntoView({ behavior: "smooth" });
});