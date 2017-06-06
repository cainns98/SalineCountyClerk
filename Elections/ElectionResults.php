<!DOCTYPE html>
<html>

<head>
    <title>Election Results</title>
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
                    <h1>Election Results</h1>
                    <br />
                    <ul class="nav nav-tabs">
                      <li class="active"><a href="#2017" data-toggle="tab" aria-expanded="true">2017</a></li>
                      <li class=""><a href="#2016" data-toggle="tab" aria-expanded="false">2016</a></li>
                      <li class=""><a href="#2015" data-toggle="tab" aria-expanded="false">2015</a></li>
                      <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                          Older <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                          <li class=""><a href="#2014" data-toggle="tab" aria-expanded="false">2014</a></li>
                          <li class=""><a href="#2013" data-toggle="tab" aria-expanded="false">2013</a></li>
                          <li class=""><a href="#2012" data-toggle="tab" aria-expanded="false">2012</a></li>
                          <li class=""><a href="#2011" data-toggle="tab" aria-expanded="false">2011</a></li>
                          <li class=""><a href="#2010" data-toggle="tab" aria-expanded="false">2010</a></li>
                          <li class=""><a href="#2009" data-toggle="tab" aria-expanded="false">2009</a></li>
                          <li class=""><a href="#2008" data-toggle="tab" aria-expanded="false">2008</a></li>
                        </ul>
                      </li>
                      
                    </ul>
                    <div id="myTabContent" class="tab-content">
                      <div class="tab-pane fade active in" id="2017">
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
                        <div class="list-group">
                          <h4 class="list-group-item active">Bryant School Special Election – March 14, 2017</h4>
                          <a href="https://elecprep.net/wp-content/downloads/AR/Saline/Results/AR62_20170314_BRSE_S.HTM" target="_blank" class="list-group-item">
                              Summary Report
                          </a>
                          <a href="https://elecprep.net/wp-content/downloads/AR/Saline/Results/AR62_20170314_BRSE_P.HTM" target="_blank" class="list-group-item">
                              Precinct Report
                          </a>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="2016">
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
                        <div class="list-group">
                          <h4 class="list-group-item active">General Election – November 8, 2016</h4>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20161108_G16_S.HTM" target="_blank" class="list-group-item">
                              Summary Report
                          </a>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20161108_G16_P.HTM" target="_blank" class="list-group-item">
                              Precinct Report
                          </a>
                        </div>
                        <div class="list-group">
                          <h4 class="list-group-item active">Annual School Election – September 20, 2016</h4>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20160920_ASE_S.HTM" target="_blank" class="list-group-item">
                              Summary Report
                          </a>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20160920_ASE_P.HTM" target="_blank" class="list-group-item">
                              Precinct Report
                          </a>
                        </div>
                        <div class="list-group">
                          <h4 class="list-group-item active">City of Bryant Special Election – August 9, 2016</h4>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20160809_BRYSP16_S.HTM" target="_blank" class="list-group-item">
                              Summary Report
                          </a>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20160809_BRYSP16_P.HTM" target="_blank" class="list-group-item">
                              Precinct Report
                          </a>
                        </div>
                        <div class="list-group">
                          <h4 class="list-group-item active">Preferential Primary and Nonpartisan General Election – March 1, 2016</h4>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20160301_PPNPG_S.HTM" target="_blank" class="list-group-item">
                              Summary Report
                          </a>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20160301_PPNPG_P.HTM" target="_blank" class="list-group-item">
                              Precinct Report
                          </a>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="2015">
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
                        <div class="list-group">
                          <h4 class="list-group-item active">Bryant School Special Election – March 10, 2015</h4>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20150310_SPECBRSD_S.HTM" target="_blank" class="list-group-item">
                              Summary Report
                          </a>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20150310_SPECBRSD_P.HTM" target="_blank" class="list-group-item">
                              Precinct Report
                          </a>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="2014">
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
                        <div class="list-group">
                          <h4 class="list-group-item active">General Election – November 4, 2014</h4>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20141104_GEN_S.HTM" target="_blank" class="list-group-item">
                              Summary Report
                          </a>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20141104_GEN_P.HTM" target="_blank" class="list-group-item">
                              Precinct Report
                          </a>
                        </div>
                        <div class="list-group">
                          <h4 class="list-group-item active">Annual School Election – September 16, 2014</h4>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20140916_ASE_S.HTM" target="_blank" class="list-group-item">
                              Summary Report
                          </a>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20140916_ASE_P.HTM" target="_blank" class="list-group-item">
                              Precinct Report
                          </a>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="2013">
                        <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater.</p>
                      </div>
                      <div class="tab-pane fade" id="2012">
                        <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater.</p>
                      </div>
                      <div class="tab-pane fade" id="2011">
                        <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater.</p>
                      </div>
                      <div class="tab-pane fade" id="2010">
                        <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater.</p>
                      </div>
                      <div class="tab-pane fade" id="2009">
                        <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater.</p>
                      </div>
                      <div class="tab-pane fade" id="2008">
                        <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater.</p>
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
