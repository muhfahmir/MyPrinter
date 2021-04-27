<section id="banner" class="text-center pt-5 pb-3 bg-second-color" style="margin:0;">
    <h1 class="text-white " style="font-weight: 600;">Diagnosa</h1>
</section>

<section id="login" style="margin-top: 30px;">
    <div class="container">
        <div class="row justify-content-center ms-auto">
            <div class="col-md-10">

                <div class="card">
                    <div class="card-header text-center">
                        <h3>Form Data Pemilik</h3>
                    </div>
                    <div class="card-body">
                        <form method="post" action="<?= base_url('diagnosapage/prosesKonsul') ?>">
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" placeholder="masukkan nama ..." class="form-control" id="nama"
                                    name="nama">
                            </div>

                            <div class="mb-3">
                                <label for="no_telp" class="form-label">Nomor Telpon</label>
                                <input type="text" placeholder="masukkan no_telp ..." class="form-control" id="no_telp"
                                    name="no_telp">
                            </div>

                            <div class="card-header text-center bg-transparent border-0">
                                <h3>Form Gejala</h3>
                            </div>
                            <div class="row">
                                <?php foreach ($gejalas as $i => $gejala) :?>
                                <div class="col-12">
                                    <input type="checkbox" name="<?= $gejala['id']?>" id="<?= $gejala['id']?>">
                                    <label class="d-inline-block" for="<?= $gejala['id']?>">
                                        (<?= $gejala['id']?>)<?= $gejala['nama']?>
                                    </label>
                                </div>
                                <?php endforeach;?>
                            </div>


                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary form-control bg-second-color rounded-pill"
                                    style="text-transform: uppercase;font-weight:600" name="submit">Diagnosa</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>