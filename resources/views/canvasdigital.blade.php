@extends('layouts.app')

@section('title', 'Page Title')

@section('content')


<section class="tf__about pt_200 pb_95">
      <div class="container">
        <div class="row">
          <div class="col-xl-6 col-lg-6">
            <div class="tf__common_heading tf__common_heading2">
              <h6>home/ our Concerns / Canvas Digital</h6>
              <h2 class="tf__common_heading_color">
                Canvas Digital
              </h2>
              <p>
              Canvas Digital is a sister concern of Our Canvas. This digital marketing agency was launched in 2023 to meet the growing demands of our clients. Within just one year, we have received tremendous feedback from our esteemed corporate clients through our positive strategies. As a result, we are actively working on various creative production services in Dhaka and Chattogram. Canvas Digital boasts a team of tasteful, skilled, and hardworking young professionals who have been working in this sector with professionalism for a long time.
              </p>
              <a href="#" class="tf__common_btn"
                >Sign up for free <i class="fa-regular fa-arrow-right-long"></i
              ></a>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6">
            <div class="tf__about_img">
              <img
                src="images/canvasdigital.png"
                alt="about img"
                class="img-fluid w-100" >
            </div>
          </div>
        </div>
        <div class="col-xl-8 col-sm-12 m-auto" style="text-align: center";>
            <div class="tf__counter mt_75">
                <div class="tf__counter_text">
                <h2 style="color: red!important;"><span class="counter" style="color: red!important;" data-target="100">0</span>+</h2>
                    <h4>Total Project Completed</h4>
                </div>
                <div class="tf__counter_img">
                    <img src="images/counter_img.png" alt="counter" class="img-fluid w-100">
                </div>
            </div>
        </div>
    </div>
        
   
    
    
    </section>

    <section class="tf__work_process pt_100 pb_50">
      <div class="container">
        <div class="row">
          <div class="col-xl-8 m-auto">
            <div class="tf__common_heading">
              <h6>WORKING PROCESS</h6>
              <h2 class="tf__common_heading_color">What We Do?</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-5 col-lg-6 m-auto">
            <div class="">
              <img
                src="images/work.jpeg"
                alt="process"
                class="img-fluid w-100" >
            </div>
          </div>
          <div class="col-xl-4 col-lg-5 mx-auto">
            <div class="tf__process_accordion">
              <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne01">
                    <button
                      class="accordion-button tf__process_accordion_btn"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#collapseOne01"
                      aria-expanded="true"
                      aria-controls="collapseOne01"
                    >
                      <span>1</span>
                      We Shoot Interviews
                    </button>
                  </h2>
                  <div
                    id="collapseOne01"
                    class="accordion-collapse collapse show"
                    aria-labelledby="headingOne01"
                    data-bs-parent="#accordionExample"
                  >
                    <div class="accordion-body">
                      <p>
                      We cover interviews of many public figures and ask questions which are requested by our viewers.
                      </p>
                      <!-- <a href="#" class="tf__common_btn tf__accrodian_link"
                        >Get Started
                        <i class="fa-regular fa-arrow-right-long"></i
                      ></a> -->
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo02">
                    <button
                      class="accordion-button collapsed tf__process_accordion_btn"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#collapseTwo02"
                      aria-expanded="false"
                      aria-controls="collapseTwo02"
                    >
                      <span>2</span>
                      We Cover Entertainment
                    </button>
                  </h2>
                  <div
                    id="collapseTwo02"
                    class="accordion-collapse collapse"
                    aria-labelledby="headingTwo02"
                    data-bs-parent="#accordionExample"
                  >
                    <div class="accordion-body">
                      <p>
                        We create blogs regarding entertainment topics and publish them into our social accounts.
                      </p>
                      <!-- <a href="#" class="tf__common_btn tf__accrodian_link"
                        >Get Started<i
                          class="fa-regular fa-arrow-right-long"
                        ></i
                      ></a> -->
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree03">
                    <button
                      class="accordion-button collapsed tf__process_accordion_btn"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#collapseThree03"
                      aria-expanded="false"
                      aria-controls="collapseThree03"
                    >
                      <span>3</span>
                     We create sports contents
                    </button>
                  </h2>
                  <div
                    id="collapseThree03"
                    class="accordion-collapse collapse"
                    aria-labelledby="headingThree03"
                    data-bs-parent="#accordionExample"
                  >
                    <div class="accordion-body">
                      <p>
                       We cover sports live streaming and discussions.
                      </p>
                      <!-- <a href="#" class="tf__common_btn tf__accrodian_link"
                        >Get Started<i
                          class="fa-regular fa-arrow-right-long"
                        ></i
                      ></a> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <a
              href="https://www.youtube.com/watch?v=6lersyYICsY"
              class="tf__common_btn play_btn"
              >Official Promo<i class="fa-sharp fa-regular fa-circle-play"></i
            ></a>
          </div>
        </div>
      





      </div>
    </section>



    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brand Logo Slider</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <style>
        /* styles.css */
        
        .brand-section {
            background-color: #f9f9f9;
            padding: 60px 0;
        }
        
        .brand-wrapper {
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .brand-wrapper h6 {
            margin-bottom: 30px;
            font-size: 24px;
            color: #333;
        }
        
        .swiper {
            width: 100%;
            height: 100%;
        }
        
        .swiper-slide {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .brand-image img {
            max-width: 100%;
            height: auto;
            display: block;
        }
        
        .swiper-button-next,
        .swiper-button-prev {
            color: #3333333d; /* Customize the color as needed */
        }
    </style>
</head>
<body>
    <section class="tf__about pt_200 pb_95">
        <div class="container">
            <div class="row">
                <div class="brand-section fix section-padding pt-0">
                    <div class="container">
                        <div class="brand-wrapper"><br>
                            <h6 class="text-center wow fadeInUp" data-wow-delay=".3s">Brands Who Trust Us</h6>
                            <div class="swiper brand-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="brand-image">
                                            <img src="images/brand1.jpeg" alt="brand-img">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="brand-image">
                                            <img src="images/brand3.jpeg" alt="brand-img">
                                        </div>
                                    </div>


                                    <div class="swiper-slide">
                                        <div class="brand-image">
                                            <img src="images/brand2.jpeg" alt="brand-img">
                                        </div>
                                    </div>
                                   
                                    <div class="swiper-slide">
                                        <div class="brand-image">
                                            <img src="images/brand5.jpeg" alt="brand-img">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="brand-image">
                                            <img src="images/brand4.jpeg" alt="brand-img">
                                        </div>
                                    </div>
                                   
                                    <!-- Add more slides as needed -->
                                </div>
                                <!-- Add Pagination -->
                                <div class="swiper-pagination"></div>
                                <!-- Add Navigation -->
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
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
</body>
</html>


    <!--============================
        ABOUT END
    ==============================-->

    <!--============================
        BENEFITS START
    ==============================-->
    <section class="tf__service">
      <div class="container">
        <div class="tf__brand pt_80 pb_65">
          <div class="row">
            <div class="col-xl-12">
              <div class="tf__brand_heading">
                <h6 style="color: white!important;">Services We Provide </h6>
              </div>
            </div>
          </div>
          <!-- <div class="row justify-content-between">
            <div class="col-xl-2 col-sm-6 col-md-4">
              <a href="#" class="tf__brand_img">
                <img
                  src="images/Brands-1.png"
                  alt="brand name"
                  class="img-fluid w-100" >
              </a>
            </div>
            <div class="col-xl-2 col-sm-6">
              <a href="#" class="tf__brand_img">
                <img
                  src="images/Brands-2.png"
                  alt="brand name"
                  class="img-fluid w-100" >
              </a>
            </div>
            <div class="col-xl-2 col-sm-6">
              <a href="#" class="tf__brand_img">
                <img
                  src="images/Brands-3.png"
                  alt="brand name"
                  class="img-fluid w-100" >
              </a>
            </div>
            <div class="col-xl-2 col-sm-6">
              <a href="#" class="tf__brand_img">
                <img
                  src="images/Brands-4.png"
                  alt="brand name"
                  class="img-fluid w-100" >
              </a>
            </div>
            <div class="col-xl-2 col-sm-6">
              <a href="#" class="tf__brand_img">
                <img
                  src="images/Brands-5.png"
                  alt="brand name"
                  class="img-fluid w-100" >
              </a>
            </div>
          </div>
        </div>
      </div> -->
      <div class="row">
            <div class="col-xl-9">
              <div class="row">
                <div class="col-xl-4 col-md-6 mb-4">
                  <div class="tf__single_service">
                      
                    <span><i class="fa-solid fa-clapperboard"></i></span>
                    <a
                      class="tf__single_service_link"
                      href="use-cases-details.html"
                      >TVC/OVC</a
                    >
                    <p>We make TVCs and OVSs for the companies</p>
                    <ul>
                      <li>Corporate Commercial</li>
                      <li>Ideas into screen</li>
                    </ul>
                  </div>
                </div>
                <div class="col-xl-4 col-md-6 mb-4">
                  <div class="tf__single_service">
                    <span><i class="fa-regular fa-user"></i></span>
                    <a
                      class="tf__single_service_link"
                      href="use-cases-details.html"
                      >Documentary </a
                    >
                    <p>We make Documentaries & Profile Videos</p>
                    <ul>
                      <li>Profile Video</li>
                      <li>Documentary</li>
                    </ul>
                  </div>
                </div>
                <div class="col-xl-4 col-md-6 mb-4">
                  <div class="tf__single_service">
                    <span><i class="fa-brands fa-product-hunt"></i></span>
                    <a
                      class="tf__single_service_link"
                      href="use-cases-details.html"
                      >PR Support</a
                    >
                    <p>We help companies to to do better pr</p>
                    <ul>
                      <li> We make ads</li>
                      <li>We help with data</li>
                    </ul>
                  </div>
                </div>
                <div class="col-xl-4 col-md-6 mb-4">
                  <div class="tf__single_service">
                    <span><i class="fa-solid fa-copyright"></i></span>
                    <a
                      class="tf__single_service_link"
                      href="use-cases-details.html"
                      >Creative Branding </a
                    >
                    <p>For creative branding, Our Canvas is all you need</p>
                    <ul>
                      <li>Creative works</li>
                      <li>Brand Management</li>
                    </ul>
                  </div>
                </div>
                <div class="col-xl-4 col-md-6 mb-4">
                  <div class="tf__single_service">
                    <span><i class="fa-solid fa-bullhorn"></i></span>
                    <a
                      class="tf__single_service_link"
                      href="use-cases-details.html"
                      > Influencer Marketing</a
                    >
                    <p>We connect you with Influancers for better pr</p>
                    <ul>
                      <li>Influancer matching</li>
                      <li>Advertisements</li>
                    </ul>
                  </div>
                </div>
                <div class="col-xl-4 col-md-6 mb-4">
                  <div class="tf__single_service">
                    <span><i class="fa-solid fa-microchip"></i></span>
                    <a
                      class="tf__single_service_link"
                      href="use-cases-details.html"
                      >IT Solution</a
                    >
                    <p>We provide high tech supports to companies</p>
                    <ul>
                      <li>Server Management</li>
                      <li>Software Building</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3">
              <div class="tf__single_service_right">
                <div class="tf__single_service_right_img">
                  <img
                    src="images/service_img.png"
                    alt="service"
                    class="img-fluid w-100" >
                </div>
                <a href="/conact" class="tf__single_service_right_heading"
                  > Contact Us for a discussion</a
                >
                <p>Write unique & plagiarism- free content for blogs</p>
                <a href="/contact" class="tf__common_btn"
                  >Contact Us
                  <i class="fa-regular fa-arrow-right-long"></i
                ></a>
              </div>
            </div>
          </div>
        </div>

           
    </section>
    <!--============================
        BENEFITS END
    ==============================-->

    <!--============================
        TEAM START
    ==============================-->
    <section class="tf__faq pt_100 pb_240">
      <div class="container">
        <div class="row">
          <div class="col-xl-6 col-md-8 m-auto">
            <div class="tf__common_heading tf__faq_common_heading">
              <h6>faq</h6>
              <h2 class="tf__common_heading_color">
                Frequently asked question
              </h2>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xl-8 col-md-8 col-lg-8 mx-auto">
            <div class="accordion tf__faq_accordion" id="accordionExample01">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button
                    class="accordion-button"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseOne"
                    aria-expanded="true"
                    aria-controls="collapseOne"
                  >
                    What is Our Canvas?
                  </button>
                </h2>
                <div
                  id="collapseOne"
                  class="accordion-collapse collapse show"
                  aria-labelledby="headingOne"
                  data-bs-parent="#accordionExample01"
                >
                  <div class="accordion-body">
                    <p>
                      Our Canvas is a Degital Media Company that creates digital contents specially for youth.
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo"
                    aria-expanded="false"
                    aria-controls="collapseTwo"
                  >
                    Is Our Canvas News Channel?
                  </button>
                </h2>
                <div
                  id="collapseTwo"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingTwo"
                  data-bs-parent="#accordionExample01"
                >
                  <div class="accordion-body">
                    <p>
                     No! Our Canvas isn't a news portal instead It is a digital media portal which provides latest Interviewes.
                    </p>
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