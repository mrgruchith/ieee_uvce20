<?php include('server.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" type="image/x-icon" sizes="192x192"  href="images/ieee1.ico">
        <title>IEEE UVCE</title>
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    
        <link rel="stylesheet" href="css/bootstrap.css">
         <link rel="stylesheet" href="css/lap.css">
         <link rel="stylesheet" href="css/mobile.css">
         <link rel="stylesheet" href="css2.css">
         <link rel="stylesheet" href="css/css.css">
         
        <script src="js/wow.min.js"></script>
        <link rel="stylesheet" href="css/wow.css">
        <script src="js/smoothscroll.js"></script>
        <script src="googlepay.js"></script>
        
    </head>

    <body>
        

        <div class="front-page">
            <div class="intro">
                <h1 class="ml1">
                        <span class="text-wrapper">
                          <span class="line line1"></span>
                          <span class="letters" style="font-size:12vw;">IEEE UVCE</span>
                          <span class="line line2"></span>
                        </span>
                      </h1>
                    
            <div class="svg-wrapper">
                    <svg height="60" width="320" xmlns="http://www.w3.org/2000/svg">
                        <rect class="shape" height="60" width="320" />
                    </svg>
                    <div class="text">Dive In</div>
                </div>
            </div> 
        </div>
           

        <!-------navbar------------------->
       
        <nav class="navbar navbar-default navbar-fixed-top" id="topnav">
        <div class="navbar1 container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <img src="images/ieeewhite.png">
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li active><a href="#" class="smoothScroll">Home</a></li>
                <li ><a href="#fest-box">Fests</a></li>
                <li ><a href="#foot">Contacts</a></li>
                <li ><a href="#awards-box" >Awards</a></li>
                <li><a href="#" onclick="membersAppear()" >Team</a></li>
                <li><a href="#" onclick="galleryon()" >Gallery</a></li>
                <li ><a href="https://docs.google.com/forms/d/e/1FAIpQLSdt20fOfaw5FY0DKVhBp6WdOCOLhPQhR1TmRH6o1bdlBaGKOw/viewform?usp=sf_link" target="_blank">Events Register</a></li>
                <li ><a href="#" onclick="formAppear()">Login</a></li>
            </ul>
          </div>
        </div>
      </nav>


      <!---------------------cover image------------------>
      <div id="ieeeimage">
          
            <div class="container">
                    
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                      <!-- Indicators -->
                      <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                        <li data-target="#myCarousel" data-slide-to="4"></li>
                      </ol>
                  
                      <!-- Wrapper for slides -->
                      <div class="carousel-inner">
                        <div class="item active">
                          <img src="images/cover_back.jpg" alt="kjbsdcjsdhcj" style="height:auto-content;"> 

                        </div>
                        <div class="item ">
                            <img src="images/c1.jpg" alt="kjbsdcjsdhcj" style="height:auto-content;"> 
  
                          </div>
                  
                        <div class="item">
                          <img src="images/c2.jpg" alt="sdcdsvcsdfvd" style="height:auto-content;"> 
                        </div>
                        
                        <div class="item">
                            <img src="images/c3.jpg" alt="sdcdsvcsdfvd" style="height:auto-content;"> 
                        </div>
                      
                        <div class="item">
                          <img src="images/c4.jpg" alt="sdcsdcvsdfvsefv" style="height:auto-content;">
                        </div>
                      </div>
                  
                      <!-- Left and right controls -->
                      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                  </div>
                  
            <div class="ieee-content">
                <h1 class="ieee-title wow slideInRight" data-wow-duration="2s" data-wow-delay="0s">IEEE UVCE</h1>
                <hr>
                <p class="content1 wow slideInUp" data-wow-duration="2s" data-wow-delay="0s">IEEE Student Branch of UVCE endeavors to enhance the 
                    learning experience of the student community on the UVCE campus. 
                    The Student Branch intends on providing different social, cultural and technical events for the students throughout the year. 
                    We encourage the students to take full advantage of the benefits of IEEE membership, including scholarships, competitions, 
                    and conference grants. The Student Branch also emphasizes the students to work with peers in other institutes, academicians, 
                    professionals, engineers, and scientists through the on campus IEEE Student Branch and the Local IEEE Section, thereby 
                    encouraging students to be a part of the global IEEE community.</p>
            </div>
        </div>


        
        <!-------------------recent----------------->
        <div  id="recent-activities">
                <div class="main-title"><h1>FLAGSHIP EVENTS</h1>
                    <span></span><i class="fa fa-flag" aria-hidden="true"></i><span></span>
                </div>
                        <div class="recent">
                <div class="recent-img"><div class="wow slideInLeft"><img src="images/ieeebanner1.jpg" width="100%"></div></div>
                       <div class="recent-list">
                        <a class="wow lightSpeedIn" data-wow-duration="2s" data-wow-delay="0s" href="kagada.html">KAGADA 2019</a>
                        <a class="wow lightSpeedIn" data-wow-duration="2s" data-wow-delay="0s" href="codefury2.html">CODEFURY 2.0</a>
                        <a class="wow lightSpeedIn" data-wow-duration="2s" data-wow-delay="0s" href="http://www.impetus20.com">IMPETUS 20.0</a>
                        <a class="wow lightSpeedIn" data-wow-duration="2s" data-wow-delay="0s" href="https://www.facebook.com/118703741475408/posts/2199102803435481/">Project Run </a>
                    </div>
                    </div>
                </div>
            </div>
            <div id="container1"></div>
<script async
  src="https://pay.google.com/gp/p/js/pay.js"
  onload="onGooglePayLoaded()"></script>
        </div>

        <!------------------sigs----------------------------->
        <div id="sig-box">

                <div class="main-title "><h1>SIG's</h1>
                    <span></span><i class="fa fa-object-group" aria-hidden="true"></i><span></span>
                </div>
                <div class="sig">
                    <div class="sig-image img-wie wow bounceIn animated" data-wow-delay="1.0s" style="visibility: visible; animation-delay: 0.4s; animation-name: bounceIn;">
                        <div class="title"><h1>WIE</h1></div>
                        <div class="s-descrip">
                                The socitety was inaugurated
                                with a panel discussion by
                                eminent women professionals
                                from the technical field. IEEE
                                WIE aims at  aiding female
                                student discover their
                                strengths and weaknesses. It
                                works towards shaping their
                                skills so they grow to  be at
                                Great positions in whichever
                                organisations/ field they join in the future.
                        </div>
                    </div>
                    <div class="sig-image img-cs wow bounceIn animated" data-wow-delay="1.0s" style="visibility: visible; animation-delay: 0.4s; animation-name: bounceIn;">
                        <div class="title"><h1>COMPUTER SOCIETY</h1></div>
                        <div class="s-descrip">
                                Computer Society started
                                in the year 2016. This society is for 
                                all students interested in computers and 
                                studying from 1st year to the final year. It
                                conducts a monthly coding
                                contest called Ncode  along with
                                Workshops on
                                C,
                                Python,
                                Android and many others
                                mainly aimed at making the
                                students up to date with the trending
                                technologies.
                        </div>
                    </div>
                    <div class="sig-image img-pes  wow bounceIn animated" data-wow-delay="1.0s" style="visibility: visible; animation-delay: 0.4s; animation-name: bounceIn;">
                        <div class="title"><h1>PES</h1></div>
                        <div class="s-descrip">
                                Power and Energy Society, a
                                new society under IEEE UVCE
                                which mainly concentrates
                                on development of technical skills 
                                of the students of UVCE in
                                electrical and electronics
                                domain.  PES has conducted
                                technical
                                talks,
                                monthly
                                competitions and various other
                                events in our college.
                        </div>
                    </div>
                    <div class="sig-image img-art wow bounceIn animated" data-wow-delay="1.0s" style="visibility: visible; animation-delay: 0.4s; animation-name: bounceIn;">
                        <div class="title"><h1>ART FORUM</h1></div>
                        <div class="s-descrip">
                                Art Forum is an SIG that started in
                                2011 dedicated entirely to
                                artists. Digital art, craft making,
                                decoupage and up cycling are
                                all supported. Various contests
                                like doodle making, mask
                                making are conducted for the
                                students by this SIG.  This SIG takes care of the decoration for all the events conducted by IEEE UVCE.
                        </div>
                    </div>
                    <div class="sig-image img-avishkar wow bounceIn animated" data-wow-delay="1.0s" style="visibility: visible; animation-delay: 0.4s; animation-name: bounceIn;">
                        <div class="title"><h1>AVISHKAR</h1></div>
                        <div class="s-descrip">
                                Avishkar (Sanskrit term for
                                <b>innovation</b>), the guiding
                                beacon for enlightened minds, is
                                an elite research group of IEEE
                                UVCE. It has been a palatine
                                to encourage, inspire and
                                innovate. The beginning of
                                Avishkar was synonymous to
                                the beginning of IEEE UVCE.
                        </div>
                    </div>
                    <div class="sig-image img-web  wow bounceIn animated" data-wow-delay="1.0s" style="visibility: visible; animation-delay: 0.4s; animation-name: bounceIn;">
                        <div class="title"><h1>WEB DEVELOPMENT</h1></div>
                        <div class="s-descrip">
                            The web design SIG was started in April 2017. This is the web tweaking pavilion of IEEE UVCE. Web team specializes in conducting
                            all the web related competitions and workshops for IEEE UVCE. Workshops on HTML and CSS and contests on website front end
                            designing have been conducted.
                        </div>
                    </div>
                    <div class="sig-image img-robotics wow bounceIn animated" data-wow-delay="1.0s" style="visibility: visible; animation-delay: 0.4s; animation-name: bounceIn;">
                        <div class="title"><h1>YANTRIK</h1></div>
                        <div class="s-descrip">
                                The Yantrik Club started
                                in the year 2009. The formation
                                of this club seemed inevitable
                                since no aspect of life is
                                untouched by automated
                                machines in some form. The
                                aim of the Robotics Club is to
                                provide sufficient training to
                                students by conducting
                                workshops to undertake basic
                                to complex robotics projects.
                        </div>
                    </div>
                    <div class="sig-image img-design wow bounceIn animated" data-wow-delay="1.0s" style="visibility: visible; animation-delay: 0.4s; animation-name: bounceIn;">
                        <div class="title"><h1>DESIGN</h1></div>
                        <div class="s-descrip">
                                The design SIG started in
                                April, 2017. The design team of
                                IEEE UVCE consists of Graphic
                                designers who design and
                                conduct workshops on Adobe
                                Illustrator and Photoshop. This
                                SIG gives opportunities to the
                                students to be a part of the
                                design team for various events
                                conducted by IEEE UVCE.
                        </div>
                    </div>
                    <div class="sig-image img-literary wow bounceIn animated" data-wow-delay="1.0s" style="visibility: visible; animation-delay: 0.4s; animation-name: bounceIn;">
                        <div class="title"><h1>LITERARY</h1></div>
                        <div class="s-descrip">
                                The literary SIG started in
                                2018.
                                With the
                                motto
                                of
                                harnessing the linguistic skills
                                of
                                students,
                                it
                                conducts
                                activities
                                to
                                develop
                                communication and creative
                                writing abilities of the students.
                                This club helps to enhance the
                                students to
                                communicate their ideas and
                                innovations in a clear and efficient way.
                        </div>
                    </div>
                    <div class="sig-image img-sight wow bounceIn animated" data-wow-delay="1.0" style="visibility: visible; animation-delay: 0.4s; animation-name: bounceIn;">
                        <div class="title"><h1>SIGHT</h1></div>
                        <div class="s-descrip">
                        SIGHT(Special Interest Group for Humanitarian Technology) is an ensemble in IEEE that focuses on projects that are beneficial to the society. It gives enthusiastic groups  of engineers a platform to reach out to different sectors of people in different walks of life, thereby changing lives one at a time towards their better future by solving their everyday problems by providing a technology based solution.
                        </div>
                    </div>
                    
                
                </div>
            </div>

            

            <!----------------------fests---------------->
            <div id="fest-box" >
                    <div class="main-title"><h1>FESTS</h1> 
                        <span></span><i class="fa fa-star" aria-hidden="true"></i><span></span>
                    </div>
                    <div class="fests">
                    <div class="fest-image wow fadeInRightBig">  
                        <!-- <div class="bg-image img3"></div> -->
                        <img src="images/impetus.jpg" alt="" style="width: 100%;">
                        <ul class="description">
                            <li><a href = "http://www.impetus20.com">Impetus</a> is an Annual National level technical fest conducted by IEEE UVCE.</li>
                            <li>The fest is preceded by curtain raisers which include workshops, seminars and fun events.</li>
                            <li> It is based on different innovative themes every year and sees a footfall of about 1000 students from all over the state.</li>
                            <li>About 20 events are conducted among which Summit, Mock placements, Lazer Tag and Codestorm attract most crowd.</li>
                        </ul>
                    </div>
                    <div class="fest-image wow fadeInLeftBig">
                        <!-- <div class="bg-image img2"></div> -->
                        <img src="images/Kagada19.jpg" alt="" style="width: 100%;">
                        <ul class="description">
                            <li><a href="kagada.html">KAGADA</a> is the Annual National level Technical Paper Presentation competition organized by IEEE UVCE.</li>
                            <li>Categories for Paper Presentation: UG/PG and WIE.</li>
                            <li>In addition to Paper presentation, Project and Poster presentation contests are also conducted.</li>
                            <li>'Ottige Kaliyona' - An initiative for government school children is also organised.</li>
                        </ul>
                    </div>
                </div>
            </div>

<div class="some-links">
        <div class = "wow slideInLeft">
                <div class="main-title"><h1>Quick Links</h1>
                <span></span><i class="fa fa-link" aria-hidden="true"></i><span></span>
            </div>
                <br>
                <p>
                    <a href="https://wieconece.org/" target = "_blank"o>WIECON 2019</a> &nbsp;|&nbsp;
                    <a href="https://ieeextreme.org/" target = "_blank"o>IEEE XTREME</a> &nbsp;|&nbsp;
                    <a href="https://spectrum.ieee.org/" target = "_blank"o>IEEE Spectrum</a> <br>
                    <a href="https://ieeexplore.ieee.org/" target = "_blank"o>IEEE Xplore</a>&nbsp;|&nbsp;
                    <a href="https://ieee-collabratec.ieee.org/" target = "_blank"o>IEEE Collabratec</a>&nbsp;|&nbsp;
                    <a href="https://www.ieee.org/about/news/index.html" target = "_blank"o>IEEE Newsroom</a>  <br>
                    <a href="https://www.standardsuniversity.org/" target = "_blank"o>IEEE Standards University</a> &nbsp;|&nbsp;
                    <a href="https://www.ieee.org/education/certificates/index.html" target = "_blank"o>IEEE Certificates Program</a> &nbsp;|&nbsp;
                    <a href="https://www.computer.org/" target = "_blank"o>Computer Society</a>  <br>
                    <a href="https://www.ieeer10.org/" target = "_blank"> Region 10 </a> &nbsp;|  &nbsp;
                    <a href="https://sites.ieee.org/indiacouncil/" target = "_blank"> India Council </a> &nbsp;|  &nbsp;
                    <a href="https://ieeebangalore.org" target = "_blank"> Bangalore Section </a>
                </p>
            
</div>
</div>

 <!--Awards and recognition-->
<div id="awards-box" class="awards-recognition"> 
        <div class="main-title"><h1>Awards and Recognition</h1> 
            <span></span><i class="fa fa-trophy" aria-hidden="true"></i><span></span>
        </div>
        <img src="images/ieeeawards.jpg" width="100%;" height="fitcontent;">
</div>       

<!-------------------------------------------------->
 <!-----staffff-->

 <div class="staff" id="teachers">
        <div class="main-title"><h1>FACULTY</h1>
            <span></span><i class="fa fa-users" aria-hidden="true"></i><span></span>
       </div>
        <div class="staff-madam">
            <div class="person wow zoomInLeft" data-wow-duration="0.4s">
                <img src="images/img/pds1.jpg">
                    <h1>Dr. P Deepa Shenoy</h1>
                    <p class="portpolio">Branch Advisor</p>
            </div>
        </div>

        <div class="others">
        
            <div class="person  wow zoomInRight " data-wow-duration="0.4s">
                <img src="images/staff/venugopal.png">
                <div class="details">
                    <h1 class="name">Dr. Venugopal K R</h1>
                    <h2 class="portpolio">Branch Patron</h2>
                </div>
            </div>

        <div class="person wow zoomInRight" data-wow-duration="0.6s">
                <img src="images/staff/kiran.png" >
                <div class="details">
                    <h1 class="name">Dr. Kiran K</h1>
                    <h2 class="portpolio">Branch Counselor</h2>
                </div>
            </div>
        <div class="person wow zoomInRight" data-wow-duration="0.8s">
            <img src="images/staff/pushpa.png">
            <div class="details">
                <h1 class="name">Dr. Pushpa C N</h1>
                <h2 class="portpolio">WIE Mentor</h2>
            </div>
        </div>
        <div class="person wow zoomInRight" data-wow-duration="1.0s">
            <img src="images/staff/veena.png">
            <div class="details">   
                <h1 class="name">Prof. H S Veena</h1>
                <h2 class="portpolio">PES Advisor</h2>
            </div>
        </div>
        <div class="person wow zoomInRight" data-wow-duration="1.2s">
            <img src="images/staff/latha.png">
            <div class="details">
                <h1 class="name">Dr. Lata B T</h1>
                <h2 class="portpolio">Branch Mentor</h2>
            </div>
        </div>
        <div class="person wow zoomInRight" data-wow-duration="1.4s">
            <img src="images/staff/venkatesh.png">
            <div class="details">
                <h1 class="name">Dr. Venkatesh M</h1>
                <h2 class="portpolio">Branch Mentor</h2>
            </div>
        </div>
    </div>
    </div>

     <!------------------------------------------------------------>
     <!-- <div class="gallery">
                
            <div>
                <i class="fa fa-picture-o" style="color: turquoise; font-size: 200px;" onclick="galleryon()"></i>
                <p class="main-title">Gallery</p>
            </div>
            <div>
                <i class="fa fa-group " style="color: turquoise; font-size: 200px;" onclick="membersAppear()"></i>
                <p class="main-title">Team</p>
            </div>
            
        </div> -->
        
        <div id="gallerydisplay">
                <i class="fa fa-times fa-4x off" aria-hidden="true" style="color: white;" onclick="galleryoff()"></i>
                <div class="gallery-images">
                <div class="col">
                    <img src="images/gallery/5.jpg" class="wow bounceIn animated">
                    <img src="images/gallery/2.jpg" class="wow bounceIn animated">
                    <img src="images/gallery/3.jpg" class="wow bounceIn animated">
                    <img src="images/gallery/4.jpg" class="wow bounceIn animated">
                    <img src="images/gallery/29.jpg" class="wow bounceIn animated">
                    <img src="images/gallery/6.jpg" class="wow bounceIn animated">
                </div>
                <div class="col">
                    <img src="images/gallery/7.jpg" class="wow bounceIn animated">
                    <img src="images/gallery/8.jpg" class="wow bounceIn animated">
                    <img src="images/gallery/9.jpg" class="wow bounceIn animated">
                    <img src="images/gallery/10.jpg" class="wow bounceIn animated">
                    <img src="images/gallery/11.jpg" class="wow bounceIn animated">
                    <img src="images/gallery/12.jpg" class="wow bounceIn animated">
                </div>
                <div class="col">
                    <img src="images/gallery/13.jpg" class="wow bounceIn animated">
                    <img src="images/gallery/14.jpg" class="wow bounceIn animated">
                    <img src="images/gallery/15.jpg" class="wow bounceIn animated">
                    <img src="images/gallery/16.jpg" class="wow bounceIn animated">
                    <img src="images/gallery/17.jpg" class="wow bounceIn animated">
                    <img src="images/gallery/18.jpg" class="wow bounceIn animated">
                </div>
                <div class="col">
                    <img src="images/gallery/19.jpg" class="wow bounceIn animated">
                    <img src="images/gallery/20.jpg" class="wow bounceIn animated">
                    <img src="images/gallery/21.jpg" class="wow bounceIn animated">
                    <img src="images/gallery/22.jpg" class="wow bounceIn animated">
                    <img src="images/gallery/23.jpg" class="wow bounceIn animated">
                    <img src="images/gallery/24.jpg" class="wow bounceIn animated">
                </div>
                </div>
        </div>

        
<!-- ----------------------------------------------------------------------------------------- -->

<div class="form1" id="forms">
    <div style="width: 100%; justify-content:center;" >
        <i class="fa fa-times fa-4x " aria-hidden="true" style="color: white; width:100%;padding:10px;" onclick="formHide()"></i>
    </div>
    <div class="header">
        <h2>Login</h2>
    </div>
       
    <form method="post" action="indexmain.php/login">
        <?php include('errors.php'); ?>
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username" >
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password">
        </div>
        <div class="input-group">
            <button type="submit" class="btn" name="login_user">Login</button>
        </div>
        <!-- <p>
            Not yet a member? <a href="register.php">Sign up</a>
        </p> -->
     <!-- <a href="forgotpassword.php">Forgot Your Password</a> -->
    </form>
  </div>
  
<!-- -------------------------------------------------------------------------------------------------- -->

   <!------------------------------------------->
    <div class="contact" id="foot">
            <div class="alignEnd">
                <div class = "wow slideInLeft">
                    <h2>Useful Links</h2>
                    <br>
                    <p>
                        <a href="https://www.ieee.org" target = "_blank"o>IEEE</a> &nbsp;|&nbsp;
                        <!-- <a href="https://wieconece.org/" target = "_blank"o>WIE</a> &nbsp;|&nbsp;
                        <a href="https://ieeextreme.org/" target = "_blank"o>IEEE XTREME</a> <br>
                        <a href="https://spectrum.ieee.org/" target = "_blank"o>IEEE Spectrum</a> &nbsp;|&nbsp;
                        <a href="https://www.computer.org/" target = "_blank"o>Computer Society</a> &nbsp;|&nbsp; -->
                        <a href="https://www.ieeer10.org/" target = "_blank"> Region 10 </a> &nbsp;|&nbsp;
                        <a href="https://ieeebangalore.org" target = "_blank"> Bangalore Section </a>
                    </p>
                    <p><a href="https://uvce.ac.in/" target = "_blank">University Visvesvaraya College of Engineering</a></p>
                </div>
                <div class = "wow slideInRight">
                    <h2>Contact Us</h2>
                    <br>
                    <p>
                        <a href="mailto:mahith.98@gmail.com " target="_blank">
                            <i class="fa fa-envelope"> </i> Mahith Shetty
                        </a>
                        <br>
                        <a>Phone : +91 9845207684</a>
                    </p>
                    <p>
                    <a href="https://goo.gl/maps/P43RC7Qphrq" target="_blank">
                        <i class="fa fa-map-marker"></i> UVCE, K.R Circle, B.R Ambedkar Veedhi, Bengaluru
                    </a>
                    </p>
                    <br>
                </div>
            </div>
            <br>

            <div class="icon-arrange">
                <a href="https://www.facebook.com/ieeeuvce/" data-toggle="tooltip" title="Facebook">
                    <i class="fa fa-facebook icon wow fadeInUpBig" data-wow-duration="0.3s"></i>
                </a>
                <a href="https://twitter.com/ieeeuvce" data-toggle="tooltip" title="Twitter">
                    <i class="fa fa-twitter icon wow fadeInUpBig" data-wow-duration="0.4s"></i>
                </a>
                <a href="https://www.instagram.com/ieeeuvce/" data-toggle="tooltip" title="Instagram">
                    <i class="fa fa-instagram icon wow fadeInUpBig" data-wow-duration="0.5s"></i>
                </a>
                <a href="https://www.linkedin.com/in/ieee-uvce-66563332/?trk=public-profile-join-page" data-toggle="tooltip" title="LinkedIn">
                    <i class="fa fa-linkedin-square icon wow fadeInUpBig" data-wow-duration="0.6s"></i>
                </a>
            </div>
            <br>
            <p style="color: white">
                <a href="mailto:ruchithgauravmrg@gmail.com" target = "_blank">
                    <i class="fa fa-user"></i> <u>Web Administrator: Ruchith Gaurav K M</u></a>
            </p>
            <br>
        </div>
    

    </div>

   
        <!--------------------------------------------------->
        <div id="members">
                <div id="execom">

                    <i class="fa fa-times fa-4x " aria-hidden="true" style="color: white; left:0%;" onclick="membersHide()"></i>
                    <!-- <i class="close fa fa-times fa-4x" style="color: white;"  alt="" onclick="membersHide()"> -->

                    <div>
                        <h2 class="blue1">Executive Committee 2019 - 20</h2>
                        <div class="line-down"></div>
    
                        <!--Main Body-->
                        <br>
                        <div class="title-color">Core Members</div>
                        <div class="members1">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>Mahith Shetty</td>
                                        <td>Chairperson</td>
                                        <td>Fourth Year</td>
                                    </tr>
                                    <tr>
                                        <td>Keerthana A</td>
                                        <td>Vice-Chairperson</td>
                                        <td>Fourth Year</td>
                                    </tr>
                                    <tr>
                                        <td>Raja Mahapatra</td>
                                        <td>Vice-Chairperson</td>
                                        <td>Fourth Year</td>
                                    </tr>
                                    <tr>
                                        <td>Akash Gowda</td>
                                        <td>Vice-Chairperson</td>
                                        <td>Fourth Year</td>
                                    </tr>
                                    <tr>
                                        <td>Gayathri S</td>
                                        <td>Treasurer</td>
                                        <td>Fourth Year</td>
                                    </tr>
                                    <tr>
                                        <td>Rajath R L</td>
                                        <td>Joint Treasurer</td>
                                        <td>Third Year</td>
                                    </tr>
                                    <tr>
                                        <td>Kennith O Koshy</td>
                                        <td>General Secretary</td>
                                        <td>Third Year</td>
                                    </tr>
                                    <tr>
                                        <td>Hamsa Shree N A</td>
                                        <td>Joint Secretary</td>
                                        <td>Third Year</td>
                                    </tr>
                                    <tr>
                                        <td>Vishal M Kanthi</td>
                                        <td>Joint Secretary</td>
                                        <td>Third Year</td>
                                    </tr>
                                    <tr>
                                        <td>Niveditha G</td>
                                        <td>Membership Incharge</td>
                                        <td>Third Year</td>
                                    </tr>
                                    <tr>
                                        <td>Shubham Sahoo</td>
                                        <td>Membership Incharge</td>
                                        <td>Third Year</td>
                                    </tr>
                                    <tr>
                                        <td>Harshitha M</td>
                                        <td>SAC Coordinator</td>
                                        <td>Fourth Year</td>
                                    </tr>
                                    <tr>
                                        <td>Vijay Kumar M S</td>
                                        <td>SAC Coordinator</td>
                                        <td>Fourth Year</td>
                                    </tr>
                                    </tr>
                               
                                
                                    <tr>
                                        <th colspan="3" class="title-color">Women In Engineering</th>
                                    </tr>
                                <tr>
                                    <td>Darshan S</td>
                                    <td>Chairperson</td>
                                    <td>Fourth Year</td>
    
                                </tr>
                                <tr>
                                    <td>Seema M</td>
                                    <td>Vice-Chairperson</td>
                                    <td>Fourth Year</td>
                                </tr>
                                <tr>
                                    <td>Mahima Pradeep</td>
                                    <td>General Secretary</td>
                                    <td>Third Year</td>
                                </tr>
                                <tr>
                                    <td>Supriya V Kurpad</td>
                                    <td>Joint Secretary</td>
                                    <td>Third Year</td>
                                </tr>
    
                    <!-- Computer Society -->
                                <tr>
                                    <th colspan="3" class="title-color">Computer Society</th>
                                </tr>
                                <tr>
                                    <td>Venkatesh Belavadi</td>
                                    <td>Chairperson</td>
                                    <td>Fourth Year</td>
                                </tr>
                                <tr>
                                    <td>Anaghesh M</td>
                                    <td>Vice-Chairperson</td>
                                    <td>Fourth Year</td>
                                </tr>
                                <tr>
                                    <td>Jerry Allan Akshay</td>
                                    <td>Vice-Chairperson</td>
                                    <td>Fourth Year</td>
                                </tr>
                                <tr>
                                    <td>Sriram K K</td>
                                    <td>General Secretary</td>
                                    <td>Third Year</td>
                                </tr>
                                <tr>
                                    <td>Charan M K</td>
                                    <td>Joint Secretary</td>
                                    <td>Third Year</td>
                                </tr>
                                <tr>
                                    <td>Pooja Hegde</td>
                                    <td>Joint Secretary</td>
                                    <td>Third Year</td>
                                </tr>
                                <tr>
                                    <td>Nayana Sajji</td>
                                    <td>NCode Lead</td>
                                    <td>Third Year</td>
                                </tr>


                                <tr>
                                    <th colspan="3" class="title-color">Power and Energy Society</th>
                                </tr>
                                <tr>
                                    <td>Nisarga Ashok</td>
                                    <td>Chairperson</td>
                                    <td>Fourth Year</td>
                                </tr>
                                <tr>
                                    <td>Anushree H</td>
                                    <td>Vice-Chairperson</td>
                                    <td>Fourth Year</td>
                                </tr>
                                <tr>
                                    <td>Sneha N</td>
                                    <td>General Secretary</td>
                                    <td>Third Year</td>
                                </tr>


                                
                                <tr>
                                    <th colspan="3" class="title-color">Special Interest Groups</th>
                                </tr>
                               <tr>
                                    <td>Dinashree Dinesh</td>
                                    <td>Art Forum</td>
                                    <td>Fourth Year</td>
                                </tr>
                                <tr>
                                    <td>Shabana K C</td>
                                    <td>Art Forum</td>
                                    <td>Fourth Year</td>
                                </tr>
                                <tr>
                                    <td>Aditya Shetty</td>
                                    <td>Art Forum</td>
                                    <td>Third Year</td>
                                </tr>
                                <tr>
                                    <td>Gokul Krishnan S</td>
                                    <td>Art Forum</td>
                                    <td>Third Year</td>
                                </tr>
                                
                                <tr>
                                    <td>Naveen Kumar</td>
                                    <td>Avishkar</td>
                                    <td>Fourth Year</td>
                                </tr>
                                <tr>
                                    <td>Harish Ramesh</td>
                                    <td>Avishkar</td>
                                    <td>Third Year</td>
                                </tr>
                                <tr>
                                    <td>Srinivas K</td>
                                    <td>Avishkar</td>
                                    <td>Third Year</td>
                                </tr>
                                <tr>
                                    <td>Soumya S</td>
                                    <td>Web Development</td>
                                    <td>Fourth Year</td>
                                </tr>
                                <tr>
                                    <td>Ruchith Gaurav K M</td>
                                    <td>Web Development</td>
                                    <td>Third Year</td>
                                </tr>
                                <tr>
                                    <td>Manoj Kumar A</td>
                                    <td>Web Development</td>
                                    <td>Third Year</td>
                                </tr>
                                <tr>
                                    <td>Sandhya Shree N</td>
                                    <td>Graphic Design</td>
                                    <td>Third Year</td>
                                </tr>
                                <tr>
                                    <td>Venkateshprasad</td>
                                    <td>Robotics</td>
                                    <td>Third Year</td>
                                </tr>
                                <tr>
                                    <td>Smruthi L</td>
                                    <td>TISP and STAR</td>
                                    <td>Fourth Year</td>
                                </tr>
                                <tr>
                                    <td>Harshitha B R</td>
                                    <td>TISP and STAR</td>
                                    <td>Third Year</td>
                                </tr>
                                <tr>
                                    <td>Honavar Sanyukta</td>
                                    <td>Literary Club</td>
                                    <td>Third Year</td>
                                </tr>
                                <tr>
                                    <td>Sanjana Ramesh</td>
                                    <td>Literary Club</td>
                                    <td>Third Year</td>
                                </tr>
                                <tr>
                                    <td>Sunkeerth M</td>
                                    <td>Literary Club</td>
                                    <td>Third Year</td>
                                </tr>
    


                                <tr>
                                    <th colspan="3" class="blue1">Representative Committee 2019 - 20</th>
                                </tr>
                                <tr>
                                    <th colspan="3" class="title-color">RepCom Members</th>
                                </tr>
                                <tr>
                                    <td>Anam Ali</td>
                                    <td>CSE</td>
                                    <td>Second Year</td>
                                </tr>
                                <tr>
                                    <td>Munnoli Sammed Jaykumar</td>
                                    <td>CSE</td>
                                    <td>Second Year</td>
                                </tr>
                                <tr>
                                    <td>Niveditha Kulkarni</td>
                                    <td>CSE</td>
                                    <td>Second Year</td>
                                </tr>
                                <tr>
                                    <td>Ali Mohammed Habibullah</td>
                                    <td>ISE</td>
                                    <td>Second Year</td>
                                </tr>
                                <tr>
                                    <td>Vikas Gowda L V</td>
                                    <td>ISE</td>
                                    <td>Second Year</td>
                                </tr>
                                <tr>
                                    <td>Devika K N</td>
                                    <td>EEE</td>
                                    <td>Second Year</td>
                                </tr>
                                <tr>
                                    <td>D S L Rasagnya</td>
                                    <td>EEE</td>
                                    <td>Second Year</td>
                                </tr>
                                <tr>
                                    <td>Jitendra Prasad K K</td>
                                    <td>EEE</td>
                                    <td>Second Year</td>
                                </tr>
                                <tr>
                                    <td>Varsha Nagesh</td>
                                    <td>EEE</td>
                                    <td>Second Year</td>
                                </tr>
                                <tr>
                                    <td>Ajantha Hebbar</td>
                                    <td>ECE</td>
                                    <td>Second Year</td>
                                </tr>
                                <tr>
                                    <td>Pruthvi Raj R</td>
                                    <td>ECE</td>
                                    <td>Second Year</td>
                                </tr>
                                <tr>
                                    <td>Sanketh Rajshekhar Patil</td>
                                    <td>MECH</td>
                                    <td>Second Year</td>
                                </tr>
                                <tr>
                                    <td>Vinay Desai</td>
                                    <td>MECH</td>
                                    <td>Second Year</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            
                
        

    </body>


    <!--------------------------------------------------------------------------->
    <script>
    var textWrapper = document.querySelector('.ml1 .letters');
textWrapper.innerHTML = textWrapper.textContent.replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml1 .letter',
    scale: [0.3,1],
    opacity: [0,1],
    translateZ: 0,
    easing: "easeOutExpo",
    duration: 2000,
    delay: function(el, i) {
      return 70 * (i+1)
    }
  }).add({
    targets: '.ml1 .line',
    scaleX: [0,1],
    opacity: [0.5,1],
    easing: "easeOutExpo",
    duration: 2500,
    offset: '-=875',
    delay: function(el, i, l) {
      return 80 * (l - i);
    }
  }).add({
    targets: '.ml1',
    opacity: 0,
    duration: 3000,
    easing: "easeOutExpo",
    delay: 1000
  });
    </script>
    <!-------------------------------------------------------------------------------------->
       
       <script type="text/javascript">
       
       $("#topnav").hide(); $("#ieeeimage").hide(); $("#recent-activities").hide(); $("#sig-box").hide(); $(".some-links").hide();
       $("#fest-box").hide(); $("#awards-box").hide(); $("#teachers").hide();$("#foot").hide();$(".gallery").hide();$("#forms").hide();
       
          $(document).ready(function(){
       
              
              new WOW().init();
               $('navbar-toggle').click(function(){
                   $('nav').toggleClass('active')
                
               })
               $(".navbar-toggle").click(function () {
                $("#myNavbar").toggle('slow');
                });
               
          })
          $(document).ready( () => { $(".svg-wrapper").click( () => { $('.front-page').fadeOut();$('.front-page').fadeOut("slow");$('.front-page').fadeOut(2000);setTimeout( () => { $("#members").css("animation", "reverseAppear 0.7s ease-in 0s"); $("#members").css("display", "none");
          $("#topnav").show(); $("#ieeeimage").show(); $("#sig-box").show(); $("#fest-box").show(); $("#awards-box").show(); $("#teachers").show();$("#foot").show();$("#recent-activities").show();$(".gallery").show();$("#forms").hide();
           $("#foot").show(); $(".some-links").show(); new
    WOW().init(); }, 500); }); });        
          function membersAppear(){ $("#topnav").hide(); $("#ieeeimage").hide(); $("#recent-activities").hide(); $("#sig-box").hide();$('.front-page').hide();$(".gallery").hide(); $(".some-links").hide();
           $("#fest-box").hide(); $("#awards-box").hide(); $("#teachers").hide();$("#foot").hide(); $("#members").css("display", "block"); $("#members").css("animation", "appear 1s ease-in 0s"); }
       
           function membersHide() { $("#members").css("animation", "reverseAppear 0.7s ease-in 0s"); $("#members").css("display", "none");$('.front-page').hide();
           $("#topnav").show(); $("#ieeeimage").show(); $("#sig-box").show(); $("#fest-box").show(); $("#awards-box").show(); $("#teachers").show();$("#foot").show();$("#recent-activities").show();
           $("#foot").show();$(".gallery").show(); $(".some-links").show(); }

           
           
           </script>
           <script>
               document.body.classList.add('second');
               window.addEventListener("load",showPage);

               function showPage(){
                   document.body.classList.remove('second');
               }
           </script>

           <script>
            $(function() {
      $('.custom-navbar a, #home a').on('click', function(event) {
        var $anchor = $(this);
          $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 49
          }, 1000);
            event.preventDefault();
      });
    });  
           </script>
           <script>
               function galleryon(){
                    document.getElementById("gallerydisplay").style.display="block";
               }

               function galleryoff(){
                    document.getElementById("gallerydisplay").style.display="none";
               }
               function formAppear(){
                   document.getElementById("forms").style.display="block";
               }
               function formHide(){
                    document.getElementById("forms").style.display="none";
                }
           </script>
       
</html>
