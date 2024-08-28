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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="css/fixed.css">
    <link rel="stylesheet" href="css/study-package.css">

    <!-- JS -->
    <script type="text/javascript" src="js/study-package.js"></script>

    <title>Fu Jen Global</title>

    <!-- CKEditor -->
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
    <?php include 'header.php'; ?>

    <nav class="navbar navbar-expand-lg bg-body-tertiary second-navbar">
        <div class="container-fluid d-flex align-items-center">
            <img src="images/06-校徽-英文組合排列.png" id="logo" class="me-3">
            
            <div class="flex-grow-1 text-center">
                <div class="d-flex justify-content-center align-items-center">
                    <a href="study-abroad.php"><i class="fas fa-arrow-left"></i></a>
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
                <ul class="navbar-nav justify-content-end">
                    <li class="nav-item fs-5">
                        <a class="list-group-item list-group-item-action active py-3" id="bpis-tab-sm" data-bs-toggle="list" href="#bpis" role="tab" aria-controls="bpis">Fu Jen Global Academy (BPIS)</a>
                    </li>
                    <li class="nav-item fs-5">
                        <a class="list-group-item list-group-item-action py-3" id="liberal-tab-sm" data-bs-toggle="list" href="#liberal" role="tab" aria-controls="liberal">College of Liberal Art</a>
                    </li>
                    <li class="nav-item fs-5">
                        <a class="list-group-item list-group-item-action py-3" id="art-tab-sm" data-bs-toggle="list" href="#art" role="tab" aria-controls="art">College of Art</a>
                        </li>
                    <li class="nav-item fs-5">
                        <a class="list-group-item list-group-item-action py-3" id="communication-tab-sm" data-bs-toggle="list" href="#communication" role="tab" aria-controls="communication">College of Communication</a>
                    </li>
                    <li class="nav-item fs-5">
                        <a class="list-group-item list-group-item-action py-3" id="education-tab-sm" data-bs-toggle="list" href="#education" role="tab" aria-controls="education">College of Education and Sports Health</a>
                    </li>
                    <li class="nav-item fs-5">
                        <a class="list-group-item list-group-item-action py-3" id="medicine-tab-sm" data-bs-toggle="list" href="#medicine" role="tab" aria-controls="medicine">College of Medicine</a>
                    </li>
                    <li class="nav-item fs-5">
                        <a class="list-group-item list-group-item-action py-3" id="engineering-tab-sm" data-bs-toggle="list" href="#engineering" role="tab" aria-controls="engineering">College of Science & Engineering</a>
                    </li>
                    <li class="nav-item fs-5">
                        <a class="list-group-item list-group-item-action py-3" id="foreign-tab-sm" data-bs-toggle="list" href="#foreign" role="tab" aria-controls="foreign">College of Foreign Languages</a>
                    </li>
                    <li class="nav-item fs-5">
                        <a class="list-group-item list-group-item-action py-3" id="ecology-tab-sm" data-bs-toggle="list" href="#ecology" role="tab" aria-controls="ecology">College of Human Ecology</a>
                    </li>
                    <li class="nav-item fs-5">
                        <a class="list-group-item list-group-item-action py-3" id="law-tab-sm" data-bs-toggle="list" href="#law" role="tab" aria-controls="law">College of Law</a>
                    </li>
                    <li class="nav-item fs-5">
                        <a class="list-group-item list-group-item-action py-3" id="social-tab-sm" data-bs-toggle="list" href="#social" role="tab" aria-controls="social">College of Social Science</a>
                    </li>
                    <li class="nav-item fs-5">
                        <a class="list-group-item list-group-item-action py-3" id="management-tab-sm" data-bs-toggle="list" href="#management" role="tab" aria-controls="management">College of Management</a>
                    </li>
                    <li class="nav-item fs-5">
                        <a class="list-group-item list-group-item-action py-3" id="fashion-tab-sm" data-bs-toggle="list" href="#fashion" role="tab" aria-controls="fashion">College of Fashion & Textiles</a>
                    </li>
                </ul>
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
                <a class="list-group-item list-group-item-action active py-3" id="bpis-tab" data-bs-toggle="list" href="#bpis" role="tab" aria-controls="bpis">Fu Jen Global Academy (BPIS)</a>
                <a class="list-group-item list-group-item-action py-3" id="liberal-tab" data-bs-toggle="list" href="#liberal" role="tab" aria-controls="liberal">College of Liberal Art</a>
                <a class="list-group-item list-group-item-action py-3" id="art-tab" data-bs-toggle="list" href="#art" role="tab" aria-controls="art">College of Art</a>
                <a class="list-group-item list-group-item-action py-3" id="communication-tab" data-bs-toggle="list" href="#communication" role="tab" aria-controls="communication">College of Communication</a>
                <a class="list-group-item list-group-item-action py-3" id="education-tab" data-bs-toggle="list" href="#education" role="tab" aria-controls="education">College of Education and Sports Health</a>
                <a class="list-group-item list-group-item-action py-3" id="medicine-tab" data-bs-toggle="list" href="#medicine" role="tab" aria-controls="medicine">College of Medicine</a>
                <a class="list-group-item list-group-item-action py-3" id="engineering-tab" data-bs-toggle="list" href="#engineering" role="tab" aria-controls="engineering">College of Science & Engineering</a>
                <a class="list-group-item list-group-item-action py-3" id="foreign-tab" data-bs-toggle="list" href="#foreign" role="tab" aria-controls="foreign">College of Foreign Languages</a>
                <a class="list-group-item list-group-item-action py-3" id="ecology-tab" data-bs-toggle="list" href="#ecology" role="tab" aria-controls="ecology">College of Human Ecology</a>
                <a class="list-group-item list-group-item-action py-3" id="law-tab" data-bs-toggle="list" href="#law" role="tab" aria-controls="law">College of Law</a>
                <a class="list-group-item list-group-item-action py-3" id="social-tab" data-bs-toggle="list" href="#social" role="tab" aria-controls="social">College of Social Science</a>
                <a class="list-group-item list-group-item-action py-3" id="management-tab" data-bs-toggle="list" href="#management" role="tab" aria-controls="management">College of Management</a>
                <a class="list-group-item list-group-item-action py-3" id="fashion-tab" data-bs-toggle="list" href="#fashion" role="tab" aria-controls="fashion">College of Fashion & Textiles</a>
            </div>
        </div>
        <div class="content">
            <div class="tab-content" id="nav-tabContent">
                <!--<div class="tab-pane fade show active" id="bpis" role="tabpanel" aria-labelledby="bpis-tab">
                    <h3 class="my-3 fw-bolder">Fu Jen Global Academy(BPIS)</h3>
                    <hr>
                    <div class="text-block">
                        <span class="justify-text">Chief of Internationalization</span>
                        <span class="justify-text">Ariana Chang</span>
                        <span class="justify-text">Tel: 886-2-2905-3164</span>
                        <span class="justify-text">E-mail: 140517@mail.fju.edu.tw</span>
                        <br>
                        <span class="justify-text">Melody Chiu</span>
                        <span class="justify-text">Tel: 886-2-2905-6315</span>
                        <span class="justify-text">E-mail: bpis@mail.fju.edu.tw / 161301@mail.fju.edu.tw</span>
                    </div>
                </div>-->
                <?php include 'study-package/bpis.php'; ?>

                <?php include 'study-package/liberal-art.php'; ?>

                <?php include 'study-package/art.php'; ?>

                <?php include 'study-package/communication.php'; ?>

                <?php include 'study-package/education.php'; ?>

                <?php include 'study-package/medicine.php'; ?>

                <?php include 'study-package/engineering.php'; ?>

                <?php include 'study-package/foreign-languages.php'; ?>

                <?php include 'study-package/human-ecology.php'; ?>

                <?php include 'study-package/law.php'; ?>
        
                <?php include 'study-package/social.php'; ?>

                <?php include 'study-package/management.php'; ?>

                <?php include 'study-package/fashion.php'; ?>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>
