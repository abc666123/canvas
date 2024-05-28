@extends('layouts.app')

@section('title', 'Page Title')

@section('content')

<section class="tf__blog pt_165 mb_200">
      <div class="container">
        <div class="row">
          <div class="col-xl-8 m-auto">
            <div class="tf__common_heading pb_20" style="color: white!important;">
              <h6>HOME / Team</h6>
              <h2 class="tf__common_heading_color" style="color: white!important;">Our Team</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="tf__blog_iteam pt_60">
        <div class="container">
        <div class="container">
        <div class="row">

        <div class="col-md-4">
                <div class="tf__team_member">
                    <div class="tf__team_member_img" onclick="showIcons('member2')">
                        <img src="images/1x/b.png" alt="team member" class="img-fluid">
                        <div id="member2" class="tf__social_icons">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="far fa-envelope"></i></a>
                        </div>
                    </div>
                    <div class="tf__team_member_info">
                        <a href="/khalekuzzaman">
                             <h3 style="color: red!important;"><b>Adv Khalekuzzaman</b></h3>
                            <h5>Advisor (Legal)</h5>
                        </a>
                    </div>
                </div>
            </div>


        <div class="col-md-4">
                <div class="tf__team_member">
                    <div class="tf__team_member_img" onclick="showIcons('member1')">
                        <img src="images/1x/arifur.png" alt="team member" class="img-fluid">
                        <div id="member1" class="tf__social_icons">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="far fa-envelope"></i></a>
                        </div>
                    </div>
                    <div class="tf__team_member_info">
                        <a href="/arifur">
                            <h3 style="color: red!important;"><b>Arifur Rahman</b></h3>
                            <h5>Advisor ( Information & Technology)</h5>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="tf__team_member">
                    <div class="tf__team_member_img" onclick="showIcons('member1')">
                        <img src="images/1x/nazmul.png" alt="team member" class="img-fluid">
                        <div id="member1" class="tf__social_icons">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="far fa-envelope"></i></a>
                        </div>
                    </div>
                    <div class="tf__team_member_info">
                        <a href="/nazmul">
                             <h3 style="color: red!important;"><b>Nazmul Bappy</b></h3>
                            <h5>Advisor (Production)</h5>
                        </a>
                    </div>
                </div>
            </div>

           
            <div class="col-md-4">
                <div class="tf__team_member">
                    <div class="tf__team_member_img" onclick="showIcons('member1')">
                        <img src="images/vp.png" alt="team member" class="img-fluid">
                        <div id="member1" class="tf__social_icons">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="far fa-envelope"></i></a>
                        </div>
                    </div>
                    <div class="tf__team_member_info">
                        <a href="/najrana">
                             <h3 style="color: red!important;"><b>Najrana Mashhur</b></h3>
                            <h5>Vice President</h5>
                        </a>
                    </div>
                </div>
            </div>


                   <div class="col-md-4">
                <div class="tf__team_member">
                    <div class="tf__team_member_img" onclick="showIcons('member1')">
                        <img src="images/al-amin.png" alt="team member" class="img-fluid">
                        <div id="member1" class="tf__social_icons">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="far fa-envelope"></i></a>
                        </div>
                    </div>
                    <div class="tf__team_member_info">
                        <a href="/al-amin">
                           <h3 style="color: red!important;"><b>Al-Amin Qureshi

</b></h3>
                            <h5>Head of HR & Admin</h5>
                        </a>
                    </div>
                </div>
            </div>
            
            
            <div class="col-md-4">
                <div class="tf__team_member">
                    <div class="tf__team_member_img" onclick="showIcons('member1')">
                        <img src="images/1x/junaed.png" alt="team member" class="img-fluid">
                        <div id="member1" class="tf__social_icons">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="far fa-envelope"></i></a>
                        </div>
                    </div>
                    <div class="tf__team_member_info">
                        <a href="/habib">
                             <h3 style="color: red!important;"><b>Junaed Habib</b></h3>
                            <h5>Head of Program & Operations</h5>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="tf__team_member">
                    <div class="tf__team_member_img" onclick="showIcons('member2')">
                        <img src="images/1x/m.png" alt="team member" class="img-fluid">
                        <div id="member2" class="tf__social_icons">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="far fa-envelope"></i></a>
                        </div>
                    </div>
                    <div class="tf__team_member_info">
                        <a href="/farhat">
                            <h3 style="color: red!important;"><b>Farhat Maisha</b></h3>
                            <h5>Head of Online</h5>
                        </a>
                    </div>
                </div>
            </div>
            
                   <div class="col-md-4">
                <div class="tf__team_member">
                    <div class="tf__team_member_img" onclick="showIcons('member1')">
                        <img src="images/aziz.png" alt="team member" class="img-fluid">
                        <div id="member1" class="tf__social_icons">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="far fa-envelope"></i></a>
                        </div>
                    </div>
                    <div class="tf__team_member_info">
                        <a href="/aziz">
                           <h3 style="color: red!important;"><b>Ismail Bin Aziz

