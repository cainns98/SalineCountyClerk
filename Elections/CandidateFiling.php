<!DOCTYPE html>
<html>

<head>
    <title>Candidate Filing</title>
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
                    <h1>Canidate Filing</h1>
                    <br />
                    <div class="list-group">
                      <h4 class="list-group-item active">Filing Dates, Times, & Locations</h4>
                      <a href="https://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Cnds/CandidateFiling.pdf" target="_blank" class="list-group-item">2016 Partisan and Nonpartisan</a>
                      <a href="https://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Cnds/CandidateFiling-Municipal.pdf" target="_blank" class="list-group-item">2016 Independent Municipal</a>
                      <a href="https://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Cnds/CandidateFiling-School.pdf" target="_blank" class="list-group-item">2016 School Board</a>
                    </div>
                    <div class="list-group">
                        <h4 class="list-group-item active">Candidate Reporting Documents</h4>
                        <div class="list-group-item split-list-group-item" style="padding: 0px;">
                          <div class="container-fluid">
                            <div class="row">
                              <div class="col-sm-8 left" style="padding: 0px;">
                                <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/18_Statement_of_Financial_Interest_2015.pdf" class="list-group-item" style="border: 0px; border-radius: 0px;">Statement of Financial Interest</a>
                              </div>
                              <div class="col-sm-4" style="padding: 0px;">
                                <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/18-I_Statement_of_Financial_Interest_Instr_2015.pdf" class="list-group-item" style="border: 0px; border-radius: 0px;">Instructions</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="list-group-item split-list-group-item" style="padding: 0px;">
                          <div class="container-fluid">
                            <div class="row">
                              <div class="col-sm-8 left" style="padding: 0px;">
                                <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/04_CE_Cnty-Mun-SchlBd_Report_2015.pdf" class="list-group-item" style="border: 0px; border-radius: 0px;">Campaign Contribution and Expenditure Report</a>
                              </div>
                              <div class="col-sm-4" style="padding: 0px;">
                                <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/04-I_CE_Cnty-Mun-SchBd_Instr_2015.pdf" class="list-group-item" style="border: 0px; border-radius: 0px;">Instructions</a>
                              </div>
                            </div>
                          </div>
                        </div>
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
    <script type="text/javascript" src="js/bootstrap-toolkit.min.js"></script>
    <script type="text/javascript" src="js/dividedListGroup.js"></script>
</body>

</html>
