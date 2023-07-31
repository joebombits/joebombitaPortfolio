// darkmode start
const htmlEl = document.getElementsByTagName('html')[0];
const projectImg1 = document.getElementsByClassName('ignoredm_1')[0];
const projectImg2 = document.getElementsByClassName('ignoredm_2')[0];
const projectImg3 = document.getElementsByClassName('ignoredm_3')[0];
const projectImg4 = document.getElementsByClassName('ignoredm_4')[0];
const projectImg5 = document.getElementsByClassName('ignoredm_5')[0];
const projectImg6 = document.getElementsByClassName('ignoredm_6')[0];
const projectImg7 = document.getElementsByClassName('ignoredm_7')[0];


document.getElementById("dmswitch").addEventListener("click", toggleTheme);

function toggleTheme() {
    if (htmlEl.getAttribute('data-theme') === 'dark') {
        htmlEl.setAttribute('data-theme', 'light');
        projectImg1.setAttribute('data-theme', 'light');
        projectImg2.setAttribute('data-theme', 'light');
        projectImg3.setAttribute('data-theme', 'light');
        projectImg4.setAttribute('data-theme', 'light');
        projectImg5.setAttribute('data-theme', 'light');
        projectImg6.setAttribute('data-theme', 'light');
        projectImg7.setAttribute('data-theme', 'light');

    } else {
        htmlEl.setAttribute('data-theme', 'dark');
        projectImg1.setAttribute('data-theme', 'dark');
        projectImg2.setAttribute('data-theme', 'dark');
        projectImg3.setAttribute('data-theme', 'dark');
        projectImg4.setAttribute('data-theme', 'dark');
        projectImg5.setAttribute('data-theme', 'dark');
        projectImg6.setAttribute('data-theme', 'dark');
        projectImg7.setAttribute('data-theme', 'dark');
    }
}


// Function to save switch state in localStorage
function saveSwitchState(state) {
  localStorage.setItem('switchState', state);
}

// Function to load switch state from localStorage
function darkModeSwitch() {
  let switchElement = document.getElementById('dmswitch');
  let switchState = localStorage.getItem('switchState');

  // Set the switch state based on the value from localStorage
  if (switchState === 'true') {
    switchElement.checked = true;
    toggleTheme();
  } else {
    switchElement.checked = false;
  }
}

  // Function to handle updating the data-bs-target attribute for mobile start
  function updateDataBsTargetForMobile() {
    const activelink = document.getElementById('main-section');
    activelink.setAttribute('data-bs-target', '#mobilenavlinks');
  }

  // Function to handle updating the data-bs-target attribute for desktop
  function updateDataBsTargetForDesktop() {
    const activelink = document.getElementById('main-section');
    activelink.setAttribute('data-bs-target', '#navlinks');
  }

  // Check the initial screen size and update the attribute accordingly
  if (window.matchMedia("(max-width: 768px)").matches) {
    updateDataBsTargetForMobile();
  } else {
    updateDataBsTargetForDesktop();
  }

  // Listen for window resize events to update the attribute dynamically
  window.addEventListener('resize', function() {
    if (window.matchMedia("(max-width: 768px)").matches) {
      updateDataBsTargetForMobile();
    } else {
      updateDataBsTargetForDesktop();
    }
  });

 // Function to handle updating the data-bs-target attribute for mobile end



// Function to handle switch state change
function handleSwitchChange() {
  let switchElement = document.getElementById('dmswitch');
  let switchState = switchElement.checked;

  // Save the switch state in localStorage
  saveSwitchState(switchState);
}

// Attach the switch change event listener
let switchElement = document.getElementById('dmswitch');
switchElement.addEventListener('change', handleSwitchChange);

// Load switch state on page load
document.addEventListener('DOMContentLoaded', darkModeSwitch);

// darkmode end

// sticky header
window.onscroll = function() {myFunction()};

const header = document.getElementById("header");
const sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}


// menu bar for small devices
document.getElementById("menu_bar").addEventListener("click", menu_bar_function);

function menu_bar_function() {
  const x = document.getElementById("dropdown_menu");
  const y = document.getElementById("x_btn");
  if (x.style.display === "none") {
    x.style.display = "block";
    y.classList = "fa-solid fa-xmark";
    
  } else {
    x.style.display = "none";
    y.classList = "fa-solid fa-bars";
  }
}


// auto close menu bar when click outside the menu
document.addEventListener('click', function(event) {
  const menuBar = document.getElementById('menu_bar');
  const targetElement = event.target;
  const x = document.getElementById("dropdown_menu");
  const y = document.getElementById("x_btn");

  // Check if the clicked element is outside the menu bar
  if (!menuBar.contains(targetElement)) {
    // Close the menu bar
    x.style.display = "none";
    y.classList = "fa-solid fa-bars";
  }
});


// scrolling animation
function scrollAnimation() {
  let scrollAnim = document.querySelectorAll(".scrollAnimation");

  for (let i = 0; i < scrollAnim.length; i++) {
    let windowHeight = window.innerHeight;
    let elementTop = scrollAnim[i].getBoundingClientRect().top;
    let elementVisible = 150;

    if (elementTop < windowHeight - elementVisible) {
      scrollAnim[i].classList.add("active");
    } else {
      scrollAnim[i].classList.remove("active");
    }
  }
}


// scroll animation
window.addEventListener("scroll", scrollAnimation);

// modal
  document.querySelector('form').addEventListener('submit', function(event) {

  // Show the modal
  const messagesendPopup = new bootstrap.Modal(document.getElementById('messagesendPopup'));
  messagesendPopup.show();
});






