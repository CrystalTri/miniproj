<?php include 'navbaracset.php'; ?>
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
            <div class="col-3">
                <div class="card mb-4 mb-xl-0">
                    <div class="card-header">Store Menu</div>
                    <div class="card-body text-center">
                    <a class="btn btn-success" href=''>Tablb</a>
        <a class="btn btn-success" href=''>Bed</a>
        <a class="btn btn-success" href=''>Chair</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-9">
                <div class="card mb-4">
                    <div class="card-header">Details</div>
                    <div class="card-body">
                    <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col-4">เรื่อง</th>
                    <th scope="col-4">ประเภท</th>
                    <th scope="col-4">ปี</th>
                    <th scope="col-4">ราคา</th>
                    <th scope="col-4">Edit</th>
                </tr>
            </thead>
            
        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>
