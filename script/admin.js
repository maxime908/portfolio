const loginPerson = document.getElementById("login-person");
const logout = document.getElementById("logout");
const deleteProject = document.querySelectorAll(".delete");
const deletePanel = document.getElementById("deletePanel");
const hidden = document.querySelectorAll(".hidden");
const blurBackground = document.getElementById("blur");

let urlParams = new URLSearchParams(window.location.search);
const update = urlParams.get('update');
const addProject = urlParams.get('addProject');
const id = urlParams.get('id');

let elementValue = null;
let tab = [];
let tabAdd = [];

let selectedTab = [];

function addFile(fileId, addSvgId, imgId) {
    const fileInput = document.querySelector(fileId);
    document.querySelector(addSvgId).addEventListener("click", () => {
        fileInput.click();
    });

    fileInput.addEventListener("change", (e) => {
        const file = e.target.files[0];

        const url = window.URL.createObjectURL(file);

        document.querySelector(imgId).src = url;
    });
}

function technoBadge(id, languageId, tab) {
    document.querySelectorAll(id).forEach((element) => {
        element.addEventListener("click", () => {
            element.classList.toggle("selected");
        
            const language = document.querySelector(languageId);
            const selected = element.getAttribute('data-value');

            if (element.classList.contains("selected")) {
                tab.push(selected);

                language.value = JSON.stringify(tab);

                console.log(language.value)
            } else if (!element.classList.contains("selected")) {
                const index = tab.indexOf(selected);

                tab.splice(index, 1);

                language.value = JSON.stringify(tab);

                console.log(language.value);
            }

            console.log(document.querySelector(".addInput").value);
        });
    });
}

function verifBlur() {
    if (blurBackground.style.display === "flex") {
        document.querySelector("body").style.overflow = "hidden";
    } else {
        document.querySelector("body").style.overflow = "auto";
    }
}

hidden.forEach((element) => {
    element.style.display = "none";
});

if (document.getElementById("login")) {
    blurBackground.style.display = "flex";
    verifBlur();
} else {
    blurBackground.style.display = "none";
    verifBlur();
}

if (logout) {
    loginPerson.addEventListener('click', () => {
        if (logout.style.display === "none") {
            logout.style.display = "flex";
        } else {
            logout.style.display = "none";
        }
    });
}

document.querySelectorAll(".update").forEach((element) => {
    element.addEventListener("click", () => {
        urlParams.delete("update");
        urlParams.delete("id");

        urlParams.append('update', 'true');
        urlParams.append('id', element.value);

        window.location.search = urlParams;
    });
});

deleteProject.forEach((element) => {
    element.addEventListener("click", (e) => {
        elementValue = element.value;

        console.log(elementValue)

        deletePanel.style.display = "flex";

        blurBackground.style.display = "flex";
        verifBlur();

        setTimeout(() => {
            deletePanel.style.opacity = "1";
            deletePanel.style.transition = "1s";
        }, 1);
    });

    document.getElementById("deleteButton").addEventListener("click", () => {
        const form = deletePanel.querySelector("form");

        form.setAttribute("action", "gestion/submitDelete.php?id="+ elementValue);
    });
});

document.querySelectorAll(".updateCategorie").forEach((element) => {
    element.addEventListener("click", (e) => {
        e.stopPropagation();
    })
})

if (document.querySelector(".saveCategories")) {
    document.querySelector(".saveCategories").addEventListener('click', () => {
        if (urlParams.get('addCategorie')) {
            document.querySelector(".saveCategorieForm").submit();
        } else if (urlParams.get('updateCategorie')) {
            document.querySelector(".updateCategorieForm").submit();
        }
    });
}

// TODO : Transformer en function
if (addProject) {
    addFile(".file_add", ".addSvg", ".img_add");

    technoBadge(".tech-badge-add", ".addInput", tabAdd);
}

if (update) {
    addFile(".file_" + id, ".addSvg_" + id, ".image_" + id);

    document.querySelectorAll(".selectedValue-" + id).forEach((element) => {
        selectedTab.push(element.value)
    });

    document.querySelectorAll(".techno .tech-badge-" + id).forEach((element2) => {
        selectedTab.forEach((element) => {
            if (element2.getAttribute('data-value') === element) {
                element2.classList.toggle("selected");

                const language = document.querySelector(".language_" + id);
                const selected = element2.getAttribute('data-value');

                if (element2.classList.contains("selected")) {
                    tab.push(selected);

                    language.value = JSON.stringify(tab);

                    console.log(language.value)
                }
            }
        });
    });
    
    technoBadge(".tech-badge-" + id, ".language_" + id, tab);
}

document.getElementById("cancel").addEventListener("click", () => {
    deletePanel.style.opacity = "0";
    deletePanel.style.transition = "1s";

    blurBackground.style.display = "none";
    verifBlur();

    setTimeout(() => {
        deletePanel.style.display = "none";
    }, 1000);
});