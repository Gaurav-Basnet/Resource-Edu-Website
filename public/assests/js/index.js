
// Hide loader when page is fully loaded
   window.addEventListener('load', function() {
    setTimeout(function() {
      const loader = document.getElementById('loader');
      loader.style.opacity = '0';
      setTimeout(() => loader.style.display = 'none', 500);
    }, 1000); // Adjust delay if needed
  });


document.addEventListener("DOMContentLoaded", function () {
    //sliderstart

    
    const swiperContainer = document.querySelector(".swiper-container");
    if (swiperContainer && typeof Swiper !== "undefined") {
        new Swiper(".swiper-container", {
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            speed: 800,
            grabCursor: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    }
    const toggleBtn = document.getElementById("see-more");
    const hiddenCards = document.querySelectorAll(".countries-hided");
    let isExpanded = false;

    toggleBtn.addEventListener("click", function () {
      hiddenCards.forEach(card => { 
        card.classList.toggle("hidden");
     
      });

      isExpanded = !isExpanded;
      toggleBtn.textContent = isExpanded ? "See Less" : "See More";

      if (isExpanded) {
        toggleBtn.scrollIntoView({ behavior: "smooth", block: "end" });
      } else {
        toggleBtn.scrollIntoView({ behavior: "smooth", block: "center" });
      }
    });
});

