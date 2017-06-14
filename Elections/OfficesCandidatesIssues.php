<!DOCTYPE html>
<html>

<head>
    <title>Offices, Candidates, & Issues</title>
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
                    <h1>Offices, Candidates, and Issues</h1>
                    <br />
                    <ul class="nav nav-tabs">
                      <li class="active"><a href="#electedOfficials" data-toggle="tab" aria-expanded="true">Elected Officials</a></li>
                      <li class=""><a href="#officesOnBallot" data-toggle="tab" aria-expanded="false">Offices on Ballot</a></li>
                      <li class=""><a href="#candidates" data-toggle="tab" aria-expanded="false">Candidates</a></li>
                      <li class=""><a href="#ballotIssues" data-toggle="tab" aria-expanded="false">Ballot Issues</a></li>
                      <li class=""><a href="#searchCriteria" data-toggle="tab" aria-expanded="false">Search Criteria</a></li>
                      
                    </ul>
                    <div id="myTabContent" class="tab-content">
                      <div class="tab-pane fade active in" id="electedOfficials">
                        <br />
                        <div class="list-group">
                          <h4 class="list-group-item active">Benton School Special Election - May 9, 2017</h4>
                          <a href="https://elecprep.net/wp-content/downloads/AR/Saline/Results/AR62_20170509_BNSE_S.HTM" target="_blank" class="list-group-item">
                              Summary Report
                          </a>
                          <a href="https://elecprep.net/wp-content/downloads/AR/Saline/Results/AR62_20170509_BNSE_P.HTM" target="_blank" class="list-group-item">
                              Precinct Report
                          </a>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="officesOnBallot">
                        <br />
                        <div class="list-group">
                          <h4 class="list-group-item active">General Election Runoff – November 29, 2016</h4>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20161129_GR16_S.HTM" target="_blank" class="list-group-item">
                              Summary Report
                          </a>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20161129_GR16_P.HTM" target="_blank" class="list-group-item">
                              Precinct Report
                          </a>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="candidates">
                        <br />
                        <div class="list-group">
                          <h4 class="list-group-item active">Annual School Election – September 15, 2015</h4>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20150915_ASE_S.HTM" target="_blank" class="list-group-item">
                              Summary Report
                          </a>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20150915_ASE_P.HTM" target="_blank" class="list-group-item">
                              Precinct Report
                          </a>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="ballotIssues">
                        <br />
                        <div class="list-group">
                          <h4 class="list-group-item active">General Runoff Election – November 25, 2014</h4>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20141125_GRO_S.HTM" target="_blank" class="list-group-item">
                              Summary Report
                          </a>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20141125_GRO_P.HTM" target="_blank" class="list-group-item">
                              Precinct Report
                          </a>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="searchCriteria">
                        <br />
                        <div class="list-group">
                          <h4 class="list-group-item active">Special Election – Benton & Bryant – November 12, 2013</h4>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20131112_SPEC_S.HTM" target="_blank" class="list-group-item">
                              Summary Report
                          </a>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20131112_SPEC_P.HTM" target="_blank" class="list-group-item">
                              Precinct Report
                          </a>
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
</body>

</html>
