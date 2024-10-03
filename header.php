<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <div class="navbar-nav ms-auto d-flex align-items-center">
            <div class="nav-item d-flex align-items-center me-3">
                <i class="fas fa-home me-1"></i>
                <a class="nav-link" href="home.php">Home</a>
            </div>
            <div class="nav-item d-flex align-items-center me-3">
                <i class="fas fa-language me-1"></i>
                <a class="nav-link" href="#">Lang</a>
            </div>
            <div class="nav-item d-flex align-items-center me-3">
                <i class="fas fa-university me-1"></i>
                <a class="nav-link" href="https://www.fju.edu.tw/" target="_blank">FJCU</a>
            </div>
            <div class="nav-item d-flex align-items-center me-3">
                <i class="fas fa-sitemap me-1"></i>
                <!-- <a class="nav-link" href="sitemap.php">Sitemap</a> -->
                <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#sitemapModal">Sitemap</a>
            </div>
        </div>
    </div>
</nav>

<div class="modal fade" id="sitemapModal" tabindex="-1" aria-labelledby="sitemapModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php include 'sitemap.php'; ?>
            </div>
        </div>
    </div>
</div>