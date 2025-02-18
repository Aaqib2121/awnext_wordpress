document.addEventListener("DOMContentLoaded", function () {
    // ================== Video Play Button Handling ==================
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

    // ================== Download Button and Modal ==================
    document.querySelectorAll(".downloadBtn").forEach(function (button) {
        button.addEventListener("click", function () {
            // Show the overlay and modal
            const overlay = document.getElementById("overlay");
            overlay.style.display = "flex";

            // Hide the modal and overlay after 3 seconds, then reload the page
            setTimeout(function () {
                overlay.style.display = "none";
                location.reload(); // Reload the page after 3 seconds
            }, 3000); // 3 seconds delay
        });
    });

    // ================== Close Modal ==================
    document.getElementById("closePopup").addEventListener("click", function () {
        document.getElementById("overlay").style.display = "none";
    });

    // ================== Download Form Handling ==================
    const downloadForm = document.getElementById("downloadForm");
    if (downloadForm) {
        downloadForm.addEventListener("submit", function (e) {
            e.preventDefault(); // Prevent default form submission
            downloadForm.classList.add("downloading");

            // Simulate file download
            setTimeout(function () {
                window.location.href = "your-brochure.pdf"; // Replace with actual file URL
                window.location.reload();
            }, 3000);
        });
    }

    // ================== Stat Number Animation ==================
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

    // ================== Lazy Load Google Map ==================
    function loadGoogleMap() {
        let mapFrame = document.getElementById("google-map");
        let placeholder = document.getElementById("map-placeholder");

        if (!mapFrame || !placeholder) return; // Exit if elements are not found

        let rect = placeholder.getBoundingClientRect();
        let windowHeight = window.innerHeight;

        if (rect.top < windowHeight) {
            mapFrame.src = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3782.3579407107436!2d73.66382957595603!3d18.557894682542955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bb580826e04f%3A0x8216f59d75fd3b3c!2sPrabha%20Engineering%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1739443986651!5m2!1sen!2sin";
            mapFrame.style.display = "block";
            placeholder.style.display = "none";
            
            window.removeEventListener("scroll", loadGoogleMap);
        }
    }

    window.addEventListener("scroll", loadGoogleMap);
});