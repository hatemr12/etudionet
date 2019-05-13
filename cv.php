<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
<head>
<title>créer votre cv en ligne</title>
 <link rel="shortcut icon" href="icon.ico">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>

<!-- (Optional) Latest compiled and minified JavaScript translation files -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/i18n/defaults-*.min.js"></script>

  
<style>
.error {color: #FF0000;}
h1 {text-align: center;}
input {max-width: 100%;}

form{
max-width: 850px;
    background: #FAFAFA;
    padding: 30px;
    margin: 50px auto;
    box-shadow: 1px 1px 25px rgba(0, 0, 0, 0.35);
    border-radius: 10px;
border: 6px solid #305A72;}

body {
    background-color: #e6f2ff;}
.text{
	font-size:11px;
	font:"Times New Roman", Times, serif;}	
	.tab{
		margin:auto;
		alignment-adjust:central;}
.button {
  font: bold 11px Arial;
  text-decoration: none;
  background-color: #EEEEEE;
  color: #333333;
  padding: 8px 24px 8px 24px;
  border-top: 1px solid #CCCCCC;
  border-right: 1px solid #333333;
  border-bottom: 1px solid #333333;
  border-left: 1px solid #CCCCCC;
}
	
		
		
</style>
</head>
<body>
<?php
// define variables and set to empty values
$jobErr = $fnameErr = $lnameErr = $emailErr = $lnaissErr = $adresseErr = $cinErr = $telErr = "";
$sexe = $sf = $age = $job = $fname = $lname = $email  = $lnaiss = $adresse = $cin = $tel= $c1 = $c2 = $c3 = "";
	
	if (isset($_GET['submit']) and isset($_GET['age']) and isset($_GET['sf']) and isset($_GET['sexe'])){
	$age=$_GET['age'];
	$sf=$_GET['sf'];
	$sexe=$_GET['sexe'];
	 if (empty($_GET["job"])) {
    $jobErr = "*Veuillez saisir l'ntitulé du CV!";
  } else {
    $job = test_input($_GET["job"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$job)) {
      $jobErr = "*Seules les lettres et les espaces!"; 
    }
  }
	
	
  if (empty($_GET["fname"])) {
    $fnameErr = "*Veuillez saisir votre nom";
  } else {
    $fname = test_input($_GET["fname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
      $fnameErr = "*Seules les lettres et les espaces!"; 
    }
  }
  if (empty($_GET["lname"])) {
    $lnameErr = "*Veuillez Saisir votre prénom";
  } else {
    $lname = test_input($_GET["lname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {
      $lnameErr = "Seules les lettres et les espaces!"; 
    }
  }
  if (empty($_GET["lnaiss"])) {
    $lnaissErr = "*Veuillez Saisir le lieu de naissance!";
  } else {
    $lnaiss = test_input($_GET["lnaiss"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$lnaiss)) {
      $dnaissErr = "Format invalide!"; 
    }
  }
  
 if (empty($_GET["cin"])) {
    $cinErr = "*Veuillez Saisir la carte cin!";
  } else {
    $cin = test_input($_GET["cin"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[0-9]*$/",$cin)) {
      $cinErr = "Format invalide!"; 
    }
  }
 if (empty($_GET["tel"])) {
    $telErr = "*Veuillez Saisir Votre Numéro Du Téléphone!";
  } else {
    $tel = test_input($_GET["tel"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[0-9]*$/",$tel)) {
      $telErr = "Format invalide!"; 
    }
  }
  
  if (empty($_GET["adresse"])) {
    $adresseErr = "*Veuillez Saisir Votre Adresse!";
  } else {
    $adresse = test_input($_GET["adresse"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z0-9,.°' ]*$/",$adresse)) {
      $adresseErr = "Format invalide!"; 
    }
  }
  
  if (empty($_GET["email"])) {
    $emailErr = "*E-mail obligatoire";
  } else {
    $email = test_input($_GET["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "*Format d'email invalide!"; 
    }
  }
    
  
   if (empty($_GET["c1"])){
   $c1 = "";} else {$c1 = $_GET["c1"];}

   if (empty($_GET["c2"])){
   $c2 = "";} else {$c2 = test_input($_GET["c2"]);}
   
   if (empty($_GET["c3"])){
   $c3 = "";} else {$c3 = test_input($_GET["c3"]);}
}

	
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<!-- debut form -->
<form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
<h1 >Ce formulaire a été conçu pour vous aider à rédiger votre CV!</h1>
<br />
<h2>Information Personnel:</h2>
<!-- debut intitule -->

<div class="form-group">
      <label for="job">Intitulé du CV :</label>
	  
      <input type="text" class="form-control" name="job" value="<?php echo $job;?>" placeholder="Entrer Votre Métier">
	<div class="error"> <?php echo $jobErr;?> </div>
</div>
<!-- fin intitule -->
<!-- debut nom/prenom -->
<div class="form-group">
  <label for="lname">Nom:</label>
           <input type="text" class="form-control" name="lname" value="<?php echo $lname;?>" placeholder="Entrer Votre Nom">
	<div class="error"> <?php echo $lnameErr;?> </div>
	</div>
	
	<div class="form-group">
	  <label for="fname">Prénom:</label>
	<input type="text" class="form-control" name="fname" value="<?php echo $fname;?>" placeholder="Entrer Votre Prénom">
	<div class="error"> <?php echo $fnameErr;?> </div> 
</div>

<!-- fin nom/prenom -->
<!-- debut sexe -->
<?php
$var1="";
$var2="";
$var3="";
if(isset($_GET['sexe']))
{$s=$_GET['sexe'];
if($s=='Masculin'){$var2='selected';}elseif($s=='Féminin'){$var3='selected';}else{$var1='selected';}}

?>
<div>
<label for="sexe">Sexe:</label><br />
<select class="selectpicker" name="sexe">
<option <?php echo $var1; ?> value=""> </option>
<option <?php echo $var2; ?> value="Masculin">Masculin</option>
<option <?php echo $var3; ?> value="Féminin">Féminin</option>

</select>

</div>
<div>
<label for="age">Age:</label><br />
<select name="age" class="selectpicker">
<option value=""> </option>
   <?php for($i=18;$i<79;$i++){ ?>
		
      <option value="<?php echo $i; ?>"<?php if(!empty($_GET['age'])){if($_GET['age']==$i) echo 'selected';} ?> ><?php echo $i ?></option><?php } ?>
</select></div><br />
<!-- fin sexe -->

<!--debut lieu naiss -->


<div class="form-group">
<label for="lnaiss">Lieu de naissance:</label>
      <input type="text" class="form-control" name="lnaiss" value="<?php echo $lnaiss;?>" placeholder="Entrer le lieu de naissance">
	<div class="error"> <?php echo $lnaissErr;?></div>
</div>
<!--fin lieu naiss -->


<!-- debut  Situation familiale-->
<?php
$var1="";
$var2="";
$var3="";
$var4="";
$var5="";
if(isset($_GET['sf']))
{$f=$_GET['sf'];
if($f=='Célibataire'){$var1='selected';}
elseif($f=='Marié(e)'){$var2='selected';}
elseif($f=='Divorcé(e)'){$var3='selected';}
elseif($f=='Veuf(ve)'){$var4='selected';}
else{$var5='selected';}}

?>
<div>
<label for="sf">Situation familiale:</label><br />
<select name="sf" class="selectpicker">
	<option value=""> </option>
    <option value="Célibataire"<?php echo $var1; ?> >Célibataire</option>
    <option value="Marié(e)"<?php echo $var2; ?>>Marié(e)</option>
    <option value="Divorcé(e)"<?php echo $var3; ?>>Divorcé(e)</option>
    <option value="Veuf(ve)"<?php echo $var4; ?>>Veuf(ve)</option>
</select> </div><br />

<!-- fin Situation familiale -->
<!-- debut cin-->
<div class="form-group">
<label for="lnaiss">Carte d'identité nationale:</label>
<input type="text" class="form-control" name="cin" value="<?php echo $cin;?>" placeholder="Entrer votre carte d'identité nationale"/><div class="error"><?php echo $cinErr;?></div></div>
<!-- fin cin-->

<!-- debut adresse-->

<div class="form-group">
<label for="lnaiss">Adresse:</label>
<input type="text" name="adresse"  class="form-control" value="<?php echo $adresse;?>" placeholder="Entrer votre adresse"/><div class="error"><?php echo $adresseErr;?></div></div>
<!-- fin adresse -->
<!-- debut tel -->

<div class="form-group">
<label for="lnaiss">Téléphone:</label>
<input type="text" class="form-control" name="tel" value="<?php echo $tel;?>"placeholder="Entrer votre numéro de téléphone" /><div class="error"><?php echo $telErr;?></div></div>
<!-- fin tel -->
<!-- debut email-->

<div class="form-group">
<label for="lnaiss">E-mail:</label>
<input type="text" name="email" class="form-control" value="<?php echo $email;?>" placeholder="username@domain.suffix" /><div class="error"><?php echo $emailErr;?></div></div>
<!-- fin email-->
<br/><br/><br/>
<div class="form-group">
<h2>Diplome/Formation:</h2>
<textarea class="form-control" name="c1" cols="90" rows="5" placeholder="♦ 2013-2014: Diplôme mastère professionnel à l’Institut Supérieure de Biotechnologie
de Sfax.
Spécialité : Maintenance Biomédicale
..."><?php echo $c1; ?></textarea></div>


<div class="form-group">
<h2>Compétence/Expérience professionnel:</h2>
<textarea class="form-control" name="c2" cols="90" rows="5" placeholder="● Traitement numérique d’image
● Electronique analogiques et électronique numériques
● Electrotechnique et électronique de puissance
..."><?php echo $c2; ?></textarea></div>


<div class="form-group">
<h2>Centre d'intérêt:</h2>
<textarea class="form-control" name="c3" cols="90" rows="5" placeholder="Navigation sur internet, actualité informatique, High-Tech
..."><?php echo $c3; ?></textarea></div>
<br />

<!-- debut submit -->
<center>
<input class="button" type="submit" name="submit" value="Verifier Votre CV"/>
<a class="button" href="next2.php?sexe=<?php echo $sexe; ?>&amp;age=<?php echo $age; ?>&amp;sf=<?php echo $sf; ?>&amp;job=<?php echo $job; ?>&amp;fname=<?php echo $fname; ?>&amp;lname=<?php echo $lname; ?>&amp;email=<?php echo $email; ?>&amp;lnaiss=<?php echo $lnaiss; ?>&amp;adresse=<?php echo $adresse; ?>&amp;cin=<?php echo $cin; ?>&amp;tel=<?php echo $tel; ?>&amp;c1=<?php echo nl2br($c1); ?>&amp;c2=<?php echo nl2br($c2); ?>&amp;c3=<?php echo nl2br($c3); ?>">Imprimer</a>
<a class="button" href="cv.php">Ecrire à nouveau</a>
<a class="button" href="index.html">Retour à la page d'accueil</a>
</center>
<br/>
<div style="color:#F00" class="text" >*Vérifier votre CV avant d'imprimer</div>
<!-- fin submit -->
</form>
<!-- fin form -->





		
	


</body>
</html>











