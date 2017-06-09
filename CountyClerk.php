<!DOCTYPE html>
<html>

<head>
    <title>Saline County Clerk</title>
    <base href="http://salinecountyclerk.azurewebsites.net">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="js/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <?php
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
                    <h1>Doug Curtis - Saline County Clerk</h1>
                    <br />
                    <p>The County Clerk is also responsible for the administrative details of each election for the County Board of Election Commission.&nbsp; <strong>Click <a href="http://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/AR62_Absentee_Ballot_Application.pdf">Absentee Ballot Application</a> </strong>to Download or Print an absentee ballot application.</p>
                    <p>As Clerk of the County Court, the Clerk maintains the County Court records.&nbsp; These records include all business of the County Court such as: annexations, incorporations, county purchases, election results, proclamations, levy of taxes, board appointments, bonds, improvement districts, right of way acquisition, contracts, and agreements signed by the County Judge.The Clerk became the official voter registrar with the adoption of Amendment 51 to the Arkansas Constitution in 1966.&nbsp; The clerk maintains an accurate and up-to-date voter registration list within the office and stores the ballot boxes between elections.&nbsp; In addition, the clerk is the custodian of absentee ballots and is responsible for early voting.</p>
                    <p>The County Clerk shall serve, unless otherwise designated by county ordinance, as the secretariat of the Quorum Court.&nbsp; These duties involve keeping a complete permanent record of the proceedings of the Quorum Court including minutes, ordinances, resolutions, appointments and an index to provide easy access to the information (ACA 14-14-902 and 14-14-903).</p>
                    <p>As Clerk to the probate court, the clerk files all instruments making them a matter of record in decedent estate cases.&nbsp; The Clerk also in this capacity maintains all records relative to adoptions and guardianship cases within the county.</p>
                    <p>The County Clerk or the Clerk’s designee serves as the secretary of the Board of Equalization and records the minutes of their meetings (ACA 26-27-307).&nbsp; Also, the clerk is the preparer of the tax books and is responsible for extending taxes from the information provided by the assessor and the Board of Equalization (ACA 26-28-101 through 26-28-108).</p>
                    <p>The County Clerk or the Clerk’s designee serves as the secretary of the Intergovernmental Council Board and records the minutes of their meetings (ACA 14-27-102).</p>
                    <p>The County Clerk is the official bookkeeper of county government and handles the payroll for all county employees.&nbsp; The clerk has the duty of keeping a regular account between the treasurer and the county.&nbsp; The clerk charges the treasurer with all monies received and credits the treasurer with all monies dispersed.&nbsp; In addition, the clerk keeps an accurate account of all financial transactions within the county and pays all county bills.&nbsp; The clerk also files all documents, vouchers, and other papers pertaining to the settlement of any account which the county is involved.&nbsp; It is the responsibility of the County Clerk to prepare all checks on the treasury for monies ordered to be paid by the County Court and to keep complete and accurate records of all these financial transactions ready for the court’s inspection at any time (ACA 16-20-402).</p>
                    <p>The Clerk issues marriage licenses (ACA 9-11-201), and keeps a record of all minister’s credentials.&nbsp; The Clerk also records DBAs (doing business as).</p>
                    <p>It is common practice in many counties for the county clerk to assist the county election commission in the overall performance of the election process.&nbsp; With the increasing complexity of elections, however, there is an increasing trend towards the hiring of election coordinators to aid the county election commission and the county clerk in their respective election responsibilities. (ACA 7-5-401 et seq.)</p>
                    <br />
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
