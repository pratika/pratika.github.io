<?php
  $company = $_POST['company'];
  $user = $_POST['name'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $spam = $_POST['spam'];

  if (!strcmp($spam, "")) {
    $message = "";
    $message = sprintf("Company: %s, Name: %s, Email: %s, Mobile: %s\n", $company, $user, $email, $mobile);
    $fkey = fopen("contacts.txt", 'a');
    fwrite($fkey, $message);
    fclose($fkey);
  }
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset=utf-8>
    <title>Becabo-thank you</title>
	<link rel="stylesheet" type="text/css" media="screen" href="style.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="fonts/stylesheet.css" />
	<!--[if IE]>
  	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  	<script src="js/selectivizr-min.js"></script>
	<![endif]-->
	<!--[if !IE 7]>
		<style type="text/css">
			#container { display:table; height:100% }
		</style>
	<![endif]-->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>

<div id="wrap-city">
  <div class="header-container">
    <header>
      <a class="logo" href="index.html"><img src="images/logo.png" alt="Team" /></a>
      <nav>
        <ul id="nav">
          <li><a class="active-tab"href="index.html">advertisers</a></li>
          <li><a href="product.html">product</a></li>
          <li><a href="team.html">team</a></li>
        </ul>
      </nav>
    </header>
  </div>

  <div id="form-thanks">
  </div>	
</div><!-- #wrap-city -->



</body>
</html>
