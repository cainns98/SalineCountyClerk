<!DOCTYPE html>
<html>

<head>
    <title>Absentee Voting</title>
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
                    <h1>Absentee Voting</h1>
                    <br />
                    <div class="list-group">
                      <h4 class="list-group-item active">Ballot Application</h4>
                      <a href="/content/voterInformation/AR62AbsenteeBallotApplication.pdf" target="_blank" class="list-group-item">
                          Absentee Ballot Application
                      </a>
                      <div class="list-group-item"><span class="italic">Your Application for an Absentee Ballot may be mailed, emailed, or faxed:</span>
                        <br><br>
                        <div class="container-fluid">
                            <div class="col-md-4">
                                Mail: <br>
                                Saline County Clerk <br>
                                215 N. Main <br>
                                Benton, AR 72015
                            </div>
                            <div class="col-md-4">
                                E-mail: vicki.deere@salinecounty.org
                            </div>
                            <div class="col-md-4">
                                Fax: (501) 776-2412
                            </div>
                        </div>
                        <br>
                        <span class="italic">Please remember to check the deadline for submitting the application by mail, email, or fax.</span>
                      </div>
                      <a href="#" target="_blank" class="list-group-item hidden">
                          Rules & Regulations
                      </a>
                      <a href="#" target="_blank" class="list-group-item hidden">
                          Dates & Deadlines
                      </a>
                    </div>
                    <div class="list-group">
                      <h4 class="list-group-item active">Uniformed and Overseas Citizens Absentee Voting (UOCAVA)</h4>
                      <a href="https://www.fvap.gov/info/laws/uocava" target="_blank" class="list-group-item">
                          UOCAVA Overview
                      </a>
                      <a href="https://www.fvap.gov/eo/overview" target="_blank" class="list-group-item">
                          UOCAVA Voting Process
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
