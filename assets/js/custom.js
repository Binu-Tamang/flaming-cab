$(document).ready(function () {
  $(".our-gallery-img").magnificPopup({
    delegate: ".image-link-js", // child items selector, by clicking on it popup will open
    type: "image",
    gallery: {
      enabled: true,
    },
  });
});
