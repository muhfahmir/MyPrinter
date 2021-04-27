<!-- <section id="banner" class="text-center pt-5 pb-3 bg-second-color" style="margin:0">
    <h1 class="text-white " style="font-weight: 600;">Riwayat Diagnosa</h1>
</section> -->

<section id="content">
    <div class="container">
        <div class="card">
            <div class="card-header text-center">
                Hasil diagnosa
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
                        <td><?= $penyakit['nama']?></td>
                    </tr>
                    <tr>
                        <td>Penyebab Kerusakan</td>
                        <td><?= $penyakit['penyebab']?></td>
                    </tr>
                    <tr>
                        <td>Solusi Perbaikan</td>
                        <td><?= $penyakit['solusi']?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section>