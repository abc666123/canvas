@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
    
<section class="slider_area">
    <div class="container-fluid">
        <div class="row slider_wrapper">
            <div class="main_slider">

                                <!-- <figure class="item">

                                                               
                                         
                                            <img src="/images/slider1.png" alt="https://www.citygroup.com.bd/storage/slider/2024-02-06-65c236f2040de.jpg">
                                        
                </figure>
                                <figure class="item">

                                                                                  
                                            <img src="/images/slider2.png" alt="https://www.citygroup.com.bd/storage/slider/2024-02-06-65c1c99083bff.jpg">
                                        
                </figure> -->
                <figure class="item">

                                                                                  
<img src="/images/slider4.png" alt="https://www.citygroup.com.bd/storage/slider/2022-03-22-6239708077eae.jpg">

</figure>
                                <figure class="item">

                                                                                
                                            <img src="/images/slider3.png" alt="https://www.citygroup.com.bd/storage/slider/2024-02-05-65c127349561e.jpg">
                                        
                </figure>
                             
                                
                
            </div>
            <div class="mainslider_nav">
                <i class="fa fa-angle-left testi_prev"></i>
                <i class="fa fa-angle-right testi_next"></i>
            </div>
        </div>
    </div>

 

    <section class="company_overview-area text-justify section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="section-title white-title text-center">Who We Are?</h2>
                <div class="company-overview-content">
                    <p>
                                              </p><p> Our Canvas is a unique digital media platform that keeps the audience updated with regular reports on a variety of important topics, including sports, entertainment, lifestyle, information technology, and economics. Additionally, it creates visual reports to meet the diverse needs of its viewers.

                                              &nbsp;<br><br>The platform also regularly hosts its signature talk show titled "Face to Face," where the country's influential policymakers, eminent politicians, popular actors and actresses, administrative executives, successful corporate personalities, YouTubers, and young change-makers are invited to share their stories of success, achievement, and challenges across various sectors of life.

                                              &nbsp;<br><br>Besides this, we have a corporate production arm called Canvas Digital. Through this division, we have recently commenced activities aimed at producing commercial visual content. Our talented, skilled, and creative team members ensure that our visual productions are handled with professionalism and maintain a strong reputation.
                                                   </p>
                                           <p></p>
                </div>

                
            </div>
        </div>
    </div>
