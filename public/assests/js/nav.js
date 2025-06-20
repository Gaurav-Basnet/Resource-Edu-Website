  document.addEventListener('DOMContentLoaded', function () {
   

          // Get current URL path (handles trailing slashes)
          const currentPath = window.location.pathname.replace(/\/$/, '');
          
          // Find all nav links
          const navLinks = document.querySelectorAll('.nav-link');
          
          navLinks.forEach(link => {
            // Get link's path (remove domain and trailing slashes)
            const linkPath = new URL(link.href).pathname.replace(/\/$/, '');
            
            // If this link matches current page
            if (linkPath === currentPath) {
              // Find the underline element
              const underline = link.querySelector('.nav-underline');
              
              // Force the underline to stay visible
              if (underline) {
                underline.style.width = '100%';
                
                // Disable hover animation for active link
                link.classList.remove('group');
                underline.classList.remove('group-hover:w-full');
              }
            }
          });
      
      const menuBtn = document.getElementById("menu-btn");
      const mobileMenu = document.getElementById("mobile-menu");
      const menuIcon = document.getElementById("menu-icon");
      const closeIcon = document.getElementById("close-icon");
      const dropdownBtn = document.getElementById("mobile-dropdown-btn");
      const dropdown = document.getElementById("mobile-dropdown");
      const dropdownIcon = document.getElementById("dropdown-icon");
      const nav = document.querySelector("nav");

      // Toggle mobile menu
      menuBtn.addEventListener("click", (e) => {
        e.stopPropagation();
        mobileMenu.classList.toggle("open");
        menuIcon.classList.toggle("hidden");
        closeIcon.classList.toggle("hidden");
      });

      // Toggle dropdown
      dropdownBtn.addEventListener("click", (e) => {
        e.stopPropagation();
        dropdown.classList.toggle("hidden");
        dropdownIcon.classList.toggle("rotate-180");
      });

      // Click outside to close menu
      document.addEventListener("click", (e) => {
        const isClickInsideNav = nav.contains(e.target);

        if (!isClickInsideNav) {
          // Close mobile menu if open
          if (mobileMenu.classList.contains("open")) {
            mobileMenu.classList.remove("open");
            menuIcon.classList.remove("hidden");
            closeIcon.classList.add("hidden");
          }

          // Close mobile dropdown if open
          if (!dropdown.classList.contains("hidden")) {
            dropdown.classList.add("hidden");
            dropdownIcon.classList.remove("rotate-180");
          }
        }
      });
      

      navLinks.forEach(link => {
        link.addEventListener('click', () => {
          navLinks.forEach(l => l.classList.remove('active-link')); // Remove from all
          link.classList.add('active-link'); // Add to clicked one
        });
      });
    
     
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

        // Your existing button click handler
        socialButton.addEventListener('click', function(e) {
            e.stopPropagation(); // Prevent this click from triggering the document click
            togglesocialIcon();
        });

        // New: Click outside to close
        document.addEventListener('click', function() {
            if (!socialIcon.classList.contains('opacity-0')) {
                socialIcon.classList.add('translate-y-9');
                socialIcon.classList.add('opacity-0');
                socialIcon.classList.add('pointer-events-none');
                pElement.textContent = '+';
                pElement.classList.remove('transform', 'rotate-135');
            }
        });

        // Prevent closing when clicking on the icons
        socialIcon.addEventListener('click', function(e) {
            e.stopPropagation();
        });

     
    });