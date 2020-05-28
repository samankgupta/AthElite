window.addEventListener("scroll", function() {
  let registercard = document.getElementById("registercard");

  if (window.pageYOffset > 240) {
    registercard.classList.add("registercardfixed");
  } else {
    registercard.classList.remove("registercardfixed");
  }
});