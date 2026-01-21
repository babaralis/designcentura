<?php
$page_title = "Design Centura Reviews - 1000+ Verified Client Testimonials";
include('templates/header.php');
?>

<style>
    #stats h1{
        font-size:2.8rem;
        font-weight:600;
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
      :root{
        --soft-primary:#e7f0ff;
        --card-hover:#f1f3f5;   /* light grey on hover */
        --card-border:#dfe3e8;  /* visible border at rest */
        --accent:#0a53ff;
        --muted:#98a2b3;
      }
      #stats{
        padding-top: 8rem;
        padding-bottom: 6rem;   
      }
      body{ background:#f8f9fa; color:#111; }
      .font-weight-600{ font-weight:600; }
      .navbar{ z-index:1020; }

      /* Hero */
      .badge-primary-soft{
        background:var(--soft-primary); color:var(--accent); font-weight:600;
        padding:.5rem .9rem; border-radius:999px;
      }
      .hero{
        background:
          radial-gradient(1200px 400px at 50% -50%, #eaf2ff, transparent 60%),
          linear-gradient(180deg, #ffffff 0%, #f7f9fc 100%);
      }
      .has-search .search-icon{
        position:absolute; top:50%; left:18px; transform:translateY(-50%);
        font-size:1.1rem; color:var(--muted);
      }
      .has-search input{
        border-radius:12px; border:1px solid #e5e7eb; box-shadow:0 1px 0 rgba(16,24,40,.02);
      }

      /* Filters */
      .filters .btn{ border-radius:999px; }
      .filters .btn.active,.filters .btn:hover{
        background:var(--accent); color:#fff; border-color:var(--accent);
      }

      /* Cards — visible border at rest, light grey hover */
      .love-card{
        border:1px solid var(--card-border);
        border-radius:16px;
        transition:transform .15s ease, box-shadow .15s ease, background-color .15s ease, border-color .15s ease;
        background:#fff;
      }
      .love-card:hover{
        transform:translateY(-2px);
        background:var(--card-hover);
        border-color:#cbd3da;
        box-shadow:0 10px 24px rgba(16,24,40,.08);
      }
      .love-text{ font-size:.98rem; line-height:1.6; color:#344054; }
      .tweet-media, .video-media{
        border-radius:12px; width:100%; height:auto;
        border:1px solid var(--card-border); background:#fff;
      }

      /* Masonry columns (column-wise layout) */
      .masonry{
        column-gap: 1.5rem;
      }
      /* default 1 column */
      .masonry{ column-count: 1; }
      @media (min-width: 576px){ .masonry{ column-count: 2; } }
      @media (min-width: 992px){ .masonry{ column-count: 3; } }

      .masonry .m-item{
        break-inside: avoid;
        margin-bottom: 1.5rem; /* same as column gap */
        display: inline-block;
        width: 100%;
      }

      /* Pill badges hover remains */
      .pill{
        background:#fff; border:1px solid var(--card-border); border-radius:14px; padding:.75rem 1rem;
        display:flex; align-items:center; box-shadow:0 1px 0 rgba(16,24,40,.02);
        transition:background-color .15s ease, border-color .15s ease;
      }
      .pill:hover{ background:#f9fbff; border-color:#dbe7ff; }
      .pill .meta{ font-size:.68rem; letter-spacing:.04em; color:#667085; text-transform:uppercase; }
      .pill .title{ font-weight:700; color:#d64020; }
      .pill .upvotes{ margin-left:auto; font-weight:600; color:#d64020; display:flex; align-items:center; }
      .pill .upvotes i{ font-size:.9rem; margin-right:.25rem; }
      .ph-avatar{
        display:inline-flex; align-items:center; justify-content:center;
        width:28px; height:28px; border-radius:50%; background:#ea4c2a; color:#fff;
        font-weight:700; margin-right:.5rem;
      }
      .laurel{ color:#aab2bd; font-size:1.1rem; }
      .tiny-spotlight{ color:#111; font-weight:600; }

      @media (max-width:575.98px){
        .filters .btn{ margin-right:.5rem; }
        .pill{ width:100%; }
      }
      #stats p.hero-text{
          max-width:44rem;
          margin:0 auto;
      }
    </style>
<section id="stats">
    <div class="container">
      <div class="row text-center justify-content-center">
        <div>
            <div class="badge-pill mb-3 text-center">Reviews</div>
            <h1 class="text-light">See What People <span style="color:#ffb400;">Love About</span> Us</h1>
            <p class="mb-0 mt-4 hero-text">At DesignCentura, we’ve helped over 10,000 businesses worldwide create their brand identity — and we’re proud to maintain a 4.9★ average rating across Google, Trustpilot, and Facebook. Below you’ll find hundreds of verified reviews from real clients who trusted DesignCentura for logo design, website design, marketing and branding services.</p>
        <div class="row justify-content-center mt-4">
          <div class="col-lg-8">
            <div class="form-group has-search position-relative">
              <i class="bi bi-search search-icon"></i>
              <input id="searchInput" type="text" class="form-control form-control-lg pl-5"
                     placeholder="Search comments, names, keywords…" />
            </div>

            <!--<div class="d-flex flex-wrap justify-content-center filters">-->
            <!--  <button class="btn btn-outline-secondary btn-sm active mr-2 mb-2" data-filter="all">All</button>-->
            <!--  <button class="btn btn-outline-secondary btn-sm mr-2 mb-2" data-filter="twitter">-->
            <!--    <i class="bi bi-twitter mr-1"></i>Twitter-->
            <!--  </button>-->
            <!--  <button class="btn btn-outline-secondary btn-sm mr-2 mb-2" data-filter="producthunt">-->
            <!--    <i class="bi bi-rocket-takeoff mr-1"></i>Product Hunt-->
            <!--  </button>-->
            <!--  <button class="btn btn-outline-secondary btn-sm mr-2 mb-2" data-filter="email">-->
            <!--    <i class="bi bi-envelope-open mr-1"></i>Email-->
            <!--  </button>-->
            <!--  <button class="btn btn-outline-secondary btn-sm mb-2" data-filter="other">-->
            <!--    <i class="bi bi-chat-dots mr-1"></i>Other-->
            <!--  </button>-->
            <!--</div>-->
          </div>
        </div>
        </div>
      </div>
    </div>
  </section>
<section id="love" class="py-5 mt-5">
<div class="container">
<div id="cardsRow" class="masonry">
<div class="m-item card-col" data-source="trustpilot">
    <div class="card shadow-sm love-card">
      <div class="card-body">
        <div class="media align-items-center mb-3">
          <div class="rounded-circle mr-3 d-flex align-items-center justify-content-center bg-light" style="width:48px;height:48px;font-weight:600;">
            VM
          </div>
          <div class="media-body">
            <div class="font-weight-600">Vanessa Mis</div>
            <div class="text-muted small">Trustpilot · Sep 16, 2025</div>
          </div>
        </div>
        <p class="mb-3 love-text">
          My website manager Solomon did an excellent job! He was very professional, quick to respond, and always on top of
          everything. The whole process was smooth and stress-free because he handled tasks efficiently and with great
          attention to detail. I truly appreciate his dedication and how he made sure everything was done right. Highly
          recommend working with him!
        </p>
        <div class="d-flex align-items-center text-muted small mt-2">
          <span class="mr-2 text-warning">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            <i class="fas fa-star"></i><i class="fas fa-star"></i>
          </span>
          <span class="mx-2">·</span>
          <span>Verified review</span>
        </div>
      </div>
    </div>
  </div>
<div class="m-item card-col" data-source="trustpilot">
    <div class="card shadow-sm love-card">
      <div class="card-body">
        <div class="media align-items-center mb-3">
          <div class="rounded-circle mr-3 d-flex align-items-center justify-content-center bg-light" style="width:48px;height:48px;font-weight:600;">
            CL
          </div>
          <div class="media-body">
            <div class="font-weight-600">Carolina Lomeli</div>
            <div class="text-muted small">Trustpilot · May 29, 2024</div>
          </div>
        </div>
        <p class="mb-3 love-text">
          Great customer service, the team cares about their customers. Overall, my experience with Design Centura has been
          beyond amazing! Robert and the team behind the webpage design are beyond amazing. I originally connected with
          Design Centura because I needed a logo for my new business and ended up with a new webpage as well. Yes, they are
          that good – I highly recommend them.
        </p>
        <div class="d-flex align-items-center text-muted small mt-2">
          <span class="mr-2 text-warning">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            <i class="fas fa-star"></i><i class="fas fa-star"></i>
          </span>
          <span class="mx-2">·</span>
          <span>Verified review</span>
        </div>
      </div>
    </div>
  </div>
<div class="m-item card-col" data-source="google">
    <div class="card shadow-sm love-card">
      <div class="card-body">
        <div class="media align-items-center mb-3">
          <div class="rounded-circle mr-3 d-flex align-items-center justify-content-center bg-light" style="width:48px;height:48px;font-weight:600;">
            O
          </div>
          <div class="media-body">
            <div class="font-weight-600">Octavio Londono</div>
            <div class="text-muted small">US · Oct 8, 2024</div>
          </div>
        </div>
        <p class="mb-3 love-text">
          I’d recommend Design Centura to anyone looking for or in need of any graphic design. The service provided was
          top-shelf. They were attentive and responsive the entire time. They turned around my idea for my brand logo
          within 24 hours.
        </p>
        <div class="d-flex align-items-center text-muted small mt-2">
          <span class="mr-2 text-warning">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            <i class="fas fa-star"></i><i class="fas fa-star"></i>
          </span>
          <span class="mx-2">·</span>
          <span>Google Reviews · Verified</span>
        </div>
      </div>
    </div>
  </div>
<div class="m-item card-col" data-source="trustpilot">
    <div class="card shadow-sm love-card">
      <div class="card-body">
        <div class="media align-items-center mb-3">
          <div class="rounded-circle mr-3 d-flex align-items-center justify-content-center bg-light" style="width:48px;height:48px;font-weight:600;">
            S
          </div>
          <div class="media-body">
            <div class="font-weight-600">Steven Phillips</div>
            <div class="text-muted small">Trustpilot · Sep 15, 2025</div>
          </div>
        </div>
        <p class="mb-3 love-text">
          Design Centura did a great job building our website. They were quick and cost-effective.
        </p>
        <div class="d-flex align-items-center text-muted small mt-2">
          <span class="mr-2 text-warning">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            <i class="fas fa-star"></i><i class="fas fa-star"></i>
          </span>
          <span class="mx-2">·</span>
          <span>Verified review</span>
        </div>
      </div>
    </div>
  </div>
<div class="m-item card-col" data-source="trustpilot">
    <div class="card shadow-sm love-card">
      <div class="card-body">
        <div class="media align-items-center mb-3">
          <div class="rounded-circle mr-3 d-flex align-items-center justify-content-center bg-light" style="width:48px;height:48px;font-weight:600;">
            EN
          </div>
          <div class="media-body">
            <div class="font-weight-600">Emilio Natalio</div>
            <div class="text-muted small">US · May 28, 2024</div>
          </div>
        </div>
        <p class="mb-3 love-text">
          I have been working with Design Centura for about a year now. Great people and they are great with communication.
          Highly recommend Robert and his team.
        </p>
        <div class="d-flex align-items-center text-muted small mt-2">
          <span class="mr-2 text-warning">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            <i class="fas fa-star"></i><i class="fas fa-star"></i>
          </span>
          <span class="mx-2">·</span>
          <span>Verified review</span>
        </div>
      </div>
    </div>
  </div>
<div class="m-item card-col" data-source="google">
    <div class="card shadow-sm love-card">
      <div class="card-body">
        <div class="media align-items-center mb-3">
          <div class="rounded-circle mr-3 d-flex align-items-center justify-content-center bg-light" style="width:48px;height:48px;font-weight:600;">
            LH
          </div>
          <div class="media-body">
            <div class="font-weight-600">Loree Holgate</div>
            <div class="text-muted small">US · May 7, 2025</div>
          </div>
        </div>
        <p class="mb-3 love-text">
          Love, love, love my logo, my website, and my business cards. I recommend Design Centura to all my clients for their
          new business branding needs! Thanks Robert!
        </p>
        <div class="d-flex align-items-center text-muted small mt-2">
          <span class="mr-2 text-warning">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            <i class="fas fa-star"></i><i class="fas fa-star"></i>
          </span>
          <span class="mx-2">·</span>
          <span>Google Reviews · Verified</span>
        </div>
      </div>
    </div>
  </div>
<div class="m-item card-col" data-source="trustpilot">
    <div class="card shadow-sm love-card">
      <div class="card-body">
        <div class="media align-items-center mb-3">
          <div class="rounded-circle mr-3 d-flex align-items-center justify-content-center bg-light" style="width:48px;height:48px;font-weight:600;">
            LM
          </div>
          <div class="media-body">
            <div class="font-weight-600">Linda McKeever</div>
            <div class="text-muted small">US</div>
          </div>
        </div>
        <p class="mb-3 love-text">
          Robert Jones and Design Centura were excellent to work with.
        </p>
        <div class="d-flex align-items-center text-muted small mt-2">
          <span class="mr-2 text-warning">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            <i class="fas fa-star"></i><i class="fas fa-star"></i>
          </span>
          <span class="mx-2">·</span>
          <span>Verified review</span>
        </div>
      </div>
    </div>
  </div>
<div class="m-item card-col" data-source="trustpilot">
    <div class="card shadow-sm love-card">
      <div class="card-body">
        <div class="media align-items-center mb-3">
          <div class="rounded-circle mr-3 d-flex align-items-center justify-content-center bg-light" style="width:48px;height:48px;font-weight:600;">
            SE
          </div>
          <div class="media-body">
            <div class="font-weight-600">Shaun Edwards</div>
            <div class="text-muted small">Trustpilot · May 25, 2024</div>
          </div>
        </div>
        <p class="mb-3 love-text">
          Just wow! I had Robert and his team design a website for my new property maintenance company. The website turned
          out better than I could have imagined. They took the time to understand my needs and quickly put it into effect.
          They had the whole site up and operational in no time and kept the communication lines open. I cannot thank
          them enough!
        </p>
        <div class="d-flex align-items-center text-muted small mt-2">
          <span class="mr-2 text-warning">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            <i class="fas fa-star"></i><i class="fas fa-star"></i>
          </span>
          <span class="mx-2">·</span>
          <span>Verified review</span>
        </div>
      </div>
    </div>
  </div>
<div class="m-item card-col" data-source="google">
    <div class="card shadow-sm love-card">
      <div class="card-body">
        <div class="media align-items-center mb-3">
          <div class="rounded-circle mr-3 d-flex align-items-center justify-content-center bg-light" style="width:48px;height:48px;font-weight:600;">
            SS
          </div>
          <div class="media-body">
            <div class="font-weight-600">Suzanne Schneider</div>
            <div class="text-muted small">US · Nov 7, 2024</div>
          </div>
        </div>
        <p class="mb-3 love-text">
          Thank you Robert for your patience and advice designing my website. You were so helpful with suggestions and
          never minded making all the changes I wanted. I am thrilled with the way the website turned out and highly
          recommend using Robert at Design Centura to plan your website.
        </p>
        <div class="d-flex align-items-center text-muted small mt-2">
          <span class="mr-2 text-warning">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            <i class="fas fa-star"></i><i class="fas fa-star"></i>
          </span>
          <span class="mx-2">·</span>
          <span>Google Reviews · Verified</span>
        </div>
      </div>
    </div>
  </div>
<div class="m-item card-col" data-source="google">
    <div class="card shadow-sm love-card">
      <div class="card-body">
        <div class="media align-items-center mb-3">
          <div class="rounded-circle mr-3 d-flex align-items-center justify-content-center bg-light" style="width:48px;height:48px;font-weight:600;">
            JA
          </div>
          <div class="media-body">
            <div class="font-weight-600">Jhay Acierto</div>
            <div class="text-muted small">US · Feb 7, 2025</div>
          </div>
        </div>
        <p class="mb-3 love-text">
          It has been a pleasure working with Robert on our business website. He was extremely helpful in the design
          process from the beginning right up to the end. I have been very impressed with the results of his work and his
          accommodating nature.
        </p>
        <div class="d-flex align-items-center text-muted small mt-2">
          <span class="mr-2 text-warning">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            <i class="fas fa-star"></i><i class="fas fa-star"></i>
          </span>
          <span class="mx-2">·</span>
          <span>Google Reviews · Verified</span>
        </div>
      </div>
    </div>
  </div>
<div class="m-item card-col" data-source="trustpilot">
  <div class="card shadow-sm love-card">
    <div class="card-body">
      <div class="media align-items-center mb-3">
        <div class="rounded-circle mr-3 d-flex align-items-center justify-content-center bg-light" 
          style="width:48px;height:48px;font-weight:600;">VG</div>
        <div class="media-body">
          <div class="font-weight-600">Victor Glushak</div>
          <div class="text-muted small">Trustpilot · May 2, 2024</div>
        </div>
      </div>

      <p class="mb-3 love-text">
        Sam Marcus has done an absolutely phenomenal job! Carefully listening to my requests and relaying them 
        to the design team, responding quickly, and guiding me with industry knowledge. Sam helped me find new ways 
        to improve my business marketing strategies. Due to the level of service, Sam has provided me and my business 
        I will be looking into other services that Design Centura has to offer. I look forward to continuing this working 
        relationship with him as well.
      </p>

      <div class="d-flex align-items-center text-muted small">
        <span class="mr-2 text-warning">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          <i class="fas fa-star"></i><i class="fas fa-star"></i>
        </span>
        <span class="mx-2">·</span> Verified review
      </div>
    </div>
  </div>
</div>
<div class="m-item card-col" data-source="trustpilot">
  <div class="card shadow-sm love-card">
    <div class="card-body">

      <div class="media align-items-center mb-3">
        <div class="rounded-circle mr-3 d-flex align-items-center justify-content-center bg-light"
          style="width:48px;height:48px;font-weight:600;">DW</div>
        <div class="media-body">
          <div class="font-weight-600">Dwarrrior</div>
          <div class="text-muted small">Trustpilot · Feb 26, 2025</div>
        </div>
      </div>

      <p class="mb-3 love-text">
        I couldn’t be happier with the website Design Centura created for me! Thanks to Robert and Max. 
        They truly brought my vision to life with a sleek, professional, and user-friendly design.
      </p>

      <div class="d-flex align-items-center text-muted small">
        <span class="mr-2 text-warning">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          <i class="fas fa-star"></i><i class="fas fa-star"></i>
        </span>
        <span class="mx-2">·</span> Verified review
      </div>

    </div>
  </div>
</div>
<div class="m-item card-col" data-source="google">
  <div class="card shadow-sm love-card">
    <div class="card-body">

      <div class="media align-items-center mb-3">
        <div class="rounded-circle mr-3 d-flex align-items-center justify-content-center bg-light"
          style="width:48px;height:48px;font-weight:600;">B</div>
        <div class="media-body">
          <div class="font-weight-600">Brandon Sue</div>
          <div class="text-muted small">Google Reviews · Jan 7, 2025</div>
        </div>
      </div>

      <p class="mb-3 love-text">
        What an amazing experience! Working with Austin, Robert, and the entire team has been incredible. 
        From logo design to website design, they consistently went above and beyond, exceeding my expectations 
        every step of the way. I can’t thank them enough!
      </p>

      <div class="d-flex align-items-center text-muted small">
        <span class="mr-2 text-warning">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          <i class="fas fa-star"></i><i class="fas fa-star"></i>
        </span>
        <span class="mx-2">·</span> Verified review
      </div>

    </div>
  </div>
</div>
<div class="m-item card-col" data-source="trustpilot">
  <div class="card shadow-sm love-card">
    <div class="card-body">

      <div class="media align-items-center mb-3">
        <img class="rounded-circle mr-3" src="img/testi/testi1.jpg" width="48" height="48">
        <div class="media-body">
          <div class="font-weight-600">D Joseph</div>
          <div class="text-muted small">Trustpilot · Feb 23, 2025</div>
        </div>
      </div>

      <p class="mb-3 love-text">
        Robert and Design Centura have done an amazing and professional job on all the things I asked for! 
        I have had numerous compliments on how professional my website is. They went above and beyond and 
        I couldn’t be happier with the results.
      </p>

      <div class="d-flex align-items-center text-muted small">
        <span class="mr-2 text-warning">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          <i class="fas fa-star"></i><i class="fas fa-star"></i>
        </span>
        <span class="mx-2">·</span> Verified review
      </div>

    </div>
  </div>
</div>
<div class="m-item card-col" data-source="trustpilot">
  <div class="card shadow-sm love-card">
    <div class="card-body">

      <div class="media align-items-center mb-3">
        <div class="rounded-circle mr-3 d-flex align-items-center justify-content-center bg-light"
          style="width:48px;height:48px;font-weight:600;">KM</div>
        <div class="media-body">
          <div class="font-weight-600">Karen Martushev</div>
          <div class="text-muted small">Trustpilot · May 15, 2025</div>
        </div>
      </div>

      <p class="mb-3 love-text">
        Good experience. Working on republishing my book with Design Centura was amazing. Issac and his team took
        time and a lot of effort to republish my book "Own your Darkness". They guided me every step of the way, and I am
        excited to see the book in front of readers at a more refined polished level. Thank you Design Centura!
      </p>

      <div class="d-flex align-items-center text-muted small">
        <span class="mr-2 text-warning">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          <i class="fas fa-star"></i><i class="fas fa-star"></i>
        </span>
        <span class="mx-2">·</span> Verified review
      </div>

    </div>
  </div>
</div>
<div class="m-item card-col" data-source="google">
  <div class="card shadow-sm love-card">
    <div class="card-body">

      <div class="media align-items-center mb-3">
        <div class="rounded-circle mr-3 d-flex align-items-center justify-content-center bg-light"
          style="width:48px;height:48px;font-weight:600;">D</div>
        <div class="media-body">
          <div class="font-weight-600">D Q</div>
          <div class="text-muted small">US · November 7, 2024</div>
        </div>
      </div>

      <p class="mb-3 love-text">
        I used Design Centura recently for a logo design and website launch. Edward and Robert were very good. Their
        communication and feedback was swift and I really like the results of my project.
      </p>

      <div class="d-flex align-items-center text-muted small">
        <span class="mr-2 text-warning">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          <i class="fas fa-star"></i><i class="fas fa-star"></i>
        </span>
        <span class="mx-2">·</span> Google Reviews · Verified
      </div>

    </div>
  </div>
</div>
<div class="m-item card-col" data-source="trustpilot">
  <div class="card shadow-sm love-card">
    <div class="card-body">

      <div class="media align-items-center mb-3">
        <div class="rounded-circle mr-3 d-flex align-items-center justify-content-center bg-light"
          style="width:48px;height:48px;font-weight:600;">Li</div>
        <div class="media-body">
          <div class="font-weight-600">Lindgren</div>
          <div class="text-muted small">US · Mar 20, 2025</div>
        </div>
      </div>

      <p class="mb-3 love-text">
        The team is great. They follow up and deliver quality work.
      </p>

      <div class="d-flex align-items-center text-muted small">
        <span class="mr-2 text-warning">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          <i class="fas fa-star"></i><i class="fas fa-star"></i>
        </span>
        <span class="mx-2">·</span> Verified review
      </div>

    </div>
  </div>
</div>
<div class="m-item card-col" data-source="google">
  <div class="card shadow-sm love-card">
    <div class="card-body">

      <div class="media align-items-center mb-3">
        <div class="rounded-circle mr-3 d-flex align-items-center justify-content-center bg-light"
          style="width:48px;height:48px;font-weight:600;">t</div>
        <div class="media-body">
          <div class="font-weight-600">Texas Sheet Poster</div>
          <div class="text-muted small">Google Reviews · March 8, 2025</div>
        </div>
      </div>

      <p class="mb-3 love-text">
        From our logo to full web page development and animated videos, Design Centura has delivered. 
        We at Nexpa Farms give them a strong 5 stars. I highly recommend them and look forward to our future
        partnership with them to come.
      </p>

      <div class="d-flex align-items-center text-muted small">
        <span class="mr-2 text-warning">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          <i class="fas fa-star"></i><i class="fas fa-star"></i>
        </span>
        <span class="mx-2">·</span> Verified review
      </div>

    </div>
  </div>
</div>
<div class="m-item card-col" data-source="trustpilot">
  <div class="card shadow-sm love-card">
    <div class="card-body">

      <div class="media align-items-center mb-3">
        <div class="rounded-circle mr-3 d-flex align-items-center justify-content-center bg-light"
          style="width:48px;height:48px;font-weight:600;">KC</div>
        <div class="media-body">
          <div class="font-weight-600">Kannon Callis</div>
          <div class="text-muted small">US · Feb 19, 2025</div>
        </div>
      </div>

      <p class="mb-3 love-text">
        Robert was a good project manager and communicator during the website build.
      </p>

      <div class="d-flex align-items-center text-muted small">
        <span class="mr-2 text-warning">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          <i class="fas fa-star"></i><i class="fas fa-star"></i>
        </span>
        <span class="mx-2">·</span> Verified review
      </div>

    </div>
  </div>
</div>
<div class="m-item card-col" data-source="trustpilot">
  <div class="card shadow-sm love-card">
    <div class="card-body">
      <div class="media align-items-center mb-3">
        <div class="rounded-circle mr-3 d-flex align-items-center justify-content-center bg-light" style="width:48px;height:48px;font-weight:600;">
          M
        </div>
        <div class="media-body">
          <div class="font-weight-600">Mark</div>
          <div class="text-muted small">Trustpilot · Sept 8, 2024</div>
        </div>
      </div>
      <p class="mb-3 love-text">
        I got a great looking logo very fast! Benn was very helpful in this process! Will definitely
        use them in the future. Thanks Benn!
      </p>
      <div class="d-flex align-items-center text-muted small mt-2">
        <span class="mr-2 text-warning"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
        <span class="mx-2">·</span><span>Verified review</span>
      </div>
    </div>
  </div>
</div>
<div class="m-item card-col" data-source="trustpilot">
  <div class="card shadow-sm love-card">
    <div class="card-body">
      <div class="media align-items-center mb-3">
        <div class="rounded-circle mr-3 d-flex align-items-center justify-content-center bg-light" style="width:48px;height:48px;font-weight:600;">
          PD
        </div>
        <div class="media-body">
          <div class="font-weight-600">Paul Dennis</div>
          <div class="text-muted small">Trustpilot · July 17, 2024</div>
        </div>
      </div>
      <p class="mb-3 love-text">
        Since day one in working with Team Brian, I have truly been in great customer engagement.
        Out of many conversations with Team Brian, I consider it an honour to have meaningful inspiration.
        Highly recommend — they are real team leaders.
      </p>
      <div class="d-flex align-items-center text-muted small mt-2">
        <span class="mr-2 text-warning"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
        <span class="mx-2">·</span><span>Verified review</span>
      </div>
    </div>
  </div>
</div>
<div class="m-item card-col" data-source="trustpilot">
  <div class="card shadow-sm love-card">
    <div class="card-body">
      <div class="media align-items-center mb-3">
        <div class="rounded-circle mr-3 d-flex align-items-center justify-content-center bg-light" style="width:48px;height:48px;font-weight:600;">
          VO
        </div>
        <div class="media-body">
          <div class="font-weight-600">Victor Olivetchi</div>
          <div class="text-muted small">Trustpilot · Sept 12, 2024</div>
        </div>
      </div>
      <p class="mb-3 love-text">
        Benn Marcus has shown an absolutely phenomenal job! Always listening to my requests,
        refining them, responding quickly, and guiding me through the entire process. His insights
        helped reshape my branding strategies. Outstanding work — looking forward to continuing this journey!
      </p>
      <div class="d-flex align-items-center text-muted small mt-2">
        <span class="mr-2 text-warning"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
        <span class="mx-2">·</span><span>Verified review</span>
      </div>
    </div>
  </div>
</div>
<div class="m-item card-col" data-source="trustpilot">
  <div class="card shadow-sm love-card">
    <div class="card-body">
      <div class="media align-items-center mb-3">
        <div class="rounded-circle mr-3 d-flex align-items-center justify-content-center bg-light" style="width:48px;height:48px;font-weight:600;">
          CW
        </div>
        <div class="media-body">
          <div class="font-weight-600">Chris Wilkins</div>
          <div class="text-muted small">Trustpilot · Sept 10, 2024</div>
        </div>
      </div>
      <p class="mb-3 love-text">
        Victor Value and his entire design team were incredibly attentive and very prompt with updates.
        We couldn’t be happier with the work they did for us!
      </p>
      <div class="d-flex align-items-center text-muted small mt-2">
        <span class="mr-2 text-warning"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
        <span class="mx-2">·</span><span>Verified review</span>
      </div>
    </div>
  </div>
</div>
<div class="m-item card-col" data-source="trustpilot">
  <div class="card shadow-sm love-card">
    <div class="card-body">
      <div class="media align-items-center mb-3">
        <div class="rounded-circle mr-3 d-flex align-items-center justify-content-center bg-light" style="width:48px;height:48px;font-weight:600;">
          FK
        </div>
        <div class="media-body">
          <div class="font-weight-600">Fatlina Kasmi</div>
          <div class="text-muted small">Trustpilot · Aug 7, 2024</div>
        </div>
      </div>
      <p class="mb-3 love-text">
        Robert James made my website process incredibly easy and stress-free.
      </p>
      <div class="d-flex align-items-center text-muted small mt-2">
        <span class="mr-2 text-warning"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
        <span class="mx-2">·</span><span>Verified review</span>
      </div>
    </div>
  </div>
</div>
<div class="m-item card-col" data-source="trustpilot">
  <div class="card shadow-sm love-card">
    <div class="card-body">
      <div class="media align-items-center mb-3">
        <div class="rounded-circle mr-3 d-flex align-items-center justify-content-center bg-light" style="width:48px;height:48px;font-weight:600;">
          JK
        </div>
        <div class="media-body">
          <div class="font-weight-600">Julie Kaman</div>
          <div class="text-muted small">Trustpilot · Sept 8, 2024</div>
        </div>
      </div>
      <p class="mb-3 love-text">
        I have found working with Team Brian very pleasant. Great communication,
        fast responses, and highly professional! Strongly recommend them!
      </p>
      <div class="d-flex align-items-center text-muted small mt-2">
        <span class="mr-2 text-warning"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
        <span class="mx-2">·</span><span>Verified review</span>
      </div>
    </div>
  </div>
</div>
<div class="m-item card-col" data-source="trustpilot">
  <div class="card shadow-sm love-card">
    <div class="card-body">
      <div class="media align-items-center mb-3">
        <div class="rounded-circle mr-3 d-flex align-items-center justify-content-center bg-light" 
             style="width:48px;height:48px;font-weight:600;">
          CA
        </div>
        <div class="media-body">
          <div class="font-weight-600">Carrie A.</div>
          <div class="text-muted small">Trustpilot · Aug 10, 2024</div>
        </div>
      </div>
      <p class="mb-3 love-text">
        I worked with Team Tristan on my logo animation and brand logo package — and they did a great job.
        Thank you!
      </p>
      <div class="d-flex align-items-center text-muted small mt-2">
        <span class="mr-2 text-warning">
          <i class="fas fa-star"></i><i class="fas fa-star"></i>
          <i class="fas fa-star"></i><i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </span>
        <span class="mx-2">·</span>
        <span>Verified review</span>
      </div>
    </div>
  </div>
</div>
<div class="m-item card-col" data-source="trustpilot">
  <div class="card shadow-sm love-card">
    <div class="card-body">
      <div class="media align-items-center mb-3">
        <div class="rounded-circle mr-3 d-flex align-items-center justify-content-center bg-light"
             style="width:48px;height:48px;font-weight:600;">
          M
        </div>
        <div class="media-body">
          <div class="font-weight-600">Maria</div>
          <div class="text-muted small">Trustpilot · Aug 9, 2024</div>
        </div>
      </div>
      <p class="mb-3 love-text">
        Very happy with the quality. Team was excellent — great design work and smooth communication throughout the project.
      </p>
      <div class="d-flex align-items-center text-muted small mt-2">
        <span class="mr-2 text-warning">
          <i class="fas fa-star"></i><i class="fas fa-star"></i>
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
        </span>
        <span class="mx-2">·</span><span>Verified review</span>
      </div>
    </div>
  </div>
</div>
<div class="m-item card-col" data-source="trustpilot">
  <div class="card shadow-sm love-card">
    <div class="card-body">
      <div class="media align-items-center mb-3">
        <div class="rounded-circle mr-3 d-flex align-items-center justify-content-center bg-light"
             style="width:48px;height:48px;font-weight:600;">
          LB
        </div>
        <div class="media-body">
          <div class="font-weight-600">Lauren B.</div>
          <div class="text-muted small">Trustpilot · Sept 10, 2024</div>
        </div>
      </div>
      <p class="mb-3 love-text">
        Outstanding and professional service! The team exceeded expectations and delivered beautifully branded
        materials, website designs, and marketing assets. Highly recommended!
      </p>
      <div class="d-flex align-items-center text-muted small mt-2">
        <span class="mr-2 text-warning">
          <i class="fas fa-star"></i><i class="fas fa-star"></i>
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
        </span>
        <span class="mx-2">·</span>
        <span>Verified review</span>
      </div>
    </div>
  </div>
</div>
<div class="m-item card-col" data-source="trustpilot">
  <div class="card shadow-sm love-card">
    <div class="card-body">
      <div class="media align-items-center mb-3">
        <div class="rounded-circle mr-3 d-flex align-items-center justify-content-center bg-light"
             style="width:48px;height:48px;font-weight:600;">
          J
        </div>
        <div class="media-body">
          <div class="font-weight-600">Jennifer</div>
          <div class="text-muted small">Trustpilot · Oct 12, 2024</div>
        </div>
      </div>
      <p class="mb-3 love-text">
        Robert is very helpful and professional! Thank you and your team for all your work.
      </p>
      <div class="d-flex align-items-center text-muted small mt-2">
        <span class="mr-2 text-warning">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          <i class="fas fa-star"></i><i class="fas fa-star"></i>
        </span>
        <span class="mx-2">·</span>
        <span>Verified review</span>
      </div>
    </div>
  </div>
</div>
<div class="m-item card-col" data-source="trustpilot">
<div class="card shadow-sm love-card">
    <div class="card-body">
      <div class="media align-items-center mb-3">
        <div class="rounded-circle mr-3 d-flex align-items-center justify-content-center bg-light" 
             style="width:48px;height:48px;font-weight:600;">
          J
        </div>
        <div class="media-body">
          <div class="font-weight-600">Jim</div>
          <div class="text-muted small">Trustpilot · Sept 7, 2024</div>
        </div>
      </div>
      <p class="mb-3 love-text">
        Working with Design Centura was simple and straightforward. The communication was good and the final product 
        exceeded expectations. Great experience overall!
      </p>
      <div class="d-flex align-items-center text-muted small mt-2">
        <span class="mr-2 text-warning">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          <i class="fas fa-star"></i><i class="fas fa-star"></i>
        </span>
        <span class="mx-2">·</span>
        <span>Verified review</span>
      </div>
    </div>
  </div>
<div class="m-item card-col" data-source="trustpilot">
  <div class="card shadow-sm love-card">
    <div class="card-body">
      <div class="media align-items-center mb-3">
        <div class="rounded-circle mr-3 d-flex align-items-center justify-content-center bg-light" 
             style="width:48px;height:48px;font-weight:600;">
          JD
        </div>
        <div class="media-body">
          <div class="font-weight-600">Jadin Diaz</div>
          <div class="text-muted small">Trustpilot · Sept 9, 2024</div>
        </div>
      </div>
      <p class="mb-3 love-text">
        Design Centura is amazing! Our website development process was incredibly smooth. Robert was fast,
        responsive, and always supportive from beginning to end.
      </p>
      <div class="d-flex align-items-center text-muted small mt-2">
        <span class="mr-2 text-warning">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          <i class="fas fa-star"></i><i class="fas fa-star"></i>
        </span>
        <span class="mx-2">·</span>
        <span>Verified review</span>
      </div>
    </div>
  </div>
</div>
<div class="m-item card-col" data-source="trustpilot">
  <div class="card shadow-sm love-card">
    <div class="card-body">
      <div class="media align-items-center mb-3">
        <div class="rounded-circle mr-3 d-flex align-items-center justify-content-center bg-light"
             style="width:48px;height:48px;font-weight:600;">
          JR
        </div>
        <div class="media-body">
          <div class="font-weight-600">Jeff Robinson</div>
          <div class="text-muted small">Trustpilot · Oct 12, 2024</div>
        </div>
      </div>
      <p class="mb-3 love-text">
        It was a seamless job with my logo and website. Highly recommended.
      </p>
      <div class="d-flex align-items-center text-muted small mt-2">
        <span class="mr-2 text-warning">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          <i class="fas fa-star"></i><i class="fas fa-star"></i>
        </span>
        <span class="mx-2">·</span>
        <span>Verified review</span>
      </div>
    </div>
  </div>
</div>
<div class="m-item card-col" data-source="trustpilot">
  <div class="card shadow-sm love-card">
    <div class="card-body">
      <div class="media align-items-center mb-3">
        <div class="rounded-circle mr-3 d-flex align-items-center justify-content-center bg-light"
             style="width:48px;height:48px;font-weight:600;">
          LB
        </div>
        <div class="media-body">
          <div class="font-weight-600">Lori Butterfield</div>
          <div class="text-muted small">Trustpilot · Sept 25, 2024</div>
        </div>
      </div>
      <p class="mb-3 love-text">
        Perfect logo! The team was great—clean, creative design, and fast turnaround.
        Extremely satisfied with the results.
      </p>
      <div class="d-flex align-items-center text-muted small mt-2">
        <span class="mr-2 text-warning">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          <i class="fas fa-star"></i><i class="fas fa-star"></i>
        </span>
        <span class="mx-2">·</span>
        <span>Verified review</span>
      </div>
    </div>
  </div>
</div>
<div class="m-item card-col" data-source="trustpilot">
  <div class="card shadow-sm love-card">
    <div class="card-body">
      <div class="media align-items-center mb-3">
        <div class="rounded-circle mr-3 d-flex align-items-center justify-content-center bg-light"
             style="width:48px;height:48px;font-weight:600;">
          R
        </div>
        <div class="media-body">
          <div class="font-weight-600">Rebecca</div>
          <div class="text-muted small">Trustpilot · Sept 15, 2024</div>
        </div>
      </div>
      <p class="mb-3 love-text">
        Great and overwhelming results! Outstanding service. The team surpassed expectations
        with branding, design, and website development. Highly recommended.
      </p>
      <div class="d-flex align-items-center text-muted small mt-2">
        <span class="mr-2 text-warning">
          <i class="fas fa-star"></i><i class="fas fa-star"></i>
          <i class="fas fa-star"></i><i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </span>
        <span class="mx-2">·</span><span>Verified review</span>
      </div>
    </div>
  </div>
</div>
<div class="m-item card-col" data-source="trustpilot">
  <div class="card shadow-sm love-card">
    <div class="card-body">
      <div class="media align-items-center mb-3">
        <div class="rounded-circle mr-3 d-flex align-items-center justify-content-center bg-light"
             style="width:48px;height:48px;font-weight:600;">
          FC
        </div>
        <div class="media-body">
          <div class="font-weight-600">Filmon and Crew</div>
          <div class="text-muted small">Trustpilot · Sept 8, 2024</div>
        </div>
      </div>
      <p class="mb-3 love-text">
        This company was incredibly helpful in all our projects. Amazing team!
      </p>
      <div class="d-flex align-items-center text-muted small mt-2">
        <span class="mr-2 text-warning"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
        <span class="mx-2">·</span>
        <span>Verified review</span>
      </div>
    </div>
  </div>
</div>
<div class="m-item card-col" data-source="trustpilot">
  <div class="card shadow-sm love-card">
    <div class="card-body">
      <div class="media align-items-center mb-3">
        <div class="rounded-circle mr-3 d-flex align-items-center justify-content-center bg-light"
             style="width:48px;height:48px;font-weight:600;">
          FM
        </div>
        <div class="media-body">
          <div class="font-weight-600">Frederick Marsh</div>
          <div class="text-muted small">Trustpilot · Aug 27, 2024</div>
        </div>
      </div>
      <p class="mb-3 love-text">
        Robert & his team delivered absolutely excellent results! My business branding now looks professional and sharp.
        They provided consistent updates until everything was perfect.
      </p>
      <div class="d-flex align-items-center text-muted small mt-2">
        <span class="mr-2 text-warning"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
        <span class="mx-2">·</span>
        <span>Verified review</span>
      </div>
    </div>
  </div>
</div>

</div>
<div class="m-item card-col" data-source="trustpilot">
  <div class="card shadow-sm love-card">
    <div class="card-body">
      <div class="media align-items-center mb-3">
        <div class="rounded-circle mr-3 d-flex align-items-center justify-content-center bg-light"
             style="width:48px;height:48px;font-weight:600;">
          DH
        </div>
        <div class="media-body">
          <div class="font-weight-600">Darren Handy</div>
          <div class="text-muted small">Trustpilot · Sept 3, 2024</div>
        </div>
      </div>
      <p class="mb-3 love-text">
        Robert is very professional! Quick responses, great communication, and delivered exactly what I wanted.
        Excellent work overall.
      </p>
      <div class="d-flex align-items-center text-muted small mt-2">
        <span class="mr-2 text-warning">
          <i class="fas fa-star"></i><i class="fas fa-star"></i>
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
        </span>
        <span class="mx-2">·</span><span>Verified review</span>
      </div>
    </div>
  </div>
</div>
<div class="m-item card-col" data-source="trustpilot">
  <div class="card shadow-sm love-card">
    <div class="card-body">
      <div class="media align-items-center mb-3">
        <div class="rounded-circle mr-3 d-flex align-items-center justify-content-center bg-light"
             style="width:48px;height:48px;font-weight:600;">
          JT
        </div>
        <div class="media-body">
          <div class="font-weight-600">James Tucker</div>
          <div class="text-muted small">Trustpilot · Sept 10, 2024</div>
        </div>
      </div>
      <p class="mb-3 love-text">
        Design Centura has been a cornerstone of my branding process. The team is excellent in communication,
        creativity, and customer service. Highly recommended!
      </p>
      <div class="d-flex align-items-center text-muted small mt-2">
        <span class="mr-2 text-warning">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          <i class="fas fa-star"></i><i class="fas fa-star"></i>
        </span>
        <span class="mx-2">·</span><span>Verified review</span>
      </div>
    </div>
  </div>
</div>
<div class="m-item card-col" data-source="trustpilot">
  <div class="card shadow-sm love-card">
    <div class="card-body">
      <div class="media align-items-center mb-3">
        <div class="rounded-circle mr-3 d-flex align-items-center justify-content-center bg-light"
             style="width:48px;height:48px;font-weight:600;">
          AJ
        </div>
        <div class="media-body">
          <div class="font-weight-600">April Julien</div>
          <div class="text-muted small">Trustpilot · Sept 12, 2024</div>
        </div>
      </div>
      <p class="mb-3 love-text">
        Team Brian did excellent work on my website and logo. Very responsive and extremely helpful.
        Great experience from start to finish!
      </p>
      <div class="d-flex align-items-center text-muted small mt-2">
        <span class="mr-2 text-warning">
          <i class="fas fa-star"></i><i class="fas fa-star"></i>
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
        </span>
        <span class="mx-2">·</span><span>Verified review</span>
      </div>
    </div>
  </div>
</div>
<div class="m-item card-col" data-source="trustpilot">
  <div class="card shadow-sm love-card" style="border: 2px solid #00c4b4;">
    <div class="card-body">
      <div class="media align-items-center mb-3">
        <div class="rounded-circle mr-3 d-flex align-items-center justify-content-center bg-light"
             style="width:48px;height:48px;font-weight:600;">
          JD
        </div>
        <div class="media-body">
          <div class="font-weight-600">Jaronathon Daniels</div>
          <div class="text-muted small">Trustpilot · Oct 11, 2024</div>
        </div>
      </div>
      <p class="mb-3 love-text">
        I honestly think Robert exceeded our company’s expectations. I have nothing but praise for him and his team.
        He redesigned our logo, social media assets, and brand identity to match our company vision.
        Communication was top-notch and updates were consistent.  
        A very painless process — I highly recommend him!
      </p>
      <div class="d-flex align-items-center text-muted small mt-2">
        <span class="mr-2 text-warning">
          <i class="fas fa-star"></i><i class="fas fa-star"></i>
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
        </span>
        <span class="mx-2">·</span>
        <span>Verified review</span>
      </div>
    </div>
  </div>
</div>
<div class="m-item card-col" data-source="trustpilot">
  <div class="card shadow-sm love-card">
    <div class="card-body">
      <div class="media align-items-center mb-3">
        <div class="rounded-circle mr-3 d-flex align-items-center justify-content-center bg-light"
             style="width:48px;height:48px;font-weight:600;">
          H
        </div>
        <div class="media-body">
          <div class="font-weight-600">Heather</div>
          <div class="text-muted small">Trustpilot · Sept 19, 2024</div>
        </div>
      </div>
      <p class="mb-3 love-text">
        I was searching for a logo & website designer when I came across Robert.  
        Outstanding quality, amazing communication, and fast delivery.  
        I’ll be using him again for more work — highly recommend!
      </p>
      <div class="d-flex align-items-center text-muted small mt-2">
        <span class="mr-2 text-warning">
          <i class="fas fa-star"></i><i class="fas fa-star"></i>
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
        </span>
        <span class="mx-2">·</span>
        <span>Verified review</span>
      </div>
    </div>
  </div>
</div>
<div class="m-item card-col" data-source="trustpilot">
  <div class="card shadow-sm love-card">
    <div class="card-body">
      <div class="media align-items-center mb-3">
        <div class="rounded-circle mr-3 d-flex align-items-center justify-content-center bg-light"
             style="width:48px;height:48px;font-weight:600;">
          JO
        </div>
        <div class="media-body">
          <div class="font-weight-600">Jessica Oliver</div>
          <div class="text-muted small">Trustpilot · Sept 14, 2024</div>
        </div>
      </div>
      <p class="mb-3 love-text">
        Robert was amazing to work with! He is very professional and efficient.  
        The entire process was smooth and he delivered high quality results.
      </p>
      <div class="d-flex align-items-center text-muted small mt-2">
        <span class="mr-2 text-warning">
          <i class="fas fa-star"></i><i class="fas fa-star"></i>
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
        </span>
        <span class="mx-2">·</span>
        <span>Verified review</span>
      </div>
    </div>
  </div>
</div>
<div class="m-item card-col" data-source="trustpilot">
  <div class="card shadow-sm love-card">
    <div class="card-body">
      <div class="media align-items-center mb-3">
        <div class="rounded-circle mr-3 d-flex align-items-center justify-content-center bg-light"
             style="width:48px;height:48px;font-weight:600;">
          RA
        </div>
        <div class="media-body">
          <div class="font-weight-600">Robin Andrews</div>
          <div class="text-muted small">Trustpilot · Sept 10, 2024</div>
        </div>
      </div>
      <p class="mb-3 love-text">
        Robert is incredible — efficient, responsive, and extremely skilled.  
        Couldn't be happier with my logo and website!
      </p>
      <div class="d-flex align-items-center text-muted small mt-2">
        <span class="mr-2 text-warning">
          <i class="fas fa-star"></i><i class="fas fa-star"></i>
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
        </span>
        <span class="mx-2">·</span>
        <span>Verified review</span>
      </div>
    </div>
  </div>
</div>
<div class="m-item card-col" data-source="trustpilot">
  <div class="card shadow-sm love-card">
    <div class="card-body">
      <div class="media align-items-center mb-3">
        <div class="rounded-circle mr-3 d-flex align-items-center justify-content-center bg-light"
             style="width:48px;height:48px;font-weight:600;">
          ST
        </div>
        <div class="media-body">
          <div class="font-weight-600">Shannon Tucker</div>
          <div class="text-muted small">Trustpilot · Sept 12, 2024</div>
        </div>
      </div>
      <p class="mb-3 love-text">
        Design Centura has been an amazing partner in our branding journey.  
        Communication was clear, updates were constant, and final results were phenomenal.
      </p>
      <div class="d-flex align-items-center text-muted small mt-2">
        <span class="mr-2 text-warning">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          <i class="fas fa-star"></i><i class="fas fa-star"></i>
        </span>
        <span class="mx-2">·</span>
        <span>Verified review</span>
      </div>
    </div>
  </div>
</div>
<div class="m-item card-col" data-source="trustpilot">
  <div class="card shadow-sm love-card">
    <div class="card-body">
      <div class="media align-items-center mb-3">
        <div class="rounded-circle mr-3 d-flex align-items-center justify-content-center bg-light"
             style="width:48px;height:48px;font-weight:600;">
          DM
        </div>
        <div class="media-body">
          <div class="font-weight-600">Darren Morris</div>
          <div class="text-muted small">Trustpilot · Sept 11, 2024</div>
        </div>
      </div>
      <p class="mb-3 love-text">
        Robert and the team did a great job designing my branding.  
        Very fast and very professional. Highly recommended!
      </p>
      <div class="d-flex align-items-center text-muted small mt-2">
        <span class="mr-2 text-warning">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          <i class="fas fa-star"></i><i class="fas fa-star"></i>
        </span>
        <span class="mx-2">·</span>
        <span>Verified review</span>
      </div>
    </div>
  </div>
</div>

</div>
</div>
</section>
<?php include('templates/footer.php'); ?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
      (function(){
        document.getElementById('year').textContent = new Date().getFullYear();
 
        var filterButtons = document.querySelectorAll('.filters [data-filter]');
        var cards = document.querySelectorAll('.card-col');
        var searchInput = document.getElementById('searchInput');

        function applyFilters(){
          var activeBtn = document.querySelector('.filters .btn.active');
          var filter = activeBtn ? activeBtn.getAttribute('data-filter') : 'all';
          var q = (searchInput.value || '').trim().toLowerCase();

          cards.forEach(function(card){
            var source = card.getAttribute('data-source');
            var text = card.innerText.toLowerCase();
            var matchFilter = (filter === 'all') || (source === filter);
            var matchSearch = q === '' || text.indexOf(q) !== -1;
            card.style.display = (matchFilter && matchSearch) ? '' : 'none';
          });
        }

        filterButtons.forEach(function(btn){
          btn.addEventListener('click', function(){
            filterButtons.forEach(function(b){ b.classList.remove('active'); });
            this.classList.add('active');
            applyFilters();
          });
        });

        if (searchInput){
          searchInput.addEventListener('input', applyFilters);
        }

        // Load more (demo: clones visible cards)
        var loadMoreBtn = document.getElementById('loadMore');
        if(loadMoreBtn){
          loadMoreBtn.addEventListener('click', function(){
            var container = document.getElementById('cardsRow');
            var visible = Array.from(document.querySelectorAll('.masonry .m-item')).filter(function(c){
              return c.style.display !== 'none';
            }).slice(0,4);
            visible.forEach(function(c){ container.appendChild(c.cloneNode(true)); });
          });
        }
      })();
    </script>
<script>
  (function(){
    var yearEl = document.getElementById('year');
    if (yearEl) {
      yearEl.textContent = new Date().getFullYear();
    }

    var filterButtons = document.querySelectorAll('.filters [data-filter]');
    var cards = document.querySelectorAll('.card-col');
    var searchInput = document.getElementById('searchInput');

    function applyFilters(){
      var activeBtn = document.querySelector('.filters .btn.active');
      var filter = activeBtn ? activeBtn.getAttribute('data-filter') : 'all';
      var q = (searchInput.value || '').trim().toLowerCase();

      cards.forEach(function(card){
        var source = card.getAttribute('data-source');
        var text = card.innerText.toLowerCase();
        var matchFilter = (filter === 'all') || (source === filter);
        var matchSearch = q === '' || text.indexOf(q) !== -1;
        card.style.display = (matchFilter && matchSearch) ? '' : 'none';
      });
    }

    filterButtons.forEach(function(btn){
      btn.addEventListener('click', function(){
        filterButtons.forEach(function(b){ b.classList.remove('active'); });
        this.classList.add('active');
        applyFilters();
      });
    });

    if (searchInput){
      searchInput.addEventListener('input', applyFilters);
    }

    var loadMoreBtn = document.getElementById('loadMore');
    if(loadMoreBtn){
      loadMoreBtn.addEventListener('click', function(){
        var container = document.getElementById('cardsRow');
        var visible = Array.from(document.querySelectorAll('.masonry .m-item')).filter(function(c){
          return c.style.display !== 'none';
        }).slice(0,4);
        visible.forEach(function(c){ container.appendChild(c.cloneNode(true)); });
      });
    }
  })();
</script>
