let currentFontSize = 100;
const btn = document.getElementById("theme-switch-button");

function loadTheme() {
    const theme = localStorage.getItem("theme");
    if (theme === "dark") {
        document.body.classList.add("dark-theme");
        btn.textContent = "Toggle Theme (current: dark)";
    }
    let fontSize = localStorage.getItem("fontSize");
    if (fontSize) {
        currentFontSize = parseInt(fontSize);
        applyFontSize();
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

function augmentFontSize(increment) {
    currentFontSize = Math.min(150, Math.max(50, currentFontSize + increment));
    applyFontSize();
}

function resetFontSize() {
    currentFontSize = 100;
    applyFontSize();
}

function applyFontSize() {
    document.documentElement.style.setProperty("--font-scale", currentFontSize / 100);
    document.body.style.fontSize = currentFontSize + "%";
    localStorage.setItem("fontSize", currentFontSize);
}

function initAccessibility() {
    if (document.getElementById("access_container").style.display === "none") {
        document.getElementById("access_container").style.display = "flex";
    } else {
        document.getElementById("access_container").style.display = "none";
    }
}