</b></h3>
                            <h5>Head of Marketing</h5>
                        </a>
                    </div>
                </div>
            </div>
            
            
            <div class="col-md-4">
                <div class="tf__team_member">
                    <div class="tf__team_member_img" onclick="showIcons('member2')">
                        <img src=" images/1x/yaminhassanmahdi.jpeg" alt="Yamin Hassan Maahdi" class="img-fluid">
                        <div id="member2" class="tf__social_icons">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="far fa-envelope"></i></a>
                        </div>
                    </div>
                    <div class="tf__team_member_info">
                        <a href="/yaminhassanmahdi">
                             <h3 style="color: red!important;"><b>Yamin Hassan Mahdi</b></h3>
                            <h5>Cheif Technology Officer</h5>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="tf__team_member">
                    <div class="tf__team_member_img" onclick="showIcons('member2')">
                        <img src=" images/ankhi.png" alt="ankhi" class="img-fluid">
                        <div id="member2" class="tf__social_icons">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="far fa-envelope"></i></a>
                        </div>
                    </div>
                    <div class="tf__team_member_info">
                        <a href="/ankhi">
                             <h3 style="color: red!important;"><b>Ankhi Noor </b></h3>
                            <h5>Head of Content</h5>
                        </a>
                    </div>
                </div>
            </div>
           
           

            <div class="col-md-4">
                <div class="tf__team_member">
                    <div class="tf__team_member_img" onclick="showIcons('member1')">
                        <img src="images/am.png" alt="team member" class="img-fluid">
                        <div id="member1" class="tf__social_icons">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="far fa-envelope"></i></a>
                        </div>
                    </div>
                    <div class="tf__team_member_info">
                        <a href="/saif">
                             <h3 style="color: red!important;"><b>Saif Bin Ibrahim</b>
</h3>
                            <h5>Asst. Manager ( Finance & Accounts)</h5>
                        </a>
                    </div>
                </div>
            </div>

     

                   <div class="col-md-4">
                <div class="tf__team_member">
                    <div class="tf__team_member_img" onclick="showIcons('member1')">
                        <img src="images/saif.png" alt="team member" class="img-fluid">
                        <div id="member1" class="tf__social_icons">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="far fa-envelope"></i></a>
                        </div>
                    </div>
                    <div class="tf__team_member_info">
                        <a href="/shafin">
                           <h3 style="color: red!important;"><b>Shafin Haider

</b></h3>
                            <h5>In-charge, Production 
(Chattogram Division) </h5>
                        </a>
                    </div>
                </div>
            </div>
                   <div class="col-md-4">
                <div class="tf__team_member">
                    <div class="tf__team_member_img" onclick="showIcons('member1')">
                        <img src="images/abed.png" alt="team member" class="img-fluid">
                        <div id="member1" class="tf__social_icons">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="far fa-envelope"></i></a>
                        </div>
                    </div>
                    <div class="tf__team_member_info">
                        <a href="/abed">
                           <h3 style="color: red!important;"><b>Abed Mahmud

</b></h3>
                            <h5> DY In-charge, Production 
(Dhaka Division) </h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- <div class="col-md-4">
                <div class="tf__team_member">
                    <div class="tf__team_member_img" onclick="showIcons('member2')">
                        <img src="images/1x/m.png" alt="team member" class="img-fluid">
                        <div id="member2" class="tf__social_icons">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="far fa-envelope"></i></a>
                        </div>
                    </div>
                    <div class="tf__team_member_info">
                        <a href="profile_page.html">
                            <h4>Farhat Maisha</h4>
                            <h5>Head of Online</h5>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="tf__team_member">
                    <div class="tf__team_member_img" onclick="showIcons('member2')">
                        <img src="images/1x/m.png" alt="team member" class="img-fluid">
                        <div id="member2" class="tf__social_icons">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="far fa-envelope"></i></a>
                        </div>
                    </div>
                    <div class="tf__team_member_info">
                        <a href="profile_page.html">
                            <h4>Farhat Maisha</h4>
                            <h5>Head of Online</h5>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="tf__team_member">
                    <div class="tf__team_member_img" onclick="showIcons('member2')">
                        <img src="images/1x/m.png" alt="team member" class="img-fluid">
                        <div id="member2" class="tf__social_icons">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="far fa-envelope"></i></a>
                        </div>
                    </div>
                    <div class="tf__team_member_info">
                        <a href="profile_page.html">
                            <h4>Farhat Maisha</h4>
                            <h5>Head of Online</h5>
                        </a>
                    </div>
                </div>
            </div>

            
            </div> -->
            <!-- Add more team members here -->
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