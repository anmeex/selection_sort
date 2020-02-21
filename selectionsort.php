<?php
$a=array(10,4,5,-1,2,9,-90);
$c=count($a);
$a2=array();

//echo $min;
for($j=0;$j<$c;$j++){
    $min=$a[$j];

    for($i=$j+1;$i<$c;$i++){
    if($min>$a[$i]){
      $min=$a[$i]; 
   }
  
}
echo $min;
$a2[]=$min;
$search=array_search($min,$a);
//echo $search;
//print_r($a)."<br>";
$x=array_splice($a,$search,1);
array_splice($a,0,0,$x);
print_r($a)."<br>"."<br>";
echo "<br>";
} 
print_r($a2);

    

?>
