<!DOCTYPE html>
<html>

<head>
    <title>Election Notices</title>
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
                    <h1>Election Notices</h1>
                    <br />
                    <div class="list-group">
                      <h4 class="list-group-item active">Upcoming Elections</h4>
                      <p class="list-group-item italic">There are Currently no Upcoming Elections</p>
                    </div>
                    <div class="list-group">
                      <h4 class="list-group-item active">Past Elections</h4>
                      <a href="https://elecprep.net/wp-content/downloads/AR/Saline/Notices/Notice_2017_BNSE.pdf" target="_blank" class="list-group-item">
                          Notice of Benton School Special Election – May 9, 2017
                      </a>
                      <a href="https://elecprep.net/wp-content/downloads/AR/Saline/Notices/Early_Voting_Benton_Special_School_Election.pdf" target="_blank" class="list-group-item">
                          Early Voting – Benton School Special Election – May 9, 2017
                      </a>
                      <a href="https://elecprep.net/wp-content/downloads/AR/Saline/Notices/Election_Day_Voting_Benton_Special_School_Election.pdf" target="_blank" class="list-group-item">
                          Election Day Voting – Benton School Special Election – May 9, 2017
                      </a>
                      <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Notices/Notice_2017_BRSE.pdf" target="_blank" class="list-group-item">
                          Bryant School Special Election – March 14, 2017
                      </a>
                      <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Notices/Notice_2016_GRO.pdf" target="_blank" class="list-group-item">
                          2016 General Election Runoff – November 29, 2016
                      </a>
                      <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Notices/Notice_2016_Gen.pdf" target="_blank" class="list-group-item">
                          2016 General Election – November 8, 2016
                      </a>
                    </div>
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
