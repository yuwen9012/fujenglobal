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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-table@1.23.2/dist/bootstrap-table.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-table@1.23.2/dist/bootstrap-table.min.js"></script>

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="css/home-setting.css">

    <!-- JS -->
    <script type="text/javascript" src="js/sidebar.js"></script>
    <script type="text/javascript" src="js/home-setting.js"></script>

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
                                        <th data-field="link">連結</th>
                                        <th data-field="hidden">隱藏</th>
                                        <th data-field="num_order">排序</th>
                                        <th data-field="manage">操作</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>

                        <div class="tab-pane fade" id="introduction" role="tabpanel" aria-labelledby="introduction-tab">

                            <button type="button" class="btn btn-sm btn-primary mt-2 mb-2" data-bs-toggle="modal" data-bs-target="#editTextModal">編輯文字</button>
                            
                            <table id="introductionTable"
                                    class="table"
                                    data-toggle="table"
                                    data-pagination="true"
                                    data-page-size="5"
                                    data-filter-control="true">
                                <thead>
                                    <tr>
                                        <th data-field="id">編號</th>
                                        <th data-field="position">位置</th>
                                        <th data-field="image">圖片</th>
                                        <th data-field="update_user">更新人員</th>
                                        <th data-field="update_time">更新時間</th>
                                        <th data-field="manage">操作</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addModalLabel">新增輪播牆圖片</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row mb-3">
                        <label for="addName" class="col-md-2 form-label">名稱<span class="text-danger">*</span></label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="addName">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="addImage" class="col-md-2 form-label">圖片<span class="text-danger">*</span></label>
                        <div class="col-md-10">
                            <input type="file" class="form-control" id="addImage">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="addLink" class="col-md-2 form-label">連結</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="addLink">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-4 form-label">連結開啟方式<span class="text-danger" id="target-required" style="display: none;">*</span></label>
                        <div class="col-md-8">
                            <input type="radio" class="me-2" id="addSelfOption" name="addTarget" value="self" disabled><label for="addSelfOption">原頁跳轉</label>
                            <input type="radio" class="ms-5 me-2" id="addBlankOption" name="addTarget" value="blank" disabled><label for="addBlankOption">另開視窗</label>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-2 form-label">隱藏<span class="text-danger">*</span></label>
                        <div class="col-md-10">
                            <input type="radio" class="me-2" id="addYOption" name="addHidden" value="Y"><label for="addYOption">是</label>
                            <input type="radio" class="ms-5 me-2" id="addNOption" name="addHidden" value="N" checked><label for="addNOption">否</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="add-carousel">確認</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editModalLabel">編輯輪播牆圖片</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="text" class="d-none" id="cid">
                    <div class="row mb-3">
                        <label for="editName" class="col-md-2 form-label">名稱<span class="text-danger">*</span></label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="editName">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="editImage" class="col-md-2 form-label">圖片<span class="text-danger">*</span></label>
                        <div class="col-md-10">
                            <input type="file" class="form-control" id="editImage">
                            <span id="fileLabel" class="text-muted"></span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="editLink" class="col-md-2 form-label">連結</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="editLink">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-4 form-label">連結開啟方式<span class="text-danger" id="target-required" style="display: none;">*</span></label>
                        <div class="col-md-8">
                            <input type="radio" class="me-2" id="editSelfOption" name="editTarget" value="self" disabled><label for="editSelfOption">原頁跳轉</label>
                            <input type="radio" class="ms-5 me-2" id="editBlankOption" name="editTarget" value="blank" disabled><label for="editBlankOption">另開視窗</label>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-2 form-label">隱藏<span class="text-danger">*</span></label>
                        <div class="col-md-10">
                            <input type="radio" class="me-2" id="editYOption" name="editHidden" value="Y"><label for="editYOption">是</label>
                            <input type="radio" class="ms-5 me-2" id="editNOption" name="editHidden" value="N" checked><label for="editNOption">否</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" id="edit-carousel">儲存</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editTextModal" tabindex="-1" aria-labelledby="editTextModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editTextModalLabel">介紹文字</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
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
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="introductionSave">儲存</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editImageModal" tabindex="-1" aria-labelledby="editImageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editImageModalLabel">編輯圖片</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="text" class="d-none" id="iid">
                    <div class="row mb-3">
                        <label for="editPosition" class="col-md-2 form-label">位置</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="editPosition" disabled>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="editIntroductionImage" class="col-md-2 form-label">圖片<span class="text-danger">*</span></label>
                        <div class="col-md-10">
                            <input type="file" class="form-control" id="editIntroductionImage">
                            <span id="imageLabel" class="text-muted"></span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" id="edit-image">儲存</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
