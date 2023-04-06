//Blog Navigation 

// CATEGORIES LIST
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
        toggleButton.classList.remove('expanded');
    } else {
        categoriesList.classList.add('expanded');
        toggleButton.classList.add('expanded');
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
        toggleButton.classList.remove('expanded');
    }
});


// TAGS LIST
// Get the tag dropdown button and panel
const tagDropdownButton = document.querySelector('.tag-dropdown__button');
const tagDropdownPanel = document.querySelector('.tag-dropdown__panel');

// Toggle the "expanded" class when the tag dropdown button is clicked
tagDropdownButton.addEventListener('click', function() {
  tagDropdownButton.classList.toggle('expanded');
  tagDropdownPanel.classList.toggle('expanded');
});

// Add event listener for clicks on the "View Categories" button to remove the "expanded" class
const categoriesToggleButton = document.querySelector('.categories-pane__toggle--button');
categoriesToggleButton.addEventListener('click', function() {
  tagDropdownButton.classList.remove('expanded');
  tagDropdownPanel.classList.remove('expanded');
});

// Add event listener for clicks outside the tag dropdown button and panel to remove the "expanded" class
document.addEventListener('click', function(event) {
  const isClickInsideTagDropdown = tagDropdownButton.contains(event.target) || tagDropdownPanel.contains(event.target);
  if (!isClickInsideTagDropdown) {
    tagDropdownButton.classList.remove('expanded');
    tagDropdownPanel.classList.remove('expanded');
  }
});
