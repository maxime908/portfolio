const body = document.querySelector("body");

body.classList.remove("overflow-hidden")

if (urlParams.size === 0) { 
    body.classList.add("overflow-hidden")

    let animationProject = gsap.timeline({onComplete: overflowAuto})

    animationProject.fromTo("header", {y: -window.innerHeight}, {y: 0, duration: 0.5, ease: "power1.out"});

    animationProject.fromTo("#admin-panel", {x: -window.innerWidth}, {x: 0, duration: 0.25, ease: "power1.out"});

    animationProject.fromTo("#filter", {x: -window.innerWidth}, {x: 0, duration: 0.25, ease: "power1.out"});

    animationProject.fromTo(".alert", {x: -window.innerWidth}, {x: 0, duration: 0.25, ease: "power1.out"});

    if (document.querySelector(".responsive")) {
        animationProject.fromTo(".responsive", {y: window.innerHeight}, {y: 0, duration: 0.25, ease: "power1.out"});
    }

    if (document.getElementById("project-content")) {
        animationProject.fromTo("#project-content", {y: window.innerHeight}, {y: 0, duration: 0.25, ease: "power1.out"});
    }

    function overflowAuto() {
        body.classList.remove("overflow-hidden")
    }
} else if (update || addProject) {
    body.classList.remove("overflow-hidden");
    document.querySelector("header").style.transform = "translateY(0)";
}