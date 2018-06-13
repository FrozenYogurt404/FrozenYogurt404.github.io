<?php $page = 'carabine'; ?>
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
       			<h2> Carabine </h2>
       		</div>
       		</div>
       		<div class="container" style="margin-top: 20px;">
       			<div class="row">
       				<div class="col-sm-4">
       					<img src="img/ak47.jpg" class="img-fluid" alt="ak47">
       				</div>
       				<div class="col-sm-8">
       					<h3>AK-47 </h3>
       					<p style="color: white;"> Quando si parla di questo genere di fucili, non può di certo mancare il kalashnikov o meglio, l' AK 47. Questo fucile creato durante la guerra fredda in russia è ancora il più usato e il più conosciuto al mondo.</p>

       					<p style="color: white;">L'AK-47 (nome ufficiale in russo: Автомат Калашникова 1947 года?, Avtomat Kalašnikova 1947 goda), meglio noto come kalašnikov o kalashnikov.
						Sviluppato nell'Unione Sovietica da Michail Timofeevič Kalašnikov, il prototipo originale fu il primo fucile d'assalto di seconda generazione, dopo il tedesco StG 44. È considerato il fucile d'assalto più diffuso e maneggevole al mondo. </p>
					</div>
				</div>
			</div>
		<div style="background-color: #f0e68c; margin-top: 20px;">
       			<div class="container">
       				<div class="row">
       					<div class="col-sm-8">
       						<h3 style="color: black;">M4  </h3>
       						<p> L'M4 (conosciuto anche come Colt M4 dall'azienda statunitense che lo produce, la Colt's Manufacturing Company) è un fucile d'assalto prodotto negli USA a partire dal 1994.
							Disponibile anche in configurazione carabina, è una versione migliorata dell'M16A2. </p>
							<p> Il peso dell'M4 è poco superiore alla metà di un M16A2 risultando quindi più leggero e maneggevole, di contro la canna più corta (lunga solo 14,5 pollici) rispetto all'M16 ne diminuisce le capacità balistiche, specialmente sulle distanze oltre i 200 m. </p>
       					</div>
       					<div class="col-sm-4">
       						<img src="img/m4.jpg" class="img-fluid" alt="m4 the best" style="margin-top:20px; margin-bottom:20px;">
       					</div>
       				</div>
       			</div>
       		</div>
       			<div class="container" style="margin-top: 20px;">
       				<div class="row">
       					<div class="col-sm-4">
       						<img src="img/fnscar.jpg" class="img-fluid" alt="fnscar" style="margin-top: 17px;">
       					</div>
       					<div class="col-sm-8">
       						<h3> FN SCAR </h3>
       						<p style="color: white;">L'FN SCAR è un fucile d'ordinanza modulare a fuoco selettivo sviluppato dalla Fabrique National d'Herstal (FN) su richiesta dello USSOCOM. </p>
       						<p style="color: white;"> Il fucile ha dimostrato una bassa sensibilità alla sabbia fine e quindi una notevole affidabilità in condizioni estreme. Durante un test dell'esercito americano compiuto su dieci esemplari di SCAR, Heckler & Koch XM8, Heckler & Koch HK416 e carabine M4, che consisteva nello sparare 6000 colpi con ciascun fucile in ambiente sabbioso, lo SCAR si è piazzato secondo, essendosi inceppato 226 volte.</p>
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
