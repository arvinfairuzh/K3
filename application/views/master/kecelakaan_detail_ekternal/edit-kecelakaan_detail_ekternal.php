<!-- Content Wrapper. Contains page content -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Kecelakaan Eksternal
            <small>Edit</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Master</a></li>
            <li class="#">Kecelakaan Eksternal</li>
            <li class="active">Edit</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <form method="POST" action="<?= base_url('master/Kecelakaan_detail_ekternal/update') ?>" id="upload-create" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $kecelakaan_main['id'] ?>">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <!-- /.box-header -->
                        <div class="box-header">
                            <h5 class="box-title">
                                Edit Kecelakaan Eksternal
                            </h5>
                        </div>
                        <div class="box-body">
                            <div class="show_error"></div>
                            <?php
                            if ($_SESSION['role_id'] == 1) {
                                ?>
                                <div class="form-group" align="center">
                                    <label for="form-jenis_kecelakaan" style="font-size:20px">Jenis Kecelakaan</label><br>
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
                                    <div class="col-md-6">
                                        <input type="radio" id="form-jenis_kecelakaan-1" name="dta[jenis_kecelakaan]" value="1" <?= $ya ?>>
                                        <label for="form-jenis_kecelakaan-1">Kecelakaan Kerja</label><br>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="radio" id="form-jenis_kecelakaan-2" name="dta[jenis_kecelakaan]" value="2" <?= $tidak ?>>
                                        <label for="form-jenis_kecelakaan-2">Bukan Kecelakaan Kerja</label><br>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <hr>
                                    <label for="form-id_kecelakaan" style="font-size:20px">IDENTITAS PENDERITA</label>
                                </div>
                                <div class="form-group">
                                    <label for="form-kk_tanggal_jam">Nama</label>
                                    <input type="text" class="form-control" id="form-kk_tanggal_jam" name="dta[ip_nama]" value="<?= $kecelakaan_main['ip_nama'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="form-kk_tanggal_jam">Nomor Induk</label>
                                    <input type="text" class="form-control" id="form-kk_tanggal_jam" name="dta[ip_nomor_induk]" value="<?= $kecelakaan_main['ip_nomor_induk'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="form-kk_tanggal_jam">Umur</label>
                                    <input type="text" class="form-control" id="form-kk_tanggal_jam" name="dta[ip_umur]" value="<?= $kecelakaan_main['ip_umur'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="form-kk_tanggal_jam">Alamat</label>
                                    <input type="text" class="form-control" id="form-kk_tanggal_jam" name="dta[ip_alamat]" value="<?= $kecelakaan_main['ip_alamat'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="form-kk_tanggal_jam">Dep/Biro/Bid</label>
                                    <input type="text" class="form-control" id="form-kk_tanggal_jam" name="dta[ip_dep_birobid]" value="<?= $kecelakaan_main['ip_dep_birobid'] ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="form-kk_tanggal_jam">Bagian/Seksi</label>
                                    <input type="text" class="form-control" id="form-kk_tanggal_jam" name="dta[ip_bagian_seksi]" value="<?= $kecelakaan_main['ip_bagian_seksi'] ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="form-kk_tanggal_jam">Lama bekerja di unit tersebut</label>
                                    <input type="text" class="form-control" id="form-kk_tanggal_jam" name="dta[ip_lama_bekerja_unit]" value="<?= $kecelakaan_main['ip_lama_bekerja_unit'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="form-kk_tanggal_jam">Lama Bekerja di PT Petrokimia Gresik</label>
                                    <input type="text" class="form-control" id="form-kk_tanggal_jam" name="dta[ip_lama_bekerja_petro]" value="<?= $kecelakaan_main['ip_lama_bekerja_petro'] ?>">
                                </div>
                                <!-- JAGA JARAK -->
                                <div class="form-group">
                                    <label for="form-id_kecelakaan" style="font-size:20px">KEJADIAN KECELAKAAN</label>
                                </div>
                                <div class="form-group">
                                    <label for="form-kk_tanggal_jam">Tanggal & Jam</label>
                                    <input type="date" class="form-control" id="form-kk_tanggal_jam"  name="dt[kk_tanggal_jam]" value="<?= $kecelakaan_detail_ekternal['kk_tanggal_jam'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="form-kk_lokasi">Lokasi</label>
                                    <input type="text" class="form-control" id="form-kk_lokasi"  name="dt[kk_lokasi]" value="<?= $kecelakaan_detail_ekternal['kk_lokasi'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="form-kk_penjelasan_kecelakaan">Jelaskan bagaimana terjadi</label>
                                    <textarea name="dt[kk_penjelasan_kecelakaan]" class="form-control"><?= $kecelakaan_detail_ekternal['kk_penjelasan_kecelakaan'] ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="form-kk_gambar_lokasi">Gambarkan Lokasi/ sket terjadinya kecelakaan</label>
                                    <!-- <input type="text" class="form-control" id="form-kk_gambar_lokasi" placeholder="Masukan Kk Gambar Lokasi" name="dt[kk_gambar_lokasi]" value="<?= $kecelakaan_detail_ekternal['kk_gambar_lokasi'] ?>"> -->
                                    <input type="file" class="form-control" id="form-file" placeholder="Masukan File" name="kk_gambar_lokasi">
                                </div>
                                <div class="form-group">
                                    <label for="form-kk_bagian_tubuh_cedera">Bagian tubuh yang cedera</label>
                                    <input type="text" class="form-control" id="form-kk_bagian_tubuh_cedera"  name="dt[kk_bagian_tubuh_cedera]" value="<?= $kecelakaan_detail_ekternal['kk_bagian_tubuh_cedera'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="form-kk_aktifitas_penderita">Pada Saat kejadian apakah keperluan/aktifitas penderita</label>
                                    <!-- <input type="text" class="form-control" id="form-kk_aktifitas_penderita" placeholder="Masukan Kk Aktifitas Penderita" name="dt[kk_aktifitas_penderita]" value="<?= $kecelakaan_detail_ekternal['kk_aktifitas_penderita'] ?>"> -->
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
                                                <input type="radio" name="dt[kk_aktifitas_penderita]" onclick="javascript:yesnoCheck();" id="bk" value="Berangkat kerja" <?PHP print $berangkatkerja; ?>>
                                                <label for="Ya">Berangkat kerja</label>
                                            </td>
                                            <td style="padding-right: 75px">
                                                <input type="radio" name="dt[kk_aktifitas_penderita]" onclick="javascript:yesnoCheck();" id="bik" value="Berangkat dan istirahat kerja" <?PHP print $berangkatdanistirahatkerja; ?>>
                                                <label for="Tidak">Berangkat dan istirahat kerja</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="radio" name="dt[kk_aktifitas_penderita]" onclick="javascript:yesnoCheck();" id="pd" value="Perjalanan dinas" <?PHP print $perjalanandinas; ?>>
                                                <label for="Tidak">Perjalanan dinas</label>
                                            </td>
                                            <td>
                                                <input type="radio" name="dt[kk_aktifitas_penderita]" onclick="javascript:yesnoCheck();" id="ijin" value="Ijin" <?PHP print $ijin; ?>>
                                                <label for="Tidak">Ijin</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="radio" name="dt[kk_aktifitas_penderita]" onclick="javascript:yesnoCheck();" id="puik" value="Pulang untuk istirahat kerja" <?PHP print $pulangkerjauntukistirahat; ?>>
                                                <label for="Tidak">Pulang untuk istirahat kerja</label>
                                            </td>
                                            <td>
                                                <input type="radio" name="dt[kk_aktifitas_penderita]" onclick="javascript:yesnoCheck();" id="pk" value="Pulang kerja" <?PHP print $pulangkerja; ?>>
                                                <label for="Tidak">Pulang kerja</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="radio" name="dt[kk_aktifitas_penderita]" onclick="javascript:yesnoCheck();" id="lain" value="Lain lain" <?PHP print $lainya; ?>>
                                                <label for="Tidak">Lain lain</label>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="form-group" id="kap" style="display: none;">
                                    <label for="form-kk_apabila_1">Jelaskan keperluan aktifitas penderita</label>
                                    <input type="text" class="form-control" id="form-kk_apabila_1"  name="dt[kk_apabila_1]" value="<?= $kecelakaan_detail_ekternal['kk_apabila_1'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="form-kk_apkh_1">Apakah yang bersangkutan melalui jalan yang ditempuh ?</label>
                                    <!-- <input type="text" class="form-control" id="form-kk_apkh_1" placeholder="Masukan Kk Apkh 1" name="dt[kk_apkh_1]" value="<?= $kecelakaan_detail_ekternal['kk_apkh_1'] ?>"> -->
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
                                    <br><input type="radio" onclick="javascript:yesnoCheck1();" id="yesCheck1" name="dt[kk_apkh_1]" value="ya" <?PHP print $ya; ?>>
                                    <label for="Ya">Ya</label><br>
                                    <input type="radio" onclick="javascript:yesnoCheck1();" id="noCheck1" name="dt[kk_apkh_1]" value="tidak" <?PHP print $tidak; ?>>
                                    <label for="Tidak">Tidak</label>
                                </div>
                                <div class="form-group" id="ifNo1" style="display:none">
                                    <label for="form-kk_tidak_1">Mengapa tidak menempuh jalan yang biasa di lalui ?</label>
                                    <input type="text" class="form-control" id="form-kk_tidak_1"  name="dt[kk_tidak_1]" value="<?= $kecelakaan_detail_ekternal['kk_tidak_1'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="form-kk_apkh_2">Apakah kendaraan yang digunakan penderita ?</label>
                                    <!-- <input type="text" class="form-control" id="form-kk_apkh_2" placeholder="Masukan Kk Apkh 2" name="dt[kk_apkh_2]" value="<?= $kecelakaan_detail_ekternal['kk_apkh_2'] ?>"> -->
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
                                    <br><input type="radio" name="dt[kk_apkh_2]" value="Dinas" <?PHP print $dinas; ?>>
                                    <label for="Ya">Dinas</label>
                                    <input type="radio" name="dt[kk_apkh_2]" value="Pribadi" <?PHP print $pribadi; ?>>
                                    <label for="Tidak">Pribadi</label>
                                    <input type="radio" name="dt[kk_apkh_2]" value="Kendaraan Umum" <?PHP print $kendaraanumum; ?>>
                                    <label for="Tidak">Kendaraan Umum</label>
                                </div>
                                <div class="form-group">
                                    <label for="form-kk_jenis_kendaraan">Jenis kendaraan apa yang digunakan ?</label>
                                    <!-- <input type="text" class="form-control" id="form-kk_jenis_kendaraan" placeholder="Masukan Kk Jenis Kendaraan" name="dt[kk_jenis_kendaraan]" value="<?= $kecelakaan_detail_ekternal['kk_jenis_kendaraan'] ?>"> -->
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
                                    <br><input type="radio" onclick="javascript:yesnoCheck2();" id="jenis1" name="dt[kk_jenis_kendaraan]" value="Mobil" <?PHP print $mobil; ?>>
                                    <label for="Ya">Mobil</label>
                                    <input type="radio" onclick="javascript:yesnoCheck2();" id="jenis2" name="dt[kk_jenis_kendaraan]" value="Sepeda motor" <?PHP print $sepedamotor; ?>>
                                    <label for="Tidak">Sepeda motor</label>
                                    <input type="radio" onclick="javascript:yesnoCheck2();" id="jenis3" name="dt[kk_jenis_kendaraan]" value="Bis" <?PHP print $bis; ?>>
                                    <label for="Tidak">Bis</label><br>
                                    <input type="radio" onclick="javascript:yesnoCheck2();" id="jenis4" name="dt[kk_jenis_kendaraan]" value="Alat Berat" <?PHP print $alatberat; ?>>
                                    <label for="Ya">Alat Berat</label>
                                    <input type="radio" onclick="javascript:yesnoCheck2();" id="jenis5" name="dt[kk_jenis_kendaraan]" value="Truck" <?PHP print $truck; ?>>
                                    <label for="Tidak">Truck</label>
                                    <input type="radio" onclick="javascript:yesnoCheck2();" id="jenis6" name="dt[kk_jenis_kendaraan]" value="Lain lain" <?PHP print $lainya; ?>>
                                    <label for="Tidak">Lain lain</label>
                                    <input type="text" name="pttk_kondisi_lingkungan_lainnya" id="wolk" style="display: none;">
                                </div>
                                <div class="form-group">
                                    <label for="form-kk_apkh_3">Saat terjadi kecelakaan lalulintas, Apakah yang bersangkutan melanggar rambu rambu lalulintas ?</label>
                                    <!-- <input type="text" class="form-control" id="form-kk_apkh_3" placeholder="Masukan Kk Apkh 3" name="dt[kk_apkh_3]" value="<?= $kecelakaan_detail_ekternal['kk_apkh_3'] ?>"> -->
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
                                    <br><input type="radio" onclick="javascript:yesnoCheck3();" id="yesCheck3" name="dt[kk_apkh_3]" value="ya" <?PHP print $ya; ?>>
                                    <label for="Ya">Ya</label><br>
                                    <input type="radio" onclick="javascript:yesnoCheck3();" id="noCheck3" name="dt[kk_apkh_3]" value="tidak" <?PHP print $tidak; ?>>
                                    <label for="Tidak">Tidak</label>
                                </div>
                                <div class="form-group" id="ifNo3" style="display:none">
                                    <label for="form-kk_ya_3">Mengapa pelanggaran rambu-rambu lalulintas dilakukan ?</label>
                                    <input type="text" class="form-control" id="form-kk_ya_3"  name="dt[kk_ya_3]" value="<?= $kecelakaan_detail_ekternal['kk_ya_3'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="form-kk_apkh_4">Apakah saat kejadian yang bersangkutan menggunakan alat keselamatan(mis:safety helmet, seat belt, dll) secara benar ?</label>
                                    <!-- <input type="text" class="form-control" id="form-kk_apkh_4" placeholder="Masukan Kk Apkh 4" name="dt[kk_apkh_4]" value="<?= $kecelakaan_detail_ekternal['kk_apkh_4'] ?>"> -->
                                    <?php
                                        $ya = 'unchecked';
                                        $tidak = 'unchecked';
                                        $tidakperlu = 'unchecked';
                                        $selected_radio = $kecelakaan_detail_ekternal['kk_apkh_4'];
                                        if ($selected_radio == 'ya') {
                                            $ya = 'checked';
                                        } else if ($selected_radio == 'tidak') {
                                            $tidak = 'checked';
                                        } else if ($selected_radio == 'tidak perlu') {
                                            $tidakperlu = 'checked';
                                        }
                                        ?>
                                    <br><input type="radio" onclick="javascript:yesnoCheck4();" id="yesCheck4" name="dt[kk_apkh_4]" value="ya" <?PHP print $ya; ?>>
                                    <label for="Ya">Ya</label><br>
                                    <input type="radio" onclick="javascript:yesnoCheck4();" id="noCheck4" name="dt[kk_apkh_4]" value="tidak" <?PHP print $tidak; ?>>
                                    <label for="Tidak">Tidak</label><br>
                                    <input type="radio" onclick="javascript:yesnoCheck4();" id="nonCheck4" name="dt[kk_apkh_4]" value="tidak perlu" <?PHP print $tidakperlu; ?>>
                                    <label for="Tidak">Tidak Perlu</label>
                                </div>
                                <div class="form-group" id="ifNo4" style="display:none">
                                    <label for="form-kk_tidak_4">Jelaskan mengapa alat keselamatan tidak dipakai secara benar.</label>
                                    <input type="text" class="form-control" id="form-kk_tidak_4"  name="dt[kk_tidak_4]" value="<?= $kecelakaan_detail_ekternal['kk_tidak_4'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="form-kk_apkh_5">Apakah saat kejadian kondisi kendaraan yang digunakan layak pakai dan kelengkapan kendaraan memenuhi persyaratan ?(termasuk lampu, rem, lampu sign dll)</label>
                                    <!-- <input type="text" class="form-control" id="form-kk_apkh_5" placeholder="Masukan Kk Apkh 5" name="dt[kk_apkh_5]" value="<?= $kecelakaan_detail_ekternal['kk_apkh_5'] ?>"> -->
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
                                    <br><input type="radio" onclick="javascript:yesnoCheck5();" id="yesCheck5" name="dt[kk_apkh_5]" value="ya" <?PHP print $ya; ?>>
                                    <label for="Ya">Ya</label><br>
                                    <input type="radio" onclick="javascript:yesnoCheck5();" id="noCheck5" name="dt[kk_apkh_5]" value="tidak" <?PHP print $tidak; ?>>
                                    <label for="Tidak">Tidak</label>
                                </div>
                                <div class="form-group" id="ifNo5" style="display:none">
                                    <label for="form-kk_tidak_5">Mengapa belum dilakukan perbaikan ?</label>
                                    <input type="text" class="form-control" id="form-kk_tidak_5"  name="dt[kk_tidak_5]" value="<?= $kecelakaan_detail_ekternal['kk_tidak_5'] ?>">
                                </div>
                                <!-- JAGA JARAK -->
                                <div class="form-group">
                                    <label for="form-id_kecelakaan" style="font-size:20px">LAMA PENGOBATAN PENDERITA</label>
                                </div>
                                <div class="form-group">
                                    <label for="form-kk_tanggal_jam">Di RS Petrokimia Gresik</label>
                                    <input type="text" class="form-control" id="form-kk_tanggal_jam" name="dta[lpp_di_rs_petro]" value="<?= $kecelakaan_main['lpp_di_rs_petro'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="form-kk_tanggal_jam">Di RS Luar</label>
                                    <input type="text" class="form-control" id="form-kk_tanggal_jam" name="dta[lpp_di_rs_luar]" value="<?= $kecelakaan_main['lpp_di_rs_luar'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="form-kk_tanggal_jam">Istirahat Dokter</label>
                                    <input type="text" class="form-control" id="form-kk_tanggal_jam" name="dta[lpp_istirahat_dokter]" value="<?= $kecelakaan_main['lpp_istirahat_dokter'] ?>">
                                </div>
                                <!-- JAGA JARAK -->
                                <div class="form-group">
                                    <label for="form-id_kecelakaan" style="font-size:20px">WEWENANG DAN PENGAWASAN</label>
                                </div>
                                <div class="form-group">
                                    <label for="form-wp_apbl_1">Apabila pada saat kejadian yang bersangkutan menggunakan kendaraan dinas perusahaan ,Apakah yang bersangkutan mempunyai kewenangan untuk menjalankan/mengoprasikan kendaraan dinas tersebut ?</label>
                                    <!-- <input type="text" class="form-control" id="form-wp_apbl_1" placeholder="Masukan Wp Apbl 1" name="dt[wp_apbl_1]" value="<?= $kecelakaan_detail_ekternal['wp_apbl_1'] ?>"> -->
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
                                    <br><input type="radio" onclick="javascript:yesnoCheck6();" id="yesCheck6" name="dt[wp_apbl_1]" value="ya" <?PHP print $ya; ?>>
                                    <label for="Ya">Ya</label><br>
                                    <input type="radio" onclick="javascript:yesnoCheck6();" id="noCheck6" name="dt[wp_apbl_1]" value="tidak" <?PHP print $tidak; ?>>
                                    <label for="Tidak">Tidak</label>
                                </div>
                                <div class="form-group" id="ifYes6" style="display:none">
                                    <label for="form-wp_ya_q1">Siapa yang memerintahkan untuk menjalankan/mengoprasikan ?</label>
                                    <input type="text" class="form-control" id="form-wp_ya_q1"  name="dt[wp_ya_q1]" value="<?= $kecelakaan_detail_ekternal['wp_ya_q1'] ?>">
                                </div>
                                <div class="form-group" id="ifYes7" style="display:none">
                                    <label for="form-wp_ya_q2">Tugas dan instruksi apa yang telah diberikan kepada penderita ?</label>
                                    <input type="text" class="form-control" id="form-wp_ya_q2"  name="dt[wp_ya_q2]" value="<?= $kecelakaan_detail_ekternal['wp_ya_q2'] ?>">
                                </div>
                                <div class="form-group" id="ifYes8" style="display:none">
                                    <label for="form-wp_ya_q3">Pada saat terjadi kecelakaan, dimana atasan yang bersangkutan berada ?</label>
                                    <input type="text" class="form-control" id="form-wp_ya_q3"  name="dt[wp_ya_q3]" value="<?= $kecelakaan_detail_ekternal['wp_ya_q3'] ?>">
                                </div>
                                <div class="form-group" id="ifNo6" style="display:none">
                                    <label for="form-wp_tidak_q1">Siapa yang memperintahkan ?</label>
                                    <input type="text" class="form-control" id="form-wp_tidak_q1"  name="dt[wp_tidak_q1]" value="<?= $kecelakaan_detail_ekternal['wp_tidak_q1'] ?>">
                                </div>
                                <div class="form-group" id="ifNo7" style="display:none">
                                    <label for="form-wp_tidak_q2">Siapa yang memperintahkan ?</label>
                                    <input type="text" class="form-control" id="form-wp_tidak_q2" name="dt[wp_tidak_q2]" value="<?= $kecelakaan_detail_ekternal['wp_tidak_q2'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="form-wp_persyaratan_administrasi">Persyaratan administrasi apa yang di bawa penderita saat terjadi kecelakaan ?</label>
                                    <!-- <input type="text" class="form-control" id="form-wp_persyaratan_administrasi" placeholder="Masukan Wp Persyaratan Administrasi" name="dt[wp_persyaratan_administrasi]" value="<?= $kecelakaan_detail_ekternal['wp_persyaratan_administrasi'] ?>"> -->
                                    <?php
                                        $simpol = '';
                                        $simper = '';
                                        $sio = '';
                                        $simper1 = '';
                                        $stnk = '';
                                        foreach (json_decode($kecelakaan_detail_ekternal['wp_persyaratan_administrasi']) as $wp) {
                                            if ($wp->persyaratan == 'simpol') {
                                                $simpol = 'checked';
                                            } else if ($wp->persyaratan == 'simper') {
                                                $simper = 'checked';
                                            } else if ($wp->persyaratan == 'sio') {
                                                $sio = 'checked';
                                            } else if ($wp->persyaratan == 'simper1') {
                                                $simper1 = 'checked';
                                            } else if ($wp->persyaratan == 'stnk') {
                                                $stnk = 'checked';
                                            }
                                        }
                                        $selected_radio = $kecelakaan_detail_ekternal['wp_persyaratan_administrasi'];
                                        ?>
                                    <br>
                                    <input type="checkbox" id="vehicle1" name="wp_persyaratan_administrasi[]" value="simpol" <?PHP print $simpol; ?>>
                                    <label for="vehicle1"> SIMPOL sesuai dengan kendaraan yang dikemudikan</label><br>
                                    <input type="checkbox" id="vehicle2" name="wp_persyaratan_administrasi[]" value="simper" <?PHP print $simper; ?>>
                                    <label for="vehicle2"> SIMPER sesuai dengan kendaraan yang dikemudikan</label><br>
                                    <input type="checkbox" id="vehicle3" name="wp_persyaratan_administrasi[]" value="sio" <?PHP print $sio; ?>>
                                    <label for="vehicle3"> SIO Untuk alat alat berat perusahaan</label><br>
                                    <input type="checkbox" id="vehicle3" name="wp_persyaratan_administrasi[]" value="simper1" <?PHP print $simper1; ?>>
                                    <label for="vehicle3"> SIMPER alat alat berat sesuai yang dioprasikan</label><br>
                                    <input type="checkbox" id="vehicle3" name="wp_persyaratan_administrasi[]" value="stnk" <?PHP print $stnk; ?>>
                                    <label for="vehicle3"> STNK</label><br>
                                </div>
                                <div class="form-group">
                                    <label for="form-wp_masa_aktif_administrasi">Kapan masa berakhirnya persyaratan tersebut di atas ?</label>
                                    <textarea class="form-control" id="summernote_surat" name="dt[wp_masa_aktif_administrasi]"><?= $kecelakaan_detail_ekternal['wp_masa_aktif_administrasi'] ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="form-wp_mengapa">Apabila habis masa berlakunya, mengapa tidak diperpanjang ?</label>
                                    <input type="text" class="form-control" id="form-wp_mengapa" name="dt[wp_mengapa]" value="<?= $kecelakaan_detail_ekternal['wp_mengapa'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="form-wp_bgmn_1">Bagaimana kondisi tempat kejadian?</label>
                                    <input type="text" class="form-control" id="form-wp_bgmn_1"  name="dt[wp_bgmn_1]" value="<?= $kecelakaan_detail_ekternal['wp_bgmn_1'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="form-wp_usaha_pencegahan_1">Dapatkah ditentukan usaha pencegahan lebih lanjut agar kejadian serupa tidak terulang ?</label>
                                    <!-- <input type="text" class="form-control" id="form-wp_usaha_pencegahan_1" placeholder="Masukan Wp Usaha Pencegahan 1" name="dt[wp_usaha_pencegahan_1]" value="<?= $kecelakaan_detail_ekternal['wp_usaha_pencegahan_1'] ?>"> -->
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
                                    <br><input type="radio" onclick="javascript:yesnoCheck7();" id="yesCheck7" name="dt[wp_usaha_pencegahan_1]" value="ya" <?PHP print $ya; ?>>
                                    <label for="Ya">Ya</label><br>
                                    <input type="radio" onclick="javascript:yesnoCheck7();" id="noCheck7" name="dt[wp_usaha_pencegahan_1]" value="tidak" <?PHP print $tidak; ?>>
                                    <label for="Tidak">Tidak</label>
                                </div>
                                <div class="form-group" id="ifYes9" style="display:none">
                                    <label for="form-wp_ya_1">Bagaimana usaha dan langkah-langkah pencegahannya ?</label>
                                    <input type="text" class="form-control" id="form-wp_ya_1" name="dt[wp_ya_1]" value="<?= $kecelakaan_detail_ekternal['wp_ya_1'] ?>">
                                </div>
                                <!-- JAGA JARAK -->
                                <div class="form-group">
                                    <label for="form-id_kecelakaan" style="font-size:20px">SISTEM PELAPORAN DAN PELATIHAN</label>
                                </div>
                                <div class="form-group">
                                    <label for="form-sp_apkh_1">Apakah yang bersangkutan masih perlu menambahkan keterampilan dalam menjalankan/mengoprasikan kendaraan yang digunakan ?</label>
                                    <!-- <input type="text" class="form-control" id="form-sp_apkh_1" placeholder="Masukan Sp Apkh 1" name="dt[sp_apkh_1]" value="<?= $kecelakaan_detail_ekternal['sp_apkh_1'] ?>"> -->
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
                                    <br><input type="radio" onclick="javascript:yesnoCheck8();" id="yesCheck8" name="dt[sp_apkh_1]" value="ya" <?PHP print $ya; ?>>
                                    <label for="Ya">Ya</label><br>
                                    <input type="radio" onclick="javascript:yesnoCheck8();" id="noCheck8" name="dt[sp_apkh_1]" value="tidak" <?PHP print $tidak; ?>>
                                    <label for="Tidak">Tidak</label>
                                </div>
                                <div class="form-group" id="ifYes10" style="display:none">
                                    <label for="form-sp_ya_1">Pelatihan apa yang diperlukan ?</label>
                                    <input type="text" class="form-control" id="form-sp_ya_1"  name="dt[sp_ya_1]" value="<?= $kecelakaan_detail_ekternal['sp_ya_1'] ?>">
                                </div>
                                <!-- JAGA JARAK -->
                                <div class="form-group">
                                    <label for="form-id_kecelakaan" style="font-size:20px">PENYUMBANG TERHADAP TERJADINYA KECELAKAAN</label>
                                </div>
                                <div class="form-group">
                                    <label for="form-pttk_kondisi_lingkungan">Bagaimana kondisi lingkungan pada saat itu ?</label>
                                    <!-- <input type="text" class="form-control" id="form-pttk_kondisi_lingkungan" placeholder="Masukan Pttk Kondisi Lingkungan" name="dt[pttk_kondisi_lingkungan]" value="<?= $kecelakaan_detail_ekternal['pttk_kondisi_lingkungan'] ?>"> -->
                                    <?php
                                        $jawaban = json_decode($kecelakaan_detail_ekternal['pttk_kondisi_lingkungan']);
                                        foreach ($jawaban as $j) {
                                              if ($j->keadaan == 'Hujan') {
                                                $hujan = 'checked';
                                              } 
                                              elseif($j->keadaan == 'Licin') {
                                                $licin = 'checked';
                                              } 
                                              elseif($j->keadaan == 'Panas') {
                                                $panas = 'checked';
                                              } 
                                              elseif($j->keadaan == 'Jalan Ramai') {
                                                $jalanramai = 'checked';
                                              } 
                                              elseif($j->keadaan == 'Dingin') {
                                                $dingin = 'checked';
                                              } 
                                              elseif($j->keadaan == 'Kabut') {
                                                $kabut = 'checked';
                                              } 
                                              elseif($j->keadaan == 'Jalan Jelek') {
                                                $jalanjelek = 'checked';
                                              } 
                                              elseif($j->keadaan == 'Gelap') {
                                                $gelap = 'checked';
                                              } 
                                              elseif($j->keadaan == 'Jalan Macet') {
                                                $jalanmacet = 'checked';
                                              } 
                                              else {
                                                $lainya = 'checked';
                                                $hasil_text = $j->keadaan;
                                              }
                                            }
                                        ?>
                                    <table>
                                        <tr>
                                            <td style="padding-right: 50px">
                                                <input type="checkbox" name="keadaan[]" value="Hujan" <?PHP print $hujan; ?>>
                                                <label for="Ya">Hujan</label>
                                            </td>
                                            <td>
                                                <input type="checkbox" name="keadaan[]" value="Licin" <?PHP print $licin; ?>>
                                                <label for="Tidak"> Jalan Licin</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding-right: 75px">
                                                <input type="checkbox" name="keadaan[]" value="Panas" <?PHP print $panas; ?>>
                                                <label for="Tidak">Panas</label>
                                            </td>
                                            <td>
                                                <input type="checkbox" name="keadaan[]" value="Jalan Ramai" <?PHP print $jalanramai; ?>>
                                                <label for="Tidak">Jalan Ramai</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="checkbox" name="keadaan[]" value="Dingin" <?PHP print $dingin; ?>>
                                                <label for="Tidak">Dingin</label>
                                            </td>
                                            <td>
                                                <input type="checkbox" name="keadaan[]" value="Jalan Sempit" <?PHP print $jalansempit; ?>>
                                                <label for="Tidak">Jalan Sempit</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="checkbox" name="keadaan[]" value="Kabut" <?PHP print $kabut; ?>>
                                                <label for="Tidak">Kabut</label>
                                            </td>
                                            <td>
                                                <input type="checkbox" name="keadaan[]" value="Jalan Jelek" <?PHP print $jalanjelek; ?>>
                                                <label for="Tidak">Jalan Jelek</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="checkbox" name="keadaan[]" value="Gelap" <?PHP print $gelap; ?>>
                                                <label for="Tidak">Gelap</label>
                                            </td>
                                            <td>
                                                <input type="checkbox" name="keadaan[]" value="Jalan Macet" <?PHP print $jalanmacet; ?>>
                                                <label for="Tidak">Jalan Macet</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="checkbox" name="keadaan[]" value="Lainya" <?PHP print $lainya; ?>>
                                                <label for="Tidakperlu">Lainya</label>
                                                <input type="text" name="pttk_kondisi_lingkungan_lainnya" value="<?PHP print $hasil_text; ?>">
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="form-group">
                                    <label for="form-pttk_apkh_1">Apakah keadaan tersebut di atas merupakan faktor dominan terjadinya kecelakaan ?Jelaskan</label>
                                    <textarea name="dt[pttk_apkh_1]" class="form-control"><?= $kecelakaan_detail_ekternal['pttk_apkh_1'] ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="form-pttk_kesimpulan">buatlah dan jelasakan kesimpulan mengenai penyebab kecelakaan persyaratan yang harus di penuhi oleh korban dan kondisi lain yang ada hubungannya dengan kejadian kecelakaan.</label>
                                    <textarea name="dt[pttk_kesimpulan]" class="form-control"><?= $kecelakaan_detail_ekternal['pttk_kesimpulan'] ?></textarea>
                                </div>
                                <!-- JAGA JARAK -->
                            <?php
                            } else {
                                ?>
                                <div class="form-group">
                                    <label for="form-id_kecelakaan" style="font-size:20px">SARAN</label>
                                    <textarea id="summernote_saran" name="dta[saran]" class="form-control"><?= $kecelakaan_main['saran'] ?></textarea>
                                </div>
                            <?php
                            }
                            ?>
                        </div>

                        <div class="box-footer">

                            <button type="submit" class="btn btn-primary btn-send"><i class="fa fa-save"></i> Save</button>

                            <button type="reset" class="btn btn-danger"><i class="fa fa-refresh"></i> Reset</button>



                        </div>

                        <!-- /.box-body -->

                    </div>

                    <!-- /.box -->



                    <!-- /.box -->

                </div>

                <!-- /.col -->

            </div>

            <!-- /.row -->

        </form>



    </section>

    <!-- /.content -->

