const hamburger = document.querySelectorAll(".hamburger-menu");
const headerMenuAll = document.querySelectorAll(".header-menu");
const headerMenu = document.querySelector(".header-menu");

if (window.matchMedia("(max-width: 800px)").matches) {
    headerMenu.style.display = "none";
}

hamburger.forEach((element) => {
    element.addEventListener("click", () => {
        if (headerMenu.style.display === "none") {
            headerMenu.style.display = "flex";
        } else {
            headerMenu.style.display = "none";
        }
    })
})