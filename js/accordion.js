// get all the accordion headings and content sections
const headings = document.querySelectorAll('.accordion__item--heading');
const contents = document.querySelectorAll('.accordion__item--content');

// add event listener to each heading
headings.forEach((heading, index) => {
  heading.addEventListener('click', (event) => {
    event.preventDefault(); // prevent default link behavior

    // check if clicked content section already has "active" class
    if (contents[index].classList.contains('active')) {
      contents[index].classList.remove('active'); // remove "active" class
    } else {
      // remove "active" class from all content sections
      contents.forEach(content => {
        content.classList.remove('active');
      });

      // toggle "active" class on the clicked content section
      contents[index].classList.toggle('active');
    }
  });
});