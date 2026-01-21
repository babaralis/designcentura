<?php include('templates/header.php'); ?>

<style>
      @font-face {
        font-family: "WF Visual Sans";
        src: url("font/WFVisualSansVF.ttf") format("truetype"),
          url("font/WFVisualSansVF.ttf") format("truetype");
        font-style: normal;
      }
      :root {
        --primary-color: #196BFF;
        --primary-dark: #118464;
        --text-dark: #1b1b1b;
        --text-muted: #666666;
        --section-bg: #f7f9fb;
        --soft-primary: #e7f0ff;
        --card-hover: #f1f3f5; /* light grey on hover */
        --card-border: #dfe3e8; /* visible border at rest */
        --accent: #0a53ff;
        --muted: #98a2b3;
      }
      /*
        body {
            font-family: "Helvetica Neue", Arial, sans-serif;
            color: var(--text-dark);
            scroll-behavior: smooth;
        }*/
      body {
        font-family: "WF Visual Sans", system-ui, sans-serif;
        color: var(--text-dark);
        scroll-behavior: smooth;
      }
      h1,
      h2,
      h3,
      h4,
      h5,
      h6 {
        font-weight: 800;
      }

      /* Header */
      header {
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 999;
        background: #ffffff;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.04);
      }
      .w-101 {
        max-width: 100% !important;
      }
      .black-logo {
        max-width: 250px;
      }
      .navbar-brand span.logo-mark {
        display: inline-block;
        width: 32px;
        height: 32px;
        border-radius: 8px;
        background: var(--primary-color);
        color: #ffffff;
        text-align: center;
        line-height: 32px;
        font-weight: 700;
        margin-right: 8px;
      }

      .navbar-nav .nav-link {
        font-weight: 500;
        color: rgba(255, 255, 255, 0.55);
        padding: 0.5rem 0.9rem;
        font-size: 14px;
        text-transform: capitalize;
      }
      .navbar-nav .nav-link i {
        margin-right: 5px;
        color: #196BFF;
      }

      .navbar-nav .nav-link:hover,
      .navbar-nav .nav-link.active {
        color: #196BFF;
      }

      .btn-primary-custom {
        background: #196BFF;
        border: none;
        color: #ffffff;
        font-weight: 600;
        padding: 0.65rem 1.6rem;
        border-radius: 50px;
        transition: all 0.2s ease-in-out;
      }

      .btn-outline-custom {
        border-radius: 50px;
        border: 1px solid #196BFF;
        color: #196BFF;
        font-weight: 600;
        padding: 0.65rem 1.6rem;
        background: transparent;
        transition: all 0.2s ease-in-out;
      }

      .btn-primary-custom:hover,
      .btn-outline-custom:hover {
        background: #196BFF;
        color: #ffffff;
        transform: translateY(-1px);
        /*box-shadow: 0 8px 18px rgba(25, 164, 125, 0.3);*/
      }
      .btn-outline-custom {
        color: #fff;
      }

      main {
        margin-top: 76px; /* header height offset */
      }

      /* Banner / Hero */
      #hero {
        /*background: radial-gradient(circle at top left, #e3fff6, #ffffff);*/
        background: rgb(0, 0, 0, 1);
        padding: 80px 0 70px;
      }

      #hero .sub-heading {
        color: var(--primary-color);
        text-transform: uppercase;
        font-weight: 700;
        letter-spacing: 0.08em;
        font-size: 0.88rem;
        margin-bottom: 0.5rem;
      }

      #hero h1 {
        font-size: 3.5rem;
        font-weight: 800;
      }

      #hero p.lead {
        color: var(--text-muted);
      }

      .hero-badge {
        display: inline-flex;
        align-items: center;
        background: #ffffff;
        padding: 0.3rem 0.8rem;
        border-radius: 999px;
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.05);
        margin-bottom: 1rem;
      }

      .hero-badge i {
        color: #f99d43;
        margin-right: 6px;
      }

      .hero-illustration {
        position: relative;
      }

      .hero-illustration img {
        max-width: 100%;
        border-radius: 16px;
        box-shadow: 0 18px 40px rgba(0, 0, 0, 0.1);
      }

      .hero-floating-card {
        position: absolute;
        bottom: 15px;
        left: -10px;
        background: #ffffff;
        padding: 0.8rem 1rem;
        border-radius: 12px;
        box-shadow: 0 14px 30px rgba(0, 0, 0, 0.12);
        font-size: 0.85rem;
      }

      .hero-floating-card i {
        color: var(--primary-color);
        margin-right: 6px;
      }

      /* Section Titles */
      .section-title {
        text-align: center;
        margin-bottom: 2.5rem;
      }

      .section-title h2 {
        font-weight: 600;
        font-size: 2.8rem;
        width: 100%;
        max-width: 720px;
        margin: auto;
      }

      .section-title p {
        max-width: 620px;
        margin: 0.4rem auto 0;
        color: var(--text-muted);
      }

      /* How We Do */
      #how-we-do {
        padding: 70px 0;
        background: #ffffff;
      }
      .text-red {
        color: #196BFF;
      }

      .feature-card {
        border-radius: 12px;
        padding: 1.8rem 1.4rem;
        box-shadow: 0 10px 24px rgba(0, 0, 0, 0.04);
        height: 100%;
        transition: all 0.2s ease-in-out;
        border: 1px solid #196BFF;
      }
      .feature-card:hover {
        background: #196BFF;
        border: 1px solid transparent;
      }
      .feature-card:hover i,
      .feature-card:hover h5,
      .feature-card:hover p {
        color: #fff;
      }

      .feature-card i {
        font-size: 1.8rem;
        color: var(--primary-color);
        margin-bottom: 0.75rem;
      }

      .feature-card h5 {
        font-weight: 700;
        margin-bottom: 0.4rem;
      }

      .feature-card p {
        color: var(--text-muted);
        font-size: 0.95rem;
      }

      .feature-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 16px 40px rgba(0, 0, 0, 0.08);
      }

      /* Portfolio */
      #portfolio {
        padding: 70px 0;
        background: var(--section-bg);
      }
      .nav-tabs .nav-item {
        margin-right: 20px;
      }
      .nav-tabs .nav-item:last-child {
        margin-right: 0px;
      }
      .nav-tabs .nav-link {
        border-radius: 999px;
        border: 1px solid transparent;
        color: #333333;
        font-weight: 500;
        padding: 0.4rem 2.2rem;
      }
      .pb-04 {
        padding-bottom: 1.5rem !important;
      }
      .nav-tabs .nav-link.active {
        background: var(--primary-color);
        color: #ffffff;
        border-color: var(--primary-color);
      }

      .portfolio-item {
        position: relative;
        overflow: hidden;
        border-radius: 0;
      }

      .portfolio-item img {
        width: 100%;
        display: block;
        transition: transform 0.3s ease-in-out;
        height: 230px;
        object-fit: cover;
      }

      .portfolio-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(
          to top,
          rgba(0, 0, 0, 0.65),
          rgba(0, 0, 0, 0.1)
        );
        opacity: 0;
        transition: opacity 0.25s ease-in-out;
        color: #ffffff;
        display: flex;
        align-items: flex-end;
        padding: 1rem;
        font-size: 0.9rem;
      }

      .portfolio-item:hover img {
        transform: scale(1.08);
      }

      .portfolio-item:hover .portfolio-overlay {
        opacity: 1;
      }

      /* Stats */
      #stats {
        padding: 70px 0;
        background: #ffffff;
      }

      .stats-card {
        background: #f9f1f2;
        border-radius: 14px;
        padding: 1.6rem 1.4rem;
        text-align: center;
        height: 100%;
      }

      .stats-card h3 {
        font-size: 3rem;
        font-weight: 800;
        color: var(--primary-color);
        margin-bottom: 0.25rem;
      }
      .stats-card h3 span {
        color: #000;
      }
      .stats-card p {
        margin: 0;
        color: var(--text-muted);
        font-size: 0.94rem;
      }

      /* Process */
      #process {
        padding: 70px 0;
        background: var(--section-bg);
      }

      .process-step {
        text-align: center;
        padding: 1.5rem 1rem;
      }

      .process-icon {
        width: 62px;
        height: 62px;
        border-radius: 18px;
        background: #f9f1f2;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1rem;
        font-size: 1.4rem;
        color: var(--primary-color);
      }

      .process-step h5 {
        font-weight: 700;
      }

      .process-step p {
        font-size: 0.95rem;
        color: var(--text-muted);
      }

      .process-line {
        height: 2px;
        background: rgba(0, 0, 0, 0.06);
        margin: 1rem auto 2rem;
        max-width: 680px;
        position: relative;
      }

      .process-line::before {
        content: "";
        position: absolute;
        left: 10%;
        right: 10%;
        top: 0;
        height: 100%;
        background: linear-gradient(
          to right,
          rgba(25, 164, 125, 0.2),
          var(--primary-color),
          rgba(25, 164, 125, 0.2)
        );
      }

      /* Awards */
      #awards {
        padding: 70px 0;
        background: #ffffff;
      }

      .award-badge {
        border-radius: 12px;
        border: 1px solid #e1e5ee;
        padding: 1.2rem 1rem;
        text-align: center;
        background: #ffffff;
        height: 100%;
      }
      .award-badge:hover {
        box-shadow: 0 0px 6px rgba(255, 42, 64, 0.5);
      }

      .award-badge img {
        max-width: 120px;
        margin-bottom: 0.7rem;
      }

      .award-badge h6 {
        font-weight: 700;
        margin-bottom: 0.2rem;
      }
      .accordion-header .accordion-button {
        color: #000;
      }
      .accordion-button:not(.collapsed)::after {
        filter: brightness(0) invert(1);
      }
      .accordion-button:not(.collapsed) {
        color: #fff;
      }

      .award-badge p {
        font-size: 0.8rem;
        color: var(--text-muted);
        margin: 0;
      }

      .faq-section {
        padding: 70px 0 0;
        background-color: #f7f9fc;
      }
      .accordion-button:not(.collapsed) {
        background: #196BFF;
      }
      button:focus:not(:focus-visible) {
        box-shadow: none;
      }
      .faq-title {
        font-size: 32px;
        font-weight: 700;
        margin-bottom: 10px;
        color: #000;
      }

      .faq-subtitle {
        font-size: 15px;
        color: #6c7590;
        max-width: 600px;
        margin: 0 auto;
      }

      /* Accordion Styles /
        .faq-accordion .accordion-item {
          border: none;
          margin-bottom: 12px;
          border-radius: 8px;
          overflow: hidden;
          box-shadow: 0 4px 18px rgba(0, 0, 0, 0.04);
          background-color: #ffffff;
        }
        
        .faq-accordion .accordion-button {
          font-weight: 600;
          font-size: 15px;
          padding: 14px 18px;
          background-color: #ffffff;
          color: #102147;
          box-shadow: none;
        }
        
        .faq-accordion .accordion-button:not(.collapsed) {
          background-color: #e7f0ff;
          color: #0b5ed7;
        }
        
        .faq-accordion .accordion-button:focus {
          box-shadow: none;
        }
        
        .faq-accordion .accordion-body {
          font-size: 14px;
          color: #5b647d;
          padding: 14px 18px 16px;
          line-height: 1.6;
        }
        
        / Change plus/minus icon color /
        .faq-accordion .accordion-button::after {
          filter: hue-rotate(200deg) saturate(2);
        }
        
        / Responsive tweaks */
      @media (max-width: 576px) {
        .section-title h2 {
          font-size: 2rem;
        }
        .faq-title {
          font-size: 26px;
        }

        .faq-subtitle {
          font-size: 14px;
        }

        .portfolioTabs {
          flex-direction: column !important;
          align-items: center;
        }
        .nav-tabs .nav-item {
          margin-bottom: 10px;
        }
      }

      .privacy-section {
        padding: 160px 0 70px;
      }

      .termscondition-section {
        padding: 160px 0 70px;
      }

      /* Contact */
      #contact {
        padding: 70px 0;
        background: var(--section-bg);
      }

      .contact-card {
        background: #ffffff;
        border-radius: 16px;
        padding: 2rem 1.8rem;
        box-shadow: 0 14px 34px rgba(0, 0, 0, 0.05);
      }

      .form-control:focus {
        border-color: var(--primary-color);
        box-shadow: none;
      }
      .form-select:focus {
        border-color: var(--primary-color) !important;
        box-shadow: none !important;
      }

      .contact-info-list li {
        margin-bottom: 0.7rem;
        color: var(--text-muted);
      }

      .contact-info-list i {
        color: var(--primary-color);
        margin-right: 0.5rem;
      }

      .submit {
        margin-top: 11px;
      }

      /* Footer */
      footer {
        background: #000;
        color: rgba(255, 255, 255, 0.86);
        padding: 40px 0 25px;
      }
      .white-logo {
        max-width: 230px;
      }
      footer a {
        color: rgba(255, 255, 255, 0.8);
        text-decoration: none;
        font-size: 0.9rem;
      }

      footer a:hover {
        color: #ffffff;
      }

      .footer-brand span.logo-mark {
        background: var(--primary-color);
      }

      .footer-social a {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 34px;
        height: 34px;
        border-radius: 50%;
        border: 1px solid rgba(255, 255, 255, 0.18);
        margin-right: 8px;
        font-size: 0.85rem;
      }

      .footer-bottom {
        border-top: 1px solid rgba(255, 255, 255, 0.08);
        margin-top: 1.5rem;
        padding-top: 1.2rem;
        font-size: 0.8rem;
        color: rgba(255, 255, 255, 0.7);
      }

      /* Back to Top Button */
      #backToTop {
        position: fixed;
        bottom: 20px;
        right: 20px;
        width: 42px;
        height: 42px;
        border-radius: 50%;
        background: var(--primary-color);
        color: #ffffff;
        border: none;
        display: none;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        z-index: 999;
        transition: all 0.2s ease-in-out;
      }

      #backToTop:hover {
        background: var(--primary-color);
        transform: translateY(-2px);
      }

      #stats {
        padding-top: 8rem;
        padding-bottom: 6rem;
      }

      /* Hero */
      .badge-primary-soft {
        background: var(--soft-primary);
        color: var(--accent);
        font-weight: 600;
        padding: 0.5rem 0.9rem;
        border-radius: 999px;
      }
      .hero {
        background: radial-gradient(
            1200px 400px at 50% -50%,
            #eaf2ff,
            transparent 60%
          ),
          linear-gradient(180deg, #ffffff 0%, #f7f9fc 100%);
      }
      .has-search .search-icon {
        position: absolute;
        top: 50%;
        left: 18px;
        transform: translateY(-50%);
        font-size: 1.1rem;
        color: var(--muted);
      }
      .has-search input {
        border-radius: 12px;
        border: 1px solid #e5e7eb;
        box-shadow: 0 1px 0 rgba(16, 24, 40, 0.02);
      }

      /* Filters */
      .filters .btn {
        border-radius: 999px;
      }
      .filters .btn.active,
      .filters .btn:hover {
        background: var(--accent);
        color: #fff;
        border-color: var(--accent);
      }

      /* Cards — visible border at rest, light grey hover */
      #love {
        padding: 0 0 70px 0;
      }
      .rounded-circle {
        background: #f9f1f2 !important;
      }
      .love-card {
        border: 1px solid var(--card-border);
        border-radius: 16px;
        transition: transform 0.15s ease, box-shadow 0.15s ease,
          background-color 0.15s ease, border-color 0.15s ease;
        background: #fff;
      }
      .love-card:hover {
        transform: translateY(-2px);
        background: var(--card-hover);
        border-color: #cbd3da;
        box-shadow: 0 10px 24px rgba(16, 24, 40, 0.08);
      }
      .love-text {
        font-size: 0.98rem;
        line-height: 1.6;
        color: #344054;
      }
      .tweet-media,
      .video-media {
        border-radius: 12px;
        width: 100%;
        height: auto;
        border: 1px solid var(--card-border);
        background: #fff;
      }

      /* Masonry columns (column-wise layout) */
      .masonry {
        column-gap: 1.5rem;
      }
      /* default 1 column */
      .masonry {
        column-count: 1;
      }
      @media (min-width: 576px) {
        .masonry {
          column-count: 2;
        }
      }
      @media (min-width: 992px) {
        .masonry {
          column-count: 3;
        }
      }

      .masonry .m-item {
        break-inside: avoid;
        margin-bottom: 1.5rem; /* same as column gap */
        display: inline-block;
        width: 100%;
      }

      /* Pill badges hover remains */
      .pill {
        background: #fff;
        border: 1px solid var(--card-border);
        border-radius: 14px;
        padding: 0.75rem 1rem;
        display: flex;
        align-items: center;
        box-shadow: 0 1px 0 rgba(16, 24, 40, 0.02);
        transition: background-color 0.15s ease, border-color 0.15s ease;
      }
      .pill:hover {
        background: #f9fbff;
        border-color: #dbe7ff;
      }
      .pill .meta {
        font-size: 0.68rem;
        letter-spacing: 0.04em;
        color: #667085;
        text-transform: uppercase;
      }
      .pill .title {
        font-weight: 700;
        color: #d64020;
      }
      .pill .upvotes {
        margin-left: auto;
        font-weight: 600;
        color: #d64020;
        display: flex;
        align-items: center;
      }
      .pill .upvotes i {
        font-size: 0.9rem;
        margin-right: 0.25rem;
      }
      .ph-avatar {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 28px;
        height: 28px;
        border-radius: 50%;
        background: #ea4c2a;
        color: #fff;
        font-weight: 700;
        margin-right: 0.5rem;
      }
      .laurel {
        color: #aab2bd;
        font-size: 1.1rem;
      }
      .tiny-spotlight {
        color: #111;
        font-weight: 600;
      }

      @media (max-width: 575.98px) {
        .filters .btn {
          margin-right: 0.5rem;
        }
        .pill {
          width: 100%;
        }
      }

      @media (max-width: 1024px) {
        .black-logo {
          max-width: 170px;
        }
        .portfolioTabs {
          flex-direction: row;
        }
      }

      /* Responsive */
      @media (max-width: 991.98px) {
        #hero {
          padding-top: 60px;
        }

        #hero h1 {
          font-size: 2rem;
        }

        .hero-floating-card {
          position: static;
          margin-top: 1rem;
        }
        .portfolioTabs {
          flex-direction: row;
        }
      }

      @media (max-width: 575.98px) {
        .navbar-brand span.logo-mark {
          width: 28px;
          height: 28px;
          line-height: 28px;
          font-size: 0.9rem;
        }

        #hero h1 {
          font-size: 1.8rem;
        }
      }
    </style>
