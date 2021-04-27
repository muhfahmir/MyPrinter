<section id="banner" class="text-center pt-5 pb-3 bg-second-color" style="margin:0">
    <h1 class="text-white " style="font-weight: 600;">Riwayat Diagnosa</h1>
</section>

<section id="content">
    <div class="container">
        <div class="card p-3">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th class="font-weight-bold" style="width: 21px;" id="no-sorting">No</th>
                        <th class="font-weight-bold">Nama </th>
                        <th class="font-weight-bold">Nomor Handphone </th>
                        <th class="font-weight-bold">Penyakit </th>
                        <th class="font-weight-bold" style="width: 30px;">Detail </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $i => $user) :?>
                    <tr>
                        <td><?= $i+1?></td>
                        <td><?= $user['nama_pemilik']?></td>
                        <td><?= $user['no_telp']?></td>
                        <td>(<?= $user['analisa']?>)<?= $user['nama']?></td>
                        <td><a href="<?= base_url('riwayatpage/detailPage/'.$user['id_user'])?>"
                                class="btn btn-primary">Detail</a></td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</section>