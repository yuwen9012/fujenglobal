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
    <link rel="stylesheet" href="css/fixed.css">
    <link rel="stylesheet" href="css/taiwanese-culture.css">

    <!-- JS -->
    <script type="text/javascript" src="js/taiwanese-culture.js"></script>

    <title>Taiwanese Culture</title>
</head>

<?php include 'header.php'; ?>

    <nav class="navbar navbar-expand-lg bg-body-tertiary second-navbar">
        <div class="container-fluid d-flex align-items-center">
            <img src="images/06-校徽-英文組合排列.png" id="logo" class="me-3">
            
            <div class="flex-grow-1 text-center">
                <div class="d-flex justify-content-center align-items-center">
                    <a href="study-abroad.php"><i class="fas fa-arrow-left"></i></a>
                    <span class="navbar-text mx-2">Taiwanese Culture</span>
                </div>
            </div>
        </div>
    </nav>
    <br><br>
    
    <!-- 第零區塊 --> 
    <div class="container-fluid block1">
    <div class="row">
        <div class="col-lg-1 left-section"></div>
        <div class="col-sm-12 col-md-12 col-lg-10 center-section">
            <i class="arrow-icon">→</i>
            <div class="table-responsive">
                <table  class="custom-table" style="border: 1px solid black; border-collapse: collapse; width:100%;">
                    <tr style="border: 1px solid black;">
                        <th style="border: 1px solid black; padding: 8px;"> </th>
                        <th class="event-header" style="border: 1px solid black; padding: 8px;text-align: center;">ISC Event<br>(Fee-based)</th>
                        <th class="event-header" style="border: 1px solid black; padding: 8px;text-align: center;">ISC Event<br>(Free)</th>
                        <th class="event-header" style="border: 1px solid black; padding: 8px;text-align: center;">CCLC Event<br>(Fee-based)</th>
                        <th class="event-header" style="border: 1px solid black; padding: 8px;text-align: center;">CCLC Event<br>(Free)</th>
                        <th style="border: 1px solid black; padding: 8px;text-align: center;">Special Event</th>
                    </tr>
                    <tr style="border: 1px solid black;">
                        <th style="border: 1px solid black; padding: 8px;text-align: center;">Regular Exchange Student</th>
                        <td style="border: 1px solid black; padding: 8px; text-align: center;">✓</td>
                        <td style="border: 1px solid black; padding: 8px; text-align: center;">✓</td>
                        <td style="border: 1px solid black; padding: 8px; text-align: center;">✗</td>
                        <td style="border: 1px solid black; padding: 8px; color: red; text-align: center;">⭗</td>
                        <td style="border: 1px solid black; padding: 8px; text-align: center;">Fee-paying</td>
                    </tr>
                    <tr style="border: 1px solid black;">
                        <th style="border: 1px solid black; padding: 8px;text-align: center;">Study Abroad Student</th>
                        <td style="border: 1px solid black; padding: 8px; text-align: center;">✓</td>
                        <td style="border: 1px solid black; padding: 8px; text-align: center;">✓</td>
                        <td style="border: 1px solid black; padding: 8px; text-align: center;">✓</td>
                        <td style="border: 1px solid black; padding: 8px; text-align: center;">✓</td>
                        <td style="border: 1px solid black; padding: 8px; text-align: center;">Free (two guaranteed)</td>
                    </tr>
                    <tr style="border: 1px solid black;">
                        <th style="border: 1px solid black; padding: 8px;text-align: center;">CCLC Student</th>
                        <td style="border: 1px solid black; padding: 8px; color: red; text-align: center;">⭗</td>
                        <td style="border: 1px solid black; padding: 8px; color: red; text-align: center;">⭗</td>
                        <td style="border: 1px solid black; padding: 8px; text-align: center;">✓</td>
                        <td style="border: 1px solid black; padding: 8px; text-align: center;">✓</td>
                        <td style="border: 1px solid black; padding: 8px; text-align: center;">Fee-paying</td>
                    </tr>
                </table>
            </div>
            <span class="justify-text"><span style="color: red;">⭗</span>: Depends on the actual situation</span>
        </div>
        <div class=" col-lg-1 right-section"></div>
    </div>
    <br>
