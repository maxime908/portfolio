window.addEventListener('load', () => {
    if (!selected) {
        gsap.fromTo("#project-body #transition", {x: 0}, {x: -innerWidth, duration: 1});

        document.querySelector("header").style.transform = "translateY(-100%)";

        let animationProject = gsap.timeline({onComplete: overflowAuto})

        animationProject.to("header", {y: 0, duration: 0.25, ease: "power1.out"});

        animationProject.fromTo("#filter", {x: -window.innerWidth}, {x: 0, duration: 0.25, ease: "power1.out"});

        if (document.getElementById("project-content")) {
            animationProject.fromTo("#project-content", {y: window.innerHeight}, {y: 0, duration: 0.25, ease: "power1.out"});
        }

        function overflowAuto() {
            document.querySelector(".overflow-hidden").classList.remove("overflow-hidden")
        }
    } else {
        document.querySelector(".overflow-hidden").classList.remove("overflow-hidden")
        document.querySelector("#project-body #transition").style.transform = "translateX(-100%)";
    }
})