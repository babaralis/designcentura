<?php include('templates/header.php'); ?>
<style>
    p.hero-text{
        max-width:unset ;
    }
    .ai-hero-badge {
        display: inline-flex;
        align-items: center;
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        padding: 0.5rem 1.2rem;
        border-radius: 50px;
        border: 1px solid rgba(255, 255, 255, 0.2);
        color: #ffffff;
        font-weight: 600;
        font-size: 0.9rem;
        letter-spacing: 0.05em;
    }
    .hero {
        min-height: unset !important; 
        padding-top: 8rem;
        padding-bottom: 6rem;
        background: radial-gradient(circle at top left, #3a8dff 0, #0340b3 45%, #02142e 100%);
        color: #fff;
        display: flex;
        align-items: center;
        margin-top:0rem !important;
    }
    .contact-shell{
        background:radial-gradient(circle at top left, #1e40af 0, #020617 55%, #000 100%) !important;
        box-shadow:none !important;
    }
    .contact-modern{
        background:#fff !important;
    }
    .hero-title span {
        color: var(--accent);
    }
    @media(max-width:650px){
        .pricing-toggle {
            display: inline-flex;
            border-radius: 999px;
            padding: 1rem;
            background: #e4e7f5;
            flex-wrap: wrap;
            justify-content: center;
            gap: 0.5rem;
        }
        
    }
</style>

<!-- HERO -->
<section id="home" class="hero">
    <div class="container">
      <div class="row align-items-center gy-4 justify-content-center text-center">
        <div class="col-lg-8">
          <div class="badge-pill mb-3 text-center">Portfolio</div>
          <h1 class="hero-title">
            Custom Logo Design, <span>Branding & Website</span> Solutions.
          </h1>
          <p class="hero-text mb-4">
            Witness our team’s unconventional creativity for yourself. We set the bar so high that you won’t be satisfied with any service but ours.
          </p>
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