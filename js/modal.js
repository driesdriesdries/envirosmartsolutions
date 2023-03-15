// Get the modal
var modal = document.getElementById("myModal");

// Get all elements with class name "modaltrigger"
var modalTriggers = document.getElementsByClassName("modaltrigger");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When any element with class "modaltrigger" is clicked, open the modal
for (var i = 0; i < modalTriggers.length; i++) {
  modalTriggers[i].onclick = function() {
    modal.style.display = "block";
    document.body.style.overflow = "hidden"; // prevent scrolling
  }
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
  document.body.style.overflow = "auto"; // allow scrolling
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
    document.body.style.overflow = "auto"; // allow scrolling
  }
}