<style>
        /* AI Service Hero Section */
.ai-hero-section {
  background: #000;
  padding: 120px 0 100px;
  position: relative;
  overflow: hidden;
}

.ai-hero-section::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: radial-gradient(
    circle at 50% 50%,
    rgba(255, 42, 64, 0.1) 0%,
    transparent 70%
  );
  pointer-events: none;
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

.ai-hero-badge i {
  color: var(--primary-color);
  font-size: 1rem;
}

.ai-hero-section h1 {
  font-size: 2.8rem;
  font-weight: 600;
  line-height: 1.2;
}

.ai-hero-section .lead {
  font-size: 1.25rem;
  color: rgba(255, 255, 255, 0.9);
  max-width: 700px;
  margin: 0 auto;
}

.ai-hero-section .btn-lg,
.ai-faq-section .btn-lg {
  font-size: 1rem;
}

@media (max-width: 991.98px) {
  .ai-hero-section {
    padding: 100px 0 80px;
  }

  .ai-hero-section h1 {
    font-size: 2.5rem;
  }

  .ai-hero-section .lead {
    font-size: 1.1rem;
  }

  .ai-services-section h2,
  .ai-benefits-section h2,
  .ai-industry-section h2,
  .ai-network-section h2,
  .ai-faq-section h2 {
    font-size: 2.25rem !important;
  }
}

