<?php include('templates/header.php'); ?>
 <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 50%, #1e40af 100%);
            min-height: 100vh;
        }

        /* Header Styles */
        .header {
            background: #fff;
            padding: 15px 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .logo-icon {
            width: 45px;
            height: 45px;
            position: relative;
        }

        .logo-icon::before {
            content: 'D';
            font-size: 28px;
            font-weight: 700;
            color: #1e3a8a;
            position: absolute;
            left: 0;
        }

        .logo-icon::after {
            content: 'C';
            font-size: 28px;
            font-weight: 700;
            color: #3b82f6;
            position: absolute;
            left: 18px;
        }

        .logo-text {
            font-size: 26px;
            font-weight: 700;
            color: #1e3a8a;
            margin-left: 10px;
        }

        .logo-text span {
            font-size: 10px;
            color: #3b82f6;
            display: block;
            margin-top: -8px;
            letter-spacing: 3px;
        }

        .phone-number {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 18px;
            font-weight: 600;
            color: #1e3a8a;
        }

        .phone-number i {
            color: #3b82f6;
        }

        /* Main Content */
        .main-content {
            padding: 7rem 80px;
        }

        .thank-you-title {
            text-align: center;
            color: #ffffff;
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 50px;
        }

        @media (max-width: 768px) {
            .thank-you-title {
                font-size: 1.5rem;
                padding: 20px;
                margin-bottom: 30px;
            }
            .main-content{
                padding: 6rem 0 4rem;
            }
        }

        /* Cards */
        .service-card {
            background: #fff;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
            display: flex;
            flex-direction: column;
            padding:0rem;
            border:none;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
            background:#fff;
            color:none;
        }

        .card-image {
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .card-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }
        .service-card:hover p{
            color:#5b5b5b;
        }

        .service-card:hover .card-image img {
            transform: scale(1.05);
        }

        .card-content {
            padding: 25px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .card-title {
            font-size: 1.4rem;
            font-weight: 700;
            color: #000;
            margin-bottom: 15px;
        }

        .card-description {
            color: #6b7280;
            font-size: 0.95rem;
            line-height: 1.6;
            margin-bottom: 25px;
            flex-grow: 1;
        }

        .card-btn {
            display: block;
            width: 100%;
            padding: 15px 30px;
            background: linear-gradient(135deg, #3b82f6 0%, #1e40af 100%);
            color: #fff;
            text-align: center;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            font-size: 1rem;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }

        .card-btn:hover {
            background: linear-gradient(135deg, #1e40af 0%, #1e3a8a 100%);
            color: #fff;
            transform: scale(1.02);
            box-shadow: 0 5px 20px rgba(59, 130, 246, 0.4);
        }

        /* Placeholder images with gradients */
        .placeholder-img {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 4rem;
            color: #fff;
        }

        .placeholder-chat {
            background: linear-gradient(135deg, #e0e7ff 0%, #c7d2fe 100%);
        }

        .placeholder-pricing {
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
        }

        .placeholder-portfolio {
            background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%);
        }

        /* Chat support image placeholder */
        .chat-img-placeholder {
            background: linear-gradient(135deg, #e0e7ff 0%, #f0f4ff 100%);
            position: relative;
        }

        .chat-img-placeholder::before {
            content: '👨‍💼';
            font-size: 120px;
        }

        /* Pricing image placeholder */
        .pricing-img-placeholder {
            background: linear-gradient(135deg, #1e293b 0%, #334155 100%);
            position: relative;
            flex-direction: column;
            gap: 10px;
        }

        .pricing-cards-container {
            display: flex;
            gap: 15px;
            padding: 20px;
        }

        .mini-price-card {
            background: #fff;
            border-radius: 10px;
            padding: 15px;
            text-align: center;
            min-width: 120px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .mini-price-card.recommended {
            border: 2px solid #3b82f6;
            position: relative;
        }

        .mini-price-card.recommended::before {
            content: 'RECOMMENDED';
            position: absolute;
            top: -10px;
            left: 50%;
            transform: translateX(-50%);
            background: #3b82f6;
            color: #fff;
            font-size: 8px;
            padding: 3px 8px;
            border-radius: 10px;
        }

        .mini-plan-name {
            font-size: 10px;
            color: #6b7280;
            margin-bottom: 5px;
        }

        .mini-price {
            font-size: 24px;
            font-weight: 700;
            color: #1e3a8a;
        }

        .mini-features {
            font-size: 8px;
            color: #6b7280;
            margin-top: 8px;
            text-align: left;
        }

        .mini-features div {
            margin: 3px 0;
        }

        .mini-features i {
            color: #10b981;
            margin-right: 3px;
            font-size: 7px;
        }

        .mini-btn {
            background: #3b82f6;
            color: #fff;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 8px;
            margin-top: 10px;
        }

        /* Portfolio placeholder */
        .portfolio-img-placeholder {
            background: linear-gradient(135deg, #fef3c7 0%, #fde68a 50%, #fcd34d 100%);
            padding: 20px;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
        }

        .portfolio-item {
            background: #fff;
            border-radius: 8px;
            height: 80px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            font-weight: 600;
            color: #1e3a8a;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
            transform: rotate(-5deg);
        }

        .portfolio-item:nth-child(2) {
            transform: rotate(3deg);
            background: #8b5cf6;
            color: #fff;
        }

        .portfolio-item:nth-child(3) {
            transform: rotate(-2deg);
            background: #ef4444;
            color: #fff;
        }

        .portfolio-item:nth-child(4) {
            transform: rotate(5deg);
            background: #10b981;
            color: #fff;
        }

        .portfolio-item:nth-child(5) {
            transform: rotate(-3deg);
            background: #f59e0b;
            color: #fff;
        }

        .portfolio-item:nth-child(6) {
            transform: rotate(4deg);
            background: #3b82f6;
            color: #fff;
        }

        @media (max-width: 991px) {
            .service-card {
                margin-bottom: 30px;
            }
        }

        @media (max-width: 576px) {
            .phone-number {
                font-size: 14px;
            }

            .logo-text {
                font-size: 20px;
            }

            .card-image {
                height: 220px;
            }
        }
    </style>
<main class="main-content">
        <div class="container">
            <h1 class="thank-you-title">Thank You, How Would You Like To Proceed?</h1>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="card-image">
                            <img src="img/steps/chat.jpg" alt="Live Chat Support">
                        </div>
                        <div class="card-content">
                            <h3 class="card-title">Live Chat Support</h3>
                            <p class="card-description">Let's talk! Share your design requirements with one of our
                                designers to get a perfect logo that you envisioned for.</p>
                            <a href="javascript:void(0)" onclick="$zopim.livechat.window.toggle()" class="card-btn">Chat
                                With Us</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="card-image">
                            <img src="img/last-step3.webp" alt="Pricing Packages">
                        </div>
                        <div class="card-content">
                            <h3 class="card-title">Pricing Packages</h3>
                            <p class="card-description">Checkout our budget friendly packages & pricing plans tailor
                                made for startups & growing businesses of all sizes.</p>
                            <a href="pricing.php" class="card-btn">View Pricing</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="card-image">
                            <img src="img/steps/portfolio.jpg" alt="Creative Portfolio">
                        </div>
                        <div class="card-content">
                            <h3 class="card-title">Creative Portfolio</h3>
                            <p class="card-description">Checkout our amazing logo projects that we have designed for our
                                recent customers to give their brand an identity.</p>
                            <a href="portfolio.php" class="card-btn">Visit Portfolio</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>
<?php include('templates/footer.php'); ?>
