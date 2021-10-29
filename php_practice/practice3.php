<?php

//1問目
function double($number){
    return $number * 2;
}
echo double(5);
echo "\n";

//2問目
function add($a, $b){
    return $a + $b;
}
echo add(4, 6);
echo "\n";

//3問目
function mul($arr){
    $total = 1;
    foreach ($arr as $c){
        $total *= $c;
    }
    return $total;
}
echo mul(array(1, 3, 5, 7, 9));
echo "\n";

function mult(){
    $arr = array(1, 3, 5, 7, 9);
    echo array_product($arr);
 }
echo mult(array(1, 3, 5, 7, 9));
echo "\n";


//4問目

$arr = array(4 ,3 ,7 ,8 ,2);
function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
$max_number = $arr[0];
foreach($arr as $a){
if($max_number < $a){
    $max_number = $a;
 }
 }
 return $max_number;
 }
 echo max_array($arr);
 echo "\n";

 
 //5問目
 //strip_tags
$str = "<h1>strip_tags関数</h1>"
. "<p>タグ取り除く</p>";
echo strip_tags($str) ;
echo "\n";

//array_push
$stack = array("orange", "banana");
array_push($stack, "apple", "raspberry");
print_r($stack);
echo "\n";

//array_merge
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);
echo "\n";

//time, mktime
$time = mktime(0, 0, 10, 27, 10, 2021);
var_dump(date('Y年m月d日h時i分s秒', $time));
echo "\n";
?>