@media (max-width: 575.98px) {
  .ai-hero-section {
    padding: 80px 0 60px;
  }

  .ai-hero-section h1 {
    font-size: 2rem;
  }

  .ai-hero-badge {
    font-size: 0.85rem;
    padding: 0.4rem 1rem;
  }

  .ai-hero-section .lead {
    font-size: 1rem;
    padding: 0 1rem;
  }

  .ai-hero-section .btn-lg {
    font-size: 0.95rem;
    padding: 0.75rem 1.5rem;
    width: 100%;
    max-width: 300px;
  }

  .ai-hero-section .d-flex.gap-3 {
    flex-direction: column;
    align-items: center;
    gap: 1rem !important;
  }

  .ai-faq-section .btn-lg {
    font-size: 0.95rem;
    padding: 0.75rem 1.5rem;
  }
}

/* AI Workflow Section */
.ai-workflow-section {
  padding: 70px 0;
  background: var(--section-bg);
}

.ai-section-badge {
  display: inline-block;
  background: var(--soft-primary);
  color: var(--primary-color);
  padding: 0.4rem 1rem;
  border-radius: 50px;
  font-weight: 600;
  font-size: 0.85rem;
  letter-spacing: 0.05em;
  text-transform: uppercase;
}

/* Workflow Diagram */
.ai-workflow-diagram {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 1rem;
  padding: 2rem;
}

.workflow-step {
  width: 100%;
  display: flex;
  justify-content: center;
}

.workflow-node {
  background: #ffffff;
  border: 2px solid var(--primary-color);
  border-radius: 16px;
  padding: 1.5rem 2rem;
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 0.75rem;
  min-width: 180px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
  transition: all 0.3s ease;
}

.workflow-node:hover {
  transform: translateY(-4px);
  box-shadow: 0 8px 20px rgba(255, 42, 64, 0.15);
  background: var(--primary-color);
  color: #ffffff;
}

.workflow-node:hover i,
.workflow-node:hover span {
  color: #ffffff;
}

.workflow-node i {
  font-size: 2rem;
  color: var(--primary-color);
  transition: all 0.3s ease;
}

.workflow-node span {
  font-weight: 600;
  color: var(--text-dark);
  font-size: 0.95rem;
  transition: all 0.3s ease;
}

.workflow-arrow {
  color: var(--primary-color);
  font-size: 1.5rem;
  padding: 0.5rem 0;
}

/* Chat Preview */
.ai-chat-preview {
  display: flex;
  justify-content: center;
  align-items: center;
}

.chat-preview-card {
  background: #ffffff;
  border-radius: 16px;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
  overflow: hidden;
  max-width: 400px;
  width: 100%;
}

.chat-header {
  background: var(--primary-color);
  color: #ffffff;
  padding: 1rem 1.5rem;
  display: flex;
  align-items: center;
  gap: 1rem;
}

.chat-avatar {
  width: 40px;
  height: 40px;
  background: rgba(255, 255, 255, 0.2);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.2rem;
}

.chat-info h6 {
  color: #ffffff;
  margin: 0;
  font-size: 0.95rem;
}

.chat-info small {
  color: rgba(255, 255, 255, 0.8);
  font-size: 0.8rem;
}

.chat-messages {
  padding: 1.5rem;
  background: #f8f9fa;
  min-height: 250px;
  display: flex;
  flex-direction: column;
  gap: 1rem;
}

.message {
  padding: 0.75rem 1rem;
  border-radius: 12px;
  max-width: 80%;
  font-size: 0.9rem;
  line-height: 1.5;
}

.message-ai {
  background: #ffffff;
  border: 1px solid #e5e7eb;
  align-self: flex-start;
  color: var(--text-dark);
}

.message-user {
  background: var(--primary-color);
  color: #ffffff;
  align-self: flex-end;
}

.message p {
  margin: 0;
}

/* Integration Partners */
.integration-partners {
  padding: 2rem 0;
}

.partner-logo {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 0.5rem;
  padding: 1rem 1.5rem;
  background: #ffffff;
  border-radius: 12px;
  border: 1px solid var(--card-border);
  transition: all 0.3s ease;
  min-width: 120px;
}

.partner-logo:hover {
  transform: translateY(-4px);
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
  border-color: var(--primary-color);
}

.partner-logo i {
  font-size: 2rem;
  color: var(--text-muted);
  transition: color 0.3s ease;
}

.partner-logo:hover i {
  color: var(--primary-color);
}

.partner-logo span {
  font-size: 0.85rem;
  font-weight: 600;
  color: var(--text-dark);
}

@media (max-width: 991.98px) {
  .ai-workflow-diagram {
    margin-bottom: 2rem;
  }

  .workflow-node {
    min-width: 160px;
    padding: 1.25rem 1.5rem;
  }

  .workflow-node i {
    font-size: 1.75rem;
  }
}

@media (max-width: 575.98px) {
  .workflow-node {
    min-width: 140px;
    padding: 1rem 1.25rem;
  }

  .workflow-node i {
    font-size: 1.5rem;
  }

  .workflow-node span {
    font-size: 0.85rem;
  }

  .partner-logo {
    min-width: 100px;
    padding: 0.75rem 1rem;
  }

  .partner-logo i {
    font-size: 1.5rem;
  }
}

/* AI Services Section */
.ai-services-section {
  padding: 70px 0;
  background: #ffffff;
}

@media (max-width: 575.98px) {
  .ai-services-section {
    padding: 50px 0;
  }

  .ai-services-section h2 {
    font-size: 1.75rem !important;
  }

  .ai-services-section .ai-section-badge {
    font-size: 0.75rem;
    padding: 0.35rem 0.85rem;
  }

  .ai-services-section .text-muted {
    font-size: 0.9rem;
    padding: 0 1rem;
  }
}

.ai-service-card {
  background: #ffffff;
  border: 1px solid var(--card-border);
  border-radius: 16px;
  padding: 1.5rem 1.25rem;
  height: 100%;
  display: flex;
  flex-direction: column;
  transition: all 0.3s ease;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.04);
  gap: 0.75rem;
}

.ai-service-card .service-phone-mockup {
  flex: 1;
  display: flex;
  align-items: stretch;
  margin: 0.5rem 0;
}

.ai-service-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 12px 30px rgba(255, 42, 64, 0.15);
  border-color: var(--primary-color);
}

.service-icon-wrapper {
  width: 50px;
  height: 50px;
  border-radius: 12px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.5rem;
  color: #ffffff;
  margin: 0 auto 0.75rem;
}

.service-icon-green {
  background: linear-gradient(135deg, #25d366 0%, #128c7e 100%);
}

.service-icon-purple {
  background: linear-gradient(135deg, #8b5cf6 0%, #6d28d9 100%);
}

.service-icon-yellow {
  background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 100%);
}

.service-icon-blue {
  background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);
}

.service-phone-mockup {
  margin: 1rem 0;
  display: flex;
  justify-content: center;
  flex: 1;
  min-height: 280px;
}

.phone-screen {
  width: 100%;
  height: 100%;
  min-height: 280px;
  border-radius: 24px;
  padding: 1rem;
  box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
  position: relative;
  overflow: hidden;
  display: flex;
  flex-direction: column;
}

.phone-green {
  background: linear-gradient(135deg, #25d366 0%, #128c7e 100%);
}

.phone-purple {
  background: linear-gradient(135deg, #8b5cf6 0%, #6d28d9 100%);
}

.phone-yellow {
  background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 100%);
}

.phone-blue {
  background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);
}

.phone-content {
  background: #ffffff;
  border-radius: 16px;
  height: 100%;
  min-height: 250px;
  padding: 1rem;
  display: flex;
  flex-direction: column;
  flex: 1;
}

.phone-header {
  display: flex;
  align-items: center;
  gap: 0.5rem;
  padding-bottom: 0.75rem;
  border-bottom: 1px solid #e5e7eb;
  margin-bottom: 1rem;
}

.phone-header i {
  color: var(--primary-color);
  font-size: 1.2rem;
}

.phone-header span {
  font-weight: 600;
  font-size: 0.9rem;
  color: var(--text-dark);
}

.phone-messages {
  display: flex;
  flex-direction: column;
  gap: 0.75rem;
  flex: 1;
}

.phone-message {
  padding: 0.6rem 0.8rem;
  border-radius: 12px;
  font-size: 0.8rem;
  line-height: 1.4;
  max-width: 85%;
  background: #f3f4f6;
  color: var(--text-dark);
}

.phone-message.user-msg {
  background: var(--primary-color);
  color: #ffffff;
  align-self: flex-end;
  margin-left: auto;
}

.ai-service-card h5 {
  font-weight: 700;
  color: var(--text-dark);
  margin-bottom: 0.25rem;
  margin-top: 0.5rem;
}

.service-features {
  list-style: none;
  padding: 0;
  margin: 0;
  flex: 1;
}

.service-features li {
  display: flex;
  align-items: flex-start;
  gap: 0.75rem;
  margin-bottom: 0.5rem;
  font-size: 0.9rem;
  color: var(--text-muted);
  line-height: 1.4;
}

.service-features li:last-child {
  margin-bottom: 0;
}

.service-description {
  font-size: 0.9rem;
  color: var(--text-muted);
  line-height: 1.6;
  margin: 0;
  flex: 1;
}

.service-features li i {
  color: var(--primary-color);
  font-size: 0.85rem;
  margin-top: 0.2rem;
  flex-shrink: 0;
}

