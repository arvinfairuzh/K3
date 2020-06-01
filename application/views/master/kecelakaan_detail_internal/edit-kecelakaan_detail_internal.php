<!-- Content Wrapper. Contains page content -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Kecelakaan Internal
            <small>Edit</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Master</a></li>
            <li class="#">Kecelakaan Internal</li>
            <li class="active">Edit</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <form method="POST" action="<?= base_url('master/Kecelakaan_detail_internal/update') ?>" id="upload-create" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $kecelakaan_main['id'] ?>">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <!-- /.box-header -->
                        <div class="box-header">
                            <h5 class="box-title">
                                Edit Kecelakaan Internal
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
                                    <label for="form-id_kecelakaan" style="font-size:20px">TUGAS DAN WEWENANG</label>
                                </div>
                                <div class="form-group">
                                    <label for="form-kk_tanggal_jam">Tanggal & Jam</label>
                                    <input type="date" class="form-control" id="form-kk_tanggal_jam" placeholder="Masukan Kk Tanggal Jam" name="dt[kk_tanggal_jam]" value="<?= $kecelakaan_detail_internal['kk_tanggal_jam'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="form-kk_lokasi">Lokasi</label>
                                    <input type="text" class="form-control" id="form-kk_lokasi" name="dt[kk_lokasi]" value="<?= $kecelakaan_detail_internal['kk_lokasi'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="form-kk_penjelasan_kecelakaan">Jelaskan bagaimana kecelakaan terjadi</label>
                                    <textarea name="dt[kk_penjelasan_kecelakaan]" class="form-control"><?= $kecelakaan_detail_internal['kk_penjelasan_kecelakaan'] ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="form-kk_gambar_lokasi">Gambarkan lokasi/sket terjadinya kecelakaan</label>
                                    <?php
                                        if ($kecelakaan_detail_internal['kk_gambar_lokasi'] != "") {
                                            ?><br>
                                        <img src="<?= base_url($kecelakaan_detail_internal['kk_gambar_lokasi']) ?>" style="width: 200px" class="img img-thumbnail">
                                        <br>
                                    <?php } ?>
                                    <input type="file" class="form-control" id="form-kk_gambar_lokasi" placeholder="Masukan File" name="kk_gambar_lokasi">
                                </div>
                                <div class="form-group">
                                    <label for="form-kk_bagian_tubuh_cedera">Bagian tubuh yang cedera</label>
                                    <textarea class="form-control" id="form-kk_bagian_tubuh_cedera" name="dt[kk_bagian_tubuh_cedera]"><?= $kecelakaan_detail_internal['kk_bagian_tubuh_cedera'] ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="form-tw_apkh_1">Apakah karyawan tersebut melakukan tugas/kegiatan yang merupakan tugas sehari-hari sesuai <span style="font-style: oblique;">job discriptionnya </span>?</label>
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
                                    <!-- <input type="text" class="form-control" id="form-tw_apkh_1" placeholder="Masukan Tw Apkh 1" name="dt[tw_apkh_1]" value="<//?= $kecelakaan_detail_internal['tw_apkh_1'] ?>"> -->
                                    <br><input type="radio" onclick="javascript:yesnoCheck();" id="yesCheck" name="dt[tw_apkh_1]" value="ya" <?PHP print $ya; ?>>
                                    <label for="Ya">Ya</label><br>
                                    <input type="radio" onclick="javascript:yesnoCheck();" id="noCheck" name="dt[tw_apkh_1]" value="tidak" <?PHP print $tidak; ?>>
                                    <label for="Tidak">Tidak</label>
                                </div>
                                <div class="form-group">
                                    <label for="form-tw_apkh_2">Apakah karyawan tersebut dalam melakukan tugas/kegiatannya ada perintah dari atasannya ?</label>
                                    <!-- <input type="text" class="form-control" id="form-tw_apkh_2" placeholder="Masukan Tw Apkh 2" name="dt[tw_apkh_2]" value="<?= $kecelakaan_detail_internal['tw_apkh_2'] ?>"> -->
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
                                    <br><input type="radio" onclick="javascript:yesnoCheck();" id="yesCheck1" name="dt[tw_apkh_2]" value="ya" <?PHP print $ya; ?>>
                                    <label for="Ya">Ya</label><br>
                                    <input type="radio" onclick="javascript:yesnoCheck();" id="noCheck1" name="dt[tw_apkh_2]" value="tidak" <?PHP print $tidak; ?>>
                                    <label for="Tidak">Tidak</label>
                                </div>
                                <div class="form-group">
                                    <label for="form-tw_apkh_3">Apakah karyawan tersebut melakukan tugas/kegiatan yang berhubungan dengan kepentingan perusahaan ?</label>
                                    <!-- <input type="text" class="form-control" id="form-tw_apkh_3" placeholder="Masukan Tw Apkh 3" name="dt[tw_apkh_3]" value="<?= $kecelakaan_detail_internal['tw_apkh_3'] ?>"> -->
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
                                    <br><input type="radio" onclick="javascript:yesnoCheck();" id="yesCheck2" name="dt[tw_apkh_3]" value="ya" <?PHP print $ya; ?>>
                                    <label for="Ya">Ya</label><br>
                                    <input type="radio" onclick="javascript:yesnoCheck();" id="noCheck2" name="dt[tw_apkh_3]" value="tidak" <?PHP print $tidak; ?>>
                                    <label for="Tidak">Tidak</label>
                                </div>
                                <div class="form-group" id="ifNo">
                                    <label for="form-tw_tidak_q1">Mengapa Melakukan tugas tersebut ?</label>
                                    <textarea class="form-control" id="form-tw_tidak_q1" placeholder="Masukan Tw Tidak Q1" name="dt[tw_tidak_q1]"><?= $kecelakaan_detail_internal['tw_tidak_q1'] ?> </textarea>
                                </div>
                                <div class="form-group" id="ifNo1">
                                    <label for="form-tw_tidak_q2">Siapa yang seharusnya melakukan tugas/kegiatan tersebut ?</label>
                                    <textarea class="form-control" id="form-tw_tidak_q2" placeholder="Masukan Tw Tidak Q2" name="dt[tw_tidak_q2]"><?= $kecelakaan_detail_internal['tw_tidak_q2'] ?></textarea>
                                </div>
                                <div class="form-group" id="ifNo2">
                                    <label for="form-tw_tidak_q3">Siapa yang memerintah penderita melakukan pekerjaan tersebut ?</label>
                                    <textarea class="form-control" id="form-tw_tidak_q3" placeholder="Masukan Tw Tidak Q3" name="dt[tw_tidak_q3]"><?= $kecelakaan_detail_internal['tw_tidak_q3'] ?></textarea>
                                </div>
                                <!-- JAGA JARAK -->
                                <div class="form-group">
                                    <label for="form-id_kecelakaan" style="font-size:20px">SISTEM PENGAWASAN</label>
                                </div>
                                <div class="form-group">
                                    <label for="form-sp_apkh_1">Apakah atasan langsung penderita berada di tempat kejadian pada saat terjadi kecelakaan kerja ?</label>
                                    <!-- <input type="text" class="form-control" id="form-sp_apkh_1" placeholder="Masukan Sp Apkh 1" name="dt[sp_apkh_1]" value="<?= $kecelakaan_detail_internal['sp_apkh_1'] ?>"> -->
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
                                    <br><input type="radio" onclick="javascript:yesnoCheck1();" id="yesCheck3" name="dt[sp_apkh_1]" value="ya" <?PHP print $ya; ?>>
                                    <label for="Ya">Ya</label><br>
                                    <input type="radio" onclick="javascript:yesnoCheck1();" id="noCheck3" name="dt[sp_apkh_1]" value="tidak" <?PHP print $tidak; ?>>
                                    <label for="Tidak">Tidak</label>
                                </div>
                                <div class="form-group" id="ifYes3">
                                    <label for="form-sp_ya_1">Instruksi apa yang telah diberikan kepada penderita ?</label>
                                    <textarea class="form-control" id="form-sp_ya_1" placeholder="Masukan Sp Ya 1" name="dt[sp_ya_1]"><?= $kecelakaan_detail_internal['sp_ya_1'] ?></textarea>
                                </div>
                                <div class="form-group" id="ifNo3">
                                    <label for="form-sp_tidak_1">Dimana atasan penderita berada ?</label>
                                    <textarea class="form-control" id="form-sp_tidak_1" placeholder="Masukan Sp Tidak 1" name="dt[sp_tidak_1]"><?= $kecelakaan_detail_internal['sp_tidak_1'] ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="form-sp_apkh_2">Apakah tugas tersebut dilakukan sesai dengan instruksi kerja atau praktek kerja yang biasa dilakukan ?</label>
                                    <!-- <input type="text" class="form-control" id="form-sp_apkh_2" placeholder="Masukan Sp Apkh 2" name="dt[sp_apkh_2]" value="<?= $kecelakaan_detail_internal['sp_apkh_2'] ?>"> -->
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
                                    <br><input type="radio" onclick="javascript:yesnoCheck2();" id="yesCheck4" name="dt[sp_apkh_2]" value="ya" <?PHP print $ya; ?>>
                                    <label for="Ya">Ya</label><br>
                                    <input type="radio" onclick="javascript:yesnoCheck2();" id="noCheck4" name="dt[sp_apkh_2]" value="tidak" <?PHP print $tidak; ?>>
                                    <label for="Tidak">Tidak</label>
                                </div>
                                <div class="form-group" id="ifNo4">
                                    <label for="form-sp_tidak_2">Mengapa hal tersebut harus dilakukan ?</label>
                                    <textarea class="form-control" id="form-sp_tidak_2" placeholder="Masukan Sp Tidak 2" name="dt[sp_tidak_2]"><?= $kecelakaan_detail_internal['sp_tidak_2'] ?></textarea>
                                </div>
                                <!-- JAGA JARAK -->
                                <div class="form-group">
                                    <label for="form-id_kecelakaan" style="font-size:20px">PENGETAHUAN DAN KETRAMPILAN</label>
                                </div>
                                <div class="form-group">
                                    <label for="form-pk__apkh_1">Apakah tugas/pekerjaan tersebut sesuai dengan pengetahuan/pengalaman/ketrampilannya ?</label>
                                    <!-- <input type="text" class="form-control" id="form-pk__apkh_1" placeholder="Masukan Pk  Apkh 1" name="dt[pk__apkh_1]" value="<?= $kecelakaan_detail_internal['pk__apkh_1'] ?>"> -->
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
                                    <br><input type="radio" onclick="javascript:yesnoCheck3();" id="yesCheck5" name="dt[pk__apkh_1]" value="ya" <?PHP print $ya; ?>>
                                    <label for="Ya">Ya</label><br>
                                    <input type="radio" onclick="javascript:yesnoCheck3();" id="noCheck5" name="dt[pk__apkh_1]" value="tidak" <?PHP print $tidak; ?>>
                                    <label for="Tidak">Tidak</label>
                                </div>
                                <div class="form-group" id="ifNo5">
                                    <label for="form-pk_tidak_1">Pelatihan apa yang diperlukan ?</label>
                                    <textarea class="form-control" id="form-pk_tidak_1" placeholder="Masukan Pk Tidak 1" name="dt[pk_tidak_1]"><?= $kecelakaan_detail_internal['pk_tidak_1'] ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="form-pk_apkh_2">Apakah karyawan tersebut telah terbiasa dengan jenis pekerjaan/peralatan/bahan yang ditangani ?</label>
                                    <!-- <input type="text" class="form-control" id="form-pk_apkh_2" placeholder="Masukan Pk Apkh 2" name="dt[pk_apkh_2]" value="<?= $kecelakaan_detail_internal['pk_apkh_2'] ?>"> -->
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
                                    <br><input type="radio" onclick="javascript:yesnoCheck4();" id="yesCheck6" name="dt[pk_apkh_2]" value="ya" <?PHP print $ya; ?>>
                                    <label for="Ya">Ya</label><br>
                                    <input type="radio" onclick="javascript:yesnoCheck4();" id="noCheck6" name="dt[pk_apkh_2]" value="tidak" <?PHP print $tidak; ?>>
                                    <label for="Tidak">Tidak</label>
                                </div>
                                <div class="form-group" id="ifNo6">
                                    <label for="form-pk_tidak_2">Pengetahuan/keterampilan apa yang diperlukan ?</label>
                                    <textarea class="form-control" id="form-pk_tidak_2" placeholder="Masukan Pk Tidak 2" name="dt[pk_tidak_2]"><?= $kecelakaan_detail_internal['pk_tidak_2'] ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="form-pk_apkh_3">Apakah karyawan tersebut telah dilatih untuk melakukan pekerjaan tersebut dengan aman ?</label>
                                    <!-- <input type="text" class="form-control" id="form-pk_apkh_3" placeholder="Masukan Pk Apkh 3" name="dt[pk_apkh_3]" value="<?= $kecelakaan_detail_internal['pk_apkh_3'] ?>"> -->
                                    <?php
                                        $ya = 'unchecked';
                                        $tidak = 'unchecked';
                                        $selected_radio = $kecelakaan_detail_internal['pk_apkh_3'];
                                        if ($selected_radio == 'ya') {
                                            $ya = 'checked';
                                        } else if ($selected_radio == 'tidak') {
                                            $tidak = 'checked';
                                        }
                                        print_r($tidak);
                                        // die();
                                        ?>
                                    <br><input type="radio" onclick="javascript:yesnoCheck5();" id="yesCheck7" name="dt[pk_apkh_3]" value="ya" <?PHP print $ya; ?>>
                                    <label for="Ya">Ya</label><br>
                                    <input type="radio" onclick="javascript:yesnoCheck5();" id="noCheck7" name="dt[pk_apkh_3]" value="tidak" <?PHP print $tidak; ?>>
                                    <label for="Tidak">Tidak</label>
                                </div>
                                <div class="form-group" id="ifNo7">
                                    <label for="form-pk_tidak_3">Training K3 apa yang dapat dilakukan untuk mencegah terjadinya kembali kecelakaan kerja tersebut ?</label>
                                    <textarea class="form-control" id="form-pk_tidak_3" placeholder="Masukan Pk Tidak 3" name="dt[pk_tidak_3]"><?= $kecelakaan_detail_internal['pk_tidak_3'] ?></textarea>
                                </div>
                                <!-- JAGA JARAK -->
                                <div class="form-group">
                                    <label for="form-id_kecelakaan" style="font-size:20px">PENGGUNAAN ALAT PELINDUNG DIRI</label>
                                </div>
                                <div class="form-group">
                                    <label for="form-papd_apkh_1">Apakah alat pelindung diri tersedia dan dapat digunakan ?</label>
                                    <!-- <input type="text" class="form-control" id="form-papd_apkh_1" placeholder="Masukan Papd Apkh 1" name="dt[papd_apkh_1]" value="<?= $kecelakaan_detail_internal['papd_apkh_1'] ?>"> -->
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
                                    <br><input type="radio" onclick="javascript:yesnoCheck6();" id="yesCheck8" name="dt[papd_apkh_1]" value="ya" <?PHP print $ya; ?>>
                                    <label for="Ya">Ya</label><br>
                                    <input type="radio" onclick="javascript:yesnoCheck6();" id="noCheck8" name="dt[papd_apkh_1]" value="tidak" <?PHP print $tidak; ?>>
                                    <label for="Tidak">Tidak</label>
                                </div>
                                <div class="form-group" id="ifYes8">
                                    <label for="form-papd_ya_1">Alat pelindung diri apa yang digunakan saat itu ?</label>
                                    <textarea class="form-control" id="form-papd_ya_1" placeholder="Masukan Papd Ya 1" name="dt[papd_ya_1]"><?= $kecelakaan_detail_internal['papd_ya_1'] ?></textarea>
                                </div>
                                <div class="form-group" id="ifNo8">
                                    <label for="form-papd_tidak_1">Mengapa alat pelindung diri tidak digunakan ?</label>
                                    <textarea class="form-control" id="form-papd_tidak_1" placeholder="Masukan Papd Tidak 1" name="dt[papd_tidak_1]"><?= $kecelakaan_detail_internal['papd_tidak_1'] ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="form-papd_apd">Alat pelindung diri apa yang sesuai dengan pekerjaan tersebut ?</label>
                                    <textarea class="form-control" id="form-papd_apd" placeholder="Masukan Papd Apd" name="dt[papd_apd]"><?= $kecelakaan_detail_internal['papd_apd'] ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="form-papd_apkh_2">Apakah cara penggunaan alat pelindung diri sudah tepat dan benar ?</label>
                                    <!-- <input type="text" class="form-control" id="form-papd_apkh_2" placeholder="Masukan Papd Apkh 2" name="dt[papd_apkh_2]" value="<?= $kecelakaan_detail_internal['papd_apkh_2'] ?>"> -->
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
                                    <br><input type="radio" onclick="javascript:yesnoCheck7();" id="yesCheck9" name="dt[papd_apkh_2]" value="ya" <?PHP print $ya; ?>>
                                    <label for="Ya">Ya</label><br>
                                    <input type="radio" onclick="javascript:yesnoCheck7();" id="noCheck9" name="dt[papd_apkh_2]" value="tidak" <?PHP print $tidak; ?>>
                                    <label for="Tidak">Tidak</label>
                                </div>
                                <div class="form-group" id="ifNo9">
                                    <label for="form-papd_tidak_2">Mengapa alat pelindung diri tidak digunakan dengan benar ?</label>
                                    <textarea class="form-control" id="form-papd_tidak_2" placeholder="Masukan Papd Tidak 2" name="dt[papd_tidak_2]"><?= $kecelakaan_detail_internal['papd_tidak_2'] ?></textarea>
                                </div>
                                <!-- JAGA JARAK -->
                                <div class="form-group">
                                    <label for="form-id_kecelakaan" style="font-size:20px">KONDISI PERALATAN/DIMANA KECELAKAAN TERJADI</label>
                                </div>
                                <div class="form-group">
                                    <label for="form-md_gambar_1">Buat sket gambar dengan jelas situasi alat/peralatan tempat kerja dimana kecelakaan terjadi.</label>
                                    <?php
                                        if ($kecelakaan_detail_internal['md_gambar_1'] != "") {
                                            ?><br>
                                        <img src="<?= base_url($kecelakaan_detail_internal['md_gambar_1']) ?>" style="width: 200px" class="img img-thumbnail">
                                        <br>
                                    <?php } ?>
                                    <input type="file" class="form-control" id="form-file" placeholder="Masukan File" name="md_gambar_1">
                                </div>
                                <div class="form-group">
                                    <label for="form-md_fungsi_alat">Pada kondisi normal apa fungsi alat tersebut(dimana alat/peralatan tersebut) ?</label>
                                    <textarea class="form-control" id="form-md_fungsi_alat" placeholder="Masukan Md Fungsi Alat" name="dt[md_fungsi_alat]"><?= $kecelakaan_detail_internal['md_fungsi_alat'] ?></textarea>

                                </div>
                                <div class="form-group">
                                    <label for="form-md_apkh_1">Apakah perubahan/modifikasi yang telah dibuat pada alat tersebut ?</label>
                                    <!-- <input type="text" class="form-control" id="form-md_apkh_1" placeholder="Masukan Md Apkh 1" name="dt[md_apkh_1]" value="<?= $kecelakaan_detail_internal['md_apkh_1'] ?>"> -->
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
                                    <br><input type="radio" onclick="javascript:yesnoCheck8();" id="yesCheck10" name="dt[md_apkh_1]" value="ya" <?PHP print $ya; ?>>
                                    <label for="Ya">Ya</label><br>
                                    <input type="radio" onclick="javascript:yesnoCheck8();" id="noCheck10" name="dt[md_apkh_1]" value="tidak" <?PHP print $tidak; ?>>
                                    <label for="Tidak">Tidak</label>
                                </div>
                                <div class="form-group" id="ifNo10">
                                    <label for="form-md_ya_1">Jelaskan :</label>
                                    <textarea class="form-control" id="form-md_ya_1" placeholder="Masukan Md Ya 1" name="dt[md_ya_1]"><?= $kecelakaan_detail_internal['md_ya_1'] ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="form-md_apkh_2">Adakah peralatan untuk mengendalikan keadaan emergency(emergency stop pull card switch dll) ?</label>
                                    <!-- <input type="text" class="form-control" id="form-md_apkh_2" placeholder="Masukan Md Apkh 2" name="dt[md_apkh_2]" value="<?= $kecelakaan_detail_internal['md_apkh_2'] ?>"> -->
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
                                    <br><input type="radio" name="dt[md_apkh_2]" value="ya" <?PHP print $ya; ?>>
                                    <label for="Ya">Ya</label><br>
                                    <input type="radio" name="dt[md_apkh_2]" value="tidak" <?PHP print $tidak; ?>>
                                    <label for="Tidak">Tidak</label>
                                </div>
                                <div class="form-group">
                                    <label for="form-md_apkh_3">Adakah alat pelindung mesin / peralatan pelindung yang efektif ?</label>
                                    <!-- <input type="text" class="form-control" id="form-md_apkh_3"  name="dt[md_apkh_3]" value="<?= $kecelakaan_detail_internal['md_apkh_3'] ?>"> -->
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
                                    <br><input type="radio" onclick="javascript:yesnoCheck9();" id="yesCheck11" name="dt[md_apkh_3]" value="ya" <?PHP print $ya; ?>>
                                    <label for="Ya">Ya</label><br>
                                    <input type="radio" onclick="javascript:yesnoCheck9();" id="noCheck11" name="dt[md_apkh_3]" value="tidak" <?PHP print $tidak; ?>>
                                    <label for="Tidak">Tidak</label>
                                </div>
                                <div class="form-group" id="ifNo11">
                                    <label for="form-md_tidak_3">Bagaimana untuk pengamanannya ?</label>
                                    <textarea class="form-control" id="form-md_tidak_3" name="dt[md_tidak_3]"><?= $kecelakaan_detail_internal['md_tidak_3'] ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="form-md_apkh_4">Apakah pengontrol operasi, pipa-pipa, tangki-tangki di berikan tanda yang cukup jelas ?</label>
                                    <!-- <input type="text" class="form-control" id="form-md_apkh_4"  name="dt[md_apkh_4]" value="<?= $kecelakaan_detail_internal['md_apkh_4'] ?>"> -->
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
                                    <br><input type="radio" onclick="javascript:yesnoCheck10();" id="yesCheck12" name="dt[md_apkh_4]" value="ya" <?PHP print $ya; ?>>
                                    <label for="Ya">Ya</label><br>
                                    <input type="radio" onclick="javascript:yesnoCheck10();" id="noCheck12" name="dt[md_apkh_4]" value="tidak" <?PHP print $tidak; ?>>
                                    <label for="Tidak">Tidak</label>
                                </div>
                                <div class="form-group" id="ifNo12">
                                    <label for="form-md_tidak_4">Beri alasan mengapa tidak ditandai dengan jelas ?</label>
                                    <textarea class="form-control" id="form-md_tidak_4" placeholder="Masukan Md Tidak 4" name="dt[md_tidak_4]"><?= $kecelakaan_detail_internal['md_tidak_4'] ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="form-md_apkh_5">Apakah perlu menggunakan Safety Tag/ atau Locked out sistem ?</label>
                                    <!-- <input type="text" class="form-control" id="form-md_apkh_5" placeholder="Masukan Md Apkh 5" name="dt[md_apkh_5]" value="<?= $kecelakaan_detail_internal['md_apkh_5'] ?>"> -->
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
                                    <br><input type="radio" onclick="javascript:yesnoCheck11();" id="yesCheck13" name="dt[md_apkh_5]" value="ya" <?PHP print $ya; ?>>
                                    <label for="Ya">Ya</label><br>
                                    <input type="radio" onclick="javascript:yesnoCheck11();" id="noCheck13" name="dt[md_apkh_5]" value="tidak" <?PHP print $tidak; ?>>
                                    <label for="Tidak">Tidak</label>
                                </div>
                                <div class="form-group" id="ifNo13">
                                    <label for="form-md_ya_5">Apakah telah dipergunakan sebagaimana mestinya seperti tersebut pada prosedur Keselamatan Kerja tentang Safety Tag dan Locked Out Sistem ?</label>
                                    <textarea class="form-control" id="form-md_ya_5" placeholder="Masukan Md Ya 5" name="dt[md_ya_5]"><?= $kecelakaan_detail_internal['md_ya_5'] ?></textarea>
                                </div>
                                <!-- JAGA JARAK -->
                                <div class="form-group">
                                    <label for="form-id_kecelakaan" style="font-size:20px">SISTEM DAN PROSEDUR</label>
                                </div>
                                <div class="form-group">
                                    <label for="form-snp_apkh_1">Adakah Prosedur atau instruksi kerja telah ditetapkan untuk tugas tersebut ?</label>
                                    <!-- <input type="text" class="form-control" id="form-snp_apkh_1" placeholder="Masukan Snp Apkh 1" name="dt[snp_apkh_1]" value="<?= $kecelakaan_detail_internal['snp_apkh_1'] ?>"> -->
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
                                    <br><input type="radio" onclick="javascript:yesnoCheck12();" id="yesCheck14" name="dt[snp_apkh_1]" value="ya" <?PHP print $ya; ?>>
                                    <label for="Ya">Ya</label><br>
                                    <input type="radio" onclick="javascript:yesnoCheck12();" id="noCheck14" name="dt[snp_apkh_1]" value="tidak" <?PHP print $tidak; ?>>
                                    <label for="Tidak">Tidak</label>
                                </div>
                                <div class="form-group" id="ifYes14">
                                    <label for="form-snp_ya_1">Apakah prosedur/instruksi kerja perlu diperbaiki ? Jelaskan.</label>
                                    <textarea class="form-control" id="form-snp_ya_1" placeholder="Masukan Snp Ya 1" name="dt[snp_ya_1]"><?= $kecelakaan_detail_internal['snp_ya_1'] ?></textarea>
                                </div>
                                <div class="form-group" id="ifNo14">
                                    <label for="form-snp_tidak_1">Apakah prosedur/instruksi kerja perlu diperbaiki ? Jelaskan.</label>
                                    <textarea class="form-control" id="form-snp_tidak_1" placeholder="Masukan Snp Tidak 1" name="dt[snp_tidak_1]"><?= $kecelakaan_detail_internal['snp_tidak_1'] ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="form-snp_adakah_1">Adakah suatu sistem untuk mengamati bahwa prosedur atau instruksi yang ditetapkan telah diikuti ?</label>
                                    <textarea class="form-control" id="form-snp_adakah_1" placeholder="Masukan Snp Adakah 1" name="dt[snp_adakah_1]"><?= $kecelakaan_detail_internal['snp_adakah_1'] ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="form-snp_apkh_2">Apakah Surat Ijin Keselamatan Kerja telah dibuat dan dilaksanakan ?</label>
                                    <!-- <input type="text" class="form-control" id="form-snp_apkh_2" placeholder="Masukan Snp Apkh 2" name="dt[snp_apkh_2]" value="<?= $kecelakaan_detail_internal['snp_apkh_2'] ?>"> -->
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
                                    <br><input type="radio" onclick="javascript:yesnoCheck13();" id="yesCheck15" name="dt[snp_apkh_2]" value="ya" <?PHP print $ya; ?>>
                                    <label for="Ya">Ya</label><br>
                                    <input type="radio" onclick="javascript:yesnoCheck13();" id="noCheck15" name="dt[snp_apkh_2]" value="tidak" <?PHP print $tidak; ?>>
                                    <label for="Tidak">Tidak</label>
                                </div>
                                <div class="form-group" id="ifNo15">
                                    <label for="form-snp_tidak_2">Mengapa tidak dibuat dan tidak dilaksanakan ?</label>
                                    <textarea class="form-control" id="form-snp_tidak_2" placeholder="Masukan Snp Tidak 2" name="dt[snp_tidak_2]"><?= $kecelakaan_detail_internal['snp_tidak_2'] ?></textarea>
                                </div>
                                <!-- JAGA JARAK -->
                                <div class="form-group">
                                    <label for="form-id_kecelakaan" style="font-size:20px">PENYUMBANGAN TERHADAP TERJADINYA KECELAKAAN</label>
                                </div>
                                <div class="form-group">
                                    <label for="form-pttk_kondisi_lingkungan">Bagaimana Kondisi lingkungan saat itu ?</label>
                                    <!-- <input type="text" class="form-control" id="form-pttk_kondisi_lingkungan" placeholder="Masukan Pttk Kondisi Lingkungan" name="dt[pttk_kondisi_lingkungan]" value="<?= $kecelakaan_detail_internal['pttk_kondisi_lingkungan'] ?>"> -->
                                    <?php
                                        $hujan = 'unchecked';
                                        $panas = 'unchecked';
                                        $adafume = 'unchecked';
                                        $getaran = 'unchecked';
                                        $ketinggian = 'unchecked';
                                        $licin = 'unchecked';
                                        $kabut = 'unchecked';
                                        $dingin = 'unchecked';
                                        $kebisingan = 'unchecked';
                                        $adagas = 'unchecked';
                                        $dikedalaman = 'unchecked';
                                        $panassinarmatahari = 'unchecked';
                                        $lembab = 'unchecked';
                                        $adavapour = 'unchecked';
                                        $ruangtertutup = 'unchecked';
                                        $gelap = 'unchecked';
                                        $lainya = 'unchecked';
                                        $selected_radio = $kecelakaan_detail_internal['pttk_kondisi_lingkungan'];
                                        if ($selected_radio == 'Hujan') {
                                            $hujan = 'checked';
                                        } else if ($selected_radio == 'Panas') {
                                            $panas = 'checked';
                                        } else if ($selected_radio == 'Ada fume') {
                                            $adafume = 'checked';
                                        } else if ($selected_radio == 'Getaran') {
                                            $getaran = 'checked';
                                        } else if ($selected_radio == 'Ketinggian') {
                                            $ketinggian = 'checked';
                                        } else if ($selected_radio == 'Licin') {
                                            $licin = 'checked';
                                        } else if ($selected_radio == 'Kabut') {
                                            $kabut = 'checked';
                                        } else if ($selected_radio == 'Dingin') {
                                            $dingin = 'checked';
                                        } else if ($selected_radio == 'Kebisingan') {
                                            $kebisingan = 'checked';
                                        } else if ($selected_radio == 'Ada gas') {
                                            $adagas = 'checked';
                                        } else if ($selected_radio == 'Di kedalaman') {
                                            $dikedalaman = 'checked';
                                        } else if ($selected_radio == 'Panas sinar matahari') {
                                            $panassinarmatahari = 'checked';
                                        } else if ($selected_radio == 'Lembab') {
                                            $lembab = 'checked';
                                        } else if ($selected_radio == 'Ada vapour') {
                                            $adavapour = 'checked';
                                        } else if ($selected_radio == 'Ruang tertutup') {
                                            $ruangtertutup = 'checked';
                                        } else if ($selected_radio == 'Gelap') {
                                            $gelap = 'checked';
                                        } else {
                                            $lainya = 'checked';
                                        }
                                        ?>
                                    <table>
                                        <tr>
                                            <td style="padding-right: 50px">
                                                <input type="radio" name="dt[pttk_kondisi_lingkungan]" value="Hujan" <?PHP print $hujan; ?>>
                                                <label for="Ya">Hujan</label>
                                            </td>
                                            <td style="padding-right: 75px">
                                                <input type="radio" name="dt[pttk_kondisi_lingkungan]" value="Panas" <?PHP print $panas; ?>>
                                                <label for="Tidak">Panas</label>
                                            </td>
                                            <td>
                                                <input type="radio" name="dt[pttk_kondisi_lingkungan]" value="Ada fume" <?PHP print $adafume; ?>>
                                                <label for="Tidak">Ada fume</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="radio" name="dt[pttk_kondisi_lingkungan]" value="Getaran" <?PHP print $getaran; ?>>
                                                <label for="Tidak">Getaran</label>
                                            </td>
                                            <td>
                                                <input type="radio" name="dt[pttk_kondisi_lingkungan]" value="Ketinggian" <?PHP print $ketinggian; ?>>
                                                <label for="Tidak">Ketinggian</label>
                                            </td>
                                            <td>
                                                <input type="radio" name="dt[pttk_kondisi_lingkungan]" value="Licin" <?PHP print $licin; ?>>
                                                <label for="Tidak">Licin</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="radio" name="dt[pttk_kondisi_lingkungan]" value="Kabut" <?PHP print $kabut; ?>>
                                                <label for="Tidak">Kabut</label>
                                            </td>
                                            <td>
                                                <input type="radio" name="dt[pttk_kondisi_lingkungan]" value="Dingin" <?PHP print $dingin; ?>>
                                                <label for="Tidak">Dingin</label>
                                            </td>
                                            <td>
                                                <input type="radio" name="dt[pttk_kondisi_lingkungan]" value="Kebisingan" <?PHP print $kebisingan; ?>>
                                                <label for="Tidak">Kebisingan</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="radio" name="dt[pttk_kondisi_lingkungan]" value="Ada gas" <?PHP print $adagas; ?>>
                                                <label for="Tidak">Ada gas</label>
                                            </td>
                                            <td>
                                                <input type="radio" name="dt[pttk_kondisi_lingkungan]" value="Di kedalaman" <?PHP print $dikedalaman; ?>>
                                                <label for="Tidak">Di kedalaman</label>
                                            </td>
                                            <td>
                                                <input type="radio" name="dt[pttk_kondisi_lingkungan]" value="Panas sinar matahari" <?PHP print $panassinarmatahari; ?>>
                                                <label for="Tidak">Panas sinar matahari</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="radio" name="dt[pttk_kondisi_lingkungan]" value="Lembab" <?PHP print $lembab; ?>>
                                                <label for="Tidak">Lembab</label>
                                            </td>
                                            <td>
                                                <input type="radio" name="dt[pttk_kondisi_lingkungan]" value="Ada vapour" <?PHP print $adavapour; ?>>
                                                <label for="Tidak">Ada vapour</label>
                                            </td>
                                            <td>
                                                <input type="radio" name="dt[pttk_kondisi_lingkungan]" value="Ruang tertutup" <?PHP print $ruangtertutup; ?>>
                                                <label for="Tidak">Ruang tertutup</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="radio" name="dt[pttk_kondisi_lingkungan]" value="Gelap" <?PHP print $gelap; ?>>
                                                <label for="Tidakperlu">Gelap</label>
                                            </td>
                                            <td>
                                                <input type="radio" name="dt[pttk_kondisi_lingkungan]" value="Lainya" <?PHP print $lainya; ?>>
                                                <label for="Tidakperlu">Lainya</label>
                                                <?php
                                                    if ($kecelakaan_detail_internal['pttk_kondisi_lingkungan'] == 'Lainya') {
                                                        $value_lain = ' yaitu: ' . $kecelakaan_detail_internal['pttk_kondisi_lingkungan'];
                                                    } else {
                                                        $value_lain = '';
                                                    }
                                                    ?>
                                                <input type="text" name="pttk_kondisi_lingkungan_lainnya" value="<?= $value_lain ?>">
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="form-group">
                                    <label for="form-pttk_apkh_1">Apakah keadaan tersebut di atas merupakan faktor dominan terjadinya kecelakaan ? Jelaskan.</label>
                                    <textarea class="form-control" id="form-pttk_apkh_1" placeholder="Masukan Pttk Apkh 1" name="dt[pttk_apkh_1]"><?= $kecelakaan_detail_internal['pttk_apkh_1'] ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="form-pttk_kesimpulan">Buatlah dan Jelaskan kesimpulan mengenai penyebab kecelakaan, persyaratan yang harus di penuhi oleh korban dan kondisi lain yang ada hubungannya dengan kejadian kecelakaan.</label>
                                    <textarea name="dt[pttk_kesimpulan]" class="form-control"><?= $kecelakaan_detail_internal['pttk_kesimpulan'] ?></textarea>
                                </div>

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

    function yesnoCheck() {
        if (document.getElementById('noCheck').checked || document.getElementById('noCheck1').checked || document.getElementById('noCheck2').checked) {
            document.getElementById("ifNo").style.display = 'block';
            document.getElementById("ifNo1").style.display = 'block';
            document.getElementById("ifNo2").style.display = 'block';
        } else {
            document.getElementById("ifNo2").style.display = 'none';
            document.getElementById("ifNo").style.display = 'none';
            document.getElementById("ifNo1").style.display = 'none';
        }
    }

    function yesnoCheck1() {
        if (document.getElementById('noCheck3').checked) {
            document.getElementById("ifNo3").style.display = 'block';
            document.getElementById("ifYes3").style.display = 'none';

        } else if (document.getElementById('yesCheck3').checked) {
            document.getElementById("ifNo3").style.display = 'none';
            document.getElementById("ifYes3").style.display = 'block';
        } else {
            document.getElementById("ifYes3").style.display = 'none';
            document.getElementById("ifNo3").style.display = 'none';
        }
    }

    function yesnoCheck2() {
        if (document.getElementById('noCheck4').checked) {
            document.getElementById("ifNo4").style.display = 'block';

        } else {
            document.getElementById("ifNo4").style.display = 'none';
        }
    }

    function yesnoCheck3() {
        if (document.getElementById('noCheck5').checked) {
            document.getElementById("ifNo5").style.display = 'block';

        } else {
            document.getElementById("ifNo5").style.display = 'none';
        }
    }

    function yesnoCheck4() {
        if (document.getElementById('noCheck6').checked) {
            document.getElementById("ifNo6").style.display = 'block';

        } else {
            document.getElementById("ifNo6").style.display = 'none';
        }
    }

    function yesnoCheck5() {
        if (document.getElementById('noCheck7').checked) {
            document.getElementById("ifNo7").style.display = 'block';

        } else {
            document.getElementById("ifNo7").style.display = 'none';
        }
    }

    function yesnoCheck6() {
        if (document.getElementById('noCheck8').checked) {
            document.getElementById("ifNo8").style.display = 'block';
            document.getElementById("ifYes8").style.display = 'none';

        } else if (document.getElementById('yesCheck8').checked) {
            document.getElementById("ifNo8").style.display = 'none';
            document.getElementById("ifYes8").style.display = 'block';
        } else {
            document.getElementById("ifYes8").style.display = 'none';
            document.getElementById("ifNo8").style.display = 'none';
        }
    }

    function yesnoCheck7() {
        if (document.getElementById('noCheck9').checked) {
            document.getElementById("ifNo9").style.display = 'block';

        } else {
            document.getElementById("ifNo9").style.display = 'none';
        }
    }

    function yesnoCheck8() {
        if (document.getElementById('yesCheck10').checked) {
            document.getElementById("ifNo10").style.display = 'block';

        } else {
            document.getElementById("ifNo10").style.display = 'none';
        }
    }

    function yesnoCheck9() {
        if (document.getElementById('noCheck11').checked) {
            document.getElementById("ifNo11").style.display = 'block';

        } else {
            document.getElementById("ifNo11").style.display = 'none';
        }
    }

    function yesnoCheck10() {
        if (document.getElementById('noCheck12').checked) {
            document.getElementById("ifNo12").style.display = 'block';

        } else {
            document.getElementById("ifNo12").style.display = 'none';
        }
    }

    function yesnoCheck11() {
        if (document.getElementById('yesCheck13').checked) {
            document.getElementById("ifNo13").style.display = 'block';

        } else {
            document.getElementById("ifNo13").style.display = 'none';
        }
    }

    function yesnoCheck12() {
        if (document.getElementById('noCheck14').checked) {
            document.getElementById("ifNo14").style.display = 'block';
            document.getElementById("ifYes14").style.display = 'none';

        } else if (document.getElementById('yesCheck14').checked) {
            document.getElementById("ifNo14").style.display = 'none';
            document.getElementById("ifYes14").style.display = 'block';
        } else {
            document.getElementById("ifYes14").style.display = 'none';
            document.getElementById("ifNo14").style.display = 'none';
        }
    }

    function yesnoCheck13() {
        if (document.getElementById('noCheck15').checked) {
            document.getElementById("ifNo15").style.display = 'block';

        } else {
            document.getElementById("ifNo15").style.display = 'none';
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
    yesnoCheck9();
    yesnoCheck10();
    yesnoCheck11();
    yesnoCheck12();
    yesnoCheck13();
</script>
<script type="text/javascript">
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

                        window.location.href = "<?= base_url('master/Kecelakaan_detail_internal') ?>";

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