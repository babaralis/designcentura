<?php include('templates/header.php'); ?>

<style>
    :root{
    --primary:#0686d8;
    --primary-dark:#005da5;
    --primary-soft:#e4f2fb;
    --text-main:#111827;
    --text-muted:#6b7280;
    --bg-light:#f8fafc;
    --border:#e5e7eb;
    --radius-card:1.4rem;
  }

  *{box-sizing:border-box;}

  body{
    font-family:"Poppins",system-ui,-apple-system,BlinkMacSystemFont,"Segoe UI",sans-serif;
    color:var(--text-main);
    background:#ffffff;
    line-height:1.6;
  }
  
  .hero {
    padding-top: 6rem;
    padding-bottom: 4rem;
    color: #fff;
    display: flex;
    align-items: center;
    height:100vh;
}

.hero-eyebrow {
    text-transform: uppercase;
    letter-spacing: 0.2em;
    font-size: 0.83rem;
    opacity: 0.85;
}

.hero-title {
    font-size: clamp(2.4rem, 3.2vw, 2.8rem);
    font-weight: 600;
    line-height: 1.1;
    margin-left:0px;
    margin-bottom: 1rem;
}

.hero-title span {
    color: var(--accent);
}

.hero-text {
    max-width: 540px;
    margin:auto;
    font-size: 0.98rem;
    opacity: 0.9;
}
section.hero .hero-cta
{
    justify-content:center;
}
.hero-cta .btn {
    
    padding: 0.8rem 1.7rem;
    border-radius: 32px;
    font-weight: 600;
    letter-spacing: 0.05em;
    text-transform: uppercase;
    font-size: 0.85rem;
}

img{max-width:100%;height:auto;display:block;}

