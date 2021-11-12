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
                                <a href='/localadmin'><h2>Local Admin</h2></a>
                                <p>Call Your Local Admin For Free Consultation</p>
                            </div>
                            <div class="social">
                                <a href="https://twitter.com/BijonMallik" target="_blank"><i class="fab fa-twitter" ></i></a>
                                <a href="https://www.facebook.com/rahul.r.rohan" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.linkedin.com/in/bijon-mallik-40a2271ab/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://www.instagram.com/ibijon.17/" target="_blank"><i class="fab fa-instagram"></i></a>
                                <a href="http://youtube.com/mrsurge" target="_blank"><i class="fab fa-youtube"></i></a>
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
                        <h2>About Us</h2>
                    </div>
                    <div class="col-12">
                        <a href="/">Home</a>
                        <a href="">About Us</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->


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
                            <mark>Who We Are and What We Do:<br></mark>
                                City Guard has been developed by Bijon Mallik,CS Graduate from PUST, to help law enforcement agencies throughout the whole Bangladesh providing with valuable information about recent & future crime activity in their neighborhood. Our goal is to assist police departments in reducing crime through a better-informed citizenry. Creating more self-reliance among community members is a great benefit to community oriented policing efforts everywhere and has been proven effective in combating crime.

                            </p>

                            <p>
                                As far you know,this is a public facing crime information and crime alert service. With City Guard, it’s easier than ever to check crime anywhere in Bangladesh because it offers security to the information providers.
                                Our goal is to provide the most accurate and timely crime information to the public and to the officials.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Timeline Start -->
        <div class="timeline">
            <div class="container">
                <div class="section-header">
                    <h2>Learn About Our Goal</h2>
                </div>
                <div class="timeline-start">
                    <div class="timeline-container left">
                        <div class="timeline-content">
                            <h2><span>101</span>Establish organizationwide information security</h2>
                            <p>
                            Information security, or cybersecurity, concerns should permeate the organization’s structure and functions. Management at all levels should ensure that information security is integrated with information technology (IT) and other activities. Top-level management should ensure that information security serves overall business objectives and should establish responsibility and accountability throughout the organization.
                            </p>
                        </div>
                    </div>
                    <div class="timeline-container right">
                        <div class="timeline-content">
                            <h2><span>102</span>Adopt a risk-based approach</h2>
                            <p>
                            Security governance, including allocation of resources and budgets, should be based on the risk appetite of an organization, considering loss of competitive advantage, compliance and liability risks, operational disruptions, reputational harm, and financial loss.
                            </p>
                        </div>
                    </div>
                    <div class="timeline-container left">
                        <div class="timeline-content">
                            <h2><span>103</span>Set the direction of investment decisions</h2>
                            <p>
                            Information security investments are intended to support organizational objectives. Security governance entails ensuring that information security is integrated with existing organization processes for capital and operational expenditure, for legal and regulatory compliance, and for risk reporting.
                            </p>
                        </div>
                    </div>
                    <div class="timeline-container right">
                        <div class="timeline-content">
                            <h2><span>104</span>Ensure conformance with internal and external requirements</h2>
                            <p>
                            External requirements include mandatory legislation and regulations, standards leading to certification, and contractual requirements. Internal requirements comprise broader organizational goals and objectives. Independent security audits are the accepted means of determining and monitoring conformance.
                            </p>
                        </div>
                    </div>
                    <div class="timeline-container left">
                        <div class="timeline-content">
                            <h2><span>105</span>Foster a security-positive environment for all stakeholders</h2>
                            <p>
                            Security governance should be responsive to stakeholder expectations, keeping in mind that various stakeholders can have different values and needs. The governing body should take the lead in promoting a positive information security culture, which includes requiring and supporting security education, training, and awareness programs.
                            </p>
                        </div>
                    </div>
                    <div class="timeline-container right">
                        <div class="timeline-content">
                            <h2><span>106</span>Review performance in relation to business outcomes</h2>
                            <p>
                            From a governance perspective, security performance encompasses not just effectiveness and efficiency but also impact on overall business goals and objectives. Governance executives should mandate reviews of a performance measurement program for monitoring, audit, and improvement that links information security performance to business performance.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Timeline End -->


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
</body>

</html>