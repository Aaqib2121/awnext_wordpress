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
        threshold: 0.5 // Trigger when 50% of the element is visible
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const target = entry.target.getAttribute('data-target');
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
        const isPercentage = target.includes('%'); // Check if the target is a percentage
        const isPlusSign = target.includes('+'); // Check if the target has a + sign
        const targetNumber = parseFloat(target); // Extract the numeric value
        const increment = targetNumber / 100;
        const interval = setInterval(() => {
            current += increment;
            if (current >= targetNumber) {
                clearInterval(interval);
                current = targetNumber;

                // Add a class to the stat-line after animation completes
                const statLine = element.nextElementSibling; // Assuming stat-line is the next sibling
                if (statLine && statLine.classList.contains('stat-line')) {
                    statLine.classList.add('show-line');
                }
            }
            // Add % or + sign based on the target
            if (isPercentage) {
                element.textContent = `${Math.floor(current)}%`;
            } else if (isPlusSign) {
                element.textContent = `${Math.floor(current)}+`;
            } else {
                element.textContent = Math.floor(current);
            }
        }, 20);
    }
});