</div>


     <!-- 第一區塊 --> 
    <div class="container-fluid introduction-block">
        <div class="row">
            <div class="col-md-1 col-1 left-section">
            </div>

            <div class="col-md-10 col-10 center-section">
                <span class="justify-text">Compared to regular exchange students, Study Abroad students are guaranteed two free cultural events and will have priority to join.(The remaining spots will be opened to other international students for a fee depending on the situation.)</span>
                <ul class="custom-list">
                    <li>ISC Event (Fee-based):</li>
                    <span class="no-break">For example: One-day Trip to Hakka City, Half-day Trip to Northern Suburbs, Traditional Culture Activities, Paintball Game, Indigenous Tribes Visiting, and so on.</span>
                    <li>ISC Event (Free):</li>
                    <span class="no-break">These events include Welcome Party, Gourmet Food Day, Series of Celebrations for University Anniversary, Intercultural Opera Theatre, Taiwanese Culture Workshop, etc.</span>
                    <li>CCLC Event (Fee-based):</li>
                    <span class="no-break">Spring Field Trip to Yilan National Center for Traditional Arts; Fall Field Trip to Taiwan Hakka Tea Culture Museum; Moon Festival Cultural Trip to Kuo Yuan Yi Museum of Cake & Pastry; Christmas Dinner Party include a sumptuous dinner and multi-national cultural program.</span>
                    <li>CCLC Event (Free):</li>
                    <span class="no-break">These events include Lunar New Year Cultural Activity, CCLC International Cultural Festival, Dragon Boat Festival Cultural Activity. Festive foods will be offered during the activity.</span>
                </ul>
            </div>

            <div class="col-md-1 col-1 right-section">
            </div>
        </div>
    </div>

