<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<style>
    body{background-color:#FFEBEE}.card{width:400px;background-color:#fff;border:none;border-radius: 12px}label.radio{cursor: pointer;width: 100%}label.radio input{position: absolute;top: 0;left: 0;visibility: hidden;pointer-events: none}label.radio span{padding: 7px 14px;border: 2px solid #eee;display: inline-block;color: #039be5;border-radius: 10px;width: 100%;height: 48px;line-height: 27px}label.radio input:checked+span{border-color: #039BE5;background-color: #81D4FA;color: #fff;border-radius: 9px;height: 48px;line-height: 27px}.form-control{margin-top: 10px;height: 48px;border: 2px solid #eee;border-radius: 10px}.form-control:focus{box-shadow: none;border: 2px solid #039BE5}.agree-text{font-size: 12px}.terms{font-size: 12px;text-decoration: none;color: #039BE5}.confirm-button{height: 50px;border-radius: 10px}
</style>
<body>
  

    <div class="container mt-5 mb-5 d-flex justify-content-center">
        <div class="card px-1 py-4">
            
        <form class=""  action=" " method="POST">
            <div class="card-body">
                <h2 class="card-title mb-3">Student Form</h2>
                
                <h6 class="information mt-4">Please Enter the Quantity of following items</h6>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="name">PRN</label> <input class="form-control" type="number" placeholder="Enter PRN" name="stud_id" > </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="name">Name</label> <input class="form-control" type="text" placeholder="Enter  Name" name="stud_name" > </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                        <label for="name">City</label>  <div class="input-group"> <input class="form-control" type="text" placeholder="Enter City" name="stud_address" > </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                        <label for="name">Branch ID</label><div class="input-group"> <input class="form-control" type="number" placeholder="BranchID" name="branch_id" > </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="name">Email</label><input class="form-control" type="text" placeholder="Email" name="stud_email" > </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                        <label for="name">CGPA</label> <input class="form-control" type="number" placeholder="CGPA" name="stud_CGPA" > </div>
                    </div>
                </div>
                <div class=" d-flex flex-column text-center px-5 mt-3 mb-3"> <small class="agree-text"> You can proceed further</small> <a href="#" class="terms"></a> </div>
                 <!-- <button class="btn btn-primary btn-block confirm-button">Confirm Order</button> -->
                 <div>
								 <button style="margin: 22px; padding: 12px;" type="submit" value="submit" name="submit" class="form-btn"   > Submit</button>
							</div>
            </div>
            </form>
        </div>
    </div>

    
</body>
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

// Check if the form has been submitted
if (isset($_POST['submit'])) {

    // Retrieve the form data
    $stud_id = $_POST['stud_id'];
    $stud_name = $_POST['stud_name'];
    $stud_address = $_POST['stud_address'];
    $branch_id = $_POST['branch_id'];
    $stud_email = $_POST['stud_email'];
    $stud_CGPA = $_POST['stud_CGPA'];

    // Insert the form data into the database table
    $sql = "INSERT INTO stud_info (stud_id, stud_name, stud_address, branch_id, stud_email, stud_CGPA) VALUES ('$stud_id', '$stud_name', '$stud_address', '$branch_id', '$stud_email', '$stud_CGPA')";

    // Execute the SQL query and check for errors
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);

?>

</html>