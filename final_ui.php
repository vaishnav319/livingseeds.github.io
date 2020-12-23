<?php
    if(array_key_exists("submit",$_POST))
    {
        $link = mysqli_connect("localhost","vaishnav","vaishnav01","agriculture_farmer");
        if(mysqli_connect_error()){
            die("Database connection Error");
        }
        else
        {
            
            $query = "SELECT farmer_id FROM farmer WHERE farmer_id = 
            '".mysqli_real_escape_string($link,$_POST['farmer_id'])."' LIMIT 1";

            $result = mysqli_query($link,$query);
            if(mysqli_num_rows($result)>0)
            {
                echo "<script>alert('ID is already registered');</script>";
            
            }
            else
            {
                $query = "INSERT INTO farmer(farmer_id,farmer_name,phone_number,address,district,town,area,Date) 
                VALUES('".mysqli_real_escape_string($link,$_POST['farmer_id'])."',
                '".mysqli_real_escape_string($link,$_POST['farmer_name'])."',
                '".mysqli_real_escape_string($link,$_POST['phone_number'])."',
                '".mysqli_real_escape_string($link,$_POST['address'])."',
                '".mysqli_real_escape_string($link,$_POST['district'])."',
                '".mysqli_real_escape_string($link,$_POST['town'])."',
                '".mysqli_real_escape_string($link,$_POST['area'])."',
                '".mysqli_real_escape_string($link,$_POST['Date'])."')";
                if(!mysqli_query($link,$query))
                {
                    $error = "<p>Sign Up failed. Please try again.</p>";
                }
                else
                {
                  echo "<script>alert('Registration successful  wait until testing completes');</script>";
                    
                }

            }
            
        }
    }

?>

<!doctype html>
<html>
<head>
  <meta charset="utf-8"><!--meta is giving information about it we are using utf is verion 8 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title> INDIAN FARMING</title>
  <link rel="icon" type="image/png" href="images/icons/icon.png"/>
  <meta name="description" content="Details about my website">
  <meta name="viewport" content="width=device-width">
  <link
  rel="stylesheet"
  href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
  integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
  crossorigin="anonymous"
/>
  <link rel="stylesheet" href="assets/css/styles.css">
 
</head>

<style>
  

    
    
</style>

<body>
  
  <div class="wrapper col-">
    <header class="page-header bg-dark" >
  <ul class="nav nav-pills nav-fill navbar" ><br>
    <li class="nav-item" style="font-size: 40px;color: white; ">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSwMsR9YRGbWxLcHFdmGmXGfbMMAfDI-P5Aow&usqp=CAU" width="50" height="50" class="d-inline-block align-top" alt="">
        Living Seeds&nbsp;&nbsp;&nbsp;&nbsp;
  <li class="nav-item" style="font-size: 20px;">
    <a class="nav-link active" href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
  </li>
    <li class="nav-item"style="font-size: 20px;">
    <a class="nav-link" href="#about">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;About&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
  </li>
  <li class="nav-item" style="font-size: 20px;">
  <a class="nav-item" href="#place">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Explore&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
  </li>
  <li class="nav-item" style="font-size: 20px;">
    <a class="nav-link"  href="#Registration">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Registration&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
  </li>
  <li class="nav-item" style="font-size: 20px;">
    <a class="nav-link"   href="#Status">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Status&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
  </li>
   <li class="nav-item" style="font-size: 20px;">
    <a class="nav-link"   href="login_front.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adminlogin&nbsp;&nbsp;&nbsp;&nbsp;</a>
  </li>
  
  
 </ul>
 
    </header>
  </div>
<div class="jumbotron bg-info ">
  <h1 class="display-4"><img style="height: 5cm;width: 5cm;"src="data:image/png;base64,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">Indian Agriculture!!</h1>
  <p class="lead">India's agriculture is composed of many crops, with the foremost food staples being rice and wheat. <br>
    Indian farmers also grow pulses, potatoes, sugarcane, oilseeds, and such non-food items as cotton, tea, coffee, rubber,<br>
     and jute (a glossy fiber used to make burlap and twine). India is a fisheries giant as well. A total catch of about 3 million<br>
      metric tons annually ranks India among the world's top 10 fishing nations. Despite the overwhelming size of the agricultural sector, <br>
      however, yields per hectare of crops in India are generally low compared to international standards.

