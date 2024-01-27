<style>
    td{
        padding: 22px;
        background-color: #E49393;
    }
</style>

<?php

// Establish a connection to the database server
$servername = "localhost:3306";
$username = "root";
$password = "18@sanut";
$dbname = "placement_cell";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check for connection errors
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve data from the database table
$sql = "SELECT * FROM stud_info";
$result = mysqli_query($conn, $sql);

// Check if any rows were returned
if (mysqli_num_rows($result) > 0) {

    // Display the data in a table
    echo "<table>";
    echo "<tr><th>ID</th><th>Name</th><th>Address</th><th>Branch ID</th><th>Email</th><th>CGPA</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['stud_id'] . "</td>";
        echo "<td>" . $row['stud_name'] . "</td>";
        echo "<td>" . $row['stud_address'] . "</td>";
        echo "<td>" . $row['branch_id'] . "</td>";
        echo "<td>" . $row['stud_email'] . "</td>";
        echo "<td>" . $row['stud_CGPA'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";

} else {
    echo "No records found";
}

// Close the database connection
mysqli_close($conn);

?>