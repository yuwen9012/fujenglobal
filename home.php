<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- icon -->
    <link href="images/logo.ico" rel="shortcut icon" />

    <!-- 引入 Poppins 字體 -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="css/fixed.css">
    <link rel="stylesheet" href="css/home.css">

    <title>輔仁大學國際及兩岸教育處</title>
</head>
<body>
    <?php include 'header.php'; ?>

    <nav class="navbar navbar-expand-lg bg-body-tertiary second-navbar">
        <div class="container-fluid">
            <img src="images/06-校徽-英文組合排列.png" id="logo">

            <ul class="navbar-nav ms-auto">
                <div class="mx-5">
                    <a href="howtoapply.php" class="btn-bounce fw-semibold">Apply NOW !</a>
                </div>
                <li class="nav-item px-2">
                    <a class="nav-link text-white" href="https://bpis.fju.edu.tw/index.php">Fu Jen Global Academy</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link text-white" href="#">Degree students</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link text-white" href="study-abroad.php">Study Abroad</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link text-white" href="#">Chinese Student</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link text-white" href="#">Enrollment Information</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link text-white" href="#">Contact us</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/banner1.png" class="d-block w-100" alt="...">
                    <div class="overlay">
                        <h3>Internal Education</h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/banner1.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/banner1.png" class="d-block w-100" alt="...">
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

    <div class="container my-5">
        <div class="row">
            <div class="col-md-6">
                <div class="p-3">
                    <h2>Fu Jen Catholic University</h2>
                    <p>is renowned for its robust international exchange programs and has established partnerships with numerous universities worldwide. Students have opportunities to participate in various international exchange and internship programs, broadening their global perspectives.</p>
                    <button type="button" class="btn-custom mx-3">Why FJCU?</button>
                    <!-- <button type="button" class="btn-custom mx-3">Campus Life</button> -->
                </div>
            </div>
            <div class="col-md-6">
                <div class="row gx-4 gy-4">
                    <div class="col-md-6">
                        <img src="images/classroom  (9).jpg" class="img-fixed-height rounded" alt="Image 1">
                    </div>
                    <div class="col-md-6">
                        <img src="images/投影牆1.jpg" class="img-fixed-height rounded" alt="Image 2">
                    </div>
                    <div class="col-md-6">
                        <img src="images/classroom  (19).jpg" class="img-fixed-height rounded" alt="Image 3">
                    </div>
                    <div class="col-md-6">
                        <img src="images/野聲樓.jpg" class="img-fixed-height rounded" alt="Image 4">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>