@media (max-width: 991.98px) {
  .service-phone-mockup {
    min-height: 260px;
  }

  .phone-screen {
    min-height: 260px;
  }

  .phone-content {
    min-height: 230px;
  }

  .ai-service-card {
    margin-bottom: 2rem;
  }
}

@media (max-width: 575.98px) {
  .service-phone-mockup {
    min-height: 240px;
  }

  .phone-screen {
    min-height: 240px;
  }

  .phone-content {
    min-height: 210px;
  }

  .service-icon-wrapper {
    width: 45px;
    height: 45px;
    font-size: 1.25rem;
  }

  .phone-message {
    font-size: 0.75rem;
  }
}

/* AI Benefits Section */
.ai-benefits-section {
  padding: 70px 0;
  background: var(--section-bg);
}

@media (max-width: 575.98px) {
  .ai-benefits-section {
    padding: 50px 0;
  }

  .ai-benefits-section h2 {
    font-size: 1.75rem !important;
  }

  .ai-benefits-section .ai-section-badge {
    font-size: 0.75rem;
    padding: 0.35rem 0.85rem;
  }

  .ai-benefits-section .text-muted {
    font-size: 0.9rem;
    padding: 0 1rem;
  }
}

.benefit-card {
  background: #ffffff;
  border: 1px solid var(--card-border);
  border-radius: 16px;
  padding: 2rem 1.5rem;
  height: 100%;
  transition: all 0.3s ease;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.04);
}

.benefit-card:hover {
  transform: translateY(-4px);
  box-shadow: 0 12px 30px rgb(28 106 252 / 10%);
  border-color: var(--primary-color);
}

.benefit-title {
  font-weight: 700;
  font-size: 1.25rem;
  color: var(--text-dark);
  margin-bottom: 1rem;
}

.benefit-description {
  color: #000;
  font-size: 0.95rem;
  line-height: 1.6;
  margin-bottom: 1.5rem;
  font-weight: 600;
}

.benefit-stats {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 1rem;
  margin-top: 1.5rem;
}

.stat-box {
  background: linear-gradient(135deg, rgb(29 106 252 / 13%) 0%, rgb(29 106 252 / 23%) 100%);
  border-radius: 12px;
  padding: 1.5rem 1rem;
  text-align: center;
  transition: all 0.3s ease;
  position: relative;
  overflow: hidden;
}

.stat-box::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: repeating-linear-gradient(
    45deg,
    transparent,
    transparent 10px,
    rgba(255, 42, 64, 0.03) 10px,
    rgba(255, 42, 64, 0.03) 20px
  );
  opacity: 0.5;
  pointer-events: none;
}

/*.stat-box:hover {*/
/*  background: linear-gradient(*/
/*    135deg,*/
/*    rgba(255, 42, 64, 0.15) 0%,*/
/*    rgba(255, 42, 64, 0.08) 100%*/
/*  );*/
/*  border-color: var(--primary-color);*/
/*  transform: translateY(-2px);*/
/*}*/

.stat-number {
  font-size: 2rem;
  font-weight: 800;
  color: var(--primary-color);
  line-height: 1.2;
  margin-bottom: 0.5rem;
}

.stat-label {
  font-size: 0.75rem;
  color: var(--text-dark);
  font-weight: 600;
  line-height: 1.4;
}

@media (max-width: 991.98px) {
  .benefit-stats {
    gap: 0.75rem;
  }

  .stat-box {
    padding: 1.25rem 0.75rem;
  }

  .stat-number {
    font-size: 1.75rem;
  }
}

@media (max-width: 575.98px) {
  .benefit-stats {
    grid-template-columns: 1fr;
    gap: 1rem;
  }

  .stat-box {
    padding: 1.5rem 1rem;
  }

  .stat-number {
    font-size: 1.75rem;
  }

  .benefit-title {
    font-size: 1.1rem;
  }

  .benefit-description {
    font-size: 0.9rem;
  }
}

/* AI Industry Solutions Section */
.ai-industry-section {
  padding: 70px 0;
  background: #ffffff;
}

@media (max-width: 575.98px) {
  .ai-industry-section {
    padding: 50px 0;
  }

  .ai-industry-section h2 {
    font-size: 1.75rem !important;
  }

  .ai-industry-section .ai-section-badge {
    font-size: 0.75rem;
    padding: 0.35rem 0.85rem;
  }

  .ai-industry-section .text-muted {
    font-size: 0.9rem;
    padding: 0 1rem;
  }
}

.section-title {
    font-weight: 600;
    font-size: 2.8rem;
    margin-bottom: 0.4rem;
}

.industry-agent-card {
  background: #ffffff;
  border: 1px solid var(--card-border);
  border-radius: 16px;
  overflow: hidden;
  height: 100%;
  display: flex;
  flex-direction: column;
  transition: all 0.3s ease;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.04);
}

.industry-agent-card:hover {
  transform: translateY(-4px);
  box-shadow: 0 12px 30px rgba(255, 42, 64, 0.15);
  border-color: var(--primary-color);
}

.agent-visual-wrapper {
  padding: 2rem 1.5rem;
  min-height: 300px;
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
}

.agent-bg-yellow {
  background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%);
}

.agent-bg-green {
  background: linear-gradient(135deg, #d1fae5 0%, #a7f3d0 100%);
}

.agent-phone-mockup {
  width: 100%;
  display: flex;
  justify-content: center;
}

.agent-phone-screen {
  background: #ffffff;
  border-radius: 20px;
  padding: 0.75rem;
  box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
  width: 100%;
  min-height: 280px;
  display: flex;
  flex-direction: column;
}

.agent-phone-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding-bottom: 0.75rem;
  border-bottom: 1px solid #e5e7eb;
  margin-bottom: 0.75rem;
}

.agent-phone-title {
  display: flex;
  align-items: center;
  gap: 0.5rem;
  font-weight: 600;
  font-size: 0.85rem;
  color: var(--text-dark);
}

.agent-phone-title i {
  color: var(--primary-color);
  font-size: 1rem;
}

.agent-status {
  background: #10b981;
  color: #ffffff;
  padding: 0.25rem 0.5rem;
  border-radius: 12px;
  font-size: 0.7rem;
  font-weight: 600;
}

.agent-phone-chat {
  flex: 1;
  display: flex;
  flex-direction: column;
  gap: 0.75rem;
  overflow-y: auto;
}

.agent-chat-status {
  text-align: center;
  color: #10b981;
  font-size: 0.75rem;
  font-weight: 600;
  padding: 0.5rem 0;
}

.agent-message {
  display: flex;
  gap: 0.5rem;
  align-items: flex-start;
}

.agent-message.agent-user-msg {
  flex-direction: row-reverse;
}

.agent-msg-avatar {
  width: 28px;
  height: 28px;
  border-radius: 50%;
  background: var(--primary-color);
  color: #ffffff;
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: 700;
  font-size: 0.75rem;
  flex-shrink: 0;
}

.agent-msg-content {
  flex: 1;
  max-width: 80%;
}

.agent-msg-name {
  font-weight: 600;
  font-size: 0.75rem;
  color: var(--text-dark);
  margin-bottom: 0.25rem;
}

.agent-msg-text {
  background: #f3f4f6;
  padding: 0.6rem 0.8rem;
  border-radius: 12px;
  font-size: 0.75rem;
  line-height: 1.4;
  color: var(--text-dark);
}

.agent-user-msg .agent-msg-text {
  background: var(--primary-color);
  color: #ffffff;
}

.agent-msg-time {
  font-size: 0.65rem;
  color: var(--text-muted);
  margin-top: 0.25rem;
  padding-left: 0.5rem;
}

.agent-user-msg .agent-msg-time {
  text-align: right;
  padding-right: 0.5rem;
  padding-left: 0;
}

.agent-content {
  padding: 1.5rem;
  background: #ffffff;
}

.agent-card-title {
  font-weight: 700;
  font-size: 1.25rem;
  color: var(--text-dark);
  margin-bottom: 1rem;
}

.agent-features {
  list-style: none;
  padding: 0;
  margin: 0;
}

.agent-features li {
  display: flex;
  align-items: flex-start;
  gap: 0.75rem;
  margin-bottom: 0.75rem;
  font-size: 0.9rem;
  color: var(--text-muted);
  line-height: 1.5;
}

.agent-features li:last-child {
  margin-bottom: 0;
}

.agent-features li i {
  color: var(--primary-color);
  font-size: 0.5rem;
  margin-top: 0.5rem;
  flex-shrink: 0;
}

.agent-features li span {
  flex: 1;
}

@media (max-width: 991.98px) {
  .agent-visual-wrapper {
    min-height: 260px;
    padding: 1.5rem 1rem;
  }

  .agent-phone-screen {
    min-height: 240px;
  }

  .industry-agent-card {
    margin-bottom: 2rem;
  }
}

@media (max-width: 575.98px) {
  .agent-visual-wrapper {
    min-height: 240px;
    padding: 1.25rem 0.75rem;
  }

  .agent-phone-screen {
    min-height: 220px;
  }

  .agent-card-title {
    font-size: 1.1rem;
  }

  .agent-features li {
    font-size: 0.85rem;
  }
}

/* AI Network Section */
.ai-network-section {
  padding: 70px 0;
  background: var(--section-bg);
}

@media (max-width: 991.98px) {
  .ai-network-section h2 {
    font-size: 2.25rem !important;
  }

  .ai-network-section .text-muted {
    font-size: 0.95rem;
    padding: 0 1rem;
  }
}

@media (max-width: 575.98px) {
  .ai-network-section {
    padding: 50px 0;
  }

  .ai-network-section h2 {
    font-size: 1.75rem !important;
  }

  .ai-network-section .section-badge {
    font-size: 0.75rem;
    padding: 0.35rem 0.85rem;
  }

  .ai-network-section .text-muted {
    font-size: 0.9rem;
    padding: 0 1rem;
  }

  .network-diagram {
    padding: 2rem 0;
  }
}

