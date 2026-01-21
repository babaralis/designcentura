<?php include('templates/header.php'); ?>



<!-- mobile-app-development.php -->

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
    .masonry{
        column-count:3;
    }
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

  /* HERO */
  .hero-app{
    background:linear-gradient(135deg,#0057b8,#0686d8 55%,#0ea5e9);
    color:#ffffff;
    position:relative;
    overflow:hidden;
  }
  .hero-app .badge-pill{
    display:inline-flex;
    align-items:center;
    padding:.35rem .9rem;
    border-radius:999px;
    background:rgba(15,23,42,.15);
    font-size:.8rem;
    font-weight:500;
  }
  .hero-app .hero-title{
    font-size:2.8rem !important;
    font-weight:600;
    line-height:1.2;
  }
  @media (min-width:992px){
    .hero-app .hero-title{
      font-size:2.7rem;
    }
  }
  .hero-app .hero-title span{
    color:#facc15;
  }
  .hero-app .hero-text{
    color:#e5e7eb;
    max-width:560px;
  }
  .hero-app .hero-cta .btn-primary{
    background:#ffffff;
    border-color:#ffffff;
    color:#0f172a;
    font-weight:600;
  }
  .hero-app .hero-cta .btn-outline-light{
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

  /* DIFFERENCE / FEATURE CARDS */
  .feature-card{
    background:#ffffff;
    border-radius:var(--radius-card);
    padding:1.8rem 1.9rem;
    border:1px solid var(--border);
    box-shadow:0 14px 44px rgba(15,23,42,.05);
    height:100%;
  }
  .feature-card-icon{
    width:42px;
    height:42px;
    border-radius:999px;
    background:var(--primary-soft);
    color:var(--primary-dark);
    display:flex;
    align-items:center;
    justify-content:center;
    margin-bottom:.9rem;
  }
  .feature-card h3{
    font-size:1.05rem;
    font-weight:600;
    margin-bottom:.35rem;
  }
  .feature-card p{
    font-size:.9rem;
    color:var(--text-muted);
    margin-bottom:0;
  }

  /* CONTACT / LET'S DISCUSS */
  .discuss-section{
    background:var(--bg-light);
  }
  .discuss-card{
    background:#ffffff;
    border-radius:1.5rem;
    padding:2rem 2.2rem;
    border:1px solid var(--border);
    box-shadow:0 18px 60px rgba(15,23,42,.06);
  }
  .discuss-form .form-control{
    font-size:.9rem;
    border-radius:.75rem;
    border:1px solid var(--border);
  }
  .discuss-form .form-check-label{
    font-size:.85rem;
    color:var(--text-muted);
  }
  .discuss-form .btn-primary{
    background:var(--primary);
    border-color:var(--primary);
    font-weight:600;
    border-radius:.9rem;
    padding:.6rem 1.4rem;
    font-size:.9rem;
  }

  /* TYPE SECTION */
  .app-type-highlight{
    background:#ffffff;
    border-radius:var(--radius-card);
    padding:2rem 2.1rem;
    border:1px solid var(--border);
    box-shadow:0 18px 55px rgba(15,23,42,.05);
  }
  .app-type-badge{
    display:inline-flex;
    align-items:center;
    gap:.4rem;
    padding:.33rem .85rem;
    border-radius:999px;
    background:var(--primary-soft);
    color:var(--primary-dark);
    font-size:.78rem;
    font-weight:600;
    text-transform:uppercase;
    letter-spacing:.12em;
    margin-bottom:.7rem;
  }
  .app-type-highlight h3{
    font-size:1.2rem;
    font-weight:700;
    margin-bottom:.5rem;
  }
  .app-type-highlight p{
    font-size:.92rem;
    color:var(--text-muted);
  }

  /* VISIBILITY STRIP */
  .visibility-strip{
    background:linear-gradient(135deg,#0b3a7a,#0686d8);
    color:#ffffff;
    border-radius:1.6rem;
    padding:2.2rem 2.4rem;
    box-shadow:0 18px 60px rgba(15,23,42,.55);
  }
  .visibility-strip p{
    color:#e5e7eb;
    margin-bottom:0;
  }
  .visibility-strip .btn-outline-light{
    border-radius:.9rem;
    font-size:.9rem;
    padding:.55rem 1.5rem;
    font-weight:600;
  }

  /* SERVICES GRID */
  .service-card{
    background:#ffffff;
    border-radius:var(--radius-card);
    border:1px solid var(--border);
    padding:1.7rem 1.8rem;
    box-shadow:0 14px 42px rgba(15,23,42,.05);
    height:100%;
  }
  .service-card-icon{
    width:38px;
    height:38px;
    border-radius:999px;
    background:var(--primary-soft);
    color:var(--primary-dark);
    display:flex;
    align-items:center;
    justify-content:center;
    margin-bottom:.8rem;
    font-size:.95rem;
  }
  /*.service-card h3{*/
  /*  font-size:1.02rem;*/
  /*  font-weight:600;*/
  /*  margin-bottom:.35rem;*/
  /*}*/
  .service-card p{
    font-size:.88rem;
    color:var(--text-muted);
  }

  /* FEATURES LIST */
  /*.feature-list-card{*/
  /*  background:#ffffff;*/
  /*  border-radius:var(--radius-card);*/
  /*  border:1px solid var(--border);*/
  /*  padding:2rem 2.1rem;*/
  /*  box-shadow:0 18px 55px rgba(15,23,42,.05);*/
  /*}*/
  .feature-bullets{
    columns:2;
    column-gap:2rem;
    list-style:none;
    padding-left:0;
    margin-bottom:0;
    font-size:.9rem;
  }
  @media(max-width:767.98px){
    .feature-bullets{
      columns:1;
    }
  }
  .feature-bullets li{
    break-inside:avoid;
    margin-bottom:.55rem;
    position:relative;
    padding-left:1.3rem;
  }
  .feature-bullets li::before{
    content:"\f00c";
    font-family:"Font Awesome 6 Free";
    font-weight:900;
    position:absolute;
    left:0;
    top:.1rem;
    font-size:.75rem;
    color:var(--primary);
  }

  /* SOLUTIONS */
  .solution-card{
    background:#ffffff;
    border-radius:var(--radius-card);
    border:1px solid var(--border);
    padding:1.6rem 1.8rem;
    box-shadow:0 14px 42px rgba(15,23,42,.04);
    height:100%;
  }
  .solution-card h3{
    font-size:1.02rem;
    font-weight:600;
    margin-bottom:.4rem;
  }
  .solution-card p{
    font-size:.88rem;
    color:var(--text-muted);
    margin-bottom:0;
  }

  /* TESTIMONIALS */
  .testimonials-section{
    background:var(--bg-light);
  }

  
  .rating-pill {
    display: inline-flex;
    align-items: center;
    gap: .6rem;
    padding: .35rem .85rem;
    border-radius: 999px;
    background: #a7c6ff36;
    color: var(--primary);
    font-size: .8rem;
    margin-bottom: 1rem;
}

.rating-pill span {
   color: var(--primary);
}
  
  .testimonial-card{
    background:#ffffff;
    border-radius:var(--radius-card);
    padding:1.7rem 1.8rem;
    border:1px solid var(--border);
    box-shadow:0 14px 42px rgba(15,23,42,.05);
    height:100%;
  }
  .testimonial-name{
    font-weight:600;
    margin-bottom:.15rem;
    font-size:.96rem;
  }
  .testimonial-role{
    font-size:.82rem;
    color:var(--text-muted);
    margin-bottom:.75rem;
  }
  .testimonial-text{
    font-size:.9rem;
    color:var(--text-muted);
    margin-bottom:0;
  }
  
  
   section.hero-app.section-padding {
    padding-top: 8rem;
    padding-bottom: 6rem;
    
        background: radial-gradient(circle at top left, #3a8dff 0, #0340b3 45%, #02142e 100%) !important;
}

.hero-title h1 {
    font-size: 2.8rem ;
    font-weight: 600;
    line-height: 1.2;
}

  .btn-primary-custom{
      background:linear-gradient(135deg,#ffb428,#ff7b2b)!important;
      border:none;
      color:#111827;
      padding:.8rem 1.75rem;
      border-radius:999px;
      font-weight:700;
      font-size:.95rem;
      box-shadow:0 16px 30px rgba(15,23,42,.22);
    }
    .btn-primary-custom:hover{
      background:linear-gradient(135deg,#ff7b2b,#ffb428) !important;
      color:#111827;
    }

    .yellow {
    color: #FFB400 !important;
    }
    
    .service-title1 {
    color: #196bff;
}

.service-title {
    font-weight: 700;
    margin-bottom: 0.4rem;
}

.hero-badge {
    display: inline-flex;
    align-items: center;
    gap: .55rem;
    padding: .45rem .95rem;
    border-radius: 999px;
    background: rgba(255, 255, 255, .9);
    box-shadow: 0 10px 25px rgba(15, 23, 42, .16);
    font-size: .8rem;
    color: #111827;
    margin-bottom: 1.1rem;
}

.btn-outline-primary1 {
    border-radius: .9rem;
    font-size: .9rem;
    padding: .55rem 1.5rem;
    font-weight: 600;
       border: 2px solid rgba(96, 165, 250, 0.7);
} 

@media (max-width: 576px) {
    .masonry {
        column-count: 2;
    }
}
</style>

<!-- HERO: Mobile App Development -->
<section class="hero-app section-padding">
  <div class="container">
    <div class="row align-items-center gy-4">
      <div class="col-lg-6">
        <div class="hero-badge mb-3">
          
          Mobile App Development Services
        </div>
        <h1 class="hero-title mb-3">
          Elevate Your Business<br>
          With Our <span class="yellow">Mobile App</span> Development Services.
        </h1>
        <p class="hero-text mb-4">
          Bring your business into the digital era with DesignCentura’s end-to-end mobile app development solutions.
          From wireframes to fully deployed applications, we engineer intuitive interfaces, smooth performance, and
          scalable architectures that help brands thrive in the app economy.
        </p>
        <p class="hero-text mb-4">
          Whether you're launching your first app or upgrading an existing one, we build powerful digital experiences
          tailored around your goals, audience, and workflow.
        </p>
        <div class="hero-cta d-flex flex-wrap align-items-center gap-2">
          <a href="#portfolio" class="btn  btn-primary-custom btn-sm px-4">
            Visit Portfolio
          </a> 
          <a href="#process" class="btn btn-outline-light btn-sm px-4">
            How It Works?
          </a>
        </div>
      </div>
      <div class="col-lg-6">
       
      </div>
    </div>
  </div>
</section>

<!-- WHAT MAKES US DIFFERENT -->
<section class="section-padding" id="process">
  <div class="container">
      <div class="row justify-content-center text-center mb-4">
        
         <div class="col-lg-8 col-12">
      <div class="section-eyebrow">Why Choose Us</div>
      <h2 class="section-title mb-2">
        What Makes Our <span class="blue">Mobile App Development Company</span>  Different?
      </h2>
      <p class="section-lead mx-auto">
        Every project is built on strategy, precision, and long-term scalability. We align each app with your brand,
        your users, and the results you’re aiming for.
      </p>
    </div>
          
      </div>
      
   

    <div class="row g-4">
      <div class="col-md-6 col-lg-3">
        <div class="feature-card h-100">
          <div class="feature-card-icon">
            <i class="fa-solid fa-lightbulb"></i>
          </div>
          <h3 class="h5 mb-1 service-title1">Innovative Solutions</h3>
          <p>
            We combine modern design thinking with future-ready technologies to craft apps that function smoothly
            and look exceptional.
          </p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="feature-card h-100">
          <div class="feature-card-icon">
            <i class="fa-solid fa-chart-line"></i>
          </div>
          <h3 class="h5 mb-1 service-title1">Result-Driven Execution</h3>
          <p>
            Every app is developed with precision, optimization, and performance in mind—ensuring your solution
            delivers measurable outcomes.
          </p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="feature-card h-100">
          <div class="feature-card-icon">
            <i class="fa-solid fa-handshake-angle"></i>
          </div>
          <h3 class="h5 mb-1 service-title1">Client-Centric Process</h3>
          <p>
            Your app vision guides our development. We collaborate closely, refine intelligently, and support you
            through every stage.
          </p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="feature-card h-100">
          <div class="feature-card-icon">
            <i class="fa-solid fa-brush"></i>
          </div>
          <h3 class="h5 mb-1 service-title1">Brand-Aligned Experiences</h3>
          <p>
            We create mobile experiences that reflect your business personality, style, and mission while offering
            seamless usability.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- LET'S DISCUSS: CONTACT -->
<!--<section class="discuss-section section-padding">-->
<!--  <div class="container">-->
<!--    <div class="row gy-4 align-items-center">-->
<!--      <div class="col-lg-5">-->
<!--        <div class="section-eyebrow">Let’s Discuss</div>-->
<!--        <h2 class="section-title">-->
<!--          Ready to Talk About Your App?-->
<!--        </h2>-->
<!--        <p class="section-lead mb-3">-->
<!--          Share your project idea, target audience, and must-have features. Our team will review your brief and come back-->
<!--          with tailored recommendations, timelines, and pricing.-->
<!--        </p>-->
<!--        <p class="text-muted small mb-0">-->
<!--          We work with startups, growing brands, and established enterprises to deliver mobile apps that actually support-->
<!--          business objectives—not just add another icon on the home screen.-->
<!--        </p>-->
<!--      </div>-->
<!--      <div class="col-lg-7">-->
<!--        <div class="discuss-card">-->
<!--          <form class="discuss-form">-->
<!--            <div class="row g-3">-->
<!--              <div class="col-md-6">-->
<!--                <label class="form-label small mb-1">Your Name</label>-->
<!--                <input type="text" class="form-control" placeholder="Enter your full name">-->
<!--              </div>-->
<!--              <div class="col-md-6">-->
<!--                <label class="form-label small mb-1">Your Email</label>-->
<!--                <input type="email" class="form-control" placeholder="name@company.com">-->
<!--              </div>-->
<!--              <div class="col-12">-->
<!--                <label class="form-label small mb-1">Your Message</label>-->
<!--                <textarea class="form-control" rows="3" placeholder="Tell us about your project, industry, and platform preferences."></textarea>-->
<!--              </div>-->
<!--              <div class="col-md-6 d-flex align-items-center">-->
<!--                <div class="form-check">-->
<!--                  <input class="form-check-input" type="checkbox" id="notRobot">-->
<!--                  <label class="form-check-label" for="notRobot">-->
<!--                    I am not a robot-->
<!--                  </label>-->
<!--                </div>-->
<!--              </div>-->
<!--              <div class="col-md-6 d-flex justify-content-md-end">-->
<!--                <button type="submit" class="btn btn-primary mt-2 mt-md-0">-->
<!--                  Submit-->
<!--                </button>-->
<!--              </div>-->
<!--            </div>-->
<!--          </form>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
<!--</section>-->




<!-- APP TYPE HIGHLIGHT + PORTFOLIO CTA -->
<section class="section-padding" id="portfolio">
  <div class="container">
    <div class="row gy-4 align-items-stretch">
      <div class="col-lg-6">
        <div class="app-type-highlight h-100">
          <div class="app-type-badge">
           
            Taxi &amp; Transportation App
          </div>
          <h3 class="h5">We Master the Art of Developing a Wide Range of Mobile Apps.</h3>
          <p class="mb-3">
            Move users effortlessly with a dedicated transportation app crafted for reliability and smooth experiences.
            From live tracking and booking features to secure payments and rider management, we bring together
            innovation and convenience to reshape digital mobility.
          </p>
         
          <a href="#cta-solutions" class="btn contact-submit-btn px-4">
            Discover Now
          </a>
          
          
        </div>
      </div>
      <div class="col-lg-6">
        <div class="visibility-strip h-100 d-flex flex-column justify-content-between">
          <div class="mb-3">
            <div class="section-eyebrow text-white mb-2 mx-0">App Visibility &amp; Strategy</div>
            <h3 class="h5 fw-semibold mb-2 text-white">
              Elevate Your App’s Visibility for Maximum Impact.
            </h3>
            <p class="mb-3">
              Position your app for long-term success with strategic visibility methods designed by DesignCentura.
              We help your app stand out in a saturated market through intelligent UX enhancements, brand-aligned
              interfaces, and performance-focused improvements.Start planning your launch, growth, and optimization in one place.
            </p>
          </div>
          <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
            
           <a href="#cta-solutions" class="btn btn-outline-light btn-sm">
              Start Winning Your Strategy Now
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SERVICES GRID -->
<section class="section-padding pt-0">
  <div class="container">
      <div class="row justify-content-center text-center mb-4">
         <div class="col-lg-8 col-12">
      <div class="section-eyebrow">Services</div>
      <h2 class="section-title mb-2">
        Discover Our Comprehensive <span class="blue">Mobile App Development</span> Services.
      </h2>
      <p class="section-lead mx-auto">
        From single-platform builds to cross-platform ecosystems, we design and develop applications that scale with your
        business and deliver consistent user experiences.
      </p>
    </div> 
      </div>
      
    

    <div class="row g-4">
      <div class="col-md-6 col-lg-4">
        <div class="service-card h-100">
          <div class="service-card-icon">
            <i class="fa-brands fa-android"></i>
          </div>
          <h3 class="service-title">Android App Development</h3>
          <p>
            We develop powerful Android apps built for fast performance, user convenience, and long-term scalability.
          </p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="service-card h-100">
          <div class="service-card-icon">
            <i class="fa-brands fa-apple"></i>
          </div>
          <h3 class="service-title">iPhone App Development</h3>
          <p>
            Our iOS development team delivers elegant, intuitive, and secure experiences tailored for Apple users.
          </p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="service-card h-100">
          <div class="service-card-icon">
            <i class="fa-solid fa-mobile"></i>
          </div>
          <h3 class="service-title">Flutter App Development</h3>
          <p>
            Build cross-platform apps with stunning interfaces and shared codebases—optimized for speed and cost-efficiency.
          </p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="service-card h-100">
          <div class="service-card-icon">
            <i class="fa-solid fa-layer-group"></i>
          </div>
          <h3 class="service-title">Cross-Platform Mobile Apps</h3>
          <p>
            We bring your app to multiple platforms with unified architecture and seamless functionality.
          </p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="service-card h-100">
          <div class="service-card-icon">
            <i class="fa-brands fa-react"></i>
          </div>
          <h3 class="service-title">React Native Apps</h3>
          <p>
            Modern, flexible React Native apps offering fast development cycles, smooth performance, and a native-like feel.
          </p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="service-card h-100">
          <div class="service-card-icon">
            <i class="fa-solid fa-globe"></i>
          </div>
          <h3 class="service-title">Progressive Web Apps</h3>
          <p>
            Lightweight, app-like experiences delivered through the browser with offline capability and fast loading.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- KEY FEATURES -->
<section class="section-padding pt-0">
  <div class="container">
    <div class="row ">
      <div class="col-lg-6">
        <div class="feature-list-card">
          <div class="section-eyebrow mb-2 mx-0">Key Features</div>
          <h2 class="section-title mb-3">
            Key Features of <span class="blue">Our Mobile App</span>  Development.
          </h2>
          <ul class="feature-bullets">
            <li>User-Friendly Design</li>
            <li>Smooth and Easy Navigation (UI/UX)</li>
            <li>Strong Security Measures</li>
            <li>Cross-Platform Compatibility</li>
            <li>Real-Time Data Synchronization</li>
            <li>Efficient Performance Optimization</li>
            <li>Scalability for Future Growth</li>
            <li>Interactive Push Notifications</li>
            <li>Payment Gateway Integration</li>
            <li>Social Media Integration</li>
            <li>Powerful Analytics &amp; Reporting</li>
            <li>QR/Barcode Scanner Integration</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SOLUTIONS & BENEFITS -->


<!-- TESTIMONIALS -->
<section class="testimonials-section section-padding">
  <div class="container">
      
      <div class="row justify-content-center text-center mb-4 ">
          
    <div class="col-lg-8 col-12">
     
      <div class="section-eyebrow">Testimonials</div>
      <h2 class="section-title mb-2">
        Explore Our <span class="blue">Comprehensive Mobile App</span> Solutions.
      </h2>
      <p class="section-lead mx-auto">
         We don’t just build apps—we create full ecosystems that support your operations, customers, and decision-making.
      </p>
    </div>
          
      </div>
      

    <div class="row g-4">
      <div class="col-md-4">
        <div class="testimonial-card h-100">
          <div class="testimonial-name">John H. — Tech Entrepreneur</div>
          <div class="testimonial-role">Founder of a SaaS startup</div>
          <p class="testimonial-text">
            “DesignCentura understood my concept instantly and turned it into a feature-rich mobile app faster than expected.”
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="testimonial-card h-100">
          <div class="testimonial-name">Rebecca L. — Founder, NourishCo</div>
          <div class="testimonial-role">Health &amp; Wellness Brand</div>
          <p class="testimonial-text">
            “The development team delivered an app that has completely elevated our customer experience. Highly recommended.”
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="testimonial-card h-100">
          <div class="testimonial-name">Alan K. — Logistics Lead</div>
          <div class="testimonial-role">Operations &amp; Transport</div>
          <p class="testimonial-text">
            “My first experience building a mobile app, and the DesignCentura team made the process simple, smooth, and professional.”
          </p>
        </div>
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
<section id="contact" class="contact-modern">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="contact-shell">
            <div class="row g-4 align-items-start">
              <!-- LEFT: Info -->
              <div class="col-lg-4">
                <p class="contact-kicker">LET’S DISCUSS</p>
                
                <h2 class="contact-title">
                 Ready to Talk About Your App?
                </h2>
                <p class="contact-text">
                 Share your project idea, target audience, and must-have features. Our team will review your brief and come back with tailored recommendations, timelines, and pricing.
                </p>
                <p class="contact-text">We work with startups, growing brands, and established enterprises to deliver mobile apps that actually support business objectives—not just add another icon on the home screen.</p>

                <div class="contact-info-block">
                  <div class="contact-info-item">
                    <span class="contact-info-label">Email</span>
                    <a class="text-decoration-none text-light" href="mailto:info@designcentura.com" class="contact-info-value">info@designcentura.com</a>
                  </div>
                  <div class="contact-info-item">
                    <span class="contact-info-label">Phone</span>
                    <a class="text-decoration-none text-light" href="tel:346-626-8651" class="contact-info-value">346‑602‑8029</a>
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