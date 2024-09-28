<div id="nav" class="col position-fixed d-flex flex-column">
    <nav id="sidebar" class="d-flex flex-column vh-100 pt-3 pb-3">
        <div class="logo d-flex justify-content-center mb-3">
            <img src="../images/05-校徽-英文組合排列.png" alt="Logo">
        </div>
        <div class="d-flex flex-column py-3 flex-grow-1">
            <ul class="nav flex-column flex-grow-1" id="menu">
                <li class="nav-item <?php echo $active == 'home' ? 'active' : '' ?>">
                    <a class="nav-link d-flex justify-content-center fw-bolder m-menu" href="home-setting.php">
                        Home
                    </a>
                </li>
                <li class="nav-item <?php echo $active == 'sa' ? 'active' : '' ?>">
                    <div class="row m-menu">
                        <div class="col-10 pe-0">
                            <a class="nav-link d-flex justify-content-center fw-bolder cursor-pointer m-menu-color" href="study-abroad-setting.php">
                                Study-Abroad
                            </a>
                        </div>
                        <div class="col-2 ps-0 d-flex align-items-end">
                            <a class="nav-link w-100 d-flex justify-content-end m-menu-color" data-bs-toggle="collapse" href="#studyAbroadMenu" role="button" aria-expanded="false" aria-controls="studyAbroadMenu">
                                <i class="fa fa-chevron-down"></i>
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>
                </li>

                <div class="collapse <?php echo in_array($active, array('apply', 'pi', 'sp', 'tc', 'ev', 'ml', 'acc', 'faq')) ? 'show' : '' ?>" id="studyAbroadMenu" data-bs-parent="#menu">
                    <ul class="nav flex-column">
                        <li class="nav-item <?php echo $active == 'apply' ? 'active' : '' ?>">
                            <a class="nav-link d-flex justify-content-center fw-bolder s-menu" href="how-to-apply-setting.php">How to Apply</a>
                        </li>
                        <li class="nav-item <?php echo $active == 'pi' ? 'active' : '' ?>">
                            <a class="nav-link d-flex justify-content-center fw-bolder s-menu" href="program-introduction-setting.php">Program Introduction</a>
                        </li>
                        <li class="nav-item <?php echo $active == 'sp' ? 'active' : '' ?>">
                            <a class="nav-link d-flex justify-content-center fw-bolder s-menu" href="study-package-setting.php">Study Package</a>
                        </li>
                        <li class="nav-item <?php echo $active == 'tc' ? 'active' : '' ?>">
                            <a class="nav-link d-flex justify-content-center fw-bolder s-menu" href="taiwanese-culture-setting.php">Taiwanese Culture</a>
                        </li>
                        <li class="nav-item <?php echo $active == 'ev' ? 'active' : '' ?>">
                            <a class="nav-link d-flex justify-content-center fw-bolder s-menu" href="enterprise-visit-setting.php">Enterprise Visit</a>
                        </li>
                        <li class="nav-item <?php echo $active == 'ml' ? 'active' : '' ?>">
                            <a class="nav-link d-flex justify-content-center fw-bolder s-menu" href="mandarin-learning-setting.php">Mandarin Learning</a>
                        </li>
                        <li class="nav-item <?php echo $active == 'acc' ? 'active' : '' ?>">
                            <a class="nav-link d-flex justify-content-center fw-bolder s-menu" href="accommdation-setting.php">Accommodation</a>
                        </li>
                        <li class="nav-item <?php echo $active == 'faq' ? 'active' : '' ?>">
                            <a class="nav-link d-flex justify-content-center fw-bolder s-menu" href="faq-setting.php">FAQ</a>
                        </li>
                    </ul>
                </div>

                <li class="nav-item mt-auto">
                    <a class="nav-link d-flex justify-content-center fw-bolder m-menu" href="accounttable.php">
                        帳號管理
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</div>