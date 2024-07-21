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
    <link rel="stylesheet" href="css/howtoapply.css">

    <!-- JS -->
    <script type="text/javascript" src="js/howtoapply.js"></script>

    <title>How to apply</title>
</head>
<body>
    <?php include 'header.php'; ?>
    
    <nav class="navbar navbar-expand-lg bg-body-tertiary second-navbar">
        <div class="container-fluid d-flex align-items-center">
            <img src="images/06-校徽-英文組合排列.png" id="logo" class="me-3">
            
            <div class="flex-grow-1 text-center">
                <div class="d-flex justify-content-center align-items-center">
                    <a href="study-abroad.php"><i class="fas fa-arrow-left"></i></a>
                    <span class="navbar-text mx-2">How to apply</span>
                </div>
            </div>
        </div>
    </nav>
    
    <div class="timeline-container">
        <h3 class="my-3 fw-bolder">Program Timeline</h3>
        <ul class="timeline">
            <li class="timeline-item">
                <p>Submit Application Documents: <strong>Before 30th October</strong></p>
            </li>
            <li class="timeline-item">
                <p>Review of Applications: <strong>November</strong></p>
            </li>
            <li class="timeline-item">
                <p>Notification of Review Results: <strong>December</strong></p>
            </li>
            <li class="timeline-item">
                <p>Submit Enrollment Documents: <strong>December</strong></p>
            </li>
            <li class="timeline-item">
                <p>Issuance of Admission</p>
            </li>
            <li class="timeline-item">
                <p>Arrange the Travel to Taiwan (visa, tickets, accommodation, etc.)</p>
            </li>
            <li class="timeline-item">
                <p>Notifies the Dormitory Room Numbers: <strong>January</strong></p>
            </li>
            <li class="timeline-item">
                <p>Program Period: <strong>February</strong>; Flexible Learning Weeks:  <strong>9th June – 21th June</strong><br> <p2>*Actual teaching and exam dates are subject to the course syllabus.</p2></p>
               
            </li>
            <li class="timeline-item">
                <p>Sends Transcripts to Student(via email): <strong>End of August</strong></p>
            </li>
        </ul>
    </div>
    <div class="qualification-container">
        <h3 class="my-3 fw-bolder">Program Qualification</h3>
        <div class="row" id="scorer">
            <div class="col-md-3 text-center my-5">
                <div class="circle-container">
                    <div class="circle">1</div>
                </div>
                <h4 class="fw-normal py-3">Have a minimum GPA (grade point average) of 2.5 on a 4-point scale, or equivalent.</h4>
                
            </div>

            <div class="col-md-3 text-center my-5">
                <div class="circle-container">
                    <div class="circle">2</div>
                </div>
                <h4 class="fw-normal py-3">You should be a full-time student at your home institution during the application and study period.</h4>
               
            </div>

            <div class="col-md-3 text-center my-5">
                <div class="circle-container">
                    <div class="circle">3</div>
                </div>
                <h4 class="fw-normal py-3"> Have completed at least one year of full-time study at your home university.</h4>
                
            </div>

            <div class="col-md-3 text-center my-5">
                <div class="circle-container">
                    <div class="circle">4</div>
                </div>
                <h4 class="fw-normal py-3">Please refer to the program's individual Language Requirements.</h4>
                
            </div>
        </div>
    </div>


    <div class="checklist-container">
        <h3 class="my-3 fw-bolder">Application Document Checklist</h3>
        <ul class="checklist">
            <li>Application Form</li>
            <li>Complete academic transcripts</li>
            <li>Recommendation letter from an instructor</li>
            <li>Certificate of Enrollment (at your home university)</li>
            <li>Information page from your passport</li>
            <li>Proof of language proficiency (exemption: English native speaker)</li>
            <li>Passport photo</li>
        </ul>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>
