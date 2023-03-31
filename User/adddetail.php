<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Detail</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="Admin.css">

<section class="head">
        <header class="header1">
            <div class="top">
                <div class="logo">
                    <a href="dashboard.php"><img src="img/Logo.png" alt="logo"></a>
                </div>
                <p class="toptex">Agriculture is a key role for Nepal Economy and For Natural Beauty </p>
                <img class="flag" src="nepalflag.gif" alt="">
            </div>
        </header>
        <header class="header2">
            <div class="navbar">
                <nav>
                    <ul> 
                        <li><a href="dashboard.php"><span class="span5"><i class="fa fa-home"></i></span>Dashboard</a></li>
                        <li><a href="adddetail.php">Add detail</a></li>
                        <li><a href="display.php">Farmer detail</a></li>
                    </ul>
                </nav>
            </div>
            
        </header>
<div class="form-style-5">
<form action="" method="POST">
<fieldset>
<legend><span class="number">1</span> Enter details </legend>
<label>Farmer name</label>
<input type="text" name="field1" placeholder="Farmer name">
<label>Production</label>
<input type="text" name="field2" placeholder="Production">
<label>Crop name</label>
<select name="field3" >
    <option value="Wheat"> Wheat </option>
    <option value="Rice"> Rice </option>
    <option value="Maize"> Maize </option>
    <option value="Soyabean"> Soyabean </option>
    <option value="Potatoes"> Potatoes </option>
    <option value="Apple"> Apple </option>
    <option value="Sugarcane"> Sugarcane </option>
    <option value="Mango"> Mango </option>
    <option value="Corn"> Corn </option>
    <option value="Pulses"> Pulses </option>
</select>
<label>Farmer rate</label>
<input type="text" name="field4" placeholder="Farmer rate">
<label>Market rate</label>
<input type="text" name="field5" placeholder="Market rate">

<label for="job">Province no</label>
<select name="field6" >
    <option value="1"> 1 </option>
    <option value="2"> 2 </option>
    <option value="3"> 3 </option>
    <option value="4"> 4 </option>
    <option value="5"> 5 </option>
    <option value="6"> 6 </option>
    <option value="7"> 7 </option>
</select>
</fieldset>
<input type="submit" name="submit" value="Add" />
</form>
</div>
<section class="last">
  <div class="last1">
      <H2><span class="span5"><i class="fa-solid fa-address-card"></i></span>Contact Us</H2>
      <h3>Department of Agriculture</h3>
      <h4><span class="span5"><i class="fa-solid fa-earth-americas"></i></span>Nagpokhari,Kathmandu</h4>
      <h4><span class="span5"><i class="fa-solid fa-earth-americas"></i></span></i>Nagpokhari,Kathmandu</h4>
      <h4><span class="span5"><i class="fa-solid fa-phone"></i></span></i>Phone : +977-9807991363, 5524229, 5524226</h4>
      <h4><span class="span5"><i class="fa-solid fa-message"></i></span> Agridepart.gov.np</h4>
  </div>
  <div class="last2">
      <H2><span class="span5"><i class="fa-solid fa-location-dot"></i></span>Location</H2>
      <div class="map">
      </div>
  </div>
</section>
</head>
</html>
<?php
include 'connection.php';

if(isset($_POST['submit'])){
    $name = $_POST['field1'];
    $production = $_POST['field2'];
    $crop_name = $_POST['field3'];
    $farmer_rate = $_POST['field4'];
    $market_rate = $_POST['field5'];
    $provience = $_POST['field6'];

    $insertquery = "insert into cropdetails(Farmername,Production,Cropname,Farmerrate,Marketrate,Provience)
                   values('$name','$production','$crop_name','$farmer_rate','$market_rate','$provience')";
    
    $result = mysqli_query($con,$insertquery);

    if($result){
        ?>
        <script>
            alert("data insterted sucessully");
        </script>
        <?php
    }else{
        ?>
        <script>
            alert("data not inserted");
        </script>
        <?php
    }

}
?>