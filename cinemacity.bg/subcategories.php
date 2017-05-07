<?php

  $category_id = isset($_GET['category_id']) ? $_GET['category_id'] : '';

  $date = date('WY');
  $text = file("db/db_movies/movie.txt");
  $movieArr = array();
  $movieYearArr = array();
  foreach ($text as $value) {
    if (strpos($value, $date) !==false) {
      $movieYearArr[] = $value;
    }
  }

  foreach ($movieYearArr as $value) {
    if (strpos($value, $category_id) !==false) {
      $movieArr[] = $value;
    }
  } 

  foreach($movieArr as $value) {
   
        $tmp = explode("#",$value);
        array_pop($tmp);
        foreach ($tmp as $v) {
          $tmp2 = explode(":",$v);
          if ($tmp2[0]== 'type') {
            $type= $tmp2[1];
          }
        }
        echo '<option value="'. $type .'">';
        echo $type;
        echo '</option>';
  }

?>
