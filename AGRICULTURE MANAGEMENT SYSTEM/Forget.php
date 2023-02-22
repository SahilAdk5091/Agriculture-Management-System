                    <?php
                     if(isset($_POST['submit'])){
                     $Fname = $_POST['Fname'];
                     $Email = $_POST['Email'];
                     $Subject ="Forget Password";
                     $Msg = $_POST['msg'];

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
                    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Forget11.css">
</head>
<body>
    <section>
        <div class="imgb">
            <img src="Green.jpg">
        </div>
        <div class="content">
            <div class="formbx">
                <h2>Forget Password</h2>
                <form name="myForm" method="post">
                    <div class="inputbx">
                        <span>Full Name</span>
                        <input type="text" name="Fname" class="inputText" placeholder="User Name" required >
                    </div>
                    <div class="inputbx">
                        <span>Enter Your email</span>
                        <input type="email" name="Email" class="inputText" placeholder="Email" required>
                    </div>
                    <div class="inputbx">
                        <span>Subject</span>
                        <br>
                        <textarea id="subject" name="msg" placeholder="Requesting admin for password" required style="height:150px; width:320px;margin-top: 5px;resize: none;" ></textarea>
                    </div>
                    <div class="inputbx">
                        <input type="submit" name="submit" id="logButton" value="Send Mail">
                    </div>
                    
                </form>
            </div>
        </div>
    </section>
</body>
</html>