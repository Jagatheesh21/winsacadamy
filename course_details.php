<?php include('includes/header.php');
if(isset($_GET['course']) && $_GET['course']!="")
{
$sql = "select details.*,details.course_duration,details.course_objective,details.course_description,details.objective,details.assesment,courses.name,courses.description FROM courses JOIN course_details details ON courses.id=details.id where courses.status=1";   
$result = $con->query($sql);
if($result->num_rows>0)
{
$course = $result->fetch_assoc();
?>
<main>
         <!-- page title area start -->
         <section class="page__title-area pt-120">
            <div class="page__title-shape">
               <img class="page-title-shape-5 d-none d-sm-block" src="assets/img/page-title/page-title-shape-1.png" alt="">
               <img class="page-title-shape-6" src="assets/img/page-title/page-title-shape-2.png" alt="">
               <img class="page-title-shape-7" src="assets/img/page-title/page-title-shape-4.png" alt="">
               <img class="page-title-shape-8" src="assets/img/page-title/page-title-shape-5.png" alt="">
            </div>
            <div class="container">
               <div class="row">
                  <div class="col-xxl-9 col-xl-8">
                     <div class="page__title-content mb-25 pr-40">
                        <h5 class="page__title-3"><?=$course['name'];?></h5>
                        <div class="events__allow mb-40">
                           <ul>
                              <li><i class="fal fa-check"></i> 100% Job Placement Supports</li>
                              <li><i class="fal fa-check"></i> Mentors From Top Global Product Companies</li>
                              <li><i class="fal fa-check"></i> A Portfolio of Real-World Projects</li>
                              <li><i class="fal fa-check"></i> For Graduates & Working Professionals</li>
                           </ul>
                           <div class="events__tag">
                           <span><i class="fal fa-tag"></i></span>
                           <a href="#">Available in  </a>
                           <a href="#">English,</a>
                           <a href="#">தமிழ்</a>
                        </div>
                        </div>
                    </div>
                  </div>
                  <div class="col-xxl-3 col-xl-4">
                  <div class="events__sidebar pl-70">
                        
                        <div class="events__sidebar-widget white-bg mb-20">
                           <div class="events__sidebar-shape">
                              <img class="events-sidebar-img-2" src="assets/img/events/event-shape-2.png" alt="">
                              <img class="events-sidebar-img-3" src="assets/img/events/event-shape-3.png" alt="">
                           </div>
                           <div class="events__info">
                              <div class="events__info-meta mb-25 d-flex align-items-center justify-content-between">
                                 <div class="events__info-price text-center">
                                    <h5 class="text-center">I'm Interested</h5>
                                 </div>                                 
                              </div>
                              <div class="events__info-content mb-35">
                                <form>
                                <input type="text" name="name" placeholder="Name" class="form-control mb-4">
                                <input type="email" name="email address" placeholder="Email" class="form-control mb-4">
                                <input type="number" name="mobile_number" placeholder="Mobile Number" class="form-control mb-4">
                                </form>
                              </div>
                              <div class="events__join-btn">
                                 <a href="contact.html" class="e-btn e-btn-7 w-100">Enroll <i class="far fa-arrow-right"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- page title area end -->
        <section class="event__area pb-10">
            <div class="container">
                <h3>Program Overview</h3>
                <div class="row d-flex justify-content-center">
                    <div class="col-md-3">
                        <h5>Duration</h5>
                        <p class="text-danger text-bold"><?=$course['course_duration'];?></p>
                    </div>
                    <div class="col-md-3">
                        <h5>Format</h5>
                        <p class="text-danger text-bold">Online/Offline</p>
                    </div>
                    <div class="col-md-3">
                        <h5>Hiring Partners</h5>
                        <p class="text-danger text-bold">50+ Companies</p>
                    </div>
                    <div class="col-md-3">
                        <h5>Max CTC upto</h5>
                        <p class="text-danger text-bold">10L/annum</p>
                    </div>
                </div>
            </div>
        </section>
         <!-- event details area start -->
         <section class="event__area pb-20">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-12 col-xl-12 col-lg-">
                     <div class="events__wrapper">
                        <div class="events__thumb mb-35 w-img">
                           <!-- <img src="assets/img/events/event-1.jpg" alt=""> -->
                        </div>
                        <div class="events__details mb-35">
                           <h3>About Live Classes</h3>
                           <p style="font-weight: 800;"><?=$course['course_objective'];?></p>
                        </div>
                     </div>
                  </div>
                  <!-- <div class="col-xxl-4 col-xl-4 col-lg-4">
                    
                     <div class="events__sidebar pl-70">
                        
                        <div class="events__sidebar-widget white-bg mb-20">
                           <div class="events__sidebar-shape">
                              <img class="events-sidebar-img-2" src="assets/img/events/event-shape-2.png" alt="">
                              <img class="events-sidebar-img-3" src="assets/img/events/event-shape-3.png" alt="">
                           </div>
                           <div class="events__info">
                              <div class="events__info-meta mb-25 d-flex align-items-center justify-content-between">
                                 <div class="events__info-price text-center">
                                    <h5 class="text-center">I'm Interested</h5>
                                   <h5 class="old-price">$142.00</h5> 
                                 </div>
                                 
                              </div>
                              <div class="events__info-content mb-35">
                                <form>
                                <input type="text" name="name" placeholder="Name" class="form-control mb-4">
                                <input type="email" name="email address" placeholder="Email" class="form-control mb-4">
                                <input type="number" name="mobile_number" placeholder="Mobile Number" class="form-control mb-4">
                                </form>
                                  <ul>
                                    <li class="d-flex align-items-center">
                                       <div class="events__info-icon">
                                          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 16" style="enable-background:new 0 0 16 16;" xml:space="preserve">
                                             <path class="st0" d="M2,6l6-4.7L14,6v7.3c0,0.7-0.6,1.3-1.3,1.3H3.3c-0.7,0-1.3-0.6-1.3-1.3V6z"/>
                                             <polyline class="st0" points="6,14.7 6,8 10,8 10,14.7 "/>
                                          </svg>
                                       </div>
                                       <div class="events__info-item">
                                          <h5><span>End: </span> July 26, 2022 12:30 am</h5>
                                       </div>
                                    </li>
                                    <li class="d-flex align-items-center">
                                       <div class="events__info-icon">
                                          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 16" style="enable-background:new 0 0 16 16;" xml:space="preserve">
                                             <path class="st0" d="M2,6l6-4.7L14,6v7.3c0,0.7-0.6,1.3-1.3,1.3H3.3c-0.7,0-1.3-0.6-1.3-1.3V6z"/>
                                             <polyline class="st0" points="6,14.7 6,8 10,8 10,14.7 "/>
                                          </svg>
                                       </div>
                                       <div class="events__info-item">
                                          <h5><span>Time:</span>  10:45 AM-01:30 PM</h5>
                                       </div>
                                    </li>
                                    <li class="d-flex align-items-center">
                                       <div class="events__info-icon">
                                          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 16" style="enable-background:new 0 0 16 16;" xml:space="preserve">
                                             <path class="st0" d="M2,6l6-4.7L14,6v7.3c0,0.7-0.6,1.3-1.3,1.3H3.3c-0.7,0-1.3-0.6-1.3-1.3V6z"/>
                                             <polyline class="st0" points="6,14.7 6,8 10,8 10,14.7 "/>
                                          </svg>
                                       </div>
                                       <div class="events__info-item">
                                          <h5><span>Venue: </span> New York, TX 82760, US</h5>
                                       </div>
                                    </li>
                                 </ul> 
                              </div>
                              <div class="events__join-btn">
                                 <a href="contact.html" class="e-btn e-btn-7 w-100">Enroll <i class="far fa-arrow-right"></i></a>
                              </div>-->
                           </div>
                        </div>
                        <!-- <div class="events__sidebar-widget white-bg">
                           <div class="events__sponsor">
                              <h3 class="events__sponsor-title">Sponsors</h3>
                              <div class="events__sponsor-thumb mb-35">
                                 <img src="assets/img/events/sponsor-logo.png" alt="">
                              </div>
                              <div class="events__sponsor-info">
                                 <h3>Thomas R. Toe</h3>
                                 <h4>Email: <span>support@educal.com</span></h4>
                                 <div class="events__social d-xl-flex align-items-center">
                                    <h4>Share:</h4>
                                    <ul>
                                       <li><a href="#" class="fb" ><i class="social_facebook"></i></a></li>
                                       <li><a href="#" class="tw" ><i class="social_twitter"></i></a></li>
                                       <li><a href="#" class="pin" ><i class="social_pinterest"></i></a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div> -->
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- event details area end -->
         <section class="event__area pb-20">
               <div class="container">
                  <div class="row">
                     <div class="col-xxl-12">
                     <div class="accordion" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item">
                           <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                              <?=$course['course_objective1_title'];?>
                              </button>
                           </h2>
                           <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                              <div class="accordion-body">
                              <strong><?=$course['course_objective1_details'];?></strong>
                              </div>
                           </div>
                        </div>
                        <div class="accordion-item">
                           <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                              <?=$course['course_objective2_title'];?>
                              </button>
                           </h2>
                           <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                              <div class="accordion-body">
                              <strong><?=$course['course_objective2_details'];?></strong>                              </div>
                           </div>
                        </div>
                        <div class="accordion-item">
                           <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                              <?=$course['course_objective3_title'];?>
                              </button>
                           </h2>
                           <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                              <div class="accordion-body">
                              <strong><?=$course['course_objective3_details'];?></strong>                              </div>
                              </div>
                           </div>
                        </div>
                        <div class="accordion-item">
                           <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                              <?=$course['course_objective4_title'];?>
                              </button>
                           </h2>
                           <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFour">
                              <div class="accordion-body">
                              <strong><?=$course['course_objective4_details'];?></strong>                              </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     </div>
                  </div>
               </div>
         </section>
         <!-- brand area start -->
         <section class="brand__area pb-110">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="brand__content text-center">
                        <h2 class="brand__title">Technologies Provides</h2>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="row">
                        <div class="owl-carousel owl-theme">
                           <div class="item"><h4>1</h4></div>
                           <div class="item"><h4>2</h4></div>
                           <div class="item"><h4>3</h4></div>
                           <div class="item"><h4>4</h4></div>
                           <div class="item"><h4>5</h4></div>
                           <div class="item"><h4>6</h4></div>
                           <div class="item"><h4>7</h4></div>
                           <div class="item"><h4>8</h4></div>
                           <div class="item"><h4>9</h4></div>
                           <div class="item"><h4>10</h4></div>
                           <div class="item"><h4>11</h4></div>
                           <div class="item"><h4>12</h4></div>
                        </div>
                     </div>   
                        <!-- <div class="brand__slider swiper-container" >
                        <div class="swiper-wrapper" autoplay-delay="2500" autoplay-disable-on-interaction="false">
                           <div class="swiper-slide">
                              <div class="brand__item text-center text-lg-start">
                                 <img src="assets/img/brand/brand-1.png" alt="">
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="brand__item text-center text-lg-start">
                                 <img src="assets/img/brand/brand-2.png" alt="">
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="brand__item text-center text-lg-start">
                                 <img src="assets/img/brand/brand-3.png" alt="">
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="brand__item text-center text-lg-start">
                                 <img src="assets/img/brand/brand-4.png" alt="">
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="brand__item text-center text-lg-start">
                                 <img src="assets/img/brand/brand-5.png" alt="">
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="brand__item text-center text-lg-start">
                                 <img src="assets/img/brand/brand-6.png" alt="">
                              </div>
                           </div>
                        </div>
                        </div> -->
                  </div>
               </div>
               <!-- <div class="row">
                  <div class="col-xxl-12">
                     <div class="brand__more text-center">
                        <a href="about.html" class="link-btn">
                           View all partners
                           <i class="far fa-arrow-right"></i>
                           <i class="far fa-arrow-right"></i>
                        </a>
                     </div>
                  </div>
               </div> -->
            </div>
         </section>
         <!-- brand area end -->

         <!-- cta area start -->
         <section class="cta__area mb--100">
            <div class="container">
               <div class="cta__inner cta__inner-2 blue-bg fix">
                  <div class="cta__shape">
                     <img src="assets/img/cta/cta-shape.png" alt="">
                  </div>
                  <div class="row align-items-center">
                     <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-6">
                        <div class="cta__content">
                           <h3 class="cta__title">100% Job Placement Support</h3>
                        </div>
                     </div>
                     <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-6">
                        <div class="cta__apps d-lg-flex justify-content-end p-relative z-index-1">
                           <a target="_blank" href="https://play.google.com/store/apps" class="active"> Download Syllabus</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- cta area end -->
      </main>
<?php }else{?>
   <main>
      <section class="services__area pt-115 pb-40">
         <div class="container">
            <div class="row">
               <h5>No Course Found!</h5>
            </div>
         </div>
      </section>
   </main>  
<?php }?>
<?php }else{?>
   <main>
      <section class="services__area pt-115 pb-40">
         <div class="container">
            <div class="row">
               <h5>No Course Found!</h5>
            </div>
         </div>
      </section>
   </main>
<?php } ?>
<?php include('includes/footer.php');?>
<script type="text/javascript">
    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    autoplay:true,
    autoplayTimeout:1000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
</script>