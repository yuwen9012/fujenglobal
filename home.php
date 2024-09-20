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

    <!-- CSS -->
    <link rel="stylesheet" href="css/fixed.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/home.css">

    <!-- JS -->
    <script type="text/javascript" src="js/menu.js"></script>
    <script type="text/javascript" src="js/home.js"></script>

    <title>Fu Jen Global</title>
</head>
<body>
    <?php include 'header.php'; ?>

    <?php include 'main-menu.php'?>

    <!-- <div id="home-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#home-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#home-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#home-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#home-carousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#home-carousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/1 首頁-1.jpg" class="image-container d-block w-100" alt="...">
                //<div class="overlay">
                //    <h3>Internal Education</h3>
                //</div>
            </div>
            <div class="carousel-item">
                <img src="images/1 首頁-2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/1 首頁-3.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/1 首頁-4.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/1 首頁-5.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#home-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#home-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div> -->

    <div id="coin-slider">
        <canvas id="canvas"></canvas>
    </div>

    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="p-3">
                    <h2>Fu Jen Catholic University</h2>
                    <p id="introduction-text">(FJCU) is the top ranked private university in Taiwan, and is also on the THE Impact Rankings query of keywords for SDGs (Sustainable Development Goals), dedicating to improve social inclusion and environmental protection. FJCU is the only comprehensive university under the direct authority of the Holy See among Chinese-speaking countries with outstanding academic excellence.</p>
                    <button type="button" class="btn-custom mx-3" onclick="window.location.href='why-FJCU.php'">Why FJCU?</button>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="row gx-4 gy-4">
                    <div class="col-12 col-sm-6 d-flex justify-content-center">
                        <img src="images/1 首頁-四格照-左上.jpg" class="img-fixed-height rounded" alt="Image 1">
                    </div>
                    <div class="col-12 col-sm-6 d-flex justify-content-center">
                        <img src="images/1 首頁-四格照-右上.jpg" class="img-fixed-height rounded" alt="Image 2">
                    </div>
                    <div class="col-12 col-sm-6 d-flex justify-content-center">
                        <img src="images/1 首頁-四格照-左下.jpg" class="img-fixed-height rounded" alt="Image 3">
                    </div>
                    <div class="col-12 col-sm-6 d-flex justify-content-center">
                        <img src="images/1 首頁-四格照-右下.jpg" class="img-fixed-height rounded" alt="Image 4">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>
