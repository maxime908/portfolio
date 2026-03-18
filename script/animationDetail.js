gsap.registerPlugin(ScrollSmoother, ScrollTrigger) 

ScrollSmoother.create({
    smooth: 2,
    effects: true
});

document.addEventListener("DOMContentLoaded", (event) => {
    const header = document.querySelector("header");
    const imageIntro = document.getElementById("image-intro");

    let tl = gsap.timeline();

    tl.fromTo(header, {y: -innerHeight}, {y: 0, duration: 0.5})
    tl.fromTo(imageIntro, {x: -innerWidth}, {x: 0, duration: 0.5})
    tl.fromTo(".perspective-button", {x: -innerWidth}, {x: 0, duration: 0.5})

    gsap.fromTo(".flex-card", {x: -innerWidth}, {x: 0, duration: 1, ease: "power1.out"});

    let io = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                gsap.to(".projectCapture", {
                    x: 0,
                    duration: 1
                })
            }
        })
    })

    io.observe(document.querySelector('.allCapture'));
});