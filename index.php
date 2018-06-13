<?php $page = 'home'; ?>
<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width" >
		<meta charset="utf-8">
		<meta name="viewport"content="widt=device-widt,initial-scale=1,shrink-to-fit=no">
		<title> Weapons's informations </title>
		<!--Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
		<link rel="stylesheet" href="css/bootstrap-grid.min.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!--Goolge fonts-->
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
		<!--My CSS Esternal-->
		<link rel="stylesheet" href="css/test.css">
		<link rel="stylesheet" href="css/menu.css">
		<!--Favicon-->
		<link rel="icon" href="img/favicon2.ico">
	</head>
	<body background="img/bg2.gif">
		<!--mettere l'include php del header, farlo su un altro file-->
		<header style="background-color: #808334;">
		<div class="container">
			<div class="row">
				<h1> Weapons information </h1>
			<div class="menu">
				<?php include 'menu.php'; ?>
       		</div>
       		</div>
       	</div>
       	</header>

       	<main>	
       		<div class="container" style=" margin-top:30px;">
       			<div class="row">
       				<div class="col-sm-7">
       			<img src="img/arma.jpg" class="img-fluid" width="600">
       				</div>
       				<div class="col-sm-5">
       					<h2 style="color: #fffacd;"> Cosa facciamo? </h2>
       					<p style="color: #fffacd; font-size: 23px;"> Ci occupiamo di informare le persone sulle armi principali sia di piccola taglia (pistole, mitragliette) sia di grande taglia (carbaine e mitragliatrici). In alto a destra c'è il menu la quale si possono vedere le varie pagine con le relative sezioni di armi </p>
       				</div>
       			</div>
       		</div>
       		<div style="background-color: #f0e68c; margin-top: 20px;">
       		<div class="container">
       			<div class="row">
       				<div class="col-sm-12">
       					<h2>Chi siamo?</h2>	
       				</div>
       				<div class="col-sm-12">
       					<p style="font-size: 20px;"> Siamo la Weapons Information Corporation, la più grande azienda nazionale che parla di armi a 360 gradi. Lo facciamo solo per scopo informativo e non per guadagnarci; siamo degli svilupattori con tanta voglia di imparare e di programmare, quindi per ogni problema che riscontrate non esitate a chiedere. Premetto che questa è solo una beta del sito ed è ancora in fase di elaborazione. Grazie.</p>
					</div>
       			</div>
       		</div>
       		</div>
       	</main>
       	<footer>
       		<div class="container">
       			<hr>
       		<p style="color:#fffacd; font-family: verdana;font-size: 11px; text-align: center;"><em> © 2018 Weapons information. Tutti i diritti riservati.</p></em>
	</body>
</html>