</p>
  <hr class="my-4">
  <p>To know more about Indian Agriculture click below button....</p>
  <p class="lead">
    <a class="btn btn-warning btn-lg" href="https://en.wikipedia.org/wiki/Agriculture_in_India#:~:text=India%20is%20among%20the%20top,and%20fastest%20growing%20poultry%20industries." role="button" data-toggle="tooltip" data-placement="right" title="WIKIPEDIA">Know more</a><br><br><br><br><br>
  </p>
</div>
<hr>

<section>
    <center>
    
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
<ol class="carousel-indicators">
<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
</ol>
<div class="carousel-inner">
<div class="carousel-item active">
<img class="d-block w-100" src="https://images.unsplash.com/photo-1557234195-bd9f290f0e4d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" alt="First slide" height="800px"  alt="First slide">
<div class="carousel-caption d-none d-md-block">
              <h4>About 98 percent of India’s agricultural commodities comply with legal upper limits for pesticide residues, making Indian food products among the world’s safest. </h4>
              
            </div>
</div>
<div class="carousel-item">
<img class="d-block w-100" src="data:image/jpeg;base64,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" height="800px" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
              <h1>India is contributing to over 60% of India's agricultural GDP. </h1>
              
            </div>
</div>
<div class="carousel-item">
<img class="d-block w-100" src="data:image/jpeg;base64,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" height="800px"   alt="Third slide">
<div class="carousel-caption d-none d-md-block">
              <h4>Indian farmer is doing multiple tasks.Other than tending to only crops,they also take on the role of mechanic,veternarian,weatherman etc...</h4>
              
            </div>
</div>
</div>
<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev" >
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>
</div>
    </center>
</section>
    
    
    <section>
      <div class="jumbotron" style="text-align:center;">
       
       <p> <h1 class="display-4">Agriculture</h1> is one of the major sectors of the Indian economy. It is present in the country for thousands of years. <br>
        Over the years it has developed and the use of new technologies and equipment replaced almost all the traditional methods of farming. Besides,<br>
         in India, there are still some small farmers that use the old traditional methods of agriculture because they lack the resources to use modern methods.<br>
          Furthermore, this is the only sector that contributed to the growth of not only itself but also of the other sector of the country.</p>
       <hr>

      </div>
    </section>




    <section id="about" >
      <center>
        <div class="display-4">
      <img src="https://jooinn.com/images/light-bulb-idea.jpg" width="70" height="70" class="d-inline-block align-top">---iDEA OF OuR PrOJeCT---<img src="https://jooinn.com/images/light-bulb-idea.jpg" width="70" height="70" class="d-inline-block align-top"></div></center><br><br>
      <div class="container">
      <div class="row">
                <div class="col-md-6 ">
                       <div class="card">                    
                        <img 
                        class="card-img-top" 
                        src="https://wallpapercave.com/wp/wp1886330.jpg" 
                        alt="My Image" 
                        height="80%" width="80%"
                        >    
                        <div class="card-body">
                            <div class="card-text" >Indian Farming</div>      
                        </div>
                        
                    </div>
                  
                </div>
                
                <div class="col-md-6 col-sm-12  skills-column">
                  <div class="card mb-4">
                      <div class="card-header">
                          <h3> Idea</h3>
                      </div>
                      <div class="card-body">
                        <p class="card-text"> Now a days because some farmers<br>
                        have lack of ideas which crop to plant or which fertilizer<br>
                      to use and if it doesn't suits for soil then farmer undergoes<br>
                    financial loss and if it doesn't rain then also farmer undergoes<br>
                  loss soo we have come up with an idea.....</p>        
                      </div>
                  </div>
                  
                  

                  
                </div>
                </div>
              </div>
