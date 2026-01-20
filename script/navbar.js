document.addEventListener("DOMContentLoaded", () => {
    const mainContent = document.getElementById("main-content");
    const navbar = document.querySelector("header");

    window.addEventListener("scroll", () => {
        if (window.scrollY > mainContent.offsetHeight - 76) {
            navbar.classList.add("appear");
        } else {
            navbar.classList.remove("appear");
        }
    });
});