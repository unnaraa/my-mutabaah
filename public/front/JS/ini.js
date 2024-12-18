// Navbar
document.querySelectorAll('.dropdown').forEach(dropdown => {
    dropdown.addEventListener('click', (e) => {
        e.stopPropagation();
        const content = dropdown.querySelector('.dropdown-content');
        if (content.style.display === 'block') {
            content.style.display = 'none';
        } else {
            document.querySelectorAll('.dropdown-content').forEach(c => c.style.display = 'none');
            content.style.display = 'block';
        }
    });
});

// Tutup dropdown saat klik di luar
document.addEventListener('click', () => {
    document.querySelectorAll('.dropdown-content').forEach(content => content.style.display = 'none');
});


document.addEventListener('click', () => {
    document.querySelectorAll('.dropdown-content').forEach(content => content.style.display = 'none');
});


// Fitur
function animateCard(card) {
    card.style.transform = "scale(1.05)";
    card.style.boxShadow = "0 8px 16px rgba(0, 0, 0, 0.2)";
}

function resetCard(card) {
    card.style.transform = "scale(1)";
    card.style.boxShadow = "0 4px 8px rgba(0, 0, 0, 0.1)";
}

// Artikel
let currentIndex = 0;

function slideLeft() {
    const sliderContainer = document.querySelector('.slider-container');
    const cards = document.querySelectorAll('.card');
    if (currentIndex > 0) {
        currentIndex--;
        sliderContainer.style.transform = `translateX(-${currentIndex * (cards[0].offsetWidth + 20)}px)`;
    }
}

function slideRight() {
    const sliderContainer = document.querySelector('.slider-container');
    const cards = document.querySelectorAll('.card');
    if (currentIndex < cards.length - 1) {
        currentIndex++;
        sliderContainer.style.transform = `translateX(-${currentIndex * (cards[0].offsetWidth + 20)}px)`;
    }
}



        // About
        const aboutImage = document.querySelector('.about-image img');

aboutImage.addEventListener('mouseover', () => {
    aboutImage.style.transform = 'scale(1.1) rotateY(360deg)';
});

aboutImage.addEventListener('mouseout', () => {
    aboutImage.style.transform = 'scale(1) rotateY(0)';
});

// Video
// document.addEventListener("DOMContentLoaded", () => {
//     const playButtons = document.querySelectorAll(".play-btn");
//     const videoPopup = document.getElementById("videoPopup");
//     const videoFrame = document.getElementById("videoFrame");
//     const closeBtn = document.querySelector(".close-btn");

//     playButtons.forEach((button) => {
//         button.addEventListener("click", () => {
//             const videoUrl = button.parentElement.getAttribute("data-video");
//             videoFrame.src = videoUrl;
//             videoPopup.style.display = "flex";
//         });
//     });

//     closeBtn.addEventListener("click", () => {
//         videoPopup.style.display = "none";
//         videoFrame.src = "";
//     });

//     videoPopup.addEventListener("click", (e) => {
//         if (e.target === videoPopup) {
//             videoPopup.style.display = "none";
//             videoFrame.src = "";
//         }
//     });
// });

document.querySelectorAll('.video-card').forEach(card => {
    card.addEventListener('click', function () {
        const videoPopup = document.getElementById('videoPopup');
        const videoFrame = document.getElementById('videoFrame');
        const videoLink = this.getAttribute('data-video');

        videoPopup.style.display = 'block';
        videoFrame.src = videoLink;
    });
});

document.querySelector('.close-btn').addEventListener('click', function () {
    const videoPopup = document.getElementById('videoPopup');
    const videoFrame = document.getElementById('videoFrame');

    videoPopup.style.display = 'none';
    videoFrame.src = '';
});


// murottal
let currentAudio = null;

function togglePlayPause(audioId, button) {
    const audio = document.getElementById(audioId);

    // Pause any currently playing audio
    if (currentAudio && currentAudio !== audio) {
        currentAudio.pause();
        currentAudio.parentElement.querySelector("button").textContent = "▶️ Play";
    }

    if (audio.paused) {
        audio.play();
        button.textContent = "⏸️ Pause";
        currentAudio = audio;
    } else {
        audio.pause();
        button.textContent = "▶️ Play";
    }

    // Reset button text on audio end
    audio.onended = () => {
        button.textContent = "▶️ Play";
    };
}


// Footer
const whatsappBtn = document.querySelector('.whatsapp-btn');

whatsappBtn.addEventListener('click', () => {
    whatsappBtn.style.transform = 'scale(0.95)';
    setTimeout(() => {
        whatsappBtn.style.transform = 'scale(1)';
    }, 150);
});