</section><hr>

    




<section id="place">
   <div class="container" >
     <div class="container-header">
       <t><h2>Process:</h2><t>
      </div><br>
  <div class="row">
    <div class="col-sm-4">
    <img class="card-img-top" style="height:6cm;width:10cm;" src="data:image/jpeg;base64,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" alt="Card image cap">
       <div class="card-body">
              <h5 class="card-title">Soil submit</h5>
               <p class="card-text">This is the 1st step in the process<br>to know more about process.</p>
               <center><a href="#macau" class="btn btn-primary" data-toggle="modal" data-target="#Dubai">STEP-1</a></center>
            <div id="Dubai" class="modal fade" role="dialog">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                       <h4 class="modal-title">More about step-1:</h4>
                    </div>
                  <div class="modal-body">
                  <p>In this step farmer must submit soil to us<br>
                  so that we will test the soil and give soil to testing. <br>
                  Details of farmers will be entered into data base </p>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
                 </div>
                </div>
            </div>
       </div>
</div>
<div class="col-sm-4" >
    <img class="card-img-top" style="height:6cm;width:10cm;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRHR-NFmkCcNRy_YGncQv2V1xMrcQ9ls04uDw&usqp=CAU" alt="Card image cap">
       <div class="card-body">
              <h5 class="card-title">Soil testing</h5>
               <p class="card-text">This is the 2nd step in the process<br>To know more about process....</p>
              <center> <a href="#macau" class="btn btn-primary" data-toggle="modal" data-target="#macau">STEP-2</a></center>
            <div id="macau" class="modal fade" role="dialog">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                       <h4 class="modal-title">More about step-2:</h4>
                    </div>
                  <div class="modal-body">
                  <p>Nutrient test will be done and required nutrients <BR>
                    and contained nutrients will be stored into data base<BR>
                    based on the nutrients the analyzer will analyze which<br>
                    crop has to be planted....
                  </p>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
                 </div>
                </div>
            </div>
       </div>
</div>


    
    <div class="col-sm-4">
      <img class="card-img-top" style="height:6cm;width:10cm;"  src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRpZ2PDsnslX3UU-Vhrxu3vVbW9SEpfjX0B-g&usqp=CAU" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Rainfall check</h5>
    <p class="card-text">This is the 3rd step of this process<br>To know more about this.....</p>
    <center><a href="#step-3" class="btn btn-primary" data-toggle="modal" data-target="#step-3">STEP-3</a></center>
     <div id="step-3" class="modal fade" role="dialog">
       <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">More about step-3:</h4>
            </div>
            <div class="modal-body">
            <p> Based on the farmer area depends on rainfall crop<br>
              because in some areas it rains heavily but in some <br>
              areas it doesn't even rain in rainy season also. So <br>
              It is important to check rainfall stats this is the step<br>
              where based on the rainfall a crop will be predicted.

           </p>
           </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
    </div>
    </div>
</div>
</section>



<section id="places">
  <div class="container" >
    
 <div class="row">
   <div class="col-sm-4">
   <img class="card-img-top" style="height:6cm;width:10cm;" src="data:image/jpeg;base64,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"  alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Analyzer</h5>
        <p class="card-text">This is the 4th step of this process<br>To know more about this process...... </p>
              <center><a href="#step-4" class="btn btn-primary" data-toggle="modal" data-target="#step-4">STEP-4</a></center>
           <div id="step-4" class="modal fade" role="dialog">
               <div class="modal-dialog">
                 <div class="modal-content">
                   <div class="modal-header">
                      <h4 class="modal-title">More about step-4:</h4>
                   </div>
                 <div class="modal-body">
                 <p>In this step Analyzer analyzes data from both<br>
                the tests i.e from nutrient test and from rainfall<br>
              analyst from that he comes to the conclusion of a crop </p>
                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                 </div>
                </div>
               </div>
           </div>
      </div>
