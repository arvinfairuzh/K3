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
            LAPORAN DAN INVESTIGASI KECELAKAAN DI LUAR TEMPAT KERJA
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Master</a></li>
            <li class="#">Form Kecelakaan</li>
            <li class="active">Edit</li>
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
                                        <button type="button" class="btn btn-sm btn-primary pull-right" onclick="edit(<?= $kecelakaan_main['id'] ?>)" style="margin-right: 5px;"><i class="fa fa-pencil"></i> Edit</button>
                                    <?php
                                    }
                                } else {
                                    if ($kecelakaan_main['status_kecelakaan'] == 3 || $kecelakaan_main['status_kecelakaan'] == 8) {
                                    ?>
                                        <button type="button" class="btn btn-sm btn-success pull-right" onclick="validasi(<?= $kecelakaan_main['id'] ?>)" style="margin-right: 5px;"><i class="fa fa-refresh"></i> Validasi</button>
                                        <button type="button" class="btn btn-sm btn-primary pull-right" onclick="edit(<?= $kecelakaan_main['id'] ?>)" style="margin-right: 5px;"><i class="fa fa-pencil"></i> Edit</button>
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
                                    <h3><b>LAPORAN DAN INVESTIGASI KECELAKAAN DI LUAR TEMPAT KERJA</b></h3>
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
                                <table class="table table-bordered">
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
                                            <?= $kecelakaan_main['ip_umur'] ?>
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
                                            <?= $kecelakaan_main['ip_lama_bekerja_unit'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Lama bekerja di PT Petrokimia Gresik
                                        </td>
                                        <td>
                                            <?= $kecelakaan_main['ip_lama_bekerja_petro'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="18">
                                            <b>KEJADIAN KECELAKAAN</b>
                                        </td>
                                        <td>
                                            Tanggal & Jam
                                        </td>
                                        <td>
                                            <?= $kecelakaan_detail_ekternal['kk_tanggal_jam'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Lokasi
                                        </td>
                                        <td>
                                            <?= $kecelakaan_detail_ekternal['kk_lokasi'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            Jelaskan bagaimana kecelakaan terjadi :
                                            <br>
                                            <?= $kecelakaan_detail_ekternal['kk_penjelasan_kecelakaan'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            Gambarkan lokasi/ sket terjadinya kecelakaan :
                                            <br>
                                            <img src="<?php echo base_url() . $kecelakaan_detail_ekternal['kk_gambar_lokasi'] ?>" width="150" height="100" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Bagian tubuh yang cedera
                                        </td>
                                        <td>
                                            <?= $kecelakaan_detail_ekternal['kk_bagian_tubuh_cedera'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="18">
                                            Pada saat kejadian, apakah keperluan / aktifitas pederita ?
                                            <?php
                                            $berangkatkerja = 'unchecked';
                                            $berangkatdanistirahatkerja = 'unchecked';
                                            $perjalanandinas = 'unchecked';
                                            $ijin = 'unchecked';
                                            $pulangkerjauntukistirahat = 'unchecked';
                                            $pulangkerja = 'unchecked';
                                            $lainya = 'unchecked';
                                            $selected_radio = $kecelakaan_detail_ekternal['kk_aktifitas_penderita'];
                                            if ($selected_radio == 'Berangkat kerja') {
                                                $berangkatkerja = 'checked';
                                            } else if ($selected_radio == 'Berangkat dan istirahat kerja') {
                                                $berangkatdanistirahatkerja = 'checked';
                                            } else if ($selected_radio == 'Perjalanan dinas') {
                                                $perjalanandinas = 'checked';
                                            } else if ($selected_radio == 'Ijin') {
                                                $ijin = 'checked';
                                            } else if ($selected_radio == 'Pulang untuk istirahat kerja') {
                                                $pulangkerjauntukistirahat = 'checked';
                                            } else if ($selected_radio == 'Pulang kerja') {
                                                $var  = 'checked';
                                            } else {
                                                $lainya = 'checked';
                                            }
                                            ?>
                                            <table>
                                                <tr>
                                                    <td style="padding-right: 50px">
                                                        <input type="checkbox" <?PHP print $berangkatkerja; ?>>
                                                        Berangkat kerja
                                                    </td>
                                                    <td style="padding-right: 75px">
                                                        <input type="checkbox" <?PHP print $berangkatdanistirahatkerja; ?>>
                                                        Berangkat dan istirahat kerja
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" <?PHP print $perjalanandinas; ?>>
                                                        Perjalanan dinas
                                                    </td>
                                                    <td>
                                                        <input type="checkbox" <?PHP print $ijin; ?>>
                                                        Ijin
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" <?PHP print $pulangkerjauntukistirahat; ?>>
                                                        Pulang untuk istirahat kerja
                                                    </td>
                                                    <td>
                                                        <input type="checkbox" <?PHP print $pulangkerja; ?>>
                                                        Pulang kerja
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" <?PHP print $lainya; ?>>
                                                        Lain lain
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            Apabila lain-lain, Jelaskan keperluan aktifitas penderita ?<br>
                                            <?= $kecelakaan_detail_ekternal['kk_apabila_1'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            Apakah yang bersangkutan melalui jalan yang ditempuh ?<br>
                                            <?php
                                            $ya = 'unchecked';
                                            $tidak = 'unchecked';
                                            $selected_radio = $kecelakaan_detail_ekternal['kk_apkh_1'];
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
                                            Apabila Tidak, Mengapa tidak menempuh jalan yang biasa di lalui ?<br>
                                            <?= $kecelakaan_detail_ekternal['kk_apabila_1'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            Apakah kendaraan yang digunakan penderita ?<br>
                                            <?php
                                            $dinas = 'unchecked';
                                            $pribadi = 'unchecked';
                                            $kendaraanumum = 'unchecked';
                                            $selected_radio = $kecelakaan_detail_ekternal['kk_apkh_2'];
                                            if ($selected_radio == 'Dinas') {
                                                $dinas = 'checked';
                                            } else if ($selected_radio == 'Pribadi') {
                                                $pribadi = 'checked';
                                            } else if ($selected_radio == 'Kendaraan Umum') {
                                                $kendaraanumum = 'checked';
                                            }
                                            ?>
                                            <br><input type="checkbox" name="dt[kk_apkh_2]" value="Dinas" <?PHP print $dinas; ?>>
                                            Dinas
                                            <input type="checkbox" name="dt[kk_apkh_2]" value="Pribadi" <?PHP print $pribadi; ?>>
                                            Pribadi
                                            <input type="checkbox" name="dt[kk_apkh_2]" value="Kendaraan Umum" <?PHP print $kendaraanumum; ?>>
                                            Kendaraan Umum
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            Jenis kendaraan apa yang digunakan ?<br>
                                            <?php
                                            $mobil = 'unchecked';
                                            $sepedamotor = 'unchecked';
                                            $bis = 'unchecked';
                                            $alatberat = 'unchecked';
                                            $truck = 'unchecked';
                                            $lainya = 'unchecked';
                                            $selected_radio = $kecelakaan_detail_ekternal['kk_jenis_kendaraan'];
                                            if ($selected_radio == 'Mobil') {
                                                $mobil = 'checked';
                                            } else if ($selected_radio == 'Sepeda motor') {
                                                $sepedamotor = 'checked';
                                            } else if ($selected_radio == 'Bis') {
                                                $bis = 'checked';
                                            } else if ($selected_radio == 'Alat Berat') {
                                                $alatberat = 'checked';
                                            } else if ($selected_radio == 'Truck') {
                                                $truck = 'checked';
                                            } else {
                                                $lainya = 'checked';
                                            }
                                            ?>
                                            <br><input type="checkbox" onclick="javascript:yesnoCheck2();" id="jenis1" name="dt[kk_jenis_kendaraan]" value="Mobil" <?PHP print $mobil; ?>>
                                            Mobil
                                            <input type="checkbox" onclick="javascript:yesnoCheck2();" id="jenis2" name="dt[kk_jenis_kendaraan]" value="Sepeda motor" <?PHP print $sepedamotor; ?>>
                                            Sepeda motor
                                            <input type="checkbox" onclick="javascript:yesnoCheck2();" id="jenis3" name="dt[kk_jenis_kendaraan]" value="Bis" <?PHP print $bis; ?>>
                                            Bis<br>
                                            <input type="checkbox" onclick="javascript:yesnoCheck2();" id="jenis4" name="dt[kk_jenis_kendaraan]" value="Alat Berat" <?PHP print $alatberat; ?>>
                                            Alat Berat
                                            <input type="checkbox" onclick="javascript:yesnoCheck2();" id="jenis5" name="dt[kk_jenis_kendaraan]" value="Truck" <?PHP print $truck; ?>>
                                            Truck
                                            <input type="checkbox" onclick="javascript:yesnoCheck2();" id="jenis6" name="dt[kk_jenis_kendaraan]" value="Lain lain" <?PHP print $lainya; ?>>
                                            Lain lain
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            Apabila lain lain, Sebutkan<br>
                                            <?php
                                            if ($kecelakaan_detail_ekternal['kk_jenis_kendaraan'] == 'Lain lain') {
                                                $value_lain = $kecelakaan_detail_ekternal['kk_jenis_kendaraan'];
                                            } else {
                                                $value_lain = '';
                                            }
                                            ?>
                                            <p><?= $value_lain ?></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            Saat terjadi kecelakaan lalulintas, Apakah yang bersangkutan melanggar rambu rambu lalulintas ?<br>
                                            <?php
                                            $ya = 'unchecked';
                                            $tidak = 'unchecked';
                                            $selected_radio = $kecelakaan_detail_ekternal['kk_apkh_3'];
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
                                            Apabila Ya, Mengapa pelanggaran rambu-rambu lalulintas dilakukan ?<br>
                                            <?= $kecelakaan_detail_ekternal['kk_ya_3'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            Apakah saat kejadian yang bersangkutan menggunakan alat keselamatan(mis:safety helmet, seat belt, dll) secara benar ?<br>
                                            <?php
                                            $ya = 'unchecked';
                                            $tidak = 'unchecked';
                                            $tidakperlu = 'unchecked';
                                            $selected_radio = $kecelakaan_detail_ekternal['kk_apkh_3'];
                                            if ($selected_radio == 'ya') {
                                                $ya = 'checked';
                                            } else if ($selected_radio == 'tidak') {
                                                $tidak = 'checked';
                                            } else {
                                                $tidakperlu = 'checked';
                                            }
                                            ?>
                                            <div class="col-xs-4">
                                                <input type="checkbox" <?PHP print $ya; ?> onClick="this.checked=!this.checked;"> &nbsp Ya
                                            </div>
                                            <div class="col-xs-4">
                                                <input type="checkbox" <?PHP print $tidak; ?> onClick="this.checked=!this.checked;"> &nbsp Tidak
                                            </div>
                                            <div class="col-xs-4">
                                                <input type="checkbox" <?PHP print $tidakperlu; ?> onClick="this.checked=!this.checked;"> &nbsp Tidak Perlu
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            Apabila Tidak, Jelaskan mengapa alat keselamatan tidak dipakai secara benar<br>
                                            <?= $kecelakaan_detail_ekternal['kk_tidak_4'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            Apakah saat kejadian kondisi kendaraan yang digunakan layak pakai dan kelengkapan kendaraan memenuhi persyaratan ?(termasuk lampu, rem, lampu sign dll)<br>
                                            <?php
                                            $ya = 'unchecked';
                                            $tidak = 'unchecked';
                                            $selected_radio = $kecelakaan_detail_ekternal['kk_apkh_5'];
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
                                            Apabila Tidak, Mengapa belum dilakukan perbaikan ?<br>
                                            <?= $kecelakaan_detail_ekternal['kk_tidak_5'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="3">
                                            <b>LAMA PENGOBATAN PENDERITA</b>
                                        </td>
                                        <td>
                                            Di RS Petrokimia Gresik
                                        </td>
                                        <td><?= $kecelakaan_main['lpp_di_rs_petro'] ?> </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Di RS Luar
                                        </td>
                                        <td> <?= $kecelakaan_main['lpp_di_rs_luar'] ?> </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Istirahat Dokter
                                        </td>
                                        <td><?= $kecelakaan_main['lpp_istirahat_dokter'] ?> </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="9">
                                            <b>WEWENANG DAN PENGAWASAN</b>
                                        </td>
                                        <td colspan="2">
                                            Apabila pada saat kejadian yang bersangkutan menggunakan kendaraan dinas perusahaan ,Apakah yang bersangkutan mempunyai kewenangan untuk menjalankan/mengoprasikan kendaraan dinas tersebut ?<br>
                                            <?php
                                            $ya = 'unchecked';
                                            $tidak = 'unchecked';
                                            $selected_radio = $kecelakaan_detail_ekternal['wp_apbl_1'];
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
                                            Apabila Ya :<br>
                                            1. Siapa yang memerintahkan untuk menjalankan/mengoprasikan ?<br>
                                            <?= $kecelakaan_detail_ekternal['wp_ya_q1'] ?><br>
                                            2. Tugas dan instruksi apa yang telah diberikan kepada penderita ?<br>
                                            <?= $kecelakaan_detail_ekternal['wp_ya_q2'] ?><br>
                                            3. Pada saat terjadi kecelakaan, dimana atasan yang bersangkutan berada ?<br>
                                            <?= $kecelakaan_detail_ekternal['wp_ya_q3'] ?><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            Apabila Tidak :<br>
                                            1. Siapa yang memperintahkan ?<br>
                                            <?= $kecelakaan_detail_ekternal['wp_tidak_q1'] ?><br>
                                            2. Tugas dan instruksi apa yang telah diberikan kepada penderita ?<br>
                                            <?= $kecelakaan_detail_ekternal['wp_tidak_q2'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            Persyaratan administrasi apa yang di bawa penderita saat terjadi kecelakaan ?<br>
                                            <?php
                                            $simpol = 'unchecked';
                                            $simper = 'unchecked';
                                            $sio = 'unchecked';
                                            $simper1 = 'unchecked';
                                            $stnk = 'unchecked';

                                            $selected_radio = $kecelakaan_detail_ekternal['wp_persyaratan_administrasi'];
                                            if ($selected_radio == 'simpol') {
                                                $simpol = 'checked';
                                            } else if ($selected_radio == 'simper') {
                                                $simper = 'checked';
                                            } else if ($selected_radio == 'sio') {
                                                $sio = 'checked';
                                            } else if ($selected_radio == 'simper1') {
                                                $simper1 = 'checked';
                                            } else if ($selected_radio == 'stnk') {
                                                $stnk = 'checked';
                                            }
                                            ?>
                                            <br>
                                            <input type="checkbox" id="vehicle1" name="dt[wp_persyaratan_administrasi]" value="simpol" <?PHP print $simpol; ?>>
                                            SIMPOL sesuai dengan kendaraan yang dikemudikan<br>
                                            <input type="checkbox" id="vehicle2" name="dt[wp_persyaratan_administrasi]" value="simper" <?PHP print $simper; ?>>
                                            SIMPER sesuai dengan kendaraan yang dikemudikan<br>
                                            <input type="checkbox" id="vehicle3" name="dt[wp_persyaratan_administrasi]" value="sio" <?PHP print $sio; ?>>
                                            SIO Untuk alat alat berat perusahaan<br>
                                            <input type="checkbox" id="vehicle3" name="dt[wp_persyaratan_administrasi]" value="simper1" <?PHP print $simper1; ?>>
                                            SIMPER alat alat berat sesuai yang dioprasikan<br>
                                            <input type="checkbox" id="vehicle3" name="dt[wp_persyaratan_administrasi]" value="stnk" <?PHP print $stnk; ?>>
                                            STNK<br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            Kapan masa berakhirnya persyaratan tersebut di atas ?<br>
                                            <table>
                                                <tr>
                                                    <td>
                                                        SIMPOL
                                                    </td>
                                                    <td>:</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        SIMPER
                                                    </td>
                                                    <td>:</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        SIO
                                                    </td>
                                                    <td>:</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        SIMPER ALBER
                                                    </td>
                                                    <td>:</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        STNK
                                                    </td>
                                                    <td>:</td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            Apabila habis masa berlakunya, mengapa tidak diperpanjang ?<br>
                                            <?= $kecelakaan_detail_ekternal['wp_mengapa'] ?><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            Bagaimana kondisi tempat kejadian?<br>
                                            <?= $kecelakaan_detail_ekternal['wp_bgmn_1'] ?><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            Dapatkah ditentukan usaha pencegahan lebih lanjut agar kejadian serupa tidak terulang ?<br>
                                            <?php
                                            $ya = 'unchecked';
                                            $tidak = 'unchecked';
                                            $selected_radio = $kecelakaan_detail_ekternal['wp_usaha_pencegahan_1'];
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
                                            Apabila Ya, Bagaimana usaha dan langkah-langkah pencegahannya ?<br>
                                            <?= $kecelakaan_detail_ekternal['wp_bgmn_1'] ?><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2">
                                            <b>SISTEM PELAPORAN DAN PELATIHAN</b>
                                        </td>
                                        <td colspan="2">
                                            Apakah yang bersangkutan masih perlu menambahkan keterampilan dalam menjalankan/mengoprasikan kendaraan yang digunakan ?<br>
                                            <?php
                                            $ya = 'unchecked';
                                            $tidak = 'unchecked';
                                            $selected_radio = $kecelakaan_detail_ekternal['sp_apkh_1'];
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
                                            Apabila Ya, Pelatihan apa yang diperlukan ?<br>
                                            <?= $kecelakaan_detail_ekternal['sp_ya_1'] ?><br>
                                        </td>
                                    </tr>
                                    <tr>

                                        <td rowspan="3">
                                            <b>PENYUMBANGAN TERHADAP TERJADINYA KECELAKAAN</b>
                                        </td>
                                        <td colspan="2">
                                            Bagaimana Kondisi lingkungan saat itu ?<br>
                                            <?php
                                            $hujan = 'unchecked';
                                            $licin = 'unchecked';
                                            $panas = 'unchecked';
                                            $jalanramai = 'unchecked';
                                            $dingin = 'unchecked';
                                            $jalansempit = 'unchecked';
                                            $kabut = 'unchecked';
                                            $jalanjelek = 'unchecked';
                                            $gelap = 'unchecked';
                                            $jalanmacet = 'unchecked';
                                            $lainya = 'unchecked';

                                            $selected_radio = $kecelakaan_detail_ekternal['pttk_kondisi_lingkungan'];
                                            if ($selected_radio == 'Hujan') {
                                                $hujan = 'checked';
                                            } else if ($selected_radio == 'Licin') {
                                                $licin = 'checked';
                                            } else if ($selected_radio == 'Panas') {
                                                $panas = 'checked';
                                            } else if ($selected_radio == 'Jalan Ramai') {
                                                $jalanramai = 'checked';
                                            } else if ($selected_radio == 'Dingin') {
                                                $dingin = 'checked';
                                            } else if ($selected_radio == 'Jalan Sempit') {
                                                $jalansempit = 'checked';
                                            } else if ($selected_radio == 'Kabut') {
                                                $kabut = 'checked';
                                            } else if ($selected_radio == 'Jalan Jelek') {
                                                $jalanjelek = 'checked';
                                            } else if ($selected_radio == 'Gelap') {
                                                $gelap = 'checked';
                                            } else if ($selected_radio == 'Jalan Macet') {
                                                $jalanmacet = 'checked';
                                            } else {
                                                $lainya = 'checked';
                                            }
                                            ?>
                                            <table>
                                                <tr>
                                                    <td style="padding-right: 50px">
                                                        <input type="checkbox" name="dt[pttk_kondisi_lingkungan]" value="Hujan" onClick="this.checked=!this.checked;" <?PHP print $hujan; ?>>
                                                        Hujan
                                                    </td>
                                                    <td>
                                                        <input type="checkbox" name="dt[pttk_kondisi_lingkungan]" value="Licin" onClick="this.checked=!this.checked;" <?PHP print $licin; ?>>
                                                        Jalan Licin
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="padding-right: 75px">
                                                        <input type="checkbox" name="dt[pttk_kondisi_lingkungan]" value="Panas" onClick="this.checked=!this.checked;" <?PHP print $panas; ?>>
                                                        Panas
                                                    </td>
                                                    <td>
                                                        <input type="checkbox" name="dt[pttk_kondisi_lingkungan]" value="Jalan Ramai" onClick="this.checked=!this.checked;" <?PHP print $jalanramai; ?>>
                                                        Jalan Ramai
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" name="dt[pttk_kondisi_lingkungan]" value="Dingin" onClick="this.checked=!this.checked;" <?PHP print $dingin; ?>>
                                                        Dingin
                                                    </td>
                                                    <td>
                                                        <input type="checkbox" name="dt[pttk_kondisi_lingkungan]" value="Jalan Sempit" onClick="this.checked=!this.checked;" <?PHP print $jalansempit; ?>>
                                                        Jalan Sempit
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" name="dt[pttk_kondisi_lingkungan]" value="Kabut" onClick="this.checked=!this.checked;" <?PHP print $kabut; ?>>
                                                        Kabut
                                                    </td>
                                                    <td>
                                                        <input type="checkbox" name="dt[pttk_kondisi_lingkungan]" value="Jalan Jelek" onClick="this.checked=!this.checked;" <?PHP print $jalanjelek; ?>>
                                                        Jalan Jelek
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" name="dt[pttk_kondisi_lingkungan]" value="Gelap" onClick="this.checked=!this.checked;" <?PHP print $gelap; ?>>
                                                        Gelap
                                                    </td>
                                                    <td>
                                                        <input type="checkbox" name="dt[pttk_kondisi_lingkungan]" value="Jalan Macet" onClick="this.checked=!this.checked;" <?PHP print $jalanmacet; ?>>
                                                        Jalan Macet
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" name="dt[pttk_kondisi_lingkungan]" value="Lainya" onClick="this.checked=!this.checked;" <?PHP print $lainya; ?>>
                                                        Lainya
                                                        <?php
                                                        if ($kecelakaan_detail_ekternal['pttk_kondisi_lingkungan'] == 'Lainya') {
                                                            $value_lain = ' yaitu: ' . $kecelakaan_detail_ekternal['pttk_kondisi_lingkungan'];
                                                        } else {
                                                            $value_lain = '';
                                                        }
                                                        ?>
                                                        <p><?= $value_lain ?></p>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            Apakah keadaan tersebut di atas merupakan faktor dominan terjadinya kecelakaan ? Jelaskan. <br>
                                            <?= $kecelakaan_detail_ekternal['pttk_apkh_1'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            Buatlah dan Jelaskan kesimpulan mengenai penyebab kecelakaan, persyaratan yang harus di penuhi oleh korban dan kondisi lain yang ada hubungannya dengan kejadian kecelakaan.<br>
                                            <?= $kecelakaan_detail_ekternal['pttk_kesimpulan'] ?>
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
                                            Penderita <br><br><br><br><br><br>
                                            <?= $penderita['nama'] ?><br>
                                            <?= $penderita['nip'] ?>
                                        </th>
                                        <th>
                                            Gresik, <?= date('d M Y') ?><br>
                                            Investigator/ Atasan Penderita <br><br><br><br><br><br>
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

<div class="modal fade bd-example-modal-sm" tabindex="-1" kecelakaan_detail_ekternal="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="modal-delete">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <form method="post" action="<?= base_url('master/Kecelakaan_detail_ekternal/delete') ?>">
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
        $("#load-form").load("<?= base_url('master/Kecelakaan_detail_ekternal/validasi/') ?>" + id);

    }

    function edit(id) {
        location.href = "<?= base_url('master/Kecelakaan_detail_ekternal/edit/') ?>" + id;
    }

    function cetak(id) {
        window.open("<?= base_url('master/Kecelakaan_detail_ekternal/cetak/') ?>" + id);
    }

    function hapus(id) {
        $("#modal-delete").modal('show');
        $("#delete-input").val(id);
    }
</script>