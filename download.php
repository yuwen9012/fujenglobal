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
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/download.css">

    <!-- JS -->
    <script type="text/javascript" src="js/menu.js"></script>
    
    <title>Fu Jen Global</title>
   
</head>
<body>
    <?php include 'header.php'; ?>

    <nav class="navbar navbar-expand-lg bg-body-tertiary second-navbar">
        <div class="container-fluid d-flex align-items-center">
            <img src="images/06-校徽-英文組合排列.png" id="logo" class="me-3">
            
            <div class="flex-grow-1 text-center">
                <div class="d-flex justify-content-center align-items-center">
                    <a href="javascript:history.back()"><i class="fas fa-arrow-left"></i></a>
                    <span class="navbar-text mx-2">Download</span>
                </div>
            </div>
        </div>
    </nav>

    <!-- Sitemap 內容 -->
    <div class="container my-5">
        <div class="grid-container">
            <div class="grid-item">
                <h4 class="card-title">Download</h4>
                <div class="section-separator"></div>
                <div class="card-body">
                    <li><a href="download/Application Form.doc">Application Form</a></li>
                    <li><a href="download/Vietnamese students required application documents.docx">Vietnamese students required application documents</a></li>
                    <li><a href="download/Regular Course and Fees.pdf" download>Regular Course and Fees</a></li>
                    <li><a href="download/Application Form Study Tour Group.doc">Application Form Study Tour Group</a></li>
                </div>
            </div>
            <div class="grid-item">
                <h4 class="card-title">For Student</h4>
                <div class="section-separator"></div>
                <div class="card-body">
                    <li><a href="download/Student's Excuse Slip.pdf" download>Student's Excuse Slip</a></li>
                    <li><a href="download/Tuition Fee Refund Application Form.pdf" download>Tuition Fee Refund Application Form</a></li>
                </div>
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
