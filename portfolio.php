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
    <title>Portfolio</title>
  </head>
  <style>
.btn-custom{
  background: #2193b0;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #6dd5ed, #2193b0);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #6dd5ed, #2193b0); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
;
    color:white;
    font-size: 15px;
    font-weight:600;
  width:200px;

}
.btn-custom:focus,.btn-custom:hover,.btn-custom:active,.btn-custom:active:focus{
    background-color: #0b2b49;
    border-color: #082346;
    color: white;

}
.btn-custom:focus{
    box-shadow: 0 0 0 0.2rem rgba(16, 32, 82, 0.25);

}
  </style>

  <!--xs<576, 576<sm<768, 768<md<992, 992<lg<1200, 1200<xl-->
  <body>
    <!--header-->
    <?php
include('header.php');
?>
    <section class="breadcrumb-section">
            <div class="container-fluid p-1 p-sm-3">
              <div class="row">
                <div class="col-12">
                  <h2>Portfolio</h2>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item active">
                              <a href="portfolio.html">Portfolio</a>
                            </li>
                  </ol>
                </div>
              </div>
            </div>
    </section>

    <section class="text-section">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <p>
                      Here is some of our work which we have done till now
                  </p>
                  
                </div>
              </div>
              <hr/>
            </div>
    </section>
    <section class="porfolio-section">
            <div class="container">
              <div class="row">
                <div class=" col-12 text-center">
                    <h3>Our Work</h3>
                </div>
              </div>
              <div class=" container mt-3">
                <div class=" row">
                  <div class="col-12">
                    <button id="btn1" style="color: white;" class="btn btn-custom rounded-pill">All</button> 
              <button id="btn2" style="color: white;" class="btn btn-custom rounded-pill ml-3 ">Web Development</button> 
              <button id="btn3" style="color: white;" class="btn btn-custom rounded-pill ml-3">Graphic Desingning</button> 
                  </div>
                </div>
              </div> 
                
              <div class="row" id="gd">
                  <div class=" col-md-4 text-center">
                      <img src="Images/portfolio1.jpg" alt="" class=" img-fluid p-2 p-sm-3" style="height:300px">
                      <h5>Banner</h5>
                      <p>
                          <i>A banner for a private Hajj&Umrah Company
                          </i>
                          </p>

                  </div>
                  <div class=" col-md-4 text-center">
                        <img src="Images/portfolio2.jpg" alt="" class=" img-fluid p-2 p-sm-3" style="height:300px">
                        <h5>Banner</h5>
                        <p>
                            <i>A banner for a private Hajj&Umrah Company
                            </i>
                            </p>
  
                </div>
                <div class=" col-md-4 text-center">
                    <img src="Images/letterhead.jpg" alt="" class=" img-fluid p-2 p-sm-3" style="height:300px">
                    <h5>Letter Head</h5>
                    <p>
                        <i>A letterhead for a private company
                        </i>
                        </p>

            </div>
        
              </div>
              <div class="row" id="gd2">
                  <div class=" col-md-4 text-center">
                      <img src="Images/T-shirt 11 Ma'am Rabiya-1.jpg" alt="" class=" img-fluid p-2 p-sm-3" style="height:300px">
                      <h5>Design</h5>
                      <p>
                          <i>A T-shirt design
                          </i>
                          </p>

                  </div>
                  <div class=" col-md-4 text-center">
                        <img src="Images/T-shirt 12 Ma'am Rabiya.jpg" alt="" class=" img-fluid p-2 p-sm-3" style="height:300px">
                        <h5>Design</h5>
                        <p>
                            <i>A T-shirt design
                            </i>
                            </p>
  
                </div>
                <div class=" col-md-4 text-center">
                    <img src="Images/T-shirt 4 Ma'am Rabiya.jpg" alt="" class=" img-fluid p-2 p-sm-3" style="height:300px">
                    <h5>Design</h5>
                    <p>
                        <i> A T-shirt design
                        </i>
                        </p>

            </div>
        
              </div>
                    <div class="row" id="web">
                            <div class=" col-md-4 text-center">
                                    <img src="Images/Capture.PNG" alt="" class=" img-fluid p-2 p-sm-3" style="height:300px;">
                                    <h5>CV Registration Form </h5>
                                    <p>
                                        <i>A testing CV Registration Form With MySQl Connection PHP
                                        </i>
                                        </p>
                                </div>
                            <div class=" col-md-4 text-center">
                                    <img src="Images/Capture22.JPG" alt="" class=" img-fluid p-2 p-sm-3" style="height:300px;">
                                    <h5>Hotel Management System</h5>
                        <p>
                            <i>Hotel Management System In ASP.net With SQL Database Connection
                            </i>
                            </p>
                            </div>
                            <div class=" col-md-4 text-center">
                                <img src="Images/webchat.JPG" alt="" class=" img-fluid p-2 p-sm-3" style="height:300px;">
                                <h5>Web Chat</h5>
                    <p>
                        <i>  A webchat application using AJAX&PHP
                        </i>
                        </p>
                        </div>
                        </div>
                        <div class="row" id="web2">
                            <div class=" col-md-6 text-center">
                                    <img src="Images/gpacal.jpg" alt="" class=" img-fluid p-2 p-sm-3" style="height:300px;">
                                    <h5>GPA calculator</h5>
                                    <p>
                                        <i>A GPA calculator in Android Studio
                                        </i>
                                        </p>
                                </div>
                            <div class=" col-md-6 text-center">
                                    <img src="Images/autosearch.JPG" alt="" class=" img-fluid p-2 p-sm-3" style="height:300px;">
                                    <h5>Auto Search</h5>
                        <p>
                            <i>A Autosearch application using AJAX&PHP
                            </i>
                            </p>
                          </div>
                        </div>
            </div>
    </section>
    
    

    <!--footer-->
    <?php
include('footer.php');
?>
  <script src="js/jquery-3.4.1.js"></script>
<script>
    $(document).ready(function(){
      $("#btn1").click(function(){
        $("#web").show();
        $("#gd").show();
      });
      $("#btn2").click(function(){
$("#gd").hide();
$("#gd2").hide();
$("#web").show();
$("#web2").show();
      });
      $("#btn3").click(function(){
$("#gd").show();
$("#gd2").show();
$("#web").hide();
$("#web2").hide();
      });
      
    });
   
</script>

  </body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="Bootstrap/JS/jquery-3.3.1.slim.min.js"></script>
    <script src="Bootstrap/JS/popper.min.js"></script>
    <script src="Bootstrap/JS/bootstrap.min.js"></script>
</html>