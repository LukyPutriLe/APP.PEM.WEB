
<?php
echo "<h3>Postincrement</h3>";
$a = 5;
echo "\$a = $a <br />";
echo "\$a akan bernilai 5: " . $a++ . " (\$a++)<br />";
echo "\$a akan bernilai 6: " . $a . "<br />";
 
echo "<h3>Preincrement</h3>";
$a = 5;
echo "\$a = $a <br />";
echo "\$a akan bernilai 6: " . ++$a . " (++\$a)<br />";
echo "\$a akan bernilai 6: " . $a . "<br />";
 
echo "<h3>Postdecrement</h3>";
$a = 5;
echo "\$a = $a <br />";
echo "\$a akan bernilai 5: " . $a-- . " (\$a--)<br />";
echo "\$a akan bernilai 4: " . $a . "<br />";
 
echo "<h3>Predecrement</h3>";
$a = 5;
echo "\$a = $a <br />";
echo "\$a akan bernilai 4: " . --$a . " (--\$a)<br />";
echo "\$a akan bernilai 4: " . $a . "<br />";
?>
