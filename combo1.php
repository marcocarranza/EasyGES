<?php
$rpta="";
if ($_POST["elegido"]=="7") {
	$rpta= '
	<option value="0" width="30">Seleccionar un tipo de atención </option>	
	<option value="71">Diagnóstico</option>
	<option value="72">Tratamiento</option>
	<option value="73">Protección Financiera</option>
	';	
}
if ($_POST["elegido"]=="8") {
	$rpta= '
	<option value="0" width="30">Seleccionar un tipo de atención </option>	
	<option value="81">Diagnóstico</option>
	<option value="82">Tratamiento</option>
	<option value="83">Seguimiento</option>
	<option value="84">Protección Financiera</option>
	';	
}
if ($_POST["elegido"]==18) {
	$rpta= '
	<option value="0" width="30">Seleccionar un tipo de atención </option>	
	<option value="182">Tratamiento</option>
	';	
}
if ($_POST["elegido"]==19) {
	$rpta= '
	<option value="0" width="30">Seleccionar un tipo de atención </option>	
	<option value="192">Tratamiento</option>
	';	
}
if ($_POST["elegido"]==20) {
	$rpta= '
	<option value="0" width="30">Seleccionar un tipo de atención </option>	
	<option value="201">Diagnóstico</option>
	<option value="202">Tratamiento</option>
	';	
}
if ($_POST["elegido"]==21) {
	$rpta= '
	<option value="0" width="30">Seleccionar un tipo de atención </option>	
	<option value="211">Diagnóstico</option>
	<option value="212">Tratamiento</option>
	';	
}
if ($_POST["elegido"]==29) {
	$rpta= '
	<option value="0" width="30">Seleccionar un tipo de atención </option>	
	<option value="291">Diagnóstico</option>
	<option value="292">Tratamiento</option>
	';	
}
if ($_POST["elegido"]==34) {
	$rpta= '
	<option value="342">Tratamiento</option>
	';	
}
if ($_POST["elegido"]==35) {
	$rpta= '
	<option value="352">Tratamiento</option>
	';	
}
if ($_POST["elegido"]==41) {
	$rpta= '
	<option value="412">Tratamiento</option>
	';	
}
if ($_POST["elegido"]==56) {
	$rpta= '
	<option value="562">Tratamiento</option>
	';	
}
if ($_POST["elegido"]==61) {
	$rpta= '
	<option value="611">Diagnóstico</option>
	<option value="612">Tratamiento</option>
	';	
}
echo $rpta;	
?>


