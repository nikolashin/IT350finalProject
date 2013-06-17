<div>
<img src="/img/image002.png">
</div><br><br>
<?php
    /**
    *
    * @Create dropdown of years
    *
    * @param int $start_year
    *
    * @param int $end_year
    *
    * @param string $id The name and id of the select object
    *
    * @param int $selected
    *
    * @return string
    *
    */
    function createYears($start_year, $end_year, $id='year_select', $selected=null)
    {

        /*** the current year ***/
        $selected = is_null($selected) ? date('Y') : $selected;

        /*** range of years ***/
        $r = range($start_year, $end_year);

        /*** create the select ***/
        $select = '<select name="'.$id.'" id="'.$id.'" onchange="JavaScript:choose();">';
        foreach( $r as $year )
        {
            $select .= "<option value=\"$year\"";
            $select .= ($year==$selected) ? ' selected="selected"' : '';
            $select .= ">$year</option>\n";
        }
        $select .= '</select>';
        return $select;
    }

    function createYears2($start_year2, $end_year2, $id='year_select', $selected=null)
    {

        /*** the current year ***/
        $selected = is_null($selected) ? date('Y') : $selected;

        /*** range of years ***/
        $r = range($start_year2, $end_year2);

        /*** create the select ***/
        $select = '<select name="'.$id.'" id="'.$id.'" onchange="JavaScript:choose();">';
        foreach( $r as $year )
        {
            $select .= "<option value=\"$year\"";
            $select .= ($year==$selected) ? ' selected="selected"' : '';
            $select .= ">$year</option>\n";
        }
        $select .= '</select>';
        return $select;
    }


    /*
    *
    * @Create dropdown list of months
    *
    * @param string $id The name and id of the select object
    *
    * @param int $selected
    *
    * @return string
    *
    */
    function createMonths($id='month_select', $selected=null)
    {
        /*** array of months ***/
        $months = array(
                1=>'January',
                2=>'February',
                3=>'March',
                4=>'April',
                5=>'May',
                6=>'June',
                7=>'July',
                8=>'August',
                9=>'September',
                10=>'October',
                11=>'November',
                12=>'December');

        /*** current month ***/
        $selected = is_null($selected) ? date('m') : $selected;

        $select = '<select name="'.$id.'" id="'.$id.'" onchange="JavaScript:choose();">'."\n";
        foreach($months as $key=>$mon)
        {
            $select .= "<option value=\"$key\"";
            $select .= ($key==$selected) ? ' selected="selected"' : '';
            $select .= ">$mon</option>\n";
        }
        $select .= '</select>';
        return $select;
    }

    function createMonths2($id='month_select', $selected=null)
    {
        /*** array of months ***/
        $months = array(
                1=>'January',
                2=>'February',
                3=>'March',
                4=>'April',
                5=>'May',
                6=>'June',
                7=>'July',
                8=>'August',
                9=>'September',
                10=>'October',
                11=>'November',
                12=>'December');

        /*** current month ***/
        $selected = is_null($selected) ? date('m') : $selected;

        $select = '<select name="'.$id.'" id="'.$id.'" onchange="JavaScript:choose();">'."\n";
        foreach($months as $key=>$mon)
        {
            $select .= "<option value=\"$key\"";
            $select .= ($key==$selected) ? ' selected="selected"' : '';
            $select .= ">$mon</option>\n";
        }
        $select .= '</select>';
        return $select;
    }


    /**
    *
    * @Create dropdown list of days
    *
    * @param string $id The name and id of the select object
    *
    * @param int $selected
    *
    * @return string
    *
    */
    function createDays($id='day_select', $selected=null)
    {
        /*** range of days ***/
        $r = range(01, 31);

        /*** current day ***/
        $selected = is_null($selected) ? date('d') : $selected;

        $select = "<select name=\"$id\" id=\"$id\" onchange='JavaScript:choose();'>\n";
        foreach ($r as $day)
        {
            $select .= "<option value=\"$day\"";
            $select .= ($day==$selected) ? ' selected="selected"' : '';
            $select .= ">$day</option>\n";
        }
        $select .= '</select>';
        return $select;
    }

    function createDays2($id='day_select', $selected=null)
    {
        /*** range of days ***/
        $r = range(01, 31);

        /*** current day ***/
        $selected = is_null($selected) ? date('d') : $selected;

        $select = "<select name=\"$id\" id=\"$id\" onchange='JavaScript:choose();'>\n";
        foreach ($r as $day)
        {
            $select .= "<option value=\"$day\"";
            $select .= ($day==$selected) ? ' selected="selected"' : '';
            $select .= ">$day</option>\n";
        }
        $select .= '</select>';
        return $select;
    }



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

   var startYear=document.getElementById("start_year").options[document.getElementById("start_year").selectedIndex].value;
    var startMonth=document.getElementById("start_month").options[document.getElementById("start_month").selectedIndex].value;
  var startDay=document.getElementById("start_day").options[document.getElementById("start_day").selectedIndex].value;
     var endYear=document.getElementById("start_year2").options[document.getElementById("start_year2").selectedIndex].value;
    var endMonth=document.getElementById("start_month2").options[document.getElementById("start_month2").selectedIndex].value;
  var endDay=document.getElementById("start_day2").options[document.getElementById("start_day2").selectedIndex].value;

