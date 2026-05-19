gsap.registerPlugin(ScrollSmoother, ScrollTrigger) 

ScrollSmoother.create({
    smooth: 2,
    effects: true
});

// document.addEventListener("load", () => {
const header = document.querySelector("header");
const imageIntro = document.getElementById("image-intro");

let tl = gsap.timeline();

tl.fromTo(header, {y: -innerHeight}, {y: 0, duration: 0.5})
tl.fromTo(imageIntro, {x: -innerWidth}, {x: 0, duration: 0.5})
tl.fromTo(".perspective-button", {x: -innerWidth}, {x: 0, duration: 0.5})

// gsap.fromTo(".flex-card", {x: -innerWidth}, {x: 0, duration: 1, ease: "power1.out"});
// })

let io = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            gsap.to("#update1", {
                x: 0,
                duration: 1
            })
            
            gsap.to("#update2", {
                x: 0,
                duration: 1
            })
        }
    })
})

let io2 = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            gsap.to(".stacks", {
                x: 0,
                duration: 1
            })
        }
    })
})

document.querySelectorAll(".card-group div").forEach((element) => {
    let io3 = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                gsap.to(element, {
                    x: 0,
                    duration: 1,
                    ease: "power2.out",
                })
            }
        })
    })

    io3.observe(element);
})

io2.observe(document.querySelector('.stacks'));
io.observe(document.querySelector('.allCapture'));