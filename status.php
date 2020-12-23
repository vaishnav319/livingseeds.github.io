<html>
<style >table {
    border-collapse: separate;
    border-spacing: 0;
    color: #4a4a4d;
    font: 14px/1.4 "Helvetica Neue", Helvetica, Arial, sans-serif;
  }
  th,
  td {
    padding: 10px 15px;
    vertical-align: middle;
  }
  thead {
    background: #395870;
    background: linear-gradient(#49708f, #293f50);
    color: #fff;
    font-size: 11px;
    text-transform: uppercase;
  }
  </style>
<body background= "ex.jpg"; style="background-repeat: no-repeat;background-size: cover; "><h1>Complete Report of your soil:</h1>
<center><div class="bs-example">
    <table border="3" class="table">
        <thead class="thead-light">
            <tr>
                <th>FALL PERCENTAGE</th>
                <th>FARMER ID</th>
                <th>SOIL ID</th>
                <th>RECORD ID</th>
                <th>NUTRIENT NAME</th>
                <th>SOIL TYPE</th>
                <th>TECHNIQUE NAME</th>
                <th>NUTRIENT PERCENTAGE</th>
                <th>CROP NAME</th>
                <th>FERTILISER NAME</th>
            </tr>
        </thead>
        <?php
        session_start();
        if(array_key_exists("register",$_POST))
        {
        $_SESSION["farmerid"] = $_POST['farmerid'];
        $link = mysqli_connect("localhost","vaishnav","vaishnav01","agriculture_farmer");
        if(mysqli_connect_error()){
            die("Database connection Error");
        }
        else
        {
            
            $query = "SELECT farmer_id FROM farmer WHERE farmer_id = 
            '".mysqli_real_escape_string($link,$_SESSION['farmerid'])."' LIMIT 1";
            $result = mysqli_query($link,$query);
            if(mysqli_num_rows($result)>0)
            {
                $sql="SELECT area.fall_percentage as a,farmer.farmer_id as b,soil.soil_id as c,soil.record_id as d,nutrient_farmer.nutrient_name as e,soil.soil_type as f,technique.technique_name as g,nutrient_farmer.nutrient_percentage as h,nutrient_farmer.crop_name as i,fertiliser.fertiliser_name as j from farmer,soil,area,fertiliser,nutrient_farmer,technique where farmer.soil_id=soil.soil_id and soil.nutrient_id=nutrient_farmer.nutrient_id and soil.nutrient_percentage=nutrient_farmer.nutrient_percentage and soil.nutrient_id=fertiliser.nutrient_id and soil.nutrient_percentage=fertiliser.nutrient_percentage and soil.nutrient_id=technique.nutrient_id and soil.nutrient_percentage=technique.nutrient_percentage and area.area_name=farmer.area and farmer.farmer_id='".mysqli_real_escape_string($link,$_SESSION['farmerid'])."'";
                $data=mysqli_query($link,$sql);
                $total=mysqli_num_rows($data);
                if($total!=0){
                while($result=mysqli_fetch_assoc($data))
                {
                    echo "
                    <tr>
                    <td>".$result['a']."</td>
                    <td>".$result['b']."</td>
                    <td>".$result['c']."</td>
                    <td>".$result['d']."</td>
                    <td>".$result['e']."</td>
                    <td>".$result['f']."</td>
                    <td>".$result['g']."</td>
                    <td>".$result['h']."</td>
                    <td>".$result['i']."</td>
                    <td>".$result['j']."</td>
                </tr>";   
                }
            
            }
            else{
                echo "no status";
            }
            
        }
        else
        {
            echo "not registered yet";
        }
    }
}   
        ?>
        
    </table>
</div>
</center>
</body>
</html>