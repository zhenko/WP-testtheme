document.addEventListener("DOMContentLoaded", (event) => {
  console.log("loaded custom script");

  let more768px = false;
  let less768px = false;

  function onWindowResize() {
    if (window.innerWidth >= 768 && !more768px) {
      more768px = true;
      less768px = false;
      jQuery(".menu-top-navigation-container").removeClass("mobile");
    } else if (window.innerWidth < 768 && !less768px) {
      more768px = false;
      less768px = true;
      jQuery(".menu-top-navigation-container").addClass("mobile");
    }
  }

  window.addEventListener("resize", onWindowResize);

  onWindowResize();

  jQuery("#close").on("click", function () {
    if (jQuery(".menu-top-navigation-container").hasClass("hide")) {
      jQuery(".menu-top-navigation-container").removeClass("hide");
      jQuery("#close").text("Close");
    } else {
      jQuery(".menu-top-navigation-container").addClass("hide");
      jQuery("#close").text("Open");
    }
  });
});
