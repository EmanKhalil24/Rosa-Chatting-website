const passwordInput = document.querySelector("#password")
const eye = document.querySelector("#eye")
eye.addEventListener("click", function(){
    this.classList.toggle("fa-eye-slash")
    const type = passwordInput.getAttribute("type") === "password" ? "text" : "password"
    passwordInput.setAttribute("type", type)
  });

  