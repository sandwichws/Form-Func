
<?php

$arr = $_POST['answer'];

function counter($numer, $until){
   $num = 0;
   while($numer >= $until){
     $numer = $numer/2;
     $num += 1;
   }

return "Получилось число: $numer, кол-во итераций $num";
}
echo counter($arr, 50);
?>
