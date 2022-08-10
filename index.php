<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel North South-home</title>
    <?php require('links.php'); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

<style>
   
.availability-form{
    margin-top: -30px;
    z-index: 2;
    position: relative;
}
@media screen and (max-width: 575px) {
    .availability-form{
    margin-top: 25px;
    padding: 0 35px;
}
}

</style>
</head>
<body class="bg=light">

 <!-- Navigation -->   
<?php require('header.php'); ?>

    <!-- Home slider image -->
<div class="container-fluid px-lg-4 mt-4">
    <div class="swiper swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
            <img src="image/home/1.jpg" class=" w-100 d-block"/>
            </div>
            <div class="swiper-slide">
            <img src="image/home/2.jpg"  class="w-100 d-block"/>
            </div>
            <div class="swiper-slide">
            <img src="image/home/3.jpg"  class="w-100 d-block"/>
            </div>
            <div class="swiper-slide">
            <img src="image/home/5.jpg"  class="w-100 d-block"/>
            </div>
            <div class="swiper-slide">
            <img src="image/home/6.jpg"  class="w-100 d-block"/>
            </div>
            <div class="swiper-slide">
            <img src="image/home/7.jpg"  class="w-100 d-block"/>
            </div>
        </div>
        </div>
</div>
 
<!-- check availability -->
<div class="container availability-form">
    <div class="row">
        <div class="col-lg-12 bg-white shadow p-4 rounded">
            <h5 class="h-font mb-4 ">Check Booking Availability</h5>
            <form>
                <div class="row align-items-end">
                    <div class="col-lg-3 mb-3">
                        <label  class="form-label h-font" style="font-weight:500;">Check-In </label>
                        <input type="date" class="form-control h-font">
                    </div>
                    <div class="col-lg-3 mb-3">
                        <label  class="form-label h-font" style="font-weight:500;">Check-Out </label>
                        <input type="date" class="form-control h-font">
                    </div>
                    <div class="col-lg-3 mb-3">
                        <label  class="form-label h-font" style="font-weight:500;">Adult </label>
                        <select class="form-select">
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-lg-2 mb-3">
                        <label  class="form-label h-font" style="font-weight:500;">Children </label>
                        <select class="form-select">
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-lg-1 mb-lg-3 mt-2">
                        <button type="submit" class="btn text-white shadow-none h-font custom-bg">
                         Submit
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Rooms -->
<h2 class="mt-4 pt-4 mb-4 text-center fw-bold">OUR ROOMS</h2>
<div class="container">
    <div class="row">
        <div class="col-lg-4 col-mb-6 my-3">
            <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                <img src="image/rooms/1.jpg" class="card-img-top" >
                <div class="card-body">
                  <h5 >Simple Room</h5>
                  <h6 class="mb-4" >200$</h6>
                  <dev class="features mb-4">
                      <h6 class="mb-1"> Features</h6>
                      <span class="badge bg-light text-dark  text-wrap ">
                        2 Rooms
                      </span>
                      <span class="badge bg-light text-dark  text-wrap ">
                        1 Bathroom
                      </span>
                      <span class="badge bg-light text-dark  text-wrap ">
                        1 Balcony
                      </span>
                      <span class="badge bg-light text-dark  text-wrap ">
                        3 Sofa
                      </span> 
                  </dev>
                  <div class="facilities mb-4">
                    <h6 class="mb-1"> facilities</h6>
                    <span class="badge bg-light text-dark  text-wrap ">
                        AC
                      </span>
                      <span class="badge bg-light text-dark  text-wrap ">
                        Telivision
                      </span>
                      <span class="badge bg-light text-dark  text-wrap ">
                        Wifi
                      </span>
                      <span class="badge bg-light text-dark  text-wrap ">
                        Room Heater
                      </span>
                  </div>
                  <div class="rating mb-4">
                      <h6 class="mb-1"> Rating</h6>
                      <span class=" rounded-pill bg-light">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                      </span> 
                  </div>
                  <div class="d-flex justify-content-evenly mb-2">
                    <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book now</a>
                    <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                </div>
                  
                </div>
              </div>
        </div>

        <div class="col-lg-4 col-mb-6 my-3">
            <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                <img src="image/rooms/1.jpg" class="card-img-top" >
                <div class="card-body">
                  <h5 >Simple Room</h5>
                  <h6 class="mb-4" >200$</h6>
                  <dev class="features mb-4">
                      <h6 class="mb-1"> Features</h6>
                      <span class="badge bg-light text-dark  text-wrap ">
                        2 Rooms
                      </span>
                      <span class="badge bg-light text-dark  text-wrap ">
                        1 Bathroom
                      </span>
                      <span class="badge bg-light text-dark  text-wrap ">
                        1 Balcony
                      </span>
                      <span class="badge bg-light text-dark  text-wrap ">
                        3 Sofa
                      </span> 
                  </dev>
                  <div class="facilities mb-4">
                    <h6 class="mb-1"> facilities</h6>
                    <span class="badge bg-light text-dark  text-wrap ">
                        AC
                      </span>
                      <span class="badge bg-light text-dark  text-wrap ">
                        Telivision
                      </span>
                      <span class="badge bg-light text-dark  text-wrap ">
                        Wifi
                      </span>
                      <span class="badge bg-light text-dark  text-wrap ">
                        Room Heater
                      </span>
                  </div>
                  <div class="rating mb-4">
                      <h6 class="mb-1"> Rating</h6>
                      <span class=" rounded-pill bg-light">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                      </span> 
                  </div>
                  <div class="d-flex justify-content-evenly mb-2">
                    <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book now</a>
                    <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                </div>
                  
                </div>
              </div>
        </div>

        <div class="col-lg-4 col-mb-6 my-3">
            <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                <img src="image/rooms/1.jpg" class="card-img-top" >
                <div class="card-body">
                  <h5 >Simple Room</h5>
                  <h6 class="mb-4" >200$</h6>
                  <dev class="features mb-4">
                      <h6 class="mb-1"> Features</h6>
                      <span class="badge bg-light text-dark  text-wrap ">
                        2 Rooms
                      </span>
                      <span class="badge bg-light text-dark  text-wrap ">
                        1 Bathroom
                      </span>
                      <span class="badge bg-light text-dark  text-wrap ">
                        1 Balcony
                      </span>
                      <span class="badge bg-light text-dark  text-wrap ">
                        3 Sofa
                      </span> 
                  </dev>
                  <div class="facilities mb-4">
                    <h6 class="mb-1"> facilities</h6>
                    <span class="badge bg-light text-dark  text-wrap ">
                        AC
                      </span>
                      <span class="badge bg-light text-dark  text-wrap ">
                        Telivision
                      </span>
                      <span class="badge bg-light text-dark  text-wrap ">
                        Wifi
                      </span>
                      <span class="badge bg-light text-dark  text-wrap ">
                        Room Heater
                      </span>
                  </div>
                  <div class="rating mb-4">
                      <h6 class="mb-1"> Rating</h6>
                      <span class=" rounded-pill bg-light">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                      </span> 
                  </div>
                  <div class="d-flex justify-content-evenly mb-2">
                    <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book now</a>
                    <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                </div>
                  
                </div>
              </div>
        </div>
        <div class="col-lg-12 text-center mt-5">
          <a href="#" class="btn btn-outline-dark round-0 fw-bold h-font shadow-none"> More Rooms</a>
        </div>
    </div>
