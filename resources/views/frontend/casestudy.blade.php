<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>City Guard: Building a Safer Community</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="City Guard Website" name="keywords">
    <meta content="City Guard Website" name="description">

    <!-- Favicon -->

    <link href="{{ asset('admin3')}}/img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@1,600;1,700;1,800&family=Roboto:wght@400;500&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('admin3')}}/lib/animate/animate.min.css" rel="stylesheet">
    <link href="{{ asset('admin3')}}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('admin3')}}/css/style.css" rel="stylesheet">
    <!--New===============================================================================================-->
    <!--link rel="icon" type="image/png" href="{{ asset('admin5')}}/images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <!--link rel="stylesheet" type="text/css" href="{{ asset('admin5')}}/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <!--link rel="stylesheet" type="text/css" href="{{ asset('admin5')}}/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <!--link rel="stylesheet" type="text/css" href="{{ asset('admin5')}}/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <!--link rel="stylesheet" type="text/css" href="{{ asset('admin5')}}/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <!--link rel="stylesheet" type="text/css" href="{{ asset('admin5')}}/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin5')}}/css/util.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin5')}}/css/main.css">
    <!--===============================================================================================-->

</head>

<body>
    <div class="wrapper">
        <!-- Top Bar Start -->
        <div class="top-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="logo">
                            <a href="{{ route('home') }}">
                                <h1>CityGuard</h1>
                                <!-- <img src="{{ asset('admin3')}}/img/logo.jpg" alt="Logo">-->
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="top-bar-right">
                            <div class="text">
                                <h2>24 Hours/7 Days</h2>

                            </div>
                            <div class="text">
                                <a href='/localadmin'>
                                    <h2>Local Admin</h2>
                                </a>
                                <p>Call Your Local Admin For Free Consultation</p>
                            </div>
                            <div class="social">
                                <a href="https://twitter.com/BijonMallik"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.facebook.com/rahul.r.rohan"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.linkedin.com/in/bijon-mallik-40a2271ab/"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://www.instagram.com/ibijon.17/"><i class="fab fa-instagram"></i></a>
                                <a href="http://youtube.com/mrsurge"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <div class="nav-bar">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="/" class="nav-item nav-link active">Home</a>
                            <a href="{{ route('login') }}" class="nav-item nav-link">Login</a>
                            <a href="{{ route('register') }}" class="nav-item nav-link">Register</a>
                            <a href="/casestudy" class="nav-item nav-link">Feedbacks</a>
                            <a href="{{ route('aboutus') }}" class="nav-item nav-link">About Us</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Articles</a>
                                <div class="dropdown-menu">
                                    <a href="/inational" class="dropdown-item">International</a>
                                    <a href="/national" class="dropdown-item">National</a>
                                </div>
                            </div>
                            <a href="/contact" class="nav-item nav-link">Contact</a>
                        </div>
                        <div class="ml-auto">
                            <a class="btn" href="https://www.pust.ac.bd/academic/departments/dept_teachers/dept_teachers_profile/100013">Get Appointment</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <!-- Nav Bar End -->


        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Feedbacks</h2>
                    </div>
                    <div class="col-12">
                        <a href="/">Home</a>
                        <a href="">Feedbacks</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        <!--FeedBacks Start -->
        <div class="bg-contact2" style="background-image: url('admin4/images/bg-04.jpg');">
            <div class="container-contact2">
                <div class="col-lg-7 col-md-6">
                    <form class="contact2-form validate-form">

                        <div class="section-header">
                            <h2>Give Feedback</h2>
                        </div>

                        <div class="wrap-input2 validate-input" data-validate="Name is required">
                            <input class="input2" type="text" name="name">
                            <span class="focus-input2" data-placeholder="NAME"></span>
                        </div>

                        <div class="wrap-input2 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                            <input class="input2" type="text" name="email">
                            <span class="focus-input2" data-placeholder="EMAIL"></span>
                        </div>

                        <div class="wrap-input2 validate-input" data-validate="Message is required">
                            <textarea class="input2" name="message"></textarea>
                            <span class="focus-input2" data-placeholder="MESSAGE"></span>
                        </div>

                        <div class="container-contact2-form-btn">
                            <div class="wrap-contact2-form-btn">
                                <div class="contact2-form-bgbtn"></div>
                                <button class="contact2-form-btn">
                                    Send Your Message
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--FeedBacks End -->


        <!-- Testimonial Start -->
        <div class="testimonial">
            <div class="container">
                <div class="section-header">
                    <h2>Feedbacks From Users</h2>
                </div>
                <div class="owl-carousel testimonials-carousel">
                    <div class="testimonial-item">
                        <i class="fa fa-quote-right"></i>
                        <div class="row align-items-center">
                            <div class="col-3">
                                <img src="{{ asset('admin3')}}/img/testimonial-1.jpg" alt="">
                            </div>
                            <div class="col-9">
                                <h2>Rabby Dip</h2>
                                <p>Student</p>
                            </div>
                            <div class="col-12">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan lacus eget velit
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <i class="fa fa-quote-right"></i>
                        <div class="row align-items-center">
                            <div class="col-3">
                                <img src="{{ asset('admin3')}}/img/testimonial-2.jpg" alt="">
                            </div>
                            <div class="col-9">
                                <h2>Amiya Kundu</h2>
                                <p>Teacher</p>
                            </div>
                            <div class="col-12">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan lacus eget velit
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <i class="fa fa-quote-right"></i>
                        <div class="row align-items-center">
                            <div class="col-3">
                                <img src="{{ asset('admin3')}}/img/testimonial-3.jpg" alt="">
                            </div>
                            <div class="col-9">
                                <h2>Mahadi Hasan</h2>
                                <p>Doctor</p>
                            </div>
                            <div class="col-12">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan lacus eget velit
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <i class="fa fa-quote-right"></i>
                        <div class="row align-items-center">
                            <div class="col-3">
                                <img src="{{ asset('admin3')}}/img/testimonial-4.jpg" alt="">
                            </div>
                            <div class="col-9">
                                <h2>Eshita Nahar</h2>
                                <p>Soft. Trainee</p>
                            </div>
                            <div class="col-12">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan lacus eget velit
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <i class="fa fa-quote-right"></i>
                        <div class="row align-items-center">
                            <div class="col-3">
                                <img src="{{ asset('admin3')}}/img/testimonial-1.jpg" alt="">
                            </div>
                            <div class="col-9">
                                <h2>Client Name</h2>
                                <p>Profession</p>
                            </div>
                            <div class="col-12">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan lacus eget velit
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <i class="fa fa-quote-right"></i>
                        <div class="row align-items-center">
                            <div class="col-3">
                                <img src="{{ asset('admin3')}}/img/testimonial-2.jpg" alt="">
                            </div>
                            <div class="col-9">
                                <h2>Client Name</h2>
                                <p>Profession</p>
                            </div>
                            <div class="col-12">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan lacus eget velit
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <i class="fa fa-quote-right"></i>
                        <div class="row align-items-center">
                            <div class="col-3">
                                <img src="{{ asset('admin3')}}/img/testimonial-3.jpg" alt="">
                            </div>
                            <div class="col-9">
                                <h2>Client Name</h2>
                                <p>Profession</p>
                            </div>
                            <div class="col-12">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan lacus eget velit
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->



        <!-- Team Start -->
        <div class="team">
            <div class="container">
                <div class="section-header">
                    <h2>Meet Some of Our Beloved Admin</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="{{ asset('admin3')}}/img/shakil.jpg" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>Shahid Ahmed Shakil</h2>
                                <p>Head of Administration,Kushtia</p>
                                <div class="team-social">
                                    <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="{{ asset('admin3')}}/img/maruf.jpg" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>Maruf Bangabasi</h2>
                                <p>Head of Administration,Tangail</p>
                                <div class="team-social">
                                    <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="{{ asset('admin3')}}/img/naim.jpg" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>Naim Islam</h2>
                                <p>Head of Administration,Narshingdi</p>
                                <div class="team-social">
                                    <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="{{ asset('admin3')}}/img/tahmid.jpg" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>Tahmid Rahman</h2>
                                <p>Head of Administration,Comilla</p>
                                <div class="team-social">
                                    <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->


        <!-- Newsletter Start -->
        <div class="newsletter">
            <div class="container">
                <div class="section-header">
                    <h2>Subscribe Our Newsletter</h2>
                </div>
                <div class="form">
                    <input class="form-control" placeholder="Email here">
                    <button class="btn">Submit</button>
                </div>
            </div>
        </div>
        <!-- Newsletter End -->


        <!-- Footer Start -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="footer-about">
                            <h2>About Us</h2>
                            <p>
                                <mark>Who We Are and What We Do:<br></mark>
                                City Guard has been developed by Bijon Mallik,CS Graduate from PUST, to help law enforcement agencies throughout the whole Bangladesh providing with valuable information about recent & future crime activity in their neighborhood.

                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-8">
                        <div class="row">
                            <div class="col-md-6 col-lg-4">
                                <div class="footer-link">
                                    <h2>Services Areas</h2>
                                    <a href="">Civil Law</a>
                                    <a href="">Family Law</a>
                                    <a href="">Business Law</a>
                                    <a href="">Education Law</a>
                                    <a href="">Immigration Law</a>
                                    <a href="">Marriage Law</a>
                                    <a href="">Cyber Law</a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="footer-link">
                                    <h2>Useful Pages</h2>
                                    <a href="/aboutus">About Us</a>
                                    <a href="/national">Natinal Blog</a>
                                    <a href="/inational">International Blog</a>
                                    <a href="/casestudy">Feedbacks</a>
                                    <a href="/localadmin">Local Admins</a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="footer-contact">
                                    <h2>Get In Touch</h2>
                                    <p><i class="fa fa-map-marker-alt"></i>12/2-F, KM Das Lane, Tikatuli, Motijheel, Dhaka</p>
                                    <p><i class="fa fa-phone-alt"></i>+880 178 459 5423</p>
                                    <p><i class="fa fa-envelope"></i>bijon.170105@s.pust.ac.bd</p>
                                    <div class="footer-social">
                                        <a href="https://twitter.com/BijonMallik"><i class="fab fa-twitter"></i></a>
                                        <a href="https://www.facebook.com/rahul.r.rohan"><i class="fab fa-facebook-f"></i></a>
                                        <a href="https://www.linkedin.com/in/bijon-mallik-40a2271ab/"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="https://www.instagram.com/ibijon.17/"><i class="fab fa-instagram"></i></a>
                                        <a href="http://youtube.com/mrsurge"><i class="fab fa-youtube"></i></a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container footer-menu">
                <div class="f-menu">
                    <a href="">Terms of use</a>
                    <a href="">Privacy policy</a>
                    <a href="">Cookies</a>
                    <a href="">Help</a>
                    <a href="">FQAs</a>
                </div>
            </div>

        </div>
        <!-- Footer End -->

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('admin3')}}/lib/easing/easing.min.js"></script>
    <script src="{{ asset('admin3')}}/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="{{ asset('admin3')}}/lib/isotope/isotope.pkgd.min.js"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('admin3')}}/js/main.js"></script>
    <!--Neww===============================================================================================-->
    <script src="{{ asset('admin5')}}/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('admin5')}}/vendor/bootstrap/js/popper.js"></script>
    <script src="{{ asset('admin5')}}/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('admin5')}}/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('admin5')}}/js/main.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>

</body>

</html>