<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- Font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.0-10/css/all.css">
    <!-- person css -->
    <link rel="stylesheet" href="./css/style.css">
    <title>Wow Food</title>
</head>

<body>
    <!-- start header -->
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="index.php">
                                <img src="./images/logo.png" alt="logo" class="img-fluid">
                            </a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="categories.php">Categories</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="food.php">Food</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="contact.php">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- end header -->
    <!-- start food menu -->
    <div class="food-menu bg-secondary">
        <div class="row col text-center p-4">
            <h2>Food Menu</h2>
        </div>
        <div class="container w-75">
            <div class="row justify-content-between ">
                <div class="card mb-3 col-md-6 food-item">
                    <div class="row g-0">
                        <div class="col-lg-4 text-center m-auto">
                            <img src="./images/pizza.jpg" class="img-fluid rounded" alt="pizza">
                        </div>
                        <div class="col-lg-8 ">
                            <div class="card-body">
                                <h5 class="card-title">Pizza</h5>
                                <p class="card-text">$5.00</p>
                                <p class="card-text">
                                    <small class="text-muted">Made with Italian sauce,Chicken,and organice Vegetables</small>
                                </p>
                                <a href="order.php"><button type="button" class="btn btn-danger">Order</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3 col-md-6 food-item">
                    <div class="row g-0">
                        <div class="col-lg-4 text-center m-auto">
                            <img src="./images/burger.jpg" class="img-fluid rounded" alt="burger">
                        </div>
                        <div class="col-lg-8 ">
                            <div class="card-body">
                                <h5 class="card-title">Nice Burger</h5>
                                <p class="card-text">$5.00</p>
                                <p class="card-text">
                                    <small class="text-muted">Made with Italian sauce,Chicken,and organice Vegetables</small>
                                </p>
                                <a href="order.php"><button type="button" class="btn btn-danger">Order</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between ">
                <div class="card mb-3 col-md-6 food-item">
                    <div class="row g-0">
                        <div class="col-lg-4 text-center m-auto">
                            <img src="./images/momo.jpg" class="img-fluid rounded" alt="momo">
                        </div>
                        <div class="col-lg-8 ">
                            <div class="card-body">
                                <h5 class="card-title">Momo</h5>
                                <p class="card-text">$5.00</p>
                                <p class="card-text">
                                    <small class="text-muted">Made with Italian sauce,Chicken,and organice Vegetables</small>
                                </p>
                                <a href="order.php"><button type="button" class="btn btn-danger">Order</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3 col-md-6 food-item">
                    <div class="row g-0">
                        <div class="col-lg-4 text-center m-auto">
                            <img src="./images/pizza.jpg" class="img-fluid rounded" alt="chicken pizza">
                        </div>
                        <div class="col-lg-8 ">
                            <div class="card-body">
                                <h5 class="card-title">Chicken Pizza</h5>
                                <p class="card-text">$5.00</p>
                                <p class="card-text">
                                    <small class="text-muted">Made with Italian sauce,Chicken,and organice Vegetables</small>
                                </p>
                                <a href="order.php"><button type="button" class="btn btn-danger">Order</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row col text-center p-4">
                    <a href="categories.php" class="link-danger text-decoration-none">See All food</a>
                </div>
            </div>
        </div>

        <!-- end food menu -->




    <!-- Start Footer -->
    <div class="footer bg-light">
        <div class="container">
            <div class="row col-6 justify-content-center pt-3 pb-3 m-auto">
                <div class="col-1">
                    <a href="#"><img src="images/facebook_icon.png" alt="#"></a>
                </div>
                <div class="col-1 ">
                    <a href="#"><img src="images/insta_icon.png" alt=""></a>
                </div>
                <div class="col-1 ">
                    <a href="#"><img src="images/twitter_icon.png" alt=""></a>
                </div>
            </div>
            <div class="row col">
                <p class="text-center">All right reserved. Design By <a href="#" class="text-decoration-none coppyright">CSE TLU</a></p>
            </div>
        </div>
    </div>
    <!-- End Footer -->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>