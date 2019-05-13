<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
<head>
 <link rel="shortcut icon" href="icon.ico">
<style>
body{ background-color:#f0f0f5;
margin:auto}
.ee{
    background-color:lightblue;
	width:700px;
    margin: auto;
}
</style></head>
<body>
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("fdb14.biz.nf","2293100_studentguide","20student20","2293100_studentguide");
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
?><center><h1 style=" margin-top:-0px; color:#0191d8;">Les offres disponibles</h1></center><?php
$sql = "SELECT * FROM stu2";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){?>

              
       <div class="ee">
     	<h3><?php echo $row['titre'] ; ?></h3>
           		
           		<div style="margin-left: 25px;">
           <strong><h3><?php echo $row['nom'] ; ?></h3> </strong>
				<strong>Contact :</strong>
				<ul>
					<li><strong>Email: </strong><?php echo $row['Email']; ?></li>
					<li><strong>Tel :</strong><?php echo  $row['tel'] ;?></li>
					<li><strong>Adresse :</strong><?php echo  $row['adresse'] ; ?></li>
				</ul>
				<strong>Détail :<br></strong>
				 <?php if($row['detail']!=null){?>
				  <?php echo nl2br($row['detail']) ;} 
				 else {echo "Aucun detail" ;} ?>

           		</div>	
<hr > 				
</div>
		
		<?php
        }
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "Aucun offres disponible pour le moment.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

 
// Close connection
mysqli_close($link);
?>
</body>


