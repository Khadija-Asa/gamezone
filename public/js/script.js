let button = document.querySelector(".ham");
let nav = document.querySelector(".navbar");

button.addEventListener("click", burger);
function burger (){
  nav.classList.toggle("showNav");
  button.classList.toggle("showClose");
}