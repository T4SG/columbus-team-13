<div class="col-xs-12 main-header">
    <div class="col-xs-2">
      <img src="logo.png" alt="" class="logo-img" id="logo"/>
    </div>

    <div class="col-xs-8">
      <ul class="nav nav-tabs">
        <li role="presentation"><a href="index.php">Home</a></li>
        <li role="presentation" class="active"><a href="profile.php">Profile</a></li>
        <li role="presentation"><a href="stories.php">My Story</a></li>
        <li role="presentation"><a href="personal_page.php">My Progress</a></li>
        <li role="presentation"><a href="References.php">Resources</a></li>
        <li role="presentation"><a href="teacher.php">Teacher Page</a></li>
      </ul>
    </div>

    <div class="col-xs-2 col-centered"> 
       <?php if(!isset($_GLOBALS['do_not_render_name'])): ?>
              <h3><span class="label label-default" id="green">Hello, Ms. Smith!</span></h3>
       <?php endif; ?>
    </div>

</div>