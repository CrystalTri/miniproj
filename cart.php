
<?php include 'navbaracset.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/style-shop.css">
    <title>Cart</title>
    <style>
            body {
            margin-top: 6rem;
            background-color: #FFF;
            color: #69707a;
        }
        </style>
</head>
<body>
    <section class=" h-custom" style="background-color: #FFF;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12">
                    <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                        <div class="card-body p-0">
                            <div class="row g-0">
                                <div class="col-lg-8">
                                    <div class="p-5">
                                        <div class="d-flex justify-content-between align-items-center mb-5">
                                            <h1 class="fw-bold mb-0" style="color: #e99c2e;">Shopping Cart</h1>

                                            <h6 class="mb-0 text-muted">3 items</h6>
                                        </div>
                                        <hr class="my-4">

                                        <div class="row mb-4 d-flex justify-content-between align-items-center">
                                            <div class="col-md-2 col-lg-2 col-xl-2">
                                                <img src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg"
                                                    class="img-fluid rounded-3" alt="Cotton T-shirt">
                                            </div>
                                            <div class="col-md-3 col-lg-3 col-xl-3">
                                                <h6 class="text-muted">Shirt</h6>
                                                <h6 class="text-black mb-0">Cotton T-shirt</h6>
                                            </div>
                                            <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                                <button class="btn btn-link px-2"
                                                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                    <i class="fas fa-minus"></i>
                                                </button>

                                                <input id="form1" min="0" name="quantity" value="1" type="number"
                                                    class="form-control form-control-sm" />

                                                <button class="btn btn-link px-2"
                                                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </div>
                                            <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                                <h6 class="mb-0">€ 44.00</h6>
                                            </div>
                                            <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                                <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
                                            </div>
                                        </div>

                                        <hr class="my-4">

                                        <div class="pt-5">
                                            <h6 class="mb-0"><a href="shop.php" class="text-body"><i
                                                        class="fas fa-long-arrow-alt-left me-2"></i>Back to shop</a>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 bg-grey">
                                    <div class="p-5">
                                        <h3 class="fw-bold mb-5 mt-2 pt-1"style="color: #e99c2e;">Summary</h3>
                                        <hr class="my-4">

                                        <div class="d-flex justify-content-between mb-4">
                                            <h5 class="text-uppercase">items 3</h5>
                                            <h5>€ 132.00</h5>
                                        </div>


                                        <h5 class="text-uppercase mb-3">Give code</h5>

                                        <div class="mb-3">
                                            <div class="form-outline">
                                                <input type="text" id="form3Examplea2"
                                                    class="form-control" />
                                                <label class="form-label" for="form3Examplea2">Enter your code</label>
                                            </div>
                                        </div>
                                        <h5 class="text-uppercase mb-3">Location</h5>
                                        <div class="mb-3">
                                            <div class="form-outline">
                                                <input type="text" id="form3Examplea2"
                                                    class="form-control" />
                                                <label class="form-label" for="form3Examplea2">Enter your address</label>
                                            </div>
                                        </div>
                                        <h5 class="text-uppercase mb-3">Payment</h5>
                                        <div class="mb-4 pb-2">
                                            <select class="select">
                                                <option value="1">Standard-Delivery- €5.00</option>
                                                <option value="2"></option>
                                                <option value="3">Three</option>
                                                <option value="4">Four</option>
                                            </select>
                                        </div>
                                        <hr class="my-4">
                                        

                                        <div class="d-flex justify-content-between mb-5">
                                            <h5 class="text-uppercase">Total price</h5>
                                            <h5>€ 137.00</h5>
                                        </div>

                                        <button type="button" class="btn btn-orange btn-block btn-lg"
                                            data-mdb-ripple-color="dark">Pay</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>

</body>

</html> 