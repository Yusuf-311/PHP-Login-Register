<?php
include("session.php");
include("config.php");
$id = $_GET['id'];
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Register</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body>

  <body class="bg-gradient-success">

    <div class="container">

      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">

            <div class="col">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Update User</h1>
                </div>
                <form class="user" action="update.php" method="POST">
                  <div class="container">
                    <?php
                    $result = mysqli_query($mysqli, "SELECT * FROM users WHERE username ='$id'");
                    while ($row = mysqli_fetch_array($result)) {
                      echo " <div class='form-group'><input type='hidden' name='id' value='{$row['username']}' required></div>";
                      echo " <div class='form-group'><input type='text' class='form-control form-control-user' placeholder='First name' name='firstname' value='{$row['firstname']}' required></div>";
                      echo "<div class='form-group'><input type='text' class='form-control form-control-user' placeholder='Middle name' name='middlename' value='{$row['middlename']}' required></div>";
                      echo "<div class='form-group'><input type='text' class='form-control form-control-user' placeholder='Last name' name='lastname' value='{$row['lastname']}' required></div>";
                      echo "<div class='form-group'><label><b>Birthday</b></div>";
                      echo "<div class='form-group'><input type='date' class='form-control form-control-user' name='birthdate' value='{$row['birthdate']}'required></div>";
                      echo "</label>";
                      echo "<div class='form-group'><input type='text' class='form-control form-control-user' placeholder='Username' name='username' value='{$row['username']}' required></div>";
                      echo "<div class='form-group'><input type='password' class='form-control form-control-user' placeholder='New Password' name='password' value='{$row['password']}' required></div>";
                      echo "<div class='form-group'><div class='clearfix'>";
                      echo "<button type='submit' class=' btn btn-success btn-user btn-block'>Update</button>";
                      echo "</div>";
                    } ?>
                  </div>
                </form>

                <hr>

              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

  </body>