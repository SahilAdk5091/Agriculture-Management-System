<?php
include("connection.php");
$rn = $_GET['id'];
$fn = $_GET['fullname'];
$co = $_GET['contactno'];
$pr = $_GET['pr'];
$wa = $_GET['wa'];
$war = $_GET['war'];
$em= $_GET['em'];
$pa=$_GET['pa'];
?>
<?php 
$id = $_GET['id'];
if(isset($_POST['submit'])){
    $idupdate = $_GET['id'];
    $fname = $_POST['field1'];
    $cont = $_POST['field2'];
    $prov = $_POST['field3'];
    $wardmuni = $_POST['field4'];
    $wardmunino = $_POST['field5'];
    $email = $_POST['field6'];
    $pass = $_POST['field7'];
$sql = "update `user` set id=$id,fullname='$fname',contactno='$cont',provienceno=$prov,
wardormuni='$wardmuni',wardmunino=$wardmunino,email='$email',password='$pass' where id=$idupdate ";
$data = mysqli_query($con,$sql);
if($data){
    echo"<script>alert('Record Updated')</script>";
}
else{
    echo"Failed";
}
}
?>
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
                    <a href="#"><img src="img/Logo.png" alt="logo"></a>
                </div>
                <p class="toptex">Agriculture is a key role for Nepal Economy and For Natural Beauty </p>
                <img class="flag" src="nepalflag.gif" alt="">
            </div>
        </header>
        <header class="header2">
            <div class="navbar">
                <nav>
                    <ul> 
                        <li><a href="dashboardforadmin.php"><span class="span5"><i class="fa fa-home"></i></span>Dashboard</a></li>
                        <li><a href="Profileforadmin.html">Profile</a></li>
                        <li><a href="adduser.php">Add User</a></li>
                        <li><a href="displayadmin.php"> View User details</a></li>
                        <li><a href="displayinadmin.php"> View Farmer details</a></li>
                    </ul>
                </nav>
            </div>
           
        </header>
        <div class="form-style-5">
<form action="" method="POST">
<fieldset>
<legend><span class="number">1</span> Enter details </legend>
<label>Full name</label>
<input type="text" value="<?php echo "$fn"?>" name="field1" name="field1" placeholder="Full name">
<label>Conatct number</label>
<input type="text" value="<?php echo "$co"?>" name="field2" placeholder="Contact no">
<label>Province number</label>
<select name="field3" >
    <option > <?php echo "$pr"?> </option>
    <option value="1"> 1 </option>
    <option value="2"> 2 </option>
    <option value="3"> 3 </option>
    <option value="4"> 4 </option>
    <option value="5"> 5 </option>
    <option value="6"> 6 </option>
    <option value="7"> 7 </option>
</select>
<label>Ward or Municipility</label>
<select name="field4" >
    <option value="<?php echo "$wa"?>" > Ward </option>
    <option value="Ward"> Ward </option>
    <option value="Municipility "> Municipility </option>
</select>
<label>Ward or Municipility number</label>
<select name="field5" >
    <option> <?php echo "$war"?>  </option>
    <option value="1"> 1 </option>
    <option value="2"> 2 </option>
    <option value="3"> 3 </option>
    <option value="4"> 4 </option>
    <option value="5"> 5 </option>
    <option value="6"> 6 </option>
    <option value="7"> 7 </option>
    <option value="8"> 8 </option>
    <option value="9"> 9 </option>
    <option value="10"> 10 </option>
    <option value="11"> 11 </option>
    <option value="12"> 12 </option>
    <option value="13"> 13 </option>
    <option value="14"> 14 </option>
</select>
<label>Email</label>
<input value="<?php echo "$em"?>" type="email" name="field6" placeholder="Email"></textarea>
<label>Password</label>
<input value="<?php echo "$pa"?>" type="password" class="seven" name="field7" placeholder="Password"></textarea>    
</fieldset>
<input type="submit" name="submit" value="Update user">

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


