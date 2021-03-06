<!DOCTYPE html>
<html>

<head>
    <title>Marriage License Information</title>
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
                    <h1>Marriage License Information</h1>
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
                                <hr> The cost is 60.00 
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
                                        Both parties must be present with a valid, government-issued photo I.D.
                                        <hr> A marriage license is valid sixty (60) days from date of issuance. The license must be returned to our office for recording, whether used or unused within sixty (60) days.
                                    </div>
                                </div>
                                <div class="panel panel-warning text-center">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">For Underage Individuals</h3>
                                    </div>
                                    <div class="panel-body">
                                        If one or both of those wishing to be married is under the age of 18, both parents must be present. If the parents are divorced, the custodial parent will need to be present with the latest court order granting custody. 
                                        <span style="font-style: italic;">(There is a waiting period of five (5) business days before the license can be picked up in such a marriage)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list-group">
                      <h4 class="list-group-item active">Links and Resources</h4>
                      <a href="https://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Marriage/Marriage%20License%20Info.pdf" target="_blank" class="list-group-item">
                          License Information Sheet
                      </a>
                      <a href="http://marriage.cisarkansas.com/?C=Saline" target="_blank" class="list-group-item">
                          Arkansas Marriage License Search
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
