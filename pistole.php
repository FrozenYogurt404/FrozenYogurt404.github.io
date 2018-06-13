<?php $page = 'pistole'; ?>
<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width" >
		<meta charset="utf-8">
		<meta name="viewport"content="widt=device-widt,initial-scale=1,shrink-to-fit=no">
		<title> Weapons's informations </title>
		<!--Bootstrap CSS -->
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
       		<div style="color: #fffacd; background-color: gray; margin-top: -8px;">
       		<div class="container">
       			<h2> Pistole </h2>
       		</div>
       		</div>
       		<div class="container" style="margin-top: 20px;">
       			<div class="row">
       				<div class="col-sm-4">
       					<img src="img/beretta.jpg" class="img-fluid" alt="beretta">
       				</div>
       				<div class="col-sm-8">
       					<h3> Beretta serie 92 </h3>
       					<p style="color: white;"> Mi sembra legittimo, se si parla di pistole, parlare della leggendaria Beretta seire 92. Questa è il top delle pistole, per la sua potenza, leggerezza ed eleganza, questa combinazione fa in modo che la Beretta serie 92 sia una delle pistole più conosciute ed usate al mondo.</p>
       					<p style="color: white;">  La Beretta 92 (conosciuta anche nelle varianti Beretta 96 e Beretta 98) è una pistola semi-automatica a chiusura geometrica con blocco oscillante, progettata e costruita dalla Fabbrica d'Armi Pietro Beretta. </p>
       				</div>
       			</div>
       		</div>
       		<div style="background-color: #f0e68c; margin-top: 20px;">
       			<div class="container">
       				<div class="row">
       					<div class="col-sm-8">
       						<h3 style="color: black;">Smith & Wesson 686 </h3>
       						<p style="color: black;"> La 686 è una rivoltella calibro 357 Magnum e presenta un telaio resistentissimo, tale da non temere neanche le più violente ricariche; è la sorella gemella del modello 586, l'unica differenza è che la 686 è in acciaio inox, mentre la 586 è in acciaio al carbonio. La meccanica è semplice e impeccabile; la molla del grilletto è a spirale, mentre quella del cane a lamina ed estremamente robusta, il tamburo è basculante verso sinistra, ha una capienza di 6 colpi nel modello standard e 7 nel modello plus. Nei primi esemplari il cane aveva il percussore incorporato, tipico delle antiche rivoltelle; nei nuovi modelli, invece, il percussore è alloggiato all'interno del fusto.</p>
       					</div>
       					<div class="col-sm-4">
       						<img src="img/357.jpg" class="img-fluid" alt="la mitica magnum 357" style="margin-top: 10px; margin-bottom: 10px;">
       					</div>
       				</div>
       			</div>
       		</div>
       			<div class="container" style="margin-top: 20px;">
       				<div class="row">
       					<div class="col-sm-4">
       						<img src="img/glock.jpg" class="img-fluid" alt="glock">
       					</div>
       					<div class="col-sm-8">
       						<h3> Glock 17 </h3>
       						<p style="color: white;"> La Glock 17 è una pistola semiautomatica prodotta a partire dal 1983 dall'azienda austriaca Glock.</p>
       						<p style="color: white;"> Possiede la particolare caratteristica di avere il fusto costruito con uno speciale polimero che la rende estremamente leggera in rapporto alla potenza di fuoco e resistente alla corrosione (stabilità chimica in ambienti fortemente acidi o basici superiore a quella dell'acciaio) ed agli urti. Prove di resistenza a temperature estreme (-40 +200 °C), di immersione in acqua e di caduta fino da 120 metri sono state effettuate e superate per soddisfare le rigide richieste dell'esercito austriaco, norvegese e svedese.</p>
       					</div>
       				</div>
       			</div>
       	</main>

 	     <footer>
       	      <div class="container">
       		     <hr>
       		     <p style="color:#fffacd; font-family: verdana;font-size: 11px; text-align: center;"><em> © 2018 Weapons information. Tutti  i      diritti riservati.</p></em>
              </footer>
    </body>
</html>
