<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel North South-facilities</title>
    <?php require('links.php'); ?>
<style>
  .pop:hover{
    border-top-color: var(--teal) !important ;
    transform: scale(1.03);
    transition: all 0.3s;

  }
</style>

</head>
<body class="bg=light">

 <!-- Navigation -->   
<?php require('header.php'); ?>

<div class="my-5 px-4">
   <h2 class="fw-bold  text-center">OUR FACILITIES</h2>
   <div class="h-line bg-dark"></div>
   <p class="text-center mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
    Nobis sequi obcaecati <br> dolor facere iusto provident similique 
    totam quo laborum aspernatur.
   </p>
</div>

<div class="container">
  <div class="row">

<?php
$res=selectAll('facilities');
$path=FACILITIES_IMG_PATH;
while($row=mysqli_fetch_assoc($res)){
echo $str= <<< test
  <div class="col-lg-4 col-md-6 mb-5 px-4">
    <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
      <div class="d-flex align-item-center mb-2">
        <img src="$path$row[icon]" width="40px">
        <h5 class="m-0 ms-3">$row[name]</h5>
      </div>       
      <p>$row[description]</p>
    </div>
  </div>
test;
}

?>  

  </div>
</div>

    <!-- footer -->
<?php require('footer.php'); ?>

</body>
</html>