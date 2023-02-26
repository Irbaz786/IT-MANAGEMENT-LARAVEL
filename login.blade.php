<?php
        include('CONECTION.php');
         if (isset($_POST['submit1'])) {
            if (strlen($_POST['password'])>=8) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $query = "INSERT INTO user_master(user_name, user_email, user_password) VALUES ('$name','$email', '$password');";
                if (mysqli_query($con,$query)) {
                    echo '<script>alert("successfull");</script>';
                    echo '<script>window.location = "login.php"</script>';
                }
                else{
                    die("Error: You already registered member so you visit the Login page");
                }
            }
            else{
                echo "";
            }
        }
    ?>

 <?php
        if(isset($_POST['submit']))
        {
            include('CONECTION.php');
            $email = $_POST['email'];
            $password = $_POST['password']; 
            $query = "SELECT * FROM user_master where `user_email` = '$email' AND `user_password` = '$password'";
            $result = mysqli_query($con,$query);
            $row=mysqli_fetch_array($result);
            if (!empty($row['user_email']) && !empty($row['user_password']) && $row['user_role']==1) {
                echo '<script>window.location = "admin.php"</script>';

            }
            else if (!empty($row['user_email']) && !empty($row['user_password']) && $row['user_role']==0) {
               
                echo '<script>window.location = "index.php"</script>';

            }
            else {
                echo '<script>alert("try again");</script>';
            }
        }
    ?>
