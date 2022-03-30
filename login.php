<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/signin.css">
    <title>Login</title>
</head>
<body>
   <main>
       <section class="francis-container">
           <div class="francis-row">
               <div class="francis-inner-container overlay">
                   <h1>Be Happy with <strong>Fity Life:</strong> <br> 
                    "Physical fitness is the first requisite of happiness."</h1>
               </div>
               <div class="francis-inner-container card_holder">
                   <img src="https://raw.githubusercontent.com/waithakaFM/signup-frank-projo/main/life.jpg" alt="fittylife" class="francis">
               <div class="francis-front">
                   <h2>Please input your personal info</h2>
                   <form action="/php/signup.php" method="POST" enctype="multipart/form" >
                       <div class="francis-form-holder">
                           <input type="text" name="fname" id="name" required placeholder="Your first Name">
                            <input type="text" name="lname" id="name" required placeholder="Your last Name">
                           <input type="text" name="number" id="number" required placeholder="Your Phone Number">
                           <input type="email" name="email" id="email" required placeholder="Your email address">
                           <input type="password" name="password" id="password" placeholder="Password" required>
                           <input type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirm your Password" required>
                           <button type="submit"><a href="./bmi.php">Sign Up</a> </button>
                           
                           <p>Already have an account? <span><a href="javascript:void(0)" id="logInLink" class="logInLink">Log In</a></span></p>
                       </div>
                   </form>
               </div>
               <div class="francis-back" >
                   <form action="/php/login.php" method="post" enctype="multipart/form">
                       <div class="francis-form-holder">
                           <input type="text" name="email" id="email" placeholder="Your Email" required>
                           <input type="password" name="password" id="password" placeholder="Password" required>
                           <button type="submit"><a href="">Login</a> </button>
                           <p>Don't have a account? <span><a href="javascript:void(0)" id="logInLink2" class="logInLink">Sign
                            Up</a></span></p>
                       </div>
                   </form>  
               </div>
            </div>
           </div>
       </section>
   </main>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="../js/signin.js"></script>
</html>