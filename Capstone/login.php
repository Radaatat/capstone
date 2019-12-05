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
          <li class="nav-item active">
            <a class="nav-link" href="login.php">Login <i class="fas fa-user"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="register.php">Register <i class="fas fa-user-plus"></i></a>
          </li>
        </ul>
      </div>
    </nav>
    <header>
      <h1 class="display-4 p-5">Login</h1>
      <hr>
    </header>
    <main>
      <div class="container">
        <form action="account.php" method="post">
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
              placeholder="Enter email" required>
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
              else.</small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1"
              placeholder="Password" required>
          </div>
          <button type="submit" name="submit" class="btn btn-info">Submit</button>
        </form>
        <p class="center">Don't have an account?
          <a href="register.php" class="center">Register here!</a></p>
      </div>
    </main>
    <footer class="p-5">
      Copyright &copy; Eye Care Doctors of Optometry 2013 | <a href="private.php">Private Policy</a>
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