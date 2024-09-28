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

    <!-- 引入 Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="css/common.css">

    <!-- JS -->
    <script type="text/javascript" src="js/sidebar.js"></script>

    <title>後台系統</title>
</head>
<body>
    <div class="container-fluid vh-100 p-0">
        <div class="row h-100 g-0">
            <!-- 側邊欄-->
            <?php include 'siderbar-menu.php'; ?>

            <div id="setting" class="col p-0 d-flex justify-content-center align-items-center">
                <div id="content" class="container rounded">
                    <div class="row">
                        <div class="col d-flex justify-content-start mt-3">
                            <div class="form-group">
                                <label style="font-weight: bold">登入次數日期區間</label>
                                <div class="row">
                                    <div class="col px-1 ml-2">
                                        <input type="date" class="form-control" id="loginDate1" value="2022-01-01" max="<?php echo date('Y-m-d')?>">
                                    </div>
                                    <div class="col px-1">
                                        <input type="date" class="form-control" id="loginDate2" value="<?php echo date('Y-m-d')?>" min="2022-01-01" max="<?php echo date('Y-m-d')?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-content mt-3">
                        <div class="tab-pane fade show active" id="accouttable" role="tabpanel" aria-labelledby="timeline-tab">
                            <!-- 新增帳號按鈕 -->
                            <button onclick="resetAddAccountForm()" type="button" class="btn btn-sm btn-primary mt-2 mb-2" data-bs-toggle="modal" data-bs-target="#addAccountModal">新增帳號</button>
                            
                            <table id="timelineTable"
                                    class="table"
                                    data-toggle="table"
                                    data-pagination="true"
                                    data-page-size="10"
                                    data-filter-control="true">
                                <thead>
                                    <tr>
                                        <th data-field="id">編號</th>
                                        <th data-field="account">帳號</th>
                                        <th data-field="mail">信箱</th>
                                        <th data-field="chinese_name">中文姓名</th>
                                        <th data-field="english_name">英文姓名</th>
                                        <th data-field="department">單位</th>
                                        <th data-field="login_times">登入次數</th>
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

    <!-- 新增帳號 Modal -->
    <div class="modal fade" id="addAccountModal" tabindex="-1" aria-labelledby="addAccountModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addAccountModalLabel">新增帳號</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="account" class="form-label">帳號</label>
                            <input type="text" class="form-control" id="account">
                        </div>
                        <div class="mb-3">
                            <label for="mail" class="form-label">信箱</label>
                            <input type="email" class="form-control" id="mail">
                        </div>
                        <div class="mb-3">
                            <label for="chineseName" class="form-label">中文姓名</label>
                            <input type="text" class="form-control" id="chineseName">
                        </div>
                        <div class="mb-3">
                            <label for="englishName" class="form-label">英文姓名</label>
                            <input type="text" class="form-control" id="englishName">
                        </div>
                        <div class="mb-3">
                            <label for="department" class="form-label">單位</label>
                            <input type="text" class="form-control" id="department">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">取消</button>
                    <button type="button" class="btn btn-primary">儲存</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>