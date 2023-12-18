gsap.registerPlugin(ScrollTrigger);

const image = document.querySelector(".scroll-image");

gsap.to(image, {
  x: "0%",
  scrollTrigger: {
    trigger: ".producedd",
    start: "top center", // Adjust this to control when the animation starts
    end: "top top", // Adjust this to control when the animation ends
    scrub: true, // Smoothly updates the animation as you scroll
    once: true,
  },
});

const bulletContainer = document.querySelector(".bullet-container");
const bulletEffect = document.querySelector(".bullet-effect");

const bulletEffect2 = document.querySelector(".bullet-effect2");

const bulletItems = bulletEffect.querySelectorAll("li");
const bulletContainerWidth = bulletContainer.offsetWidth;

const bulletItems2 = bulletEffect2.querySelectorAll("li");
let totalWidth = 0;
let totalWidth2 = 0;

bulletItems.forEach((item) => {
  totalWidth += item.offsetWidth + parseInt(getComputedStyle(item).marginRight);
});

bulletItems2.forEach((item) => {
  totalWidth2 +=
    item.offsetWidth + parseInt(getComputedStyle(item).marginRight);
});

if (totalWidth > bulletContainerWidth) {
  const cloneItems = bulletEffect.innerHTML;
  bulletEffect.innerHTML += cloneItems;
}
if (totalWidth2 > bulletContainerWidth) {
  const cloneItems = bulletEffect2.innerHTML;
  bulletEffect2.innerHTML += cloneItems;
}

gsap.to(".bullet-effect", {
  x: `-=${totalWidth}px`,
  duration: 10,
  ease: "linear",
  repeat: -1,
});

gsap.to(".bullet-effect2", {
  x: `+=${totalWidth2}px`,
  duration: 10,
  ease: "linear",
  repeat: -1,
});

const controller = new ScrollMagic.Controller();
function tomorrow() {
  const sections = document.querySelectorAll(".aboutsection");
  sections.forEach((section) => {
    new ScrollMagic.Scene({
      triggerElement: section,
      triggerHook: 1, // Adjust this value to control when the animation starts
      reverse: false,
    })
      .on("enter", () => {
        TweenMax.to(section, 0, { opacity: 1, x: 0, ease: "easeOut" });
      })
      .addTo(controller);
  });
}

tomorrow();

function today() {
  const sections = document.querySelectorAll(".today");
  sections.forEach((section) => {
    new ScrollMagic.Scene({
      triggerElement: section,
      triggerHook: 1, // Adjust this value to control when the animation starts
      reverse: false,
    })
      .on("enter", () => {
        TweenMax.to(section, 0, { opacity: 1, x: 0, ease: "easeOut" });
      })
      .addTo(controller);
  });
}

today();
function pic() {
  const sections = document.querySelectorAll(".pic-move");
  sections.forEach((section) => {
    new ScrollMagic.Scene({
      triggerElement: section,
      triggerHook: 1, // Adjust this value to control when the animation starts
      reverse: false,
    })
      .on("enter", () => {
        TweenMax.to(section, 0, { opacity: 1, y: 0, ease: "easeOut" });
      })
      .addTo(controller);
  });
}

pic();

function aboutloadmission() {
  const sections = document.querySelectorAll(".sea-mission");
  sections.forEach((section) => {
    new ScrollMagic.Scene({
      triggerElement: ".sea-mission",
      triggerHook: 1.5, // Adjust this value to control when the animation starts
      reverse: false,
    })
      .on("enter", () => {
        // TweenMax.to(section, 0, { opacity: 1, y: 0, ease: "easeOut" });
        TweenMax.to(".sea-mission", 0.7, {
          opacity: 1,
          rotate: 0,
          ease: "easeOut",
        });
        TweenMax.to(".sky-img", 2, {
          opacity: 1,
          y: 0,
          ease: "easeOut",
          delay: 1.5,
        });
        TweenMax.to(".mission", 2, {
          opacity: 1,
          x: -50,
          ease: "easeOut",
          delay: 1.5,
        });
      })
      .addTo(controller);
  });
}

aboutloadmission();
function aboutloadvission() {
  const sections = document.querySelectorAll(".sea-vission");
  sections.forEach((section) => {
    new ScrollMagic.Scene({
      triggerElement: ".sea-vission",
      triggerHook: 1.5, // Adjust this value to control when the animation starts
      reverse: false,
    })
      .on("enter", () => {
        // TweenMax.to(section, 0, { opacity: 1, y: 0, ease: "easeOut" });
        TweenMax.to(".sea-vission", 0.7, {
          opacity: 1,
          rotate: 0,
          ease: "easeOut",
        });
        TweenMax.to(".sky-img-decide", 2, {
          opacity: 1,
          y: 0,
          ease: "easeOut",
          delay: 1.5,
        });
        TweenMax.to(".vision", 2, {
          opacity: 1,
          x: 50,
          ease: "easeOut",
          delay: 1.5,
        });
      })
      .addTo(controller);
  });
}

aboutloadvission();
