document.addEventListener("DOMContentLoaded", () => {
    const switchButton = document.getElementById("switch");
    const body = document.body;
    const navbar = document.querySelector(".navbar");
    const buttonImage = switchButton.querySelector("img"); // Annahme: Im Button ist ein <img> Tag

    switchButton.addEventListener("click", () => {
        const isDark = body.getAttribute("data-bs-theme") === "dark";
        body.setAttribute("data-bs-theme", isDark ? "light" : "dark");

        navbar.classList.toggle("bg-dark", !isDark);
        navbar.classList.toggle("bg-light", isDark);
        navbar.classList.toggle("navbar-dark", !isDark);
        navbar.classList.toggle("navbar-light", isDark);

        // Bild im Button ändern
        if (isDark) {
            buttonImage.src = "/img/dark_mode.png";  // Pfad zum Bild für den Light Mode
        } else {
            buttonImage.src = "./img/light_mode.png";   // Pfad zum Bild für den Dark Mode
        }
    });
});
