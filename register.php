<?php include('server.php') ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Play&display=swap" rel="stylesheet">
        <script src="jquery.min.js"></script>
        <script src="popper.min.js"></script>
        <script src="bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Registration Form </title>
   
</head>
<body>
    <div>
            
    <center>
        <div class="pic" style="position: relative;width:100%;" >
            <img src="wooden.jpg"  style="width: 100%;height:100%;">
            
          </div>
    </center>
    <div style="margin:10px; width:40%;position:absolute;top:15%;left:50%">
    <center>

	<form method="post" action="register.php">
    <?php include('errors.php'); ?>
        <label style="color: white;font-weight: bolder;font-family: 'Play', sans-serif"> <h2>Register Here </h2></label>
        <div style="color: black;">
        <input type="Username"style="margin:40px;width:70%;font-family: 'Play', sans-serif" class="form-control" name="username" value="<?php echo $username; ?>" placeholder="Enter Username" required>
        <input type="email"style="margin:40px;width:70%;font-family: 'Play', sans-serif" class="form-control" name= "email" value="<?php echo $email; ?>" placeholder="Enter Email" required>
        <input type="password" style="margin:40px;width:70%;font-family: 'Play', sans-serif"class="form-control" name="password_1" placeholder="Enter Password" required>
        <input type="password" style="margin:40px;width:70%;font-family: 'Play', sans-serif"class="form-control" name="password_2" placeholder="Confirm Password" required>
        </div>
    
        <button class="btn btn-primary" name="reg_user" style="margin:10px;font-family: 'Play', sans-serif;background-color:purple;"> Register</button>
        <p style="color: white;font-weight: bolder;font-family: 'Play', sans-serif">Already a member? <a href="login.php"> <b>Sign in</b></a></p>
       </form>
    </center>
    </div>
</body>
</html>























































	