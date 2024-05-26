document.addEventListener("DOMContentLoaded", function () {
  var swiper = new Swiper(".myswiper", {
    slidesPerView: 3,
    spaceBetween: 30,
    loop: false,
    navigation: {
      nextEl: ".slider-swiper-right",
      prevEl: ".slider-swiper-left",
    },
    pagination: {
      el: ".swiper-pagination",
    },
    mousewheel: true,
    keyboard: true,
  });
});

document.addEventListener("DOMContentLoaded", function () {
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

document.addEventListener("DOMContentLoaded", function () {
  const productBoxes = document.querySelectorAll(".link-product-box-liked");

  productBoxes.forEach(function (box) {
    box.addEventListener("click", function () {
      const productId = this.getAttribute("data-product-id");

      const url = `products.php?product_id=${productId}`;
      // Перенаправити користувача на product.php з параметрами
      window.location.href = url;
    });
  });
});
