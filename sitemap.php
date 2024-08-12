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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="css/fixed.css">
    <link rel="stylesheet" href="css/sitemap.css">
    
    <title>Sitemap</title>
   
</head>
<body>
    <?php include 'header.php'; ?>

    <!-- 選單 -->
    <div class="offcanvas offcanvas-end d-block d-xl-none" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title fs-2 fw-bolder text-white" id="offcanvasNavbarLabel">Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item fs-5 my-2">
                    <a class="nav-link" href="https://bpis.fju.edu.tw/index.php">Fu Jen Global Academy</a>
                </li>
                <li class="nav-item fs-5 my-2">
                    <a class="nav-link" href="coming-soon.php">Degree Students</a>
                </li>
                <li class="nav-item fs-5 my-2">
                    <a class="nav-link" href="study-abroad.php">Study Abroad</a>
                </li>
                <li class="nav-item fs-5 my-2">
                    <a class="nav-link" href="coming-soon.php">Chinese Student</a>
                </li>
                <li class="nav-item fs-5 my-2">
                    <a class="nav-link" href="coming-soon.php">Enrollment Information</a>
                </li>
                <li class="nav-item fs-5 my-2">
                    <a class="nav-link" href="contact-us.php">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg bg-body-tertiary second-navbar">
        <div class="container-fluid">
            <img src="images/06-校徽-英文組合排列.png" id="logo">

            <div class="d-flex ms-auto d-block d-xl-none">
                <a href="how-to-apply.php" class="btn-bounce fw-semibold mx-5">Apply NOW !</a>
                <a class="btn-no-style" data-bs-toggle="offcanvas" href="#offcanvasNavbar" role="button" aria-controls="offcanvasNavbar">
                    <i class="fas fa-bars text-white"></i>
                </a>
            </div>

            <ul class="navbar-nav ms-auto" id="second-list">
                <div class="mx-5" id="applynow">
                    <a href="how-to-apply.php" class="btn-bounce fw-semibold">Apply NOW !</a>
                </div>
                <li class="nav-item px-2">
                    <a class="nav-link text-white" href="https://bpis.fju.edu.tw/index.php">Fu Jen Global Academy</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link text-white" href="coming-soon.php">Degree Students</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link text-white" href="study-abroad.php">Study Abroad</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link text-white" href="coming-soon.php">Chinese Student</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link text-white" href="coming-soon.php">Enrollment Information</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link text-white" href="contact-us.php">Contact Us</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Sitemap 標題 -->
    <div class="title-container">
        <span class="title">— SITEMAP —</span>
    </div>

    <!-- Sitemap 內容 -->
    <div class="container my-5">
        <div class="grid-container">
            <div class="grid-item">
                <h4 class="card-title">Study Abroad</h4>
                <div class="section-separator"></div>
                <div class="card-body">
                    <p><a href="how-to-apply.php">How to Apply</a></p>
                    <p><a href="program-introduction.php">Program Introduction</a></p>
                    <p><a href="study-package.php">Study Package</a></p>
                    <p><a href="traditional-culture.php#">Traditional Culture</a></p>
                    <p><a href="https://bpis.fju.edu.tw/index.php">Enterprise Visit</a></p>
                    <p><a href="Mandarin-Chinese-Learning.php">Mandarin-Learning</a></p>
                    <p><a href="accommodation.php">Accommodation</a></p>
                    <p><a href="faq.php">FAQ</a></p>
                </div>
            </div>
            <div class="grid-item">
                <h4 class="card-title">Home</h4>
                <div class="section-separator"></div>
                <div class="card-body">
                    <p><a href="how-to-apply.php">How to Apply</a></p>
                    <p><a href="why-FJCU.php">Why FJCU?</a></p>
                    <p><a href="study-abroad.php">Study Abroad</a></p>
                    <p><a href="contact-us.php">Contact Us</a></p>
                    <p><a href="https://bpis.fju.edu.tw/index.php">Fu Jen Global Academy</a></p>
                </div>
            </div>
            <div class="grid-item">
                <!-- 空白區域 1 -->
            </div>
            <div class="grid-item">
                <!-- 空白區域 2 -->
            </div>
            <div class="grid-item">
                <!-- 空白區域 3 -->
            </div>
            <div class="grid-item">
                <!-- 空白區域 4 -->
            </div>
            <div class="grid-item">
                <!-- 空白區域 5 -->
            </div>
            <div class="grid-item">
                <!-- 空白區域 6 -->
            </div>
            <div class="grid-item">
                <!-- 空白區域 7 -->
            </div>
            <div class="grid-item">
                <!-- 空白區域 8 -->
            </div>
            <div class="grid-item">
                <!-- 空白區域 9 -->
            </div>
            <div class="grid-item">
                <!-- 空白區域 10 -->
            </div>
            <div style="height: 200px;"></div>
        </div>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>
