// for animation
AOS.init({
  offset: 200,
  duration: 600,
  easing: "ease-in-sine",
  delay: 100,
});

// top scroll bar
document.addEventListener("DOMContentLoaded", function () {
  const customHeader = document.querySelector(".header-sec");

  function handleScroll() {
    // Check if the window scroll position is more than 50px from the top
    if (window.scrollY > 50) {
      customHeader.classList.add("active");
    } else {
      customHeader.classList.remove("active");
    }
  }

  // Add scroll event listener to handle the scroll effect
  window.addEventListener("scroll", handleScroll);

  // Optionally call handleScroll on page load to set the correct state if already scrolled
  handleScroll();
});

// swiper slider
$(document).ready(function () {
  // Swiper: Slider
  new Swiper(".review-slider", {
    loop: true,
    navigation: {
      nextEl: ".review-slider-next",
      prevEl: ".review-slider-prev",
    },
    slidesPerView: 1,
    spaceBetween: 0,
    pagination: {
      clickable: true,
    },
  });
  // Publish-slider
  new Swiper(".client-slider", {
    loop: true,
    navigation: {
      nextEl: ".client-slider-next",
      prevEl: ".client-slider-prev",
    },
    slidesPerView: 5,
    spaceBetween: 70,
    breakpoints: {
      1920: {
        slidesPerView: 5,
        spaceBetween: 70,
      },
      1200: {
        slidesPerView: 5,
        spaceBetween: 30,
      },
      991: {
        slidesPerView: 3,
        spaceBetween: 20,
      },
      0: {
        slidesPerView: 2,
        spaceBetween: 10,
      },
    },
  });

  // counter
  $(function () {
    function animateCounter($element) {
      $element.each(function () {
        var $this = $(this),
          countTo = $this.attr("data-count");
        $({ countNum: 0 }).animate(
          { countNum: countTo },
          {
            duration: 3000,
            easing: "linear",
            step: function () {
              $this.text(Math.floor(this.countNum));
            },
            complete: function () {
              $this.text(this.countNum.toLocaleString());
            },
          }
        );
      });
    }

    function checkVisibility() {
      $(".count").each(function () {
        var $this = $(this);
        if (
          $this.offset().top < $(window).scrollTop() + $(window).height() &&
          !$this.hasClass("counted")
        ) {
          $this.addClass("counted");
          animateCounter($this);
        }
      });
    }

    // Run on load and scroll
    $(window).on("scroll", checkVisibility);
    checkVisibility();
  });
});
