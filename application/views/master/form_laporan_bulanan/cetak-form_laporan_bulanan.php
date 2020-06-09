<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title><?= TITLE_APPLICATION  ?></title>
    <link rel="stylesheet" href="<?= base_url('assets/') ?>bower_components/bootstrap/dist/css/bootstrap.min.css" media="all">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome-font-awesome.min.css">
</head>

<style type="text/css" media="all">
    table {
        page-break-inside: auto
    }

    tr {
        page-break-inside: avoid;
        page-break-after: auto;
    }

    th {
        text-align: center;
    }

    thead {
        display: table-header-group
    }

    tfoot {
        display: table-footer-group
    }

    .page {
        width: 100%;
        height: 100%;
        page-break-before: always;
        top: 100%;
    }

    .page:nth-of-type(2) {
        page-break-before: always;
        top: 100%;
    }
</style>

<body>
    <div class="row">
        <div class="col-xs-12">
            <h5 align="center"><b>DAFTAR PERIKSA (CHECKLIST) SAFETY PATROL OLEH SAFETY REPRESENTATIIVE ATAU SUB P2K3</b></h5>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-8">
            <div class="col-xs-12">
                <b>Lokasi</b> :
                <?= $form_laporan_bulanan['lokasi'] ?>
            </div>
            <div class="col-xs-12">
                <b>Bagian</b> :
                <?= $bagian ?>
            </div>
            <div class="col-xs-12">
                <b>Departemen</b> :
                <?= $departemen ?>
            </div>
            <div class="col-xs-12">
                <b>Tanggal</b> :
                <?= $form_laporan_bulanan['tanggal'] ?>
            </div>
        </div>
        <div class="col-xs-4">
            <div class="col-xs-12">
                <b>
                    Distribusi ke : <br>
                    1. Manager Ybs <br>
                    2. Sekretaris SP2K3 Ybs <br>
                    3. Kabag K3 <br>
                    4. Simpanan
                </b>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <table class="table table-bordered">
                <thead>
                    <tr align="center">
                        <th rowspan="2">NO</th>
                        <th rowspan="2">DAFTAR PERIKSA</th>
                        <th colspan="2">HASIL PEMERIKSAAN</th>
                        <th rowspan="2">KETERANGAN</th>
                    </tr>
                    <tr align="center">
                        <th width="50">YA</th>
                        <th width="50">TIDAK</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $jawaban = json_decode($form_laporan_bulanan['value']);
                    $master_daftar_periksa_kat = $this->mymodel->selectWithQuery("SELECT * FROM master_daftar_periksa_kat");
                    foreach ($master_daftar_periksa_kat as $kat) {
                        $id_kategori = $kat['id'];
                        $kategori = $kat['nama'];
                        $master_daftar_periksa = $this->mymodel->selectWithQuery("SELECT * FROM master_daftar_periksa WHERE kategori = '$id_kategori'");
                    ?>
                        <tr>
                            <th colspan="5"><?= $kategori ?></th>
                        </tr>
                        <?php
                        $no = 0;
                        foreach ($master_daftar_periksa as $dp) {
                            $no++;
                            $keterangan = '';
                            $ya_text = '';
                            $tidak_text = '';
                            foreach ($jawaban as $j) {
                                if ($j->id_dp == $dp['id']) {
                                    if ($j->hasil == 'Ya') {
                                        $ya_text = 'fa fa-check-circle';
                                    } else {
                                        $tidak_text = 'fa fa-check-circle';
                                    }
                                    $keterangan = $j->keterangan;
                                } else {
                                }
                            }
                            // print_r($hasil);
                        ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td>
                                    <?= $dp['nama'] ?>
                                </td>
                                <td align="center">
                                    <i class="<?= $ya_text ?>"></i>
                                </td>
                                <td align="center">
                                    <i class="<?= $tidak_text ?>"></i>
                                </td>
                                <td><?= $keterangan ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    <?php
                    }
                    ?>
                    <tr>
                        <th colspan="2">
                            Anggota Safety Representative <br><br><br><br><br><br>
                            <?= $sr['nama'] ?><br>
                            <?= $sr['nip'] ?>
                        </th>
                        <th colspan="3">
                            Kepala Bagian Safety Representative <br><br><br><br><br>
                            <?= $kabag['nama'] ?><br>
                            <?= $kabag['nip'] ?>
                        </th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row page">
        <div class="col-xs-12">
            <h3 align="center"><b>LAPORAN HASIL PEMERIKSAAN BULANAN ANGGOTA SAFETY REPRESENTATIIVE & TINDAK LANJUT</b></h3>
        </div>
        <div class="col-xs-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td colspan="4">
                            <div class="col-xs-6">
                                <div class="col-xs-12">
                                    <b>Bagian</b> :
                                    <?= $bagian ?>
                                </div>
                                <div class="col-xs-12">
                                    <b>Departemen</b> :
                                    <?= $departemen ?>
                                </div>
                                <div class="col-xs-12">
                                    <b>Tanggal</b> :
                                    <?= $form_laporan_bulanan['tanggal'] ?>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="col-xs-12">
                                    <b>
                                        Distribusi : <br>
                                        1. Manager ....<br>
                                        2. Sekretaris SP2K3 Komp/Sesper .... <br>
                                        3. Kabag K3 <br>
                                        4. Anggota Safety Representative <br>
                                        5. Simpanan
                                    </b>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th>NO.</th>
                        <th>HASIL TEMUAN</th>
                        <th>TEMUAN BERULANG KE</th>
                        <th>TINDAK LANJUT</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $master_hasil_temuan = $this->mymodel->selectWithQuery("SELECT * FROM master_hasil_temuan");
                    $a = 0;
                    foreach ($master_hasil_temuan as $ht) {
                        $a++;
                        $id_hasil_temuan = $ht['id'];
                        $kode_hasil_temuan = $ht['kode'];
                        $hasil_temuan = $ht['nama'];
                        $id_laporan = $form_laporan_bulanan['id'];
                        $form_tindak_lanjut = $this->mymodel->selectWithQuery("SELECT * FROM form_tindak_lanjut WHERE jenis = '$kode_hasil_temuan' AND id_laporan = $id_laporan");
                        $kosong = '';
                        if (!$form_tindak_lanjut) {
                            $kosong = '(Kosong)';
                        }
                    ?>
                        <tr>
                            <td></td>
                            <td colspan="3"><?= $hasil_temuan ?> <?= $kosong ?></td>
                        </tr>
                        <?php
                        $no = 0;
                        foreach ($form_tindak_lanjut as $ftl) {
                            $no++;
                        ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td>
                                    <?= $ftl['hasil_temuan'] ?>
                                </td>
                                <td>
                                    <?= $ftl['ke'] ?>
                                </td>
                                <td>
                                    <?php
                                    if ($ftl['gambar'] != "") {
                                    ?>
                                        <img src="<?= base_url($ftl['gambar']) ?>" style="width: 200px" class="img img-thumbnail">
                                        <br>
                                    <?php } ?>
                                    <?= $ftl['tindak_lanjut'] ?></textarea>
                                </td>
                            </tr>
                    <?php
                        }
                    } ?>
                    <tr>
                        <th colspan="2">
                            Anggota Safety Representative <br><br><br><br><br>
                            <?= $sr['nama'] ?><br>
                            <?= $sr['nip'] ?>
                        </th>
                        <th colspan="2">
                            Kepala Bagian Safety Representative <br><br><br><br><br>
                            <?= $kabag['nama'] ?><br>
                            <?= $kabag['nip'] ?>
                        </th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>