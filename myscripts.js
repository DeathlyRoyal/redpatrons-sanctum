let animationSkip = false;

const span = document.getElementsByClassName("close")[0];
var modal = document.getElementById("myModal");
var img = document.getElementById("myImg");
let mainText = document.querySelector("#mainText");
let horizonText = document.querySelector("#horizonBody");
const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))
const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
const lines = [
  document.querySelector("#text1"),
  document.querySelector("#text2"),
  document.querySelector("#text3"),
  document.querySelector("#text4"),
  document.querySelector("#text5"),
  document.querySelector("#text6"),
  document.querySelector("#text7"),
  document.querySelector("#text8"),
  document.querySelector("#text9"),
  document.querySelector("#text10"),
  document.querySelector("#text11"),
];

// Show/Hide Horizon and Main
function showMinecraft() {
  if (!mainText.classList.contains("fade-transition")) {
    mainText.classList.add("fade-transition");

    horizonText.classList.remove("fade-transition");
  } else {
    mainText.classList.remove("fade-transition");

    horizonText.classList.add("fade-transition");
  }
}
document.getElementById("closeHorizon").onclick = function () {
  mainText.classList.remove("fade-transition");

  horizonText.classList.add("fade-transition");
};

// Modals

img.onclick = function () {
  modal.style.display = "block";
}
span.onclick = function () {
  modal.style.display = "none";
}


// Carousel for Horizon pictures.
const myCarouselElement = document.querySelector('#carouselHorizon')

const carousel = new bootstrap.Carousel(myCarouselElement, {
  touch: true
})

// Terminal Animation
function startTerminal(timeout) {
  setTimeout(
    function () {
      document.getElementById('terminal').style.display = 'none';
    }, timeout);
}

// Print text [Made by Anton]
function slowPrint(text, time, startIndex = 0, line, timeout) {
  setTimeout(() => {
    if (animationSkip) {
      return;
    }
    let index = startIndex;
    const interval = setInterval(() => {
      if (index < text.length) {
        const substring = text.substring(0, index + 1);
        lines[line].innerText = substring;
        index++;
      } else {
        clearInterval(interval);
      }
    }, time)
  }, timeout);
}

// Save Session
function init() {
  if (sessionStorage.getItem("didPlay") != null) {
    startTerminal(0);
    animatedTextStart(300);
    animationSkip = true
  } else {
    typeTerminal();
    startTerminal(17000);
    animatedTextStart(17300);
    sessionStorage.setItem("didPlay", "1")
  }
}

// animated text
function animatedTextStart(time) {
  setTimeout(() => {
    const animatedText = document.querySelector(".animatedText");
    animatedText.classList.remove("fade-transition");
    animatedText.classList.add("animated-text");
  }, time)
}

// type "terminal"
function typeTerminal() {
  for (let i; i <= 12; i++) {
    console.log(i)
  };
  slowPrint('Accessing core drive...', 400, 19, 0, 0);
  slowPrint('Initializing subsystems [ REDS SANCTUM ]', 150, 22, 1, 1900);
  slowPrint('......', 250, 0, 2, 5000);
  slowPrint('[ONLINE]', 10, 0, 3, 7500);
  slowPrint('Mounting encrypted vaults...', 50, 0, 4, 8000);
  slowPrint('███▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒', 0, 0, 5, 9700);
  slowPrint('Running cold-start sequence...', 500, 26, 6, 10000);
  slowPrint('...3', 40, 0, 7, 12000);
  slowPrint('..2', 40, 0, 8, 13000);
  slowPrint('.1', 40, 0, 9, 14000);
  slowPrint('[Program Active]', 100, 0, 10, 15000)
}
function scrollToTop() {
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  });
}
