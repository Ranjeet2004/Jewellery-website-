document.addEventListener("DOMContentLoaded", function () {
    new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 20,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            640: { slidesPerView: 2 },
            1024: { slidesPerView: 4 }
        }
    });
});



// video start
document.addEventListener("DOMContentLoaded", function () {
    const cards = document.querySelectorAll(".card");
    let currentIndex = 2; // Center video

    function updateCarousel() {
        cards.forEach((card, index) => {
            const diff = index - currentIndex;

            if (diff === -2) {
                card.style.transform = "translateX(-220px) scale(0.9)";
                card.style.opacity = "0.5";
                card.style.zIndex = "1";
            } else if (diff === -1) {
                card.style.transform = "translateX(-110px) scale(1)";
                card.style.opacity = "0.7";
                card.style.zIndex = "2";
            } else if (diff === 0) {
                card.style.transform = "translateX(0) scale(1.2)";
                card.style.opacity = "1";
                card.style.zIndex = "3";
                card.querySelector("video").play(); // Autoplay active video
            } else if (diff === 1) {
                card.style.transform = "translateX(110px) scale(1)";
                card.style.opacity = "0.7";
                card.style.zIndex = "2";
            } else if (diff === 2) {
                card.style.transform = "translateX(220px) scale(0.9)";
                card.style.opacity = "0.5";
                card.style.zIndex = "1";
            } else {
                card.style.opacity = "0";
                card.style.transform = "translateX(0) scale(0.7)";
                card.querySelector("video").pause(); // Pause hidden videos
            }
        });
    }

    document.getElementById("prevBtn").addEventListener("click", function () {
        if (currentIndex > 0) {
            currentIndex--;
            updateCarousel();
        }
    });

    document.getElementById("nextBtn").addEventListener("click", function () {
        if (currentIndex < cards.length - 1) {
            currentIndex++;
            updateCarousel();
        }
    });

    updateCarousel();
});

// video end




