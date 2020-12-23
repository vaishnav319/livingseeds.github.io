
<!doctype html>
<html>
<head>
  <meta charset="utf-8"><!--meta is giving information about it we are using utf is verion 8 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title> INDIAN FARMING</title>
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
<body>
<section ID="Registration" class="container mt-4" style="border: 3px solid grey;">
      <div class="card-header " >
        <h1>Test Report</h1>
      </div>
      <div class="card-body">
        <form action="soil_back.php" method="POST" >
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for= "farmer_id">soil_id </label>
              <input type="number" class="form-control" name="soil_id" id="soil_id">
            </div>
            <div class="form-group col-md-6">
              <label for="farmer_name">nutrient_id</label>
              <input type="text" class="form-control" name="nutrient_id" id="nutrient_id">
            </div>
            <div class="form-group col-md-6">
              <label for="phone_number">Soil type</label>
              <input type="text" class="form-control" name="soil_type" id="soil_type">
            </div>
            <div class="form-group col-md-6">
              <label for="phone_number">Nutrient percentage</label>
              <input type="text" class="form-control" name="nutrient_percentage" id="nutrient_percentage">
            </div>
          </div>
          
          
          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" required type="checkbox" id="gridCheck">
              <label class="form-check-label" for="gridCheck">
               Tested perfectly
              </label>
            </div>
            
          </div>
          <button type="submit" name="submit" class="btn btn-lg btn-outline-success">Send Report</button>
        </form> 
    </div>
  </section >
</body>
</html>
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