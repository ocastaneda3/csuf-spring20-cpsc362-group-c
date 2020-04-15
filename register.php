<!-- <?php
include_once 'connection.inc.php';
session_start();
?>
<?php
if(!isset($_SESSION['is_login'])){
if ((isset($_POST['submit']))){
  $email = $_POST['email'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $address1 = $_POST['address1'];
  $address2 = $_POST['address2'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $zip = $_POST['zip'];
  $check1 = "SELECT * FROM `registration` WHERE email='$email' ";
  $check2 = "SELECT * FROM `registration` WHERE username='$username' ";
  $result1 = mysqli_query($conn, $check1);
  $result2 = mysqli_query($conn, $check2);
  if(mysqli_num_rows($result1) > 0){
    $messages = '<div class="p-3 mb-2 bg-warning text-dark">Your email already been used. Please select a different email</div>';
  }
  else if (mysqli_num_rows($result2) > 0) {
    $messages = '<div class="p-3 mb-2 bg-warning text-dark">Your username is already been used. Please select a different username</div>';
  }
  else{
    if (!empty($email) || !empty($password) || !empty($username) || !empty($address1) || !empty($city) || !empty($state) || !empty($zip)) {
        $hashpass = md5(md5($password));
        $sql = "INSERT INTO registration (email, password, username, address1, address2, city, state, zip)
            VALUES ('$email', '$hashpass', '$username', '$address1', '$address2', '$city', '$state', '$zip')";
        $result = mysqli_query($conn, $sql);
        header("Location: index.php?Signup=sucessfully");
    }
  }
}
}
else{
  header("Location: index.php?userstilllogin");
}
?> -->

<html lang="en" dir="ltr">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
      <!-- Navbar -->
      <?php
require 'components/navbar.php';
?>
<!-- End Navbar -->
  <div class="jumbotron" style="width:60%; margin-left: 20%; margin-top: 2%;">
      <form action="" method="POST">
          <?php if(isset($messages)) echo $messages; ?>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Email</label>
              <input name="email" type="email" class="form-control" id="inputEmail4" placeholder="Email" required \>
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Password</label>
              <input name="password" type="password" class="form-control" id="inputPassword4" placeholder="Password" required \>
            </div>
          </div>
          <div class="form-group">
            <label for="inputAddress">Username</label>
            <input name="username" type="text" class="form-control" id="inputname" placeholder="Gamer" required \>
          </div>
          <div class="form-group">
            <label for="inputAddress">Address</label>
            <input name="address1" type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" required \>
          </div>
          <div class="form-group">
            <label for="inputAddress2">Address 2</label>
            <input name="address2" type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputCity">City</label>
              <input name="city" type="text" class="form-control" id="inputCity" required \>
            </div>
            <div class="form-group col-md-4">
              <label for="inputState">State</label>
              <input name="state" type="text" class="form-control" id="inputCity" required \>
            </div>
            <div class="form-group col-md-2">
              <label for="inputZip">Zip</label>
              <input name="zip" type="text" class="form-control" id="inputZip" required \>
            </div>
          </div>
          <button name="submit" type="submit" class="btn btn-primary">Sign Up</button>
        </form>
  </div>
  <?php
require 'components/footer.php';
?>
</body>
</html>
