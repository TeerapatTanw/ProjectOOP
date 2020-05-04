<?php
require_once "product.class.php";

if (isset($_POST['submit'])) {

    $Model = $_POST['Model'];
    $Color = $_POST['Color'];
    $Capacity = $_POST['Capacity'];
    $Price = $_POST['Price'];
    $Number = $_POST['Number'];
    $name_img = $_FILES['img']['name'];
    $tmpname = $_FILES['img']['tmp_name'];
    $obj = new product;
    $obj->Model = $Model;
    $obj->Color = $Color;
    $obj->Capacity = $Capacity;
    $obj->Price = $Price;
    $obj->Number = $Number;

    $obj->up_img($name_img, $tmpname);
    $obj->s_product();
}

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<body>

    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="T_Mobile.php"> Mobile <span class="sr-only">(current)</span></a>
                    </li>
            </div>
        </nav>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-sm-2  mt-3"></div>
            <div class="col-sm-6  mt-3 ">
                <form method="post" enctype="multipart/form-data" action=''>
                    <div class="form-group">
                        <div class="form-group row">
                            <div class="col-sm-9 ">
                                <label for="exampleFormControlSelect2" class="col-sm-3 col-form-label"> Model </label>
                                <select class="form-control" id="exampleFormControlSelect2" name="Model" placeholder="">
                                    <option value="">--- เลือกรุ่น ---</option>
                                    <option value="Iphone X"> Iphone XR </option>
                                    <option value="Iphone X"> Iphone Se </option>
                                    <option value="Iphone11"> Iphone11 </option>
                                    <option value="Iphone11 Pro Max"> Iphone11 Pro Max </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group row">
                            <div class="col-sm-9 ">
                                <label for="exampleFormControlSelect2" class="col-sm-3 col-form-label"> Color </label>
                                <select class="form-control" id="exampleFormControlSelect2" name="Color" placeholder="">
                                    <option value="">--- เลือกสี ---</option>
                                    <option value="แดง / Red"> แดง / Red </option>
                                    <option value="ดำ / Black"> ดำ / Black </option>
                                    <option value="ขาว / White"> ขาว / White </option>
                                    <option value="เขียว / Midnight Green"> เขียว / Midnight Green </option>
                                    <option value="ทอง / Gold"> ทอง / Gold </option>
                                    <option value="ม่วง / purple"> ม่วง / purple </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group row">
                            <div class="col-sm-9">
                                <label for="exampleFormControlSelect2" class="col-sm-3 col-form-label"> Capacity </label>
                                <select class="form-control" id="exampleFormControlSelect2" name="Capacity" placeholder="">
                                    <option value="">--- เลือกความจุ ---</option>
                                    <option value="32"> 32 Gb </option>
                                    <option value="64"> 64 Gb </option>
                                    <option value="128"> 128 Gb </option>
                                    <option value="256"> 256 Gb </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">

                        <div class="form-group">
                            <div class="form-group row">
                                <div class="col-sm-9">
                                    <label for="exampleFormControlSelect2" class="col-sm-3 col-form-label"> Number </label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="Number" aria-describedby="emailHelp">
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-group row">
                                    <div class="col-sm-9">
                                        <label for="exampleFormControlSelect2" class="col-sm-3 col-form-label"> Price </label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="Price" aria-describedby="emailHelp">
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row" id="imageloadbutton">

                                    <div class="custom-file col-sm-9 ">
                                        <label for="inputDetails" class="col-sm-3 col-form-label">ภาพอื่น</label>
                                        <div class="col-sm-0 ">
                                        </div>
                                        <div class="col-sm-12 mr-1">
                                            <input type="file" class="custom-file-input" id="customFile" name="img" accept="image/*">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>