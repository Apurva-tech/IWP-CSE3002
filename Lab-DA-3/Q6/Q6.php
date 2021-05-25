<?php
$total_count = 0;
if(isset($_COOKIE['count'])){
$total_count = $_COOKIE['count'];
$total_count ++;
}
if(isset($_COOKIE['last_visit'])){
$last_visit = $_COOKIE['last_visit'];
}
setcookie('count', $total_count);
 setcookie('last_visit', date("H:i:s"));
if($total_count == 0){
echo "Welcome! We are glad to see you here.";
} else {
echo "This is your visit number ".$total_count;
}
?>