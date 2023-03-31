<?php
if(isset($_POST['submit'])){
    $Fname = $_POST['Fname'];
    $Lname = $_POST['Lname'];
    $Email = $_POST['Email'];
    $Msg = $_POST['msg'];
}

if(empty($Fname) || empty($Lname) || empty($Email) || empty($Msg))
{
    header('location.Contact.php?error');
}


?>