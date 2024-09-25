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
                                <div class="d-flex justify-content-end">
                                    <button type="button" class="btn btn-primary" id="introductionSave">儲存</button>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="scorer" role="tabpanel" aria-labelledby="scorer-tab">
                            <button type="button" class="btn btn-sm btn-primary mt-2 mb-2" data-bs-toggle="modal" data-bs-target="#addScorerModal">新增</button>
                            
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
                            <button type="button" class="btn btn-sm btn-primary mt-2 mb-2" data-bs-toggle="modal" data-bs-target="#addCarouselModal">新增</button>
                            
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

    <div class="modal fade" id="addScorerModal" tabindex="-1" aria-labelledby="addScorerModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addScorerModalLabel">新增計分器資料</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row mb-3">
                        <label for="addScoName" class="col-md-2 form-label">名稱<span class="text-danger">*</span></label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="addScoName">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="addScoImage" class="col-md-2 form-label">圖片<span class="text-danger">*</span></label>
                        <div class="col-md-10">
                            <input type="file" class="form-control" id="addScoImage">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="addScoNumber" class="col-md-2 form-label">數字<span class="text-danger">*</span></label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="addScoNumber">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-2 form-label">隱藏<span class="text-danger">*</span></label>
                        <div class="col-md-10">
                            <input type="radio" class="me-2" id="addScoYOption" name="addScoHidden" value="Y"><label for="addScoYOption">是</label>
                            <input type="radio" class="ms-5 me-2" id="addScoNOption" name="addScoHidden" value="N" checked><label for="addScoNOption">否</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="add-scorer">確認</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editScorerModal" tabindex="-1" aria-labelledby="editScorerModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editScorerModalLabel">編輯輪播牆圖片</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="text" class="d-none" id="sid">
                    <div class="row mb-3">
                        <label for="editScoName" class="col-md-2 form-label">名稱<span class="text-danger">*</span></label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="editScoName">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="editScoImage" class="col-md-2 form-label">圖片<span class="text-danger">*</span></label>
                        <div class="col-md-10">
                            <input type="file" class="form-control" id="editScoImage">
                            <span id="fileScoLabel" class="text-muted"></span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="editScoNumber" class="col-md-2 form-label">數字<span class="text-danger">*</span></label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="editScoNumber">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-2 form-label">隱藏<span class="text-danger">*</span></label>
                        <div class="col-md-10">
                            <input type="radio" class="me-2" id="editScoYOption" name="editScoHidden" value="Y"><label for="editScoYOption">是</label>
                            <input type="radio" class="ms-5 me-2" id="editScoNOption" name="editScoHidden" value="N" checked><label for="editScoNOption">否</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" id="edit-scorer">儲存</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addCarouselModal" tabindex="-1" aria-labelledby="addCarouselModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addCarouselModalLabel">新增輪播牆圖片</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row mb-3">
                        <label for="addCarName" class="col-md-2 form-label">名稱<span class="text-danger">*</span></label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="addCarName">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="addCarImage" class="col-md-2 form-label">圖片<span class="text-danger">*</span></label>
                        <div class="col-md-10">
                            <input type="file" class="form-control" id="addCarImage">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-2 form-label">隱藏<span class="text-danger">*</span></label>
                        <div class="col-md-10">
                            <input type="radio" class="me-2" id="addCarYOption" name="addCarHidden" value="Y"><label for="addCarYOption">是</label>
                            <input type="radio" class="ms-5 me-2" id="addCarNOption" name="addCarHidden" value="N" checked><label for="addCarNOption">否</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="add-carousel">確認</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editCarouselModal" tabindex="-1" aria-labelledby="editCarouselModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editCarouselModalLabel">編輯輪播牆圖片</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="text" class="d-none" id="cid">
                    <div class="row mb-3">
                        <label for="editCarName" class="col-md-2 form-label">名稱<span class="text-danger">*</span></label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="editCarName">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="editCarImage" class="col-md-2 form-label">圖片<span class="text-danger">*</span></label>
                        <div class="col-md-10">
                            <input type="file" class="form-control" id="editCarImage">
                            <span id="fileCarLabel" class="text-muted"></span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-2 form-label">隱藏<span class="text-danger">*</span></label>
                        <div class="col-md-10">
                            <input type="radio" class="me-2" id="editCarYOption" name="editCarHidden" value="Y"><label for="editCarYOption">是</label>
                            <input type="radio" class="ms-5 me-2" id="editCarNOption" name="editCarHidden" value="N" checked><label for="editCarNOption">否</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" id="edit-carousel">儲存</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>