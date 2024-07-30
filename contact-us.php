<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- icon -->
    <link href="images/logo.ico" rel="shortcut icon" />

    <!-- 引入 Poppins 字體 -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap">
    <!-- 引入 Merriweather 字體 -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&display=swap">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="css/contact-us.css">

    <title>Contact Us</title>
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
    <div class="title-container">
        <span class="title">— Contact Us —</span>
    </div>

    <div class="container my-5">
        <!-- 第一橫排: 三個區塊 -->
        <div class="row mb-4">
            <div class="col-md-4">
                <div class="contact-card">
                    <div class="contact-header">
                        <h5>Degree Student</h5>
                    </div>
                    <div class="contact-content">
                        <p><i class="fas fa-phone"></i> <span class="copy-text" data-text="+886-2-2905-2944">+886-2-2905-2944</span> &nbsp&nbsp&nbsp<span class="copy-icon"><i class="fas fa-copy"></i></span>
                        <p><i class="fas fa-envelope"></i> <span class="copy-text" data-text="049253@mail.fju.edu.tw">049253@mail.fju.edu.tw</span>&nbsp&nbsp&nbsp <span class="copy-icon"><i class="fas fa-copy"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-card">
                    <div class="contact-header">
                        <h5>Exchange Students (Inbound)</h5>
                    </div>
                    <div class="contact-content">
                        <p><i class="fas fa-phone"></i> <span class="copy-text" data-text="+886-2-2905-6376">+886-2-2905-6376</span>&nbsp&nbsp&nbsp<span class="copy-icon"><i class="fas fa-copy"></i></span></p>
                        <p><i class="fas fa-envelope"></i> <span class="copy-text" data-text="089634@mail.fju.edu.tw">089634@mail.fju.edu.tw</span>&nbsp&nbsp&nbsp<span class="copy-icon"><i class="fas fa-copy"></i></span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-card">
                    <div class="contact-header">
                        <h5>Study Abroad Program</h5>
                    </div>
                    <div class="contact-content">
                        <p><i class="fas fa-envelope"></i> <span class="copy-text" data-text="oiesa@mail.fju.edu.tw">oiesa@mail.fju.edu.tw</span>&nbsp&nbsp&nbsp<span class="copy-icon"><i class="fas fa-copy"></i></span></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- 第二橫排: 兩個區塊 -->
        <div  class="row justify-content-center mb-3">
            <div class="col-md-4">
                <div class="contact-card">
                    <div class="contact-header">
                        <h5>Mandarin Chinese Learning</h5>
                    </div>
                    <div class="contact-content">
                        <p><i class="fas fa-phone"></i> <span class="copy-text" data-text="+886-2-2905-2163">+886-2-2905-2163</span>&nbsp&nbsp&nbsp<span class="copy-icon"><i class="fas fa-copy"></i></span></p>
                        <p><i class="fas fa-envelope"></i> <span class="copy-text" data-text="chinese@mail.fju.edu.tw">chinese@mail.fju.edu.tw</span>&nbsp&nbsp&nbsp<span class="copy-icon"><i class="fas fa-copy"></i></span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-card">
                    <div class="contact-header">
                        <h5>International Exchange Center</h5>
                    </div>
                    <div class="contact-content">
                        <p><i class="fas fa-phone"></i> <span class="copy-text" data-text="+886-2-2905-2427">+886-2-2905-2427</span>&nbsp&nbsp&nbsp<span class="copy-icon"><i class="fas fa-copy"></i></span></p>
                        <p><i class="fas fa-envelope"></i> <span class="copy-text" data-text="info@mail.fju.edu.tw">info@mail.fju.edu.tw</span>&nbsp&nbsp&nbsp<span class="copy-icon"><i class="fas fa-copy"></i></span></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- 表單 -->
         
        <div class="form-section mt-5">
            <h2>Question</h2>
            <h3>Your details</h3>
            <form>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="firstName" class="form-label">First name<span class="text-danger">*</span></label></label>
                        <input type="text" class="form-control" id="firstName" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="lastName" class="form-label">Last name<span class="text-danger"><span class="text-danger">*</span></label></span></label></label>
                        <input type="text" class="form-control" id="lastName" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="region" class="form-label">Which region or country do you currently live in?<span class="text-danger">*</span></label></label>
                        <input type="text" class="form-control" id="region" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="nationality" class="form-label">What is your nationality?<span class="text-danger">*</span></label></label>
                        <input type="text" class="form-control" id="nationality" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="email" class="form-label">Email<span class="text-danger">*</span></label>
                        <input type="email" class="form-control" id="email" required>
                        <small class="form-text text-muted">(We respond to most enquiries via email)</small>
                        
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="phone" class="form-label">Phone Number<span class="text-danger">*</span></label></label>
                        <input type="tel" class="form-control" id="phone" required>
                    </div>
                </div>

                <h3>Help us respond to you better</h3>
                <div class="mb-3">
                    <label class="form-label">Which program are you interested in?<span class="text-danger">*</span></label></label>
                    <div class="check-container">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="degreeStudent">
                            <label class="form-check-label" for="degreeStudent">Degree Student</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="exchangeStudent">
                            <label class="form-check-label" for="exchangeStudent">Exchange Student (Inbound)</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="studyAbroad">
                            <label class="form-check-label" for="studyAbroad">Study Abroad</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="mandarinLearning">
                            <label class="form-check-label" for="mandarinLearning">Mandarin Chinese Learning</label>
                        </div>
                    </div> 
                </div>
                <div class="mb-3">
                    <label class="form-label">Select the category that best suits your enquiry:<span class="text-danger">*</span></label></label>
                    <div class="check-container">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="entryRequirements">
                            <label class="form-check-label" for="entryRequirements">Entry requirements & study pathways</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="courseInfo">
                            <label class="form-check-label" for="courseInfo">Course information</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="applyingCourse">
                            <label class="form-check-label" for="applyingCourse">Applying for a course</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="applicationOffer">
                            <label class="form-check-label" for="applicationOffer">My application and offer</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="enrolment">
                            <label class="form-check-label" for="enrolment">My enrolment</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="fees">
                            <label class="form-check-label" for="fees">Fees, costs and scholarships</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="studentLife">
                            <label class="form-check-label" for="studentLife">Student life</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="other">
                            <label class="form-check-label" for="other">Other</label>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="enquiryDetails" class="form-label">Details of your enquiry :<span class="text-danger">*</span></label></label>
                    <textarea class="form-control" id="enquiryDetails" rows="3" required></textarea>
                    <small class="form-text text-muted">Please provide as much detail as possible to assist us with your enquiry.</small>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

    </div>
    <?php include 'footer.php'; ?>

    <!-- 複製成功提示 -->
    <div class="copy-success" id="copy-success">Copied!</div>

    <!-- JavaScript -->
    <script src="js/contact-us.js"></script>
</body>
</html>
