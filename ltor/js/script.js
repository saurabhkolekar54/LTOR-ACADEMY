// Add this to a new file named script.js
let currentSlide = 0;

function showSlide() {
    const slides = document.querySelectorAll('.wrapper img');
    slides.forEach((slide, index) => {
        if (index === currentSlide) {
            slide.style.transform = 'translateX(0)';
        } else {
            slide.style.transform = `translateX(${-(index - currentSlide) * 100}%)`;
        }
    });
}

function nextSlide() {
    currentSlide = (currentSlide + 1) % 4; // Adjust the number based on the total number of slides
    showSlide();
}

function prevSlide() {
    currentSlide = (currentSlide - 1 + 4) % 4; // Adjust the number based on the total number of slides
    showSlide();
}

// Initial display
showSlide();
