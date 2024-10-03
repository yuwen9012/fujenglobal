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

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="css/fixed.css">
    <link rel="stylesheet" href="css/sitemap.css">
    <link rel="stylesheet" href="css/accommodation.css">

    <!-- JS -->
    <script type="text/javascript" src="js/backdrop.js"></script>
    <script type="text/javascript" src="js/accommodation.js"></script>

    <title>Fu Jen Global</title>

</head>
<body>
    <div class="fixed-top">
        <?php include 'header.php'; ?>
    </div>

    <div id="content">
        <nav class="navbar navbar-expand-lg bg-body-tertiary second-navbar">
            <div class="container-fluid d-flex align-items-center">
                <img src="images/06-校徽-英文組合排列.png" id="logo" class="me-3">
                
                <div class="flex-grow-1 text-center">
                    <div class="d-flex justify-content-center align-items-center">
                        <a href="javascript:history.back()"><i class="fas fa-arrow-left"></i></a>
                        <span class="navbar-text mx-2">Accommodation</span>
                    </div>
                </div>
            </div>
        </nav>
        <?php include 'SA-links.php'; ?>

        <div class="container-fluid introduction-block">
            <div class="row">
                <div class="col-md-1 left-section">
                </div>

                <div class="col-md-10 center-section">
                    <br>
                    <h3 class="my-3 fw-bolder">1.(On-Campus)Dormitory: No extra charges</h3>
                    <span class="justify-text">Rooms, beds and dormitory buildings are assigned by the Dormitory Service Center. Students may not cancel their reservation or change their room/bed assignment. Dormitory rooms are not available for early check-in or late check-out. Students must arrange for their own accommodation off-campus if they arrive in Taiwan before check-in or intend to stay after check-out. Smoking and cooking are strictly prohibited in all dorm rooms.</span><br><br>
                    <span class="justify-text">About the dormitory:</span>
                    <ul class="custom-list">
                        <li>Showers and washrooms in dormitories are communal.</li>
                    </ul>
                    <span class="justify-text">About the rooms:</span>
                    <ul class="custom-list">
                        <li>Room types:  three-person to four-person</li>
                        <li>Rooms come furnished with bunk beds, desks, chairs, closets, air conditioners, and include an internet connection and Wi-Fi. We do not provide pillows, blankets, mattresses, or box springs. They may be purchased in stores campus.</li>
                        <li>The size of beds differs from dorm to dorm. Minimum sizes are as follows: 80*180 cm for women; 93*190 cm for men</li>
                    </ul>
                    <br>
                </div>

                <div class="col-md-1 right-section">
                </div>
            </div>
        </div>

    <!-- 第一個輪播牆 -->
        <div class="container-fluid info-block">

            <div class="row">
                    <div class="col-lg-1 col-md-2">
                    </div>
                    <div class="col-lg-10 col-md-8 col-5">
                        <img  class="mainImage" id="mainImage" src="images/Kewu1.jpg" alt="Description of the image" class="img-fluid">
                    </div>
                    <div class="col-lg-1 col-md-2  ">
                    </div>
            </div>

            <div class="row">
                <div class="col-lg-1 col-md-2"></div>
                <div class="col-lg-10 col-md-8 col-5 justify-content-center align-items-center">
                    <div id="carouselExampleIndicators" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="d-flex">
                                    <img src="images/Kewu1.jpg" alt="..." onclick="showImage('images/Kewu1.jpg')" style="cursor: pointer;">
                                    <img src="images/Kewu2.jpg" alt="..." onclick="showImage('images/Kewu2.jpg')" style="cursor: pointer;">
                                    <img src="images/Kewu3.jpg" alt="..." onclick="showImage('images/Kewu3.jpg')" style="cursor: pointer;">
                                    <img src="images/Kewu4.jpg" alt="..." onclick="showImage('images/Kewu4.jpg')" style="cursor: pointer;">
                                </div>
                            </div>
                            <div class="carousel-item ">
                                <div class="d-flex">
                                    <img src="images/Kewu5.jpg" alt="..." onclick="showImage('images/Kewu5.jpg')" style="cursor: pointer;">
                                    <img src="images/Kewu6.jpg" alt="..." onclick="showImage('images/Kewu6.jpg')" style="cursor: pointer;">
                                    <img src="images/Kewu1.jpg" alt="..." onclick="showImage('images/Kewu1.jpg')" style="cursor: pointer;">
                                    <img src="images/Kewu2.jpg" alt="..." onclick="showImage('images/Kewu2.jpg')" style="cursor: pointer;">
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-1 col-md-2"></div>
            </div>
            <br>
        </div>

        <div class="container-fluid introduction-block">
            <br>
            <div class="row">
                <div class="col-lg-1 col-md-1  right-section">
                </div>
                <div class="col-lg-10 col-md-10 center-section">
                    <h3 class="my-3 fw-bolder">2.(On-Campus) Scholar’s Inn: Extra fees NTD 2,080 - 2,880 per day per room.</h3>
                    <span class="justify-text" style="color: #0B3F61;">Each room is equipped with a private TV, refrigerator, and unlimited high-speed Wi-Fi. The bathroom features a separate shower and toilet, and every room includes a balcony with a view. Each floor has a lounge area, coin-operated washing machines and dryers, and a pantry. The property also boasts an exclusive gym for guests. The hotel has a 24-hour front desk, with services available for parcel collection and mail reception. Room options include one king bed or two twin beds.</span>
                    <br><br>
                </div>

                <div class="col-lg-1 col-md-1 right-section">
                </div>
            </div>
        </div>
    <!-- 第二個輪播牆 -->
        <div class="container-fluid info-block">
            <div class="row">
                    <div class="col-lg-1 col-md-2">
                    </div>
                    <div class="col-lg-10 col-md-8 col-5">
                        <img  class="mainImage " id="mainImage1" src="images/Scholar1.jpg" alt="Description of the image" class="img-fluid">
                    </div>
                    <div class="col-lg-1 col-md-2">
                    </div>
            </div>

            <div class="row">
                <div class="col-lg-1 col-md-2"></div>
                <div class="col-lg-10 col-md-8 col-5 justify-content-center align-items-center">
                    <div id="carouselExampleIndicators1" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="d-flex">
                                    <img src="images/Scholar1.jpg" alt="..." onclick="showImage1('images/Scholar1.jpg')" style="cursor: pointer;">
                                    <img src="images/Scholar2.jpg" alt="..." onclick="showImage1('images/Scholar2.jpg')" style="cursor: pointer;">
                                    <img src="images/Scholar3.jpg" alt="..." onclick="showImage1('images/Scholar3.jpg')" style="cursor: pointer;">
                                    <img src="images/Scholar4.jpg" alt="..." onclick="showImage1('images/Scholar4.jpg')" style="cursor: pointer;">
                                    <img src="images/Scholar5.jpg" alt="..." onclick="showImage1('images/Scholar5.jpg')" style="cursor: pointer;">
                                </div>
                            </div>
                            <div class="carousel-item ">
                                <div class="d-flex">
                                    <img src="images/Scholar5.jpg" alt="..." onclick="showImage1('images/Scholar5.jpg')" style="cursor: pointer;">
                                    <img src="images/Scholar6.jpg" alt="..." onclick="showImage1('images/Scholar6.jpg')" style="cursor: pointer;">
                                    <img src="images/Scholar7.jpg" alt="..." onclick="showImage1('images/Scholar7.jpg')" style="cursor: pointer;">
                                    <img src="images/Scholar8.jpg" alt="..." onclick="showImage1('images/Scholar8.jpg')" style="cursor: pointer;">
                                    <img src="images/Scholar9.jpg" alt="..." onclick="showImage1('images/Scholar9.jpg')" style="cursor: pointer;">
                                </div>
                            </div>
                            <div class="carousel-item ">
                                <div class="d-flex">
                                    <img src="images/Scholar9.jpg" alt="..." onclick="showImage1('images/Scholar9.jpg')" style="cursor: pointer;">
                                    <img src="images/Scholar10.jpg" alt="..." onclick="showImage1('images/Scholar10.jpg')" style="cursor: pointer;">
                                    <img src="images/Scholar5.jpg" alt="..." onclick="showImage1('images/Scholar5.jpg')" style="cursor: pointer;">
                                    <img src="images/Scholar11.jpg" alt="..." onclick="showImage1('images/Scholar11.jpg')" style="cursor: pointer;">
                                    <img src="images/Scholar1.jpg" alt="..." onclick="showImage1('images/Scholar1.jpg')" style="cursor: pointer;">
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-1 col-md-2"></div>
            </div>
            <br>
        </div>

    <!-- 最後區塊 -->
        <div class="container-fluid introduction-block">
            <div class="row">
                <div class="col-sm-1 col-md-1 left-section">
                </div>
                <div class="col-sm-10 col-md-10 center-section">
                    <h3 class="my-3 fw-bolder"><br>3.Off-Campus Housing: Extra fee depends on the choices</h3>
                    <span class="justify-text">Most foreign students choose to live off-campus. Please visit <a href="https://www.tmm.org.tw/contents/text?id=12" target="_blank">Tsuei Ma Ma Foundation for Housing and Community Service</a> for more information (as well as samples of rental contracts both from the government and from the foundation itself). The housing information below is provided for reference only. FJCU has no legal obligations related to off-campus housing.</span>
                    <ul class="custom-list">
                        <li><a href="https://house.nfu.edu.tw/FJU" target="_blank">FJCU Housing Website</a> (Chinese version only)</li>
                        <li><a href="http://www.99star.com.tw/en/about.php" target="_blank"> 99 STAR Hostel</a>:next to Fu Jen, offering daily, monthly and long-term rates</li>
                        <li><a href="https://www.facebook.com/groups/Taiwanapartmentsandroommates" target="_blank">Looking for Roommates or Apartments in Taipei and Taiwan</a>(FB)</li>
                        <li><a href="https://www.facebook.com/groups/RentalApartments" target="_blank">Rental Apartments in Taiwan</a>(FB)</li>
                    </ul>
                    <br><br>
                </div>

                <div class="col-sm-1 col-md-1 right-section">
                </div>
            </div>
        </div>
        <?php include 'footer.php'; ?>
    </div>
<body>
</html>