.about-list {
    list-style: none;
    padding: 0;
    margin: 0;
}
.about-list li {
    display: flex;
    align-items: flex-start;
    gap: .6rem;
    font-size: .9rem;
    color: var(--muted);
    margin-bottom: .55rem;
}
.about-list li i {
    margin-top: .25rem;
    color: var(--primary);
}
section.about-section .custom-btn
{
    justify-content:left;
}
section.about-section .custom-btn.custom-btn2
{
    border:1px solid #0d6efd;
    color: var(--muted);
}
section.about-section .custom-btn.custom-btn2:hover
{
    background:#0d6efd;
    color:#fff;
}
.pricing-card h3
{
    margin-bottom:16px;    
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

@media(max-width:576px)
{
   .hero 
   {
        padding-top: 4.2rem !important;
   }
  .hero-title
  {
      font-size:1.6rem;
  }  
  .badge-pill
  {
      font-size:0.6rem;
  }
}


</style>


<!-- HERO: Book Publication -->
<section class="hero section-padding">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-lg-9">
        <div class="badge-pill mb-3">
          
          Get a Personalized, High-Impact Website for Your Business
        </div>
        <h1 class="hero-title mb-3">
          Your website is the front door to your brand <br>
          <span>brand — and at DesignCentura, we design it with purpose.</span>
        </h1>
        <p class="hero-text mb-3">
          Every layout, every interaction, and every visual detail is crafted to reflect your message clearly while guiding visitors to take action.
        </p>
        <p class="hero-text mb-3">
          Whether you’re building your first website or upgrading an outdated one, we deliver a digital experience that attracts, engages, and converts.
        </p>
        <div class="hero-cta d-flex flex-wrap align-items-center gap-2">
          <a href="#portfolio" class="btn btn-primary btn-sm custom-btn">
            Visit Portfolio 
          </a>
          <a href="#process" class="btn btn-outline-light btn-sm custom-btn">
            How It Works
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="about-section section-padding" id="about-web-design">
    <div class="container">
      <div class="row align-items-center g-4">
        <div class="col-lg-6">
            <img src="img/webhomebanner.webp" width="100%" alt="Design Centura web design and development preview">
        </div>
        <div class="col-lg-6">
          <p class="section-eyebrow left">Websites That Turn Visitors Into Clients</p>
          <h2 class="section-title">We Build Strategic, <span class="blue">User-Centered Website Designs</span></h2>
          <p class="section-lead">
            The moment a visitor lands on your site, they decide whether your brand deserves their time.
          </p>
          <p class="section-lead">
            We study your audience, goals, and brand personality — then transform those insights into a clean, persuasive interface that builds trust and encourages conversions.
          </p>
          
          <p class="section-lead"><b>What You Get:</b></p>
          
          <ul class="about-list">
            <li>
              <i class="fa-solid fa-circle-check"></i>
             Modern, responsive layouts
            </li>
            <li>
              <i class="fa-solid fa-circle-check"></i>
              Mobile-friendly interface
            </li>
            <li>
              <i class="fa-solid fa-circle-check"></i>
              Faster loading performance
            </li>
            <li>
              <i class="fa-solid fa-circle-check"></i>
              SEO-structured pages
            </li>
            <li>
              <i class="fa-solid fa-circle-check"></i>
              Clean design flow
            </li>
            <li>
              <i class="fa-solid fa-circle-check"></i>
              Optimized user paths
            </li>
            <li>
              <i class="fa-solid fa-circle-check"></i>
              Strong brand presentation
            </li>
          </ul>
          
           <div class="hero-cta d-flex flex-wrap align-items-center gap-2">
          <a href="#portfolio" class="btn btn-primary btn-sm custom-btn">
            Visit Portfolio 
          </a>
          <a href="#process" class="btn btn-outline-light btn-sm custom-btn custom-btn2">
            How It Works
          </a>
        </div>
        </div>
      </div>
    </div>
  </section>
  
  <section class="about-section section-padding" id="about-web-design">
    <div class="container">
      <div class="row align-items-center g-4">
       
        <div class="col-lg-6 col-md-6 col-12">
          <h2 class="section-title">Website Designs Crafted <span class="blue">to Grow Your Business</span></h2>
          <p class="section-lead">
            Your website should work like a digital engine — attracting leads, supporting sales, and showcasing your brand with credibility.
          </p>
          <p class="section-lead">
            DesignCentura creates tailored web experiences that align with your vision and help you gain a competitive digital presence.
          </p>
      </div>
       <div class="col-lg-6 col-md-6 col-12">
            <img src="img/webhomebanner.webp" width="100%" alt="Design Centura web design and development preview">
        </div>
    </div>
  </section>
  
  <section id="pricing" class="py-5">
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-12">
            <div class="text-center mb-4">
              <p class="section-eyebrow">Web Design Packages</p>
              <h2 class="section-title">Website Designs Crafted <span class="blue">to Grow Your Business</span></h2>
              <p class="section-subtitle">
                Your website should work like a digital engine — attracting leads, supporting sales, and showcasing your brand with credibility.
              </p>
              <p class="section-subtitle">
                DesignCentura creates tailored web experiences that align with your vision and help you gain a competitive digital presence.
              </p>
            </div>
        </div>
    </div>
    <div class="row g-4 pricing-grid">
      <div class="col-md-6 col-lg-3 pricing-item">
        <div class="pricing-card">
          <h3>HTML WEBSITE</h3>
        <h2>$699</h2>
        
        <p><small>Clean. Fast. Lightweight. Built for Businesses That Want Speed & Stability.</small></p>
        <p><small>Our HTML websites offer exceptional performance with hand-coded layouts that load instantly and deliver a smooth browsing experience.</small></p>
        <p><small>Perfect for small to mid-sized brands looking for speed-focused, visually polished web presence.</small></p>
         <h3>You Get</h3>
        <ul>
          <li>Hand-coded structure</li>
          <li>Polished front-end visuals</li>
          <li>Mobile-responsive layout</li>
          <li>W3C-validated coding</li>
          <li>SEO-optimized foundation</li>
          <li>Secure, lightweight framework</li>

        </ul>
          <button class="btn pricing-btn plan-btn" data-package="Website-HTML-USD-699-0">Buy Now</a></button>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 pricing-item">
        <div class="pricing-card">
          <h3>CMS WEBSITE </h3>
          <h2>$1199</h2>
        
            <p><small>Flexible Website Built on a Powerful Content Management System</small></p>
            <p><small>A CMS website gives your team full control — edit pages, update sections, and publish content with an easy-to-use admin panel.</small></p>
            <p><small>We build custom CMS websites tailored to your brand’s structure, features, and content needs.</small></p>
            
            <h3>You Get</h3>
            
     
          <ul>
               <li>Full CMS integration</li>
               <li>Drag-and-drop editing</li>
               <li>Custom layouts</li>
               <li>Advanced design flexibility</li>
               <li>Secure backend access</li>
               <li>SEO-optimized architecture</li>

            </ul>
          <button class="btn pricing-btn plan-btn" data-package="Website-CMS-USD-1199-0">Buy Now</a></button>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 pricing-item">
        <div class="pricing-card featured">
          <h3>E-COMMERCE WEBSITE</h3>
          <h2>$1699</h2>
          
            <p><small>Sell Smarter With a User-Friendly Online Store Built for Conversions</small></p>
            <p><small>We develop clean, organized, and conversion-driven online stores that simplify shopping and streamline your product flow.</small></p>
            <p><small>From catalog design to checkout optimization, we ensure your customers enjoy a smooth buying journey.</small></p>
          
           <h3>You Get</h3>
          
        <ul>
           <li>Custom storefront UI</li>
           <li>Product categorization</li>
           <li>Secure checkout system</li>
           <li>Payment gateway setup</li>
           <li>Search-optimized product pages</li>
           <li>Inventory-friendly structure</li>
           <li>Analytics & tracking</li>
        </ul>
          <button class="btn pricing-btn plan-btn" data-package="Website-ECom-USD-1699-0">Buy Now</a></button>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 pricing-item">
        <div class="pricing-card">
          <h3>PORTAL WEBSITE</h3>
          <h2>$2999</h2>
          
            <p><small>Advanced Portal Systems for Scalable, Multi-User Operations</small></p>
            <p><small>Need a structured system for users, data, or internal operations?</small></p>
            <p><small>DesignCentura builds portal websites engineered for reliability, controlled access, and customized functionality across roles.</small></p>
          
          <h3>You Get</h3>
             <ul>
                  <li>Multi-user login</li>
                  <li>Admin dashboard</li>
                  <li>Custom panels</li>
                  <li>Role-based access</li>
                  <li>API-friendly integrations</li>
                  <li>Secure authentication</li>
                  <li>Responsive UI</li>
                  <li>Workflow automation</li>
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
                <h2 class="section-title text-center">OUR WEBSITE <span class="blue">DESIGN PROCESS</span></h2>
              
              </div>
          </div>
      </div>

      <div class="row g-4">
        <div class="col-md-4">
          <article class="how-step">
            <div class="how-step-icon">
              <img src="img/webicons_Sitemap.svg" width="100%" alt="">
            </div>
            <span>PHASE 1 </span>
            <h3>ANALYSIS</h3>
            <p>
                Understanding goals, audience, and business requirements.
            </p>
          </article>
        </div>
        <div class="col-md-4">
          <article class="how-step">
            <div class="how-step-icon">
              <img src="img/webicons_UIDesign.svg" width="100%" alt="">
            </div>
            <span>PHASE 2</span>
            <h3>PLANNING</h3>
            <p>
                Wireframes, sitemap structure, content direction.
            </p>
          </article>
        </div>
        <div class="col-md-4">
          <article class="how-step">
            <div class="how-step-icon">
              <img src="img/webicons_testing.svg" width="100%" alt="">
            </div>
            <span>PHASE 3</span>
            <h3>DESIGN</h3>
            <p>
                Visual concepts, color harmony, typography system.
            </p>
          </article>
        </div>
        <div class="col-md-4">
          <article class="how-step">
            <div class="how-step-icon">
              <img src="img/webicons_testing.svg" width="100%" alt="">
            </div>
            <span>PHASE 4</span>
            <h3>CONTENT</h3>
            <p>
                Brand messaging, SEO writing, image selection.
            </p>
          </article>
        </div>
        <div class="col-md-4">
          <article class="how-step">
            <div class="how-step-icon">
              <img src="img/webicons_testing.svg" width="100%" alt="">
            </div>
            <span>PHASE 5</span>
            <h3>DEVELOPMENT</h3>
            <p>
                Coding, integrations, CMS setup, responsive layout.
            </p>
          </article>
        </div>
        <div class="col-md-4">
          <article class="how-step">
            <div class="how-step-icon">
              <img src="img/webicons_testing.svg" width="100%" alt="">
            </div>
            <span>PHASE 6</span>
            <h3>TESTING</h3>
            <p>
                Speed testing, device compatibility, bug fixes.
            </p>
          </article>
        </div>
        <div class="col-md-4">
          <article class="how-step">
            <div class="how-step-icon">
              <img src="img/webicons_testing.svg" width="100%" alt="">
            </div>
            <span>PHASE 7</span>
            <h3>DEPLOYMENT</h3>
            <p>
                Launch, final review, support period.
            </p>
          </article>
        </div>
      </div>
    </div>
  </section>
  
  <!-- PORTFOLIO -->
<section id="portfolio" class="pt-0">
    <div class="container">
      <div class="text-center mb-4">
        <p class="section-eyebrow">Our work</p>
        <h2 class="section-title">Our Website <span class="blue">Portfolio</span></h2>
        <p class="section-subtitle">
          Explore a wide selection of websites built for industries including corporate, real estate, healthcare, beauty, restaurants, logistics, e-commerce, and more.
        </p>
        <p class="section-subtitle">
          Each project demonstrates thoughtful design and modern execution tailored to real business goals.
        </p>
      </div>

      <!-- FILTER TABS -->
      <div class="text-center mb-4">
        <div class="pricing-toggle portfolio-toggle">
          <button type="button" data-category="all" class="active">All</button>
          <button type="button" data-category="logo">Logo</button>
          <button type="button" data-category="branding">Branding</button>
          <button type="button" data-category="web">Web</button>
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
    <div class="portfolio-card js-portfolio-card" data-img="img/logo/9-L.jpg">
        <img src="img/logo/9-L.jpg" alt="Logo Design 03" />
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
            data-img="img/br6.webp"
          >
            <img
              src="img/br6.webp"
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
            data-img="img/br7.webp"
          >
            <img
              src="img/br7.webp"
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
        <div class="col-md-6 col-lg-4 portfolio-item" data-category="branding" data-portfolio-item>
          <div
            class="portfolio-card js-portfolio-card"
            data-img="iimg/br4.webp"
          >
            <img
              src="img/br4.webp"
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

<!-- BRANDING 1 -->

<div class="col-md-6 col-lg-4 portfolio-item" data-category="branding" data-portfolio-item>
          <div
            class="portfolio-card js-portfolio-card"
            data-img="img/br5.webp"
          >
            <img
              src="img/br5.webp"
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
            data-img="img/br2.webp"
          >
            <img
              src="img/br2.webp"
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
        <div class="col-md-6 col-lg-4 portfolio-item" data-category="branding" data-portfolio-item>
          <div
            class="portfolio-card js-portfolio-card"
            data-img="img/br3.webp"
          >
            <img
              src="img/br3.webp"
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
        <!-- BRANDING 1 -->
<div class="col-md-6 col-lg-4 portfolio-item" data-category="branding" data-portfolio-item>
          <div
            class="portfolio-card js-portfolio-card"
            data-img="img/br1.webp"
          >
            <img
              src="img/br1.webp"
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

<?php include('templates/footer.php'); ?>