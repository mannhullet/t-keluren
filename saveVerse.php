<?php
date_default_timezone_set('GMT+1');
error_reporting(0);

$text = $_POST['formText'];
$author = $_POST['formAuthor'];
$comment = $_POST['formComment'];

$prev = file_get_contents('sjiraff.json');
$prev = json_decode($prev, true);

$vsize = count($prev['sjiraffenvers']);


$prev['sjiraffenvers'][$vsize]['tekst'] = nl2br($text);
$prev['sjiraffenvers'][$vsize]['forfatter'] = nl2br($author);
$prev['sjiraffenvers'][$vsize]['kommentar'] = nl2br($comment);
$prev['sjiraffenvers'][$vsize]['dato'] = date('d.m.y');



$prev = json_encode($prev, JSON_UNESCAPED_SLASHES);

file_put_contents('sjiraff.json', $prev);

header('Location: sjiraff.php');
