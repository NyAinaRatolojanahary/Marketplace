<!DOCTYPE html>
<html>
<head>
	<title>Se connecte</title>
	<link rel="stylesheet" type="text/css" href=" <?php echo base_url();?>/assets/css/login.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="container">
		<div class="img">
			<img src="img/bg.svg">
		</div>
		<div class="login-content">
			<form action="index.html">
				<img src="img/avatar.svg">
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Adresse e-mail ou numero de tel.</h5>
           		   		<input type="text" class="input">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Mot de passe</h5>
           		    	<input type="password" class="input">
            	   </div>
            	</div>
            	<a href="#">Mot de passe oublie?</a>
            	<input type="submit" class="btn" value="Se connecter">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/main.js"></script>
</body>
</html>
