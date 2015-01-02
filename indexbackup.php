<!DOCTYPE html>
<html lang="en" ng-app="samhita">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Samhita</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!--<script src="bower_components/angular/angular.js"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.8/angular.min.js"></script>
    <!--<script src="js/modernizr.js"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

    <!--Events popup-->
    <script>
        $(document).ready(function () {
            $("input#submitform").click(function(){
                $.ajax({
                    type: "POST",
                    url: "process.php", // 
                    data: $('form.contact').serialize(),
                    success: function(msg){
                        $("#thanks").html(msg)
                        $("#form-content").modal('hide');   
                    },
                    error: function(){
                        alert("failure");
                    }
                });
            });
        });
    </script>


	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	
	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	
	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="engine2/style.css" />
	<script type="text/javascript" src="engine2/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section --></head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Samhita'15</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#workshops">Workshops</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#events">Events</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#internships">Internships</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#sponsors">Sponsors</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Register</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact1">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header class="projecttitle bg-striped">
        <div class="container">
            <div class="wowslider">
	<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
	<div id="wowslider-container2">
	<div class="ws_images"><ul>
		<li><img src="data2/images/1.jpg" alt="1" title="1" id="wows2_0"/></li>
		<li><img src="data2/images/2.jpg" alt="2" title="2" id="wows2_1"/></li>
		<li><img src="data2/images/3.jpg" alt="3" title="3" id="wows2_2"/></li>
		<li><a href="http://wowslider.com/vf"><img src="data2/images/4.jpg" alt="full screen slider" title="full screen slider" id="wows2_3"/></a></li>
		<li><img src="data2/images/5.jpg" alt="5" title="5" id="wows2_4"/></li>
	</ul></div>
