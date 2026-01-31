const body = document.querySelector("body");

body.classList.remove("overflow-hidden")

if (urlParams.size === 0) { 
    body.classList.add("overflow-hidden")

    let animationProject = gsap.timeline({onComplete: overflowAuto})

    animationProject.fromTo(".alert", {x: -innerWidth}, {x: 0, duration: 1, ease: "power1.out"});

    if (document.querySelector(".responsive")) {
        animationProject.fromTo(".responsive", {y: innerHeight}, {y: 0, duration: 0.5, ease: "power1.out"});
    }

    if (document.getElementById("project-content")) {
        animationProject.fromTo("#project-content", {y: innerHeight}, {y: 0, duration: 0.5, ease: "power1.out"});
    }

    function overflowAuto() {
        body.classList.remove("overflow-hidden")
    }
} else if (update || addProject) {
    body.classList.remove("overflow-hidden");
    document.querySelector("header").style.transform = "translateY(0)";
}