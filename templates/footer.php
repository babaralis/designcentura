<!-- FOOTER -->
<footer class="dk-footer">
  <!-- Top area -->
  <div class="dk-footer-top">
    <div class="container">
      <div class="row gy-4">
        <!-- Logo + text -->
        <div class="col-lg-4 col-md-6">
          <div class="dk-footer-logo mb-3">
            <!-- yahan apna logo img/lottie laga sakte ho -->
            <img src="../img/DesignCentura_final-02.svg" width="60%">
          </div>
          <p class="dk-footer-text">
            Our creative force is motivated by the goal of achieving digital
            excellence for your brand. Our design services are optimized to give
            your brand dominance in the digital fraternity.
          </p>
        </div>

        <!-- Our Services -->
        <div class="col-lg-2 col-md-6">
          <h4 class="dk-footer-title">Quick Links</h4>
          <ul class="dk-footer-list">
            <li><a href="index.php">Home</a></li>
            <li><a href="portfolio.php">Portfolio</a></li>
            <li><a href="ai-agent.php">AI Agent</a></li>
            <li><a href="web-design.php">Web Design</a></li>
            <li><a href="logo-design.php">Logo Design</a></li>
            <li><a href="reviews.php">Reviews</a></li>
          </ul>
        </div>

        <!-- Links -->
        <div class="col-lg-2 col-md-6">
          <h4 class="dk-footer-title">Links</h4>
          <ul class="dk-footer-list">
            <li><a href="animated-videos.php">Animation</a></li>
            <li><a href="about.php">About us</a></li>
            <li><a href="contact.php">Contact us</a></li>
            <li><a href="pricing.php">Pricing</a></li>
            <li><a href="terms-and-condition.php">Terms and Condition</a></li>
            <li><a href="privacy-policy.php">Privacy Policy</a></li>
          </ul>
        </div>

        <!-- Contact Us -->
        <div class="col-lg-4 col-md-6">
          <h4 class="dk-footer-title">Contact Us</h4>
          <ul class="dk-footer-contact">
            <li>
              <span class="dk-footer-icon"><i class="fa-solid fa-phone"></i></span>
              <a href="tel:323-283-8729">323-283-8729</a>
            </li>
            <li>
              <span class="dk-footer-icon"><i class="fa-solid fa-envelope"></i></span>
              <a href="mailto:info@designcentura.com">info@designcentura.com</a>
            </li>
            <li>
              <span class="dk-footer-icon"><i class="fa-solid fa-location-dot"></i></span>
              <span>
                Mailing Address – 95 Third Street, San Francisco, CA 94103
              </span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- Bottom bar -->
  <div class="dk-footer-bottom">
    <div class="container">
      <div class="d-flex flex-column flex-md-row justify-content-between align-items-center gap-2">
        <div class="dk-footer-bottom-links">
          <a href="terms-and-condition.php">Terms and Condition</a>
          <span class="mx-2">|</span>
          <a href="privacy-policy.php">Privacy Policy</a>
        </div>
        <div class="dk-footer-copy">
          Design Centura. © 2025 All Rights Reserved
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- PORTFOLIO IMAGE POPUP MODAL -->
<div class="modal fade" id="portfolioImageModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
      <div class="modal-content" style="background:#000; border:none;">
        <div class="modal-body p-0 position-relative">
          <img
            id="portfolioModalImg"
            src=""
            alt="Portfolio preview"
            class="img-fluid w-100"
            style="border-radius:10px; object-fit:contain; max-height:85vh;"
          />
          <button
            type="button"
            class="btn-close btn-close-white position-absolute top-0 end-0 m-3"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>
        </div>
      </div>
    </div>
  </div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>
<script>
$(function () {
    const $nav        = $("#mainNav");
    const $logo       = $nav.find(".navigationLogo");
    const $mobileLogo = $("#navbarNav > img.d-block.d-sm-none");

    if (!$logo.length) return;

    // ===== DETECT HOME PAGE =====
    const path   = window.location.pathname;
    const origin = window.location.origin;

    const isHome =
        path === "/" ||
        path === "/index.php" ||
        window.location.href === origin + "/" ||
        window.location.href === origin;

    // ===== LOGO PATHS =====
  
  $(window).on('scroll', function() {
    if ($(this).scrollTop() > 0) {
            $('#mainNav').addClass('scrolled'); // Scroll hone par class add
            
            
        } else {
            $('#mainNav').removeClass('scrolled'); // Top par class remove
        }
        
        const w = $(window).width(); // device width

        if (w <= 1024) {
            if ($(this).scrollTop() > 0) {
                $('#navbarNav').addClass('scrolled1');
            } else {
                $('#navbarNav').removeClass('scrolled1');
            }
        }
    });
    
 // --- Toggle open/close logic ---
$('.navbar-toggler').click(function () {
    if ($('#navbarNav').hasClass('show')) {
        $('.mobile-whitelogo').removeClass('show-logo');
    } else {
        $('.mobile-whitelogo').addClass('show-logo');
    }
});

// --- Desktop par hamesha hide ---
function hideLogoOnDesktop() {
    if ($(window).width() >= 992) {
        $('.mobile-whitelogo').removeClass('show-logo');
        $('.mobile-whitelogo').removeClass('scrolled1');
    }
}

$(window).on('resize', hideLogoOnDesktop);
$(window).on('load', hideLogoOnDesktop);

    // Run on page load (in case user refreshes while scrolled)
    applyLogo($(window).scrollTop());

    // Run on scroll
    $(window).on("scroll", function () {
        applyLogo($(this).scrollTop());
    });
});
</script>






