<?php 
    session_start();
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    include 'functions.php';
    $errors = array();
    if(isset($_POST['submit'])){
        $email = @mysqli_real_escape_string($conn,$_POST['email']);
        if(empty($email)){
            $errors['email'] = "This field is required";
        } 
        if(count($errors) == 0){
            $query = "SELECT user_id FROM admin WHERE email = '$email'";
            $results = @mysqli_query($conn,$query);
            if($row = @mysqli_fetch_assoc($results)){
                $q = "SELECT * FROM passwordreset WHERE email = '$email' LIMIT 1";
                $r = @mysqli_query($conn,$q);
                if(@mysqli_num_rows($r) == 1){
                    echo "email has already been sent";
                }else{
                    $token = md5(2418*2) . $email;
                    $addkey = substr(md5(uniqid(rand(),1)),3,10);
                    $token = $token . $addkey;
                    $expformat = mktime(date("H")+1,date("i"),date("s"),date("m"),date("d"),date("Y"));
                    $expdate = date("Y-m-d H:i:s",$expformat);
                    $query = "INSERT INTO passwordreset (email,token,exp_time) VALUES ('$email','$token','$expdate')";
                    $r = @mysqli_query($conn,$query);
                    $row = @mysqli_fetch_array($r);
                    if(@mysqli_affected_rows($conn) == 1){

                        require_once 'mail/Exception.php';
                        require_once 'mail/PHPMailer.php';
                        require_once 'mail/SMTP.php';

                        $mail = new PHPMailer(true);
                        try {
                        $mail->SMTPDebug = 0;                               // Enable verbose debug output

                        $mail->isSMTP();                                      // Set mailer to use SMTP
                        $mail->Host = 'mail.qordinatesmobile.com';  // Specify main and backup SMTP servers
                        $mail->SMTPAuth = true;                               // Enable SMTP authentication
                        $mail->Username = 'admin@qordinatesmobile.com';                 // SMTP username
                        $mail->Password = 'scientia234';                           // SMTP password
                        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                        $mail->Port = 587;                                    // TCP port to connect to

                        $mail->setFrom('admin@qordinatesmobile.com', 'Reset Your Password');
                        $mail->addAddress('ituaosemeilu234@gmail.com');    // Add a recipient
                        //$mail->addAddress('ellen@example.com');               // Name is optional
                        $mail->addReplyTo('admin@qordinatesmobile.com');
                        //$mail->addCC('cc@example.com');
                        //$mail->addBCC('bcc@example.com');

                        //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
                        $mail->isHTML(true);                                  // Set email format to HTML


                        $mail->Subject = "Blog Admin";//$_POST['subject'];
                        $mail->Body    = "
                                        <div class=''>
                                            <p>
                                                Click on the link below to recover your password. If the link doesn't work, copy and paste the URL in the browser. 
                                            </p>
                                            <p><a href=\"http://192.168.43.85/blog/admin/changepassword.php?token=$token&email=$email\">change password</a></p>
                                        </div> 
                                            </br>
                                            "; //'This is the HTML message body <b>in bold!</b>';
                                        
                        //$mail->AltBody = $_POST['message'];

                        $mail->smtpConnect([
                            'ssl' => [
                                'verify_peer' => false,
                                'verify_peer_name' => false,
                                'allow_self_signed' => true
                            ]
                        ]);

                        $mail->send();
                        echo "Message has been sent";
                        // echo "<script>window.open('tables.php','_self')</script>";    
                        } 
                        catch(Exception $e){
                            echo "Message could not be sent: {$mail->ErrorInfo}";
                        }
                    }
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
  
  <title>Cartzilla | Fashion Store v.2</title>
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
                <h3 class="text-center" style="font-weight:bolder;">Password Reset</h3>
                <p class="text-center">Enter your email to recover your passord. You will receive an email with instructions.</p>
                <p class="error text-center"><?php if(isset($errors['error'])){echo $errors['error']; } ?></p>
                <div class="d-flex flex-column">
                    <input type="email" placeholder="Email" name="email" class="input-100" value="<?php if(isset($email)){echo $email; } ?>">
                    <span class="error"><?php if(isset($errors['email'])){echo $errors['email']; } ?></span>
                </div>
                <div class="d-flex justify-content-end" style="margin-top:30px;">
                    <button type="submit" name="submit" class="sign-btn">Submit</button>
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
</body>
</html>
