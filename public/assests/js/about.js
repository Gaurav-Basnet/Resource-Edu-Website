document.addEventListener("DOMContentLoaded", function () {


const readMoreBtn = document.getElementById('read-more-btn');
    const expandableContent = document.getElementById('expandable-content');
    let isExpanded = false;
    
    readMoreBtn.addEventListener('click', function(e) {
      e.preventDefault();
      
      if (isExpanded) {
        expandableContent.classList.add('hidden');
        readMoreBtn.textContent = 'Read More';
      } else {
        expandableContent.classList.remove('hidden');
        readMoreBtn.textContent = 'Read Less';
      }
      
      isExpanded = !isExpanded;
    });
    // about image slider
        const carousel = document.getElementById('image-carousel');
    const prevBtn = document.getElementById('prev-btn');
    const nextBtn = document.getElementById('next-btn');
    const dots = document.querySelectorAll('.carousel-dot');
    
    let currentIndex = 0;
    const totalSlides = document.querySelectorAll('#image-carousel > div').length;
    let autoScrollInterval;
    let touchStartX = 0;
    let touchEndX = 0;
    
    // Update carousel position and active dot
    const updateCarousel = () => {
carousel.style.transform = `translateX(-${currentIndex * 100}%)`;
      
      dots.forEach((dot, index) => {
        if (index === currentIndex) {
          dot.classList.remove('bg-white/50');
          dot.classList.add('bg-white');
          dot.classList.add('sm:w-3');
          dot.classList.add('w-2.5');
        } else {
          dot.classList.add('bg-white/50');
          dot.classList.remove('bg-white', 'sm:w-3', 'w-2.5');
        }
      });
    };
    
    // Next slide
    const nextSlide = () => {
      currentIndex = (currentIndex + 1) % totalSlides;
      updateCarousel();
    };
    
    // Previous slide
    const prevSlide = () => {
      currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
      updateCarousel();
    };
    
    // Auto-scroll
    const startAutoScroll = () => {
      autoScrollInterval = setInterval(nextSlide, 5000);
    };
    
    // Touch event handlers for mobile swipe
    const handleTouchStart = (e) => {
      touchStartX = e.changedTouches[0].screenX;
    };
    
    const handleTouchEnd = (e) => {
      touchEndX = e.changedTouches[0].screenX;
      handleSwipe();
    };
    
    const handleSwipe = () => {
      clearInterval(autoScrollInterval);
      if (touchStartX - touchEndX > 50) {
        nextSlide(); // Swipe left
      } else if (touchEndX - touchStartX > 50) {
        prevSlide(); // Swipe right
      }
      startAutoScroll();
    };
    
    // Event listeners
    nextBtn.addEventListener('click', () => {
      clearInterval(autoScrollInterval);
      nextSlide();
      startAutoScroll();
    });
    
    prevBtn.addEventListener('click', () => {
      clearInterval(autoScrollInterval);
      prevSlide();
      startAutoScroll();
    });
    
    dots.forEach(dot => {
      dot.addEventListener('click', () => {
        clearInterval(autoScrollInterval);
        currentIndex = parseInt(dot.getAttribute('data-index'));
        updateCarousel();
        startAutoScroll();
      });
    });
    
    // Touch events for mobile
    carousel.addEventListener('touchstart', handleTouchStart, {passive: true});
    carousel.addEventListener('touchend', handleTouchEnd, {passive: true});
    
    // Pause on hover (desktop) and touch (mobile)
    carousel.parentElement.addEventListener('mouseenter', () => {
      clearInterval(autoScrollInterval);
    });
    
    carousel.parentElement.addEventListener('mouseleave', startAutoScroll);
    
    // Initialize
    updateCarousel();
    startAutoScroll();

      // Simple scrolling functionality
    const container = document.querySelector('.team-scroll-container');
    const scrollLeftBtn = document.querySelector('.team-scroll-left');
    const scrollRightBtn = document.querySelector('.team-scroll-right');
    
    if (container && scrollLeftBtn && scrollRightBtn) {
      scrollRightBtn.addEventListener('click', () => {
        container.scrollBy({ left: 300, behavior: 'smooth' });
      });
      
      scrollLeftBtn.addEventListener('click', () => {
        container.scrollBy({ left: -300, behavior: 'smooth' });
      });
    }
    
    // Update scroll indicator
    
      const scrollPercentage = (container.scrollLeft / (container.scrollWidth - container.clientWidth)) * 100;
      document.querySelector('.bg-purple-500').style.width = `${scrollPercentage}%`;
    });
    document.addEventListener('DOMContentLoaded', function() {
  const valueCards = document.querySelectorAll('.bg-white.p-4.rounded-lg');

  valueCards.forEach(card => {
    card.addEventListener('click', function() {
      // Toggle active state
      const isActive = this.classList.contains('active-card');
      
      // Reset all cards first
      valueCards.forEach(c => {
        c.classList.remove('active-card');
        c.querySelector('.bg-purple-100, .bg-purple-200').classList.remove('bg-purple-300');
        c.querySelector('h4').classList.remove('text-purple-800');
        c.querySelector('p').classList.remove('text-purple-600');
      });
      
      // If this card wasn't active, activate it
      if (!isActive) {
        this.classList.add('active-card');
        const icon = this.querySelector('.bg-purple-100, .bg-purple-200');
        const heading = this.querySelector('h4');
        const paragraph = this.querySelector('p');
        
        icon.classList.add('bg-purple-300');
        heading.classList.add('text-purple-800');
        paragraph.classList.add('text-purple-600');
      }
    });
  });
  const cards = document.querySelectorAll('.bg-white.p-4.rounded-lg');
  
  cards.forEach(card => {
    card.addEventListener('mouseenter', function() {
      // Darken card background
      this.classList.remove('bg-white');
      this.classList.add('bg-purple-50');
      
      // Darken icon background
      const iconBg = this.querySelector('.bg-purple-100, .bg-purple-200');
      if (iconBg) {
        iconBg.classList.remove('bg-purple-100', 'bg-purple-200');
        iconBg.classList.add('bg-purple-300');
      }
      
      // Darken icon color
      const icon = this.querySelector('svg');
      if (icon) {
        icon.classList.remove('text-purple-600');
        icon.classList.add('text-purple-800');
      }
      
      // Darken heading
      const heading = this.querySelector('h4');
      if (heading) {
        heading.classList.remove('text-purple-600', 'text-purple-700');
        heading.classList.add('text-purple-900');
      }
      
      // Darken paragraph
      const paragraph = this.querySelector('p');
      if (paragraph) {
        paragraph.classList.remove('text-gray-600');
        paragraph.classList.add('text-purple-700');
      }
    });
    
    card.addEventListener('mouseleave', function() {
      // Restore original card background
      this.classList.remove('bg-purple-50');
      this.classList.add('bg-white');
      
      // Restore icon background
      const iconBg = this.querySelector('.bg-purple-300');
      if (iconBg) {
        iconBg.classList.remove('bg-purple-300');
        // Check original class
        if (this.querySelector('.bg-purple-200')) {
          iconBg.classList.add('bg-purple-200');
        } else {
          iconBg.classList.add('bg-purple-100');
        }
      }
      
      // Restore icon color
      const icon = this.querySelector('svg');
      if (icon) {
        icon.classList.remove('text-purple-800');
        icon.classList.add('text-purple-600');
      }
      
      // Restore heading
      const heading = this.querySelector('h4');
      if (heading) {
        heading.classList.remove('text-purple-900');
        // Check original class
        if (heading.classList.contains('text-purple-600')) {
          heading.classList.add('text-purple-600');
        } else {
          heading.classList.add('text-purple-700');
        }
      }
      
      // Restore paragraph
      const paragraph = this.querySelector('p');
      if (paragraph) {
        paragraph.classList.remove('text-purple-700');
        paragraph.classList.add('text-gray-600');
      }
    });
  });
 
  // message from directior 
    const mobileReadBtn = document.getElementById('mobile-read-btn');
    const expandableContent = document.getElementById('mobile-expandable-content');
    
    if (mobileReadBtn && expandableContent) {
      mobileReadBtn.addEventListener('click', function() {
        if (expandableContent.classList.contains('hidden')) {
          expandableContent.classList.remove('hidden');
          mobileReadBtn.textContent = 'Read Less';
        } else {
          expandableContent.classList.add('hidden');
          mobileReadBtn.textContent = 'Read More';
        }
      });
    }
    const toggleBtn = document.getElementById('toggle-universities-btn');
    const additionalCards = document.getElementById('additional-cards');
    
    if (toggleBtn && additionalCards) {
      toggleBtn.addEventListener('click', function(e) {
        e.preventDefault();
        
        if (additionalCards.classList.contains('hidden')) {
          additionalCards.classList.remove('hidden');
          toggleBtn.textContent = 'See Less Universities';
          // Smooth scroll to the bottom of the additional cards
          additionalCards.scrollIntoView({ behavior: 'smooth', block: 'end' });
        } else {
          additionalCards.classList.add('hidden');
          toggleBtn.textContent = 'See More Universities';
          // Smooth scroll to the button position
          toggleBtn.scrollIntoView({ behavior: 'smooth' });
        }
      });
    }
    

    const expander = document.getElementById('social-expander');
    const socialIcons = document.getElementById('social-icons');
    const expandIcon = document.getElementById('expand-icon');
    
    if (expander && socialIcons) {
      expander.addEventListener('click', function(e) {
        e.preventDefault();
        
        if (socialIcons.classList.contains('hidden')) {
          // Show with animation
          socialIcons.classList.remove('hidden');
          socialIcons.style.maxHeight = socialIcons.scrollHeight + 'px';
          expandIcon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />';
        } else {
          // Hide with animation
          socialIcons.style.maxHeight = '0';
          setTimeout(() => {
            socialIcons.classList.add('hidden');
          }, 300);
          expandIcon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />';
        }
      });
    }
    //floating action button 
 
        const socialButton = document.getElementById('socialButton');
        const socialIcon = document.getElementById('socialIcon');
        const pElement = socialButton.querySelector('p');

        // Your existing toggle function
        function togglesocialIcon() {
            socialIcon.classList.toggle('translate-y-9');
            socialIcon.classList.toggle('opacity-0');
            socialIcon.classList.toggle('pointer-events-none');
            
            if (pElement.textContent === '+') {
                pElement.textContent = '×';
                pElement.classList.add('transform', 'rotate-135');
            } else {
                pElement.textContent = '+';
                pElement.classList.remove('transform', 'rotate-135');
            }
        }


        
    });              



