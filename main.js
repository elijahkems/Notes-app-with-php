const navLinks = document.querySelectorAll("#navbarSupportedContent a");
const url = new URL(window.location.href);
const { pathname } = url;
console.log(pathname, navLinks);
assignActiveLink(navLinks);

// functions
function removeActiveClass(elements) {
  elements.forEach((element) => {
    element.classList.remove("active");
  });
}

function assignActiveLink(elements) {
  removeActiveClass(elements);
  elements.forEach((element) => {
    let text = element.textContent;
    console.log(text);
    if (pathname == "/index" && text == "Home") element.classList.add("active");
    if (pathname == "/notes" && text == "Notes")
      element.classList.add("active");
    if (pathname == "/createnote" && text == "Create Note")
      element.classList.add("active");
    if (pathname == "/login" && text == "Login")
      element.classList.add("active");
  });
}
