<?php
include "connection.inc.php";
?>
<?php
  session_start();
  if(!isset($_SESSION['is_login'])){
   if(isset($_POST['login'])){
    $userEmail = mysqli_real_escape_string($conn,$_POST['email']);
    $userPass = mysqli_real_escape_string($conn,$_POST['password']);
    $hashpass = md5(md5($userPass));

    $sql = "SELECT `username` FROM `registration` WHERE email = '$userEmail' and password = '$hashpass'";
    $result = mysqli_query($conn, $sql);
    if ($result){
      if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['is_login'] = true;
        $_SESSION['username'] = $row["username"];
        header("Location: index.php?login=sucessful");
      }
      else{
        $messages = '<div class="p-3 mb-2 bg-warning text-dark">Your email or password is incorrect</div>';
      }
    }
   }
  }
  else{
    header("Location: temp.php?userstilllogin");
  }
?>

<html lang="en" dir="ltr">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
    <!-- Navbar -->
    <?php
require 'components/navbar.php';
?>
<!-- End Navbar -->
  <div class="jumbotron" style="width:60%; margin-left: 20%; margin-top: 2%;">
      <h4 class="display-5">Login</h4>
      <hr class="my-4">
      <?php if(isset($messages)) echo $messages; ?>
      <form action="" method="POST" >
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
          <button name="login" id="login" type="submit" class="btn btn-primary">Submit</button>
        </form>
        <a href="register.php">No account? Register Now.</a>
  </div>
  <?php
require 'components/footer.php';
?>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
