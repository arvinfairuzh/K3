<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title><?= TITLE_APPLICATION  ?></title>
    <link rel="stylesheet" href="<?= base_url('assets/') ?>bower_components/bootstrap/dist/css/bootstrap.min.css" media="all">
</head>

<style type="text/css" media="all">
    table {
        page-break-inside: auto
    }

    tr {
        page-break-inside: avoid;
        page-break-after: auto
    }

    thead {
        display: table-header-group
    }

    tfoot {
        display: table-footer-group
    }
</style>

<body>
    <table class="table table-bordered">
        <thead>
            <tr>
                <td style="width:20%;" align="center" rowspan="2">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/e/e5/Petrokimia_Gresik_logo.svg" width="100%" style="margin-top:20px;">
                </td>
                <td style="width:80%;" align="center" colspan="4">
                    <h5>
                        RISALAH RAPAT
                    </h5>
                </td>
            </tr>
            <tr align="left">
                <td width="50" colspan="2">
                    Hari/Tanggal : <?= date_format(date_create($hasil_rapat['tanggal']), "l, d F Y"); ?><br>
                    Pukul : <?= date_format(date_create($hasil_rapat['jam_mulai']), "H.i"); ?> - <?= date_format(date_create($hasil_rapat['jam_selesai']), "H.i"); ?><br>
                    Tempat : <?= $hasil_rapat['lokasi'] ?>
                </td>
                <td width="50" colspan="2">Halaman...</td>
            </tr>
            <tr align="left">
                <td colspan="5">
                    Pimpinan Sidang :
                    <?= $hasil_rapat['pimpinan_sidang'] ?><br>
                    Hal/Subject :
                    Sidang P2K3 Bulan <?= date_format(date_create($hasil_rapat['tanggal']), "F"); ?> Tahun <?= date_format(date_create($hasil_rapat['tanggal']), "Y"); ?>
                </td>
            </tr>
        </thead>
        <tbody>
            <tr align="left">
                <td colspan="5">
                    <b>Pendahuluan :</b>
                    <?= $hasil_rapat['pendahuluan'] ?>
                    <br>
                    <b>Review Kebijakan Sistem Manajemen :</b>
                    <?= $hasil_rapat['review'] ?>
                    <br>
                    <b>Tindak Lanjut P2K3 Lalu:</b>
                    <br>
                    Laporan Tindak Lanjut Temua Sidang P2K3 sebelumnya.

                    <table class="table table-bordered">
                        <tr align="left">
                            <th width="5">No</th>
                            <th width="30">Permasalahan</th>
                            <th width="30">Tindakan Perbaikan</th>
                            <th width="15">PIC</th>
                            <th width="20">Status</th>
                        </tr>
                        <?php
                        $no = 0;
                        foreach (json_decode($hasil_rapat['tindak_lanjut']) as $tl) {
                            $no++;
                            ?>
                            <tr align="left">
                                <td><?= $no ?></td>
                                <td><?= $tl->permasalahan ?></td>
                                <td><?= $tl->tindakan ?></td>
                                <td><?= $tl->pic ?></td>
                                <td><?= $tl->status ?></td>
                            </tr>
                        <?php
                        } ?>
                    </table>
                    <br>
                    <b>Materi Tambahan :</b>
                    <?= $hasil_rapat['materi_tambahan'] ?>
                    <br>
                    <b>Materi Kesehatan :</b>
                    <?= $hasil_rapat['materi_kesehatan'] ?>
                    <br>
                    <br>

                    <div class="row" align="center">
                        <div class="col-xs-6">
                            Pimpinan Rapat
                        </div>
                        <div class="col-xs-6">
                            Notulis
                        </div>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <div class="col-xs-6">
                            <?= $hasil_rapat['pimpinan_sidang'] ?>
                        </div>
                        <div class="col-xs-6">
                            <?= $notulis['nama'] ?>
                        </div>
                        <div class="col-xs-6">
                            GM <?= $pimpinan_rapat_role['nama'] ?>
                        </div>
                        <div class="col-xs-6">
                            <?= $notulis_jabatan['role'] ?> <?= $notulis_role['nama'] ?>
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>

    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>