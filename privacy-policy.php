<?php include('templates/header.php'); ?>

<style>
    :root {
      --primary-blue: #1769ff;
      --primary-blue-soft: #e3edff;
      --text-main: #111827;
      --text-muted: #4b5563;
    }

    body {
      font-family: "Inter", system-ui, -apple-system, BlinkMacSystemFont,
        "Segoe UI", sans-serif;
      color: var(--text-main);
      background: #ffffff;
    }

    .page-wrapper {
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    main {
      flex: 1;
    }

    /* HERO / BANNER */
    .pp-hero {
      margin-top: 58px; /* navbar height adjust yahan se */
      padding: 3.5rem 0;
      background: radial-gradient(circle at top left, #3a8dff 0, #0340b3 45%, #02142e 100%);
      border-bottom: 1px solid #e5e7eb;
    }

    .pp-hero-eyebrow {
      text-transform: uppercase;
      letter-spacing: 0.18em;
      font-size: 0.78rem;
      color: var(--primary-blue);
      font-weight: 600;
      margin-bottom: 0.4rem;
    }

    .pp-hero-title {
      font-size: 2rem;
      font-weight: 800;
      margin-bottom: 0.4rem;
    }

    .pp-hero-text {
      font-size: 0.95rem;
      color: var(--text-muted);
      margin: 0;
    }

    /* CONTENT */
    .pp-section {
      padding: 3rem 0 3.5rem;
    }

    .pp-card {
      max-width: 900px;
      margin: 0 auto;
      padding: 2rem 2.2rem;
      border-radius: 18px;
      background: #ffffff;
      border: 1px solid #e5e7eb;
      box-shadow: 0 12px 35px rgba(15, 23, 42, 0.04);
    }

    .pp-heading {
      font-size: 1.3rem;
      font-weight: 700;
      margin-bottom: 1rem;
    }

    .pp-subheading {
      font-size: 1.05rem;
      font-weight: 600;
      margin-top: 1.6rem;
      margin-bottom: 0.4rem;
      color: var(--primary-blue);
    }

    .pp-card p {
      font-size: 0.95rem;
      color: var(--text-muted);
      margin-bottom: 0.7rem;
    }

    .pp-card ul {
      padding-left: 1.2rem;
      margin-bottom: 0.8rem;
    }

    .pp-card ul li {
      font-size: 0.95rem;
      color: var(--text-muted);
      margin-bottom: 0.25rem;
    }

    .pp-highlight-box {
      margin-top: 1rem;
      padding: 0.9rem 1rem;
      border-radius: 12px;
      background: var(--primary-blue-soft);
      font-size: 0.9rem;
      color: #1f2933;
    }

    @media (max-width: 767.98px) {
      .pp-hero {
        padding: 2.5rem 0 2.7rem;
      }
      .pp-card {
        padding: 1.5rem 1.4rem;
      }
    }
  </style>
  
  <!-- HERO / BANNER -->
    <section class="pp-hero">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-9 text-center">
            <div class="pp-hero-eyebrow text-white">Privacy</div>
            <h1 class="pp-hero-title text-white">Privacy Policy</h1>
            <p class="pp-hero-text text-white">
              This Privacy Policy explains how Design Centura collects, uses and protects
              your information when you visit our website or use our services. By
              continuing to use our site, you agree to the practices described below.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- CONTENT -->
    <section class="pp-section">
  <div class="container">
    <div class="pp-card">
      <!-- Information We Collect -->
      <h2 class="pp-heading">Information We Collect</h2>

      <h3 class="pp-subheading">Automatically Collected Information</h3>
      <p>When you visit our website, we automatically collect:</p>
      <ul>
        <li>IP address and location data</li>
        <li>Browser type and version</li>
        <li>Device information</li>
        <li>Language preferences</li>
        <li>Access times and duration</li>
        <li>Pages viewed and actions taken on our site</li>
      </ul>

      <h3 class="pp-subheading">Information You Provide</h3>
      <p>During account creation and service use, we collect:</p>
      <ul>
        <li>Full name and contact information</li>
        <li>Email address and phone number</li>
        <li>Billing address (home or work)</li>
        <li>Payment information (credit card or banking details)</li>
        <li>Communication preferences</li>
      </ul>

      <hr />

      <!-- How We Use Your Information -->
      <h3 class="pp-subheading">How We Use Your Information</h3>
      <p>We use your information to:</p>
      <ul>
        <li>Process orders and deliver services</li>
        <li>Send important account notifications and updates</li>
        <li>Share special offers, promotions, and blog content (you can opt out anytime)</li>
        <li>Improve our services and user experience</li>
        <li>Prevent fraud and maintain security</li>
        <li>Comply with legal obligations</li>
      </ul>
      <p>
        <strong>
          We never sell, rent, or share your personal information with third parties for
          marketing purposes.
        </strong>
      </p>

      <hr />

      <!-- Email Communications -->
      <h3 class="pp-subheading">Email Communications</h3>
      <p>You'll receive emails from us regarding:</p>
      <ul>
        <li>Order confirmations and updates</li>
        <li>Account security notifications</li>
        <li>Service announcements</li>
        <li>Special offers and promotions (optional)</li>
        <li>Blog posts and company news (optional)</li>
      </ul>
      <p>
        Unsubscribe anytime by clicking the link at the bottom of any email or updating your
        preferences in your account settings.
      </p>

      <hr />

      <!-- Data Security -->
      <h3 class="pp-subheading">Data Security</h3>
      <p>Your trust matters to us. We protect your information through:</p>
      <ul>
        <li>Industry-standard encryption (SSL/TLS)</li>
        <li>Secure, PCI-compliant payment processing</li>
        <li>Regular security audits and updates</li>
        <li>Restricted employee access to sensitive data</li>
        <li>Continuous monitoring for vulnerabilities</li>
      </ul>
      <p>
        <strong>Important:</strong>
        Design Centura employees will never ask you to share credit card details via email,
        phone, or chat. If someone does, do not comply and report it to us immediately at
        <strong>security@designcentura.com</strong>.
      </p>

      <hr />

      <!-- Your Rights and Choices -->
      <h3 class="pp-subheading">Your Rights and Choices</h3>
      <p>You have the right to:</p>
      <ul>
        <li>Access your personal information at any time</li>
        <li>Update or correct your account details</li>
        <li>Delete your account and associated data</li>
        <li>Opt out of marketing communications</li>
        <li>Request a copy of your data</li>
      </ul>
      <p>
        Manage your information through your account dashboard or contact us at
        <strong>privacy@designcentura.com</strong>.
      </p>

      <hr />

      <!-- Special Policies -->
      <h3 class="pp-subheading">Special Policies</h3>

      <h4 class="pp-subheading">Children's Privacy</h4>
      <p>
        Our services are not intended for anyone under 13 years of age. We do not knowingly
        collect information from children under 13. If we discover such data has been
        collected, we will delete it immediately.
      </p>

      <h4 class="pp-subheading">Third-Party Links</h4>
      <p>
        Our website may contain links to external sites. We are not responsible for the
        privacy practices of these third-party sites. We encourage you to review their privacy
        policies before sharing any information.
      </p>

      <h4 class="pp-subheading">Testimonials</h4>
      <p>
        We feature customer testimonials with your permission. If you'd like to modify or
        remove your testimonial, contact us at
        <strong>support@designcentura.com</strong>.
      </p>

      <h4 class="pp-subheading">Pseudonym Policy</h4>
      <p>
        For consistency and ease of communication, our team may use professional pseudonyms.
        This practice:
      </p>
      <ul>
        <li>Provides you with a consistent point of contact</li>
        <li>Presents a unified company culture</li>
        <li>Protects employee privacy across our global team</li>
      </ul>
      <p>
        All team members, regardless of name used, are bound by strict confidentiality
        agreements.
      </p>

      <hr />

      <!-- International Operations -->
      <h3 class="pp-subheading">International Operations</h3>
      <p>
        Your project may be handled by team members at any of our global service centers. All
        locations adhere to this privacy policy and maintain the same security standards
        through binding non-disclosure agreements.
      </p>

      <hr />

      <!-- Legal Disclosures -->
      <h3 class="pp-subheading">Legal Disclosures</h3>
      <p>We may disclose your information when required to:</p>
      <ul>
        <li>Comply with legal obligations or court orders</li>
        <li>Cooperate with law enforcement investigations</li>
        <li>Protect our rights, property, or safety</li>
        <li>Prevent fraud or abuse of our services</li>
      </ul>

      <hr />

      <!-- Policy Updates -->
      <h3 class="pp-subheading">Policy Updates</h3>
      <p>
        We may update this privacy policy periodically to reflect changes in our practices or
        legal requirements. When we make significant changes, we will:
      </p>
      <ul>
        <li>Notify you via email</li>
        <li>Post an update in your account dashboard</li>
        <li>Update the “Last Updated” date at the top of this page</li>
      </ul>
      <p>
        Your continued use of our services after changes are posted constitutes acceptance of
        the updated policy.
      </p>

      <hr />

      <!-- Consumer Data Protection -->
      <h3 class="pp-subheading">Consumer Data Protection</h3>
      <p>We comply with:</p>
      <ul>
        <li>PCI DSS (Payment Card Industry Data Security Standards)</li>
      </ul>
    </div>
  </div>
</section>


<?php include('templates/footer.php'); ?>