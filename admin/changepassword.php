<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="keywords" content="a,b,c,d" />
  <meta name="desciption" content="" />
  <meta name="author" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
  
  <meta property="fb:app_id" content="" />
  <meta property="0g:url" content="" />
  <meta property="og:type" content="" />
  <meta property="og:title" content="" />
  <meta property="og:image" content="" />
  <meta property="og:description" content="" />
  <meta property="og:site_name" content="" />
  <meta property="og:locale" content="" />
  <meta property="article_author" content="" />
  
  <meta name="twitter:card" content="" />
  <meta name="twitter:site" content="" />
  <meta name="twitter:creator" content="" />
  <meta name="twitter:url" content="" />
  <meta name="twitter:title" content="" />
  <meta name="twitter:description" content="" />
  <meta name="twitter:image" content="" />
  
  <link href="" ref="publisher" />
  <meta itemprop="name" content="" />
  <meta itemprop="description" content="" />
  <meta itemprop="image" content="" />
  
  <meta name="theme-color" content="" />
  <meta name="apple-mobile-web-app-status-bar-style" content="" />
  
  <title>Create new password</title>
  <link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">
  <link rel="stylesheet" href="css/base.css" type="text/css" media="all">
</head>
<style>
    .error{
        color:red;
        font-size:14px;
    }
</style>
<body>
    <?php 
        include 'functions.php';
        if((isset($_GET['token'])) && isset($_GET['email'])){
            $token = $_GET['token'];
            $email = $_GET['email'];
            $curDate = date("Y-m-d H:i:s");
            $query = "SELECT * FROM passwordreset WHERE email='$email' and token='$token' ";
            $result = @mysqli_query($conn,$query);
            $row = @mysqli_num_rows($result);
            if($row == 0){
                echo "u are not certified";
            }else{
                $row = @mysqli_fetch_assoc($result);
                $expDate = $row['exp_time'];
                if($expDate >= $curDate){
                    ?>
                    <section class="container-fluid d-flex fixed align-items-center form-container">
                        <div class="form-box" style="">
                            <form method="post" action="" class="password-reset">
                                <h3 class="text-center" style="font-weight:bolder;">Password Reset</h3>
                                <p class="text-center">Enter your new passord.</p>
                                <p class="error text-center"></p>
                                <div class="d-flex flex-column label-mar">
                                    <div class="d-flex">
                                        <input type="password" placeholder="New Password" name="password" class="input-100 input-pass" id="toggle">
                                        <span class="input-span d-flex align-items-center justify-content-center" onclick="togglePassword()"><i class="lni lni-eye"></i></span>
                                    </div>
                                    <span class="error"></span>
                                </div>
                                <div class="d-flex flex-column label-mar">
                                    <div class="d-flex">
                                        <input type="password" placeholder="Confirm New Password" name="confirm-password" class="input-100 input-pass" id="toggle">
                                        <span class="input-span d-flex align-items-center justify-content-center"></span>
                                    </div>
                                    <span class="error"></span>
                                </div>
                                <input type="hidden" name="email" value="<?php echo $email; ?>">
                                <div class="d-flex justify-content-end" style="margin-top:30px;">
                                    <button type="submit" name="submit" class="sign-btn">Reset Password</button>
                                </div>
                            </form>
                        </div>
                    </section>
                    <?php
                }else{

                }
            }
        }
    ?>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/passwordreset.js"></script>
    <script src="https://kit.fontawesome.com/4211943ec2.js" crossorigin="anonymous"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.bundle.min.js.map"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.min.js.map"></script>
    <script>
        function togglePassword(){
            var toggle = document.getElementById('toggle');
            switch(true){
                case(toggle.type === "password"):
                    toggle.type = "text";
                break;
                default:
                    toggle.type = "password";
            }
        }
    </script>
</body>
</html>
