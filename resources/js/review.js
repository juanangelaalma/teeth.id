let index = 0;

const prevButton = document.getElementById("prev");
const nextButton = document.getElementById("next");
const reviewSliderContainer = document.getElementById(
    "review-slider-container"
);
const maxSlider = reviewSliderContainer.childElementCount - 1;

prevButton.addEventListener("click", prevAction);
nextButton.addEventListener("click", nextAction);

setInterval(() => {
    nextAction();
}, 5000);

function prevAction() {
    if (index > 0) {
        index = index - 1;
        reviewSliderContainer.style.transform = `translateX(-${
            index * (window.innerWidth > 1023 ? 33.333333 : 100)
        }%)`;
    }
}

function nextAction() {
    const maxSlider =
        window.innerWidth > 1023
            ? reviewSliderContainer.childElementCount - 3
            : reviewSliderContainer.childElementCount - 1;

    if (index < maxSlider) {
        index = index + 1;
    } else {
        index = 0;
    }
    reviewSliderContainer.style.transform = `translateX(-${
        index * (window.innerWidth > 1023 ? 33.333333 : 100)
    }%)`;
}