<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>Books list</title>
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
					<li><a href="index.php">Home</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="Infrastructure.html">Infrastructure</a></li>
					<li><a href="Achievements.html">Achievements</a></li>
					<li><a href="faculty.php">Faculty</a></li>
					<li class="dropdown active">
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

 	<header id="head" class="secondary">
            <div class="container">
                    <h1>Downloads</h1>
                   
                </div>
    </header>
 <div class="container">
 	<h2>Classwise List of NCERT Books in Syllabus</h2>
 	<div class="table">
  <table  width="800px">
  <tr>
  	<th>Class</th>
  <th>List of books</th>
  </tr>
   <?php
      require_once('/mysqliconnect.php'); 

$sql = 'SELECT * 
    FROM books';
    
$query = mysqli_query($conn, $sql);

if (!$query) {
  die ('SQL Error: ' . mysqli_error($conn));
}

      while ($row = mysqli_fetch_array($query)) {
        echo "<tr>";
        echo "<td>".$row['s_class']."</td>";
        echo "<td><a href=\"".$row['ncert']."\">click to view</a></td>" ;
    echo "</tr>";
               }
       ?>
       
    </table>
</div>
</div>
 
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
