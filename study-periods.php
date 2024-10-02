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
    <link rel="stylesheet" href="css/fixed.css">
    <link rel="stylesheet" href="css/study-periods.css">

    <title>Fu Jen Global</title>
</head>
<body>
    <?php include 'header.php'; ?>
    
    <nav class="navbar navbar-expand-lg bg-body-tertiary second-navbar">
        <div class="container-fluid d-flex align-items-center">
            <a href="home.php"> 
                <img src="images/06-校徽-英文組合排列.png" id="logo">
            </a>
            <div class="flex-grow-1 text-center">
                <div class="d-flex justify-content-center align-items-center">
                    <a href="javascript:history.back()"><i class="fas fa-arrow-left"></i></a>
                    <span class="navbar-text mx-2">Study Periods</span>
                </div>
            </div>
        </div>
    </nav>
    
    <div class="container1">
        <h3 class="my-3 fw-bolder">Quarters and Sessions</h3>
        <div class="container-title col-lg-10 col-md-6 col-sm-6">
            <p>2023-2024</p>
        </div>
        <div class="container-season d-flex flex-row flex-wrap">
            <div class="row">
                <div class="container">
                    <p class="season">Fall Quarter</p>
                    <p class="week">(12 weeks)</p>
                    <img class="image" src="images/秋.png" alt="autumn">
                    <p class="date">2023/9/4~2023/11/23</p>
                </div>
            </div>
            <div class="row">
                <div class="container-winter">
                    <p class="season">Winter Quarter</p>
                    <p class="week">(12 weeks)</p>
                    <img class="image" src="images/冬.png" alt="winter">
                    <p class="date">2023/12/4~2024/2/29</p>
                </div>
            </div>
            <div class="row">
                <div class="container">
                    <p class="season">Spring Quarter</p>
                    <p class="week">(12 weeks)</p>
                    <img class="image" src="images/春.png" alt="spring">
                    <p class="date">2024/3/5-2024/5/29</p>
                </div>
            </div>
            <div class="row">
                <div class="container-summer">
                    <p class="season">Summer Quarter</p>
                    <p class="week">(12 weeks)</p>
                    <img class="image" src="images/夏.png" alt="summer">
                    <p class="date">2024/6/4~2024/8/21</p>
                </div>
            </div>     
        </div>
    </div>


    <div class="container2">
        <h3 class="my-3 fw-bolder">Class Hours</h3>
        <div class="container-content">
            <ul>
                <li>15 hours per week, Monday to Friday, with morning and afternoon classes.</li>
                <li>Class schedules are arranged by the CCLC office.</li>
                <li>If you wish to have an individual class or a smaller group, please contact us.</li>
                <li>There are no make-up classes nor make refunds for any class interruption/cancellation caused by natural disasters (such as typhoons, earthquake, flooding, fire, etc)
                        and/or insurmountable human failure (such as electric power failure, war, etc.).</li>
                <br>
                <span>Tuition Fees</span>
                <br>
                <a href="http://docs.lc.oie.fju.edu.tw/Curriculum/%E8%8B%B1%E6%96%87%E8%B2%BB%E7%94%A8.pdf" target="_blank">Regular Course and Fees</a>
                <span><li>Tuition rates are quoted in NT Dollars and subject to change without notice.</li></span>
            </ul>
        </div>
    </div>

    <div class="container3">
        <h3 class="my-3 fw-bolder">Scholarships</h3>
        <div class="container-content3">
            <span>Students may be eligible to apply for scholarships. Please visit the websites below for more information.</span>
            <br><br>
            <a href="https://www.studyintaiwan.org/scholarship" target="_blank">Study in Taiwan</a>
            <br>
            <a href="https://ois.moe.gov.tw/WEB/ois/Index.aspx" target="_blank">教育部國際及兩岸教育司 全國大專校院境外生生活資訊網</a>
        </div>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>
