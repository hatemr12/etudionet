<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
 <link rel="shortcut icon" href="icon.ico">
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

     <title>Votre CV</title>

     <style type="text/css">
        * { margin: 0; padding: 0; }
        body { font: 16px Helvetica, Sans-Serif; line-height: 24px; background: url(images/noise.jpg); }
        .clear { clear: both; }
        #page-wrap { width: 800px; margin: 40px auto 60px; }
        #pic { float: right; margin: -30px 0 0 0; }
        h1 { margin: 0 0 16px 0; padding: 0 0 16px 0; font-size: 42px; font-weight: bold; letter-spacing: -2px;#999; }
        h2 { font-size: 20px; margin: 0 0 6px 0; position: relative; }
        h2 span { position: absolute; bottom: 0; right: 0; font-style: italic; font-family: Georgia, Serif; font-size: 16px; color: #999; font-weight: normal; }
        p { margin: 0 0 16px 0; }
        a { color: #999; text-decoration: none; border-bottom: 1px dotted #999; }
        a:hover { border-bottom-style: solid; color: black; }
        #objective { width: 500px; float: left; }
        #objective p { font-family: Georgia, Serif; font-style: italic; color: #666; }
        dt { font-style: italic; font-weight: bold; font-size: 18px; text-align: right; padding: 0 26px 0 0; width: 150px; float: left; height: 100px; border-right: 1px solid #999;  }
        dd { width: 600px; float: right; }
        dd.clear { float: none; margin: 0; height: 15px; }
     </style>
</head>

<body onload="window.print()">

    <div id="page-wrap">
    
        
    
        <div id="contact-info" class="vcard">
        
            <!-- Microformats! -->
        
            <h1 class="fn"><?php echo $_GET['fname'];echo " ";echo $_GET['lname']; ?></h1>
			 
			
            <p>
			
                 <h2><?php echo $_GET['job']; ?></h2>
				<?php echo $_GET['sexe']; ?> <br />
				<?php echo $_GET['sf']; ?>, <?php echo $_GET['age']; ?> ans<br>
				Née à : <?php echo $_GET['lnaiss']; ?> <br>
				Cin : <?php echo $_GET['cin']; ?> <br>
				Téléphone : <span class="tel"><?php echo $_GET['tel']; ?></span><br />
                Email : <span > <?php echo $_GET['email']; ?> </span> <br />
				Adresse : <?php echo $_GET['adresse']; ?> <br>
            </p>
        </div>
                
       
        
        <div class="clear"></div>
        
        <dl>
            <dd class="clear"></dd>
            
            <dt>Diplome/Formation</dt>
            <dd>
                  <p> <?php $a=$_GET['c1']; if(empty($a)) {echo "aucun Diplome/Formation"; } else{ echo $a;} ?></p><br />
               
                  
            </dd>
            
            <dd class="clear"></dd>
            
            <dt> <?php if(!empty($_GET['c2'])){echo "Expérience professionnel";}?> </dt>
            <dd>
                
                <p><?php echo ($_GET['c2']); ?></p>
                
                
            </dd>
            
            <dd class="clear"></dd>
            
            <dt><?php if(!empty($_GET['c3'])){echo "Centre d'intérêt";}?></dt>
            <dd>
               
              <p> <?php echo ( $_GET['c3']); ?> </p>
                
            </dd>
            
           
            
           
         
           
        </dl>
        
       
    
    </div>

</body>

</html>