</section>

      <div class="container">
        <div class="row">
          <div class="col-xl-7 m-auto">
            <div class="tf__banner_text">
            
            
              <a href="/about" class="tf__common_btn"
                >Know more <i class="fa-regular fa-arrow-right-long"></i
              ></a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-10 m-auto">
            <div class="tf__banner_img">
              <img
                src="images/home-below.jpeg"
                alt="banner img"
                class="img-fluid w-100" >
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--============================
        BANNER END
    ==============================-->

    <!--============================
        SERVICE START
    ==============================-->
    <section class="tf__service">
      <div class="container">
        <div class="tf__brand pt_80 pb_65">
          <div class="row">
            <div class="col-xl-12">
              <div class="tf__brand_heading">
                <h6> <span style="color: white!important;">Completed Over 75 Interviews with in 2 years  </span> </h6>
              </div>
            </div>
          </div>


        <div class="container">
            <div class="row">
                <div class="brand-section fix section-padding pt-0">
                    <div class="container">
                        <div class="brand-wrapper"><br>
                            <h6 class="text-center wow fadeInUp" data-wow-delay=".3s">Categories We Cover</h6>
                            <div class="swiper brand-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="brand-image">
                                            <img src="images/lifestyle.jpeg" alt="brand-img" ><h5 style="text-align: center; padding: 4px;">Lifestyle</h5>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="brand-image">
                                            <img src="images/sports.jpeg" alt="brand-img"><h5 style="text-align: center; padding: 4px;">Sports</h5>
                                        </div>
                                    </div>


                                    <div class="swiper-slide">
                                        <div class="brand-image">
                                            <img src="images/business.jpeg" alt="brand-img"><h5 style="text-align: center; padding: 4px;">Business</h5>
                                        </div>
                                    </div>
                                   
                                    <div class="swiper-slide">
                                        <div class="brand-image">
                                            <img src="images/entertainment.jpeg" alt="brand-img"><h5 style="text-align: center; padding: 4px;">News Update</h5>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="brand-image">
                                            <img src="images/sports.jpeg" alt="brand-img"><h5 style="text-align: center; padding: 4px;">Sports</h5>
                                        </div>
                                    </div>
                                   
                                    <div class="swiper-slide">
                                        <div class="brand-image">
                                            <img src="images/tk.jpeg" alt="brand-img"><h5 style="text-align: center; padding: 4px;">Talk Show</h5>
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
      <!-- <div class="row">
            <div class="col-xl-9">
              <div class="row">
                <div class="col-xl-4 col-md-6 mb-4">
                  <div class="tf__single_service">
                    <span><i class="ca-icon-edit-pen"></i></span>
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
                    <span><i class="ca-icon-bag"></i></span>
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
                    <span><i class="ca-icon-document"></i></span>
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
                    <span><i class="ca-icon-bookmark"></i></span>
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
                    <span><i class="ca-icon-ticket-star"></i></span>
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
                    <span><i class="ca-icon-graph"></i></span>
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
                <a href="#" class="tf__common_btn"
                  >Sign up for free
                  <i class="fa-regular fa-arrow-right-long"></i
                ></a>
              </div>
            </div>
          </div>
        </div>

            -->
    </section>
    <!--============================
        SERVICE END
    ==============================-->

    <!--============================
        WORK PROCESS START
    ==============================-->
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
                     We host talk shows
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
        <div class="row">
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
      </div>
    </section>
    <!--============================
        WORK PROCESS END
    ==============================-->

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
    <!-- ============================
        CONTENT CREATOR START
    ==============================--> 
    <!-- <section class="tf__content_creator pt_100 pb_100">
      <div class="container">
        <div class="row">
          <div class="col-xl-8 col-md-8 m-auto">
            <div class="tf__common_heading">
              <h6><span>Met.ai</span> HELP YOU TO CREATE CONTENT FAST</h6>
              <h2 class="tf__common_heading_color">Power of an AI content</h2>
            </div>
          </div>
        </div>
        <div class="tf__content_creator_top">
          <div class="row">
            <div class="col-xl-4 col-lg-5 m-auto">
              <div class="tf__content_creator_top_img">
                <img
                  src="images/creator_img-1.jpg"
                  alt="creator"
                  class="img-fluid w-100" >
              </div>
            </div>
            <div class="col-xl-5 col-lg-5 mx-auto">
              <div class="tf__content_creator_top_text">
                <h4>The following ideas are inspired by your brand.</h4>
                <p>
                  Got writer's block? Get ideas for stories, blog posts, website
                  copy, research topics and more.
                </p>
                <ul>
                  <li>Save time rapid AI-driven generation</li>
                  <li>No outdates continuous code document</li>
                </ul>
                <a href="#" class="tf__common_btn"
                  >Sign up for free
                  <i class="fa-regular fa-arrow-right-long"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
        <div class="tf__content_creator_bottom">
          <div class="row">
            <div class="col-xl-6 col-lg-6">
              <div class="tf__single_content_creator_bottom">
                <div class="tf__single_content_creator_bottom_img">
                  <img
                    src="images/creator_img-2.jpg"
                    alt="creator"
                    class="img-fluid w-100" >
                </div>
                <div class="tf__single_content_creator_bottom_text">
                  <h4>
                    Write higher converting assistance post for all latest user
                  </h4>
                  <p>
                    Got writer's block? Get ideas for stories, blog posts,
                    website copy, research topics and more.
                  </p>
                  <a href="#" class="tf__common_btn tf__common_btn2"
                    >Sign up for free
                    <i class="fa-regular fa-arrow-right-long"></i
                  ></a>
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6">
              <div class="tf__single_content_creator_bottom">
                <div class="tf__single_content_creator_bottom_img">
                  <img
                    src="images/creator_img-3.jpg"
                    alt="creator"
                    class="img-fluid w-100" >
                </div>
                <div class="tf__single_content_creator_bottom_text">
                  <h4>Generate blog posts, stories & even book with Met.ai</h4>
                  <p>
                    Got writer's block? Get ideas for stories, blog posts,
                    website copy, research topics and more.
                  </p>
                  <a href="#" class="tf__common_btn tf__common_btn2"
                    >Sign up for free
                    <i class="fa-regular fa-arrow-right-long"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!--============================
        CONTENT CREATOR END
    ==============================

     ============================
        TESTIMONIAL START
    ==============================-->
    <section class="tf__testimonial pt_100 pb_100">
      <div class="container">
        <div class="row">
          <div class="col-xl-8 col-md-8 m-auto">
            <div class="tf__common_heading">
              <!-- <h6>TESTIMONIAL</h6> -->
              <h2> Inspiration </h2>
            </div>
          </div>
        </div>
        <div class="tf__single_testimonial">
          <div class="row testi_slider">
            <div class="col-12">
              <div class="tf__testimonial_item">
                <div class="tf__testimonial_img">
                  <img
                    src="images/mijanur1.jpeg"
                    alt="testimonial"
                    class="img-fluid w-100" >
                </div>
                <div class="tf__testimonial_text">
                  <h4>The work which can be done with honesty, dedication and morale …</h4>
                  <p>
                