</div>

<!-- Our Facilitis -->

<h2 class="mt-4 pt-4 mb-4 text-center fw-bold">Our Facilitis</h2>
<div class="container">
    <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-4">
             <img src="image/facilities/1.svg" width="80px">
             <h5 class="mt-3">AC</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-4">
            <img src="image/facilities/2.svg" width="80px">
            <h5 class="mt-3">Wifi</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-4">
            <img src="image/facilities/3.svg" width="80px">
            <h5 class="mt-3">TV</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-4">
            <img src="image/facilities/4.svg" width="80px">
            <h5 class="mt-3">Massage</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-4">
            <img src="image/facilities/5.svg" width="80px">
            <h5 class="mt-3">Room Heater</h5>
       </div>
       <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-4">
        <img src="image/facilities/6.svg" width="80px">
        <h5 class="mt-3">Fire Alarm</h5>
        </div>
        <div class="col-lg-12 text-center mt-5">
            <a href="#" class="btn btn-outline-dark round-0 fw-bold h-font shadow-none"> More Facilities</a>
        </div>
    </div>
</div>

<!-- Testimonials -->

<h2 class="mt-4 pt-4 mb-4 text-center fw-bold">TESTIMONIALS</h2>

<div class="container mt-5">
    <div class="swiper swiper-testimonials">
        <div class="swiper-wrapper mb-5">
          <div class="swiper-slide bg-white p-4">
            <div class="profile d-flex align-items-center mb-3">
                <img src="image/facilities/6.svg" width="30px">
                <h6 class="m-0 ms-2">Random User 1</h6>
            </div>
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque esse facere delectus
                 libero sed earum, suscipit adipisci quidem placeat! Accusantium.
            </p>
            <div class="rating">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i> 
            </div>

            
          </div>
          <div class="swiper-slide bg-white p-4">
            <div class="profile d-flex align-items-center mb-3">
                <img src="image/facilities/6.svg" width="30px">
                <h6 class="m-0 ms-2">Random User 1</h6>
            </div>
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque esse facere delectus
                 libero sed earum, suscipit adipisci quidem placeat! Accusantium.
            </p>
            <div class="rating">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i> 
            </div>

            
          </div>
          <div class="swiper-slide bg-white p-4">
            <div class="profile d-flex align-items-center mb-3">
                <img src="image/facilities/6.svg" width="30px">
                <h6 class="m-0 ms-2">Random User 1</h6>
            </div>
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque esse facere delectus
                 libero sed earum, suscipit adipisci quidem placeat! Accusantium.
            </p>
            <div class="rating">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i> 
            </div>

            
          </div>

        </div>
        <div class="swiper-pagination"></div>
      </div>
