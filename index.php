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

<link href='https://fonts.googleapis.com/css?family=Lato:400,700,900,300' rel='stylesheet' type='text/css'>

<link rel="stylesheet" type="text/css" href="http://cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css"/>

<link href='https://fonts.googleapis.com/css?family=Aladin' rel='stylesheet' type='text/css'>

<link href='https://fonts.googleapis.com/css?family=Limelight' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="personal.css">

<link rel="stylesheet" type="text/css" href="/Checkers/style.css">

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
          <li><a class="closeModal" href="##jumbo">Home</a></li>
          <li><a class="closeModal" href="##portfolio">Portfolio</a></li>
          <li><a class="closeModal" href="##about">About</a></li>
          <li><a class="closeModal" href="##about">Contact</a></li>
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
          <p>A self-taught web developer, I'm most passionate writing code and helping brands create beautiful, helpful, and actionable online experiences. My passion for coding and desire for self improvement drive me to continuously reinvent myself.</p>
      </div>
      </div>
    </div>

    <div class="container"><!-- Portfolio Container -->
      <div id="portfolio" class="row">
          <div class="col-md-12">
            <h1 id="portTitle">My Portfolio</h1>
          </div>
      </div>

<div ng-view ng-controller="portfolioController as port"></div><!-- This view is being routed by angularjs. -->

  </div><!-- Portfolio Container -->

<div class="row" id="rest">
  <div class="col-md-10 col-md-offset-1 restWrap">
    <div class="qoutes restQoute">
      <div>"Joe is a go-getter who refuses to quit until the job is done and done to the client's satisfaction. I'd definitely recommend working with him."<br> -Celeste Chaney, 21st Kitchen</div>
      <div>"Joe is easy to work with. He's quick to innovate and always takes projects and results to the next level."<br> -Celeste Chaney, 21st Kitchen</div>
    </div>
  </div>
</div>

<div class="grade2">
  <div class="container">
        <div id="about" class="row">
          <div class="col-md-3">
            <img class="joeImage" src="img/joe.jpg">
          </div>
          <div class="col-md-6">
            <p class="myDesc">I'm an entrepreneurial professional seeking opportunity to work with purpose toward the fulfillment of company objectives while growing personally and professionally in a challenging environment. I possess the ability to learn new technologies quickly and the willingness to do what it takes to get the job done.<br><br>If you need help with a project, <a href="mailto:roxbury.joseph@gmail.com">contact me</a> for a quote.</p>
            <div id="social">
              <div class="col-md-6 linkedin"><a target="_blank" href="https://www.linkedin.com/in/josephroxbury"><img src="img/social/linkedin.png"></a></div>
              <div class="col-md-6 github"><a target="_blank" href="https://github.com/jroxbury"><img src="img/social/github.png"></a></div>
            </div>
          </div>
          <div class="col-md-3">
            <ul class="skills">
              <li>HTML5</li>
              <li>CSS3/SCSS</li>
              <li>JavaScript</li>
              <li>Git</li>
              <li>Command Line</li>
              <li>Wordpress</li>
              <li>PHP</li>
              <li>Python</li>
              <li>SEO</li>
              <li>Automation</li>
            </ul>
      </div>
        </div>
</div> <!-- /container -->
</div>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> JoeRoxbury.com
    </footer>


<!-- Latest compiled and minified JavaScript -->
<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script type="text/javascript" src="http://cdn.jsdelivr.net/jquery.slick/1.5.9/slick.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.0/angular.min.js"></script>
<script src="https://code.angularjs.org/1.5.0/angular-route.min.js"></script>
<script src="typed.js"></script>
<script src="personal.js"></script>
<!-- <script src="/Checkers/main.js"></script> -->
  </body>
</html>