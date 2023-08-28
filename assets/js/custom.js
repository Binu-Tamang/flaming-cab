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



// reservation fields validation


const fnameInput = document.getElementById('fname');
    const fnameError = document.getElementById('fnameError');

    fnameInput.addEventListener('input', function() {
        if (isFirstNameValid()) {
            fnameError.textContent = ''; // Clear any error message
        } else {
            showError();
        }
    });

    function isFirstNameValid() {
        const fname = fnameInput.value.trim();
        return /^[A-Z][a-z]{2,}$/.test(fname);
    }

    function showError() {
        if (fnameInput.validity.valueMissing) {
            fnameError.textContent = 'First name is required.';
        } else {
            fnameError.textContent = 'Please enter a valid first name (start with a capital letter and length > 2).';
        }
    }


var pickUpDateField = document.getElementById("pickUpDateField");
pickUpDateField.addEventListener("input", function() {
    validatePickupDate(this);
});

function validatePickupDate(input) {
    var datePattern = /^\d{4}-\d{2}-\d{2}$/;
    var dateValue = input.value.trim();

    if (!datePattern.test(dateValue)) {
        input.setCustomValidity("Please enter a valid date in the format yyyy-mm-dd.");
    } else {
        input.setCustomValidity("");
    }
}

var phoneField = document.getElementById("phoneField");
    phoneField.addEventListener("input", function () {
        validatePhone(this);
    });

    function validatePhone(input) {
        var phonePattern = /^[0-9]{10}$/;
        var phoneValue = input.value.trim();

        if (!phonePattern.test(phoneValue)) {
            input.setCustomValidity("Please enter a valid phone number (10 digits).");
        } else {
            input.setCustomValidity("");
        }
    }

    

    var flightNoField = document.getElementById("flightNoField");
    flightNoField.addEventListener("input", function () {
        validateFlightNumber(this);
    });

    function validateFlightNumber(input) {
        var flightNoValue = input.value.trim();

        if (flightNoValue.length > 8) {
            input.setCustomValidity("Flight number should not exceed 8 characters.");
        } else if (!/^[0-9]/.test(flightNoValue)) {
            input.setCustomValidity("Flight number should start with a number.");
        } else {
            input.setCustomValidity("");
        }
    }


    
    var flightNoField = document.getElementById("flightNoField");
    flightNoField.addEventListener("input", function () {
        validateFlightNumber(this);
    });

    function validateFlightNumber(input) {
        var flightNoValue = input.value.trim();

        if (flightNoValue.length > 8) {
            input.setCustomValidity("Flight number should not exceed 8 characters.");
        } else if (!/^[0-9]/.test(flightNoValue)) {
            input.setCustomValidity("Flight number should start with a number.");
        } else {
            input.setCustomValidity("");
        }
    }



    function validateForm() {
      // Your validation logic
  
      if (valid) {
          var successMessage = document.getElementById("successMessage");
          successMessage.style.display = "block";
      }
  
      return valid;
  }
  










 
