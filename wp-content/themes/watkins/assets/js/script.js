

const menuToggle = document.getElementById("menu-toggle");
const menu = document.querySelector(".menu");
const navContainer = document.querySelector(".nav-container");
const menuLayer = document.querySelector(".menu-layer");
const hasSubMenu = document.querySelectorAll(".has-submenu > a");
const subMenuInner = document.querySelectorAll(".submenu");
const menuWrapper = document.querySelector(".menu-wrapper");
const menuLinks = document.querySelectorAll(".menu a");
const menuItem = document.querySelectorAll(".menu-item"); // Select all links in the menu
const menuItemLink = document.querySelectorAll(".menu-item a");

const breakpoints = {
  desktopLarge: window.matchMedia("(min-width: 768px)"),

  phone: window.matchMedia("(max-width: 767px)"),
};

// Function to apply animations based on screen size
const applyAnimations = () => {
  if (breakpoints.desktopLarge.matches) {
    // Customize animations for large desktop screens
    return {
      menu: { duration: 0.7, left: "0%", ease: "power2.inOut" },
      backgroundPosition: {
        duration: 1.1,
        backgroundPositionX: "-50px",
        ease: "power2.inOut",
      },
      navContainer: {
        duration: 0.1,
        backgroundColor: "rgba(255, 255, 255, 0)",
        ease: "power2.inOut",
      },
      menuLayer: { duration: 0.9, left: "70%", ease: "power2.inOut" },
      menuWrapper: {
        duration: 1.2,
        x: "-50px",
        opacity: 0,
        stagger: 0.2,
        ease: "power2.inOut",
      },
      greenMoveOnClick: { duration: 0.9, left: "0%", ease: "power2.inOut" },
      menuMoveOnClick: { duration: 0.9, x: "-20%", ease: "power2.inOut" },
    };
  } else if (breakpoints.phone.matches) {
    // Customize animations for phone screens
    return {
      menu: { duration: 0.7, left: "0%", ease: "power2.inOut" },
      backgroundPosition: {
        duration: 1.1,
        backgroundPositionX: "-50px",
        ease: "power2.inOut",
      },
      navContainer: {
        duration: 0.1,
        backgroundColor: "rgba(255, 255, 255, 0)",
        ease: "power2.inOut",
      },
      menuLayer: { duration: 0.7, left: "0%", ease: "power2.inOut" },
      menuWrapper: {
        duration: 1.2,
        x: "-50px",
        opacity: 0,
        stagger: 0.2,
        ease: "power2.inOut",
      },
      greenMoveOnClick: { duration: 0.9, left: "0%", ease: "power2.inOut" },
      menuMoveOnClick: { duration: 0.9, x: "0%", ease: "power2.inOut" },
    };
  }
};

// Toggle the main menu
const toggleMenu = () => {
  const animations = applyAnimations();

  document.querySelectorAll(".submenu").forEach((sub) => {
    sub.style.display = "none";
  });

  if (menu.style.left === "0%") {
    gsap.to(menu, { duration: 0.7, left: "100%", ease: "power2.inOut" });
    gsap.to(menu, {
      duration: 1.1,
      backgroundPositionX: "0px",
      ease: "inOut.Out",
    });
    gsap.to(navContainer, {
      duration: 0.9,
      backgroundColor: "rgba(255, 255, 255, 1)",
      ease: "power2.inOut",
    });
    gsap.to(menuLayer, { duration: 0.9, left: "100%", ease: "power2.inOut" });
    gsap.to(menuWrapper, { duration: 0.9, x: "0%", ease: "power2.inOut" });
  } else {
    gsap.to(menu, animations.menu);
    gsap.to(menu, animations.backgroundPosition);
    gsap.to(navContainer, animations.navContainer);
    gsap.to(menuLayer, animations.menuLayer);
    gsap.from(menuWrapper, animations.menuWrapper);
  }

  menuToggle.classList.toggle("change");
};

// Handle sub-menu clicks
const handleSubMenuClick = (e, submenulink) => {
  e.stopPropagation(); // Prevents the main menu from closing
  const animations = applyAnimations();

  // Toggle sub-menu visibility
  if (submenulink.style.display === "block") {
    submenulink.style.display = "none";
  } else {
    document.querySelectorAll(".submenu").forEach((sub) => {
      sub.style.display = "none";
    });
    submenulink.style.display = "block";
    gsap.fromTo(
      submenulink,
      { opacity: 0 },
      { duration: 0.9, opacity: 1, ease: "power2.inOut" }
    );
  }

  gsap.to(menuLayer, animations.greenMoveOnClick);
  gsap.to(menuWrapper, animations.menuMoveOnClick);
};

