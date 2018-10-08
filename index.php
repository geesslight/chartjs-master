
<?php 
	$servername = "localhost";
$username = "root";
$password = "";
$dbname = "emp";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM score";
$result = $conn->query($sql);

//$data=mysqli_query($mysqli,"SELECT * FROM t_test");
/*if ($result->num_rows > 0) {
	echo $row_cnt = $result->num_rows;


									  while($row = $result->fetch_assoc()) {
        echo "id: " . $row["playerid"]. " score " . $row["score"]. "<br/> ";

									  
									}
									  echo "</ul>";
									}
    // output data of each row
    
    
} else {
    echo "0 results";
}*/
?>
				
<!DOCTYPE html>
<html>
	<head>
		<title>ChartJS - Pie Chart</title>
		<script src="jquery-2.1.4.min.js"></script>
		<script src="Chart.js"></script>
	</head>
	<body>
		<canvas id="mycanvas" width="256" height="256">
		<script>
			$(document).ready(function(){
				var ctx = $("#mycanvas").get(0).getContext("2d");

				//pie chart data
				//sum of values = 360

				var myData=[<?php 
while($info=mysqli_fetch_array($result))
    echo $info['f_data'].','; /* We use the concatenation operator '.' to add comma delimiters after each data value. */
?>];
<?php
$data=mysqli_query($mysqli,"SELECT * FROM t_test");
?>
var myLabels=[<?php 
while($info=mysqli_fetch_array($result))
    echo '"'.$info['f_name'].'",'; /* The concatenation operator '.' is used here to create string values from our database names. */
?>];
				var data = [

					{
						value: myData,
						color: "cornflowerblue",
						highlight: "lightskyblue",
						label: myLabel
					}
					
				];

				//draw
				var piechart = new Chart(ctx).Pie(data);
			});
		</script>
<body>
	

	</body>
</html>