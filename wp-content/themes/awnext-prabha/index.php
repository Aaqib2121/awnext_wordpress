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
                                <svg width="100%" height="48" viewBox="0 0 148 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M87.5775 44.6327C87.5775 46.1334 86.5322 47.0417 84.5787 47.0417H81.1771V38.206H84.1496C85.9978 38.206 87.122 38.9958 87.122 40.5624C87.122 41.8208 86.2505 42.2763 85.7556 42.3711V42.3974C86.3585 42.5185 87.5775 43.0661 87.5775 44.6327ZM83.989 39.2381H82.3961V42.0236H84.1627C85.3133 42.0236 85.8898 41.4075 85.8898 40.6308C85.8898 39.7067 85.3133 39.2381 83.989 39.2381ZM86.3585 44.5116C86.3585 43.4005 85.4344 42.9319 84.2707 42.9319H82.3961V46.0122H84.4313C85.5291 46.0122 86.3585 45.5436 86.3585 44.5116Z" fill="white"/>
                                    <path d="M92.3164 43.8035V47.0445H91.0974V43.872L88.0039 38.2088H89.315L91.2554 41.7025C91.5239 42.1843 91.6714 42.6135 91.7109 42.8136H91.7372C91.7635 42.6135 91.911 42.1843 92.1795 41.7025L94.1067 38.2088H95.3652L92.3138 43.8061L92.3164 43.8035Z" fill="white"/>
                                    <path d="M105.639 41.1917C105.639 43.1058 104.433 44.1905 102.319 44.1905H100.605V47.0418H99.3856V38.2061H102.171C104.38 38.2061 105.639 39.2777 105.639 41.1917ZM104.406 41.1917C104.406 39.9464 103.577 39.2355 102.09 39.2355H100.605V43.1584H102.132C103.59 43.1584 104.406 42.4476 104.406 41.1891V41.1917Z" fill="white"/>
                                    <path d="M113.9 47.0576C113.9 47.0576 113.566 47.1235 113.176 47.1235C110.699 47.1235 111.436 43.6429 109.132 43.6429H108.421V47.0445H107.202V38.2088H109.867C111.928 38.2088 113.108 39.0381 113.108 40.9522C113.108 42.1843 112.291 43.04 111.125 43.4297C112.263 44.0721 112.276 46.1467 113.534 46.1467C113.695 46.1467 113.803 46.1204 113.803 46.1204L113.897 47.0576H113.9ZM109.696 42.6925C110.941 42.6925 111.878 42.0764 111.878 40.9522C111.878 39.828 111.154 39.2382 109.817 39.2382H108.424V42.6925H109.696Z" fill="white"/>
                                    <path d="M120.058 44.8487H116.349L115.533 47.0445H114.274L117.594 38.2088H118.813L122.133 47.0445H120.874L120.058 44.8487ZM119.684 43.843L118.492 40.6442C118.397 40.3888 118.305 40.0676 118.21 39.72H118.184C118.089 40.0676 117.997 40.3888 117.902 40.6442L116.723 43.843H119.682H119.684Z" fill="white"/>
                                    <path d="M129.86 44.6328C129.86 46.1335 128.815 47.0418 126.861 47.0418H123.46V38.2061H126.432C128.28 38.2061 129.405 38.996 129.405 40.5625C129.405 41.8209 128.533 42.2764 128.038 42.3712V42.3975C128.641 42.5186 129.86 43.0663 129.86 44.6328ZM126.272 39.2382H124.679V42.0237H126.445C127.596 42.0237 128.173 41.4076 128.173 40.6309C128.173 39.7068 127.596 39.2382 126.272 39.2382ZM128.641 44.5117C128.641 43.4006 127.717 42.932 126.553 42.932H124.679V46.0124H126.714C127.812 46.0124 128.641 45.5437 128.641 44.5117Z" fill="white"/>
                                    <path d="M138.79 38.2061V47.0418H137.572V42.9715H132.819V47.0418H131.6V38.2061H132.819V41.9421H137.572V38.2061H138.79Z" fill="white"/>
                                    <path d="M145.899 44.8487H142.19L141.373 47.0445H140.115L143.435 38.2088H144.654L147.974 47.0445H146.715L145.899 44.8487ZM145.525 43.843L144.333 40.6442C144.238 40.3888 144.146 40.0676 144.051 39.72H144.025C143.93 40.0676 143.838 40.3888 143.743 40.6442L142.563 43.843H145.523H145.525Z" fill="white"/>
                                    <path d="M59.2773 8.67127H66.7834V12.3256C68.084 9.67436 70.4877 8.07099 73.7893 8.07099C78.9443 8.07099 82.0457 11.5252 82.0457 18.0309V32.2927H74.4396V18.5811C74.4396 15.6297 73.3891 14.1264 70.8853 14.1264C68.3815 14.1264 66.8308 16.1774 66.8308 19.9317V32.2927H59.2747V8.67127H59.2773Z" fill="white"/>
                                    <path d="M108.619 22.4829V20.632C108.619 12.8758 104.267 8.12097 96.7079 8.12097C90.9921 8.12097 86.727 11.1408 85.1105 16.0088C84.6445 17.4068 84.397 18.9576 84.397 20.632C84.397 28.0881 89.0992 32.7929 96.858 32.7929C102.7 32.7929 106.112 30.6814 107.968 27.1824L102.276 24.3995C101.502 26.1214 99.9673 27.3878 97.1608 27.3878C94.0593 27.3878 92.0558 25.737 91.7556 22.4829H108.619ZM96.6079 13.376C99.5092 13.376 101.06 14.9768 101.213 18.1309H91.653C92.0531 15.0768 93.9066 13.376 96.6079 13.376Z" fill="white"/>
                                    <path d="M116.125 20.4319L108.569 8.67123H116.975L120.98 15.377L125.132 8.67123H132.19L124.531 19.8317L132.69 32.2927H124.231L119.729 24.8366L115.124 32.2927H107.968L116.125 20.4319Z" fill="white"/>
                                    <path d="M136.492 25.5369V14.0263H133.291V8.67117H136.492V4.01902L143.848 0.414719V8.67117H147.992V14.0263H143.798V25.1867C143.798 26.2372 144.348 26.7374 145.399 26.7374H148V32.2926H142.395C137.54 32.1425 136.489 29.6914 136.489 25.5369" fill="white"/>
                                    <path d="M20.9939 8.67123H28.7501L32.4545 22.4329L36.5063 8.67123H43.112L47.1165 22.4829L50.7208 8.67123H57.5266L50.0205 32.2927H43.5148L39.2602 17.4305L35.0557 32.2927H28.5L20.9939 8.67123Z" fill="white"/>
                                    <path d="M16.5314 32.2927L9.02527 8.67123H16.7841L24.2929 32.2927H16.5314Z" fill="white"/>
                                    <path d="M12.3004 17.994L7.75885 32.2927H0L3.11723 22.4829L12.3004 17.994Z" fill="white"/>
                                </svg>
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
                    <div class="col-lg-6 text-lg-start text-white">
                        <h1 class="hero_h1">India’s first OEM<br>for motorized awnings</h1>
                    </div>
                    <div class="col-lg-6">
                        <div class="banner-form mx-auto">
                            <div class="form-card bg-white">
                                <h2 class="mb-3 hero_h2 text-dark">Upgrade to Smart Awning Solutions</h2>
                                <h5 class="mb-4 hero_h4 text-dark">Smart, smooth, and silent—experience Awnext today!</h5>
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
                                    <!-- Button to trigger download action -->
                                    <div class="button-container pt-3">
                                        <button type="submit" name="submit" class="downloadBtn btn btn-primary">Download</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>


    <!-- /* Content Section */ -->
