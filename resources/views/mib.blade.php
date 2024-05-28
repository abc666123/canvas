@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
<section class="tf__about pt_200 pb_95">
      <div class="container">
        <div class="row">
          <div class="col-xl-6 col-lg-6">
            <div class="tf__common_heading tf__common_heading2">
              <h6>home / Shows / Made In Bangladesh</h6>
              <h2 class="tf__common_heading_color">
              Face To Face
              </h2>
              <h3>
            
              <p>
              
              "Made In Bangladesh" narrates the global success story of industrialization in Bangladesh. Investment and competition in various sectors are driving the growth of industries across the nation. With a focus on export-oriented endeavors, the country is consistently achieving remarkable strides. Recently, Our Canvas introduced a new show titled 'Made in Bangladesh'. This show offers a direct insight into the production processes of various industrial groups across all sectors, featuring discussions with Managing Directors and Directors at their respective factories.
            
            </p>
              <!-- <a href="#" class="tf__common_btn"
                >Sign up for free <i class="fa-regular fa-arrow-right-long"></i
              ></a> -->
            </div>
          </div>
          <div class="col-xl-6 col-lg-6">
            <div class="tf__about_img">
              <img
                src="images/mb.png"
                alt="about img"
                class="img-fluid w-100" >
            </div>
          </div>
        </div>
       
      </div>
    </section>

  
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