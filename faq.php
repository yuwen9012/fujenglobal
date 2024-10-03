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

    <!-- CSS -->
    <link rel="stylesheet" href="css/fixed.css">
    <link rel="stylesheet" href="css/sitemap.css">
    <link rel="stylesheet" href="css/faq.css">

    <!-- JS -->
    <script type="text/javascript" src="js/backdrop.js"></script>
    <script type="text/javascript" src="js/faq.js"></script>

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
                        <span class="navbar-text mx-2">FAQ</span>
                    </div>
                </div>
            </div>
        </nav>
        <?php include 'SA-links.php'; ?>

        <div class="container my-5 content">
            <div class="d-flex justify-content-center my-3" id="ul-link">

            </div>

            <div class="d-flex justify-content-center">
                <div class="input-group align-items-center">
                    <input type="text" class="form-control" id="searchInput" placeholder="Search...">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button" id="searchButton">
                            <i class="fas fa-search"></i>
                        </button>
                        <button class="btn btn-outline-secondary" type="button" id="clearButton">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div id="faqs">

            </div>
        </div>

        <?php include 'footer.php'; ?>
    </div>
</body>
</html>