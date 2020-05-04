<?php session_start(); ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">

</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="node_modules/jquery/dist/jquery.min.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="node_modules/popper.js/dist/popper.min.js"></script>

<body>




    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">


                <li class="nav-item dropdown">
                <li class="nav-item">
                    <a class="nav-link" href="T_Mobile.php">Mobile</a>
                </li>
                <!-- <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Mobile
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Apple</a>
                        <a class="dropdown-item" href="#">Sumsung</a> -->

                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <?php
                if (isset($_SESSION['uid'])) { ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            ยินดีต้อนรับ คุณ <?php echo $_SESSION['uname']; ?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">My Accout</a>
                            <a class="dropdown-item" href="#"></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="logout.php">Logout</a>
                        </div>
                    </li>


                <?php } ?>

            </ul>
            <!-- 
      <a class="btn btn-outline-success my-2 my-sm-0" href="http://localhost:8080/AllLog/login.php">Login</a>
      <a class="btn btn-outline-success my-2 my-sm-0" href="http://localhost:8080/AllLog/registration.php">Signup</a> -->
            </form>


        </div>
    </nav>
    <div class="container">
        <div class="bd-example">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <img src="https://images.unsplash.com/photo-1544228865-7d73678c0f28?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2100&q=80ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1280&h=900&q=80" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">

                            <p> Welcome </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://images.unsplash.com/photo-1545081576-5b7e640c083a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1288&q=80ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1280&h=550&q=80" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">


                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://images.unsplash.com/photo-1578653883821-89a75dcbf391?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1276&q=80ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1280&h=550&q=80" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">


                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">

            <?php
            require_once "Show.class.php";

            $o = new get_P;
            $result = $o->show_phone();
            while ($rec = mysqli_fetch_array($result)) {

                $id_phone = $rec[0];
                $model = $rec[1];
                $Color = $rec[2];
                $Capacity = $rec[3];
                $Price = $rec[4];
                $Number = $rec[5];
                $Img = $rec[6];
                $newPrice = number_format($Price);
            ?>
                <div class="col-sm-4 mt-3">
                    <div class="card">
                        <div class="card-body">

                            <img src="img/<?php echo ($Img) ?> " class="d-block w-100" alt="...">

                            <?php echo ($model) ?>
                            <br>
                            <?php echo ($Capacity) ?> <?php echo "Gb" ?>
                            <br>
                            <?php echo ($Color) ?>
                            <br>
                            <?php echo ($Price) ?> <?php echo "บาท" ?>
                            <br>
                        </div>
                        <div class="card-footer text-muted">
                            <a href="product.php" class="btn btn-outline-primary" role="button" aria-pressed="true"> ซื้อสินค้า </a>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>








</body>

</html>