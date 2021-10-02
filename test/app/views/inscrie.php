

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

	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="index.php">Home</a> <span class="divider">/</span></li>
		<li class="active">Registration</li>
    </ul>

    
	<h3> Registration</h3>	
	<form class="form-horizontal" action="http://localhost/test/users/inscrie" method="POST" >
		<h4>Your personal information</h4>
		
<table>
<tr><td>&nbsp &nbsp &nbsp &nbsp &nbsp Titre</td>
	<td><INPUT type ="checkbox" name ="choix1" value= "1">M<INPUT type = "checkbox" name = "choix1" value="2"> Mme </td>
</tr>	
<tr><td>&nbsp &nbsp &nbsp &nbsp &nbsp Nom</td><td><input type = "text" name = "nom" size = "50" autocomplete="on"  required /></td></tr>
<tr><td>&nbsp &nbsp &nbsp &nbsp &nbsp Prenom</td><td><input type = "text" name = "prenom" size = "50"  required /></td></tr>
<tr><td>&nbsp &nbsp &nbsp &nbsp &nbsp Pseudo</td><td><input type = "text" name = "pseudo" size = "50" required /></td></tr>
<tr><td>&nbsp &nbsp &nbsp &nbsp &nbsp E-mail</td><td><input type = "Email" name = "email" size = "50" autocomplete="on"  required /></td></tr>
<tr><td>&nbsp &nbsp &nbsp &nbsp &nbsp Adresse</td><td><input type = "text" name = "adr" size = "50" required /></td></tr>		<!--required:saisie obligatoire-->
<tr><td>&nbsp &nbsp &nbsp &nbsp &nbsp Telephone</td><td><input type = "tel" name = "tel" maxlength="8" size = "50" required inputmode="numeric"  /></td></tr> <!--autocomplete="off/on" pour predir lorsque utulisateur tape -->
<tr><td><label for="pwd">&nbsp &nbsp &nbsp &nbsp &nbsp Mot de passe(8 characters minimum) :</label></td><td>
<input type="password" id="pwd" name="password" placeholder="Password"
   minlength="8" required /></td></tr>
 
 <tr><td><label for="pwd">&nbsp &nbsp &nbsp &nbsp &nbsp Retrapper votre mot de passe (8 characters minimum) :</label></td><td>
 <input type="password" id="pwd" name="password2" minlength="8" placeholder="Confirm Password" required /></td></tr>
  
<tr><td></td><td><input type="submit" value="Inscrire" /></td></tr>

</table>		
	</form>
</div>
</div>
</div>
</div>
</div>


	
	
  <?php
require("includes/Footer.php");
?>

</body>
</html>