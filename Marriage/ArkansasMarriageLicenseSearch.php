<!DOCTYPE html>
<html>

<head>
    <title>Are You Registered?</title>
    <base href="http://salinecountyclerk.azurewebsites.net">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="js/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <?php
    chdir('../');
    require 'simple_html_dom.php';
    echo file_get_html('partials/favicons.html');
    ?>
</head>

<body>
    <?php
    echo file_get_html('partials/nav.html');
    ?>
    <div class="container">
        <div class="row">
            <!-- MAIN -->
            <div class="col-md-9">
                <div class="container-fluid">
                    <h1>Are You Registered?</h1>
                    <br />
                    <form action="http://marriage.cisarkansas.com/index.asp?C=Saline" method="post" name="form1" id="form1" role="form">
                      <div class="form-group">
                        <label for="FName">Spouse First Name</label>
                        <input name="FName" type="text" class="form-control" id="FName" placeholder="Spouse First Name">
                      </div>
                      <div class="form-group">
                        <label for="LName">Spouse Last Name</label>
                        <input name="LName" type="text" class="form-control" id="LName" placeholder="Spouse Last Name">
                      </div>
                      <div class="form-group">
                        <label for="MDate">Marriage Date</label>
                        <input name="MDate" type="text" class="form-control datepicker" id="MDate" placeholder="Marriage Date" value="">
                      </div>
                      <button type="submit" class="btn btn-default">SEARCH</button>
                      <input type="hidden" id="MM_query" name="MM_query" value="form1">
                    </form>
                    <br />
                </div>
            </div>
            <!-- Side Bar -->
            <div class="col-md-3">
                <div class="container-fluid">
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
                    <div class="panel panel-primary text-center">
                        <?php
                        echo file_get_html('partials/newsAndInfo.html');
                        ?>
                    </div>
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
