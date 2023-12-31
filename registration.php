<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8" />

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Registration</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />

  <style>
    body {
      background-color: #f8f9fa;
    }

    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #ffffff;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    body {
      height: 100vh;
    }

    main.form-signin {
      max-width: 400px;
      padding: 15px;
      background-color: white;
      border-radius: 10px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    }
  </style>
</head>



<body class="d-flex justify-content-center align-items-center h-100vh">

  <?php
  if (isset($_GET['loginsuccess']) && $_GET['loginsuccess'] === 'false') {
    if (isset($_GET['error'])) {
      $error = $_GET['error'];
      if ($error === 'email_exists') {
        echo "<script> alert('Email already exists. Please choose another email.');</script>";
      } elseif ($error === 'insert_failed') {
        echo "<script> alert('Registration failed. Please try again later.');</script>";

      }
    }
  }
  ?>


  <div class="container">
    <h2 class="text-center">Registration</h2>

    <form method="POST" action="./includes/_handleRegistration.php">
      <div class="form-group">
        <label for="newUsername">New Username</label>
        <input type="text" name="uname" class="form-control" id="newUsername" placeholder="Enter new username"
          required />
      </div>

      <div class="form-group">
        <label for="newPassword">New Password</label>
        <input type="password" name="pass" class="form-control" id="newPassword" placeholder="Enter new password"
          required />
      </div>

      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email" required />
      </div>

      <div class="form-group">
        <label>Gender</label>
        <div>
          <label class="radio-inline">
            <input type="radio" name="gender" value="Male" required /> Male
          </label>
          <label class="radio-inline">
            <input type="radio" name="gender" value="Female" /> Female
          </label>
        </div>
      </div>

      <button type="submit" class="btn btn-success btn-block mb-2">
        Register
      </button>
      <p class="text-center">Already have an <a href="login.php" style="text-decoration: none;">Account?</a></p>
    </form>

  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>