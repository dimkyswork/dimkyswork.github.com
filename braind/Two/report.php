<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Aliens Abducted Me - Report an Abduction</title>
</head>
<body>

  <?php
  $n = $_POST['n'];
  $k = $_POST['k'];

  $first= $n{0};

  $new_array = array();
  $array = array(1, 2, 3, 4, 5,6,7,8,9);

  if ($n > 9) {

    for ($i = 0; $i < $first; $i++) {
      $new_array[] = $array[$i];
      $proizv = $array[$i] * 10;
      $count = (($array[$i+1] *10)-1);


      for (; $proizv <= $count; $proizv++) {
         $new_array[] = $proizv;
        if ($proizv == $n) {
          break; 
        }
        }
    }

     if ($i == $first ) {
          
          for (; $i<= count($array);$i++) {
             $new_array[] = $array[$i];
          }
        }

for ($t=0; $t<=count($new_array); $t++) {
  if ($k == $new_array[$t] ) {
    echo $t+1;
    break;
  }
}
  }


  ?>

</body>
</html>
