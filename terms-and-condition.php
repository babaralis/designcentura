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

    /* Simple page wrapper */
    .page-wrapper {
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    main {
      flex: 1;
    }

    /* Banner */
    .tc-hero {
      margin-top: 58px; /* adjust if your navbar height different */
      padding: 3.5rem 0;
      background: radial-gradient(circle at top left, #3a8dff 0, #0340b3 45%, #02142e 100%);
      border-bottom: 1px solid #e5e7eb;
    }

    .tc-hero-eyebrow {
      text-transform: uppercase;
      letter-spacing: 0.18em;
      font-size: 0.78rem;
      color: var(--primary-blue);
      font-weight: 600;
      margin-bottom: 0.4rem;
    }

    .tc-hero-title {
      font-size: 2rem;
      font-weight: 800;
      margin-bottom: 0.4rem;
    }

    .tc-hero-text {
      font-size: 0.95rem;
      color: var(--text-muted);
      margin: 0;
    }

    /* Content area */
    .tc-section {
      padding: 3rem 0 3.5rem;
    }

    .tc-card {
      max-width: 900px;
      margin: 0 auto;
      padding: 2rem 2.2rem;
      border-radius: 18px;
      background: #ffffff;
      border: 1px solid #e5e7eb;
      box-shadow: 0 12px 35px rgba(15, 23, 42, 0.04);
    }

    .tc-heading {
      font-size: 1.25rem;
      font-weight: 700;
      margin-bottom: 1rem;
    }

    .tc-subheading {
      font-size: 1rem;
      font-weight: 600;
      margin-top: 1.8rem;
      margin-bottom: 0.6rem;
      color: var(--primary-blue);
    }

    .tc-list {
      padding-left: 1.1rem;
      margin-bottom: 0.6rem;
    }

    .tc-list li {
      font-size: 0.95rem;
      color: var(--text-muted);
      margin-bottom: 0.35rem;
    }

    .tc-note {
      font-size: 0.9rem;
      color: var(--text-muted);
      margin-top: 0.8rem;
    }

    .tc-highlight-box {
      margin-top: 1rem;
      padding: 0.9rem 1rem;
      border-radius: 12px;
      background: var(--primary-blue-soft);
      font-size: 0.9rem;
      color: #1f2933;
    }

    @media (max-width: 767.98px) {
      .tc-hero {
        padding: 2.5rem 0 2.7rem;
      }
      .tc-card {
        padding: 1.5rem 1.4rem;
      }
    }
  </style>
  
  <!-- HERO / BANNER -->
    <section class="tc-hero">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-9 text-center">
            <div class="tc-hero-eyebrow text-white">Legal</div>
            <h1 class="tc-hero-title text-white">Terms &amp; Conditions</h1>
            <p class="tc-hero-text text-white">
              These terms explain how we provide our design and digital services,
              how payments and deliveries work, and in which cases refunds may be
              considered. By placing an order or using our services, you agree to
              follow the terms listed on this page.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- TERMS CONTENT -->
    <section class="tc-section">
  <div class="container">
    <div class="tc-card">

      <!-- Delivery Policy -->
      <h2 class="tc-heading">1. Delivery Policy</h2>

      <h3 class="tc-subheading">Delivery Timeline</h3>
      <ul class="tc-list">
        <li>All services are delivered according to your purchased package or signed agreement</li>
        <li>Turnaround times vary based on:
          <ul>
            <li>Service complexity and scope</li>
            <li>Speed of your feedback and information sharing</li>
            <li>Order date and current project queue</li>
            <li>Accuracy of initial requirements</li>
          </ul>
        </li>
      </ul>

      <h3 class="tc-subheading">What Counts as “Delivered”</h3>
      <p>A service is considered delivered when:</p>
      <ul class="tc-list">
        <li>All agreed deliverables are completed per the project scope</li>
        <li>Final files are shared with you in the specified formats</li>
        <li>Work meets the standards outlined in your agreement</li>
      </ul>

      <h3 class="tc-subheading">Cancellations Before Delivery</h3>
      <p>If you cancel before delivery is complete, refund eligibility depends on:</p>
      <ul class="tc-list">
        <li>How much work has been completed</li>
        <li>Terms specified in your signed agreement or package</li>
        <li>Our standard refund policy (see Section 3 below)</li>
      </ul>

      <hr />

      <!-- Payment Policy -->
      <h2 class="tc-heading">2. Payment Policy</h2>

      <h3 class="tc-subheading">Monthly Packages</h3>
      <ul class="tc-list">
        <li><strong>Full payment required in advance</strong> before work begins</li>
        <li>Recurring services are billed monthly in advance unless otherwise agreed in writing</li>
        <li>Services may be paused or terminated immediately if invoices are not paid by the due date</li>
      </ul>

      <h3 class="tc-subheading">Pricing & Invoicing</h3>
      <ul class="tc-list">
        <li>All quoted prices are <strong>exclusive of VAT</strong> and applicable taxes</li>
        <li>Taxes will be added to invoices at the correct rate where required</li>
        <li>Cost estimates in quotations are indicative and subject to final confirmation after reviewing full requirements</li>
      </ul>

      <h3 class="tc-subheading">Additional Work & Rate Changes</h3>
      <ul class="tc-list">
        <li><strong>Add-on services:</strong> Work outside your original quotation (extra design, development, or third-party services) will be charged separately according to our current rate card</li>
        <li><strong>Rate reviews:</strong> We may update our hourly or package rates once per twelve-month period maximum</li>
        <li><strong>Price increase notice:</strong> You'll receive at least one (1) month's advance notice of any rate changes</li>
        <li><strong>Your options:</strong> If you don’t accept new rates, you may terminate the contract by providing three (3) months’ written notice within two (2) weeks of receiving the price-change notification</li>
      </ul>

      <h3 class="tc-subheading">Late Payments</h3>
      <ul class="tc-list">
        <li>Interest may be charged in accordance with applicable late-payment legislation, calculated daily until paid in full</li>
        <li>All services may be temporarily suspended</li>
        <li>Time for payment is a material condition; all outstanding amounts become immediately due if the agreement is terminated</li>
        <li>We may offset any amounts you owe against any amounts we owe you, where legally permitted</li>
      </ul>

      <hr />

      <!-- Refund Policy -->
      <h2 class="tc-heading">3. Refund Policy</h2>
      <p>Refund requests are evaluated case-by-case within <strong>three (3) months</strong> from purchase date.</p>

      <h3 class="tc-subheading">3.1 When Refunds May Be Approved</h3>
      <p>We may consider refunds in these specific situations:</p>
      <ul class="tc-list">
        <li><strong>Copyright/Trademark Issues:</strong> The delivered logo is proven to be copied or infringes existing intellectual property</li>
        <li><strong>Material Defects:</strong> The final design is materially defective or significantly different from what was agreed or advertised</li>
        <li><strong>Duplicate Orders:</strong> You accidentally placed duplicate orders for the same service</li>
      </ul>

      <p><strong>Quality Review Required:</strong> All refund requests undergo internal quality assurance review. If our team confirms the design is defective or unusable as promised, up to 100% of the project fee may be refunded in qualifying scenarios.</p>

      <h3 class="tc-subheading">3.2 Refund Timeline & Amounts</h3>
      <ul class="tc-list">
        <li><strong>Before initial concepts delivered:</strong> 100% refund minus 10% processing fee</li>
        <li><strong>Within 48 hours after receiving initial concepts:</strong> Up to 66% refund minus 10% processing fee</li>
        <li><strong>Between 48–120 hours after initial delivery:</strong> Up to 33% refund minus 10% processing fee</li>
        <li><strong>After 120 hours:</strong> Generally not available*</li>
        <li>*After 120 hours, we encourage you to contact us to resolve concerns and improve the work rather than request a refund.</li>
      </ul>

      <h3 class="tc-subheading">3.3 Important Project Terms</h3>

      <h4 class="tc-subheading">Inactive Projects</h4>
      <ul class="tc-list">
        <li>If there’s no communication from you for <strong>14 consecutive days</strong> (except genuine emergencies), your project may be placed on hold and archived</li>
        <li>A <strong>$300 reactivation fee</strong> applies to restart archived projects</li>
      </ul>

      <h4 class="tc-subheading">Concept Approval</h4>
      <ul class="tc-list">
        <li>Once you approve a concept and request revisions, the project enters the refinement stage</li>
        <li>Standard revision rights apply from this point</li>
        <li>Refund rights are normally voided after concept approval</li>
      </ul>

      <h3 class="tc-subheading">3.4 When Refunds Are NOT Available</h3>
      <p>We cannot offer refunds in the following situations:</p>
      <ul class="tc-list">
        <li>✘ Change of mind after work has commenced</li>
        <li>✘ Business decisions such as:
          <ul>
            <li>Investor backing out</li>
            <li>Business closure or restructuring</li>
            <li>Budget reallocation</li>
          </ul>
        </li>
        <li>✘ Hiring competitors while your project with us is active</li>
        <li>✘ Contest participation using our concepts or ideas in logo contests or tournaments</li>
        <li>✘ Copyright violations requesting us to directly copy another designer’s work</li>
        <li>✘ Brief-based work when design was created according to your submitted brief, form, or instructions</li>
        <li>✘ Missing information when you fail to submit required briefs or questionnaires, causing delays or impacting outcomes</li>
      </ul>

      <hr />

      <h3 class="tc-heading">Your Acceptance</h3>
      <p>
        By placing an order, making a payment, or using any Design Centura services, you confirm that you have read, understood, and agreed to these Terms & Conditions.
      </p>
      <p>
        We may update this policy from time to time. Continued use of our services after changes are posted constitutes acceptance of the updated terms.
      </p>

    </div>
  </div>
</section>

  </main>

<?php include('templates/footer.php'); ?>