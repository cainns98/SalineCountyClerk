<!DOCTYPE html>
<html>

<head>
    <title>Election Results</title>
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
                    <h1>Election Results</h1>
                    <br />
                    <ul class="nav nav-tabs">
                      <li class=""><a href="#2018" data-toggle="tab" aria-expanded="false">2018</a></li>
                      <li class="active"><a href="#2017" data-toggle="tab" aria-expanded="true">2017</a></li>
                      <li class=""><a href="#2016" data-toggle="tab" aria-expanded="false">2016</a></li>
                      <li class="hidden-xs"><a href="#2015" data-toggle="tab" aria-expanded="false">2015</a></li>
                      <li class="hidden-xs"><a href="#2014" data-toggle="tab" aria-expanded="false">2014</a></li>
                      <li class="hidden-xs"><a href="#2013" data-toggle="tab" aria-expanded="false">2013</a></li>
                      <li class="hidden-xs"><a href="#2012" data-toggle="tab" aria-expanded="false">2012</a></li>
                      <li class="hidden-xs"><a href="#2011" data-toggle="tab" aria-expanded="false">2011</a></li>
                      <li class="hidden-xs"><a href="#2010" data-toggle="tab" aria-expanded="false">2010</a></li>
                      <li class="visible-lg-block"><a href="#2009" data-toggle="tab" aria-expanded="false">2009</a></li>
                      <li class="visible-lg-block"><a href="#2008" data-toggle="tab" aria-expanded="false">2008</a></li>
                      <li class="dropdown hidden-lg">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                          Older <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">                          
                          <li class="hidden-lg hidden-md hidden-sm"><a href="#2015" data-toggle="tab" aria-expanded="false">2015</a></li>
                          <li class="hidden-lg hidden-md hidden-sm"><a href="#2014" data-toggle="tab" aria-expanded="false">2014</a></li>
                          <li class="hidden-lg hidden-md hidden-sm"><a href="#2013" data-toggle="tab" aria-expanded="false">2013</a></li>
                          <li class="hidden-lg hidden-md hidden-sm"><a href="#2012" data-toggle="tab" aria-expanded="false">2012</a></li>
                          <li class="hidden-lg hidden-md hidden-sm"><a href="#2011" data-toggle="tab" aria-expanded="false">2011</a></li>
                          <li class="hidden-lg hidden-md hidden-sm"><a href="#2010" data-toggle="tab" aria-expanded="false">2010</a></li>
                          <li class=""><a href="#2009" data-toggle="tab" aria-expanded="false">2009</a></li>
                          <li class=""><a href="#2008" data-toggle="tab" aria-expanded="false">2008</a></li>
                        </ul>
                      </li>
                      
                    </ul>
                    <div id="myTabContent" class="tab-content">
                      <div class="tab-pane fade active in" id="2018">
                        <br />
                        <div class="alert alert-warning">
                          <h4 style="margin: 0px">There have been no elections during 2018 thus far.</h4>
                        </div>
                      </div>
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
                        <div class="list-group">
                          <h4 class="list-group-item active">General Primary – Republican Party – June 10, 2014</h4>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20140610_PRO_S.HTM" target="_blank" class="list-group-item">
                              Summary Report
                          </a>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20140610_PRO_P.HTM" target="_blank" class="list-group-item">
                              Precinct Report
                          </a>
                        </div>
                        <div class="list-group">
                          <h4 class="list-group-item active">Preferential Primary and Nonpartisan General Election – May 20, 2014</h4>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20140520_PPNPG_S.HTM" target="_blank" class="list-group-item">
                              Summary Report
                          </a>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20140520_PPNPG_P.HTM" target="_blank" class="list-group-item">
                              Precinct Report
                          </a>
                        </div>
                        <div class="list-group">
                          <h4 class="list-group-item active">Bryant School Special Election – February 11, 2014</h4>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20140211_SPECBRSD_S.HTM" target="_blank" class="list-group-item">
                              Summary Report
                          </a>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20140211_SPECBRSD_P.HTM" target="_blank" class="list-group-item">
                              Precinct Report
                          </a>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="2013">
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
                        <div class="list-group">
                          <h4 class="list-group-item active">Annual School Election – September 17, 2013</h4>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20130917_ASE_S.HTM" target="_blank" class="list-group-item">
                              Summary Report
                          </a>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20130917_ASE_P.HTM" target="_blank" class="list-group-item">
                              Precinct Report
                          </a>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="2012">
                        <br />
                        <div class="list-group">
                          <h4 class="list-group-item active">General Runoff Election – November 27, 2012</h4>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20121127_GRO_S.HTM" target="_blank" class="list-group-item">
                              Summary Report
                          </a>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20121127_GRO_P.HTM" target="_blank" class="list-group-item">
                              Precinct Report
                          </a>
                        </div>
                        <div class="list-group">
                          <h4 class="list-group-item active">General Election – November 6, 2012</h4>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20121106_GEN_S.HTM" target="_blank" class="list-group-item">
                              Summary Report
                          </a>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20121106_GEN_P.HTM" target="_blank" class="list-group-item">
                              Precinct Report
                          </a>
                        </div>
                        <div class="list-group">
                          <h4 class="list-group-item active">Annual School Election – September 18, 2012</h4>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20120918_ASE_S.HTM" target="_blank" class="list-group-item">
                              Summary Report
                          </a>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20120918_ASE_P.HTM" target="_blank" class="list-group-item">
                              Precinct Report
                          </a>
                        </div>
                        <div class="list-group">
                          <h4 class="list-group-item active">General Primary – Republican Party – June 12, 2012</h4>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20120612_PRO_S.HTM" target="_blank" class="list-group-item">
                              Summary Report
                          </a>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20120612_PRO_P.HTM" target="_blank" class="list-group-item">
                              Precinct Report
                          </a>
                        </div>
                        <div class="list-group">
                          <h4 class="list-group-item active">Preferential Primary and Nonpartisan General Election – May 22, 2012</h4>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20120522_PPNPG_S.HTM" target="_blank" class="list-group-item">
                              Summary Report
                          </a>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20120522_PPNPG_P.HTM" target="_blank" class="list-group-item">
                              Precinct Report
                          </a>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="2011">
                        <br />
                        <div class="list-group">
                          <h4 class="list-group-item active">Special Election – November 8, 2011</h4>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20111108_SPECCW_S.HTM" target="_blank" class="list-group-item">
                              Summary Report
                          </a>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20111108_SPECCW_P.HTM" target="_blank" class="list-group-item">
                              Precinct Report
                          </a>
                        </div>
                        <div class="list-group">
                          <h4 class="list-group-item active">School Election Runoff – October 11, 2011</h4>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20111011_SRO_S.HTM" target="_blank" class="list-group-item">
                              Summary Report
                          </a>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20111011_SRO_P.HTM" target="_blank" class="list-group-item">
                              Precinct Report
                          </a>
                        </div>
                        <div class="list-group">
                          <h4 class="list-group-item active">Annual School Election – September 20, 2011</h4>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20110920_ASE_S.HTM" target="_blank" class="list-group-item">
                              Summary Report
                          </a>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20110920_ASE_P.HTM" target="_blank" class="list-group-item">
                              Precinct Report
                          </a>
                        </div>
                        <div class="list-group">
                          <h4 class="list-group-item active">Harmony Grove Special School Election – February 8, 2011</h4>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20110208_SPECHGSD_S.HTM" target="_blank" class="list-group-item">
                              Summary Report
                          </a>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20110208_SPECHGSD_P.HTM" target="_blank" class="list-group-item">
                              Precinct Report
                          </a>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="2010">
                        <br />
                        <div class="list-group">
                          <h4 class="list-group-item active">General Runoff Election – November 23, 2010</h4>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20101123_GRO_S.HTM" target="_blank" class="list-group-item">
                              Summary Report
                          </a>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20101123_GRO_P.HTM" target="_blank" class="list-group-item">
                              Precinct Report
                          </a>
                        </div>
                        <div class="list-group">
                          <h4 class="list-group-item active">General Election – November 2, 2010</h4>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20101102_GEN_S.HTM" target="_blank" class="list-group-item">
                              Summary Report
                          </a>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20101102_GEN_P.HTM" target="_blank" class="list-group-item">
                              Precinct Report
                          </a>
                        </div>
                        <div class="list-group">
                          <h4 class="list-group-item active">School Election Runoff – October 12, 2010</h4>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20101012_SRO_S.HTM" target="_blank" class="list-group-item">
                              Summary Report
                          </a>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20101012_SRO_P.HTM" target="_blank" class="list-group-item">
                              Precinct Report
                          </a>
                        </div>
                        <div class="list-group">
                          <h4 class="list-group-item active">Annual School Election – September 21, 2010</h4>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20100921_ASE_S.HTM" target="_blank" class="list-group-item">
                              Summary Report
                          </a>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20100921_ASE_P.HTM" target="_blank" class="list-group-item">
                              Precinct Report
                          </a>
                        </div>
                        <div class="list-group">
                          <h4 class="list-group-item active">Special Fariplex Election – August 10, 2010</h4>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20100810_SPECFPLEX_S.HTM" target="_blank" class="list-group-item">
                              Summary Report
                          </a>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20100810_SPECFPLEX_P.HTM" target="_blank" class="list-group-item">
                              Precinct Report
                          </a>
                        </div>
                        <div class="list-group">
                          <h4 class="list-group-item active">Bauxite Special School Election – June 22, 2010</h4>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20100622_SPECBXSD_S.HTM" target="_blank" class="list-group-item">
                              Summary Report
                          </a>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20100622_SPECBXSD_P.HTM" target="_blank" class="list-group-item">
                              Precinct Report
                          </a>
                        </div>
                        <div class="list-group">
                          <h4 class="list-group-item active">General Primary – Democratic Party – June 8, 2010</h4>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20100608_PRO_S.HTM" target="_blank" class="list-group-item">
                              Summary Report
                          </a>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20100608_PRO_P.HTM" target="_blank" class="list-group-item">
                              Precinct Report
                          </a>
                        </div>
                        <div class="list-group">
                          <h4 class="list-group-item active">Preferential Primary and Nonpartisan General Election – May 18, 2010</h4>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20100518_PPNPG_S.HTM" target="_blank" class="list-group-item">
                              Summary Report
                          </a>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20100518_PPNPG_P.HTM" target="_blank" class="list-group-item">
                              Precinct Report
                          </a>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="2009">
                        <br />
                        <div class="list-group">
                          <h4 class="list-group-item active">City of Benton Special Election – November 10, 2009</h4>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20091110_SPECBN_S.HTM" target="_blank" class="list-group-item">
                              Summary Report
                          </a>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20091110_SPECBN_P.HTM" target="_blank" class="list-group-item">
                              Precinct Report
                          </a>
                        </div>
                        <div class="list-group">
                          <h4 class="list-group-item active">City of Shannon Hills Special Runoff Election – November 3, 2009</h4>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20091103_SPROSH_S.HTM" target="_blank" class="list-group-item">
                              Summary Report
                          </a>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20091103_SPROSH_P.HTM" target="_blank" class="list-group-item">
                              Precinct Report
                          </a>
                        </div>
                        <div class="list-group">
                          <h4 class="list-group-item active">City of Shannon Hills Special Election – October 13, 2009</h4>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20091013_SPECSH_S.HTM" target="_blank" class="list-group-item">
                              Summary Report
                          </a>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20091013_SPECSH_P.HTM" target="_blank" class="list-group-item">
                              Precinct Report
                          </a>
                        </div>
                        <div class="list-group">
                          <h4 class="list-group-item active">Annual School Election – September 15, 2009</h4>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20090915_ASE_S.HTM" target="_blank" class="list-group-item">
                              Summary Report
                          </a>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20090915_ASE_P.HTM" target="_blank" class="list-group-item">
                              Precinct Report
                          </a>
                        </div>
                        <div class="list-group">
                          <h4 class="list-group-item active">Bryant School Special Election – March 10, 2009</h4>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20090310_SPECBR_S.HTM" target="_blank" class="list-group-item">
                              Summary Report
                          </a>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20090310_SPECBR_P.HTM" target="_blank" class="list-group-item">
                              Precinct Report
                          </a>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="2008">
                        <br />
                        <div class="list-group">
                          <h4 class="list-group-item active">General Election Runoff – November 25, 2008</h4>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20081125_GRO_S.HTM" target="_blank" class="list-group-item">
                              Summary Report
                          </a>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20081125_GRO_P.HTM" target="_blank" class="list-group-item">
                              Precinct Report
                          </a>
                        </div>
                        <div class="list-group">
                          <h4 class="list-group-item active">General Election – November 4, 2008</h4>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20081104_GEN_S.HTM" target="_blank" class="list-group-item">
                              Summary Report
                          </a>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20081104_GEN_P.HTM" target="_blank" class="list-group-item">
                              Precinct Report
                          </a>
                        </div>
                        <div class="list-group">
                          <h4 class="list-group-item active">Annual School Election – September 16, 2008</h4>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20080916_ASE_S.HTM" target="_blank" class="list-group-item">
                              Summary Report
                          </a>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20080916_ASE_P.HTM" target="_blank" class="list-group-item">
                              Precinct Report
                          </a>
                        </div>
                        <div class="list-group">
                          <h4 class="list-group-item active">Preferential Primary and Nonpartisan General Election – May 20, 2008</h4>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20080520_PPRI_S.HTM" target="_blank" class="list-group-item">
                              Summary Report
                          </a>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20080520_PPRI_P.HTM" target="_blank" class="list-group-item">
                              Precinct Report
                          </a>
                        </div>
                        <div class="list-group">
                          <h4 class="list-group-item active">Benton Special School Election – March 11, 2008</h4>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20080311_BENSD_S.HTM" target="_blank" class="list-group-item">
                              Summary Report
                          </a>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20080311_BENSD_P.HTM" target="_blank" class="list-group-item">
                              Precinct Report
                          </a>
                        </div>
                        <div class="list-group">
                          <h4 class="list-group-item active">Harmony Grove Special School Election – March 11, 2008</h4>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20080311_HGSD_S.HTM" target="_blank" class="list-group-item">
                              Summary Report
                          </a>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20080311_HGSD_P.HTM" target="_blank" class="list-group-item">
                              Precinct Report
                          </a>
                        </div>
                        <div class="list-group">
                          <h4 class="list-group-item active">Presidential Preference Primary – February 5, 2008</h4>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20080205_PPP_S.HTM" target="_blank" class="list-group-item">
                              Summary Report
                          </a>
                          <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Results/AR62_20080205_PPP_P.HTM" target="_blank" class="list-group-item">
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
