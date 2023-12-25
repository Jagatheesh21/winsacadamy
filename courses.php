<?php include('includes/header.php');?>
<style>
    .course__more{
        display: none !important;
    }
    .course__teacher{
        display: none !important;
    }
    .page__title-overlay::after {
        background:none !important;
    }
    .page__title-height {
        min-height: 100px !important;
    }
</style>
<main>
             <!-- page title area start -->
             <section class="page__title-area page__title-height page__title-overlay blue-bg-3 d-flex align-items-center">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="page__title-wrapper mt-110">
                        <h3 class="page__title" style="display: flex;justify-content:center;">Courses</h3>                         
                        <nav aria-label="breadcrumb" style="display: none;">
                           <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Courses</li>
                           </ol>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- page title area end -->

         <!-- course area start -->
         <section class="course__area pt-120 pb-120">
            <div class="container">
               <div class="course__tab-inner grey-bg-2 mb-50">
                  <div class="row align-items-center">
                     <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="course__tab-wrapper d-flex align-items-center">
                           <div class="course__tab-btn">
                              <ul class="nav nav-tabs" id="courseTab" role="tablist">
                                 <li class="nav-item" role="presentation">
                                   <button class="nav-link active" id="grid-tab" data-bs-toggle="tab" data-bs-target="#grid" type="button" role="tab" aria-controls="grid" aria-selected="true">
                                    <svg class="grid" viewBox="0 0 24 24">
                                       <rect x="3" y="3" class="st0" width="7" height="7"/>
                                       <rect x="14" y="3" class="st0" width="7" height="7"/>
                                       <rect x="14" y="14" class="st0" width="7" height="7"/>
                                       <rect x="3" y="14" class="st0" width="7" height="7"/>
                                       </svg>
                                   </button>
                                 </li>
                                 <li class="nav-item" role="presentation">
                                   <button class="nav-link list" id="list-tab" data-bs-toggle="tab" data-bs-target="#list" type="button" role="tab" aria-controls="list" aria-selected="false">
                                    <svg class="list" viewBox="0 0 512 512">
                                       <g id="Layer_2_1_">
                                          <path class="st0" d="M448,69H192c-17.7,0-32,13.9-32,31s14.3,31,32,31h256c17.7,0,32-13.9,32-31S465.7,69,448,69z"/>
                                          <circle class="st0" cx="64" cy="100" r="31"/>
                                          <path class="st0" d="M448,225H192c-17.7,0-32,13.9-32,31s14.3,31,32,31h256c17.7,0,32-13.9,32-31S465.7,225,448,225z"/>
                                          <circle class="st0" cx="64" cy="256" r="31"/>
                                          <path class="st0" d="M448,381H192c-17.7,0-32,13.9-32,31s14.3,31,32,31h256c17.7,0,32-13.9,32-31S465.7,381,448,381z"/>
                                          <circle class="st0" cx="64" cy="412" r="31"/>
                                       </g>
                                       </svg>
                                   </button>
                                 </li>
                              </ul>
                           </div>
                           <div class="course__view">
                              <h4>Showing 1 - 9 of 84</h4>
                           </div>
                        </div>
                     </div>
                     <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="course__sort d-flex justify-content-sm-end">
                           <div class="course__sort-inner">
                              <select>
                                 <option>Default</option>
                                 <!-- <option>Option 1</option>
                                 <option>Option 2</option>
                                 <option>Option 3</option>
                                 <option>Option 4</option>
                                 <option>Option 5</option>
                                 <option>Option 6</option> -->
                              </select>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="course__tab-conent">
                        <div class="tab-content" id="courseTabContent">
                           <div class="tab-pane fade show active" id="grid" role="tabpanel" aria-labelledby="grid-tab">
                              <div class="row">
                              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 grid-item cat2 cat3 cat4">
                     <div class="course__item white-bg mb-30 fix">
                           <div class="course__thumb w-img p-relative fix">
                           <a href="course-details.html">
                              <img src="assets/img/home/course-1.jpg" alt="">
                           </a>
                           <div class="course__tag">
                              <a href="#" class="sky-blue">Full Stack Developement</a>
                           </div>
                           </div>
                           <div class="course__content">
                           <div class="course__meta d-flex align-items-center justify-content-between">
                              <div class="course__lesson">
                                 <span><i class="far fa-book-alt"></i>72 Lesson</span>
                              </div>
                              <div class="course__rating">
                                 <span><i class="icon_star"></i>4.5 (44)</span>
                              </div>
                           </div>
                           <h3 class="course__title"><a href="course-details.html">Full Stack Developement</a></h3>
                           <div class="course__teacher d-flex align-items-center">
                              <div class="course__teacher-thumb mr-15">
                                 <img src="assets/img/course/teacher/teacher-2.jpg" alt="">
                              </div>
                              <h6><a href="instructor-details.html">Barry Tone</a></h6>
                           </div>
                           </div>
                           <div class="course__more d-flex justify-content-between align-items-center">
                           <div class="course__status d-flex align-items-center">
                              <span class="sky-blue">$32.00</span>
                              <span class="old-price">$68.00</span>
                           </div>
                           <div class="course__btn">
                              <a href="course-details.html" class="link-btn">
                                 Know Details
                                 <i class="far fa-arrow-right"></i>
                                 <i class="far fa-arrow-right"></i>
                              </a>
                           </div>
                           </div>
                     </div>
                  </div>                  
                  <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 grid-item cat3 cat4 cat3">
                  <div class="course__item white-bg mb-30 fix">
                     <div class="course__thumb w-img p-relative fix">
                        <a href="#">
                           <img src="assets/img/home/course-2.jpg" alt="">
                        </a>
                        <div class="course__tag">
                           <a href="#" class="green">Automation & Testing Programs</a>
                        </div>
                     </div>
                     <div class="course__content">
                        <div class="course__meta d-flex align-items-center justify-content-between">
                           <div class="course__lesson">
                              <span><i class="far fa-book-alt"></i>14 Lesson</span>
                           </div>
                           <div class="course__rating">
                              <span><i class="icon_star"></i>4.5 (55)</span>
                           </div>
                        </div>
                        <h3 class="course__title"><a href="#">Automation & Testing Programs</a></h3>
                        <div class="course__teacher d-flex align-items-center">
                           <div class="course__teacher-thumb mr-15">
                              <img src="assets/img/course/teacher/teacher-3.jpg" alt="">
                           </div>
                           <h6><a href="instructor-details.html">Elon Gated</a></h6>
                        </div>
                     </div>
                     <div class="course__more d-flex justify-content-between align-items-center">
                        <div class="course__status d-flex align-items-center">
                           <span class="green">$46.00</span>
                           <span class="old-price">$68.00</span>
                        </div>
                        <div class="course__btn">
                           <a href="course-details.html" class="link-btn">
                              Know Details
                              <i class="far fa-arrow-right"></i>
                              <i class="far fa-arrow-right"></i>
                           </a>
                        </div>
                     </div>
                  </div>
                  </div>
                  <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 grid-item cat1 cat2 cat4">
                  <div class="course__item white-bg mb-30 fix">
                     <div class="course__thumb w-img p-relative fix">
                        <a href="course-details.html">
                           <img src="assets/img/home/course-3.jpg" alt="">
                        </a>
                        <div class="course__tag">
                           <a href="#">Graphic Design</a>
                        </div>
                     </div>
                     <div class="course__content">
                        <div class="course__meta d-flex align-items-center justify-content-between">
                           <div class="course__lesson">
                              <span><i class="far fa-book-alt"></i>43 Lesson</span>
                           </div>
                           <div class="course__rating">
                              <span><i class="icon_star"></i>4.5 (44)</span>
                           </div>
                        </div>
                        <h3 class="course__title"><a href="course-details.html">Graphic Design</a></h3>
                        <div class="course__teacher d-flex align-items-center">
                           <div class="course__teacher-thumb mr-15">
                              <img src="assets/img/course/teacher/teacher-1.jpg" alt="">
                           </div>
                           <h6><a href="instructor-details.html">Jim Séchen</a></h6>
                        </div>
                     </div>
                     <div class="course__more d-flex justify-content-between align-items-center">
                        <div class="course__status">
                           <span>Free</span>
                        </div>
                        <div class="course__btn">
                           <a href="course-details.html" class="link-btn">
                              Know Details
                              <i class="far fa-arrow-right"></i>
                              <i class="far fa-arrow-right"></i>
                           </a>
                        </div>
                     </div>
                  </div>
                  </div>
                  <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 grid-item cat4 cat1 cat3">
                     <div class="course__item white-bg mb-30 fix">
                        <div class="course__thumb w-img p-relative fix">
                           <a href="course-details.html">
                              <img src="assets/img/home/course-3.jpg" alt="">
                           </a>
                           <div class="course__tag">
                              <a href="#" class="blue">Digital Marketing</a>
                           </div>
                        </div>
                        <div class="course__content">
                           <div class="course__meta d-flex align-items-center justify-content-between">
                              <div class="course__lesson">
                                 <span><i class="far fa-book-alt"></i>22 Lesson</span>
                              </div>
                              <div class="course__rating">
                                 <span><i class="icon_star"></i>4.5 (42)</span>
                              </div>
                           </div>
                           <h3 class="course__title"><a href="course-details.html">Digital Marketing</a></h3>
                           <div class="course__teacher d-flex align-items-center">
                              <div class="course__teacher-thumb mr-15">
                                 <img src="assets/img/course/teacher/teacher-4.jpg" alt="">
                              </div>
                              <h6><a href="instructor-details.html">Eleanor Fant</a></h6>
                           </div>
                        </div>
                        <div class="course__more d-flex justify-content-between align-items-center">
                           <div class="course__status d-flex align-items-center">
                              <span class="blue">$62.00</span>
                              <span class="old-price">$97.00</span>
                           </div>
                           <div class="course__btn">
                              <a href="course-details.html" class="link-btn">
                                 Know Details
                                 <i class="far fa-arrow-right"></i>
                                 <i class="far fa-arrow-right"></i>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 grid-item cat1 cat2 cat4">
                     <div class="course__item white-bg mb-30 fix">
                        <div class="course__thumb w-img p-relative fix">
                           <a href="course-details.html">
                              <img src="assets/img/home/course-2.jpg" alt="">
                           </a>
                           <div class="course__tag">
                              <a href="#" class="orange">Devops Program</a>
                           </div>
                        </div>
                        <div class="course__content">
                           <div class="course__meta d-flex align-items-center justify-content-between">
                              <div class="course__lesson">
                                 <span><i class="far fa-book-alt"></i>18 Lesson</span>
                              </div>
                              <div class="course__rating">
                                 <span><i class="icon_star"></i>4.5 (37)</span>
                              </div>
                           </div>
                           <h3 class="course__title"><a href="course-details.html">Devops Program</a></h3>
                           <div class="course__teacher d-flex align-items-center">
                              <div class="course__teacher-thumb mr-15">
                                 <img src="assets/img/course/teacher/teacher-5.jpg" alt="">
                              </div>
                              <h6><a href="#">Pelican Steve</a></h6>
                           </div>
                        </div>
                        <div class="course__more d-flex justify-content-between align-items-center">
                           <div class="course__status d-flex align-items-center">
                              <span class="orange">$62.00</span>
                              <span class="old-price">$97.00</span>
                           </div>
                           <div class="course__btn">
                              <a href="#" class="link-btn">
                                 Know Details
                                 <i class="far fa-arrow-right"></i>
                                 <i class="far fa-arrow-right"></i>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 grid-item cat2 cat3">
                     <div class="course__item white-bg mb-30 fix">
                        <div class="course__thumb w-img p-relative fix">
                           <a href="#">
                              <img src="assets/img/home/course-1.jpg" alt="">
                           </a>
                           <div class="course__tag">
                              <a href="#" class="pink">UI/UX Design</a>
                           </div>
                        </div>
                        <div class="course__content">
                           <div class="course__meta d-flex align-items-center justify-content-between">
                              <div class="course__lesson">
                                 <span><i class="far fa-book-alt"></i>13 Lesson</span>
                              </div>
                              <div class="course__rating">
                                 <span><i class="icon_star"></i>4.5 (72)</span>
                              </div>
                           </div>
                           <h3 class="course__title"><a href="course-details.html">UI/UX Design</a></h3>
                           <div class="course__teacher d-flex align-items-center">
                              <div class="course__teacher-thumb mr-15">
                                 <img src="assets/img/course/teacher/teacher-6.jpg" alt="">
                              </div>
                              <h6><a href="instructor-details.html">Shahnewaz Sakil</a></h6>
                           </div>
                        </div>
                        <div class="course__more d-flex justify-content-between align-items-center">
                           <div class="course__status d-flex align-items-center">
                              <span class="pink">$46.00</span>
                              <span class="old-price">$72.00</span>
                           </div>
                           <div class="course__btn">
                              <a href="course-details.html" class="link-btn">
                                 Know Details
                                 <i class="far fa-arrow-right"></i>
                                 <i class="far fa-arrow-right"></i>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="list" role="tabpanel" aria-labelledby="list-tab">
                              <div class="row">
                                 <div class="col-xxl-12">
                                    <div class="course__item white-bg mb-30 fix">
                                       <div class="row gx-0">
                                          <div class="col-xxl-4 col-xl-4 col-lg-4">
                                             <div class="course__thumb course__thumb-list w-img p-relative fix">
                                                <a href="course-details.html">
                                                   <img src="assets/img/course/list/course-1.jpg" alt="">
                                                </a>
                                                <div class="course__tag">
                                                   <a href="#">Art & Design</a>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-xxl-8 col-xl-8 col-lg-8">
                                             <div class="course__right">
                                                <div class="course__content course__content-3">
                                                   <div class="course__meta d-flex align-items-center">
                                                      <div class="course__lesson mr-20">
                                                         <span><i class="far fa-book-alt"></i>43 Lesson</span>
                                                      </div>
                                                      <div class="course__rating">
                                                         <span><i class="icon_star"></i>4.5 (44)</span>
                                                      </div>
                                                   </div>
                                                   <h3 class="course__title course__title-3">
                                                      <a href="course-details.html">Become a product Manager learn the skills & job.</a>
                                                   </h3>
                                                   <div class="course__summary">
                                                      <p>Communia virtutes tutiorem declarat stoicorum sanabat oblivisci nostris tamquam iucunditatem</p>
                                                   </div>
                                                   <div class="course__teacher d-flex align-items-center">
                                                      <div class="course__teacher-thumb mr-15">
                                                         <img src="assets/img/course/teacher/teacher-1.jpg" alt="">
                                                      </div>
                                                      <h6><a href="instructor-details.html">Jim Séchen</a></h6>
                                                   </div>
                                                </div>
                                                <div class="course__more course__more-2 d-flex justify-content-between align-items-center">
                                                   <div class="course__status">
                                                      <span>Free</span>
                                                   </div>
                                                   <div class="course__btn">
                                                      <a href="course-details.html" class="link-btn">
                                                         Know Details
                                                         <i class="far fa-arrow-right"></i>
                                                         <i class="far fa-arrow-right"></i>
                                                      </a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>                                                           
                                 <div class="col-xxl-12">
                                    <div class="course__item white-bg mb-30 fix">
                                       <div class="row gx-0">
                                          <div class="col-xxl-4 col-xl-4 col-lg-4">
                                             <div class="course__thumb course__thumb-list w-img p-relative fix">
                                                <a href="course-details.html">
                                                   <img src="assets/img/course/list/course-2.jpg" alt="">
                                                </a>
                                                <div class="course__tag">
                                                   <a href="#" class="sky-blue">Art & Design</a>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-xxl-8 col-xl-8 col-lg-8">
                                             <div class="course__right">
                                                <div class="course__content course__content-3">
                                                   <div class="course__meta d-flex align-items-center">
                                                      <div class="course__lesson mr-20">
                                                         <span><i class="far fa-book-alt"></i>72 Lesson</span>
                                                      </div>
                                                      <div class="course__rating">
                                                         <span><i class="icon_star"></i>4.5 (44)</span>
                                                      </div>
                                                   </div>
                                                   <h3 class="course__title course__title-3">
                                                      <a href="course-details.html">Fundamentals of music theory Learn new.</a>
                                                   </h3>
                                                   <div class="course__summary">
                                                      <p>Communia virtutes tutiorem declarat stoicorum sanabat oblivisci nostris tamquam iucunditatem</p>
                                                   </div>
                                                   <div class="course__teacher d-flex align-items-center">
                                                      <div class="course__teacher-thumb mr-15">
                                                         <img src="assets/img/course/teacher/teacher-2.jpg" alt="">
                                                      </div>
                                                      <h6><a href="instructor-details.html">Barry Tone</a></h6>
                                                   </div>
                                                </div>
                                                <div class="course__more course__more-2 d-flex justify-content-between align-items-center">
                                                   <div class="course__status d-flex align-items-center">
                                                      <span class="sky-blue">$32.00</span>
                                                      <span class="old-price">$68.00</span>
                                                   </div>
                                                   <div class="course__btn">
                                                      <a href="course-details.html" class="link-btn">
                                                         Know Details
                                                         <i class="far fa-arrow-right"></i>
                                                         <i class="far fa-arrow-right"></i>
                                                      </a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>                                                           
                                 <div class="col-xxl-12">
                                    <div class="course__item white-bg mb-30 fix">
                                       <div class="row gx-0">
                                          <div class="col-xxl-4 col-xl-4 col-lg-4">
                                             <div class="course__thumb course__thumb-list w-img p-relative fix">
                                                <a href="course-details.html">
                                                   <img src="assets/img/course/list/course-3.jpg" alt="">
                                                </a>
                                                <div class="course__tag">
                                                   <a href="#" class="blue-2">Art & Design</a>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-xxl-8 col-xl-8 col-lg-8">
                                             <div class="course__right">
                                                <div class="course__content course__content-3">
                                                   <div class="course__meta d-flex align-items-center">
                                                      <div class="course__lesson mr-20">
                                                         <span><i class="far fa-book-alt"></i>14 Lesson</span>
                                                      </div>
                                                      <div class="course__rating">
                                                         <span><i class="icon_star"></i>3.5 (32)</span>
                                                      </div>
                                                   </div>
                                                   <h3 class="course__title course__title-3">
                                                      <a href="course-details.html">Strategy law and organization Foundation</a>
                                                   </h3>
                                                   <div class="course__summary">
                                                      <p>Communia virtutes tutiorem declarat stoicorum sanabat oblivisci nostris tamquam iucunditatem</p>
                                                   </div>
                                                   <div class="course__teacher d-flex align-items-center">
                                                      <div class="course__teacher-thumb mr-15">
                                                         <img src="assets/img/course/teacher/teacher-3.jpg" alt="">
                                                      </div>
                                                      <h6><a href="instructor-details.html">Elon Gated</a></h6>
                                                   </div>
                                                </div>
                                                <div class="course__more course__more-2 d-flex justify-content-between align-items-center">
                                                   <div class="course__status d-flex align-items-center">
                                                      <span class="blue-2">$46.00</span>
                                                      <span class="old-price">$68.00</span>
                                                   </div>
                                                   <div class="course__btn">
                                                      <a href="course-details.html" class="link-btn">
                                                         Know Details
                                                         <i class="far fa-arrow-right"></i>
                                                         <i class="far fa-arrow-right"></i>
                                                      </a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>                                                           
                                 <div class="col-xxl-12">
                                    <div class="course__item white-bg mb-30 fix">
                                       <div class="row gx-0">
                                          <div class="col-xxl-4 col-xl-4 col-lg-4">
                                             <div class="course__thumb course__thumb-list w-img p-relative fix">
                                                <a href="course-details.html">
                                                   <img src="assets/img/course/list/course-4.jpg" alt="">
                                                </a>
                                                <div class="course__tag">
                                                   <a href="#" class="green">Art & Design</a>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-xxl-8 col-xl-8 col-lg-8">
                                             <div class="course__right">
                                                <div class="course__content course__content-3">
                                                   <div class="course__meta d-flex align-items-center">
                                                      <div class="course__lesson mr-20">
                                                         <span><i class="far fa-book-alt"></i>14 Lesson</span>
                                                      </div>
                                                      <div class="course__rating">
                                                         <span><i class="icon_star"></i>3.5 (32)</span>
                                                      </div>
                                                   </div>
                                                   <h3 class="course__title course__title-3">
                                                      <a href="course-details.html">The business Intelligence analyst Course 2022</a>
                                                   </h3>
                                                   <div class="course__summary">
                                                      <p>Communia virtutes tutiorem declarat stoicorum sanabat oblivisci nostris tamquam iucunditatem</p>
                                                   </div>
                                                   <div class="course__teacher d-flex align-items-center">
                                                      <div class="course__teacher-thumb mr-15">
                                                         <img src="assets/img/course/teacher/teacher-4.jpg" alt="">
                                                      </div>
                                                      <h6><a href="instructor-details.html">Eleanor Fant</a></h6>
                                                   </div>
                                                </div>
                                                <div class="course__more course__more-2 d-flex justify-content-between align-items-center">
                                                   <div class="course__status d-flex align-items-center">
                                                      <span class="green">$46.00</span>
                                                      <span class="old-price">$68.00</span>
                                                   </div>
                                                   <div class="course__btn">
                                                      <a href="course-details.html" class="link-btn">
                                                         Know Details
                                                         <i class="far fa-arrow-right"></i>
                                                         <i class="far fa-arrow-right"></i>
                                                      </a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>                                                           
                                 <div class="col-xxl-12">
                                    <div class="course__item white-bg mb-30 fix">
                                       <div class="row gx-0">
                                          <div class="col-xxl-4 col-xl-4 col-lg-4">
                                             <div class="course__thumb course__thumb-list w-img p-relative fix">
                                                <a href="course-details.html">
                                                   <img src="assets/img/course/list/course-5.jpg" alt="">
                                                </a>
                                                <div class="course__tag">
                                                   <a href="#" class="blue">Art & Design</a>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-xxl-8 col-xl-8 col-lg-8">
                                             <div class="course__right">
                                                <div class="course__content course__content-3">
                                                   <div class="course__meta d-flex align-items-center">
                                                      <div class="course__lesson mr-20">
                                                         <span><i class="far fa-book-alt"></i>14 Lesson</span>
                                                      </div>
                                                      <div class="course__rating">
                                                         <span><i class="icon_star"></i>3.5 (32)</span>
                                                      </div>
                                                   </div>
                                                   <h3 class="course__title course__title-3">
                                                      <a href="course-details.html">Build your media and Public presence</a>
                                                   </h3>
                                                   <div class="course__summary">
                                                      <p>Communia virtutes tutiorem declarat stoicorum sanabat oblivisci nostris tamquam iucunditatem</p>
                                                   </div>
                                                   <div class="course__teacher d-flex align-items-center">
                                                      <div class="course__teacher-thumb mr-15">
                                                         <img src="assets/img/course/teacher/teacher-5.jpg" alt="">
                                                      </div>
                                                      <h6><a href="instructor-details.html">Pelican Steve</a></h6>
                                                   </div>
                                                </div>
                                                <div class="course__more course__more-2 d-flex justify-content-between align-items-center">
                                                   <div class="course__status d-flex align-items-center">
                                                      <span class="blue">$62.00</span>
                                                      <span class="old-price">$97.00</span>
                                                   </div>
                                                   <div class="course__btn">
                                                      <a href="course-details.html" class="link-btn">
                                                         Know Details
                                                         <i class="far fa-arrow-right"></i>
                                                         <i class="far fa-arrow-right"></i>
                                                      </a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>                                                           
                                 <div class="col-xxl-12">
                                    <div class="course__item white-bg mb-30 fix">
                                       <div class="row gx-0">
                                          <div class="col-xxl-4 col-xl-4 col-lg-4">
                                             <div class="course__thumb course__thumb-list w-img p-relative fix">
                                                <a href="course-details.html">
                                                   <img src="assets/img/course/list/course-6.jpg" alt="">
                                                </a>
                                                <div class="course__tag">
                                                   <a href="#" class="yellow">Art & Design</a>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-xxl-8 col-xl-8 col-lg-8">
                                             <div class="course__right">
                                                <div class="course__content course__content-3">
                                                   <div class="course__meta d-flex align-items-center">
                                                      <div class="course__lesson mr-20">
                                                         <span><i class="far fa-book-alt"></i>33 Lesson</span>
                                                      </div>
                                                      <div class="course__rating">
                                                         <span><i class="icon_star"></i>3.5 (72)</span>
                                                      </div>
                                                   </div>
                                                   <h3 class="course__title course__title-3">
                                                      <a href="course-details.html">Creative writing through Storytelling</a>
                                                   </h3>
                                                   <div class="course__summary">
                                                      <p>Communia virtutes tutiorem declarat stoicorum sanabat oblivisci nostris tamquam iucunditatem</p>
                                                   </div>
                                                   <div class="course__teacher d-flex align-items-center">
                                                      <div class="course__teacher-thumb mr-15">
                                                         <img src="assets/img/course/teacher/teacher-6.jpg" alt="">
                                                      </div>
                                                      <h6><a href="instructor-details.html">Elon Gated</a></h6>
                                                   </div>
                                                </div>
                                                <div class="course__more course__more-2 d-flex justify-content-between align-items-center">
                                                   <div class="course__status d-flex align-items-center">
                                                      <span class="yellow">$62.00</span>
                                                      <span class="old-price">$97.00</span>
                                                   </div>
                                                   <div class="course__btn">
                                                      <a href="course-details.html" class="link-btn">
                                                         Know Details
                                                         <i class="far fa-arrow-right"></i>
                                                         <i class="far fa-arrow-right"></i>
                                                      </a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>                                                           
                              </div>
                           </div>
                         </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="basic-pagination wow fadeInUp mt-30" data-wow-delay=".2s">
                        <ul class="d-flex align-items-center"> 
                           <li class="prev">
                              <a href="#" class="link-btn link-prev">
                                 Prev
                                 <i class="arrow_left"></i>
                                 <i class="arrow_left"></i>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <span>1</span>
                              </a>
                           </li>
                           <li class="active">
                              <a href="#">
                                 <span>2</span>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <span>3</span>
                              </a>
                           </li>
                           <li class="next">
                              <a href="#" class="link-btn">
                                 Next
                                 <i class="arrow_right"></i>
                                 <i class="arrow_right"></i>
                              </a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- course area end -->

         <!-- cta area start -->
         <section class="cta__area mb--120">
            <div class="container">
               <div class="cta__inner blue-bg fix">
                  <div class="cta__shape">
                     <img src="assets/img/cta/cta-shape.png" alt="">
                  </div>
                  <div class="row align-items-center">
                     <div class="col-xxl-7 col-xl-7 col-lg-8 col-md-8">
                        <div class="cta__content">
                           <h3 class="cta__title">You can be your own Guiding star with our help</h3>
                        </div>
                     </div>
                     <div class="col-xxl-5 col-xl-5 col-lg-4 col-md-4">
                        <div class="cta__more d-md-flex justify-content-end p-relative z-index-1">
                           <a href="#" class="e-btn e-btn-white">Get Started</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- cta area end -->
</main>
<?php include('includes/footer.php');?>