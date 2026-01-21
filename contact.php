<style>
    p.hero-text{
        max-width:unset ;
    }
    .hero {
        min-height: unset !important; 
        padding-top: 8rem;
        padding-bottom: 6rem;
        background: radial-gradient(circle at top left, #3a8dff 0, #0340b3 45%, #02142e 100%);
        color: #fff;
        display: flex;
        align-items: center;
    }
    .contact-shell{
        background:radial-gradient(circle at top left, #1e40af 0, #020617 55%, #000 100%) !important;
        box-shadow:none !important;
    }
    .contact-modern{
        background:#fff !important;
    }
    .hero-title{
        line-height: unset !important;
    }
</style>
<?php include('templates/header.php'); ?>
<!-- HERO -->
<header id="home" class="hero">
    <div class="container">
      <div class="row align-items-center gy-4 justify-content-center text-center">
        <div class="col-lg-8">
          <div class="badge-pill mb-3 text-center">Is it logo design you’re looking for?</div>
          <h1 class="hero-title">
            Custom <span>Logo Design</span>, Branding & <span>Website Solutions</span>.
          </h1>
          <p class="hero-text mb-4">
            We design business logos, full brand identities, and conversion-focused
            websites – everything you need to launch, relaunch, or scale your brand
            online with one creative team.
          </p>
        </div>
      </div>
    </div>
  </header>
<section id="contact" class="contact-modern pb-0">
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
                    <a class="text-decoration-none text-light" href="tel:323-283-8729" class="contact-info-value">323-283-8729</a>
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
<section class="faqs-sec" id="faqs-sec">
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
<?php include('templates/footer.php'); ?>