<?php include('templates/header.php'); ?>
<style>
    .hero-text{
        max-width: none;
    }
    .badge-pill{
        margin: auto;
        display: flex;
        width: fit-content;
    }
    .hero {
      min-height: 100vh !important;
      display: flex;
      align-items: center;
      position: relative;
      color: #ffffff;
    }
    
    /* Video wraps full section */
    .hero-video-wrapper {
      position: absolute;
      inset: 0;
      width: 100%;
      height: 100%;
      overflow: hidden;
      z-index: 1;
    }
    
    /* Actual video */
    .hero-video {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    
    /* Black overlay on top of video */
    .hero-overlay {
      position: absolute;
      inset: 0;
      background: rgba(0, 0, 0, 0.55); /* opacity adjust here */
      z-index: 2;
    }
    
    /* Content stays above video + overlay */
    .hero-content {
      position: relative;
      width: 50%;
    height: 100%;
    margin: auto;
    background: rgba(0, 0, 0, .3) none repeat scroll 0 0;
    padding: 2rem;
    border-radius: 2rem;
    z-index: 9;
    }
    .fieldButton{
        background: #196BFF;
        color: #fff;
    }
    .fieldButton:hover{
        background: #ffb400;
        color: #000;
    }
    
    /* Optional: center text on smaller screens if needed */
    @media (max-width: 767.98px) {
      .hero-content {
        padding: 4rem 0 3rem;
      }
    }

</style>
<!-- HERO -->
<section id="home" class="hero position-relative overflow-hidden">
  
  <!-- Background Video -->
  <div class="hero-video-wrapper">
    <video class="hero-video" autoplay muted loop playsinline>
      <!-- apni video ka path yahan do -->
      <source src="img/banner-video.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
  </div>

  <!-- Black Overlay -->
  <div class="hero-overlay"></div>

  <!-- Content -->
  <div class="hero-content position-relative">
    <div class="container">
      <div class="row align-items-center gy-4 justify-content-center">
        <div class="col-lg-12 text-center">

          <div class="badge-pill mb-3">Is it logo design you’re looking for?</div>

          <h1 class="hero-title">
            Online <span>Logo Maker</span> & <span>Custom Design Services</span>.
          </h1>

          <p class="hero-text mb-4">
            Get a Custom Logo Made in 03:00 minutes. Try Now
          </p>

          <form
            action="web-step.php"
            method="get"
            class="hero-cta d-flex flex-wrap align-items-center gap-2 position-relative mainfeild justify-content-center mx-auto"
          >
            <input
              type="text"
              name="business_name"
              placeholder="Enter Your Business Name"
              id="business_name"
              class="field"
            />

            <button type="submit" class="btn btn-outline-light fieldButton">
              Get's started
            </button>
          </form>

          <!--<div class="hero-badge-row mt-4">
            <span class="hero-badge">Logo & branding packages</span>
            <span class="hero-badge">Responsive web design</span>
            <span class="hero-badge">Social media creatives</span>
          </div>-->

        </div>
      </div>
    </div>
  </div>
</section>
<!-- ABOUT -->
<section id="about">
    <div class="container">
      <div class="row align-items-center gy-4">
        <div class="col-lg-6">
          <p class="section-eyebrow left">About the Brand</p>
          <h2 class="section-title">We Bring <span class="blue">Brands</span> into the <span class="blue">Digital World</span>.</h2>
          <p class="mb-3">
            DesignCentura builds strong visual identities—combining logo design, brand systems and digital experiences—so you can show up online with clarity and consistency.
          </p>
          <p class="mb-3">
            We help startups and established businesses build unique brand identities that attract loyal customers and elevate digital presence. Every touchpoint is crafted with strategy, purpose and modern design. Fast turnarounds with structured revision cycles.
          </p>
          <ul class="ps-3 mb-3 checkUl">
            <li>Dedicated project managers & creative team.</li>
            <li>Packages for logos, branding, websites & social media.</li>
            <li>Fast turnarounds with structured revision cycles.</li>
          </ul>
          <a href="#contact" class="btn contact-submit-btn">
            Discuss a project
          </a>
        </div>
        <div class="col-lg-6 text-center text-lg-end">
          <img
            src="img/about-side-2.webp"
            alt="Brand identity mockup"
            class="img-fluid"
          />
        </div>
      </div>
    </div>
  </section>
<!-- SERVICES -->
<section id="services">
    <div class="container">
      <div class="text-center mb-5 w-75 mx-auto">
        <p class="section-eyebrow">What we offer</p>
        <h2 class="section-title">Services <span class="blue">Tailored</span> For Your <span class="blue">Brand</span>.</h2>
        <p class="section-subtitle">
          Inspired by agencies like DesignCentura, we cover everything from concept sketches
          to launch-ready digital assets, keeping your brand design under one roof.
        </p>
      </div>
      <div class="row g-4">
        <div class="col-md-6 col-lg-3">
          <div class="service-card">
            <div class="service-number">01.</div>
            <h3 class="service-title">Logo Design</h3>
            <p>
             Impact‑driven logo concepts designed to help your business stand out. Clean vector marks, modern styles, and clear usage guidelines.
            </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="service-card active">
            <div class="service-number">02.</div>
            <h3 class="service-title">Brand Identity</h3>
            <p>
              Brand systems built for consistency—color palettes, typography and stationery templates to keep everything cohesive.
            </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="service-card">
            <div class="service-number">03.</div>
            <h3 class="service-title">Website Design</h3>
            <p>
              Responsive websites built for credibility, SEO and conversions. Designed for clarity, mobile‑friendly browsing and strong engagement.
            </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="service-card active">
            <div class="service-number">04.</div>
            <h3 class="service-title">Social & Digital</h3>
            <p>
              Social media posts, ads and digital creatives that represent your brand consistently across channels.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- PORTFOLIO -->
<section id="portfolio">
    <div class="container">
      <div class="text-center mb-4">
        <p class="section-eyebrow">Our work</p>
        <h2 class="section-title">Featured <span class="blue">Portfolio</span></h2>
        <p class="section-subtitle">
          A curated selection of logos, branding and website projects created by DesignCentura.
        </p>
      </div>

      <!-- FILTER TABS -->
      <div class="text-center mb-4">
        <div class="pricing-toggle portfolio-toggle">
          <button type="button" data-category="all">All</button>
          <button type="button" data-category="logo" class="active">Logo</button>
          <button type="button" data-category="branding">Branding</button>
          <button type="button" data-category="web">Web</button>
          <button type="button" data-category="animated logo">Animated Logo</button>
        </div>
      </div>

<!-- GRID (9 items, 3x3 – har tab me filter se 6 tak dikhao if needed) -->
<div class="row g-4 portfolio-grid">
<!-- Logo -->

<div class="col-md-6 col-lg-4 portfolio-item" data-category="logo" data-portfolio-item>
    <div class="portfolio-card js-portfolio-card" data-img="img/logo/10.webp">
        <img src="img/logo/10.webp" alt="Logo Design 03" />
        <div class="portfolio-meta">
            <div>
                <strong>Bold Wordmark</strong><br />
                <span>Logo Design</span>
            </div>
            <span>Logo</span>
        </div>
    </div>
</div>
<div class="col-md-6 col-lg-4 portfolio-item" data-category="logo" data-portfolio-item>
    <div class="portfolio-card js-portfolio-card" data-img="img/logo/11.webp">
        <img src="img/logo/11.webp" alt="Logo Design 03" />
        <div class="portfolio-meta">
            <div>
                <strong>Bold Wordmark</strong><br />
                <span>Logo Design</span>
            </div>
            <span>Logo</span>
        </div>
    </div>
</div>
<div class="col-md-6 col-lg-4 portfolio-item" data-category="logo" data-portfolio-item>
    <div class="portfolio-card js-portfolio-card" data-img="img/logo/12.webp">
        <img src="img/logo/12.webp" alt="Logo Design 03" />
        <div class="portfolio-meta">
            <div>
                <strong>Bold Wordmark</strong><br />
                <span>Logo Design</span>
            </div>
            <span>Logo</span>
        </div>
    </div>
</div>
<div class="col-md-6 col-lg-4 portfolio-item" data-category="logo" data-portfolio-item>
    <div class="portfolio-card js-portfolio-card" data-img="img/logo/13.webp">
        <img src="img/logo/13.webp" alt="Logo Design 03" />
        <div class="portfolio-meta">
            <div>
                <strong>Bold Wordmark</strong><br />
                <span>Logo Design</span>
            </div>
            <span>Logo</span>
        </div>
    </div>
</div>
<div class="col-md-6 col-lg-4 portfolio-item" data-category="logo" data-portfolio-item>
    <div class="portfolio-card js-portfolio-card" data-img="img/logo/14.webp">
        <img src="img/logo/14.webp" alt="Logo Design 03" />
        <div class="portfolio-meta">
            <div>
                <strong>Bold Wordmark</strong><br />
                <span>Logo Design</span>
            </div>
            <span>Logo</span>
        </div>
    </div>
</div>
<div class="col-md-6 col-lg-4 portfolio-item" data-category="logo" data-portfolio-item>
    <div class="portfolio-card js-portfolio-card" data-img="img/logo/15.webp">
        <img src="img/logo/15.webp" alt="Logo Design 03" />
        <div class="portfolio-meta">
            <div>
                <strong>Bold Wordmark</strong><br />
                <span>Logo Design</span>
            </div>
            <span>Logo</span>
        </div>
    </div>
</div>
<div class="col-md-6 col-lg-4 portfolio-item" data-category="logo" data-portfolio-item>
    <div class="portfolio-card js-portfolio-card" data-img="img/logo/16.webp">
        <img src="img/logo/16.webp" alt="Logo Design 03" />
        <div class="portfolio-meta">
            <div>
                <strong>Bold Wordmark</strong><br />
                <span>Logo Design</span>
            </div>
            <span>Logo</span>
        </div>
    </div>
</div>
<div class="col-md-6 col-lg-4 portfolio-item" data-category="logo" data-portfolio-item>
    <div class="portfolio-card js-portfolio-card" data-img="img/logo/17.webp">
        <img src="img/logo/17.webp" alt="Logo Design 03" />
        <div class="portfolio-meta">
            <div>
                <strong>Bold Wordmark</strong><br />
                <span>Logo Design</span>
            </div>
            <span>Logo</span>
        </div>
    </div>
</div>
<div class="col-md-6 col-lg-4 portfolio-item" data-category="logo" data-portfolio-item>
    <div class="portfolio-card js-portfolio-card" data-img="img/logo/18.webp">
        <img src="img/logo/18.webp" alt="Logo Design 03" />
        <div class="portfolio-meta">
            <div>
                <strong>Bold Wordmark</strong><br />
                <span>Logo Design</span>
            </div>
            <span>Logo</span>
        </div>
    </div>
</div>
<div class="col-md-6 col-lg-4 portfolio-item" data-category="logo" data-portfolio-item>
    <div class="portfolio-card js-portfolio-card" data-img="img/logo/19.webp">
        <img src="img/logo/19.webp" alt="Logo Design 03" />
        <div class="portfolio-meta">
            <div>
                <strong>Bold Wordmark</strong><br />
                <span>Logo Design</span>
            </div>
            <span>Logo</span>
        </div>
    </div>
</div>
<div class="col-md-6 col-lg-4 portfolio-item" data-category="logo" data-portfolio-item>
    <div class="portfolio-card js-portfolio-card" data-img="img/logo/20.webp">
        <img src="img/logo/20.webp" alt="Logo Design 03" />
        <div class="portfolio-meta">
            <div>
                <strong>Bold Wordmark</strong><br />
                <span>Logo Design</span>
            </div>
            <span>Logo</span>
        </div>
    </div>
</div>
<div class="col-md-6 col-lg-4 portfolio-item" data-category="logo" data-portfolio-item>
    <div class="portfolio-card js-portfolio-card" data-img="img/logo/21.webp">
        <img src="img/logo/21.webp" alt="Logo Design 03" />
        <div class="portfolio-meta">
            <div>
                <strong>Bold Wordmark</strong><br />
                <span>Logo Design</span>
            </div>
            <span>Logo</span>
        </div>
    </div>
</div>
<div class="col-md-6 col-lg-4 portfolio-item" data-category="logo" data-portfolio-item>
    <div class="portfolio-card js-portfolio-card" data-img="img/logo/22.webp">
        <img src="img/logo/22.webp" alt="Logo Design 03" />
        <div class="portfolio-meta">
            <div>
                <strong>Bold Wordmark</strong><br />
                <span>Logo Design</span>
            </div>
            <span>Logo</span>
        </div>
    </div>
</div>
<div class="col-md-6 col-lg-4 portfolio-item" data-category="logo" data-portfolio-item>
          <div
            class="portfolio-card js-portfolio-card"
            data-img="img/logo/logo-01.jpg"
          >
            <img
              src="img/logo/logo-01.jpg"
              alt="Logo Design 01"
            />
            <div class="portfolio-meta">
              <div>
                <strong>Minimal Mark</strong><br />
                <span>Logo Design</span>
              </div>
              <span>Logo</span>
            </div>
          </div>
        </div>
<div class="col-md-6 col-lg-4 portfolio-item" data-category="logo" data-portfolio-item>
          <div
            class="portfolio-card js-portfolio-card"
            data-img="img/logo/logo-02.jpg"
          >
            <img
              src="img/logo/logo-02.jpg"
              alt="Logo Design 02"
            />
            <div class="portfolio-meta">
              <div>
                <strong>Circle Emblem</strong><br />
                <span>Logo Design</span>
              </div>
              <span>Logo</span>
            </div>
          </div>
        </div>
<div class="col-md-6 col-lg-4 portfolio-item" data-category="logo" data-portfolio-item>
          <div
            class="portfolio-card js-portfolio-card"
            data-img="img/logo/logo-03.jpg"
          >
            <img
              src="img/logo/logo-03.jpg"
              alt="Logo Design 03"
            />
            <div class="portfolio-meta">
              <div>
                <strong>Bold Wordmark</strong><br />
                <span>Logo Design</span>
              </div>
              <span>Logo</span>
            </div>
          </div>
        </div>
<div class="col-md-6 col-lg-4 portfolio-item" data-category="logo" data-portfolio-item>
          <div
            class="portfolio-card js-portfolio-card"
            data-img="img/logo/logo-04.jpg"
          >
            <img
              src="img/logo/logo-04.jpg"
              alt="Logo Design 03"
            />
            <div class="portfolio-meta">
              <div>
                <strong>Bold Wordmark</strong><br />
                <span>Logo Design</span>
              </div>
              <span>Logo</span>
            </div>
          </div>
        </div>
<div class="col-md-6 col-lg-4 portfolio-item" data-category="logo" data-portfolio-item>
          <div
            class="portfolio-card js-portfolio-card"
            data-img="img/logo/logo-05.jpg"
          >
            <img
              src="img/logo/logo-05.jpg"
              alt="Logo Design 03"
            />
            <div class="portfolio-meta">
              <div>
                <strong>Bold Wordmark</strong><br />
                <span>Logo Design</span>
              </div>
              <span>Logo</span>
            </div>
          </div>
        </div>
<div class="col-md-6 col-lg-4 portfolio-item" data-category="logo" data-portfolio-item>
          <div
            class="portfolio-card js-portfolio-card"
            data-img="img/logo/logo-06.jpg"
          >
            <img
              src="img/logo/logo-06.jpg"
              alt="Logo Design 03"
            />
            <div class="portfolio-meta">
              <div>
                <strong>Bold Wordmark</strong><br />
                <span>Logo Design</span>
              </div>
              <span>Logo</span>
            </div>
          </div>
        </div>
<div class="col-md-6 col-lg-4 portfolio-item" data-category="logo" data-portfolio-item>
          <div
            class="portfolio-card js-portfolio-card"
            data-img="img/logo/logo-07.jpg"
          >
            <img
              src="img/logo/logo-07.jpg"
              alt="Logo Design 03"
            />
            <div class="portfolio-meta">
              <div>
                <strong>Bold Wordmark</strong><br />
                <span>Logo Design</span>
              </div>
              <span>Logo</span>
            </div>
          </div>
        </div>
<div class="col-md-6 col-lg-4 portfolio-item" data-category="logo" data-portfolio-item>
          <div
            class="portfolio-card js-portfolio-card"
            data-img="img/logo/logo-08.jpg"
          >
            <img
              src="img/logo/logo-08.jpg"
              alt="Logo Design 03"
            />
            <div class="portfolio-meta">
              <div>
                <strong>Bold Wordmark</strong><br />
                <span>Logo Design</span>
              </div>
              <span>Logo</span>
            </div>
          </div>
        </div>
<div class="col-md-6 col-lg-4 portfolio-item" data-category="logo" data-portfolio-item>
          <div
            class="portfolio-card js-portfolio-card"
            data-img="img/logo/logo-09.jpg"
          >
            <img
              src="img/logo/logo-09.jpg"
              alt="Logo Design 03"
            />
            <div class="portfolio-meta">
              <div>
                <strong>Bold Wordmark</strong><br />
                <span>Logo Design</span>
              </div>
              <span>Logo</span>
            </div>
          </div>
        </div>
<div class="col-md-6 col-lg-4 portfolio-item" data-category="logo" data-portfolio-item>
    <div class="portfolio-card js-portfolio-card" data-img="img/logo/1.webp">
        <img src="img/logo/1.webp" alt="Logo Design 03" />
        <div class="portfolio-meta">
            <div>
                <strong>Bold Wordmark</strong><br />
                <span>Logo Design</span>
            </div>
            <span>Logo</span>
        </div>
    </div>
</div>
<div class="col-md-6 col-lg-4 portfolio-item" data-category="logo" data-portfolio-item>
    <div class="portfolio-card js-portfolio-card" data-img="img/logo/2.webp">
        <img src="img/logo/2.webp" alt="Logo Design 03" />
        <div class="portfolio-meta">
            <div>
                <strong>Bold Wordmark</strong><br />
                <span>Logo Design</span>
            </div>
            <span>Logo</span>
        </div>
    </div>
</div>
<div class="col-md-6 col-lg-4 portfolio-item" data-category="logo" data-portfolio-item>
    <div class="portfolio-card js-portfolio-card" data-img="img/logo/3.webp">
        <img src="img/logo/3.webp" alt="Logo Design 03" />
        <div class="portfolio-meta">
            <div>
                <strong>Bold Wordmark</strong><br />
                <span>Logo Design</span>
            </div>
            <span>Logo</span>
        </div>
    </div>
</div>
<div class="col-md-6 col-lg-4 portfolio-item" data-category="logo" data-portfolio-item>
    <div class="portfolio-card js-portfolio-card" data-img="img/logo/4.webp">
        <img src="img/logo/4.webp" alt="Logo Design 03" />
        <div class="portfolio-meta">
            <div>
                <strong>Bold Wordmark</strong><br />
                <span>Logo Design</span>
            </div>
            <span>Logo</span>
        </div>
    </div>
</div>
<div class="col-md-6 col-lg-4 portfolio-item" data-category="logo" data-portfolio-item>
    <div class="portfolio-card js-portfolio-card" data-img="img/logo/5.webp">
        <img src="img/logo/5.webp" alt="Logo Design 03" />
        <div class="portfolio-meta">
            <div>
                <strong>Bold Wordmark</strong><br />
                <span>Logo Design</span>
            </div>
            <span>Logo</span>
        </div>
    </div>
</div>
<div class="col-md-6 col-lg-4 portfolio-item" data-category="logo" data-portfolio-item>
    <div class="portfolio-card js-portfolio-card" data-img="img/logo/6.webp">
        <img src="img/logo/6.webp" alt="Logo Design 03" />
        <div class="portfolio-meta">
            <div>
                <strong>Bold Wordmark</strong><br />
                <span>Logo Design</span>
            </div>
            <span>Logo</span>
        </div>
    </div>
</div>
<div class="col-md-6 col-lg-4 portfolio-item" data-category="logo" data-portfolio-item>
    <div class="portfolio-card js-portfolio-card" data-img="img/logo/7.webp">
        <img src="img/logo/7.webp" alt="Logo Design 03" />
        <div class="portfolio-meta">
            <div>
                <strong>Bold Wordmark</strong><br />
                <span>Logo Design</span>
            </div>
            <span>Logo</span>
        </div>
    </div>
</div>
<div class="col-md-6 col-lg-4 portfolio-item" data-category="logo" data-portfolio-item>
    <div class="portfolio-card js-portfolio-card" data-img="img/logo/8.webp">
        <img src="img/logo/8.webp" alt="Logo Design 03" />
        <div class="portfolio-meta">
            <div>
                <strong>Bold Wordmark</strong><br />
                <span>Logo Design</span>
            </div>
            <span>Logo</span>
        </div>
    </div>
</div>
<!-- BRANDING 1 -->
<div class="col-md-6 col-lg-4 portfolio-item" data-category="branding" data-portfolio-item>
          <div
            class="portfolio-card js-portfolio-card"
            data-img="img/branding/10.webp"
          >
            <img
              src="img/branding/10.webp"
              alt="Branding 01"
            />
            <div class="portfolio-meta">
              <div>
                <strong>Stationery Set</strong><br />
                <span>Brand Identity Kit</span>
              </div>
              <span>Branding</span>
            </div>
          </div>
        </div>
<div class="col-md-6 col-lg-4 portfolio-item" data-category="branding" data-portfolio-item>
          <div
            class="portfolio-card js-portfolio-card"
            data-img="img/branding/11.webp"
          >
            <img
              src="img/branding/11.webp"
              alt="Branding 01"
            />
            <div class="portfolio-meta">
              <div>
                <strong>Stationery Set</strong><br />
                <span>Brand Identity Kit</span>
              </div>
              <span>Branding</span>
            </div>
          </div>
        </div>
<div class="col-md-6 col-lg-4 portfolio-item" data-category="branding" data-portfolio-item>
          <div
            class="portfolio-card js-portfolio-card"
            data-img="img/branding/12.webp"
          >
            <img
              src="img/branding/12.webp"
              alt="Branding 01"
            />
            <div class="portfolio-meta">
              <div>
                <strong>Stationery Set</strong><br />
                <span>Brand Identity Kit</span>
              </div>
              <span>Branding</span>
            </div>
          </div>
        </div>
<div class="col-md-6 col-lg-4 portfolio-item" data-category="branding" data-portfolio-item>
          <div
            class="portfolio-card js-portfolio-card"
            data-img="img/branding/1.webp"
          >
            <img
              src="img/branding/1.webp"
              alt="Branding 01"
            />
            <div class="portfolio-meta">
              <div>
                <strong>Stationery Set</strong><br />
                <span>Brand Identity Kit</span>
              </div>
              <span>Branding</span>
            </div>
          </div>
        </div>
<div class="col-md-6 col-lg-4 portfolio-item" data-category="branding" data-portfolio-item>
          <div
            class="portfolio-card js-portfolio-card"
            data-img="img/branding/2.webp"
          >
            <img
              src="img/branding/2.webp"
              alt="Branding 01"
            />
            <div class="portfolio-meta">
              <div>
                <strong>Stationery Set</strong><br />
                <span>Brand Identity Kit</span>
              </div>
              <span>Branding</span>
            </div>
          </div>
          </div>
<div class="col-md-6 col-lg-4 portfolio-item" data-category="branding" data-portfolio-item>
          <div
            class="portfolio-card js-portfolio-card"
            data-img="img/branding/3.webp"
          >
            <img
              src="img/branding/3.webp"
              alt="Branding 01"
            />
            <div class="portfolio-meta">
              <div>
                <strong>Stationery Set</strong><br />
                <span>Brand Identity Kit</span>
              </div>
              <span>Branding</span>
            </div>
          </div>
        </div>
<div class="col-md-6 col-lg-4 portfolio-item" data-category="branding" data-portfolio-item>
          <div
            class="portfolio-card js-portfolio-card"
            data-img="img/branding/4.webp"
          >
            <img
              src="img/branding/4.webp"
              alt="Branding 01"
            />
            <div class="portfolio-meta">
              <div>
                <strong>Stationery Set</strong><br />
                <span>Brand Identity Kit</span>
              </div>
              <span>Branding</span>
            </div>
          </div>
        </div>
<div class="col-md-6 col-lg-4 portfolio-item" data-category="branding" data-portfolio-item>
          <div
            class="portfolio-card js-portfolio-card"
            data-img="img/branding/5.webp"
          >
            <img
              src="img/branding/5.webp"
              alt="Branding 01"
            />
            <div class="portfolio-meta">
              <div>
                <strong>Stationery Set</strong><br />
                <span>Brand Identity Kit</span>
              </div>
              <span>Branding</span>
            </div>
          </div>
        </div>
<div class="col-md-6 col-lg-4 portfolio-item" data-category="branding" data-portfolio-item>
          <div
            class="portfolio-card js-portfolio-card"
            data-img="img/branding/6.webp"
          >
            <img
              src="img/branding/6.webp"
              alt="Branding 01"
            />
            <div class="portfolio-meta">
              <div>
                <strong>Stationery Set</strong><br />
                <span>Brand Identity Kit</span>
              </div>
              <span>Branding</span>
            </div>
          </div>
        </div>
<div class="col-md-6 col-lg-4 portfolio-item" data-category="branding" data-portfolio-item>
          <div
            class="portfolio-card js-portfolio-card"
            data-img="img/branding/7.webp"
          >
            <img
              src="img/branding/7.webp"
              alt="Branding 01"
            />
            <div class="portfolio-meta">
              <div>
                <strong>Stationery Set</strong><br />
                <span>Brand Identity Kit</span>
              </div>
              <span>Branding</span>
            </div>
          </div>
        </div>
<div class="col-md-6 col-lg-4 portfolio-item" data-category="branding" data-portfolio-item>
          <div
            class="portfolio-card js-portfolio-card"
            data-img="img/branding/8.webp"
          >
            <img
              src="img/branding/8.webp"
              alt="Branding 01"
            />
            <div class="portfolio-meta">
              <div>
                <strong>Stationery Set</strong><br />
                <span>Brand Identity Kit</span>
              </div>
              <span>Branding</span>
            </div>
          </div>
        </div>
<div class="col-md-6 col-lg-4 portfolio-item" data-category="branding" data-portfolio-item>
          <div
            class="portfolio-card js-portfolio-card"
            data-img="img/branding/9.webp"
          >
            <img
              src="img/branding/9.webp"
              alt="Branding 01"
            />
            <div class="portfolio-meta">
              <div>
                <strong>Stationery Set</strong><br />
                <span>Brand Identity Kit</span>
              </div>
              <span>Branding</span>
            </div>
          </div>
        </div>
<div class="col-md-6 col-lg-4 portfolio-item" data-category="branding" data-portfolio-item>
          <div
            class="portfolio-card js-portfolio-card"
            data-img="img/branding/13.webp"
          >
            <img
              src="img/branding/13.webp"
              alt="Branding 01"
            />
            <div class="portfolio-meta">
              <div>
                <strong>Stationery Set</strong><br />
                <span>Brand Identity Kit</span>
              </div>
              <span>Branding</span>
            </div>
          </div>
        </div>
<div class="col-md-6 col-lg-4 portfolio-item" data-category="branding" data-portfolio-item>
          <div
            class="portfolio-card js-portfolio-card"
            data-img="img/branding/14.webp"
          >
            <img
              src="img/branding/14.webp"
              alt="Branding 01"
            />
            <div class="portfolio-meta">
              <div>
                <strong>Stationery Set</strong><br />
                <span>Brand Identity Kit</span>
              </div>
              <span>Branding</span>
            </div>
          </div>
        </div>
<div class="col-md-6 col-lg-4 portfolio-item" data-category="branding" data-portfolio-item>
          <div
            class="portfolio-card js-portfolio-card"
            data-img="img/branding/15.webp"
          >
            <img
              src="img/branding/15.webp"
              alt="Branding 01"
            />
            <div class="portfolio-meta">
              <div>
                <strong>Stationery Set</strong><br />
                <span>Brand Identity Kit</span>
              </div>
              <span>Branding</span>
            </div>
          </div>
        </div>
<div class="col-md-6 col-lg-4 portfolio-item" data-category="branding" data-portfolio-item>
          <div
            class="portfolio-card js-portfolio-card"
            data-img="img/branding/16.webp"
          >
            <img
              src="img/branding/16.webp"
              alt="Branding 01"
            />
            <div class="portfolio-meta">
              <div>
                <strong>Stationery Set</strong><br />
                <span>Brand Identity Kit</span>
              </div>
              <span>Branding</span>
            </div>
          </div>
        </div>
<div class="col-md-6 col-lg-4 portfolio-item" data-category="branding" data-portfolio-item>
          <div
            class="portfolio-card js-portfolio-card"
            data-img="img/branding/17.webp"
          >
            <img
              src="img/branding/17.webp"
              alt="Branding 01"
            />
            <div class="portfolio-meta">
              <div>
                <strong>Stationery Set</strong><br />
                <span>Brand Identity Kit</span>
              </div>
              <span>Branding</span>
            </div>
          </div>
        </div>
<div class="col-md-6 col-lg-4 portfolio-item" data-category="branding" data-portfolio-item>
          <div
            class="portfolio-card js-portfolio-card"
            data-img="img/branding/18.webp"
          >
            <img
              src="img/branding/18.webp"
              alt="Branding 01"
            />
            <div class="portfolio-meta">
              <div>
                <strong>Stationery Set</strong><br />
                <span>Brand Identity Kit</span>
              </div>
              <span>Branding</span>
            </div>
          </div>
        </div>
<!-- WEB 1 -->
<div class="col-md-6 col-lg-4 portfolio-item" data-category="web" data-portfolio-item>
          <div
            class="portfolio-card js-portfolio-card"
            data-img="img/web/1.webp"
          >
            <img
              src="img/web/1.webp"
              alt="Website 01"
            />
            <div class="portfolio-meta">
              <div>
                <strong>Agora Sneakers</strong><br />
                <span>E-commerce hero layout</span>
              </div>
              <span>Web</span>
            </div>
          </div>
        </div>
<div class="col-md-6 col-lg-4 portfolio-item" data-category="web" data-portfolio-item>
          <div
            class="portfolio-card js-portfolio-card"
            data-img="img/web/2.webp"
          >
            <img
              src="img/web/2.webp"
              alt="Website 01"
            />
            <div class="portfolio-meta">
              <div>
                <strong>Agora Sneakers</strong><br />
                <span>E-commerce hero layout</span>
              </div>
              <span>Web</span>
            </div>
          </div>
        </div>
<div class="col-md-6 col-lg-4 portfolio-item" data-category="web" data-portfolio-item>
          <div
            class="portfolio-card js-portfolio-card"
            data-img="img/web/3.webp"
          >
            <img
              src="img/web/3.webp"
              alt="Website 01"
            />
            <div class="portfolio-meta">
              <div>
                <strong>Agora Sneakers</strong><br />
                <span>E-commerce hero layout</span>
              </div>
              <span>Web</span>
            </div>
          </div>
        </div>
<div class="col-md-6 col-lg-4 portfolio-item" data-category="web" data-portfolio-item>
          <div
            class="portfolio-card js-portfolio-card"
            data-img="img/web/4.webp"
          >
            <img
              src="img/web/4.webp"
              alt="Website 01"
            />
            <div class="portfolio-meta">
              <div>
                <strong>Agora Sneakers</strong><br />
                <span>E-commerce hero layout</span>
              </div>
              <span>Web</span>
            </div>
          </div>
        </div>
<div class="col-md-6 col-lg-4 portfolio-item" data-category="web" data-portfolio-item>
          <div
            class="portfolio-card js-portfolio-card"
            data-img="img/web/5.webp"
          >
            <img
              src="img/web/5.webp"
              alt="Website 01"
            />
            <div class="portfolio-meta">
              <div>
                <strong>Agora Sneakers</strong><br />
                <span>E-commerce hero layout</span>
              </div>
              <span>Web</span>
            </div>
          </div>
        </div>
<div class="col-md-6 col-lg-4 portfolio-item" data-category="web" data-portfolio-item>
          <div
            class="portfolio-card js-portfolio-card"
            data-img="img/web/6.webp"
          >
            <img
              src="img/web/6.webp"
              alt="Website 01"
            />
            <div class="portfolio-meta">
              <div>
                <strong>Agora Sneakers</strong><br />
                <span>E-commerce hero layout</span>
              </div>
              <span>Web</span>
            </div>
          </div>
        </div>
<div class="col-md-6 col-lg-4 portfolio-item" data-category="web" data-portfolio-item>
          <div
            class="portfolio-card js-portfolio-card"
            data-img="img/web/7.webp"
          >
            <img
              src="img/web/7.webp"
              alt="Website 01"
            />
            <div class="portfolio-meta">
              <div>
                <strong>Agora Sneakers</strong><br />
                <span>E-commerce hero layout</span>
              </div>
              <span>Web</span>
            </div>
          </div>
        </div>
<div class="col-md-6 col-lg-4 portfolio-item" data-category="web" data-portfolio-item>
          <div
            class="portfolio-card js-portfolio-card"
            data-img="img/web/8.webp"
          >
            <img
              src="img/web/8.webp"
              alt="Website 01"
            />
            <div class="portfolio-meta">
              <div>
                <strong>Agora Sneakers</strong><br />
                <span>E-commerce hero layout</span>
              </div>
              <span>Web</span>
            </div>
          </div>
        </div>
<!-- Animated -->        
<div class="col-md-6 col-lg-4 portfolio-item" data-category="animated logo" data-portfolio-item>
    <div class="portfolio-card js-portfolio-card" data-img="img/animated_logo/gif1.gif">
        <img src="img/animated_logo/gif1.gif" alt="Website 01" />
        <div class="portfolio-meta">
            <div>
                <strong>Agora Sneakers</strong><br />
                <span>E-commerce hero layout</span>
            </div>
            <span>Web</span>
        </div>
    </div>
</div>
<div class="col-md-6 col-lg-4 portfolio-item" data-category="animated logo" data-portfolio-item>
    <div class="portfolio-card js-portfolio-card" data-img="img/animated_logo/gif2.gif">
        <img src="img/animated_logo/gif2.gif" alt="Website 01" />
        <div class="portfolio-meta">
            <div>
                <strong>Agora Sneakers</strong><br />
                <span>E-commerce hero layout</span>
            </div>
            <span>Web</span>
        </div>
    </div>
</div>
<div class="col-md-6 col-lg-4 portfolio-item" data-category="animated logo" data-portfolio-item>
    <div class="portfolio-card js-portfolio-card" data-img="img/animated_logo/gif3.gif">
        <img src="img/animated_logo/gif3.gif" alt="Website 01" />
        <div class="portfolio-meta">
            <div>
                <strong>Agora Sneakers</strong><br />
                <span>E-commerce hero layout</span>
            </div>
            <span>Web</span>
        </div>
    </div>
</div>
<div class="col-md-6 col-lg-4 portfolio-item" data-category="animated logo" data-portfolio-item>
    <div class="portfolio-card js-portfolio-card" data-img="img/animated_logo/gif4.gif">
        <img src="img/animated_logo/gif4.gif" alt="Website 01" />
        <div class="portfolio-meta">
            <div>
                <strong>Agora Sneakers</strong><br />
                <span>E-commerce hero layout</span>
            </div>
            <span>Web</span>
        </div>
    </div>
</div>
<div class="col-md-6 col-lg-4 portfolio-item" data-category="animated logo" data-portfolio-item>
    <div class="portfolio-card js-portfolio-card" data-img="img/animated_logo/gif5.gif">
        <img src="img/animated_logo/gif5.gif" alt="Website 01" />
        <div class="portfolio-meta">
            <div>
                <strong>Agora Sneakers</strong><br />
                <span>E-commerce hero layout</span>
            </div>
            <span>Web</span>
        </div>
    </div>
</div>
<div class="col-md-6 col-lg-4 portfolio-item" data-category="animated logo" data-portfolio-item>
    <div class="portfolio-card js-portfolio-card" data-img="img/animated_logo/gif6.gif">
        <img src="img/animated_logo/gif6.gif" alt="Website 01" />
        <div class="portfolio-meta">
            <div>
                <strong>Agora Sneakers</strong><br />
                <span>E-commerce hero layout</span>
            </div>
            <span>Web</span>
        </div>
    </div>
</div>
<div class="col-md-6 col-lg-4 portfolio-item" data-category="animated logo" data-portfolio-item>
    <div class="portfolio-card js-portfolio-card" data-img="img/animated_logo/gif7.gif">
        <img src="img/animated_logo/gif7.gif" alt="Website 01" />
        <div class="portfolio-meta">
            <div>
                <strong>Agora Sneakers</strong><br />
                <span>E-commerce hero layout</span>
            </div>
            <span>Web</span>
        </div>
    </div>
</div>
<div class="col-md-6 col-lg-4 portfolio-item" data-category="animated logo" data-portfolio-item>
    <div class="portfolio-card js-portfolio-card" data-img="img/animated_logo/gif9.gif">
        <img src="img/animated_logo/gif9.gif" alt="Website 01" />
        <div class="portfolio-meta">
            <div>
                <strong>Agora Sneakers</strong><br />
                <span>E-commerce hero layout</span>
            </div>
            <span>Web</span>
        </div>
    </div>
</div>
<div class="col-md-6 col-lg-4 portfolio-item" data-category="animated logo" data-portfolio-item>
    <div class="portfolio-card js-portfolio-card" data-img="img/animated_logo/gif10.gif">
        <img src="img/animated_logo/gif10.gif" alt="Website 01" />
        <div class="portfolio-meta">
            <div>
                <strong>Agora Sneakers</strong><br />
                <span>E-commerce hero layout</span>
            </div>
            <span>Web</span>
        </div>
    </div>
</div>
<div class="col-md-6 col-lg-4 portfolio-item" data-category="animated logo" data-portfolio-item>
    <div class="portfolio-card js-portfolio-card" data-img="img/animated_logo/gif12.gif">
        <img src="img/animated_logo/gif12.gif" alt="Website 01" />
        <div class="portfolio-meta">
            <div>
                <strong>Agora Sneakers</strong><br />
                <span>E-commerce hero layout</span>
            </div>
            <span>Web</span>
        </div>
    </div>
</div>
      </div>
    </div>
  </section>
<!-- STATS -->
<section id="stats">
    <div class="container">
      <div class="row text-center gy-4">
        <div class="col-6 col-md-3">
          <div class="stat-number">580+</div>
          <div class="stat-label">Happy clients</div>
        </div>
        <div class="col-6 col-md-3">
          <div class="stat-number">95%</div>
          <div class="stat-label">Client satisfaction</div>
        </div>
        <div class="col-6 col-md-3">
          <div class="stat-number">180+</div>
          <div class="stat-label">Projects delivered</div>
        </div>
        <div class="col-6 col-md-3">
          <div class="stat-number">10+</div>
          <div class="stat-label">Years experience</div>
        </div>
      </div>
    </div>
  </section>
<section class="faqs-sec" id="faqs-sec">
    <div class="container">
        <div class="row justify-content-center mb-4">
            <div class="col-lg-9 col-sm-12 text-center">
                <p class="section-eyebrow">FAQs</p>
                <h2 class="section-title">Frequently Asked <span class="blue">Questions</span></h2>
                <p class="section-subtitle">Here are some common questions clients ask before starting their design project with us.</p>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8 col-sm-12">
                <div class="accordion brand-faq" id="accordionExample">

                  <!-- FAQ 1 -->
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        How long does a logo design project take?
                      </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        Most initial logo concepts are delivered within <strong>3–5 business days</strong>. Revision timelines
                        depend on your feedback speed. A complete branding package typically takes
                        <strong>7–10 business days</strong>.
                      </div>
                    </div>
                  </div>

                  <!-- FAQ 2 -->
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Do you provide multiple logo concepts?
                      </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        Yes. Every project includes <strong>multiple custom-made logo concepts</strong>, giving you several
                        creative directions to choose from before we refine your selected style.
                      </div>
                    </div>
                  </div>

                  <!-- FAQ 3 -->
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Will I receive all final files after the project?
                      </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        Absolutely. You’ll receive a complete set of final deliverables including
                        <strong>AI, PDF, EPS, SVG, PNG, and JPG</strong> – ready for printing, digital use, and all branding needs.
                      </div>
                    </div>
                  </div>

                  <!-- FAQ 4 -->
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Do you design websites?
                      </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        Yes. We create <strong>modern, mobile-responsive, SEO-ready websites</strong> tailored to your business—
                        including landing pages, corporate sites, eCommerce layouts, and WordPress development.
                      </div>
                    </div>
                  </div>

                  <!-- FAQ 5 -->
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        Can you work with my existing brand or improve it?
                      </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        Yes, we can. Whether you need a <strong>logo refresh</strong>, a complete brand upgrade, or a
                        <strong>website redesign</strong>, we enhance your existing identity while keeping its core essence intact.
                      </div>
                    </div>
                  </div>

                </div>
            </div>
        </div>

    </div>
</section>
<!-- PRICING SECTION -->
<section id="pricing" class="py-5">
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-12">
            <div class="text-center mb-4">
              <p class="section-eyebrow">Pricing</p>
              <h2 class="section-title">Plans & Pricing</h2>
              <p class="section-subtitle">
                Get high-quality design and development services at fair prices, built to increase your business value.
              </p>
            </div>
        </div>
    </div>
    <!-- BOOTSTRAP NAV TABS (kept your class for styling) -->
    <div class="text-center mb-4">
      <ul class="nav nav-tabs justify-content-center pricing-toggle pricing-toggle-main" id="pricingTab" role="tablist">
        <li class="nav-item" role="presentation">
          <button
            class="nav-link active"
            id="logo-tab"
            data-bs-toggle="tab"
            data-bs-target="#pricing-logo"
            type="button"
            role="tab"
            aria-controls="pricing-logo"
            aria-selected="true"
          >
            Logo
          </button>
        </li>
        <li class="nav-item" role="presentation">
          <button
            class="nav-link"
            id="branding-tab"
            data-bs-toggle="tab"
            data-bs-target="#pricing-branding"
            type="button"
            role="tab"
            aria-controls="pricing-branding"
            aria-selected="false"
          >
            Branding
          </button>
        </li>
        <li class="nav-item" role="presentation">
          <button
            class="nav-link"
            id="web-tab"
            data-bs-toggle="tab"
            data-bs-target="#pricing-web"
            type="button"
            role="tab"
            aria-controls="pricing-web"
            aria-selected="false"
          >
            Web
          </button>
        </li>
        <li class="nav-item" role="presentation">
          <button
            class="nav-link"
            id="bundle-tab"
            data-bs-toggle="tab"
            data-bs-target="#pricing-bundle"
            type="button"
            role="tab"
            aria-controls="pricing-bundle"
            aria-selected="false"
          >
            Video
          </button>
        </li>
      </ul>
    </div>
    <!-- TAB PANES -->
    <div class="tab-content" id="pricingTabContent">
      <!-- LOGO TAB -->
      <div
        class="tab-pane fade show active"
        id="pricing-logo"
        role="tabpanel"
        aria-labelledby="logo-tab"
      >
        <div class="row g-4 pricing-grid">
            <div class="col-md-6 col-lg-3 pricing-item">
                <div class="pricing-card">
                    <h3>Bronze</h3>
                    <h2>$49</h2>
                    <ul>
                        <li>2 Logo Concepts</li>
                        <li>3 Revisions</li>
                        <li>No High Res. files</li>
                        <li>48 hours Delivery</li>
                        <li>100% Ownership</li>
                    </ul>
                    <button class="btn pricing-btn plan-btn"
                        data-package="Logo Design-Bronze-USD-49-0">Buy Now</a>
                    </button>    
                </div>
            </div>
            <div class="col-md-6 col-lg-3 pricing-item">
                <div class="pricing-card">
                    <h3>Silver</h3>
                    <h2>$99</h2>
                    <ul>
                        <li>4 Logo Concepts</li>
                        <li>6 Revisions</li>
                        <li>Custom Logo</li>
                        <li>Vector PDF File</li>
                        <li>48 hours Delivery</li>
                        <li>HQ PNG + JPEG</li>
                        <li>100% Ownership</li>
                    </ul>
                    <button class="btn pricing-btn plan-btn"
                        data-package="Logo Design-Silver Plan-USD-99-0">Buy Now
                       </a>
                        </button>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 pricing-item">
                <div class="pricing-card featured">
                    <h3>Gold</h3>
                    <h2>$139</h2>
                    <ul>
                        <li>6 Logo Concepts</li>
                        <li>Unlimited Revision</li>
                        <li>Custom Logo</li>
                        <li>Vector EPS , PDF file</li>
                        <li>24-48 H Delivery</li>
                        <li>HQ PNG + JPEG</li>
                        <li>100% Ownership</li>
                    </ul>
                    <button class="btn pricing-btn plan-btn"
                        data-package="Logo Design-Gold Plan-USD-139-0">Buy
                        Now</a>
                        </button>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 pricing-item">
                <div class="pricing-card">
                    <h3>Platinum</h3>
                    <h2>$189</h2>
                    <ul>
                        <li>Unlimited Logo Concepts</li>
                        <li>Unlimited Revision</li>
                        <li>Custom Logo</li>
                        <li>Editable Vector Ai</li>
                        <li>24-48 H Delivery</li>
                        <li>Vector EPS, PDF</li>
                        <li>HQ PNG + JPEG</li>
                        <li>100% Ownership</li>
                        <li>Business Card Design</li>
                    </ul>
                    <button class="btn pricing-btn plan-btn"
                        data-package="Logo Design-Platinum Plan-USD-189-0">Buy
                        Now</a>
                        </button>
                </div>
            </div>
        </div>
      </div>
      <!-- BRANDING TAB -->
      <div
        class="tab-pane fade"
        id="pricing-branding"
        role="tabpanel"
        aria-labelledby="branding-tab"
      >
        <div class="row g-4 pricing-grid">
      <div class="col-md-6 col-lg-3 pricing-item">
        <div class="pricing-card">
          <h3>Basic Plan</h3>
          <h2>$59</h2>
          <ul>
            <li>Business Card Design</li>
            <li>Letterhead Design</li>
            <li>Envelope Design</li>
            <li>100% Ownership</li>
          </ul>
          <button class="btn pricing-btn plan-btn" data-package="Branding-Basic Plan-USD-59-0">Buy Now</a></button>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 pricing-item">
        <div class="pricing-card">
         <h3>Startup Plan</h3>
          <h2>$99</h2>
          <ul>
           <li>Business Card Design</li>
            <li>Letterhead Design</li>
            <li>Envelope Design</li>
            <li>Email Signature</li>
            <li>2 Social Covers</li>
          </ul>
          <button class="btn pricing-btn plan-btn" data-package="Branding-Startup Plan-USD-99-0">Buy Now</a></button>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 pricing-item">
        <div class="pricing-card featured">
          <h3>Pro plan</h3>
          <h2>$149</h2>
          <ul>
           <li>Business Card Design</li>
            <li>Letterhead Design</li>
            <li>Envelope Design</li>
            <li>Email Signature</li>
            <li>4 Social Covers</li>
            <li>T-Shirt Design</li>
            <li>Web Banner Design</li>
          </ul>
          <button class="btn pricing-btn plan-btn" data-package="Branding-Pro Plan-USD-149-0">Buy Now</a></button>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 pricing-item">
        <div class="pricing-card">
         <h3>Corporate Plan</h3>
            <h2>$199</h2>
        <ul>
          <li>Business Card Design</li>
          <li>Letterhead Design</li>
          <li>Envelope Design</li>
          <li>Email Signature</li>
          <li>4 Social Covers</li>
          <li>T-Shirt Design</li>
          <li>Web Banner Design</li>
            <li>Signage Design</li>
              <li>Car Stickers Design</li>
        </ul>
          <button class="btn pricing-btn plan-btn" data-package="Branding-Corporate Plan-USD-199-0">Buy Now</a></button>
        </div>
      </div>
    </div>
      </div>
      <!-- WEB TAB -->
      <div
        class="tab-pane fade"
        id="pricing-web"
        role="tabpanel"
        aria-labelledby="web-tab"
      >
         <div class="row g-4 pricing-grid">
      <div class="col-md-6 col-lg-3 pricing-item">
        <div class="pricing-card">
          <h3>HTML</h3>
        <h2>$699</h2>
        <ul>
          <li>5 Page Static Website</li>
          <li>Jquery Slider Banner</li>
          <li>W3C Certified HTML</li>
          <li>UI Design</li>
          <li>3 Banner Design</li>
          <li>Favicon</li>
          <li>SEO Friendly Design</li>
        </ul>
          <button class="btn pricing-btn plan-btn" data-package="Website-HTML-USD-699-0">Buy Now</a></button>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 pricing-item">
        <div class="pricing-card">
          <h3>CMS</h3>
          <h2>$1199</h2>
                  <ul>
          <li>Web Development</li>
          <li>W3C Certified HTML</li>
          <li>Web Design  UI</li>
          <li>10 Stock Images</li>
          <li>5 Banner Designs</li>
          <li>Advance UI Effects</li>
          <li>SEO Friendly Design</li>
          <li>SEO Friendly Sitemap</li>
          <li>Social Media Integration</li>
          <li>4 Social Platforms</li>
        </ul>
          <button class="btn pricing-btn plan-btn" data-package="Website-CMS-USD-1199-0">Buy Now</a></button>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 pricing-item">
        <div class="pricing-card featured">
          <h3>E-Commerce</h3>
          <h2>$1699</h2>
                 <ul>
          <li>Web Development</li>
          <li>W3C Certified HTML</li>
          <li>Admin Panel Support</li>
          <li>Mobile Responsive Layout</li>
          <li>Customers Login Area</li>
          <li>Cart Integration</li>
          <li>Pay. Module Integration</li>
          <li>Inventory Management</li>
          <li>Unltd. Products &amp; Categories</li>
          <li>Easy Product Search</li>
          <li>Product Reviews</li>
          <li>Web Design &amp; UI</li>
          <li>15 Stock Images</li>
          <li>8 Banner Designs</li>
          <li>Favicon</li>
          <li>Advance UI Effects</li>
          <li>Basic Search Engine Submission</li>
          <li>SEO Friendly Design</li>
          <li>SEO Friendly Sitemap</li>
          <li>Analytics Integration</li>
          <li>Social Media Integration</li>
          <li>4 Social Platforms</li>
        </ul>
          <button class="btn pricing-btn plan-btn" data-package="Website-ECom-USD-1699-0">Buy Now</a></button>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 pricing-item">
        <div class="pricing-card">
          <h3>Portal</h3>
          <h2>$2999</h2>
                 <ul>
                  <li>Web Development</li>
                  <li><b>Any One:</b></li>
                  <li>Job Portal</li>
                  <li>Professional Network</li>
                  <li>Social Network</li>
                  <li>Media Portal</li>
                  <li>Real Estate Portal</li>
                  <li>Medical Portal</li>
                  <li>News Portal</li>
                  <li>Enterprise Portal</li>
                  <li>Client/User Dashboard</li>
                  <li>Custom Coding</li>
                  <li>Module-wise Architecture</li>
                  <li>Extensive Admin Panel</li>
                  <li>Complete Deployment</li>
                </ul>
          <button class="btn pricing-btn plan-btn" data-package="Website-Portal-USD-2999-0">Buy Now</a></button>
        </div>
      </div>
    </div>
      </div>
      <!-- VIDEO / BUNDLE TAB -->
      <div
        class="tab-pane fade"
        id="pricing-bundle"
        role="tabpanel"
        aria-labelledby="bundle-tab"
      >
         <div class="row g-4 pricing-grid">
      <div class="col-md-6 col-lg-3 pricing-item">
        <div class="pricing-card">
          <h3>Bronze Plan</h3>
          <h2>$499</h2>
          <ul>
          <li>60 seconds</li>
          <li><b>Custom Work:</b></li>
          <li>Script Writing</li>
          <li>Detail Storyboard</li>
          <li>Professional Voice over</li>
          <li>Impressive Animation</li>
          <li>Royalty free BG &amp; SFX</li>
          <li class="not"><b>More Features:</b></li>
          <li>File Delivered in HD 720p</li>
          <li>3 round of revisions in each phase</li>
          <li>4 weeks Deadline</li>
          <li>100% satisfaction</li>
          <li>100% Ownership Rights</li>
        </ul>
          <button class="btn pricing-btn plan-btn" data-package="Video Animation-Bronze Plan-USD-499-0">Buy Now</a></button>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 pricing-item">
        <div class="pricing-card">
          <h3>Silver Plan</h3>
          <h2>$799</h2>
                 <ul>
          <li>60 seconds</li>
          <li class="not"><b>Custom Work:</b></li>
          <li>Script Writing</li>
          <li>Storyboarding</li>
          <li>Detail illustrations</li>
          <li>Professional Voice over</li>
          <li>Impressive Animation</li>
          <li>Royalty free BG &amp; SFX</li>
          <li class="not"><b>More Features:</b></li>
          <li>File Delivered in HD 720p</li>
          <li>3 round of revisions in each phase</li>
          <li>3 weeks Deadline</li>
          <li>100% satisfaction</li>
          <li>100% Ownership Rights</li>
        </ul>
          <button class="btn pricing-btn plan-btn" data-package="Video Animation-Sliver Plan-USD-799-0">Buy Now</a></button>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 pricing-item">
        <div class="pricing-card featured">
          <h3>Gold Plan</h3>
          <h2>$999</h2>
                   <ul>
              <li>60 seconds</li>
              <li class="not"><b>Custom Work:</b></li>
              <li>Script Writing</li>
              <li>Storyboarding</li>
              <li>Detail illustrations</li>
              <li>Professional Voice over</li>
              <li>Impressive Animation</li>
              <li>Royalty free BG &amp; SFX</li>
              <li class="not"><b>More Features:</b></li>
              <li>File Delivered in HD 1080p</li>
              <li>Multiple Revisions in each phase</li>
              <li>2 weeks Deadline</li>
              <li>Dedicated Project Manager</li>
              <li>100% satisfaction</li>
              <li>100% Ownership Rights</li>
            </ul>
          <button class="btn pricing-btn plan-btn" data-package="Video Animation-Gold Plan-USD-999-0">Buy Now</a></button>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 pricing-item">
        <div class="pricing-card">
          <h3>Platinum Plan</h3>
          <h2>$1499</h2>
         <ul>
          <li>60 seconds</li>
          <li class="not"><b>Custom Work:</b></li>
          <li>2 Concepts + premium scriptwriting</li>
          <li>Storyboarding</li>
          <li>Detail illustrations</li>
          <li>Professional Voice over</li>
          <li>Impressive Animation</li>
          <li>Royalty free BG &amp; SFX</li>
          <li class="not"><b>More Features:</b></li>
          <li>File Delivered in HD 1080p</li>
          <li>Unlimited revisions</li>
          <li>6 weeks Deadline</li>
          <li>Dedicated Project Manager</li>
          <li>100% satisfaction</li>
          <li>100% Ownership Rights</li>
          <li>Source File</li>
        </ul>
          <button class="btn pricing-btn plan-btn" data-package="Video Animation-Platinum Plan-USD-1499-0">Buy Now</a></button>
        </div>
      </div>
    </div>
      </div>
    </div><!-- /.tab-content -->
  </div>
</section>
<!-- CONTACT (NEW) -->
<section id="contact" class="contact-modern">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="contact-shell">
            <div class="row g-4 align-items-start">
              <!-- LEFT: Info -->
              <div class="col-lg-4">
                <p class="contact-kicker">Contact us</p>
                <h2 class="contact-title">
                  Share your project brief.<br/> We’ll take it from here.
                </h2>
                <p class="contact-text">
                  Tell us if you need a logo, brand identity, website or full creative package. You’ll receive a tailored proposal within 24 hours.
                </p>

                <div class="contact-info-block">
                  <div class="contact-info-item">
                    <span class="contact-info-label">Email</span>
                    <a class="text-decoration-none text-light" href="mailto:info@designcentura.com" class="contact-info-value">info@designcentura.com</a>
                  </div>
                  <div class="contact-info-item">
                    <span class="contact-info-label">Phone</span>
                    <a class="text-decoration-none text-light" href="tel:323-283-8729" class="contact-info-value">323-283-8729</a>
                  </div>
                  <div class="contact-info-item">
                    <span class="contact-info-label">Mailing Address</span>
                    <span class="contact-info-value">
                      560 Montgomery Street, San Francisco, CA 94111
                    </span>
                  </div>
                </div>

                <div class="contact-badge">
                  <span class="dot"></span>
                  <span>&nbsp; Typical response time: under 24 hours</span>
                </div>
              </div>

              <!-- RIGHT: White Form -->
              <div class="col-lg-8">
                <div class="contact-card-modern">
                    
                    <!-- Contact / Project Brief Form -->
                <form id="projectBriefForm" novalidate>
                  <div class="row g-3">
                    <div class="col-md-6">
                      <div class="field-group">
                        <label class="field-label" for="full_name">Full Name</label>
                        <input
                          type="text"
                          id="full_name"
                          name="full_name"
                          class="form-control field-input"
                          placeholder="Please Enter Your Name"
                          required
                        />
                      </div>
                    </div>
                
                    <div class="col-md-6">
                      <div class="field-group">
                        <label class="field-label" for="email">Email</label>
                        <input
                          type="email"
                          id="email"
                          name="email"
                          class="form-control field-input"
                          placeholder="Please Enter Your Email"
                          required
                        />
                      </div>
                    </div>
                
                    <div class="col-md-6">
                      <div class="field-group">
                        <label class="field-label" for="phone">Phone / WhatsApp</label>
                        <input
                          type="text"
                          id="phone"
                          name="phone"
                          class="form-control field-input"
                          placeholder="Please Enter Your Contact"
                          required
                        />
                      </div>
                    </div>
                
                    <div class="col-md-6">
                      <div class="field-group">
                        <label class="field-label" for="project_type">Project Type</label>
                        <select
                          id="project_type"
                          name="project_type"
                          class="form-select field-input"
                          required
                        >
                          <option value="" selected disabled>Please Select Project Type</option>
                          <option value="Logo design">Logo Design</option>
                          <option value="Logo + branding kit">Logo + Branding Kit</option>
                          <option value="Website design">Website Design</option>
                          <option value="Logo + website bundle">Logo + Website Bundle</option>
                          <option value="Social media creatives">Social Media Creatives</option>
                        </select>
                      </div>
                    </div>
                
                    <div class="col-12">
                      <div class="field-group">
                        <label class="field-label" for="project_brief">Project Brief</label>
                        <textarea
                          id="project_brief"
                          name="project_brief"
                          class="form-control field-input field-textarea"
                          rows="4"
                          placeholder="Describe your business, style, timeline and any reference links."
                          required
                        ></textarea>
                      </div>
                    </div>
                
                    <div class="col-md-6">
                      <div class="field-group">
                        <label class="field-label" for="budget">Approx. Budget (USD)</label>
                        <select
                          id="budget"
                          name="budget"
                          class="form-select field-input"
                          required
                        >
                          <option value="" selected disabled>Select Range</option>
                          <option value="$100 – $200">$100 – $200</option>
                          <option value="$200 – $500">$200 – $500</option>
                          <option value="$500 – $1,000">$500 – $1,000</option>
                          <option value="$1,000+">$1,000+</option>
                        </select>
                      </div>
                    </div>
                
                    <div class="col-md-6 d-flex align-items-center">
                      <label class="form-check align-items-start contact-check">
                        <input
                          id="nda"
                          name="nda"
                          class="form-check-input"
                          type="checkbox"
                          value="1"
                        />
                        <span class="form-check-label">
                          I’d like to sign an NDA before sharing details.
                        </span>
                      </label>
                    </div>
                
                    <!-- ALERT MESSAGES -->
                    <div class="col-12">
                      <div
                        id="formAlertSuccess"
                        class="alert alert-success py-2 px-3 d-none"
                        role="alert"
                      ></div>
                      <div
                        id="formAlertError"
                        class="alert alert-danger py-2 px-3 d-none"
                        role="alert"
                      ></div>
                    </div>
                
                    <div
                      class="col-12 d-flex flex-wrap justify-content-between align-items-center gap-2 mt-1"
                    >
                      <small class="contact-hint">
                        No spam, no newsletters – we only email you about this project.
                      </small>
                      <button type="submit" id="contactSubmitBtn" class="btn contact-submit-btn">
                        Send project brief
                      </button>
                    </div>
                  </div>
                </form>
                    
                </div>
              </div>
              <!-- /right -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php include('templates/footer.php'); ?>