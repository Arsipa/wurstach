const log_btn = document.getElementById("login-btn");
const reg_btn = document.getElementById("reg-btn");
const auth_bg = document.getElementById("auth_bg");
const log_form = document.getElementById("login");
const reg_form = document.getElementById("registration");

for (let item of document.getElementsByClassName("close-form")) {
    item.onclick = () => {
        auth_bg.classList.add("hidden");
        log_form.classList.add("hidden");
        reg_form.classList.add("hidden");
    };
}

log_btn.onclick = () => {
    auth_bg.classList.remove("hidden");
    log_form.classList.remove("hidden");
};
reg_btn.onclick = () => {
    auth_bg.classList.remove("hidden");
    reg_form.classList.remove("hidden");
};
