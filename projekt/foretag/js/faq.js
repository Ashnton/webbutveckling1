const toggleButtons = document.getElementsByClassName('btn-toggle');
for (let i = 0; i < toggleButtons.length; i++) {
    let toggleButton = toggleButtons[i].id;
    index = splitString(toggleButton);
    toggleButtons[i].addEventListener('click', () => toggleSection(i+1));
    
}

function splitString(str) {
    return (str.split("_").pop());
}

function toggleSection(index) {
    let elementToToggle = document.getElementById("answer" + index);
    let toggleButton = document.getElementById('toggle_' + index);

    if (elementToToggle.getAttribute("data-visible") === "1") {
        elementToToggle.setAttribute("data-visible", "0");
        elementToToggle.style.display = "none";
        toggleButton.style.transform = "rotate(90deg)";
        
    } else if (elementToToggle.getAttribute("data-visible") === "0") {
        elementToToggle.setAttribute("data-visible", "1");
        elementToToggle.style.display = "block";
        toggleButton.style.transform = "rotate(0deg)";

    }
}