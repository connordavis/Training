<?php
//function addition($val1, $val2) {
//    $sum = $val + $val2;
//    return $sum;
//}
//    
//$new_val = addition(3,16);{
//echo $new_val . "<br/>";
//}
//test3("Hello", $name, $new_val);
//
//function test() {
//    echo "Hello World" . "<br/>";
//}
//echo test();
//
//function test2($word) {
//    echo "Hello {$word}! <br/>";
//}
//test2("World");
//test2("Everyone");
//
//$name = "Connor Davis";
//$age = 16;
// 
//function test3($greeting, $target, $new_val, $punct) {
//    echo $greeting. ", " . $target . " is " . $new_val . " years old" . $punct . "<br/>";
//}

function addition($val1, $val2){
    $sum = $val1 + $val2;
    return $sum;
}
$new_val = addition(3,4);
echo $new_val;
if (addition(5,6) == 11) {
    echo"<br/> Yes! <br/>";
}

function multi_divide($val1, $val2){
    $multiply = $val1 * $val2;
    $divide = $val1 / $val2;
    $result = array($multiply, $divide);
    return $result;
}
    $result_array = multi_divide(144, 12);
    echo "Multiply: " . $result_array[0] . "<br/>";
    echo "Divide : " . $result_array[1];
    
       
?>
<br/>
<br/>
<br/>
<?php 
$prices = array( 'Connor'=>17, 
'Kailey'=>17, 'Noah'=>28 );

foreach ($prices as $key => $value)
 echo $key.'=>'.$value.'<br />';

reset($prices);
echo "<br/>";

while( $element = each( $prices ) )
{
 echo $element[ 'key' ];
 echo ' - ';
 echo $element[ 'value' ];
 echo '<br />';
}

?>
<?php

function people()  {
    $cool_points = array (
        'Connor' => 50,
        'Kailey' => 40,
        'Noah' => 45);
    
}

foreach ($coolpoints as $key => $value){
    $mutiply = 'Connor' * 'Noah';
    return $coolpoints;
   
}
echo $coolpoints;

?>

<hr />

<h3>Age doubling</h3>


<?php

function double_age($ages) {
    foreach($ages as $key => $value) {
        $ages[$key] = $value * 2;
    }
    
    return $ages;
}

$ages = array(
    'Connor' => 17,
    'Kailey' => 17,
    'Noah'   => 28,
);

$new_ages = double_age($ages);


echo "OLD AGES:<br /><br />";
print_r($ages);

echo "<hr />";


echo "NEW AGES<br /><br />";
print_r($new_ages);





?>