
<?php
$arr = $_POST['answer'];

function mwd($ar){
 date_default_timezone_set('UTC');
 $mth = ["January", "February", "March", "April", "May", "June", "July",
 "August", "September", "October", "November", "December"];

 $day = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday",
 "Saturday", "Sunday"];

 $list = "";
 $month = date('F');
 $dy = date("l");

switch ($ar) {
  case 'months':
   foreach ($mth as $key => $value){
     if($value == $month){
       $list .= "<b>$value</b>";
     }else{ $list .= $value; }
     if($value == end($mth)){ $list .= "."; }else{ $list .= ", " ;}
   }
     break;
  case "weeks":
   foreach ($day as $key => $value) {
      if($value == "Saturday" || $value == "Sunday"){
        $list .= "<b>$value</b>";
      }else{$list .= $value; }
      if($value == end($day)){ $list .= "."; }else{ $list .= ", " ;}
   }
     break;

  case "days":
  foreach ($day as $key => $value) {
     if($value == $dy){
       $list .= "<b>$value</b>";
     }else{$list .= $value; }
     if($value == end($day)){ $list .= "."; }else{ $list .= ", " ;}
  }
    break;
}
return $list;
 }

echo mwd($arr);

?>
