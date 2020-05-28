
let ball=document.getElementById('ball');
window.addEventListener("scroll", function() {
  var value=window.scrollY;
  if(window.pageYOffset <280)
  {
  	ball.style.left=value*4 + 'px';
  	ball.style.transform = "rotate("+value*2+"deg)";
  }
});