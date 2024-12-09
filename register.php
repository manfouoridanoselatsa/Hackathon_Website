<?
    require_once __DIR__. "Model/regist_member.php";
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.0.0/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <link rel="icon" type="image/png" href="img/HIcons.png">
    <title class="fas fa-poll-h">Hackathon</title>
    <img class="fas fa-poll-h" alt="Favicon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #ffffff, #edeef1);
            color: #fff;
            font-family: Arial, sans-serif;
        }
        .register-container {
            margin-top: 5%;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.25);
            color: #000;
        }
        .form-control:focus {
            border-color: #0d6efd;;
            box-shadow: 0 0 0 0.2rem rgba(106, 17, 203, 0.25);
        }
        .register-title {
            text-align: center;
            font-weight: bold;
            color: #0d6efd;;
        }
        .btn-custom {
            background-color: #0d6efd;;
            color: #fff;
        }
        .btn-custom:hover {
            background-color: #0d6efd;;
        }
        a{
            text-decoration: none;
        }
    </style>
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" rel="nofollow" href="index.php">
            <i class="fas fa-poll-h" style="font-size: 30px;"></i>
          </a>
          <button class="navbar-toggler" type="button" data-mdb-collapse-init data-mdb-target="#navbarExample01"
            aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
          </button>
            <ul class="navbar-nav d-flex flex-row">
              <li class="nav-item me-3 me-lg-0">
                <a class="nav-link" href="#" rel="nofollow"target="_blank">
                  <i class="fab fa-youtube"></i>
                </a>
              </li>
              <li class="nav-item me-3 me-lg-0">
                <a class="nav-link" href="#" rel="nofollow" target="_blank">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="nav-item me-3 me-lg-0">
                <a class="nav-link" href="#" rel="nofollow" target="_blank">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

</head>
<body>
    <div class="container d-flex justify-content-center" style="padding-top:45px;">
        <div class="col-md-6 register-container">
            <h2 class="register-title">Register</h2>
            <form action="Model/regist_member.php" method="POST">
                <!-- Name -->
                <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="name" name ="name"  placeholder="Enter your full name" required>
                </div>
                <!-- Email -->
                <div class="mb-3">
                    <label for="email"  class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email" name ="email" placeholder="Enter your email" required>
                </div>
                <div class="mb-3">
                    <label for="subject" class="form-label">Subjects</label>
                    <select class="form-select" id="subject" name="subject" required>
                        <option value="" disabled selected>Select Your Subject</option>
                        <option value="grees">GreeS</option>
                        <option value="ML">Machine Learning</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="institution" class="form-label">Institution</label>
                    <select class="form-select" id="institution" name ="institution" required>
                        <option value="" disabled selected>Select your Institution</option>
                        <option value="UY1">UY1</option>
                        <option value="ENSTP">ENSTP</option>
                        <option value="Douala">Université de Douala</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="gender" class="form-label">Gender</label>
                    <select class="form-select" id="gender" name="gender" required>
                        <option value="" disabled selected>Select your gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-custom w-100">Register</button>
            </form>
        </div>
    </div>
     <!--Footer-->
    <footer class="bg-light text-lg-start">

        <div class="text-center py-4 align-items-center">
        <a href="#" class="btn btn-primary m-1" role="button" data-mdb-ripple-init
            rel="nofollow" target="_blank">
            <i class="fab fa-youtube"></i>
        </a>
        <a href="#" class="btn btn-primary m-1" role="button" rel="nofollow" data-mdb-ripple-init
            target="_blank">
            <i class="fab fa-facebook-f"></i>
        </a>
        <a href="#" class="btn btn-primary m-1" role="button" rel="nofollow" data-mdb-ripple-init
            target="_blank">
            <i class="fab fa-twitter"></i>
        </a>
        <!-- <a href="#" class="btn btn-primary m-1" role="button" rel="nofollow" data-mdb-ripple-init
            target="_blank">
            <i class="fab fa-github"></i>
        </a> -->
        </div>

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2024 Copyright:
        <a class="text-dark" href="#">Yaounde 1 Student</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>


<?
    $postData = $_POST['name']; // Retrieve POST data
    print_r($postData);
?>