<?php
if ($_POST["bewerking"] == 1)
{
		echo "Er moet worden opgeteld<br>";
		$uitkomst=$_POST["getal1"] + $_POST["getal2"];
		$teken= " + ";
		echo $_POST["getal1"]." + ".$_POST["getal2"]. " = ".$uitkomst."<br>";
        
}		
else if ($_POST["bewerking"] == 2)
{
		echo "er moet worden afgetrokken<br>";
		$uitkomst=$_POST["getal1"] - $_POST["getal2"];
	    $teken=" - ";
		echo $_POST["getal1"]." - ".$_POST["getal2"]. " = ".$uitkomst."<br>";
}
else if ($_POST["bewerking"] == 3)
{
		echo "er moet worden vermenigvuldigd<br>";
		$uitkomst=$_POST["getal1"] * $_POST["getal2"];
       $teken=" x ";
	   echo $_POST["getal1"]." x ".$_POST["getal2"]. " = ".$uitkomst."<br>";
}
else if ($_POST["bewerking"] == 4)
{
		echo "er moet worden gedeeld<br>";
		$uitkomst=$_POST["getal1"] / $_POST["getal2"];
       $teken=" / ";
	   echo $_POST["getal1"]." / ".$_POST["getal2"]. " = ".$uitkomst."<br>";
}
  ?>

<a href="index.php">opnieuw</a> 