<span class="wsl"></span>
	<div class="ws_shadow"></div>
	</div>	
	<script type="text/javascript" src="engine2/wowslider.js"></script>
	<script type="text/javascript" src="engine2/script.js"></script>
	<!-- End WOWSlider.com BODY section -->
	<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
	
	<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
	

            </div>
            <div ng-controller="UpdatesController">
                <div id="example" class="example pagespan visible-lg">
                    <div class="scrollbar">
                        <!--<div class="handle" style="transform: translateZ(0px) translateX(644px); width: 296px;">-->
                            <!--<div class="mousearea"></div>-->
                        <!--</div>-->
                    </div>

                    <button class="backward"><span class="glyphicon glyphicon-chevron-left"></span></button>
                    <button class="forward"><span class="glyphicon glyphicon-chevron-right"></span></button>

                    <div class="frame">
                        <ul class="update-slides">
                            <li>
                                <h4>Workshop</h4>
                                    <p class="text-center" ng-hide="updates[0].seatsAvailable">
                                       Registration for Parallel Processing Workshop by LatentView will be opened soon.

                                    </p>
                                
                            </li>
                            <li>
                                <h4>Event</h4>
                                
                                    <p class="text-center" ng-hide="updates[1].seatsAvailable">
                                       Frilp makes your Startup Dream come True.
                                       Event Format Coming Soon...
                                    </p>
                                
                            </li>
                            <li>
                                <h4>Event</h4>
                                
                                    <p class="text-center" ng-hide="updates[2].seatsAvailable">
                                        B-Quiz Conducted by Mr.Ramesh Praba(Chairman,Galaxy Institute of Management)
                                        Event Format Coming Soon...
                                    </p>
                                </div>
                                
                            </li>
                            
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Workshop Section -->
    <section id="workshops">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Workshops</h2>
                    <h3 class="section-subheading text-muted">Great speakers with great topics</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/1.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="workshop-heading">Python workshop</h4>
                                    <h4>By <strong>Mr.Chandrashekar Babu</strong></h4>
                                    <h4 class="subheading">February 6(10 A.M - 4 P.M )</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Learn to program in Python, a powerful language used by sites like YouTube, Dropbox and lots more. In this workshop you will be introduced to Python, a general-purpose, object-oriented interpreted language you can use for countless standalone projects or scripting applications.</p>
                                    <a class="btn btn-success">Coming Soon</a>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/2.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="workshop-heading">Android workshop</h4>
                                    <h4>By <strong>www.hakunamatata.in</strong></h4>
                                    <h4 class="subheading">February 7(10 A.M - 4 P.M )</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Android being free and open source is the most popular mobile OS and has a large developer base.Would you like to join the club? If that's the case you are in the right place.</p>
                                    <a class="btn btn-success">Coming Soon</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/3.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="workshop-heading">Hadooop,NoSQL & related technologies</h4>
                                    <h4>By <strong>Centre for Development of Advanced Computing</strong></h4>
                                    <h4 class="subheading">February 7(10 A.M - 4 P.M )</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Welcome to the future of BIG Data. NOSQL(not-only-sql) is already on its way.Get yourself equipped with these latest data processing technologies.</p>
                                    <a  class="btn btn-success">Coming Soon</a>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/4.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="workshop-heading">Basics in Photoshop</h4>
                                    <h4>By <strong>MADRASTERS</strong></h4>
                                    <h4 class="subheading">February 7(10 A.M - 4 P.M )</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">"There are three responses to a piece of design yes, no, and WOW! Wow is the one to aim for." Become a better designer by joining hands with the best designers in the city.</p>
                                    <a  class="btn btn-success">Coming Soon</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/3.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="workshop-heading">Video analysis for machine vision</h4>
                                    <h4>By <strong>Dr.Dhananjay Kumar,
                                        <br/>Anna University</strong></h4>
                                    <h4 class="subheading">February 6(10 A.M - 4 P.M )</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Video analysis (also Video content analytics, VCA) is the capability of analyzing video automatically to detect and determine temporal and spatial events.It can be seen as the automated equivalent of the biological visual cortex. </p>
                                    <a  class="btn btn-success">Coming Soon</a>
                                </div>
                            </div>
                        </li>
                        <p class="text-center text-yellow visible-lg visible-md">Bored of long lectures and seminars<span class="questions">??</span></p>
                        <li class="timeline-inverted visible-lg visible-md">
                            <a class="page-scroll" href="#events">
                                <div class="timeline-image">
                                    <h4>Try
                                        <br>Our
                                        <br/>Events!
                                    </h4>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Events Section -->
    <section id="events" ng-controller="EventsController">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading events-heading">{{title}}</h2>
                    <h3 class="section-subheading text-muted">
                        <span class="filter btn btn-success" data-filter="all">All</span>
                        <span class="filter btn btn-onsite" data-filter=".category-2">Onsite</span>
                        <span class="filter btn btn-online" data-filter=".category-1">Online</span>
                        <span class="filter btn btn-general" data-filter=".category-3">General</span>
                    </h3>
                </div>
            </div>
            <div id="Container">
                <div class="col-lg-4 mix ssn-shadow category-{{event.category}}" ng-repeat="event in events">
                    <div class="thumbnail">
                        <img ng-src="{{event.imageurl}}" class="img-responsive" alt="..." >
                    </div>
                    <h4 class="text-center">{{event.name}}</h4>
                </div>
            </div>
        </div>
    </section>
    <!--Events popup message-->
    <div id="form-content" class="modal hide fade in" style="display: none;">
            <div class="modal-header">
                <a class="close" data-dismiss="modal">×</a>
                <h3>Send me a message</h3>
            </div>
            <div class="modal-body">
                <form class="contact" name="contact">
                    <label class="label" for="name">Your Name</label><br>
                    <input type="text" name="name" class="input-xlarge"><br>
                    <label class="label" for="email">Your E-mail:</label><br>
                    <input type="email" name="email" class="input-xlarge"><br>
                    <label class="label" for="college">College:</label><br>
                    <input type="text" name="college" class="input-xlarge"><br>
                    <label class="label" for="roll">College Roll No:</label><br>
                    <input type="text" name="rollno" class="input-xlarge"><br>
                    
                </form>
            </div>
            <div class="modal-footer">
                <input class="btn btn-success" type="submit" value="Register" id="submit">
                <a href="#" class="btn" data-dismiss="modal">Cancel</a>
            </div>
        </div>


        
      <!-- Internships Section -->
    <section id="internships" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Internship</h2>
                    <h3 class="section-subheading text-muted">First step in achieving your career</h3>
                </div>
            </div>
            
            
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member">
                       <a href="http://www.zoho.com"> <img src="img/zoho1.jpg" class="img-responsive img-circle" alt=""></a>
                        <h4>ZOHO</h4>
                        <p class="text-muted">Smart software for growing businesses
