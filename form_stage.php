<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
<head>
<title>déposer votre demande</title>
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

</head>
<style type="text/css">
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
	
	}
.form-style-1 {
    margin:10px auto;
    max-width: 400px;
    padding: 20px 12px 10px 20px;
    font: 13px "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
.form-style-1 li {
    padding: 0;
    display: block;
    list-style: none;
    margin: 10px 0 0 0;
}
.form-style-1 label{
    margin:0 0 3px 0;
    padding:0px;
    display:block;
    font-weight: bold;
}
.form-style-1 input[type=text], 
.form-style-1 input[type=date],
.form-style-1 input[type=datetime],
.form-style-1 input[type=number],
.form-style-1 input[type=search],
.form-style-1 input[type=time],
.form-style-1 input[type=url],
.form-style-1 input[type=email],
textarea, 
select{
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    border:1px solid #BEBEBE;
    padding: 7px;
    margin:0px;
    -webkit-transition: all 0.30s ease-in-out;
    -moz-transition: all 0.30s ease-in-out;
    -ms-transition: all 0.30s ease-in-out;
    -o-transition: all 0.30s ease-in-out;
    outline: none;  
}
.form-style-1 input[type=text]:focus, 
.form-style-1 input[type=date]:focus,
.form-style-1 input[type=datetime]:focus,
.form-style-1 input[type=number]:focus,
.form-style-1 input[type=search]:focus,
.form-style-1 input[type=time]:focus,
.form-style-1 input[type=url]:focus,
.form-style-1 input[type=email]:focus,
.form-style-1 textarea:focus, 
.form-style-1 select:focus{
    -moz-box-shadow: 0 0 8px #88D5E9;
    -webkit-box-shadow: 0 0 8px #88D5E9;
    box-shadow: 0 0 8px #88D5E9;
    border: 1px solid #88D5E9;
}
.form-style-1 .field-divided{
    width: 49%;
}

.form-style-1 .field-long{
    width: 100%;
}
.form-style-1 .field-select{
    width: 100%;
}
.form-style-1 .field-textarea{
    height: 100px;
}

.form-style-1 .required{
    color:red;
}
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
.error {color: #FF0000;}
</style>
<body><div  class="eee" >
<?php 
// define variables and set to empty values
$nomErr =$EmailErr = $telErr = $adresseErr = $titreErr = "";
$nom =  $Email = $adresse = $tel= $titre= "";
	
	if (isset($_GET['nom']) and isset($_GET['Email']) and isset($_GET['tel']) and isset($_GET['titre']) and isset($_GET['adresse'])){
	
	 if (empty($_GET["nom"])) {
    $nomErr = "*Veuillez saisir nom de l'entreprise";
  } else {
    $nom = test_input($_GET["nom"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$nom)) {
      $nomErr = "*Seules les lettres et les espaces!"; 
    }
  }
 if (empty($_GET["tel"])) {
    $telErr = "*Veuillez Saisir Numéro Du Téléphone!";
  } else {
    $tel = test_input($_GET["tel"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[0-9]*$/",$tel)or strlen($_GET["tel"])!=8) {
      $telErr = "Format invalide!"; 
    }
  }
  
  if (empty($_GET["adresse"])) {
    $adresseErr = "*Veuillez Saisir l'Adresse!";
  } else {
    $adresse = test_input($_GET["adresse"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z0-9,.°' ]*$/",$adresse)) {
      $adresseErr = "Format invalide!"; 
    }
  }
  
  if (empty($_GET["Email"])) {
    $EmailErr = "*E-mail obligatoire";
  } else {
    $Email = test_input($_GET["Email"]);
    // check if e-mail address is well-formed
    if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
      $EmailErr = "*Format d'email invalide!"; 
    }
  }
   	 if (empty($_GET["titre"])) {
    $titreErr = "*Veuillez saisir le titre";
  } else {
    $titre = test_input($_GET["nom"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$titre)) {
      $titreErr = "*Seules les lettres et les espaces!"; 
    }
  } 
  
}

	
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<form class="form-style-1" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="get">
<!-- NOM-->
<h2>Déposer votre demande</h2><br><br>
<div><label for="nom">Nom/Entreprise:</label>
<input class="field-long"type="text" name="nom" value="<?php echo $nom ?>" ></div>
<div class="error"> <?php echo $nomErr;?></div>
<!-- eMAIL-->
<div> <label for="email">Email:</label> <input class="field-long"type="text" name="Email" value="<?php echo $Email ?>" ></div><div class="error"> <?php echo $EmailErr;?></div>
<!-- TEL-->
<div>   	<label for="tel">Téléphone:</label>
       <input class="field-long"type="text" name="tel" value="<?php echo $tel ?>"  ></div><div class="error"> <?php echo $telErr;?></div>
<!-- ADRESSE-->    
<div><label for="adresse">Adresse:</label>
     <input class="field-long"type="text" name="adresse" value="<?php echo $adresse ?>" ></div><div class="error"> <?php echo $adresseErr;?></div>
     
<!-- TITRE-->    
     <div>
<label for="titre">Titre:</label><input class="field-long"type="text" name="titre"  value="<?php echo $titre ?>">  </div><div class="error"> <?php echo $titreErr;?></div>     
<!-- DETAIL-->
<div><label for="detail">Détail:</label>
   <textarea class="field-long field-textarea" name="detail"></textarea></div><br><br><br>
    <center>
    <input class="button" type="submit" value="Envoyer">
    <a class="button" href="form_stage.php" >Écrire à nouveau</a>
	<a class="button" href="index.html">Page d'accueil</a></center>
	<br><br><br><br>
</form>
<?php
$link = mysqli_connect("fdb14.biz.nf","2293100_studentguide","20student20","2293100_studentguide");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
if (isset($_GET['nom']) and isset($_GET['Email']) and isset($_GET['tel']) and isset($_GET['titre']) and isset($_GET['adresse'])
and empty($nomErr)and empty($EmailErr)and empty($telErr)and empty($titreErr)and empty($adresseErr)){
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

// Escape user inputs for security
$nom = mysqli_real_escape_string($link, $_REQUEST['nom']);
$Email = mysqli_real_escape_string($link, $_REQUEST['Email']);
$tel = mysqli_real_escape_string($link, $_REQUEST['tel']);
$adresse = mysqli_real_escape_string($link, $_REQUEST['adresse']);
$titre = mysqli_real_escape_string($link, $_REQUEST['titre']);
$detail = mysqli_real_escape_string($link, $_REQUEST['detail']);
// attempt insert query execution
$sql = "INSERT INTO stu (nom, Email,tel,adresse,titre,detail) VALUES ('$nom','$Email','$tel','$adresse','$titre','$detail')";
if(mysqli_query($link, $sql)){
    echo "demande envoyée.";
} 
else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);}
?>

</div></body>
</html>