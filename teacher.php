<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Teacher Page</title>

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
  <?php include_once('headerteacher.php'); ?>
  <div class="col-xs-2"> </div>
  <div class="col-xs-8">
    <h2 class="italics-header">Welcome, Ms. Smith!</h2>
    <hr />
    <div class="row">
      <div class="col-lg-5 col-lg-offset-1">
        <h3>Your Information</h3>
        <p><b>School: </b>Akron High School<p>
        <p><b>Subject(s): </b>Mathematics, Computer Science<p>
      </div>
      <div class="col-lg-4 col-lg-offset-1">
      <h3>View your Students</h3>
      <p>Select a student to view their profiles</p>
      <div class="dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
          Student
          <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
          <li><a href="profile.php">John Doe</a></li>
          <li><a href="#">Jane Doe</a></li>
          <li><a href="#">Joe Doe</a></li>
          <li><a href="#">Jill Doe</a></li>
          <li><a href="#">JSon Doe</a></li>
          <li><a href="#">Jess Doe</a></li>
        </ul>
      </div>
              
    </div>
    </div>

    <div class="row">

    <div class="col-xs-12" id="inbox">
      <h3 id="centered" style="text-align:center">Inbox</h3>
        <table class="table table-bordered" id="teacherinbox">
        <tr id="heading">
          <th>Student</th>
          <th>Message</th>
          <th>Timestamp</th>
        </tr>
        <tr id="unread">
          <td>John Doe</td>
          <td>I've been feeling really stressed out lately due to school and family life.</td>
          <td>2015.10.03</td>
        </tr>
        <tr id="tdata">
          <td>Jane Doe</td>
          <td>I haven't been to school often because my mom's been sick and I need to take care of my sister.</td>
          <td>2015.10.02</td>
        </tr>
        <tr id="tdata">
          <td>Jess Doe</td>
          <td>There is this kid who keeps bullying me and I am not sure what to do.</td>
          <td>2015.10.01</td>
        </tr>
      </table>
    </div>

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
