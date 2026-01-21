<?php include('templates/header.php'); ?>

<!-- book-publication.php -->

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
    font-size: 0.98rem;
    opacity: 0.9;
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

  /*.section-padding{*/
  /*  padding:80px 0;*/
  /*}*/
  

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

  .section-lead{
    font-size:.98rem;
    color:var(--text-muted);
    max-width:640px;
  }

  /* HERO */
  .hero-book{
    background:linear-gradient(135deg,#0057b8,#0686d8 55%,#0ea5e9);
    color:#ffffff;
    position:relative;
    overflow:hidden;
  }
  .hero-book .badge-pill{
    display:inline-flex;
    align-items:center;
    padding:.35rem .9rem;
    border-radius:999px;
    background:rgba(15,23,42,.18);
    font-size:.8rem;
    font-weight:500;
  }
  .hero-book .hero-title{
    font-size:2.3rem;
    font-weight:800;
    line-height:1.2;
  }

  .hero-book .hero-title span{
    color:#facc15;
  }
  .hero-book .hero-text{
    color:#e5e7eb;
    max-width:580px;
  }
  .hero-book .hero-cta .btn-primary{
    background:#ffffff;
    border-color:#ffffff;
    color:#0f172a;
    font-weight:600;
  }
  .hero-book .hero-cta .btn-outline-light{
    border-width:1.5px;
    font-weight:500;
  }
  .hero-meta{
    font-size:.85rem;
    color:#bfdbfe;
    margin-bottom:1rem;
  }

  .hero-visual{
    position:relative;
    padding:1.5rem;
  }
  .hero-visual-inner{
    background:#ffffff;
    border-radius:1.6rem;
    padding:1.6rem;
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

  /* STRUGGLE SECTION */
  .struggle-card{
    background:#ffffff;
    border-radius:var(--radius-card);
    padding:1.9rem 2.1rem;
    border:1px solid var(--border);
    box-shadow:0 18px 55px rgba(15,23,42,.05);
  }
  .struggle-list{
    list-style:none;
    padding-left:0;
    margin-bottom:1.2rem;
  }
  .struggle-list li{
    position:relative;
    padding-left:1.3rem;
    font-size:.92rem;
    color:var(--text-muted);
    margin-bottom:.4rem;
  }
  .struggle-list li::before{
    content:"\f111";
    font-family:"Font Awesome 6 Free";
    font-weight:900;
    font-size:.4rem;
    position:absolute;
    left:.15rem;
    top:.55rem;
    color:var(--primary);
  }

  /* PUBLISH SECTION */
  .publish-section{
    background:var(--bg-light);
  }
  .publish-card{
    background:#ffffff;
    border-radius:var(--radius-card);
    padding:2rem 2.1rem;
    border:1px solid var(--border);
    box-shadow:0 18px 60px rgba(15,23,42,.06);
    height:100%;
  }
  .tag-row{
    display:flex;
    flex-wrap:wrap;
    gap:.4rem;
    margin-bottom:1.1rem;
  }
  .tag-pill{
    font-size:.78rem;
    padding:.25rem .75rem;
    border-radius:999px;
    background:var(--primary-soft);
    color:var(--primary-dark);
    font-weight:500;
  }
  .platform-list{
    list-style:none;
    padding-left:0;
    margin-bottom:0;
    font-size:.9rem;
  }
  .platform-list li{
    margin-bottom:.35rem;
    display:flex;
    align-items:center;
    gap:.45rem;
    color:var(--text-muted);
  }
  .platform-list i{
    color:var(--primary);
    font-size:.8rem;
  }

  /* TABS */
  .nav-book-tabs{
    border-radius:999px;
    background:#ffffff;
    padding:.35rem;
    display:inline-flex;
    gap:.35rem;
  }
  .nav-book-tabs .nav-link{
    border-radius:999px;
    font-size:.85rem;
    padding:.45rem 1.1rem;
    color:var(--text-muted);
    font-weight:500;
  }
  .nav-book-tabs .nav-link.active{
    background:var(--primary);
    color:#ffffff;
  }

  /* WRITING SECTION */
  .writing-card{
    background:#ffffff;
    border-radius:var(--radius-card);
    padding:2rem 2.1rem;
    border:1px solid var(--border);
    box-shadow:0 18px 55px rgba(15,23,42,.05);
  }
  .writing-list{
    list-style:none;
    padding-left:0;
    margin-bottom:0;
    font-size:.9rem;
  }
  .writing-list li{
    display:flex;
    gap:.5rem;
    margin-bottom:.45rem;
  }
  .writing-list i{
    color:var(--primary);
    margin-top:.2rem;
  }

  /* VISION SECTION */
  .vision-highlight{
    background:linear-gradient(135deg,#0b3a7a,#0686d8);
    color:#ffffff;
    border-radius:1.6rem;
    padding:2.1rem 2.3rem;
    box-shadow:0 18px 60px rgba(15,23,42,.6);
  }
  .vision-highlight p{
    color:#e5e7eb;
  }
  .vision-list{
    list-style:none;
    padding-left:0;
    margin-bottom:0;
    font-size:.9rem;
  }
  .vision-list li{
    position:relative;
    padding-left:1.3rem;
    margin-bottom:.4rem;
  }
  .vision-list li::before{
    content:"\f00c";
    font-family:"Font Awesome 6 Free";
    font-weight:900;
    position:absolute;
    left:0;
    top:.1rem;
    font-size:.75rem;
    color:#facc15;
  }
  .btn-outline-light{
    border-radius:.9rem;
    font-size:.9rem;
    padding:.55rem 1.5rem;
    font-weight:600;
  }

  /* PORTFOLIO BOOKS */
  .book-grid-card{
    background:#ffffff;
    border-radius:1.1rem;
    padding:1.3rem;
    box-shadow:0 18px 50px rgba(15,23,42,.08);
    border:1px solid var(--border);
    text-align:center;
  }
  .book-cover{
    border-radius:.8rem;
    background:linear-gradient(135deg,#1d4ed8,#22c1c3);
    height:150px;
    margin-bottom:.75rem;
  }
  .book-title{
    font-size:.9rem;
    font-weight:600;
  }
  .book-tag{
    font-size:.78rem;
    color:var(--text-muted);
  }

  /* WHY & GENRES */
  .why-card{
    background:#ffffff;
    border-radius:var(--radius-card);
    padding:2rem 2.1rem;
    border:1px solid var(--border);
    box-shadow:0 18px 55px rgba(15,23,42,.05);
    height:100%;
  }
  .why-list,
  .genre-list{
    list-style:none;
    padding-left:0;
    margin-bottom:0;
    font-size:.9rem;
  }
  .why-list li,
  .genre-list li{
    margin-bottom:.45rem;
    position:relative;
    padding-left:1.2rem;
  }
  .why-list li::before,
  .genre-list li::before{
    content:"\f00c";
    font-family:"Font Awesome 6 Free";
    font-weight:900;
    position:absolute;
    left:0;
    top:.1rem;
    font-size:.72rem;
    color:var(--primary);
  }

  /* CTA STORY */
  .cta-story{
    background:var(--bg-light);
  }
  .cta-story-card{
    background:#ffffff;
    border-radius:1.6rem;
    padding:2.2rem 2.4rem;
    border:1px solid var(--border);
    box-shadow:0 20px 65px rgba(15,23,42,.06);
  }

  /* TESTIMONIALS */
  .testimonials-section{
    background:#0f172a;
    color:#ffffff;
  }
  .rating-pill{
    display:inline-flex;
    align-items:center;
    gap:.4rem;
    font-size:.8rem;
    padding:.35rem .9rem;
    border-radius:999px;
    background:rgba(15,23,42,.7);
    border:1px solid rgba(148,163,184,.7);
  }
  .rating-pill .fa-star{
    color:#facc15;
  }
  .testimonial-card{
    background:#111827;
    border-radius:var(--radius-card);
    padding:1.7rem 1.8rem;
    border:1px solid #1f2937;
    box-shadow:0 16px 50px rgba(15,23,42,.6);
    height:100%;
  }
  .testimonial-name{
    font-weight:600;
    margin-bottom:.15rem;
    font-size:.96rem;
  }
  .testimonial-role{
    font-size:.82rem;
    color:#9ca3af;
    margin-bottom:.75rem;
  }
  .testimonial-text{
    font-size:.9rem;
    color:#e5e7eb;
    margin-bottom:0;
  }
  
  span.blue {
    color: #196bff;
}
section.portfolio
{
    padding:0 !important;
}
section.cta-story .custom-btn
{
    padding:10px 10px;    
}
section.writingservices .section-eyebrow
{
    margin:0px;
}
section.professional .section-eyebrow
{
    margin:0px;
}
section.cta-story .section-eyebrow
{
    margin:0px;
}
section.process .section-eyebrow
{
    margin:0px 0px 10px 0px;
}

  @media(min-width:1024px)
{
    section.section-padding .section-title {
        font-size: 2rem;
    }
    section.cta-story
    {
        margin:0px;
    }
}
  @media(max-width:992px){
      .section-title{
      font-size:1.4rem;
    }
    .section-eyebrow
    {
        font-size:0.6rem;
    }
    section.hero .hero-text
    {
        display:block;
        text-align:center;   
        margin:auto;
        max-width:100%;
        min-width:100%;
        width:100%;
    }
    section.hero .hero-cta
    {
        justify-content:center;
    }
    .hero-book .hero-title{
      font-size:2.7rem;
    }
    .nav-book-tabs .nav-link
    {
        font-size: .60rem;
        padding: .45rem 0.5rem;
    }
  }
  @media(max-width:575.98px){
      .hero-title{
      font-size:1.9rem;
    }
    .section-padding{
      padding:60px 0;
    }
  }
  
</style>

<!-- HERO: Book Publication -->
<section class="hero section-padding">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="badge-pill mb-3">
          
          Book Writing &amp; Publication Services
        </div>
        <h1 class="hero-title mb-3">
          Transform Your Stories<br>
          Into <span>Captivating Books.</span>
        </h1>
        <p class="hero-text mb-3">
          Your ideas deserve to live beyond the page. With DesignCentura’s experienced book-writing team, you gain access
          to skilled writers who help you turn your vision into a smooth, inspiring journey—shaped into a polished,
          engaging manuscript.
        </p>
        <p class="hero-text mb-3">
          Whether you’re starting from scratch or refining an existing draft, we help transform your thoughts into
          powerful stories.
        </p>
        <div class="hero-meta">Starting from &mdash;&mdash;&mdash;</div>
        <div class="hero-cta d-flex flex-wrap align-items-center gap-2">
          <a href="#portfolio" class="btn btn-primary btn-sm custom-btn">
            Explore Work
          </a>
          <a href="#process" class="btn btn-outline-light btn-sm custom-btn">
            How It Works?
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- STRUGGLING SECTION -->
<section id="process" class="section-padding process">
  <div class="container">
    <div class="row gy-4 align-items-center">
      <div class="col-lg-6">
        <div class="section-eyebrow">Struggling to Bring Your Ideas to Life?</div>
        <h2 class="section-title">
          You’re Not <span class="blue">Alone—And You Don’t Have To Do</span>  It All By Yourself.
        </h2>
        <p class="section-lead mb-4">
          If you’ve felt stuck trying to bring your ideas onto paper, we understand. Our team steps in where overwhelm,
          uncertainty, and time limitations hold you back.
        </p>
        <ul class="struggle-list">
          <li>Overwhelmed by constant deadlines</li>
          <li>Unsure where to begin</li>
          <li>Disconnected from your creativity</li>
          <li>Time schedule disarray</li>
          <li>Held back by financial stress</li>
          <li>Lost in the chaos of daily distractions</li>
        </ul>
        <p class="small text-muted mb-0">
          Let our writers help you turn your ideas into clear, confident, and beautifully written content.
        </p>
      </div>
      <div class="col-lg-6">
        <div class="struggle-card">
          <h3 class="fs-5 fw-semibold mb-2">Let’s Discuss Your Book.</h3>
          <p class="small text-muted mb-3">
            Share where you’re at in the journey—idea, outline, rough draft, or near-finished manuscript—and we’ll map
            out how to take it across the finish line.
          </p>
          <form>
            <div class="row g-3">
              <div class="col-md-6">
                <label class="form-label small mb-1">Your Name</label>
                <input type="text" class="form-control" placeholder="Enter your full name">
              </div>
              <div class="col-md-6">
                <label class="form-label small mb-1">Your Email</label>
                <input type="email" class="form-control" placeholder="name@domain.com">
              </div>
              <div class="col-12">
                <label class="form-label small mb-1">Your Message</label>
                <textarea class="form-control" rows="3" placeholder="Tell us about your book idea, genre, and goals."></textarea>
              </div>
              <div class="col-md-6 d-flex align-items-center">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="bookRobot">
                  <label class="form-check-label small" for="bookRobot">
                    I am not a robot
                  </label>
                </div>
              </div>
              <div class="col-md-6 d-flex justify-content-md-end">
                <button type="submit" class="btn btn-primary mt-2 mt-md-0">
                  Let’s Discuss
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- GO GLOBAL & TABS -->
<section class="publish-section section-padding">
  <div class="container">
   <div class="row justify-content-center text-center mb-4">
       <div class="col-lg-8">
          <div class="section-eyebrow">Global Reach</div>
          <h2 class="section-title mb-2">
            Go Global with Your Book — Publish on the World’s Leading Platforms.
          </h2>
          <p class="section-lead mx-auto">
            We don’t just help you write your book—we help you launch it to the world. Our team supports seamless publishing
            across top platforms to maximize your reach and impact.
          </p>
       </div>
   </div>

    <div class="row">
        <div class="d-flex justify-content-center mb-4">
      <ul class="nav nav-book-tabs" id="bookTabs" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="pub-tab" data-bs-toggle="tab" data-bs-target="#tab-publications"
                  type="button" role="tab" aria-controls="tab-publications" aria-selected="true">
            Book Publications
          </button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="write-tab" data-bs-toggle="tab" data-bs-target="#tab-writing"
                  type="button" role="tab" aria-controls="tab-writing" aria-selected="false">
            Book Writing &amp; Editing
          </button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="ghost-tab" data-bs-toggle="tab" data-bs-target="#tab-ghostwriting"
                  type="button" role="tab" aria-controls="tab-ghostwriting" aria-selected="false">
            Ghostwriting
          </button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="promo-tab" data-bs-toggle="tab" data-bs-target="#tab-promotion"
                  type="button" role="tab" aria-controls="tab-promotion" aria-selected="false">
            Book Promotion &amp; Marketing
          </button>
        </li>
      </ul>
    </div>

    <div class="tab-content" id="bookTabsContent">
      <!-- Book Publications -->
      <div class="tab-pane fade show active" id="tab-publications" role="tabpanel" aria-labelledby="pub-tab">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="publish-card">
              <div class="tag-row">
                <span class="tag-pill">Book Publications</span>
              </div>
              <h3 class="fs-5 fw-semibold mb-2">Reach Readers Everywhere with Trusted Names.</h3>
              <p class="small text-muted mb-3">
                We handle the technical details so you can focus on your message. Our team prepares, formats, and
                distributes your book across major global platforms.
              </p>
              <ul class="platform-list">
                <li><i class="fa-brands fa-amazon"></i> Amazon Kindle Direct Publishing (KDP)</li>
                <li><i class="fa-brands fa-apple"></i> Apple Books</li>
                <li><i class="fa-solid fa-book"></i> Barnes &amp; Noble Press</li>
                <li><i class="fa-brands fa-google"></i> Google Play Books</li>
                <li><i class="fa-solid fa-tablet-screen-button"></i> Kobo</li>
                <li><i class="fa-solid fa-globe"></i> IngramSpark</li>
                <li><i class="fa-solid fa-share-nodes"></i> Draft2Digital</li>
              </ul>
              <div class="mt-3">
                <a href="#cta-story" class="btn btn-primary btn-sm custom-btn px-4">
                  Contact Our Experts
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Book Writing & Editing -->
      <div class="tab-pane fade" id="tab-writing" role="tabpanel" aria-labelledby="write-tab">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="publish-card">
              <div class="tag-row">
                <span class="tag-pill">Book Writing &amp; Editing</span>
              </div>
              <h3 class="fs-5 fw-semibold mb-2">Shape Every Chapter With Confidence.</h3>
              <p class="small text-muted mb-0">
                From structural editing to line-by-line refinement, we ensure your manuscript reads smoothly, stays
                on-brand, and keeps readers engaged from start to finish.
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- Ghostwriting -->
      <div class="tab-pane fade" id="tab-ghostwriting" role="tabpanel" aria-labelledby="ghost-tab">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="publish-card">
              <div class="tag-row">
                <span class="tag-pill">Ghostwriting</span>
              </div>
              <h3 class="fs-5 fw-semibold mb-2">Your Voice, Professionally Captured.</h3>
              <p class="small text-muted mb-0">
                We interview, research, and write on your behalf, ensuring the final book still sounds authentically
                like you—only more structured, compelling, and refined.
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- Promotion & Marketing -->
      <div class="tab-pane fade" id="tab-promotion" role="tabpanel" aria-labelledby="promo-tab">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="publish-card">
              <div class="tag-row">
                <span class="tag-pill">Book Promotion &amp; Marketing</span>
              </div>
              <h3 class="fs-5 fw-semibold mb-2">Get Your Book in Front of the Right Readers.</h3>
              <p class="small text-muted mb-0">
                We support launch strategies, metadata optimization, and promotional assets that amplify visibility
                and help your book gain momentum across channels.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
</section>

<!-- TURN YOUR IDEAS SECTION -->
<section class="section-padding professional">
  <div class="container">
    <div class="row gy-4 align-items-center">
      <div class="col-lg-6 col-md-6 col-12">
        <div class="writing-card">
          <div class="section-eyebrow mb-2">Professional Writing Support</div>
          <h2 class="section-title mb-2">
            Turn Your Ideas into Compelling Books with Professional Writers.
          </h2>
          <p class="section-lead mb-3">
            Your ideas have value—and we help you shape them into books that readers will remember.
          </p>
          <ul class="writing-list">
            <li><i class="fa-solid fa-check"></i><span>Thorough Research and Insightful Analysis</span></li>
            <li><i class="fa-solid fa-check"></i><span>High-Quality Content Creation</span></li>
            <li><i class="fa-solid fa-check"></i><span>Professional Book Layout, Editing, and Design</span></li>
            <li><i class="fa-solid fa-check"></i><span>Expert Manuscript Polishing and Refinement</span></li>
          </ul>
          <div class="hero-meta mt-3 text-muted">Starting from &mdash;&mdash;&mdash;</div>
          <div class="d-flex flex-wrap gap-2">
            <a href="#portfolio" class="btn btn-primary btn-sm custom-btn">
              Explore Work
            </a>
            <a href="#process" class="btn btn-outline-primary btn-sm custom-btn">
              How It Works?
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-12">
        <div class="vision-highlight">
          <h3 class="h4 fw-semibold mb-2">Your Vision, Expertly Written.</h3>
          <p class="mb-3">
            Your book deserves polished execution. We manage the details—from structure to design—so you can focus on
            the message you want to share with the world.
          </p>
          <ul class="vision-list mb-3">
            <li>Industry-Specific Expertise</li>
            <li>Flawless Formatting &amp; Captivating Content</li>
            <li>100% Unique &amp; Professionally Crafted</li>
            <li>Visually Striking Design Elements</li>
            <li>ISBN Registration &amp; Publication Support</li>
          </ul>
          <a href="#portfolio" class="btn btn-outline-light btn-sm">
            Discover More
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- LATEST CREATIONS -->
<section id="portfolio" class="section-padding portfolio">
  <div class="container">
        <div class="row justify-content-center text-center mb-4">
           <div class="col-lg-8">
             <div class="section-eyebrow">Our Work</div>
              <h2 class="section-title mb-2">
                Discover Our Latest Creations.
              </h2>
              <p class="section-lead mx-auto">
                From business books and memoirs to children’s stories and supernatural thrillers, our portfolio spans genres,
                audiences, and publishing formats.
              </p>
           </div>
       </div>
       
    <div class="row g-4">
      <div class="col-lg-6 col-md-6 col-12 col-md-3">
        <div class="book-grid-card">
          <div class="book-cover"></div>
          <div class="book-title">Supernatural Thriller</div>
          <div class="book-tag">Fiction · Suspense</div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-12">
        <div class="book-grid-card">
          <div class="book-cover" style="background:linear-gradient(135deg,#f97316,#ec4899);"></div>
          <div class="book-title">Adventure Fantasy</div>
          <div class="book-tag">Epic Journeys</div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-12">
        <div class="book-grid-card">
          <div class="book-cover" style="background:linear-gradient(135deg,#22c55e,#0ea5e9);"></div>
          <div class="book-title">Business Strategy</div>
          <div class="book-tag">Non-Fiction</div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-12">
        <div class="book-grid-card">
          <div class="book-cover" style="background:linear-gradient(135deg,#8b5cf6,#ec4899);"></div>
          <div class="book-title">Children’s Book</div>
          <div class="book-tag">Illustrated Stories</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- WHY CHOOSE / GENRES -->
<section class="section-padding writingservices">
  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-6">
        <div class="why-card h-100">
          <div class="section-eyebrow mb-2">Why Us</div>
          <h2 class="section-title mb-3">
            Why Choose Our Expert Book Writing Services?
          </h2>
          <ul class="why-list">
            <li>Thorough Research</li>
            <li>Complete Privacy</li>
            <li>Fluent Native Writers</li>
            <li>Skilled Ghostwriters</li>
            <li>Dedicated Support</li>
          </ul>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="why-card h-100">
          <div class="section-eyebrow mb-2">Genres</div>
          <h2 class="section-title mb-3">
            Explore Our Book Writing Services Tailored to Every Genre.
          </h2>
          <ul class="genre-list">
            <li>Supernatural Thriller</li>
            <li>Adventure Fantasy</li>
            <li>Cultural Analysis</li>
            <li>Psychological Thriller</li>
            <li>Business Writing</li>
            <li>Children’s Books</li>
            <li>Self-Help</li>
            <li>Instructional &amp; Manuals</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA STORY -->
<section id="cta-story" class="cta-story section-padding">
  <div class="container">
    <div class="cta-story-card">
      <div class="row gy-4 align-items-center">
        <div class="col-lg-8">
          <div class="section-eyebrow mb-2">Start Today</div>
          <h2 class="section-title mb-2">
            Ready to Showcase Your Story to the World?
          </h2>
          <p class="section-lead mb-0">
            Discover book writing services designed for every genre and vision. Whether you have a spark of an idea or a
            nearly finished draft, we’ll help you shape it into a book you’re proud to share.
          </p>
        </div>
        <div class="col-lg-4 d-flex justify-content-lg-end">
          <a href="#process" class="btn btn-primary btn-sm custom-btn">
            Start Writing Your Story Now
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- TESTIMONIALS -->
<section class="testimonials-section section-padding">
  <div class="container">
    <div class="text-center mb-4">
      <div class="rating-pill mb-3">
        <i class="fa-solid fa-star"></i>
        <span>★★★★★</span>
        <span>Rated 4.5 by 8,503 customers globally</span>
      </div>
      <div class="section-eyebrow text-uppercase">Testimonials</div>
      <h2 class="section-title mb-2">
        What Authors &amp; Brands Say About Working With Us.
      </h2>
      <p class="section-lead mx-auto text-white-50">
        From first-time authors to marketing teams, clients trust DesignCentura to bring clarity, structure, and
        creativity to every project.
      </p>
    </div>

    <div class="row g-4">
      <div class="col-md-4">
        <div class="testimonial-card h-100">
          <div class="testimonial-name">John A — Marketing Lead</div>
          <div class="testimonial-role">B2B Technology Company</div>
          <p class="testimonial-text">
            “DesignCentura’s writing service transformed our marketing content.”
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="testimonial-card h-100">
          <div class="testimonial-name">Ema W — Entrepreneur</div>
          <div class="testimonial-role">Startup Founder</div>
          <p class="testimonial-text">
            “Working with DesignCentura brought my ideas to life.”
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="testimonial-card h-100">
          <div class="testimonial-name">Alexandra J — Author</div>
          <div class="testimonial-role">Non-Fiction Writer</div>
          <p class="testimonial-text">
            “Their team crafted a polished book that reflected my voice beautifully.”
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include('templates/footer.php'); ?>
