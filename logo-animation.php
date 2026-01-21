<?php include('templates/header.php'); ?>

<!-- PAGE: Logo Animation Services -->

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

  img{max-width:100%;height:auto;display:block;}

  .section-padding{
    padding:80px 0;
  }
  @media (max-width:575.98px){
    .section-padding{
      padding:60px 0;
    }
  }

  .section-eyebrow{
    font-size:.8rem;
    text-transform:uppercase;
    letter-spacing:.16em;
    font-weight:600;
    color:var(--primary);
    margin-bottom:.6rem;
  }

  .section-title{
    font-size:2rem;
    font-weight:700;
    margin-bottom:.75rem;
  }
  @media (min-width:992px){
    .section-title{
      font-size:2.3rem;
    }
  }

  .section-lead{
    font-size:.98rem;
    color:var(--text-muted);
    max-width:640px;
  }

  /* Hero */
  .hero-animation{
    background:linear-gradient(135deg,#0057b8,#0686d8 55%,#0ea5e9);
    color:#ffffff;
    position:relative;
    overflow:hidden;
  }
  .hero-animation .badge-pill{
    display:inline-flex;
    align-items:center;
    padding:.35rem .9rem;
    border-radius:999px;
    background:rgba(15,23,42,.2);
    font-size:.8rem;
    font-weight:500;
  }
  .hero-animation .hero-title{
    font-size:2.3rem;
    font-weight:800;
    line-height:1.2;
  }
  @media (min-width:992px){
    .hero-animation .hero-title{
      font-size:2.7rem;
    }
  }
  .hero-animation .hero-title span{
    color:#facc15;
  }
  .hero-animation .hero-text{
    color:#e5e7eb;
    max-width:520px;
  }
  .hero-animation .hero-cta .btn-primary{
    background:#ffffff;
    border-color:#ffffff;
    color:#0f172a;
    font-weight:600;
  }
  .hero-animation .hero-cta .btn-outline-light{
    border-width:1.5px;
    font-weight:500;
  }
  .hero-visual{
    position:relative;
    padding:1.5rem;
  }
  .hero-visual-inner{
    background:#ffffff;
    border-radius:1.6rem;
    padding:1.5rem;
    box-shadow:0 22px 60px rgba(15,23,42,.35);
  }
  .hero-tag{
    display:inline-flex;
    align-items:center;
    gap:.45rem;
    font-size:.75rem;
    padding:.35rem .8rem;
    border-radius:999px;
    background:var(--primary-soft);
    color:var(--primary-dark);
    font-weight:500;
    margin-bottom:.75rem;
  }

  /* Why section */
  .why-card{
    background:#ffffff;
    border-radius:var(--radius-card);
    border:1px solid var(--border);
    padding:1.8rem 2rem;
    box-shadow:0 12px 40px rgba(15,23,42,.04);
  }
  .why-card p{
    margin-bottom:.5rem;
  }

  .why-icons-row .icon-bullet{
    display:flex;
    align-items:flex-start;
    gap:.75rem;
    margin-bottom:1rem;
  }
  .icon-circle{
    width:34px;
    height:34px;
    border-radius:999px;
    border:1px solid var(--primary-soft);
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:.9rem;
    color:var(--primary-dark);
  }
  .icon-bullet p{
    margin-bottom:0;
    font-size:.9rem;
    color:var(--text-muted);
  }

  /* Packages */
  .packages-section{
    background:var(--bg-light);
  }
  .nav-packages{
    border-radius:999px;
    background:#ffffff;
    padding:.35rem;
    display:inline-flex;
    gap:.35rem;
  }
  .nav-packages .nav-link{
    border-radius:999px;
    font-size:.85rem;
    padding:.45rem 1.1rem;
    color:var(--text-muted);
    font-weight:500;
  }
  .nav-packages .nav-link.active{
    background:var(--primary);
    color:#ffffff;
  }

  .package-card{
    background:#ffffff;
    border-radius:var(--radius-card);
    border:1px solid var(--border);
    padding:2rem 2.1rem;
    box-shadow:0 18px 55px rgba(15,23,42,.06);
  }
  .package-label{
    font-size:.75rem;
    text-transform:uppercase;
    letter-spacing:.16em;
    font-weight:700;
    color:var(--primary);
    margin-bottom:.4rem;
  }
  .package-title{
    font-size:1.25rem;
    font-weight:700;
    margin-bottom:.5rem;
  }
  .package-desc{
    font-size:.9rem;
    color:var(--text-muted);
    margin-bottom:1.1rem;
  }
  .package-list{
    list-style:none;
    padding-left:0;
    margin:0 0 1.3rem;
    font-size:.9rem;
  }
  .package-list li{
    display:flex;
    align-items:flex-start;
    gap:.5rem;
    margin-bottom:.5rem;
  }
  .package-list li i{
    margin-top:.25rem;
    color:var(--primary);
  }

  .badge-tier{
    display:inline-flex;
    align-items:center;
    gap:.35rem;
    font-size:.75rem;
    padding:.3rem .75rem;
    border-radius:999px;
    background:var(--primary-soft);
    color:var(--primary-dark);
    margin-bottom:1rem;
  }

  .btn-order{
    font-weight:600;
    font-size:.9rem;
    padding:.55rem 1.4rem;
    border-radius:.75rem;
  }

  /* CTA */
  .cta-section{
    background:linear-gradient(135deg,#0b3a7a,#0686d8);
    color:#ffffff;
  }
  .cta-card{
    background:rgba(15,23,42,.9);
    border-radius:1.5rem;
    padding:2.2rem 2.4rem;
    box-shadow:0 18px 55px rgba(15,23,42,.75);
  }
  .cta-title{
    font-size:1.55rem;
    font-weight:700;
    margin-bottom:.6rem;
  }
  .cta-text{
    font-size:.95rem;
    color:#e5e7eb;
    margin-bottom:1.2rem;
  }
  .cta-form .form-control{
    font-size:.88rem;
    border-radius:.75rem;
    border:1px solid #1f2937;
  }
  .cta-form .btn-primary{
    background:var(--primary);
    border-color:var(--primary);
    font-weight:600;
    border-radius:.9rem;
    padding:.6rem 1.5rem;
    font-size:.9rem;
  }
  @media (max-width:575.98px){
    .cta-card{
      padding:1.8rem 1.4rem;
    }
  }
</style>

<!-- HERO: Logo Animation -->
<section class="hero-animation section-padding">
  <div class="container">
    <div class="row align-items-center gy-4">
      <div class="col-lg-6">
        <div class="badge-pill mb-3">
          <i class="fa-solid fa-bolt me-2"></i>
          Logo Animation Services
        </div>
        <h1 class="hero-title mb-3">
          Bring Motion &amp; Clarity<br>
          to Your <span>Brand Story.</span>
        </h1>
        <p class="hero-text mb-4">
          DesignCentura’s logo animation solutions add clean transitions, purposeful movement, and precise timing
          to your identity — turning your logo into a powerful storytelling tool that captures attention instantly.
        </p>
        <div class="hero-cta d-flex flex-wrap align-items-center gap-2">
          <a href="#packages" class="btn btn-primary btn-sm px-4">
            View Animation Packages
          </a>
          <a href="#cta-start" class="btn btn-outline-light btn-sm px-4">
            Share Your Project Brief
          </a>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="hero-visual">
          <div class="hero-visual-inner">
            <span class="hero-tag">
              <i class="fa-solid fa-circle-play"></i>
              Smooth, modern logo reveals
            </span>
            <img src="img/logo-animation-hero.png" alt="Logo animation preview graphic">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- WHY LOGO ANIMATION MATTERS -->
<section class="section-padding">
  <div class="container">
    <div class="row gy-4 align-items-center">
      <div class="col-lg-6">
        <div class="section-eyebrow">About This Service</div>
        <h2 class="section-title">
          Why Logo Animation Matters.
        </h2>
        <p class="section-lead mb-4">
          Animated logos help your brand communicate faster and stand out in crowded digital spaces. Motion strengthens
          recognition, builds memorability, and elevates how your brand is experienced online.
        </p>

        <div class="why-icons-row">
          <div class="icon-bullet">
            <div class="icon-circle">
              <i class="fa-solid fa-bullhorn"></i>
            </div>
            <p>
              From websites to social media, an animated logo adds professionalism and modern appeal to your visual identity.
            </p>
          </div>
          <div class="icon-bullet">
            <div class="icon-circle">
              <i class="fa-solid fa-wave-square"></i>
            </div>
            <p>
              Clean transitions and purposeful movement make your message stronger, clearer, and instantly more engaging.
            </p>
          </div>
          <div class="icon-bullet mb-0">
            <div class="icon-circle">
              <i class="fa-solid fa-star"></i>
            </div>
            <p>
              Every sequence is carefully timed, so your logo feels premium, on-brand, and ready for any digital platform.
            </p>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="why-card">
          <h3 class="fs-5 fw-semibold mb-2">Logo Animation Services</h3>
          <p>
            We focus on motion that actually supports your brand — not just effects for the sake of effects. Each logo animation
            is designed to:
          </p>
          <ul class="package-list mt-3 mb-2">
            <li>
              <i class="fa-solid fa-check"></i>
              <span>Enhance recognition with repeatable, memorable sequences.</span>
            </li>
            <li>
              <i class="fa-solid fa-check"></i>
              <span>Deliver impact within the first few seconds of interaction.</span>
            </li>
            <li>
              <i class="fa-solid fa-check"></i>
              <span>Strengthen your digital presence across videos, intros, ads, and social posts.</span>
            </li>
          </ul>
          <p class="mb-0 small text-muted">
            Whether you are launching a new logo or refreshing an existing one, our team ensures your animation feels sharp,
            professional, and ready to plug into your content.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- PACKAGES -->
<section id="packages" class="packages-section section-padding">
  <div class="container">
    <div class="text-center mb-4">
      <div class="section-eyebrow">Plans &amp; Packages</div>
      <h2 class="section-title mb-2">Choose Your Logo Animation Package.</h2>
      <p class="section-lead mx-auto">
        Select the level of motion and detail that fits your brand. Every package is built on clean timing, original work,
        and export-ready files for your channels.
      </p>
    </div>

    <div class="d-flex justify-content-center mb-4">
      <ul class="nav nav-packages" id="animationPackageTabs" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="bronze-tab" data-bs-toggle="tab" data-bs-target="#bronze"
                  type="button" role="tab" aria-controls="bronze" aria-selected="true">
            Bronze
          </button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="silver-tab" data-bs-toggle="tab" data-bs-target="#silver"
                  type="button" role="tab" aria-controls="silver" aria-selected="false">
            Silver
          </button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="gold-tab" data-bs-toggle="tab" data-bs-target="#gold"
                  type="button" role="tab" aria-controls="gold" aria-selected="false">
            Gold
          </button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="platinum-tab" data-bs-toggle="tab" data-bs-target="#platinum"
                  type="button" role="tab" aria-controls="platinum" aria-selected="false">
            Platinum
          </button>
        </li>
      </ul>
    </div>

    <div class="tab-content" id="animationPackageTabsContent">
      <!-- Bronze -->
      <div class="tab-pane fade show active" id="bronze" role="tabpanel" aria-labelledby="bronze-tab">
        <div class="row justify-content-center">
          <div class="col-lg-7">
            <div class="package-card">
              <span class="badge-tier">
                <i class="fa-solid fa-circle-dot"></i> Entry-level motion
              </span>
              <div class="package-label">Bronze Package</div>
              <div class="package-title">Clean, Professional Intro Animation.</div>
              <p class="package-desc">
                A simple and professional entry-level animation designed for brands seeking clean movement without
                heavy effects.
              </p>
              <div class="row">
                <div class="col-md-7">
                  <ul class="package-list">
                    <li><i class="fa-solid fa-check"></i><span>Smooth intro transition</span></li>
                    <li><i class="fa-solid fa-check"></i><span>Minimal motion elements</span></li>
                    <li><i class="fa-solid fa-check"></i><span>Standard sound sync</span></li>
                    <li><i class="fa-solid fa-check"></i><span>HD-quality output</span></li>
                    <li><i class="fa-solid fa-check"></i><span>Fast delivery timeline</span></li>
                    <li><i class="fa-solid fa-check"></i><span>100% original animation</span></li>
                  </ul>
                </div>
                <div class="col-md-5 d-flex flex-column justify-content-between">
                  <p class="small text-muted mb-3">
                    Ideal for straightforward logo reveals, intros, and simple brand touchpoints that need a clean, modern feel.
                  </p>
                  <div class="mt-2">
                    <a href="#cta-start" class="btn btn-primary btn-order w-100">
                      Order Bronze Package
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Silver -->
      <div class="tab-pane fade" id="silver" role="tabpanel" aria-labelledby="silver-tab">
        <div class="row justify-content-center">
          <div class="col-lg-7">
            <div class="package-card">
              <span class="badge-tier">
                <i class="fa-solid fa-circle-dot"></i> Refined motion
              </span>
              <div class="package-label">Silver Package</div>
              <div class="package-title">Polished, Detail-Driven Animation.</div>
              <p class="package-desc">
                A refined animation with enhanced visual detail, cleaner sequencing, and polished timing for a stronger presentation.
              </p>
              <div class="row">
                <div class="col-md-7">
                  <ul class="package-list">
                    <li><i class="fa-solid fa-check"></i><span>Multi-step animation flow</span></li>
                    <li><i class="fa-solid fa-check"></i><span>Light motion effects</span></li>
                    <li><i class="fa-solid fa-check"></i><span>Refined visual pacing</span></li>
                    <li><i class="fa-solid fa-check"></i><span>High-quality rendering</span></li>
                    <li><i class="fa-solid fa-check"></i><span>Optional sound integration</span></li>
                    <li><i class="fa-solid fa-check"></i><span>Professional finish</span></li>
                  </ul>
                </div>
                <div class="col-md-5 d-flex flex-column justify-content-between">
                  <p class="small text-muted mb-3">
                    Perfect for brands that want a stronger on-screen presence while keeping the animation clean,
                    focused, and on-brand.
                  </p>
                  <div class="mt-2">
                    <a href="#cta-start" class="btn btn-primary btn-order w-100">
                      Order Silver Package
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Gold -->
      <div class="tab-pane fade" id="gold" role="tabpanel" aria-labelledby="gold-tab">
        <div class="row justify-content-center">
          <div class="col-lg-7">
            <div class="package-card">
              <span class="badge-tier">
                <i class="fa-solid fa-trophy"></i> Advanced motion
              </span>
              <div class="package-label">Gold Package</div>
              <div class="package-title">Expressive, Brand-Focused Animation.</div>
              <p class="package-desc">
                A high-quality animation crafted with expressive movement, enhanced detailing, and brand-focused transitions.
              </p>
              <div class="row">
                <div class="col-md-7">
                  <ul class="package-list">
                    <li><i class="fa-solid fa-check"></i><span>Advanced animation layers</span></li>
                    <li><i class="fa-solid fa-check"></i><span>Impact-driven transitions</span></li>
                    <li><i class="fa-solid fa-check"></i><span>Subtle dynamic effects</span></li>
                    <li><i class="fa-solid fa-check"></i><span>Multiple render formats</span></li>
                    <li><i class="fa-solid fa-check"></i><span>Creative direction support</span></li>
                    <li><i class="fa-solid fa-check"></i><span>Premium visual clarity</span></li>
                  </ul>
                </div>
                <div class="col-md-5 d-flex flex-column justify-content-between">
                  <p class="small text-muted mb-3">
                    Ideal for campaigns, brand films, and content where your logo needs to feel like a key character in the story.
                  </p>
                  <div class="mt-2">
                    <a href="#cta-start" class="btn btn-primary btn-order w-100">
                      Order Gold Package
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Platinum -->
      <div class="tab-pane fade" id="platinum" role="tabpanel" aria-labelledby="platinum-tab">
        <div class="row justify-content-center">
          <div class="col-lg-7">
            <div class="package-card">
              <span class="badge-tier">
                <i class="fa-solid fa-crown"></i> Cinematic motion
              </span>
              <div class="package-label">Platinum Package</div>
              <div class="package-title">Cinematic, Story-Led Logo Animation.</div>
              <p class="package-desc">
                A premium animation experience engineered for brands wanting cinematic motion, deeper dimension,
                and elevated storytelling.
              </p>
              <div class="row">
                <div class="col-md-7">
                  <ul class="package-list">
                    <li><i class="fa-solid fa-check"></i><span>Cinematic-level animation</span></li>
                    <li><i class="fa-solid fa-check"></i><span>Complex motion paths</span></li>
                    <li><i class="fa-solid fa-check"></i><span>Layered depth effects</span></li>
                    <li><i class="fa-solid fa-check"></i><span>Custom sound design</span></li>
                    <li><i class="fa-solid fa-check"></i><span>Ultra HD exporting</span></li>
                    <li><i class="fa-solid fa-check"></i><span>Dedicated animation specialist</span></li>
                  </ul>
                </div>
                <div class="col-md-5 d-flex flex-column justify-content-between">
                  <p class="small text-muted mb-3">
                    Built for launch videos, high-end promos, and signature brand moments where every frame needs to impress.
                  </p>
                  <div class="mt-2">
                    <a href="#cta-start" class="btn btn-primary btn-order w-100">
                      Order Platinum Package
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- CTA: Let’s Get You Started -->
<section id="cta-start" class="cta-section section-padding">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-9">
        <div class="cta-card">
          <div class="row gy-4 align-items-center">
            <div class="col-lg-6">
              <h2 class="cta-title">Let’s Get You Started.</h2>
              <p class="cta-text">
                Share a few details about your logo, brand, and where you plan to use the animation. Our team will review
                your brief and get back to you with recommendations, timelines, and next steps.
              </p>
              <ul class="package-list mb-0">
                <li><i class="fa-solid fa-check"></i><span>Tailored logo animation concepts</span></li>
                <li><i class="fa-solid fa-check"></i><span>Clear delivery and revision timelines</span></li>
                <li><i class="fa-solid fa-check"></i><span>Support for intros, reels, ads, and more</span></li>
              </ul>
            </div>
            <div class="col-lg-6">
              <form class="cta-form">
                <div class="row g-3">
                  <div class="col-12">
                    <input type="text" class="form-control" placeholder="Business / Brand Name">
                  </div>
                  <div class="col-md-6">
                    <input type="email" class="form-control" placeholder="Email Address">
                  </div>
                  <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="Phone Number">
                  </div>
                  <div class="col-12">
                    <textarea class="form-control" rows="3" placeholder="Tell us about your logo, style preferences, and where you’ll be using the animation."></textarea>
                  </div>
                  <div class="col-12 d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">
                      Submit Project Brief
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>          
        </div>
      </div>
    </div>
  </div>
</section>

<?php include('templates/footer.php'); ?>
