$(document).ready(function () {
  $(".our-gallery-img").magnificPopup({
    delegate: ".image-link-js", // child items selector, by clicking on it popup will open
    type: "image",
    gallery: {
      enabled: true,
    },
  });
});
function setEqualTabPaneHeight() {
  // Get all the tab panes
  var tabPanes = document.querySelectorAll('.flames-content-nav-tab .tab-pane');
  
  // Find the maximum height among the tab panes
  var maxHeight = 0;
  tabPanes.forEach(function(pane) {
    maxHeight = Math.max(maxHeight, pane.offsetHeight);
  });
  
  // Set the maximum height for all the tab panes
  tabPanes.forEach(function(pane) {
    pane.style.height = maxHeight + 'px';
  });
}

// Call the function to set equal heights initially and on window resize
window.addEventListener('DOMContentLoaded', setEqualTabPaneHeight);
window.addEventListener('resize', setEqualTabPaneHeight);
