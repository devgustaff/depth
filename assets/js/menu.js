window.onload = function() {
  document.querySelector(".menu-mobile").addEventListener("click", () => {
    if (document.querySelector(".menu nav ul").style.display == "flex") {
      document.querySelector(".menu nav ul").style.display = "none";
    } else {
      document.querySelector(".menu nav ul").style.display = "flex";
    }
  });
}; 

