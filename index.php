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
    <h2 class="italics-header">Profile</h2>
    <hr />

    <!--<div class="container" id="profile">-->
    <div class="row">
      <div class="col-lg-6 col-lg-offset-1">
      <h1 class="no-top-margin">John Doe</h1>
      
      <p><b>Birth Date (Age): </b>April 11, 2001 (14 years old)</p>
      <p><b>Address: </b>123 Road St., Akron, OH 44322 <p>
      <p><b>School: </b>Akron High School</p>
      <h4>Additional Personal Information</h4>
      <p>Tell us about your week! High points, low points and everything in between. Anything we can help you with? </p>
        <div class="row">
          <div class="col-lg-10">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Enter personal info here" id="info" onkeydown="if (event.keyCode == 13) document.getElementById('sendinfo').click()">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button" id="sendinfo" onClick="send()">Send Info</button>
              </span>
            </div>
          </div>
        </div>
        
    </div>
    <div class="col-lg-4>" id="prof">
      <img src="images/create-cartoon-caricatures_ws_1355965104.png" id="profilepic" style="height:280px; width:280px;">
    </div>

  </div>
  <h3 id="centered" style="text-align:center">Academic Progress</h3>

 
  
  
  <div>
    <script type="text/javascript"
          src="https://www.google.com/jsapi?autoload={
            'modules':[{
              'name':'visualization',
              'version':'1',
              'packages':['corechart']
            }]
          }"></script>

    <script type="text/javascript">
      google.setOnLoadCallback(drawChart);

      function drawChart() {
		  var jsonData = $.ajax({
          url: "getData.php",
          dataType: "json",
          async: false
          }).responseText;
		  
		  
		  
       var data = new google.visualization.DataTable(jsonData);

        var options = {
          title: 'Student Performance',
          curveType: 'function',
		  pointSize: 20,
          legend: { position: 'bottom' }
			
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
  </div>
  <div>
    <div id="curve_chart" style="width: 900px; height: 500px"></div>
  </div>
 
 
 
 <form>
<input type="text" id="formValueId" name="valueId"/>
<input type="button" id="theButton"/>
</form>

<script>
	var button = document.getElementById("theButton"),
	value =  button.form.valueId.value;
</script
 
 
 
  <!--</div>-->

    <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>-->
  </div>
  <div class="col-xs-2">
    <div class="container" id="needspadding">
      <button class="btn btn-primary" type="button">
      View My Inbox <span class="badge">8</span>
    </div>
</button>
  </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
