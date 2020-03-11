<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>liczydło</title>
</head>
<body bgcolor="blue">
<a href="index.html"><font face="Arial" color="white"><h5>Powrót do strony głównej</h5></font></a>

<form action="Kalkulator2.php" method="POST">
<center>Podaj pierwszą liczbę:<input type="text" name="liczba1" size="10"><br/><br/>
Działanie na wybranych liczbach:<select name="dzialanie">
    <option value="dodawanie">+-dodawanie</option>
    <option value="odejmowanie">--odejmowanie</option>
    <option value="mnozenie">*-mnożenie</option>
    <option value="dzielenie">/-dzielenie</option>
  </select><br/><br/>
Podaj drugą liczbę:<input type="text" name="liczba2" size="10"><br/><br/>
<input type="submit" value="Oblicz"></center>
</form>





</body>
</html>