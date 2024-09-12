<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- icon -->
    <link href="../../images/logo.ico" rel="shortcut icon" />

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
    <link rel="stylesheet" href="css/study-package.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/43.0.0/ckeditor5.css">

    <script src="./js/study-package2.js"></script>
    <title>Study Package</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary second-navbar">
        <div class="container-fluid d-flex align-items-center">
            <div class="flex-grow-1 text-center">
                <div class="d-flex justify-content-center align-items-center">
                    <a href="../home.php"><i class="fas fa-arrow-left"></i></a>
                    <span class="navbar-text mx-2">Study Package</span>
                </div>
            </div>
        </div>
    </nav>

    <div class="offcanvas offcanvas-start d-block d-lg-none" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title fs-2 fw-bolder" id="offcanvasNavbarLabel">Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body overflow-y-auto pb-10">
            <div class="list-group" id="list-tab" role="tablist">
                <!-- 動態生成的選單項目將會放在這裡 -->
            </div>
        </div>
    </div>

    <div class="d-flex flex-column">
        <a class="btn-no-style m-2 d-block d-lg-none" data-bs-toggle="offcanvas" href="#offcanvasNavbar" role="button" aria-controls="offcanvasNavbar">
            <i class="fas fa-bars"></i>
        </a>
    </div>

    <div class="d-flex flex-row">
        <div class="sidebar d-none d-lg-block">
            <div class="list-group" id="list-tab" role="tablist">
                    <!-- 動態生成的選單項目將會放在這裡 -->
            </div>
        </div>
        <div class="content">
            <div class="tab-content" id="nav-tabContent">
                <!-- 動態生成的內容將會放在這裡 -->
            </div>
        </div>
    </div>
    <script type="importmap">
        {
            "imports": {
                "ckeditor5": "https://cdn.ckeditor.com/ckeditor5/43.0.0/ckeditor5.js",
                "ckeditor5/": "https://cdn.ckeditor.com/ckeditor5/43.0.0/"
            }
        }
    </script>
    <script type="module" src="./js/ck.js"></script>
</body>
</html>
