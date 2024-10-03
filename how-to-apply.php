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
    <link rel="stylesheet" href="css/how-to-apply.css">

    <!-- JS -->
    <script type="text/javascript" src="js/backdrop.js"></script>
    <script type="text/javascript" src="js/how-to-apply.js"></script>

    <title>Fu Jen Global</title>
</head>
<body>
    <div class="fixed-top">
        <?php include 'header.php'; ?>
    </div>
    
    <div id="content">
        <nav class="navbar navbar-expand-lg bg-body-tertiary second-navbar">
            <div class="container-fluid d-flex align-items-center">
                <a href="home.php"> 
                    <img src="images/06-校徽-英文組合排列.png" id="logo">
                </a>
                <div class="flex-grow-1 text-center">
                    <div class="d-flex justify-content-center align-items-center">
                        <a href="javascript:history.back()"><i class="fas fa-arrow-left"></i></a>
                        <span class="navbar-text mx-2">How to Apply</span>
                    </div>
                </div>
            </div>
        </nav>
        <?php include 'SA-links.php'; ?>
        
        <div class="container1">
            <h3 class="my-3 fw-bolder">Program Timeline</h3>
            <div class="timeline-wrapper">
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
        </div>
        <div class="container2">
            <h3 class="my-3 fw-bolder">Program Qualification</h3>
            <div id="container2">
                <div class="text-center">
                    <div class="row mx-auto" id="program-qualification" style="max-width: 90%;">

                    </div>
                </div>
            </div>

        </div>


        <div class="container3">
            <h3 class="my-3 fw-bolder">Application Document Checklist</h3>
            <div class="checklist-container">
                <ul class="checklist" id="checklist">

                </ul>
            </div>
        </div>

        <?php include 'footer.php'; ?>
    </div>
</body>
</html>
