<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta name="description" content="arillo is responsive html real estate theme">
    <meta name="author" content="afriq yasin ramadhan">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Wedding Venues</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,600,800' rel='stylesheet' type='text/css'>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body id="top">
      <!-- begin:navbar -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-top">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="navbar-brand" href="index.html"><img src="img/logo.png"/></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-top">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="index.html">Home</a></li>
            <!--
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Property <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="search.html">Search (Grid View)</a></li>
                <li><a href="search_list.html">Search (List View)</a></li>
                <li><a href="category.html">Category (Grid View)</a></li>
                <li><a href="category_list.html">Category (List View)</a></li>
                <li><a href="single.html">Single page</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="blog.html">Blog Archive</a></li>
                <li><a href="blog_single.html">Blog Single</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
              </ul>
            </li> -->
            <li><a href="#modal-signin" class="signin" data-toggle="modal" data-target="#modal-signin">Sign in</a></li>
            <li><a href="#" class="signup" data-toggle="modal" data-target="#modal-signup">Sign up</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>
    <!-- end:navbar -->

    <!-- begin:header -->
    <div id="header" class="header-slide" style="height: 150px;">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="quick-search">
              <div class="row">
                <form role="form">
                  <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="form-group">
                      <label for="country">City</label>
                      <select class="form-control">
                        <option>Delhi</option>
                        <option>Kanpur</option>
                        <option>Gurgaon</option>
                        
                      </select>
                    </div>
                    
                  </div>
                  <!-- break -->
                  <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="form-group">
                      <label for="location">Location</label>
                      <select class="form-control">
                        <option>Saket</option>
                        <option>Sarita Vihar</option>
                        <option>Chadni Chowk</option>
                        <option>Green Park</option>
                        <option>Laxmi Nagar</option>
                      </select>
                    </div>
                    
                  </div>
                  <!-- break -->
                  
                  <!-- break -->
                  
                  <div class="col-md-12 col-sm-12"><input type="submit" name="submit" value="Search" class="btn btn-danger btn-lg btn-block"></div>

                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end:header -->
