<!DOCTYPE html>
<html>

<head>
    <title>Probate Case Information</title>
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
                    <h1>Probate Case Information</h1>
                    <br>
                    <div class="row">
                      <div class="col-md-5">
                         <div class="panel panel-primary text-center">
                            <div class="panel-heading">
                                <h3 class="panel-title">Basic Information</h3>
                            </div>
                            <div class="panel-body">
                                Hours of issuance: 8:00 – 4:30 
                                <br> <span style="font-style: italic;">(please be here by 4:15 p.m.)</span>
                                <hr> Address:
                                <br> Saline County Clerk's Office <br> 215 North Main Street, Suite 9 <br> Benton, AR 72015 <br>
                                <hr> Phone: <a href="tel:+1-501-303-5630">501-303-5630</a>
                                <hr> The cost is 165.00 
                                <br><br> <span style="font-style: italic;">We accept cash, local checks, or credit/debit cards with a $3 processing fee.</span>
                            </div>
                          </div>
                      </div>
                        <div class="col-md-7">
                            <div class="container-fluid" style="padding: 0px;">
                                <div class="panel panel-info text-center">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Remember</h3>
                                    </div>
                                    <div class="panel-body">
                                        You must have the $165.00 ready to pay when the case is opened.
                                        <hr> When opening a probate case you are required to have a cover sheet. Please have the cover sheet filled out before arrival. If you do not have one, we can provide you with one.
                                        <hr> We cannot give any legal advice whatsoever. If you are wanting legal advice, we have a free legal advice phone number available for you to contact. 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 
                    <div class="list-group">
                      <h4 class="list-group-item active">Links and Resources</h4>
                      <a href="https://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Marriage/Marriage%20License%20Info.pdf" target="_blank" class="list-group-item">
                          License Information Sheet
                      </a>
                      <a href="http://marriage.cisarkansas.com/?C=Saline" target="_blank" class="list-group-item">
                          Arkansas Marriage License Search
                      </a>
                    </div>
                    -->
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
