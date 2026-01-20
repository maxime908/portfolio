document.addEventListener("DOMContentLoaded", (event) => {
    const header = document.querySelector("header");
    const imageIntro = document.getElementById("image-intro");

    const update1 = document.getElementById("update1");
    const update2 = document.getElementById("update2");

    let tl = gsap.timeline();

    tl.fromTo(header, {y: -innerHeight}, {y: 0, duration: 0.5})
    tl.fromTo(imageIntro, {x: -innerWidth}, {x: 0, duration: 0.5})
    tl.fromTo(".row-button", {x: -innerWidth}, {x: 0, duration: 0.5})

    gsap.to(".grid-card", {x: 0, duration: 0.5, ease: "none"});

    document.querySelector(".allCapture").addEventListener('mouseover', () => {
        gsap.to(update1, {x: 0, duration: 1})
        gsap.to(update2, {x: 0, duration: 1})
    });

    document.querySelectorAll(".grid-card div").forEach((element) => {
        element.addEventListener("mouseenter", () => {
            element.classList.add("animationCard");
        })

        element.addEventListener("mouseleave", () => {
            element.classList.remove("animationCard");
        })
    });
});