<?php

//1問目
$name = "tomoya";

if($name == "tomoya"){
    echo '私は'.$name.'です';
}else{
    echo $name.'ではありません';
}

//2問目
$total = 0;
for ($i = 0; $i <= 10000; $i++) {
  $total += $i;
}
echo $total;

//3問目
$fruits = array("apple","orange","grape","strawberry","melon");
foreach($fruits as $fruit){
    echo $fruit;
    echo "\n";
}

//4問目
for($i = 1; $i <= 100; $i++){
  if($i % 5 == 0){
    echo $i;
    echo "<br />";
  }
}