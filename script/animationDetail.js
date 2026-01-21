document.addEventListener("DOMContentLoaded", (event) => {
    const header = document.querySelector("header");
    const imageIntro = document.getElementById("image-intro");

    let tl = gsap.timeline();

    tl.fromTo(header, {y: -innerHeight}, {y: 0, duration: 0.5})
    tl.fromTo(imageIntro, {x: -innerWidth}, {x: 0, duration: 0.5})
    tl.fromTo(".perspective-button", {x: -innerWidth}, {x: 0, duration: 0.5})

    gsap.to(".flex-card", {x: 0, duration: 0.5, ease: "none"});

    document.querySelector(".allCapture").addEventListener('mouseover', () => {
        gsap.to(".projectCapture", {x: 0, duration: 1})
    });
});