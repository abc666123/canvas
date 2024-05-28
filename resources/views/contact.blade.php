@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
    
<section class="tf__contact pt_165 pb_100">
      <div class="container">
        <div class="row">
          <div class="col-xl-10 m-auto">
            <div class="tf__common_heading">
              <h6>HOME / CONTACT US</h6>
              <h2 class="tf__common_heading_color">Contact us</h2>
            </div>
          </div>
        </div>
       <div class="row d-flex flex-wrap justify-content-center">
  <div class="col-xl-5 col-md-6">
    <div class="tf__contact_area">
      <span><i class="fas fa-comment-alt-lines" aria-hidden="true"></i></span>
      <div class="tf__contact_icon_text">
        <p>Email us</p>
        <a href="mailto:ourcanvastm@gmail.com">ourcanvastm@gmail.com</a>
      </div>
    </div>
  </div>
  <div class="col-xl-5 col-md-6">
    <div class="tf__contact_area">
      <span><i class="fas fa-phone-alt"></i></span>
      <div class="tf__contact_icon_text">
        <p>Call us</p>
        <a href="callto:01930286518">01930286518 (Office Manager)</a>
      </div>
    </div>
  </div>
  <div class="col-xl-5 col-md-6">
    <div class="tf__contact_area">
      <span><i class="fas fa-map-marker-alt"></i></span>
      <div class="tf__contact_icon_text">
        <p>Chattagram Office</p>
        <a href="callto:01930286518">South Khulshi Road -2.<br>4217 Chittagong, Bangladesh</a>
        
      </div>
    </div>
  </div>
  <div class="col-xl-5 col-md-6">
    <div class="tf__contact_area">
      <span><i class="fas fa-map-marker-alt"></i></span>
      <div class="tf__contact_icon_text">
        <p>Dhaka Office (Temporary)</p>
        <a href="callto:01930286518">

B Blcok, Basundhara Residential Area, <br> Dhaka, Bangladesh</a>
        
      </div>
    </div>
  </div>
  
  </div>
</div>

      </div>
    </section>
    <!--============================
        CONTACT END
    ==============================-->

    <!--============================
        CONTACT FORM START
    ==============================-->
    <section class="tf__contact_form pt_90 pb_100">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 mx-auto">
                <div class="tf__common_heading tf__common_heading2 tf__benefits_heading">
                    <h2 class="tf__common_heading_color">Send us a message</h2>
                    <p>Fill out the form and our team will get back to you as quickly as we can.</p>
                    <ul class="tf__contact_icon d-flex flex-wrap">
                        <li><a href="#"><img class="svg" src="./svg/facebook.svg" alt=""></a></li>
                        <li><a href="#"><img src="./svg/instagram.svg" alt="" class="svg"></a></li>
                        <li><a href="#"><img src="./svg/twitter.svg" alt="" class="svg"></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-7 mx-auto">
                <form class="tf__blog_form" action="mailto:support@ourcanvas.site" method="post" enctype="text/plain">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="tf__blog_form_input tf__contact_form_input">
                                <label>Name (required)</label>
                                <input type="text" name="name" placeholder="Your name" required>
                            </div>
                        </div>
                        <!-- Add other form fields here -->
                        <div class="col-xl-12">
                            <div class="tf__blog_form_input tf__contact_form_input">
                                <label>Message (required)</label>
                                <textarea rows="4" name="message" placeholder="Type your message here" required></textarea>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="tf__common_btn">Send</button>
                </form>
            </div>
        </div>
    </div>
