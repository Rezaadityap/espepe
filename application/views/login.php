<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Espepe</title>
    <link rel="shortcut icon" type="image/png" href="<?= base_url() ?>assets/images/logos/logo.png" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/styles.min.css" />
    <!-- SWAL -->
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/swal/sweetalert2.min.css">
</head>

<body>
    <?php if ($this->session->flashdata('error_message')) { ?>
    <div class="dataFlash" data-flashdata="<?php echo $this->session->flashdata('error_message'); ?>"></div>
    <?php } ?>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <div
            class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="row justify-content-center w-100">
                    <div class="col-md-8 col-lg-6 col-xxl-3">
                        <div class="card mb-0">
                            <div class="card-body">
                                <a href="#" class="text-nowrap logo-img text-center d-block py-3 w-100">
                                    <img src="<?= base_url() ?>assets/images/logos/logo.png" width="100" alt="">
                                </a>
                                <h3 class="text-center">ESPEPE</h3>
                                <p class="text-center">RA Nihayatul Amal Purwasari</p>
                                <form method="post" action="<?= base_url('authentication/login') ?>">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Username</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="Masukkan Username" name="username"
                                            required>
                                    </div>
                                    <div class="mb-4">
                                        <label for="exampleInputPassword1" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1"
                                            placeholder="Masukkan Password" name="password" required>
                                    </div>
                                    <button type="submit"
                                        class="btn btn-primary w-100 fs-4 mb-4 rounded-2">Masuk</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?= base_url() ?>assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Swal -->
    <script src="<?php echo base_url() ?>assets/swal/sweetalert2.all.min.js"></script>
    <script src="<?php echo base_url() ?>assets/swal/sweetalert2.min.js"></script>
    <script src="<?php echo base_url() ?>assets/swal/myscript.js"></script>
</body>

</html>