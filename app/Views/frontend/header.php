<!-- app/Views/header.php -->
<header class="header-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light main-nav-box">
                    <a class="navbar-brand header-logo" href="<?= base_url(); ?>">
                        <img src="<?= base_url('uploads/' . basename($filePath)) ?>" alt="Logo" />
                    </a>
                    <button class="btn toggle-btn d-lg-none humbar-btn" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasExample" aria-controls="offcanvasExample" aria-label="toggle button">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
                        aria-labelledby="offcanvasExample">
                        <div class="offcanvas-header d-lg-none">
                            <a class="navbar-brand header-logo" href="<?= base_url(); ?>">Logo</a>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('/about'); ?>">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('/industries'); ?>">Industries</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('/job-seekers'); ?>">Job Seekers</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('/employers'); ?>">Employers</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('/knowledge-center'); ?>">Knowledge
                                        Center</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('/support'); ?>">Support</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <a href="<?= base_url('/contact'); ?>" class="custom-btn">
                        GET IN TOUCH <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </nav>
            </div>
        </div>
    </div>
</header>