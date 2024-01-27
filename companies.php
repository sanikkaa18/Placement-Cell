<style>
  td{
    padding: 22px;
    background-color: #ECC9EE;
  }
</style>

<?php
// Replace these values with your MySQL database credentials
$servername = "localhost:3306";
$username = "root";
$password = "18@sanut";
$dbname = "placement_cell";

// Create a connection to the MySQL database
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// SQL query to retrieve data from the table
$sql = "SELECT * FROM comp_info";

// Execute the query and store the result set
$result = mysqli_query($conn, $sql);

// Display the data in an HTML table
echo "<table>";
echo "<tr><th>comp_id</th><th>comp_name</th><th>comp_criteria</th><th>comp_location</th><th>allowed_branches</th><th>comp_salary</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>" . $row["comp_id"] . "</td><td>" . $row["comp_name"] . "</td><td>" . $row["comp_criteria"] . "</td><td>" . $row["comp_location"] . "</td><td>" . $row["allowed_branches"] . "</td><td>" . $row["comp_salary"] . "</td></tr>";
}
echo "</table>";

// Close the connection
mysqli_close($conn);
?>
