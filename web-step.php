<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="noindex, nofollow" />
  <link rel="icon" type="image/png" href="/img/fav-final.png">
  <title>Multi-Step Form</title>

  <!-- Start of Zendesk Chat Script -->
  <script type="text/javascript">
    window.$zopim || (function (d, s) {
      var z = $zopim = function (c) {
        z._.push(c);
      }, $ = z.s = d.createElement(s),
        e = d.getElementsByTagName(s)[0];

      z.set = function (o) {
        z.set._.push(o);
      };
      z._ = [];
      z.set._ = [];

      $.async = !0;
      $.setAttribute('charset', 'utf-8');
      $.src = 'https://v2.zopim.com/?46s4nS77ONjbb1saytlDvaxrZFQJpC1o';
      z.t = +new Date;
      $.type = 'text/javascript';
      e.parentNode.insertBefore($, e);
    })(document, 'script');

    window.addEventListener("load", () => {
      const waitForZopim = setInterval(() => {
        if (window.$zopim) {
          clearInterval(waitForZopim);

          $zopim(() => {
            $zopim.livechat.setOnUnreadMsgs((count) => {
              if (count >= 1) {
                $zopim.livechat.window.show();
              }
            });
          });
        }
      }, 100);
    });
  </script>
  <!-- End of Zendesk Chat Script -->

  <link rel="preload" href="/fonts/WFVisualSansVF.ttf" as="font" crossorigin>
  <style>
    @font-face {
      font-family: 'wfFont';
      src: url('../fonts/WFVisualSansVF.ttf') format('truetype');
      font-display: swap;
    }
  </style>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

  <style>
    .logo img {
      width: 100%;
      max-width: 200px;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      min-height: 100vh;
      overflow-x: hidden;
    }

    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    p,
    a,
    ul,
    li,
    ol,
    div,
    strong,
    span,
    button,
    nav,
    header,
    footer {
      font-family: 'wfFont';
    }

    .step-container {
      min-height: 100vh;
      background: radial-gradient(circle at top left, #3a8dff 0, #0340b3 45%, #02142e 100%);
      display: none;
      flex-direction: column;
      position: relative;
      color: white;
      position: relative;
    }

    .step-container.active {
      display: flex;
    }

    /* Header Section */
    .header-section {
      padding: 20px 30px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .logo {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .logo-icon {
      width: 50px;
      height: 50px;
      background: rgba(255, 255, 255, 0.2);
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 24px;
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.3);
    }

    .logo-text {
      font-size: 1.5rem;
      font-weight: 700;
      letter-spacing: 1px;
    }

    .timer {
      background: rgba(255, 255, 255, 0.15);
      backdrop-filter: blur(10px);
      padding: 12px 25px;
      border-radius: 50px;
      font-size: 1.2rem;
      font-weight: 600;
      border: 1px solid rgba(255, 255, 255, 0.3);
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .timer i {
      font-size: 1.3rem;
    }

    /* Main Content Section */
    .main-content {
      flex: 1;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 20px;
    }

    .step-content {
      width: 100%;
      max-width: 600px;
      text-align: center;
    }

    .step-title {
      font-size: 2rem;
      font-weight: 600;
      margin-bottom: 30px;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
    }

    .form-control-custom {
      background: rgba(255, 255, 255, 0.15);
      border: 2px solid rgba(255, 255, 255, 0.3);
      border-radius: 15px;
      padding: 18px 25px;
      font-size: 1.1rem;
      color: white;
      backdrop-filter: blur(10px);
      transition: all 0.3s ease;
    }

    .form-control-custom::placeholder {
      color: rgba(255, 255, 255, 0.7);
    }

    .form-control-custom:focus {
      background: rgba(255, 255, 255, 0.25);
      border-color: white;
      box-shadow: 0 0 20px rgba(255, 255, 255, 0.3);
      color: white;
      outline: none;
    }

    .form-select-custom {
      background: rgba(255, 255, 255, 0.15) url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='white' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e") no-repeat right 1rem center/16px 12px;
      border: 2px solid rgba(255, 255, 255, 0.3);
      border-radius: 15px;
      padding: 18px 25px;
      font-size: 1.1rem;
      color: white;
      backdrop-filter: blur(10px);
      transition: all 0.3s ease;
      cursor: pointer;
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none;
    }

    .form-select-custom option {
      background: #1e3a8a;
      color: white;
    }

    .form-select-custom:focus {
      background-color: rgba(255, 255, 255, 0.25);
      border-color: white;
      box-shadow: 0 0 20px rgba(255, 255, 255, 0.3);
      outline: none;
    }

    /* Navigation Arrows */
    .navigation-section {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 0px 1.5rem;
      position: absolute;
      top: 50%;
      transform: translate(0, -50%);
      width: 100%;
    }

    .nav-arrow {
      width: 60px;
      height: 60px;
      background: rgba(255, 255, 255, 0.2);
      border: 2px solid rgba(255, 255, 255, 0.4);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.5rem;
      color: white;
      cursor: pointer;
      transition: all 0.3s ease;
      backdrop-filter: blur(10px);
    }

    .nav-arrow:hover {
      background: rgba(255, 255, 255, 0.4);
      transform: scale(1.1);
      box-shadow: 0 0 30px rgba(255, 255, 255, 0.4);
    }

    .nav-arrow:disabled {
      opacity: 0.3;
      cursor: not-allowed;
    }

    .nav-arrow:disabled:hover {
      transform: none;
      box-shadow: none;
      background: rgba(255, 255, 255, 0.2);
    }

    /* Step Indicator */
    .step-indicator {
      text-align: center;
      padding-bottom: 30px;
    }

    .step-number {
      display: inline-block;
      background: rgba(255, 255, 255, 0.2);
      padding: 15px 40px;
      border-radius: 50px;
      font-size: 1.2rem;
      font-weight: 600;
      border: 2px solid rgba(255, 255, 255, 0.3);
      backdrop-filter: blur(10px);
    }

    .step-dots {
      display: flex;
      justify-content: center;
      gap: 12px;
      margin-top: 15px;
    }

    .step-dot {
      width: 12px;
      height: 12px;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.3);
      transition: all 0.3s ease;
    }

    .step-dot.active {
      background: white;
      transform: scale(1.3);
      box-shadow: 0 0 15px rgba(255, 255, 255, 0.5);
    }

    /* Responsive Design */
    @media (max-width: 768px) {
      .header-section {
        padding: 15px 20px;
      }

      .logo-icon {
        width: 40px;
        height: 40px;
        font-size: 20px;
      }

      .logo-text {
        font-size: 1.2rem;
      }

      .timer {
        padding: 10px 18px;
        font-size: 1rem;
      }

      .step-title {
        font-size: 1.5rem;
        margin-bottom: 25px;
      }

      .form-control-custom,
      .form-select-custom {
        padding: 15px 20px;
        font-size: 1rem;
      }

      .nav-arrow {
        width: 50px;
        height: 50px;
        font-size: 1.2rem;
      }

      .step-number {
        padding: 12px 30px;
        font-size: 1rem;
      }
    }

    @media (max-width: 576px) {
      .header-section {
        padding: 12px 15px;
      }

      .logo-text {
        display: none;
      }

      .timer {
        padding: 8px 15px;
        font-size: 0.9rem;
      }

      .step-title {
        font-size: 1.3rem;
      }

      .nav-arrow {
        width: 45px;
        height: 45px;
        font-size: 1rem;
      }

      .navigation-section {
        padding: 15px 20px;
      }

      .step-content {
        max-width: 250px;
      }

      .main-content {
        padding-top: 0rem;
        padding-bottom: 2rem;
      }
    }

    /* Animation */
    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(20px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .step-container.active .step-content {
      animation: fadeIn 0.5s ease-out;
      z-index: 2;
    }
  </style>
</head>

<body>
<?php
$businessName = isset($_GET['business_name']) ? htmlspecialchars($_GET['business_name']) : '';
?>

  <!-- Global Alert Container -->
  <div class="container position-fixed top-0 start-50 translate-middle-x p-3" style="z-index: 1055; max-width: 600px;">
    <div id="formAlert"></div>
  </div>

  <!-- Multi-step Form -->
  <form id="multiStepForm" method="post" novalidate>

    <!-- Step 1 -->
    <div class="step-container active" id="step1">
      <div class="header-section">
        <div class="logo">
          <a href="index.php">
            <img src="/img/DesignCentura_final-02.svg" alt="Design Centura logo">
          </a>
        </div>
        <div class="timer">
          <i class="bi bi-clock-fill"></i>
          <span id="timer1">10:00</span>
        </div>
      </div>

      <div class="main-content">
        <div class="step-content">
          <h2 class="step-title">Enter Your Company Name</h2>
          <input type="text"
                 class="form-control form-control-custom w-100"
                 placeholder="Company Name"
                 id="input1"
                 value="<?php echo $businessName; ?>"
                 name="company_name">
        </div>
      </div>

      <div class="navigation-section">
        <button type="button" class="nav-arrow" disabled>
          <i class="bi bi-chevron-left"></i>
        </button>
        <button type="button" class="nav-arrow" onclick="nextStep(1)">
          <i class="bi bi-chevron-right"></i>
        </button>
      </div>

      <div class="step-indicator">
        <!--<div class="step-number">Step 1 of 6</div>-->
        <div class="step-dots">
          <div class="step-dot active"></div>
          <div class="step-dot"></div>
          <div class="step-dot"></div>
          <div class="step-dot"></div>
          <div class="step-dot"></div>
          <div class="step-dot"></div>
        </div>
      </div>
    </div>

    <!-- Step 2 -->
    <div class="step-container" id="step2">
      <div class="header-section">
        <div class="logo">
          <a href="index.php">
            <img src="img/DesignCentura_final-02.svg" alt="Design Centura logo">
          </a>
        </div>
        <div class="timer">
          <i class="bi bi-clock-fill"></i>
          <span id="timer2">10:00</span>
        </div>
      </div>

      <div class="main-content">
        <div class="step-content">
          <h2 class="step-title">Enter Slogan</h2>
          <input type="text"
                 class="form-control form-control-custom w-100"
                 placeholder="Slogan (optional)"
                 id="input2"
                 name="slogan">
        </div>
      </div>

      <div class="navigation-section">
        <button type="button" class="nav-arrow" onclick="prevStep(2)">
          <i class="bi bi-chevron-left"></i>
        </button>
        <button type="button" class="nav-arrow" onclick="nextStep(2)">
          <i class="bi bi-chevron-right"></i>
        </button>
      </div>

      <div class="step-indicator">
        <!--<div class="step-number">Step 2 of 6</div>-->
        <div class="step-dots">
          <div class="step-dot"></div>
          <div class="step-dot active"></div>
          <div class="step-dot"></div>
          <div class="step-dot"></div>
          <div class="step-dot"></div>
          <div class="step-dot"></div>
        </div>
      </div>
    </div>

    <!-- Step 3 (with Select Dropdown) -->
    <div class="step-container" id="step3">
      <div class="header-section">
        <div class="logo">
          <a href="index.php">
            <img src="img/DesignCentura_final-02.svg" alt="Design Centura logo">
          </a>
        </div>
        <div class="timer">
          <i class="bi bi-clock-fill"></i>
          <span id="timer3">10:00</span>
        </div>
      </div>

      <div class="main-content">
        <div class="step-content">
          <h2 class="step-title">Select Industry</h2>
          <select class="form-select form-select-custom w-100"
                  id="input3"
                  name="industry">
            <option value="" selected disabled>Select Industry (optional)</option>
            <option value="accounting">Accounting & Finance</option>
            <option value="adventure">Adventure & Outdoor</option>
            <option value="agriculture">Agriculture & Farming</option>
            <option value="art">Art & Photography</option>
            <option value="attorney">Attorney & Legal</option>
            <option value="automotive">Automotive</option>
            <option value="aviation">Aviation & Marine</option>
            <option value="business">Business & Consulting</option>
            <option value="children">Children</option>
            <option value="church">Church & Religious</option>
            <option value="cleaning">Cleaning Services</option>
            <option value="communications">Communications</option>
            <option value="community">Community & Foundations</option>
            <option value="computer">Computer & Networking</option>
            <option value="construction">Construction</option>
            <option value="cosmetics">Cosmetics & Jewelry</option>
            <option value="dating">Dating</option>
            <option value="dental">Dental</option>
            <option value="design">Design & Creative Services</option>
            <option value="eco">Eco-Friendly/Green</option>
            <option value="education">Education</option>
            <option value="entertainment">Entertainment & Media</option>
            <option value="events">Events</option>
            <option value="family">Family</option>
            <option value="fashion">Fashion & Apparel</option>
            <option value="fitness">Fitness & Physical Training</option>
            <option value="food">Food & Beverages</option>
            <option value="furniture">Furniture & Interior</option>
            <option value="games">Games</option>
            <option value="healthcare">Healthcare & Physician</option>
            <option value="general">General</option>
            <option value="mortgage">Mortgage & Real Estate</option>
            <option value="nutrition">Nutrition & life style</option>
            <option value="pets">Pets & Animals</option>
            <option value="pharmaceutical">Pharmaceutical & Bio Tech</option>
            <option value="politics">Politics</option>
            <option value="pool">Pool & Hot Tubs</option>
            <option value="printing">Printing & Publishing</option>
            <option value="restaurant">Restaurant</option>
            <option value="retail">Retail</option>
            <option value="security">Security</option>
            <option value="services">Services</option>
            <option value="spa">Spa & Salon</option>
            <option value="sports">Sports</option>
            <option value="staffing">Staffing & Recruiting</option>
            <option value="technology">Technology</option>
            <option value="travel">Travel & Hospitality</option>
          </select>
        </div>
      </div>

      <div class="navigation-section">
        <button type="button" class="nav-arrow" onclick="prevStep(3)">
          <i class="bi bi-chevron-left"></i>
        </button>
        <button type="button" class="nav-arrow" onclick="nextStep(3)">
          <i class="bi bi-chevron-right"></i>
        </button>
      </div>

      <div class="step-indicator">
        <!--<div class="step-number">Step 3 of 6</div>-->
        <div class="step-dots">
          <div class="step-dot"></div>
          <div class="step-dot"></div>
          <div class="step-dot active"></div>
          <div class="step-dot"></div>
          <div class="step-dot"></div>
          <div class="step-dot"></div>
        </div>
      </div>
    </div>

    <!-- Step 4 (Key Word) -->
    <div class="step-container" id="step4">
      <div class="header-section">
        <div class="logo">
          <a href="index.php">
            <img src="img/DesignCentura_final-02.svg" alt="Design Centura logo">
          </a>
        </div>
        <div class="timer">
          <i class="bi bi-clock-fill"></i>
          <span id="timer4">10:00</span>
        </div>
      </div>

      <div class="main-content">
        <div class="step-content">
          <h2 class="step-title">Enter Your Keyword</h2>
          <input type="text"
                 class="form-control form-control-custom w-100"
                 placeholder="Your Keyword"
                 id="input4"
                 name="keyword">
        </div>
      </div>

      <div class="navigation-section">
        <button type="button" class="nav-arrow" onclick="prevStep(4)">
          <i class="bi bi-chevron-left"></i>
        </button>
        <button type="button" class="nav-arrow" onclick="nextStep(4)">
          <i class="bi bi-chevron-right"></i>
        </button>
      </div>

      <div class="step-indicator">
        <!--<div class="step-number">Step 4 of 6</div>-->
        <div class="step-dots">
          <div class="step-dot"></div>
          <div class="step-dot"></div>
          <div class="step-dot"></div>
          <div class="step-dot active"></div>
          <div class="step-dot"></div>
          <div class="step-dot"></div>
        </div>
      </div>
    </div>

    <!-- Step 5 (Email - REQUIRED) -->
    <div class="step-container" id="step5">
      <div class="header-section">
        <div class="logo">
          <a href="index.php">
            <img src="img/DesignCentura_final-02.svg" alt="Design Centura logo">
          </a>
        </div>
        <div class="timer">
          <i class="bi bi-clock-fill"></i>
          <span id="timer5">10:00</span>
        </div>
      </div>

      <div class="main-content">
        <div class="step-content">
          <h2 class="step-title">Enter Your Email Address</h2>
          <input type="email"
                 class="form-control form-control-custom w-100"
                 placeholder="Your Email Address"
                 id="input5"
                 name="email"
                 required>
        </div>
      </div>

      <div class="navigation-section">
        <button type="button" class="nav-arrow" onclick="prevStep(5)">
          <i class="bi bi-chevron-left"></i>
        </button>
        <button type="button" class="nav-arrow" onclick="nextStep(5)">
          <i class="bi bi-chevron-right"></i>
        </button>
      </div>

      <div class="step-indicator">
        <!--<div class="step-number">Step 5 of 6</div>-->
        <div class="step-dots">
          <div class="step-dot"></div>
          <div class="step-dot"></div>
          <div class="step-dot"></div>
          <div class="step-dot"></div>
          <div class="step-dot active"></div>
          <div class="step-dot"></div>
        </div>
      </div>
    </div>

    <!-- Step 6 (Phone Number - REQUIRED) -->
    <div class="step-container" id="step6">
      <div class="header-section">
        <div class="logo">
          <a href="index.php">
            <img src="img/DesignCentura_final-02.svg" alt="Design Centura logo">
          </a>
        </div>
        <div class="timer">
          <i class="bi bi-clock-fill"></i>
          <span id="timer6">10:00</span>
        </div>
      </div>

      <div class="main-content">
        <div class="step-content">
          <h2 class="step-title">Enter Your Phone Number (Optional)</h2>
          <input type="tel"
                 class="form-control form-control-custom w-100"
                 placeholder="Phone Number (Optional)"
                 id="input6"
                 name="phone">
        </div>
      </div>

      <div class="navigation-section">
        <button type="button" class="nav-arrow" onclick="prevStep(6)">
          <i class="bi bi-chevron-left"></i>
        </button>
        <button type="submit" class="nav-arrow">
          <i class="bi bi-chevron-right"></i>
        </button>
      </div>

      <div class="step-indicator">
        <!--<div class="step-number">Step 6 of 6</div>-->
        <div class="step-dots">
          <div class="step-dot"></div>
          <div class="step-dot"></div>
          <div class="step-dot"></div>
          <div class="step-dot"></div>
          <div class="step-dot"></div>
          <div class="step-dot active"></div>
        </div>
      </div>
    </div>

  </form>

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
  // Timer functionality - (value currently set to 20 minutes)
  let totalSeconds = 20 * 60;
  let timerInterval;

  function startTimer() {
    updateTimerDisplay();
    timerInterval = setInterval(updateTimer, 1000);
  }

  function updateTimer() {
    if (totalSeconds > 0) {
      totalSeconds--;
      updateTimerDisplay();
    } else {
      clearInterval(timerInterval);
      alert('Time is up!');
    }
  }

  function updateTimerDisplay() {
    const minutes = Math.floor(totalSeconds / 60);
    const seconds = totalSeconds % 60;

    const timeString =
      String(minutes).padStart(2, '0') + ':' +
      String(seconds).padStart(2, '0');

    for (let i = 1; i <= 6; i++) {
      const el = document.getElementById('timer' + i);
      if (el) {
        el.textContent = timeString;
      }
    }
  }

  // Start timer when page loads
  startTimer();

  function showAlert(type, message) {
    $('#formAlert').html(
      '<div class="alert alert-' + type + ' alert-dismissible fade show" role="alert">' +
      message +
      '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>' +
      '</div>'
    );
  }

  // Step validation – now step 5 = email, step 6 = phone
  function validateStep(step) {
    if (step === 5) {
      const email = $('#input5').val().trim();
      if (!email) {
        showAlert('danger', 'Please enter your email address.');
        $('#input5').focus();
        return false;
      }

      const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailPattern.test(email)) {
        showAlert('danger', 'Please enter a valid email address.');
        $('#input5').focus();
        return false;
      }
    }

    // if (step === 6) {
    //   const phone = $('#input6').val().trim();
    //   if (!phone) {
    //     showAlert('danger', 'Please enter your phone number.');
    //     $('#input6').focus();
    //     return false;
    //   }
    // }

    return true;
  }

  function nextStep(currentStep) {
    // moving forward from step 5 -> validate step 5
    if (currentStep === 5 && !validateStep(5)) {
      return;
    }

    if (currentStep < 6) {
      $('#step' + currentStep).removeClass('active');
      $('#step' + (currentStep + 1)).addClass('active');
    }
  }

  function prevStep(currentStep) {
    if (currentStep > 1) {
      $('#step' + currentStep).removeClass('active');
      $('#step' + (currentStep - 1)).addClass('active');
    }
  }

  // AJAX submit
  function submitForm() {
    // validate step 6 before submit
    // if (!validateStep(6)) {
    //   return;
    // }

    const $submitBtn = $('#step6 .nav-arrow[type="submit"]');
    $submitBtn.prop('disabled', true);

    $.ajax({
      url: 'web_step_form.php',
      type: 'POST',
      data: $('#multiStepForm').serialize(),
      dataType: 'json',
      success: function (response) {
        console.log('JSON response from PHP:', response);

        if (response && response.status === 'success') {
          window.location.href = 'thank-you.php';
        } else {
          showAlert(
            'danger',
            (response && response.message) || 'Something went wrong. Please try again.'
          );
        }
      },
      error: function (jqXHR, textStatus, errorThrown) {
        console.log('AJAX error status:', jqXHR.status);
        console.log('AJAX textStatus:', textStatus);
        console.log('AJAX errorThrown:', errorThrown);
        console.log('AJAX raw response:', jqXHR.responseText);

        showAlert(
          'danger',
          'Unexpected server response. Please try again.'
        );
      },
      complete: function () {
        $submitBtn.prop('disabled', false);
      }
    });
  }

  // Single submit handler
  $(function () {
    $('#multiStepForm').on('submit', function (e) {
      e.preventDefault();
      sendTagsToZopim();
      submitForm();
    });

    // Keyboard navigation
    document.addEventListener('keydown', function (e) {
      const activeStep = document.querySelector('.step-container.active');
      if (!activeStep) return;

      const stepId = activeStep.id;
      const currentStep = parseInt(stepId.replace('step', ''), 10);

      if (e.key === 'ArrowRight' && currentStep < 6) {
        nextStep(currentStep);
      } else if (e.key === 'ArrowLeft' && currentStep > 1) {
        prevStep(currentStep);
      }
    });
  });

  function sendTagsToZopim() {
    let $form = $('#multiStepForm');

    // Handle input, textarea, and select
    $form.find('input, textarea, select').each(function () {
      let $field = $(this);
      let name = $field.attr('name');
      if (!name) return;

      let cleanName = name.replace(/\[\]/, '')
                          .replace(/_/g, ' ')
                          .replace(/\b\w/g, c => c.toUpperCase());

      let value = '';

      let type = $field.attr('type');

      if (type === 'checkbox') {
        if (name.endsWith('[]')) {
          // checkbox arrays
          let checkedValues = $(`input[name="${name}"]:checked`)
                              .map(function () { return $(this).val(); })
                              .get();
          value = checkedValues.length ? checkedValues.join(', ') : 'None';
        } else {
          value = $field.is(':checked') ? $field.val() : 'Unchecked';
        }
      } else if (type === 'range') {
        value = $field.val();
      } else {
        value = $field.val();
      }

      let tag = `${cleanName}: ${value}`;

      if (typeof $zopim !== 'undefined' && $zopim.livechat) {
        $zopim(function () {
          $zopim.livechat.addTags(tag);
        });
      }

      console.log(tag); // For debugging
    });
  }
</script>

</body>
</html>
