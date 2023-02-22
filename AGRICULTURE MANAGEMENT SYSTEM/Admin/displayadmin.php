<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="displaystyle12.css">
</head>
<body>
<section class="head">
        <header class="header1">
            <div class="top">
                <div class="logo">
                    <a href="dashboardforadmin.php"><img src="img/Logo.png" alt="logo"></a>
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
</section>
    <div class="main-div">
        <div class="center-div">
        <h1 class="center">User details</h1>
        <a href="exportuser.php"><button type="button" class="button1">Export</button></a>
            <table id="customers">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Full name</th>
                        <th>Contact no</th>
                        <th>Provience</th>
                        <th>Ward/Municipility</th>
                        <th>Ward/Municipility no:</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th colspan="2">operation</th>
                        
</tr>
</thead>
<tbody>
<?php

include 'connection.php';
$selectquery = "select * from user";
$query = mysqli_query($con,$selectquery);

while($res = mysqli_fetch_array($query)){
    ?>
    <tr>
        <td><?php echo  $res['id'] . "<br>"; ?></td>
        <td><?php echo  $res['fullname'] . "<br>"; ?></td>
        <td><?php echo  $res['contactno'] . "<br>"; ?> </td>
        <td><?php echo  $res['provienceno'] . "<br>"; ?> </td>
        <td><?php echo  $res['wardormuni'] . "<br>"; ?> </td>
        <td><?php echo  $res['wardmunino'] . "<br>"; ?> </td>
        <td><?php echo  $res['email'] . "<br>"; ?> </td>
        <td><?php echo  $res['password'] . "<br>"; ?> </td>
        <td><a href="updatesadmin.php?id=<?php echo  $res['id']; ?>&fullname=<?php echo  $res['fullname']; ?>&contactno=<?php echo  $res['contactno']; ?>&pr=<?php echo  $res['provienceno']; ?>&wa=<?php echo  $res['wardormuni']; ?>&war=<?php echo  $res['wardmunino'];?>&em=<?php echo  $res['email']; ?>&pa=<?php echo  $res['password']; ?>" data-toggle="tooltip" data-placement="buttom" title="UPDATE"><i class="fa fa-edit"></i></a></td>
        <td><a href="del.php?id=<?php echo  $res['id']; ?>&fullname=<?php echo  $res['fullname']; ?>&contactno=<?php echo  $res['contactno']; ?>&provienceno=<?php echo  $res['provienceno']; ?>&wardormuni=<?php echo  $res['wardormuni']; ?>&wardmunino=<?php echo  $res['wardmunino'];?>&email=<?php echo  $res['email']; ?>&password=<?php echo  $res['password']; ?>" data-toggle="tooltip" data-placement="buttom" title="Delete"><i class="fa fa-trash"></i></a></td>
        
</tr>



<?php

}
?>




    
</tbody>
</table>

        </div>

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
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
    
</body>
</html>
