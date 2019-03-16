<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/index.css">
    <script src="js/app.js"></script>
    <title>Gbuy</title>
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-primary">
    <a class="navbar-brand" href="#">  {{ config('app.name', 'Gbuy') }}</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
      aria-expanded="false" aria-label="Toggle navigation"></button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav m-auto mt-2 p-1">
        <li class="nav-item ">
        <a class="nav-link mr-4" href="#">Home </span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link mr-4" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle ml-8" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menu</a>
            <div class="dropdown-menu" aria-labelledby="dropdownId" tabindex="-1">
            <a class="dropdown-item" href="#">Food and Meat</a>
            <a class="dropdown-item" href="#">Burger</a>
            <a class="dropdown-item" href="#">Beverages</a>

                </div>
            </li>
        </ul>
        <button type="button" class="btn btn-primary p-3 btn-lg" data-target="#loginmodal" data-toggle="modal">Login</button>
        <button type="button" class="btn btn-primary btn-lg" data-target="#signupmodal" data-toggle="modal">Signup</button>

    </div>
</nav>    

<!-------------carousel------------->

<div id="my-carousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li class="active" data-target="#my-carousel" data-slide-to="0" aria-current="location"></li>
        <li data-target="#my-carousel" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="/images/a.jpg" alt="" class="img-fluid">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="lead">Tasty Food</h5>
                <p>WE deliver very fast you can trust us for good and healty food.. </p>
                <p>We deliver in 10minutes times... trust us </p>

            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="/images/c.jpg" alt="" class="img-fluid">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="lead">Order Online</h5>
                <p>Always as your service... Order now and you will never regret our sweet and delicious yummy food and drink </p>
                <p>We deliver in 10minutes times... trust us </p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#my-carousel" data-slide="prev" role="button">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#my-carousel" data-slide="next" role="button">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
@include('modal.login')

<div class="alert alert-danger lead p-5 text-center">
    <p>To order online please ensure you login or register</p>
</div>


<div class="footer">
<div class="container-fluid">
    <div class="row text-center">
        <div class="col-md-6">
        <h1>About us</h1>
        <p>Fast Delivery</p>
        <p>Online Order</p>
        <p>Cheap Fod</p>
        <p>Tasty Food</p>

        </div>
    <!------------------>

    <div class="col-md-6">
        <h1 >Contact us</h1>
        <p>0080000000</p>
        <p>e.example.com</p>
        <p>5,jjj street </p>
        
</div>
</div>

</body>