<!-- 第二區塊 --> 
    <div class="container-fluid introduction-block" style="background-color: #FFF9E6;">
        <br>
        <p class="heading">Taiwan BangZi Opera Cultural Event</p>
             <div class="row">
                 <div class="col-md-2 left-section"></div>
                 <div class="col-sm-10 col-md-8 center-section">
                    <div class="container-fluid" style="width:70%; height: 100%; " >
                      <video class="video" id="video"  controls style="width:100%;" autoplay muted>
                          <source src="video/BangZi Opera.mp4" type="video/mp4">
                      </video>
                      
                    </div>
                 </div>
                 <div class="col-md-2 right-section"></div>
             </div>
             <div class="row">
                <div class="col-lg-2 left-section"></div>
                <div class="col-lg-8 left-section">
                     <p class="content-inner justify-text">Taiwan Bangzi Opera, also known as Taiwanese Opera, is a traditional form of Chinese opera that originated in Taiwan. It features distinctive singing styles, vibrant costumes, and dramatic storytelling. Performances often include folk tales, historical events, and legends, captivating audiences with their unique blend of music, dance, and theatrics.</p>
                </div>
                <div class="col-lg-2 left-section"></div>
            </div>
    </div>

    <!-- 第三區塊 --> 
    <div class="container-fluid introduction-block" >
        <br>
        <p class="heading">Past Event Glimpses</p>
    </div>
    <div class="container-fluid info-block">

           <div class="row">
                 <div class="col-lg-2 col-md-1  col-2 order-lg-1 order-md-1 order-sm-1">
                 </div>
                 <div class="col-lg-6 col-md-10 col-sm-6 col-12 order-2 order-lg-2 order-md-2 order-sm-2">
                     <img  class="mainImage " id="mainImage2" src="images/Bajiang Cultural1.jpg" alt="Description of the image" class="img-fluid">
                 </div>
                 <div class="col-lg-2 col-md-12  col-sm-6 order-1 order-lg-3 order-md-3 order-sm-3">
                         <p class="heading2">Bajiang Cultural Event </p>
                         <p class="content2">Compared to regular exchange students, Study Abroad students are guaranteed two free cultural events and will have priority to join.(The remaining spots will be opened to other international students for a fee depending on the situation.)</p>
                 </div>
                 <div class="col-lg-2 col-md-1  col-2 order-lg-4 order-md-4 order-sm-4">
                 </div>
           </div>

           <div class="row">
               <div class="col-lg-2"></div>
               <div class="col-lg-8 col-md-12 col-12 justify-content-center align-items-center">
                   <div id="carouselExampleIndicators" class="carousel slide">
                       <div class="carousel-inner">
                           <div class="carousel-item active">
                               <div class="d-flex">
                                   <img src="images/Bajiang Cultural1.jpg" alt="..." onclick="showImageTC2('images/Bajiang Cultural1.jpg', 'Bajiang Cultural Event','Compared to regular exchange students, Study Abroad students are guaranteed two free cultural events and will have priority to join.(The remaining spots will be opened to other international students for a fee depending on the situation.)')" style="cursor: pointer;">
                                   <img src="images/Bajiang Cultural2.jpg" alt="..." onclick="showImageTC2('images/Bajiang Cultural2.jpg', 'Bajiang Cultural Event','Compared to regular exchange students, Study Abroad students are guaranteed two free cultural events and will have priority to join.(The remaining spots will be opened to other international students for a fee depending on the situation.)')" style="cursor: pointer;">
                                   <img src="images/Bajiang Cultural3.jpg" alt="..." onclick="showImageTC2('images/Bajiang Cultural3.jpg', 'Bajiang Cultural Event','Compared to regular exchange students, Study Abroad students are guaranteed two free cultural events and will have priority to join.(The remaining spots will be opened to other international students for a fee depending on the situation.)')" style="cursor: pointer;">
                                   <img src="images/New Year Cultural1.jpg" alt="..." onclick="showImageTC2('images/New Year Cultural1.jpg', 'CCLC Lunar New Year Cultural Activity','')" style="cursor: pointer;">
                                   <img src="images/New Year Cultural2.jpg" alt="..." onclick="showImageTC2('images/New Year Cultural2.jpg', 'CCLC Lunar New Year Cultural Activity','')" style="cursor: pointer;">
                               </div>
                           </div>
                           <div class="carousel-item ">
                               <div class="d-flex">
                                   <img src="images/New Year Cultural3.jpg" alt="..." onclick="showImageTC2('images/New Year Cultural3.jpg', 'CCLC Lunar New Year Cultural Activity','')" style="cursor: pointer;">
                                   <img src="images/New Year Cultural4.jpg" alt="..." onclick="showImageTC2('images/New Year Cultural4.jpg', 'CCLC Lunar New Year Cultural Activity','')" style="cursor: pointer;">
                                   <img src="images/New Year Cultural5.jpg" alt="..." onclick="showImageTC2('images/New Year Cultural5.jpg', 'CCLC Lunar New Year Cultural Activity','')" style="cursor: pointer;">
                                   <img src="images/New Year Cultural6.jpg" alt="..." onclick="showImageTC2('images/New Year Cultural6.jpg', 'CCLC Lunar New Year Cultural Activity','')" style="cursor: pointer;">
                                   <img src="images/New Year Cultural7.jpg" alt="..." onclick="showImageTC2('images/New Year Cultural7.jpg', 'CCLC Lunar New Year Cultural Activity','')" style="cursor: pointer;">
                               </div>
                           </div>
                           <div class="carousel-item ">
                               <div class="d-flex">
                                   <img src="images/Christmas1.jpg" alt="..." onclick="showImageTC2('images/Christmas1.jpg', 'CCLC Christmas Dinner Party','')" style="cursor: pointer;">
                                   <img src="images/Christmas2.jpg" alt="..." onclick="showImageTC2('images/Christmas2.jpg', 'CCLC Christmas Dinner Party','')" style="cursor: pointer;">
                                   <img src="images/Christmas3.jpg" alt="..." onclick="showImageTC2('images/Christmas3.jpg', 'CCLC Christmas Dinner Party','')" style="cursor: pointer;">
                                   <img src="images/Christmas4.jpg" alt="..." onclick="showImageTC2('images/Christmas4.jpg', 'CCLC Christmas Dinner Party','')" style="cursor: pointer;">
                                   <img src="images/Christmas5.jpg" alt="..." onclick="showImageTC2('images/Christmas5.jpg', 'CCLC Christmas Dinner Party','')" style="cursor: pointer;">
                               </div>
                           </div>
                           <div class="carousel-item ">
                               <div class="d-flex">
                                   <img src="images/Christmas6.jpg" alt="..." onclick="showImageTC2('images/Christmas6.jpg', 'CCLC Christmas Dinner Party','')" style="cursor: pointer;">
                                   <img src="images/Christmas7.jpg" alt="..." onclick="showImageTC2('images/Christmas7.jpg', 'CCLC Christmas Dinner Party','')" style="cursor: pointer;">
                                   <img src="images/Christmas8.jpg" alt="..." onclick="showImageTC2('images/Christmas8.jpg', 'CCLC Christmas Dinner Party','')" style="cursor: pointer;">
                                   <img src="images/Dragon Boat Festival1.jpg" alt="..." onclick="showImageTC2('images/Dragon Boat Festival1.jpg', 'CCLC Dragon Boat Festival Cultural Activity','')" style="cursor: pointer; ">
                                   <img src="images/Dragon Boat Festival2.jpg" alt="..." onclick="showImageTC2('images/Dragon Boat Festival2.jpg', 'CCLC Dragon Boat Festival Cultural Activity','')" style="cursor: pointer; ">
                               </div>
                           </div>
                           <div class="carousel-item ">
                               <div class="d-flex">
                                   <img src="images/Dragon Boat Festival3.jpg" alt="..." onclick="showImageTC2('images/Dragon Boat Festival3.jpg', 'CCLC Dragon Boat Festival Cultural Activity','')" style="cursor: pointer; ">
                                   <img src="images/Tea Culture1.jpg" alt="..." onclick="showImageTC2('images/Tea Culture1.jpg', 'Field Trip (Fall): Oriental Beauty Tea Culture Museum of Taiwan','')" style="cursor: pointer;">
                                   <img src="images/Tea Culture2.jpg" alt="..." onclick="showImageTC2('images/Tea Culture2.jpg', 'Field Trip (Fall): Oriental Beauty Tea Culture Museum of Taiwan','')" style="cursor: pointer;">
                                   <img src="images/Tea Culture3.jpg" alt="..." onclick="showImageTC2('images/Tea Culture3.jpg', 'Field Trip (Fall): Oriental Beauty Tea Culture Museum of Taiwan','')" style="cursor: pointer;">
                                   <img src="images/Tea Culture4.jpg" alt="..." onclick="showImageTC2('images/Tea Culture4.jpg', 'Field Trip (Fall): Oriental Beauty Tea Culture Museum of Taiwan','')" style="cursor: pointer;">
                               </div>
                           </div>
                           <div class="carousel-item ">
                               <div class="d-flex">
                                   <img src="images/Tea Culture5.jpg" alt="..." onclick="showImageTC2('images/Tea Culture5.jpg', 'Field Trip (Fall): Oriental Beauty Tea Culture Museum of Taiwan','')" style="cursor: pointer;">
                                   <img src="images/Tea Culture6.jpg" alt="..." onclick="showImageTC2('images/Tea Culture6.jpg', 'Field Trip (Fall): Oriental Beauty Tea Culture Museum of Taiwan','')" style="cursor: pointer;">
                                   <img src="images/Tea Culture7.jpg" alt="..." onclick="showImageTC2('images/Tea Culture7.jpg', 'Field Trip (Fall): Oriental Beauty Tea Culture Museum of Taiwan','')" style="cursor: pointer;">
                                   <img src="images/International Cultural Festival1.jpg" alt="..." onclick="showImageTC2('images/International Cultural Festival1.jpg', 'CCLC International Cultural Festival','')" style="cursor: pointer;">
                                   <img src="images/International Cultural Festival2.jpg" alt="..." onclick="showImageTC2('images/International Cultural Festival2.jpg', 'CCLC International Cultural Festival','')" style="cursor: pointer;">
                               </div>
                           </div>
                           <div class="carousel-item ">
                               <div class="d-flex">
                                   <img src="images/International Cultural Festival3.jpg" alt="..." onclick="showImageTC2('images/International Cultural Festival3.jpg', 'CCLC International Cultural Festival','')" style="cursor: pointer;">
                                   <img src="images/International Cultural Festival4.jpg" alt="..." onclick="showImageTC2('images/International Cultural Festival4.jpg', 'CCLC International Cultural Festival','')" style="cursor: pointer;">
                                   <img src="images/International Cultural Festival5.jpg" alt="..." onclick="showImageTC2('images/International Cultural Festival5.jpg', 'CCLC International Cultural Festival','')" style="cursor: pointer;">
                                   <img src="images/International Cultural Festival6.jpg" alt="..." onclick="showImageTC2('images/International Cultural Festival6.jpg', 'CCLC International Cultural Festival','')" style="cursor: pointer;">
                                   <img src="images/International Cultural Festival7.jpg" alt="..." onclick="showImageTC2('images/International Cultural Festival7.jpg', 'CCLC International Cultural Festival','')" style="cursor: pointer;">
                               </div>
                           </div>
                           <div class="carousel-item ">
                               <div class="d-flex">
                                   <img src="images/International Cultural Festival8.jpg" alt="..." onclick="showImageTC2('images/International Cultural Festival8.jpg', 'CCLC International Cultural Festival','')" style="cursor: pointer;">
                                   <img src="images/International Cultural Festival9.jpg" alt="..." onclick="showImageTC2('images/International Cultural Festival9.jpg', 'CCLC International Cultural Festival','')" style="cursor: pointer;">
                                   <img src="images/Moon Festival Cultural2.jpg" alt="..." onclick="showImageTC2('images/Moon Festival Cultural2.jpg', 'CCLC Moon Festival Cultural Trip','')" style="cursor: pointer;">
                                   <img src="images/Moon Festival Cultural3.jpg" alt="..." onclick="showImageTC2('images/Moon Festival Cultural3.jpg', 'CCLC Moon Festival Cultural Trip','')" style="cursor: pointer;">
                                   <img src="images/Moon Festival Cultural4.jpg" alt="..." onclick="showImageTC2('images/Moon Festival Cultural4.jpg', 'CCLC Moon Festival Cultural Trip','')" style="cursor: pointer;">
                               </div>
                           </div>
                           <div class="carousel-item ">
                               <div class="d-flex">
                                   <img src="images/Moon Festival Cultural5.jpg" alt="..." onclick="showImageTC2('images/Moon Festival Cultural5.jpg', 'CCLC Moon Festival Cultural Trip','')" style="cursor: pointer;">
                                   <img src="images/Moon Festival Cultural6.jpg" alt="..." onclick="showImageTC2('images/Moon Festival Cultural6.jpg', 'CCLC Moon Festival Cultural Trip','')" style="cursor: pointer;">
                                   <img src="images/Moon Festival Cultural7.jpg" alt="..." onclick="showImageTC2('images/Moon Festival Cultural7.jpg', 'CCLC Moon Festival Cultural Trip','')" style="cursor: pointer;">
                                   <img src="images/Spring Field Trip1.jpg" alt="..." onclick="showImageTC2('images/Spring Field Trip1.jpg', 'CCLC Spring Field Trip','')" style="cursor: pointer;">
                                   <img src="images/Spring Field Trip2.jpg" alt="..." onclick="showImageTC2('images/Spring Field Trip2.jpg', 'CCLC Spring Field Trip','')" style="cursor: pointer;">
                               </div>
                           </div>
                           <div class="carousel-item ">
                               <div class="d-flex">
                                   <img src="images/Spring Field Trip3.jpg" alt="..." onclick="showImageTC2('images/Spring Field Trip3.jpg', 'CCLC Spring Field Trip','')" style="cursor: pointer;">
                                   <img src="images/Spring Field Trip4.jpg" alt="..." onclick="showImageTC2('images/Spring Field Trip4.jpg', 'CCLC Spring Field Trip','')" style="cursor: pointer;">
                                   <img src="images/Spring Field Trip5.jpg" alt="..." onclick="showImageTC2('images/Spring Field Trip5.jpg', 'CCLC Spring Field Trip','')" style="cursor: pointer;">
                                   <img src="images/Tainan1.jpg" alt="..." onclick="showImageTC2('images/Tainan1.jpg', 'Tainan 2 Days Trip','Tainan, Taiwan\'s oldest city and historical birthplace, boasts a warm year-round climate and rich heritage. Highlights include Anping Old Street and the Jingzaijiao Tile-paved Salt Fields, showcasing the city\'s blend of cultural and natural attractions.')" style="cursor: pointer;">
                                   <img src="images/BangZi Opera2.jpg" alt="..." onclick="showImageTC2('images/BangZi Opera2.jpg', 'Taiwan BangZi Opera Cultural Event','Taiwan Bangzi Opera, also known as Taiwanese Opera, is a traditional form of Chinese opera that originated in Taiwan. It features distinctive singing styles, vibrant costumes, and dramatic storytelling. Performances often include folk tales, historical events, and legends, captivating audiences with their unique blend of music, dance, and theatrics.')" style="cursor: pointer;">
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
               <div class="col-lg-2"></div>
           </div>
           <br>
       </div>

<?php include 'footer.php'; ?>

</html>

