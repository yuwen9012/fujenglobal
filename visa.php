<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- icon -->
    <link href="images/logo.ico" rel="shortcut icon" />

    <!-- 引入 Poppins 字體 -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap">
    <!-- 引入 Merriweather 字體 -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&display=swap">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="css/fixed.css">
    <link rel="stylesheet" href="css/sitemap.css">
    <link rel="stylesheet" href="css/visa.css">

    <!-- JS -->
    <script type="text/javascript" src="js/backdrop.js"></script>
    <script type="text/javascript" src="js/visa.js"></script>
    <script type="text/javascript" src="js/jquery.rwdImageMaps.js"></script>

    <title>Fu Jen Global</title>
</head>
<body>
    <div class="fixed-top">
        <?php include 'header.php'; ?>
    </div>

    <div id="content">
        <nav class="navbar navbar-expand-lg bg-body-tertiary second-navbar">
            <div class="container-fluid d-flex align-items-center">
                <a href="home.php"> 
                    <img src="images/06-校徽-英文組合排列.png" id="logo">
                </a>
                <div class="flex-grow-1 text-center">
                    <div class="d-flex justify-content-center align-items-center">
                        <a href="javascript:history.back()"><i class="fas fa-arrow-left"></i></a>
                        <span class="navbar-text mx-2">Visa</span>
                    </div>
                </div>
            </div>
        </nav>
        <div class="container-1">
            <div class="text-center">
                <img src="images/visa.png" usemap="#image-map" style="width:100%" id="map">
            </div>

            <map name="image-map">
                <area target="" alt="step1"  href="#" coords="260,200,770,420" shape="rect" class="area-hover">
                <area target="" alt="step2"  href="#" coords="130,480,495,650" shape="rect" class="area-hover">
                <area target="" alt="step3"  href="#" coords="5,780,480,950" shape="rect" class="area-hover">
            </map>
        </div>
        <div class="container-1">
        <div class="step-container">
            <div class="row">
                <div class="col-md-2 d-flex justify-content-center align-items-center bg-1">
                    <img src="images/visa-1.png" class="step-icon">
                </div>
                <div class="col-md-10 px-5 py-4">
                    <h2 class="step-title">Step 1 - Set up your application</h2>
                    <hr>
                    <p class="mb-3">
                        Once your application is approved, you will receive an acceptance letter from the Center of Chinese Language and Culture (CCLC). Please submit the admission certificate with other required documents you may need (<a href="https://www.boca.gov.tw/cp-158-260-9690c-2.html" target="_blank">Visitor Visa for Studying Chinese</a>) at an <a href="https://www.boca.gov.tw/sp-foof-countrylp-01-2.html" target="_blank">overseas mission of Taiwan</a>.
                    </p>    
                    <p>The visitor visa (with annotation "FR" and the school name) is valid for two months or three months (60 days or 90 days from the 2ed day upon your arrival).</p>
                </div>
            </div>
        </div>
        
        <div class="step-container">
            <div class="row">
                <div class="col-md-2 d-flex justify-content-center align-items-center bg-2">
                    <img src="images/visa-2.png" class="step-icon">
                </div>
                <div class="col-md-10 px-5 py-4">
                    <h2 class="step-title">Step 2 - You may extend your visa</h2>
                    <hr>
                    <p class="mb-3">
                        When you have formally enrolled at the CCLC, the certificate of registration will be issued  and it can be used to extend your visa at the <a href="https://servicestation.immigration.gov.tw/1471/" target="_blank">National Immigration Agency</a> (New Taipei City Service Center) in Taiwan, with the following required documents:
                    </p>  
                    <ul>
                        <li><a href="https://view.officeapps.live.com/op/view.aspx?src=https%3A%2F%2Fwww.immigration.gov.tw%2Fmedia%2F103520%2F%25E5%25A4%2596%25E5%259C%258B%25E4%25BA%25BA%25E5%25B1%2585%25E5%2581%259C%25E7%2595%2599%25E6%25A1%2588%25E4%25BB%25B6%25E7%2594%25B3%25E8%25AB%258B%25E8%25A1%25A8.docx&wdOrigin=BROWSELINK" target="_blank">visa application form </a></li>
                        <li>Passport which is valid for at least three months with an extendable visitor visa.</li>
                        <li>Certificate of registration and class attendance record issued by CCLC.</li>
                        <li>Certificate of your residency.</li>
                    </ul>
                    
                    <p class="text-danger"><strong>*Please note: You can only extend your visa </strong>within 15 days before the expiry of your visa. If you miss more than ¼ of your required class hours, you are not eligible for visitor visa extension. In most cases, the visitor visa can be extended twice for sixty (60) days each time.</p>
                </div>
            </div>
        </div>
        
        <div class="step-container">
            <div class="row">
                <div class="col-md-2 d-flex justify-content-center align-items-center bg-3">
                    <img src="images/visa-3.png" class="step-icon">
                </div>
                <div class="col-md-10 px-5 py-4">
                    <h2 class="step-title">Step 3 - Submit your online application for Alien Resident Certificate</h2>
                    <hr>
                    <p>If you wish to continue your courses after 4 months of your study, you must apply for the Alien’s Residence Certificate (ARC) <a href="https://coa.immigration.gov.tw/coa-frontend/student/entry?lang=en" target="_blank">online</a>.</p>
                    <p>The date of expiration on the ARC coincides with the date of the last day of classes written on the certificate of registration. To apply for ARC extension, payment of tuition fee for the next quarter is required.</p>
                </div>
            </div>
        </div>
        
        <p class="text-center mt-4 footer-links">Please see more details about the visa application below:</p>
        <div class="text-center footer-links">
            <a href="http://www.boca.gov.tw/">The Bureau of Consular Affairs (BOCA)</a> |
            <a href="http://www.immigration.gov.tw/">The National Immigration Agency (NIA)</a>
        </div>
        
    </div>
       
        <?php include 'footer.php'; ?>
    </div>
</body>
</html>