// Add event listeners for menu toggle and sub-menu clicks
const addEventListeners = () => {
  menuToggle.addEventListener("click", toggleMenu);

  hasSubMenu.forEach((subMenu) => {
    subMenu.addEventListener("click", function (e) {
      e.preventDefault(); // Prevent default link behavior for sub-menu links
      const submenulink = this.nextElementSibling;
      handleSubMenuClick(e, submenulink);
    });
  });
};

// Handle menu font styles on hover and active

menuItem.forEach((item) => {
  const link = item.querySelector("a");

  // Hover logic
  link.addEventListener("mouseenter", function () {
    this.style.fontWeight = "bold";
  });

  link.addEventListener("mouseleave", function () {
    if (!item.classList.contains("active")) {
      this.style.fontWeight = "";
    }
  });

  // Click logic
  link.addEventListener("click", function (e) {
    e.preventDefault();

    // Remove 'active' class from all menu items
    menuItem.forEach((i) => {
      i.classList.remove("active");
      i.querySelector("a").style.fontWeight = "";
    });

    // Add 'active' class to the clicked item
    item.classList.add("active");
    // this.style.fontWeight = 'bold';
    document.querySelectorAll(".submenu").forEach((sub) => {
      sub.style.display = "none";
    });
  });
});

// Function to handle screen size changes
const handleScreenSizeChange = () => {
  const animations = applyAnimations();
  console.log("Screen size changed, applying animations:", animations);
};

// Add event listeners for screen size changes
Object.values(breakpoints).forEach((bp) => {
  bp.addEventListener("change", handleScreenSizeChange);
});

// Initial setup
document.addEventListener("DOMContentLoaded", () => {
  addEventListeners();
  handleScreenSizeChange(); // Initial check
});

// --------------Navigation end------------------

document.addEventListener("DOMContentLoaded", function () {
  gsap.to(".home-nav", { opacity: 1, duration: 2, ease: "power2.inOut" });
  gsap.to(".pl", { opacity: 1, duration: 2, ease: "power2.inOut", delay: 2 });
  gsap.to("#heart", {
    top: "0%",
    left: "0%",
    transform: "translate(0, 0)",
    height: "85%",
    duration: 0.9,
    opacity: 1,
    ease: "power2.inOut",
    delay: 4,
  });
  gsap.to("#heart", { opacity: 0, ease: "power2.inOut", delay: 4.9 });

  gsap.to(".pl", {
    opacity: 0,
    duration: 0.9,
    pointerEvents: "none",
    ease: "power2.inOut",
    delay: 5,
  });
  gsap.to(".home-body", {
    opacity: 1,
    duration: 1.5,
    ease: "power2.inOut",
    delay: 5,
  });
  gsap.to(".home-footer", {
    opacity: 1,
    duration: 1.5,
    ease: "power2.inOut",
    delay: 5,
  });

  gsap.registerPlugin(ScrollTrigger);

  gsap.utils.toArray(".fade-in").forEach((element) => {
    gsap.fromTo(
      element,
      { opacity: 0, y: "50px" },
      {
        opacity: 1,
        duration: 1,
        y: "0",

        scrollTrigger: {
          trigger: element,
          start: "top 80%",
          end: "top 60%",
          toggleActions: "play none none none",
        },
      }
    );
  });
});



$(document).ready(function () {
  $(".owl-carousel").owlCarousel({
    margin: 10,
    loop: true,
    autoWidth: true,
    items: 4,
    nav: true,
    navText: ["<", ">"],
  });
});

$(document).ready(function ($) {
  $(".owl-carousel").owlCarousel({
    loop: false,
    margin: 10,
    dots: false,
    nav: false,
    items: 3,
  });
  var owl = $(".owl-carousel");
  owl.owlCarousel();
  $(".next-btn").click(function () {
    owl.trigger("next.owl.carousel");
  });
  $(".prev-btn").click(function () {
    owl.trigger("prev.owl.carousel");
  });
  $(".prev-btn").addClass("disabled");
  $(owl).on("translated.owl.carousel", function (event) {
    if ($(".owl-prev").hasClass("disabled")) {
      $(".prev-btn").addClass("disabled");
    } else {
      $(".prev-btn").removeClass("disabled");
    }
    if ($(".owl-next").hasClass("disabled")) {
      $(".next-btn").addClass("disabled");
    } else {
      $(".next-btn").removeClass("disabled");
    }
  });
});




