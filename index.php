<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rotary Club of Madurai</title>
    <link rel="stylesheet" href="style.css">
    <!-- Google Fonts for typography -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- FontAwesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
</head>
<body>

    <!-- Sticky Header -->
    <header class="main-header">
        <div class="header-container">
            <div class="logo">
                <img src="https://via.placeholder.com/250x80.png?text=Rotary+Logo" alt="Rotary Club of Madurai Logo" class="logo-img" style="height: 80px; object-fit: contain; background: white;">
            </div>
            <div class="header-right">
                <a href="tel:+919585399000" class="phone-link">
                    <i class="fa-solid fa-phone"></i> +91 9585399000
                </a>
                <button class="menu-btn">
                    <i class="fa-solid fa-grip"></i>
                </button>
            </div>
        </div>
    </header>

    <main>
        <!-- Section from Image 4: 1961 Visit -->
        <section class="history-gallery-section black-bg" style="padding: 20px 0;">
            <div class="container text-center">
                <div class="owl-carousel owl-theme history-carousel">
                    <div class="item position-relative">
                        <img src="assets/old-pic-2.jpg" alt="Installation Ceremony" class="full-width-img" style="max-height: 600px; width: 100%; object-fit: contain; margin: 0 auto;">
                    </div>
                </div>
            </div>
        </section>

        <!-- Section from Image 3: Welcome Section -->
        <section class="welcome-section section-padding dark-blue-bg">
            <style>
                .typing-text, .typed-cursor { color: var(--accent-gold, #c6a25b); }
            </style>
            <div class="container text-center">
                <h1 class="welcome-title" style="margin-bottom: 50px; line-height: 1.4;">Welcome to the <span class="typing-text"></span> Rotary Club of<br>Madurai–Since 1938</h1>
            </div>
            <div class="container welcome-container" style="align-items: flex-start; gap: 40px;">
                <div class="welcome-text" style="flex: 0 0 40%;">
                    <h2 class="subtitle">ROTARY CLUB OF MADURAI</h2>
                    <p class="description">
                        Established on 27th December 1938, the Rotary Club of Madurai is the city's first and oldest club.
                    </p>
                    <p class="description">
                        For over 85 years, we've served with integrity and compassion, upholding Rotary's motto, "Service Above Self," through impactful community projects and lasting fellowship.
                    </p>
                </div>
                <div class="welcome-image" style="flex: 0 0 60%;">
                    <div style="text-align: center; margin-bottom: 20px;">
                        <h3 style="color: #c6a25b; font-weight: 600; margin-bottom: 10px; font-size: 18px;">TEAM @ SILVER JUBILEE</h3>
                        <img src="assets/old-pic-2.jpg" alt="Historical Members" class="framed-img" style="width: 100%;">
                    </div>
                </div>
            </div>
        </section>

        <!-- Section from Image 2: Leadership Team -->
        <section class="leadership-section section-padding light-bg" style="padding-bottom: 0;">
            <div class="container">
                <h2 class="section-title text-center">Leadership Team 2025–2026</h2>
            </div>
            <div class="leadership-image-wrapper" style="width: 100%;">
                <img src="assets/rotary-madurai-banner-1-1-scaled.jpg" alt="Leadership Team" class="full-width-img shadow-img" style="width: 100%; display: block; object-fit: cover;">
            </div>
        </section>

        <!-- Section from Image 1: Team Cards & Service Highlights -->
        <section class="team-cards-section section-padding light-bg">
            <div class="container">
                <div class="cards-grid">
                    <!-- President Card -->
                    <div class="team-card">
                        <div class="card-img-wrapper">
                            <img src="https://via.placeholder.com/150" alt="President">
                        </div>
                        <div class="card-banner">
                            <h3>Rtn. M. Balasubramanyam</h3>
                            <p>as President</p>
                        </div>
                    </div>

                    <!-- Secretary Card -->
                    <div class="team-card">
                        <div class="card-img-wrapper">
                            <img src="https://via.placeholder.com/150" alt="Secretary">
                        </div>
                        <div class="card-banner">
                            <h3>Rtn. S. Selvakumar</h3>
                            <p>as Secretary</p>
                        </div>
                    </div>

                    <!-- Treasurer Card -->
                    <div class="team-card">
                        <div class="card-img-wrapper">
                            <img src="https://via.placeholder.com/150" alt="Treasurer">
                        </div>
                        <div class="card-banner">
                            <h3>Rtn. K. Aravind</h3>
                            <p>as Treasurer</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="services-section section-padding light-bg">
            <div class="container">
                <h2 class="section-title text-center">Service Highlights</h2>
                
                <div class="services-grid">
                    <div class="service-card">
                        <img src="https://via.placeholder.com/80x80.png" alt="Community Service" class="service-icon">
                        <div class="service-info">
                            <h3>Community Service</h3>
                            <p>Making a difference through local development, education, and support...</p>
                        </div>
                    </div>
                    
                    <div class="service-card">
                        <img src="https://via.placeholder.com/80x80.png" alt="Youth Programs" class="service-icon">
                        <div class="service-info">
                            <h3>Youth Programs:</h3>
                            <p>Run by specialist doctors with strong academic and clinical backgrounds...</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <!-- Scroll to top button -->
    <a href="#" class="scroll-top">
        <i class="fa-solid fa-chevron-up"></i>
    </a>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- Typed.js -->
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    
    <script>
        $(document).ready(function(){
            $(".history-carousel").owlCarousel({
                items: 1,
                loop: true,
                margin: 10,
                nav: false,
                dots: true,
                autoplay: true,
                autoplayTimeout: 4000,
                autoplayHoverPause: true,
                autoHeight: true
            });

            if ($('.typing-text').length) {
                var typed = new Typed('.typing-text', {
                    strings: ['First'],
                    typeSpeed: 100,
                    backSpeed: 50,
                    loop: true,
                    showCursor: true,
                    cursorChar: '|',
                });
            }
        });
    </script>
</body>
</html>
