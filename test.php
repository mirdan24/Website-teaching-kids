
<?PHP

$haslo = $_POST['haslo'];
$tajne = 'dwa';

if(isSet($_POST['haslo']) && ($haslo==$tajne)){

  header("Refresh: 2; https://www.youtube.com/watch?v=Yemlx7H2knw");
  echo("<HTML><BODY bgcolor='gold'><CENTER>");
  echo("<H2>Brawo Ty!</H2>");
  echo('</CENTER></BODY></HTML>'); 

}
else{
  echo("<HTML><BODY bgcolor='gold'><CENTER>");
  echo("<H2>Błędny wynik</H2>");
  // echo("</CENTER></BODY></HTML>");
  echo('<a href="javascript:history.go(-1);">Spróbuj ponownie!</a></CENTER></BODY></HTML>'); 
}
?>