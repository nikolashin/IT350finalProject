<?php

  $database = "PirateOil";
  $table = "users";

  $db_handle = mysql_connect("localhost","george","Temp123!@#");
  $db_found = mysql_select_db($database);

$fullName = $_GET['name'];

$payRateQuery = sprintf("SELECT PayRate FROM Driver WHERE Name=".$fullName);

$query = sprintf("SELECT JobId FROM Ticket WHERE DriverID=(SELECT DriverLicNum FROM Driver WHERE Name=".$fullName.")");

$result = mysql_query($query);

echo "<p style='color:#000000;font-weight:bold;'>";

	while ($row = mysql_fetch_assoc($result))
        {
            echo $row['JobId'];
            echo "<br>";
	}

echo "</p>";

mysql_free_result($query);

?>
