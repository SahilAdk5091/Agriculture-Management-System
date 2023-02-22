<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="displaystyle.css">
</head>
<body>
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
</section>
    <div class="main-div">
        <div class="center-div">
        <h1 class="center">Farmer details</h1>
        <a href="export.php"><button type="button" class="button1">Export</button></a>
            <table id="customers">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Farmer name</th>
                        <th>Pro</th>
                        <th>Crop</th>
                        <th>Farmer rate</th>
                        <th>Market rate</th>
                        <th>Provience</th>
                        <th colspan="2">Operation</th>
                        
</tr>
</thead>
<tbody>
<?php

include 'connection.php';
$selectquery = "select * from cropdetails";
$query = mysqli_query($con,$selectquery);

while($res = mysqli_fetch_array($query)){
    ?>
    <tr>
        <td><?php echo  $res['id'] . "<br>"; ?></td>
        <td><?php echo  $res['Farmername'] . "<br>"; ?></td>
        <td><?php echo  $res['Production'] . "<br>"; ?> </td>
        <td><?php echo  $res['Cropname'] . "<br>"; ?> </td>
        <td><?php echo  $res['Farmerrate'] . "<br>"; ?> </td>
        <td><?php echo  $res['Marketrate'] . "<br>"; ?> </td>
        <td><?php echo  $res['Provience'] . "<br>"; ?> </td>
        <td><a href="updates.php?id=<?php echo  $res['id']; ?>&Farmername=<?php echo  $res['Farmername']; ?>&Production=<?php echo  $res['Production']; ?>&Cropname=<?php echo  $res['Cropname']; ?>&Farmerrate=<?php echo  $res['Farmerrate']; ?>&Marketrate=<?php echo  $res['Marketrate'];?>&Provience=<?php echo  $res['Provience']; ?>" data-toggle="tooltip" data-placement="buttom" title="UPDATE"><i class="fa fa-edit"></i></a></td>
        <td><a href="del.php?id=<?php echo  $res['id']; ?>&Farmername=<?php echo  $res['Farmername']; ?>&Production=<?php echo  $res['Production']; ?>&Cropname=<?php echo  $res['Cropname']; ?>&Farmerrate=<?php echo  $res['Farmerrate']; ?>&Marketrate=<?php echo  $res['Marketrate'];?>&Provience=<?php echo  $res['Provience']; ?>" data-toggle="tooltip" data-placement="buttom" title="Delete"><i class="fa fa-trash"></i></a></td>
        
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
