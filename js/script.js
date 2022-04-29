var code = document.getElementById("code");

// Copy code after 3 seconds
window.onload = setTimeout(() => {
    copyCode(code.textContent)
}, 3000);
