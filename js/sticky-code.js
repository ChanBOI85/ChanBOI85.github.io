function copyCode(text) {
    
    if (navigator.clipboard) {
        // copy the code
        navigator.clipboard
            .writeText(text)
            .then(() => {
                code.style.color = "lightgreen"
            })
            .catch(() => {
                code.style.color = "red"
            });
    } else if (document.queryCommandSupported && document.queryCommandSupported("copy")) {
        document.getElementById("note").innerText = "Click anywhere to copy the code";
        
        document.querySelector('body').addEventListener('click', function() {
            var textarea = document.createElement("textarea");
            textarea.textContent = text;
            textarea.style.position = "fixed";  // Prevent scrolling to bottom of page in Microsoft Edge.
            document.body.appendChild(textarea);
            textarea.select();
            try {
                return document.execCommand("copy");  // Security exception may be thrown by some browsers.
            }
            catch (ex) {
                console.warn("Copy to clipboard failed.", ex);
                return prompt("Copy to clipboard: Ctrl+C, Enter", text);
            }
            finally {
                document.body.removeChild(textarea);
            }
        })
    }
}
