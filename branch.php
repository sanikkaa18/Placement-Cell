<style>
  td{
    padding: 22px;
    background-color: #FEE8B0;
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
$sql = "SELECT * FROM branch_info";

// Execute the query and store the result set
$result = mysqli_query($conn, $sql);

// Display the data in an HTML table
echo "<table>";
echo "<tr><th>branch_id</th><th>branch_name</th><th>student_count</th><th>student_placed_count</th><th>max_salary</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>" . $row["branch_id"] . "</td><td>" . $row["branch_name"] . "</td><td>" . $row["student_count"] . "</td><td>" . $row["student_placed_count"] . "</td><td>" . $row["max_salary"] . "</td></tr>";
}
echo "</table>";

// Close the connection
mysqli_close($conn);
?>
