<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- icon -->
    <link href="images/logo.ico" rel="shortcut icon" />

    <!-- 引入 Poppins 字體 -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Coin Slider -->
    <script type="text/javascript" src="js/coin-slider.js"></script>
    <link rel="stylesheet" href="css/coin-slider-styles.css">

     <!-- Bootstrap JS -->
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="css/fixed.css">
    <link rel="stylesheet" href="css/sitemap.css">
    <link rel="stylesheet" href="css/overview.css">

    <!-- JS -->
    <script type="text/javascript" src="js/backdrop.js"></script>
    <script type="text/javascript" src="js/overview.js"></script>

    <title>Fu Jen Global</title>
</head>
<body>
    <div class="fixed-top">
        <?php include 'header.php'; ?>
    </div>

    <div id="content">
        <!-- 藍色條 -->
        <!-- <div class="container_blue">
        </div> -->
        <!-- 上方大圖 -->
        <div class="container1">
            <img class="overview" src="images/overview.jpg" alt="overview">
            <div class="text-overlay">Chinese-Learning</div>
        </div>
        <!-- Overview -->
        <div class="container2">
            <div class="row justify-content-center">
                <div class="col-8">
                    <h3>MANDARIN CHINESE COURSES at FJCU</h3>
                    <p>The Center of Chinese Language and Culture of Fu Jen Catholic University was founded originally by Divine World Missionaries. The idea of establishing a Chinese-Learning Center was directed by the President Cardinal Paul Yu Pin in 1964. For fathers, brothers and being specialized in Mandarin was not just crucial for preaching, but especially for lecturing and managing the school.</p>
                </div>
            </div>
        </div>
        <!-- 4個icon -->
        <div class="container3">
            <div class="row justify-content-center">
                <div class="col-lg-3 col-sm-12">
                    <img class="icon" src="images/overview_icon1.png" alt="Small classes">
                    <p class="icon-label">Small classes</p>
                </div>
                <div class="col-lg-3 col-sm-12">
                    <img class="icon" src="images/overview_icon2.png" alt="Zhuyin">
                    <p class="icon-label">Zhuyin&Pinyi<br>Traditional & Simplified</p>
                </div>
                <div class="col-lg-3 col-sm-12">
                    <img class="icon" src="images/overview_icon3.png" alt="Tutorial">
                    <p class="icon-label">Tutorial</p>
                </div>
                <div class="col-lg-3 col-sm-12">
                    <img class="icon" src="images/overview_icon4.png" alt="Counseling and Caring">
                    <p class="icon-label">Counseling and Caring</p>
                </div>
            </div>
        </div>
        <!-- 左文字右影片區 -->
        <div class="container4">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-sm-12">
                    <li>Effective interaction between teachers and students with no more than 7 students.</li>
                    <br>
                    <li>Different Mandarin Chinese systems and materials are available to tailor students’ learning needs.</li>
                    <br>
                    <li>Support your learning by providing individual or a small group (less than 5 students) tutorial sessions.</li>
                    <br>
                    <li>Professional counseling services for students adjusting to life in Taiwan and dealing with difficult situations.</li>
                </div>
                <div class="col-lg-6 col-sm-12" style="width:35%; height: auto;" >
                    <video class="video" id="video"  controls style="width:100%; border-radius: 15px;" autoplay muted>
                        <source src="video/CCLC活動影片.mp4" type="video/mp4">
                    </video>    
                </div>
            </div>
        </div>
        <!-- 輪播牆 -->
        <div class="container5">
            <div class="row">
                    <div class="col-lg-3 col-md-2">
                    </div>
                    <div class="col-lg-6 col-md-8 col-5">
                        <h3>Facilities</h3>
                        <p>Language Center facilities include air-conditioned classrooms, audio-visual rooms, speech laboratory, multimedia equipped classrooms, study hall, and cross-cultural learning space.</p>
                        <img  class="mainImage" id="mainImage" src="images/overview1.jpg" alt="Facilities" class="img-fluid">
                    </div>
                    <div class="col-lg-3 col-md-2">
                    </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-2"></div>
                <div class="col-lg-6 col-md-8 col-5 justify-content-center align-items-center">
                    <div id="carouselExampleIndicators" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="d-flex">
                                    <img src="images/overview1.jpg" alt="..." onclick="showImage('images/overview1.jpg')" style="cursor: pointer;">
                                    <img src="images/overview2.jpg" alt="..." onclick="showImage('images/overview2.jpg')" style="cursor: pointer;">
                                    <img src="images/overview3.jpg" alt="..." onclick="showImage('images/overview3.jpg')" style="cursor: pointer;">
                                    <img src="images/overview4.jpg" alt="..." onclick="showImage('images/overview4.jpg')" style="cursor: pointer;">
                                    <img src="images/overview5.jpg" alt="..." onclick="showImage('images/overview5.jpg')" style="cursor: pointer;">
                                </div>
                            </div>
                            <div class="carousel-item ">
                                <div class="d-flex">
                                    <img src="images/overview5.jpg" alt="..." onclick="showImage('images/overview5.jpg')" style="cursor: pointer;">
                                    <img src="images/overview6.jpg" alt="..." onclick="showImage('images/overview6.jpg')" style="cursor: pointer;">
                                    <img src="images/overview7.jpg" alt="..." onclick="showImage('images/overview7.jpg')" style="cursor: pointer;">
                                    <img src="images/overview8.jpg" alt="..." onclick="showImage('images/overview8.jpg')" style="cursor: pointer;">
                                    <img src="images/overview1.jpg" alt="..." onclick="showImage('images/overview1.jpg')" style="cursor: pointer;">
                                </div>
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
                <div class="col-lg-3 col-md-2"></div>
            </div>
            <br>
        </div>
        <!-- Other Information -->
        <div class="container6">
            <div class="row justify-content-center">
                <div class="col-8">
                    <h3>Other Information</h3>
                    <p class="othertext">Language Center students have access to other university resources such as the libraries, computer and multimedia laboratories, sports facilities (e.g., swimming pool), and medical clinic at the university. </p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-1">
                    <a href="why-FJCU.php" class="fs-3 fw-semibold"><img src="images/overview_button.png" class="img-icon mx-3" alt="why-FJCU icon"></a>
                </div>
            </div>
        </div>
        <div class="container6">
            <div class="row justify-content-center">
                <div class="col-8">
                    <p class="ps">＊Fu Jen University has one of the most beautiful campuses in Taiwan. With lots of open green areas, students can easily find places to rest and recreate. A post office, ATM machines, cafeterias, coffee shops, convenient stores and bookstores are easily accessible on campus.</p>
                </div>
            </div>
        </div>
        <br><br><br>
        <?php include 'footer.php'; ?>
    </div>
</body>
</html>
