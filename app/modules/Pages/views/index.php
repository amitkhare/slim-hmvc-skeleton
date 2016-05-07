<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Basic Slim HMVC module template built on Bootstrap.">
    <meta name="author" content="Amit Kumar Khare @amitkhare">
    <link rel="icon" href="./imgs/favicon.ico">

    <title><?php echo $title; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="http://getbootstrap.com/examples/cover/cover.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">Khare's</h3>
              <nav>
                <ul class="nav masthead-nav">
                  <li class="active"><a href="#">Home</a></li>
                  <li><a href="#contacts">Contact</a></li>
                </ul>
              </nav>
            </div>
          </div>

          <div class="inner cover">
            <h1 class="cover-heading"><?php echo $title; ?></h1>
            <p class="lead">A HMVC modular application for Slim Framework. Use this application to quickly setup and
              start working on a new <a href="https://slimframework.com"  target="_blank">Slim Framework 3</a> with <a href="https://en.wikipedia.org/wiki/Hierarchical_model%E2%80%93view%E2%80%93controller" target="_blank">HMVC</a> capebilities.</p>
            <p class="lead">
              This page is generated from: 
                <table class="table table-bordered">
                  <tr>
                    <td>Controller:</td>
                    <td>ROOT / app / modules / Pages / Pages.php</td>
                  </tr>
                  <tr>
                    <td>Routes file:</td>
                    <td>ROOT / app / modules / Pages / routes.php</td>
                  </tr>
                  <tr>
                    <td>Model:</td>
                    <td>ROOT / app / modules / Pages / Pages.mdl.php</td>
                  </tr>
                  <tr>
                    <td>ViewFile:</td>
                    <td>ROOT / app / modules / Pages / views/Index.php</td>
                  </tr>
                </table>
            </p>
            <p class="lead">
              <a href="https://github.com/amitkhare/slim-hmvc-skeleton" target="_blank" class="btn btn-lg btn-default">Learn more</a>
            </p>
          </div>

          <div class="mastfoot">
            <div class="inner">
              <p><?php echo $title; ?> basic template built on bootstrap for <a href="https://github.com/amitkhare/slim-hmvc">Slim HMVC</a>, by <a href="https://twitter.com/amitkhare">@amitkhare</a>.</p>
            </div>
          </div>

        </div>

      </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  </body>
</html>