<?php
  $farmer_id=$_POST['farmer_id'];
  $farmer_name=$_POST['farmer_name'];
  $phone_number=$_POST['phone_number'];
  $address=$_POST['address'];
  $district=$_POST['district'];
  $town=$_POST['town'];
  $area=$_POST['area'];
  $Date=$_POST['Date'];
   
  

  // Database connection
  $conn = new mysqli("localhost","vaishnav","vaishnav01","agriculture_farmer");
  if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
  } else {
    $stmt = $conn->prepare("insert into farmer(farmer_id,farmer_name,phone_number,address,district,town,area,Date) values(?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("isisssss",$farmer_id,$farmer_name,$phone_number,$address,$district,$town,$area,$Date);
    $execval = $stmt->execute();
    echo $execval;
    echo "Registration successfully...";
    $stmt->close();   
    $conn->close();
     
  }
?>