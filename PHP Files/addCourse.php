<?php
$response = array();
$con = mysqli_connect("localhost", "id12643325_dcf", "files", "id12643325_dcf") or die(mysqli_error($con));
$courseID = $_POST['courseID'];
$courseName = $_POST['courseName'];
$post_query = "insert into Courses(courseID,courseName) values ('$courseID', '$courseName')";
$post_submit = mysqli_query($con, $post_query) or die(mysqli_error($con));
if ($post_submit) {
        // successfully inserted into database
        $response["success"] = 1;
        $response["message"] = "Data successfully Stored.";
 
        // echoing JSON response
        echo json_encode($response);
    } else {
        // failed to insert row
        $response["success"] = 0;
        $response["message"] = "Oops! An Error occurred.";
 
        // echoing JSON response
        echo json_encode($response);
    }
?>