<!DOCTYPE html>
<html>

<head>
    <title>Election Day Voting</title>
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
                    <h1>Election Day Voting</h1>
                    <br />
                    <div class="list-group">
                      <h4 class="list-group-item active">Past Voting Locations</h4>
                      <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/EDay/Election%20Day%20Voting%20-%20Benton%20Special%20School%20Election.pdf" target="_blank" class="list-group-item">
                          Benton School Special Election - May 9, 2017
                      </a>
                      <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/EDay/Election%20Day%20Voting%20-%20Bryant%20School%20Special%20Election.pdf" target="_blank" class="list-group-item">
                          Bryant School Special Election - March 14, 2017
                      </a>
                      <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/EDay/2016%20General%20Election%20-%20Precincts%20and%20Polling%20Places.pdf" target="_blank" class="list-group-item">
                          2016 General Election
                      </a>
                      <a href="https://docs.google.com/spreadsheets/d/1RJEuRQYaGdIAzL1OHl673TN__n7xlgIcHQ_RReB7xQk/pub?gid=641013910&single=true&output=pdf" target="_blank" class="list-group-item">
                          City of Bryant Special Election - August 9, 2016
                      </a>
                      <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/2016%20Precincts%20and%20Polling%20Places.pdf" target="_blank" class="list-group-item">
                          2016 Preferential Primary and Nonpartisan General Election
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
    <?php
    echo file_get_html('partials/footer.html');
    ?>
</body>

</html>
