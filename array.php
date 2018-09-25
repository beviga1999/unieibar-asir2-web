 <?php
$cars = array("Volvo", "BMW", "Toyota");


for ($x = 0; $x < count($cars); $x++) {

    echo $cars[$x];
    echo "<br>";

}

foreach ($cars as $coche) {
    echo $coche;
    echo "<br>";
}
 /*
$choco = array("Blanco", "Negro", "Con Leche");
echo "Me gusta el chocolate " . $choco[0] . ", " . $choco[1] . " y " . $choco[2] . ".";
*/
?>
