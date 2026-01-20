let urlParams = new URLSearchParams(window.location.search);
const id = urlParams.get("id");
const updateProjectDetail = urlParams.get("updateProjectDetail");

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

if (updateProjectDetail && id) {
    addFile(".addFileCapture1_" + id, ".addCapture1Svg_" + id, ".capture1_" + id);
    addFile(".addFileCapture2_" + id, ".addCapture2Svg_" + id, ".capture2_" + id);
}