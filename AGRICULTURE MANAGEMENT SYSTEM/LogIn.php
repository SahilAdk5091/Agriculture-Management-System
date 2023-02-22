
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Loginstyle11.css">
    <script src="Loginjava.js"></script>
</head>
<body>
    <section>
        <div class="imgb">
            <img src="Green.jpg">
        </div>
        <div class="content">
            <div class="formbx">
                <h2>Login</h2>
                <div id="error"></div>
                <form action="" id="form" method="POST">
                <?php
                include 'connection.php';
                    if(isset($_POST['login'])) {
                        if(!empty($_POST['Uname']) && !empty($_POST['Pass']) ){
                        $email = $_POST['Uname'];
                        $password = $_POST['Pass'];
                        $select = "select * from user where email='$email' && password='$password'";
                        $run = mysqli_query($con,$select);
                        $row_user = mysqli_fetch_array($run);
                        $db_email = isset($row_user['email']);
                        $db_password = isset($row_user['password']);
	                    $admin = "agrooinfo@gmail.com";
                        $ad_pass ="admin12345";
                        if($password == $db_password && $email == $db_email){
                            //header("Location:User/dashboard.php");
                            //echo "<script>window.open('User/dashboard.php','self');</script>";
                        }
	                    elseif($email == $admin && $password == $ad_pass){
                            //header("Location:Admin/dashboardforadmin.php");
                            //echo "<script>window.open('Admin/dashboardforadmin.php','self');</script>";
                        }
                        elseif($password !== $db_password){
                            echo "Invalid email or password";
                        }
                        else{
                            echo "Error";
                        }
                    }
                }
                ?>
                    <div class="inputbx">
                        <span>Username</span>
                        <input type="email" id="email" name="Uname" class="inputText" placeholder="User Name" required>
                    </div>
                    <div class="inputbx">
                        <span>Password</span>
                        <input type="password" id="password" name="Pass" class="inputText" placeholder="Password" required>
                    </div>
                    <div class="inputbx">
                        <input type="submit" name="login" id="logButton" value="Login">
                    </div>
                    <a href="Forget.php"><p style="margin-left: 100px;">Forget Password</p></a>
                </form>
            </div>
        </div>
    </section>
</body>
</html>