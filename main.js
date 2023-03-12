const navLinks = document.querySelectorAll("#navbarSupportedContent a");
const loginForm = document.querySelector("#login-form");
const signUpForm = document.querySelector("#sign-up-form");
const submitBtn = document.querySelector("#submit-btn");
const logoutBtn = document.querySelector("#logout-btn");

//url and pathname
const url = new URL(window.location.href);
const { pathname } = url;
clearErrorDivs();
assignActiveLink(navLinks);

//event listeners
submitBtn.addEventListener("click", (e) => {
  e.preventDefault();
  handleFormErrors();
});
logoutBtn.addEventListener("click", () => {});

// functions
function clearErrorDivs() {
  let elements = document.querySelectorAll("#error-container");
  elements.forEach((p) => p.remove());
}

function removeActiveClass(elements) {
  elements.forEach((element) => {
    element.classList.remove("active");
  });
}

function removeRedBorder(form) {
  let inputs = form.querySelectorAll("input");
  inputs.forEach((input) => {
    input.classList.remove("border-danger");
  });
}

function addErrorMsg(inputElement, textContent) {
  let element = document.createElement("p");
  element.id = "error-container";
  element.textContent = textContent;
  inputElement.classList.add("border-danger");
  inputElement.after(element);
}

function assignActiveLink(elements) {
  removeActiveClass(elements);
  elements.forEach((element) => {
    let text = element.textContent;
    if (pathname == "/index" && text == "Home") element.classList.add("active");
    if (pathname == "/notes" && text == "Notes")
      element.classList.add("active");
    if (pathname == "/createnote" && text == "Create Note")
      element.classList.add("active");
    if (pathname == "/login" && text == "Login")
      element.classList.add("active");
  });
}

function handleFormErrors(e) {
  clearErrorDivs();
  let errorMsg = "";
  //sign-up page
  if (pathname == "/sign-up") {
    removeRedBorder(signUpForm);
    const emailInput = signUpForm[0].value.trim();
    const passwordInput = signUpForm[1].value.trim();
    const repeatPasswordInput = signUpForm[2].value.trim();

    if (emailInput.length == 0) {
      errorMsg = "email input is empty";
      addErrorMsg(signUpForm[0], errorMsg);
    }
    if (passwordInput.length == 0) {
      errorMsg = "password input is empty";
      addErrorMsg(signUpForm[1], errorMsg);
    }
    if (repeatPasswordInput.length == 0) {
      errorMsg = "repeat password input is empty";
      addErrorMsg(signUpForm[2], errorMsg);
    }
    if (passwordInput !== repeatPasswordInput) {
      errorMsg = "Password must match";
      addErrorMsg(signUpForm[2], errorMsg);
    }
    if (errorMsg == "") {
      removeRedBorder(signUpForm);
      signUpForm.submit();
    }
  }
  // login page
  if (pathname == "/login") {
    removeRedBorder(loginForm);
    const emailInput = loginForm[0].value.trim();
    const passwordInput = loginForm[1].value.trim();

    if (emailInput.length == 0) {
      errorMsg = "email input is empty";
      addErrorMsg(loginForm[0], errorMsg);
    }
    if (passwordInput.length == 0) {
      errorMsg = "password input is empty";
      addErrorMsg(loginForm[1], errorMsg);
    }
    if (errorMsg == "") {
      removeRedBorder(loginForm);
      loginForm.submit();
    }
  }
}
