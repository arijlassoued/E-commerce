
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        
        require("includes/Head.php");
    ?>
    <title>E-Shop</title>
</head>
<body>
<?php
require("includes/Header.php");
require("includes/Navigation.php");
?>
<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
<!-- Sidebar end=============================================== -->
	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="http://localhost/test/pages/index">Home</a> <span class="divider">/</span></li>
		<li class="active">Login</li>
    </ul>
	<h3> Bienvenue </h3>	
	<hr class="soft"/>
	
	<div class="row">
		<div class="span4">
			<div class="well">
			<h3>NOUVEAU CLIENT SUR NOTRE BOUTIQUE ?</h3><br/>
			Bonjour chèr(e) inconnu(e), on se connaît pas...</br>Inscrivez-vous pour commander et accéder à nos services,
			c'est simple et rapide !<br/><br/><br/>
			<form action="http://localhost/test/users/inscrie">
			  <div class="controls">
			  <button type="submit" class="btn block">Créer mon compte</button>
			  </div>
			</form>
		</div>
		</div>
		<div class="span1"> &nbsp;</div>
		<div class="span4">
			<div class="well">
			<h3>DÉJÀ CLIENT SUR NOTRE BOUTIQUE ?</h3>
			<h5>Connectez-vous pour accéder à votre compte.</h5>
			
			<form action="http://localhost/test/users/login" method="POST">
			  <div class="control-group">
				<label class="control-label" for="inputEmail1">Email</label>
				<div class="controls">
				  <input class="span3" name="email" type="text" id="inputEmail1" placeholder="Email">
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label" for="inputPassword1">Mot de passe </label>
				<div class="controls">
				  <input type="password" name="password" class="span3"  id="inputPassword1" placeholder="Password">
				</div>
			  </div>
			  <div class="control-group">
				<div class="controls">
				  <button type="submit" class="btn">Je me connecte </button> <a href="forgetpass.php">Mot de passe oublié ?</a>
				 
				</div>
			  </div>
			  <div class="input-box">
                    <label for="rememberme" class="input-box">
                        <input type="checkbox" name="login[rememberme]" class="left" id="rememberme" title="Se souvenir de moi" />
                        Se souvenir de moi sur cet ordinateur                    </label>
               </div>
			</form>
		</div>
		</div>
	</div>	
	
</div>
</div></div>
</div>



	
  <?php
require("includes/Footer.php");
?>

</body>
</html>