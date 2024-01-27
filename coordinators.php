<style>
    td{
        padding: 22px;
        background-color: #ADE4DB;
    }
</style>
<?php
// Set database credentials
$servername = "localhost:3306";
$username = "root";
$password = "18@sanut";
$dbname = "placement_cell";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Select data from coordinators table
$sql = "SELECT * FROM placement_coordinators";
$result = mysqli_query($conn, $sql);

// Check if there are any records
if (mysqli_num_rows($result) > 0) {
    // Output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "Coordinator ID: " . $row["coordinator_id"]. "<br>";
        echo "Coordinator Name: " . $row["coordinator_name"]. "<br>";
        echo "Branch ID: " . $row["branch_id"]. "<br>";
        echo "Email: " . $row["email"]. "<br><br>";
    }
} else {
    echo "No records found";
}

// Close database connection
mysqli_close($conn);
?>
