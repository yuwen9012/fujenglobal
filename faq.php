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
    <link rel="stylesheet" href="css/faq.css">

    <!-- JS -->
    <script type="text/javascript" src="js/faq.js"></script>

    <title>FAQ</title>
</head>
<body>
    <?php include 'header.php'; ?>

    <nav class="navbar navbar-expand-lg bg-body-tertiary second-navbar">
        <div class="container-fluid d-flex align-items-center">
            <img src="images/06-校徽-英文組合排列.png" id="logo" class="me-3">
            
            <div class="flex-grow-1 text-center">
                <div class="d-flex justify-content-center align-items-center">
                    <a href="study-abroad.php"><i class="fas fa-arrow-left"></i></a>
                    <span class="navbar-text mx-2">FAQ</span>
                </div>
            </div>
        </div>
    </nav>

    <div class="container my-5 content">
        <div class="d-flex justify-content-center my-3">
            <ul class="navbar-nav d-flex flex-row flex-wrap">
                <li class="nav-item m-1">
                    <a class="nav-link btn fs-5" href="#units" data-scroll="true">Choose your units</a>
                </li>
                <li class="nav-item m-1">
                    <a class="nav-link btn fs-5" href="#application" data-scroll="true">Application</a>
                </li>
                <li class="nav-item m-1">
                    <a class="nav-link btn fs-5" href="#enter" data-scroll="true">Before Enter Taiwan</a>
                </li>
                <li class="nav-item m-1">
                    <a class="nav-link btn fs-5" href="#live" data-scroll="true">Live in Taiwan</a>
                </li>
                <li class="nav-item m-1">
                    <a class="nav-link btn fs-5" href="#contact" data-scroll="true">Contact us</a>
                </li>

                <li class="nav-item ml-auto">
                    <a class="nav-link top back-to-top" href="#"><i class="fas fa-arrow-up"></i></a>
                </li>
            </ul>
        </div>

        <!-- <input type="text" class="form-control" id="searchInput" placeholder="Search..."> -->
        <div class="d-flex justify-content-center">
            <div class="input-group align-items-center">
                <input type="text" class="form-control" id="searchInput" placeholder="Search...">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button" id="searchButton"><i class="fas fa-search"></i></button>
                    <!-- <button class="btn btn-outline-secondary" type="button" id="clearButton">Clear</button> -->
                </div>
            </div>
        </div>

        <div class="my-3 w-" id="units">
            <p class="fs-2 fw-bolder">Choose your units</p>
            <div class="accordion accordion-flush" id="accordionFlushFAQSect1">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-sect1-1" aria-expanded="false" aria-controls="flush-collapse-sect1-1">
                            What is the “Study Package”?
                        </button>
                    </h2>
                    <div id="flush-collapse-sect1-1" class="accordion-collapse collapse" data-bs-parent="#accordionFlushFAQSect1">
                        <div class="accordion-body">
                            Our Study Abroad Program provides limitless self-selection opportunity. Feel free to choose any course you want flexibly and learn whatever you like at FJCU for only half the average tuition fee.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-sect1-2" aria-expanded="false" aria-controls="flush-collapse-sect1-2">
                            Which Study Package should I choose?
                        </button>
                    </h2>
                    <div id="flush-collapse-sect1-2" class="accordion-collapse collapse" data-bs-parent="#accordionFlushFAQSect1">
                        <div class="accordion-body">
                            Please refer <a href="study-package.php">Study Package</a>, find the package that suits you best.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="my-3" id="application">
            <p class="fs-2 fw-bolder">Application</p>
            <div class="accordion accordion-flush" id="accordionFlushFAQSect2">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-sect2-1" aria-expanded="false" aria-controls="flush-collapse-sect2-1">
                            What are the costs?
                        </button>
                    </h2>
                    <div id="flush-collapse-sect2-1" class="accordion-collapse collapse" data-bs-parent="#accordionFlushFAQSect2">
                        <div class="accordion-body">
                            Registration fee - USD 150 ；Program fee - USD 3,500
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-sect2-2" aria-expanded="false" aria-controls="flush-collapse-sect2-2">
                            How do I apply for the Study Abroad Program?
                        </button>
                    </h2>
                    <div id="flush-collapse-sect2-2" class="accordion-collapse collapse" data-bs-parent="#accordionFlushFAQSect2">
                        <div class="accordion-body">
                            Please refer <a href="how-to-apply.php">How to apply</a>.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-sect2-3" aria-expanded="false" aria-controls="flush-collapse-sect2-3">
                            What are the application deadlines?
                        </button>
                    </h2>
                    <div id="flush-collapse-sect2-3" class="accordion-collapse collapse" data-bs-parent="#accordionFlushFAQSect2">
                        <div class="accordion-body">
                            Visit our deadlines and decisions page to learn more about our application deadlines.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-sect2-4" aria-expanded="false" aria-controls="flush-collapse-sect2-4">
                            What is the deadline of submitting documents?
                        </button>
                    </h2>
                    <div id="flush-collapse-sect2-4" class="accordion-collapse collapse" data-bs-parent="#accordionFlushFAQSect2">
                        <div class="accordion-body">
                            Early Decision Deadline: November 1
                            Regular Decision Deadline: January 1
                            Visit our deadlines and decisions page to learn more about our application deadlines.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-sect2-5" aria-expanded="false" aria-controls="flush-collapse-sect2-5">
                            What documents should I submit for the application?
                        </button>
                    </h2>
                    <div id="flush-collapse-sect2-5" class="accordion-collapse collapse" data-bs-parent="#accordionFlushFAQSect2">
                        <div class="accordion-body">
                            A detailed list of what is necessary, whether you are a high school, transfer, or international student, can be found on our application information page.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-sect2-6" aria-expanded="false" aria-controls="flush-collapse-sect2-6">
                            How do I know if my application is being processed?
                        </button>
                    </h2>
                    <div id="flush-collapse-sect2-6" class="accordion-collapse collapse" data-bs-parent="#accordionFlushFAQSect2">
                        <div class="accordion-body">
                            Once you have applied to FJCU and your documents have been matched to your account, you will receive an email with your FJCU ID number and instructions on how to set up your Application Status Check account. Through the Application Status Check, you will be able to verify your personal information, view the required materials, and check on deadlines.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-sect2-7" aria-expanded="false" aria-controls="flush-collapse-sect2-7">
                            When will I receive my admission decision?
                        </button>
                    </h2>
                    <div id="flush-collapse-sect2-7" class="accordion-collapse collapse" data-bs-parent="#accordionFlushFAQSect2">
                        <div class="accordion-body">
                            Your notification time will vary depending on how you applied:
                            Early Decision applicants will receive a decision online by January 1
                            Regular Decision applicants will receive a decision online by April 1
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="my-3" id="enter">
            <p class="fs-2 fw-bolder">Before Enter Taiwan</p>
            <div class="accordion accordion-flush" id="accordionFlushFAQSect3">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-sect3-1" aria-expanded="false" aria-controls="flush-collapse-sect3-1">
                            What are enrollment documents?
                        </button>
                    </h2>
                    <div id="flush-collapse-sect3-1" class="accordion-collapse collapse" data-bs-parent="#accordionFlushFAQSect3">
                        <div class="accordion-body">Our Study Abroad Program provides limitless self-selection opportunity. Feel free to choose any course you want flexibly and learn whatever you like at FJCU for only half the average tuition fee.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-sect3-2" aria-expanded="false" aria-controls="flush-collapse-sect3-2">
                            What are the visa and entry requirements?
                        </button>
                    </h2>
                    <div id="flush-collapse-sect3-2" class="accordion-collapse collapse" data-bs-parent="#accordionFlushFAQSect3">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="my-3" id="live">
            <p class="fs-2 fw-bolder">Live in Taiwan</p>
            <div class="accordion accordion-flush" id="accordionFlushFAQSect4">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-sect4-1" aria-expanded="false" aria-controls="flush-collapse-sect4-1">
                            What are the costs for Living?
                        </button>
                    </h2>
                    <div id="flush-collapse-sect4-1" class="accordion-collapse collapse" data-bs-parent="#accordionFlushFAQSect4">
                        <div class="accordion-body">Our Study Abroad Program provides limitless self-selection opportunity. Feel free to choose any course you want flexibly and learn whatever you like at FJCU for only half the average tuition fee.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-sect4-2" aria-expanded="false" aria-controls="flush-collapse-sect4-2">
                            Can I withdraw cash in Taiwan?
                        </button>
                    </h2>
                    <div id="flush-collapse-sect4-2" class="accordion-collapse collapse" data-bs-parent="#accordionFlushFAQSect4">
                        <div class="accordion-body">
                            If you would like to use your ATM or credit card to withdraw cash in Taiwan, please request your card provider to enable the international function on the card before departing your country.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-sect4-3" aria-expanded="false" aria-controls="flush-collapse-sect4-3">
                            Can I use my SIM card in Taiwan?
                        </button>
                    </h2>
                    <div id="flush-collapse-sect4-3" class="accordion-collapse collapse" data-bs-parent="#accordionFlushFAQSect4">
                        <div class="accordion-body">
                            Please double check with your mobile service provider that your phone is compatible with SIM cards from Taiwan.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-sect4-4" aria-expanded="false" aria-controls="flush-collapse-sect4-4">
                            Can I work or have an internship in Taiwan?
                        </button>
                    </h2>
                    <div id="flush-collapse-sect4-4" class="accordion-collapse collapse" data-bs-parent="#accordionFlushFAQSect4">
                        <div class="accordion-body">
                            No. All exchange students are not permitted to work or do internships. Students must not engage in activities inconsistent with the purpose of student exchange program and should abide by the relevant epidemic prevention regulations of the government.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-sect4-5" aria-expanded="false" aria-controls="flush-collapse-sect4-5">
                            Is there a buddy program?
                        </button>
                    </h2>
                    <div id="flush-collapse-sect4-5" class="accordion-collapse collapse" data-bs-parent="#accordionFlushFAQSect4">
                        <div class="accordion-body">
                            Every exchange student is assigned a buddy. Buddies are FJCU student volunteers who help you with matters related to daily life and studies (not including pick-up at the airport).
                            The International Student Center (ISC) will automatically assign you a buddy; there is no need to apply. ISC will email you their contact information one month before the semester begins.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-sect4-6" aria-expanded="false" aria-controls="flush-collapse-sect4-6">
                            Are there Mandarin courses?
                        </button>
                    </h2>
                    <div id="flush-collapse-sect4-6" class="accordion-collapse collapse" data-bs-parent="#accordionFlushFAQSect4">
                        <div class="accordion-body">
                            Courses are six hours a week for nine to twelve weeks. They are not for credit.
                            Courses are free. A deposit is required when making an application. The deposit will be returned if you miss fewer than twelve hours of the course over the semester.
                            Rules and important dates will be announced during orientation.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-sect4-7" aria-expanded="false" aria-controls="flush-collapse-sect4-7">
                            How do I get to campus?
                        </button>
                    </h2>
                    <div id="flush-collapse-sect4-7" class="accordion-collapse collapse" data-bs-parent="#accordionFlushFAQSect4">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="my-3" id="contact">
            <p class="fs-2 fw-bolder">Contact us</p>
            <div class="accordion accordion-flush" id="accordionFlushFAQSect5">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-sect5-1" aria-expanded="false" aria-controls="flush-collapse-sect5-1">
                            How do I get in touch with admission team?
                        </button>
                    </h2>
                    <div id="flush-collapse-sect5-1" class="accordion-collapse collapse" data-bs-parent="#accordionFlushFAQSect5">
                        <div class="accordion-body">
                            FJCU’s admissions staff can be found at <a href="#">Contact us</a>. Please feel free to email (oiesa@mail.fju.edu.tw) with any questions.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-sect5-2" aria-expanded="false" aria-controls="flush-collapse-sect5-2">
                            How do I contact advisor of each college?
                        </button>
                    </h2>
                    <div id="flush-collapse-sect5-2" class="accordion-collapse collapse" data-bs-parent="#accordionFlushFAQSect5">
                        <div class="accordion-body">
                            Please refer <a href="#">Contact us</a>.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-sect5-3" aria-expanded="false" aria-controls="flush-collapse-sect5-3">
                            How should I arrange my accommodation?
                        </button>
                    </h2>
                    <div id="flush-collapse-sect5-3" class="accordion-collapse collapse" data-bs-parent="#accordionFlushFAQSect5">
                        <div class="accordion-body">
                            Please refer <a href="accommodation.php">Accommodation</a>.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-sect5-4" aria-expanded="false" aria-controls="flush-collapse-sect5-4">
                            How can I receive more information?
                        </button>
                    </h2>
                    <div id="flush-collapse-sect5-4" class="accordion-collapse collapse" data-bs-parent="#accordionFlushFAQSect5">
                        <div class="accordion-body">
                            You can fill out our Request Information Form (超連結) and receive updates, advice, and information about FJCU.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>