</div>
<div class="col-sm-4" >
   <img class="card-img-top" style="height:6cm;width:10cm;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRHR-NFmkCcNRy_YGncQv2V1xMrcQ9ls04uDw&usqp=CAU" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Fertilizer and farming technique-suggestions</h5>
        <p class="card-text">This is the 5th step in the process<br>To know more about process....</p>
             <center> <a href="#step-5" class="btn btn-primary" data-toggle="modal" data-target="#step-5">STEP-5</a></center>
           <div id="step-5" class="modal fade" role="dialog">
               <div class="modal-dialog">
                 <div class="modal-content">
                   <div class="modal-header">
                      <h4 class="modal-title">More about step-5:</h4>
                   </div>
                 <div class="modal-body">
                 <p>Nutrient test will be done and required nutrients <BR>
                  and contained nutrients will be stored into data base<BR>
                  based on the nutrients the analyzer will analyze which<br>
                  crop has to be planted.After getting all the nutrient values <br>
                  and rainfall values here comes the most investment and important <br>
                  part the use of fertilizer in the suggested crop so we would suggest<br>
                   the list of fertilizer which help the farmer in investment too
                 </p>
                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                 </div>
                </div>
               </div>
           </div>
      </div>
</div>


   
   <div class="col-sm-4">
     <img class="card-img-top" style="height:6cm;width:10cm;"  src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRXRXBHLXizUdqHUrumXf7xiD8WYzKi8NqeKQ&usqp=CAU " alt="Card image cap">
 <div class="card-body">
   <h5 class="card-title">Farmer benefit </h5>
   <p class="card-text">This is the 6th step and final  of this process<br>To know more about this.....</p>
   <center><a href="#step-6" class="btn btn-primary" data-toggle="modal" data-target="#step-6">STEP-6</a></center>
    <div id="step-6" class="modal fade" role="dialog">
      <div class="modal-dialog">
         <div class="modal-content">
           <div class="modal-header">
             <h4 class="modal-title">More about step-6:</h4>
           </div>
           <div class="modal-body">
           <p> Finally farmer will be getting information regarding<br>
            which crop they need to be planted and what technique<br>
            they must use and they also get information regarding<br>
            which fertilizer they must use and these details will get<br>
            stored into database.

          </p>
          </div>
     <div class="modal-footer">
       <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
     </div>
   </div>
 </div>
   </div>
   </div>
</div>
</section>

<hr>


    <section ID="Registration" class="container mt-4" style="border: 3px solid grey;">
      <div class="card-header " >
        <h1>Registration</h1>
      </div>
      <div class="card-body">
        <form action="final_ui.php" method="POST" >
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for= "farmer_id">farmer_id (AADHAR CARD NUMBER)</label>
              <input type="number" class="form-control" name="farmer_id" id="farmer_id">
            </div>
            <div class="form-group col-md-6">
              <label for="farmer_name">farmer_name</label>
              <input type="text" class="form-control" name="farmer_name" id="farmer_name">
            </div>
            <div class="form-group col-md-6">
              <label for="phone_number">phone_number</label>
              <input type="text" class="form-control" name="phone_number" id="phone_number">
            </div>
          </div>
          <div class="form-group">
            <label for="address">address</label>
            <input type="text" class="form-control" name="address" id="address">
          </div>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="district">DISTRICT</label>
