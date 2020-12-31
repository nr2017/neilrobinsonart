<!DOCTYPE HTML>  
<html>
<html lang="en">
<title>neilrobinson.me.uk</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/contact_me.css">
<link rel="stylesheet" href="css/nar_stylesheet.css">
<link rel="stylesheet" href="css/darkmode.css">
<script src="darkFunction.js"></script>

<head>
<style>

.error {color: #FF0000;
}

.success {
	color: #FF9966;
	text-align: center;
	font-weight: bold;
	font-size: 14px;
}

</style>
</head>
<body>  

<!-- navbar -->
<div class="w3-top">
  <div class="w3-bar w3-blue-grey w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="index.html" class="w3-bar-item w3-button w3-padding-large">neil robinson</a>
    <a href="bio.html" class="w3-bar-item w3-button w3-padding-large w3-hide-small">biography</a>
	<a href="exhibit.html" class="w3-bar-item w3-button w3-padding-large w3-hide-small">exhibitions</a>
    <a href="prints.html" class="w3-bar-item w3-button w3-padding-large w3-hide-small">printmaking</a>
	<a href="paintings.html" class="w3-bar-item w3-button w3-padding-large w3-hide-small">paintings</a>
	<a href="sketches.html" class="w3-bar-item w3-button w3-padding-large w3-hide-small">sketches</a>
    <a href="blog.html" class="w3-bar-item w3-button w3-padding-large w3-hide-small">blog</a>
	<a href="shop.html" class="w3-bar-item w3-button w3-padding-large w3-hide-small">shop</a>
	<a href="links.html" class="w3-bar-item w3-button w3-padding-large w3-hide-small">links</a>
	<a href="contact.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small"><b>contact</b></a>
	</i><button onclick="darkFunction()" class="fa fa-adjust w3-bar-item w3-button w3-padding-16 w3-hide-small"></button>
	
  </div>
</div>
<script src="navBar.js"></script>

<!-- navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<div id="navBar" class="w3-bar-block w3-blue-grey w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="bio.html" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">biography</a>
  <a href="exhibit.html" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">exhibitions</a>
  <a href="prints.html" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">printmaking</a>
  <a href="paintings.html" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">paintings</a>
  <a href="sketches.html" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">sketches</a>
  <a href="blog.html" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">blog</a>
  <a href="shop.html" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">shop</a>
  <a href="links.html" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">links</a>
  <a href="contact.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()"><b>contact</b></a>
</div>

<!-- page content -->
  <div class="w3-content" style="max-width:2000px;margin-top:46px">
  <div class="w3-container w3-content w3-padding-32" style="max-width:600px">
  <h1 class="w3-wide w3-center">contact me</h1>
  <p class="w3-center">Please fill out the e-form below to get in touch. &#128512;</p>
  <div class="w3-display-container">
  
<?php include 'form_process.php';?>
<p><span class="error">* required field</span></p>
<form method="post" id="contact" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <div class="row">
  <br>
  <b>name:</b><br><input type="text" class="w3-left" name="name" placeholder="Your name.." value="<?php echo $name;?>">
  <span class="error"><b>*</b> <?php echo $nameErr;?></span>
  <br>
  <br>
  
  <b>email:</b><br><input type="text" class="w3-left" name="email" placeholder="Your email.." value="<?php echo $email;?>">
  <span class="error"><b>*</b> <?php echo $emailErr;?></span>
  <br>
  <br>
  <b>message:</b><br><textarea name="message" class="w3-left" placeholder="Write something here.." rows="5" cols="40"><?php echo $message;?></textarea>
  <br>
  <br>
  
  <input type="submit" value="submit" class="w3-button w3-block w3-center w3-blue-grey"> 
  
  <div class="success"><?= $success; ?></div>
</form>

<!-- end of page content -->
</div>

<!-- footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-white w3-xlarge">
  <a id = "SML" href="https://www.facebook.com/groups/stockportinprint/?ref=share" class="fa fa-facebook"></a>
			<a id = "SML" href="https://twitter.com/nrobinsonart" class="fa fa-twitter"></a>
			<a id = "SML" href="https://www.instagram.com/nrobinsonart/?hl=en" class="fa fa-instagram"></a>
			<a id = "SML" href="https://vimeo.com/nrvimeo" class="fa fa-vimeo"></a>
			<a id = "SML" href="https://www.redbubble.com/people/NR-Art-Prints/shop?asc=u" class="fa fa-shopping-cart"></a>
  
  <p class="w3-medium">Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
  <div class="w3-white w3-center w3-padding-12"><span lang="en-gb"><h6>&#169; Neil Robinson</h6>
  <br></br>
</footer>

</body>
</html>