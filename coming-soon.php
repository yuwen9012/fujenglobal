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
    <link rel="stylesheet" href="css/coming-soon.css">
    
    <title>Sitemap</title>
   
</head>
<body>
    <?php include 'header.php'; ?>

    <!-- 選單 -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary second-navbar">
        <div class="container-fluid">
            <a href="home.php"> 
                <img src="images/06-校徽-英文組合排列.png" id="logo">
            </a>
            <ul class="navbar-nav ms-auto" id="second-list">
                <div class="mx-5" id="applynow">
                    <a href="how-to-apply.php" class="btn-bounce fw-semibold">Apply NOW !</a>
                </div>
                <li class="nav-item px-2">
                    <a class="nav-link text-white" href="https://bpis.fju.edu.tw/index.php">Fu Jen Global Academy</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link text-white" href="#">Degree Students</a>
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
                    <a class="nav-link text-white" href="contact-us.php">Contact Us</a>
                </li>
            </ul>
        </div>
    </nav>
   
    <!-- Sitemap 標題 -->
     
    <div class="title-container d-flex flex-column justify-content-center align-items-center text-center">
        <span class="title display-1 display-sm-3 display-md-4 display-lg-5 display-xl-6">— COMING SOON —</span>
    </div>
    
    
    <!-- Sitemap 內容 -->
    

    <?php include 'footer.php'; ?>
</body>
</html>
