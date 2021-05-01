<!DOCTYPE html>
<html>
<head>
  <title>Tourism</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="CSS/style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
  

</head>
<body>

  <!Navbarrrrr>
  <!navbar navbar-expand-sm bg-dark navbar-dark>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">

      <a class="navbar-brand" href="index.php">
        <img src="images/choudharylogo.png" alt="" width="100" height="100" class="d-inline-block align-text-top " >
        <div style="display: inline-block;">
          <a class="navbar-brand pb-0 " href="index.php" style="font-weight: 600;font-size: 24px;">Choudhary Yatra Company Private Limited</a><br>
          <div class="navbar-text pl-4 " style="color: #E5E4E2;">
            Panchavati, Nashik, Maharashtra.
          </div>
        </div>
      </a>


      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">ContactUs</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>


  <!SlideShow Carousel>
  <div id="demo" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner" >
      <div class="carousel-item active">
        <img src="images/carousel_1.png" alt="Los Angeles" width="1100" height="500">
        <div class="carousel-caption">
          <h3>Los Angeles</h3>
          <p>We had such a great time in LA!</p>
        </div>   
      </div>
      <div class="carousel-item">
        <img src="images/carousel_2.png" alt="Chicago" width="1100" height="500">
        <div class="carousel-caption">
          <h3>Chicago</h3>
          <p>Thank you, Chicago!</p>
        </div>   
      </div>
      <div class="carousel-item">
        <img src="images/carousel_3.png" alt="New York" width="1100" height="500">
        <div class="carousel-caption">
          <h3>New York</h3>
          <p>We love the Big Apple!</p>
        </div>   
      </div>
    </div>
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>

  <!About us page : >

  <section class="my-5">
    <div class="py-5">
      <h2 class="text-center" >About Us</h3>
      </div>

      <div class="container-fluid">
        <div class="row" >
          <div class="col-lg-6 col-md-6 col-12">
            <img src="images/Aboutus_1.png" class="img-fluid aboutus" >
          </div>

          <div class="col-lg-6 col-md-6 col-12">
            <h3 class="display-4">Company Profile</h3>
            <p class="py-3 ">We are one of the well known names of the industry that provides International and Domestic Tour & Travel services. Our services are widely applauded for their reliability, comfort and timely execution.</p>
            <a href="about.php" class="btn btn-success">Know More</a>
          </div>
        </div>  
      </div>
    </section>

    <section class="my-5">
      <div class="py-5">
        <h2 class="text-center" >Our Services</h3>
        </div>
        <div class="container-fluid">
          <div class="row">

            <div class="col-lg-4 col-md-4 col-12">
              <div class="card" >
                <img class="card-img-top" src="images/card1.png" alt="Card image">
                <div class="card-body">
                  <h4 class="card-title">Beautiful Nature</h4>
                  <p class="card-text">Some example text.</p>
                  <a href="#" class="btn btn-primary">See Profile</a>
                </div>
              </div> 
            </div>

            <div class="col-lg-4 col-md-4 col-12">
              <div class="card" >
                <img class="card-img-top" src="images/card1.png" alt="Card image">
                <div class="card-body">
                  <h4 class="card-title">Beautiful Nature</h4>
                  <p class="card-text">Some example text.</p>
                  <a href="#" class="btn btn-primary">See Profile</a>
                </div>
              </div> 
            </div>

            <div class="col-lg-4 col-md-4 col-12">
              <div class="card" >
                <img class="card-img-top" src="images/card1.png" alt="Card image">
                <div class="card-body">
                  <h4 class="card-title">Beautiful Nature</h4>
                  <p class="card-text">Some example text.</p>
                  <a href="#" class="btn btn-primary">See Profile</a>
                </div>
              </div> 
            </div>
          </div>
        </div>
      </section>

      <section class="my-5">
        <div class="py-5">
          <h2 class="text-center" >Gallary</h3>
          </div>
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-12">
                <img src="images/Gallery1.png" class="img-fluid p-4">
              </div>
              <div class="col-lg-4 col-md-4 col-12">
                <img src="images/Gallery1.png" class="img-fluid p-4">
              </div>
              <div class="col-lg-4 col-md-4 col-12">
                <img src="images/Gallery1.png" class="img-fluid p-4">
              </div>
              <div class="col-lg-4 col-md-4 col-12">
                <img src="images/Gallery1.png" class="img-fluid p-4">
              </div>
              <div class="col-lg-4 col-md-4 col-12">
                <img src="images/Gallery1.png" class="img-fluid p-4">
              </div>
              <div class="col-lg-4 col-md-4 col-12">
                <img src="images/Gallery1.png" class="img-fluid p-4">
              </div>   
            </div>   
          </div>  
        </section>  


        <section class="my-5">
          <div class="py-5">
            <h2 class="text-center">Gallary</h2>
          </div>      

          <div class="w-50 m-auto">
              <form action="userinfo.php" method="post">
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" name="user" autocomplete="off" class="form-control">
                </div>
                <div class="form-group">
                  <label>Email-ID</label>
                  <input type="text" name="email" autocomplete="off" class="form-control">
                </div>  
                <div class="form-group">
                  <label>Mobile Number</label>
                  <input type="text" name="Mobile" autocomplete="off" class="form-control">
                </div>  
                <div class="form-group">
                  <label>Comments</label>
                  <textarea class="form-control" name="comments" autocomplete="off">
                  </textarea>
                </div>    

                <button type="submit" class="btn btn-success">Submit</button>
              </form>
          </div>
        </section>
        
        <footer>
          <p class="p-3 bg-dark text-white text-center">This site is maintained by ssjoshiy2k@gmail.com</p>
        </footer>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

      </body>
      </html>