<html>
<body>
<style>
table, td, th
{
border: 1px solid black;
width: 33%;
text-align: center;
border-collapse:collapse;
background-color:lightblue;
}
table { margin: auto; }
</style>
<?php
class student{
	public $usn;
	public $name;
	public $addr;
	function __construct($a,$b,$c){
		$this->usn = $a;
		$this->name = $b;
		$this->addr = $c;
	}
}
		
$servername = "localhost";
$username = "root";
$password = "ksit123";
$dbname = "std";
$std_array=array();
// Create connection
// Opens a new connection to the MySQL server
$conn = mysqli_connect("localhost","root","ksit123","std");
//$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection and return an error description from the lastconnection error, if any

if(mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
//if ($conn->connect_error)
//die("Connection failed: " . $conn->connect_error);
$sql = "SELECT * FROM student";
// performs a query against the database
$result = $conn->query($sql);
echo "<br>";
echo "<center> BEFORE SORTING </center>";
echo "<table border='2'>";
echo "<tr>";
echo "<th>USN</th><th>NAME</th><th>Address</th></tr>";
if ($result->num_rows> 0)
{
// output data of each row and fetches a result row as an associative array
while($row = $result->fetch_assoc()){
echo "<tr>";
echo "<td>". $row["usn"]."</td>";
echo "<td>". $row["name"]."</td>";
echo "<td>". $row["address"]."</td></tr>";
$s1 = new student($row["usn"],$row["name"],$row["address"]);
//array_push($std_array,$s1);
$std_array[] = $s1;
}
}
else
echo "Table is Empty";
echo "</table>";
$n=count($std_array);
for ( $i = 0 ; $i< ($n - 1) ; $i++ )
{
$pos= $i;
for ( $j = $i + 1 ; $j < $n ; $j++ ) {
if ( $std_array[$pos]->usn > $std_array[$j]->usn )
$pos= $j;
}
if ( $pos!= $i ) {
$temp=$std_array[$i];
$std_array[$i] = $std_array[$pos];
$std_array[$pos] = $temp;
}
}
echo "<br>";
echo "<center> AFTER SORTING <center>";
echo "<table border='2'>";
echo "<tr>";
echo "<th>USN</th><th>NAME</th><th>Address</th></tr>";
foreach($std_array as $s2) {
echo "<tr>";
echo "<td>". $s2->usn."</td>";
echo "<td>". $s2->name."</td>";
echo "<td>". $s2->addr."</td></tr>";
}
echo "</table>";
$conn->close();
?>
</body>
</html>
