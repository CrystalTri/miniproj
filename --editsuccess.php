<?php
require '--conn.php';
$sql_update = "UPDATE member SET First_name='$_POST[inputFirstName]',Last_name='$_POST[inputLastName]',Member_user='$_POST[inputEmailAddress]',Birth_date='$_POST[birthday]' WHERE Member_id='1001'";
$result = $conn->query($sql_update);

if (!$result) {
    die("Error: " . $conn->error);
} else {
    echo '<script>';
    echo 'alert("Edit Success");';
    echo 'window.location.href = "http://localhost/miniproj/acset.php   ";';
    echo '</script>';
}

?>

<!-- 
// if(!isset($_GET['sid'])){
//     header("refresh: 0; url=http://localhost/examyoi/mainmenu.php");
// } -->
