const actives = document.body.querySelectorAll(".menu a");

actives.forEach((active) => {
    if (active.href === window.location.href) {
        active.classList.add("active");
    }
});

const left = document.body.querySelector(".left");
const right = document.body.querySelector(".right");
const slider = document.body.querySelector(".timeline");

left.addEventListener('click', () => {
    slider.scrollBy(-500, 0);
});

right.addEventListener('click', () => {
    slider.scrollBy(500, 0);
});