The work which can be done with honesty, dedication and morale will see the light of success at some point or the other.
Praying that our canvas will one day reach another height, steadfast in his ideals.
                  </p>

                  <div class="tf__calients_name">
                    <h6> - Sufi Mohammad Mizanur Rahman  </h6>
                    <p> Chairman: PHP Family </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="tf__testimonial_item">
                <div class="tf__testimonial_img">
                  <img
                    src="images/tst2.jpeg"
                    alt="testimonial"
                    class="img-fluid w-100" >
                </div>
                <div class="tf__testimonial_text">
                  <h4> The way Our Canvas is tirelessly working…</h4>
                  <p>
                  The way Our Canvas is tirelessly working to spread the stories of iconic personalities to the younger generation is undoubtedly commendable. I wish them success in their journey.




                  </p>

                  <div class="tf__calients_name">
                    <h6>- Syed Alamgir</h6>
                    <p>CEO, Meghna Group of Industries</p>
                  </div>
                </div>
              </div>
            </div>


 <div class="col-12">
              <div class="tf__testimonial_item">
                <div class="tf__testimonial_img">
                  <img
                    src="images/ins5.jpeg"
                    alt="testimonial"
                    class="img-fluid w-100" >
                </div>
                <div class="tf__testimonial_text">
                  <h4> Our Canvas hopes to spread the stories…</h4>
                  <p>
                 Our Canvas hopes to spread the stories of the victory of the Liberation War to the present generation. Best wishes for them




                  </p>

                  <div class="tf__calients_name">
                    <h6>- M Rezaul Karim Chy
