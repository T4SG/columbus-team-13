<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>MyStory - YourStory</title>
     
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php include_once('include-header.php'); ?>
  </head>
  <body>
  <?php include_once('header.php'); ?>
  <div class="col-xs-2"> </div>
  <div class="col-xs-8">
    <h2 class="italics-header">MyStory &#8212; YourStory</h2>
    <h2 class="sample-user-name">because our stories matter...</h2>
    <hr />
    <div class="your-story col-xs-6">
      <h2 class="sample-user-name">I am LeBron James</h2>
       <iframe width="100%" height="315px" src="https://www.youtube.com/embed/_mgBStqp06c" frameborder="0" allowfullscreen></iframe>
      <h3 class="italics-header">You shared your goals with me, now let me share mine with you!</h3>
      <h3 class="sample-user-name">My Current Goals:</h3>
      <ul class="goals">
	<li>Set a new PR for points scored in a game within the next month.</li>
	<li>Record and post a minimum of 5 reachback videos every week!</li>
	<li>Spend at least four nights a week with my family.</li>
      </ul>
    </div>
    <div class="your-story col-xs-6">
      <h2 class="sample-user-name">Reachback</h2>
      <blockquote>Hey <a href="#">@James</a>, I saw that you're keeping up the good work. Great job.</blockquote>
      <blockquote><iframe width="auto" height="315px" src="https://www.youtube.com/embed/q8Gb8eaMXVc" frameborder="0" allowfullscreen></iframe></blockquote>
    </div>
  </div>
  <div class="col-xs-2"></div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
