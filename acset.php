
<?php include 'navbaracset.php';?>
<?php
// if(!isset($_GET['sid'])){
//     header("refresh: 0; url=http://localhost/examyoi/mainmenu.php");
// }
require '--conn.php';
$sql = "SELECT * FROM member WHERE Member_id='1001'";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style-acset.css">
    <link rel="shortcut icon" type="image/icon" href="assets/logo/favicon.png"/>
    <title>Account settings</title>
    <style>
            body {
            margin-top: 8rem;
            background-color: #FFF;
            color: #69707a;
        }
        </style>
</head>
<body>
    <div class="container-xl px-4 mt-4">
        <!-- <nav class="nav nav-borders" style="color:#e99c2e;">
            <a class="nav-link active" href="acset.php" target="__blank" >Profile</a>
            <a class="nav-link" href="bill.php" target="__blank">Billing</a>
            <a class="nav-link" href="proma.php" target="__blank">Manage products</a>
            <a class="nav-link" href="#" target="__blank">Notifications</a>
        </nav> -->
        <div class="row">
            <div class="col-xl-4">
                <div class="card mb-4 mb-xl-0">
                    <div class="card-header">Profile Picture</div>
                    <div class="card-body text-center">
                        <img class="img-account-profile rounded-circle mb-2" src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="card mb-4">
                    <div class="card-header">Account Details</div>
                    <div class="card-body">
                    <form id="form1" name="form1" method="post" action="--editsuccess.php">
                            <div class="mb-3">
                                <label class="small mb-1" for="inputUsername">Username </label>
                                <input class="form-control" id="inputUsername" name="inputUsername" type="text" placeholder="Enter your username" value="<?= $row['First_name'] . ' ' . $row['Last_name']; ?>"readonly>
                            </div>
                            <div class="row gx-3 mb-3">
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputFirstName">First name</label>
                                    <input class="form-control" id="inputFirstName" name="inputFirstName" type="text" placeholder="Enter your first name" value="<?=$row['First_name'];?>">
                                </div>
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputLastName">Last name</label>
                                    <input class="form-control" id="inputLastName" name="inputLastName"type="text" placeholder="Enter your last name" value="<?=$row['Last_name'];?>">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="small mb-1" for="inputEmailAddress">Email address</label>
                                <input class="form-control" id="inputEmailAddress" name="inputEmailAddress"type="email" placeholder="Enter your email address" value="<?=$row['Member_user'];?>">
                            </div>
                            <div class="row gx-3 mb-3">
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputBirthday">Birthday</label>
                                    <input class="form-control" id="inputBirthday" type="date" name="birthday" placeholder="Enter your birthday" value="<?=$row['Birth_date'];?>">
                                </div>
                            </div>
                            <input type="submit" class="btn"style="background-color:#e99c2e; color: white;" value="บันทึก" onclick="myFunction()">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>
