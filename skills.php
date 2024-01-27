<style>
    td{
        padding: 22px ;
        background-color: #FEFF86;
    }
</style>
<?php
// Make a database connection
$servername = "localhost:3306";
$username = "root";
$password = "18@sanut";
$dbname = "placement_cell";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Query the database
$sql = "SELECT * FROM training_info";
$result = mysqli_query($conn, $sql);

// Check if any rows were returned
//if (mysqli_num_rows($result) > 0) {
  // Output data of each row
  //while ($row = mysqli_fetch_assoc($result)) {
   // echo "Skill ID: " . $row["skill_id"] . "<br>";
    //echo "Skill Name: " . $row["skill_nm"] . "<br>";
    //echo "Student Enrollment: " . $row["stud_enroll"] . "<br>";
    //echo "Branches Allowed: " . $row["branches_allowed"] . "<br><br>";
  //}
//} else {
  //echo "0 results";
//}
echo "<table>";
echo "<tr><th>skill_id</th><th>skill_nm</th><th>stud_enroll</th><th>branches_allowed</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>" . $row["skill_id"] . "</td><td>" . $row["skill_nm"] . "</td><td>" . $row["stud_enroll"] . "</td><td>" . $row["branches_allowed"] . "</td></tr>";
}
echo "</table>";


// Close the database connection
mysqli_close($conn);
?>
