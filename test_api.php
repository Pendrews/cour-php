<?php 
$tkn= $_GET['tkn'];
$ptkn = $_POST['tkn'];

if($tkn !=''){
	$url = 'http://41.139.58.18:88/ords/BPT/token/verify/'.$tkn;
	$data = file_get_contents($url);
}else
$url = 'http://41.139.58.18:88/ords/BPT/token/verify/'.$ptkn;
	$data = file_get_contents($url);
}
echo $data;
?>
