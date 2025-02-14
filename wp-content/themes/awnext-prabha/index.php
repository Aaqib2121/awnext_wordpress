<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Awnext by Prabha</title>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>

    <header class="fixed-top">
        <nav class="navbar navbar-expand-lg navbar-dark gradient-primary">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <div class="logo d-flex align-items-center">
                        <div class="logo-text">
                            <div class="logo-top">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/nav_logo.png" alt="Company Logo">
                            </div>
                        </div>
                    </div>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#about">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#why">Why Awnext?</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#advantage">The Prabha Advantage</a>
                        </li>
                    </ul>
                    <a class="btn btn-outline-light" href="#get_contact">Get in Touch</a>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <section class="hero d-flex">
            <div class="container hero_conatiner">
                <div class="row hero_head justify-content-center align-items-center">
                    <div class="col-lg-6 text-center text-lg-start text-white">
                        <h1 class="fw-bold hero_h1">India’s first OEM<br>for motorized awnings</h1>
                    </div>
                    <div class="col-lg-6">
                        <div class="banner-form mx-auto">
                            <div class="form-card">
                                <h2 class="mb-3 text-white">Upgrade to Smart Awning Solutions</h2>
                                <h4 class="mb-4 text-white">Smart, smooth, and silent—experience Awnext today!</h4>
                                <form method="post" action="">
                                    <?php wp_nonce_field('form_submission_nonce', 'form_nonce'); ?>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="full_name" placeholder="Full Name *" required>
                                    </div>
                                    <div class="mb-3">
                                        <input type="email" class="form-control" name="email" placeholder="Email *" required>
                                    </div>
                                    <div class="mb-3">
                                        <input type="tel" class="form-control" name="phone_number" placeholder="Phone Number *" required>
                                    </div>
                                    <div class="button-container pt-3">
                                        <button type="submit" name="submit" class="btn btn-primary">Download</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Content Section -->
    <section class="content-section py-5" id="about">
        <div class="container">
            <div class="row align-items-center content_mobile">
                <!-- Left Side: Text Content -->
                <div class="col-md-6 content-text">
                    <h2 class="content_head">Motorised Awnings built to last</h2>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/content_img.png"
                        class="content_img mobile-only" alt="Right Side Image">
                    <p>Awnext by Prabha redefines outdoor luxury as the first organized player in motorized awnings with
                        nationwide distribution. Precision-engineered for durability, style, and effortless protection
                        against harsh weather.</p>
                </div>
                <!-- Right Side: Image -->
                <div class="col-md-6 content-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/content_img.png"
                        class="content_img desktop-only" alt="Right Side Image">
                </div>
            </div>
        </div>
    </section>


