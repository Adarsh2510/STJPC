
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>St JPC Public School Haridwar</title>
	<link rel="favicon" href="assets/images/favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css"> 
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen"> 
	<link rel="stylesheet" href="assets/css/style.css">
    <link rel='stylesheet' id='camera-css'  href='assets/css/camera.css' type='text/css' media='all'> 
<link href="assets/css/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="assets/js/js-image-slider.js" type="text/javascript"></script>
</head>
<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
				<a class="navbar-brand" href="index.php">
					<img src="assets/images/capture.png" alt="S.t.J.P.Convent Public School"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right mainNav">
					<li class="active"><a href="index.php">Home</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="Infrastructure.html">Infrastructure</a></li>
					<li><a href="Achievements.html">Achievements</a></li>
					<li><a href="faculty.php">Faculty</a></li>
					<li class="dropdown">
						<a href="Downloads.html" class="dropdown-toggle" data-toggle="dropdown">Downloads<b class="caret"></b></a>
						<ul class="dropdown-menu">
							
							<li><a href="form.php">Admission form</a></li>
							<li><a href="books.php">List of books</a></li>
							<li><a href="tc.php">Transfer certificate</a></li>
						</ul>
					</li>
					<li><a href="contact.html">Contact</a></li>

				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
	<!-- /.navbar -->

    <div id="sliderFrame">
        <div id="slider">
         
            <img src="assets/images/cimg1.jpg" >
            <img src="assets/images/cimg2.jpg" >
            <img src="assets/images/cimg3.jpeg" >
            <img src="assets/images/cimg4.jpg" >
        </div>
       
    </div>
  <div class="container">
    <div class="row">
          <div class="col-md-3">
            <div class="grey-box-icon">
              <div class="icon-box-top grey-box-icon-pos">
                <img src="assets/images/2.png" alt="" />
              </div><!--icon box top -->
              <h4>Notice Corner</h4>
              <p>Here Students and their guardians can see the real-time updates and important information provided by  the school authority to avoid any inconvenience .</p>
                <p><a href="#notice"><em>Click to continue →</em></a></p>
            </div><!--grey box -->
          </div><!--/span3-->
          <div class="col-md-3">
            <div class="grey-box-icon">
              <div class="icon-box-top grey-box-icon-pos">
                <img src="assets/images/6.png" alt="" />
              </div><!--icon box top -->
              <h4>Download zone</h4>
              <p>This section consists of important files and documents like syllabus, list of books and a list of students who have got transfer certificate  </p>
                <p><a href="Downloads.html"><em>Click to continue →</em></a></p>
            </div><!--grey box -->
          </div><!--/span3-->
          <div class="col-md-3">
            <div class="grey-box-icon">
              <div class="icon-box-top grey-box-icon-pos">
                <img src="assets/images/1.png" alt="" />
              </div><!--icon box top -->
              <h4>Our Team</h4>
              <p> This section consists of important files and documents like syllabus, list of books and a list of students who have got transfer certificate.
                <p><a href="about.html#team"><em>Click to continue →</em></a></p>
            </div><!--grey box -->
          </div><!--/span3-->
          <div class="col-md-3">
            <div class="grey-box-icon">
              <div class="icon-box-top grey-box-icon-pos">
                <img src="assets/images/7.png" alt="" />
              </div><!--icon box top -->
              <h4>Contacts </h4>
              <p>Feel free to contact to any related query through any of the mentioned medium in our office hours</p>
                <p><a href="contact.html"><em>Click to continue →</em></a></p>
            </div><!--grey box -->
          </div><!--/span3-->
        </div>
    </div>
    <!---------------------------------------------------------------------------------------------------------->
     <section class="container">
      <div class="row">
        <div class="col-md-8"><div class="title-box clearfix "><h2 class="title-box_primary">About Us</h2></div> 
        <p><span> St.J.P Convent Public School Is A Unique Institution.It Was Established In 2003.The Foundation Stone Was Laid By Sh.Babu Ram Ji Since Than It Has Developed Into A Full-Fledged Institution.</span></p>
        <p>.The school is located in a lush green campus with congenial environment conducive for learning.</p><p>We focus our dedication towards evoking a passion for learning and developing the requisite set of attitudes, skills and knowledge that enable our learners to maximize their potential towards becoming positive, responsible and well informed participants in our democratic and rapidly progressing global community.</p>
        <a href="about.html" title="read more" class="btn-inline " target="_self">read more</a> </div>
