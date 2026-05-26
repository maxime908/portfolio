gsap.registerPlugin(ScrollSmoother, ScrollTrigger, ScrollToPlugin) 

ScrollSmoother.create({
    smooth: 2,
    effects: true
});



document.addEventListener("DOMContentLoaded", () => {
    const name = document.getElementById("name");
    const email = document.getElementById("email");
    const message = document.getElementById("message");

    const mainButton = document.querySelectorAll("#button-header .main-button");

    function animateHexagone (timeline, hexaPath) {
        timeline = gsap.timeline({ repeat: -1, yoyo: true });

        hexaPath.forEach((char) => {
            timeline.to(char, {
                opacity: parseFloat(getComputedStyle(char).opacity) + 0.10,
                duration: 0.5
            })
        });
    }

    let interval = null;

    let tl2 = null;
    let tl3 = null;

    const alphabet = 
    [
    'a','b','c','d','e','f','g','h','i','j','k','l','m',
    'n','o','p','q','r','s','t','u','v','w','x','y','z',

    '0','1','2','3','4','5','6','7','8','9',

    '!','@','#','$','%','^','&','*','(',')',
    '-','_','=','+',
    '[',']','{','}',
    ';',':',
    "'",'"',
    ',', '.', '/',
    '<','>','?','|',
    '`','~',
    ]

    let tl = gsap.timeline();

    tl.fromTo("#citation p", { x: -innerWidth }, { x: 0, duration: 0.5, ease: "none", delay: 0.5 })

    for (let i = mainButton.length; i >= 0; i--) {
        tl.fromTo(mainButton[i], { x: -innerWidth}, { x: 0, duration: 0.5, ease: "none" })
    }

    const hexa2 = document.querySelectorAll("#hexa-header .button-intro");

    for (let i = hexa2.length - 1; i >= 0; i--) {
        tl.fromTo(hexa2[i], {
            x: -window.innerWidth,
        }, {
            duration: 0.5,
            x: 0,
            ease: "none",
        });
    }

    document.querySelector("#citation span").addEventListener("mouseenter", () => {
        interval = setInterval(() => {
            document.querySelector("#citation span").innerHTML = "";
            for (let i = 0; i < 4; i++) {
                document.querySelector("#citation span").innerHTML += alphabet[Math.floor(Math.random() * alphabet.length)];
            }
        }, 80)  
    })

    document.querySelector("#citation span").addEventListener("mouseleave", () => {
        clearInterval(interval);

        document.querySelector("#citation span").innerHTML = "code";
    })

    const hexaPath1 = document.querySelectorAll(".anime-hexa1 path");
    const hexaPath2 = document.querySelectorAll(".anime-hexa2 path");

    animateHexagone(tl2, hexaPath1);
    animateHexagone(tl3, hexaPath2);

    function sendEmail () {
        let templateParams = {
            title: name.value,
            name: "Nom :" + name.value,
            email: email.value,
            message: "Message : " + message.value
        };

        emailjs.send('service_0vhez9b', 'template_2d3gdv9', templateParams).then(
            (response) => {
                console.log('SUCCESS!', response.status, response.text);
                window.location.reload();
            },
            (error) => {
                console.log('FAILED...', error);
            },
        );
    }

    document.querySelector("form").addEventListener("submit", (e) => {
        e.preventDefault();

        sendEmail();
    });

    let ancienneElement = null;

    document.querySelectorAll(".view").forEach((element) => {
        element.style.opacity = "0";
    })

    document.querySelectorAll(".view").forEach((element) => {
        let io = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    gsap.to(element, { opacity: 1, duration: 1 })
                } else {
                    gsap.to(element, { opacity: 0, duration: 1 })
                }
            })
        })

        io.observe(element)
    })
});

document.querySelectorAll(".redirection a").forEach((element) => {
    element.addEventListener("click", (e) => {
        e.preventDefault();

        const target = element.getAttribute("href");

        const split = target.split("#");

        if (split[1]) {
            gsap.to(window, { scrollTo: { y: "#" + split[1], offsetY: 80 } });
        } else if (split[0]) {
            gsap.to(window, { scrollTo: { y: "#" + split[0], offsetY: 80 } });
        }
    })
})