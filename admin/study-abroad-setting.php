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
    <link rel="stylesheet" href="css/study-abroad-setting.css">

    <!-- JS -->
    <script type="text/javascript" src="js/sidebar.js"></script>
    <script type="text/javascript" src="js/study-abroad-setting.js"></script>

    <title>後台系統</title>
</head>
<body>
    <div class="container-fluid vh-100 p-0">
        <div class="row h-100 g-0">

            <?php $active = 'sa'; include 'siderbar-menu.php'; ?>

            <div id="setting" class="col p-0 d-flex justify-content-center align-items-center">
                <div id="content" class="container rounded">
                    <ul class="nav nav-tabs mt-2">
                        <li class="nav-item">
                            <a class="nav-link active" id="introduction-tab" data-bs-toggle="tab" href="#introduction" role="tab" aria-controls="introduction" aria-selected="true">介紹文字</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="scorer-tab" data-bs-toggle="tab" href="#scorer" role="tab" aria-controls="scorer" aria-selected="false">計分器</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="carousel-tab" data-bs-toggle="tab" href="#carousel" role="tab" aria-controls="carousel" aria-selected="false">輪播牆</a>
                        </li>
                    </ul>

                    <div class="tab-content mt-3">
                        <div class="tab-pane fade show active" id="introduction" role="tabpanel" aria-labelledby="introduction-tab">
                            <div class="container">
                                <div class="row mb-3">
                                    <label for="title" class="col-md-1 form-label">標題<span class="text-danger">*</span></label>
                                    <div class="col-md-11">
                                        <input type="text" class="form-control" id="title">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="writing" class="col-md-1 form-label">內文<span class="text-danger">*</span></label>
                                    <div class="col-md-11">
                                        <textarea type="text" class="form-control" id="writing" rows="8"></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12 text-end small text-muted">
                                        最後更新人員: <span id="lastUpdatedBy"></span> &nbsp; | &nbsp;
                                        最後更新時間: <span id="lastUpdatedTime"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="scorer" role="tabpanel" aria-labelledby="scorer-tab">
                            
                            <button type="button" class="btn btn-sm btn-primary mt-2 mb-2" data-bs-toggle="modal" data-bs-target="#addModal">新增</button>
                            
                            <table id="scorerTable"
                                    class="table"
                                    data-toggle="table"
                                    data-pagination="true"
                                    data-page-size="5"
                                    data-filter-control="true">
                                <thead>
                                    <tr>
                                        <th data-field="id">編號</th>
                                        <th data-field="name">名稱</th>
                                        <th data-field="image">圖片</th>
                                        <th data-field="quantity">數字</th>
                                        <th data-field="hidden">隱藏</th>
                                        <th data-field="num_order">排序</th>
                                        <th data-field="manage">操作</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="carousel" role="tabpanel" aria-labelledby="carousel-tab">
                        
                            <button type="button" class="btn btn-sm btn-primary mt-2 mb-2" data-bs-toggle="modal" data-bs-target="#addModal">新增</button>
                            
                            <table id="carouselTable"
                                    class="table"
                                    data-toggle="table"
                                    data-pagination="true"
                                    data-page-size="5"
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
                    </div>
                <div>
            </div>
        </div>
    </div>
</body>
</html>