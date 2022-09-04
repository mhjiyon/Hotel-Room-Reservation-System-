<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel North South-contact</title>
    <?php require('links.php'); ?>

</head>
<body class="bg=light">

 <!-- Navigation -->   
<?php require('header.php'); ?>

<div class="my-5 px-4">
   <h2 class="fw-bold  text-center">CONTACT US</h2>
   <div class="h-line bg-dark"></div>
   <p class="text-center mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
    Nobis sequi obcaecati <br> dolor facere iusto provident similique 
    totam quo laborum aspernatur.
   </p>
</div>
 

<div class="container">
  <div class="row">
      <div class="col-lg-6 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4 ">
        <iframe class="w-100 rounded mb-4" height="400" src="<?php echo $contact_r['iframe'] ?>" loading="lazy"></iframe>
        <h5 class="h-font fw-bold"></i> Address</h5>
        <a href="<?php echo $contact_r['gmap'] ?>" target="blank" class="d-inline-block text-decoration-none text-dark mb-2">
        <i class="bi bi-geo-alt-fill"></i><?php echo $contact_r['address'] ?></a>
        <h5 class="mt-2 h-font fw-bold"></i>Contact Us</h5>
                <a href="tel: +<?php echo $contact_r['pn1'] ?>" class="d-inline-block mb-2 text-decoration-none text-dark">
                    <i class="bi bi-telephone-fill"></i>+<?php echo $contact_r['pn1'] ?>
                </a>
                <br>
                <a href="tel: +<?php echo $contact_r['pn2'] ?>" class="d-inline-block mb-2 text-decoration-none text-dark">
                    <i class="bi bi-telephone-fill"></i>+<?php echo $contact_r['pn2'] ?>
                </a>
         <h5 class="mt-2 h-font">Email</h5> 
                <a href="mailto: <?php echo $contact_r['email'] ?>" class="d-inline-block mb-2 text-decoration-none text-dark">
                    <i class="bi bi-envelope-fill"></i> <?php echo $contact_r['email'] ?>
                </a>

                <h5 class="mt-2">Follow Us</h5>

                <a href="<?php echo $contact_r['tw'] ?>" target="blank" class="d-inline-block mb-3 text-dark fs-5 me-2">
                    <i class="bi bi-twitter me-1"  ></i></a>
                     
                
                <a href="<?php echo $contact_r['fb'] ?>" target="blank" class="d-inline-block mb-3 text-dark fs-5 me-2">
                        <i class="bi bi-facebook me-1"></i></a>
               
               <a href="<?php echo $contact_r['insta'] ?>" target="blank" class="d-inline-block mb-3 text-dark fs-5 me-2">
                   <i class="bi bi-instagram "></i></a>
      </div>
  </div>

      <div class="col-lg-6 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4 ">
          <form method="POST">
                <h5>Send a message</h5>
                <div class="mt-3">
                    <label  class="form-label" style="font-weight:500;">Name</label>
                      <input name="name" required type="text" class="form-control shadow-none">
                  </div>
                  <div class="mt-3">
                    <label  class="form-label" style="font-weight:500;">Email</label>
                      <input name="email" required type="email" class="form-control shadow-none">
                  </div>
                  <div class="mt-3">
                    <label  class="form-label" style="font-weight:500;">Subject</label>
                      <input name="subject" required type="text" class="form-control shadow-none">
                  </div>
                  <div class="mt-3">
                    <label  class="form-label" style="font-weight:500;">Message</label>
                    <textarea name="message" required class="form-control"rows="7" style="resize:none"></textarea>
                  </div>
                  <button name="send"  type="submit" class="btn btn-white custom-bg mt-3">SUBMIT</button>
          </form>
        </div>
      </div>
  </div>
</div>
  
<?php
   if(isset($_POST['send']))
   {
    $frm_data = filteration($_POST);
    $q = "INSERT INTO `user_queries`(`name`, `email`, `subject`, `message`) VALUES (?,?,?,?)";
    $values = [$frm_data['name'],$frm_data['email'],$frm_data['subject'],$frm_data['message']];
    $res = insert($q,$values,'ssss');
    if($res==1){
      alert('success','Mail sent');
    }
    else{
      alert('error','Server down !');
    }
   }
?>

    <!-- footer -->
<?php require('footer.php'); ?>

</body>
</html>