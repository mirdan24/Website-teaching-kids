<!DOCTYPE html>
<html>
<head>
	<style>
		td{
			border:solid #001 1px;
			padding: 5px
		}
	</style>
	<meta charset="utf-8">
	<title></title>
</head>

<body bgcolor="gray">
<a href="index.html"><font face="Arial" color="white"><h5>Powrót do strony głównej</h5></font></a>
	<center>	
		<?php

if (isset($_POST["imie"])) {
	$imie = $_POST["imie"];
	$nazwisko = $_POST["nazwisko"];
	$wiek = $_POST["wiek"];
	$ocena = $_POST["ocena"];
	$h = 1;

	if (empty($imie) || empty($nazwisko) || empty($wiek) || empty($ocena))
	 {
		echo "Wypełnij wszystkie pola";	
	}
	else 
	{
		$conn = new mysqli("sql101.byethost.com", "b22_24250554", "latawiec123", "b22_24250554_listagosci");


		$odp = $conn->query("INSERT INTO lista(id,imie,nazwisko,wiek,ocena) VALUES('$h','$imie', '$nazwisko', '$wiek','$ocena') ");

		if ($odp) 
		{
			$h = $h +1;
			echo "Dodano użytkownika";
		}
		else
		{
			echo "Nie udało się dodać użytkownika";
		}
		$conn->close();

}

}

	?>

	<?php

if (isset($_POST["id2"]))
{

		$conn = new mysqli("sql101.byethost.com", "b22_24250554", "latawiec123", "b22_24250554_listagosci");
		$id2 = $_POST["id2"];
		$imie2 = $_POST['imie2'];
		$nazwisko2 = $_POST['nazwisko2'];
		$wiek2 = $_POST['wiek2'];
		$ocena2 = $_POST['ocena2'];
		//$edycja = "DELETE FROM kontakt WHERE id='$id2'";
		$edycja1 = "UPDATE lista SET imie='$imie2', nazwisko='$nazwisko2', wiek='$wiek2', ocena='$ocena2' WHERE id='$id2' ";
		//$edycja2 = "UPDATE kontakt SET nazwisko='$nazwisko2' WHERE id='$id2' ";
		//$edycja3 = "UPDATE kontakt SET numer='$numer2' WHERE id='$id2' ";

		if (mysqli_query($conn,$edycja1))
		{
			echo "<br> udało sie edytowac imie <br>";
		}
		else
		{
			echo "<br> Upssssss <br>";
		}

				$conn->close();
	}


	?>
	<?php

if (isset($_POST["id3"]))
{

		$conn = new mysqli("sql101.byethost.com", "b22_24250554", "latawiec123", "b22_24250554_listagosci");
		$id3 = $_POST["id3"];
		$edycjaa = "DELETE FROM lista WHERE id='$id3'";

		if (mysqli_query($conn,$edycjaa))
		{
			echo "<br> udało sie usunac <br>";
		}
		else
		{
			echo "<br> Upssssss <br>";
		}

				$conn->close();
	}


	?>

	<?php

	$conn = new mysqli("sql101.byethost.com", "b22_24250554", "latawiec123", "b22_24250554_listagosci") or die("Błąd");

	$wynik = $conn->query("SELECT * FROM lista");


	echo "<table>";

	if($wynik->num_rows > 0)
	{
		echo "<br>";
		echo "<table>";
		echo "<tr>";
		echo "<th>id</th>";
		echo "<th>imie</th>";
		echo "<th>nazwisko</th>";
		echo "<th>wiek</th>";
		echo "<th>ocena</th>";
		echo "</tr>";
		$h = 1;

		while ($wiersz = $wynik->fetch_assoc()) {

			echo "<tr>";
			echo "<td>".$h."</td>";
			echo "<td>".$wiersz["imie"]    ."</td>";
			echo "<td>".$wiersz["nazwisko"]."</td>";
			echo "<td>".$wiersz["wiek"]."</td>";
			echo "<td>".$wiersz["ocena"]."</td>";
			$h = $h +1;
		}

echo "</table>";

	}else{
		echo "Nie ma nic w bazie danych";
	}


	$conn->close();


	?>





	<form method="POST" action="hehe.php">

		<br>
		<h2>Dodaj:<br></h2>

		Imie: <input type="text" name="imie"><br>

		Nazwisko: <input type="text" name="nazwisko"><br>

		Wiek: <input type="number" name="wiek"><br>

		Ocena z Matematyki: <input type="number" name="ocena"><br>

		<input type="submit" value="OK">
		
	</form>

		<form method="POST" action="hehe.php">

		<br>
		<h2>Edytuj:<br></h2>

		ID: <input type="text" name="id2"><br>

		Imie: <input type="text" name="imie2"><br>

		Nazwisko: <input type="text" name="nazwisko2"><br>

		Wiek: <input type="number" name="wiek2"><br>

		Ocena z Matematyki: <input type="number" name="ocena2"><br>
		
		<input type="submit" value="Edytuj">
		
	</form>

	<form method="POST" action="hehe.php">

		<br>
		<h2>Usuń:<br></h2>

		ID: <input type="text" name="id3"><br>

		<input type="submit" value="Usun">

	</form>

</center>
</body>
</html>