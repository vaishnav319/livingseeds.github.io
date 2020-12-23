<?php
   $testerid=$_POST['testerid'];
   $password=$_POST['password'];
   
   $con =new mysqli("localhost","vaishnav", "vaishnav01","agriculture_farmer");
    if($con->connect_error){
        die("failed".$con->connect_error);
    }
    else{
        $stmt=$con->prepare("select * from  adminlogin where testerid = ?");
        $stmt->bind_param("s",$testerid);
        $stmt->execute();
        $stmt_result=$stmt->get_result();
        if ($stmt_result->num_rows==1 ) {

 

           $data=$stmt_result->fetch_assoc(); 
           if ($data['password']==$password) {
               header("Location: adminform.php");#after connection

 

           }
           else{
            echo "Failed";

 

           }

 

        }
        else{
            echo "failed";
        }
    }
?>