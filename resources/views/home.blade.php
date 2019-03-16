<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="\Font-Awesome-master\web-fonts-with-css\css\fontawesome-all.min.css">
    <script src="js/app.js"></script>
    <title>Gbuy</title>
</head>
<body >
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
            <a class="nav-link mr-4" href="#">Services</a>
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
        <button type="button" class="btn btn-primary p-3 btn-lg" data-target="#loginmodal" data-toggle="modal">Register</button>

    </div>
</nav>    

<!-----------carousel------------->

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

<!--------warning------->
<div class="container-fluid ">
<div class="alert alert-danger text-center" role="alert">
        <p class="lead">To order for food please ensure you login or register..</p>
    </div>
</div>

<!------food item-->

<div class="container-fluid">
    <h4 class="display-3  text-center" style="margin-top: 150px;">Food</h4>
    <div class="row">
        <div class="col-md-4 mt-4">
           <div class="card">
               <div class="card-header text-center">
                 <h3>vegetable Food</h3> 
             </div>
               <div class="card-body">
                   <h5 class="card-title"></h5>
                   <p class="card-text"><img src="/images/b.jpg" alt="" class="img-fluid"></p>
                   <p class="lead">This is a very tasty food <strong>available</strong> now</p>
                   <p class="lead">Click for more details <p class="lead">Click for more details 
                        <button class="btn btn-primary btn-lg" data-target="#login"  data-toggle="modal">Details</button></p>
</p>

              
                </div>
               
           </div>
           
        </div>
<!---row 2-->
<div class="col-md-4 mt-4">
        <div class="card">
            <div class="card-header text-center">
              <h3>vegetable Food</h3> 
            </div>
            <div class="card-body">
                <h5 class="card-title"></h5>
                <p class="card-text"><img src="/images/j.jpg" alt="" class="img-fluid"></p>
                <p class="lead">This is a very tasty food <strong>available</strong> now</p>
                <p class="lead">Click for more details  <button class="btn btn-primary btn-lg" data-target="#login1"  data-toggle="modal">Buy</button></p>

            </div>
            
        </div>
        
     </div>
     <!---row 3 -->
     <div class="col-md-4 mt-4">
        <div class="card">
            <div class="card-header text-center">
              <h3>vegetable Food</h3> 
            </div>
            <div class="card-body">
                <h5 class="card-title"></h5>
                <p class="card-text"><img src="/images/h.jpg" alt="" class="img-fluid"></p>
                <p class="lead">This is a very tasty food <strong>available</strong> now</p>
                <p class="lead">Click for more details  <button class="btn btn-primary btn-lg"  data-target="#login3"  data-toggle="modal">Buy</button></p>

            </div>
           
        </div>
        
     </div>

    <!---4-->
    <div class="col-md-4 mt-4">
            <div class="card">
                <div class="card-header text-center">
                  <h3>vegetable Food</h3> 
                </div>
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text"><img src="/images/a.jpg" alt="" class="img-fluid"></p>
                    <p class="lead">This is a very tasty food <strong>available...</strong> now</p>
 <p class="lead">Click for more details  <button class="btn btn-primary btn-lg" data-target="#login4"  data-toggle="modal">Buy</button></p>

                </div>
               
            </div>
            
         </div>
         <!---5-->
    
         <div class="col-md-4 mt-4">
                <div class="card">
                    <div class="card-header text-center">
                      <h3>vegetable Food</h3> 
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text"><img src="/images/m.jpg" alt="" class="img-fluid"></p>
                        <p class="lead">This is a very tasty food <strong>available</strong> now</p>
        <p class="lead">Click for more details  <button class="btn btn-primary btn-lg"  data-target="#login5"  data-toggle="modal">Buy</button></p>

                    </div>
                   
                </div>
                
             </div>
    
        <!----6-->
        <div class="col-md-4 mt-4">
                <div class="card">
                    <div class="card-header text-center">
                      <h3>vegetable Food</h3> 
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text"><img src="/images/l.jpg" alt="" class="img-fluid"></p>
                        <p class="lead">This is a very tasty food <strong>available</strong> now</p>
                <p class="lead">Click for more details  <button class="btn btn-primary btn-lg" data-target="#login6"  data-toggle="modal">Buy</button></p>

                    </div>
                   
                </div>
                
             </div>
    
            <!---7--->
            <div class="col-md-4 mt-4">
            <div class="card">
                <div class="card-header text-center">
                    <h3>vegetable Food</h3> 
                </div>
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text"><img src="/images/o.jpg" alt="" class="img-fluid" style='height:400px;width:700px;background-size:cover;background-position:center;'></p>
                    <p class="lead">This is a very tasty food <strong>available</strong> now</p>
                                 <p class="lead">Click for more details  <button class="btn btn-primary btn-lg" data-target="#login7"  data-toggle="modal">Buy</button></p>

                </div>
                
            </div>
            
            </div>
<!----8-->
<div class="col-md-4 mt-4">
        <div class="card">
            <div class="card-header text-center">
              <h3>vegetable Food</h3> 
            </div>
            <div class="card-body">
                <h5 class="card-title"></h5>
                <p class="card-text"><img src="/images/a.jpg" alt="" class="img-fluid"></p>
                <p class="lead">This is a very tasty food <strong>available</strong> now</p>
                             <p class="lead">Click for more details  <button class="btn btn-primary btn-lg" data-target="#login8"  data-toggle="modal">Buy</button></p>

            </div>
           
        </div>
        
     </div>
