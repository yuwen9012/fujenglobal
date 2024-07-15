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

    <!-- JS -->
    <script type="text/javascript" src="js/study-package.js"></script>

    <title>Study Package</title>
</head>
<body>
    <?php include 'header.php'; ?>

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

    <div class="d-flex flex-row">
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
                    <div class="text-block">
                        <span class="justify-text">Chief of Internationalization</span>
                        <span class="justify-text">Mike Ma</span>
                        <span class="justify-text">Tel: 886-2-2905-3099</span>
                        <span class="justify-text">E-mail: 062970@mail.fju.edu.tw</span>
                        <br>
                        <span class="justify-text">Jenny Chen</span>
                        <span class="justify-text">Tel: 886-2-2905-6315</span>
                        <span class="justify-text">E-mail: 407138022@fjuedu.onmicrosoft.com</span>
                    </div>
                </div>

                <div class="tab-pane fade" id="liberal" role="tabpanel" aria-labelledby="liberal-tab">
                    <h3 class="my-3 fw-bolder">College of Liberal Art</h3>

                    <ul class="navbar-nav d-flex flex-row flex-wrap">
                        <li class="nav-item m-1">
                            <a class="nav-link btn" href="#introduction-liberal" data-scroll="true">Introduction</a>
                        </li>
                        <li class="nav-item m-1">
                            <a class="nav-link btn" href="#features-liberal" data-scroll="true">Features</a>
                        </li>
                        <li class="nav-item m-1">
                            <a class="nav-link btn" href="#amsp-liberal" data-scroll="true">Academic Module & Study Package</a>
                        </li>
                        <li class="nav-item m-1">
                            <a class="nav-link btn" href="#csd-liberal" data-scroll="true">Course Structure & Description</a>
                        </li>
                        <li class="nav-item m-1">
                            <a class="nav-link btn" href="#lo-liberal" data-scroll="true">Learning Outcomes</a>
                        </li>
                        <li class="nav-item m-1">
                            <a class="nav-link btn" href="#fi-liberal" data-scroll="true">Faculty Information</a>
                        </li>
                        <li class="nav-item m-1">
                            <a class="nav-link btn" href="#rf-liberal" data-scroll="true">Resources & Facilities</a>
                        </li>
                        <li class="nav-item m-1">
                            <a class="nav-link btn" href="#ow-liberal" data-scroll="true">Office Website</a>
                        </li>
                        <li class="nav-item m-1">
                            <a class="nav-link btn" href="#ci-liberal" data-scroll="true">Contact Information</a>
                        </li>

                        <li class="nav-item ml-auto">
                            <a class="nav-link top" href="#" id="back-to-top"><i class="fas fa-arrow-up"></i></a>
                        </li>
                    </ul>

                    <div id="introduction-liberal">
                        <h4 class="my-3 fw-semibold">Introduction</h4>
                        <span class="justify-text">Fu Jen Catholic University (FJCU) was established in Beijing in 1925 and its College of Liberal Arts was comprised of three departments: Department of Chinese Language, Department of History, and Department of Philosophy. FJCU was re-established in Taipei in 1961 and first set up an Institute of Philosophy. FJCU was then moved to its present site in Xinzhuang in 1963. The Department of Chinese Literature, Department of History and Department Philosophy are under the management of the College of Liberal Arts. In response to social changes and the trend of revitalizing the professional fields of study, since 2010, each department offers Bachelor’s, Master’s and/or Doctoral programs for studying applied Chinese Literature, Applied History, and Philosophical Consulting. The Department of Chinese Literature also plans to offer an interdisciplinary curriculum to provide students with diversified learning opportunities. The College of Liberal Arts also offers Bachelor's degree of Humanities and Community Innovation beginning in 2024. The Department of Chinese Literature offers curriculum of Chinese teaching beside various courses on classical and modern Chinese literature. The Department of History offers courses on Chinese history, Taiwanese history, world history, and public history. The Department of Philosophy provides courses on Chinese and European philosophy. The College of Liberal Arts demonstrates an extraordinary example of merging tradition and innovation.</span>
                    </div>
                    
                    <div id="features-liberal">
                        <h4 class="my-3 fw-semibold">Features</h4>
                        <div class="text-block">
                            <span class="justify-text">The College of Liberal Arts is devoted to the cultivation of liberal spirit, moral ethics and treating people with respect. We encourage students to passionately pursue their academic and career ambitions and to serve society with the professional knowledge that they have acquired here at the College of Liberal Arts. We offer courses on Chinese and western literatures, cultures, philosophy, and history, as well as courses on cultural exchanges between China and the western world.</span>
                            <br>
                            <span class="justify-text">We feature:</span>
                            <ul class="custom-list">
                                <li><span class="fw-bolder">Learning Practical Skills:</span> We emphasize the applied courses, such as applied Chinese, applied history, and philosophical consulting.</li>
                                <li><span class="fw-bolder">Internationalization:</span> We hold variety of international conferences for scholars around the world. Our faculty members attend international conferences worldwide. Our students are encouraged to apply to exchanging student programs.</li>
                                <li><span class="fw-bolder">Professional development:</span> We support and enhance the research works of faculty members and students. We also encourage students to get professional certificates.</li>
                                <li><span class="fw-bolder">Service and Charity:</span> We organize volunteer teams to serve those in need.</li>
                            </ul>
                        </div>
                    </div>

                    <div id="amsp-liberal">
                        <h4 class="my-3 fw-semibold">Academic Module & Study Package</h4>
                        <span class="justify-text">Global Humanities Package:</span>
                        <ul class="custom-list">
                            <li>Global Outlook (EMI course)</li>
                            <li>Diplomatic History of 20th-Century Iran (EMI course)</li>
                            <li>Reading and Discussion of U.S. History (EMI course)</li>
                            <li>Four Books (EMI course)</li>
                        </ul>
                    </div>

                    <div id="csd-liberal">
                        <h4 class="my-3 fw-semibold">Course Structure & Description</h4>
                        <div class="text-block">
                            <span class="justify-text fw-bolder">Collegewide:</span>
                            <span class="justify-text">Global Outlook (EMI course)</span>
                            <span class="justify-text fw-bolder">Department of History:</span>
                            <span class="justify-text">Diplomatic History of 20th-Century Iran (EMI course)</span>
                            <span class="justify-text">Reading and Discussion of U.S. History (EMI course)</span>
                            <span class="justify-text fw-bolder">Department of Chinese Literature:</span>
                            <span class="justify-text">Four Books (EMI course)</span>
                        </div>
                    </div>

                    <div id="lo-liberal">
                        <h4 class="my-3 fw-semibold">Learning Outcomes</h4>
                        <div class="text-block">
                            <span class="justify-text fw-bolder">Department of Chinese Literature</span>
                            <span class="justify-text">To follow the mission of FJCU's holistic education, to strengthen students' knowledge and ability, to cultivate a human-centered spirit, to cultivate talents in Chinese studies, and to cultivate leaders to create new culture.</span>
                            <span class="justify-text fw-bolder">Department of History</span>
                            <span class="justify-text">To carry out the mission that FJCU joins Chinese and Western cultures, to cultivate students' international outlook and global vision, to inspire their independent thinking and research ability, to have a good professional foundation and human centered quality, and to encourage students to serve society and contribute what they have learned.</span>
                            <span class="justify-text fw-bolder">Department of Philosophy</span>
                            <span class="justify-text">To pay equal attention to both Chinese and Western philosophies, to integrate the spirit of Scholasticism, and to enhance the ability of rational reflection and criticism in studying philosophy, to adapt to the situation of modern society and life.</span>
                        </div>
                    </div>

                    <div id="fi-liberal">
                        <h4 class="my-3 fw-semibold">Faculty Information</h4>
                        <div class="text-block">
                            <span class="justify-text">Department of Chinese Literature: 15 full-time teachers</span>
                            <span class="justify-text">Department of History: 14 full-time teachers, including an American professor</span>
                            <span class="justify-text">Department of Philosophy: 12 full-time teachers</span>
                            <br>
                            <span class="justify-text">In the past three years, our faculty members have:</span>
                            <ul class="custom-list">
                                <li>Presented 99 papers at academic conferences.</li>
                                <li>Published 32 articles on academic journals.</li>
                                <li>Published 16 monographs with peer-review.</li>
                                <li>Published 27 articles in monographs with peer-review.</li>
                                <li>Executed 29 research projects funded by National Science and Technology Council.</li>
                                <li>Executed 11 research projects funded by other institutions.</li>
                            </ul>
                        </div>
                    </div>

                    <div id="rf-liberal">
                        <h4 class="my-3 fw-semibold">Resources & Facilities</h4>
                        <div class="text-block">
                            <span class="justify-text">Library and classrooms are the centers of students’ learning experiences. The College of Liberal Arts has an eight-floored library, providing students and faculty members various types of sources, including books, academic journals, magazines, DVDs, CDs, online sources, online databases, and computers.</span>
                            <span class="justify-text">We have eight newly renovated classrooms with touchscreen monitors that enhance students’ learning experiences.</span>
                        </div>
                        <div class="row my-2 gx-4 gy-4">
                            <div class="col-md-4">
                                <img src="images/study-package1.jpg" class="img-fixed-height rounded">
                            </div>
                            <div class="col-md-4">
                                <img src="images/study-package2.jpg" class="img-fixed-height rounded">
                            </div>
                            <div class="col-md-4">
                                <img src="images/study-package3.jpg" class="img-fixed-height rounded">
                            </div>
                        </div>
                    </div>
                    
                    <div id="ow-liberal">
                        <h4 class="my-3 fw-semibold">Office Website</h4>
                        <a href="http://www.la.fju.edu.tw/">http://www.la.fju.edu.tw/</a>
                    </div>

                    <div id="ci-liberal">
                        <h4 class="my-3 fw-semibold">Contact Information</h4>
                        <div class="text-block">
                            <span class="justify-text">College of Liberal Arts, Fu Jen Catholic University No. 510, Zhongzheng Rd., Xinzhuang Dist., New Taipei City 242062, TAIWAN (R.O.C.)</span>
                            <br>
                            <span class="justify-text">Chief of Internationalization</span>
                            <span class="justify-text">Cho-Chien Feng</span>
                            <span class="justify-text">Tel: 886-2-2905-3347</span>
                            <span class="justify-text">E-mail: 154268@mail.fju.edu.tw</span>
                            <br>
                            <span class="justify-text">Secretary, College of Liberal Arts</span>
                            <span class="justify-text">Shiao-chuan Yuan</span>
                            <span class="justify-text">Tel: 886-2-2905-2302</span>
                            <span class="justify-text">E-mail: 045902@mail.fju.edu.tw</span>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="art" role="tabpanel" aria-labelledby="art-tab">
                    <h3 class="my-3 fw-bolder">College of Art</h3>
                    <ul class="navbar-nav d-flex flex-row flex-wrap">
                        <li class="nav-item m-1">
                            <a class="nav-link btn " href="#introduction-art">Introduction</a>
                        </li>
                        <li class="nav-item m-1">
                            <a class="nav-link btn" href="#features-art">Features</a>
                        </li>
                        <li class="nav-item m-1">
                            <a class="nav-link btn" href="#amsp-art">Academic Module & Study Package</a>
                        </li>
                        <li class="nav-item m-1">
                            <a class="nav-link btn" href="#csd-art">Course Structure & Description</a>
                        </li>
                        <li class="nav-item m-1">
                            <a class="nav-link btn" href="#lo-art">Learning Outcomes</a>
                        </li>
                        <li class="nav-item m-1">
                            <a class="nav-link btn" href="#fi-art">Faculty Information</a>
                        </li>
                        <li class="nav-item m-1">
                            <a class="nav-link btn" href="#rf-art">Resources & Facilities</a>
                        </li>
                        <li class="nav-item m-1">
                            <a class="nav-link btn" href="#ow-art">Office Website</a>
                        </li>
                        <li class="nav-item m-1">
                            <a class="nav-link btn" href="#ci-art">Contact Information</a>
                        </li>

                        <!-- <li class="nav-item ml-auto">
                            <a class="nav-link top" href="#" id="back-to-top"><i class="fas fa-arrow-up"></i></a>
                        </li> -->
                    </ul>

                    <div id="introduction-art">
                        <h4 class="my-3 fw-semibold">Introduction</h4>
                        <span class="justify-text">Fu Jen Catholic University (FJCU) was established in Beijing in 1925 and its College of Liberal Arts was comprised of three departments: Department of Chinese Language, Department of History, and Department of Philosophy. FJCU was re-established in Taipei in 1961 and first set up an Institute of Philosophy. FJCU was then moved to its present site in Xinzhuang in 1963. The Department of Chinese Literature, Department of History and Department Philosophy are under the management of the College of Liberal Arts. In response to social changes and the trend of revitalizing the professional fields of study, since 2010, each department offers Bachelor’s, Master’s and/or Doctoral programs for studying applied Chinese Literature, Applied History, and Philosophical Consulting. The Department of Chinese Literature also plans to offer an interdisciplinary curriculum to provide students with diversified learning opportunities. The College of Liberal Arts also offers Bachelor's degree of Humanities and Community Innovation beginning in 2024. The Department of Chinese Literature offers curriculum of Chinese teaching beside various courses on classical and modern Chinese literature. The Department of History offers courses on Chinese history, Taiwanese history, world history, and public history. The Department of Philosophy provides courses on Chinese and European philosophy. The College of Liberal Arts demonstrates an extraordinary example of merging tradition and innovation.</span>
                    </div>
                    
                    <div id="features-art">
                        <h4 class="my-3 fw-semibold">Features</h4>
                        <div class="text-block">
                            <span class="justify-text">The College of Liberal Arts is devoted to the cultivation of liberal spirit, moral ethics and treating people with respect. We encourage students to passionately pursue their academic and career ambitions and to serve society with the professional knowledge that they have acquired here at the College of Liberal Arts. We offer courses on Chinese and western literatures, cultures, philosophy, and history, as well as courses on cultural exchanges between China and the western world.</span>
                            <br>
                            <span class="justify-text">We feature:</span>
                            <ul class="custom-list">
                                <li><span class="fw-bolder">Learning Practical Skills:</span> We emphasize the applied courses, such as applied Chinese, applied history, and philosophical consulting.</li>
                                <li><span class="fw-bolder">Internationalization:</span> We hold variety of international conferences for scholars around the world. Our faculty members attend international conferences worldwide. Our students are encouraged to apply to exchanging student programs.</li>
                                <li><span class="fw-bolder">Professional development:</span> We support and enhance the research works of faculty members and students. We also encourage students to get professional certificates.</li>
                                <li><span class="fw-bolder">Service and Charity:</span> We organize volunteer teams to serve those in need.</li>
                            </ul>
                        </div>
                    </div>

                    <div id="amsp-art">
                        <h4 class="my-3 fw-semibold">Academic Module & Study Package</h4>
                        <span class="justify-text">Global Humanities Package:</span>
                        <ul class="custom-list">
                            <li>Global Outlook (EMI course)</li>
                            <li>Diplomatic History of 20th-Century Iran (EMI course)</li>
                            <li>Reading and Discussion of U.S. History (EMI course)</li>
                            <li>Four Books (EMI course)</li>
                        </ul>
                    </div>

                    <div id="csd-art">
                        <h4 class="my-3 fw-semibold">Course Structure & Description</h4>
                        <div class="text-block">
                            <span class="justify-text fw-bolder">Collegewide:</span>
                            <span class="justify-text">Global Outlook (EMI course)</span>
                            <span class="justify-text fw-bolder">Department of History:</span>
                            <span class="justify-text">Diplomatic History of 20th-Century Iran (EMI course)</span>
                            <span class="justify-text">Reading and Discussion of U.S. History (EMI course)</span>
                            <span class="justify-text fw-bolder">Department of Chinese Literature:</span>
                            <span class="justify-text">Four Books (EMI course)</span>
                        </div>
                    </div>

                    <div id="lo-art">
                        <h4 class="my-3 fw-semibold">Learning Outcomes</h4>
                        <div class="text-block">
                            <span class="justify-text fw-bolder">Department of Chinese Literature</span>
                            <span class="justify-text">To follow the mission of FJCU's holistic education, to strengthen students' knowledge and ability, to cultivate a human-centered spirit, to cultivate talents in Chinese studies, and to cultivate leaders to create new culture.</span>
                            <span class="justify-text fw-bolder">Department of History</span>
                            <span class="justify-text">To carry out the mission that FJCU joins Chinese and Western cultures, to cultivate students' international outlook and global vision, to inspire their independent thinking and research ability, to have a good professional foundation and human centered quality, and to encourage students to serve society and contribute what they have learned.</span>
                            <span class="justify-text fw-bolder">Department of Philosophy</span>
                            <span class="justify-text">To pay equal attention to both Chinese and Western philosophies, to integrate the spirit of Scholasticism, and to enhance the ability of rational reflection and criticism in studying philosophy, to adapt to the situation of modern society and life.</span>
                        </div>
                    </div>

                    <div id="fi-art">
                        <h4 class="my-3 fw-semibold">Faculty Information</h4>
                        <div class="text-block">
                            <span class="justify-text">Department of Chinese Literature: 15 full-time teachers</span>
                            <span class="justify-text">Department of History: 14 full-time teachers, including an American professor</span>
                            <span class="justify-text">Department of Philosophy: 12 full-time teachers</span>
                            <br>
                            <span class="justify-text">In the past three years, our faculty members have:</span>
                            <ul class="custom-list">
                                <li>Presented 99 papers at academic conferences.</li>
                                <li>Published 32 articles on academic journals.</li>
                                <li>Published 16 monographs with peer-review.</li>
                                <li>Published 27 articles in monographs with peer-review.</li>
                                <li>Executed 29 research projects funded by National Science and Technology Council.</li>
                                <li>Executed 11 research projects funded by other institutions.</li>
                            </ul>
                        </div>
                    </div>

                    <div id="rf-art">
                        <h4 class="my-3 fw-semibold">Resources & Facilities</h4>
                        <div class="text-block">
                            <span class="justify-text">Library and classrooms are the centers of students’ learning experiences. The College of Liberal Arts has an eight-floored library, providing students and faculty members various types of sources, including books, academic journals, magazines, DVDs, CDs, online sources, online databases, and computers.</span>
                            <span class="justify-text">We have eight newly renovated classrooms with touchscreen monitors that enhance students’ learning experiences.</span>
                        </div>
                        <div class="row my-2 gx-4 gy-4">
                            <div class="col-md-4">
                                <img src="images/study-package1.jpg" class="img-fixed-height rounded">
                            </div>
                            <div class="col-md-4">
                                <img src="images/study-package2.jpg" class="img-fixed-height rounded">
                            </div>
                            <div class="col-md-4">
                                <img src="images/study-package3.jpg" class="img-fixed-height rounded">
                            </div>
                        </div>
                    </div>
                    
                    <div id="ow-art">
                        <h4 class="my-3 fw-semibold">Office Website</h4>
                        <a href="http://www.la.fju.edu.tw/">http://www.la.fju.edu.tw/</a>
                    </div>

                    <div id="ci-art">
                        <h4 class="my-3 fw-semibold">Contact Information</h4>
                        <div class="text-block">
                            <span class="justify-text">College of Liberal Arts, Fu Jen Catholic University No. 510, Zhongzheng Rd., Xinzhuang Dist., New Taipei City 242062, TAIWAN (R.O.C.)</span>
                            <br>
                            <span class="justify-text">Chief of Internationalization</span>
                            <span class="justify-text">Cho-Chien Feng</span>
                            <span class="justify-text">Tel: 886-2-2905-3347</span>
                            <span class="justify-text">E-mail: 154268@mail.fju.edu.tw</span>
                            <br>
                            <span class="justify-text">Secretary, College of Liberal Arts</span>
                            <span class="justify-text">Shiao-chuan Yuan</span>
                            <span class="justify-text">Tel: 886-2-2905-2302</span>
                            <span class="justify-text">E-mail: 045902@mail.fju.edu.tw</span>
                        </div>
                    </div>
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
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>