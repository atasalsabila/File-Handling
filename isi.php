<?php

$file = "result.txt";

$name = $_POST['name'];
$Umur = $_POST['Umur'];
$email = $_POST['email'];
$number = $_POST ['number'];

$data = $name  . "|F|" . 
        $Umur . "|F|" .
        $email . "|F|" . 
        $number . "[R]";

$handle = fopen($file, "a+");
fwrite($handle, $data);
fclose($handle);

echo "Data sudah disimpan!";