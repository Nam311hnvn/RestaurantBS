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
    <!-- start heading -->
    <div class="header header-manager border-2 border-dark border-bottom">
        <div class="container">
            <div class="row">
                <div class="col">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="container-fluid ">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="admin-home.php">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="admin.php">Admin</a>
                                    </li>
                                    <a class="nav-link" href="admin-categories.php">Category</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="admin-food.php">Food</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="admin-order.php">Order</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Logout</a>
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
    <!-- begin categories -->

    <div class="order_manage bg-secondary bg-opacity-25">
        <div class="container">
            <div class="row col p-4 pt-5 ">
                <h1>Manage Order</h1>
            </div>
            <div class="row col p-4 pb-5">
                <table class="table align-middle">
                    <thead class="border-0 align-middle">
                        <tr>
                            <th scope="col">S.N</th>
                            <th scope="col">Food</th>
                            <th scope="col">Price</th>
                            <th scope="col">Qty.</th>
                            <th scope="col">Total</th>
                            <th scope="col">Order Date</th>
                            <th scope="col">Status</th>
                            <th scope="col">Custumer<br> Name</th>
                            <th scope="col">Contract</th>
                            <th scope="col">Email</th>
                            <th scope="col">Address</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1.</th>
                            <td>Pizza</td>
                            <td>5.00</td>
                            <td>1</td>
                            <td>20.00</td>
                            <td>2021-1-29</td>
                            <td class="text-success">Delivered</td>
                            <td>Bruh Bruh</td>
                            <td>0989236237</td>
                            <td>LmaoLmao@gmail.com</td>
                            <td>Hanoi</td>
                            <td class="text-success">Update Order</td>
                        </tr>
                        <tr>
                            <th scope="row">1.</th>
                            <td>Burger</td>
                            <td>7.00</td>
                            <td>2</td>
                            <td>14.00</td>
                            <td>2021-4-23</td>
                            <td class="text-success">Delivered</td>
                            <td>Silver Crown</td>
                            <td>09732637263</td>
                            <td>OceanEyes@gmail.com</td>
                            <td>Hanoi</td>
                            <td class="text-success">Update Order</td>
                        </tr>
                        <tr>
                            <th scope="row">1.</th>
                            <td>Momo</td>
                            <td>3.00</td>
                            <td>5</td>
                            <td>15.00</td>
                            <td>2021-3-13</td>
                            <td class="text-success">Delivered</td>
                            <td>Mamicra</td>
                            <td>0923783273</td>
                            <td>imintoyou@gmail.com</td>
                            <td>Hanoi</td>
                            <td class="text-success">Update Order</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- end categories -->


    <!-- start footer -->
    <div class="footer footer-manager bg-danger">
        <div class="container">
            <div class="row col pt-2 ">
                <p class="text-center">2021 All right reserved, Food house.Developed By - <a href="#" class="coppyright text-primary">CSE TLU</a></p>
            </div>
        </div>
    </div>
    <!-- end footer-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>

</html>