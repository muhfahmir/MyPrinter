<!DOCTYPE html>
<html lang="en">

<head>

    <?php $this->load->view('admin/templates/head'); ?>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php $this->load->view('admin/templates/sidebar'); ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php $this->load->view('admin/templates/navbar'); ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <?php if (($this->session->flashdata('message'))) : ?>
                    <?= $this->session->flashdata('message'); ?>

                    <?php endif ?>

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between">
                        <h1 class="h3 mb-0 text-gray-800"><?= $contentTitle;?></h1>
                        <a href="<?= base_url('admin/gejala/create')?>" class="btn btn-primary"><i
                                class="fas fa-plus"></i>
                            Tambah
                            <?= $title?></a>
                    </div>
                    <hr>

                    <div class="card">
                        <div class="card-header">
                            <div class="d-sm-flex align-items-center justify-content-between ">
                                <h1 class="h3 mb-0 text-gray-800">Data Gejala</h1>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th style="width: 21px;" id="no-sorting">ID</th>
                                            <th>Nama Gejala</th>
                                            <th style="width: 21px;" id="no-sorting"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($gejalas as $gejala) : ?>
                                        <tr>
                                            <td><?= $gejala['id'] ?></td>
                                            <td><?= $gejala['nama'] ?></td>
                                            <td>
                                                <div class="dropdown no-arrow">
                                                    <a class="btn dropdown-toggle" type="button" id="dropdownAction"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="fas fa-ellipsis-h"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right"
                                                        aria-labelledby="dropdownAction">
                                                        <a class="dropdown-item edit-btn"
                                                            href="<?= base_url() ?>admin/gejala/edit/<?= $gejala['id'] ?>">
                                                            <i class="fas fa-edit fa-sm fa-fw mr-2 text-gray-400"></i>
                                                            Edit
                                                        </a>

                                                        <a class="dropdown-item delete-btn" href="#" data-toggle="modal"
                                                            data-target="#modalDelete">
                                                            <i class="fas fa-trash fa-sm fa-fw mr-2 text-gray-400"></i>
                                                            delete
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php $this->load->view('admin/templates/stickyFooter'); ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <?php $this->load->view('admin/templates/scrollTop'); ?>

    <!-- Logout Modal-->
    <?php $this->load->view('admin/templates/modal'); ?>

    <div class="modal fade " tabindex="-1" id="modalDelete">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Apakah anda yakin ingin menghapus data ini?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Data ini tidak akan bisa dikembalikan, setelah dihapus!
                </div>
                <div class="modal-footer">
                    <form action="<?= base_url() ?>admin/gejala/destroy/<?= $gejala['id'] ?>" method="get">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <?php $this->load->view('admin/templates/js'); ?>

</body>

</html>