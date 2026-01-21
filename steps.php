<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Design Brief Steps</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <link rel="icon" type="image/x-icon" href="img/favicon.svg">
  
<!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
window.$zopim || (function(d, s) {
    var z = $zopim = function(c) {
        z._.push(c);
    }, $ = z.s = d.createElement(s),
    e = d.getElementsByTagName(s)[0];

    z.set = function(o) {
        z.set._.push(o);
    };

    z._ = [];         /* FIXED */
    z.set._ = [];     /* FIXED */

    $.async = !0;
    $.setAttribute('charset', 'utf-8');
    $.src = 'https://v2.zopim.com/?46s4nS77ONjbb1saytlDvaxrZFQJpC1o'; /* FIX also: add https:// */
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
<!--End of Zopim Live Chat Script-->


  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"/>
  <!-- Inter font (optional) -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

  <style>
    :root{
      --primary:#196BFF;
      --text-main:#111827;
      --text-muted:#6b7280;
      --bg-light:#f8fafc;
      --border:#e5e7eb;
      --radius-pill:999px;
    }
    
    @font-face {
      font-family: 'wfFont'; 
      src: url('fonts/WFVisualSansVF.ttf');
    }
    
    body, h1, h2, h3, h4, h5, h6, p, a, ul, li, ol, div, strong, span, button, nav, header, footer, input, textarea{
          font-family: 'wfFont'; 
      }

    *{box-sizing:border-box;}

    body{
      font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Helvetica,Arial,sans-serif;
      color:var(--text-main);
      background:#ffffff;
      line-height:1.6;
      margin:0;
    }

    /* Fixed header & footer spacing */
    header{
      position:fixed;
      top:0;
      left:0;
      right:0;
      z-index:1030;
      background:#fff;
      border-bottom:1px solid var(--border);
    }
    header .navbar-brand{
      font-weight:700;
      letter-spacing:.06em;
      font-size:1.25rem;
      color:var(--primary);
    }
    header .navbar-brand > img{
        height: 34px;
        width: auto;
        object-fit: cover;
    }
    header .navbar-brand span{
      color:#222;
      font-weight:500;
    }
    .step-header a.small{
      color: #000;
      font-size:1rem;
      font-weight:600;
      text-decoration:none;
    }
    .step-header a > i{
        color:var(--primary);
    }

    footer.app-footer{
      position:fixed;
      bottom:0;
      left:0;
      right:0;
      border-top:1px solid var(--border);
      background:#fff;
      z-index:1030;
    }

    .main-wrapper{
      padding-top:80px;   /* header height */
      padding-bottom:90px;/* footer height */
    }

    /* Steps */
    section.step-section{
      padding:60px 0;
    }
    @media (max-width: 650px){
      section.step-section{
        padding:40px 0;
      }
      .main-wrapper{
          height: 100%;
      }
      .height-100{
          height: 100%;
      }
      #step-2 .row > .col-lg-2, #step-4 .row > .col-lg-3, #step-5 .row > .col-lg-3{
          width: 50%;
      }
    }

    .step-title{
      font-weight:700;
      text-align:center;
      margin-bottom:32px;
    }

    /* Inputs */
    .pill-input{
      border-radius:var(--radius-pill);
      padding:0.85rem 1.5rem;
      border:1px solid var(--border);
      font-size:.95rem;
    }
    .pill-input:focus{
      outline:none;
      box-shadow:0 0 0 0.1rem rgba(25,107,255,.25);
      border-color:var(--primary);
    }

    /* Shared choice-card base (Step 2, 4, 5) */
    .choice-card{
      position:relative;
      display:block;
      border-radius: 1rem;
      border:1px solid var(--border);
      background:#fff;
      cursor:pointer;
      transition:all .18s ease;
        min-height: 130px;
        height: 100%;
    }
    .choice-card:hover{
      box-shadow:0 10px 25px rgba(15,23,42,.08);
      transform:translateY(-2px);
    }
    .choice-card.active{
      border-color:var(--primary);
      box-shadow:0 0 0 2px rgba(25,107,255,.12);
      background:#f3f6ff;
    }
    .choice-card input[type="checkbox"]{
      display:none;
    }

    /* Check badge (selected state) */
    .check-badge{
      position:absolute;
      top:9px;
      right:11px;
      width:24px;
      height:24px;
      border-radius:50%;
      background: linear-gradient(135deg, #3b82f6, #1d4ed8);
      color:#fff;
      font-size:13px;
      display:none;
      align-items:center;
      justify-content:center;
      box-shadow:0 2px 4px rgba(15,23,42,.25);
    }
    .choice-card.active .check-badge{
      display:flex;
    }

    /* Option tiles (step 2) */
    .option-tile{
      padding: 1rem;
      text-align:center;
      align-content: center;
    }
    
    .option-tile .icon-circle{
      width:65px;
      height:65px;
      border-radius:50%;
      padding:2px; /* IMPORTANT */
      background:linear-gradient(135deg, #3b82f6, #1d4ed8); /* GRADIENT BORDER */
      display:flex;
      align-items:center;
      justify-content:center;
      margin:0 auto .6rem;
    }
    
    .option-tile .icon-circle i{
      font-size:1.8rem;
      background:linear-gradient(135deg, #3b82f6, #1d4ed8); /* GRADIENT ICON COLOR */
      -webkit-background-clip:text;
      /*-webkit-text-fill-color:transparent;*/
      background-clip:text;
      color:#fff;
    }
    
    .option-tile .icon-circle::before{
      content:"";
      position:absolute;
      inset:0;
      border-radius:50%;
    }

  
    .option-tile-title{
      font-size:.9rem;
      font-weight:600;
    }
    .option-tile small{
      display:block;
      color:var(--text-muted);
      font-size:.78rem;
    }

    /* Color swatches (step 4) */
    .color-grid{
      display:grid;
      grid-template-columns:repeat(auto-fit,minmax(140px,1fr));
      gap:16px;
    }
    .color-box{
      overflow:hidden;
    }
    .color-cell{flex:1;}
    .color-label{
      padding:.55rem .9rem .8rem;
      font-size:.85rem;
      font-weight:600;
      text-align:center;
    }

    .c-red .color-cell:nth-child(1){background:#ffccd1;}
    .c-red .color-cell:nth-child(2){background:#ff7a86;}
    .c-red .color-cell:nth-child(3){background:#e03131;}

    .c-pink .color-cell:nth-child(1){background:#ffe0f2;}
    .c-pink .color-cell:nth-child(2){background:#ff87d4;}
    .c-pink .color-cell:nth-child(3){background:#d6336c;}

    .c-purple .color-cell:nth-child(1){background:#e5d9ff;}
    .c-purple .color-cell:nth-child(2){background:#845ef7;}
    .c-purple .color-cell:nth-child(3){background:#5f3dc4;}

    .c-blue .color-cell:nth-child(1){background:#d0ebff;}
    .c-blue .color-cell:nth-child(2){background:#4dabf7;}
    .c-blue .color-cell:nth-child(3){background:#1864ab;}

    .c-aqua .color-cell:nth-child(1){background:#c5f6fa;}
    .c-aqua .color-cell:nth-child(2){background:#22b8cf;}
    .c-aqua .color-cell:nth-child(3){background:#0b7285;}

    .c-green .color-cell:nth-child(1){background:#d3f9d8;}
    .c-green .color-cell:nth-child(2){background:#69db7c;}
    .c-green .color-cell:nth-child(3){background:#2b8a3e;}

    .c-orange .color-cell:nth-child(1){background:#ffe8cc;}
    .c-orange .color-cell:nth-child(2){background:#ffa94d;}
    .c-orange .color-cell:nth-child(3){background:#d9480f;}

    .c-grey .color-cell:nth-child(1){background:#f1f3f5;}
    .c-grey .color-cell:nth-child(2){background:#adb5bd;}
    .c-grey .color-cell:nth-child(3){background:#343a40;}

    .c-yellow .color-cell:nth-child(1){background:#fff3bf;}
    .c-yellow .color-cell:nth-child(2){background:#ffd43b;}
    .c-yellow .color-cell:nth-child(3){background:#f08c00;}

    .c-brown .color-cell:nth-child(1){background:#f3e5d7;}
    .c-brown .color-cell:nth-child(2){background:#c19977;}
    .c-brown .color-cell:nth-child(3){background:#7b4b27;}

    .c-designer .color-cell:nth-child(1){background:#ffd43b;}
    .c-designer .color-cell:nth-child(2){background:#51cf66;}
    .c-designer .color-cell:nth-child(3){background:#4dabf7;}

    /* Logo type cards (step 5) */
    .logo-type-card{
      overflow:hidden;
      padding:0;
    }
 
    .logo-type-card-body{
      padding:.9rem .95rem 1.05rem;
      text-align:center;
      font-size:.9rem;
      font-weight:600;
    }

    /* Sliders (step 3) */
    .style-row{
      margin-bottom:1.2rem;
    }
    .style-label-left,
    .style-label-right{
      font-size:.85rem;
      font-weight:500;
    }
    .style-label-left{text-align:left;}
    .style-label-right{text-align:right;}

    input[type=range].style-range{
      -webkit-appearance:none;
      width:100%;
      height: 12px;
      border-radius:999px;
      background:#d1d5db;
      outline:none;
    }
    input[type=range].style-range::-webkit-slider-thumb{
      -webkit-appearance:none;
      appearance:none;
      width:18px;
      height:18px;
      border-radius:50%;
      background:var(--primary);
      cursor:pointer;
      border:none;
      box-shadow:0 0 0 4px rgba(25,107,255,.18);
    }
    input[type=range].style-range::-moz-range-thumb{
      width:18px;
      height:18px;
      border-radius:50%;
      background:var(--primary);
      cursor:pointer;
      border:none;
      box-shadow:0 0 0 4px rgba(25,107,255,.18);
    }

    /* Thank you cards (step 7) */
    .thank-card{
      border-radius:1.25rem;
      border:1px solid var(--border);
      overflow:hidden;
      background:#fff;
      box-shadow:0 10px 25px rgba(15,23,42,.04);
      margin-bottom:1.5rem;
      height:100%;
      display:flex;
      flex-direction:column;
    }
    .thank-card img{
      width:100%;
      display:block;
    }
    .thank-card-body{
      padding:1.1rem 1.25rem 1.4rem;
      flex:1;
      display:flex;
      flex-direction:column;
      justify-content:space-between;
    }
    .thank-card-body h5{
      font-weight:600;
      margin-bottom:.4rem;
    }
    .thank-card-body p{
      font-size:.9rem;
      color:var(--text-muted);
      margin-bottom:.8rem;
    }

    /* Footer navigation buttons */
    .step-nav-btn{
      border-radius:var(--radius-pill);
      padding:.65rem 1.5rem;
      font-size:.9rem;
      font-weight:600;
    }
    .btn-primary-custom{
      background: linear-gradient(135deg, #3b82f6, #1d4ed8);
      border-color:var(--primary);
      color:#fff;
    }
    .btn-primary-custom:hover{
      background: linear-gradient(135deg, #60a5fa, #2563eb);
      border-color: var(--primary);
      color:#fff;
    }
    .btn-outline-custom{
      border-color: var(--primary);
      color: var(--primary);
      background: #fff;
      transition: all .3s ease;
    }
    .btn-outline-custom:hover{
      background: linear-gradient(135deg, #60a5fa, #2563eb);
      color: #fff;
    }

    /* Custom modal for "Other" industry */
    .custom-modal-backdrop{
      position:fixed;
      inset:0;
      background:rgba(15,23,42,.60);
      display:flex;
      align-items:center;
      justify-content:center;
      z-index:2000;
    }
    .custom-modal-inner{
      background:#fff;
      border-radius:999px;
      padding:.9rem 1.2rem;
      width:90%;
      max-width:900px;
      box-shadow:0 18px 45px rgba(15,23,42,.35);
    }
    .custom-modal-inner .pill-input{
      width:100%;
      border-radius:999px;
    }
    .primary-color{
        color: var(--primary);
    }
  </style>
</head>
<body>

<!-- HEADER -->
<header class="step-header">
  <div class="container">
    <nav class="navbar navbar-light justify-content-between px-3 px-md-4">
      <a class="navbar-brand" href="index.php">
        <img src="img/logo-colored.svg" alt="Design Centura">
      </a>
      <a href="tel:346-626-8651" class="small d-md-inline">
        <i class="fa-solid fa-phone"></i> 346-626-8651
      </a>
    </nav>
  </div>
</header>

<?php
$businessName = isset($_GET['business_name']) ? htmlspecialchars($_GET['business_name']) : '';
?>

<div class="main-wrapper">
  <div class="container height-100">
      <div class="row height-100">
          <div class="col-lg-12 col-sm-12 my-auto">
              <!-- SINGLE FORM WRAPS ALL STEPS -->
            <form id="designBriefForm" action="#" method="post">
        
              <!-- STEP 1 -->
              <section id="step-1" class="step-section">
                <h2 class="step-title">Fill Out Your <span class="primary-color">Details</span></h2>
                <div class="row justify-content-center">
                  <div class="col-lg-8">
                    <div class="mb-3">
                      <input type="text" class="form-control pill-input"
                           id="companyName"
                           name="company_name"
                           placeholder="Enter your company name"
                           value="<?php echo $businessName; ?>">
                    </div>
                    <div class="mb-3">
                      <input type="text" class="form-control pill-input"
                             name="company_slogan"
                             id="company_slogan"
                             placeholder="Company Slogan (Optional)">
                    </div>
                  </div>
                </div>
              </section>
        
              <!-- STEP 2 -->
              <section id="step-2" class="step-section d-none">
                <h2 class="step-title">Please Select Your <span class="primary-color">Industry</span></h2>
                <div class="row g-3">
                  <!-- 1 -->
                  <div class="col-lg-2 col-sm-6">
                    <label class="choice-card option-tile">
                      <span class="check-badge"><i class="fa-solid fa-check"></i></span>
                      <input type="checkbox" name="industries[]" value="Agriculture & Outdoor">
                      <div class="icon-circle"><i class="fa-solid fa-wheat-awn"></i></div>
                      <div class="option-tile-title">Agriculture &amp;<br>Outdoor</div>
                    </label>
                  </div>
                  <!-- 2 -->
                  <div class="col-lg-2 col-sm-6">
                    <label class="choice-card option-tile">
                      <span class="check-badge"><i class="fa-solid fa-check"></i></span>
                      <input type="checkbox" name="industries[]" value="Art & Photography">
                      <div class="icon-circle"><i class="fa-solid fa-camera"></i></div>
                      <div class="option-tile-title">Art &amp; Photography</div>
                    </label>
                  </div>
                  <!-- 3 -->
                  <div class="col-lg-2 col-sm-6">
                    <label class="choice-card option-tile">
                      <span class="check-badge"><i class="fa-solid fa-check"></i></span>
                      <input type="checkbox" name="industries[]" value="Building & Construction">
                      <div class="icon-circle"><i class="fa-solid fa-building"></i></div>
                      <div class="option-tile-title">Building &amp;<br>Construction</div>
                    </label>
                  </div>
                  <!-- 4 -->
                  <div class="col-lg-2 col-sm-6">
                    <label class="choice-card option-tile">
                      <span class="check-badge"><i class="fa-solid fa-check"></i></span>
                      <input type="checkbox" name="industries[]" value="Business & Finance">
                      <div class="icon-circle"><i class="fa-solid fa-briefcase"></i></div>
                      <div class="option-tile-title">Business &amp;<br>Finance</div>
                    </label>
                  </div>
                  <!-- 5 -->
                  <div class="col-lg-2 col-sm-6">
                    <label class="choice-card option-tile">
                      <span class="check-badge"><i class="fa-solid fa-check"></i></span>
                      <input type="checkbox" name="industries[]" value="Children">
                      <div class="icon-circle"><i class="fa-solid fa-child"></i></div>
                      <div class="option-tile-title">Children</div>
                    </label>
                  </div>
                  <!-- 6 -->
                  <div class="col-lg-2 col-sm-6">
                    <label class="choice-card option-tile">
                      <span class="check-badge"><i class="fa-solid fa-check"></i></span>
                      <input type="checkbox" name="industries[]" value="Religious">
                      <div class="icon-circle"><i class="fa-solid fa-church"></i></div>
                      <div class="option-tile-title">Religious</div>
                    </label>
                  </div>
                  <!-- 7 -->
                  <div class="col-lg-2 col-sm-6">
                    <label class="choice-card option-tile">
                      <span class="check-badge"><i class="fa-solid fa-check"></i></span>
                      <input type="checkbox" name="industries[]" value="Fashion">
                      <div class="icon-circle"><i class="fa-solid fa-user-tie"></i></div>
                      <div class="option-tile-title">Fashion</div>
                    </label>
                  </div>
                  <!-- 8 -->
                  <div class="col-lg-2 col-sm-6">
                    <label class="choice-card option-tile">
                      <span class="check-badge"><i class="fa-solid fa-check"></i></span>
                      <input type="checkbox" name="industries[]" value="Food & Drinks">
                      <div class="icon-circle"><i class="fa-solid fa-burger"></i></div>
                      <div class="option-tile-title">Food &amp; Drinks</div>
                    </label>
                  </div>
                  <!-- 9 -->
                  <div class="col-lg-2 col-sm-6">
                    <label class="choice-card option-tile">
                      <span class="check-badge"><i class="fa-solid fa-check"></i></span>
                      <input type="checkbox" name="industries[]" value="Games & Betting">
                      <div class="icon-circle"><i class="fa-solid fa-gamepad"></i></div>
                      <div class="option-tile-title">Games &amp; Betting</div>
                    </label>
                  </div>
                  <!-- 10 -->
                  <div class="col-lg-2 col-sm-6">
                    <label class="choice-card option-tile">
                      <span class="check-badge"><i class="fa-solid fa-check"></i></span>
                      <input type="checkbox" name="industries[]" value="Health & Medical">
                      <div class="icon-circle"><i class="fa-solid fa-notes-medical"></i></div>
                      <div class="option-tile-title">Health &amp; Medical</div>
                    </label>
                  </div>
                  <!-- 11 -->
                  <div class="col-lg-2 col-sm-6">
                    <label class="choice-card option-tile">
                      <span class="check-badge"><i class="fa-solid fa-check"></i></span>
                      <input type="checkbox" name="industries[]" value="Travel & Tourism">
                      <div class="icon-circle"><i class="fa-solid fa-plane"></i></div>
                      <div class="option-tile-title">Travel &amp; Tourism</div>
                    </label>
                  </div>
                  <!-- 12 -->
                  <div class="col-lg-2 col-sm-6">
                    <label class="choice-card option-tile">
                      <span class="check-badge"><i class="fa-solid fa-check"></i></span>
                      <input type="checkbox" name="industries[]" value="Education">
                      <div class="icon-circle"><i class="fa-solid fa-graduation-cap"></i></div>
                      <div class="option-tile-title">Education</div>
                    </label>
                  </div>
                  <!-- 13 -->
                  <div class="col-lg-2 col-sm-6">
                    <label class="choice-card option-tile">
                      <span class="check-badge"><i class="fa-solid fa-check"></i></span>
                      <input type="checkbox" name="industries[]" value="Pet & Animal">
                      <div class="icon-circle"><i class="fa-solid fa-paw"></i></div>
                      <div class="option-tile-title">Pet &amp; Animal</div>
                    </label>
                  </div>
                  <!-- 14 -->
                  <div class="col-lg-2 col-sm-6">
                    <label class="choice-card option-tile">
                      <span class="check-badge"><i class="fa-solid fa-check"></i></span>
                      <input type="checkbox" name="industries[]" value="Home Service">
                      <div class="icon-circle"><i class="fa-solid fa-house-user"></i></div>
                      <div class="option-tile-title">Home Service</div>
                    </label>
                  </div>
                  <!-- 15 -->
                  <div class="col-lg-2 col-sm-6">
                    <label class="choice-card option-tile">
                      <span class="check-badge"><i class="fa-solid fa-check"></i></span>
                      <input type="checkbox" name="industries[]" value="Real Estate">
                      <div class="icon-circle"><i class="fa-solid fa-city"></i></div>
                      <div class="option-tile-title">Real Estate</div>
                    </label>
                  </div>
                  <!-- 16 -->
                  <div class="col-lg-2 col-sm-6">
                    <label class="choice-card option-tile">
                      <span class="check-badge"><i class="fa-solid fa-check"></i></span>
                      <input type="checkbox" name="industries[]" value="Security">
                      <div class="icon-circle"><i class="fa-solid fa-fingerprint"></i></div>
                      <div class="option-tile-title">Security</div>
                    </label>
                  </div>
                  <!-- 17 -->
                  <div class="col-lg-2 col-sm-6">
                    <label class="choice-card option-tile">
                      <span class="check-badge"><i class="fa-solid fa-check"></i></span>
                      <input type="checkbox" name="industries[]" value="Law">
                      <div class="icon-circle"><i class="fa-solid fa-scale-balanced"></i></div>
                      <div class="option-tile-title">Law</div>
                    </label>
                  </div>
                  <!-- 18 -->
                  <div class="col-lg-2 col-sm-6">
                    <label class="choice-card option-tile">
                      <span class="check-badge"><i class="fa-solid fa-check"></i></span>
                      <input type="checkbox" name="industries[]" value="Beauty & Spa">
                      <div class="icon-circle"><i class="fa-solid fa-spa"></i></div>
                      <div class="option-tile-title">Beauty &amp; Spa</div>
                    </label>
                  </div>
                  <!-- 19 -->
                  <div class="col-lg-2 col-sm-6">
                    <label class="choice-card option-tile">
                      <span class="check-badge"><i class="fa-solid fa-check"></i></span>
                      <input type="checkbox" name="industries[]" value="Creative">
                      <div class="icon-circle"><i class="fa-solid fa-lightbulb"></i></div>
                      <div class="option-tile-title">Creative</div>
                    </label>
                  </div>
                  <!-- 20 -->
                  <div class="col-lg-2 col-sm-6">
                    <label class="choice-card option-tile">
                      <span class="check-badge"><i class="fa-solid fa-check"></i></span>
                      <input type="checkbox" name="industries[]" value="Sports">
                      <div class="icon-circle"><i class="fa-solid fa-football-ball"></i></div>
                      <div class="option-tile-title">Sports</div>
                    </label>
                  </div>
                  <!-- 21 -->
                  <div class="col-lg-2 col-sm-6">
                    <label class="choice-card option-tile">
                      <span class="check-badge"><i class="fa-solid fa-check"></i></span>
                      <input type="checkbox" name="industries[]" value="Science">
                      <div class="icon-circle"><i class="fa-solid fa-flask"></i></div>
                      <div class="option-tile-title">Science</div>
                    </label>
                  </div>
                  <!-- 22 -->
                  <div class="col-lg-2 col-sm-6">
                    <label class="choice-card option-tile">
                      <span class="check-badge"><i class="fa-solid fa-check"></i></span>
                      <input type="checkbox" name="industries[]" value="Transportation">
                      <div class="icon-circle"><i class="fa-solid fa-bus"></i></div>
                      <div class="option-tile-title">Transportation</div>
                    </label>
                  </div>
                  <!-- 23 -->
                  <div class="col-lg-2 col-sm-6">
                    <label class="choice-card option-tile">
                      <span class="check-badge"><i class="fa-solid fa-check"></i></span>
                      <input type="checkbox" name="industries[]" value="Music">
                      <div class="icon-circle"><i class="fa-solid fa-music"></i></div>
                      <div class="option-tile-title">Music</div>
                    </label>
                  </div>
                  <!-- 24 - OTHER -->
                  <div class="col-lg-2 col-sm-6">
                    <label class="choice-card option-tile" id="industryOtherCard" data-other="true">
                      <span class="check-badge"><i class="fa-solid fa-check"></i></span>
                      <input type="checkbox" name="industries[]" value="Other" id="industryOtherCheckbox">
                      <div class="icon-circle"><i class="fa-solid fa-ellipsis"></i></div>
                      <div class="option-tile-title">Other</div>
                    </label>
                  </div>
                </div>
        
                <!-- Hidden field to store custom industry text -->
                <input type="hidden" name="industry_other" id="industryOtherHidden">
              </section>
        
              <!-- STEP 3 -->
              <section id="step-3" class="step-section d-none">
                <h2 class="step-title">Please Choose Your <span class="primary-color">Logo Design</span> Style &amp; Preference</h2>
                <div class="row justify-content-center">
                  <div class="col-lg-8">
                    <div class="style-row">
                      <div class="d-flex justify-content-between mb-1">
                        <span class="style-label-left">Vintage</span>
                        <span class="style-label-right">Modern</span>
                      </div>
                      <input type="range" class="style-range" value="50" min="0" max="100" name="style_vintage_modern">
                    </div>
        
                    <div class="style-row">
                      <div class="d-flex justify-content-between mb-1">
                        <span class="style-label-left">Sophisticated</span>
                        <span class="style-label-right">Fancy</span>
                      </div>
                      <input type="range" class="style-range" value="50" min="0" max="100" name="style_sophisticated_fancy">
                    </div>
        
                    <div class="style-row">
                      <div class="d-flex justify-content-between mb-1">
                        <span class="style-label-left">Delicate</span>
                        <span class="style-label-right">Strong</span>
                      </div>
                      <input type="range" class="style-range" value="50" min="0" max="100" name="style_delicate_strong">
                    </div>
        
                    <div class="style-row">
                      <div class="d-flex justify-content-between mb-1">
                        <span class="style-label-left">Economical</span>
                        <span class="style-label-right">Expensive</span>
                      </div>
                      <input type="range" class="style-range" value="50" min="0" max="100" name="style_economical_expensive">
                    </div>
        
                    <div class="style-row">
                      <div class="d-flex justify-content-between mb-1">
                        <span class="style-label-left">Geometric</span>
                        <span class="style-label-right">Organic</span>
                      </div>
                      <input type="range" class="style-range" value="50" min="0" max="100" name="style_geometric_organic">
                    </div>
        
                    <div class="style-row">
                      <div class="d-flex justify-content-between mb-1">
                        <span class="style-label-left">Conceptual</span>
                        <span class="style-label-right">Exact</span>
                      </div>
                      <input type="range" class="style-range" value="50" min="0" max="100" name="style_conceptual_exact">
                    </div>
                  </div>
                </div>
              </section>
        
              <!-- STEP 4 -->
              <section id="step-4" class="step-section d-none">
                <h2 class="step-title">Every <span class="primary-color">Design</span> Needs Some <span class="primary-color">Colors</span></h2>
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-sm-12">
                        <div class="row g-3 justify-content-center">
                            <div class="col-lg-3 col-sm-6">
                                <label class="choice-card color-box c-red">
                            <span class="check-badge"><i class="fa-solid fa-check"></i></span>
                            <input type="checkbox" name="colors[]" value="Red">
                            <div class="color-row">
                              <img src="img/steps/color-1.jpg" width="100%">
                            </div>
                            <div class="color-label">Red</div>
                          </label>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                 <label class="choice-card color-box c-pink">
                                    <span class="check-badge"><i class="fa-solid fa-check"></i></span>
                                    <input type="checkbox" name="colors[]" value="Pink">
                                    <div class="color-row">
                                      <img src="img/steps/color-2.jpg" width="100%">
                                    </div>
                                    <div class="color-label">Pink</div>
                                  </label>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label class="choice-card color-box c-purple">
                                    <span class="check-badge"><i class="fa-solid fa-check"></i></span>
                                    <input type="checkbox" name="colors[]" value="Purple">
                                    <div class="color-row">
                                      <img src="img/steps/color-3.jpg" width="100%">
                                    </div>
                                    <div class="color-label">Purple</div>
                                  </label>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label class="choice-card color-box c-blue">
                                    <span class="check-badge"><i class="fa-solid fa-check"></i></span>
                                    <input type="checkbox" name="colors[]" value="Blue">
                                    <div class="color-row">
                                      <img src="img/steps/color-4.jpg" width="100%">
                                    </div>
                                    <div class="color-label">Blue</div>
                                  </label>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label class="choice-card color-box c-aqua">
                                    <span class="check-badge"><i class="fa-solid fa-check"></i></span>
                                    <input type="checkbox" name="colors[]" value="Aqua">
                                    <div class="color-row">
                                      <img src="img/steps/color-5.jpg" width="100%">
                                    </div>
                                    <div class="color-label">Aqua</div>
                                  </label>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label class="choice-card color-box c-green">
                                <span class="check-badge"><i class="fa-solid fa-check"></i></span>
                                <input type="checkbox" name="colors[]" value="Green">
                                <div class="color-row">
                                  <img src="img/steps/color-6.jpg" width="100%">
                                </div>
                                <div class="color-label">Green</div>
                              </label>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label class="choice-card color-box c-orange">
                                <span class="check-badge"><i class="fa-solid fa-check"></i></span>
                                <input type="checkbox" name="colors[]" value="Orange">
                                <div class="color-row">
                                  <img src="img/steps/color-7.jpg" width="100%">
                                </div>
                                <div class="color-label">Orange</div>
                              </label>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label class="choice-card color-box c-grey">
                                    <span class="check-badge"><i class="fa-solid fa-check"></i></span>
                                    <input type="checkbox" name="colors[]" value="Grey">
                                    <div class="color-row">
                                      <img src="img/steps/color-8.jpg" width="100%">
                                    </div>
                                    <div class="color-label">Grey</div>
                                  </label>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label class="choice-card color-box c-yellow">
                                    <span class="check-badge"><i class="fa-solid fa-check"></i></span>
                                    <input type="checkbox" name="colors[]" value="Yellow">
                                    <div class="color-row">
                                      <img src="img/steps/color-9.jpg" width="100%">
                                    </div>
                                    <div class="color-label">Yellow</div>
                                  </label>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label class="choice-card color-box c-brown">
                                <span class="check-badge"><i class="fa-solid fa-check"></i></span>
                                <input type="checkbox" name="colors[]" value="Brown">
                                <div class="color-row">
                                  <img src="img/steps/color-10.jpg" width="100%">
                                </div>
                                <div class="color-label">Brown</div>
                              </label>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label class="choice-card color-box c-designer">
                                <span class="check-badge"><i class="fa-solid fa-check"></i></span>
                                <input type="checkbox" name="colors[]" value="Designer’s Choice">
                                <div class="color-row">
                                  <img src="img/steps/color-multi.jpg" width="100%">
                                </div>
                                <div class="color-label">Designer&rsquo;s Choice</div>
                              </label>
                            </div>
                        </div>
                    </div>
                </div>
              </section>
        
              <!-- STEP 5 -->
              <section id="step-5" class="step-section d-none">
                <h2 class="step-title">Which <span class="primary-color">Logo Type</span> Are You Looking For?</h2>
                <div class="row justify-content-center">
                    <div class="col-lg-11 col-sm-12">
                        <div class="row g-3 justify-content-center">
                            <div class="col-sm-6 col-lg-3">
                                <label class="choice-card logo-type-card">
                                  <span class="check-badge"><i class="fa-solid fa-check"></i></span>
                                  <input type="checkbox" name="logo_types[]" value="Business Initials & Lettermark">
                                  <div class="logo-type-card-header">
                                      <img src="img/steps/type-1.png" width="100%">
                                  </div>
                                  <div class="logo-type-card-body">Business Initials &amp; Lettermark</div>
                                </label>
                              </div>
                    
                              <div class="col-sm-6 col-lg-3">
                                <label class="choice-card logo-type-card">
                                  <span class="check-badge"><i class="fa-solid fa-check"></i></span>
                                  <input type="checkbox" name="logo_types[]" value="Iconic & Pictorial">
                                  <div class="logo-type-card-header">
                                      <img src="img/steps/type-2.png" width="100%">
                                  </div>
                                  <div class="logo-type-card-body">Iconic &amp; Pictorial</div>
                                </label>
                              </div>
                    
                              <div class="col-sm-6 col-lg-3">
                                <label class="choice-card logo-type-card">
                                  <span class="check-badge"><i class="fa-solid fa-check"></i></span>
                                  <input type="checkbox" name="logo_types[]" value="Crest & Monograms">
                                  <div class="logo-type-card-header">
                                      <img src="img/steps/type-3.png" width="100%">
                                  </div>
                                  <div class="logo-type-card-body">Crest &amp; Monograms</div>
                                </label>
                              </div>
                    
                              <div class="col-sm-6 col-lg-3">
                                <label class="choice-card logo-type-card">
                                  <span class="check-badge"><i class="fa-solid fa-check"></i></span>
                                  <input type="checkbox" name="logo_types[]" value="Illustration & Mascots">
                                  <div class="logo-type-card-header">
                                      <img src="img/steps/type-4.png" width="100%">
                                  </div>
                                  <div class="logo-type-card-body">Illustration &amp; Mascots</div>
                                </label>
                              </div>
                    
                              <div class="col-sm-6 col-lg-3">
                                <label class="choice-card logo-type-card">
                                  <span class="check-badge"><i class="fa-solid fa-check"></i></span>
                                  <input type="checkbox" name="logo_types[]" value="Abstract & Combination">
                                  <div class="logo-type-card-header">
                                      <img src="img/steps/type-5.png" width="100%">
                                  </div>
                                  <div class="logo-type-card-body">Abstract &amp; Combination</div>
                                </label>
                              </div>
                    
                              <div class="col-sm-6 col-lg-3">
                                <label class="choice-card logo-type-card">
                                  <span class="check-badge"><i class="fa-solid fa-check"></i></span>
                                  <input type="checkbox" name="logo_types[]" value="Calligraphy & Graffiti">
                                  <div class="logo-type-card-header">
                                      <img src="img/steps/type-6.png" width="100%">
                                  </div>
                                  <div class="logo-type-card-body">Calligraphy &amp; Graffiti</div>
                                </label>
                              </div>
                        </div>
                    </div>
                </div>
              </section>
        
              <!-- STEP 6 -->
              <section id="step-6" class="step-section d-none">
                <h2 class="step-title">Fill In <span class="primary-color">Details</span> To Get It Moving</h2>
                <div class="row justify-content-center">
                  <div class="col-lg-8">
                    <div class="mb-3">
                      <input type="text" class="form-control pill-input"
                             id="userName"
                             name="contact_name"
                             placeholder="Please Enter Your Name (Required)">
                    </div>
                    <div class="mb-3">
                      <input type="email" class="form-control pill-input"
                             name="contact_email"
                             id="email"
                             placeholder="Please Enter Your Email (Required)">
                    </div>
                    <div class="mb-3">
                      <input type="text" class="form-control pill-input"
                             name="contact_phone"
                             id="contact_phone"
                             placeholder="Add Your Phone Number (Optional)">
                    </div>
                  </div>
                </div>
              </section>
        
            </form><!-- /form -->
            
            <!-- STEP 7 -->
              <section id="step-7" class="step-section d-none">
                <h2 class="step-title" id="thankTitle">
                  <span class="primary-color">Thank You</span>, How Would You Like To Proceed?
                </h2>
                <div class="row g-3">
                  <!-- Live Chat -->
                  <div class="col-md-4">
                    <div class="thank-card">
                      <img src="img/steps/chat.jpg" alt="Live Chat Support">
                      <div class="thank-card-body">
                        <div>
                          <h5>Live Chat Support</h5>
                          <p>Let&rsquo;s talk! Share your design requirements with one of our designers to get a perfect logo that you envisioned for.</p>
                        </div>
                        <a href="javascript:void(0)" onclick="$zopim.livechat.window.toggle()" class="btn btn-primary-custom step-nav-btn w-100 mt-2">Chat With Us</a>
                      </div>
                    </div>
                  </div>
        
                  <!-- Pricing Packages -->
                  <div class="col-md-4">
                    <div class="thank-card">
                      <img src="img/last-step3.webp" alt="Pricing Packages">
                      <div class="thank-card-body">
                        <div>
                          <h5>Pricing Packages</h5>
                          <p>Checkout our budget friendly packages &amp; pricing plans tailor made for startups &amp; growing businesses of all sizes.</p>
                        </div>
                        <a href="pricing.php" class="btn btn-primary-custom step-nav-btn w-100 mt-2">View Pricing</a>
                      </div>
                    </div>
                  </div>
        
                  <!-- Creative Portfolio -->
                  <div class="col-md-4">
                    <div class="thank-card">
                      <img src="img/steps/portfolio.jpg" alt="Creative Portfolio">
                      <div class="thank-card-body">
                        <div>
                          <h5>Creative Portfolio</h5>
                          <p>Checkout our amazing logo projects that we have designed for our recent customers to give their brand an identity.</p>
                        </div>
                        <a href="portfolio.php" class="btn btn-primary-custom step-nav-btn w-100 mt-2">Visit Portfolio</a>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            
          </div>
      </div>

  </div>
</div>

<!-- FOOTER -->
<footer class="app-footer" id="appFooter">
  <div class="container py-2">
    <div class="d-flex justify-content-center align-items-center">
      <div>
        <button id="btnPrev"
                class="btn btn-outline-custom step-nav-btn me-2"
                type="button" disabled>
          <i class="fa-solid fa-arrow-left me-1"></i> Back
        </button>
        <button id="btnNext"
                class="btn btn-primary-custom step-nav-btn"
                type="button">
          Next <i class="fa-solid fa-arrow-right ms-1"></i>
        </button>
      </div>
    </div>
  </div>
</footer>

<!-- Custom "Other Industry" Modal -->
<div id="customIndustryModal" class="custom-modal-backdrop d-none">
  <div class="custom-modal-inner">
    <input type="text"
           id="customIndustryInput"
           class="form-control pill-input"
           placeholder="Please Enter Your Option">
  </div>
</div>

<!-- JS: jQuery + Bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

<script>
  $(function () {
    var currentStep = 1;
    var totalSteps = 6;

    function showStep(step) {
      $('.step-section').addClass('d-none');
      $('#step-' + step).removeClass('d-none');
    
      $('#btnPrev').prop('disabled', step === 1);
    
      if (step === totalSteps) {
        $('#btnNext').html('Submit <i class="fa-solid fa-paper-plane ms-1"></i>');
      } else {
        $('#btnNext').html('Next <i class="fa-solid fa-arrow-right ms-1"></i>');
      }
    
      $('html, body').animate({scrollTop: 0}, 200);
    }

    function showError(message) {
      $('#formAlert').html(
        '<div class="alert alert-danger" role="alert">' + message + '</div>'
      );
      $('html, body').animate({scrollTop: 0}, 200);
    }

    // NEXT
    $('#btnNext').on('click', function () {
      $('#formAlert').html('');

      if (currentStep < totalSteps) {
        currentStep++;
        showStep(currentStep);
        sendTagsToZopim();
      } else {
        // Final step -> validate required fields & submit via AJAX
        var name = $('#userName').val().trim();
        var email = $('input[name="contact_email"]').val().trim();
        var errorMessages = [];

        if (!name) {
          errorMessages.push('Please enter your name.');
        }
        if (!email) {
          errorMessages.push('Please enter your email.');
        } else {
          var emailReg = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
          if (!emailReg.test(email)) {
            errorMessages.push('Please enter a valid email address.');
          }
        }

        if (errorMessages.length > 0) {
          showError(errorMessages.join('<br>'));
          return;
        }
        
        sendTagsToZopim();
        $('#btnNext').prop('disabled', true).html('Submitting...');

        $.ajax({
          url: 'submit_design_brief.php',
          type: 'POST',
          data: $('#designBriefForm').serialize(),
          dataType: 'json',
          success: function (res) {
            if (res.success) {
                console.log(res);
              var displayName = $('#userName').val() || $('#companyName').val() || '';
              var title = 'Thank You';
              if ($.trim(displayName) !== '') {
                title = 'Thank You ' + $.trim(displayName) + ', How Would You Like To Proceed?';
              } else {
                title += ', How Would You Like To Proceed?';
              }
              $('#thankTitle').text(title);

              $('.step-section').addClass('d-none');
              $('#step-7').removeClass('d-none');
              $('#appFooter').addClass('d-none');
              $('#formAlert').html('');
            } else {
              showError(res.message || 'Something went wrong. Please try again.');
            }
          },
          error: function () {
            showError('Something went wrong. Please try again.');
          },
          complete: function () {
            $('#btnNext').prop('disabled', false).html('Submit <i class="fa-solid fa-paper-plane ms-1"></i>');
          }
        });
      }
    });

    // BACK
    $('#btnPrev').on('click', function () {
      if (currentStep > 1) {
        currentStep--;
        showStep(currentStep);
      }
    });

    // Generic toggle for choice cards (Step 2, 4, 5)
    function toggleChoiceCard($card) {
      var $checkbox = $card.find('input[type="checkbox"]');
      var checked = !$checkbox.prop('checked');
      $checkbox.prop('checked', checked);
      $card.toggleClass('active', checked);
    }

    // Industry tiles (step 2)
    $(document).on('click', '.option-tile', function (e) {
      if ($(e.target).is('input')) return;
    
      e.preventDefault();
    
      var $card = $(this);
      toggleChoiceCard($card);
    
      if ($card.data('other')) {
        if ($card.hasClass('active')) {
          $('#customIndustryModal').removeClass('d-none');
          setTimeout(function () {
            $('#customIndustryInput').focus();
          }, 10);
        } else {
          $('#industryOtherHidden').val('');
          $('#customIndustryInput').val('');
        }
      }
    });

    // Color boxes (step 4)
    $(document).on('click', '.color-box', function (e) {
      if ($(e.target).is('input')) return;
      e.preventDefault();
      toggleChoiceCard($(this));
    });

    // Logo type cards (step 5)
    $(document).on('click', '.logo-type-card', function (e) {
      if ($(e.target).is('input')) return;
      e.preventDefault();
      toggleChoiceCard($(this));
    });

    // Custom industry modal behavior
    function closeCustomIndustryModal() {
      $('#customIndustryModal').addClass('d-none');
    }

    $('#customIndustryInput').on('keydown', function (e) {
      if (e.key === 'Enter') {
        e.preventDefault();
        $('#industryOtherHidden').val($(this).val().trim());
        closeCustomIndustryModal();
      } else if (e.key === 'Escape') {
        e.preventDefault();
        closeCustomIndustryModal();
      }
    });

    $('#customIndustryModal').on('click', function (e) {
      if ($(e.target).is('#customIndustryModal')) {
        $('#industryOtherHidden').val($('#customIndustryInput').val().trim());
        closeCustomIndustryModal();
      }
    });

    // Initial render
    showStep(currentStep);
  });
  
  
  
  function sendTagsToZopim() {
    let $form = $('#designBriefForm');

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

   
     var waitForZopim = setInterval(function () {
        if (window.$zopim === undefined || window.$zopim.livechat === undefined) {
            return;
        }
        
     var  comppany_name =  $('#companyName').val();
        $zopim(function() {
                $zopim.livechat.addTags(comppany_name);
            });
    }, 3000);
    
    //  $(document).change('#company_slogan', function() {
    //         var field_value1 = $('#company_slogan').val();
    //         $zopim(function() {
    //             $zopim.livechat.addTags(field_value1);
    //         });

    //         console.log(field_value1);
    //     });
    //  $(document).change('#userName', function() {
    //         var field_value2 = $('#userName').val();
    //         $zopim(function() {
    //             $zopim.livechat.addTags(field_value2);
    //         });

    //         console.log(field_value2);
    //     });
    //  $(document).change('#email', function() {
    //         var field_value3 = $('#email').val();
    //         $zopim(function() {
    //             $zopim.livechat.addTags(field_value3);
    //         });

    //         console.log(field_value3);
    //     });
    //  $(document).change('#contact_phone', function() {
    //         var field_value4 = $('#contact_phone').val();
    //         $zopim(function() {
    //             $zopim.livechat.addTags(field_value4);
    //         });

    //         console.log(field_value4);
    //     });

</script>

</body>
</html>
