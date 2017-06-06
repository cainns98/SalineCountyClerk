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
                      <li class=""><a href="#2014" data-toggle="tab" aria-expanded="false">2014</a></li>
                      <li class=""><a href="#2013" data-toggle="tab" aria-expanded="false">2013</a></li>
                      <li class=""><a href="#2012" data-toggle="tab" aria-expanded="false">2012</a></li>
                      <li class=""><a href="#2011" data-toggle="tab" aria-expanded="false">2011</a></li>
                      <li class=""><a href="#2010" data-toggle="tab" aria-expanded="false">2010</a></li>
                      <li class=""><a href="#2009" data-toggle="tab" aria-expanded="false">2009</a></li>
                      <li class=""><a href="#2008" data-toggle="tab" aria-expanded="false">2008</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                      <div class="tab-pane fade active in" id="2017">
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
                      </div>
                      <div class="tab-pane fade" id="2016">
                        <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit.</p>
                      </div>
                      <div class="tab-pane fade" id="2015">
                        <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork.</p>
                      </div>
                      <div class="tab-pane fade" id="2014">
                        <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater.</p>
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
