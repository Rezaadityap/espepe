<div class="container-fluid">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#tambahData">
        Tambah Ortu
    </button>
    <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('success_message'); ?>"></div>

    <!-- Modal tambah data -->
    <div class="modal fade" id="tambahData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah data ortu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="<?= base_url('admin/ortu/tambah')?>" method="POST">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Nama Orang Tua</label>
                            <input type="text" class="form-control" name="nama_ortu" placeholder="Masukkan nama ortu"
                                required>
                            <input type="hidden" class="form-control" name="role_id" value="2">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Hubungan</label>
                            <select class="form-select" name="hubungan" required>
                                <option value="">Pilih Hubungan</option>
                                <option value="Ayah">Ayah</option>
                                <option value="Ibu">Ibu</option>
                                <option value="Wali">Wali</option>
                                <option value="Sepupu">Sepupu</option>
                                <option value="Saudara Kandung">Saudara Kandung</option>
                                <option value="Paman">Paman</option>
                                <option value="Bibi">Bibi</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nomor HP</label>
                            <input type="number" class="form-control" name="no_hp" placeholder="Masukkan no.hp"
                                required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Alamat</label>
                            <textarea name="alamat" class="form-control" placeholder="Masukkan alamat"
                                required></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input type="text" class="form-control" name="username" placeholder="Masukkan username"
                                required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" placeholder="Masukkan Password" name="password">
                            <?php echo form_error('password', '<div class = "text-small text-danger"></div>') ?>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Ulangi Password</label>
                            <input type="password" class="form-control" placeholder="Ulangi Password" name="password2">
                            <?php echo form_error('password2', '<div class = "text-small text-danger"></div>') ?>
                        </div>
                    </div>
                    <div class=" modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-12 d-flex align-items-stretch">
        <div class="card w-100">
            <div class="card-body p-4">
                <div class="d-flex mb-4 justify-content-between align-items-center">
                    <h5 class="mb-0 fw-bold">Data Orang Tua</h5>
                </div>

                <div class="table-responsive" data-simplebar>
                    <table class="table table-borderless align-middle text-nowrap">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Ortu</th>
                                <th scope="col">Hubungan</th>
                                <th scope="col">No.Hp</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; foreach($ortu as $o) : ?>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="me-4">
                                            <p class="fs-3 fw-normal mb-0"><?php echo $no++; ?></p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="fs-3 fw-normal mb-0"><?php echo $o->nama_ortu; ?></p>
                                </td>
                                <td>
                                    <p class="fs-3 fw-normal mb-0">
                                        <?php echo $o->hubungan ?>
                                    </p>
                                </td>
                                <td>
                                    <p class="fs-3 fw-normal mb-0">
                                        <?php echo $o->no_hp ?>
                                    </p>
                                </td>
                                <td>
                                    <p class="fs-3 fw-normal mb-0">
                                        <?php echo $o->alamat ?>
                                    </p>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal"
                                        data-bs-target="#editData<?= $o->id_ortu ?>">
                                        <i class="ti ti-edit"></i>
                                    </button>
                                    <a href="<?= base_url('admin/ortu/hapus/') . $o->id_ortu ?>"
                                        class="btn btn-sm btn-danger tombol-hapus"><i class="ti ti-trash"></i></a>
                                </td>
                            </tr>
                            <?php endforeach ; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal edit data -->
    <?php foreach($ortu as $o) : ?>
    <div class="modal fade" id="editData<?= $o->id_ortu ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit data ortu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="<?= base_url('admin/ortu/edit')?>" method="POST">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Nama Orang Tua</label>
                            <input type="text" class="form-control" name="nama_ortu" value="<?= $o->nama_ortu ?>">
                            <input type="hidden" class="form-control" name="id_ortu" value="<?= $o->id_ortu ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Hubungan</label>
                            <select class="form-select" name="hubungan" required>
                                <option value="<?= $o->hubungan ?>"> <?= $o->hubungan ?></option>
                                <option value="Ayah">Ayah</option>
                                <option value="Ibu">Ibu</option>
                                <option value="Wali">Wali</option>
                                <option value="Sepupu">Sepupu</option>
                                <option value="Saudara Kandung">Saudara Kandung</option>
                                <option value="Paman">Paman</option>
                                <option value="Bibi">Bibi</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nomor HP</label>
                            <input type="number" class="form-control" name="no_hp" value="<?= $o->no_hp ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Alamat</label>
                            <textarea name="alamat" class="form-control"><?= $o->alamat ?></textarea>
                        </div>
                    </div>
                    <div class=" modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php endforeach ; ?>