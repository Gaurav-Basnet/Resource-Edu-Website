//Sidebar hide and show

function toggleSidebar() {
  const sidebar = document.getElementById("sidebar");
  const hamburgerIcon = document.getElementById("hamburgerIcon");
  const closeIcon = document.getElementById("closeIcon");
  const maincontent = document.getElementById("mainContent");

  if (sidebar.classList.contains("-translate-x-full")) {
    sidebar.classList.remove("-translate-x-full");
    hamburgerIcon.classList.add("hidden");
    closeIcon.classList.remove("hidden");
    maincontent.classList.add("blur-sm");
  } else {
    sidebar.classList.add("-translate-x-full");
    hamburgerIcon.classList.remove("hidden");
    closeIcon.classList.add("hidden");
    maincontent.classList.remove("blur-sm");
  }
}
//Settings dropdown show and hide
function toggleDropdown() {
  const dropdown = document.getElementById("dropdownMenu");
  const arrowIcon = document.getElementById("arrowIcon");

  dropdown.classList.toggle("hidden");
  arrowIcon.classList.toggle("rotate-180");
}
//Records dropdown
function toggleDropdown2() {
  const dropdown = document.getElementById("dropdownMenu2");
  const icon = document.getElementById("arrowIcon2");
  dropdown.classList.toggle("hidden");
  icon.classList.toggle("rotate-180");
}
//Reports Dropdown
function toggleDropdown3() {
  const dropdown = document.getElementById("dropdownMenu3");
  const icon = document.getElementById("arrowIcon3");
  dropdown.classList.toggle("hidden");
  icon.classList.toggle("rotate-180");
}
//different frames like home settings show and hide
function showPage(pageId) {
  const pages = [
    "homeContent",
    "settingsContent",
    "accountsContent",
    "othersContent",
    "privacyContent",
    "notificationsContent",
    "record1Content",
    "record2Content",
    "report1Content",
    "report2Content",
  ];
  pages.forEach((id) => {
    document.getElementById(id).classList.add("hidden");
  });
  document.getElementById(pageId).classList.remove("hidden");
}
//set the background color of the clicked element
function setActive(element) {
  // Remove active classes from all sidebar-items
  const allItems = document.querySelectorAll(".sidebar-item");
  allItems.forEach((item) => {
    item.classList.remove("bg-blue-400", "text-white");
    item.classList.add("text-gray-500");
  });

  // Find the sidebar-item inside the clicked element
  const h1 = element.querySelector(".sidebar-item");

  if (h1) {
    h1.classList.add("bg-blue-400", "text-white");
    h1.classList.remove("text-gray-500");
  }
}
//hide when it is clicked anywhere outside the document
document.addEventListener("click", function (event) {
  const sidebar = document.getElementById("sidebar");
  const toggleButton = document.getElementById("togglebutton");
  const mainContent = document.getElementById("mainContent");
  const isClickInsideSidebar = sidebar.contains(event.target);
  const isClickOnToggleButton = toggleButton.contains(event.target);

  if (
    !isClickInsideSidebar &&
    !isClickOnToggleButton &&
    !sidebar.classList.contains("-translate-x-full")
  ) {
    sidebar.classList.add("-translate-x-full");
    document.getElementById("hamburgerIcon").classList.remove("hidden");
    document.getElementById("closeIcon").classList.add("hidden");
    mainContent.classList.remove("blur-sm");
  }
});

function adjustSidebarFontSize() {
  const sidebarItems = document.querySelectorAll(".sidebar-item");

  sidebarItems.forEach((item) => {
    if (window.innerWidth < 768) {
      item.classList.remove("text-lg");
      item.classList.add("text-sm");
    } else {
      item.classList.remove("text-sm");
      item.classList.add("text-lg");
    }
  });
}
//search code
function searchPage() {
  const query = document
    .querySelector('input[type="text"]')
    .value.toLowerCase();
  const content = document.getElementById("mainContent");
  const elements = content.querySelectorAll("*");

  // Clear previous highlights
  elements.forEach((el) => {
    if (el.dataset.originalText) {
      el.innerHTML = el.dataset.originalText;
      delete el.dataset.originalText;
    }
  });

  // Highlight matches
  elements.forEach((el) => {
    if (
      el.children.length === 0 &&
      el.textContent.toLowerCase().includes(query) &&
      query !== ""
    ) {
      el.dataset.originalText = el.innerHTML;
      const regex = new RegExp(`(${query})`, "gi");
      el.innerHTML = el.innerHTML.replace(regex, `<mark>$1</mark>`);
    }
  });
}

// Run on load and window resize
window.addEventListener("load", adjustSidebarFontSize);
window.addEventListener("resize", adjustSidebarFontSize);

//hide the profile section

document.addEventListener("DOMContentLoaded", function () {
  const profileButton = document.getElementById("profileButton");
  const profileSection = document.getElementById("profileSection");

  const settingsButton = document.getElementById("settingsButton");
  const settingsSection = document.getElementById("settingsSection");

  const logoutButton = document.getElementById("logoutButton");
  const logoutSection = document.getElementById("logoutSection");

  if (logoutButton && logoutSection) {
    logoutButton.addEventListener("click", function (e) {
      e.stopPropagation(); // Prevent click from reaching document

      profileSection.classList.add("hidden");
      settingsSection.classList.add("hidden");
      logoutSection.classList.toggle("hidden");
    });

    document.addEventListener("click", function (e) {
      const isInsideSection = logoutSection.contains(e.target);
      const isButton = logoutButton.contains(e.target);

      if (!isInsideSection && !isButton) {
        logoutSection.classList.add("hidden");
      }
    });
  }

  if (settingsButton && settingsSection) {
    settingsButton.addEventListener("click", function (e) {
      e.stopPropagation(); // Prevent click from reaching document

      profileSection.classList.add("hidden");
      logoutSection.classList.add("hidden");
      settingsSection.classList.toggle("hidden");
    });

    document.addEventListener("click", function (e) {
      const isInsideSection = settingsSection.contains(e.target);
      const isButton = settingsButton.contains(e.target);

      if (!isInsideSection && !isButton) {
        settingsSection.classList.add("hidden");
      }
    });
  }
  // Ensure only one event listener is attached
  if (profileButton && profileSection) {
    profileButton.addEventListener("click", function (e) {
      e.stopPropagation(); // prevent document click
      settingsSection.classList.add("hidden");
      logoutSection.classList.add("hidden");
      profileSection.classList.toggle("hidden");
    });

    document.addEventListener("click", function (e) {
      const isInsideSection = profileSection.contains(e.target);
      const isButton = profileButton.contains(e.target);

      if (!isInsideSection && !isButton) {
        profileSection.classList.add("hidden");
      }
    });
    document.addEventListener("click", function (e) {
      if (
        !profileSection.contains(e.target) &&
        !profileButton.contains(e.target)
      ) {
        profileSection.classList.add("hidden");
      }
    });
  }
});

//remove the blurr when it is scrolled
// window.addEventListener("scroll", () => {
//   const isSidebarOpen = !sidebar.classList.contains("-translate-x-full");
//   if (isSidebarOpen && window.innerWidth < 768) {
//     sidebar.classList.add("-translate-x-full");
//     hamburgerIcon.classList.remove("hidden");
//     closeIcon.classList.add("hidden");
//     mainContent.classList.remove("blur-sm");
//   }
// });
