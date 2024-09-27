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
    <link rel="stylesheet" href="css/common.css">

    <!-- JS -->
    <script type="text/javascript" src="js/sidebar.js"></script>
    <script type="module" src="js/how-to-apply-setting.js"></script>

    <title>後台系統</title>
</head>
<body>
    <div class="container-fluid vh-100 p-0">
        <div class="row h-100 g-0">

            <?php $active = 'apply'; include 'siderbar-menu.php'; ?>

            <div id="setting" class="col p-0 d-flex justify-content-center align-items-center">
                <div id="content" class="container rounded">
                    <ul class="nav nav-tabs mt-2">
                        <li class="nav-item">
                            <a class="nav-link active" id="timeline-tab" data-bs-toggle="tab" href="#timeline" role="tab" aria-controls="timeline" aria-selected="true">時程表</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="qualification-tab" data-bs-toggle="tab" href="#qualification" role="tab" aria-controls="qualification" aria-selected="false">申請資格</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="checklist-tab" data-bs-toggle="tab" href="#checklist" role="tab" aria-controls="checklist" aria-selected="false">文件清單</a>
                        </li>
                    </ul>

                    <div class="tab-content mt-3">
                        <div class="tab-pane fade show active" id="timeline" role="tabpanel" aria-labelledby="timeline-tab">
                            <button type="button" class="btn btn-sm btn-primary mt-2 mb-2" data-bs-toggle="modal" data-bs-target="#addTimelineModal">新增</button>
                            
                            <table id="timelineTable"
                                    class="table"
                                    data-toggle="table"
                                    data-pagination="true"
                                    data-page-size="10"
                                    data-filter-control="true">
                                <thead>
                                    <tr>
                                        <th data-field="id">編號</th>
                                        <th data-field="item">項目</th>
                                        <th data-field="hidden">隱藏</th>
                                        <th data-field="num_order">排序</th>
                                        <th data-field="manage">操作</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="qualification" role="tabpanel" aria-labelledby="qualification-tab">
                            <button type="button" class="btn btn-sm btn-primary mt-2 mb-2" data-bs-toggle="modal" data-bs-target="#addQualificationModal">新增</button>
                            
                            <table id="qualificationTable"
                                    class="table"
                                    data-toggle="table"
                                    data-pagination="true"
                                    data-page-size="10"
                                    data-filter-control="true">
                                <thead>
                                    <tr>
                                        <th data-field="id">編號</th>
                                        <th data-field="item">項目</th>
                                        <th data-field="hidden">隱藏</th>
                                        <th data-field="num_order">排序</th>
                                        <th data-field="manage">操作</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="checklist" role="tabpanel" aria-labelledby="checklist-tab">
                            <button type="button" class="btn btn-sm btn-primary mt-2 mb-2" data-bs-toggle="modal" data-bs-target="#addChecklistModal">新增</button>
                            
                            <table id="checklistTable"
                                    class="table"
                                    data-toggle="table"
                                    data-pagination="true"
                                    data-page-size="10"
                                    data-filter-control="true">
                                <thead>
                                    <tr>
                                        <th data-field="id">編號</th>
                                        <th data-field="item">項目</th>
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

    <div class="modal fade" id="addQualificationModal" tabindex="-1" aria-labelledby="addQualificationModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addQualificationModalLabel">新增申請資格資料</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row mb-3">
                        <label for="addQuaItem" class="col-md-2 form-label">項目<span class="text-danger">*</span></label>
                        <div class="col-md-10">
                            <textarea type="text" class="form-control" id="addQuaItem" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-2 form-label">隱藏<span class="text-danger">*</span></label>
                        <div class="col-md-10">
                            <input type="radio" class="form-check-input me-2" id="addQuaYOption" name="addQuaHidden" value="Y"><label for="addQuaYOption">是</label>
                            <input type="radio" class="form-check-input ms-5 me-2" id="addQuaNOption" name="addQuaHidden" value="N" checked><label for="addQuaNOption">否</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="add-qualification" data-sheet="how2apply_qualification">確認</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editQualificationModal" tabindex="-1" aria-labelledby="editQualificationModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editQualificationModalLabel">編輯申請資格資料</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="text" class="d-none" id="qid">
                    <div class="row mb-3">
                        <label for="editQuaItem" class="col-md-2 form-label">項目<span class="text-danger">*</span></label>
                        <div class="col-md-10">
                            <textarea type="text" class="form-control" id="editQuaItem" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-2 form-label">隱藏<span class="text-danger">*</span></label>
                        <div class="col-md-10">
                            <input type="radio" class="form-check-input me-2" id="editQuaYOption" name="editQuaHidden" value="Y"><label for="editQuaYOption">是</label>
                            <input type="radio" class="form-check-input ms-5 me-2" id="editQuaNOption" name="editQuaHidden" value="N" checked><label for="editQuaNOption">否</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" id="edit-qualification" data-sheet="how2apply_qualification">儲存</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addChecklistModal" tabindex="-1" aria-labelledby="addChecklistModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addChecklistModalLabel">新增文件清單資料</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row mb-3">
                        <label for="addCheItem" class="col-md-2 form-label">項目<span class="text-danger">*</span></label>
                        <div class="col-md-10">
                            <textarea type="text" class="form-control" id="addCheItem" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-2 form-label">隱藏<span class="text-danger">*</span></label>
                        <div class="col-md-10">
                            <input type="radio" class="form-check-input me-2" id="addCheYOption" name="addCheHidden" value="Y"><label for="addCheYOption">是</label>
                            <input type="radio" class="form-check-input ms-5 me-2" id="addCheNOption" name="addCheHidden" value="N" checked><label for="addCheNOption">否</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="add-checklist" data-sheet="how2apply_checklist">確認</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editChecklistModal" tabindex="-1" aria-labelledby="editChecklistModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editChecklistModalLabel">編輯文件清單資料</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="text" class="d-none" id="cid">
                    <div class="row mb-3">
                        <label for="editCheItem" class="col-md-2 form-label">項目<span class="text-danger">*</span></label>
                        <div class="col-md-10">
                            <textarea type="text" class="form-control" id="editCheItem" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-2 form-label">隱藏<span class="text-danger">*</span></label>
                        <div class="col-md-10">
                            <input type="radio" class="form-check-input me-2" id="editCheYOption" name="editCheHidden" value="Y"><label for="editCheYOption">是</label>
                            <input type="radio" class="form-check-input ms-5 me-2" id="editCheNOption" name="editCheHidden" value="N" checked><label for="editCheNOption">否</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" id="edit-checklist" data-sheet="how2apply_checklist">儲存</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>