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
    <link rel="stylesheet" href="css/study-abroad.css">

    <!-- JS -->
    <script type="text/javascript" src="js/study-abroad.js"></script>

    <title>Study Abroad</title>
</head>
<body>
    <?php include 'header.php'; ?>
    
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
            <div class="col-md-6 p-5">
                <h2 class="fw-bolder">Program Introduction</h2>
                <p class="fw-semibold" id="introduction-text">Fu Jen Catholic University (FJCU) is the leading private university in Taiwan and is featured in the THE Impact Rankings for Sustainable Development Goals (SDGs), committed to enhancing social inclusion and environmental conservation. While studying at FJCU, you can immerse yourself in the richness of traditional Chinese culture, gain a profound understanding of Taiwan's advanced technology sector, appreciate the beauty of Taiwan's scenery, and engage in international volunteer activities.</p>
                <div>
                    <a href="program-introduction.php" class="btn-program"><i class="fas fa-location-arrow"></i></a>
                    <a href="howtoapply.php" class="btn-bounce fw-semibold">Apply NOW !</a>
                </div>
            </div>

            <div class="col-md-6 d-flex align-items-end">
                <div class="container text-center">
                    <div class="half-circle">
                        <div class="circle-btn" id="btn-study-package"><a href="study-package.php">Study Package</a></div>
                        <div class="circle-btn" id="btn-traditional-culture"><a href="#">Traditional Culture</a></div>
                        <div class="circle-btn" id="btn-enterprise-visit"><a href="https://bpis.fju.edu.tw/index.php">Enterprise Visit</a></div>
                        <div class="circle-btn" id="btn-mandarin-learning"><a href="#">Mandarin Learning</a></div>
                        <img src="images/SA-student.png" id="student" class="d-block mx-auto" alt="student">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container scorer-block">
        <div class="row" id="scorer">
            <div class="col-md-2 text-center my-5">
                <div class="image-container">
                    <img src="images/college.png" class="d-block mx-auto" alt="Colleges">
                </div>
                <h4 class="fw-semibold py-3">Colleges</h4>
                <div class="college-score-container">
                    <div class="score-display fw-semibold" id="college-score"></div>
                </div>
            </div>

            <div class="col-md-2 text-center my-5">
                <div class="image-container">
                    <img src="images/degree.png" class="d-block mx-auto" alt="Bachelor's Degrees">
                </div>
                <h4 class="fw-semibold py-3">Bachelor's Degrees</h4>
                <div class="degree-score-container">
                    <div class="score-display fw-semibold" id="degree-score"></div>
                </div>
            </div>

            <div class="col-md-2 text-center my-5">
                <div class="image-container">
                    <img src="images/school.png" class="d-block mx-auto" alt="International Partners">
                </div>
                <h4 class="fw-semibold py-3">International Partners</h4>
                <div class="partner-score-container">
                    <div class="score-display fw-semibold" id="partner-score"></div>
                </div>
            </div>

            <div class="col-md-2 text-center my-5">
                <div class="image-container">
                    <img src="images/student.png" class="d-block mx-auto" alt="Student Clubs">
                </div>
                <h4 class="fw-semibold py-3">Student Clubs</h4>
                <div class="student-score-container">
                    <div class="score-display fw-semibold" id="student-score"></div>
                </div>
            </div>

            <div class="col-md-2 text-center my-5">
                <div class="image-container">
                    <img src="images/ranking.png" class="d-block mx-auto" alt="Asia Univeristy Ranking">
                </div>
                <h4 class="fw-semibold py-3">Asia Univeristy Ranking 2024</h4>
                <div class="ranking-score-container">
                    <div class="score-display fw-semibold">
                        <span class="fs-3" id="ranking-score1"></span>
                        <span class="fs-4">—</span>
                        <span class="fs-3" id="ranking-score2"></span>
                        <span class="fs-4">th</span>
                    </div>
                </div>
            </div>

            <div class="col-md-2 text-center my-5">
                <div class="image-container">
                    <img src="images/association.png" class="d-block mx-auto" alt="Alumni Association">
                </div>
                <h4 class="fw-semibold py-3">Alumni Association</h4>
                <div class="association-score-container">
                    <div class="score-display fw-semibold" id="association-score"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid flow-block">
        <img src="images/flow.png" class="img-fluid" alt="Flow Chart">
        <div class="overlay-text" id="overlay-text-first">
            <p class="fs-4 fw-semibold">1. Research Costs and Courses</p>
            <span class="fs-5">Understanding all the costs in the program</span>
        </div>
        <div class="overlay-text" id="overlay-text-second">
            <p class="fs-4 fw-semibold">2. Pick Your Courses</p>
            <span class="fs-5">Select the courses that you interested</span>
        </div>
        <div class="overlay-text" id="overlay-text-third">
            <p class="fs-4 fw-semibold">3. Apply</p>
            <span class="fs-5">Complete forms and pay the application fees</span>
        </div>
        <div class="overlay-text" id="overlay-text-forth">
            <p class="fs-4 fw-semibold">4. Receive Offer</p>
            <span class="fs-5">Receive the offer given by the University</span>
        </div>
        <div class="overlay-text" id="overlay-text-fifth">
            <p class="fs-4 fw-semibold">5. Be Prepared</p>
            <span class="fs-5">Apply for Visa, buy the ticket and get the insurance</span>
        </div>
        <div class="overlay-text" id="overlay-text-sixth">
            <p class="fs-4 fw-semibold">6. Welcome to FJCU</p>
            <span class="fs-5">Our warmly welcome you to our University</span>
        </div>
    </div>

    <div class="container-fluid info-block">
        <div class="row">
            <div class="col-md-6 d-flex justify-content-center align-items-center">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/SA黃色方塊1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images/SA黃色方塊2.jpg" class="d-block w-100" alt="...">
                        </div>
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
                    <a href="howtoapply.php" class="fs-3 fw-semibold"><img src="images/icon-apply.png" class="img-icon mx-3" alt="apply icon">How to Apply</a>
                    <a href="accommodation.php" class="fs-3 fw-semibold"><img src="images/icon-accommodation.png" class="img-icon mx-3" alt="accommodation icon">Accommodation</a>
                    <a href="#" class="fs-3 fw-semibold"><img src="images/icon-faq.png" class="img-icon mx-3" alt="faq icon">FAQ</a>
                </div>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>
