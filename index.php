<?php 

if(isset($_POST['submit'])){
    $to = "k.patrick96@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $first_name = $_POST['last_name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Patrik Kereszturi</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon-16x16.png" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=PT+Sans+Narrow&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400;600&display=swap">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@600&display=swap">
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top shadow nav-text" id="mainNav">
        <div class="container">
            <a class="navbar-brand " href="#page-top">Patrik Kereszt??ri</a>
            <button class="navbar-toggler text-uppercase  bg-outline-success text-white rounded menu" onclick="this.classList.toggle('opened');this.setAttribute('aria-expanded', this.classList.contains('opened'))" aria-label="Main Menu" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation">
                <svg width="60" height="60" viewBox="0 0 100 100">
                    <path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
                    <path class="line line2" d="M 20,50 H 80" />
                    <path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
                  </svg>
                
            </button>
            <div class="collapse navbar-collapse " id="navbarResponsive">
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                            href="#home">Home</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                            href="#about">About</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                            href="#projects">Projects</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                            href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <div class="container">
        <section class="page-section portfolio" id="home">
            <header class="masthead text-center">
                <div class="row">
                    <div class="col col-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="align-items-center text-center  p-2">
                            <!-- Masthead Avatar Image-->
                            <!-- Masthead Heading-->
                            <h1 class="masthead-heading lato">Patrik Kereszt??ri</h1>
                            <p class="masthead-subheading font-weight-light lato">Junior Full Stack Web Developer</p>
                            <!-- Icon Divider-->
                            <div class="divider-custom divider-light">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                <div class="divider-custom-line"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Masthead Subheading-->
                    <div class="col col-12 col-sm-12 col-md-6 col-lg-6">

                        <img class="masthead-avatar" src="assets/av.png" alt="..." />
                    </div>
                </div>
            </header>
        </section>
        <!-- Portfolio Section-->
        <section class="page-section " id="about">
            <div class="row content-text">
                <div class="col col-12 col-sm-12 col-md-12 col-lg-12 text-center ">
                    <p class="fs-5"> Hello! I'm Patrik, a junior full stuck developer, a guy slighty obsessed for code
                        quality. I have started my journey as a Full Stack Web Developer by CodeFactory. I???m currently
                        available for freelance work, and searching for a job. If you have a project that you want to
                        get started or think you need my help with something, then get in touch.</p> <br>
                </div>
                <hr>
                <div class="col col-12 col-sm-12 col-md-6 col-lg-6 mb-5 mt-5">
                    <img class="rounded shadow card" style="width: 100%;" src="assets/img/portfolio/web.jpg" alt="">
                </div>
                <div class="col col-12 col-sm-12 col-md-6 col-lg-6 text-center order-sm-0 fs-6">

                    <strong>
                        <p class="content-htext ">Full Stack Web Developer</p>
                    </strong>
                    <br>
                    <p>
                        I see Web Development as a craft like landworking. It takes time and diligence to learn but is
                        as rewarding as any other craft when looking at the product of your investment. It enables
                        people to create extraordinary non-material / digital products and services without the need for
                        heavy supply chains and huge organizations, being able to instantly ship all across the globe
                        for literally no variable cost.

                        Learning this craft enables me to engage with the things I love to do most like creating, developing websites.

                    </p>
                </div>
            </div>
        </section>
        <!-- About Section-->
        <section class="page-section " id="about">
            <h3 class="text-center">Skills</h3>
            <hr>
            <div class="row content-text">
                <div class="row fs-6">
                    <div class="col col-12 col-sm-12 col-md-12 col-lg-12 text-center m-2 ">
                        <p> ???Great web design without functionality is like a sports car with no engine.??? <br>
                            ??? Paul Cooksong</p>
                    </div>
                    <div
                        class="col col-12 col-sm-12 col-md-6 col-lg-6  order-1 order-md-0 order-sm-1 order-lg-0 text-center text-sm-center text-md-start text-lg-start">
                        <div class="row">
                            <div class="col col-12 col-sm-12 col-md-6 col-lg-6 p-4">
                                <h5 class="mb-4">Front-End</h5>
                            <div class="ms-2">
                                <p><i class="fab fa-html5"></i> HTML5</p>
                                <p><i class="fab fa-css3-alt"></i> CSS3</p>
                                <p><i class="fab fa-js-square"></i> JavaScript</p>
                                <p><i class="fab fa-bootstrap"></i> Bootstrap 5</p>
                                <p><i class="fab fa-sass"></i> Sass/Scss</p>
                                <p><i class="fab fa-angular"></i> Angular</p>
                                <p><i class="fab fa-vuejs"></i> VueJS</p>
                                </div>
                            </div>
                            <div class="col col-12 col-sm-12 col-md-6 col-lg-6 p-4 ">
                                <h5 class="mb-4">Back-End</h5>
                                <div class="ms-2">
                                <p> <i class="fas fa-database"></i> MySql</p>
                                <p><i class="fab fa-php"></i> PHP</p>
                                <p><i class="fab fa-symfony"></i> Symfony</p>
                                <p><i class="fab fa-laravel"></i> Laravel</p>
                                <p><img style="width: 7%;" src="assets/img/portfolio/ajax.png" alt=""> AJAX</p>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div
                        class="col col-12 col-sm-12 col-md-6 col-lg-6 text-center  order-0 order-md-1 order-sm-0 order-lg-1">
                        <img class="rounded shadow card" style="width: 100%;" src="assets/img/portfolio/best.png"
                            alt="">
                    </div>
                </div>
        </section>
        <!--Projects-->
        <section class="page-section mb-0" id="projects">
            <h3 class="text-center">Projects</h3>
            <hr>
            <div class="row content-text">
                <div class="col col-12 col-sm-12 col-md-12 col-lg-12 text-center m-2">
                    <p> ???A website without visitors is like a ship lost in the horizon.??? <br>
                        ??? Dr. Christopher Dayagdag</p>
                </div>
                <div id="result">

                </div>
            </div>

    </div>
    </section>
    <!-- Contact Section-->
    <section class="page-section" id="contact">
        <div class="container">
            <!-- Contact Section Heading-->
            <h2 class="text-center mb-0">Contact Me</h2>
            <!-- Icon Divider-->

            <!-- Contact Section Form-->
            <div class="row justify-content-center content-text">
                <div class="col-lg-8 col-xl-7">

                    <!-- to get an API token!-->
                    <form  action="" method="POST">
                        <!-- Name input-->
                        <div class="form-floating mb-3">
                            <input  name="first_name" class="form-control" id="fname" type="text" placeholder="Enter your name..."
                                data-sb-validations="required" />
                            <label for="fname">First Name</label>
                            <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                        </div>
                        <div class="form-floating mb-3">
                            <input  name="last_name" class="form-control" id="lname" type="text" placeholder="Enter your name..."
                                data-sb-validations="required" />
                            <label for="lname">Last Name</label>
                            <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                        </div>
                        <!-- Email address input-->
                        <div class="form-floating mb-3">
                            <input name="email" class="form-control" id="email" type="email" placeholder="name@example.com"
                                data-sb-validations="required" />
                            <label for="email">Email address</label>
                            <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                        </div>
                        <!-- Phone number input-->
                        <div class="form-floating mb-3">
                            <input name="phone" class="form-control" id="phone" type="tel" placeholder="(123) 456-7890"
                                data-sb-validations="required" />
                            <label for="phone">Phone number</label>
                            <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.
                            </div>
                        </div>
                        <!-- Message input-->
                        <div class="form-floating mb-3">
                            <textarea name="message" class="form-control" id="message" type="text"
                                placeholder="Enter your message here..." style="height: 10rem"
                                data-sb-validations="required"></textarea>
                            <label for="message">Message</label>
                            <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.
                            </div>
                        </div>

                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3">
                                <div class="fw-bolder">Form submission successful!</div>

                            </div>
                        </div>
                        <!-- Submit error message-->

                        <div class="d-none" id="submitErrorMessage">
                            <div class="text-center text-danger mb-3">Error sending message!</div>
                        </div>
                        <!-- Submit Button-->
                        <input type="submit" name="submit" value="Submit" class="btn btn-primary btn-xl"></input>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer text-center content-text bg-secondary">
        <div class="container">
            <div class="row">
                <!-- Footer Location-->
                <div class="col col-12 col-sm-12 col-md-6 col-lg-6">
                    <h4 class="text-uppercase mb-4">Location</h4>
                    <p class="lead mb-0">
                        Vienna, Austria
                    </p>
                </div>
                <!-- Footer Social Icons-->
                <div class="col col-12 col-sm-12 col-md-6 col-lg-6">
                    <h4 class="text-uppercase mb-4">Around the Web</h4>
                    <a class="btn btn-outline-light btn-social mx-1" href="https://github.com/kpatrick05"><i
                            class="fab fa-fw fa-github"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="https://www.linkedin.com/in/patrik-kereszturi-799aa021a/"><i
                            class="fab fa-fw fa-linkedin-in"></i></a>
                    
                </div>
                <!-- Footer About Text-->

            </div>

        </div>
    </footer>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="json/data.json"></script>
    <script src="js/scripts.js"></script>

    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>

</html>