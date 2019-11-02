<?php
  function migratoryBirds($arr) {
    $result = ["1"=>0,"2"=>0, "3"=>0, "4"=>0, "5"=>0];
    $i=0;
    while($i<count($arr)){
        $result[$arr[$i]]++;
        $i++;
    }
    $mayor = 1;
    foreach($result as $key => $item){
        if($result[$mayor] < $item){
            $mayor = $key;
        }
    }
    return $mayor;
}
?>
