<!DOCTYPE html>
<html>
<body>

<?php
$cars = array("Volvo", "BMW", "Toyota"); 
$cars[3] = "Suzuki";

echo "I like " . $cars[0] . ", " . 
				$cars[1] . " and " . 
				$cars[2] . ".";

echo "<hr>I hate " .  $cars[3];
echo "<hr>Jumlah mobil = " . count($cars);

?>

</body>
</html>
