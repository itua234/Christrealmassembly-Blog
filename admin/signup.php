<?php 
    session_start();
    include 'functions.php';
    $email = "";
    $pass = "";
    $errors= array();
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $email = @mysqli_real_escape_string($conn,$email);
        $pass = @mysqli_real_escape_string($conn,$pass);
        //ensure that the form is correctly filled ...
        function test_input($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        if(empty($email)){
            $errors['email'] = "This field is required";
        }else{
            $email = test_input($email);
        }
        switch(true){
            case(!empty($pass)):
                if(strlen($pass) >= '8'){
                    $pass = test_input($pass);
                    if(preg_match("/^[a-zA-Z]*$/", $pass)){
                        $errors['pass'] = "Password Must Contain At Least One Number";
                    }
                    if(!preg_match("#[A-Z]+#", $pass)){
                        $errors['pass'] = "Password Must Contain At Least One Capital Letter";
                    }
                    if(!preg_match("#[a-z]+#", $pass)){
                        $errors['pass'] = "Password Must Contain At Least One Small Letter";
                    }
                }else{
                    $errors['pass'] = "Password Must Contain At Least 8 Characters!";
                }
            break;
            default:
                $errors['pass'] = "This field is required";
        }
        $password = password_encryption($pass);
        if(count($errors) == 0){
            $sql = "SELECT * FROM admin WHERE email='$email'";
            $query = @mysqli_query($conn,$sql);
            $num = @mysqli_num_rows($query);
            if($num > 0){
                $errors['email'] = "user already present";
            }else{
                $query = "INSERT INTO admin (user_id, email, password) VALUES (NULL,'$email','$password')";
                $result = @mysqli_query($conn,$query);
                if($result){
                    $query = "SELECT * FROM admin WHERE email = '$email'";
                    $results = @mysqli_query($conn,$query);
                    if($row = @mysqli_fetch_assoc($results)){
                        $_SESSION['id'] = $row['user_id'];
                        $_SESSION['agent'] = md5($_SERVER['HTTP_USER_AGENT']);
                        header("Location: index.php");
                    }
                }else{
                    echo "somethings wrong";
                }
            }
        }
    }
    
?>
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
  
  <title>Admin Sign Up</title>
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
    <section class="container-fluid d-flex fixed align-items-center form-container">
        <div class="form-box" style="">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <h3 class="text-center" style="font-weight:bolder;">Sign Up</h3>
                <p class="error text-center"><?php if(isset($errors['error'])){echo $errors['error']; } ?></p>
                <div class="d-flex flex-column">
                    <input type="email" placeholder="Email" name="email" class="input-100" value="<?php if(isset($email)){echo $email; } ?>">
                    <span class="error"><?php if(isset($errors['email'])){echo $errors['email']; } ?></span>
                </div>
                <div class="d-flex flex-column label-mar">
                    <div class="d-flex">
                        <input type="password" placeholder="Password" name="password" class="input-100 input-pass" id="toggle">
                        <span class="input-span d-flex align-items-center justify-content-center" onclick="togglePassword()"><i class="lni lni-eye"></i></span>
                    </div>
                    <span class="error"><?php if(isset($errors['pass'])){echo $errors['pass']; } ?></span>
                </div>
                <div class="d-flex justify-content-end" style="margin-top:30px;">
                    <button type="submit" name="submit" class="sign-btn">Sign Up</button>
                </div>
            </form>
        </div>
    </section>
   
    <script src="js/jquery-3.4.1.min.js"></script>
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
