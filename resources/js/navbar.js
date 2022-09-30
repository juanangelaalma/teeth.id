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