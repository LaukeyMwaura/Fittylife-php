<?php 
    include ('conn.php');

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $name = $fname." ".$lname;
    $number = $_POST['number'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    echo "$confirmPassword";

    if($password == $confirmPassword){

    $sql1="INSERT INTO signup(name, phoneNumber, emailAddress, password) VALUES('$name','$number','$email','$password')";
    $result1=mysqli_query($con,$sql1);
    
    if(($result1)){
        echo '<script> window.location.href ="../bmi.php";</script>';
    }
    else{

        echo '<script> alert("ERROR:Please insert correct values in all fields!!! ");</script>';
    
    }
    mysqli_close($con);
} else echo '<script> alert(PASSWORDS NOT MATCHING!!!!);</script>'
?>