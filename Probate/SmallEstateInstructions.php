<!DOCTYPE html>
<html>

<head>
    <title>Small Estate Instructions</title>
    <base href="http://www.salineclerk.com">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <link rel="stylesheet" type="text/css" href="css/legalTab.css" />
    
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
                    <h1>Small Estate Instructions</h1>
                    <br />
                    <div class="legal-tab">
                        <p>(a) The distributee of an estate shall be entitled thereto without the appointment of a personal representative when: </p>
                        <div class="legal-tab">
                            <p>(1) No petition for the appointment of a personal representative is pending or has been granted;</p>
                            <p>(2) Forty-five (45) days have elapsed since the death of the decedent;</p>
                            <p>(3) The value, less encumbrances, of all property owned by the decedent at the time of death, excluding the homestead of and the statutory allowances for the benefit of a spouse or minor children, if any, of the decedent, does not exceed one hundred thousand dollars ($100,000);</p>
                            <p>(4) There shall be filed with the probate clerk of the circuit court of the county of proper venue for administrationan affidavit of one (1) or more of the distributees setting forth:</p>
                            <div class="legal-tab">
                              <p>(A) That there are no unpaid claims or demands against the decedent or his or her estate, that the Department of Human Services furnished no federal or state benefits to the decedent, or, that if such benefits have been furnished, the department has been reimbursed in accordance with state and federal laws and regulations;</p>
                              <p>(B) An itemized description and valuation of the personal property and a legal description and valuation of any real property of the decedent, including the homestead;</p>
                              <p>(C) The names and addresses of persons having possession of the personal property and the names and addresses of any persons possessing or residing on any real property of the decedent; and</p>
                              <p>(D) The names, addresses, and relationship to the decedent of the persons entitled to and who will receive the property; and</p>
                            </div>
                            <p>(5) There is furnished to any person owing any money, having custody of any property, or acting as registrar or transfer agent of any evidence of interest, indebtedness, property, or right, a copy of the affidavit certified by the clerk.</p>
                        </div>
                        <p>(b)</p>
                        <div class="legal-tab">
                            <p>(1) The clerk shall file the 28-1-108(1). He or affidavit, assign it a number, and index it as required by § she shall make a charge of twenty-five dollars ($25.00) for filing the affidavit and five dollars ($5.00) for each certified copy. No order of the court or other proceeding shall be necessary. No additional fees shall be charged if a will is attached to the affidavit. </p>
                            <p>(2)</p>
                            <div class="legal-tab">
                                <p>(A) If an estate collected under this section contains real property, in order to allow for claims against the estate to be presented, the distribute shall cause a notice of the decedent's death and the filing of an affidavit for the collection of his or her estate to be published within thirty (30) days after the affidavit has been filed.</p>
                                <p>(C) Publication of the notice shall be as provided in § 28-1-112(b)(4) and § 28-40-111(a)(4).</p>
                            </div>
                        </div>
                    </div>
                    <div class="list-group">
                      <h4 class="list-group-item active">Links and Information</h4>
                      <a href="https://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Probate/Small%20Estate%20Instructions.pdf" target="_blank" class="list-group-item">
                          Small Estate Instructions Printout
                      </a>
                      <a href="https://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Probate/Small%20Estate%20Affidavit.pdf" target="_blank" class="list-group-item">
                          Small Estate Affidavit
                      </a>
                      <a href="https://dpnfam.net/elecprep/wp-content/downloads/AR/Saline/Probate/Small%20Estate%20Notice.pdf" target="_blank" class="list-group-item">
                          Small Estate Notice
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
