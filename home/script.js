document.addEventListener("DOMContentLoaded", function () {
    const places = document.querySelector(".places");
    const toggleButton = document.querySelector(".toggle");

    toggleButton.addEventListener("click", function () {
        places.classList.toggle("active");
    });
});
