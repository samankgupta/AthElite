document.getElementById('active').style.color='rgb(255, 226, 5)';
window.addEventListener("scroll", function() {
  let mainNav = document.getElementById("mainNav");

  if (window.pageYOffset > 50) {
    mainNav.classList.add("is-sticky");
    document.getElementById('active').style.color='rgb(100, 43, 255)';
  } else {
    mainNav.classList.remove("is-sticky");
	document.getElementById('active').style.color='rgb(255, 226, 5)';
  }
});
