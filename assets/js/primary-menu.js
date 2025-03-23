document.addEventListener("DOMContentLoaded", function () {
  document.querySelectorAll(".primary-menu .menu-item a").forEach((link) => {
    let image = document.createElement("img");
    image.src = "/wp-content/themes/meyo/assets/images/arrow.png";
    image.alt = "External Link";
    link.appendChild(image);
  });
});