<!---9---->
<div class="col-md-4 mt-4">
        <div class="card">
            <div class="card-header text-center">
              <h3>vegetable Food</h3> 
            </div>
            <div class="card-body">
                <h5 class="card-title"></h5>
                <p class="card-text"><img src="/images/c.jpg" alt="" class="img-fluid"  style='height:400px;width:700px;background-size:cover;background-position:center;'></p>
                <p class="lead">This is a very tasty food <strong>available</strong> now</p>
                             <p class="lead">Click for more details  <button class="btn btn-primary btn-lg"  data-target="#login9"  data-toggle="modal">Buy</button></p>

            </div>
           
        </div>
        
     </div>
     <!----10--->
     <div class="col-md-4 mt-4">
            <div class="card">
                <div class="card-header text-center">
                  <h3>vegetable Food</h3> 
                </div>
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text"><img src="/images/r.jpg" alt="" class="img-fluid"  ></p>
                    <p class="lead">This is a very tasty food <strong>available</strong> now</p>
                                 <p class="lead">Click for more details  <button class="btn btn-primary btn-lg"   data-target="#login10"  data-toggle="modal">Buy</button></p>

                </div>
               
            </div>
            
         </div>
<!---11--->
<div class="col-md-4 mt-4">
        <div class="card">
            <div class="card-header text-center">
              <h3>vegetable Food</h3> 
            </div>
            <div class="card-body">
                <h5 class="card-title"></h5>
                <p class="card-text"><img src="/images/p.jpg" alt="" class="img-fluid"  ></p>
                <p class="lead">This is a very tasty food <strong>available</strong> now</p>
                             <p class="lead">Click for more details  <button class="btn btn-primary btn-lg"  data-target="#login11"  data-toggle="modal">Buy</button></p>

            </div>
           
        </div>
        
     </div>
<!--12---->
<div class="col-md-4 mt-4">
        <div class="card">
            <div class="card-header text-center">
              <h3>vegetable Food</h3> 
            </div>
            <div class="card-body">
                <h5 class="card-title"></h5>
                <p class="card-text"><img src="/images/m.jpg" alt="" class="img-fluid"  ></p>
                <p class="lead">This is a very tasty food <strong>available</strong> now</p>
              <p class="lead">Click for more details <p class="lead">Click for more details  
                  <button class="btn btn-primary btn-lg"  data-target="#login12"  data-toggle="modal">Buy</button></p>
</p>
            </div>
           
        </div>
        
     </div>
     <!--13-->
     <div class="col-md-4 mt-4">
            <div class="card">
                <div class="card-header text-center">
                  <h3>vegetable Food</h3> 
                </div>
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text"><img src="/images/r.jpg" alt="" class="img-fluid"  ></p>
                    <p class="lead">This is a very tasty food <strong>available</strong> now</p>
                 <p class="lead">Click for more details  <button class="btn btn-primary btn-lg" data-target="#login13"  data-toggle="modal">Buy</button></p>

                </div>
               
            </div>
            
         </div>
<!---14--->
<div class="col-md-4 mt-4">
        <div class="card">
            <div class="card-header text-center">
              <h3>vegetable Food</h3> 
            </div>
            <div class="card-body">
                <h5 class="card-title"></h5>
                <p class="card-text"><img src="/images/u.jpg" alt="" class="img-fluid"  ></p>
                <p class="lead">This is a very tasty food <strong>available</strong> now</p>
                             <p class="lead">Click for more details  <button class="btn btn-primary btn-lg" data-target="#login14"  data-toggle="modal">Buy</button></p>

            </div>
           
        </div>
        
     </div>
<!---14-->
<div class="col-md-4 mt-4">
        <div class="card">
            <div class="card-header text-center">
              <h3>vegetable Food</h3> 
            </div>
            <div class="card-body">
                <h5 class="card-title"></h5>
                <p class="card-text"><img src="/images/w.jpg" alt="" class="img-fluid"  ></p>
                <p class="lead">This is a very tasty food <strong>available</strong> now</p>
                  <p class="lead">Click for more details  <button class="btn btn-primary btn-lg" data-target="#login15"  data-toggle="modal">Buy</button></p>

            </div>
           
        </div>
        
     </div>



    </div>
    


    </div>
    
</div>
</div>








<!-----siginup modal---------->
@include('modal.login')

@include('modal.buy')



<!------footer-->
<footer>
<div class="container-fluid">
<div class="row d-flex justify-content-center">
    <div class="col-lg-4 bottom">
        <h3 style="font-weight: 900"> <i class="fa fa-address-book" aria-hidden="true"></i>  Contact Info  </h3>
    <p class="lead">1481 Creekside Lane 
             Beach, SA Nigeria</p>

    <p>080000000000000000</p>
    <p>E@example.com</p>

    </div>
    <div class="col-lg-4 bottom">
            <h3 style="font-weight: 900"> <i class="fab fa-servicestack    "></i> Services </h3>
        <p class="lead">Provide quality services</p>
    
        <p>Fast Food devlivery</p>
        <p>Faster and efficent services</p>
        <p>Online Food Order</p>
        <p>Quality and qualitative customer services and relationship</p>


    
        </div>

        <div class="col-lg-4 bottom">
              <h3 style="font-weight: 900">Follow us</h3>
              <span id="font"><i class="fab fa-facebook" aria-hidden="true" id="font1"></i> </span>
              <span id="font"><i class="fab fa-twitter" aria-hidden="true" id="font1"></i> </span>
              <span id="font"><i class="fab fa-instagram    " id="font1"></i></span>
              <span id="font"><i class="fab fa-snapchat-ghost" id="font1"></i></span>
              <span id="font"><i class="fab fa-edge" aria-hidden="true" id="font1"></i></span>
            
        
            </div>
        
</div>







</div>
</footer>







</body>
</html>