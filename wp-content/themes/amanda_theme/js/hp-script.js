window.addEventListener("resize", () => {
  resetScreenHeight()
},true);
resetScreenHeight()
function resetScreenHeight() {
  var aheader = document.querySelector('header');
  var afooter = document.querySelector('footer');
  var acontent = document.querySelector('#content');
  
  
  acontent.style.paddingTop = aheader.scrollHeight+"px";
  acontent.style.paddingBottom = afooter.scrollHeight+"px";
  acontent.style.height = window.innerHeight+"px";
}


jQuery(document).ready(function() {
  $('#hpSliderContainer').bxSlider({
    wrapperClass: "hp-bxslider"
  });
});