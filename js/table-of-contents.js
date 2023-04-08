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

      tocList += `<li><a href="#${headingID}">${heading.innerText}</a></li>`;
    });

    tocList += "</ul>";
    tocDiv.innerHTML += tocList;
    } else {
    // Hide the div if there are no h2 headings on the page
    tocDiv.style.display = "none";
    }
  }
  });