<!---notice corner------------------------------------------------------------------------------------------------->
   <div class="col-md-4" id="notice"><div class="title-box clearfix "><h2 class="title-box_primary">Notices</h2></div> 
  <marquee class="GeneratedMarquee" direction="up" scrollamount="4" behavior="scroll" >  <?php
            require_once('/mysqliconnect.php'); 
            $sql = 'SELECT * FROM Notice';
            $query = mysqli_query($conn, $sql);
             if (!$query) {
              die ('SQL Error: ' . mysqli_error($conn));
            }
          while ($row = mysqli_fetch_array($query))
           { echo"<p><a href=\"".$row['link']."\">".$row['notice']."</a>";
            
            echo"</p>";
            }
            ?></marquee>

 
            </div>
         </div>
      </div>
    </section>

<!----------------------------------------------------------------------------------------------------->
<div class="maps-frame" >
  <h2>Location Map </h2>
<iframe class="maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d110838.96715825844!2d78.02313976211319!3d29.75688155432239!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3909508a051e2ddd%3A0x3e76cb8b2987861e!2sSt.+J.+P.+Convent+Public+School!5e0!3m2!1sen!2sin!4v1541697248969" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<!----------------------------------------------------------------------------------------------------->

    <footer id="footer">
 
    <div class="container">
   <div class="row">
  <div class="footerbottom">
    <div class="col-md-3 col-sm-6">
      <div class="footerwidget">
        <h4>
          About Us
        </h4>
        <div class="menu-course">
          <ul class="menu">
            <li><a href="about.html#about">
                Introduction
              </a>
            </li>
            <li><a href="about.html#mission">
                Mission and Vision 
              </a>
            </li>
            <li><a href="achievements.html">
               Achievements
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="footerwidget">
        <h4>
          Download Section  
        </h4>
        <div class="menu-course">
          <ul class="menu">
            <li> <a href="form.php">
                Admission form   </a>
            </li>
            <li><a href="books.php">
                List of NCERT Books 
              </a>
            </li>
            <li><a href="tc.php">
                Transfer Certificate 
              </a>
            </li>
            
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="footerwidget">
        <h4>
         Infrastructure 
        </h4>
        <div class="menu-course">
          <ul class="menu">
            <li><a href="Infrastructure.html#Science">
                Science laboratories 
              </a>
            </li>
            <li> <a href="Infrastructure.html#Computer">
                Computer Laboratories 
              </a>
            </li>
            
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6"> 
              <div class="footerwidget"> 
                         <h4>Contact</h4> 
                        <p>S.t.J.P.Convent Public School</p>
            <div class="contact-info"> 
            <i class="fa fa-map-marker"></i> Tikkampur,Sultanpur,Haridwar(Uttarakhand)<br>
            <i class="fa fa-phone"></i>+91 9520055159 <br>
             <i class="fa fa-envelope-o"></i> stjpc2003@gmail.com
                </div><!-- end widget --> 
    </div>
  </div>
</div>
      <div class="social text-center">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <p>Visit our Facebook page for more info</p>
      </div>

      <div class="clear"></div>
<!------------------------------------------------------------------------------------------------------>

	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="assets/js/modernizr-latest.js"></script> 
	<script type='text/javascript' src='assets/js/jquery.min.js'></script>
    <script type='text/javascript' src='assets/js/fancybox/jquery.fancybox.pack.js'></script>
    
    <script type='text/javascript' src='assets/js/jquery.mobile.customized.min.js'></script>
    <script type='text/javascript' src='assets/js/jquery.easing.1.3.js'></script> 
    <script type='text/javascript' src='assets/js/camera.min.js'></script> 
    <script src="assets/js/bootstrap.min.js"></script> 
	
    
    
</body>
</html>
