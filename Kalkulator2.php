<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>liczydło</title>
</head>
<body bgcolor="blue">
<a href="index.html"><font face="Arial" color="white"><h5>Powrót do strony głównej</h5></font></a>


<center>
<?php

$zmienna_1 = $_POST['liczba1'];
$zmienna_2 = $_POST['liczba2'];
$dzialanie = $_POST['dzialanie'];
$wynik;
if (isset($zmienna_1) && isset($zmienna_2))
{
    if (($zmienna_1 == '') OR ($zmienna_2 == ''))
    {
        echo 'Proszę wypełnić pola cyframi.';}
 
    if(isset($_POST['dzialanie']) && ($_POST['dzialanie'] == 'dodawanie') && ($zmienna_1 != '') && ($zmienna_2 != ''))
    {
        echo $zmienna_1.' + '.$zmienna_2.' = '.$wynik = $zmienna_1 + $zmienna_2;
    }
    if(isset($_POST['dzialanie']) && ($_POST['dzialanie'] == 'odejmowanie') &&($zmienna_1 != '') && ($zmienna_2 != ''))
    {
        echo $zmienna_1.' - '.$zmienna_2.' = '.$wynik = $zmienna_1 - $zmienna_2;
    }
    if(isset($_POST['dzialanie']) && ($_POST['dzialanie'] == 'mnozenie')&& ($zmienna_1 != '') && ($zmienna_2 != ''))
    {
        echo $zmienna_1.' * '.$zmienna_2.' = '.$wynik = $zmienna_1 * $zmienna_2;
    }
    if (isset($_POST['dzialanie']) && ($_POST['dzialanie'] == 'dzielenie') && ($zmienna_1 != '') && ($zmienna_2 == 0))
    {
 
            echo 'Nie mozna dzielic przez 0.';
    }    
    else if (isset($_POST['dzialanie']) && ($_POST['dzialanie'] == 'dzielenie') && ($zmienna_1 != '') && ($zmienna_2 != ''))
    {
        echo $zmienna_1.' / '.$zmienna_2.' = '.$wynik = $zmienna_1 / $zmienna_2;
    }
}
echo "<br/><br/>";
	echo "_______________________________________________<br/><br/>";



?>
</center>
<center><form action="" method="POST">
Podaj pierwszą liczbę:<input type="text" name="liczba1" size="10"><br/><br/>
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