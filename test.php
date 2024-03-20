<?php 

include 'connect.php';
$to="ghattaskhaled4@gmail.com";
$title="hi";
$body="you have a new message from website";
$header="From Support@khaled.com"."\n"."CC: GHATTASKHALED4@gmail.com"
mail( $to , $title, $body,$header);
?>