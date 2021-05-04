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
                                <p>We Are Here For You</p>
                            </div>
                            <div class="text">
                                <a href="/localadmin"><h2>Local Admin</h2></a>
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
                                    <a href="{{ route('inational') }}" class="dropdown-item">International</a>
                                    <a href="{{ route('national') }}" class="dropdown-item">National</a>
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


        <!-- Carousel Start -->
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('admin3')}}//img/carousel-1.jpg" alt="Carousel Image">
                    <div class="carousel-caption">
                        <h1 class="animated fadeInLeft">We fight for your justice</h1>
                        <p class="animated fadeInRight">We dream for a better community</p>
                        <a class="btn animated fadeInUp" href="https://www.facebook.com/Boighor.cse">Get free consultation</a>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="{{ asset('admin3')}}/img/carousel-2.jpg" alt="Carousel Image">
                    <div class="carousel-caption">
                        <h1 class="animated fadeInLeft">We prepared to oppose for you</h1>
                        <p class="animated fadeInRight">Your security is our concern</p>
                        <a class="btn animated fadeInUp" href="https://www.facebook.com/Boighor.cse">Get free consultation</a>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="{{ asset('admin3')}}/img/carousel-3.jpg" alt="Carousel Image">
                    <div class="carousel-caption">
                        <h1 class="animated fadeInLeft">We fight for your privilege</h1>
                        <p class="animated fadeInRight">Be confident, Be strong</p>
                        <a class="btn animated fadeInUp" href="https://www.facebook.com/Boighor.cse">Get free consultation</a>
                    </div>
                </div>
            </div>

            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- Carousel End -->


        <!-- Top Feature Start-->
        <div class="feature-top">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-3 col-sm-6">
                        <div class="feature-item">
                            <i class="far fa-check-circle"></i>
                            <h3>Legal</h3>
                            <p>Govt Approved</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="feature-item">
                            <i class="fa fa-user-tie"></i>
                            <h3>Security</h3>
                            <p>Identity Will Be Hidden</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="feature-item">
                            <i class="far fa-thumbs-up"></i>
                            <h3>Harrasments</h3>
                            <p>We Got Your Back</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="feature-item">
                            <i class="far fa-handshake"></i>
                            <h3>Support</h3>
                            <p>Quick Support</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Feature End-->


        <!-- About Start -->
        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-6">
                        <div class="about-img">
                            <img src="{{ asset('admin3')}}/img/Group.jpeg" alt="Image">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <div class="section-header">
                            <h2>Learn About Us</h2>
                        </div>
                        <div class="about-text">
                            <p>
                                <mark>Who We Are and What We Do :<br></mark>
                                City Guard has been developed by Bijon Mallik,CS Graduate from PUST, to help law enforcement agencies throughout the whole Bangladesh providing with valuable information about recent & future crime activity in their neighborhood. Our goal is to assist police departments in reducing crime through a better-informed citizenry. Creating more self-reliance among community members is a great benefit to community oriented policing efforts everywhere and has been proven effective in combating crime.


                            </p>

                            <a class="btn" href="/aboutus">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Service Start -->
        <div class="service">
            <div class="container">
                <div class="section-header">
                    <h2>Our Most Common Areas</h2>
                </div>
                <div class="row">

                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="fa fa-users"></i>
                            </div>
                            <h3>Family Law Violation</h3>
                            <p>
                                Any kind of harrasments,threats,force etc from neighbours or near one.
                            </p>
                            <a class="btn" href="{{ route('aboutus') }}">Learn More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="fa fa-landmark"></i>
                            </div>
                            <h3>Civil Law Violation</h3>
                            <p>
                                We are very concern on civil laws & take immediate steps on violating these rules.
                            </p>
                            <a class="btn" href="{{ route('aboutus') }}">Learn More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="fa fa-hand-holding-usd"></i>
                            </div>
                            <h3>Marriage Law Violation</h3>
                            <p>
                                Early Marriage,Forced & Dowry and so on are included on this.
                            </p>
                            <a class="btn" href="{{ route('aboutus') }}">Learn More</a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="fa fa-gavel"></i>
                            </div>
                            <h3>Criminal Law Violation</h3>
                            <p>
                                This includes Sex Crimes, Burglary, Body Shaming, Drugs etc.
                            </p>
                            <a class="btn" href="{{ route('aboutus') }}">Learn More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="fa fa-graduation-cap"></i>
                            </div>
                            <h3>Education Law Violation</h3>
                            <p>
                                School,College,Varsity all are included on this for any kind of unwanted action on students.
                            </p>
                            <a class="btn" href="{{ route('aboutus') }}">Learn More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="fa fa-globe"></i>
                            </div>
                            <h3>Cyber Law Violation</h3>
                            <p>
                                Any kind of Cyber Violation, Online Violation etc. are included in this
                            </p>
                            <a class="btn" href="{{ route('aboutus') }}">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- Feature Start -->
        <div class="feature">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="section-header">
                            <h2>Why Choose Us</h2>
                        </div>
                        <div class="row align-items-center feature-item">
                            <div class="col-5">
                                <div class="feature-icon">
                                    <i class="fa fa-gavel"></i>
                                </div>
                            </div>
                            <div class="col-7">
                                <h3>Privacy will be hidden</h3>
                                <p>
                                    As far you know, your identity will be kept hidden-which is our main concern.
                                </p>
                            </div>
                        </div>
                        <div class="row align-items-center feature-item">
                            <div class="col-5">
                                <div class="feature-icon">
                                    <i class="fa fa-balance-scale"></i>
                                </div>
                            </div>
                            <div class="col-7">
                                <h3>Efficiency & Trust</h3>
                                <p>
                                    You can check our history,admin panel and superadmin for your safety.
                                </p>
                            </div>
                        </div>
                        <div class="row align-items-center feature-item">
                            <div class="col-5">
                                <div class="feature-icon">
                                    <i class="far fa-smile"></i>
                                </div>
                            </div>
                            <div class="col-7">
                                <h3>Results you deserve</h3>
                                <p>
                                    As soon as possible,you will get what you have asked for.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="feature-img">
                            <img src="{{ asset('admin3')}}/img/feature.jpg" alt="Feature">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End -->


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

        <!-- FAQs Start -->
        <div class="faqs">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="faqs-img">
                            <img src="{{ asset('admin3')}}/img/faqs.jpg" alt="Image">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="section-header">
                            <h2>Have A Questions?</h2>
                        </div>
                        <div id="accordion">
                            <div class="card">
                                <div class="card-header">
                                    <a class="card-link collapsed" data-toggle="collapse" href="#collapseOne" aria-expanded="true">
                                        <span>1</span> How we can build a good relation with admins? Do you have any opinion on handling criminal records?
                                    </a>
                                </div>
                                <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                    <div class="card-body">
                                        User data and Crime record should be preserved in two different database for our convenient of work. The ranked system of user must have access of admin. Admin must update crime news and graphs of their locality on the website. We can have monthly meeting among the admins for the betterment of our future plans.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <a class="card-link" data-toggle="collapse" href="#collapseTwo">
                                        <span>2</span> Is there any way to be user without national id/passport? Cause I’m under 18.
                                    </a>
                                </div>
                                <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        Do you feel any problem with registration? Obviously a good enquery. But for some spam issues we don't offer that.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <a class="card-link" data-toggle="collapse" href="#collapseThree">
                                        <span>3</span> What facilities will help me most?
                                    </a>
                                </div>
                                <div id="collapseThree" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        Please do visit our 'About Us' section, and give your feedback on 'Feedback' section.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <a class="card-link" data-toggle="collapse" href="#collapseFour">
                                        <span>4</span>Tell us what positive side do you want to show us?
                                    </a>
                                </div>
                                <div id="collapseFour" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        We want to assure you a very user friendly ui and make you rely on us.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <a class="card-link" data-toggle="collapse" href="#collapseFive">
                                        <span>5</span> If my Data got leaked,what can I do then?
                                    </a>
                                </div>
                                <div id="collapseFive" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        Obviously it won't happen, but if does,then you may take action on us,even through our site!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="btn" href="/casestudy">Ask more</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- FAQs End -->


        <!-- Testimonial Start -->
        <div class="testimonial">
            <div class="container">
                <div class="section-header">
                    <h2>Review From Client</h2>
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


        <!-- Blog Start -->
        <div class="blog">
            <div class="container">
                <div class="section-header">
                    <h2>Latest From Articles</h2>
                </div>
                <div class="owl-carousel blog-carousel">
                    <div class="blog-item">
                        <img src="{{ asset('admin3')}}/img/blog-1.jpg" alt="Blog">
                        <h3>Lorem ipsum dolor</h3>
                        <div class="meta">
                            <i class="fa fa-list-alt"></i>
                            <a href="">Civil Law</a>
                            <i class="fa fa-calendar-alt"></i>
                            <p>01-Jan-2045</p>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor
                        </p>
                        <a class="btn" href="/national">Read More <i class="fa fa-angle-right"></i></a>
                    </div>
                    <div class="blog-item">
                        <img src="{{ asset('admin3')}}/img/blog-2.jpg" alt="Blog">
                        <h3>Lorem ipsum dolor</h3>
                        <div class="meta">
                            <i class="fa fa-list-alt"></i>
                            <a href="">Family Law</a>
                            <i class="fa fa-calendar-alt"></i>
                            <p>01-Jan-2045</p>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor
                        </p>
                        <a class="btn" href="/national">Read More <i class="fa fa-angle-right"></i></a>
                    </div>
                    <div class="blog-item">
                        <img src="{{ asset('admin3')}}/img/blog-3.jpg" alt="Blog">
                        <h3>Lorem ipsum dolor</h3>
                        <div class="meta">
                            <i class="fa fa-list-alt"></i>
                            <a href="">Business Law</a>
                            <i class="fa fa-calendar-alt"></i>
                            <p>01-Jan-2045</p>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor
                        </p>
                        <a class="btn" href="/national">Read More <i class="fa fa-angle-right"></i></a>
                    </div>
                    <div class="blog-item">
                        <img src="{{ asset('admin3')}}/img/blog-1.jpg" alt="Blog">
                        <h3>Lorem ipsum dolor</h3>
                        <div class="meta">
                            <i class="fa fa-list-alt"></i>
                            <a href="">Education Law</a>
                            <i class="fa fa-calendar-alt"></i>
                            <p>01-Jan-2045</p>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor
                        </p>
                        <a class="btn" href="/national">Read More <i class="fa fa-angle-right"></i></a>
                    </div>
                    <div class="blog-item">
                        <img src="{{ asset('admin3')}}/img/blog-2.jpg" alt="Blog">
                        <h3>Lorem ipsum dolor</h3>
                        <div class="meta">
                            <i class="fa fa-list-alt"></i>
                            <a href="">Criminal Law</a>
                            <i class="fa fa-calendar-alt"></i>
                            <p>01-Jan-2045</p>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor
                        </p>
                        <a class="btn" href="/national">Read More <i class="fa fa-angle-right"></i></a>
                    </div>
                    <div class="blog-item">
                        <img src="{{ asset('admin3')}}/img/blog-3.jpg" alt="Blog">
                        <h3>Lorem ipsum dolor</h3>
                        <div class="meta">
                            <i class="fa fa-list-alt"></i>
                            <a href="">Cyber Law</a>
                            <i class="fa fa-calendar-alt"></i>
                            <p>01-Jan-2045</p>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor
                        </p>
                        <a class="btn" href="/national">Read More <i class="fa fa-angle-right"></i></a>
                    </div>
                    <div class="blog-item">
                        <img src="{{ asset('admin3')}}/img/blog-1.jpg" alt="Blog">
                        <h3>Lorem ipsum dolor</h3>
                        <div class="meta">
                            <i class="fa fa-list-alt"></i>
                            <a href="">Business Law</a>
                            <i class="fa fa-calendar-alt"></i>
                            <p>01-Jan-2045</p>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor
                        </p>
                        <a class="btn" href="/national">Read More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog End -->


        <!-- Newsletter Start -->
        <div class="newsletter">
            <div class="container">
                <div class="section-header">
                    <h2>Subscribe Our CityGuard Newsletter</h2>
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
</body>

</html>