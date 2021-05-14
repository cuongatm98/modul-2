<?php
$array =[
    [11,4,5],
    [3,7,8],
];
function finMax($array){
    $max = $array[0][0];
    for ($i = 0; $i < count($array); $i++) {
        for ($j = 0; $j < count($array[$i]); $j++) {
            if ($max < $array[$i][$j]) {
                $max = $array[$i][$j];
            }
        }
    }
   return $max;
}
echo "giá trị lớn nhất là: ". finMax($array);
