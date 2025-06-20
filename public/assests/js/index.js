
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

    const seeMoreBtn = document.getElementById("see-more-btn");
    const toggleCards = document.querySelectorAll(".countries-hided");
    let isExpanded = false;

    seeMoreBtn.addEventListener("click", function () {
        // Toggle visibility of all hidden cards
        toggleCards.forEach((card) => {
            card.classList.toggle("hidden");
        });

        // Update button text and state
        isExpanded = !isExpanded;
        seeMoreBtn.textContent = isExpanded ? "Show Less " : "See More";

        const targetDiv = document.getElementById("countries"); // your div

        if (isExpanded) {
            // Scroll down to bottom of the div
            setTimeout(() => {
                if (targetDiv) {
                    targetDiv.scrollIntoView({
                        behavior: "smooth",
                        block: "end",
                    });
                }
            }, 100);
        } else {
            // Scroll up to top of the div
            setTimeout(() => {
                if (targetDiv) {
                    targetDiv.scrollIntoView({
                        behavior: "smooth",
                        block: "start",
                    });
                }
            }, 100);
        }
    });

    // slider end

    //
    //scrolling testemonials

    const testimonials = [
        {
            image: "https://randomuser.me/api/portraits/women/43.jpg",
            name: "Priya Sharma",
            role: "IELTS Student",
            quote: "The instructors were incredibly knowledgeable and supportive. I improved my score by 1.5 bands in just 8 weeks!",
            rating: 5,
        },
        {
            image: "https://randomuser.me/api/portraits/men/32.jpg",
            name: "Raj Patel",
            role: "PTE Student",
            quote: "The mock tests were exactly like the real exam. I felt fully prepared and scored 112/120 on my first attempt!",
            rating: 4,
        },
        {
            image: "https://randomuser.me/api/portraits/women/65.jpg",
            name: "Anjali Kapoor",
            role: "Computer Student",
            quote: "The quantitative strategies helped me solve problems faster. I improved my score by 12 points from my diagnostic test.",
            rating: 5,
        },
        {
            image: "https://randomuser.me/api/portraits/men/75.jpg",
            name: "Arjun Singh",
            role: "Janpnese Student",
            quote: "Personalized attention made all the difference. My math score went from 580 to 720 in two months of coaching.",
            rating: 5,
        },
    ];

    const container = document.getElementById("testimonialContainer");
    const indicatorsContainer = document.getElementById("indicators");
    const prevBtn = document.getElementById("prevBtn");
    const nextBtn = document.getElementById("nextBtn");
    let currentIndex = 0;

    // Create testimonial cards
    function createTestimonialCards() {
        container.innerHTML = "";
        indicatorsContainer.innerHTML = "";

        testimonials.forEach((testimonial, index) => {
            // Create card
            const card = document.createElement("div");
            card.className = `min-w-full px-4 py-8 flex flex-col items-center justify-center transition-all duration-500 absolute ${
                index === 0 ? "opacity-100" : "opacity-0"
            }`;
            card.style.transform = `translateX(${index * 100}%)`;
            card.innerHTML = `
            <div class="bg-white rounded-xl shadow-lg p-8 max-w-md w-full fade-in">
              <div class="flex items-center justify-center mb-6">
                <img src="${testimonial.image}" alt="${
                testimonial.name
            }" class="h-20 w-20 rounded-full object-cover border-4 border-red-100">
              </div>
              <div class="text-center">
                <h3 class="text-xl font-bold text-gray-800">${
                    testimonial.name
                }</h3>
                <p class="text-red-600 text-sm mb-4">${testimonial.role}</p>
                <div class="flex justify-center mb-4">
                  ${"★".repeat(testimonial.rating)}${"☆".repeat(
                5 - testimonial.rating
            )}
                </div>
                <p class="text-gray-600 italic">"${testimonial.quote}"</p>
              </div>
            </div>
          `;
            container.appendChild(card);

            // Create indicator
            const indicator = document.createElement("button");
            indicator.className = `h-2 w-8 rounded-full ${
                index === 0 ? "bg-red-600" : "bg-gray-300"
            }`;
            indicator.addEventListener("click", () => goToTestimonial(index));
            indicatorsContainer.appendChild(indicator);
        });
    }

    // Navigate to specific testimonial
    function goToTestimonial(index) {
        currentIndex = index;
        updateTestimonialDisplay();
    }

    // Update testimonial display
    function updateTestimonialDisplay() {
        const cards = document.querySelectorAll("#testimonialContainer > div");
        const indicators = document.querySelectorAll("#indicators > button");

        cards.forEach((card, index) => {
            card.classList.remove("opacity-100");
            card.classList.add("opacity-0");
            card.style.transform = `translateX(${
                (index - currentIndex) * 100
            }%)`;

            if (index === currentIndex) {
                setTimeout(() => {
                    card.classList.remove("opacity-0");
                    card.classList.add("opacity-100");
                }, 50);
            }
        });

        indicators.forEach((indicator, index) => {
            indicator.className = `h-2 w-8 rounded-full ${
                index === currentIndex ? "bg-red-600" : "bg-gray-300"
            }`;
        });
    }

    // Event listeners
    prevBtn.addEventListener("click", () => {
        currentIndex =
            (currentIndex - 1 + testimonials.length) % testimonials.length;
        updateTestimonialDisplay();
    });

    nextBtn.addEventListener("click", () => {
        currentIndex = (currentIndex + 1) % testimonials.length;
        updateTestimonialDisplay();
    });

    // Initialize
    createTestimonialCards();

    // Auto-rotate testimonials (optional)
    let autoSlide = setInterval(() => {
        currentIndex = (currentIndex + 1) % testimonials.length;
        updateTestimonialDisplay();
    }, 5000);

    // Pause auto-rotation on hover
    container.addEventListener("mouseenter", () => clearInterval(autoSlide));
    container.addEventListener("mouseleave", () => {
        autoSlide = setInterval(() => {
            currentIndex = (currentIndex + 1) % testimonials.length;
            updateTestimonialDisplay();
        }, 5000);
    });

});

//about sections code
