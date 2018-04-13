<?php

$file = "result.txt";

$name = $_POST['name'];
$Umur = $_POST['Umur'];
$email = $_POST['email'];
$number = $_POST ['number'];

$edit = $name  . "|F|" . 
        $Umur . "|F|" .
        $email . "|F|" . 
        $number . "[R]";

$result = file_get_contents($file);

$rowedit = $_POST['row'];

$baris = explode("[R]", $result);
$databaru = "";
for($i = 0; $i < count($baris)-1; $i++) {
    if($i == $rowedit) {
    	$databaru .= $edit;
    	continue;
    }
    $databaru .= $baris[$i] . "[R]";
}

file_put_contents($file, $databaru);

header('location:read.php');