<section class="content-section" id="about">
    <div class="container desktop-cont">
        <div class="row align-items-center content_mobile">
            <!-- Left Side: Text Content -->
            <div class="col-lg-6 content-text">
                <h2 class="content_head">Motorised Awnings<br> built to last</h2>
                <img src="<?php echo get_template_directory_uri(); ?>/img/content_img.jpeg"
                    class="content_img mobile-only" width="100%" alt="Right Side Image">
                <p>Awnext by Prabha redefines outdoor luxury as the first organized player in motorized awnings with
                    nationwide distribution. Precision-engineered for durability, style, and effortless protection
                    against harsh weather.</p>
            </div>
            <!-- Right Side: Image -->
            <div class="col-lg-6 content-image">
                <img src="<?php echo get_template_directory_uri(); ?>/img/content_img.jpeg"
                    class="content_img desktop-only" alt="Right Side Image">
            </div>
        </div>
    </div>
</section>


    <!-- Features Section -->
    <section class="features " id="why">
        <div class="container">
            <h2 class="features_head text-left mb-5 text-dark">Why Awnext by Prabha?</h2>
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
                <img src="<?php echo get_template_directory_uri(); ?>/img/video.jpeg" alt="Video Thumbnail"
                    id="video-thumbnail" style="cursor: pointer; width: 100%; max-width: 800px;">

                <!-- Play Button (Over Thumbnail) -->
                <div id="play-button" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);
                            width: 80px; height: 80px; background: url('<?php echo get_template_directory_uri(); ?>/img/play-button.png') no-repeat center center;
                            background-size: contain; cursor: pointer;">
                </div>

                <!-- Hidden Video -->
                <video id="my-video" controls style="display: none; width: 100%; max-width: 800px;">
                    <source src="<?php echo get_template_directory_uri(); ?>/img/Awaning_main_video_v03.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats py-5" id="advantage">
        <div class="container">
            <h2 class="stats_head text-left">The Prabha Advantage</h2>
            <p class="lead mb-5 pt-4 stats_p text-left">Partnering with Prabha Engineering means decades of innovation,
                reliability, and a
                trusted ally for your success.</p>

            <!-- Row for Stats -->
            <div class="row text-left stat-row">
                <!-- Column 1 -->
                <div class="col-md-3 col-6 stat-box">
                    <div class="stat-item">
                        <div class="stat-number" data-target="400+">0</div>
                        <div class="stat-label">
                            <h5 class="stats_h5">Lifetime Customers</h5>
                        </div>
                    </div>
                </div>
                <!-- Column 2 -->
                <div class="col-md-3 col-6 stat-box">
                    <div class="stat-item">
                        <div class="stat-number" data-target="60+">0</div>
                        <div class="stat-label">
                            <h5 class="stats_h5">Years of experience<br>in innovations</h5>
                        </div>
                    </div>
                </div>
                <!-- Column 3 -->
                <div class="col-md-3 col-6 stat-box">
                    <div class="stat-item">
                        <div class="stat-number" data-target="200+">0</div>
                        <div class="stat-label">
                            <h5>Product Portfolio</h5>
                        </div>
                    </div>
                </div>
                <!-- Column 4 -->
                <div class="col-md-3 col-6 stat-box">
                    <div class="stat-item">
                        <div class="stat-number" data-target="87%">0</div>
                        <div class="stat-label">
                            <h5 class="stats_h5">Client Retention<br>Rate</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Download Section -->
    <section class="download py-5 gradient-primary text-white"
        style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/download_sec.jpeg'); background-size: cover; background-position: center;">
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="col-lg-6 col-md-12  text-lg-start mb-lg-0">
                    <h2 class="text-white display-5 mb-4 text-left download_text">Download our  <br> brochure to get <br>more insights</h2>
                </div>
                <div class="col-lg-6">
                    <div class="banner-form download-form mx-auto">
                        <div class="form-card bg-white">
                            <h2 class="mb-3 text-dark">Download our brochure</h2>
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
                                    <button type="submit" name="submit"  class="downloadBtn btn btn-primary">Download</button>
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
            <h2 class="text-center mb-3 pt-3 contact_head">Get in touch with us!</h2>
            <h4 class="text-center contact_h4 ">We should start the conversation</h4>

            <div class="text-center mb-5">
                <a href="tel:9226566851" class="btn btn-lg call-btn">Book a call with us!</a>
            </div>

            <hr class="my-3" style="background-color: white; border: none; height: 2px;">

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
                    <!-- Placeholder Image -->
                    <img src="img/map-placeholder.jpg" id="map-placeholder" alt="Map Loading..." width="100%" height="300">
                    
                    <!-- Google Map iframe (Initially hidden) -->
                    <iframe id="google-map"
                        src="" 
                        width="100%" height="300" 
                        style="border:0; display:none;"
                        allowfullscreen="" loading="lazy">
                    </iframe>
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
</body>

</html>