<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Espepe</title>
    <link rel="shortcut icon" type="image/png" href="<?= base_url() ?>assets/images/logos/logo.png" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/styles.min.css" />
    <!-- SWAL -->
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/swal/sweetalert2.min.css">
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-simplebar>
                <div class="d-flex mb-4 align-items-center justify-content-center">
                    <a href="index.html" class="text-nowrap logo-img ms-0 ms-md-1">
                        <img src="<?= base_url() ?>assets/images/logos/logo.png" width="100" alt="">
                    </a>
                    <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                        <i class="ti ti-x fs-8"></i>
                    </div>
                </div>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="mb-4 pb-2">
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link primary-hover-bg"
                                href="<?= base_url('admin/dashboard')?>" aria-expanded="false">
                                <span class="aside-icon p-2 bg-light-primary rounded-3">
                                    <i class="ti ti-layout-dashboard fs-7 text-primary"></i>
                                </span>
                                <span class="hide-menu ms-2 ps-1">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link warning-hover-bg" href="<?= base_url('admin/ortu')?>"
                                aria-expanded="false">
                                <span class="aside-icon p-2 bg-light-warning rounded-3">
                                    <i class="ti ti-user fs-7 text-warning"></i>
                                </span>
                                <span class="hide-menu ms-2 ps-1">Orang Tua</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link success-hover-bg" href="./ui-alerts.html"
                                aria-expanded="false">
                                <span class="aside-icon p-2 bg-light-success rounded-3">
                                    <i class="ti ti-id-badge fs-7 text-success"></i>
                                </span>
                                <span class="hide-menu ms-2 ps-1">Siswa</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link indigo-hover-bg" href="./ui-typography.html"
                                aria-expanded="false">
                                <span class="aside-icon p-2 bg-light-indigo rounded-3">
                                    <i class="ti ti-wallet fs-7 text-indigo"></i>
                                </span>
                                <span class="hide-menu ms-2 ps-1">Pembayaran</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link primary-hover-bg" href="./ui-typography.html"
                                aria-expanded="false">
                                <span class="aside-icon p-2 bg-light-primary rounded-3">
                                    <i class="ti ti-files fs-7 text-primary"></i>
                                </span>
                                <span class="hide-menu ms-2 ps-1">Laporan</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link success-hover-bg" href="./ui-typography.html"
                                aria-expanded="false">
                                <span class="aside-icon p-2 bg-light-success rounded-3">
                                    <i class="ti ti-world fs-7 text-success"></i>
                                </span>
                                <span class="hide-menu ms-2 ps-1">Profil Madrasah</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link danger-hover-bg tombol-keluar"
                                href="<?= base_url('authentication/logout')?>" aria-expanded="false">
                                <span class="aside-icon p-2 bg-light-danger rounded-3">
                                    <i class="ti ti-logout fs-7 text-danger"></i>
                                </span>
                                <span class="hide-menu ms-2 ps-1">Keluar</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!--  Sidebar End -->