<!-- Features Section -->
<section class="features py-5" id="why">
    <div class="container">
        <h2 class="features_head text-left mb-5">Why Awnext by Prabha?</h2>
        <div class="row flex-nowrap overflow-auto g-4 pb-3 scrollable-row"> <!-- Added scrollable-row class -->
            <!-- Feature Cards -->
            <div class="col-12 col-sm-6 col-xl-3 flex-shrink-0">
                <div class="card feature-card shadow-sm">
                    <div class="card-body">
                        <div class="feature-header">
                            <div class="feature-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/india_map.png" alt="Pan India Coverage">
                            </div>
                            <h3 class="text-dark feature_h3">Pan-India’s First Motorized Awning Manufacturer</h3>
                            <p>As India’s first OEM awning brand, we deliver premium motorized retractable awnings to Mumbai, Pune, and nationwide.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-xl-3 flex-shrink-0">
                <div class="card feature-card shadow-sm">
                    <div class="card-body">
                        <div class="feature-header">
                            <div class="feature-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/luxury_meet.png" alt="Luxury Meets Affordability">
                            </div>
                            <h3 class="text-dark feature_h3">Luxury Meets Affordability</h3>
                            <p>Premium features at manual prices:</p>
                            <ul>
                                <li>Smart remote-controlled operation</li>
                                <li>UV-resistant, weatherproof fabrics</li>
                                <li>5-year warranty on motors and frames</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-xl-3 flex-shrink-0">
                <div class="card feature-card shadow-sm">
                    <div class="card-body">
                        <div class="feature-header">
                            <div class="feature-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/cust_space.png" alt="Customizable for Your Space">
                            </div>
                            <h3 class="text-dark feature_h3">Customizable for Your Space</h3>
                            <p>Design awnings tailored to your exact needs:</p>
                            <ul>
                                <li>Size, color, and fabric customization</li>
                                <li>Quick installation for homes, cafés, and commercial spaces</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-xl-3 flex-shrink-0">
                <div class="card feature-card shadow-sm">
                    <div class="card-body">
                        <div class="feature-header">
                            <div class="feature-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/support-icon.png" alt="Exceptional Customer Support">
                            </div>
                            <h3 class="text-dark feature_h3">Exceptional Customer Support</h3>
                            <p>Our dedicated support team ensures a seamless experience from consultation to installation and beyond.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sixty-Icon Card -->
            <div class="col-12 col-sm-6 col-xl-3 flex-shrink-0">
                <div class="card feature-card shadow-sm">
                    <div class="card-body">
                        <div class="feature-header">
                            <div class="feature-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/sixty-icon.png" alt="60-Day Satisfaction Guarantee">
                            </div>
                            <h3 class="text-dark feature_h3">60-Day Satisfaction Guarantee</h3>
                            <p>We offer a 60-day satisfaction guarantee to ensure you love your awning or your money back.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <section class="why-awnext py-5 bg-light">
        <div class="container text-center">
            <!-- Video Thumbnail -->
            <div class="video-container" style="position: relative; display: inline-block;">
                <img src="<?php echo get_template_directory_uri(); ?>/img/video.png" alt="Video Thumbnail"
                    id="video-thumbnail" style="cursor: pointer; width: 100%; max-width: 800px;">

                <!-- Play Button (Over Thumbnail) -->
                <div id="play-button" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);
                            width: 80px; height: 80px; background: url('<?php echo get_template_directory_uri(); ?>/img/play-button.png') no-repeat center center;
                            background-size: contain; cursor: pointer;">
                </div>

                <!-- Hidden Video -->
                <video id="my-video" controls style="display: none; width: 100%; max-width: 800px;">
                    <source src="your-video.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats py-5" id="advantage">
        <div class="container">
            <h2 class="stats_head text-left">The Prabha Advantage</h2>
            <p class="lead mb-5 pt-4 text-left">Partnering with Prabha Engineering means decades of innovation,
                reliability, and a
                trusted ally for your success.</p>

            <!-- Row for Stats -->
            <div class="row text-left stat-row">
                <!-- Column 1 -->
                <div class="col-md-3 col-6 stat-box">
                    <div class="stat-item">
                        <div class="stat-number" data-target="400+">0</div>
                        <div class="stat-line"></div>
                        <div class="stat-label">
                            <h5>Lifetime Customers</h5>
                        </div>
                    </div>
                </div>
                <!-- Column 2 -->
                <div class="col-md-3 col-6 stat-box">
                    <div class="stat-item">
                        <div class="stat-number" data-target="60+">0</div>
                        <div class="stat-line"></div>
                        <div class="stat-label">
                            <h5>Years of experience<br>in innovations</h5>
                        </div>
                    </div>
                </div>
                <!-- Column 3 -->
                <div class="col-md-3 col-6 stat-box">
                    <div class="stat-item">
                        <div class="stat-number" data-target="200+">0</div>
                        <div class="stat-line"></div>
                        <div class="stat-label">
                            <h5>Product Portfolio</h5>
                        </div>
                    </div>
                </div>
                <!-- Column 4 -->
                <div class="col-md-3 col-6 stat-box">
                    <div class="stat-item">
                        <div class="stat-number" data-target="87%">0</div>
                        <div class="stat-line"></div>
                        <div class="stat-label">
                            <h5>Client Retention<br>Rate</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Download Section -->
    <section class="download py-5 gradient-primary text-white"
        style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/download_sec.png'); background-size: cover; background-position: center; height: 70vh; width: 100%;">
        <div class="image-overlay">
            <div class="container">
                <div class="row align-items-center download-row">
                    <div class="col-lg-6">
                        <h2 class="text-white fw-bold download_text">Download our brochure <br> to get more insights
                        </h2>
                    </div>
                    <div class="col-lg-4 mx-auto">
                        <div class="download-form">
                            <h3 class="mb-3 pb-3 text-white fw-bold">Download our brochure</h3>
                            <form id="downloadForm" method="post" action="">
    <?php wp_nonce_field('form_submission_nonce', 'form_nonce'); ?>
    <div class="mb-3">
        <input type="text" class="form-control" name="full_name" placeholder="Full Name *" required>
    </div>
    <div class="mb-3">
        <input type="email" class="form-control" name="email" placeholder="Email *" required>
    </div>
    <div class="mb-3">
        <input type="tel" class="form-control" name="phone_number" placeholder="Phone Number *" required>
    </div>
    <div class="button-container pt-3">
        <button type="submit" id="downloadBtn" name="submit" class="btn btn-primary">Download</button>
    </div>
