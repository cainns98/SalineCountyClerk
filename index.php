<!DOCTYPE html>
<html>

<head>
    <title>Saline County Clerk</title>
    <base href="http://www.salineclerk.com">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="js/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    
    <?php 
    require 'simple_html_dom.php';
    echo file_get_html('partials/favicons.html');
    ?>
</head>

<body>
    <?php 
    echo file_get_html('partials/nav.html');
    ?>
    <div class="container">
        <div id="mainCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#mainCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#mainCarousel" data-slide-to="1"></li>
              <li data-target="#mainCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active"><!-- Courthouse -->
                <img src="img/Courthouse_optimized.jpg" alt="Courthouse" style="width:100%;">
              </div>

              <div class="item"><!-- VOTE HERE -->
                <img src="img/VoteHere_optimized.jpg" alt="Vote Here Building" style="width:100%;">
              </div>

              <div class="item"><!-- Ballot Boxes -->
                <img src="img/BallotBoxes_optimized.jpg" alt="Ballot Boxes" style="width:100%;">
              </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#mainCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#mainCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="jumbotron">
            <h1>Doug Curtis</h1>
            <h2 style="margin-top: 11px;">Saline County Clerk</h2>
            <p>The County Clerk is the official bookkeeper of county government and serves as the clerk for the county court, quorum court and probate court. The Clerk serves as the secretary of the Board of Equalization and Intergovernmental Council Board.</p>
            <p><a href="CountyClerk.php" class="btn btn-primary btn-lg">Learn more</a></p>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="panel panel-primary text-center">
                    <div class="panel-heading">
                        <h3 class="panel-title">Doug Curtis | County Clerk</h3>
                    </div>
                    <div class="panel-body">
                        <a href="mailto:Doug.Curtis@salinecounty.org">Doug.Curtis@salinecounty.org</a>
                        <hr /> Address:
                        <br /> Saline County Clerk <br /> 215 North Main Street <br /> Benton, AR 72015 <br />
                        <hr /> Phone: <a href="tel:+1-501-303-5630">501-303-5630</a> <br /> Fax: 501-776-2412
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-primary text-center">
                    <div class="panel-heading">
                        <h3 class="panel-title">Hours and Information</h3>
                    </div>
                    <div class="panel-body">
                        8:00 AM - 4:30 PM <br /> Monday - Friday
                        <hr /> Address:
                        <br /> Saline County Clerk <br /> 215 North Main Street <br /> Benton, AR 72015 <br />
                        <hr /> Phone: <a href="tel:+1-501-303-5630">501-303-5630</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-primary text-center">
                    <?php
                    echo file_get_html('partials/newsAndInfo.html');
                    ?>
                </div>
            </div>
        </div>

    </div>
    <footer class="footer">
        <div class="container text-center">
            <a href="https://www.facebook.com/DougCurtisAR/"     style="margin-right: 25px;"><i class="fa fa-facebook"></i></a>
            
            <a href="https://twitter.com/DougCurtisAR"><i class="fa fa-twitter"></i></a>
        </div>

    </footer>
</body>

</html>
