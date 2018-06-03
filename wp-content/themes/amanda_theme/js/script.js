window.sr = ScrollReveal({
  reset: true
});
sr.reveal(".reveal-left", {
  origin: 'left',
  distance: '60px'
});
sr.reveal(".reveal-top", {
  origin: 'top'
});


sr.reveal(".reveal-left-footer", {
  origin: 'left',
  distance: '60px',
  delay: 500
});
sr.reveal(".reveal-right-footer", {
  origin: 'left',
  distance: '60px',
  delay: 1000
});

jQuery(document).ready(function($) {
  $('.tri-preloader').fadeOut();
});
