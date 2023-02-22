                <?php
                     if(isset($_POST['submit'])){
                     $Fname = $_POST['Fname'];
                     $Email = $_POST['Email'];
                     $Subject =$_POST['Subject'];
                     $Msg = $_POST['msg'];

                     if(empty($Fname) || empty($Email) || empty($Subject) || empty($Msg))
                    {
                        echo "Enter somthing in field";
                    }
                    else{
                        $to ="agrooinfo@gmail.com";
                        $body ="";
                        $body .="From: ".$Fname. "\r\n";
                        $body .="Email: ".$Email. "\r\n";
                        $body .="From: ".$Msg. "\r\n";
                        mail($to,$Subject,$body);
                        ?>
                        <script>
                        alert("Submitted");
                        </script>
                    <?php
                    }
                    }
                    ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <link rel="stylesheet" href="Contactstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="Contactstyle111.css">
</head>	
<body>
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
                        <li><a href="Main.php"><span class="span5"><i class="fa fa-home"></i></span>Home</a></li>
                        <li><a href="About.html">AboutUS</a></li>
                        <li><a href="Help.html">Help</a></li>
                        <li><a href="Conatct.php">Contact Us</a></li>
                    </ul>
                </nav>
            </div>
        </header>
    </section>
	<div class="section">
		<div class="container">
			<div class="content-section">
				<div class="title">
					<h1>Contact Us</h1>
				</div>
				<div class="content">
					<h3>Contact Info</h3>
					<p>Government of Nepal</p>
					<p>Agriculture Managemetn System</p>
					<P>Nagpokhari,Kathmandu</P>
					<p>Phone no: 20-60-275,20-55-275</p>
					<p>Website:www.agroo.com</p>
					<P>Email:Agrooinfo@gmail.com</P>
				</div>
				<div class="social">
					<a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
					<a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
					<a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
				</div>
			</div>
			<div class="container1">
                <form action="" method="POST">
                  <label for="fname">First Name</label><br>
                  <input type="text" id="fname" name="Fname" placeholder="Name..">
                  <br>
                  <label for="lname">Email</label><br>
                  <input type="email" id="lname" name="Email" placeholder="Email.">
                  <br>
                  <label for="">Subject</label><br>
                  <input type="text" id="lname" name="Subject" placeholder="subject">
                  <br>
                  <textarea id="subject" name="msg" placeholder="Write something.." style="height:200px;" ></textarea>
                  <br>
                  <input type="submit" value="Submit" name="submit" class="btn1">
                </form>
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
            <H2><span class="span5"><i class="fa-solid fa-location-dot"></i></span>Loaction</H2>
            <div class="map">
            </div>
        </div>
    </section>
</body>
</html>