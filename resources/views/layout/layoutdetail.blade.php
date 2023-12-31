<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/style.css">

    <link rel="stylesheet" type="text/css" href="./fontawesome/css/all.min.css">

    <title>Online Library - Books Title</title>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <a class="navbar-brand" href="#">
                    <img alt="Brand" src="./images/pro.png" width="150px">
                </a>
              </div>
          
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <li class="active"><a href="./index.html">Home</a></li>
                </ul>
                <form class="navbar-form navbar-left">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <div class="input-group-btn">
                      <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                    </div>
                  </div>
                  <!-- <button type="submit" class="btn btn-default"></button> -->
                </form>
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="./login.html">Login</a></li>
                  <li class="disabled"><a href="#">Signup</a></li>
                </ul>
              </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <!-- item cards -->
        <!-- first row of cards -->
        @section('content') <!--kenapa ii pake section karena bagian ini banyak berubah ubah-->
        <div class="row">
          <div class="col-sm-12 col-md-10 col-md-offset-1">
            <div class="thumbnail">
              <div class="row">
                <div class="col-sm-6 col-md-4">
                  <img src="https://covers.openlibrary.org/b/id/13316297-L.jpg" class="pt-10 pb-10 pl-10" width="250px">
                  <div class="text-center">
                    <a href="#" class="btn btn-default mt-10 mb-10" role="button">Borrow</a>
                    <!-- <a href="#" class="btn btn-default" role="button">Buy</a> -->
                  </div>
                </div>
                
                <div class="col-sm-6 col-md-8">
                  <h2><b>Books Title</b></h2>
                  <p><small>by</small> <a href="#" class="h-link">Humanoid</a></p>
                  <div class="pt-20">
                    <p>Publisher <a href="#" class="h-link">Penguin</a></p>
                    <p>Category <a href="#" class="h-link">Novel</a></p>
                    <p>Pages <b>650</b></p>
                    <p>Language <a href="#" class="h-link">English</a></p>
                    <p>Publish Date <a href="#" class="h-link">2020</a></p>
                    <p>Subjects <a href="#" class="h-link">Fantasy</a>, <a href="#" class="h-link">Fiction</a>, <a href="#" class="h-link">Good and Evil</a></p>
                    <p id="synopsis">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima quasi a quam quisquam temporibus, tenetur pariatur quod tempore reprehenderit debitis <span id="dots">...</span><span id="more">distinctio possimus voluptas sed. Error, quasi! Ex ipsam dignissimos ipsum? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos, in deserunt quasi nihil architecto hic nobis cumque necessitatibus excepturi a?</span></p>
                    <p class="h-link" id="read-btn" onclick="showCompleteText()">Read more</p>
                    <p>ISBN <b>109128982384</b></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @show
      <!-- footer -->
      <div class="panel panel-default">
        <div class="panel-footer">
          <div class="row">
            <div class="col-sm-12 col-md-4">
              <div class="text-center" id="center-content">
                <img src="./images/pro.png" alt="logo" width="150px">
              </div>
            </div>
            <div class="col-sm-12 col-md-4">
              <div class="text-center">
                <h4>Timedoor Academy Pro - Online Library</h4>
                <p>Copyright 2023 &copy; All Right Reserved</p>
              </div>
            </div>
            <div class="col-sm-12 col-md-4">
              <div class="row" id="center-content">
                <div class="col-sm-4 col-md-1">
                  <a href="#"><i class="fab fa-lg fa-facebook"></i></a>
                </div>
                <div class="col-sm-4 col-md-1">
                  <a href="#"><i class="fab fa-lg fa-instagram"></i></a>
                </div>
                <div class="col-sm-4 col-md-1">
                  <a href="#"><i class="fab fa-lg fa-twitter"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="js/script.js"></script>
</body>
</html>