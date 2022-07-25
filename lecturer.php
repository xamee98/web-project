<?php
session_start();

include_once 'includes/handler-funcs.php';

if (!$_SESSION['email']) {
    header('location: prof-login.php?error=notloggedin');
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
                        <a class="nav-link active text-dark hover-red" href="includes/logout-handler.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <?php echo "<h2 class='display-6'>Welcome " . $_SESSION['name'] . "</h2>"; ?>
        <div class="row m-5 d-flex justify-content-start">
            <div class="col-md-6">
                <p class="leading">View / Change Student Details</p>
                <div class="dropdown-divider"></div>
            </div>
        </div>
        <div class="row m-5 d-flex justify-content-start">
            <form action="" method="POST">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="leading my-3" for="email">Enter Student Email</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                        <input class="btn btn-outline-primary my-3" name="srch" type="submit" value="Search">
                    </div>
                </div>
            </form>
        </div>

        <?php
        if (isset($_POST['srch'])) {
            include_once 'includes/dbconn-handler.php';

            $sEmail = $_POST['email'];

            $sql = 'SELECT * FROM student_subject WHERE email=?;';
            $stmt = mysqli_stmt_init($conn);

            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header('location: login.php?error=notloggedin');
                exit();
            }

            mysqli_stmt_bind_param($stmt, "s", $sEmail);
            mysqli_stmt_execute($stmt);

            $resultData = mysqli_stmt_get_result($stmt);

            if ($row = mysqli_fetch_assoc($resultData)) {
            }
        ?>
            <div class="container d-flex align-items-center justify-content-center">
                <div class="row my-5 mx-3">
                    <table class="table table-hover text-align-center">
                        <tr>
                            <th class="px-5 py-3" scope="row">#</th>
                            <th class="px-5 py-3" scope="row">Current Value</th>
                            <th class="px-5 py-3" scope="row">New Value</th>
                        </tr>
                        <tr>
                            <th class="px-5 py-3" scope="row">Name</th>
                            <td class="px-5 py-3" scope="row"><?php print_r($row['name']) ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th class="px-5 py-3" scope="row">Email</th>
                            <td class="px-5 py-3"><?php print_r($row['email']) ?></td>
                            <td class="px-5 py-3">
                                <!-- <div class="row">
                                    <form action="includes/subupdate-handler.php" method="POST">
                                        <div class="col"></div>
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="n-email">
                                        </div>
                                        <div class="form-group my-2">
                                            <input type="submit" value="Update">
                                        </div>
                                    </form>
                                </div> -->
                            </td>
                        </tr>
                        <tr>
                            <th class="px-5 py-3" scope="row">Stream</th>
                            <td class="px-5 py-3"><?php print_r($row['stream']) ?></td>
                            <td class="px-5 py-3">
                                <div class="row">
                                    <form action="includes/subupdate-handler.php" method="POST">
                                        <div class="col"></div>
                                        <div class="form-group">
                                            <select name="n-stream" class="form-control">
                                                <option selected>Engineering</option>
                                                <option>Biology</option>
                                                <option>Computer Science</option>
                                            </select>
                                        </div>
                                        <div class="form-group my-2">
                                            <input class="btn btn-outline-primary" type="submit" value="Update">
                                        </div>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="px-5 py-3" scope="row">Subject - 1</th>
                            <td class="px-5 py-3"><?php print_r($row['sub_1']) ?></td>
                            <td class="px-5 py-3">
                                <div class="row">
                                    <form action="includes/subupdate-handler.php" method="POST">
                                        <div class="col"></div>
                                        <div class="form-group">
                                            <select name="n-sub1" class="form-control">
                                                <option>Advanced Mathematics</option>
                                                <option>Electronics</option>
                                                <option>Architecture</option>
                                                <option>Microbiology</option>
                                                <option>Cell Biology</option>
                                                <option>Anatomy</option>
                                                <option>Web Development</option>
                                                <option>Software Engineering</option>
                                                <option>Information Security</option>
                                            </select>
                                        </div>
                                        <div class="form-group my-2">
                                            <input class="btn btn-outline-primary" type="submit" value="Update">
                                        </div>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="px-5 py-3" scope="row">Subject - 2</th>
                            <td class="px-5 py-3"><?php print_r($row['sub_2']) ?></td>
                            <td class="px-5 py-3">
                                <div class="row">
                                    <form action="includes/subupdate-handler.php" method="POST">
                                        <div class="col"></div>
                                        <div class="form-group">
                                            <select name="n-sub2" class="form-control">
                                                <option>Advanced Mathematics</option>
                                                <option>Electronics</option>
                                                <option>Architecture</option>
                                                <option>Microbiology</option>
                                                <option>Cell Biology</option>
                                                <option>Anatomy</option>
                                                <option>Web Development</option>
                                                <option>Software Engineering</option>
                                                <option>Information Security</option>
                                            </select>
                                        </div>
                                        <div class="form-group my-2">
                                            <input class="btn btn-outline-primary" type="submit" value="Update">
                                        </div>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="px-5 py-3" scope="row">Subject - 3</th>
                            <td class="px-5 py-3"><?php print_r($row['sub_3']) ?></td>
                            <td class="px-5 py-3">
                                <div class="row">
                                    <form action="includes/subupdate-handler.php" method="POST">
                                        <div class="col"></div>
                                        <div class="form-group">
                                            <select name="n-sub3" class="form-control">
                                                <option>Advanced Mathematics</option>
                                                <option>Electronics</option>
                                                <option>Architecture</option>
                                                <option>Microbiology</option>
                                                <option>Cell Biology</option>
                                                <option>Anatomy</option>
                                                <option>Web Development</option>
                                                <option>Software Engineering</option>
                                                <option>Information Security</option>
                                            </select>
                                        </div>
                                        <div class="form-group my-2">
                                            <input class="btn btn-outline-primary" type="submit" value="Update">
                                        </div>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        <?php } ?>


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