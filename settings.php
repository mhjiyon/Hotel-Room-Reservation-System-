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
    <title>Admin Panel-Settings</title>
    <?php require('links.php'); ?>
</head class="bg-light">
<body>
   
      <?php require('header.php'); ?>

      <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden ">
              <h3 class="mb-4 h-font">SETTINGS</h3>  
              
              <!-- general settings section -->
              <div class="card border-0 shadow mb-4">
                  <div class="card-body ">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                      <h5 class="card-title m-0 h-font">General Settings</h5>
                      <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#general-s">
                      <i class="bi bi-pencil-square"></i> Edit
                      </button>
                    </div>
                    <h6 class="card-subtitle mb-1 fw-bold h-font">Site Title</h6>
                    <p class="card-text" id="site_title"></p>
                    <h6 class="card-subtitle mb-1 fw-bold h-font">About Us</h6>
                    <p class="card-text" id="site_about"></p>
                  </div>
              </div>
                    
              <!-- general  modal section -->

               <div class="modal fade" id="general-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <form id="general_s_form">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title h-font">General Settings</h5>
                      </div>
                      <div class="modal-body">
                        <div class=" mb-3">
                              <label  class="form-label">Site Title</label>
                              <input type="text" name="site_title" id="site_title_inp" class="form-control" required>
                        </div>
                          
                        <div class="mb-3" >
                            <label  class="form-label">About US </label>
                            <textarea name="site_about" id="site_about_inp" class="form-control"rows="6" required></textarea>
                        </div>

                      </div>

                      <div class="modal-footer">
                        <button type="button" onclick="site_title.value = general_data.site_title, site_about.value = general_data.site_about" class="btn btn-secondary " data-bs-dismiss="modal">CANCLE</button>
                        <button type="submit" class="btn custom-bg text-white shadow-none">SAVE</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>  

              <!-- shutdown section -->
              <div class="card border-0 shadow mb-4">
                  <div class="card-body ">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                      <h5 class="card-title m-0 h-font">Shutdown Website</h5>
                      <div class="form-check form-switch">
                         <form >
                          <input onchange="upd_shutdown(this.value)" class="form-check-input" type="checkbox" id="shutdown-toggle">
                         </form>
                      </div>
                    </div>
                    <p class="card-text">
                      No customer will be allowed to book hotel room , when shutdown mode is turned on.
                    </p>
                  </div>
              </div>

              <!-- Contact detail section -->

              <div class="card border-0 shadow mb-4 ">
                  <div class="card-body ">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                      <h5 class="card-title m-0 h-font">Contacts Settings</h5>
                      <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#contacts-s">
                      <i class="bi bi-pencil-square"></i> Edit
                      </button>
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="mb-4">
                          <h6 class="card-subtitle mb-1 fw-bold h-font">Address</h6>
                           <p class="card-text" id="address"></p>
                        </div>
                        <div class="mb-4">
                          <h6 class="card-subtitle mb-1 fw-bold h-font">AGoogle Map</h6>
                           <p class="card-text" id="gmap"></p>
                        </div>
                        <div class="mb-4">
                          <h6 class="card-subtitle mb-1 fw-bold h-font">Phone Number</h6>
                           <p class="card-text" >
                            <i class="bi bi-telephone-fill"></i>
                                <span id="pn1"></span>
                           </p>
                           <p class="card-text" >
                            <i class="bi bi-telephone-fill"></i>
                                <span id="pn2"></span>
                           </p>
                        </div>
                        <div class="mb-4">
                          <h6 class="card-subtitle mb-1 fw-bold h-font">E-mail</h6>
                           <p class="card-text" id="email"></p>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="mb-4">
                            <h6 class="card-subtitle mb-1 fw-bold h-font">Social Media Links</h6>
                            <p class="card-text" >
                               <i class="bi bi-facebook me-1"></i>
                                  <span id="fb"></span>
                            </p>
                            <p class="card-text" >
                               <i class="bi bi-instagram me-1"></i>
                                <span id="insta"></span>
                            </p>
                            <p class="card-text" >
                               <i class="bi bi-twitter me-1"></i>
                                <span id="tw"></span>
                            </p>
                          </div>
                          <div class="mb4">
                            <h6 class="card-subtitle mb-1 fw-bold h-font">iFrame</h6>
                            <iframe id="iframe" class="border p-2 w-100" loading="lazy"></iframe>
                          </div>
                      </div>
                    </div>
                  </div>
              </div>

              <!-- Contact modal section -->

              <div class="modal fade" id="contacts-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <form id="contacts_s_form">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title h-font">Contacts Settings</h5>
                      </div>
                      <div class="modal-body">
                        <div class="container-fluid p-0">
                            <div class="row">
                              <div class="col-md-6">
                                <div class=" mb-3">
                                  <label  class="form-label">Address</label>
                                  <input type="text" name="address" id="address_inp" class="form-control" required>
                                </div>
                                <div class=" mb-3">
                                  <label  class="form-label">Google Map Link</label>
                                  <input type="text" name="gmap" id="gmap_inp" class="form-control" required>
                                </div>
                                <div class=" mb-3">
                                  <label  class="form-label">Phone Number</label>
                                  <div class="input-group mb-3">
                                    <span class="input-group-text" ><i class="bi bi-telephone-fill"></i></span>
                                    <input type="number" name="pn1" id="pn1_inp"class="form-control shadow-none" required>
                                  </div>
                                  <div class="input-group mb-3">
                                    <span class="input-group-text" ><i class="bi bi-telephone-fill"></i></span>
                                    <input type="number" name="pn2" id="pn2_inp"class="form-control shadow-none" required>
                                  </div>
                                </div>
                                <div class=" mb-3">
                                  <label  class="form-label">Email</label>
                                  <input type="text" name="email" id="email_inp" class="form-control" required>
                                </div>
                              </div>
                              <div class="col-md-6">
                                 <div class=" mb-3">
                                    <label  class="form-label">Socialmedia Link</label>
                                    <div class="input-group mb-3">
                                      <span class="input-group-text" ><i class="bi bi-facebook me-1"></i></span>
                                      <input type="text" name="fb" id="fb_inp"class="form-control shadow-none" required>
                                    </div>
                                    <div class="input-group mb-3">
                                      <span class="input-group-text" ><i class="bi bi-instagram me-1"></i></span>
                                      <input type="text" name="insta" id="insta_inp"class="form-control shadow-none" required>
                                    </div>
                                    <div class="input-group mb-3">
                                      <span class="input-group-text" ><i class="bi bi-twitter me-1"></i></span>
                                      <input type="text" name="tw" id="tw_inp"class="form-control shadow-none" required>
                                    </div>
                                 </div>
                                 <div class=" mb-3">
                                  <label  class="form-label">iFrame src</label>
                                  <input type="text" name="iframe" id="iframe_inp" class="form-control" required>
                                </div>
                              </div>
                            </div>
                        </div>

                      </div>

                      <div class="modal-footer">
                        <button type="button" onclick="contacts_inp(contacts_data)" class="btn btn-secondary " data-bs-dismiss="modal">CANCLE</button>
                        <button type="submit" class="btn custom-bg text-white shadow-none">SAVE</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div> 

              <!-- Management team settings section -->
              <div class="card border-0 shadow mb-4">
                  <div class="card-body ">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                      <h5 class="card-title m-0 h-font">Management Team</h5>
                      <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#team-s">
                      <i class="bi bi-cloud-plus"></i> Add
                      </button>
                    </div>
                    <div class="row" id="team-data">
                       
                    </div>
                  </div>
              </div>

              <!-- Management team  modal section -->

              <div class="modal fade" id="team-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <form id="team_s_form">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title h-font">Add Team Member</h5>
                      </div>
                      <div class="modal-body">
                        <div class=" mb-3">
                              <label  class="form-label">Name</label>
                              <input type="text" name="member_name" id="member_name_inp" class="form-control" required>
                        </div>
                          
                        <div class="mb-3" >
                            <label  class="form-label">Picture </label>
                            <input type="file" name="member_picture" id="member_picture_inp" accept=".jpg, .png, .webp, .jpeg" class="form-control" required>
                        </div>

                      </div>

                      <div class="modal-footer">
                        <button type="button" onclick="member_name.value='',member_picture.value=''" class="btn btn-secondary " data-bs-dismiss="modal">CANCLE</button>
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

<script src="script/settings.js"></script>

</body>
</html>