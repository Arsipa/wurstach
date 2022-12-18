const button = document.getElementById("theme");
const link = document.getElementById("theme-file");

function getCookie(name) {
    const value = `; ${document.cookie}`;
    const parts = value.split(`; ${name}=`);
    if (parts.length === 2) return parts.pop().split(";").shift();
}

function changeTheme(theme) {
    if (theme == "light") {
        document.cookie = "theme=light;path=/";
        button.querySelector("img").src = "/img/moon.svg";
        link.href = "";
    } else {
        document.cookie = "theme=dark;path=/";
        button.querySelector("img").src = "/img/light.svg";
        link.href = "/css/dark-theme.css";
    }
}

changeTheme(getCookie("theme"));

button.onclick = () => {
    if (getCookie("theme") == "light" || undefined) {
        changeTheme("dark");
    } else {
        changeTheme("light");
    }
};