<script>
    /*const nav = document.getElementById("mainNav");
    const logo = nav.querySelector("img");

    window.addEventListener("scroll", function () {
        if (window.scrollY >= 50) {
            nav.classList.add("scrolled");
            logo.src = "../img/DesignCentura_final-01.svg";
        } 
        else {
            nav.classList.remove("scrolled");
            logo.src = "../img/DesignCentura_final-02.svg";
        }
    });*/
</script>

<script>
  $(document).ready(function () {
    // Sirf pricing.php page pe hi logic run karo
    var isPricingPage = window.location.pathname.indexOf('pricing.php') !== -1;

    if (!isPricingPage) {
      // Agar pricing page nahi hai to kuch mat karo
      return;
    }

    var $mainMenu = $('#mainMenu');
    var $pricingMenu = $('#pricingMenu');
    var switchOffset = 150; // jitna scroll hone pe switch hoga (px)

    // Initial state: top pe main menu visible, pricing menu hidden
    $mainMenu.removeClass('d-none');
    $pricingMenu.addClass('d-none');

    $(window).on('scroll', function () {
      var scrollTop = $(this).scrollTop();

      if (scrollTop > switchOffset) {
        // Scroll ho chuka -> pricing menu show, main menu hide
        if ($pricingMenu.hasClass('d-none')) {
          $mainMenu.addClass('d-none');
          $pricingMenu.removeClass('d-none');
        }
      } else {
        // Scroll top ke kareeb -> default menu wapas
        if ($mainMenu.hasClass('d-none')) {
          $pricingMenu.addClass('d-none');
          $mainMenu.removeClass('d-none');
        }
      }
    });
  });
</script>

<script>
  $(function () {
    // Fancybox is auto-initialized by the script include for [data-fancybox]

    // Portfolio filter
    $('.portfolio-filter button').on('click', function () {
      var filter = $(this).data('filter');

      $('.portfolio-filter button').removeClass('active');
      $(this).addClass('active');

      if (filter === 'all') {
        $('.portfolio-item').parent().show();
        return;
      }

      $('.portfolio-item').each(function () {
        var category = $(this).data('category');
        if (category === filter) {
          $(this).parent().show();
        } else {
          $(this).parent().hide();
        }
      });
    });
    
  });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
      // Generic toggle for pills (pricing main)
      function initToggle(containerSelector) {
        const container = document.querySelector(containerSelector);
        if (!container) return;
        container.addEventListener("click", function (e) {
          const target = e.target;
          if (target.tagName.toLowerCase() !== "button") return;
          const buttons = container.querySelectorAll("button");
          buttons.forEach((btn) => btn.classList.remove("active"));
          target.classList.add("active");
        });
      }

      // Pricing tabs: active UI only
      initToggle(".pricing-toggle-main");

      // Portfolio tabs: active + FILTER
      const portfolioToggle = document.querySelector(".portfolio-toggle");
      const portfolioItems = document.querySelectorAll("[data-portfolio-item]");

      if (portfolioToggle && portfolioItems.length) {
        portfolioToggle.addEventListener("click", function (e) {
          const target = e.target;
          if (target.tagName.toLowerCase() !== "button") return;

          // active state
          portfolioToggle
            .querySelectorAll("button")
            .forEach((btn) => btn.classList.remove("active"));
          target.classList.add("active");

          const selected = target.textContent.trim().toLowerCase(); // all / logo / branding / web

          portfolioItems.forEach((item) => {
            const cat = (item.getAttribute("data-category") || "").toLowerCase();
            if (selected === "all" || selected === cat) {
              item.classList.remove("d-none");
            } else {
              item.classList.add("d-none");
            }
          });
        });
      }

      // Portfolio image popup (Bootstrap modal)
      const cards = document.querySelectorAll(".js-portfolio-card");
      const modalImg = document.getElementById("portfolioModalImg");
      const modalElement = document.getElementById("portfolioImageModal");
      const bsModal = modalElement ? new bootstrap.Modal(modalElement) : null;

      cards.forEach(function (card) {
        card.addEventListener("click", function () {
          if (!bsModal) return;
          const imgUrl = card.getAttribute("data-img");
          if (!imgUrl) return;
          modalImg.src = imgUrl;
          bsModal.show();
        });
      });
    });
  </script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const portfolioTabs = document.querySelector(".portfolio-toggle");
    const portfolioItems = document.querySelectorAll("[data-portfolio-item]");

    if (!portfolioTabs) return;

    function applyPortfolioFilter(category) {
      portfolioItems.forEach(item => {
        const cat = item.getAttribute("data-category");

        if (category === "all" || cat === category) {
          item.classList.remove("d-none");
        } else {
          item.classList.add("d-none");
        }
      });
    }

    // Page load par active button se filter
    const activeBtn = portfolioTabs.querySelector("button.active") || portfolioTabs.querySelector("button[data-category]");
    if (activeBtn) {
      const initialCategory = activeBtn.getAttribute("data-category");
      applyPortfolioFilter(initialCategory);
    }

    // Tabs click par filter change
    portfolioTabs.addEventListener("click", function (e) {
      if (e.target.tagName.toLowerCase() !== "button") return;

      // Active class handle
      portfolioTabs.querySelectorAll("button").forEach(btn => btn.classList.remove("active"));
      e.target.classList.add("active");

      const selected = e.target.getAttribute("data-category");
      applyPortfolioFilter(selected);
    });
  });
