<?php
  $soil_id=$_POST['soil_id'];
  $nutrient_id=$_POST['nutrient_id'];
  $soil_type=$_POST['soil_type'];
  $nutrient_percentage=$_POST['nutrient_percentage'];
  
  

  // Database connection
  $conn = new mysqli("localhost","vaishnav","vaishnav01","agriculture_farmer");
  if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
  } else {
    $stmt = $conn->prepare("insert into soil(soil_id,nutrient_id,soil_type,nutrient_percentage) values(?, ?, ?, ?)");
    $stmt->bind_param("iisi",$soil_id,$nutrient_id,$soil_type,$nutrient_percentage);
    $execval = $stmt->execute();
    echo $execval;
    echo "Submitted Report to Admin succesfully" ;
    $stmt->close();   
    $conn->close();
     
  }
?>