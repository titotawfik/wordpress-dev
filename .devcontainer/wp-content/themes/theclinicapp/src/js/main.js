import Collapse from '../../node_modules/bootstrap/js/dist/collapse';
import Dropdown from '../../node_modules/bootstrap/js/dist/dropdown';
import Offcanvas from '../../node_modules/bootstrap/js/dist/offcanvas';    

//Youtube iframe API and Videos player
// document.addEventListener("DOMContentLoaded", function () {
//   const iframes = document.querySelectorAll("iframe[src*='youtube.com/embed']");
//   //const hostname = window.location.hostname;

//   // Load YouTube Iframe API
//   if (!window.YT) {
//     const tag = document.createElement("script");
//     tag.src = "https://www.youtube.com/iframe_api";
//     document.head.appendChild(tag);
//   }

//   // Store iframe/player pairs
//   const players = [];

//   // Modify iframe URLs and remove width/height
//   iframes.forEach((iframe, index) => {
//     const src = iframe.getAttribute("src") || "";

//     // Remove width/height for responsive design
//     iframe.removeAttribute("width");
//     iframe.removeAttribute("height");

//     // Add/append necessary query parameters
//     const url = new URL(src, window.location.href);
//     url.searchParams.set("enablejsapi", "1");
//     url.searchParams.set("autoplay", "1");
//     url.searchParams.set("loop", "1");
//     url.searchParams.set("rel", "0");
//     url.searchParams.set("playlist", url.pathname.split("/").pop()); // loop requires playlist param
//     url.searchParams.set("controls", "0"); // Hide controls
//     //url.searchParams.set("playsinline", "1"); // Inline playback on iOS
//     url.searchParams.set("origin", window.location.origin); // Set origin for security

//     iframe.setAttribute("src", url.toString());  
//     iframe.setAttribute("allow", "autoplay");

//     // Assign a unique ID if not present
//     if (!iframe.id) {
//       iframe.id = "yt-player-" + index;
//     }
//   });

//   // YouTube Iframe API ready callback
//   window.onYouTubeIframeAPIReady = function () {
//     iframes.forEach((iframe) => {
//       const player = new YT.Player(iframe.id, {
//         events: {
//           onReady: function (event) {
//             event.target.mute();       // Mute for autoplay
//             event.target.playVideo();  // Start playing
//             handleVisibility(player, iframe);
//             window.addEventListener("scroll", () => handleVisibility(player, iframe));
//           }
//         }
//       });
//       players.push(player);
//     });
//   };

//   // Visibility check and play/pause logic
//   function handleVisibility(player, iframe) {
//     const rect = iframe.getBoundingClientRect();
//     const inView = rect.top >= 0 && rect.bottom <= (window.innerHeight || document.documentElement.clientHeight);
//     //console.log(`Checking visibility for player ${iframe.id}:`, rect, 'In view:', inView);
//     //console.log(`Player ${iframe.id} in view: ${inView}`);

//     if (inView) {
//       player.playVideo();
//     } else {
//       player.pauseVideo();
//     }
//   }
// });

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
