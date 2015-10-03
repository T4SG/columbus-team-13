<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Profile Page</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="morecss.css" rel="stylesheet">

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
    <h2 class="italics-header">Personal Progress</h2>
    <hr />

    <!--<div class="container" id="profile">-->
      <div class="col-lg-6 col-lg-offset-1">
      <h1 class="no-top-margin">John</h1>
      
      <h4>About Me...</h4>
      <p>"I'm a freshman at Akron High. I love soccer and hope to play in college one day! The Cleveland Cavaliers are my favorite basketball team and I hope to live my dream just like LeBron James!"</p>
        <div class="row">
          <div class="col-lg-8">
     <h3 class="sample-user-name">My Current Goals:</h3>
      <ul class="goals">
  <li>Make the Varsity soccer team.</li><button type="button">Completed?</button>
  <li>Attend all classes this week.</li><button type="button">Completed?</button>
  <li>Study at least one hour every night.</li><button type="button">Completed?</button>
  <li>Earn 10 hours of community service this month.</li><button type="button">Completed?</button>
      </ul>
    <h4>Have advice for me?</h4>
    </div>


         <input type="text" class="form-control" placeholder="Send me a message!" id="info" onkeydown="if (event.keyCode == 13) document.getElementById('sendinfo').click()">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button" id="sendmessage" onClick="send()">Send</button>
              </span>
            </div>
          </div>

    <div class="col-lg-4>" id="prof">
      <img src="images/create-cartoon-caricatures_ws_1355965104.png" id="profilepic" style="height:280px; width:280px;">
      <img src="activity_trend.png" id="profilepic" style="height:280px; width:280px;">
    </div>
    </div>
  </div>
  
  <!--</div>-->

    <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>-->
  </div>
  <div class="col-xs-2">

  </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
