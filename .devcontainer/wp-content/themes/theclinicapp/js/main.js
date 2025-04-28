
// animate when content come into view
document.addEventListener("DOMContentLoaded", function () {
    const fadeElements = document.querySelectorAll(".fade-on-scroll");
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add("visible");
          }
        });
      },
      {
        threshold: 0.1,
      }
    );
  
    fadeElements.forEach((element) => {
      observer.observe(element);
    });
  });
  
  // theme-switcher
  const themeToggle = document.getElementById("theme-toggle");
  const body = document.body;
  
  // Check for saved theme preference, otherwise default to light
  const savedTheme = localStorage.getItem("theme");
  
  // Set initial theme (always light by default)
  if (savedTheme === "dark") {
    setTheme("dark");
  } else {
    setTheme("light");
  }
  
  // Toggle theme when button is clicked
  themeToggle.addEventListener("click", () => {
    const currentTheme = body.classList.contains("dark-theme") ? "dark" : "light";
    const newTheme = currentTheme === "dark" ? "light" : "dark";
  
    setTheme(newTheme);
    localStorage.setItem("theme", newTheme);
  });
  
  // Function to set theme and update icon
  function setTheme(theme) {
    if (theme === "dark") {
      body.classList.remove("light-theme");
      body.classList.add("dark-theme");
      themeToggle.innerHTML = '<i class="fa-regular fa-sun fa-xl"></i>';
    } else {
      body.classList.remove("dark-theme");
      body.classList.add("light-theme");
      themeToggle.innerHTML = '<i class="fa-regular fa-moon fa-xl"></i>';
    }
  }
  