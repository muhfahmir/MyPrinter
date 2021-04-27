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

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"><?= $contentTitle;?></h1>
                    </div>


                    <div class="row">
                        <div class="col-12">

                            <div class="card">
                                <div class="card-header text-center d-flex align-items-center justify-content-between">
                                    Hasil diagnosa
                                    <a href="<?= base_url('admin/dashboard')?>" class="btn btn-primary">Kembali</a>
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered table-hover">
                                        <tr>
                                            <td style="width:250px;">Nama Pemilik</td>
                                            <td><?= $nama?></td>
                                        </tr>
                                        <tr>
                                            <td>Nomor Hp</td>
                                            <td><?= $no_telp?></td>
                                        </tr>
                                        <tr>
                                            <td>Jawaban Pengguna</td>
                                            <td>
                                                <ul>
                                                    <?php foreach($gejala as $g):?>
                                                    <li style="list-style: none;"><?= $g['id']?> - <?= $g['nama']?></li>
                                                    <?php endforeach;?>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Hasil</td>
                                            <?php if(isset($penyakit)) :?>
                                            <td><?= $penyakit['nama'] ?></td>
                                            <?php else:?>
                                            <td>Kerusakan tidak ditemukan, sepertinya printer anda baik-baik saja.</td>
                                            <?php endif;?>
                                        </tr>
                                        <tr>
                                            <td>Penyebab Kerusakan</td>
                                            <?php if(isset($penyakit)) :?>
                                            <td><?= $penyakit['penyebab']?></td>
                                            <?php else:?>
                                            <td>-</td>
                                            <?php endif;?>

                                        </tr>
                                        <tr>
                                            <td>Solusi Perbaikan</td>
                                            <?php if(isset($penyakit)) :?>
                                            <td><?= $penyakit['solusi'] ?></td>
                                            <?php else:?>
                                            <td>-</td>
                                            <?php endif;?>

                                        </tr>
                                    </table>
                                </div>
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

    <!-- Bootstrap core JavaScript-->
    <?php $this->load->view('admin/templates/js'); ?>

</body>

</html>