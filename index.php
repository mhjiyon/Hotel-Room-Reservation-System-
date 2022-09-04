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

<?php 
$res = selectAll('carousel');
while($row = mysqli_fetch_assoc($res))
{
$path = CAROUSEL_IMG_PATH;
echo $str= <<< test
    <div class="swiper-slide">
        <img src="$path$row[image]" class=" w-100 d-block"/>
    </div>
test;
}

?>
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

    <?php
        $room_res = select("SELECT * FROM `rooms` WHERE `status`=? AND `removed`=? ORDER BY `id` DESC LIMIT 3",[1,0],'ii'); 
        while($room_data=mysqli_fetch_assoc($room_res)){
            //get features of room
            $fea_q =mysqli_query($con," SELECT f.`name` FROM `features` f 
                      INNER JOIN `room_features` rfea ON f.id = rfea.features_id
                      WHERE rfea.room_id='$room_data[id]' ");
            $features_data="";         
            while($fea_row = mysqli_fetch_assoc($fea_q)){
               $features_data .="<span class='badge rounded-pill bg-light text-dark  text-wrap me-1 mb-1' >
               $fea_row[name]
             </span>";
            }  
            //get facilities of room 

            $fac_q = mysqli_query($con,"SELECT f.`name` FROM `facilities` f 
            INNER JOIN `room_facilities` rfac ON f.id = rfac.facilities_id
            WHERE rfac.room_id= '$room_data[id]' ");
        
            $facilities_data="";         
            while($fac_row = mysqli_fetch_assoc($fac_q)){
              $facilities_data .="<span class='badge rounded-pill bg-light text-dark  text-wrap me-1 mb-1' >
              $fac_row[name]
            </span>";
            }  

            //get thumbnail of room imagee
            $room_thumb = ROOMS_IMG_PATH."thumbnail.jpg";
            $thumb_q=mysqli_query($con,"SELECT * FROM `room_images` 
                                  WHERE `room_id`='$room_data[id]' 
                                  AND `thumb`='1' ");
            
            if(mysqli_num_rows($thumb_q)>0){
              $thumb_res = mysqli_fetch_assoc($thumb_q);
              $room_thumb = ROOMS_IMG_PATH.$thumb_res['image'];
            }

            $book_btn="";
            if(!$settings_r['shutdown']){
                $book_btn="<a href='#' class='btn btn-sm text-white custom-bg shadow-none'>Book now</a>";
            }

            //print room card
echo $str= <<<room
<div class="col-lg-4 col-mb-6 my-3">
            <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                <img src="$room_thumb" class="card-img-top" >
                <div class="card-body">
                  <h5 >$room_data[name]</h5>
                  <h6 class="mb-4" >$room_data[price]$</h6>
                  <dev class="features mb-4">
                      <h6 class="mb-1 h-font"> Features</h6>
                      $features_data
                  </dev>
                  <div class="facilities mb-4">
                    <h6 class="mb-1 mt-3 h-font"> facilities</h6>
                    $facilities_data
                  </div>

                   <div class="guests">
                    <h6 class="mb-2 h-font">Gustets</h6>
                      <span class="badge rounded-pill bg-light text-dark  text-wrap ">
                        $room_data[adult] Adults
                        </span>
                        <span class="badge rounded-pill bg-light text-dark  text-wrap  mb-3">
                        $room_data[children] Children
                        </span>
                  </div>

                  <div class="rating mb-3 ">
                      <h6 class="mb-1 h-font"> Rating</h6>
                      <span class=" rounded-pill bg-light">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                      </span> 
                  </div>
                  <div class="d-flex justify-content-evenly mb-2">
                    $book_btn
                    <a href="room_details.php?id=$room_data[id]" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                </div>
                  
                </div>
              </div>
        </div>
room;

        }
        ?>
        
        <div class="col-lg-12 text-center mt-5">
          <a href="rooms.php" class="btn btn-outline-dark round-0 fw-bold h-font shadow-none"> More Rooms>></a>
        </div>
    </div>
</div>

<!-- Our Facilitis -->

<h2 class="mt-4 pt-4 mb-4 text-center fw-bold">Our Facilitis</h2>
<div class="container">
    <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">

<?php
$res=mysqli_query($con,"SELECT * FROM `facilities`  ORDER BY `id` DESC LIMIT 5");
$path=FACILITIES_IMG_PATH;
while($row=mysqli_fetch_assoc($res)){
echo $str= <<< test
<div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-4">
  <img src="$path$row[icon]" width="80px">
  <h5 class="mt-3">$row[name]</h5>
</div>
test;
}

?>  

        <div class="col-lg-12 text-center mt-5">
            <a href="facilities.php" class="btn btn-outline-dark round-0 fw-bold h-font shadow-none"> More Facilities>></a>
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
                <img src="image/facilities/AC.svg" width="30px">
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
                <img src="image/facilities/AC.svg" width="30px">
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
                <img src="image/facilities/AC.svg" width="30px">
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
            <iframe class="w-100 rounded" height="400" src="<?php echo $contact_r['iframe'] ?>" loading="lazy"></iframe>
        </div>
        <div class="col-lg-4 col-md-4">
             <div class="bg-white p-4 rounded mb-4 shadow">
                <h5>Contact Us</h5>
                <a href="tel: +<?php echo $contact_r['pn1'] ?>" class="d-inline-block mb-2 text-decoration-none text-dark">
                    <i class="bi bi-telephone-fill"></i>+<?php echo $contact_r['pn1'] ?>
                </a>
                <br>
                <a href="tel: +<?php echo $contact_r['pn2'] ?>" class="d-inline-block mb-2 text-decoration-none text-dark">
                    <i class="bi bi-telephone-fill"></i>+<?php echo $contact_r['pn2'] ?>
                </a>
                <br>
                <a href="mailto: hasan.jiyon@northsouth.edu" class="d-inline-block mb-2 text-decoration-none text-dark">
                    <i class="bi bi-envelope-fill"></i> <?php echo $contact_r['email'] ?>
                </a>
             </div>
                
             <div class="bg-white p-4 rounded mb-4 shadow">
                <h5>Follow Us</h5>
                <a href="<?php echo $contact_r['tw'] ?>" target="blank" class="d-inline-block mb-3">
                     <span class="badge bg-light text-dark fs-6 p-2">
                        <i class="bi bi-twitter"></i>Twitter</a>
                     </span>
                <br>
                <a href="<?php echo $contact_r['fb'] ?>" target="blank" class="d-inline-block mb-3">
                    <span class="badge bg-light text-dark fs-6 p-2">
                        <i class="bi bi-facebook"></i>Facebook</a>
                    </span>
               <br>
               <a href="<?php echo $contact_r['insta'] ?>" target="blank" class="d-inline-block mb-3">
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