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
    <div class="fixed-top">
        <?php include 'header.php'; ?>
        <?php include 'main-menu.php'; ?>
    </div>

    <div id="carousel">
        <div id="coin-slider">
            <canvas id="canvas"></canvas>
        </div>
    </div>

    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="p-3">
                    <h2 id="introduction-title"></h2>
                    <p id="introduction-text"></p>
                    <button type="button" class="btn-custom mx-3" onclick="window.location.href='why-FJCU.php'">Why FJCU?</button>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="row gx-4 gy-4">
                    <div class="col-12 col-sm-6 d-flex justify-content-center">
                        <img id="lt" class="img-fixed-height rounded" alt="Image 1">
                    </div>
                    <div class="col-12 col-sm-6 d-flex justify-content-center">
                        <img id="rt" class="img-fixed-height rounded" alt="Image 2">
                    </div>
                    <div class="col-12 col-sm-6 d-flex justify-content-center">
                        <img id="lb" class="img-fixed-height rounded" alt="Image 3">
                    </div>
                    <div class="col-12 col-sm-6 d-flex justify-content-center">
                        <img id="rb" class="img-fixed-height rounded" alt="Image 4">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>
