<?php 
   require('essential.php');
   adminLogin();
   session_regenerate_id();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel-carousel</title>
    <?php require('links.php'); ?>
</head class="bg-light">
<body>
   
      <?php require('header.php'); ?>

      <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden ">
              <h3 class="mb-4 h-font">CAROUSEL</h3>  

              <!-- Carousel section -->
              <div class="card border-0 shadow mb-4">
                  <div class="card-body ">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                      <h5 class="card-title m-0 h-font">Images</h5>
                      <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#carousel-s">
                      <i class="bi bi-cloud-plus"></i> Add
                      </button>
                    </div>
                    <div class="row" id="carousel-data">
                       
                    </div>
                  </div>
              </div>

              <!-- Carousel  modal section -->

              <div class="modal fade" id="carousel-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <form id="carousel_s_form">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title h-font">Add Image</h5>
                      </div>
                      <div class="modal-body">
                          
                        <div class="mb-3" >
                            <label  class="form-label">Picture </label>
                            <input type="file" name="carousel_picture" id="carousel_picture_inp" accept=".jpg, .png, .webp, .jpeg" class="form-control" required>
                        </div>

                      </div>

                      <div class="modal-footer">
                        <button type="button" onclick="carousel_picture.value=''" class="btn btn-secondary " data-bs-dismiss="modal">CANCLE</button>
                        <button type="submit" class="btn custom-bg text-white shadow-none">SAVE</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>

            </div>
        </div>
      </div>
 
<?php require('script.php'); ?> 

<script src="script/carousel.js"></script>

</body>
</html>