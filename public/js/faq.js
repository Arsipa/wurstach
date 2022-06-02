window.onload = () => {
    const questions = document.getElementsByClassName("faq__question");

    for (let i = 0; i < questions.length; i++) {
        questions[i].addEventListener("click", function () {
            this.classList.toggle("question_open");
            let answer = this.querySelector('.question__main');
            if (answer.style.maxHeight) {
                answer.style.maxHeight = null;
            } else {
                answer.style.maxHeight = answer.scrollHeight + "px";
            }
        });
    }
};
