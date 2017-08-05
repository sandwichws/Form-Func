
<?php

function trnce($ar = array()){
	foreach ($ar as $key => $value) {
		if($value == ","){ echo "<br>";}else{echo $value;}
	}
}
isset($_POST['answer']) ? $arr = $_POST['answer'] : '';
$chars = preg_split('//', (string)$arr, -1, PREG_SPLIT_NO_EMPTY);
trnce($chars);

?>