Focus on what really matters, while our apps do everything you need.</p>
                       
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                      <a href="http://linkstreet.in"> <img src="img/street.jpg" class="img-responsive img-circle" alt=""></a>
                        <h4>Linkstreet</h4>
                        <p class="text-muted">Manage Your Knowledge<br> with limitless Learning</p>
                       
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <a href="http://www.studiossingularity.com"><img src="img/singularity.jpg" class="img-responsive img-circle" alt=""></a>
                        <h4>Singularity Studios</h4>
                        <p class="text-muted">Where minds become matter<br>
Where dreams become reality<br>
Where the impossible becomes the inevitable</p>
                       
                    </div>
                </div>
                
                
                <div class="col-sm-4">
                    <div class="team-member">
                       <a href="http://globalsinc.com"> <img src="img/globalinc.jpg" class="img-responsive img-circle" alt=""></a>
                        <h4>Globals Inc.</h4>
                        <p class="text-muted">Globals has a significant domain expertise in Education Industry,book-apple that changes the way Education Institutions is managed.</p>
                       
                    </div>
                </div>
            </div>
            
            
            
            
        
        
        </div>
        
    </section>

    <!-- Sponsors Section -->
    <section id="sponsors" class="bg-light-gray" ng-controller="SponsorsController">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading events-heading">Our Sponsors</h2>
                    <h3 class="section-subheading text-muted events-heading">People who make this event a success</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6" ng-repeat="sponsor in sponsors">
                    <div class="team-member">
                        <img ng-src="{{sponsor.imageurl}}" class="img-responsive" alt="">
                        <!--<p class="text-muted">{{sponsor.location}}</p>-->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact section -->
    <section id="contact" class="bg-striped">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Register</h2>
                    <h3 class="section-subheading text-muted">Get Your Pass to the Arena!</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <center>
                    <?php

                        if (isset($_SESSION['user_id'])) {
                            echo "<span><center><img src='".$_SESSION['profile_pic_url']."' ></center></span>";
                            echo "<span>Hi ".$_SESSION['name']." ( <a href='logout.php' >Log out</a>)</span><br>";
                            echo $_SESSION['email'];
                        }
                        else {
                            if ( isset($_GET['error_code'] ) && $_GET['error_code'] == 1 ) {
                            echo "<p>Oops!! Something went wrong. Please try again</p>";
                            }
                            echo "<a href='login.php'><img src='login_with_facebook.png' width='150' height='35' alt='Sign in with Facebook'/></a>";
                        }
                    ?>
                </center>
                    <center><h2 class="section-subheading text-muted">OR</h3></center>
                    <br>
                    <center>
                    <form action="registerprocess.php" name="sentMessage" id="contactForm"  method="POST">
                                
                                <div class="form-group">

                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your College" id="college" required data-validation-required-message="Please enter your college name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <center><input type="submit" value="Submit"></submit></center>
                       
                    </form>

                    </center>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-lg-12 text-center" id="contact1">
                        <h2 class="section-heading">GET IN TOUCH</h2>
                        <h3 class="section-subheading text-muted">Reach to the Coordinators</h3>
                        <h4 class="section-heading">Narayanan U</h4>
                        <h5 class="section-subheading text-muted">Chairman, ITA</h5>
                        <h5 class="section-subheading text-muted">+91-9489002732</h5>
                        <h5 class="section-subheading text-muted">chairmanita@mitindia.edu</h5>
                        <br>
                        <br>
                        <br>
                        <br>
                        <h4 class="section-heading">Vidhyashankar M</h4>
                        <h5 class="section-subheading text-muted">Secretary, ITA</h5>
                        <h5 class="section-subheading text-muted">+91-7401393801</h5>
                        <h5 class="section-subheading text-muted">secretaryita@mitindia.edu</h5>



                    </div>

                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Samhita'15</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="http://www.facebook.com/samhitamit"><i class="fa fa-facebook"></i></a>
                        </li>
                    </ul>
                </div>
                
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <!--<script src="js/jquery.js"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/jquery.mixitup.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Sly Scroll bar -->
    <script src="js/sly.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/main.js"></script>
    <script src="js/agency.js"></script>

</body>

</html>
