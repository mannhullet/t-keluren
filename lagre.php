<?php
date_default_timezone_set('GMT+1');
error_reporting(0);

$text = $_POST['myText'];

$prev = file_get_contents('sjiraffen.js');
$prev = json_decode($prev, true);

$vsize = count($prev['sjiraffenvers']);

$prev['sjiraffenvers'][$vsize]['tekst'] = nl2br($text);
$prev['sjiraffenvers'][$vsize]['dato'] = date('d.m.y');

$prev = json_encode($prev, JSON_UNESCAPED_SLASHES);

file_put_contents('sjiraffen.js', $prev);

header('Location: sjiraffen.php');
