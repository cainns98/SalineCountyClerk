<!DOCTYPE html>
<html>

<head>
    <title>Early Voting</title>
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
                    <h1>Early Voting</h1>
                    <br />
                    <div class="list-group">
                      <h4 class="list-group-item active">Benton School Special Election - May 9, 2017</h4>
                      <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/EV/Early%20Voting%20-%20Benton%20Special%20School%20Election.pdf" target="_blank" class="list-group-item">
                          Location, Dates and Times
                      </a>
                      <a href="https://docs.google.com/spreadsheets/d/1LI1m4GZbxpOSYADHZPEaBj1NkldW36xU8hRGQrZz0VE/pub?gid=703524298&single=true&output=pdf" target="_blank" class="list-group-item">
                          Early Voting Turnout
                      </a>
                    </div>
                    <div class="list-group">
                      <h4 class="list-group-item active">Bryant School Special Election - March 14, 2017</h4>
                      <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/EV/Early%20Voting-Bryant%20School%20Special.pdf" target="_blank" class="list-group-item">
                          Location, Dates and Times
                      </a>
                      <a href="https://docs.google.com/spreadsheets/d/1e8S1BmI9yZbWkn7Jk70oxDMcm9PXDyM3D3Y5eXNt8Fc/pub?gid=703524298&single=true&output=pdf" target="_blank" class="list-group-item">
                          Early Voting Turnout
                      </a>
                    </div>
                    <div class="list-group">
                      <h4 class="list-group-item active">General Election Runoff - November 29, 2016</h4>
                      <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Notices/Notice_2016_GRO.pdf" target="_blank" class="list-group-item">
                          Location, Dates and Times
                      </a>
                      <a href="https://docs.google.com/spreadsheets/d/e/2PACX-1vQoj1Hm1vKaExHZB5zM4GpnqfAiU4PZiVDXeNWCMWAFFkBQYgQTQ1WY5i6E5PS2OPGjmjO-gnDhyy5n/pub?output=pdf" target="_blank" class="list-group-item">
                          Early Voting Turnout
                      </a>
                    </div>
                    <div class="list-group">
                      <h4 class="list-group-item active">General Election - November 8, 2016</h4>
                      <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/EV/Early%20Voting-General.pdf" target="_blank" class="list-group-item">
                          Location, Dates and Times
                      </a>
                      <a href="https://docs.google.com/spreadsheets/d/1RsxkjRuy73ehH8AHwZfbZ0a60OWgAChRC5-mEUm_ui0/pub?output=pdf" target="_blank" class="list-group-item">
                          Early Voting Turnout
                      </a>
                    </div>
                    <div class="list-group">
                      <h4 class="list-group-item active">Annual School Election - September 20, 2016</h4>
                      <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/EV/Early%20Voting%20-%202016%20ASE.pdf" target="_blank" class="list-group-item">
                          Location, Dates and Times
                      </a>
                      <a href="https://docs.google.com/spreadsheets/d/1Jku5lI5u0an5dZQYBidrsdGdedMkz__GE3nYo69JkPU/pub?gid=703524298&single=true&output=pdf" target="_blank" class="list-group-item">
                          Early Voting Turnout
                      </a>
                    </div>
                    <div class="list-group">
                      <h4 class="list-group-item active">City of Bryant Special Election - August 9, 2016</h4>
                      <a href="https://docs.google.com/spreadsheets/d/1w7GxquwkncDnccbzCFSQjh7Lc4hXLh26C9seoIDALT8/pub?gid=1851817643&single=true&output=pdf" target="_blank" class="list-group-item">
                          Location, Dates and Times
                      </a>
                      <a href="https://docs.google.com/spreadsheets/d/1Efyp4-KFW9uIdL9VpPLijP9HWcx81uyeLhjweJq69JU/" target="_blank" class="list-group-item">
                          Early Voting Turnout
                      </a>
                    </div>
                    <div class="list-group">
                      <h4 class="list-group-item active">2016 Preferential Primary & Nonpartisan General Election</h4>
                      <a href="https://docs.google.com/spreadsheets/d/1w7GxquwkncDnccbzCFSQjh7Lc4hXLh26C9seoIDALT8/pub?gid=1576196796&single=true&output=pdf" target="_blank" class="list-group-item">
                          Location, Dates and Times
                      </a>
                      <a href="https://docs.google.com/spreadsheets/d/1yMxAiehrhK_8Pm3RAhotsQaGQLO8AskZ75TZFrSvmKo/pub?gid=703524298&single=true&output=pdf" target="_blank" class="list-group-item">
                          Early Voting Turnout
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
