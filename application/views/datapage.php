<section id="banner" class="text-center pt-5 pb-3 bg-second-color" style="margin:0;">
    <h1 class="text-white " style="font-weight: 600;">Data Pakar</h1>
</section>

<section id="content">
    <div class="container">
        <section id="gejala">
            <div class="card ">
                <div class="card-header">
                    <h3 class="font-weight-bold">Data Gejala</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th scope="col" class="font-weight-bold" style="width: 21px;" id="no-sorting"
                                    class="font-weight-bold">No</th>
                                <th scope="col" class="font-weight-bold">Kode</th>
                                <th scope="col" class="font-weight-bold">Nama Gejala</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($gejalas as $i => $gejala) :?>
                            <tr>
                                <td><?= $i+1?></td>
                                <td><?= $gejala['id']?></td>
                                <td><?= $gejala['nama']?></td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <section id="penyakit">
            <div class="card ">
                <div class="card-header">
                    Data Kerusakan / Solusi
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th scope="col" class="font-weight-bold" style="width: 21px;" id="no-sorting"
                                    class="font-weight-bold">No</th>
                                <th scope="col" class="font-weight-bold">Kode</th>
                                <th scope="col" class="font-weight-bold">Nama Kerusakan</th>
                                <th scope="col" class="font-weight-bold">Penyebab</th>
                                <th scope="col" class="font-weight-bold">Solusi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($penyakits as $i => $penyakit) :?>
                            <tr>
                                <td><?= $i+1?></td>
                                <td><?= $penyakit['id']?></td>
                                <td><?= $penyakit['nama']?></td>
                                <td><?= $penyakit['penyebab']?></td>
                                <td><?= $penyakit['solusi']?></td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

    </div>
    <section id="pengetahuan" class="mx-4">
        <div class="card ">
            <div class="card-header">
                Basis Pengetahuan / Relasi
            </div>
            <div class="card-body">
                <table class="table table-bordered table-hover" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th style="width: 21px;" id="no-sorting" class="font-weight-bold">No</th>
                            <th class="font-weight-bold">Nama Kerusakan</th>
                            <?php foreach ($gejalas as $gejala) :?>
                            <th class="font-weight-bold"><?= $gejala['id']?></th>
                            <?php endforeach;?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($pengetahuans2 as $i => $pengetahuan2) : ?>
                        <tr>
                            <td><?= $i+1 ?></td>
                            <td>(<?= $pengetahuan2['id']?>) <?=$pengetahuan2['nama']?></td>
                            <?php foreach ($gejalas as $gejala) :?>
                            <td><?= $pengetahuan2[$gejala['id']]==0?"-":"Ya" ?></td>
                            <?php endforeach;?>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</section>