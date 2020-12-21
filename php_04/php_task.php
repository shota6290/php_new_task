<?php /*課題１*/
function total($max){
    $result = $max*2;
    return $result;
}
echo total(3);

?>

<?php /*課題2*/
function calc($a,$b){
    $result = $a+$b;
    return $result;
}
echo calc(3,5);

?>

<?php /*課題3*/
$arr = array(1,3,5,7,9);
function sum($arr){
    $result = 1;
    foreach($arr as $a){
        $result=$result*$a;
    }
    return $result;
}
echo sum($arr);
?>

<?php /*課題4*/
$arr =array(2,4,6,8,10);
 function max_array($arr){
 $max_number = $arr[0];
 foreach($arr as $a){
     if($max_number < $a){
         $max_number = $a;
     }
 }
 return $max_number;
 }
 
 echo max_array($arr);
?>

<?php /*課題5*/
/*strip_tags*/


/*array_push*/
$array1=array(1,2,3);
array_push($array1,4);

print_r($array1);

/*array_merge*/
$array1=array(1,2,3);
$array2=array(10,20,30);
$array3=array(100,200,300);

$array =array_merge($array1,$array2,$array3);
print_r($array);

/*time,mktime*/

/*timeで取得・・・現在のタムスランプを取得*/
echo '現在のUnixタイムスタンプ：'.time();


echo "\n";

/*mktimeで取得・・・指定したタイムスランプを取得*/
$timestamp = mktime(0,0,0,1,1,1970);
echo $timestamp;

echo"\n";

/*date・・・タイムスランプをフォーマットして取得*/
echo date("y/m/d h:i:s");
?>