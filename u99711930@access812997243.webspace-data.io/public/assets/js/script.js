$(document).ready(function(){
  const navBar = document.querySelector(".nav");
  const navButton = document.querySelector(".nav-toggle");

  // Hamburger Navigation
  function toggleNavigation() {
    if (navBar.classList.contains("is-open")) {
      this.setAttribute("aria-expanded", false);
      navBar.classList.remove("is-open");
    } else {
      navBar.classList.add("is-open");
      this.setAttribute("aria-expanded", true);
    }
  }

  // Event Listeners
  navButton.addEventListener("click", toggleNavigation);

  window.onscroll = function() {scrollFunction()};

  function scrollFunction() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
      document.getElementById("header").style.height = "100px";
    } else {
      document.getElementById("header").style.height = "300PX";
    }
  }


});