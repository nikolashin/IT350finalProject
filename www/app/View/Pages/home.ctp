<div>
<img src="/img/image002.png">
</div><br><br>
<?php

  $database = "PirateOil";
  $table = "users";

  $db_handle = mysql_connect("localhost","george","Temp123!@#");
  $db_found = mysql_select_db($database);



?>

<script src='//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js' type='text/javascript' ></script>

<script>

function goToSites(){open("http://cannon.robertmcclellan.me/Sites","_self");}
function goToDrivers(){open("http://cannon.robertmcclellan.me/Drivers","_self");}
function goToJobs(){open("http://cannon.robertmcclellan.me/Jobs","_self");}
function goToTrucks(){open("http://cannon.robertmcclellan.me/Trucks","_self");}
function goToTrailers(){open("http://cannon.robertmcclellan.me/Trailers","_self");}
function goToTickets(){open("http://cannon.robertmcclellan.me/Tickets","_self");}
function goToJobLoads(){open("http://cannon.robertmcclellan.me/JobLoads","_self");}

function choose()
{
  var mylist=document.getElementById("myList");
var selected=document.getElementById("myList").options[document.getElementById("myList").selectedIndex].value;

  document.getElementById("favorite").innerHTML=document.getElementById("myList").options[document.getElementById("myList").selectedIndex].value;

//$("#revenue").load("/infoNeeded.php?name='Rob Thomas'");

$.get("/infoNeeded.php?name='"+selected+"'", function(data) {

      document.getElementById("revenue").innerHTML=data.toString();

     });

}

function choose2()
{
  var mylist2=document.getElementById("myList2");
  document.getElementById("favorite2").innerHTML=document.getElementById("myList2").options[document.getElementById("myList2").selectedIndex].value;
}


setInterval( choose, 1000 );
</script>


<?php

$text=' <div style="float:left;">
  <button type="button" id="tableButton" onclick="JavaScript:goToDrivers();">Drivers Table</button>
  <br><br>
 <button type="button" id="tableButton" onclick="JavaScript:goToTickets();">Tickets Table</button>
  <br><br>
 <button type="button" id="tableButton" onclick="JavaScript:goToJobs();">Jobs Table</button>
  <br><br>
  <button type="button" id="tableButton" onclick="JavaScript:goToJobLoads();">JobLoads Table</button>
  <br><br>
  <button type="button" id="tableButton" onclick="JavaScript:goToTrucks();">Trucks Table</button>
  <br><br>
  <button type="button" id="tableButton" onclick="JavaScript:goToTrailers();">Trailers Table</button>
  <br><br>
  <button type="button" id="tableButton" onclick="JavaScript:goToSites();" />Sites Table</button>
  <br><br>
 </div>
 <div style="float:left;margin-left:30px;">';

echo $text;

echo "<div style='font-size:20px;font-weight:bold;width:600px;'>Check Total Revenue</div>";

echo "<div style='float:left;width:300px;'><p style='color:#000000;font-weight:bold;'>";

if($db_handle)
{

$query = sprintf("SELECT * FROM Driver");

// Perform Query
$result = mysql_query($query);

// Check result
// This shows the actual query sent to MySQL, and the error. Useful for debugging.
if (!$result) {
    $message  = 'Invalid query: ' . mysql_error() . "\n";
    $message .= 'Whole query: ' . $query;
    die($message);
}

// Use result
// Attempting to print $result won't allow access to information in the resource
// One of the mysql result functions must be used
// See also mysql_result(), mysql_fetch_array(), mysql_fetch_row(), etc.

echo "<form>
      Select Driver to view:<br>
      <select id='myList' onchange='JavaScript:choose();'>
      <option value=''>--Select--</option>";

	while ($row = mysql_fetch_assoc($result))
        {
            echo "<option value='";
	    echo $row['Name'];
            echo "'>";
            echo $row['Name'];
            echo "</option>";
	}

echo "</select>
      </form>";

// Free the resources associated with the result set
// This is done automatically at the end of the script
mysql_free_result($result);

echo "<br><div>Driver selected:</div>
<div id='favorite' style='font-weight:bold;height:60px;'></div>";

echo "<br><div>Driver's total revenue:</div>
<div id='revenue' style='font-weight:bold;height:60px;'></div></div>";



echo "<div style='float:left;width:300px;'><p style='color:#000000;font-weight:bold;'>";


	$query2 = sprintf("SELECT * FROM Job");

	$result2 = mysql_query($query2);

	if (!$result2)
        {
	    $message  = 'Invalid query: ' . mysql_error() . "\n";
	    $message .= 'Whole query: ' . $query2;
	    die($message);
	}

	// See also mysql_result(), mysql_fetch_array(), mysql_fetch_row(), etc.

echo "<form>
      Select JobId to view:<br>
      <select id='myList2' onchange='JavaScript:choose2();'>
      <option value=''>--Select--</option>";

	while ($row2 = mysql_fetch_assoc($result2))
        {
            echo "<option value='";
	    echo $row2['JobId'];
            echo "'>";
            echo $row2['JobId'];
            echo "</option>";
	}

echo "</select>
      </form>";

	mysql_free_result($result2);

echo "<br><div>Job selected:</div>
<div id='favorite2' style='font-weight:bold;'></div></div>";


  }
  else
  {
      echo "<p>Not connected!</p>";
  }


echo "</p></div></div>";



?>
