<?php
session_start();
include_once 'includes/dbconn-handler.php';

$name = $_SESSION['name'];

$sql = 'SELECT * FROM student_subject WHERE name=?;';
$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)) {
    header('location: login.php?error=notloggedin');
    exit();
}

mysqli_stmt_bind_param($stmt, "s", $name);
mysqli_stmt_execute($stmt);

$resultData = mysqli_stmt_get_result($stmt);

if ($row = mysqli_fetch_assoc($resultData)) {
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

        table th {
            width: fit-content;
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
                <span class="navbar-toggler-icon bg-dark round-border"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="mx-auto"></div>
                <ul class="navbar-nav">
                    <!-- <li class="nav-item">
                        <a class="nav-link text-dark hover-green" href="index.html">Show Profile</a>
                    </li> -->
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

    <div class="row m-3">

    </div>

    <div class="container d-flex align-items-center justify-content-center">
        <div class="row my-5 mx-3">
            <table class="table table-hover text-align-center">
                <tr>
                    <th class="px-5 py-3" scope="row">Name</th>
                    <th class="px-5 py-3" scope="row"><?php print_r($row['name']) ?></th>
                </tr>
                <tr>
                    <th class="px-5 py-3" scope="row">Email</th>
                    <td class="px-5 py-3"><?php print_r($row['email']) ?></td>
                </tr>
                <tr>
                    <th class="px-5 py-3" scope="row">Stream</th>
                    <td class="px-5 py-3"><?php print_r($row['stream']) ?></td>
                </tr>
                <tr>
                    <th class="px-5 py-3" scope="row">Subject - 1</th>
                    <td class="px-5 py-3"><?php print_r($row['sub_1']) ?></td>
                </tr>
                <tr>
                    <th class="px-5 py-3" scope="row">Subject - 2</th>
                    <td class="px-5 py-3"><?php print_r($row['sub_2']) ?></td>
                </tr>
                <tr>
                    <th class="px-5 py-3" scope="row">Subject - 3</th>
                    <td class="px-5 py-3"><?php print_r($row['sub_3']) ?></td>
                </tr>
            </table>
        </div>
    </div>
    <div class="container d-flex justify-content-center">
        <row class="my-2 mx-5 text-align-center">
            <?php
            if (isset($_GET['msg'])) {
                if ($_GET['msg'] == 'userexists') {
                    echo '<p class="leading text-danger">You have aready selected subjects!</p>';
                    echo '<p class="leading text-danger">Contact your Department Head to Change Subjects</p>';
                }
            }
            ?>
        </row>
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