document.addEventListener("DOMContentLoaded", function () {
  const accordionItems = document.querySelectorAll(".accordion-item");

  accordionItems.forEach((item) => {
    const header = item.querySelector(".accordion-header");
    const content = item.querySelector(".accordion-content");
    const toggle = item.querySelector(".accordion-toggle");

    gsap.set(content, { height: "auto" }); // Ensure GSAP knows the natural height

    header.addEventListener("click", () => {
      // Close all other open accordions
      accordionItems.forEach((otherItem) => {
        const otherContent = otherItem.querySelector(".accordion-content");
        const otherToggle = otherItem.querySelector(".accordion-toggle");
        if (otherItem !== item && otherContent.classList.contains("open")) {
          gsap.to(otherContent, {
            height: 0,
            duration: 1,
            ease: "power2.inOut",
            onComplete: () => {
              otherContent.classList.remove("open");
            }
          });
          otherToggle.classList.remove("rotate");
        }
      });

      // Toggle the current accordion
      if (content.classList.contains("open")) {
        gsap.to(content, {
          height: 0,
          duration: 1,
          ease: "power2.inOut",
          onComplete: () => {
            content.classList.remove("open");
          }
        });
      } else {
        content.classList.add("open");
        gsap.fromTo(content, {
          height: 0
        }, {
          height: content.scrollHeight,
          duration: 1,
          ease: "power2.inOut"
        });
      }
      toggle.classList.toggle("rotate");
    });
  });
});







// ----------------- team new -----------------------







document.addEventListener('DOMContentLoaded', function() {
  const filterButtons = document.querySelectorAll('.filter-btn');
  const members = Array.from(document.querySelectorAll('.member'));
  const teamCarousel = document.querySelector('.team-carousel.team');
  const nextBtn = document.querySelector('.next-btn');
  const prevBtn = document.querySelector('.prev-btn');
  let currentMember = 0;

  // Add hidden class initially
  teamCarousel.classList.add('hidden');

  function setPosition(filteredMembers) {
      filteredMembers.forEach((s, i) => {
          gsap.set(s, { x: `${100 * i}%` });
      });

      console.log('Set position for members:', filteredMembers);
  }

  function filterMembers(filterValue) {
      console.log('Filter value:', filterValue);

      const visibleMembers = members.filter(member => {
          return filterValue === 'all' || member.getAttribute('data-category') === filterValue;
      });

      if (window.innerWidth <= 767) {
          console.log('Mobile condition met. Calling setPosition.');
          // On mobile, just set the positions without animation
          members.forEach(member => member.style.display = 'none');
          visibleMembers.forEach(member => member.style.display = 'block');
          setPosition(visibleMembers);
          currentMember = 0; // Reset to the first member
      } else {
          console.log('Mobile condition not met. Adding animations.');
          // On desktop, add fade-out and fade-in animations
          gsap.to(members, {
              opacity: 0,
              duration: 0.5,
              onComplete: () => {
                  // After fade-out, update display properties
                  members.forEach(member => member.style.display = 'none');
                  visibleMembers.forEach(member => member.style.display = 'block');

                  // Force a reflow by reading the offsetHeight of each member
                  members.forEach(member => member.offsetHeight);

                  // Fade in the visible members
                  gsap.to(visibleMembers, {
                      opacity: 1,
                      duration: 0.5
                  });
              }
          });
      }

      // Log the filtered visible members
      console.log(`Visible members at this point:`, visibleMembers);

      // Log the current window inner width
      console.log('Current window.innerWidth:', window.innerWidth);
  }

  function initializeMobileCarousel() {
      const visibleMembers = members.filter(member => member.style.display === 'block');
      setPosition(visibleMembers);
  }

  filterButtons.forEach(button => {
      button.addEventListener('click', function() {
          const filterValue = this.getAttribute('data-filter');

          filterButtons.forEach(btn => btn.classList.remove('active'));
          this.classList.add('active');

          console.log('Filter button clicked:', filterValue);
          filterMembers(filterValue);
      });
  });

  nextBtn.addEventListener('click', function() {
      const visibleMembers = members.filter(member => member.style.display === 'block');
      if (currentMember < visibleMembers.length - 1) {
          currentMember++;
          visibleMembers.forEach((s, i) => {
              gsap.to(s, { x: `${100 * (i - currentMember)}%`, duration: 0.1, ease: 'power2.inOut' });
          });
      }
  });

  prevBtn.addEventListener('click', function() {
      const visibleMembers = members.filter(member => member.style.display === 'block');
      if (currentMember > 0) {
          currentMember--;
          visibleMembers.forEach((s, i) => {
              gsap.to(s, { x: `${100 * (i - currentMember)}%`, duration: 0.1, ease: 'power2.inOut' });
          });
      }
  });

  // Initialize the positions on load by simulating a click on the "All" filter button
  const allFilterButton = document.querySelector('.filter-btn[data-filter="all"]');
  if (allFilterButton) {
      allFilterButton.click();
  }

  // Remove hidden class after initial positioning
  setTimeout(() => {
      teamCarousel.classList.remove('hidden');
  }, 1000);

  window.addEventListener('resize', () => {
      if (window.innerWidth <= 767) {
          initializeMobileCarousel();
      } else {
          // Reset transformations for desktop view
          members.forEach((s) => {
              gsap.set(s, { clearProps: 'all' });
          });
      }
  });
});



