<?php
if($_GET['country'] == 1) {
	echo json_encode(array("1" => "Вашигтон", "2" => "Британия"));
} else if($_GET['country'] == 2){
	echo json_encode(array("3" => "Мехико", "4" => "Лондон"));
}
//sleep(2);
//echo $_GET['country'];
?>