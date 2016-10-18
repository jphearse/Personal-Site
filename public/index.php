<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Joe Phearse Personal Site">
    <meta name="author" content="Joe Phearse">
    <meta name="keywords" content="Joe, Phearse, joe phearse, personal, site, web developer, HTML, CSS, Javascript">
	<link rel="icon" href="/img/jp.ico">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
    <title>Joe Phearse</title>
	<link rel="stylesheet" type="text/css" href="/css/animate.css">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <link href="/css/welcome.css" rel="stylesheet">
    <!-- <link href="/css/font.css" rel="stylesheet"> -->
   
  </head>

  <body>

	<div class="container-fixed">
	<div class="navbar navbar-inverse navbar-fixed-top">
	  <div class="container">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" id="nameLink" href="#headerwrap">Joe Phearse</a>
	    </div>
	    <div class="collapse navbar-collapse">
	      <ul class="nav navbar-nav">
	       
	        <li><a id="link" href="#headerwrap">Home</a></li>
	        <li><a id="secondLink" href="#about">About Me</a></li>
	        <li><a id="thirdLink" href="#works">Portfolio</a></li>
	       
	      </ul>
	    </div><!--/.nav-collapse -->
	  </div>
	</div>
	</div>

	<!-- Modal -->
	<div id="myModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">

	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title">Joe Phearse</h4>
	      </div>
	      <div class="modal-body">
	        <p><img src="/img/headshot2.jpg"></p>
	        <p id="modalAbout">Web developer with experience in HTML, CSS, Twitter Bootstrap, JavaScript, jQuery, PHP, and MySQL. Web development goal is to create clear, effective, and reusable code.</p>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	      </div>
	    </div>

	  </div>
	</div>



	<div id="headerwrap">
	    <div class="container">
			<div class="row">
				<div class="headContents col-lg-6 col-lg-offset-3">
					<div class="avatar">
						
                    	<img alt="picOfMe" id="aboutMeHeader" data-toggle="modal" data-target="#myModal" src=/img/headshot.png>
                    	 <span class="text-content" data-toggle="modal" data-target="#myModal"><span>Click Here</span></span>
                    	 
                	</div>
					<h1 class="about">Joe Phearse</h1>
					<a href="mailto:jphearse@gmail.com" target="_top"><h3 class="about">Jphearse@gmail.com</h3></a>
				</div>
			</div><!--/row -->
	    </div> <!-- /container -->
	</div><!--/headerwrap -->
	

	<!--Resume-->	
	<section id="about">
	<div class="container">
		<div class="row centered mt mb">
			<div class="col-lg-8 col-lg-offset-2">
				<hr>
				<!-- ////////////////about me////////////////////// -->
				<h1>About Me</h1>
				<hr>
				<div>
					<img id="pic-of-me" src="/img/collage.jpg">	<br><br>
					<p class="paragraph indent">Growing up in my hometown of Brenham, Texas, I had dreams of becoming a professional basketball player—something that didn’t work out most likely due to my lack of height. But when I got to high school, I found an interest in technology and mathematics. This led me to choose Computer Science as my major when I enrolled at the University of Houston in 2012. However, after one semester I switched my major to Economics because I wanted a degree that could lead me on to a variety of career paths. After two years I transferred to the University of Texas at San Antonio, finished my degree in Economics, and began my Master’s of Education degree with a concentration in Instructional Technology one year later. My first class of my graduate degree reintroduced me to HTML, CSS, and Javascript and made me realize how much I enjoy building websites. The numerous challenges that exist in the process of coding a website are what drive my passion. My work ethic of problem solving and determination push me to create products that exhibit my best work while my diverse educational background allows me to contribute a skillset in web design that companies and/or agencies might not find from other candidates. Codeup has refined these skills and led me toward discovering a career path that encompasses all my interests.</p>
				</div>
				<br>

				<!-- ////////////Education ////////////////////////-->
				<h2>Education</h2><hr>
				<p><strong>Codeup</strong></strong></p>
				<p><em><strong>San Antonio, Texas</strong> </em></p>
				<div id="textbox">
					<p class="alignleft1 col-sm-6 col-xs-6"><strong>Full Stack Web Development</strong></p>
					<p class="alignright1 col-sm-6 col-xs-4">July 2016 - November 2016</p>
				</div>
				<div style="clear: both;"></div>
				<div class="alignleft1 indent" "><em>-Completing 500+ hours of hands on training in modern software technologies with a focus on Linux, Apache, MySQL, PHP, Laravel, HTML, CSS, JavaScript, jQuery, and Twitter Bootstrap.</em></div><br><br>
				<p><strong>The University of Texas at San Antonio</strong></strong></p>
				<p><em><strong>San Antonio, Texas</strong> </em></p>
				<div id="textbox">
					<p class="alignleft1"><strong>M.A. Education,</strong></p>
					<p class="alignright1">August 2015 - Present</p>
				</div>
				<div style="clear: both;"></div>
				<div class="alignleft1 indent"><em>-Instructional Technology</em></div><br><br>
				<div id="textbox">
					<p class="alignleft1"><strong>B.A. Economics</strong></p>
					<p class="alignright1">May 2014 - August 2015</p>
				</div>
				<div style="clear: both;"></div>
				<p><strong>The University of Houston</strong></p>
				<p><em><strong>Houston, Texas</strong> </em></p>
				<div id="textbox">
					<p class="alignleft1"><strong>Computer Science</strong></p>
					<p class="alignright1">August 2012 - May 2014</p>
					</div>
				<div style="clear: both;"></div>

				<!--//////////////work experience//////////////////// -->
				<h2>Work Experience</h2><hr>
				<div id="textbox">
					<p class="alignleft1"><strong>Lead Inventory</strong></p>
					<p class="alignright1">August 2014 - July 2016</p>
				</div>
				<div style="clear: both;"></div>
				<p class="job-location"><em>Carmax, San Antonio, Texas</em></p>
				<ul>
					<li>Executes quality control checks on any received/expected inventory</li>
					<li>Innovates beneficial facility and ground maintenance techniques to enhance inventory quality</li>
					<li>Maintains computerized records of tracking inventory</li>
					<li>Communicates with staff members storewide to better serve customers</li>
				</ul>
				<div id="textbox">
					<p class="alignleft1 col-sm-6 col-xs-6"><strong>Guest Services Representative</strong></p>
					<p class="alignright1 col-sm-6 col-xs-4">September 2011 - August 2012</p>
				</div>
				<div style="clear: both;"></div>
				<p class="job-location"><em>Westwood Cinema 6, Brenham, Texas</em></p>
				<ul>
					<li>Collected/sold tickets to customers</li>
					<li>Assisted guests with complaints and special requests</li>
					<li>Ushered and maintained customer orderliness during peak hours</li>
					<li>Provided comfortable atmosphere for guests through sociability and cleanliness</li>
				</ul>
				<div id="textbox">
					<p class="alignleft1 col-sm-8 col-xs-6"><strong>Power Supply Unit Tester Intern</strong></p>
					<p class="alignright1 col-sm-4 col-xs-4">April 2011 - August 2011</p>
				</div>
				<div style="clear: both;"></div>
				<p class="job-location"><em>HDL Research Lab, Brenham, Texas</em></p>
				<ul>
					<li>Tested unitary components of power supply technology through electric simulation</li>
					<li>Ensured that products met military standards</li>
					<li>Interacted with professionals across various departments to maintain the checks and balances of the
					company</li>
				</ul>

				<!-- ////////////////Recognition///////////////////// -->
				<h2>Recognition</h2><hr>
				<div id="textbox">
					<p class="alignleft1"><strong>Dean's List</strong></p>
					<p class="alignright1">Summer 2014</p>
				</div>
				<div style="clear: both;"></div>
				<p class="recog"><em>The University of Texas at San Antonio, San Antonio, Texas</em></p>
				<div id="textbox">
					<p class="alignleft1 col-sm-6 col-xs-6"><strong>Store Champion (Employee of the Month)</strong></p>
					<p class="alignright1 col-sm-6 col-xs-4">April 2015, February 2016</p>
				</div>
				<div style="clear: both;"></div>
				<p class="recog"><em>Carmax, San Antonio, Texas</em></p>

				<!-- /////////////skills/////////////////////////// -->
				<h2>Skills</h2><hr>
				<ul>
					<li><strong>Computer:</strong> experienced with HTML, CSS, JavaScript, Apache Subversion (SVN), SCORM, and GIMP, proficient in Microsoft Office</li>
					<li><strong>Problem Solving:</strong> experience working with deadlines and managing multiple, demanding tasks as well as creating innovative and efficient solutions</li>
					<li><strong>Social Engagement:</strong> able to communicate verbally and in writing in a positive manner with colleagues and clientele</li>
					<li><strong>Work Ethic:</strong> detail-oriented in both straightforward and complex tasks, enjoys challenging and engaging work, capable of taking initiative as well as following orders and working without supervision, adaptable in new environments</li>
				</ul>

			</div>

		</div><!--row -->
	</div><!--container -->
	</section>
	<!--Resume-->

		
	<section id="works">
	<div class="container">
		<div class="row centered mt mb">
			<hr>
			<h1>My Portfolio</h1>
			<hr>
			<!-- <div class="col-lg-4 col-md-4 col-sm-4 gallery">
				<a href="/calculator.html" target="_blank"><img src="/img/logo-calc.png" class="img-responsive"></a>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 gallery">
				<a href="/weather_map.html" target="_blank"><img src="/img/logo-weather-map.png" class="img-responsive"></a>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 gallery">
				<a href="/simple.html" target="_blank"><img src="/img/logo-simple-simon.png" class="img-responsive"></a>
			</div>
 -->
		</div><!--/row -->
	</div><!--/container -->
	</section>

	    <div id="myCarousel" class="carousel slide" data-ride="carousel">
	        <!-- Carousel indicators -->
	        <ol class="carousel-indicators">
	            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	            <li data-target="#myCarousel" data-slide-to="1"></li>
	            <li data-target="#myCarousel" data-slide-to="2"></li>
	        </ol>   
	        <!-- Wrapper for carousel items -->
	        <div class="carousel-inner">
	            <div class="item active">
	               <a href="/calculator.html" target="_blank"><img src="/img/logo-calc.png" class="img-responsive"></a>
	            </div>
	            <div class="item">
	                <a href="/weather_map.html" target="_blank"><img src="/img/logo-weather-map.png" class="img-responsive"></a>
	            </div>
	            <div class="item">
	                <a href="/simple.html" target="_blank"><img src="/img/logo-simple-simon.png" class="img-responsive"></a>
	            </div>
	        </div>
	        <!-- Carousel controls -->
	        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
	            <span class="glyphicon glyphicon-chevron-left"></span>
	        </a>
	        <a class="carousel-control right" href="#myCarousel" data-slide="next">
	            <span class="glyphicon glyphicon-chevron-right"></span>
	        </a>
	    </div>
	

	<div id="social">
		<div class="container">
			<div class="row centered">
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
					<a href="https://github.com/jphearse" target="_blank"><i class="fa fa-github"></i></a>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
					<a href="https://www.facebook.com/joe.phearse" target="_blank"><i class="fa fa-facebook"></i></a>
				</div>
				
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
					<a href="https://www.linkedin.com/in/joe-phearse-70162bbb?trk=nav_responsive_tab_profile" target="_blank"><i class="fa fa-linkedin"></i></a>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
					<a href="https://www.instagram.com/jphearse/?hl=en" target="_blank"><i class="fa fa-instagram" ></i></a>
				</div>
				
			
			</div><!--/row -->
		</div><!--/container -->
	</div><!--/social -->

	<div id="footerwrap">
		<div class="container">
			<div class="row centered">
				<div class="col-lg-3">
					<p><b>Codeup Student</b></p>
				</div>
				<div class="col-lg-3">
					<p>San Antonio</p>
				</div>
				<div class="col-lg-3">
					<a href="mailto:jphearse@gmail.com" target="_top"><p>Jphearse@gmail.com</p></a>
				</div>
				<div class="col-lg-3">
					<a href="tel:+1-979-661-0013"><p>(979) 661-0013</p></a>
				</div>
			</div>
		</div>
	</div><!--/footerwrap -->

    
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
	<script src="js/welcome.js"></script>
  </body>
</html>
