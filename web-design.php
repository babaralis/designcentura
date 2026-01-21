<?php include('templates/header.php'); ?>
<style>
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

    @media (max-width:575.98px){
      .section-padding{
        padding:60px 0;
      }
    }

    .sub-heading{
      font-size:.85rem;
      letter-spacing:.09em;
      text-transform:uppercase;
      color:var(--primary);
      font-weight:600;
      margin-bottom:.4rem;
    }

    .section-title {
    font-weight: 600;
    font-size: 2.8rem;
    margin-bottom: 0.4rem;
}
.section-title span{
        color:#1d4ed8;
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
    .banner-title span{
      color:#a5c7ff;
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

    /* About web design */
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

    /* Services highlight cards */
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

    /* Portfolio */
    /*.portfolio-section{*/
    /*  background:var(--bg-light);*/
    /*}*/

    /*.portfolio-filter{*/
    /*  display:flex;*/
    /*  flex-wrap:wrap;*/
    /*  gap:.6rem;*/
    /*  margin-bottom:2rem;*/
    /*}*/
    /*.portfolio-filter button{*/
    /*  border-radius:999px;*/
    /*  border:1px solid #d1d5db;*/
    /*  padding:.4rem 1rem;*/
    /*  font-size:.82rem;*/
    /*  font-weight:500;*/
    /*  background:#ffffff;*/
    /*  color:#111827;*/
    /*  cursor:pointer;*/
    /*  transition:all .2s ease;*/
    /*}*/
    /*.portfolio-filter button.active,*/
    /*.portfolio-filter button:hover{*/
    /*  background:var(--primary);*/
    /*  color:#ffffff;*/
    /*  border-color:var(--primary);*/
    /*  box-shadow:0 12px 30px rgba(25,107,255,.45);*/
    /*}*/

    /*.portfolio-grid{*/
    /*  display:grid;*/
    /*  grid-template-columns:repeat(4,1fr);*/
    /*  gap:1rem;*/
    /*}*/

    /*.portfolio-item{*/
    /*  position:relative;*/
    /*  overflow:hidden;*/
    /*  border-radius:1.1rem;*/
    /*  background:#111827;*/
    /*  box-shadow:0 16px 45px rgba(15,23,42,.16);*/
    /*}*/
    /*.portfolio-item img{*/
    /*  width:100%;*/
    /*  height:100%;*/
    /*  object-fit:cover;*/
    /*  transition:transform .45s ease, opacity .3s ease;*/
    /*}*/
    /*.portfolio-item::after{*/
    /*  content:"";*/
    /*  position:absolute;*/
    /*  inset:0;*/
    /*  background:linear-gradient(to top,rgba(15,23,42,.7),transparent 55%);*/
    /*  opacity:0;*/
    /*  transition:opacity .3s ease;*/
    /*}*/
    /*.portfolio-caption{*/
    /*  position:absolute;*/
    /*  left:1rem;*/
    /*  right:1rem;*/
    /*  bottom:.9rem;*/
    /*  display:flex;*/
    /*  align-items:center;*/
    /*  justify-content:space-between;*/
    /*  color:#f9fafb;*/
    /*  opacity:0;*/
    /*  transform:translateY(8px);*/
    /*  transition:all .3s ease;*/
    /*  font-size:.8rem;*/
    /*}*/
    /*.portfolio-caption span{*/
    /*  font-weight:500;*/
    /*}*/
    /*.portfolio-caption i{*/
    /*  color:#facc15;*/
    /*}*/
    /*.portfolio-item:hover img{*/
    /*  transform:scale(1.06);*/
    /*  opacity:.9;*/
    /*}*/
    /*.portfolio-item:hover::after{*/
    /*  opacity:1;*/
    /*}*/
    /*.portfolio-item:hover .portfolio-caption{*/
    /*  opacity:1;*/
    /*  transform:translateY(0);*/
    /*}*/

    /*@media (max-width:991.98px){*/
    /*  .portfolio-grid{*/
    /*    grid-template-columns:repeat(3,1fr);*/
    /*  }*/
    /*}*/
    /*@media (max-width:767.98px){*/
    /*  .portfolio-grid{*/
    /*    grid-template-columns:repeat(2,1fr);*/
    /*  }*/
    /*}*/
    /*@media (max-width:575.98px){*/
    /*  .portfolio-grid{*/
    /*    grid-template-columns:1fr;*/
    /*  }*/
    /*}*/

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
    @media (max-width:767.98px){
      .cta-card{
        padding:2rem 1.8rem;
      }
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

  </style>
<!-- Banner -->
<section class="banner-section section-padding" id="web-banner">
    <div class="container banner-inner">
      <div class="row align-items-center g-4">
        <div class="col-lg-6">
          <div class="mb-3">
            <span class="badge-pill">
              <i class="fa-solid fa-display"></i>
              Design Centura · Web Design Studio
            </span>
          </div>
          <h1 class="banner-title heroHeading">
            Conversion-Focused Web Design and <span>Modern Development.</span>
          </h1>
          <p class="banner-sub">
            Design Centura builds responsive, SEO-friendly websites that load fast, tell your brand story clearly and convert visitors into leads, bookings and sales across every device.
          </p>
          <div class="banner-actions">
            <a href="#cta-brief" class="btn btn-primary-custom">
              Get a Custom Website Proposal
            </a>
            <a href="#web-portfolio" class="btn btn-outline-custom">
              View Web Design Portfolio
            </a>
          </div>
          <div class="banner-meta">
            <span><i class="fa-solid fa-check-circle"></i>Fully responsive layouts for mobile, tablet and desktop</span>
            <span><i class="fa-solid fa-check-circle"></i>Optimized for search, speed and conversions</span>
            <span><i class="fa-solid fa-check-circle"></i>Built on scalable, easy-to-manage platforms</span>
          </div>
        </div>
        <div class="col-lg-6">
          <!--<div class="banner-visual">-->
          <!--  <div class="banner-mockup">-->
          <!--    <div class="banner-mockup-grid">-->
          <!--      <div class="logo-card">Lead-Gen Landing Page</div>-->
          <!--      <div class="logo-card">E-Commerce Storefront</div>-->
          <!--      <div class="logo-card">SaaS Marketing Site</div>-->
          <!--      <div class="logo-card">Portfolio &amp; Services</div>-->
          <!--    </div>-->
          <!--  </div>-->
          <!--  <div class="banner-badge">-->
          <!--    <i class="fa-solid fa-star"></i>-->
          <!--    180+ high-performing websites launched by Design Centura-->
          <!--  </div>-->
          <!--</div>-->
          <div>
            <img src="img/wbimage.webp" width="100%" alt="Design Centura web design and development preview">
              
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- About Web Design -->
<section class="about-section section-padding" id="about-web-design">
    <div class="container">
      <div class="row align-items-center g-4">
        <div class="col-lg-6">
            <img src="img/webhomebanner.webp" width="100%" alt="Design Centura web design and development preview">
        </div>
        <div class="col-lg-6">
          <p class="section-eyebrow left">About Our Web Design &amp; Development Services</p>
          <h2 class="section-title">We Design <span class="blue">Websites</span> That Act as Your Best <span class="blue">Salesperson</span>.</h2>
          <p class="section-lead">
            Your website is where prospects decide if they trust your brand. Design Centura crafts UX-led websites that look premium, explain your offer clearly and guide visitors toward taking action without friction.
          </p>
          <ul class="about-list">
            <li>
              <i class="fa-solid fa-circle-check"></i>
              We start by understanding your goals, product, audience and analytics to map a structure that supports your sales funnels and content strategy.
            </li>
            <li>
              <i class="fa-solid fa-circle-check"></i>
              Our designers create interface layouts with strong hierarchy, clean typography and on-brand visuals for desktop, tablet and mobile screens.
            </li>
            <li>
              <i class="fa-solid fa-circle-check"></i>
              Developers turn approved designs into fast, secure, SEO-ready pages using platforms like WordPress or custom front-end frameworks.
            </li>
            <li>
              <i class="fa-solid fa-circle-check"></i>
              You receive an easy-to-manage website with training, launch support and optional ongoing optimization and maintenance.
            </li>
          </ul>

          <!--<div class="row g-3 mt-4">-->
          <!--  <div class="col-md-6">-->
          <!--    <div class="service-pill-card">-->
          <!--      <strong>New Website &amp; Landing Page Builds</strong>-->
          <!--      Ideal for brands that need a fresh digital presence, a product launch page or a complete marketing site from strategy to deployment.-->
          <!--    </div>-->
          <!--  </div>-->
          <!--  <div class="col-md-6">-->
          <!--    <div class="service-pill-card">-->
          <!--      <strong>Website Redesign &amp; Performance Upgrade</strong>-->
          <!--      Perfect if your current website feels outdated, loads slowly or is not converting. We redesign with modern UX and conversion best practices.-->
          <!--    </div>-->
          <!--  </div>-->
          <!--</div>-->

          <!--<div class="mt-4 d-flex flex-wrap gap-2">-->
          <!--  <span class="pill-tag"><i class="fa-solid fa-mobile-screen"></i>Responsive layouts</span>-->
          <!--  <span class="pill-tag"><i class="fa-solid fa-magnifying-glass-chart"></i>SEO architecture</span>-->
          <!--  <span class="pill-tag"><i class="fa-solid fa-gauge-high"></i>Performance optimized</span>-->
          <!--</div>-->
        </div>
      </div>
    </div>
  </section>
<!-- Web Portfolio -->
<section class="portfolio-section section-padding" id="web-portfolio">
    <div class="container">
      <div class="row justify-content-center">
          <div class="col-lg-8">
              <div class="mb-4 mb-lg-5">
                <p class="section-eyebrow">Web Design Portfolio</p>
                <h2 class="section-title text-center">Featured <span class="blue">Websites</span> Designed by <span class="blue">Design Centura</span>.</h2>
                <p class="section-lead w-75 mx-auto text-center">
                  Explore examples of conversion-focused marketing sites, landing pages, e-commerce stores and service websites.
                  Every build is crafted for usability, brand consistency and measurable business outcomes.
                </p>
              </div>                                                                                        
          </div>
      </div>

      <div class='row g-4'>
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
          <!-- WEB 1 -->
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
          <!-- WEB 1 -->
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
          <!-- WEB 1 -->
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
          <!-- WEB 1 -->
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
          <!-- WEB 1 -->
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
          <!-- WEB 1 -->
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
          <!-- WEB 1 -->
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
      </div>
    </div>
  </section>
<!-- PRICING SECTION -->
<section id="pricing" class="py-5">
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-12">
            <div class="text-center mb-4">
              <p class="section-eyebrow">Web Design Packages</p>
              <h2 class="section-title">Brilliant <span>Website Design</span></h2>
              <p class="section-subtitle">
                Through visually stunning layouts and engaging website interactions, we bring your business the excellence it deserves.
              </p>
            </div>
        </div>
    </div>
    <div class="row g-4 pricing-grid">
      <div class="col-md-6 col-lg-3 pricing-item">
        <div class="pricing-card">
          <h3>Static</h3>
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
          <button class="btn pricing-btn plan-btn" data-package="Website-Static-USD-699-0">Buy Now</a></button>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 pricing-item">
        <div class="pricing-card">
          <h3>Dynamic</h3>
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
          <button class="btn pricing-btn plan-btn" data-package="Website-Dynamic-USD-1199-0">Buy Now</a></button>
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
  </div>
</section>
<!-- How It Works -->
<section class="how-section section-padding" id="how-it-works">
    <div class="container">
      <div class="row justify-content-center">
          <div class="col-lg-8 col-12">
              <div class="mb-4 mb-lg-5">
                <p class="section-eyebrow">How It Works</p>
                <h2 class="section-title text-center">A <span class="blue">Clear</span>, Collaborative Web <span class="blue">Design Process</span>.</h2>
                <p class="section-lead w-75 mx-auto text-center">
                  Design Centura follows a proven workflow so your website project stays on track.
                  Each phase is transparent, collaborative and focused on launching a site that aligns with your goals and brand.
                </p>
              </div>
          </div>
      </div>

      <div class="row g-4">
        <div class="col-md-4">
          <article class="how-step">
            <div class="how-step-icon">
              <img src="img/webicons_Sitemap.svg" width="100%" alt="">
            </div>
            <span>Step One</span>
            <h3>Discovery, Sitemap &amp; Wireframes</h3>
            <p>
              We review your offers, audience and analytics, then define sitemap, page goals and wireframes. This phase ensures the site structure supports content, SEO and lead flows before design begins.
            </p>
          </article>
        </div>
        <div class="col-md-4">
          <article class="how-step">
            <div class="how-step-icon">
              <img src="img/webicons_UIDesign.svg" width="100%" alt="">
            </div>
            <span>Step Two</span>
            <h3>UI Design, Content &amp; Interactions</h3>
            <p>
              Designers craft high-fidelity layouts with clear messaging, visual hierarchy and on-brand imagery. We refine copy, calls-to-action and micro interactions so every page supports conversions.
            </p>
          </article>
        </div>
        <div class="col-md-4">
          <article class="how-step">
            <div class="how-step-icon">
              <img src="img/webicons_testing.svg" width="100%" alt="">
            </div>
            <span>Step Three</span>
            <h3>Development, Testing &amp; Launch</h3>
            <p>
              Developers build the site on the chosen platform, implement SEO basics, connect forms and analytics, then test across browsers and devices. After launch, we provide training and support.
            </p>
          </article>
        </div>
      </div>
    </div>
  </section>
<!-- FAQs -->
<section class="faqs-sec pt-0" id="faqs-sec">
    <div class="container">
        <div class="row justify-content-center mb-4">
            <div class="col-lg-8 col-sm-12 text-center">
                <p class="section-eyebrow">FAQs</p>
                <h2 class="section-title">Frequently Asked <span class="blue">Questions</span></h2>
                <p class="section-subtitle">Here are some common questions clients ask before starting their web design and development project with us.</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8 col-sm-12">
                <div class="accordion brand-faq" id="accordionExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        How long does a website design and development project take?
                      </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        Timelines vary based on scope, but a focused landing page typically takes 1–2 weeks, while a full marketing site with multiple pages usually ranges from 3–6 weeks including revisions and testing.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Do you build websites on WordPress or custom platforms?
                      </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        Yes. Most marketing sites are built on WordPress with a clean, custom front-end, while landing pages and apps can use other frameworks.
                        We recommend a stack based on your goals, budget and internal team.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Will the website be responsive and SEO-friendly?
                      </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        Absolutely. All websites are designed mobile-first and tested across major devices.
                        We implement SEO fundamentals such as clean code, semantic headings, meta tags, optimized images and fast loading times.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Can you help with copywriting and content for the site?
                      </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        Yes. We can refine your existing copy or create conversion-focused content from scratch that explains your offer clearly and supports your SEO keywords and brand voice.
                      </div>
                    </div>
                  </div>
                    <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        Do you provide maintenance or support after launch?
                      </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        Yes. We offer optional care plans that cover updates, backups, performance monitoring and small design or content tweaks, so your website stays secure and up to date as your business grows.
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CONTACT -->
<section id="contact" class="contact-modern section-padding">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="contact-shell">
            <div class="row g-4 align-items-start">
              <!-- LEFT: Info -->
              <div class="col-lg-4">
                <p class="contact-kicker">Contact us</p>
                <h2 class="contact-title">
                  Share your website brief. We will take it from here.
                </h2>
                <p class="contact-text">
                  Tell us whether you need a new website, a landing page, an e-commerce store or a full redesign.
                  We will reply with clear packages, timelines and next steps tailored to your goals.
                </p>

                <div class="contact-info-block">
                  <div class="contact-info-item">
                    <span class="contact-info-label">Email</span>
                    <a class="text-decoration-none text-light" href="mailto:info@designcentura.com">info@designcentura.com</a>
                  </div>
                  <div class="contact-info-item">
                    <span class="contact-info-label">Phone</span>
                    <a class="text-decoration-none text-light" href="tel:346-626-8651">346-626-8651</a>
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
                          <option value="Website design and build">Website Design &amp; Build</option>
                          <option value="Landing page design">Conversion Landing Page</option>
                          <option value="Ecommerce website">E-Commerce Website</option>
                          <option value="Website redesign">Website Redesign &amp; UX Upgrade</option>
                          <option value="Website + branding bundle">Website + Branding Bundle</option>
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
                          placeholder="Describe your business, pages required, primary goals, current site link (if any) and timeline."
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
                          <option value="$500 – $1,000">$500 – $1,000</option>
                          <option value="$1,000 – $2,000">$1,000 – $2,000</option>
                          <option value="$2,000 – $5,000">$2,000 – $5,000</option>
                          <option value="$5,000+">$5,000+</option>
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
                          I would like to sign an NDA before sharing sensitive details.
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
                        No spam or newsletters – we only email you about this website project.
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