</form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact py-5 gradient-blue text-white" id="get_contact">
        <div class="container">
            <h2 class="text-center mb-4 pt-4 contact_head fw-bold">Get in touch with us!</h2>
            <h4 class="text-center text-white pb-4">We should start the conversation</h4>

            <div class="text-center mb-5">
                <a href="tel:9226566851" class="btn btn-lg call-btn">Book a call with us!</a>
            </div>

            <!-- <hr class="my-3" style="background-color: rgba(255, 255, 255, 0.8); border: none; height: 2px;"> -->

            <div class="row mt-5">
                <div class="col-md-6">
                    <h3 class="text-white" style="font-size: 52px;font-weight: 400;line-height: 52px;text-align: left;">
                        Contact Us</h3>
                    <address class="mt-4">
                        <p>
                            <i class="fas fa-map-marker-alt p-2"></i>
                            Gate No. 519, Mulshi Road, Rihe Rd, Shelkewadi, Ghotawade, Pune, Maharashtra 412111
                        </p>
                        <p class="email-address">
                            <a href="mailto:nandkishore@prabha-engg.com" class="email-link">
                                <i class="fas fa-envelope p-2"></i>
                                nandkishore@prabha-engg.com
                            </a>
                        </p>
                        <p class="phone-number">
                            <a href="tel:9226566851" class="phone-link">
                                <i class="fas fa-phone p-2"></i>
                                92265 66851
                            </a>
                        </p>
                    </address>
                </div>
                <div class="col-md-6">
                    <div class="map-container">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3782.3579407107436!2d73.66382957595603!3d18.557894682542955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bb580826e04f%3A0x8216f59d75fd3b3c!2sPrabha%20Engineering%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1739443986651!5m2!1sen!2sin"  width="100%" 
                            height="300" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy"></iframe>
                    </div>
                </div>
                <hr class="my-3 mt-4" style="background-color: white; border: none; height: 2px;">
                <div class="container-fluid">
                    <div class="d-flex justify-content-center">
                        <div class="all-rights text-center pt-3">© 2025, Awnext by Prabha. All rights reserved.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="<?php echo get_template_directory_uri(); ?>/assets/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/script.js"></script>
<!-- <script src="https://www.gstatic.com/firebasejs/9.6.1/firebase-app.js"></script>

<script src="https://www.gstatic.com/firebasejs/9.6.1/firebase-firestore.js"></script> -->
</body>

</html>