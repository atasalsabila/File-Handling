<?php

$file = "result.txt";
$result = file_get_contents($file);

$baris = explode("[R]", $result);

echo "<table border=2>";
echo "<tr>";
echo "  <th>Nama</th>";
echo "  <th>Umur</th>";
echo "  <th>Email</th>";
echo "	<th>No. HP</th>";
echo "	<th>Action</th>";
echo "	<th>Action</th>";
echo "</tr>";
for($i =0; $i<count($baris)-1; $i++) {
    //echo $b . "<br>";

    $col = explode("|F|", $baris[$i]);

    echo "<tr>";
    echo "  <td>" . $col[0] . "</td>";
    echo "  <td>" . $col[1] . "</td>";
    echo "  <td>" . $col[2] . "</td>";
    echo "	<td>" . $col[3] . "</td>";
    echo '  <td> <a href="hapus.php?row='.$i.'">DELETE</a> </td>';
    echo '  <td> <a href="edit.php?row='.$i.'">EDIT</a> </td>';
    echo "</tr>";
}
echo "</table>";
