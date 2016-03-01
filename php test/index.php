<?php


$submit = '';
$name = '';
$email = '';
$comment = '';
$result = '';
$error = '';

if ( isset( $_POST['submit'] ) ) { 

      
      
     if (!$_POST['name']) {

       $error="<br />Please enter your name";

     }
      
     if (!$_POST['email']) {

       $error.="<br />Please enter your email address";

     }
      
     if (!$_POST['comment']) {

       $error.="<br />Please enter a comment";

     }
      
   if ($_POST['email']!="" AND !filter_var($_POST['email'],
FILTER_VALIDATE_EMAIL)) {
      
     $error.="<br />Please enter a valid email address";

     }
      
     if ($error) {

 $result='<div class="alert alert-danger"><strong>There were error(s)
in your form:</strong>'.$error.'</div>';

     } else {

 if (mail("roxbury.joseph@gmail.com", "Comment from website!", "Name: ".
$_POST['name']."

 Email: ".$_POST['email']."

 Comment: ".$_POST['comment'])) {

 $result='<div class="alert alert-success"><strong>Thank
you!</strong> I\'ll be in touch.</div>';

 } else {

 $result='<div class="alert alert-danger">Sorry, there was
an error sending your message. Please try again later.</div>';

 }



 }


 }



?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<link rel="stylesheet" href="personal.css">

<link href='https://fonts.googleapis.com/css?family=Lato:400,700,900,300' rel='stylesheet' type='text/css'>

<link rel="stylesheet" type="text/css" href="http://cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css"/>

<link href='https://fonts.googleapis.com/css?family=Aladin' rel='stylesheet' type='text/css'>

<link href='https://fonts.googleapis.com/css?family=Limelight' rel='stylesheet' type='text/css'>

</head>

<body ng-app="myApp">

  	<!-- Button trigger modal -->
<button type="button" class="btn btn-default  menuButton" data-toggle="modal" data-target="#myModal">
  <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <ul class="modalMenu">
        	<li><a class="closeModal" href="#jumbo">Home</a></li>
        	<li><a class="closeModal" href="#portfolio">Portfolio</a></li>
        	<li><a class="closeModal" href="#about">About</a></li>
        	<li><a class="closeModal" href="#">Contact</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div id="jumbo" class="jumbotron">
      <div class="container">
      	<div class="row col-md-8">
	        <h1 class="element"></h1>
	        <p>Hi, I'm Joe. I have a passion for skateboarding and writing code. This is where I write some stuff about myself. This is where I write some stuff about myself. This is where I write some stuff about myself.</p>
	    </div>
      </div>
    </div>

    <div class="container"><!-- Portfolio Container -->
    	<div id="portfolio" class="row">
        	<div class="col-md-12">
        		<h1 id="portTitle">My Portfolio</h1>
        	</div>
    	</div>

<div ng-view></div><!-- This view is being routed by angularjs. -->
	    
	</div><!-- Portfolio Container -->

<div class="row" id="rest">
<div class="qoutes restQoute">
  <div>"If you can't explain it simply, you don't understand it well enough."</div>
  <div>"Logic will get you from A to B. Imagination will take you everywhere."</div>
  <div>"Insanity: doing the same thing over and over again and expecting different results."</div>
  <div>"Everything should be made as simple as possible, but not simpler."</div>
</div>
</div>

<div class="grade2">
	<div class="container">
      	<div id="about" class="row">
        	<div class="col-md-3">
        		<img class="joeImage" src="img/joe.jpg">
				<button id="contactButton" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#contactModal">
				  <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Contact me
				</button>

        		<div class="modal fade" id="contactModal" tabindex="-1" role="dialog">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title">Contact me!</h4>
				      </div>
				      <div class="modal-body">
						      <form method="POST" enctype="text/plain">
					              <div class="form-group">
					                  <label for="name">Your Name</label>
					                  <input type="text" class="form-control" id="name" placeholder="Your Name">
					                </div>
					                <div class="form-group">
					                  <label for="email">Email address</label>
					                  <input type="email" class="form-control" id="email" placeholder="Your Email">
					                </div>
					                <div class="form-group">
					                  <label for="text">Message</label>
					                  <textarea class="form-control" rows="3" id="text" placeholder="Your Message"></textarea>
					                </div>
					                <?php echo $result; ?>
					              <submit name="submit" value="submit" type="submit" class="btn btn-success">Submit</button>
					        </form>
				      </div>
				    </div><!-- /.modal-content -->
				  </div><!-- /.modal-dialog -->
				</div><!-- /.modal -->
        	</div>
        	<div class="col-md-6">
        		<p class="myDesc">I'm a self taught junior web developer. I've used numerous online resources such as <a href="http://www.teamtreehouse.com">Treehouse</a>, <a href="http://www.udemy.com">Udemy</a>, <a href="https://www.coursera.org">Coursera</a>, <a href="https://www.codecademy.com/">Codeacademy</a>, Youtube, Stack Overflow, and numerous other sources to build my skills.Search has become my best friend for finding solutions to problems or curiosity. I find great statisfaction in solving a coding problem that I struggled with. My passion for programming and desire for self improvement drives me to push my skills everyday.</p>
        		<div id="social">
        			<div class="col-md-4 twitter"><a target="_blank" href="https://twitter.com/9toejoe"><img src="img/social/twitter.png"></a></div>
        			<div class="col-md-4 linkedin"><a target="_blank" href="https://www.linkedin.com/in/josephroxbury"><img src="img/social/linkedin.png"></a></div>
        			<div class="col-md-4 github"><a target="_blank" href="https://github.com/jroxbury"><img src="img/social/github.png"></a></div>
        		</div>
        	</div>
        	<div class="col-md-3">
	        	<ul class="skills">
	        		<li><a data-html="true" data-toggle="tooltip" title="Best">HTML</a></li>
	        		<li><a data-toggle="tooltip" title="Best">CSS</a></li>
	        			<ul>
	        				<li><a data-toggle="tooltip" title="Better">Responsive Design</a></li>
	        				<li><a data-toggle="tooltip" title="Best">Bootstrap</a></li>
	        			</ul>
	        		<li><a data-toggle="tooltip" title="Better">JavaScript</a></li>
		        		<ul>
		        			<li><a data-toggle="tooltip" title="Better">Object Oriented</a></li>
		        			<li><a data-toggle="tooltip" title="Better">jQuery</a></li>
		        			<li><a data-toggle="tooltip" title="Newbie">Angular</a></li>
		        			<li><a data-toggle="tooltip" title="Newbie">Node</a></li>
		        		</ul>
		        	<li><a data-toggle="tooltip" title="Good">Version Control</a></li>
		        	<li><a data-toggle="tooltip" title="Good">Command Line</a></li>
	        		<li><a data-toggle="tooltip" title="Good">Wordpress</a></li>
	        		<li><a data-toggle="tooltip" title="Good">PHP</a></li>
	        		<li><a data-toggle="tooltip" title="Good">Python</a></li>
	        		<li><a data-toggle="tooltip" title="Good">SEO</a></li>        	
	        	</ul>
			</div>
      	</div>
</div> <!-- /container -->    
</div>

    <footer>
        <p>&copy; 2015 JoeRoxbury.com</p>
    </footer>


<!-- Latest compiled and minified JavaScript -->
<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.0/angular.min.js"></script>
<script src="https://code.angularjs.org/1.5.0/angular-route.min.js"></script>
<script src="https://code.angularjs.org/1.5.0-rc.2/angular-route.min.js"></script>
<script type="text/javascript" src="http://cdn.jsdelivr.net/jquery.slick/1.5.9/slick.min.js"></script>
<script src="typed.js"></script>
<script src="personal.js"></script>
  </body>
</html>