if(startMonth.length==1){startMonth="0"+startMonth;}
if(startDay.length==1){startDay="0"+startDay;}
if(endMonth.length==1){endMonth="0"+endMonth;}
if(endDay.length==1){endDay="0"+endDay;}

var startDate=startYear+"-"+startMonth+"-"+startDay+" 00:00:00";
var endDate=endYear+"-"+endMonth+"-"+endDay+" 00:00:00";

  document.getElementById("favorite").innerHTML=document.getElementById("myList").options[document.getElementById("myList").selectedIndex].value;

//$("#revenue").load("/infoNeeded.php?name='Rob Thomas'");

$.get("/infoNeeded.php?name='"+selected+"'&start='"+startDate+"'&end='"+endDate+"'", function(data) {

      document.getElementById("revenue").innerHTML=data.toString();

     });

}

function choose2()
{
  var mylist2=document.getElementById("myList2");
var selected=document.getElementById("myList2").options[document.getElementById("myList2").selectedIndex].value;
  document.getElementById("favorite2").innerHTML=document.getElementById("myList2").options[document.getElementById("myList2").selectedIndex].value;
}


setInterval(function(){
    choose();
    choose2();
});
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

echo "<div style='font-size:20px;font-weight:bold;width:800px;'>Check Total Revenue</div>";

echo "<div style='float:left;width:400px;'><p style='color:#000000;font-weight:bold;'>";

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

echo "<div id='startTime' style='width:300px;'>

<table>
<tr><td colspan=3>Starting from:</td></tr>
<tr><td>Year</td><td>Month</td><td>Day</td></tr>
<tr>
<td id='startYear'>";

echo createYears(2000, 2020, 'start_year', 2000);
echo "</td><td id='startMonth'>";

echo createMonths('start_month', 01);
echo "</td><td id='startDay'>";

echo createDays('start_day', 01);
echo "</td>

</tr>

</table>

</div>";

echo "<div id='endTime' style='width:300px;'>

<table>
<tr><td colspan=3>To:</td></tr>
<tr><td>Year</td><td>Month</td><td>Day</td></tr>
<tr>
<td id='endYear'>";

echo createYears2(2000, 2020, 'start_year2', 2020);
echo "</td><td id='endMonth'>";

echo createMonths2('start_month2', 12);
echo "</td><td id='endDay'>";

echo createDays2('start_day2', 31);
echo "</td>

</tr>

</table>

</div>";



echo "<br><div>Driver selected:</div>
<div id='favorite' style='font-weight:bold;height:20px;'></div>";

echo "<br><div>Driver's total revenue:</div>
<div id='revenue' style='font-weight:bold;height:20px;'></div></div>";



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
<div id='favorite2' style='font-weight:bold;height:20px;'></div>";

echo "<br><div>Job total revenue:</div>
<div id='revenue2' style='font-weight:bold;height:20px;'></div></div>";

  }
  else
  {
      echo "<p>Not connected!</p>";
  }


echo "</p></div></div>";



?>
