const buy_btn = document.getElementById("buy_btn");
const buy_form = document.getElementById("buy-course_bg");
const close_btn = document.getElementById("buy-course_bg_close");

buy_btn.onclick = () => {
    buy_form.classList.remove("hidden");
};

close_btn.onclick = () => {
    buy_form.classList.add("hidden");
}
