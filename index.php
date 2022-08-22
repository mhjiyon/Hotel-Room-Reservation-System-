<?php 
   require('essential.php');
   require('db_config.php');

   session_start();
    if((isset($_SESSION['adminLogin']) && $_SESSION['adminLogin']==true)){
        echo"<script>
             window.location.href='dashboard.php';
        </script>";
     }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Panel</title>
    <?php require('links.php'); ?>

    <style>
        div.login-form{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            width: 400px;
        }
    </style>

</head>
<body class="bg-light">
    
    <div class="login-form text-center rounded bg-white shadow  overflow-hidden">
        <form method="POST">
            <h4 class="bg-dark text-white py-3 h-font">ADMIN LOGIN PANEL </h4>
            <div class="p-4">
                <div class="mb-3">
                    <input name="admin_name" required type="text" class="form-control shadow-none text-center" placeholder="Admin Name">
                </div>
                <div class="mb-4">
                    <input name="admin_pass" required type="password" class="form-control shadow-none text-center" placeholder="Password">
                </div>
                <button name="login" type="submit" class="btn text-white custom-bg shadow-none">LOGIN</button>
            </div>
        </form>
    </div>

<?php
   
   if(isset($_POST['login']))
    {
        $frm_data=filteration($_POST);
        
        $query="SELECT * FROM `admin_cred` where `admin_name`=? AND `admin_pass`=?";
        $values=[$frm_data['admin_name'],$frm_data['admin_pass']];

        $res=select($query,$values,"ss");
        //print_r($res);

        if($res->num_rows==1){
            $row = mysqli_fetch_assoc($res);
            $_SESSION['adminLogin']=true ;
            $_SESSION['adminId']= $row['sr_no'];
            redirect('dashboard.php');
        }
         else{
            alert('error','Login faield - Wrong username or password!');
           }
     
    }
?>
 
 

<?php require('script.php'); ?>   
</body>
</html>