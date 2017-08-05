
<?php

function counter($numer, $until){
  if($numer == NULL){ return "вы не ввели число!"; }
  if($numer <= $until){ return "делимое число должно быть больше чем 50!"; }
   $num = 0;
   while($numer >= $until){
     $numer = $numer/2;
     $num += 1;
   }

return "Получилось число: $numer, кол-во итераций $num";
}

isset($_POST['answer']) ? $arr = $_POST['answer'] : '';
echo counter($arr, 50);
?>
