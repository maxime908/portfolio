document.querySelectorAll(".launch-transition").forEach((element) => {
    element.addEventListener("click", () => {
        document.getElementById("transition").style.transform = "translateX(0)";
        document.getElementById("transition").style.transition = "1s";
        setTimeout(() => {
            window.location.href = "project.php";
        }, 1000)
    });
});