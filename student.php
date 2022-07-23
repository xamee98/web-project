<?php 
    session_start();

    if(!$_SESSION['email']) {
        header('location: stud-login.php?error=notloggedin');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <style>
        body {
            background-color: ghostwhite;
        }
    </style>

    <title><?php echo "Welcome " . $_SESSION['name'] . ""; ?></title>
</head>

<body>
    <?php

    ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <script src="js/bootstrap.bundle.min.js"></script>



    <!-- Navbar  -->
    <nav class="navbar  navbar-expand-lg navbar-dark p-md-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html">
                <img src="images/Asset 3.png" alt="logo" height="auto" width="25%">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="mx-auto"></div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-dark hover-green" href="stud-profile.php">Show Profile</a>
                    </li>
                    <!-- <li class="nav-item">
                            <a class="nav-link text-dark hover-green" href="#">Departments</a>
                        </li> -->
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link text-dark hover-green dropdown-toggle" href="new.html" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Departments
                        </a>
                        <ul class="dropdown-menu bg-transparent" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item hover-green" href="engineering.html">Engineering</a></li>
                            <li><a class="dropdown-item hover-green" href="computing.html">Computing</a></li>
                            <li><a class="dropdown-item hover-green" href="biology.html">Biology</a></li>
                        </ul>
                    </li> -->
                    <!-- <li class="nav-item">
                        <a class="nav-link text-dark hover-green" href="index.html#about-us">About Us</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link active text-dark hover-red" href="includes/logout-handler.php">Logout</a>
                    </li>
                    <!-- <li class="nav-item">
                            <a class="nav-link text-white" href="#">Contact</a>
                        </li> -->
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <?php echo "<h2 class='display-6'>Welcome " . $_SESSION['name'] . "</h2>"; ?>
        <div class="row m-5 d-flex justify-content-start">
            <div class="col-md-6">
                <p class="leading">Select Your Subjects</p>
                <div class="dropdown-divider"></div>
            </div>
        </div>
        <div class="row m-5 d-flex justify-content-start">
            <form action="#" method="GET">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="leading my-3" for="stream">Select Your Major</label>
                        <select name="stream" class="form-control">
                            <option selected>Engineering</option>
                            <option>Biology</option>
                            <option>Computer Science</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <?php
                        if (!isset($_GET['stream'])) {
                            echo '<input class="btn btn-outline-primary my-3" type="submit" value="Select Major">';
                        }
                        ?>
                    </div>
                </div>
            </form>
        </div>
        <div class="row m-5">
            <form action="includes/studsub-handler.php" method="POST">
                <div class="col-md-6 my-2">
                    <?php
                    if (isset($_GET['stream'])) {
                        $_SESSION['stream'] = $_GET['stream'];

                        if ($_GET['stream'] == "Engineering") {
                            
                            echo
                            '<div class="form-group">
                                    <select name="sub-1" class="form-control">
                                        <option>Advanced Mathematics</option>
                                        <option>Electronics</option>
                                        <option>Architecture</option>
                                    </select>
                                    <small class="form-text text-muted">Subject - 1</small>
                            </div>';
                        } else if ($_GET['stream'] == "Biology") {
                            echo
                            '<div class="form-group">
                                    <select name="sub-1" class="form-control">
                                        <option>Microbiology</option>
                                        <option>Cell Biology</option>
                                        <option>Anatomy</option>
                                    </select>
                                    <small class="form-text text-muted">Subject - 1</small>
                            </div>';
                        } else if ($_GET['stream'] == "Computer Science") {
                            echo
                            '<div class="form-group">
                                    <select name="sub-1" class="form-control">
                                        <option>Web Development</option>
                                        <option>Software Engineering</option>
                                        <option>Information Security</option>
                                    </select>
                                    <small class="form-text text-muted">Subject - 1</small>
                            </div>';
                        }
                    }
                    ?>
                </div>
                <div class="col-md-6 my-2">
                    <?php
                    if (isset($_GET['stream'])) {
                        if ($_GET['stream'] == "Engineering") {
                            echo
                            '<div class="form-group">
                                    <select name="sub-2" class="form-control">
                                        <option>Advanced Mathematics</option>
                                        <option>Electronics</option>
                                        <option>Architecture</option>
                                    </select>
                                    <small class="form-text text-muted">Subject - 2</small>
                            </div>';
                        } else if ($_GET['stream'] == "Biology") {
                            echo
                            '<div class="form-group">
                                    <select name="sub-2" class="form-control">
                                        <option>Microbiology</option>
                                        <option>Cell Biology</option>
                                        <option>Anatomy</option>
                                    </select>
                                    <small class="form-text text-muted">Subject - 2</small>
                            </div>';
                        } else if ($_GET['stream'] == "Computer Science") {
                            echo
                            '<div class="form-group">
                                    <select name="sub-2" class="form-control">
                                        <option>Web Development</option>
                                        <option>Software Engineering</option>
                                        <option>Information Security</option>
                                    </select>
                                    <small class="form-text text-muted">Subject - 2</small>
                            </div>';
                        }
                    }
                    ?>
                </div>
                <div class="col-md-6 my-2">
                    <?php
                    if (isset($_GET['stream'])) {
                        if ($_GET['stream'] == "Engineering") {
                            echo
                            '<div class="form-group">
                                    <select name="sub-3" class="form-control">
                                        <option>Advanced Mathematics</option>
                                        <option>Electronics</option>
                                        <option>Architecture</option>
                                    </select>
                                    <small class="form-text text-muted">Subject - 3</small>
                            </div>';
                        } else if ($_GET['stream'] == "Biology") {
                            echo
                            '<div class="form-group">
                                    <select name="sub-3" class="form-control">
                                        <option>Microbiology</option>
                                        <option>Cell Biology</option>
                                        <option>Anatomy</option>
                                    </select>
                                    <small class="form-text text-muted">Subject - 3</small>
                            </div>';
                        } else if ($_GET['stream'] == "Computer Science") {
                            echo
                            '<div class="form-group">
                                    <select name="sub-3" class="form-control">
                                        <option>Web Development</option>
                                        <option>Software Engineering</option>
                                        <option>Information Security</option>
                                    </select>
                                    <small class="form-text text-muted">Subject - 3</small>
                            </div>';
                        }
                    }
                    ?>
                </div>
                <div class="col-md-6">
                    <?php
                        if(isset($_GET['stream'])) {
                            echo '<input class="btn btn-outline-primary" type="submit" value="Submit" name="sub-reg">';
                        }
                    ?>
                </div>
            </form>
        </div>
    </div>

    <!-- script -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
        var nav = document.querySelector('nav');

        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 100) {
                nav.classList.add('navbar-hide');
            } else {
                nav.classList.remove('navbar-hide');
                navItem.classList.add();
            }
        });
    </script>
</body>

</html>