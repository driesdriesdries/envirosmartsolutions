//Blog Navigation 
// Get the <ul> element
const categoriesList = document.querySelector('.categories-pane__list--unordered');

// Get the <button> element
const toggleButton = document.querySelector('.categories-pane__toggle--button');

// Add a click event listener to the button
toggleButton.addEventListener('click', function(event) {
// Check if the <ul> element has the "expanded" class
const isExpanded = categoriesList.classList.contains('expanded');

// If it has the class, remove it; otherwise, add it
if (isExpanded) {
    categoriesList.classList.remove('expanded');
} else {
    categoriesList.classList.add('expanded');
}

// Prevent the click event from bubbling up to the document
event.stopPropagation();
});

// Add a click event listener to the document
document.addEventListener('click', function() {
// Check if the <ul> element has the "expanded" class
const isExpanded = categoriesList.classList.contains('expanded');

// If it has the class, remove it
if (isExpanded) {
    categoriesList.classList.remove('expanded');
}
});