</h6>
                    <p>Mayor, Chattogram City Corporation </p>
                  </div>
                </div>
              </div>
            </div>
            
             <div class="col-12">
              <div class="tf__testimonial_item">
                <div class="tf__testimonial_img">
                  <img
                    src="images/ins4.jpeg"
                    alt="testimonial"
                    class="img-fluid w-100" >
                </div>
                <div class="tf__testimonial_text">
                  <h4>  Our Canvas has gifted us with a lot of amazing content…</h4>
                  <p>
                  Our Canvas has gifted us with a lot of amazing content this time around. I hope in the days to come they will reach greater heights by creating amazing content and create a new vertical in content creation.






                  </p>

                  <div class="tf__calients_name">
                    <h6>- Tanvir Shahriar Rimon
                    
                    
                    </h6>
                    <p>CEO, Rancon Real Estate & Sea Fishing</p>
                  </div>
                </div>
              </div>
            </div>
            
            
            
            <div class="col-12">
              <div class="tf__testimonial_item">
                <div class="tf__testimonial_img">
                  <img
                    src="images/ins6.jpeg"
                    alt="testimonial"
                    class="img-fluid w-100" >
                </div>
                <div class="tf__testimonial_text">
                  <h4>   Behind our canvas is a group of enterprising and…</h4>
                  <p>
                 Behind our canvas is a group of enterprising and hard working young people. May their efforts be enriched through knowledge and learning. Best wishes to all those associated with it


                  </p>

                  <div class="tf__calients_name">
                    <h6>- Mahbubur Rahman BPM (Bar) PPM


                    
                    
                    </h6>
                    <p>Additional IGP, Bangladesh Police</p>
                  </div>
                </div>
              </div>
            </div>
            
            
            
            
            
            
            <div class="col-12">
              <div class="tf__testimonial_item">
                <div class="tf__testimonial_img">
                  <img
                    src="images/tst1.jpeg"
                    alt="testimonial"
                    class="img-fluid w-100" >
                </div>
                <div class="tf__testimonial_text">
                  <h4> They are doing an excellent job.…</h4>
                  <p>
                  I participated in a talk show by Our Canvas. They are doing an excellent job, and as an audience member, I enjoyed their show.

                </p>
                

  
                  <div class="tf__calients_name">
                    <h6>- Roksana Anjuman Nicole</h6>
                    <p>Editor (Assignment & Planning), Jamuna TV</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--============================
        TESTIMONIAL END
    ==============================-->

    <!--============================
        PRICING START
    ==============================-->
    <!-- <section class="tf__pricing pt_100 pb_75">
      <div class="container">
        <div class="row">
          <div class="col-xl-8 col-md-8 m-auto">
            <div class="tf__common_heading">
              <h6>pricing</h6>
              <h2 class="tf__common_heading_color">Fast copywriting by Ai</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-4 col-md-6">
            <div class="tf__single_pricing mb-4">
              <h5>Free Plan</h5>
              <p>Perfect for testing</p>
              <a href="#" class="tf__common_btn tf__pricing_btn"
                >Sign up for free <i class="fa-regular fa-arrow-right-long"></i
              ></a>
              <p><span>Free</span>-7 days trial</p>
              <p>No Credit Card Required</p>
              <ul>
                <li>10 credits per month</li>
                <li>100 bonus credits for the first month</li>
                <li>20+ languages</li>
                <li>80+ copywriting tools</li>
              </ul>
            </div>
          </div>
          <div class="col-xl-4 col-md-6">
            <div class="tf__single_pricing mb-4">
              <h5>Pro</h5>
              <p>Perfect for testing</p>
              <a href="#" class="tf__common_btn tf__pricing_btn"
                >Sign up for free <i class="fa-regular fa-arrow-right-long"></i
              ></a>
              <p><span>$19</span>-7 days trial</p>
              <p>No Credit Card Required</p>
              <ul>
                <li>10 credits per month</li>
                <li>100 bonus credits for the first month</li>
                <li>20+ languages</li>
                <li>80+ copywriting tools</li>
              </ul>
            </div>
          </div>
          <div class="col-xl-4 col-md-6">
            <div class="tf__single_pricing mb-4">
              <h5>Team</h5>
              <p>Perfect for testing</p>
              <a href="#" class="tf__common_btn tf__pricing_btn"
                >Sign up for free <i class="fa-regular fa-arrow-right-long"></i
              ></a>
              <p><span>$29</span>-7 days trial</p>
              <p>No Credit Card Required</p>
              <ul>
                <li>10 credits per month</li>
                <li>100 bonus credits for the first month</li>
                <li>20+ languages</li>
                <li>80+ copywriting tools</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!--============================
        PRICING END
    ==============================-->

    <!--============================
        FAQ START
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
    <!--============================
        FAQ END
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