<!DOCTYPE html>
<html>

<head>
    <title>Marriage License Search</title>
    <base href="http://www.salineclerk.com">
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
                    <h1>Saline Marriage License Search</h1>
                    <br />
                    <form action="http://marriage.cisarkansas.com/index.asp?C=Saline" method="post" name="form1" id="form1" role="form">
                      <div class="form-group">
                        <label for="FName">Spouse First Name</label>
                        <input name="FName" type="text" class="form-control" id="FName" >
                      </div>
                      <div class="form-group">
                        <label for="LName">Spouse Last Name</label>
                        <input name="LName" type="text" class="form-control" id="LName" >
                      </div>
                      <div class="form-group">
                        <label for="MDate">Marriage Date</label>
                        <input name="MDate" type="text" class="form-control datepicker" id="MDate" value="">
                      </div>
                      <button type="submit" class="btn btn-primary">Search</button>
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
    <?php
    echo file_get_html('partials/footer.html');
    ?>
</body>

</html>
