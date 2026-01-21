<?php include('templates/header.php'); ?>
<style>
    .yellow {
    color: #FFB400;
}
.masonry{
    column-count:3;
}

.hero-title {
    font-size: 2.8rem;
    font-weight: 600;
    line-height: 1.2;
}

span.blue {
    color: #196bff;
}

#stats {
    padding: 3.5rem 0;
    background: radial-gradient(circle at top left, #3a8dff 0, #0340b3 45%, #02142e 100%);
    color: #fff;
}

.stat-number {
    font-size: 2.1rem;
    font-weight: 800;
}

.stat-label {
    font-size: 0.9rem;
    text-transform: uppercase;
    letter-spacing: 0.16em;
    opacity: 0.8;
}

.service-title1 {
    color: #196bff;
}

.hero-text{
    text-align:left;
}

@media (max-width: 1366px)
{
    section.stats .stat-number
    {
        font-size:1.9rem;
    }
}

@media (max-width: 1024px)
{
    section.stats .stat-number
    {
        font-size:1.1rem;
    }
}

@media (max-width: 992px){
   .features-list {
        columns: 2;
        column-gap: 2rem;
        padding-left: 0rem;
    }

    .features-list li {
        margin-bottom: .4rem;
        font-size: .95rem;
        color: var(--text-main);
        list-style:none;
        display:flex;
        gap:0.2rem;
    }    
    
    .features-list li::before {
        content: "✔";
        font-size: 0.8rem;
        margin-top: 0.1rem;
        color: rgb(29, 78, 216);
    }
    section.stats .stat-number
    {
        font-size:1.1rem;
    }
}
@media (max-width: 768px) {
    .bg-gradient-blue {
        background: linear-gradient(135deg, #0f6ad9, #0b4ca3);
        color: #fff;
    }
    
    .hero-cta{
        justify-content:center;
    }
   
   
   .hero-text {
    text-align: center;
    margin: 0 auto 18px;
}
   
}
@media (max-width: 576px)
{
    section.hero .hero-title
    {
        font-size:2.0rem;
    }
    .section-title {
        font-size: 1.5rem;
    }
    section.expertise
    {
        padding-bottom:50px;
    }
    section.WhyDesignCentura
    {
        padding-top:0px;
        padding-bottom:56px;
    }
    section.solutions
    {
        padding-bottom:50px;
    }
    section.CoreCapabilities
    {
        padding-bottom:36px;
    }
    .solutions-item h3
    {
        font-size:1rem;
        font-weight:700;
    }
    section.stats
    {
        padding-top: 72px !important;
        padding-bottom: 82px !important;
    }
}
@media (max-width: 576px) {
    .masonry {
        column-count: 2;
    }
}
</style>
  <section class="hero section-padding">
    <div class="container pt-4">
      <div class="row align-items-center gy-4 pt-4">
        <div class="col-lg-6">
          <div class="badge-pill mb-3">Premium Amazon Marketing Partner</div>
          <h1 class="hero-title">Elevate Your Brand With <span>DesignCentura’s Amazon Marketing Solutions</span> </h1>
          <p class="hero-text">
            Elevate your Amazon presence with DesignCentura. Our expert team uses
            data-backed strategies to boost visibility, optimize listings, and
            maximize sales. Whether you’re a seasoned seller or just getting started,
            we help you simplify your approach and thrive in the world’s largest
            marketplace.
          </p>
          <div class="hero-cta d-flex flex-wrap gap-3">
            <a href="#solutions" class="btn btn-primary-custom btn-lg">Explore Work</a>
            <a href="#why-us" class="btn btn-primary-custom btn-lg">Discover More</a>
          </div>
        </div>
        <div class="col-lg-6">
        
        </div>
      </div>
    </div>
  </section>
  <section class="section-padding bg-section-light expertise" id="expertise">
    <div class="container">
      <div class="row align-items-center gy-4">
        <div class="col-lg-6 col-md-6 col-12">
          <p class="section-eyebrow mb-3 mx-0">Amazon Growth Strategy</p>
          <h2 class="section-title">Transform Your Sales with Our <span class="blue">Amazon Marketing Expertise</span> </h2>
          <p class="section-lead">
            With a deep understanding of Amazon’s constantly evolving algorithms,
            market trends, and performance metrics, we develop tailored strategies
            that match your brand goals. Discover the power of our Amazon-focused
            systems designed to increase product visibility, drive conversions, and
            set your business apart in the competitive online marketplace.
          </p>
        </div>
      </div>
    </div> 
  </section>
  <section class="section-padding WhyDesignCentura" id="why-us">
    <div class="container">
      <div class="row justify-content-center">
          <div class="col-lg-8 col-12">
              <div class="text-center mb-5">
                <p class="section-eyebrow">Why DesignCentura</p>
                <h2 class="section-title">Why Choose <span class="blue">DesignCentura for Your Amazon Marketing Needs?</span> </h2>
                <p class="section-lead mx-auto">
                  We combine industry experience, tailored strategy, and measurable execution
                  to deliver Amazon marketing that genuinely moves the needle for your brand.
                </p>
              </div>
          </div>
      </div>

      <div class="row g-4">
        <div class="col-lg-4 col-md-4 col-12">
          <div class="card-soft h-100">
            <div class="icon-pill">
              <i class="bi bi-stars"></i>
            </div>
            <h3 class="h5 mb-2 service-title1">Expertise that Delivers</h3>
            <p>
              Through our experienced team, we enhance marketing performance across Amazon.
              We use years of industry insights, listing optimization techniques, and
              data-driven improvements to elevate your brand visibility.
            </p>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12">
          <div class="card-soft highlight h-100">
            <div class="icon-pill">
              <i class="bi bi-sliders"></i>
            </div>
            <h3 class="h5 mb-2 service-title1">Tailored Solutions</h3>
            <p>
              Your brand is unique — and so are our strategies. We develop customized
              Amazon marketing plans built around your goals, ensuring meaningful
              engagement and consistent business growth.
            </p>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12">
          <div class="card-soft h-100">
            <div class="icon-pill">
              <i class="bi bi-check2-circle"></i>
            </div>
            <h3 class="h5 mb-2 service-title1">Proven Success</h3>
            <p>
              Our clients benefit from increased sales, stronger brand recognition, and
              ongoing performance improvements. DesignCentura has helped brands worldwide
              secure high-performing listings and measurable results through effective
              Amazon marketing execution.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section-padding bg-gradient-blue">
    <div class="container">
      <div class="row align-items-center gy-4 justify-content-center">
        <div class="col-lg-10">
          <h2 class="section-title mb-3 text-center">
            Gain Better Recognition with DesignCentura’s Amazon Marketing Expertise
          </h2>
          <p class="section-lead text-center mx-auto" style="color:#e5edff;">
            Get unmatched recognition on Amazon through DesignCentura’s high-impact
            marketing services and data-driven strategies. Our tailored approach
            helps your brand rise above competitors, reach the right audience, and
            achieve strong visibility in the ever-competitive digital marketplace.
          </p>
          <a href="#solutions" class="btn btn-primary-custom d-flex w-fit-content mx-auto" style="width:fit-content">
            Start Today
          </a>
        </div>
      </div>
    </div>
  </section>
  <section class="section-padding solutions" id="solutions">
    <div class="container">
      <div class="row justify-content-center">
          <div class="col-lg-8">
              <div class="text-center mb-4">
                <p class="section-eyebrow">Services</p>
                <h2 class="section-title">Our <span class="blue">Amazon Marketing </span>Solutions</h2>
                <p class="section-lead mx-auto">
                  A complete suite of Amazon-focused services designed to support every
                  stage of your selling journey — from listing creation to performance
                  optimization and account growth.
                </p>
              </div>
          </div>
      </div>
      <div class="solutions-list">
        <article class="solutions-item">
          <h3>Cataloging / Listing</h3>
          <p>
            We create detailed, optimized Amazon product listings designed to capture
            shopper attention and increase conversions.
          </p>
        </article>
        <article class="solutions-item">
          <h3>Account Management</h3>
          <p>
            From listing oversight to campaign monitoring, we manage your Amazon
            account with precision and consistency.
          </p>
        </article>
        <article class="solutions-item">
          <h3>Seller Reinforcement</h3>
          <p>
            We assist sellers with account reinstatements, appeals, and compliance
            to ensure uninterrupted business operations.
          </p>
        </article>
        <article class="solutions-item">
          <h3>Sales Boost / Ads</h3>
          <p>
            Our Amazon ad strategies maximize exposure and enhance the impact of your
            product promotions.
          </p>
        </article>
        <article class="solutions-item">
          <h3>Account Health Care</h3>
          <p>
            We maintain account health with proactive checks, accurate reporting,
            and personalized seller support.
          </p>
        </article>
        <article class="solutions-item">
          <h3>EBC / A+ Cataloging</h3>
          <p>
            We design rich A+ content and enhanced product pages that build trust,
            improve engagement, and increase sales potential.
          </p>
        </article>
      </div>
    </div>
  </section>
  <section class="section-padding bg-section-light CoreCapabilities">
    <div class="container">
      <div class="row gy-4 align-items-center">
        <div class="col-lg-6">
          <p class="section-eyebrow mx-0">Core Capabilities</p>
          <h2 class="section-title">Key Features of Our <span class="blue">Amazon Marketing Solutions</span></h2>
          <p class="section-lead">
            Every engagement is backed by structured processes, real-time data,
            and a continuous optimization mindset — giving your brand the advantage
            it needs to grow sustainably on Amazon.
          </p>
          <ul class="features-list">
            <li>Content Optimization</li>
            <li>Ad Management</li>
            <li>Ongoing Keyword Development</li>
            <li>SEO Development</li>
            <li>Competitive Analysis</li>
            <li>Review Management</li>
            <li>Strategic Pricing Optimization</li>
            <li>Inventory Management</li>
            <li>Performance Analytics</li>
          </ul>
        </div>
        <div class="col-lg-6">
          
        </div>
      </div>
    </div>
  </section>
  <!--<section class="stats-strip">-->
  <!--  <div class="container">-->
  <!--    <div class="row text-center text-md-start g-4 align-items-center">-->
  <!--      <div class="col-md-4">-->
  <!--        <h3>8500+</h3>-->
  <!--        <p>Global customers trusting DesignCentura for growth.</p>-->
  <!--      </div>-->
  <!--      <div class="col-md-4">-->
  <!--        <h3>4.5★ Rating</h3>-->
  <!--        <p>Consistently high satisfaction across Amazon sellers.</p>-->
  <!--      </div>-->
  <!--      <div class="col-md-4">-->
  <!--        <h3>Data-Backed Strategy</h3>-->
  <!--        <p>Decisions guided by performance insights and metrics.</p>-->
  <!--      </div>-->
  <!--    </div>-->
  <!--  </div>-->
  <!--</section>-->
  
  <section id="stats" class="stats">
    <div class="container">
      <div class="row text-center gy-4">
        <div class="col-lg-4 col-md-4 col-12">
          <div class="stat-number">8500+</div>
          <div class="stat-label">Global customers trusting DesignCentura for growth.</div>
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <div class="stat-number">4.5★ Rating</div>
          <div class="stat-label">Consistently high satisfaction across Amazon sellers</div>
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <div class="stat-number">Data-Backed Strategy</div>
          <div class="stat-label">Decisions guided by performance insights and metrics.</div>
        </div>
      
      </div>
    </div>
  </section>
  
  
  
 <section id="love" class="py-5 mt-5">
      <div class="container">
          <div class="text-center mb-5">
        <p class="section-eyebrow">What we offer</p>
        <h2 class="section-title">Client <span class="blue">Testimonails</span></h2>
        <p class="section-subtitle w-75 mx-auto">
          Inspired by agencies like DesignCentura, we cover everything from concept sketches
          to launch-ready digital assets, keeping your brand design under one roof.
        </p>
      </div>
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
         <div class="rounded-circle mr-3 d-flex align-items-center justify-content-center bg-light"
          style="width:48px;height:48px;font-weight:600;">D</div>
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