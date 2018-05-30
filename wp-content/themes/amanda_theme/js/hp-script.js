window.addEventListener(
  "resize",
  () => {
    resetScreenHeight();
  },
  true
);
resetScreenHeight();
function resetScreenHeight() {
  var afooter = document.querySelector("footer");
  var acontent = document.querySelector("#content");
  var hpSliderContainerChildren = document.querySelectorAll(
    "#hpSliderContainer > div"
  );
  var afooterHeight = afooter.scrollHeight;
  var awindowHeight = window.innerHeight;

  acontent.style.paddingBottom = afooterHeight + "px";
  acontent.style.height = awindowHeight + "px";

  var sliderItemHeight = awindowHeight - afooterHeight;
  for (var hpSliderContainerChild of hpSliderContainerChildren) {
    hpSliderContainerChild.style.height = sliderItemHeight + "px";
    console.log(sliderItemHeight);
  }
}

jQuery(document).ready(function() {
  $("#hpSliderContainer").bxSlider({
    wrapperClass: "hp-bxslider",
    onSliderLoad: function(currentIndex) {
      $("#hpSliderContainer > div")
        .eq(currentIndex + 1)
        .addClass("active-slider");
    },
    onSlideAfter: function(oldIndex, newIndex) {
      oldIndex.addClass("active-slider");

      $("#hpSliderContainer > div")
        .eq(newIndex + 1)
        .removeClass("active-slider");
    }
  });
});
