document.addEventListener("DOMContentLoaded", () => {
    const mainContent = document.getElementById("main-content");
    const navabar = document.querySelector("header");

    const name = document.getElementById("name");
    const email = document.getElementById("email");
    const message = document.getElementById("message");

    const hamburger = document.querySelector(".hamburger-menu");
    const headerMenu = document.querySelector(".header-menu");

    if (window.matchMedia("(max-width: 800px)").matches) {
        headerMenu.style.display = "none";
    }

    let interval = null;
    let tl2  = null;

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


    console.log(alphabet.length)

    window.addEventListener("scroll", () => {
        if (window.scrollY > mainContent.offsetHeight - 76) {
            navabar.classList.add("appear");
        } else {
            navabar.classList.remove("appear");
        }
    });

    const hexaProject = document.querySelectorAll(".project-image-wrapper");

    hexaProject.forEach((element) => {
        element.querySelector("img").addEventListener("mouseenter", () => {
            element.querySelector(".hexa-img").classList.add("hexaAdd");
        })
    })

    hexaProject.forEach((element) => {
        element.addEventListener("mouseleave", () => {
            element.querySelector(".hexa-img").classList.remove("hexaAdd");
        })
    })

    let tl = gsap.timeline();

    tl.fromTo("#citation p", { x: "-200%" }, { x: 0, duration: 0.5, ease: "none" })

    const hexa2 = document.querySelectorAll("#hexa-header .hexagone");

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

    tl2 = gsap.timeline({ repeat: -1, yoyo: true });

    hexaPath1.forEach((char) => {
        tl2.to(char, {
            opacity: parseFloat(getComputedStyle(char).opacity) + 0.15,
            duration: 0.5
        })
    });

    tl3 = gsap.timeline({ repeat: -1, yoyo: true });

    hexaPath2.forEach((char) => {
        tl3.to(char, {
            opacity: parseFloat(getComputedStyle(char).opacity) + 0.15,
            duration: 0.5
        })
    });

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

    hamburger.addEventListener("click", () => {
        if (headerMenu.style.display === "none") {
            headerMenu.style.display = "flex";
        } else {
            headerMenu.style.display = "none";
        }
    })
});