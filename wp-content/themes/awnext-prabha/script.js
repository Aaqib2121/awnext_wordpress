document.addEventListener("DOMContentLoaded", function () {

    var playButton = document.getElementById("play-button");
    var thumbnail = document.getElementById("video-thumbnail");
    var video = document.getElementById("my-video");

    playButton.addEventListener("click", function () {
        thumbnail.style.display = "none";  // Hide the thumbnail
        playButton.style.display = "none";  // Hide the play button
        video.style.display = "block";  // Show the video
        video.play();  // Auto-play the video
    });

    const statNumbers = document.querySelectorAll('.stat-number');

    const options = {
        threshold: 0.5
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const target = +entry.target.getAttribute('data-target');
                animateNumber(entry.target, target);
                observer.unobserve(entry.target);
            }
        });
    }, options);

    statNumbers.forEach(statNumber => {
        observer.observe(statNumber);
    });

    function animateNumber(element, target) {
        let current = 0;
        const increment = target / 100;
        const interval = setInterval(() => {
            current += increment;
            if (current >= target) {
                clearInterval(interval);
                current = target;

                // Add a class to the stat-line after animation completes
                const statLine = element.nextElementSibling; // Assuming stat-line is the next sibling
                if (statLine && statLine.classList.contains('stat-line')) {
                    statLine.classList.add('show-line');
                }
            }
            element.textContent = Math.floor(current);
        }, 20);
    }
});

