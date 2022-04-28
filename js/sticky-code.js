function copyCode() {
    var code = document.getElementById("code");

    // copy the code
    navigator.clipboard
        .writeText(code.innerText)
        .then(() => {
            code.style.color = "lightgreen"
        })
        .catch(() => {
            code.style.color = "red"
        });

}