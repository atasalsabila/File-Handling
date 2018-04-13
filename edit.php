<?php
$file = "result.txt";
$result = file_get_contents($file);

$rowedit = $_GET['row'];
$baris = explode("[R]", $result);
$cols = explode("|F|", $baris[$rowedit]);

?>
<!DOCTYPE html>

<html>
    <body>
<form action="simpan.php" method="POST">
                <label for="name">NAMA</label>
                <input type="text" id="name" name="name" value="<?php echo $cols[0] ?>">
                <br>
                <label for="lname">UMUR</label> 
                <input type="number" id="Umur" name="Umur" value="<?php echo $cols[1] ?>">
                <br>
                <label for="name">EMAIL</label> 
                <input type="text" id="email" name="email" value="<?php echo $cols[2] ?>">
                <br>
                <label for="name">N0. HP</label>
                <input type="tel" id="number" name="number" value="<?php echo $cols[3] ?>">
                <input type="hidden" name="row" value="<?php echo $rowedit ?>">
                <br>
				<input type="submit" value="Save!">
        </form>
    </body>
</html>