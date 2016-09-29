<?php 


function problem_1($a){
    foreach ($a as $value){
        echo $value.' ';
    }
}

function problem_2($a){
    $min = $a[0];
    $max = $a[0];
    foreach ($a as $value){
        if($min>$value){
            $min = $value;
        }
        if($max<$value) {
            $max = $value;
        }
    }
    return 'min='.$min.' max='.$max;
}

function problem_3($a) {
    $count = count($a);
    for($i = $count-1; $i>=0; $i--){
        echo $a[$i].' ';
    }
    return '';
}

function problem_4($a) {
    $array[] = [];
    foreach ($a as $value){
        if(!in_array($value, $array)){
            array_push($array,$value);
        }
    }
    foreach ($array as $value){
        echo $value.' ';
    }
}

function problem_5($a) {
    foreach ($a as $key=>$value){
        echo $value.'=>'.$key.' ';
    }
}

function problem_6($val, $pow){
    $res=1;
    for ($i=0;$i<$pow;$i++){
        $res *= $val;
    }
    return $res;
}

$array1 = [1, "2", "3"];
$array4 = [1,1,1,2,2,2,3,3,3];
$array5 = ["a"=>"b", "c"=>"d"];
echo "\n";
print problem_1($array1);
echo "\n";
print problem_2($array1);
echo "\n";
print problem_3($array1);
echo "\n";
print problem_4($array4);
echo "\n";
print problem_5($array5);
echo "\n";
print problem_6(2,8);
echo "\n";