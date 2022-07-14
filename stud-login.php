<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/dde87df238.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <style>
        body {
            background-color: aquamarine;
        }
    </style>

    <title>Rainbow High University</title>
</head>

<body>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <script src="js/bootstrap.bundle.min.js"></script>



    <!-- Navbar  -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="images/Asset 3.png" alt="logo" height="auto" width="25%">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="mx-auto"></div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active text-dark hover-green" href="#">Home</a>
                    </li>
                    <!-- <li class="nav-item">
                            <a class="nav-link text-dark hover-green" href="#">Departments</a>
                        </li> -->
                    <li class="nav-item dropdown">
                        <a class="nav-link text-dark hover-green dropdown-toggle" href="new.html" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Departments
                        </a>
                        <ul class="dropdown-menu bg-transparent" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item hover-green" href="#">Engineering</a></li>
                            <li><a class="dropdown-item hover-green" href="#">Computing</a></li>
                            <li><a class="dropdown-item hover-green" href="#">Biology</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark hover-green" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark hover-red" href="apply_page.php">Login</a>
                    </li>
                    <!-- <li class="nav-item">
                            <a class="nav-link text-white" href="#">Contact</a>
                        </li> -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- login-form -->
    <div class="container w-100 vh-100 d-flex p-5 justify-content-start align-items-center">
        <div class="row m-5 bg-white d-flex justify-content-center rounded shadow">
            <div class="p-5 col-md-6 d-flex align-items-center justify-content-center">
                <img class="center" src="images/graduated.png" alt="" width="100%" height="auto">
            </div>
            <div class="p-2 col-md-6 d-flex align-items-center justify-content-center">
                <form class="form" action="student.php" method="POST">
                    <div class="form-group my-3">
                        <label class="my-2 bold-text" for="email">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="someone@example.com" autofocus required>
                    </div>
                    <div class="form-group my-3">
                        <label class="my-2 bold-text" for="pwd">Password</label>
                        <input type="password" name="pwd" class="form-control" placeholder="***************" required>
                    </div>
                    <div class="form-group d-flex justify-content-center ">
                        <input type="submit" value="Submit" name="submit" class="btn btn-outline-success mx-3 px-3 shadow">
                        <input type="reset" value="Reset" name="reset" class="btn btn-outline-danger mx-3 px-4 shadow">
                    </div>
                </form>
            </div>
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