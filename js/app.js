const eye = document.querySelector(".eyes");
const passwd = document.querySelector(".passwd");

// Eventlistener to Eye
eye.addEventListener("click", (e) => {
  // Default
  e.preventDefault();

  // Change Type
  passwd.type === "text" ? (passwd.type = "password") : (passwd.type = "text");
});
