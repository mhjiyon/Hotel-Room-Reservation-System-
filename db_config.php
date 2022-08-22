<?php 
 $hnaem='localhost';
 $uname='root';
 $pass='';
 $db='hotel_north_south';

 $con=mysqli_connect($hnaem,$uname,$pass,$db);

 if(!$con){
    die("Can not connect to database".mysqli_connect_error());
   }

    function filteration($data){
        foreach($data as $key => $value){
            $value=trim($value);
            $value=stripslashes($value);
            $value=strip_tags($value);
            $value=htmlspecialchars($value);
            $data[$key] = $value;
            }
            return $data;
    }

    function selectAll($table){
       $con = $GLOBALS['con'];
       $res = mysqli_query($con,"SELECT * FROM $table");
       return $res ;
    }

    function select($sql, $values, $datatypes){
    $con=$GLOBALS['con'];
    if($stmt =mysqli_prepare($con,$sql))
    {
        mysqli_stmt_bind_param($stmt,$datatypes,...$values);
        if(mysqli_stmt_execute($stmt)){
            $res=mysqli_stmt_get_result($stmt);
            mysqli_stmt_close($stmt);
            return $res;
        }
        else{
            mysqli_stmt_close($stmt);
            die("Query cannot be executed - select");
        }
    }
    else{
        die("Query cannot be prepared - select");
    }
    }

    function update($sql, $values, $datatypes){
        $con=$GLOBALS['con'];
        if($stmt =mysqli_prepare($con,$sql))
        {
            mysqli_stmt_bind_param($stmt,$datatypes,...$values);
            if(mysqli_stmt_execute($stmt)){
                $res=mysqli_stmt_affected_rows($stmt);
                mysqli_stmt_close($stmt);
                return $res;
            }
            else{
                mysqli_stmt_close($stmt);
                die("Query cannot be executed - update");
            }
        }
        else{
            die("Query cannot be prepared - update");
        }
    }

    function insert($sql, $values, $datatypes){
        $con=$GLOBALS['con'];
        if($stmt =mysqli_prepare($con,$sql))
        {
            mysqli_stmt_bind_param($stmt,$datatypes,...$values);
            if(mysqli_stmt_execute($stmt)){
                $res=mysqli_stmt_affected_rows($stmt);
                mysqli_stmt_close($stmt);
                return $res;
            }
            else{
                mysqli_stmt_close($stmt);
                die("Query cannot be executed - insert");
            }
        }
        else{
            die("Query cannot be prepared - insert");
        }
    }

    function delete($sql, $values, $datatypes){

        $con=$GLOBALS['con'];
        if($stmt =mysqli_prepare($con,$sql))
        {
            mysqli_stmt_bind_param($stmt,$datatypes,...$values);
            if(mysqli_stmt_execute($stmt)){
                $res=mysqli_stmt_affected_rows($stmt);
                mysqli_stmt_close($stmt);
                return $res;
            }
            else{
                mysqli_stmt_close($stmt);
                die("Query cannot be executed - delete");
            }
        }
        else{
            die("Query cannot be prepared - delete");
        }
    }

    function ddelQ($a){
        $con=$GLOBALS['con'];
        
        $q= "DELETE FROM team_details WHERE sr_no=$a";
  
        $result=mysqli_query($con,$q);
        echo $result;
      }
   
?>