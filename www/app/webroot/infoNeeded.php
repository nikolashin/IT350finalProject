<?php

  $database = "PirateOil";
  $table = "users";

  $db_handle = mysql_connect("localhost","george","Temp123!@#");
  $db_found = mysql_select_db($database);

$fullName = mysql_real_escape_string($_GET['name']);
$fullName = str_replace('\\', '', $fullName);

$startDate = mysql_real_escape_string($_GET['start']);
$startDate = str_replace('\\', '', $startDate);

$endDate = mysql_real_escape_string($_GET['end']);
$endDate = str_replace('\\', '', $endDate);

$startDate2=date($startDate);

$endDate2=date($endDate);

//$payRateQuery = sprintf("SELECT PayRate FROM Driver WHERE Name=".$fullName);
//$payResult = mysql_query($payRateQuery);

$query = 'SELECT * FROM Driver
                  LEFT JOIN Ticket ON Driver.DriverLicNum=Ticket.DriverID
                  LEFT JOIN JobLoad ON Ticket.TicketNum=JobLoad.TicketNum
                  LEFT JOIN Job ON Ticket.JobId=Job.JobId
                  WHERE Driver.Name='.$fullName.'
                  AND Job.StartDate > '.$startDate2.'
                  AND Job.StartDate < '.$endDate2;

echo "<p style='color:#000000;font-weight:bold;'>";

//$rowPayRate = mysql_fetch_assoc($payResult);
//mysql_free_result($payRateQuery);


$result = mysql_query($query);

$total=0;

        while ($row = mysql_fetch_assoc($result))
        {
          $total+=($row['Quantity']*$row['PayRate']);
        }


echo "$".$total;

echo "</p>";

mysql_free_result($query);

?>