</div>

<!-- Reach Us -->
<h2 class="mt-4 pt-4 mb-4 text-center fw-bold">REACH US</h2>
<div class="container shadow">
    <div class="row">
        <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
            <iframe class="w-100 rounded" height="400" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.097953892908!2d90.42336791498151!3d23.815115592217882!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c64c103a8093%3A0xd660a4f50365294a!2sNorth%20South%20University!5e0!3m2!1sen!2sbd!4v1660143682084!5m2!1sen!2sbd" loading="lazy"></iframe>
        </div>
        <div class="col-lg-4 col-md-4">
             <div class="bg-white p-4 rounded mb-4 shadow">
                <h5>Contact Us</h5>
                <a href="tel: +8801873511509" class="d-inline-block mb-2 text-decoration-none text-dark">
                    <i class="bi bi-telephone-fill"></i>+8801873511509
                </a>
                <br>
                <a href="tel: +8801873511509" class="d-inline-block mb-2 text-decoration-none text-dark">
                    <i class="bi bi-telephone-fill"></i>+8801985771329
                </a>
                <br>
                <a href="Email: hasan.jiyon@northsouth.edu" class="d-inline-block mb-2 text-decoration-none text-dark">
                    <i class="bi bi-envelope-fill"></i> hotelnorthsouth@gmail.com
                </a>
             </div>
                
             <div class="bg-white p-4 rounded mb-4 shadow">
                <h5>Follow Us</h5>
                <a href="https://twitter.com/NorthSouthU" class="d-inline-block mb-3">
                     <span class="badge bg-light text-dark fs-6 p-2">
                        <i class="bi bi-twitter"></i>Twitter</a>
                     </span>
                <br>
                <a href="https://www.facebook.com/NorthSouthUniversity" class="d-inline-block mb-3">
                    <span class="badge bg-light text-dark fs-6 p-2">
                        <i class="bi bi-facebook"></i>Facebook</a>
                    </span>
               <br>
               <a href="https://www.instagram.com/northsouthuniversity" class="d-inline-block mb-3">
                <span class="badge bg-light text-dark fs-6 p-2">
                   <i class="bi bi-instagram"></i>Instagram</a>
                </span>
           <br>
                
             </div>

        </div>
    </div>
</div>
<!-- Footer -->
<?php require('footer.php'); ?>

<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script>
      var swiper = new Swiper(".swiper-container", {
        spaceBetween: 30,
        effect: "fade",
        loop: true,
        autoplay:{
            delay:3500,
        disableOnInteraction: false,
        }
      });
      var swiper = new Swiper(".swiper-testimonials", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        slidesPerView:"3",
        loop:true,
        coverflowEffect: {
          rotate: 50,
          stretch: 0,
          depth: 100,
          modifier: 1,
          slideShadows: false,
        },
        pagination: {
          el: ".swiper-pagination",
        },
        breakpoints:{
            320:{
                slidesPerView:"1",
            },
            640:{
                slidesPerView:"1",
            },
            768:{
                slidesPerView:"2",
            },
            1024:{
                slidesPerView:"3",
            }
        }
      });
    </script>

</body>
</html>