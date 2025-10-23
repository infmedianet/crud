<nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-lg-none">
    <a class="navbar-brand me-lg-5" href="<?= base_url('user/dashboardUser') ?>">
        <img class="navbar-brand-dark" src="<?= base_url('') ?>assets/img/favicon/logo.png" alt="Volt logo" /> <img class="navbar-brand-light" src="<?= base_url('') ?>assets/img/favicon/logo.png" alt="Volt logo" />
    </a>
    <div class="d-flex align-items-center">
        <button class="navbar-toggler d-lg-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

<nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar>
    <div class="sidebar-inner px-4 pt-3">

        <div class="collapse-close d-md-none">
            <a href="#sidebarMenu" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="true" aria-label="Toggle navigation">
                <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </a>
        </div>

        <ul class="nav flex-column pt-3 pt-md-0">
            <li class="nav-item">
                <a href="<?= base_url('user/dashboardUser') ?>" class="nav-link d-flex align-items-center">
                    <span class="sidebar-icon">
                        <img src="<?= base_url('') ?>assets/img/favicon/logo.png" height="20" width="20" alt="Volt Logo">
                    </span>
                    <span class="mt-1 ms-1 sidebar-text">CRUD - RSU RC</span>
                </a>
            </li>

            <li class="nav-item active ">
                <a href="<?= base_url('user/dashboardUser') ?>" class="nav-link">
                    <span class="sidebar-icon">
                        <i class="bi bi-house-door-fill"></i></span>
                    <span class="sidebar-text"><b>Dashboard</b></span>
                </a>
            </li>

            <li class="nav-item">
                <span class="nav-link  collapsed  d-flex justify-content-between align-items-center" data-bs-toggle="collapse" data-bs-target="#submenu-data">
                    <span>
                        <span class="sidebar-icon">
                            <i class="bi bi-person-lines-fill"></i>
                        </span>
                        <span class="sidebar-text">Data Pasien</span>
                    </span>
                    <span class="link-arrow">
                        <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                        </svg>
                    </span>
                </span>
                <div class="multi-level collapse " role="list" id="submenu-data" aria-expanded="false">
                    <ul class="flex-column nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="<?= base_url('user/pilihHistoriPasien') ?>">
                                <span class="sidebar-icon">
                                    <i class="bi bi-person-vcard-fill"></i>
                                </span>
                                <span class="sidebar-text">Pasien Rajal</span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="<?= base_url('user/pilihHistoriPasienRanap') ?>">
                                <span class="sidebar-icon">
                                    <i class="bi bi-person-video2"></i>
                                </span>
                                <span class="sidebar-text">Pasien Ranap</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>



            <hr>
            <li class="nav-item active">
                <span class="nav-link  collapsed  d-flex justify-content-between align-items-center" data-bs-toggle="collapse" data-bs-target="#submenu-app">
                    <span class="sidebar-icon">
                        <img class="avatar rounded-circle" alt="Image placeholder" src="<?= base_url('') ?>assets/img/usericon.png">
                        <span class="sidebar-text" style="color:white"><?php echo $_SESSION['username'] ?></span>
                    </span>
                    <span class="link-arrow">
                        <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                        </svg>
                    </span>
                </span>

                <div class="multi-level collapse " role="list" id="submenu-app" aria-expanded="false">
                    <ul class="flex-column nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="<?= base_url('login/logout') ?>">
                                <span class="sidebar-icon">
                                    <i class="bi bi-box-arrow-right"></i></span>
                                <span class="sidebar-text">Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

        </ul>
    </div>
</nav>