/* Mobile Network Diagram (Triangular Layout) */
.network-diagram-mobile {
  padding: 1rem 0;
  position: relative;
  background: transparent;
  margin: 1rem 0;
}

.network-container-mobile {
  position: relative;
  width: 100%;
  min-height: 300px;
  max-width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 1rem 0.5rem;
  overflow: hidden;
}

.network-connections-mobile {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1;
  pointer-events: none;
}

.network-node-mobile {
  position: absolute;
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 0.75rem;
  z-index: 10;
}

.node-avatar-mobile {
  width: 80px;
  height: 80px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 5px;
  box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
  transition: all 0.3s ease;
  position: relative;
}

.node-avatar-mobile:hover {
  transform: scale(1.1);
  box-shadow: 0 8px 25px rgba(0, 0, 0, 0.4);
}

.avatar-inner-mobile {
  width: 100%;
  height: 100%;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.5rem;
  font-weight: 700;
  color: #ffffff;
  background: #ffffff;
}

/* Mobile Avatar Border Colors */
.avatar-border-pink-mobile {
  border: 5px solid #ec4899;
  background: #ffffff;
}

.avatar-border-yellow-mobile {
  border: 5px solid #fbbf24;
  background: #ffffff;
}

.avatar-border-purple-mobile {
  border: 5px solid #8b5cf6;
  background: #ffffff;
}

/* Mobile Avatar Inner Colors */
.avatar-pink-mobile {
  background: linear-gradient(135deg, #ec4899 0%, #db2777 100%);
}

.avatar-yellow-mobile {
  background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 100%);
}

