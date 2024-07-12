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
    <link rel="stylesheet" href="css/study-package.css">

    <title>Study Package</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
                
            <div class="navbar-nav ms-auto d-flex align-items-center">
                <div class="nav-item d-flex align-items-center me-3">
                    <i class="fas fa-home me-1"></i>
                    <a class="nav-link" href="#">Home</a>
                </div>
                <div class="nav-item d-flex align-items-center me-3">
                    <i class="fas fa-language me-1"></i>
                    <a class="nav-link" href="#">Lang</a>
                </div>
                <div class="nav-item d-flex align-items-center me-3">
                    <i class="fas fa-university me-1"></i>
                    <a class="nav-link" href="#">FJCU</a>
                </div>
                <div class="nav-item d-flex align-items-center me-3">
                    <i class="fas fa-sitemap me-1"></i>
                    <a class="nav-link" href="#">Sitemap</a>
                </div>
            </div>

        </div>
    </nav>
    
    <nav class="navbar navbar-expand-lg bg-body-tertiary second-navbar">
        <div class="container-fluid d-flex align-items-center">
            <img src="images/06-校徽-英文組合排列.png" id="logo" class="me-3">
            
            <div class="flex-grow-1 text-center">
                <div class="d-flex justify-content-center align-items-center">
                    <a href="home.php"><i class="fas fa-arrow-left"></i></a>
                    <span class="navbar-text mx-2">Study Package</span>
                </div>
            </div>
        </div>
    </nav>


    <div class="sidebar">
        <div class="list-group" id="list-tab" role="tablist">
            <a class="list-group-item list-group-item-action active py-3" id="bpis-tab" data-bs-toggle="list" href="#bpis" role="tab" aria-controls="bpis">Fu Jen Global Academy (BPIS)</a>
            <a class="list-group-item list-group-item-action py-3" id="liberal-tab" data-bs-toggle="list" href="#liberal" role="tab" aria-controls="liberal">College of Liberal Art</a>
            <a class="list-group-item list-group-item-action py-3" id="art-tab" data-bs-toggle="list" href="#art" role="tab" aria-controls="art">College of Art</a>
            <a class="list-group-item list-group-item-action py-3" id="communication-tab" data-bs-toggle="list" href="#communication" role="tab" aria-controls="communication">College of Communication</a>
            <a class="list-group-item list-group-item-action py-3" id="education-tab" data-bs-toggle="list" href="#education" role="tab" aria-controls="education">College of Education</a>
            <a class="list-group-item list-group-item-action py-3" id="medicine-tab" data-bs-toggle="list" href="#medicine" role="tab" aria-controls="medicine">College of Medicine</a>
            <a class="list-group-item list-group-item-action py-3" id="engineering-tab" data-bs-toggle="list" href="#engineering" role="tab" aria-controls="engineering">College of Science & Engineering</a>
            <a class="list-group-item list-group-item-action py-3" id="foreign-tab" data-bs-toggle="list" href="#foreign" role="tab" aria-controls="foreign">College of Foreign Languages</a>
            <a class="list-group-item list-group-item-action py-3" id="ecology-tab" data-bs-toggle="list" href="#ecology" role="tab" aria-controls="ecology">College of Human Ecology</a>
            <a class="list-group-item list-group-item-action py-3" id="law-tab" data-bs-toggle="list" href="#law" role="tab" aria-controls="law">College of Law</a>
            <a class="list-group-item list-group-item-action py-3" id="social-tab" data-bs-toggle="list" href="#social" role="tab" aria-controls="social">College of Social Science</a>
            <a class="list-group-item list-group-item-action py-3" id="management-tab" data-bs-toggle="list" href="#management" role="tab" aria-controls="management">College of Management</a>
            <a class="list-group-item list-group-item-action py-3" id="fasion-tab" data-bs-toggle="list" href="#fasion" role="tab" aria-controls="fasion">College of Fashion & Textiles</a>
        </div>
    </div>
    <div class="content">
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="bpis" role="tabpanel" aria-labelledby="bpis-tab">
                <h3 class="my-3 fw-bolder">Fu Jen Global Academy(BPIS)</h3>
                <hr>
            </div>
            <div class="tab-pane fade" id="liberal" role="tabpanel" aria-labelledby="liberal-tab">
                <h3 class="my-3 fw-bolder">College of Liberal Art</h3>
                <hr>
                <h4 class="my-3 fw-semibold">Introduction</h4>
                <span class="justify-text">Fu Jen Catholic University (FJCU) was established in Beijing in 1925 and its College of Liberal Arts was comprised of three departments: Department of Chinese Language, Department of History, and Department of Philosophy. FJCU was re-established in Taipei in 1961 and first set up an Institute of Philosophy. FJCU was then moved to its present site in Xinzhuang in 1963. The Department of Chinese Literature, Department of History and Department Philosophy are under the management of the College of Liberal Arts. In response to social changes and the trend of revitalizing the professional fields of study, since 2010, each department offers Bachelor’s, Master’s and/or Doctoral programs for studying applied Chinese Literature, Applied History, and Philosophical Consulting. The Department of Chinese Literature also plans to offer an interdisciplinary curriculum to provide students with diversified learning opportunities. The College of Liberal Arts also offers Bachelor's degree of Humanities and Community Innovation beginning in 2024. The Department of Chinese Literature offers curriculum of Chinese teaching beside various courses on classical and modern Chinese literature. The Department of History offers courses on Chinese history, Taiwanese history, world history, and public history. The Department of Philosophy provides courses on Chinese and European philosophy. The College of Liberal Arts demonstrates an extraordinary example of merging tradition and innovation.</span>
                <h4 class="my-3 fw-semibold">Features</h4>
                <h4 class="my-3 fw-semibold">Academic Module & Study Package</h4>
                <h4 class="my-3 fw-semibold">Course Structure and Description</h4>
                <h4 class="my-3 fw-semibold">Learning Outcomes</h4>
                <h4 class="my-3 fw-semibold">Resources and Facilities</h4>
                <span class="justify-text">Library and classrooms are the centers of students’ learning experiences. The College of Liberal Arts has an eight-floored library, providing students and faculty members various types of sources, including books, academic journals, magazines, DVDs, CDs, online sources, online databases, and computers. We have eight newly renovated classrooms with touchscreen monitors that enhance students’ learning experiences.</span>
                <h4 class="my-3 fw-semibold">Office Website</h4>
                <a href="http://www.la.fju.edu.tw/">http://www.la.fju.edu.tw/</a>
                <h4 class="my-3 fw-semibold">Contact Information</h4>
                <span>College of Liberal Arts, Fu Jen Catholic University No. 510, Zhongzheng Rd., Xinzhuang Dist., New Taipei City 242062, TAIWAN (R.O.C.)</span>
                <span>
                    Chief of Internationalization
                    Cho-Chien Feng
                    Tel: 886-2-2905-3347
                    E-mail: 154268@mail.fju.edu.tw

                    Secretary, College of Liberal Arts
                    Shiao-chuan Yuan
                    Tel: 886-2-2905-2302
                    E-mail: 045902@mail.fju.edu.tw
                </span>
            </div>
            <div class="tab-pane fade" id="art" role="tabpanel" aria-labelledby="art-tab">
                <h3 class="my-3 fw-bolder">College of Art</h3>
                <hr>
            </div>
            <div class="tab-pane fade" id="communication" role="tabpanel" aria-labelledby="communication-tab">
                <h3 class="my-3 fw-bolder">College of Communication</h3>
                <hr>
            </div>
            <div class="tab-pane fade" id="education" role="tabpanel" aria-labelledby="education-tab">
                <h3 class="my-3 fw-bolder">College of Education</h3>
                <hr>
            </div>
            <div class="tab-pane fade" id="medicine" role="tabpanel" aria-labelledby="medicine-tab">
                <h3 class="my-3 fw-bolder">College of Medicine</h3>
                <hr>
            </div>
            <div class="tab-pane fade" id="engineering" role="tabpanel" aria-labelledby="engineering-tab">
                <h3 class="my-3 fw-bolder">College of Science & Engineering</h3>
                <hr>
            </div>
            <div class="tab-pane fade" id="foreign" role="tabpanel" aria-labelledby="foreign-tab">
                <h3 class="my-3 fw-bolder">College of Foreign Languages</h3>
                <hr>
            </div>
            <div class="tab-pane fade" id="ecology" role="tabpanel" aria-labelledby="ecology-tab">
                <h3 class="my-3 fw-bolder">College of Human Ecology</h3>
                <hr>
            </div>
            <div class="tab-pane fade" id="law" role="tabpanel" aria-labelledby="law-tab">
                <h3 class="my-3 fw-bolder">College of Law</h3>
                <hr>
            </div>
            <div class="tab-pane fade" id="social" role="tabpanel" aria-labelledby="social-tab">
                <h3 class="my-3 fw-bolder">College of Social Science</h3>
                <hr>
            </div>
            <div class="tab-pane fade" id="management" role="tabpanel" aria-labelledby="management-tab">
                <h3 class="my-3 fw-bolder">College of Management</h3>
                <hr>
            </div>
            <div class="tab-pane fade" id="fasion" role="tabpanel" aria-labelledby="fasion-tab">
                <h3 class="my-3 fw-bolder">College of Fashion & Textiles</h3>
                <hr>
            </div>
        </div>
    </div>

</body>
</html>