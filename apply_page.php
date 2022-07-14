<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">


    <title>Apply for ABC University</title>
    <style>
        body {
            background-color: ghostwhite;
        }

        label {
            margin-bottom: 5px;
        }

        .form-control {
            margin-top: 5px;
        }

        .btn {
            margin: 10px;
        }
    </style>
</head>

<body>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- header -->
    <!-- Navbar  -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
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
                        <a class="nav-link active text-dark hover-green" href="index.html">Home</a>
                    </li>
                    <!-- <li class="nav-item">
                            <a class="nav-link text-dark hover-green" href="#">Departments</a>
                        </li> -->
                    <li class="nav-item dropdown">
                        <a class="nav-link text-dark hover-green dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                        <a class="nav-link text-dark hover-red" href="apply_page.php">Apply Now</a>
                    </li>
                    <!-- <li class="nav-item">
                            <a class="nav-link text-white" href="#">Contact</a>
                        </li> -->
                </ul>
            </div>
        </div>
    </nav>

    <!-- form -->
    <div id="form-title" class="container">
        <h2 class="display-6">Application Form</h2>
        <div class="dropdown-divider"></div>
        <form action="" method="POST">
            <section>
                <div class="row m-5">
                    <h5>Full Name</h5>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" id="fname" autofocus>
                            <small class="form-text text-muted">First Name</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" id="lname">
                            <small class="form-text text-muted">Last Name</small>
                        </div>
                    </div>
                </div>
                <div class="row m-5">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="bdate">Birthday</label>
                            <input class="form-control" type="date" name="bdate" id="bday">
                        </div>
                    </div>
                </div>
                <div class="row m-5">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input class="form-control" type="email" name="email" id="email" placeholder="someone@example.com">
                        </div>
                    </div>
                </div>
                <div class="row m-5">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="tel">Telephone</label>
                            <input class="form-control" type="tel" name="tel" id="tel" placeholder="(+94) 11 224 4567">
                        </div>
                    </div>
                </div>
                <div class="row m-5">
                    <h5>Address</h5>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" type="text" name="adr-1">
                            <small class="form-text text-muted">Line 1</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" type="text" name="adr-2">
                            <small class="form-text text-muted">Line 2</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" type="text" name="city">
                            <small class="form-text text-muted">City</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" type="text" name="state">
                            <small class="form-text text-muted">State / Province</small>
                        </div>
                    </div>
                </div>
                <div class="row m-5">
                    <div class="col">
                        <div class="form-group">
                            <input class="form-control" type="text" name="zip">
                            <small class="form-text text-muted">Postal / ZIP Code</small>
                        </div>
                    </div>
                </div>
                <div class="dropdown-divider"></div>
            </section>
            <!-- section-2 -->
            <section>
                <div class="row m-5">
                    <h4>Educational Information</h4>
                    <p class="form-text text-muted">Fill Out Information About Your School</p>
                </div>
                <div class="row m-5">
                    <div class="col-md-6">
                        <div class="form-group">
                            <h5>School Name</h5>
                            <input class="form-control" type="text" name="scl-name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <h5>GPA</h5>
                            <input class="form-control" type="text" name="gpa">
                        </div>
                    </div>
                </div>
                <div class="row m-5">
                    <div class="col-md-6">
                        <h5>Graduated</h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="grad" id="exampleRadios1" value="Yes" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="grad" id="exampleRadios2" value="No">
                            <label class="form-check-label" for="exampleRadios2">
                                No
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row m-5">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="entry">Entry Date</label>
                            <input class="form-control" type="date" name="entry">
                        </div>
                    </div>
                </div>
                <div class="row m-5">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="grad">Graduation Date</label>
                            <input class="form-control" type="date" name="grad">
                        </div>
                    </div>
                </div>
                <div class="dropdown-divider"></div>
            </section>
            <!-- section-3 -->
            <section>
                <div class="row m-5">
                    <h4>Advanced Level Information</h4>
                    <p class="form-text text-muted">Fill out information about your Advanced Level examination</p>
                </div>
                <div class="row m-5">
                    <div class="col-md-6">
                        <h5>Stream</h5>
                        <select id="sub" class="form-control">
                            <option selected>Mathematics</option>
                            <option>Biology</option>
                            <option>Technology</option>
                            <option>Commerce</option>
                            <option>Arts</option>
                        </select>
                    </div>
                </div>
                <div class="row m-5">
                    <div class="col-md-6">
                        <input class="form-control" type="text" name="sub-1">
                        <small class="form-text text-muted">Subject 1</small>
                    </div>
                    <div class="col-md-6">
                        <input class="form-control" type="text" name="res-1">
                        <small class="form-text text-muted">Result</small>
                    </div>
                </div>
                <div class="row m-5">
                    <div class="col-md-6">
                        <input class="form-control" type="text" name="sub-2">
                        <small class="form-text text-muted">Subject 2</small>
                    </div>
                    <div class="col-md-6">
                        <input class="form-control" type="text" name="res-2">
                        <small class="form-text text-muted">Result</small>
                    </div>
                </div>
                <div class="row m-5">
                    <div class="col-md-6">
                        <input class="form-control" type="text" name="sub-3">
                        <small class="form-text text-muted">Subject 3</small>
                    </div>
                    <div class="col-md-6">
                        <input class="form-control" type="text" name="res-3">
                        <small class="form-text text-muted">Result</small>
                    </div>
                </div>
                <div class="dropdown-divider"></div>
            </section>
            <!-- section-4 -->
            <section>
                <div class="row m-5">
                    <h4>Activity Information</h4>
                </div>
                <div class="row m-5">
                    <div class="col">
                        <label for="activity">Describe yourself in extracurricular activities</label>
                        <textarea class="form-control" name="activity" id="act" cols="100" rows="10"></textarea>
                    </div>
                </div>
            </section>
            <!-- section-5 -->
            <section>
                <div class="row m-5">
                    <h4>Additional Information and Comments</h4>
                </div>
                <div class="row m-5">
                    <div class="col">
                        <label for="info">Additional Information</label>
                        <textarea class="form-control" name="info" cols="100" rows="10"></textarea>
                    </div>
                </div>
                <div class="dropdown-divider"></div>
            </section>
            <!-- section-6 -->
            <section>
                <div class="row m-5">
                    <h4>Degree Selection</h4>
                    <p class="form-text text-muted">Fill out information about the degree you are selecting</p>
                </div>
                <div class="row m-5">
                    <div class="col-md-6 ">
                        <div class="form-group">
                            <h5>Degree Model</h5>
                            <select id="sub" class="form-control">
                                <option selected>BSc.</option>
                                <option>MSc.</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="form-group">
                            <h5>Select Degree</h5>
                            <select id="sub" class="form-control">
                                <option selected>Mathematics</option>
                                <option>Biology</option>
                                <option>Technology</option>
                                <option>Commerce</option>
                                <option>Arts</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="dropdown-divider"></div>
            </section>
            <!-- button-section -->
            <section>
                <div class="row m-5 d-flex justify-content-center">
                    <div class="col-md-5 d-flex justify-content-center">
                        <div class="row">
                            <input type="submit" value="Submit" class="btn btn-outline-success align-middle form-control">
                        </div>
                    </div>

                    <div class="col-md-5 d-flex justify-content-center">
                        <div class="row">
                            <input type="reset" value="Reset" class="btn btn-outline-danger align-middle form-control">
                        </div>
                    </div>
                </div>
            </section>
        </form>
    </div>

    <!-- footer -->
    <section>
        <nav class="navbar bg-dark navbar-dark">
            <div class="container-fluid">
                <div class="container justify-content-center align-items-center">
                    <div class="col">
                        <div class="row  m-3">
                            <div class="col-md-2 text-white">
                                <h5 class="text-align-center footer-title">UNIVERSITY</h5>
                                <ul class="footer-list">
                                    <li class="footer-list-item">About Us</li>
                                    <li class="footer-list-item">History</li>
                                    <li class="footer-list-item">Chancellor</li>
                                    <li class="footer-list-item">Vice Chancellor</li>
                                    <li class="footer-list-item">Privacy Policy</li>
                                </ul>
                            </div>
                            <div class="col-md-2 text-white">
                                <h5 class="text-align-center footer-title">ACADEMIC</h5>
                                <ul class="footer-list">
                                    <li class="footer-list-item">Faculties</li>
                                    <li class="footer-list-item">Libraries</li>
                                    <li class="footer-list-item">Institutes</li>
                                    <li class="footer-list-item">Departments</li>
                                    <li class="footer-list-item">Centers & Units</li>
                                </ul>
                            </div>
                            <div class="col-md-2 text-white">
                                <h5 class="text-align-center footer-title">COURSES</h5>
                                <ul class="footer-list">
                                    <li class="footer-list-item">Postgraduate</li>
                                    <li class="footer-list-item">Undergraduate</li>
                                    <li class="footer-list-item">Diploma</li>
                                    <li class="footer-list-item">Certificate</li>
                                    <li class="footer-list-item">Online</li>
                                </ul>
                            </div>
                            <div class="col-md-2 text-white">
                                <h5 class="text-align-center footer-title">RESEARCH</h5>
                                <ul class="footer-list">
                                    <li class="footer-list-item">Researchers</li>
                                    <li class="footer-list-item">Research News</li>
                                    <li class="footer-list-item">Research Repositories</li>
                                    <li class="footer-list-item">Awards & Prices</li>
                                    <li class="footer-list-item">Research Grants</li>
                                </ul>
                            </div>
                            <div class="col-md-2 text-white">
                                <h5 class="text-align-center footer-title">PUBLICATIONS</h5>
                                <ul class="footer-list">
                                    <li class="footer-list-item">Conferences</li>
                                    <li class="footer-list-item">Research Symposium</li>
                                    <li class="footer-list-item">Newsletter</li>
                                    <li class="footer-list-item">UCR Journal</li>
                                    <li class="footer-list-item">Journals</li>
                                </ul>
                            </div>
                            <div class="col-md-2 text-white">
                                <h5 class="text-align-center footer-title">CAMPUS LIFE</h5>
                                <ul class="footer-list">
                                    <li class="footer-list-item">Achievements</li>
                                    <li class="footer-list-item">Arts & Culture</li>
                                    <li class="footer-list-item">Social</li>
                                    <li class="footer-list-item">Sports</li>
                                    <li class="footer-list-item">Student's Blog</li>
                                </ul>
                            </div>
                        </div>
                        <div class="row text-light">
                            <div class="col navbar-brand">
                                <p class="logo-text"><img src="images/Asset 3.png" alt="rainbow-high-logo" height="auto" width="10%"> &nbsp&nbsp&nbspAll Rights Reserved&reg</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </section>

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