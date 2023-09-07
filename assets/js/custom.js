

$(document).ready(function () {
  $(".our-fleets-img").magnificPopup({
    delegate: ".image-link-js", // child items selector, by clicking on it popup will open
    type: "image",
    gallery: {  
      enabled: true,
    },
  });
});
// up popup js 

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

// js for the menu navbar
const mobile_nav = document.querySelector(".mobile-nav-btn");
const nav_second_top_header = document.querySelector(".second-top-header");

const toggleNavbar = () => {
nav_second_top_header.classList.toggle("active");
};

mobile_nav.addEventListener("click", () => toggleNavbar()); 

// =====================scroll aos animation
AOS.init({
  duration: 1200,
  once: 'true',
})

window.addEventListener('DOMContentLoaded',function(){
  document.addEventListener("scroll", (event) => {

    let lastKnownScrollPosition = window.scrollY;
    const scroll_button= document.querySelector('#go-to-top');

    if (lastKnownScrollPosition < '200') {
        scroll_button.classList.remove('show');
    }else{
      scroll_button.classList.add('show');

    }
  });
});
document.addEventListener("DOMContentLoaded", function () {
  const link = document.querySelector("#go-to-top a");
    link.addEventListener("click", function (event) {
      event.preventDefault();
      const target = document.querySelector(this.getAttribute("href"));
      if (target) {

        window.scrollTo({
          top: 0,
          behavior: "smooth"
        });
    }
    });
});













 
