<!-- Content Wrapper. Contains page content -->

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
</style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            LAPORAN DAN INVESTIGASI KECELAKAAN DI TEMPAT KERJA
            <small>Detail</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Master</a></li>
            <li class="#">Form Laporan Kecelakaan</li>
            <li class="active">Detail</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <div class="col-md-7">
                            <?php
                            if ($kecelakaan_main['status_kecelakaan'] == 0) {
                                $badge_color = 'bg-yellow';
                            } else if ($kecelakaan_main['status_kecelakaan'] == 1) {
                                $badge_color = 'bg-red';
                            } else if ($kecelakaan_main['status_kecelakaan'] == 2) {
                                $badge_color = 'bg-yellow';
                            } else if ($kecelakaan_main['status_kecelakaan'] == 3) {
                                $badge_color = 'bg-yellow';
                            } else if ($kecelakaan_main['status_kecelakaan'] == 4) {
                                $badge_color = 'bg-red';
                            } else if ($kecelakaan_main['status_kecelakaan'] == 5) {
                                $badge_color = 'bg-yellow';
                            } else if ($kecelakaan_main['status_kecelakaan'] == 6) {
                                $badge_color = 'bg-yellow';
                            } else if ($kecelakaan_main['status_kecelakaan'] == 7) {
                                $badge_color = 'bg-red';
                            } else if ($kecelakaan_main['status_kecelakaan'] == 8) {
                                $badge_color = 'bg-yellow';
                            } else if ($kecelakaan_main['status_kecelakaan'] == 9) {
                                $badge_color = 'bg-red';
                            } else {
                                $badge_color = 'bg-green';
                            }
                            ?>
                            <label class="">Status Sekarang <span class='badge badge-pill <?= $badge_color ?>'><?= $master_status_kecelakaan['nama'] ?></span></label>
                        </div>
                        <div class="col-md-5 pull-right">
                            <button type="button" class="btn btn-sm btn-info pull-right" onclick="cetak(<?= $kecelakaan_main['id'] ?>)" style="margin-right: 5px;"><i class="fa fa-print"></i> Print</button>
                            <?php
                            if ($_SESSION['role_id'] == 1) {
                                if ($kecelakaan_main['status_kecelakaan'] == 1) {
                            ?>
                                    <button type="button" class="btn btn-sm btn-success pull-right" onclick="validasi(<?= $kecelakaan_main['id'] ?>)" style="margin-right: 5px;"><i class="fa fa-refresh"></i> Validasi</button>
                                    <button type="button" class="btn btn-sm btn-primary pull-right" onclick="edit(<?= $kecelakaan_main['id'] ?>)" style="margin-right: 5px;"><i class="fa fa-pencil"></i> Edit</button>
                                <?php
                                }
                                ?>
                                <button type="button" class="btn btn-sm btn-danger pull-right" onclick="hapus(<?= $kecelakaan_main['id'] ?>)" style="margin-right: 5px;"><i class="fa fa-trash"></i> Hapus</button>
                            <?php
                            } else if ($_SESSION['role_id'] == 3) {
                            ?>
                                <?php
                                if ($_SESSION['id_bagian'] != 16) {
                                    if ($kecelakaan_main['status_kecelakaan'] == 0 || $kecelakaan_main['status_kecelakaan'] == 5 || $kecelakaan_main['status_kecelakaan'] == 7) {
                                ?>
                                        <button type="button" class="btn btn-sm btn-success pull-right" onclick="validasi(<?= $kecelakaan_main['id'] ?>)" style="margin-right: 5px;"><i class="fa fa-refresh"></i> Validasi</button>
                                        <!-- <button type="button" class="btn btn-sm btn-primary pull-right" onclick="edit(<?= $kecelakaan_main['id'] ?>)" style="margin-right: 5px;"><i class="fa fa-pencil"></i> Edit</button> -->
                                    <?php
                                    }
                                } else {
                                    if ($kecelakaan_main['status_kecelakaan'] == 3 || $kecelakaan_main['status_kecelakaan'] == 8) {
                                    ?>
                                        <button type="button" class="btn btn-sm btn-success pull-right" onclick="validasi(<?= $kecelakaan_main['id'] ?>)" style="margin-right: 5px;"><i class="fa fa-refresh"></i> Validasi</button>
                                        <!-- <button type="button" class="btn btn-sm btn-primary pull-right" onclick="edit(<?= $kecelakaan_main['id'] ?>)" style="margin-right: 5px;"><i class="fa fa-pencil"></i> Edit</button> -->
                                <?php
                                    }
                                }
                                ?>
                                <?php
                            } else if ($_SESSION['role_id'] == 6) {
                                if ($kecelakaan_main['status_kecelakaan'] == 2 || $kecelakaan_main['status_kecelakaan'] == 4 || $kecelakaan_main['status_kecelakaan'] == 6 || $kecelakaan_main['status_kecelakaan'] == 9) {
                                ?>
                                    <button type="button" class="btn btn-sm btn-success pull-right" onclick="validasi(<?= $kecelakaan_main['id'] ?>)" style="margin-right: 5px;"><i class="fa fa-refresh"></i> Validasi</button>
                                    <button type="button" class="btn btn-sm btn-primary pull-right" onclick="edit(<?= $kecelakaan_main['id'] ?>)" style="margin-right: 5px;"><i class="fa fa-pencil"></i> Edit</button>
                                <?php
                                }
                                ?>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <table class="table table-bordered">
                        <tr>
                            <td style="width:20%;" align="center">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/e/e5/Petrokimia_Gresik_logo.svg" width="100%" style="margin-top:20px;">
                            </td>
                            <td align="center">
                                <div class="col-md-12">
                                    <h4><b>PT PETROKIMIA GRESIK</b></h4>
                                    <h3><b>LAPORAN DAN INVESTIGASI KECELAKAAN DI TEMPAT KERJA</b></h3>
                                    <h4><b>No: </b></h4>
                                </div>
                            </td>
                            <td style="width:20%;" align="center">
                                <img src="<?php echo base_url() . 'webfile/logokesehatan.png' ?>" width="70%" style="margin-top:20px;">
                            </td>
                        </tr>
                    </table>
                    <table class="table table-bordered">
                        <tr>
                            <td>
                                <div class="row">
                                    <div class="col-xs-12" style="text-align:center">
                                        <div class="col-xs-12">
                                            <b>JENIS KECELAKAAN</b>
                                        </div>
                                        <?php
                                        $ya = 'unchecked';
                                        $tidak = 'unchecked';
                                        $selected_radio = $kecelakaan_main['jenis_kecelakaan'];
                                        if ($selected_radio == '1') {
                                            $ya = 'checked';
                                        } else if ($selected_radio == '2') {
                                            $tidak = 'checked';
                                        }
                                        ?>
                                        <div class="col-xs-6">
                                            <input type="checkbox" <?= $ya ?> onClick="this.checked=!this.checked;">&nbsp<b>KECELAKAAN KERJA </b>
                                        </div>
                                        <div class="col-xs-6">
                                            <input type="checkbox" <?= $tidak ?> onClick="this.checked=!this.checked;">&nbsp<b>BUKAN KECELAKAAN KERJA </b>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-xs-12">
                                <table class="table table-bordered" style="width: 100%;">
                                    <tr>
                                        <td width="20" rowspan="8">
                                            <b>IDENTITAS PENDERITA</b>
                                        </td>
                                        <td style="width:20%;">
                                            Nama
                                        </td>
                                        <td>
                                            <?= $kecelakaan_main['ip_nama'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Nomor Induk
                                        </td>
                                        <td>
                                            <?= $kecelakaan_main['ip_nomor_induk'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Umur
                                        </td>
                                        <td>
                                            <?= $kecelakaan_main['ip_umur'] ?> &nbsp Tahun
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Alamat
                                        </td>
                                        <td>
                                            <?= $kecelakaan_main['ip_alamat'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Dep / Biro/ Bid
                                        </td>
                                        <td>
                                            <?= $kecelakaan_main['ip_dep_birobid'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Bagian / Seksi
                                        </td>
                                        <td>
                                            <?= $kecelakaan_main['ip_bagian_seksi'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Lama Bekerja di unit tersebut
                                        </td>
                                        <td>
                                            <?= $kecelakaan_main['ip_lama_bekerja_unit'] ?> &nbsp Tabun
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Lama bekerja di PT Petrokimia Gresik
                                        </td>
                                        <td>
                                            <?= $kecelakaan_main['ip_lama_bekerja_petro'] ?> &nbsp Tahun
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="20" rowspan="5">
                                            <b>KEJADIAN KECELAKAAN</b>
                                        </td>
                                        <td>
                                            Tanggal & Jam
                                        </td>
                                        <td>
                                            <?= $kecelakaan_detail_internal['kk_tanggal_jam'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Lokasi
                                        </td>
                                        <td>
                                            <?= $kecelakaan_detail_internal['kk_lokasi'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            Jelaskan bagaimana kecelakaan terjadi :
                                            <br>
                                            <?= $kecelakaan_detail_internal['kk_penjelasan_kecelakaan'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            Gambarkan lokasi/ sket terjadinya kecelakaan :
                                            <br>
                                            <img src="<?php echo base_url() . $kecelakaan_detail_internal['kk_gambar_lokasi'] ?>" width="150" height="100" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Bagian tubuh yang cedera
                                        </td>
                                        <td>
                                            <?= $kecelakaan_detail_internal['kk_bagian_tubuh_cedera'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="20" rowspan="3">
                                            <b>LAMA PENGOBATAN PENDERITA</b>
                                        </td>
                                        <td>
                                            Di RS Petrokimia Gresik
                                        </td>
                                        <td><?= $kecelakaan_main['lpp_di_rs_petro'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Di RS Luar
                                        </td>
                                        <td> <?= $kecelakaan_main['lpp_di_rs_luar'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Istirahat Dokter
                                        </td>
                                        <td><?= $kecelakaan_main['lpp_istirahat_dokter'] ?></td>
                                    </tr>
                                    <tr>
                                        <td width="20" rowspan="4">
                                            <b>TUGAS DAN WEWENANG</b>
                                        </td>
                                        <td colspan="2">
                                            Apakah karyawan tersebut melakukan tugas/kegiatan yang merupakan tugas sehari-hari sesuai <span style="font-style: oblique;">job discriptionnya </span>?<br>
                                            <?php
                                            $ya = 'unchecked';
                                            $tidak = 'unchecked';
                                            $selected_radio = $kecelakaan_detail_internal['tw_apkh_1'];
                                            if ($selected_radio == 'ya') {
                                                $ya = 'checked';
                                            } else if ($selected_radio == 'tidak') {
                                                $tidak = 'checked';
                                            }
                                            ?>
                                            <div class="col-xs-6">
                                                <input type="checkbox" <?PHP print $ya; ?> onClick="this.checked=!this.checked;"> &nbsp Ya
                                            </div>
                                            <div class="col-xs-6">
                                                <input type="checkbox" <?PHP print $tidak; ?> onClick="this.checked=!this.checked;"> &nbsp Tidak
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            Apakah karyawan tersebut dalam melakukan tugas/kegiatannya ada perintah dari atasannya ?<br>
                                            <?php
                                            $ya = 'unchecked';
                                            $tidak = 'unchecked';
                                            $selected_radio = $kecelakaan_detail_internal['tw_apkh_2'];
                                            if ($selected_radio == 'ya') {
                                                $ya = 'checked';
                                            } else if ($selected_radio == 'tidak') {
                                                $tidak = 'checked';
                                            }
                                            ?>
                                            <div class="col-xs-6">
                                                <input type="checkbox" <?PHP print $ya; ?> onClick="this.checked=!this.checked;"> &nbsp Ya
                                            </div>
                                            <div class="col-xs-6">
                                                <input type="checkbox" <?PHP print $tidak; ?> onClick="this.checked=!this.checked;"> &nbsp Tidak
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            Apakah karyawan tersebut melakukan tugas/kegiatan yang berhubungan dengan kepentingan perusahaan ?<br>
                                            <?php
                                            $ya = 'unchecked';
                                            $tidak = 'unchecked';
                                            $selected_radio = $kecelakaan_detail_internal['tw_apkh_3'];
                                            if ($selected_radio == 'ya') {
                                                $ya = 'checked';
                                            } else if ($selected_radio == 'tidak') {
                                                $tidak = 'checked';
                                            }
                                            ?>
                                            <div class="col-xs-6">
                                                <input type="checkbox" <?PHP print $ya; ?> onClick="this.checked=!this.checked;"> &nbsp Ya
                                            </div>
                                            <div class="col-xs-6">
                                                <input type="checkbox" <?PHP print $tidak; ?> onClick="this.checked=!this.checked;"> &nbsp Tidak
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            Apabila jawaban diatas ada yang Tidak. jelaskan<br>
                                            1. Mengapa Melakukan tugas tersebut ?<br>
                                            &nbsp&nbsp <?= $kecelakaan_detail_internal['tw_tidak_q1'] ?><br>
                                            2. Siapa yang seharusnya melakukan tugas/kegiatan tersebut ?<br>
                                            &nbsp&nbsp <?= $kecelakaan_detail_internal['tw_tidak_q2'] ?><br>
                                            3. Siapa yang memerintah penderita melakukan pekerjaan tersebut ?<br>
                                            &nbsp&nbsp <?= $kecelakaan_detail_internal['tw_tidak_q3'] ?><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="20" rowspan="5">
                                            <b>SISTEM PENGAWASAN</b>
                                        </td>
                                        <td colspan="2">
                                            Apakah atasan langsung penderita berada di tempat kejadian pada saat terjadi kecelakaan kerja ?<br>
                                            <?php
                                            $ya = 'unchecked';
                                            $tidak = 'unchecked';
                                            $selected_radio = $kecelakaan_detail_internal['sp_apkh_1'];
                                            if ($selected_radio == 'ya') {
                                                $ya = 'checked';
                                            } else if ($selected_radio == 'tidak') {
                                                $tidak = 'checked';
                                            }
                                            ?>
                                            <div class="col-xs-6">
                                                <input type="checkbox" <?PHP print $ya; ?> onClick="this.checked=!this.checked;"> &nbsp Ya
                                            </div>
                                            <div class="col-xs-6">
                                                <input type="checkbox" <?PHP print $tidak; ?> onClick="this.checked=!this.checked;"> &nbsp Tidak
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            Apabila Ya, Instruksi apa yang telah diberikan kepada penderita ?<br>
                                            <?= $kecelakaan_detail_internal['sp_ya_1'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            Apabila Tidak, Dimana atasan penderita berada ?<br>
                                            <?= $kecelakaan_detail_internal['sp_ya_1'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            Apakah tugas tersebut dilakukan sesuai dengan instruksi kerja atau praktek kerja yang biasa dilakukan ?<br>
                                            <?php
                                            $ya = 'unchecked';
                                            $tidak = 'unchecked';
                                            $selected_radio = $kecelakaan_detail_internal['sp_apkh_2'];
                                            if ($selected_radio == 'ya') {
                                                $ya = 'checked';
                                            } else if ($selected_radio == 'tidak') {
                                                $tidak = 'checked';
                                            }
                                            ?>
                                            <div class="col-xs-6">
                                                <input type="checkbox" <?PHP print $ya; ?> onClick="this.checked=!this.checked;"> &nbsp Ya
                                            </div>
                                            <div class="col-xs-6">
                                                <input type="checkbox" <?PHP print $tidak; ?> onClick="this.checked=!this.checked;"> &nbsp Tidak
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            Apabila Tidak, mengapa hal tersebut harus dilakukan ?<br>
                                            <?= $kecelakaan_detail_internal['sp_tidak_2'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="20" rowspan="6">
                                            <b>PENGETAHUAN DAN KETRAMPILAN</b>
                                        </td>
                                        <td colspan="2">
                                            Apakah tugas/pekerjaan tersebut sesuai dengan pengetahuan/pengalaman/ketrampilannya ?<br>
                                            <?php
                                            $ya = 'unchecked';
                                            $tidak = 'unchecked';
                                            $selected_radio = $kecelakaan_detail_internal['pk__apkh_1'];
                                            if ($selected_radio == 'ya') {
                                                $ya = 'checked';
                                            } else if ($selected_radio == 'tidak') {
                                                $tidak = 'checked';
                                            }
                                            ?>
                                            <div class="col-xs-6">
                                                <input type="checkbox" <?PHP print $ya; ?> onClick="this.checked=!this.checked;"> &nbsp Ya
                                            </div>
                                            <div class="col-xs-6">
                                                <input type="checkbox" <?PHP print $tidak; ?> onClick="this.checked=!this.checked;"> &nbsp Tidak
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            Apabila Tidak, Pelatihan apa yang diperlukan ?<br>
                                            <?= $kecelakaan_detail_internal['pk_tidak_1'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            Apakah karyawan tersebut telah terbiasa dengan jenis pekerjaan/peralatan/bahan yang ditangani ?<br>
                                            <?php
                                            $ya = 'unchecked';
                                            $tidak = 'unchecked';
                                            $selected_radio = $kecelakaan_detail_internal['pk_apkh_2'];
                                            if ($selected_radio == 'ya') {
                                                $ya = 'checked';
                                            } else if ($selected_radio == 'tidak') {
                                                $tidak = 'checked';
                                            }
                                            ?>
                                            <div class="col-xs-6">
                                                <input type="checkbox" <?PHP print $ya; ?> onClick="this.checked=!this.checked;"> &nbsp Ya
                                            </div>
                                            <div class="col-xs-6">
                                                <input type="checkbox" <?PHP print $tidak; ?> onClick="this.checked=!this.checked;"> &nbsp Tidak
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            Apabila Tidak,Pengetahuan/keterampilan apa yang diperlukan ?<br>
                                            <?= $kecelakaan_detail_internal['pk_tidak_2'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            Apakah karyawan tersebut telah dilatih untuk melakukan pekerjaan tersebut dengan aman ?<br>
                                            <?php
                                            $ya = 'unchecked';
                                            $tidak = 'unchecked';
                                            $selected_radio = $kecelakaan_detail_internal['pk_apkh_3'];
                                            if ($selected_radio == 'ya') {
                                                $ya = 'checked';
                                            } else if ($selected_radio == 'tidak') {
                                                $tidak = 'checked';
                                            }
                                            ?>
                                            <div class="col-xs-6">
                                                <input type="checkbox" <?PHP print $ya; ?> onClick="this.checked=!this.checked;"> &nbsp Ya
                                            </div>
                                            <div class="col-xs-6">
                                                <input type="checkbox" <?PHP print $tidak; ?> onClick="this.checked=!this.checked;"> &nbsp Tidak
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            Apabila Tidak,Training K3 apa yang dapat dilakukan untuk mencegah terjadinya kembali kecelakaan kerja tersebut ?<br>
                                            <?= $kecelakaan_detail_internal['pk_tidak_3'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="20" rowspan="6">
                                            <b>PENGGUNAAN ALAT PELINDUNG DIRI</b>
                                        </td>
                                        <td colspan="2">
                                            Apakah alat pelindung diri tersedia dan dapat digunakan ?<br>
                                            <?php
                                            $ya = 'unchecked';
                                            $tidak = 'unchecked';
                                            $selected_radio = $kecelakaan_detail_internal['papd_apkh_1'];
                                            if ($selected_radio == 'ya') {
                                                $ya = 'checked';
                                            } else if ($selected_radio == 'tidak') {
                                                $tidak = 'checked';
                                            }
                                            ?>
                                            <div class="col-xs-6">
                                                <input type="checkbox" <?PHP print $ya; ?> onClick="this.checked=!this.checked;"> &nbsp Ya
                                            </div>
                                            <div class="col-xs-6">
                                                <input type="checkbox" <?PHP print $tidak; ?> onClick="this.checked=!this.checked;"> &nbsp Tidak
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            Apabila Ya, Alat pelindung diri apa yang digunakan saat itu ?<br>
                                            <?= $kecelakaan_detail_internal['papd_ya_1'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            Apabila Tidak, Mengapa alat pelindung diri tidak digunakan ?<br>
                                            <?= $kecelakaan_detail_internal['papd_tidak_1'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            Alat pelindung diri apa yang sesuai dengan pekerjaan tersebut ?<br>
                                            <?= $kecelakaan_detail_internal['papd_apd'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            Apakah cara penggunaan alat pelindung diri sudah tepat dan benar ?<br>
                                            <?php
                                            $ya = 'unchecked';
                                            $tidak = 'unchecked';
                                            $selected_radio = $kecelakaan_detail_internal['papd_apkh_2'];
                                            if ($selected_radio == 'ya') {
                                                $ya = 'checked';
                                            } else if ($selected_radio == 'tidak') {
                                                $tidak = 'checked';
                                            }
                                            ?>
                                            <div class="col-xs-6">
                                                <input type="checkbox" <?PHP print $ya; ?> onClick="this.checked=!this.checked;"> &nbsp Ya
                                            </div>
                                            <div class="col-xs-6">
                                                <input type="checkbox" <?PHP print $tidak; ?> onClick="this.checked=!this.checked;"> &nbsp Tidak
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            Apabila Tidak,Mengapa alat pelindung diri tidak digunakan dengan benar ?<br>
                                            <?= $kecelakaan_detail_internal['pk_tidak_3'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="20" rowspan="6">
                                            <b>PENGETAHUAN DAN KETRAMPILAN</b>
                                        </td>
                                        <td colspan="2">
                                            Apakah tugas/pekerjaan tersebut sesuai dengan pengetahuan/pengalaman/ketrampilannya ?<br>
                                            <?php
                                            $ya = 'unchecked';
                                            $tidak = 'unchecked';
                                            $selected_radio = $kecelakaan_detail_internal['pk__apkh_1'];
                                            if ($selected_radio == 'ya') {
                                                $ya = 'checked';
                                            } else if ($selected_radio == 'tidak') {
                                                $tidak = 'checked';
                                            }
                                            ?>
                                            <div class="col-xs-6">
                                                <input type="checkbox" <?PHP print $ya; ?> onClick="this.checked=!this.checked;"> &nbsp Ya
                                            </div>
                                            <div class="col-xs-6">
                                                <input type="checkbox" <?PHP print $tidak; ?> onClick="this.checked=!this.checked;"> &nbsp Tidak
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            Apabila Tidak, Pelatihan apa yang diperlukan ?<br>
                                            <?= $kecelakaan_detail_internal['pk_tidak_1'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            Apakah karyawan tersebut telah terbiasa dengan jenis pekerjaan/peralatan/bahan yang ditangani ?<br>
                                            <?php
                                            $ya = 'unchecked';
                                            $tidak = 'unchecked';
                                            $selected_radio = $kecelakaan_detail_internal['pk_apkh_2'];
                                            if ($selected_radio == 'ya') {
                                                $ya = 'checked';
                                            } else if ($selected_radio == 'tidak') {
                                                $tidak = 'checked';
                                            }
                                            ?>
                                            <div class="col-xs-6">
                                                <input type="checkbox" <?PHP print $ya; ?> onClick="this.checked=!this.checked;"> &nbsp Ya
                                            </div>
                                            <div class="col-xs-6">
                                                <input type="checkbox" <?PHP print $tidak; ?> onClick="this.checked=!this.checked;"> &nbsp Tidak
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            Apabila Tidak,Pengetahuan/keterampilan apa yang diperlukan ?<br>
                                            <?= $kecelakaan_detail_internal['pk_tidak_2'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            Apakah karyawan tersebut telah dilatih untuk melakukan pekerjaan tersebut dengan aman ?<br>
                                            <?php
                                            $ya = 'unchecked';
                                            $tidak = 'unchecked';
                                            $selected_radio = $kecelakaan_detail_internal['pk_apkh_3'];
                                            if ($selected_radio == 'ya') {
                                                $ya = 'checked';
                                            } else if ($selected_radio == 'tidak') {
                                                $tidak = 'checked';
                                            }
                                            ?>
                                            <div class="col-xs-6">
                                                <input type="checkbox" <?PHP print $ya; ?> onClick="this.checked=!this.checked;"> &nbsp Ya
                                            </div>
                                            <div class="col-xs-6">
                                                <input type="checkbox" <?PHP print $tidak; ?> onClick="this.checked=!this.checked;"> &nbsp Tidak
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            Apabila Tidak,Training K3 apa yang dapat dilakukan untuk mencegah terjadinya kembali kecelakaan kerja tersebut ?<br>
                                            <?= $kecelakaan_detail_internal['pk_tidak_3'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="20" rowspan="11">
                                            <b>KONDISI PERALATAN/DIMANA KECELAKAAN TERJADI</b>
                                        </td>
                                        <td colspan="2">
                                            Buat sket gambar dengan jelas situasi alat/peralatan tempat kerja dimana kecelakaan terjadi<br>
                                            <br>
                                            <img src="<?php echo base_url() . $kecelakaan_detail_internal['md_gambar_1'] ?>" width="150" height="100" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            Pada kondisi normal apa fungsi alat tersebut(dimana alat/peralatan tersebut) ?<br>
                                            <?= $kecelakaan_detail_internal['md_fungsi_alat'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            Apakah perubahan/modifikasi yang telah dibuat pada alat tersebut ?<br>
                                            <?php
                                            $ya = 'unchecked';
                                            $tidak = 'unchecked';
                                            $selected_radio = $kecelakaan_detail_internal['md_apkh_1'];
                                            if ($selected_radio == 'ya') {
                                                $ya = 'checked';
                                            } else if ($selected_radio == 'tidak') {
                                                $tidak = 'checked';
                                            }
                                            ?>
                                            <div class="col-xs-6">
                                                <input type="checkbox" <?PHP print $ya; ?> onClick="this.checked=!this.checked;"> &nbsp Ya
                                            </div>
                                            <div class="col-xs-6">
                                                <input type="checkbox" <?PHP print $tidak; ?> onClick="this.checked=!this.checked;"> &nbsp Tidak
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            Apaila Ya, Jelaskan :<br>
                                            <?= $kecelakaan_detail_internal['md_ya_1'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            Adakah peralatan untuk mengendalikan keadaan emergency(emergency stop pull card switch dll) ?<br>
                                            <?php
                                            $ya = 'unchecked';
                                            $tidak = 'unchecked';
                                            $selected_radio = $kecelakaan_detail_internal['md_apkh_2'];
                                            if ($selected_radio == 'ya') {
                                                $ya = 'checked';
                                            } else if ($selected_radio == 'tidak') {
                                                $tidak = 'checked';
                                            }
                                            ?>
                                            <div class="col-xs-6">
                                                <input type="checkbox" <?PHP print $ya; ?> onClick="this.checked=!this.checked;"> &nbsp Ya
                                            </div>
                                            <div class="col-xs-6">
                                                <input type="checkbox" <?PHP print $tidak; ?> onClick="this.checked=!this.checked;"> &nbsp Tidak
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            Adakah peralatan untuk mengendalikan keadaan emergency(emergency stop pull card switch dll) ?<br>
                                            <?php
                                            $ya = 'unchecked';
                                            $tidak = 'unchecked';
                                            $selected_radio = $kecelakaan_detail_internal['md_apkh_3'];
                                            if ($selected_radio == 'ya') {
                                                $ya = 'checked';
                                            } else if ($selected_radio == 'tidak') {
                                                $tidak = 'checked';
                                            }
                                            ?>
                                            <div class="col-xs-6">
                                                <input type="checkbox" <?PHP print $ya; ?> onClick="this.checked=!this.checked;"> &nbsp Ya
                                            </div>
                                            <div class="col-xs-6">
                                                <input type="checkbox" <?PHP print $tidak; ?> onClick="this.checked=!this.checked;"> &nbsp Tidak
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            Apabila Tidak,Bagaimana untuk pengamanannya ?<br>
                                            <?= $kecelakaan_detail_internal['md_tidak_3'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            Apakah pengontrol operasi, pipa-pipa, tangki-tangki di berikan tanda yang cukup jelas ?<br>
                                            <?php
                                            $ya = 'unchecked';
                                            $tidak = 'unchecked';
                                            $selected_radio = $kecelakaan_detail_internal['md_apkh_4'];
                                            if ($selected_radio == 'ya') {
                                                $ya = 'checked';
                                            } else if ($selected_radio == 'tidak') {
                                                $tidak = 'checked';
                                            }
                                            ?>
                                            <div class="col-xs-6">
                                                <input type="checkbox" <?PHP print $ya; ?> onClick="this.checked=!this.checked;"> &nbsp Ya
                                            </div>
                                            <div class="col-xs-6">
                                                <input type="checkbox" <?PHP print $tidak; ?> onClick="this.checked=!this.checked;"> &nbsp Tidak
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            Apabila Tidak,Beri alasan mengapa tidak ditandai dengan jelas <br>
                                            <?= $kecelakaan_detail_internal['md_tidak_4'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            Apakah perlu menggunakan Safety Tag/ atau Locked out sistem ?<br>
                                            <?php
                                            $ya = 'unchecked';
                                            $tidak = 'unchecked';
                                            $selected_radio = $kecelakaan_detail_internal['md_apkh_5'];
                                            if ($selected_radio == 'ya') {
                                                $ya = 'checked';
                                            } else if ($selected_radio == 'tidak') {
                                                $tidak = 'checked';
                                            }
                                            ?>
                                            <div class="col-xs-6">
                                                <input type="checkbox" <?PHP print $ya; ?> onClick="this.checked=!this.checked;"> &nbsp Ya
                                            </div>
                                            <div class="col-xs-6">
                                                <input type="checkbox" <?PHP print $tidak; ?> onClick="this.checked=!this.checked;"> &nbsp Tidak
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            Apabila Ya, Apakah telah dipergunakan sebagaimana mestinya seperti tersebut pada prosedur Keselamatan Kerja tentang Safety Tag dan Locked Out Sistem ? <br>
                                            <?= $kecelakaan_detail_internal['md_tidak_4'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="20" rowspan="6">
                                            <b>SISTEM DAN PROSEDUR</b>
                                        </td>
                                        <td colspan="2">
                                            Adakah Prosedur atau instruksi kerja telah ditetapkan untuk tugas tersebut ?<br>
                                            <?php
                                            $ya = 'unchecked';
                                            $tidak = 'unchecked';
                                            $selected_radio = $kecelakaan_detail_internal['snp_apkh_1'];
                                            if ($selected_radio == 'ya') {
                                                $ya = 'checked';
                                            } else if ($selected_radio == 'tidak') {
                                                $tidak = 'checked';
                                            }
                                            ?>
                                            <div class="col-xs-6">
                                                <input type="checkbox" <?PHP print $ya; ?> onClick="this.checked=!this.checked;"> &nbsp Ya
                                            </div>
                                            <div class="col-xs-6">
                                                <input type="checkbox" <?PHP print $tidak; ?> onClick="this.checked=!this.checked;"> &nbsp Tidak
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            Apabila Ya, Apakah prosedur/instruksi kerja perlu diperbaiki ? Jelaskan <br>
                                            <?= $kecelakaan_detail_internal['snp_ya_1'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            Apabila Tidak, Apakah prosedur/instruksi kerja perlu dibuat ? Jelaskan <br>
                                            <?= $kecelakaan_detail_internal['snp_ya_1'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            Adakah suatu sistem untuk mengamati bahwa prosedur atau instruksi yang ditetapkan telah diikuti ? <br>
                                            <?= $kecelakaan_detail_internal['snp_adakah_1'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            Apakah Surat Ijin Keselamatan Kerja telah dibuat dan dilaksanakan ?<br>
                                            <?php
                                            $ya = 'unchecked';
                                            $tidak = 'unchecked';
                                            $selected_radio = $kecelakaan_detail_internal['snp_apkh_2'];
                                            if ($selected_radio == 'ya') {
                                                $ya = 'checked';
                                            } else if ($selected_radio == 'tidak') {
                                                $tidak = 'checked';
                                            }
                                            ?>
                                            <div class="col-xs-6">
                                                <input type="checkbox" <?PHP print $ya; ?> onClick="this.checked=!this.checked;"> &nbsp Ya
                                            </div>
                                            <div class="col-xs-6">
                                                <input type="checkbox" <?PHP print $tidak; ?> onClick="this.checked=!this.checked;"> &nbsp Tidak
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            Apabila Tidak, Mengapa tidak dibuat dan tidak dilaksanakan ? <br>
                                            <?= $kecelakaan_detail_internal['snp_tidak_2'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="20" rowspan="3">
                                            <b>PENYUMBANGAN TERHADAP TERJADINYA KECELAKAAN</b>
                                        </td>
                                        <td colspan="2">
                                            Bagaimana Kondisi lingkungan saat itu ?<br>
                                            <?php
                                            $jawaban = json_decode($kecelakaan_detail_internal['pttk_kondisi_lingkungan']);
                                            foreach ($jawaban as $j) {
                                                if ($j->keadaan == 'Hujan') {
                                                    $hujan = 'checked';
                                                } elseif ($j->keadaan == 'Panas') {
                                                    $panas = 'checked';
                                                } elseif ($j->keadaan == 'Ada fume') {
                                                    $adafume = 'checked';
                                                } elseif ($j->keadaan == 'Getaran') {
                                                    $getaran = 'checked';
                                                } elseif ($j->keadaan == 'Ketinggian') {
                                                    $ketinggian = 'checked';
                                                } elseif ($j->keadaan == 'Licin') {
                                                    $licin = 'checked';
                                                } elseif ($j->keadaan == 'Kabut') {
                                                    $kabut = 'checked';
                                                } elseif ($j->keadaan == 'Dingin') {
                                                    $dingin = 'checked';
                                                } elseif ($j->keadaan == 'Kebisingan') {
                                                    $kebisingan = 'checked';
                                                } elseif ($j->keadaan == 'Ada gas') {
                                                    $adagas = 'checked';
                                                } elseif ($j->keadaan == 'Di kedalaman') {
                                                    $dikedalaman = 'checked';
                                                } elseif ($j->keadaan == 'Panas sinar matahari') {
                                                    $panassinarmatahari = 'checked';
                                                } elseif ($j->keadaan == 'Lembab') {
                                                    $lembab = 'checked';
                                                } elseif ($j->keadaan == 'Ada vapour') {
                                                    $adavapour = 'checked';
                                                } elseif ($j->keadaan == 'Ruang tertutup') {
                                                    $ruangtertutup = 'checked';
                                                } elseif ($j->keadaan == 'Gelap') {
                                                    $gelap = 'checked';
                                                } else {
                                                    $lainya = 'checked';
                                                    $hasil_text = $j->keadaan;
                                                }
                                            }
                                            ?>
                                            <table>
                                                <tr>
                                                    <td style="padding-right: 50px">
                                                        <input type="checkbox" name="dt[pttk_kondisi_lingkungan]" value="Hujan" <?PHP print $hujan; ?> onClick="this.checked=!this.checked;">
                                                        Hujan
                                                    </td>
                                                    <td style="padding-right: 75px">
                                                        <input type="checkbox" name="dt[pttk_kondisi_lingkungan]" value="Panas" <?PHP print $panas; ?> onClick="this.checked=!this.checked;">
                                                        Panas
                                                    </td>
                                                    <td>
                                                        <input type="checkbox" name="dt[pttk_kondisi_lingkungan]" value="Ada fume" <?PHP print $adafume; ?> onClick="this.checked=!this.checked;">
                                                        Ada fume
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" name="dt[pttk_kondisi_lingkungan]" value="Getaran" <?PHP print $getaran; ?> onClick="this.checked=!this.checked;">
                                                        Getaran
                                                    </td>
                                                    <td>
                                                        <input type="checkbox" name="dt[pttk_kondisi_lingkungan]" value="Ketinggian" <?PHP print $ketinggian; ?> onClick="this.checked=!this.checked;">
                                                        Ketinggian
                                                    </td>
                                                    <td>
                                                        <input type="checkbox" name="dt[pttk_kondisi_lingkungan]" value="Licin" <?PHP print $licin; ?> onClick="this.checked=!this.checked;">
                                                        Licin
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" name="dt[pttk_kondisi_lingkungan]" value="Kabut" <?PHP print $kabut; ?> onClick="this.checked=!this.checked;">
                                                        Kabut
                                                    </td>
                                                    <td>
                                                        <input type="checkbox" name="dt[pttk_kondisi_lingkungan]" value="Dingin" <?PHP print $dingin; ?> onClick="this.checked=!this.checked;">
                                                        Dingin
                                                    </td>
                                                    <td>
                                                        <input type="checkbox" name="dt[pttk_kondisi_lingkungan]" value="Kebisingan" <?PHP print $kebisingan; ?> onClick="this.checked=!this.checked;">
                                                        Kebisingan
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" name="dt[pttk_kondisi_lingkungan]" value="Ada gas" <?PHP print $adagas; ?> onClick="this.checked=!this.checked;">
                                                        Ada gas
                                                    </td>
                                                    <td>
                                                        <input type="checkbox" name="dt[pttk_kondisi_lingkungan]" value="Di kedalaman" <?PHP print $dikedalaman; ?> onClick="this.checked=!this.checked;">
                                                        Di kedalaman
                                                    </td>
                                                    <td>
                                                        <input type="checkbox" name="dt[pttk_kondisi_lingkungan]" value="Panas sinar matahari" <?PHP print $panassinarmatahari; ?> onClick="this.checked=!this.checked;">
                                                        Panas sinar matahari
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" name="dt[pttk_kondisi_lingkungan]" value="Lembab" <?PHP print $lembab; ?> onClick="this.checked=!this.checked;">
                                                        Lembab
                                                    </td>
                                                    <td>
                                                        <input type="checkbox" name="dt[pttk_kondisi_lingkungan]" value="Ada vapour" <?PHP print $adavapour; ?> onClick="this.checked=!this.checked;">
                                                        Ada vapour
                                                    </td>
                                                    <td>
                                                        <input type="checkbox" name="dt[pttk_kondisi_lingkungan]" value="Ruang tertutup" <?PHP print $ruangtertutup; ?> onClick="this.checked=!this.checked;">
                                                        Ruang tertutup
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" name="dt[pttk_kondisi_lingkungan]" value="Gelap" <?PHP print $gelap; ?> onClick="this.checked=!this.checked;">
                                                        Gelap
                                                    </td>
                                                    <td colspan="2">
                                                        <input type="checkbox" name="dt[pttk_kondisi_lingkungan]" value="Lainya" <?PHP print $lainya; ?> onClick="this.checked=!this.checked;">
                                                        Lainnya : <?PHP print $hasil_text; ?>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            Apakah keadaan tersebut di atas merupakan faktor dominan terjadinya kecelakaan ? Jelaskan. <br>
                                            <?= $kecelakaan_detail_internal['pttk_apkh_1'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            Buatlah dan Jelaskan kesimpulan mengenai penyebab kecelakaan, persyaratan yang harus di penuhi oleh korban dan kondisi lain yang ada hubungannya dengan kejadian kecelakaan.<br>
                                            <?= $kecelakaan_detail_internal['pttk_kesimpulan'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>SARAN</b>
                                        </td>
                                        <td colspan="2">
                                            <span style="text-align:center">(Diisi oleh Bagian K3)</span><br>
                                            <?= $kecelakaan_main['saran'] ?>
                                        </td>
                                    </tr>
                                </table>
                                <table class="table table-bordered" style="width: 100%;">
                                    <tr>
                                        <th>
                                            Mengetahui, <br>
                                            Kepala Bagian K3 <br><br><br><br><br><br>
                                            <?= $k3['nama'] ?><br>
                                            <?= $k3['nip'] ?>
                                        </th>
                                        <th><br>
                                            SR <br><br><br><br><br><br>
                                            <?= $penderita['nama'] ?><br>
                                            <?= $penderita['nip'] ?>
                                        </th>
                                        <th>
                                            Gresik, <?= date('d M Y') ?><br>
                                            Investigato/ Atasan Penderita <br><br><br><br><br><br>
                                            <?= $kabag['nama'] ?><br>
                                            <?= $kabag['nip'] ?>
                                        </th>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<div class="modal fade bd-example-modal-sm" tabindex="-1" kecelakaan_detail_internal="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="modal-delete">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <form method="post" action="<?= base_url('master/Kecelakaan_detail_internal/delete') ?>">
                <div class="modal-header">
                    <h5 class="modal-title">Confirm delete</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id" id="delete-input">
                    <p>Are you sure to delete this data?</p>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger btn-send">Yes, Delete</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade bd-example-modal-sm" tabindex="-1" master_bagian="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="modal-form">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="load-form"></div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function validasi(id) {
        $("#load-form").html('loading...');

        $("#modal-form").modal();
        $("#title-form").html('Validasi');
        $("#load-form").load("<?= base_url('master/Kecelakaan_detail_internal/validasi/') ?>" + id);

    }

    function edit(id) {
        location.href = "<?= base_url('master/Kecelakaan_detail_internal/edit/') ?>" + id;
    }

    function cetak(id) {
        window.open("<?= base_url('master/Kecelakaan_detail_internal/cetak/') ?>" + id);
    }

    function hapus(id) {
        $("#modal-delete").modal('show');
        $("#delete-input").val(id);
    }
</script>