</div>

<!-- /.content-wrapper -->

<script type="text/javascript">
    $('#summernote_saran').summernote();
    $('#summernote_surat').summernote();

    function yesnoCheck() {
        if (document.getElementById('lain').checked || document.getElementById('ijin').checked) {
            document.getElementById("kap").style.display = 'block';
        } else {
            document.getElementById("kap").style.display = 'none';
        }
    }

    function yesnoCheck1() {
        if (document.getElementById('noCheck1').checked) {
            document.getElementById("ifNo1").style.display = 'block';

        } else {
            document.getElementById("ifNo1").style.display = 'none';
        }
    }

    function yesnoCheck2() {
        if (document.getElementById('jenis6').checked) {
            document.getElementById("wolk").style.display = 'block';

        } else {
            document.getElementById("wolk").style.display = 'none';
        }
    }

    function yesnoCheck3() {
        if (document.getElementById('yesCheck3').checked) {
            document.getElementById("ifNo3").style.display = 'block';

        } else {
            document.getElementById("ifNo3").style.display = 'none';
        }
    }

    function yesnoCheck4() {
        if (document.getElementById('noCheck4').checked) {
            document.getElementById("ifNo4").style.display = 'block';

        } else {
            document.getElementById("ifNo4").style.display = 'none';
        }
    }

    function yesnoCheck5() {
        if (document.getElementById('noCheck5').checked) {
            document.getElementById("ifNo5").style.display = 'block';

        } else {
            document.getElementById("ifNo5").style.display = 'none';
        }
    }

    function yesnoCheck6() {
        if (document.getElementById('noCheck6').checked) {
            document.getElementById("ifNo6").style.display = 'block';
            document.getElementById("ifNo7").style.display = 'block';
            document.getElementById("ifYes6").style.display = 'none';
            document.getElementById("ifYes7").style.display = 'none';
            document.getElementById("ifYes8").style.display = 'none';

        } else {
            document.getElementById("ifYes6").style.display = 'block';
            document.getElementById("ifYes7").style.display = 'block';
            document.getElementById("ifYes8").style.display = 'block';
            document.getElementById("ifNo6").style.display = 'none';
            document.getElementById("ifNo7").style.display = 'none';
        }
    }

    function yesnoCheck7() {
        if (document.getElementById('yesCheck7').checked) {
            document.getElementById("ifYes9").style.display = 'block';

        } else {
            document.getElementById("ifYes9").style.display = 'none';
        }
    }

    function yesnoCheck8() {
        if (document.getElementById('yesCheck8').checked) {
            document.getElementById("ifYes10").style.display = 'block';

        } else {
            document.getElementById("ifYes10").style.display = 'none';
        }
    }


    yesnoCheck();
    yesnoCheck1();
    yesnoCheck2();
    yesnoCheck3();
    yesnoCheck4();
    yesnoCheck5();
    yesnoCheck6();
    yesnoCheck7();
    yesnoCheck8();

    $("#upload-create").submit(function() {

        var form = $(this);

        var mydata = new FormData(this);

        $.ajax({

            type: "POST",

            url: form.attr("action"),

            data: mydata,

            cache: false,

            contentType: false,

            processData: false,

            beforeSend: function() {

                $(".btn-send").addClass("disabled").html("<i class='la la-spinner la-spin'></i>  Processing...").attr('disabled', true);

                form.find(".show_error").slideUp().html("");

            },

            success: function(response, textStatus, xhr) {

                // alert(mydata);

                var str = response;

                if (str.indexOf("success") != -1) {

                    form.find(".show_error").hide().html(response).slideDown("fast");

                    setTimeout(function() {

                        window.location.href = "<?= base_url('master/Kecelakaan_detail_ekternal') ?>";

                    }, 1000);

                    $(".btn-send").removeClass("disabled").html('<i class="fa fa-save"></i> Save').attr('disabled', false);





                } else {

                    form.find(".show_error").hide().html(response).slideDown("fast");

                    $(".btn-send").removeClass("disabled").html('<i class="fa fa-save"></i> Save').attr('disabled', false);



                }

            },

            error: function(xhr, textStatus, errorThrown) {

                console.log(xhr);

                $(".btn-send").removeClass("disabled").html('<i class="fa fa-save"></i> Save').attr('disabled', false);

                form.find(".show_error").hide().html(xhr).slideDown("fast");



            }

        });

        return false;



    });
</script>