const currentFontSize = 100;

function themeSwitch() {
    const btn = document.getElementById("theme-switch-button");

    document.body.classList.toggle("dark-theme");

    if (document.body.classList.contains("dark-theme")) {
        btn.textContent = "Toggle Theme (current: dark)";
    } else {
        btn.textContent = "Toggle Theme (current: light)";
    }
}

function increaseFontSize() {
    document.body.style.fontSize = (currentFontSize + 5) + "%";
}

function decreaseFontSize() {
    document.body.style.fontSize = (currentFontSize - 5) + "%";
}

function resetFontSize() {
    currentFontSize = 100;
    document.body.style.fontSize = (currentFontSize) + "%";
}