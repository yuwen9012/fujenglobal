<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- icon -->
    <link href="../images/logo.ico" rel="shortcut icon" />

    <!-- 引入 Poppins 字體 -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Bootstrap Table -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-table@1.23.2/dist/bootstrap-table.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-table@1.23.2/dist/bootstrap-table.min.js"></script>

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="css/sidebar.css">

    <!-- JS -->
    <script type="text/javascript" src="js/sidebar.js"></script>
    <script type="text/javascript" src="js/home.js"></script>

    <title>後台系統</title>
</head>
<body>
    <div class="container-fluid vh-100 p-0">
        <div class="row h-100 g-0">

            <?php $active = 'home'; include 'siderbar-menu.php'; ?>

            <div id="setting" class="col p-0 d-flex justify-content-center align-items-center">

                <button type="button" class="btn-custom position-absolute" onclick="window.location.href='changepassword.php'">
                    修改密碼
                </button>

                <div id="content" class="container rounded">
                    <ul class="nav nav-tabs mt-2">
                        <li class="nav-item">
                            <a class="nav-link active" id="carousel-tab" data-bs-toggle="tab" href="#carousel" role="tab" aria-controls="carousel" aria-selected="true">輪播牆</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="introduction-tab" data-bs-toggle="tab" href="#introduction" role="tab" aria-controls="introduction" aria-selected="false">圖文介紹</a>
                        </li>
                    </ul>

                    <div class="tab-content mt-3">
                        <div class="tab-pane fade show active" id="carousel" role="tabpanel" aria-labelledby="carousel-tab">
                            
                            <button class="btn btn-sm btn-primary">新增</button>
                            
                            <table id="table"
                                    class="table"
                                    data-toggle="table"
                                    data-pagination="true"
                                    data-filter-control="true">
                                <thead>
                                    <tr>
                                        <th data-field="id">編號</th>
                                        <th data-field="name">名稱</th>
                                        <th data-field="image">圖片</th>
                                        <th data-field="hidden">隱藏</th>
                                        <th data-field="num_order">排序</th>
                                        <th data-field="manage">操作</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="introduction" role="tabpanel" aria-labelledby="introduction-tab">
                            介紹表格
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
