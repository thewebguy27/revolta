<?php
include('header.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/Bootstrap/CSS/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-free-5.10.2-web/css/all.css">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
  </head>
  <!--xs<576, 576<sm<768, 768<md<992, 992<lg<1200, 1200<xl-->
  <body>
    <!--header-->
 
    <section>
      <div class="container-fluid">
          <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="Images/Web development service page (2).jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Web Development</h5>
                    <p>Full Responsive Websites</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="Images/Graphic Dessign service page.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Graphic Desingning</h5>
                    <p>All kinds of logos,banners,posters,letterheads</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="Images/Writing service page.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Content Writing</h5>
                    <p>All kinds of Content Writing</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="Images/App development service page (1).jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>App Development</h5>
                    <p>Android App Development</p>
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
    </section>
<section>
<div class="container">
  <div class="row">
<div class="col-12 text-center" >
  <h3 >The Team</h3>
</div>
  </div>
  <hr>
  <div class="row">
<div class="col-md-4 text-center">
  <img class="img-fluid"  src="Images/asim.jpg" alt="" style="height:150px;width:150px;border-radius:50%  ">
  <h5>
    ASIM MANZOOR
  </h5>
  <p>
      CEO Revolta Enterprises
      <br>
      (App Developer)
      
  </p>
</div>
<div class="col-md-4 text-center">
    <img class="img-fluid"  src="Images/hamza.jpg" alt="" style="height:150px;width:150px;border-radius:50%  ">
    <h5>
      MUHAMMAD HAMZA AWAN
    </h5>
    <p>
        CO-CEO Revolta Enterprises
        <br>
        (Web Developer)
    </p>
</div>
<div class="col-md-4 text-center">
    <img class="img-fluid"  src="Images/wahab.jpg" alt="" style="height:150px;width:150px;border-radius:50%  ">
    <h5>
      ABDUL WAHAB
    </h5>
    <p>
        Content Writer
    </p>
  </div>
  
  <div class="col-md-4 text-center">
    <img class="img-fluid" src="Images/ahmed.jpg" alt="" style="height:150px;width:150px;border-radius:50% ">
    <h5>
      Sheikh Ahmed Tanveer
    </h5>
    <p>
      App Developer
    </p>

  </div>
  <div class="col-md-4 text-center">
      <img class="img-fluid" src="Images/hamza zahid.jpg" alt="" style="height:150px;width:150px;border-radius:50% ">
      <h5>
        Hamza Zahid
      </h5>
      <p>
        Data Analyst
      </p>
  
    </div>
    <div class="col-md-4 text-center">
        <img class="img-fluid" src="Images/mahnoor 2.jpg" alt="" style="height:150px;width:150px;border-radius:50% ">
        <h5>
          Mahnoor Khan
        </h5>
        <p>
          Graphic Designer
        </p>
    
      </div>
</div>
</section>
<?php
include('footer.php');
?>
  
  </body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="Bootstrap/JS/jquery-3.3.1.slim.min.js"></script>
    <script src="Bootstrap/JS/popper.min.js"></script>
    <script src="Bootstrap/JS/bootstrap.min.js"></script>
    <script src="js/jquery-3.4.1.js"></script>
    <script>
      $('.carousel').carousel({
    interval:4000
  })</script>

</html>