<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome To Login</title>
    <link rel="shortcut icon" href="sis.jpeg">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" />
    <!-- Fontawesome CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <style type="text/css">
      

      @import url("https://fonts.googleapis.com/css?family=Maven+Pro:400,500,600,700,800,900&display=swap");

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Maven Pro", sans-serif;



}
.wrapper {
  height: 100vh;

}
.myColor {
  background-image: linear-gradient(to right, #f83700 50%, #f9d424 150%);
  
}
.myShadow {
  box-shadow: 0 10px 10px rgba(0, 0, 0, 0.5);
}
.myBtn {
  border-radius: 50px;
  font-weight: bold;
  font-size: 20px;
  background-image: linear-gradient(to right, #0acffe 0%, #495aff 100%);
  border: none;

}
.myBtn:hover {
  background-image: linear-gradient(to right, #495aff 0%, #0acffe 100%);
}
.myHr {
  height: 2px;
  border-radius: 100px;
}
.myLinkBtn {
  border-radius: 100px;
  width: 50%;
  border: 2px solid #fff;
}
@media (max-width: 720px) {
  .wrapper {
    margin: 2px;
  }
}
li{
  display: inline;
  padding: 18px;
  margin: 12px;
  border-right-color: 4px dashed;
  
}
a{
  
}
ul{
  list-style-type: none;
  margin: 8px;
  padding:10px;
  overflow: hidden;
  background-color: white;

  position: sticky;

}
.li1{color:#111111;
  text-decoration: none;
  padding: 10px 17px;
}
.li2{color:#111111;
  text-decoration: none;
  padding: 10px 12px;
  }
.li3{color:#111111;
  text-decoration: none;
  padding: 10px 12px;
}
.li4{color:#111111;
  text-decoration: none;
  padding: 10px 12px;
  }

.li5{color:#111111;
  text-decoration: none;
  padding: 10px 12px;
}
.li6{color:#111111;
  text-decoration: none;
  padding: 10px 12px;
}


.a1:hover{
  border: 2px solid #ff96ad;
  color: #ff96ad;
  background-color: whitesmoke;
}
.a1{
  color:#2d452f;
  text-decoration: none;
  padding: 10px 12px;
  padding: 5px;
  background-color: whitesmoke;
  }
  
.a2:hover{
  border: 2px solid #ff96ad;
  color: #ff96ad;
  background-color: whitesmoke;
}
.a2{
  
color:#2d452f;
  text-decoration: none;
  padding: 10px 12px;
  padding: 5px;
  background-color: whitesmoke;
  
}

.a3:hover{
  border: 2px solid #ff96ad;
  color: #ff96ad;
  background-color: whitesmoke;
}

.a3{color:#2d452f;
  text-decoration: none;
  padding: 10px 12px;
  padding: 5px;
  background-color: whitesmoke;
  font: bold underline;
}

.a4:hover{
  border: 2px solid #ff96ad;
  color: #ff96ad;
  background-color: whitesmoke;
}
.a4{color:#2d452f;
  text-decoration: none;
  padding: 10px 12px;
  padding: 5px;
  background-color: whitesmoke;
  font: bold underline;
}
.a6:hover{
  border: 2px solid #ff96ad;
  color: #ff96ad;
  background-color: whitesmoke;
}
.a6{color:#2d452f;
  text-decoration: none;
  padding: 10px 12px;
  padding: 5px;
  background-color: whitesmoke;
  font: bold underline;
}
.a5:hover{
  border: 2px solid #ff96ad;
  color: #ff96ad;
  background-color: whitesmoke;
}
.a5{color:#2d452f;
  text-decoration: none;
  padding: 10px 12px;
  padding: 5px;
  background-color: whitesmoke;
  font: bold underline;
}
body{
  background-image: url(https://images.unsplash.com/photo-1531297484001-80022131f5a1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8dGVjaHxlbnwwfHwwfHw%3D&w=1000&q=80);
}




    </style>

  </head>
  <body class="bg-info">
    <nav id="nav0" class="nav1">
            <ul id="ul0" class="ul1"> 
              <li class="li1"><a  class="a1"  href="index.php">Home</li></a>
              <li class="li6"><a  class="a6"  href="FORM.php">FORM</li></a>
              <li class="li2"><a  class="a2"   href="AMAAN.php"> Services</li></a>
              <li class="li3"><a  class="a3" href="contactus.php">  Contact Us</li></a>
              <li class="li4"><a  class="a4" href="Aboutus.php"> About Us</li></a>
              <li class="li5"><a  class="a5" href="login.php">LOGIN</li></a>

              <li style="float: right; padding: 2PX; margin: 2PX; color: WHITE; font-family:impact;">SIS INFO SOLUTION</li>
            </ul>
    <div class="container">
      <!-- Login Form Start -->
      <form method="post">
      <div class="row justify-content-center wrapper" id="login-box">
        <div class="col-lg-10 my-auto myShadow">
          <div class="row">
            <div class="col-lg-7 bg-black p-4">
              <h1 class="text-center font-weight-bold text-white">Sign in to Account</h1>
              <hr class="my-3" />
              <form action="#" method="post" class="px-3" id="login-form">
                <div class="input-group input-group-lg form-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text rounded-0"><i class="far fa-envelope fa-lg fa-fw"></i></span>
                  </div>
                  <input type="email" id="email" name="email" class="form-control rounded-0" placeholder="E-Mail" required />
                </div>
                <div class="input-group input-group-lg form-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text rounded-0"><i class="fas fa-key fa-lg fa-fw"></i></span>
                  </div>
                  <input type="password" id="password" name="password" class="form-control rounded-0" minlength="5" placeholder="Password" required autocomplete="off" />
                </div>
                <div class="form-group clearfix">
                  <div class="custom-control custom-checkbox float-left">
                    <input type="checkbox" class="custom-control-input" id="customCheck" name="rem" />
                    <label class="custom-control-label" for="customCheck">Remember me</label>
                  </div>
                  <div class="forgot float-right">
                    <a href="#" id="forgot-link">Forgot Password?</a>
                  </div>
                </div>
                <div class="form-group">
                  <input type="submit" id="login-btn" value="Sign In" class="btn btn-primary btn-lg btn-block myBtn" name="submit" / >
                </div>
              </form>
            </form>
            </div>
            <div class="col-lg-5 d-flex flex-column justify-content-center ">
              <h1 class="text-center font-weight-bold text-white">Hello Friends!</h1>
              <hr class="my-3 bg-light myHr" />
              <p class="text-center font-weight-bolder text-light lead">Enter your personal details and start your journey with us!</p>
              <button class="btn btn-outline-light btn-lg align-self-center font-weight-bolder mt-4 myLinkBtn" id="register-link">Sign Up</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Login Form End -->
      <!-- Registration Form Start -->
      <form method="post">
      <div class="row justify-content-center wrapper" id="register-box" style="display: none;">
        <div class="col-lg-10 my-auto myShadow">
          <div class="row">
            <div class="col-lg-5 d-flex flex-column justify-content-center">
              <h1 class="text-center font-weight-bold text-white">Welcome Back!</h1>
              <hr class="my-4 bg-light myHr" />
              <p class="text-center font-weight-bolder text-light lead">To New user
              please sign-in</p>
              <button class="btn btn-outline-light btn-lg font-weight-bolder mt-4 align-self-center myLinkBtn" id="login-link">Sign In</button>
            </div>
            <div class="col-lg-7 bg-black p-4">
              <h1 class="text-center font-weight-bold text-primary">Create Account</h1>
              <hr class="my-3" />
              <form action="#" method="post" class="px-3" id="register-form">
                <div class="input-group input-group-lg form-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text rounded-0"><i class="far fa-user fa-lg fa-fw"></i></span>
                  </div>
                  <input type="text" id="name" name="name" class="form-control rounded-0" placeholder="Full Name" required />
                </div>
                <div class="input-group input-group-lg form-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text rounded-0"><i class="far fa-envelope fa-lg fa-fw"></i></span>
                  </div>
                  <input type="email" id="remail" name="email" class="form-control rounded-0" placeholder="E-Mail" required />
                </div>
                <div class="input-group input-group-lg form-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text rounded-0"><i class="fas fa-key fa-lg fa-fw"></i></span>
                  </div>
                  <input type="password" id="rpassword" name="password" class="form-control rounded-0" minlength="5" placeholder="Password" required />
                </div>
                <div class="input-group input-group-lg form-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text rounded-0"><i class="fas fa-key fa-lg fa-fw"></i></span>
                  </div>
                  <input type="password" id="cpassword" name="cpassword" class="form-control rounded-0" minlength="5" placeholder="Confirm Password" required />
                </div>
                <div class="form-group">
                  <div id="passError" class="text-danger font-weight-bolder"></div>
                </div>
                <div class="form-group">
                  <input type="submit" id="register-btn" value="Sign Up" class="btn btn-primary btn-lg btn-block myBtn" name="submit1" />
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </form>
      <!-- Registration Form End -->
      <!-- Forgot Password Form Start -->
      <div class="row justify-content-center wrapper" id="forgot-box" style="display: none;">
        <div class="col-lg-10 my-auto myShadow">
          <div class="row">
            <div class="col-lg-7 bg-white p-4">
              <h1 class="text-center font-weight-bold text-primary">Forgot Your Password?</h1>
              <hr class="my-3" />
              <p class="lead text-center text-secondary">To reset your password, enter the registered e-mail adddress and we will send you password reset instructions on your e-mail!</p>
              <form action="#" method="post" class="px-3" id="forgot-form">
                <div id="forgotAlert"></div>
                <div class="input-group input-group-lg form-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text rounded-0"><i class="far fa-envelope fa-lg"></i></span>
                  </div>
                  <input type="email" id="femail" name="email" class="form-control rounded-0" placeholder="E-Mail" required />
                </div>
                <div class="form-group">
                  <input type="submit" id="forgot-btn" value="Reset Password" class="btn btn-primary btn-lg btn-block myBtn" name="submit" />
                </div>
              </form>
            </div>
            <div class="col-lg-5 d-flex flex-column justify-content-center myColor p-4">
              <h1 class="text-center font-weight-bold text-white">Reset Password!</h1>
              <hr class="my-4 bg-light myHr" />
              <button class="btn btn-outline-light btn-lg font-weight-bolder myLinkBtn align-self-center" id="back-link">Back</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Forgot Password Form End -->
    </div>
    <!-- jQuery CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/script.js"></script>
    <script type="text/javascript">
      
      $(function () {
  $("#register-link").click(function () {
    $("#login-box").hide();
    $("#register-box").show();
  });
  $("#login-link").click(function () {
    $("#login-box").show();
    $("#register-box").hide();
  });
  $("#forgot-link").click(function () {
    $("#login-box").hide();
    $("#forgot-box").show();
  });
  $("#back-link").click(function () {
    $("#login-box").show();
    $("#forgot-box").hide();
  });
});
    </script>
    </body>
</html>