</script>
<script>
document.addEventListener("DOMContentLoaded", function () {
    let currentPage = window.location.pathname.split("/").pop(); 

    document.querySelectorAll("#mainNav .nav-link").forEach(link => {
        let linkPage = link.getAttribute("href");

        if (linkPage === currentPage) {
            link.classList.add("active");
        } else {
            link.classList.remove("active");
        }
    });
});
</script>
<script>
  $(function () {
    $("#projectBriefForm").on("submit", function (e) {
      e.preventDefault();

      const $form = $(this);
      const $btn = $("#contactSubmitBtn");
      const $success = $("#formAlertSuccess");
      const $error = $("#formAlertError");

      // hide previous alerts
      $success.addClass("d-none").text("");
      $error.addClass("d-none").text("");

      // basic front-end required check
      if (!this.checkValidity()) {
        $error.removeClass("d-none").text("Please fill in all required fields correctly.");
        return;
      }

      $btn.prop("disabled", true).text("Sending...");

      $.ajax({
        url: "./contact_submit.php",
        type: "POST",
        dataType: "json",
        data: $form.serialize(),
        success: function (response) {
          if (response && response.status === "success") {
            $success.removeClass("d-none").text(response.message || "Your brief has been sent successfully.");
            $form[0].reset();
          } else {
            $error.removeClass("d-none").text(
              (response && response.message) ||
                "Something went wrong while sending your brief. Please try again."
            );
          }
        },
        error: function () {
          $error
            .removeClass("d-none")
            .text("Server error occurred. Please try again in a moment.");
        },
        complete: function () {
          $btn.prop("disabled", false).text("Send project brief");
        },
      });
    });
  });
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).on("click", ".plan-btn", function(e) {
       let str = $(this).data("package");
    
    // Split only the first hyphen
    let firstHyphen = str.indexOf("-");
    let category = str.substring(0, firstHyphen); // before first -
    let rest = str.substring(firstHyphen + 1);    // after first -

    // Now split the remaining normally
    let parts = rest.split("-");

    let item_name = category + " " + parts[0]; // e.g. Logo + Branding Ultimate
    let currency_code = parts[1];
    let price = parts[2];
    let discount = parts[3];
  
        var item = {item_name:item_name , price:price, currency_code:currency_code, category:category, discount:discount};
        var jsonData = JSON.stringify(item);
        $.ajax({
                url: "https://designcentura.com/crm/api/payment/ordernow/store",
                method: 'POST',
                headers:{
                    'Accept': 'application/json',
                    'Content-Type': 'application/json;charset=UTF-8',
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
          
                data: jsonData,
                success: function (response) {
                  if(response.success){
                        window.location.href = response.link;
                    }
                                    
                }
              });
    });
    
    
    
  $(document).ready(function () {

    $("#business_name").on('change', function () {
      let cname = $(this).val(); // raw value, no decoding
      console.log(cname);
      if (typeof $zopim !== "undefined" && typeof $zopim.livechat !== "undefined") {
        $zopim(function () {
          $zopim.livechat.setName(cname);
        });
      }
    });
  });
  </script>
</body>
</html>