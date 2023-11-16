<?php
  session_start();

  ## connection file
  require_once('./conn.php');
  ## Google config file
  require_once 'config.php';
  
  if(isset($_SESSION['userData'])){
    header('location: Home.php');
  }
  $loginURL="";
  $authUrl = $googleClient->createAuthUrl();
  $loginURL = filter_var($authUrl, FILTER_SANITIZE_URL);

  ## Verifies if user is found in the system
  if (isset($_POST['email'])) {

      $email  = mysqli_real_escape_string($conn, $_POST['email']);
      $password = mysqli_real_escape_string($conn, $_POST['password']); 
      
        $query  = "SELECT * FROM usersdata WHERE email_id = '$email' LIMIT 1";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) > 0){
          while ($row = mysqli_fetch_assoc($result)) {
            if (password_verify($password, $row['password'])) {
                $_SESSION['id'] = $row['id'];
                header("Location: Home.php");
            }else{
                ?>
                <script lang="javascript" type="text/javascript">
                  alert("Password provided is invalid");
                </script>
                <?php
            }    
          }
        }else{
          ?>
          <script lang="javascript" type="text/javascript">
            alert("Email provided is invalid");
          </script>
          <?php 
        } 
    }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GOO | sign in</title>
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
      <h2>Login And Start Booking</h2><br>
      <form action="./Sign-in.php" method="POST" id="sign-in" onsubmit='return validate()'>
         <fieldset>
            <input type="email" name="email" id="email" required="" placeholder="Email">
         </fieldset>
         <fieldset>
            <input type="password" name="password" id="password1" required="" placeholder="Password">
            <h5 class="show1">SHOW</h5>
          </fieldset>
          <div class="g-recaptcha" data-sitekey="6LfcGzMoAAAAAJtelblQwh9y8JNoYDD6em_6N542"></div><br/>
         <span class="sign-in">Don't have an account? <a href="Index.php">Sign up</a></span><br/>
         <br/>
         <a href="./Forgot_password/forgot.php" class="forgot">Forgot password?</a>
         <fieldset>
            <button type="submit" id="submit_btn">sign in</button>
         </fieldset>
         <br/>
         <b>- or -</b>
         <br/><br/>
         <a href="<?= htmlspecialchars( $loginURL ); ?>">
            <img src="images/login-google.png" class="google_button" alt="Login With Google">
         </a>
      </form>
    </div> <br>
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