</section>

    <!--============================
        CONTACT FORM END
    ==============================-->

    <!--============================
        FOOTER START
    ==============================-->
  <section class="tf__footer tf__features_footer pt_100">
      <div class="container">
      <div class="row">
          <div class="col-xl-2 col-sm-6 col-md-3">
            <div class="tf__footer_left">
              <a href="index.html" class="tf__footer_logo">
                <img
                  src="images/Logo_1.png"
                  alt="Contisai"
                  class="img-fluid w-100" >
              </a>
              <div class="tf__footer_icon d-flex flex-wrap align-items-center">
                <ul class="d-flex flex-wrap">
                  <li>
                    <a href="https://www.facebook.com/ourcanvas19"><i class="fa-brands fa-facebook"></i></a>
                  </li>
                   <li>
                    <a href="https://www.youtube.com/@Ourcanvas19"><i class="fa-brands fa-youtube"></i></a>
                  </li>
                   <li>
                    <a href="https://www.instagram.com/our.canvas_/"><i class="fa-brands fa-instagram"></i></a>
                  </li>
                  <!-- <li>
                    <a href="#"><i class="fa-brands fa-github"></i></a>
                  </li> -->
                </ul>
              </div>
            </div>
          </div>
          <div class="col-xl-2 col-sm-6 col-md-3">
            <div class="tf__quick_link">
              <h5>Social Medias</h5>
              <ul>
                <li><a href="https://www.youtube.com/@Ourcanvas19">Youtube</a></li>
                <li><a href="https://www.facebook.com/ourcanvas19">Facebook</a></li>
                <li><a href="https://www.instagram.com/our.canvas_/">Instagram</a></li>
                <!-- <li><a href="#">Text editing</a></li>
                <li><a href="#">Copy writing</a></li>
                <li><a href="#">Creative writing</a></li> -->
              </ul>
            </div>
          </div>
          <div class="col-xl-2 col-sm-6 col-md-3">
            <div class="tf__quick_link tf__quick_link_sm">
              <h5>Links</h5>
              <ul>
                <li><a href="/about">About Us</a></li>
                <li><a href="/team">Team</a></li>
                <li><a href="/concerns">Our Concerns</a></li>
                <!-- <li><a href="#">All solutions</a></li> -->
              </ul>
            </div>
          </div>
          <div class="col-xl-2 col-sm-6 col-md-3">
            <div class="tf__quick_link tf__quick_link_sm">
              <h5>Offices</h5>
              <ul>
                <li><a href="#">Dhaka</a></li>
                <!--<li><a href="#">Rajshahi</a></li>-->
                <li><a href="#">Chattagram</a></li>
              </ul>
            </div>
          </div>
          <div class="col-xl-4 col-md-12 mx-auto">
            <div class="tf__address tf__quick_link_sm tf__address_md">
              <h5>JOIN COMMUNITY</h5>
              <div class="tf__contact_area">
              <span
                ><i class="fas fa-comment-alt-lines" aria-hidden="true"></i
              ></span>
              <div class="tf__contact_icon_text">
                <p>Email us</p>
                <a href="mailto:support@ourcanvas.site">support@ourcanvas.site</a>
              </div>
            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-12">
            <div
              class="tf__copyright d-flex flex-wrap justify-content-between mt_50 mb_30"
            >
              <p>© 2024 Our Canvas. All rights reserved.</p>
              <ul class="d-flex flex-wrap">
                <!--<li><a href="#">Sitemap</a></li>-->
                <!--<li><a href="#">Security</a></li>-->
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms of Service</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--============================
        FOOTER END
    ==============================-->

    <!--jquery library js-->
    <script src="js/plugin.js"></script>
    <!--main js-->
    <script src="js/main.js"></script>

    <!--jquery library js-->
    <script src="/js/plugin.js"></script>
    <!--main js-->
    <script src="/js/main.js"></script>


<script>
// slider.js

document.addEventListener("DOMContentLoaded", function () {
    var swiper = new Swiper('.brand-slider', {
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        slidesPerView: 4,
        spaceBetween: 30,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 10,
            },
            480: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
            1024: {
                slidesPerView: 4,
                spaceBetween: 30,
            },
        },
    });
});


</script>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


<!--[if (!IE)|(gt IE 8)]><!-->
<script src="https://www.citygroup.com.bd/frontend/js/jquery-2.1.4.min.js"></script>
<!--<![endif]-->

<!-- ====Bootstrap JS==== -->
<script src="https://www.citygroup.com.bd/frontend/js/bootstrap.min.js"></script>

<!-- ====jQuery owl carousel==== -->
<script src="https://www.citygroup.com.bd/frontend/js/owl.carousel.min.js"></script>

<!-- =====jQuery easing==== -->
<script src="https://www.citygroup.com.bd/frontend/js/jquery.easing.1.3.min.js"></script>

<!-- =====jQuery Parallax==== -->
<script src="https://www.citygroup.com.bd/frontend/js/jquery.parallax-1.1.3.js"></script>

<!-- ====WOW Animation==== -->
<script src="https://www.citygroup.com.bd/frontend/js/wow.min.js"></script>

<!--Activating WOW Animation only for modern browser-->
<!--[if !IE]><!-->


<script> document.addEventListener("DOMContentLoaded", function() {
    const counters = document.querySelectorAll('.counter');
    const speed = 200; // The lower the speed, the faster the count

    counters.forEach(counter => {
        const countUp = () => {
            const target = +counter.getAttribute('data-target');
            let count = +counter.innerText;

            // Calculate the increment
            const increment = target / speed;

            const updateCount = () => {
                if (count < target) {
                    count += increment;
                    counter.innerText = Math.ceil(count);
                    setTimeout(updateCount, 1);
                } else {
                    counter.innerText = target;
                    setTimeout(() => {
                        counter.innerText = '0';
                        count = 0;
                        updateCount();
                    }, 1000); // 1 second delay before resetting the counter
                }
            };

            updateCount();
        };

        countUp();
    });
});
</script>
<script type="text/javascript">new WOW().init();</script>
<!--<![endif]-->

<!--Oh Yes, IE 9+ Supports animation, lets activate for IE 9+-->
<!-- [if gte IE 9]>
<script type="text/javascript">new WOW().init();</script>
<![endif] -->

<!-- ====Mean Menu Js / Mobile Menu JS==== -->
<script src="https://www.citygroup.com.bd/frontend/js/jquery.meanmenu.min.js"></script>

<!-- ====jQuery main script==== -->
<script src="https://www.citygroup.com.bd/frontend/js/main.js"></script>
<!-- Toast message -->
<script src="https://www.citygroup.com.bd/backend/dist/js/jquery.toast.js"></script>
 <!-- recaptcha -->

@endsection