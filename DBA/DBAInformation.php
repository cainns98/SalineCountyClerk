<!DOCTYPE html>
<html>

<head>
    <title>DBA Information</title>
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
                    <h1>DBA Information</h1>
                    <br />
                    <div class="panel panel-primary">
                      <div class="panel-heading">
                          <h3 class="panel-title">DOING BUSINESS UNDER ASSUMED NAME (DBA) CERTIFICATES</h3>
                      </div>
                      <div class="panel-body">
                          Arkansas law require that no person shall conduct or transact business in this state under an assumed name or under any designated name or style, corporate or otherwise, other than the real name of the individual conducting or transacting such business, unless the person files a certificate in the office of the County Clerk.
                          <hr> DBA certificates are filed and recorded in the office of the County Clerk.  A person or persons desiring to file a DBA is required to complete the certificate form and sign it before a notary public.
                          <hr> The filing fee is $25.
                          <br> <span style="font-style: italic;">We accept cash, local checks, or credit/debit cards with a $3 processing fee.</span>
                      </div>
                    </div>
                    <div class="list-group">
                      <h4 class="list-group-item active">Links and Information</h4>
                      <a href="http://www.sos.arkansas.gov/BCS/Pages/default.aspx" target="_blank" class="list-group-item">
                          Further information regarding doing business in the State of Arkansas.
                      </a>
                      <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/DBA/DBA%20Info.pdf" target="_blank" class="list-group-item">
                          Doing Business Under Assumed Name (DBA) Information Sheet
                      </a>
                      <a href="https://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/DBA/DBA%20Certificate.pdf" target="_blank" class="list-group-item">
                          Doing Business Under Assumed Name (DBA) Certificate
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
