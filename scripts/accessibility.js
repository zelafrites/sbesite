const currentFontSize = 100;
const btn = document.getElementById("theme-switch-button");

function loadTheme() {
    const theme = localStorage.getItem("theme");
    if (theme === "dark") {
        document.body.classList.add("dark-theme");
        btn.textContent = "Toggle Theme (current: dark)";
    }
}

function themeSwitch() {
    document.body.classList.toggle("dark-theme");

    if (document.body.classList.contains("dark-theme")) {
        btn.textContent = "Toggle Theme (current: dark)";
        localStorage.setItem("theme", "dark");
    } else {
        btn.textContent = "Toggle Theme (current: light)";
        localStorage.setItem("theme", "light");
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