<?php include('templates/header.php'); ?>

<style>
    :root {
      --primary:#1d64d7;
      --primary-dark:#0b4ca3;
      --primary-soft:#e7f0ff;
      --accent:#ffb428;
      --text-main:#111827;
      --text-muted:#6b7280;
      --bg-light:#f5f7fb;
      --radius-card:1.4rem;
    }

    *{box-sizing:border-box;}

    body{
      font-family: system-ui,-apple-system,BlinkMacSystemFont,"Segoe UI",sans-serif;
      color:var(--text-main);
      background:#ffffff;
      line-height:1.6;
      scroll-behavior:smooth;
    }

    img{max-width:100%;height:auto;display:block;}

    .section-padding{padding:80px 0;}
    @media (max-width:575.98px){
      .section-padding{padding:60px 0;}
    }

    .section-eyebrow{
      font-size:.8rem;
      text-transform:uppercase;
      letter-spacing:.16em;
      font-weight:600;
      color:var(--primary-dark);
      margin-bottom:.75rem;
    }

    .section-title{
      font-size:2.8rem;
      font-weight:600;
      margin-bottom:1rem;
    }
    .section-lead{
      font-size:1rem;
      color:var(--text-muted);
      max-width:640px;
    }

    .btn-primary-custom{
      background:linear-gradient(135deg,#ffb428,#ff7b2b);
      border:none;
      color:#111827;
      padding:.8rem 1.75rem;
      border-radius:999px;
      font-weight:700;
      font-size:.95rem;
      box-shadow:0 16px 30px rgba(15,23,42,.22);
    }
    .btn-primary-custom:hover{
      background:linear-gradient(135deg,#ff7b2b,#ffb428);
      color:#111827;
    }

    .btn-outline-custom{
      border-radius:999px;
      padding:.75rem 1.6rem;
      font-weight:600;
      font-size:.95rem;
      border:1px solid #ffffff;
      color:#ffffff;
      background:transparent;
    }
    .btn-outline-custom:hover{
      background:#ffffff;
      color:var(--primary-dark);
    }

    .hero{
      background:linear-gradient(180deg,#0f6ad9 0%,#0b4ca3 55%,#06316d 100%);
      color:#fff;
      position:relative;
      overflow:hidden;
    }
    .hero::after{
      content:"";
      position:absolute;
      inset:45% -140px auto auto;
      height:340px;
      background:radial-gradient(circle at top,var(--accent),transparent 60%);
      opacity:.4;
      pointer-events:none;
    }

    .hero h1{
      font-size:2.7rem;
      font-weight:800;
      line-height:1.1;
      margin-bottom:1rem;
    }
 
    @media (min-width:992px){
      .hero h1{font-size:3.1rem;}
      
      
    }
    .hero p{
      color:#e5edf7;
   
    }
    
  

    .hero-badge{
      display:inline-flex;
      align-items:center;
      gap:.55rem;
      padding:.45rem .95rem;
      border-radius:999px;
      background:rgba(255,255,255,.9);
      box-shadow:0 10px 25px rgba(15,23,42,.16);
      font-size:.8rem;
      color:#111827;
      margin-bottom:1.1rem;
    }
    .hero-badge span{
      width:22px;
      height:22px;
      border-radius:999px;
      display:inline-flex;
      align-items:center;
      justify-content:center;
      background:var(--primary-soft);
      color:var(--primary-dark);
      font-size:.7rem;
      font-weight:700;
    }

    .hero-cta{
      display:flex;
      flex-wrap:wrap;
      gap:.9rem;
      margin-top:1.7rem;
    }

    .hero-note{
      font-size:.9rem;
      margin-top:1.4rem;
      max-width:420px;
      color:#d0dbf7;
    }

    .hero-mockup-wrapper{
      max-width:480px;
      margin:0 auto;
    }
    .hero-card-main{
      position:relative;
      background:#ffffff;
      border-radius:1.8rem;
      padding:1.5rem;
      box-shadow:0 24px 60px rgba(15,23,42,.55);
      transform:rotate(-8deg);
      margin-top:1.8rem;
    }
    .hero-card-secondary{
      position:absolute;
      inset:-40px auto auto -45px;
      width:130px;
      height:130px;
      border-radius:1.4rem;
      background:linear-gradient(135deg,#f97316,#facc15);
      box-shadow:0 20px 40px rgba(0,0,0,.35);
    }
    .hero-thumb{
      width:100%;
      border-radius:1.2rem;
      background:linear-gradient(135deg,#f3f4ff,#d5ddff);
      height:220px;
      display:flex;
      align-items:center;
      justify-content:center;
      text-align:center;
      font-weight:600;
      color:var(--primary-dark);
      font-size:.9rem;
      padding:1.2rem;
    }
    .hero-meta{
      display:flex;
      justify-content:space-between;
      margin-top:1.1rem;
      gap:1rem;
      font-size:.8rem;
      color:#6b7280;
    }
    .hero-meta strong{
      display:block;
      font-size:1.1rem;
      color:#111827;
    }

    .services-cards .icon-pill{
      width:40px;
      height:40px;
      border-radius:1.2rem;
      display:flex;
      align-items:center;
      justify-content:center;
      background:var(--primary-soft);
      color:var(--primary-dark);
      font-size:1.1rem;
      margin-bottom:.9rem;
    }

    .card-soft{
      border-radius:var(--radius-card);
      background:#ffffff;
      border:1px solid rgba(148,163,184,.35);
      box-shadow:0 14px 30px rgba(15,23,42,.05);
      padding:1.6rem 1.8rem;
      height:100%;
    }
    .card-soft p{color:var(--text-muted);}

    .card-soft.highlight{
      border:1px solid rgba(37,99,235,.35);
      box-shadow:0 18px 45px rgba(37,99,235,.22);
    }

    .bg-section-light{background:var(--bg-light);}


    .stats-strip{
      padding:32px 0;
      background:linear-gradient(90deg,#0f6ad9,#2b82f6);
      color:#e5edff;
    }
    .stats-strip h3{
      font-size:1.4rem;
      margin-bottom:.15rem;
    }
    .stats-strip p{
      font-size:.9rem;
      margin-bottom:0;
      color:#d0dcff;
    }

    .pricing-card{
      border-radius:var(--radius-card);
      background:#ffffff;
      border:1px solid rgba(148,163,184,.35);
      padding:1.8rem 1.6rem;
      box-shadow:0 16px 35px rgba(15,23,42,.06);
      height:100%;
    }
    .pricing-card.highlight{
      border:1px solid rgba(37,99,235,.32);
      box-shadow:0 22px 50px rgba(37,99,235,.18);
      transform:translateY(-6px);
    }
    .pricing-label{
      display:inline-block;
      font-size:.75rem;
      font-weight:600;
      text-transform:uppercase;
      letter-spacing:.16em;
      color:var(--primary-dark);
      background:var(--primary-soft);
      padding:.3rem .7rem;
      border-radius:999px;
      margin-bottom:.7rem;
    }
    .pricing-title{
      font-size:1.15rem;
      font-weight:700;
      margin-bottom:.4rem;
    }
    .pricing-desc{
      font-size:.9rem;
      color:var(--text-muted);
      margin-bottom:1rem;
    }
    .pricing-card ul{
      list-style:none;
      padding-left:0;
      margin-bottom:1.3rem;
      font-size:.9rem;
      color:var(--text-muted);
    }
    .pricing-card ul li{
      margin-bottom:.35rem;
      display:flex;
      gap:.4rem;
    }
    /*.pricing-card ul li i{*/
    /*  color:#22c55e;*/
    /*  margin-top:.18rem;*/
    /*}*/

    .process-steps{
      display:grid;
      grid-template-columns:repeat(auto-fit,minmax(330px,1fr));
      gap:1.1rem;
      margin-top:2rem;
    }
    .process-step{
      border-radius:1.2rem;
      background:#ffffff;
      border:1px solid rgba(148,163,184,.35);
      padding:1.2rem 1.3rem;
      font-size:.9rem;
      color:var(--text-muted);
      position:relative;
    }
    .process-step-number{
      width:28px;
      height:28px;
      border-radius:999px;
      background:var(--primary-soft);
      color:var(--primary-dark);
      display:flex;
      align-items:center;
      justify-content:center;
      font-size:.8rem;
      font-weight:700;
      margin-bottom:.45rem;
    }
    .process-step-title{
      font-weight:600;
      color:var(--text-main);
      margin-bottom:.25rem;
    }

    .cta-section{
      background:#0b1120;
      color:#e5e7eb;
      border-radius:2rem;
      padding:2.4rem 2.3rem;
      box-shadow:0 22px 55px rgba(15,23,42,.55);
    }
    
    .cta-section p{
      color:#cbd5f5;
    }

    @media (max-width:767.98px){
      .hero-card-main{transform:none;}
      .hero-card-secondary{display:none;}
      .hero h1{font-size:2.2rem;}
      .cta-section{padding:1.9rem 1.7rem;}
    }
    
    
    section.hero.section-padding {
    padding-top: 8rem;
    padding-bottom: 6rem;
}

.hero h1 {
    font-size: 2.8rem;
    font-weight: 600;
    line-height: 1.2;
} 

.yellow{
    color: #FFB400;
}

.blue{
    color:#196bff;
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

.service-title1{
color: #196bff;
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
      width:100%;
      height:100%;
      background: rgba(0, 0, 0, 0.55); /* opacity adjust here */
      z-index: 2;
    }
    .position-relative
    {
        z-index:2;
    }
    section.hero
    {
        background:none !important;
        height:700px;
    }
    .accimg
    {
        background: url(/img/2-01.webp);
        background-size: cover;
        padding:100px 0;
    }
     .accimg2
    {
        background: url(/img/1-01.webp);
        background-size: cover;
        padding:100px 0;
    }
     .accimg3
    {
        background: url(/img/Explainer-02.webp);
        background-size: cover;
        padding:100px 0;
    }
     .accimg4
    {
        background: url(/img/3-01.webp);
        background-size: cover;
        padding:100px 0;
    }
     .accimg5
    {
        background: url(/img/3D-01.webp);
        background-size: cover;
        padding:100px 0;
    }
     .accimg6
    {
        background: url(/img/typo3.webp);
        background-size: cover;
        padding:100px 0;
    }
    .accimg2
    {
        background: url(/img/1-01.webp);
        background-size: cover;
        padding:130px 0;
    }
    .faqcontent img
    {
        max-width:500px;        
    }
    .faqcontent h2
    {
        font-size:35px;
    }
    
    .faqbody1
    {
        background:#f6f5f1;
        border:3px solid #cacacb;
    }
    .fabt
    {
      position:relative;  
    }
  
    
    .fabt {
        position: relative;
    }
    .fabt:after
    {
        content:'-';
        filter:none !important;
        background-image:none;
        background:#000000;
        width:80px;
        height:80px;
        box-shadow: 1px 1px 7px inset #000000;
        color:#ffb400 !important;
        border-radius:100px;
        display:flex;
        align-items:center;
        justify-content:center;
        font-size:4rem ;
        margin-right:20px;
    }
    .fabt:not(.collapsed)::after
    {
        content:'+';
        filter:none !important;
        background-image:none;
        background:#000000;
        width:80px;
        height:80px;
        box-shadow: 1px 1px 7px inset #000000;
        color:#ffb400 !important;
         border-radius:100px;
         display:flex;
         align-items:center;
         justify-content:center;
         font-size:4rem;
          margin-right:20px;
    }
    section.portfolio1
    {
        position:relative;
    }
   
    section.portfolio1 .section-subtitle
    {
         color:#fff;        
    }
    section.howitwork
    {
        position:relative;
       background: radial-gradient(circle at top left, #3a8dff 0, #0340b3 45%, #02142e 100%);
    }
    section.howitwork .section-title
    {
       color:#000;   
    }
    section.howitwork .section-subtitle
    {
        color:#000;
    }
    .tabcontent1 h2
    {
        color:#000;        
    }
    .tabcontent1 p
    {
        color:#000;
    }
    .customtab
    {
        border-radius:100px;
        border-bottom:0px !important;
        width:fit-content;
        margin:20px auto 40px;
        background:#e4e7f5;
        padding:5px 5px;
    }
    .customtab .nav-link
    {
        padding: 0.45rem 1.3rem;
        font-size: 0.78rem;
        text-transform: uppercase;
        letter-spacing: 0.12em;
        background: transparent;
        color: #000;
        transition: background 0.15s ease, box-shadow 0.15s ease, color 0.15s ease, transform 0.15s ease;
        white-space: nowrap;
        border:none;  
        border-radius:100px !important;
        padding:0.45rem 1.3rem;
    }
    .customtab .nav-link:hover
    {
        border:none;        
    }
    .customtab .nav-link.active
    {
        background:#fff !important;
        border-radius:100px !important;
    }
    .hero-cta02 .btn-outline-custom
    {
        border:1px solid #000;  
        color:#000;
    }


 @media (max-width: 576px) {
      section.hero {
        height:100vh;
      }
        section.hero h1 
        {
            font-size: 2.2rem;
        }
        .section-title
        {
            font-size: 1.8rem;
        }
        .customtab
        {
            width:100%;    
            background:transparent;
        }
        .customtab .nav-item
        {
            display:block;
            width:100%;
            text-align:center;
        }
        .customtab .nav-link.active
        {
            background:#1d64d7 !important;
            color:#fff;
        }
        .customtab .nav-link
        {
            margin: auto;
        }
       
    }

@media (max-width:992px)
{
   .service-card .service-title
    {
        font-size:1.3rem;        
    } 
    .hero-cta02
    {
        justify-content:left !important;
    }
}
@media (max-width:768px){

    .hero-cta {
        justify-content:center;
    }
    
        .hero p {
        text-align: center;
        margin: 0 auto 18px;
    }
    .service-card .service-title
    {
        font-size:1.3rem;        
    }
    
    
}

  </style>

<!-- HERO / INTRO -->
  <section class="hero section-padding">
      
      <!-- Background Video -->
      <div class="hero-video-wrapper">
        <video class="hero-video" autoplay muted loop playsinline>
          <!-- apni video ka path yahan do -->
          <source src="img/banner-video2.mp4" type="video/mp4">
          Your browser does not support the video tag.
        </video>
      </div>

  <!-- Black Overlay -->
  <div class="hero-overlay"></div>
  
    <div class="container">
      <div class="row justify-content-center text-center gy-4 position-relative">
        <div class="col-lg-7">
          <div class="hero-badge">
           
            Animation &amp; Motion Design Studio
          </div>
          <h1>Animated Videos That Bring <span class="yellow">Your Story to Life</span></h1>
          <p class="text-center">
            At DesignCentura, we create animations that simplify complex ideas, highlight
            your brand message, and keep your audience engaged from start to finish.
            Our animation team blends creativity, clarity, and industry-level precision
            to produce visuals that communicate powerfully across digital platforms.
          </p>
          <div class="hero-cta justify-content-center">
            <a href="#pricing" class="btn btn-primary-custom">View Packages</a>
            <a href="#portfolio" class="btn btn-outline-custom">Explore Work</a>
          </div>
          <!--<p class="hero-note">-->
            <!--People watch more than they read — animation captures attention instantly.-->
          <!--</p>-->
        </div>

      </div>
    </div>
  </section>

  <!-- SERVICES OVERVIEW -->
<!--  <section class="section-padding bg-white" id="services">-->
<!--    <div class="container">-->
<!--        <div class="row justify-content-center" >-->
<!--      <div class="col-lg-8 col-12 text-center mb-5">-->
<!--        <p class="section-eyebrow">Our Services</p>-->
<!--        <h2 class="section-title">Animation Services <span class="blue">Tailored to Your Story</span></h2>-->
<!--        <p class="section-lead mx-auto">-->
<!--          We design animated videos that match your brand tone, audience, and objectives —-->
<!--          from character-led storytelling to clean explainer visuals.-->
<!--        </p>-->
<!--      </div>-->
<!--</div>-->
<!--      <div class="row g-4 services-cards">-->
<!--        <div class="col-md-4">-->
<!--          <div class="card-soft h-100">-->
<!--            <div class="icon-pill">-->
<!--              <i class="fa-solid fa-user-ninja"></i>-->
<!--            </div>-->
<!--            <h3 class="h5 mb-1 service-title1">2D Character Animation</h3>-->
<!--            <p>-->
<!--              Engaging character-driven videos that help your audience connect-->
<!--              emotionally with your message.-->
<!--            </p>-->
<!--          </div>-->
<!--        </div>-->

<!--        <div class="col-md-4">-->
<!--          <div class="card-soft h-100">-->
<!--            <div class="icon-pill">-->
<!--              <i class="fa-solid fa-shapes"></i>-->
<!--            </div>-->
<!--            <h3 class="h5 mb-1 service-title1">2D Graphic Animation</h3>-->
<!--            <p>-->
<!--              Clean and modern animated visuals designed to simplify ideas-->
<!--              and deliver information clearly.-->
<!--            </p>-->
<!--          </div>-->
<!--        </div>-->

<!--        <div class="col-md-4">-->
<!--          <div class="card-soft h-100">-->
<!--            <div class="icon-pill">-->
<!--              <i class="fa-solid fa-circle-info"></i>-->
<!--            </div>-->
<!--            <h3 class="h5 mb-1 service-title1">Explainer Videos</h3>-->
<!--            <p>-->
<!--              Professional explainer animations that break down your product-->
<!--              or service in a fast, easy-to-understand format.-->
<!--            </p>-->
<!--          </div>-->
<!--        </div>-->

<!--        <div class="col-md-4">-->
<!--          <div class="card-soft h-100">-->
<!--            <div class="icon-pill">-->
<!--              <i class="fa-solid fa-pen-ruler"></i>-->
<!--            </div>-->
<!--            <h3 class="h5 mb-1 service-title1">Whiteboard Animation</h3>-->
<!--            <p>-->
<!--              Illustrated storytelling with hand-drawn sequences for educational,-->
<!--              corporate, and training content.-->
<!--            </p>-->
<!--          </div>-->
<!--        </div>-->

<!--        <div class="col-md-4">-->
<!--          <div class="card-soft h-100">-->
<!--            <div class="icon-pill">-->
<!--              <i class="fa-solid fa-cubes"></i>-->
<!--            </div>-->
<!--            <h3 class="h5 mb-1 service-title1">3D Interactive Animation</h3>-->
<!--            <p>-->
<!--              High-impact 3D visuals for brands looking to elevate their presentation-->
<!--              with depth and realism.-->
<!--            </p>-->
<!--          </div>-->
<!--        </div>-->

<!--        <div class="col-md-4">-->
<!--          <div class="card-soft h-100">-->
<!--            <div class="icon-pill">-->
<!--              <i class="fa-solid fa-text-height"></i>-->
<!--            </div>-->
<!--            <h3 class="h5 mb-1 service-title1">Typography &amp; Visual Design Animation</h3>-->
<!--            <p>-->
<!--              Dynamic text-based animations that enhance brand messaging, ads,-->
<!--              intros, and social content.-->
<!--            </p>-->
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->
<!--  </section>-->

<section class="section-padding">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <h2 class="section-title">Our <span class="blue">Services</span> </h2>
            </div>
            
             <ul class="nav nav-tabs customtab" id="myTab" role="tablist">
                      <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="briefing-tab" data-bs-toggle="tab" data-bs-target="#briefing-tab-pane" type="button" role="tab" aria-controls="briefing-tab-pane" aria-selected="true">2d Animation</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="scripting-tab" data-bs-toggle="tab" data-bs-target="#scripting-tab-pane" type="button" role="tab" aria-controls="scripting-tab-pane" aria-selected="false">3D Animation</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="storyboard-tab" data-bs-toggle="tab" data-bs-target="#storyboard-tab-pane" type="button" role="tab" aria-controls="storyboard-tab-pane" aria-selected="false">Whiteborad Animation</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="voiceover-tab" data-bs-toggle="tab" data-bs-target="#voiceover-tab-pane" type="button" role="tab" aria-controls="voiceover-tab-pane" aria-selected="false">Explainer Videos
</button>
                      </li>
                     
                    </ul>
        </div>
        
           <div class="row">
              <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="briefing-tab-pane" role="tabpanel" aria-labelledby="briefing-tab" tabindex="0">
                      
                      <div class="row">
                           <div class="col-lg-6 my-auto">
                              
                             <div class="tabcontent1">
                                  <h2>2D <span class="blue">Animation</span></h2>
                              <p>
                                  Here we ensure you get the best voice-over services from our highly qualified professionals to grab the attention of the viewers. We strive hard to deliver you effective vocals for all 2D and 3D animated explainer videos with a skillful voice that evokes the audience’s interest and makes it appealing. We have voice-over narrators who are highly proficient in creating a natural feel to the video that makes it more captivating for listeners.
                              </p>
                              
                              <div class="hero-cta hero-cta02">
            <a href="#pricing" class="btn btn-primary-custom" >View Packages</a>
            <a href="#portfolio" class="btn btn-outline-custom" >Explore Work</a>
          </div>
                             </div>
                          </div>
                          <div class="col-lg-6">
                              <div class="tabcontent1">
                                  <img src="/img/2dani1.webp" class="img-fluid"/>
                              </div>
                          </div>
                         
                      </div>
                      
                  </div>
                  <div class="tab-pane fade" id="scripting-tab-pane" role="tabpanel" aria-labelledby="scripting-tab" tabindex="0">
                      
                       <div class="row">
                           <div class="col-lg-6 my-auto">
                              
                             <div class="tabcontent1">
                                  <h2>3D <span class="blue">Animation</span></h2>
                              <p>
                                  Here we ensure you get the best voice-over services from our highly qualified professionals to grab the attention of the viewers. We strive hard to deliver you effective vocals for all 2D and 3D animated explainer videos with a skillful voice that evokes the audience’s interest and makes it appealing. We have voice-over narrators who are highly proficient in creating a natural feel to the video that makes it more captivating for listeners.
                              </p>
                              <div class="hero-cta hero-cta02">
            <a href="#pricing" class="btn btn-primary-custom" >View Packages</a>
            <a href="#portfolio" class="btn btn-outline-custom" >Explore Work</a>
          </div>
                             </div>
                          </div>
                          <div class="col-lg-6">
                              <div class="tabcontent1">
                                  <img src="/img/3danim1.webp" class="img-fluid"/>
                              </div>
                          </div>
                         
                      </div>
                      
                  </div>
                  <div class="tab-pane fade" id="storyboard-tab-pane" role="tabpanel" aria-labelledby="storyboard-tab" tabindex="0">
                      
                       <div class="row">
                           <div class="col-lg-6 my-auto">
                              
                             <div class="tabcontent1">
                                  <h2>White Board <span class="blue">Animation</span></h2>
                              <p>
                                  Here we ensure you get the best voice-over services from our highly qualified professionals to grab the attention of the viewers. We strive hard to deliver you effective vocals for all 2D and 3D animated explainer videos with a skillful voice that evokes the audience’s interest and makes it appealing. We have voice-over narrators who are highly proficient in creating a natural feel to the video that makes it more captivating for listeners.
                              </p>
                              <div class="hero-cta hero-cta02">
            <a href="#pricing" class="btn btn-primary-custom" >View Packages</a>
            <a href="#portfolio" class="btn btn-outline-custom" >Explore Work</a>
          </div>
                             </div>
                          </div>
                          <div class="col-lg-6">
                              <div class="tabcontent1">
                                  <img src="/img/wh1ani.webp" class="img-fluid"/>
                              </div>
                          </div>
                         
                      </div>
                      
                  </div>
                  <div class="tab-pane fade" id="voiceover-tab-pane" role="tabpanel" aria-labelledby="voiceover-tab" tabindex="0">
                      
                      
                       <div class="row">
                           <div class="col-lg-6 my-auto">
                              
                             <div class="tabcontent1">
                                  <h2>Explainer <span class="blue">Video</span></h2>
                              <p>
                                  Here we ensure you get the best voice-over services from our highly qualified professionals to grab the attention of the viewers. We strive hard to deliver you effective vocals for all 2D and 3D animated explainer videos with a skillful voice that evokes the audience’s interest and makes it appealing. We have voice-over narrators who are highly proficient in creating a natural feel to the video that makes it more captivating for listeners.
                              </p>
                              <div class="hero-cta hero-cta02">
            <a href="#pricing" class="btn btn-primary-custom" >View Packages</a>
            <a href="#portfolio" class="btn btn-outline-custom" >Explore Work</a>
          </div>
                             </div>
                          </div>
                          <div class="col-lg-6">
                              <div class="tabcontent1">
                                  <img src="/img/exp1.gif" class="img-fluid"/>
                              </div>
                          </div>
                         
                      </div>
                      
                  </div>
                  
 
                </div>
          </div>
        
        
    </div>
</section>

  <!-- PORTFOLIO -->
  <!--<section class="section-padding" id="portfolio">-->
  <!--  <div class="container">-->
  <!--      <div class="row justify-content-center">-->
  <!--          <div class="col-lg-8 col-12 text-center mb-3">-->
  <!--      <p class="section-eyebrow">Animated Video Portfolio</p>-->
  <!--      <h2 class="section-title">Work That Keeps <span class="blue"> Viewers Watching </span></h2>-->
  <!--      <p class="section-lead mx-auto">-->
  <!--        Explore a diverse collection of animated videos created for businesses worldwide.-->
  <!--        Each project showcases clean execution, refined storytelling, and-->
  <!--        brand-aligned visual style.-->
  <!--      </p>-->
  <!--    </div> -->
            
  <!--      </div>-->
     

  <!--    <div class="portfolio-grid">-->
  <!--      <div class="portfolio-item">-->
  <!--        <div class="portfolio-inner">Explainer Video – SaaS Platform (Dummy Thumbnail)</div>-->
  <!--      </div>-->
  <!--      <div class="portfolio-item">-->
  <!--        <div class="portfolio-inner">2D Character Ad – E-commerce Brand (Dummy Thumbnail)</div>-->
  <!--      </div>-->
  <!--      <div class="portfolio-item">-->
  <!--        <div class="portfolio-inner">Whiteboard Training Module (Dummy Thumbnail)</div>-->
  <!--      </div>-->
  <!--      <div class="portfolio-item">-->
  <!--        <div class="portfolio-inner">3D Product Walkthrough (Dummy Thumbnail)</div>-->
  <!--      </div>-->
  <!--      <div class="portfolio-item">-->
  <!--        <div class="portfolio-inner">Social Media Motion Graphics (Dummy Thumbnail)</div>-->
  <!--      </div>-->
  <!--      <div class="portfolio-item">-->
  <!--        <div class="portfolio-inner">Animated Brand Intro (Dummy Thumbnail)</div>-->
  <!--      </div>-->
  <!--      <div class="portfolio-item">-->
  <!--        <div class="portfolio-inner">Infographic Animation (Dummy Thumbnail)</div>-->
  <!--      </div>-->
  <!--      <div class="portfolio-item">-->
  <!--        <div class="portfolio-inner">App Launch Promo Video (Dummy Thumbnail)</div>-->
  <!--      </div>-->
  <!--    </div>-->
  <!--  </div>-->
  <!--</section>-->

  <!-- STATS STRIP -->
 

<!--<section id="stats">-->
<!--    <div class="container">-->
<!--      <div class="row text-center gy-4">-->
<!--        <div class="col-6 col-md-3">-->
<!--          <div class="stat-number">580+</div>-->
<!--          <div class="stat-label">Happy clients</div>-->
<!--        </div>-->
<!--        <div class="col-6 col-md-3">-->
<!--          <div class="stat-number">95%</div>-->
<!--          <div class="stat-label">Client satisfaction</div>-->
<!--        </div>-->
<!--        <div class="col-6 col-md-3">-->
<!--          <div class="stat-number">180+</div>-->
<!--          <div class="stat-label">Projects delivered</div>-->
<!--        </div>-->
<!--        <div class="col-6 col-md-3">-->
<!--          <div class="stat-number">10+</div>-->
<!--          <div class="stat-label">Years experience</div>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->
<!--  </section>-->

  <!-- PRICING / PACKAGES -->
  <section class="section-padding bg-section-light" id="pricing">
    <div class="container">
        <div class="row justify-content-center">
           <div class="col-lg-8 col-12 text-center mb-4">
        <p class="section-eyebrow">Plans &amp; Pricing</p>
        <h2 class="section-title">Choose the Animated <span class="blue">Video Package That Fits Your Brand</span> </h2>
      </div> 
        </div>
     

      <div class="row g-4 pricing-grid">
        <!-- Bronze -->
        <div class="col-md-6 col-lg-3">
          <div class="pricing-card h-100">
            <h3>Bronze </h3>
            <h2>$499</h2>
            
          
            <ul>
              <li><span>Up to 60 seconds of animation</span></li>
              <li><span>Scriptwriting support</span></li>
              <li><span>Basic storyboard</span></li>
              <li><span>Simple graphic elements</span></li>
              <li><span>Professional voiceover</span></li>
              <li><span>Royalty-free background music</span></li>
              <li><span>HD output formats</span></li>
            </ul>
             <button class="btn pricing-btn plan-btn"
                        data-package="Logo Design-Bronze-USD-499-0">Buy Now</a>
                    </button>    
          </div>
        </div>

        <!-- Silver -->
        <div class="col-md-6 col-lg-3">
          <div class="pricing-card h-100">
            <h3>Silver </h3>
              <h2>$799</h2>
            
          
            <ul>
              <li><span>Up to 60 seconds</span></li>
              <li><span>Full script development</span></li>
              <li><span>Detailed storyboard</span></li>
              <li><span>Enhanced illustrations</span></li>
              <li><span>Professional voiceover</span></li>
              <li><span>Royalty-free music</span></li>
              <li><span>Multiple delivery formats</span></li>
            </ul>
             <button class="btn pricing-btn plan-btn"
                        data-package="Logo Design-Silver-USD-799-0">Buy Now</a>
                    </button>    
          </div>
        </div>

        <!-- Gold -->
        <div class="col-md-6 col-lg-3">
          <div class="pricing-card highlight h-100">
            <h3>Gold</h3>
            <h2>$999</h2>
            
           
            <ul>
              <li><span>Up to 60 seconds</span></li>
              <li><span>Concept-driven script</span></li>
              <li><span>Advanced storyboard</span></li>
              <li><span>Custom illustrations</span></li>
              <li><span>Voiceover in selected accent</span></li>
              <li><span>Royalty-free soundtrack</span></li>
              <li><span>HD &amp; social formats</span></li>
            </ul>
            <button class="btn pricing-btn plan-btn"
                        data-package="Logo Design-Basic-USD-999-0">Buy Now</a>
                    </button>    
          </div>
        </div>

        <!-- Platinum -->
        <div class="col-md-6 col-lg-3">
          <div class="pricing-card h-100">
            <h3>Platinum </h3>
            <h2>$1499</h2>
            
          
            <ul>
              <li><span>Up to 60 seconds</span></li>
              <li><span>Strategic scriptwriting</span></li>
              <li><span>Premium storyboard</span></li>
              <li><span>High-detail illustrations</span></li>
              <li><span>Professional voiceover</span></li>
              <li><span>Enhanced effects + transitions</span></li>
              <li><span>Multiple export formats</span></li>
            </ul>
             <button class="btn pricing-btn plan-btn"
                        data-package="Logo Design-Platinum-USD-1499-0">Buy Now</a>
                    </button>    
          </div>
        </div>
      </div>
      
      
      
    </div>
  </section>
  
    <!-- HOW IT WORKS -->
  <!--<section class="section-padding pb-0">-->
  <!--  <div class="container">-->
  <!--      <div class="row justify-content-center">-->
  <!--          <div class="col-lg-8 col-12 text-center mb-4">-->
  <!--      <p class="section-eyebrow">How It Works</p>-->
  <!--      <h2 class="section-title">A Clear  <span class="blue">Process from Brief</span>  to Final Video</h2>-->
  <!--      <p class="section-lead mx-auto">-->
  <!--        Every animated video follows a structured, collaborative workflow so you-->
  <!--        know exactly what’s happening at each stage.-->
  <!--      </p>-->
  <!--    </div>-->
  <!--      </div>-->
      
      
  <!--      <div class="row g-4">-->
  <!--      <div class="col-md-4 col-lg-4">-->
  <!--        <div class="service-card">-->
  <!--          <div class="service-number">01.</div>-->
  <!--          <h3 class="service-title">Briefing</h3>-->
  <!--          <p>-->
  <!--         We understand your concept, goals, and messaging direction.-->
  <!--          </p>-->
  <!--        </div>-->
  <!--      </div>-->
  <!--      <div class="col-md-4 col-lg-4">-->
  <!--        <div class="service-card ">-->
  <!--          <div class="service-number">02.</div>-->
  <!--          <h3 class="service-title">Scriptwriting</h3>-->
  <!--          <p>-->
  <!--            Your story is shaped into a clear, engaging narrative.-->
  <!--          </p>-->
  <!--        </div>-->
  <!--      </div>-->
  <!--      <div class="col-md-4 col-lg-4">-->
  <!--        <div class="service-card">-->
  <!--          <div class="service-number">03.</div>-->
  <!--          <h3 class="service-title">Storyboarding</h3>-->
  <!--          <p>-->
  <!--           We map out scenes and visual transitions for approval.-->
  <!--          </p>-->
  <!--        </div>-->
  <!--      </div>-->
  <!--      <div class="col-md-4 col-lg-4">-->
  <!--        <div class="service-card ">-->
  <!--          <div class="service-number">04.</div>-->
  <!--          <h3 class="service-title">Voiceover</h3>-->
  <!--          <p>-->
  <!--           A professional voice artist records the script.-->
  <!--          </p>-->
  <!--        </div>-->
  <!--      </div>-->
        
  <!--       <div class="col-md-4 col-lg-4">-->
  <!--        <div class="service-card ">-->
  <!--          <div class="service-number">05.</div>-->
  <!--          <h3 class="service-title">Animation</h3>-->
  <!--          <p>-->
  <!--          Our animators bring every scene to life with motion, timing, and visual clarity.-->
  <!--          </p>-->
  <!--        </div>-->
  <!--      </div>-->
  <!--         <div class="col-md-4 col-lg-4">-->
  <!--        <div class="service-card ">-->
  <!--          <div class="service-number">06.</div>-->
  <!--          <h3 class="service-title">Final Delivery</h3>-->
  <!--          <p>-->
  <!--          Your video is rendered, reviewed, and delivered in multiple formats.-->
  <!--          </p>-->
  <!--        </div>-->
  <!--      </div>-->
        
  <!--    </div>-->
      
      
  <!--  </div>-->
  <!--</section>-->
  
  
<!-- PORTFOLIO -->
<section id="portfolio" class="portfolio1">
    <div class="container">
      <div class="text-center mb-4">
        <!--<p class="section-eyebrow">Our work</p>-->
        <h2 class="section-title">Featured <span class="blue">Portfolio</span></h2>
        <p  >
          A curated selection of logos, branding and website projects created by DesignCentura.
        </p>
      </div>


<!-- GRID (9 items, 3x3 – har tab me filter se 6 tak dikhao if needed) -->
<div class="row g-4">

<!-- Animated -->        
<div class="col-md-6 col-lg-4 portfolio-item" data-category="animated logo" data-portfolio-item>
    <div class="portfolio-card js-portfolio-card" data-img="/img/desd1.webp">
        <img src="/img/desd1.webp" alt="Website 01" />
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
    <div class="portfolio-card js-portfolio-card" data-img="/img/desd2.gif">
        <img src="/img/desd2.gif" alt="Website 01" />
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
    <div class="portfolio-card js-portfolio-card" data-img="/img/desd3.gif">
        <img src="/img/desd3.gif" alt="Website 01" />
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
    <div class="portfolio-card js-portfolio-card" data-img="/img/desd4.gif">
        <img src="/img/desd4.gif" alt="Website 01" />
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
    <div class="portfolio-card js-portfolio-card" data-img="/img/desd5.gif">
        <img src="/img/desd5.gif" alt="Website 01" />
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
    <div class="portfolio-card js-portfolio-card" data-img="/img/desd6.gif">
        <img src="/img/desd6.gif" alt="Website 01" />
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
    <div class="portfolio-card js-portfolio-card" data-img="/img/desd7.gif">
        <img src="/img/desd7.gif" alt="Website 01" />
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
    <div class="portfolio-card js-portfolio-card" data-img="/img/desd8.gif">
        <img src="/img/desd8.gif" alt="Website 01" />
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
    <div class="portfolio-card js-portfolio-card" data-img="/img/desd9.gif">
        <img src="/img/desd9.gif" alt="Website 01" />
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
    <div class="portfolio-card js-portfolio-card" data-img="/img/desd10.gif">
        <img src="/img/desd10.gif" alt="Website 01" />
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

  <!-- FINAL CTA -->
  <section class="section-padding pt-0">
    <div class="container">
      <div class="cta-section">
        <div class="row justify-content-center text-center align-items-center position-relative">
          <div class="col-lg-8">
            <h2 class="section-title mb-2 text-center" style="color:#f9fafb;">
              Ready to Create Your Animated Video?
            </h2>
            <p class="text-center">
              Bring your ideas to the screen with DesignCentura’s expert animation team.
              We deliver visual content that engages, explains, and elevates your brand.
            </p>
            <a href="#pricing " class="btn btn-primary-custom text-center">
              Get Started Today
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php include('templates/footer.php'); ?>