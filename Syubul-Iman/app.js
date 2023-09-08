document.addEventListener("DOMContentLoaded", function () {
    const slider = document.querySelector(".slider");
    const slides = document.querySelectorAll(".slide");
    const imageWidth = slides[0].clientWidth;
    let currentIndex = 0;

    function slideTo(index) {
        if (index < 0) {
            index = slides.length - 1;
        } else if (index >= slides.length) {
            index = 0;
        }

        currentIndex = index;
        slider.style.transform = `translateX(-${currentIndex * imageWidth}px)`;
    }

    function nextSlide() {
        slideTo(currentIndex + 1);
    }

    function prevSlide() {
        slideTo(currentIndex - 1);
    }

    // Automatically advance the slider
    setInterval(nextSlide, 5000);

    // Handle button clicks
    const prevButton = document.querySelector(".prev-button");
    const nextButton = document.querySelector(".next-button");

    if (prevButton && nextButton) {
        prevButton.addEventListener("click", prevSlide);
        nextButton.addEventListener("click", nextSlide);
    }
});
