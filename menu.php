<ul> 
<?php
	#menu della pagina "index.php" (principale)

	if ($page == 'home') {
		print '<strong><li class="active"><a href="index.php">Home</a></li></strong>';
	}
	else { 
		print '<li><a href="index.php">Home</a></li>';
	}

	#menu della pagina "pistole.php"

	if ($page == 'pistole') {
		print '<strong><li class="active"><a href="./pistole.php">Pistole</a></li></strong>';
	}
	else {
		print '<li><a href="./pistole.php">Pistole</a></li>';
	}

	#menu della pagina "mitragliette.php"

	if ($page == 'mitragliette') {
		print '<strong><li class="active"><a href="./mitragliette.php">Mitragliette</a></li></strong>';
	}
	else {
		print '<li><a href="./mitragliette.php">Mitragliette</a></li>';
	}

	#menu della pagina "carabine.php"

	if ($page == 'carabine') {
		print '<strong><li class="active"><a href="carabine.php">Carabine</a></li></strong>';
	}
	else {
		print '<li><a href="carabine.php">Carabine</a></li>';
	}

	#menu della pagina "mitragliatrici.php"

	if ($page == 'mitragliatrici') {
		print '<strong><li class="active"><a href="mitragliatrici.php">Mitragliatrici</a></li></strong>';
	}
	else {
		print '<li><a href="mitragliatrici.php">Mitragliatrici</a></li>';
	}
?>

</ul>
