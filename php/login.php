<?php      
    include('conn.php');  
    $email = $_POST['email'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $email = stripcslashes($email);  
        $password = stripcslashes($password);  
        $email = mysqli_real_escape_string($con, $email);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select * from signup where emailAddress = '$email' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){ 
		
            echo '<script> alert("Login successful");</script>';
            echo '<script> window.location.href ="../bmi.php";</script>';
        }  
        else{  
			// include('login.php');
            echo "<script> alert('Invalid email or password');</script>";
            echo '<script> window.location.href ="login.php";</script>';  
        }