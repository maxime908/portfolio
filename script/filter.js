<<<<<<< HEAD
const button = document.querySelectorAll(".buttonCategorie");

urlParams = new URLSearchParams(window.location.search);
const selected = urlParams.get('lang');

let tabSelected = [];

if (selected) {
    tabSelected = JSON.parse(selected);
    console.log(tabSelected);
}

button.forEach((element) => {
    element.classList.add("button-inactive");
    
    if (selected) {
        if (selected.includes([element.value])) {
            element.classList.add("button-active");
            element.classList.remove("button-inactive");
        }
    }

    element.addEventListener("click", (e) => {
        element.classList.toggle("button-active")

        element.classList.toggle("button-inactive")

        if (element.classList.contains("button-active")) {
            tabSelected.push(element.value);

            localStorage.setItem(element.value, "check");

            console.log(localStorage.setItem(element.value, "check"))

            window.location.href = `?lang=${JSON.stringify(tabSelected)}`
        } else if (element.classList.contains("button-inactive")) {
            const index = tabSelected.indexOf(element.value);

            const x = tabSelected.splice(index, 1);

            localStorage.setItem(element.value, "notcheck")

            window.location.href = `?lang=${JSON.stringify(tabSelected)}`
        }

        element.style.transition = "0.5s";
    });
=======
const button = document.querySelectorAll(".buttonCategorie");

urlParams = new URLSearchParams(window.location.search);
const selected = urlParams.get('lang');

let tabSelected = [];

if (selected) {
    tabSelected = JSON.parse(selected);
    console.log(tabSelected);
}

button.forEach((element) => {
    element.classList.add("button-inactive");
    
    if (selected) {
        if (selected.includes([element.value])) {
            element.classList.add("button-active");
            element.classList.remove("button-inactive");
        }
    }

    element.addEventListener("click", (e) => {
        element.classList.toggle("button-active")

        element.classList.toggle("button-inactive")

        if (element.classList.contains("button-active")) {
            tabSelected.push(element.value);

            localStorage.setItem(element.value, "check");

            console.log(localStorage.setItem(element.value, "check"))

            window.location.href = `?lang=${JSON.stringify(tabSelected)}`
        } else if (element.classList.contains("button-inactive")) {
            const index = tabSelected.indexOf(element.value);

            const x = tabSelected.splice(index, 1);

            localStorage.setItem(element.value, "notcheck")

            window.location.href = `?lang=${JSON.stringify(tabSelected)}`
        }

        element.style.transition = "0.5s";
    });
>>>>>>> master
});