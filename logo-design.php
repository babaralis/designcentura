<?php include('templates/header.php'); ?>
<style>
    .section-title span{
        color:#1d4ed8;
    }
    :root{
      --primary:#196BFF;
      --primary-dark:#0040b8;
      --primary-soft:#e3eeff;
      --dark:#0b1120;
      --muted:#6b7280;
      --border:#e5e7eb;
      --bg-light:#f9fafb;
      --radius-lg:1.5rem;
    }

    *{box-sizing:border-box;}

    body{
      font-family:"Poppins",system-ui,-apple-system,BlinkMacSystemFont,"Segoe UI",sans-serif;
      color:var(--dark);
      background:#ffffff;
      line-height:1.6;
    }

    img{max-width:100%;height:auto;display:block;}

    .section-padding{
      padding:80px 0;
    }
    /* About logo design */
    .about-section{
      background:#ffffff;
    }
    .about-image-wrap{
      background:linear-gradient(145deg,#0f5edb,#0b1e54);
      border-radius:1.8rem;
      padding:1.3rem;
      box-shadow:0 22px 60px rgba(15,23,42,.18);
      position:relative;
      overflow:hidden;
    }
    .about-image{
      border-radius:1.3rem;
      background:#f9fafb;
      display:flex;
      align-items:center;
      justify-content:center;
      padding:1.5rem;
    }
    .about-image span{
      font-weight:600;
      color:#111827;
      font-size:.95rem;
    }
    .about-tag{
      position:absolute;
      bottom:1rem;
      right:1rem;
      background:#ffffff;
      border-radius:999px;
      padding:.35rem .9rem;
      font-size:.75rem;
      color:#0f172a;
      display:flex;
      align-items:center;
      gap:.35rem;
    }
    .about-tag i{color:#22c55e;}

    .about-list{
      list-style:none;
      padding:0;
      margin:0;
    }
    .about-list li{
      display:flex;
      align-items:flex-start;
      gap:.6rem;
      font-size:.9rem;
      color:var(--muted);
      margin-bottom:.55rem;
    }
    .about-list li i{
      margin-top:.25rem;
      color:var(--primary);
    }

    /* Services highlight cards (optional small row inside about section) */
    .service-pill-card{
      border-radius:1.25rem;
      border:1px solid var(--border);
      padding:1rem 1.2rem;
      background:var(--bg-light);
      font-size:.87rem;
      color:var(--muted);
    }
    .service-pill-card strong{
      display:block;
      font-size:.92rem;
      margin-bottom:.2rem;
      color:#0f172a;
    }

    /* Call to Action */
    .cta-section{
      background:linear-gradient(135deg,#0f5edb,#0b1e54);
      color:#f9fafb;
    }
    .cta-card{
      border-radius:1.9rem;
      padding:2.2rem 2.3rem;
      background:rgba(15,23,42,.75);
      box-shadow:0 24px 60px rgba(15,23,42,.55);
      position:relative;
      overflow:hidden;
    }
    .cta-card::before{
      content:"";
      position:absolute;
      width:260px;
      height:260px;
      border-radius:100%;
      background:radial-gradient(circle,rgba(59,130,246,.45),transparent 70%);
      inset:auto -80px -140px auto;
      opacity:.8;
    }
    .cta-card h2{
      font-size:1.55rem;
      font-weight:700;
      margin-bottom:.5rem;
    }
    .cta-card p{
      font-size:.93rem;
      color:#d1e3ff;
      margin-bottom:1.6rem;
    }
    .cta-meta{
      display:flex;
      flex-wrap:wrap;
      gap:1rem 1.7rem;
      font-size:.8rem;
      color:#e5edff;
    }
    .cta-meta span i{
      margin-right:.35rem;
      color:#22c55e;
    }
    /* How it works */
    .how-section{
      background:#ffffff;
    }
    .how-step{
      background:#ffffff;
      border-radius:1.5rem;
      border:1px solid var(--border);
      padding:1.6rem 1.4rem;
      box-shadow:0 18px 50px rgba(15,23,42,.04);
      height:100%;
      position:relative;
      overflow:hidden;
      transition:all .25s ease;
    }
    .how-step:hover{
      transform:translateY(-4px);
      box-shadow:0 24px 65px rgba(15,23,42,.09);
      border-color:rgba(25,107,255,.45);
    }
    .how-step-icon{
      width:44px;
      height:44px;
      border-radius:1.1rem;
      display:flex;
      align-items:center;
      justify-content:center;
      background:var(--primary-soft);
      color:var(--primary);
      font-size:1.1rem;
      margin-bottom:.9rem;
    }
    .how-step span{
      font-size:.78rem;
      font-weight:600;
      letter-spacing:.12em;
      text-transform:uppercase;
      color:var(--muted);
      margin-bottom:.3rem;
      display:block;
    }
    .how-step h3{
      font-size:1rem;
      font-weight:600;
      margin-bottom:.4rem;
    }
    .how-step p{
      font-size:.87rem;
      color:var(--muted);
      margin-bottom:0;
    }
    section.banner-section.section-padding{
        padding-top: 8rem;
        padding-bottom: 6rem;
    }

    .sub-heading{
      font-size:.85rem;
      letter-spacing:.09em;
      text-transform:uppercase;
      color:var(--primary);
      font-weight:600;
      margin-bottom:.4rem;
    }

    .section-title{
      font-weight: 600;
    font-size: 2.8rem;
    margin-bottom: 0.4rem;
    }

    .section-lead{
      color:var(--muted);
      font-size:.96rem;
      margin-bottom:2.2rem;
    }

    .badge-pill{
      display:inline-flex;
      align-items:center;
      gap:.5rem;
      padding:.3rem .9rem;
      border-radius:999px;
      font-size:.75rem;
      font-weight:500;
      background:rgba(255,255,255,.12);
      color:#e5e7eb;
      border:1px solid rgba(148,163,184,.6);
    }

    .btn-primary-custom{
      background:var(--primary);
      border-color:var(--primary);
      color:#fff;
      font-weight:600;
      border-radius:999px;
      padding:.8rem 1.9rem;
      font-size:.93rem;
      box-shadow:0 16px 40px rgba(25,107,255,.55);
      transition:all .25s ease;
    }
    .btn-primary-custom:hover{
      background:var(--primary-dark);
      border-color:var(--primary-dark);
      transform:translateY(-1px);
      box-shadow:0 22px 50px rgba(25,107,255,.7);
      color:#fff;
    }

    .btn-outline-custom{
      border-radius:999px;
      padding:.8rem 1.9rem;
      border:1px solid #d1d5db;
      font-weight:500;
      font-size:.93rem;
      color:#0f172a;
      background:#ffffff;
      transition:all .25s ease;
    }
    .btn-outline-custom:hover{
      border-color:var(--primary);
      color:var(--primary);
      box-shadow:0 10px 30px rgba(15,23,42,.12);
      transform:translateY(-1px);
      background:#ffffff;
    }

    .pill-tag{
      display:inline-flex;
      align-items:center;
      padding:.3rem .75rem;
      border-radius:999px;
      font-size:.75rem;
      font-weight:500;
      border:1px solid rgba(148,163,184,.55);
      color:#4b5563;
      gap:.35rem;
      background:#ffffff;
    }
    .pill-tag i{
      color:var(--primary);
    }

    /* Hero / Banner */
    .banner-section{
      background: radial-gradient(circle at top left, #3a8dff 0, #0340b3 45%, #02142e 100%);
      color:#f9fafb;
      position:relative;
      overflow:hidden;
    }
    .banner-section::before{
      content:"";
      position:absolute;
      inset:auto auto -120px -80px;
      width:260px;
      height:260px;
      border-radius:100%;
      background:radial-gradient(circle,rgba(255,255,255,.15),transparent 65%);
      opacity:.7;
    }
    .banner-section::after{
      content:"";
      position:absolute;
      inset:-160px -120px auto auto;
      width:320px;
      height:320px;
      border-radius:100%;
      background:radial-gradient(circle,rgba(255,255,255,.14),transparent 70%);
      opacity:.85;
    }
    .banner-inner{
      position:relative;
      z-index:1;
    }
    .banner-title{
        font-size: clamp(2.4rem, 3.2vw, 2.8rem);
        font-weight: 600;
        line-height: 1.1;
        margin-bottom: 1rem;
    }
    .banner-sub{
      font-size:1rem;
      color:#d1e3ff;
      margin-bottom:1.7rem;
    }
    .banner-actions{
      display:flex;
      flex-wrap:wrap;
      gap:1rem;
      margin-bottom:1.4rem;
    }
    .banner-meta{
      display:flex;
      flex-wrap:wrap;
      gap: 0.5rem;
      font-size:.82rem;
      color:#e5edff;
      opacity:.9;
      flex-direction: column;
    }
    .banner-meta span i{
      margin-right:.35rem;
      color:#facc15;
    }
    .banner-visual{
      position:relative;
    }
    .banner-mockup{
      background:#0b1120;
      border-radius:2rem;
      padding:1.2rem;
      box-shadow:0 26px 80px rgba(15,23,42,.8);
      border:1px solid rgba(148,163,184,.55);
    }
    .banner-mockup-grid{
      display:grid;
      grid-template-columns:repeat(2,1fr);
      gap:.6rem;
    }
    .logo-card{
      background:#ffffff;
      border-radius:1rem;
      height:120px;
      display:flex;
      align-items:center;
      justify-content:center;
      font-size:.8rem;
      font-weight:600;
      color:#111827;
      box-shadow:0 12px 35px rgba(15,23,42,.16);
    }
    .logo-card:nth-child(1){background:#fef3c7;}
    .logo-card:nth-child(2){background:#fee2e2;}
    .logo-card:nth-child(3){background:#e0f2fe;}
    .logo-card:nth-child(4){background:#e5f9f0;}
    .banner-badge{
      position:absolute;
      right:-10px;
      bottom:-26px;
      background:#ffffff;
      color:#0f172a;
      font-size:.8rem;
      border-radius:999px;
      padding:.5rem 1.1rem;
      display:flex;
      align-items:center;
      gap:.45rem;
      box-shadow:0 18px 55px rgba(15,23,42,.45);
    }
    .banner-badge i{
      color:var(--primary);
    }

    @media (max-width:991.98px){
      .banner-section{
        padding-top:88px;
      }
      .banner-visual{
        margin-top:2.4rem;
      }
    }
    @media (max-width:575.98px){
      .banner-title{
        font-size:1.9rem;
      }
    }
    @media (max-width:767.98px){
      .cta-card{
        padding:2rem 1.8rem;
      }
    }
    @media (max-width:575.98px){
      .section-padding{
        padding:60px 0;
      }
    }
  </style>
<!-- Banner -->
<section class="banner-section section-padding" id="logo-banner">
    <div class="container banner-inner">
      <div class="row align-items-center g-4">
        <div class="col-lg-6 my-auto">
          <div class="mb-3">
            <span class="badge-pill">
              <i class="fa-solid fa-pen-nib"></i>
              Design Centura · Logo Design Studio
            </span>
          </div>
          <h1 class="banner-title heroHeading">
            Custom <span>Logo Design</span> & Brand-Ready <span>Visual Identity</span> Systems
          </h1>
          <p class="banner-sub">
            Work with Design Centura to build a strategic, memorable logo that scales effortlessly across print, digital platforms, and social media.
          </p>
          <div class="banner-actions">
            <!--<a href="#cta-brief" class="btn btn-primary-custom">-->
            <!--  Get a Custom Logo Proposal-->
            <!--</a>-->
            <a href="#logo-portfolio" class="btn btn-outline-custom">
              View Logo Portfolio
            </a>
          </div>
          <!--<div class="banner-meta">-->
          <!--  <span><i class="fa-solid fa-check-circle"></i>Designed specifically for your industry and target audience</span>-->
          <!--  <span><i class="fa-solid fa-check-circle"></i>Delivered with complete rights and all final file formats</span>-->
          <!--  <span><i class="fa-solid fa-check-circle"></i>Prepared for brand guidelines and future expansion</span>-->
          <!--</div>-->
        </div>
        <div class="col-lg-6">
            <img src="img/lbanner.webp" width="100%">
          <!--<div class="banner-visual">-->
          <!--  <div class="banner-mockup">-->
          <!--    <div class="banner-mockup-grid">-->
          <!--      <div class="logo-card">Gaming Logo</div>-->
          <!--      <div class="logo-card">Boutique Brand</div>-->
          <!--      <div class="logo-card">Food &amp; Cafe</div>-->
          <!--      <div class="logo-card">Tech Startup</div>-->
          <!--    </div>-->
          <!--  </div>-->
          <!--  <div class="banner-badge">-->
          <!--    <i class="fa-solid fa-star"></i>-->
          <!--    500+ custom logos launched with Design Centura-->
          <!--  </div>-->
          <!--</div>-->
        </div>
      </div>
    </div>
  </section>
<!-- About Logo Design -->
<section class="about-section section-padding" id="about-logo-design">
    <div class="container">
      <div class="row align-items-center g-4">
        <div class="col-lg-6">
            <img src="img/logodesign-side.webp" width="80%">
        </div>
        <div class="col-lg-6">
          <p class="section-eyebrow left">ABOUT OUR LOGO DESIGN SERVICES</p>
          <h2 class="section-title">We <span class="blue">Create Logos</span> That Become the Foundation of Your <span class="blue">Brand</span>.</h2>
          <p class="section-lead">
            Your logo is the first impression people form about your business. At Design Centura, we develop signature logo systems that clearly express your purpose, personality, and positioning—captured in one distinct visual mark.
          </p>
          <ul class="about-list">
            <li>
              <i class="fa-solid fa-circle-check"></i>
              Our process starts with deep research into your market, competitors, and customer profile to establish a sharp creative direction.
            </li>
            <li>
              <i class="fa-solid fa-circle-check"></i>
              Our designers then craft multiple logo concepts with thoughtful typography, color systems, and symbolic structure.
            </li>
            <li>
              <i class="fa-solid fa-circle-check"></i>
              Once approved, we deliver fully organized files—vector formats, web exports, and ready-to-use versions for packaging, signage, and social platforms.
            </li>
            <li>
              <i class="fa-solid fa-circle-check"></i>
              You can also add optional brand assets like stationery, social media layouts, headers, and essential style-guide elements.
            </li>
          </ul>

          <!--<div class="mt-4 d-flex flex-wrap gap-2">-->
          <!--  <span class="pill-tag"><i class="fa-solid fa-layer-group"></i>Vector artwork</span>-->
          <!--  <span class="pill-tag"><i class="fa-solid fa-palette"></i>Color &amp; monochrome versions</span>-->
          <!--  <span class="pill-tag"><i class="fa-solid fa-shield"></i>Full ownership rights</span>-->
          <!--</div>-->
        </div>
      </div>
    </div>
  </section>
<!-- Portfolio -->
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
          <!--<button type="button" data-category="web">Web</button>-->
          <button type="button" data-category="animated logo">Animated Logo</button>
        </div>
      </div>

<!-- GRID (9 items, 3x3 – har tab me filter se 6 tak dikhao if needed) -->
<div class="row g-4 portfolio-grid">
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
<div class="col-md-6 col-lg-4 portfolio-item" data-category="logo" data-portfolio-item>
    <div class="portfolio-card js-portfolio-card" data-img="img/logo/09.webp">
        <img src="img/logo/09.webp" alt="Logo Design 03" />
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
<!-- BRANDING 1 -->
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
<!-- BRANDING 1 -->
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
<!-- BRANDING 1 -->
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
<!-- BRANDING 1 -->
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
<!-- BRANDING 1 -->
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
<!-- BRANDING 1 -->
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
<!-- BRANDING 1 -->
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
<!-- BRANDING 1 -->
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
<!-- BRANDING 1 -->
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
<!-- BRANDING 1 -->
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
<!-- BRANDING 1 -->
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
<!-- BRANDING 1 -->
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
<!-- BRANDING 1 -->
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
<!-- BRANDING 1 -->
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
<!-- BRANDING 1 -->
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
<!-- BRANDING 1 -->
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
<!-- BRANDING 1 -->
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
<!--<div class="col-md-6 col-lg-4 portfolio-item" data-category="web" data-portfolio-item>-->
<!--          <div-->
<!--            class="portfolio-card js-portfolio-card"-->
<!--            data-img="img/web/1.webp"-->
<!--          >-->
<!--            <img-->
<!--              src="img/web/1.webp"-->
<!--              alt="Website 01"-->
<!--            />-->
<!--            <div class="portfolio-meta">-->
<!--              <div>-->
<!--                <strong>Agora Sneakers</strong><br />-->
<!--                <span>E-commerce hero layout</span>-->
<!--              </div>-->
<!--              <span>Web</span>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
<!-- WEB 1 -->
<!--<div class="col-md-6 col-lg-4 portfolio-item" data-category="web" data-portfolio-item>-->
<!--          <div-->
<!--            class="portfolio-card js-portfolio-card"-->
<!--            data-img="img/web/2.webp"-->
<!--          >-->
<!--            <img-->
<!--              src="img/web/2.webp"-->
<!--              alt="Website 01"-->
<!--            />-->
<!--            <div class="portfolio-meta">-->
<!--              <div>-->
<!--                <strong>Agora Sneakers</strong><br />-->
<!--                <span>E-commerce hero layout</span>-->
<!--              </div>-->
<!--              <span>Web</span>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
<!-- WEB 1 -->
<!--<div class="col-md-6 col-lg-4 portfolio-item" data-category="web" data-portfolio-item>-->
<!--          <div-->
<!--            class="portfolio-card js-portfolio-card"-->
<!--            data-img="img/web/3.webp"-->
<!--          >-->
<!--            <img-->
<!--              src="img/web/3.webp"-->
<!--              alt="Website 01"-->
<!--            />-->
<!--            <div class="portfolio-meta">-->
<!--              <div>-->
<!--                <strong>Agora Sneakers</strong><br />-->
<!--                <span>E-commerce hero layout</span>-->
<!--              </div>-->
<!--              <span>Web</span>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
<!-- WEB 1 -->
<!--<div class="col-md-6 col-lg-4 portfolio-item" data-category="web" data-portfolio-item>-->
<!--          <div-->
<!--            class="portfolio-card js-portfolio-card"-->
<!--            data-img="img/web/4.webp"-->
<!--          >-->
<!--            <img-->
<!--              src="img/web/4.webp"-->
<!--              alt="Website 01"-->
<!--            />-->
<!--            <div class="portfolio-meta">-->
<!--              <div>-->
<!--                <strong>Agora Sneakers</strong><br />-->
<!--                <span>E-commerce hero layout</span>-->
<!--              </div>-->
<!--              <span>Web</span>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
<!-- WEB 1 -->
<!--<div class="col-md-6 col-lg-4 portfolio-item" data-category="web" data-portfolio-item>-->
<!--          <div-->
<!--            class="portfolio-card js-portfolio-card"-->
<!--            data-img="img/web/5.webp"-->
<!--          >-->
<!--            <img-->
<!--              src="img/web/5.webp"-->
<!--              alt="Website 01"-->
<!--            />-->
<!--            <div class="portfolio-meta">-->
<!--              <div>-->
<!--                <strong>Agora Sneakers</strong><br />-->
<!--                <span>E-commerce hero layout</span>-->
<!--              </div>-->
<!--              <span>Web</span>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
<!-- WEB 1 -->
<!--<div class="col-md-6 col-lg-4 portfolio-item" data-category="web" data-portfolio-item>-->
<!--          <div-->
<!--            class="portfolio-card js-portfolio-card"-->
<!--            data-img="img/web/6.webp"-->
<!--          >-->
<!--            <img-->
<!--              src="img/web/6.webp"-->
<!--              alt="Website 01"-->
<!--            />-->
<!--            <div class="portfolio-meta">-->
<!--              <div>-->
<!--                <strong>Agora Sneakers</strong><br />-->
<!--                <span>E-commerce hero layout</span>-->
<!--              </div>-->
<!--              <span>Web</span>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
<!-- WEB 1 -->
<!--<div class="col-md-6 col-lg-4 portfolio-item" data-category="web" data-portfolio-item>-->
<!--          <div-->
<!--            class="portfolio-card js-portfolio-card"-->
<!--            data-img="img/web/7.webp"-->
<!--          >-->
<!--            <img-->
<!--              src="img/web/7.webp"-->
<!--              alt="Website 01"-->
<!--            />-->
<!--            <div class="portfolio-meta">-->
<!--              <div>-->
<!--                <strong>Agora Sneakers</strong><br />-->
<!--                <span>E-commerce hero layout</span>-->
<!--              </div>-->
<!--              <span>Web</span>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
<!-- WEB 1 -->
<!--<div class="col-md-6 col-lg-4 portfolio-item" data-category="web" data-portfolio-item>-->
<!--          <div-->
<!--            class="portfolio-card js-portfolio-card"-->
<!--            data-img="img/web/8.webp"-->
<!--          >-->
<!--            <img-->
<!--              src="img/web/8.webp"-->
<!--              alt="Website 01"-->
<!--            />-->
<!--            <div class="portfolio-meta">-->
<!--              <div>-->
<!--                <strong>Agora Sneakers</strong><br />-->
<!--                <span>E-commerce hero layout</span>-->
<!--              </div>-->
<!--              <span>Web</span>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
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
<!-- PRICING SECTION -->
<section id="pricing" class="py-5">
  <div class="container">
    <div class="text-center mb-4">
      <p class="section-eyebrow">Logo Pakages</p>
      <h2 class="section-title">Logo Design And <span>Branding Pakages</span></h2>
      <p class="section-subtitle">
        We craft logos infused with bold creativity, crisp lines, and colors harmonized to elevate your brand effortlessly.
      </p>
    </div>
<div class="text-center mb-4">
  <ul class="nav nav-tabs justify-content-center pricing-toggle pricing-toggle-main" id="pricingTab" role="tablist">
    <li class="nav-item" role="presentation">
      <button
        class="nav-link active"
        id="logo-tab"
        data-bs-toggle="tab"
        data-bs-target="#logo-pricing"
        type="button"
        role="tab"
        aria-controls="logo-pricing"
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
        data-bs-target="#branding-pricing"
        type="button"
        role="tab"
        aria-controls="branding-pricing"
        aria-selected="false"
      >
        Branding
      </button>
    </li>
  </ul>
</div>

<div class="tab-content" id="pricingTabContent">
  <!-- LOGO PRICING TAB -->
  <div
    class="tab-pane fade show active"
    id="logo-pricing"
    role="tabpanel"
    aria-labelledby="logo-tab"
  >
    <div class="row g-4 pricing-grid">
      <div class="col-md-6 col-lg-3 pricing-item" data-category="logo">
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
          <button class="btn pricing-btn plan-btn" data-package="Logo Design-Bronze Plan-USD-49-0">
            Buy Now
          </button>
        </div>
      </div>

      <div class="col-md-6 col-lg-3 pricing-item" data-category="logo">
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
          <button class="btn pricing-btn plan-btn" data-package="Logo Design-Silver Plan-USD-99-0">
            Buy Now
          </button>
        </div>
      </div>

      <div class="col-md-6 col-lg-3 pricing-item" data-category="logo">
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
          <button class="btn pricing-btn plan-btn" data-package="Logo Design-Gold Plan-USD-139-0">
            Buy Now
          </button>
        </div>
      </div>

      <div class="col-md-6 col-lg-3 pricing-item" data-category="logo">
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
          <button class="btn pricing-btn plan-btn" data-package="Logo Design-Platinum Plan-USD-189-0">
            Buy Now
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- BRANDING PRICING TAB -->
  <div
    class="tab-pane fade"
    id="branding-pricing"
    role="tabpanel"
    aria-labelledby="branding-tab"
  >
    <div class="row g-4 pricing-grid">
      <div class="col-md-6 col-lg-3 pricing-item" data-category="branding">
        <div class="pricing-card">
          <h3>Basic Plan</h3>
          <h2>$59</h2>
          <ul>
            <li>Business Card Design</li>
            <li>Letterhead Design</li>
            <li>Envelope Design</li>
            <li>100% Ownership</li>
          </ul>
          <button class="btn pricing-btn plan-btn" data-package="Branding-Basic Plan-USD-59-0">
            Buy Now
          </button>
        </div>
      </div>

      <div class="col-md-6 col-lg-3 pricing-item" data-category="branding">
        <div class="pricing-card">
          <h3>Pro Plan</h3>
          <h2>$99</h2>
          <ul>
            <li>Business Card Design</li>
            <li>Letterhead Design</li>
            <li>Envelope Design</li>
            <li>Email Signature</li>
            <li>2 Social Covers</li>
          </ul>
          <button class="btn pricing-btn plan-btn" data-package="Branding-Pro Plan-USD-99-0">
            Buy Now
          </button>
        </div>
      </div>

      <div class="col-md-6 col-lg-3 pricing-item" data-category="branding">
        <div class="pricing-card featured">
          <h3>Premium plan</h3>
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
          <button class="btn pricing-btn plan-btn" data-package="Branding-Premium plan-USD-149-0">
            Buy Now
          </button>
        </div>
      </div>

      <div class="col-md-6 col-lg-3 pricing-item" data-category="branding">
        <div class="pricing-card">
          <h3>Deluxe Plan</h3>
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
          <button class="btn pricing-btn plan-btn" data-package="Branding-Deluxe Plan-USD-199-0">
            Buy Now
          </button>
        </div>
      </div>
    </div>
  </div>
</div>

    </div>
  </div>
</section>
<!-- How It Works -->
<section class="how-section section-padding" id="how-it-works">
    <div class="container">
      <div class="text-center mb-4 mb-lg-5">
        <p class="section-eyebrow">How It Works</p>
        <h2 class="section-title">A Clear, Collaborative <span class="blue">Logo Design</span> Process.</h2>
        <p class="section-lead  w-75 mx-auto">
          Design Centura follows a structured workflow so every stage of your logo project is transparent.
          You always know what we are designing, why we are designing it and when you will see each round.
        </p>
      </div>

      <div class="row g-4">
        <div class="col-md-4">
          <article class="how-step">
            <div class="how-step-icon">
              <img src="img/webicon_CreativeDirection.svg" width="100%">
            </div>
            <span>Step One</span>
            <h3>Discovery &amp; Creative Direction</h3>
            <p>
              We review your logo brief, study competitors and clarify brand positioning. Together we define the tone, style and design goals so every concept moves your brand in the right direction.
            </p>
          </article>
        </div>
        <div class="col-md-4">
          <article class="how-step">
            <div class="how-step-icon">
              <img src="img/webicon_ExplorationRefinement.svg" width="100%">
            </div>
            <span>Step Two</span>
            <h3>Concept Exploration &amp; Refinement</h3>
            <p>
              Our designers create multiple custom logo routes with strong typography, icons and color ideas. You select your favorites and we refine them through rounds of feedback and revisions.
            </p>
          </article>
        </div>
        <div class="col-md-4">
          <article class="how-step">
            <div class="how-step-icon">
               <img src="img/webicon_FinalFilesBrand.svg" width="100%">
            </div>
            <span>Step Three</span>
            <h3>Final Files &amp; Brand-Ready Delivery</h3>
            <p>
              Once approved, we prepare logo files for print, web and social platforms. You receive organized folders, usage guidance and add-on options to extend your new identity across collateral.
            </p>
          </article>
        </div>
      </div>
    </div>
  </section>
<section class="faqs-sec pt-0" id="faqs-sec">
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
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        How long does a logo design project take?
                      </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        Most logo concepts are delivered within 3–5 business days, and revisions depend on your feedback speed. A complete brand identity usually takes 7–10 days.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Do you provide multiple logo concepts?
                      </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        Yes. Every package includes multiple unique concepts created from scratch. You choose the one you like, and we refine it until it’s perfect.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Will I receive all final files after the project?
                      </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        Absolutely. You will receive all essential formats — AI, EPS, PDF, PNG, JPG, and SVG — so you can use your design for web, print, and branding.
                      </div>
                    </div>
                  </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Do you also design websites?
                      </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        Yes. We provide complete website design services including UI/UX, landing pages, and WordPress development, fully responsive on all devices.
                      </div>
                    </div>
                  </div>
                    <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        Can you work with my existing brand or improve it?
                      </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        Of course. We can enhance your existing brand, update your colors/typography, or create a fresh modern identity while keeping your core style intact.
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
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
                  Share your project brief.<br />We’ll take it from here.
                </h2>
                <p class="contact-text">
                  Tell us if you need a logo, brand identity, website or a full bundle.
                  We’ll reply with packages, timelines and simple next steps.
                </p>

                <div class="contact-info-block">
                  <div class="contact-info-item">
                    <span class="contact-info-label">Email</span>
                    <a class="text-decoration-none text-light" href="mailto:info@designcentura.com" class="contact-info-value">info@designcentura.com</a>
                  </div>
                  <div class="contact-info-item">
                    <span class="contact-info-label">Phone</span>
                    <a class="text-decoration-none text-light" href="tel:346-626-8651" class="contact-info-value">346-626-8651</a>
                  </div>
                  <div class="contact-info-item">
                    <span class="contact-info-label">Mailing Address</span>
                    <span class="contact-info-value">
                      95 Third Street, San Francisco, CA 94103
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
                          <option value="" selected disabled>Please Enter Your Project Type</option>
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