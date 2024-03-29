<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>

<!doctype html>
<!--[if IE 9]> <html class="no-js ie9 fixed-layout" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js " lang="en"> <!--<![endif]-->
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <!-- Site Meta -->
    <title>BlackWoods University - Homepage</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/ilorin.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/ilorin.png">

	<!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i" rel="stylesheet"> 
	
    <!-- Custom & Default Styles -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/carousel.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="style.css">

 

	<!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
	<![endif]-->

</head>
<body>  

    <!-- LOADER -->
    <div id="preloader">
        <img class="preloader" src="images/loader.gif" alt="">
    </div><!-- end loader -->
    <!-- END LOADER -->

    <div id="wrapper">
        <!-- BEGIN # MODAL LOGIN -->
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Begin # DIV Form -->
                    <div id="div-forms">
                        <form id="login-form">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span class="flaticon-add" aria-hidden="true"></span>
                            </button>
                            <div class="modal-body">
                                <input class="form-control" type="text" placeholder="Type here" required>
                            </div>
                        </form><!-- End # Login Form -->
                    </div><!-- End # DIV Form -->
                </div>
            </div>
        </div>
        <!-- END # MODAL LOGIN -->

        <header class="header">
            <div class="topbar clearfix">
                <div class="container">
                    <div class="row-fluid">
                        <div class="col-md-6 col-sm-6 text-left">
                            <p>
                                <strong><i class="fa fa-phone"></i></strong> +234 81 200 510 56 &nbsp;&nbsp;
                                <strong><i class="fa fa-envelope"></i></strong> <a href="mailto:#">contact@backwoodsuni.com</a>
                            </p>
                        </div><!-- end left -->
                        <div class="col-md-6 col-sm-6 hidden-xs text-right">
                            <div class="social">
                                <a class="facebook" href="#" data-tooltip="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>              
                                <a class="twitter" href="#" data-tooltip="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
                                <a class="google" href="#" data-tooltip="tooltip" data-placement="bottom" title="Google Plus"><i class="fa fa-google-plus"></i></a>
                                <a class="linkedin" href="#" data-tooltip="tooltip" data-placement="bottom" title="Linkedin"><i class="fa fa-linkedin"></i></a>
                                <a class="pinterest" href="#" data-tooltip="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                            </div><!-- end social -->
                        </div><!-- end left -->
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end topbar -->

            <div class="container">
                <nav class="navbar navbar-default yamm">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="logo-normal">
                            <a class="navbar-brand" href="index.html"><img src="images/ilorin.png" alt=""></a>
                        </div>
                    </div>

                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="index.html">Home</a></li>
                            <li class="dropdown yamm-fw yamm-half"><a href="#" data-toggle="dropdown" class="dropdown-toggle active">Courses <b class="fa fa-angle-down"></b></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="yamm-content clearfix">
                                            <div class="row-fluid">
                                                <div class="col-md-6 col-sm-6">
                                                    <h4></h4>
                                                    <ul>
                                                        <li><a href="#" style="color:#01bacf;">AI and Robotics</a></li>
                                                        <li><a href="#">Computer Science</a></li>
                                                        <li><a href="#">Data Science</a></li>
                                                        <li><a href="#">Information Technology</a></li>
                                                        <li><a href="#">Mechanical Engineering</a></li>
                                                        <li><a href="#">Electrical Engineering</a></li>
                                                        <li><a href="#">Chemistry</a></li>
                                                        <li><a href="#">Mathematics</a></li>
                                                        <li><a href="#">Performing Arts</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="menu-widget text-center">
                                                        <div class="image-wrap entry">
                                                            <img src="upload/ai-robotics.jpg" alt="" class="img-responsive">
                                                            <div class="magnifier">
                                                                 <a href="#" title=""><i class="flaticon-add"></i></a>
                                                            </div>
                                                        </div><!-- end image-wrap -->
                                                        <h5><a href="#">AI and Robotics</a></h5>
                                                        <small>&#8358;500,000</small>
                                                        <a href="#" class="menu-button">View Course</a>
                                                    </div><!-- end widget -->
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="events.html">Events</a></li>
                            
                            <li><a href="blog-single.html">Blog</a></li>
                            <li><a href="page-contact.html">Contact</a></li>
                            <li class="iconitem"><a href="#" data-toggle="modal" data-target="#login-modal"><i class="fa fa-search"></i></a></li>

                        </ul>
                    </div>
                </nav><!-- end navbar -->
            </div><!-- end container -->
        </header>

        <section id="home" class="video-section js-height-full">
            <div class="overlay"></div>
            <div class="home-text-wrapper relative container">
                <div class="home-message">
                <p>Hello, <?php echo $_SESSION['lname']; ?>!</p>
                <!-- <p>Pick your courses</p> -->
                    
                    <div class="btn-wrapper">
                        <div class="text-center">
                                <a href="index.html#about" class="btn btn-primary wow slideInLeft">Read More</a> &nbsp;&nbsp;&nbsp;<a href="homepage.php#courses" class="btn btn-default wow slideInRight">Choose your courses</a>
                        </div>
                    </div><!-- end row -->
                </div>
            </div>
            <div class="slider-bottom">
                <span>Explore <i class="fa fa-angle-down"></i></span>
            </div>
        </section>

        <section class="section" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 hidden-sm hidden-xs">
                        <div class="custom-module">
                            <img src="upload/student on cap.jpg" alt="" class="img-responsive wow slideInLeft">
                        </div><!-- end module -->
                    </div><!-- end col -->
                    <div class="col-md-8">
                        <div class="custom-module p40l">
                            <h4> <b>BackWoods University</b> is a university for ambitious students who want to reach their full potential and make their dreams a reality. <br>
                                Founded in 1987, BackWoods University has grown to become a renowned institution, renowned for its commitment to excellence in education and its welcoming, friendly atmosphere. <br><br>

                                Our aim is to provide a supportive and inclusive learning environment that encourages our students to reach their full potential - both academically and personally. We offer a wide range of courses, to ensure that our students are best equipped to succeed in the modern market. <br>

                            <hr class="invis">

                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 first">
                                    <ul class="check">
                                        <li>Student-Centered</li>
                                        <li>Mentoring Programs</li>
                                        <li>Dedicated Lecturers</li>
                                        <li>Standard Lecture Halls</li>
                                        <li>10,000 capacity Library</li>
                                    </ul><!-- end check -->
                                </div><!-- end col-lg-4 -->
                                
                            </div><!-- end row -->   

                            <hr class="invis">

                            <div class="btn-wrapper">
                                <a href="about.html" class="btn btn-primary">Learn More About us</a>
                            </div>

                        </div><!-- end module -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>

        <section class="section gb" id="courses">
            <div class="container">
                <div class="section-title text-center">
                    <h3>Recent Courses</h3>
                    <p>We offer a wide variety of courses. Check out whichever interests you!</p>
                </div><!-- end title -->

                <div id="owl-01" class="owl-carousel owl-theme owl-theme-01">
                    <div class="caro-item wow fadeInDown">
                        <div class="course-box">
                            <div class="image-wrap entry">
                                <img src="upload/ai-robotics.jpg" alt="" class="img-responsive">
                               
                            </div><!-- end image-wrap -->
                            <div class="course-details">
                                <h4>
                                    <small>Artificial Intelligence</small>
                                    <a href="#" title="">AI and Robotics</a>
                                </h4>
                                <p>This course is a discipline of AI that covers a variety of multidisciplinary topics necessary to understand the fundamentals of designing, building, and programming AI and Robots</p>
                            </div><!-- end details -->
                            <div class="course-footer clearfix">
                                <div class="pull-left">
                                    <ul class="list-inline">
                                        <li><a href="#"><i class="fa fa-user"></i> 2,517</a></li>
                                        <li><a href="#"><i class="fa fa-clock-o"></i> 3 years</a></li>
                                    </ul>
                                </div><!-- end left -->

                                <div class="pull-right">
                                    <ul class="list-inline">
                                        <li><a href="#">&#8358;500,000</a></li>
                                    </ul>
                                </div><!-- end left -->
                            </div><!-- end footer -->
                        </div><!-- end box -->
                    </div><!-- end col -->

                    <div class="caro-item wow fadeInUp">
                        <div class="course-box">
                            <div class="image-wrap entry">
                                <img src="upload/computer-science.jpg" alt="" class="img-responsive">
                                
                            </div><!-- end image-wrap -->
                            <div class="course-details">
                                <h4>
                                    <small>Computer Science</small>
                                    <a href="#" title="">Bsc Computer Science</a>
                                </h4>
                                <p>This course is a discipline of science that specializes on software engineering and design, algorithmic thinking, human-computer interaction, programming languages and much more. </p>
                            </div><!-- end details -->
                            <div class="course-footer clearfix">
                                <div class="pull-left">
                                    <ul class="list-inline">
                                        <li><a href="#"><i class="fa fa-user"></i>6,500 </a></li>
                                        <li><a href="#"><i class="fa fa-clock-o"></i> 4 Years</a></li>
                                    </ul>
                                </div><!-- end left -->

                                <div class="pull-right">
                                    <ul class="list-inline">
                                        <li><a href="#">&#8358;350,000</a></li>
                                    </ul>
                                </div><!-- end left -->
                            </div><!-- end footer -->
                        </div><!-- end box -->
                    </div><!-- end col -->

                    <div class="caro-item wow fadeInDown">
                        <div class="course-box">
                            <div class="image-wrap entry">
                                <img src="upload/data-science.jpg" alt="" class="img-responsive">
                               
                            </div><!-- end image-wrap -->
                            <div class="course-details">
                                <h4>
                                    <small>Artificial Intelligence</small>
                                    <a href="#" title="">Data Science</a>
                                </h4>
                                <p>This course is a dicipline of AI that specializes and teaches the fundamentals of interpreting data, performing analyses, and understanding and communicating actionable data statistics.</p>
                            </div><!-- end details -->
                            <div class="course-footer clearfix">
                                <div class="pull-left">
                                    <ul class="list-inline">
                                        <li><a href="#"><i class="fa fa-user"></i> 900</a></li>
                                        <li><a href="#"><i class="fa fa-clock-o"></i> 5 Years</a></li>
                                    </ul>
                                </div><!-- end left -->

                                <div class="pull-right">
                                    <ul class="list-inline">
                                        <li><a href="#">&#8358;400,000</a></li>
                                    </ul>
                                </div><!-- end left -->
                            </div><!-- end footer -->
                        </div><!-- end box -->
                    </div><!-- end col -->

                    <div class="caro-item wow fadeInUp">
                        <div class="course-box">
                            <div class="image-wrap entry">
                                <img src="upload/mechanical-engineering.jpg" alt="" class="img-responsive">
                               
                            </div><!-- end image-wrap -->
                            <div class="course-details">
                                <h4>
                                    <small>Engineering</small>
                                    <a href="#" title="">Mechanical Engineering</a>
                                </h4>
                                <p>This course is a displine of engineering that develops a high degree of competence in engineering design, experimentation, technologies of manufacturing and effective management of companies.</p>
                            </div><!-- end details -->
                            <div class="course-footer clearfix">
                                <div class="pull-left">
                                    <ul class="list-inline">
                                        <li><a href="#"><i class="fa fa-user"></i> 7,100</a></li>
                                        <li><a href="#"><i class="fa fa-clock-o"></i> 5 years</a></li>
                                    </ul>
                                </div><!-- end left -->

                                <div class="pull-right">
                                    <ul class="list-inline">
                                        <li><a href="#">&#8358;650,000</a></li>
                                    </ul>
                                </div><!-- end left -->
                            </div><!-- end footer -->
                        </div><!-- end box -->
                    </div><!-- end col -->

                    <div class="caro-item">
                        <div class="course-box">
                            <div class="image-wrap entry">
                                <img src="upload/performing-arts.jpg" alt="" class="img-responsive">
                               
                            </div><!-- end image-wrap -->
                            <div class="course-details">
                                <h4>
                                    <small>Arts</small>
                                    <a href="#" title="">Performing Arts</a>
                                </h4>
                                <p>This course is a discipline of the Arts that includes in a wide range of specialisms, including acting, dancing, voice acting, physical theatres, music theatres, sound design and digital video. </p>
                            </div><!-- end details -->
                            <div class="course-footer clearfix">
                                <div class="pull-left">
                                    <ul class="list-inline">
                                        <li><a href="#"><i class="fa fa-user"></i> 6,123</a></li>
                                        <li><a href="#"><i class="fa fa-clock-o"></i> 4 Years</a></li>
                                    </ul>
                                </div><!-- end left -->

                                <div class="pull-right">
                                    <ul class="list-inline">
                                        <li><a href="#">&#8358;400,000</a></li>
                                    </ul>
                                </div><!-- end left -->
                            </div><!-- end footer -->
                        </div><!-- end box -->
                    </div><!-- end col -->
                </div><!-- end row -->

                <hr class="invis">

                <div class="section-button text-center">
                    <a href="#" class="btn btn-primary">View All Courses</a>
                </div>
            </div><!-- end container -->
        </section>


        <section class="section db">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="stat-count">
                            <h4 class="counter">20000</h4> 
                            <h3><i class="flaticon-black-graduation-cap-tool-of-university-student-for-head"></i> Happy Students</h3>
                            <p>We have an average of 20,0000+ happy and innovative students </p>
                        </div><!-- stat-count -->
                    </div><!-- end col -->

                    <div class="col-lg-6 col-md-6">
                        <div class="stat-count">
                            <h4 class="counter">50</h4>
                            <h3><i class="flaticon-online-course"></i> Course Done</h3>
                            <p>We offer a variety of 50+ courses. We bring in new courses as soon as the need arises. </p>
                        </div><!-- stat-count -->
                    </div><!-- end col -->

                </div><!-- end row -->
            </div><!-- end container -->
        </section>

        <section class="section">
            <div class="container">
                <div class="section-title text-center">
                    <h3>Testimonials</h3>
                    <p>Over the years of consistent excellence, our students have been given access to the best form of Tertiary Education. Here are some of our alumni's testimonies:</p>
                </div><!-- end title -->

                <div class="row">
                    <div class="col-md-4">
                        <div class="box testimonial">
                            <p class="testiname"><strong><img src="upload/avatar-1.jpg" alt="" class="img-circle"> Aliyu Gideon</strong></p>
                            <p>Attending <b>BlackWoods University</b> was one of the best decisions I ever made. The exceptional professors challenged me academically while supporting my personal growth. The campus community was welcoming and inclusive, providing numerous opportunities to get involved and make lifelong connections. I feel confident and well-prepared for my future career thanks to the top-notch education and resources provided by BlackWoods University</p>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div><!-- end testimonial -->
                    </div><!-- end col -->

                    <div class="col-md-4">
                        <div class="box testimonial">
                            <p class="testiname"><strong><img src="upload/avatar-2.jpg" alt="" class="img-circle"> Deyemi Kudus</strong></p>
                            <p>I couldn't have asked for a better college experience than the one I had at <b>BlackWoods University</b>. The personalized attention from professors allowed me to thrive academically, and the diverse student body enriched my understanding of the world. I gained practical experience through extracurricular activities and internships, and I made lasting friendships that will stay with me long after graduation. I am proud to be an alumnus of BlackWoods and would recommend it to anyone looking for a challenging educational experience.</p>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                        </div><!-- end testimonial -->
                    </div><!-- end col -->

                    <div class="col-md-4">
                        <div class="box testimonial">
                            <p class="testiname"><strong><img src="upload/avatar-3.jpg" alt="" class="img-circle"> Daniel Ajanlekoko</strong></p>
                                <p>I feel incredibly lucky to have attended <b>BlackWoods University</b>. The world-class faculty and rigorous academic programs challenged me to think critically and creatively, while the diverse student body and vibrant campus culture broadened my understanding of different perspectives and cultures. The career services office provided me with invaluable guidance and support as I navigated the job market, and the alumni network has continued to be a valuable resource as I advance in my career. Most importantly, the lifelong friendships and connections I made at BlackWoods University have enriched my life in countless ways. I will always be proud to be a graduate of BlackWoods University.</p>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div><!-- end testimonial -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>

        <section class="section gb">
            <div class="container">
                <div class="section-title text-center">
                    <h3>Recent News</h3>
                    <p>Take a look at our blog.</p>
                </div><!-- end title -->

                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="blog-box">
                            <div class="image-wrap entry">
                                <a href="blog-single.html"><img src="upload/blog-1.jpg" alt="" class="img-responsive"></a>
                                
                            </div><!-- end image-wrap -->

                            <div class="blog-desc">
                                <h4><a href="blog-single.html">BlackWoods sets new policy to protect student's privacy.</a></h4>
                                <p> BlackWoods University has recently introduced a new policy aimed at safeguarding the privacy of its students.</p>
                            </div><!-- end blog-desc -->

                            <div class="post-meta">
                                <ul class="list-inline">
                                    <li><a href="#">14 February 2023</a></li>
                                    <li><a href="#">by Media Unit, COMSIT</a></li>
                                    <li><a href="#">1000 Shares</a></li>
                                </ul>
                            </div><!-- end post-meta -->
                        </div><!-- end blog -->
                    </div><!-- end col -->

                    <div class="col-lg-4 col-md-12">
                        <div class="blog-box">
                            <div class="image-wrap entry">
                                <img src="upload/bw-vc.jpg" alt="" class="img-responsive">
                                
                            </div><!-- end image-wrap -->

                            <div class="blog-desc">
                                <h4><a href="blog-1.html">No 3 Weeks Break for anybody! - BlackWoods VC says</a></h4>
                                <p>BackWoods University Vice Chancellor rejects the governing body's decision to go on a break.</p>
                            </div><!-- end blog-desc -->

                            <div class="post-meta">
                                <ul class="list-inline">
                                    <li><a href="#">10 February 2023</a></li>
                                    <li><a href="#">by Media Unit, COMSIT</a></li>
                                    <li><a href="#">15,000 Shares</a></li>
                                </ul>
                            </div><!-- end post-meta -->
                        </div><!-- end blog -->
                    </div><!-- end col -->

                    <div class="col-lg-4 col-md-12">
                        <div class="blog-box">
                            <div class="image-wrap entry">
                                <img src="upload/pexels-rodnae-productions-6257109.jpg" alt="" class="img-responsive">
                                
                            </div><!-- end image-wrap -->

                            <div class="blog-desc">
                                <h4><a href="blog-single.html">Student Union President, Victor, voices out on recent events.</a></h4>
                                <p>Suspendisse scelerisque ex ac mattis molestie vel enim ut massa placerat faucibus sed ut dui vivamus. </p>
                            </div><!-- end blog-desc -->

                            <div class="post-meta">
                                <ul class="list-inline">
                                    <li><a href="#">05 February 2023</a></li>
                                    <li><a href="#">by Media Unit, COMSIT</a></li>
                                    <li><a href="#">4,400 Shares</a></li>
                                </ul>
                            </div><!-- end post-meta -->
                        </div><!-- end blog -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>

        <section class="section bgcolor1">
            <div class="container">
                <a href="#">
                <div class="row callout">
                    <div class="col-md-4 text-center">
                        <div class="banner-widget">
                            <img src="upload/blog-1b.jpg" alt="" class="img-responsive img-rounded">
                        </div>
                    </div><!-- end col -->

                    <div class="col-md-8">
                        <p class="lead">Interested in being a BlackWoods Student? Apply Now! </p>
                        <p><a href="page-contact.html" class="btn btn-default wow slideInRight">Apply Now</a></p>
                    </div>
                </div><!-- end row -->
                </a>
            </div><!-- end container -->  
        </section>

        <footer class="section footer noover">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="widget clearfix">
                            <h3 class="widget-title">Subscribe Our Newsletter</h3>
                            <div class="newsletter-widget">
                                <p>You can opt out of our newsletters at any time.<br> See our <a href="#">privacy policy</a>.</p>
                                <form class="form-inline" role="search">
                                    <div class="form-1">
                                        <input type="text" class="form-control" placeholder="Enter email here..">
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane-o"></i></button>
                                    </div>
                                </form>
                                <img src="images/payments.png" alt="" class="img-responsive">
                            </div><!-- end newsletter -->
                        </div><!-- end widget -->
                    </div><!-- end col -->

                    <div class="col-lg-3 col-md-3">
                        <div class="widget clearfix">
                            <h3 class="widget-title">Join us today</h3>
                            <p>Would you like to earn your profits by joining our team? Join us without losing time.</p>
                            <a href="#" class="readmore">Became a Teacher</a>
                        </div><!-- end widget -->
                    </div><!-- end col -->

                    <div class="col-lg-3 col-md-3">
                        <div class="widget clearfix">
                            <h3 class="widget-title">Design by Group 4</h3>
                           
                        </div><!-- end widget -->
                    </div>
                    <!-- end col -->

                    <div class="col-lg-2 col-md-2">
                        <div class="widget clearfix">
                            <h3 class="widget-title">Support</h3>
                            <div class="list-widget">   
                                <ul>
                                    <li><a href="#">Terms of Use</a></li>
                                    <li><a href="#">Copyrights</a></li>
                                    <!-- <li><a href="#">Create a Ticket</a></li>
                                    <li><a href="#">Pricing & Plans</a></li> -->
                                    <li><a href="#">Carrier</a></li>
                                    <li><a href="#">Trademark</a></li>
                                </ul>
                            </div><!-- end list-widget -->
                        </div><!-- end widget -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </footer><!-- end footer -->

        <div class="copyrights">
            <div class="container">
                <div class="clearfix">
                    <div class="pull-left">
                        <div class="cop-logo">
                            <a href="#"><img src="images/ilorin.png" alt=""></a>
                        </div>
                    </div>

                    <div class="pull-right">
                        <div class="footer-links">
                            <ul class="list-inline">
                                <li>Design : <a href="#">Group 4</a></li>
                            </ul>
                        </div>
                    </div>

                    
                </div>
            </div><!-- end container -->
        </div><!-- end copy -->
    </div><!-- end wrapper -->

    <!-- jQuery Files -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/carousel.js"></script>
    <script src="js/animate.js"></script>
    <script src="js/index.js"></script>
    <script src="js/custom.js"></script>
    <!-- VIDEO BG PLUGINS -->
    <script src="js/videobg.js"></script>

</body>
</html>