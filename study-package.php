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
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script> -->

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
                    <a href="study-abroad.php"><i class="fas fa-arrow-left"></i></a>
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
                            <a class="nav-link btn fs-5" href="#introduction-liberal" data-scroll="true">Introduction</a>
                        </li>
                        <li class="nav-item m-1">
                            <a class="nav-link btn fs-5" href="#features-liberal" data-scroll="true">Features</a>
                        </li>
                        <li class="nav-item m-1">
                            <a class="nav-link btn fs-5" href="#amsp-liberal" data-scroll="true">Academic Module & Study Package</a>
                        </li>
                        <li class="nav-item m-1">
                            <a class="nav-link btn fs-5" href="#csd-liberal" data-scroll="true">Course Structure & Description</a>
                        </li>
                        <li class="nav-item m-1">
                            <a class="nav-link btn fs-5" href="#lo-liberal" data-scroll="true">Learning Outcomes</a>
                        </li>
                        <li class="nav-item m-1">
                            <a class="nav-link btn fs-5" href="#fi-liberal" data-scroll="true">Faculty Information</a>
                        </li>
                        <li class="nav-item m-1">
                            <a class="nav-link btn fs-5" href="#rf-liberal" data-scroll="true">Resources & Facilities</a>
                        </li>
                        <li class="nav-item m-1">
                            <a class="nav-link btn fs-5" href="#ow-liberal" data-scroll="true">Office Website</a>
                        </li>
                        <li class="nav-item m-1">
                            <a class="nav-link btn fs-5" href="#ci-liberal" data-scroll="true">Contact Information</a>
                        </li>

                        <li class="nav-item ml-auto">
                            <a class="nav-link top back-to-top" href="#"><i class="fas fa-arrow-up"></i></a>
                        </li>
                    </ul>

                    <div id="introduction-liberal">
                        <h4 class="my-3 fw-semibold">Introduction</h4>

                        <div class="row align-items-start">
                            <div class="col-md-6 justify-text">
                                <span>Fu Jen Catholic University (FJCU) was established in Beijing in 1925 and its College of Liberal Arts was comprised of three departments: Department of Chinese Language, Department of History, and Department of Philosophy. FJCU was re-established in Taipei in 1961 and first set up an Institute of Philosophy. FJCU was then moved to its present site in Xinzhuang in 1963.</span>
                                <span class="collapse" id="collapseExample"> The Department of Chinese Literature, Department of History and Department Philosophy are under the management of the College of Liberal Arts. In response to social changes and the trend of revitalizing the professional fields of study, since 2010, each department offers Bachelor’s, Master’s and/or Doctoral programs for studying applied Chinese Literature, Applied History, and Philosophical Consulting. The Department of Chinese Literature also plans to offer an interdisciplinary curriculum to provide students with diversified learning opportunities. The College of Liberal Arts also offers Bachelor's degree of Humanities and Community Innovation beginning in 2024. The Department of Chinese Literature offers curriculum of Chinese teaching beside various courses on classical and modern Chinese literature. The Department of History offers courses on Chinese history, Taiwanese history, world history, and public history. The Department of Philosophy provides courses on Chinese and European philosophy. The College of Liberal Arts demonstrates an extraordinary example of merging tradition and innovation.</span>
                                <a id="read-more-link" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Read more...</a>
                            </div>
                            <div class="col-md-6">
                                <img src="images/study-package3.jpg" class="container-fluid">
                            </div>
                        </div>

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
                            <a class="nav-link btn" href="#introduction-art" data-scroll="true">Introduction</a>
                        </li>
                        <li class="nav-item m-1">
                            <a class="nav-link btn" href="#features-art" data-scroll="true">Features</a>
                        </li>
                        <li class="nav-item m-1">
                            <a class="nav-link btn" href="#amsp-art" data-scroll="true">Academic Module & Study Package</a>
                        </li>
                        <li class="nav-item m-1">
                            <a class="nav-link btn" href="#csd-art" data-scroll="true">Course Structure & Description</a>
                        </li>
                        <li class="nav-item m-1">
                            <a class="nav-link btn" href="#lo-art" data-scroll="true">Learning Outcomes</a>
                        </li>
                        <li class="nav-item m-1">
                            <a class="nav-link btn" href="#fi-art" data-scroll="true">Faculty Information</a>
                        </li>
                        <li class="nav-item m-1">
                            <a class="nav-link btn" href="#rf-art" data-scroll="true">Resources & Facilities</a>
                        </li>
                        <li class="nav-item m-1">
                            <a class="nav-link btn" href="#ow-art" data-scroll="true">Office Website</a>
                        </li>
                        <li class="nav-item m-1">
                            <a class="nav-link btn" href="#ci-art" data-scroll="true">Contact Information</a>
                        </li>

                        <li class="nav-item ml-auto">
                            <a class="nav-link top back-to-top" href="#"><i class="fas fa-arrow-up"></i></a>
                        </li>
                    </ul>

                    <div id="introduction-art">
                        <h4 class="my-3 fw-semibold">Introduction</h4>
                        <span class="justify-text">The College of Arts is dedicated to providing a holistic education that emphasizes character development and upholds the values of human dignity and life. Our focus on character education encourages academic and religious freedom and promotes truth to benefit society. Through in-depth teaching and research in art professional knowledge, we aim to enhance practical skills, integrate science, technology, and humanities, and foster innovative thinking. In addition to teaching and learning, we encourage teachers and students to engage in social, cultural, and artistic service work to fulfill their social responsibilities and promote a spirit of compassion. We also prioritize positive interaction and balanced development among teachers, students, and employees to strengthen our collective abilities and contribute to society. Our college offers comprehensive programs in performing arts–Department of Music, visual arts–Department of Applied Arts, and environmental art–Department of Landscape Architecture), providing a high-quality learning environment. Our dedicated teachers possess deep knowledge and practical experience and are committed to nurturing art professionals who will contribute to social and cultural progress, ultimately enhancing the nation's quality of life and artistic expression.</span>
                    </div>
                    
                    <div id="features-art">
                        <h4 class="my-3 fw-semibold">Features</h4>
                        <span class="justify-text">The College of Arts at Fu Jen Catholic University seamlessly integrates the beauty of art across its three departments: Music, Applied Art, and Landscape Architecture. Its impact extends from the local community to the global stage, with numerous accolades in the international art scene. As we look to the future, the convergence of art therapy and artificial intelligence will play an essential role in human life, fostering boundless creativity and innovation in the development of the metaverse.</span>
                    </div>

                    <div id="amsp-art">
                        <h4 class="my-3 fw-semibold">Academic Module & Study Package</h4>
                        <ul class="custom-list">
                            <li class="fs-6 fw-semibold">Department of Music</li>
                            <ol>
                                <li>Broad Specialization in Music Disciplines</li>
                                <li>Instrumental Mastery</li>
                                <li>Classical Music Performance</li>
                                <li>Music Therapy</li>
                                <li>Digital Music and Technology</li>
                                <li>Jazz Music</li>
                                <li>Arts Management</li>
                                <li>Music Theory</li>
                            </ol>
                            <li class="fs-6 fw-semibold">Department of Applied Art</li>
                            <ol>
                                <li>Module of Visual Communication</li>
                                <li>Module of Computer Animation</li>
                                <li>Module of Metalworking Product</li>
                                <li>Module of Interior Design</li>
                            </ol>
                            <li class="fs-6 fw-semibold">Department of Landscape Architecture</li>
                        </ul>
                    </div>

                    <div id="csd-art">
                        <h4 class="my-3 fw-semibold">Course Structure & Description</h4>
                        <ul class="custom-list">
                            <li class="fs-6 fw-semibold">Department of Music</li>
                            <ol>
                                <li>Music Theory and Analysis</li>
                                <li>Jazz</li>
                                <li>Applied Commercial Music</li>
                                <li>Music History</li>
                                <li>Ethnomusicology Series Class in English</li>
                                <li>English for Music Performance and Presentation</li>
                                <li>Academic Writing and Research Methodologies</li>
                                <li>Professional Development and Industry Practices</li>
                            </ol>
                            <li class="fs-6 fw-semibold">Department of Applied Art</li>
                            <ol>
                                <li>Art Theory and Analysis in English</li>
                                <li>English for Art Presentation and Critique</li>
                                <li>Academic Writing and Research Methodologies</li>
                                <li>Art History and Criticism</li>
                                <li>Professional Development and Industry Practices</li>
                            </ol>
                            <li class="fs-6 fw-semibold">Department of Landscape Architecture</li>
                            <ol>
                                <li>Landscape Theory and Analysis in English</li>
                                <li>English for Landscape Presentation and Critique</li>
                                <li>Academic Writing and Research Methodologies</li>
                                <li>Environmental Design and Planning</li>
                                <li>Professional Development and Industry Practices</li>
                            </ol>
                        </ul>
                    </div>

                    <div id="lo-art">
                        <h4 class="my-3 fw-semibold">Learning Outcomes</h4>
                        <ul class="custom-list">
                            <li class="fs-6 fw-semibold">Department of Music</li>
                            <div class="text-block">
                                <span class="justify-text">Music department aims to cultivate highly professional and internationally competitive music talents. We invited international and dedicated full-time faculty members to achieve this goal. Having top musicians and educators from around the world enhances the quality of teaching and brings a blend of different cultural backgrounds and music styles, further broadening the students' horizons.</span>
                                <span class="justify-text">Diversity has been emphasized in curriculum design, covering a wide range of music forms from classical to contemporary. Classical music is the foundation of music education, allowing students to acquire solid music theory and techniques. Meanwhile, courses on modern music therapy and commercial digital music applications enable students to understand the broad applications of music in contemporary society. Music therapy courses teach students how to use music to promote mental health and related treatment, while digital music application courses equip them with the skills to apply digital technology in music creation and commercial uses, offering more career options for their future.</span>
                                <span class="justify-text">Moreover, diverse English courses are crucial for cultivating international music talents. Frequent international music exchanges empowered students’ command of English, allowing them to participate in international competitions and exchange programs more easily and exposing them to the latest international music information and research findings. English courses include learning professional music terminology and reading and writing music literature, helping students to perform confidently on the international stage.</span>
                                <span class="justify-text">The department regularly organizes concerts, workshops, and masterclasses to enhance students' performance and creation abilities. These activities allow students to showcase themselves and directly interact with industry experts, gaining valuable experience. Through practical performance and creative exercises, students can better understand the essence of music and improve their artistic accomplishment.</span>
                                <span class="justify-text">Finally, the music department should actively expand cooperation with internationally renowned music academies and institutions, launching exchange programs and joint research projects. This not only boosts the department's international reputation but also provides students with more learning and development opportunities. Through these collaborations, students can access richer educational resources and practical experiences, further enhancing their international competitiveness.</span>
                            </div>
                            <li class="fs-6 fw-semibold">Department of Applied Art</li>
                            <div class="text-block">
                                <span class="justify-text">The Department of Applied Arts was established under the College of Art at Fu Jen Catholic University in 1984. It was Taiwan's first applied arts department. Since 1990, the competency test requirements have been canceled to attract students from diverse backgrounds, particularly high school and vocational high school students interested in design, providing them with more educational opportunities.</span>
                                <span class="justify-text">Starting in 1991, the department categorized students into four groups during their sophomore year: computer animation, metalworking product, visual communication, and interior design. This move has made our department the most diversified and rich in terms of courses offered. Students select their major from one of these groups and can take other courses as supplements.</span>
                                <span class="justify-text">The department focuses on high-quality small-class teaching and boasts expert faculty in both academic and design fields. We provide excellent teaching and activity environments and facilities. In 2001, the Graduate Program of Fine Arts was established to enhance the research and development quality of the department and to establish a profound academic design basis. It has been enrolling new students since 2002.</span>
                                <span class="justify-text">Our graduate program, an extension of the university program's four majors, combines theory and creation courses. We aim for this program to become the best in the Taipei metropolitan area and to eventually achieve international recognition.</span>
                                <span class="justify-text">In 2010, the Evening Division of the bachelor's degree program of the Department of Fine Arts was established to support the university's multiplex development and its mission to provide a lifelong learning environment. In the sophomore year, students are divided into four tracks: Computer Animation, Visual Communication, Metalworking Product, and Interior Design. In 2013, due to curriculum reform, students in the Evening Division will only be divided into two tracks, Visual Communication and Metalworking Product, based on their individual interests in the sophomore year. Students experience diverse and rich courses and present their learning outcomes in the final graduation project.</span>
                                <ol>
                                    <li>Strengthening humanity's respect and moral ethics: cultivating design talents with outstanding skills and good characteristics.</li>
                                    <li>Cultivating academic profession and creative thinking inspires students’ imagination and creativity and encourages innovative attempts and exploration of new thinking.</li>
                                    <li>Integrating design theories and practice: strengthening the perfect combination of technology and humanity through both theories and practice.</li>
                                    <li>Cultivating local cultures and broadening international vision: inspiring students’ care for local cultures and cultivating their international vision and design concept.</li>
                                    <li>Advocating group work and industry-academic cooperation: cultivating effective communication and interaction ability, balanced group-individual relationships, generating excellent team power, and contributing to society.</li>
                                </ol>
                            </div>
                            <li class="fs-6 fw-semibold">Department of Landscape Architecture</li>
                            <div class="text-block">
                                <span class="justify-text">Fu Jen Catholic University established the College of Arts in 1984, and the Department of Landscape Architecture was formally established in 1989. In 2002, the department also started offering a master's degree program. The first head of the department was the renowned landscape architect Professor Ming-Chou Lai. Subsequent heads of the department have included Professor Yan-Jing Chen (1992.8-1998.7), Professor De-Huei Chang (1998.8-2004.7), Professor Ching-Lieh Chang (2004.8-2007.7), Professor Mei-Hsiu Yeh (2007.8-2010.7), Professor Hsiu-Chuan Wang (2010.8-2016.7), and Professor Liang-Yi Yen (2016.8-2022.7). The current head is Professor Wen-Shan Huang (2023.8-present). Each of the heads has had a specialized background in various fields, including landscape, architecture, urban planning, horticulture, and art, contributing to the diversity and richness of professional teaching within the department.</span>
                                <span class="justify-text">Located in the College of Arts Building, the department enjoys sufficient teaching space and equipment. Supported by Fu Jen Catholic University's excellent academic atmosphere and resources, the faculty's teaching and research, as well as students' learning performance, have maintained a high level. As a result, the admission standards and enrollment rates have been consistently high. Starting from the 101 academic year, the department began to admit international students (both bachelor's and master's programs). The undergraduate program takes four years to complete, requiring students to complete 132 credits of required and elective courses and pass the graduation design to obtain a Bachelor of Fine Arts degree. The master's program takes two years to complete, requiring students to complete 34 credits of required and elective courses and pass the thesis defense to obtain a Master's degree.</span>
                            </div>
                        </ul>
                    </div>

                    <div id="fi-art">
                        <h4 class="my-3 fw-semibold">Faculty Information</h4>
                        <span class="justify-text">TBA</span>
                    </div>

                    <div id="rf-art">
                        <h4 class="my-3 fw-semibold">Resources & Facilities</h4>
                        <ul class="custom-list">
                            <li class="fs-6 fw-semibold">Department of Music</li>
                            <ol>
                                <li>Huairen Hall</li>
                                <div class="text-block">
                                    <span class="justify-text">The art building was completed in the 76th year of the Republic of China. It has the "Huairen Hall" that can accommodate 200 people and the "Huaide Hall" that can accommodate 150 people. There are also 60 classrooms and practice rooms (including single pianos, double pianos, indoor Music practice room; both use a platform to play piano). In addition to a large CF piano and a Steinway D-274 piano, there are also harpsichords and 19th-century Steinway pianos. Each classroom and practice room has good sound insulation and air-conditioning equipment.</span>
                                    <span class="justify-text">All orchestra practice rooms, percussion practice rooms, choral lecture theaters, comprehensive chamber music classrooms, audio-visual classrooms and audio-visual libraries (including audio tapes, video tapes, CD records, DVDs, CDs, DVDs and other music audio materials and audio-visual equipment for teachers The software and hardware facilities in professional halls such as the Father Li Zhenbang Memorial Library (including music collections, music scores and various music periodicals), electronic music classrooms, and comprehensive classrooms are complete and have first-class international standards.</span>
                                    <span class="justify-text">The campus of Fuzhou University is full of flowers and trees and is full of greenery. The school has well-equipped dormitories, various ball games and sports venues (including international-class heated swimming pools and gymnasiums), all open to students. In addition, the rich community activities on campus provide students with diverse group life needs after school.</span>
                                </div>
                                <li>Digital music Studio</li>
                                <span class="justify-text">In the 1977 academic year, this department established the first electronic music professional classroom among music departments in the country. In response to the trend of the times, it provides students with music technology-related courses and allows students to early understand creative techniques that meet the needs of the industry. In recent years, no expense has been spared to purchase and upgrade relevant software and hardware equipment one by one to strengthen the teaching environment in this field. In addition to "Electronic Music" courses, the Electronic Music Classroom also provides "Basic Notation and Computer Applications", "Advanced Notation and Commercial Arranging", "Recording and Digital Collection", "Commercial Recording Project", and "Advanced Digital Music" Used in courses such as "Production and Distribution" and "Sound Design and Sound Engineering".</span>
                                <li>Huaide Hall</li>
                                <li>Practice room</li>
                                <li>Percussion practice room</li>
                                <li>Choirroom</li>
                                <li>Ensemble Classroom</li>
                                <li>Audio-visual classroom</li>
                            </ol>
                            <li class="fs-6 fw-semibold">Department of Applied Art</li>
                            <div class="text-block">
                                <span class="justify-text">TBA</span>
                            </div>
                            <li class="fs-6 fw-semibold">Department of Landscape Architecture</li>
                        </ul>
                    </div>
                    
                    <div id="ow-art">
                        <h4 class="my-3 fw-semibold">Office Website</h4>
                        <a href="https://www.finearts.fju.edu.tw/zh/index.html">https://www.finearts.fju.edu.tw/zh/index.html</a>
                    </div>

                    <div id="ci-art">
                        <h4 class="my-3 fw-semibold">Contact Information</h4>
                        <div class="text-block">
                            <span class="justify-text">No.510, Zhongzheng Rd., Xinzhuang Dist., New Taipei City 242062, Taiwan</span>
                            <span class="justify-text">TEL: 886-2-2905-2361, 2905-3247</span>
                            <br>
                            <span class="justify-text">Chief of Internationalization</span>
                            <span class="justify-text">Wuan-Chin Li</span>
                            <span class="justify-text">Tel: 886-2-2905-6706</span>
                            <span class="justify-text">E-mail: 130073@mail.fju.edu.tw</span>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="communication" role="tabpanel" aria-labelledby="communication-tab">
                    <h3 class="my-3 fw-bolder">College of Communication</h3>
                    <hr>
                    <div class="text-block">
                        <span class="justify-text">Chief of Internationalization</span>
                        <span class="justify-text">Jocelyn Yi-Hsuan Lai</span>
                        <span class="justify-text">Tel: 886-2-2905-3353</span>
                        <span class="justify-text">E-mail: yihlai@gmail.com</span>
                    </div>
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