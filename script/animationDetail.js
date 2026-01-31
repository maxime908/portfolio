document.addEventListener("DOMContentLoaded", (event) => {
    const header = document.querySelector("header");
    const imageIntro = document.getElementById("image-intro");

    let tl = gsap.timeline();

    tl.fromTo(header, {y: -innerHeight}, {y: 0, duration: 0.5})
    tl.fromTo(imageIntro, {x: -innerWidth}, {x: 0, duration: 0.5})
    tl.fromTo(".perspective-button", {x: -innerWidth}, {x: 0, duration: 0.5})

    gsap.fromTo(".flex-card", {x: -innerWidth}, {x: 0, duration: 1, ease: "power1.out"});

    let io = new IntersectionObserver(
        entries => {
        let ratio = Math.round(parseFloat(entries[0].intersectionRatio.toString().substr(0, 4)) + "e+2"); 
        if (ratio >= 70) {
            gsap.to(".projectCapture", {
                x: 0,
                duration: 1
            })
        }
        },
        {
        threshold: [0, 0.1, 0.2, 0.3, 0.4, 0.5, 0.6, 0.7, 0.8, 0.9, 1.0]
        }
    );

    io.observe(document.querySelector('.allCapture'));
});