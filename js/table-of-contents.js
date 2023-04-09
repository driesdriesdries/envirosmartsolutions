document.addEventListener("DOMContentLoaded", function () {
  const tocDiv = document.querySelector(".table-of-contents");

  if (tocDiv) {
    const h2Headings = document.querySelectorAll("h2");

    // Check if any h2 headings are found on the page
    if (h2Headings.length > 0) {
      // Add an h3 heading with the text "Table of Contents"
      let tocHeader = "<h3>Table of Contents</h3>";
      tocDiv.innerHTML = tocHeader;

      let tocList = "<ul>";

      h2Headings.forEach((heading) => {
        const headingID = heading.innerText.replace(/\s+/g, "-").toLowerCase();
        heading.setAttribute("id", headingID);

        tocList += `<li><a href="#${headingID}" data-id="${headingID}">${heading.innerText}</a></li>`;
      });

      tocList += "</ul>";
      tocDiv.innerHTML += tocList;

      // Add event listener for click events on <a> elements
      tocDiv.addEventListener("click", function (event) {
        event.preventDefault();

        if (event.target.tagName === "A") {
          const targetID = event.target.getAttribute("data-id");
          const targetElement = document.getElementById(targetID);

          if (targetElement) {
            targetElement.scrollIntoView({
              behavior: "smooth",
              block: "start",
            });
          }
        }
      });
    } else {
      // Hide the div if there are no h2 headings on the page
      tocDiv.style.display = "none";
    }
  }
});

  document.addEventListener("DOMContentLoaded", function () {
    const tocDiv = document.querySelector(".table-of-contents");
  
    if (tocDiv) {
      const ulElement = tocDiv.querySelector("ul");
      const liElements = ulElement ? ulElement.querySelectorAll("li") : [];
  
      // Check if the <ul> has any <li> elements
      if (liElements.length === 0) {
        // Remove the div with a class of "left" entirely from the page
        const leftDiv = document.querySelector(".left");
        if (leftDiv) {
          leftDiv.parentNode.removeChild(leftDiv);
        }
      }
    }
  });

  //make the component sticky
  document.addEventListener("DOMContentLoaded", function () {
    const tocDiv = document.querySelector(".table-of-contents");
  
    if (tocDiv) {
      window.addEventListener("scroll", function () {
        if (window.pageYOffset > 500) {
          tocDiv.classList.add("sticky");
        } else {
          tocDiv.classList.remove("sticky");
        }
      });
    }
  });