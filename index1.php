
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

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["playerid"]. " score " . $row["score"]. "<br/> ";
    }
} else {
    echo "0 results";
}
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
				var data = [

					{
						value: <?php echo 270;?>,
						color: "cornflowerblue",
						highlight: "lightskyblue",
						label: "Corn Flower Blue "
					},
					{
						value: 50,
						color: "lightgreen",
						highlight: "yellowgreen",
						label: "Lightgreen "
					},
					{
						value: 40,
						color: "orange",
						highlight: "darkorange",
						label: "Orange "
					}
				];

				//draw
				var piechart = new Chart(ctx).Pie(data);
			});
		</script>
<body>
	

	</body>
</html>