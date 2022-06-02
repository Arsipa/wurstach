let position = 0;
const track = document.getElementById("reviews__track");
const item = document.getElementsByClassName("review__slide");
const btnPrev = document.getElementById("reviews__left-arrow");
const btnNext = document.getElementById("reviews__right-arrow");
const itemWidth = 900;
const gap = 50;
const movePosition = itemWidth + gap;
const dots = item.length;
var currentDot = 1;

btnPrev.onclick = function () {
    console.log("a");
    position += movePosition;
    setPosition();
    currentDot--;
    checkBtns();
};
btnNext.onclick = function () {
    position -= movePosition;
    setPosition();
    currentDot++;
    checkBtns();
};

const setPosition = () => {
    track.style.transform = "translateX(" + position + "px)";
};

const checkBtns = () => {
    if (currentDot >= dots) {
        btnNext.disabled = true;
        btnNext.classList.add("arrow-disabled");
    } else {
        btnNext.disabled = false;
        btnNext.classList.remove("arrow-disabled");
    }
    if (currentDot == 1) {
        btnPrev.disabled = true;
        btnPrev.classList.add("arrow-disabled");
    } else {
        btnPrev.disabled = false;
        btnPrev.classList.remove("arrow-disabled");
    }
};
checkBtns();
