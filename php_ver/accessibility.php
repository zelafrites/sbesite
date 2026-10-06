<!-- For debugging, call it once, or else it will require to be clicked twice. -->
<body onload="initAccessibility()">

<section class="accessibility-box" id="access_container">
    <h2>Accessibility Options</h2>
    <button onclick="themeSwitch()" id="theme-switch-button">Toggle Theme (current: light)</button>
    <div>
        <h3>Font Sizes</h3>
        <button onclick="augmentFontSize(5)">+</button>
        <button onclick="resetFontSize()">RESET</button>
        <button onclick="augmentFontSize(-5)">-</button>
    </div>
    <div>
        <h3>Font Family</h3>
        <select id="font-family-select" onchange="changeFontFamily(this.value)">
            <option value="CanvaSans, sans-serif">CanvaSans</option>
        </select>
    </div>
</section>

</body>