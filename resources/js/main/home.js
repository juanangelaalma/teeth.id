const navbar = document.getElementById("navbar");
const ul = navbar.getElementsByTagName("ul");

const menu = document.getElementById("menu");

menu.addEventListener("click", toggleNav);

function toggleNav(e) {
    ul[0].classList.toggle("translate-x-0");
    ul[0].classList.add("transition-transform");
    ul[0].classList.add("duration-500");
    if (ul[0].classList.contains("translate-x-0")) {
        menu.style.position = "fixed";
    } else {
        menu.style.position = "inline-block";
    }
}

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

const profile = document.getElementById("profile");
const dropDownProfile = document.getElementById('dropdownProfile');

if(profile) {
    profile.addEventListener('click', function() {
        if(dropDownProfile.classList.contains('hiden-animation')) {
            dropDownProfile.classList.remove('hiden-animation');
            dropDownProfile.classList.add('show-animation');
        } else {
            dropDownProfile.classList.remove('show-animation');
            dropDownProfile.classList.add('hiden-animation');
        }
    })
}