document.addEventListener("DOMContentLoaded", function () {
    // Video play button and thumbnail handling
    const playButton = document.getElementById("play-button");
    const videoThumbnail = document.getElementById("video-thumbnail");
    const myVideo = document.getElementById("my-video");

    if (playButton && videoThumbnail && myVideo) {
        playButton.addEventListener("click", function () {
            videoThumbnail.style.display = "none";
            playButton.style.display = "none";
            myVideo.style.display = "block";
            myVideo.play();
        });
    }

    // Download form handling
    const downloadForm = document.getElementById("downloadForm");
    if (downloadForm) {
        downloadForm.addEventListener("submit", function (e) {
            downloadForm.classList.add("downloading");
            setTimeout(function () {
                window.location.reload();
            }, 5000);
        });
    }

    // Stat number animation
    const statNumbers = document.querySelectorAll(".stat-number");
    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const target = entry.target.getAttribute("data-target");
                animateStatNumber(entry.target, target);
                observer.unobserve(entry.target);
            }
        });
    });

    statNumbers.forEach(statNumber => {
        observer.observe(statNumber);
    });

    function animateStatNumber(element, target) {
        let count = 0;
        const isPercentage = target.includes("%");
        const isPlus = target.includes("+");
        const increment = parseFloat(target) / 100;

        const interval = setInterval(() => {
            count += increment;
            if (count >= parseFloat(target)) {
                clearInterval(interval);
                count = parseFloat(target);
            }

            const statLine = element.nextElementSibling;
            if (statLine && statLine.classList.contains("stat-line")) {
                statLine.classList.add("show-line");
            }

            element.textContent = isPercentage 
                ? `${Math.floor(count)}%` 
                : isPlus 
                ? `${Math.floor(count)}+` 
                : Math.floor(count);
        }, 20);
    }
});