.avatar-purple-mobile {
  background: linear-gradient(135deg, #8b5cf6 0%, #7c3aed 100%);
}

.node-label-mobile {
  background: var(--primary-color);
  color: #ffffff;
  padding: 0.5rem 1rem;
  border-radius: 20px;
  font-size: 0.85rem;
  font-weight: 600;
  white-space: nowrap;
  text-align: center;
  box-shadow: 0 4px 12px rgba(255, 42, 64, 0.25);
}

/* Mobile Node Positioning (Triangular Layout) */
.node-mobile-top {
  top: 5%;
  left: 50%;
  transform: translate(-50%, 0);
}

.node-mobile-bottom-left {
  bottom: 5%;
  left: 25%;
  transform: translate(-50%, 0);
}

.node-mobile-bottom-right {
  bottom: 5%;
  right: 25%;
  transform: translate(50%, 0);
}

@media (max-width: 575.98px) {
  .network-diagram-mobile {
    padding: 0.5rem 0;
    margin: 0.5rem 0;
  }

  .network-container-mobile {
    min-height: 280px;
    padding: 0.75rem 0.25rem;
  }

  .node-avatar-mobile {
    width: 70px;
    height: 70px;
    border-width: 4px;
  }

  .avatar-inner-mobile {
    font-size: 1.25rem;
  }

  .node-label-mobile {
    font-size: 0.75rem;
    padding: 0.4rem 0.8rem;
    white-space: normal;
    max-width: 120px;
  }

  .node-mobile-bottom-left {
    left: 20%;
  }

  .node-mobile-bottom-right {
    right: 20%;
  }

  .node-mobile-top {
    top: 3%;
  }

  .node-label-mobile {
    max-width: 100px;
  }
}

.network-diagram {
  padding: 3rem 0;
  position: relative;
}

.network-container {
  position: relative;
  width: 100%;
  min-height: 600px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.network-node {
  position: absolute;
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 0.75rem;
  z-index: 10;
}

.node-avatar {
  width: 90px;
  height: 90px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 4px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
  transition: all 0.3s ease;
  position: relative;
}

.node-avatar:hover {
  transform: scale(1.1);
  box-shadow: 0 8px 20px rgba(255, 42, 64, 0.3);
}

.avatar-inner {
  width: 100%;
  height: 100%;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 2.5rem;
  color: #ffffff;
}

.avatar-border-red {
  border: 4px solid #ef4444;
  background: #ffffff;
}

.avatar-border-yellow {
  border: 4px solid #fbbf24;
  background: #ffffff;
}

.avatar-border-green {
  border: 4px solid #10b981;
  background: #ffffff;
}

.avatar-border-purple {
  border: 4px solid #8b5cf6;
  background: #ffffff;
}

.avatar-border-teal {
  border: 4px solid #14b8a6;
  background: #ffffff;
}

.avatar-pink {
  background: linear-gradient(135deg, #ec4899 0%, #db2777 100%);
}

.avatar-blue {
  background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);
}

.avatar-teal {
  background: linear-gradient(135deg, #14b8a6 0%, #0d9488 100%);
}

.avatar-green {
  background: linear-gradient(135deg, #10b981 0%, #059669 100%);
}

.avatar-yellow {
  background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 100%);
}

.avatar-white {
  background: linear-gradient(135deg, #f3f4f6 0%, #e5e7eb 100%);
  color: var(--text-dark);
}

.node-label {
  background: var(--primary-color);
  color: #ffffff;
  padding: 0.6rem 1.2rem;
  border-radius: 24px;
  font-size: 0.9rem;
  font-weight: 600;
  white-space: nowrap;
  box-shadow: 0 4px 12px rgba(255, 42, 64, 0.25);
  text-align: center;
  margin-top: 0.5rem;
}

/* Node Positioning */
.node-center {
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 20;
}

.node-left-top {
  top: 15%;
  left: 25%;
  transform: translate(-50%, -50%);
}

.node-left-middle {
  top: 55%;
  left: 15%;
  transform: translate(-50%, -50%);
}

.node-left-bottom {
  top: 85%;
  left: 30%;
  transform: translate(-50%, -50%);
}

.node-right-top {
  top: 15%;
  right: 25%;
  transform: translate(50%, -50%);
}

.node-right-middle {
  top: 55%;
  right: 15%;
  transform: translate(50%, -50%);
}

.node-right-bottom {
  top: 85%;
  right: 30%;
  transform: translate(50%, -50%);
}

.network-connections-svg {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1;
  pointer-events: none;
}

@media (max-width: 1366px) and (min-width: 768px) {
  .network-connections-svg {
    max-width: 875px;
    left: 50%;
    transform: translateX(-50%);
  }
}

@media (max-width: 991.98px) {
  .network-container {
    min-height: 500px;
  }

  .node-avatar {
    width: 80px;
    height: 80px;
  }

  .avatar-inner {
    font-size: 2rem;
  }

  .node-label {
    font-size: 0.75rem;
    padding: 0.4rem 0.8rem;
  }

  .node-left-top {
    left: 25%;
    top: 12%;
  }

  .node-left-middle {
    left: 12%;
    top: 55%;
  }

  .node-left-bottom {
    left: 30%;
    top: 88%;
  }

  .node-right-top {
    right: 25%;
    top: 12%;
  }

  .node-right-middle {
    right: 12%;
    top: 55%;
  }

  .node-right-bottom {
    right: 28%;
    top: 88%;
  }
}

@media (max-width: 575.98px) {
  .network-container {
    min-height: 400px;
  }

  .node-avatar {
    width: 70px;
    height: 70px;
    border-width: 3px;
  }

  .avatar-inner {
    font-size: 1.75rem;
  }

  .node-label {
    font-size: 0.7rem;
    padding: 0.35rem 0.7rem;
    white-space: normal;
    max-width: 120px;
  }

  .node-left-top,
  .node-left-middle,
  .node-left-bottom {
    left: 5%;
  }

  .node-right-top,
  .node-right-middle,
  .node-right-bottom {
    right: 5%;
  }

  .network-connections-svg {
    opacity: 0.5;
  }

  .network-description {
    padding: 0 1rem;
  }

  .network-diagram {
    padding: 1.5rem 0;
  }
}

/* AI FAQ Section */
.ai-faq-section {
  padding: 70px 0;
  background: #ffffff;
}

@media (max-width: 575.98px) {
  .ai-faq-section {
    padding: 50px 0;
  }

  .ai-faq-section .section-badge {
    font-size: 0.75rem;
    padding: 0.35rem 0.85rem;
  }
}

.ai-faq-accordion {
  display: flex;
  flex-direction: column;
  gap: 1rem;
}

.ai-faq-accordion .accordion-item {
  background: #ffffff;
  border: 1px solid var(--card-border);
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
  transition: all 0.3s ease;
}

.ai-faq-accordion .accordion-item:hover {
  box-shadow: 0 4px 12px rgba(255, 42, 64, 0.15);
  border-color: var(--primary-color);
}

.ai-faq-accordion .accordion-item:focus-within {
  border-color: var(--card-border);
}

.ai-faq-accordion .accordion-item:focus-within:hover {
  border-color: var(--primary-color);
}

.ai-faq-accordion .accordion-button {
  background: #ffffff;
  border: none;
  padding: 1.25rem 1.5rem;
  display: flex;
  align-items: center;
  gap: 1rem;
  font-weight: 600;
  font-size: 0.95rem;
  color: var(--text-dark);
  box-shadow: none;
  transition: all 0.3s ease;
}

.ai-faq-accordion .accordion-button:not(.collapsed) {
  background: #ffffff;
  color: var(--text-dark);
  border-bottom: 1px solid var(--card-border);
}

.ai-faq-accordion .accordion-button:focus {
  box-shadow: none;
}

.ai-faq-accordion .accordion-item:focus-within {
  border-color: var(--card-border);
}

.ai-faq-accordion .accordion-button i {
  color: var(--primary-color);
  font-size: 0.9rem;
  flex-shrink: 0;
  transition: transform 0.3s ease;
}

.ai-faq-accordion .accordion-button:not(.collapsed) i {
  transform: rotate(90deg);
}

.ai-faq-accordion .accordion-button span {
  flex: 1;
  text-align: left;
}

.ai-faq-accordion .accordion-button::after {
  display: none;
}

.ai-faq-accordion .accordion-body {
  padding: 1.25rem 1.5rem 1.5rem 2.5rem;
  color: var(--text-muted);
  font-size: 0.9rem;
  line-height: 1.6;
  background: #ffffff;
}

@media (max-width: 575.98px) {
  .ai-faq-accordion .accordion-button {
    padding: 1rem 1.25rem;
    font-size: 0.9rem;
  }

  .ai-faq-accordion .accordion-body {
    padding: 1rem 1.25rem 1.25rem 2rem;
    font-size: 0.85rem;
  }

  .ai-faq-section .section-title h2 {
    font-size: 1.75rem;
  }

  .ai-faq-section .row.g-4 {
    --bs-gutter-y: 1rem;
  }
}

section.bgGradient{
    background: radial-gradient(circle at top left, #3a8dff 0, #0340b3 45%, #02142e 100%);
}

h1.hero-title span{
    color: #FFB400;
}

    </style>
    
    <!-- HERO SECTION -->
      <section id="ai-hero" class="ai-hero-section bgGradient">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-10 text-center">
              <div class="badge-pill mb-3">
                <i class="fas fa-robot me-2"></i>
                <span>AI Service Platform</span>
              </div>
              <h1 class="text-white mb-4 hero-title">
                Intelligent AI Services That Work 24/7.<br />
                <span class="yellow">Learn. Adapt. Deliver Results.</span>
              </h1>
              <p class="lead text-white mb-4">
                Transform your business with cutting-edge AI solutions that automate workflows, 
                enhance customer experiences, and drive measurable results around the clock.
              </p>
              <div class="d-flex flex-wrap gap-3 justify-content-center">
                <a href="#contact" class="btn btn-primary-custom btn-lg">
                  Get Started with AI Services
                  <i class="fas fa-arrow-right ms-2"></i>
                </a>
                <a href="#ai-features" class="btn btn-outline-custom btn-lg">
                  Explore Our Solutions
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- AI WORKFLOW SECTION -->
      <!-- This section will be updated later if needed -->
      <!--
      <section id="ai-workflow" class="ai-workflow-section">
        <div class="container">
          <div class="row">
            <div class="col-12 text-center mb-4">
              <div class="ai-section-badge mb-3">
                <span>AI Service Platform</span>
              </div>
              <h2 class="mb-4">
                How Our AI Services Work
                <span style="color: var(--primary-color)">For Your Business</span>
              </h2>
              <p class="text-muted mx-auto" style="max-width: 700px">
                Our intelligent AI services follow a streamlined workflow that integrates 
                seamlessly into your existing business processes.
              </p>
            </div>
          </div>

          <div class="row align-items-center g-5">
            <div class="col-lg-7">
              <div class="ai-workflow-diagram">
                <div class="workflow-step step-1">
                  <div class="workflow-node">
                    <i class="fas fa-file-alt"></i>
                    <span>Receive Request</span>
                  </div>
                </div>
                <div class="workflow-arrow">
                  <i class="fas fa-arrow-down"></i>
                </div>
                <div class="workflow-step step-2">
                  <div class="workflow-node">
                    <i class="fas fa-brain"></i>
                    <span>AI Analysis</span>
                  </div>
                </div>
                <div class="workflow-arrow">
                  <i class="fas fa-arrow-down"></i>
                </div>
                <div class="workflow-step step-3">
                  <div class="workflow-node">
                    <i class="fas fa-cogs"></i>
                    <span>Process & Execute</span>
                  </div>
                </div>
                <div class="workflow-arrow">
                  <i class="fas fa-arrow-down"></i>
                </div>
                <div class="workflow-step step-4">
                  <div class="workflow-node">
                    <i class="fas fa-check-circle"></i>
                    <span>Deliver Results</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-5">
              <div class="ai-chat-preview">
                <div class="chat-preview-card">
                  <div class="chat-header">
                    <div class="chat-avatar">
                      <i class="fas fa-robot"></i>
                    </div>
                    <div class="chat-info">
                      <h6 class="mb-0">AI Assistant</h6>
                      <small class="text-muted">Online</small>
                    </div>
                  </div>
                  <div class="chat-messages">
                    <div class="message message-ai">
                      <p>Hello! How can I assist you today?</p>
                    </div>
                    <div class="message message-user">
                      <p>I need help with my project</p>
                    </div>
                    <div class="message message-ai">
                      <p>I'd be happy to help! Let me analyze your requirements...</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row mt-5">
            <div class="col-12">
              <div class="integration-partners">
                <p class="text-center text-muted mb-4 small">Trusted Integrations</p>
                <div class="d-flex flex-wrap justify-content-center align-items-center gap-4">
                  <div class="partner-logo">
                    <i class="fab fa-google"></i>
                    <span>Google</span>
                  </div>
                  <div class="partner-logo">
                    <i class="fab fa-microsoft"></i>
                    <span>Microsoft</span>
                  </div>
                  <div class="partner-logo">
                    <i class="fab fa-slack"></i>
                    <span>Slack</span>
                  </div>
                  <div class="partner-logo">
                    <i class="fab fa-shopify"></i>
                    <span>Shopify</span>
                  </div>
                  <div class="partner-logo">
                    <i class="fab fa-salesforce"></i>
                    <span>Salesforce</span>
                  </div>
                  <div class="partner-logo">
                    <i class="fab fa-hubspot"></i>
                    <span>HubSpot</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      -->

      <!-- AI SERVICES SECTION -->
      <section id="ai-features" class="ai-services-section">
        <div class="container">
          <div class="row">
            <div class="col-12 text-center mb-5">
              <div class="section-eyebrow mb-3">
                <span>What Our AI Services Do</span>
              </div>
              <h2 class="mb-4 section-title">
                AI That's
                <span style="color: var(--primary-color)">Actually Operational</span>
              </h2>
              <p class="text-muted mx-auto" style="max-width: 700px">
                Our AI services plug directly into your business, no-code, real-time, and trained on your systems. 
                From handling customer support to qualifying leads or syncing bookings, our AI agents act like 
                full-time staff across multiple platforms.
              </p>
            </div>
          </div>

          <div class="row g-4">
            <div class="col-md-6 col-lg-3">
              <div class="ai-service-card">
                <div class="service-icon-wrapper service-icon-green">
                  <i class="fab fa-whatsapp"></i>
                </div>
                <div class="service-phone-mockup">
                  <div class="phone-screen phone-green">
                    <div class="phone-content">
                      <div class="phone-header">
                        <i class="fas fa-robot"></i>
                        <span>AI Assistant</span>
                      </div>
                      <div class="phone-messages">
                        <div class="phone-message">Hello! How can I help?</div>
                        <div class="phone-message user-msg">I need support</div>
                        <div class="phone-message">I'm here to assist you...</div>
                      </div>
                    </div>
                  </div>
                </div>
                <h5>WhatsApp AI Agent</h5>
                <p class="service-description">
                  Responds instantly using your live knowledge base, so your team isn't stuck replying to repetitive queries. 
                  Identifies upgrade or cross-sell opportunities from ticket patterns. Reduces human ticket volume and 
                  increases qualified conversions through automated conversations.
                </p>
                <a href="#contact" class="btn btn-primary-custom w-100 mt-2">
                  Request Access
                  <i class="fas fa-arrow-right ms-2"></i>
                </a>
              </div>
            </div>

            <div class="col-md-6 col-lg-3">
              <div class="ai-service-card">
                <div class="service-icon-wrapper service-icon-purple">
                  <i class="fas fa-calendar-alt"></i>
                </div>
                <div class="service-phone-mockup">
                  <div class="phone-screen phone-purple">
                    <div class="phone-content">
                      <div class="phone-header">
                        <i class="fas fa-robot"></i>
                        <span>AI Scheduler</span>
                      </div>
                      <div class="phone-messages">
                        <div class="phone-message">Schedule your appointment</div>
                        <div class="phone-message user-msg">Book meeting</div>
                        <div class="phone-message">Available slots found...</div>
                      </div>
                    </div>
                  </div>
                </div>
                <h5>Calendly AI Agent</h5>
                <p class="service-description">
                  Embeds Calendly booking links directly into AI conversations. Triggers after product inquiries, 
                  support needs, or sales interest. Syncs with CRMs to confirm meetings instantly and reduce friction.
                </p>
                <a href="#contact" class="btn btn-primary-custom w-100 mt-2">
                  Request Access
                  <i class="fas fa-arrow-right ms-2"></i>
                </a>
              </div>
            </div>

            <div class="col-md-6 col-lg-3">
              <div class="ai-service-card">
                <div class="service-icon-wrapper service-icon-yellow">
                  <i class="fas fa-chart-line"></i>
                </div>
                <div class="service-phone-mockup">
                  <div class="phone-screen phone-yellow">
                    <div class="phone-content">
                      <div class="phone-header">
                        <i class="fas fa-robot"></i>
                        <span>AI Analytics</span>
                      </div>
                      <div class="phone-messages">
                        <div class="phone-message">Your analytics report</div>
                        <div class="phone-message user-msg">Show insights</div>
                        <div class="phone-message">Generating insights...</div>
                      </div>
                    </div>
                  </div>
                </div>
                <h5>HubSpot AI Agent</h5>
                <p class="service-description">
                  Captures and syncs lead data from chats directly into HubSpot. Automates follow-ups with workflows 
                  for sales and support teams. Provides real-time insights to boost conversions and customer retention.
                </p>
                <a href="#contact" class="btn btn-primary-custom w-100 mt-2">
                  Request Access
                  <i class="fas fa-arrow-right ms-2"></i>
                </a>
              </div>
            </div>

            <div class="col-md-6 col-lg-3">
              <div class="ai-service-card">
                <div class="service-icon-wrapper service-icon-blue">
                  <i class="fas fa-shopping-cart"></i>
                </div>
                <div class="service-phone-mockup">
                  <div class="phone-screen phone-blue">
                    <div class="phone-content">
                      <div class="phone-header">
                        <i class="fas fa-robot"></i>
                        <span>AI Shopping</span>
                      </div>
                      <div class="phone-messages">
                        <div class="phone-message">Find products easily</div>
                        <div class="phone-message user-msg">Show products</div>
                        <div class="phone-message">Here are recommendations...</div>
                      </div>
                    </div>
                  </div>
                </div>
                <h5>Shopify AI Agent</h5>
                <p class="service-description">
                  Handles product, order, refund, and shipping queries instantly by pulling live data from your store. 
                  Detects customer drop-offs and friction points in the purchase journey. Increases checkout completion 
                  rates and improves retention through faster, smarter post-sale support.
                </p>
                <a href="#contact" class="btn btn-primary-custom w-100 mt-2">
                  Request Access
                  <i class="fas fa-arrow-right ms-2"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- AI BENEFITS SECTION -->
      <section id="ai-benefits" class="ai-benefits-section">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-8 text-center mb-5">
              <div class="section-eyebrow mb-3">
                <span>Benefits</span>
              </div>
              <h2 class="mb-4 section-title">
                Our AI Services Come With
                <span style="color: var(--primary-color)">Tremendous Benefits</span>
              </h2>
              <p class="text-muted mx-auto" style="max-width: 700px">
                Deploy AI services to streamline operations and amplify your business's efficiency. 
                These services optimize processes, reduce delays, and enhance output, ensuring you gain 
                a competitive edge with speed and precision.
              </p>
            </div>
          </div>

          <div class="row g-4">
            <div class="col-md-4">
              <div class="benefit-card">
                <h4 class="benefit-title">1. Customer Support AI Agent</h4>
                <p class="benefit-description">
                  Highlight efficiency, cost savings, and service quality improvements.
                </p>
                <div class="benefit-stats">
                  <div class="stat-box">
                    <div class="stat-number">35%</div>
                    <div class="stat-label">Reduces Support Costs</div>
                  </div>
                  <div class="stat-box">
                    <div class="stat-number">60%</div>
                    <div class="stat-label">Resolve Issues Faster</div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="benefit-card">
                <h4 class="benefit-title">2. Lead Capture AI Agent</h4>
                <p class="benefit-description">
                  Emphasize conversion, qualification speed, and lead pipeline growth.
                </p>
                <div class="benefit-stats">
                  <div class="stat-box">
                    <div class="stat-number">52%</div>
                    <div class="stat-label">Increase Lead Conversions</div>
                  </div>
                  <div class="stat-box">
                    <div class="stat-number">3x</div>
                    <div class="stat-label">Faster Quality Leads</div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="benefit-card">
                <h4 class="benefit-title">3. Sales AI Agent</h4>
                <p class="benefit-description">
                  Focus on revenue acceleration, efficiency, and buyer experience.
                </p>
                <div class="benefit-stats">
                  <div class="stat-box">
                    <div class="stat-number">40%</div>
                    <div class="stat-label">Increase Sales Productivity</div>
                  </div>
                  <div class="stat-box">
                    <div class="stat-number">3.5x</div>
                    <div class="stat-label">ROI Deliver Within a Year</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- AI INDUSTRY SOLUTIONS SECTION -->
      <section id="ai-industry" class="ai-industry-section">
        <div class="container">
          <div class="row">
            <div class="col-12 text-center mb-5">
              <div class="section-eyebrow mb-3">
                <span>Solutions</span>
              </div>
              <h2 class="mb-4 section-title">
                AI Agents Built for
                <span style="color: var(--primary-color)">Every Business Need</span>
              </h2>
              <p class="text-muted mx-auto" style="max-width: 700px">
                Our agents don't just reply, they adapt to your industry and workflow. Whether in healthcare, 
                customer service, or education, our AI agents integrate seamlessly into your operations to 
                deliver speed, scale, and efficiency.
              </p>
            </div>
          </div>

          <div class="row g-4">
            <div class="col-md-4">
              <div class="industry-agent-card">
                <div class="agent-visual-wrapper agent-bg-yellow">
                  <div class="agent-phone-mockup">
                    <div class="agent-phone-screen">
                      <div class="agent-phone-header">
                        <div class="agent-phone-title">
                          <i class="fas fa-headset"></i>
                          <span>Customer Support Agent</span>
                        </div>
                        <div class="agent-status">Online</div>
                      </div>
                      <div class="agent-phone-chat">
                        <div class="agent-chat-status">Connected to AI Agent</div>
                        <div class="agent-message agent-ai-msg">
                          <div class="agent-msg-avatar">S</div>
                          <div class="agent-msg-content">
                            <div class="agent-msg-name">Sophie</div>
                            <div class="agent-msg-text">Hi! I'm here to assist you. Please tell me what went wrong so I can help.</div>
                            <div class="agent-msg-time">02:00 PM</div>
                          </div>
                        </div>
                        <div class="agent-message agent-user-msg">
                          <div class="agent-msg-content">
                            <div class="agent-msg-text">Your delivery team arrived late and damaged the package. I'm quite upset.</div>
                            <div class="agent-msg-time">02:10 PM</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="agent-content">
                  <h4 class="agent-card-title">Healthcare AI Agent</h4>
                  <ul class="agent-features">
                    <li>
                      <i class="fas fa-circle"></i>
                      <span>Manages patient inquiries and appointment scheduling.</span>
                    </li>
                    <li>
                      <i class="fas fa-circle"></i>
                      <span>Provides instant medical info from approved knowledge bases.</span>
                    </li>
                    <li>
                      <i class="fas fa-circle"></i>
                      <span>Reduces staff workload while improving patient experience.</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="industry-agent-card">
                <div class="agent-visual-wrapper agent-bg-green">
                  <div class="agent-phone-mockup">
                    <div class="agent-phone-screen">
                      <div class="agent-phone-header">
                        <div class="agent-phone-title">
                          <i class="fas fa-phone"></i>
                          <span>Call Log Assistant</span>
                        </div>
                        <div class="agent-status">Online</div>
                      </div>
                      <div class="agent-phone-chat">
                        <div class="agent-chat-status">Connected to AI Agent</div>
                        <div class="agent-message agent-ai-msg">
                          <div class="agent-msg-avatar">A</div>
                          <div class="agent-msg-content">
                            <div class="agent-msg-name">Amelia</div>
                            <div class="agent-msg-text">Hi! Just checking in — would you like a summary of your last support call?</div>
                          </div>
                        </div>
                        <div class="agent-message agent-user-msg">
                          <div class="agent-msg-content">
                            <div class="agent-msg-text">Yes please. I need a copy of the conversation for my records.</div>
                            <div class="agent-msg-time">05:16 PM</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="agent-content">
                  <h4 class="agent-card-title">Customer Service AI Agent</h4>
                  <ul class="agent-features">
                    <li>
                      <i class="fas fa-circle"></i>
                      <span>Resolves FAQs instantly across multiple channels.</span>
                    </li>
                    <li>
                      <i class="fas fa-circle"></i>
                      <span>Escalates complex issues with full context.</span>
                    </li>
                    <li>
                      <i class="fas fa-circle"></i>
                      <span>Reduces ticket volume and boosts satisfaction.</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="industry-agent-card">
                <div class="agent-visual-wrapper agent-bg-yellow">
                  <div class="agent-phone-mockup">
                    <div class="agent-phone-screen">
                      <div class="agent-phone-header">
                        <div class="agent-phone-title">
                          <i class="fas fa-comments"></i>
                          <span>Feedback Facilitator</span>
                        </div>
                        <div class="agent-status">Online</div>
                      </div>
                      <div class="agent-phone-chat">
                        <div class="agent-chat-status">Connected to AI Agent</div>
                        <div class="agent-message agent-ai-msg">
                          <div class="agent-msg-avatar">A</div>
                          <div class="agent-msg-content">
                            <div class="agent-msg-name">Ava</div>
                            <div class="agent-msg-text">Thanks for reaching out earlier. Were you satisfied with the support you received?</div>
                            <div class="agent-msg-time">10:39 PM</div>
                          </div>
                        </div>
                        <div class="agent-message agent-user-msg">
                          <div class="agent-msg-content">
                            <div class="agent-msg-text">Yes, the issue was resolved quickly. Great support team!</div>
                            <div class="agent-msg-time">10:10 PM</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="agent-content">
                  <h4 class="agent-card-title">AI Agent for Education</h4>
                  <ul class="agent-features">
                    <li>
                      <i class="fas fa-circle"></i>
                      <span>Answers student questions and provides learning resources.</span>
                    </li>
                    <li>
                      <i class="fas fa-circle"></i>
                      <span>Assists with scheduling and exam reminders.</span>
                    </li>
                    <li>
                      <i class="fas fa-circle"></i>
                      <span>Supports teachers with grading and feedback automation.</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- AI NETWORK SECTION -->
      <section id="ai-network" class="ai-network-section">
        <div class="container">
          <div class="row">
            <div class="col-12 text-center mb-5">
              <div class="section-eyebrow mb-3">
                <span>Agent OS</span>
              </div>
              <h2 class="mb-4 section-title">
                Autonomous Doesn't Mean
                <span style="color: var(--primary-color)">Isolated</span>
              </h2>
              <p class="text-muted mx-auto" style="max-width: 700px">
                Your AI agents share signals, escalate across channels, and optimize workflows together. 
                Think of it as a mesh network of AI, tailored to your business.
              </p>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <!-- Desktop Network Diagram -->
              <div class="network-diagram d-none d-md-block">
                <div class="network-container">
                  <!-- Connection Lines - SVG for precise positioning -->
                  <svg class="network-connections-svg" viewBox="0 0 1000 600" preserveAspectRatio="xMidYMid meet">
                    <!-- Lines from center to all nodes -->
                    <line x1="500" y1="275" x2="160" y2="50" stroke="var(--primary-color)" stroke-width="2" stroke-dasharray="6,4" opacity="0.4"/>
                    <line x1="500" y1="275" x2="50" y2="300" stroke="var(--primary-color)" stroke-width="2" stroke-dasharray="6,4" opacity="0.4"/>
                    <line x1="500" y1="275" x2="230" y2="510" stroke="var(--primary-color)" stroke-width="2" stroke-dasharray="6,4" opacity="0.4"/>
                    <line x1="500" y1="275" x2="840" y2="50" stroke="var(--primary-color)" stroke-width="2" stroke-dasharray="6,4" opacity="0.4"/>
                    <line x1="500" y1="275" x2="950" y2="300" stroke="var(--primary-color)" stroke-width="2" stroke-dasharray="6,4" opacity="0.4"/>
                    <line x1="500" y1="275" x2="765" y2="510" stroke="var(--primary-color)" stroke-width="2" stroke-dasharray="6,4" opacity="0.4"/>
                    
                    <!-- Connections between left nodes (scattered) -->
                    <line x1="160" y1="50" x2="50" y2="300" stroke="var(--primary-color)" stroke-width="2" stroke-dasharray="6,4" opacity="0.25"/>
                    <line x1="50" y1="300" x2="230" y2="510" stroke="var(--primary-color)" stroke-width="2" stroke-dasharray="6,4" opacity="0.25"/>
                    
                    <!-- Connections between right nodes (scattered) -->
                    <line x1="840" y1="50" x2="950" y2="300" stroke="var(--primary-color)" stroke-width="2" stroke-dasharray="6,4" opacity="0.25"/>
                    <line x1="950" y1="300" x2="765" y2="510" stroke="var(--primary-color)" stroke-width="2" stroke-dasharray="6,4" opacity="0.25"/>

                  </svg>

                  <!-- Left Side Agents -->
                  <div class="network-node node-left-top">
                    <div class="node-avatar avatar-border-red">
                      <div class="avatar-inner avatar-pink">
                        <i class="fas fa-user-tie"></i>
                      </div>
                    </div>
                    <div class="node-label">Sales Operation AI Agent</div>
                  </div>

                  <div class="network-node node-left-middle">
                    <div class="node-avatar avatar-border-yellow">
                      <div class="avatar-inner avatar-blue">
                        <i class="fas fa-headset"></i>
                      </div>
                    </div>
                    <div class="node-label">Customer Service AI Agent</div>
                  </div>

                  <div class="network-node node-left-bottom">
                    <div class="node-avatar avatar-border-green">
                      <div class="avatar-inner avatar-teal">
                        <i class="fas fa-users"></i>
                      </div>
                    </div>
                    <div class="node-label">Human Resources AI Agent</div>
                  </div>

                  <!-- Center Node (Human) -->
                  <div class="network-node node-center">
                    <div class="node-avatar avatar-border-purple">
                      <div class="avatar-inner avatar-green">
                        <i class="fas fa-user"></i>
                      </div>
                    </div>
                    <div class="node-label">Cameron Brooks</div>
                  </div>

                  <!-- Right Side Agents -->
                  <div class="network-node node-right-top">
                    <div class="node-avatar avatar-border-yellow">
                      <div class="avatar-inner avatar-yellow">
                        <i class="fas fa-heartbeat"></i>
                      </div>
                    </div>
                    <div class="node-label">Healthcare AI Agent</div>
                  </div>

                  <div class="network-node node-right-middle">
                    <div class="node-avatar avatar-border-teal">
                      <div class="avatar-inner avatar-white">
                        <i class="fas fa-dollar-sign"></i>
                      </div>
                    </div>
                    <div class="node-label">Finance & Banking AI Agent</div>
                  </div>

                  <div class="network-node node-right-bottom">
                    <div class="node-avatar avatar-border-red">
                      <div class="avatar-inner avatar-pink">
                        <i class="fas fa-truck"></i>
                      </div>
                    </div>
                    <div class="node-label">Transportation AI Agent</div>
                  </div>
                </div>
              </div>

              <!-- Mobile Network Diagram (Triangular Layout) -->
              <div class="network-diagram-mobile d-md-none">
                <div class="network-container-mobile">
                  <!-- SVG for triangular connections -->
                  <svg class="network-connections-mobile" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid meet">
                    <!-- Triangle connections -->
                    <line x1="50" y1="15" x2="20" y2="85" stroke="var(--primary-color)" stroke-width="1" stroke-dasharray="4,3" opacity="0.5"/>
                    <line x1="50" y1="15" x2="80" y2="85" stroke="var(--primary-color)" stroke-width="1" stroke-dasharray="4,3" opacity="0.5"/>
                    <line x1="20" y1="85" x2="80" y2="85" stroke="var(--primary-color)" stroke-width="1" stroke-dasharray="4,3" opacity="0.5"/>
                  </svg>

                  <!-- Top Node - Email Triage AI Agent -->
                  <div class="network-node-mobile node-mobile-top">
                    <div class="node-avatar-mobile avatar-border-pink-mobile">
                      <div class="avatar-inner-mobile avatar-pink-mobile">
                        <span>ET</span>
                      </div>
                    </div>
                    <div class="node-label-mobile">Email Triage AI Agent</div>
                  </div>

                  <!-- Bottom Left Node - Order Management AI Agent -->
                  <div class="network-node-mobile node-mobile-bottom-left">
                    <div class="node-avatar-mobile avatar-border-yellow-mobile">
                      <div class="avatar-inner-mobile avatar-yellow-mobile">
                        <span>OM</span>
                      </div>
                    </div>
                    <div class="node-label-mobile">Order Management AI Agent</div>
                  </div>

                  <!-- Bottom Right Node - Sales Operation AI Agent -->
                  <div class="network-node-mobile node-mobile-bottom-right">
                    <div class="node-avatar-mobile avatar-border-purple-mobile">
                      <div class="avatar-inner-mobile avatar-purple-mobile">
                        <span>SO</span>
                      </div>
                    </div>
                    <div class="node-label-mobile">Sales Operation AI Agent</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- FAQ SECTION -->
      <!-- FAQ SECTION -->
<section class="faqs-sec" id="faqs-sec">
    <div class="container">
        <div class="row justify-content-center mb-4">
            <div class="col-lg-9 col-sm-12 text-center">
                <p class="section-eyebrow">FAQs</p>
                <h2 class="section-title">
                    Frequently Asked <span class="blue">Questions</span>
                </h2>
                <p class="section-subtitle">
                    Here are some common questions users ask about our AI Automation Agents.
                </p>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-12 col-sm-12">
                <div class="accordion brand-faq" id="accordionExample">
                    
                    <div class="row gy-4">
                        <div class="col-lg-6 col-sm-12">
                            <!-- FAQ 1 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqOne">
                                What are AI Agents?
                            </button>
                        </h2>
                        <div id="faqOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                AI Agents are intelligent automated systems that perform tasks, make decisions, and interact with users autonomously. They understand context, learn from interactions, and execute workflows without constant human input.
                            </div>
                        </div>
                    </div>
                    <!-- FAQ 2 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqTwo">
                                What kind of tasks can AI Agents handle?
                            </button>
                        </h2>
                        <div id="faqTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                AI Agents can manage customer support, lead qualification, order processing, appointment scheduling, workflow automation, and more. They adapt according to your business needs.
                            </div>
                        </div>
                    </div>
                    <!-- FAQ 3 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqThree">
                                Can I customize my AI Agent?
                            </button>
                        </h2>
                        <div id="faqThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Yes! AI Agents are fully customizable — from workflows and behavior to response style, knowledge base, and integrations. They can match your exact brand voice.
                            </div>
                        </div>
                    </div>
                    <!-- FAQ 4 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqFour">
                                Can AI Agents communicate in multiple languages?
                            </button>
                        </h2>
                        <div id="faqFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Yes, they support multiple languages and can automatically detect and respond in the user's preferred language — perfect for global businesses.
                            </div>
                        </div>
                    </div>
                    <!-- FAQ 5 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqFive">
                                How do AI Agents ensure data accuracy?
                            </button>
                        </h2>
                        <div id="faqFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                They use advanced validation, cross-check information, and continuously learn from corrections. AI Agents escalate to human agents when needed to maintain high accuracy.
                            </div>
                        </div>
                    </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <!-- FAQ 6 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqSix">
                                How do AI Agents work?
                            </button>
                        </h2>
                        <div id="faqSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                They analyze user input, understand intent, fetch relevant data, and generate accurate responses. They integrate smoothly with your systems and improve through machine learning.
                            </div>
                        </div>
                    </div>
                    <!-- FAQ 7 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqSeven">
                                How do AI Agents interact with users?
                            </button>
                        </h2>
                        <div id="faqSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                They interact via chat, email, voice, or integrated apps — offering instant, 24/7 communication while maintaining conversation context.
                            </div>
                        </div>
                    </div>
                    <!-- FAQ 8 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqEight">
                                How do AI Agents integrate with forms?
                            </button>
                        </h2>
                        <div id="faqEight" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                They auto-fill fields, validate inputs, guide users, and send the submitted data directly to your CRM or systems smoothly.
                            </div>
                        </div>
                    </div>
                    <!-- FAQ 9 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqNine">
                                How secure is the data handled by AI Agents?
                            </button>
                        </h2>
                        <div id="faqNine" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                All data is encrypted, access controlled, and fully compliant with standards like GDPR & SOC 2. Your data remains private and protected.
                            </div>
                        </div>
                    </div>
                    <!-- FAQ 10 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqTen">
                                How do AI Agents improve customer service?
                            </button>
                        </h2>
                        <div id="faqTen" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                They reduce wait times, provide instant responses, handle large volumes of queries, ensure consistency, and free human agents for complex tasks.
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


<?php include('templates/footer.php'); ?>