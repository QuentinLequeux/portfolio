const actives = document.body.querySelectorAll(".menu a");

actives.forEach((active) => {
    if (active.href === window.location.href) {
        active.classList.add("active");
    }
});