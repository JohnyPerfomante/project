document.addEventListener("DOMContentLoaded", function () {
  var swiper = new Swiper(".swiper-row", {
    slidesPerView: 4,
    spaceBetween: 30,
    loop: false,
    navigation: {
      nextEl: ".slider-swiper-right",
      prevEl: ".slider-swiper-left",
    },
    mousewheel: true,
    keyboard: true,
  });

  var currentIndex = 1;

  var leftArrow = document.querySelector(".slider-swiper-left");
  var rightArrow = document.querySelector(".slider-swiper-right");
  var indexDisplay = document.querySelector(".change-number-swiper");
  var circleR = document.getElementById("circleR");
  var circleL = document.getElementById("circleL");

  leftArrow.addEventListener("click", function () {
    if (currentIndex > 1) {
      currentIndex--;
      indexDisplay.textContent = currentIndex;
      if (currentIndex === 1) {
        circleL.classList.remove("active");
      }
      if (currentIndex > 1 && currentIndex < 8) {
        circleL.classList.add("active");
        circleR.classList.add("active");
      }
      if (currentIndex === 8) {
        circleR.classList.remove("active");
      }
    }
  });

  rightArrow.addEventListener("click", function () {
    if (currentIndex < 8) {
      currentIndex++;
      indexDisplay.textContent = currentIndex;
      if (currentIndex == 1) {
        circleL.classList.remove("active");
      }
      if (currentIndex > 1 && currentIndex < 8) {
        circleR.classList.add("active");
        circleL.classList.add("active");
      }
      if (currentIndex === 8) {
        circleR.classList.remove("active");
      }
    }
  });
});
