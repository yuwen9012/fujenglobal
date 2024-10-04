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
    <link rel="stylesheet" href="css/common.css">

    <!-- JS -->
    <script type="text/javascript" src="js/sidebar.js"></script>
    <script type="module" src="js/study-package-setting.js"></script>

    <title>後台系統</title>
</head>
<body>
    <div class="container-fluid vh-100 p-0">
        <div class="row h-100 g-0">

            <?php $active = 'sp'; include 'siderbar-menu.php'; ?>

            <div id="setting" class="col p-0 d-flex justify-content-center align-items-center">
                <div id="content" class="container rounded">
                    <ul class="nav nav-tabs mt-2">
                        <li class="nav-item">
                            <a class="nav-link active" id="subtitle-tab" data-bs-toggle="tab" href="#subtitle" role="tab" aria-controls="subtitle" aria-selected="false">標題列表</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="college-tab" data-bs-toggle="tab" href="#college" role="tab" aria-controls="college" aria-selected="true">學院列表</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" id="" href="SP-edit.php">內文</a>
                        </li>
                    </ul>

                    <div class="tab-content mt-3">
                        <div class="tab-pane fade show active" id="subtitle" role="tabpanel" aria-labelledby="subtitle-tab">
                            <button type="button" class="btn btn-sm btn-primary mt-2 mb-2" data-bs-toggle="modal" data-bs-target="#addSubtitleModal">新增</button>
                            
                            <table id="subtitleTable"
                                    class="table"
                                    data-toggle="table"
                                    data-pagination="true"
                                    data-page-size="10">
                                <thead>
                                    <tr>
                                        <th data-field="id">編號</th>
                                        <th data-field="name">名稱</th>
                                        <th data-field="update_user">更新人員</th>
                                        <th data-field="update_time">更新時間</th>
                                        <th data-field="manage">操作</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="college" role="tabpanel" aria-labelledby="college-tab">
                            <button type="button" class="btn btn-sm btn-primary mt-2 mb-2" id="addCollegeBtn" data-bs-toggle="modal" data-bs-target="#addCollegeModal">新增</button>
                            
                            <table id="collegeTable"
                                    class="table"
                                    data-toggle="table"
                                    data-pagination="true"
                                    data-page-size="10"
                                    data-search="true"
                                    data-show-search-clear-button="true"
                                    data-show-columns="true">
                                <thead>
                                    <tr>
                                        <th data-field="id">編號</th>
                                        <th data-field="name_en">英文名</th>
                                        <th data-field="name_ch">中文名</th>
                                        <th data-field="subtitle">使用標題數</th>
                                        <th data-field="hidden">隱藏</th>
                                        <th data-field="num_order">排序</th>
                                        <th data-field="update_user">更新人員</th>
                                        <th data-field="update_time">更新時間</th>
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

    <div class="modal fade" id="addSubtitleModal" tabindex="-1" aria-labelledby="addSubtitleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addSubtitleModalLabel">新增內文標題</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row mb-3">
                        <label for="addSubName" class="col-md-2 form-label">名稱<span class="text-danger">*</span></label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="addSubName">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="add-subtitle">確認</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editSubtitleModal" tabindex="-1" aria-labelledby="edtSubtitleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editSubtitleModalLabel">編輯內文標題</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="text" class="d-none" id="sid">
                    <div class="row mb-3">
                        <label for="editSubName" class="col-md-2 form-label">名稱<span class="text-danger">*</span></label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="editSubName">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="edit-subtitle">儲存</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addCollegeModal" tabindex="-1" aria-labelledby="addCollegeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addCollegeModalLabel">新增學院</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row mb-3">
                        <label for="addColEnname" class="col-md-2 form-label">英文名<span class="text-danger">*</span></label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="addColEnname">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="addColChname" class="col-md-2 form-label">中文名<span class="text-danger">*</span></label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="addColChname">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-2 form-label">標題<span class="text-danger">*</span></label>
                        <div class="col-md-10" id="addColSubtitleBlock">
                            
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-2 form-label">隱藏<span class="text-danger">*</span></label>
                        <div class="col-md-10">
                            <input type="radio" class="form-check-input me-2" id="addColYOption" name="addColHidden" value="Y"><label for="addColYOption">是</label>
                            <input type="radio" class="form-check-input ms-5 me-2" id="addColNOption" name="addColHidden" value="N" checked><label for="addColNOption">否</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="add-college">確認</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editCollegeModal" tabindex="-1" aria-labelledby="editCollegeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editCollegeModalLabel">編輯學院</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="text" class="d-none" id="cid">
                    <div class="row mb-3">
                        <label for="editColEnname" class="col-md-2 form-label">英文名<span class="text-danger">*</span></label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="editColEnname">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="editColChname" class="col-md-2 form-label">中文名<span class="text-danger">*</span></label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="editColChname">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-2 form-label">標題<span class="text-danger">*</span></label>
                        <div class="col-md-10" id="editColSubtitleBlock">
                            
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-2 form-label">隱藏<span class="text-danger">*</span></label>
                        <div class="col-md-10">
                            <input type="radio" class="form-check-input me-2" id="editColYOption" name="editColHidden" value="Y"><label for="editColYOption">是</label>
                            <input type="radio" class="form-check-input ms-5 me-2" id="editColNOption" name="editColHidden" value="N" checked><label for="editColNOption">否</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" id="edit-college">儲存</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>