<select name="district" id="district" class="form-control">
<option value="adilabad">Adilabad</option>
<option value="ananthapur">Ananthapur</option>
<option value="chitoor">Chitoor</option>
<option value="east godawari">East godawari</option>
<option value="guntur">Guntur</option>
<option value="hyderabad">Hyderabad</option>
<option value="kadapa">Kadapa</option>
<option value="karimnagar">Karimnagar</option>
<option value="khammam">Khammam</option>
<option value="krishna">Krishna</option>
<option value="kurnool">Kurnool</option>
<option value="mahbunagar">Mahbunagar</option>
<option value="medhak">Medhak</option>
<option value="nalgonda">Nalgonda</option>
<option value="nellore">Nellore</option>
<option value="nizambad">Nizambad</option>
<option value="prakasham">Prakasham</option>
<option value="rangareddy">Rangareddy</option>
<option value="srikakulam">Srikakulam</option>
<option value="vizag">Vizag</option>
<option value="vizianagaram">vizianagaram</option>
<option value="warangal">Warangal</option>
<option value="west godawari">West godawari</option>
</select>
</div>
<div class="form-group col-md-4">
<label for="town">TOWN</label>
<select name="town" id="town" class="form-control">
<option value="Dhone">Dhone</option>
<option value="valparai">Valparai</option>
<option value="Lakkampatti">Lakkampatti</option>
<option value="Kochi">Kochi</option>
<option value="guntur">Krishnapatnam</option>
<option value="hyderabad">Nandyal</option>
<option value="kadapa">Ananmadada</option>
<option value="karimnagar">Proddatur</option>
<option value="khammam">Kaniyapuram</option>
<option value="krishna">Bheemili</option>
</select>
</div>
<div class="form-group col-md-4">
<label for="area">AREA</label>
<select name="area" id="area" class="form-control">
<option value="Dhone">Ram nagar</option>
<option value="Krishna nagar">Krishna nagar</option>
<option value="Sai nagar">Sai nagar</option>
<option value="Gandhi nagar">Gandhi nagar</option>
<option value="Amrutha nagar">Amrutha nagar</option>
<option value="Srinivas nagar">Srinivas nagar</option>
<option value="">SBI colony</option>
<option value="karimnagar">Madhapur</option>
<option value="khammam">Ymr colony</option>
<option value="krishna">Sanjeev nagar</option>
</select>
            </div>
          </div>
          <div class="form-group col-md-4">
            <label for="Date">Date</label>
            <input type="Date" class="form-control" name="Date" id="Date">
          </div>
          
          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" required type="checkbox" id="gridCheck">
              <label class="form-check-label" for="gridCheck">
               Submitted soil
              </label>
            </div>
            
          </div>
          <button type="submit" name="submit" class="btn btn-lg btn-outline-success">Register</button>
        </form> 
    </div>
  </section >
  <section class="container mt-4" id="Status" style="border: 3px solid grey;">
    <div class="card-header" >
      <h1>Status</h1>
    </div>
    <div class="card-body">
        <form action="status.php" method="POST" target="_blank">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for= "farmerid">FARMER ID </label>
              <input type="number" class="form-control" name="farmerid" id="farmerid">
    </div>
          </div>
    <br>
    <button type="submit" name="register" class="btn btn-primary">CHECK STATUS</button>
    </form>

  </section>
    <section>
      <div class="jumbotron jumbotron-fluid" >
  <div class="container" >
   <h1>please review your experience giving your opinion</h1><br>
    &nbsp;&nbsp;&nbsp;
   <a href="https://docs.google.com/forms/d/e/1FAIpQLSdYjVYXiICTu9uSCMt71HyWTk9NfcP530WPmui_GO12HAzbLQ/viewform?usp=sf_link"> <button type="button" class="btn btn-success btn-lg">REVIEW</button></a>
  </div>
  </div>
</section>
    <section >
      <div class="jumbotron">
        <h1 class="display-4">Donate Poor!</h1>
  <p class="lead">These donations will go to poor farmers who are indeed of money</p>
  <hr class="my-4">
 
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="#" role="button">Donate </a>
  </p>
            
      </div>

    </section>




    

    <main class="page-body">
        <p>Main page content, a lot to be built here!</p>
    </main>
    <footer class="page-footer">
      <!-- Copyright -->
      <div class="footer-copyright text-center py-3">© 2020 Copyright:
      Built with Respect!!!!
      </div>
      <!-- Copyright -->
    </footer>
  </div>

<!-- Footer -->

<!-- Footer -->
<script
  src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
  integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
  crossorigin="anonymous"
></script>
<script
  src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
  integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
  crossorigin="anonymous"
></script>
<script
  src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
  integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
  crossorigin="anonymous"
></script>

</body>

</html>
