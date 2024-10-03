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
    <link rel="stylesheet" href="css/program-introduction.css">

    <!-- JS -->
    <script type="text/javascript" src="js/backdrop.js"></script>
    <script type="text/javascript" src="js/program-introduction.js"></script>

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
                        <a href="javascript:history.back()"><i class="fas fa-arrow-left"></i></a>
                        <span class="navbar-text mx-2">Program Introduction</span>
                    </div>
                </div>
            </div>
        </nav>
        <?php include 'SA-links.php'; ?>

        <div id="content-container"> 

        </div>

        <?php include 'footer.php'; ?>
    </div>
<body>
</html>
