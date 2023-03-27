const nav = document.querySelector(".nav");
const navBtn = document.getElementById("myMenuBtn");

navBtn.addEventListener('click', () => {
    if (nav.getAttribute("isMyMenuVisible") === "no") {
        nav.setAttribute("isMyMenuVisible", "yes");
        nav.style.transform = "translateX(0%)";
        navBtn.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="white" class="bi bi-x mobile-nav-icon" viewBox="0 0 16 16"><path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/></svg>';
    
    } else if (nav.getAttribute("isMyMenuVisible") === "yes") {
        nav.setAttribute("isMyMenuVisible", "no");
        nav.style.transform = null;
        navBtn.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="white" class="bi bi-list mobile-nav-icon" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/></svg>'
    }
})