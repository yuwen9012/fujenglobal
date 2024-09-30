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
    <script type="module" src="js/faq-setting.js"></script>

    <title>後台系統</title>
</head>
<body>
    <div class="container-fluid vh-100 p-0">
        <div class="row h-100 g-0">

            <?php $active = 'faq'; include 'siderbar-menu.php'; ?>

            <div id="setting" class="col p-0 d-flex justify-content-center align-items-center">
                <div id="content" class="container rounded">
                    <ul class="nav nav-tabs mt-2">
                        <li class="nav-item">
                            <a class="nav-link active" id="qtype-tab" data-bs-toggle="tab" href="#qtype" role="tab" aria-controls="qtype" aria-selected="true">題組設定</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="qa-tab" data-bs-toggle="tab" href="#qa" role="tab" aria-controls="qa" aria-selected="false">Q&A</a>
                        </li>
                    </ul>

                    <div class="tab-content mt-3">
                        <div class="tab-pane fade show active" id="qtype" role="tabpanel" aria-labelledby="qtype-tab">
                            <button type="button" class="btn btn-sm btn-primary mt-2 mb-2" data-bs-toggle="modal" data-bs-target="#addQtypeModal">新增</button>
                            
                            <table id="qtypeTable"
                                    class="table"
                                    data-toggle="table"
                                    data-pagination="true"
                                    data-page-size="10">
                                <thead>
                                    <tr>
                                        <th data-field="id">編號</th>
                                        <th data-field="type">題組名稱</th>
                                        <th data-field="num_order">排序</th>
                                        <th data-field="update_user">更新人員</th>
                                        <th data-field="update_time">更新時間</th>
                                        <th data-field="manage">操作</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="qa" role="tabpanel" aria-labelledby="qa-tab">
                            <button type="button" class="btn btn-sm btn-primary mt-2 mb-2" data-bs-toggle="modal" data-bs-target="#addQnaModal">新增</button>
                            
                            <table id="qnaTable"
                                    class="table"
                                    data-toggle="table"
                                    data-pagination="true"
                                    data-page-size="5"
                                    data-search="true"
                                    data-show-search-clear-button="true"
                                    data-show-columns="true">
                                <thead>
                                    <tr>
                                        <th data-field="id">編號</th>
                                        <th data-field="type">題組</th>
                                        <th data-field="question">題目</th>
                                        <th data-field="reply">回覆</th>
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

    <div class="modal fade" id="addQtypeModal" tabindex="-1" aria-labelledby="addQtypeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addQtypeModalLabel">新增題組</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row mb-3">
                        <label for="addQtyType" class="col-md-2 form-label">題組名<span class="text-danger">*</span></label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="addQtyType">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="add-qtype">確認</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editQtypeModal" tabindex="-1" aria-labelledby="editQtypeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editQtypeModalLabel">編輯題組</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="text" class="d-none" id="qid">
                    <div class="row mb-3">
                        <label for="editQtyType" class="col-md-2 form-label">題組名<span class="text-danger">*</span></label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="editQtyType">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" id="edit-qtype">儲存</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addQnaModal" tabindex="-1" aria-labelledby="addQnaModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addQnaModalLabel">新增題目</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row mb-3">
                        <label for="addQnaType" class="col-md-1 form-label">題組<span class="text-danger">*</span></label>
                        <div class="col-md-11">
                            <select class="form-select" id="addQnaType"></select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="addQnaQuestion" class="col-md-1 form-label">題目<span class="text-danger">*</span></label>
                        <div class="col-md-11">
                            <textarea type="text" class="form-control" id="addQnaQuestion" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="addQnaReply" class="col-md-1 form-label">回覆<span class="text-danger">*</span></label>
                        <div class="col-md-11">
                            <textarea type="text" class="form-control" id="addQnaReply" rows="8"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="add-qna">確認</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editQnaModal" tabindex="-1" aria-labelledby="editQnaModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editQnaModalLabel">編輯題目</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="text" class="d-none" id="aid">
                    <div class="row mb-3">
                        <label for="editQnaType" class="col-md-1 form-label">題組<span class="text-danger">*</span></label>
                        <div class="col-md-11">
                            <select class="form-select" id="editQnaType"></select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="editQnaQuestion" class="col-md-1 form-label">題目<span class="text-danger">*</span></label>
                        <div class="col-md-11">
                            <textarea type="text" class="form-control" id="editQnaQuestion" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="editQnaReply" class="col-md-1 form-label">回覆<span class="text-danger">*</span></label>
                        <div class="col-md-11">
                            <textarea type="text" class="form-control" id="editQnaReply" rows="8"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" id="edit-qna">儲存</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>