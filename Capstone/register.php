<?php 

  session_start();

  if (array_key_exists('fname', $_POST) || array_key_exists('lname', $_POST) || array_key_exists('email', $_POST) || array_key_exists('pass', $_POST) || array_key_exists('dob', $_POST) || array_key_exists('phone', $_POST) || array_key_exists('gender', $_POST)) {

    require 'db2.php';

    $fname=mysqli_real_escape_string($link, $_POST['fname']);
    $lname=mysqli_real_escape_string($link, $_POST['lname']);
    $email=mysqli_real_escape_string($link, $_POST['email']);
    $pass=mysqli_real_escape_string($link, $_POST['pass']);
    $dob=mysqli_real_escape_string($link, $_POST['dob']);
    $phone=mysqli_real_escape_string($link, $_POST['phone']);
    $gender=mysqli_real_escape_string($link, $_POST['gender']);

    if (empty($fname) || empty($lname) || empty($email) || empty($pass) || empty($dob) || empty($phone) || empty($gender)) {
      echo "You have some data missing. Please input again.";
    } else {
      $query="SELECT * FROM `user` WHERE email = '$email'";

      if ($result = mysqli_query($link,$query))

      if(mysqli_num_rows($result) > 0) {
        echo "Please try again";
      } 
    else {

      $query ="INSERT INTO `user` (`fname`, `lname`, `email`, `pass`, `dob`, `phone`, `gender`) VALUES ('$fname','$lname','$email','$pass','$dob','$phone','$gender')";

        if(mysqli_query($link,$query)) {
          $_SESSION['email'] = $email;

          header("Location: session.php");
        } else {
            echo "Error";
        }
      }
    }
  }

?>

<!DOCTYPE html>
<html lang="eng">

<head>
  <meta charset="utf-8">
  <title>Eye Care Doctors of Optometry</title>
  <meta name="author" content="Ian Higgins">
  <meta name="description" content="intoeyes.com redesign">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="opto.css">
  <link rel="icon" type="image/x-icon" href="CREATIVE_EYE_CENTER.png" />
</head>

<body>
  <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php"><img src="CREATIVE_EYE_CENTER.png" alt="Home"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="aboutUs.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="services.php">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="insurance.php">Insurance</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="doctors.php">Our Doctors</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
      </ul>
      <ul class="nav navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login <i class="fas fa-user"></i></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="register.php">Register <i class="fas fa-user-plus"></i></a>
        </li>
      </ul>
    </div>
  </nav>
  <header>
    <h1 class="display-4 p-5">Register</h1>
    <hr>
  </header>
  <main>
    <form class="container" action="" method="post">
      <div class="form-row">
        <div class="col pb-3">
          <label for="fname">First Name</label>
          <input name="fname" type="text" class="form-control" placeholder="First name" required>
        </div>
        <div class="col">
          <label for="lname">Last Name</label>
          <input name="lname" type="text" class="form-control" placeholder="Last name" required>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">Email</label>
          <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Email" required>
        </div>
        <div class="form-group col-md-6">
          <label for="inputEmail4">Phone Number</label>
          <input type="tel" class="form-control" name="phone" id="inputEmail4" placeholder="1234567890" required>
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Password</label>
          <input type="password" class="form-control" name="pass" id="inputPassword4" placeholder="Password" required>
        </div>
      </div>
      <div class="form-group">
        <label for="inputAddress">Date of Birth</label>
        <input type="date" class="form-control" name="dob" id="inputAddress" placeholder="MM/DD/YYYY" required>
      </div>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="inputState">Sex</label>
          <select name="gender" id="inputState" class="form-control" required>
            <option selected>Choose...</option>
            <option>Male</option>
            <option>Female</option>
            <option>Other</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="gridCheck">
          <label class="form-check-label" for="gridCheck">
            I agree to the Terms & Conditions stated in the Private Policy
          </label>
        </div>
      </div>
      <button type="submit" name="submit" class="btn btn-info">Sign in</button>
    </form>
  </main>
  <footer class="p-5">
    Copyright &copy; Eye Care Doctors of Optometry <?php echo date('Y'); ?> | <a href="private.php">Private Policy</a>
  </footer>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
  <script src="https://kit.fontawesome.com/cf392344aa.js" crossorigin="anonymous"></script>
</body>

</html>