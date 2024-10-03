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

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="css/fixed.css">
    <link rel="stylesheet" href="css/sitemap.css">
    <link rel="stylesheet" href="css/study-abroad.css">

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>

    <!-- JS -->
    <script type="text/javascript" src="js/backdrop.js"></script>
    <script type="text/javascript" src="js/study-abroad.js"></script>
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
                <img src="images/06-校徽-英文組合排列.png" id="logo" class="me-3">
                
                <div class="flex-grow-1 text-center">
                    <div class="d-flex justify-content-center align-items-center">
                        <span class="navbar-text mx-2 fs-1 fw-bolder">— Study Abroad —</span>
                    </div>
                </div>
            </div>
        </nav>
    
        <div class="container-fluid introduction-block">
            <div class="row">
                <div class="col-lg-6 p-5">
                    <h2 class="fw-bolder" id="introduction-title"></h2>
                    <p class="fw-semibold" id="introduction-text"></p>
                    <div>
                        <a href="program-introduction.php" class="btn-program"><i class="fas fa-location-arrow"></i></a>
                        <a href="how-to-apply.php" class="btn-bounce fw-semibold">Apply NOW !</a>
                    </div>
                </div>

                <div class="col-lg-6 d-flex align-items-end" id="circle-link">
                    <div class="container text-center">
                        <div class="half-circle">
                            <div class="circle-btn" id="btn-study-package"><a href="study-package.php">Study Packages</a></div>
                            <div class="circle-btn" id="btn-traditional-culture"><a href="taiwanese-culture.php">Taiwanese Culture</a></div>
                            <div class="circle-btn" id="btn-enterprise-visit"><a href="https://bpis.fju.edu.tw/index.php" target="_blank">Enterprise Visit</a></div>
                            <div class="circle-btn" id="btn-mandarin-learning"><a href="Mandarin-Chinese-Learning.php">Mandarin Learning</a></div>
                            <img src="images/SA-student.png" id="student" class="d-block mx-auto" alt="student">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container scorer-block">
            <div class="row" id="scorer">

            </div>
        </div>

    <div class="container-fluid flow-block d-none d-lg-block p-0">
            <div class="text-center">
                <img src="images/SA流程圖_橫.png" usemap="#image-map" style="width:100%" id="map">
            </div>

            <map name="image-map">
                <area target="" alt="05"  href="#" coords="260,200,770,420" shape="rect" class="area-hover">
                <area target="_blank" alt="03"  href="https://studyabroad.fju.edu.tw/" coords="130,480,495,650" shape="rect" class="area-hover">
                <area target="" alt="01"  href="program-introduction.php" coords="5,780,480,950" shape="rect" class="area-hover">
                <area target="" alt="06"  href="#" coords="1480,65,1900,240" shape="rect" class="area-hover">
                <area target="" alt="04"  href="#" coords="1440,420,1900,600" shape="rect" class="area-hover">
                <area target="" alt="02"  href="study-package.php" coords="1400,720,1900,980" shape="rect" class="area-hover">
            </map>
        </div>
        
        
        <div class="container-fluid p-0 d-block d-lg-none">
            <div style="text-align: center;">
                <img src="images/SA流程圖_直.png" usemap="#image-map2" style="width:100%" id="map">
            </div>

            <map name="image-map2">
                <area target="" alt="01"  href="program-introduction.php" coords="460,230,1380,460" shape="rect" class="area-hover">
                <area target="" alt="02"  href="study-package.php" coords="460,490,1380,720" shape="rect" class="area-hover">
                <area target="_blank" alt="03"  href="https://studyabroad.fju.edu.tw/" coords="460,740,1380,960" shape="rect" class="area-hover">
                <area target="" alt="04"  href="#" coords="460,980,1380,1240" shape="rect" class="area-hover">
                <area target="" alt="05"  href="#" coords="460,1270,1380,1500" shape="rect" class="area-hover">
                <area target="" alt="06"  href="#" coords="460,1530,1380,1760" shape="rect" class="area-hover">
            </map>
        </div>

        <div class="container-fluid info-block py-4">
            <div class="row">
                <div class="col-md-6 d-flex align-items-center justify-content-md-end justify-content-center">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators" id="carouselIndicators">
                        
                        </div>
                        <div class="carousel-inner" id="carouselInner">

                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="guide">
                        <a href="how-to-apply.php" class="fs-3 fw-semibold"><img src="images/icon-apply.png" class="img-icon mx-3" alt="apply icon">How to Apply</a>
                        <a href="accommodation.php" class="fs-3 fw-semibold"><img src="images/icon-accommodation.png" class="img-icon mx-3" alt="accommodation icon">Accommodation</a>
                        <a href="faq.php" class="fs-3 fw-semibold"><img src="images/icon-faq.png" class="img-icon mx-3" alt="faq icon">FAQ</a>
                    </div>
                </div>
            </div>
        </div>

        <?php include 'footer.php'; ?>
    </div>
</body>
</html>
