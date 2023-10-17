<?php
## require connection file
require_once 'conn.php';
## require Google config file
require_once 'config.php';

## Sign up action
if (isset($_POST["username"]) && !empty($_POST["email"])) {
   # code...
 ## (@) included to hide errors from this variable
 
 $password = password_hash($password, PASSWORD_DEFAULT); // hash password before saving to database
 
 $email = mysqli_real_escape_string($conn, $_POST["email"]);
 
 $query = "SELECT * FROM usersdata WHERE email_id = '$email'";
 $result = mysqli_query($conn,$query);
    # code...
    if (mysqli_num_rows($result) > 0) {
     ?>
     <script>
       alert("This email has already been used")
     </script>
     <?php
     } else { 
      $username = mysqli_real_escape_string($conn, $_POST["username"]);
      $email = mysqli_real_escape_string($conn, $_POST["email"]);
      $password =  mysqli_real_escape_string($conn, $_POST["password"]);
      $notify = mysqli_real_escape_string($conn, $_POST["notify"]);

      $sql = "INSERT INTO usersdata (username,email_id,password,notify)
      VALUES('$username','$email','$password','$notify')";  
      if ($conn->query($sql)==="false") {
         # code...
         echo("ERROR CREATING ACCOUNT:" .$conn->connect_error);
      }else{
         header("location: ./Home.php");
      }   
     }
   }
?>
 
 
<?php
if(isset($_SESSION['userData'])){
	header('location: Home.php');
}
$loginURL="";
$authUrl = $googleClient->createAuthUrl();
$loginURL = filter_var($authUrl, FILTER_SANITIZE_URL);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GOO | sign up</title>
    <meta name="keywords" content="Goo,Travel,Journey,Book ride">
    <meta name="description" content="web-app where users can book rides ">
    <meta name="author" content="Goo Travels">

    <!-- Google Fonts Pre Connect -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="./styles/sign-in.css">

    <!-- Link favIcon  -->
    <link rel="shortcut icon" href="./images/logo.png" type="image/x-icon">

    <!-- Link for Recaptcha -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body> 
 
   <header class="header">
      <a href="#" class="logo"><img src="./images/logo.png" alt="logo"></a>
   </header>
  
    <section class="section-page"> 
    <div class="form-section">
      <h2>Create A New Goo Account</h2><br>
      <form action="./index.php" method="POST" id="sign-in" onsubmit='return validate()'>
         <fieldset>
            <input type="text" name="username" id="name" required="" placeholder="Username...">
         </fieldset>
         <fieldset>
            <input type="email" name="email" id="email" required="" placeholder="Email...">
         </fieldset>
         <fieldset class="password1">
            <input type="password" name="password" id="password1" required="" placeholder="Password...">
            <h5 class="show1">SHOW</h5>
         </fieldset>
        <section>
         <span class="password">⚠ password should contain special characters e.g \,#, e.t.c</span><br/>
         <span class="password">⚠ password must contain a minimum of 8 characters</span><br/>
         <span class="password">⚠ password must not contain space</span><br/>
         <span class="password">⚠ password should contain uppercase and lowercase letters</span>
        </section>
         <fieldset>
            <input type="password" id="password2" required="" placeholder="Comfirm password...">
            <h5 class="show2">SHOW</h5>
         </fieldset>
         <div class="g-recaptcha" data-sitekey="6LfcGzMoAAAAAJtelblQwh9y8JNoYDD6em_6N542"></div>
         <fieldset class="check_box">
            <input type="checkbox" id="checked" required="">
            <span>I agree to the <a href="#">Terms of service</a> and <a href="#">Privacy policy</a></span>
         </fieldset>
         <fieldset class="check_box">
            <input type="checkbox" name="notify" id="check" value="notify">
            <span>Send me notifications via my mail</span>
         </fieldset>
         <span class="sign-in">Already have an account? <a href="Sign-in.php">Login</a></span><br>
         <fieldset>
            <button type="submit" id="submit_btn">sign up</button>
         </fieldset>
         <br/>
         <b>- or -</b>
         <br/><br/>
         <a href="<?= htmlspecialchars( $loginURL ); ?>">
            <img src="images/login-google.png" class="google_button" alt="Login With Google">
         </a>
      </form>
    </div><br/>
    
    <footer>
      <!-- <P> COPYRIGHT &COPY; KRYPTIP.COM,<span> ALL RIGHTS RESEVRED</span></P> -->
    </footer>
   </section> 
  
   <script src="./scripts/password.js"></script>
   <script src="./scripts/scroll.js"></script>
   <script typ="text/javascript">
      document.querySelector("#submit_btn").onclick = () =>{
      const response = grecaptcha.getResponse();

      if (response.length == 0) {
         alert("please verify you are not a robot");
         return false;
      }
   }
</script>
</body>
</html>