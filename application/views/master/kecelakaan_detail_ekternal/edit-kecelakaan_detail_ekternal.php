<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">

    <!-- Content Header (Page header) -->

    <section class="content-header">

        <h1>

            Kecelakaan Detail Ekternal

            <small>Edit</small>

        </h1>

        <ol class="breadcrumb">

            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>

            <li><a href="#">Master</a></li>

            <li class="#">Kecelakaan Detail Ekternal</li>

            <li class="active">Edit</li>

        </ol>

    </section>

    <!-- Main content -->

    <section class="content">

        <form method="POST" action="<?= base_url('master/Kecelakaan_detail_ekternal/update') ?>" id="upload-create" enctype="multipart/form-data">

            <input type="hidden" name="id" value="<?= $kecelakaan_detail_ekternal['id'] ?>">





            <div class="row">

                <div class="col-xs-12">

                    <div class="box">

                        <!-- /.box-header -->

                        <div class="box-header">

                            <h5 class="box-title">

                                Edit Kecelakaan Detail Ekternal

                            </h5>

                        </div>

                        <div class="box-body">

                            <div class="show_error"></div>
                            <div class="form-group">
                                <label for="form-id_kecelakaan" style="font-size:20px">IDENTITAS PENDERITA</label>
                            </div>
                            <div class="form-group">
                                <label for="form-kk_tanggal_jam">Nama</label>
                                <input type="text" class="form-control" id="form-kk_tanggal_jam" name="dta[ip_nama]" value="<?= $kecelakaan_detail_internal['pk__apkh_1'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="form-kk_tanggal_jam">Nomor Induk</label>
                                <input type="text" class="form-control" id="form-kk_tanggal_jam" name="dta[ip_nomor_induk]">
                            </div>
                            <div class="form-group">
                                <label for="form-kk_tanggal_jam">Umur</label>
                                <input type="text" class="form-control" id="form-kk_tanggal_jam" name="dta[ip_umur]">
                            </div>
                            <div class="form-group">
                                <label for="form-kk_tanggal_jam">Alamat</label>
                                <input type="text" class="form-control" id="form-kk_tanggal_jam" name="dta[ip_alamat]">
                            </div>
                            <div class="form-group">
                                <label for="form-kk_tanggal_jam">Dep/Biro/Bid</label>
                                <input type="text" class="form-control" id="form-kk_tanggal_jam" name="dta[ip_dep_birobid]">
                            </div>
                            <div class="form-group">
                                <label for="form-kk_tanggal_jam">Bagian/Seksi</label>
                                <input type="text" class="form-control" id="form-kk_tanggal_jam" name="dta[ip_bagian_seksi]">
                            </div>
                            <div class="form-group">
                                <label for="form-kk_tanggal_jam">Lama bekerja di unit tersebut</label>
                                <input type="text" class="form-control" id="form-kk_tanggal_jam" name="dta[ip_lama_bekerja_unit]">
                            </div>
                            <div class="form-group">
                                <label for="form-kk_tanggal_jam">Lama Bekerja di PT Petrokimia Gresik</label>
                                <input type="text" class="form-control" id="form-kk_tanggal_jam" name="dta[ip_lama_bekerja_petro]">
                            </div>
                            <!-- JAGA JARAK -->
                            <div class="form-group">
                                <label for="form-id_kecelakaan" style="font-size:20px">KEJADIAN KECELAKAAN</label>
                            </div>
                            <div class="form-group">
                                <label for="form-kk_tanggal_jam">Tanggal & Jam</label>
                                <input type="date" class="form-control" id="form-kk_tanggal_jam" placeholder="Masukan Kk Tanggal Jam" name="dt[kk_tanggal_jam]" value="<?= $kecelakaan_detail_ekternal['kk_tanggal_jam'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="form-kk_lokasi">Lokasi</label>
                                <input type="text" class="form-control" id="form-kk_lokasi" placeholder="Masukan Kk Lokasi" name="dt[kk_lokasi]" value="<?= $kecelakaan_detail_ekternal['kk_lokasi'] ?>">
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
                                <input type="text" class="form-control" id="form-kk_bagian_tubuh_cedera" placeholder="Masukan Kk Bagian Tubuh Cedera" name="dt[kk_bagian_tubuh_cedera]" value="<?= $kecelakaan_detail_ekternal['kk_bagian_tubuh_cedera'] ?>">
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
                            <div class="form-group">
                                <label for="form-kk_apabila_1">Jelaskan keperluan aktifitas penderita</label>
                                <input type="text" class="form-control" id="form-kk_apabila_1" placeholder="Masukan Kk Apabila 1" name="dt[kk_apabila_1]" value="<?= $kecelakaan_detail_ekternal['kk_apabila_1'] ?>">
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
                                <input type="text" class="form-control" id="form-kk_tidak_1" placeholder="Masukan Kk Tidak 1" name="dt[kk_tidak_1]" value="<?= $kecelakaan_detail_ekternal['kk_tidak_1'] ?>">
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
                                <input type="text" class="form-control" id="form-kk_ya_3" placeholder="Masukan Kk Ya 3" name="dt[kk_ya_3]" value="<?= $kecelakaan_detail_ekternal['kk_ya_3'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="form-kk_apkh_4">Apakah saat kejadian yang bersangkutan menggunakan alat keselamatan(mis:safety helmet, seat belt, dll) secara benar ?</label>
                                <!-- <input type="text" class="form-control" id="form-kk_apkh_4" placeholder="Masukan Kk Apkh 4" name="dt[kk_apkh_4]" value="<?= $kecelakaan_detail_ekternal['kk_apkh_4'] ?>"> -->
                                <?php
                                $ya = 'unchecked';
                                $tidak = 'unchecked';
                                $tidakperlu = 'unchecked';
                                $selected_radio = $kecelakaan_detail_ekternal['kk_apkh_3'];
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
                                <input type="text" class="form-control" id="form-kk_tidak_4" placeholder="Masukan Kk Tidak 4" name="dt[kk_tidak_4]" value="<?= $kecelakaan_detail_ekternal['kk_tidak_4'] ?>">
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
                                <input type="text" class="form-control" id="form-kk_tidak_5" placeholder="Masukan Kk Tidak 5" name="dt[kk_tidak_5]" value="<?= $kecelakaan_detail_ekternal['kk_tidak_5'] ?>">
                            </div>
                            <!-- JAGA JARAK -->
                            <div class="form-group">
                                <label for="form-id_kecelakaan" style="font-size:20px">LAMA PENGOBATAN PENDERITA</label>
                            </div>
                            <div class="form-group">
                                <label for="form-kk_tanggal_jam">Di RS Petrokimia Gresik</label>
                                <input type="text" class="form-control" id="form-kk_tanggal_jam" name="dta[lpp_di_rs_petro]">
                            </div>
                            <div class="form-group">
                                <label for="form-kk_tanggal_jam">Di RS Luar</label>
                                <input type="text" class="form-control" id="form-kk_tanggal_jam" name="dta[lpp_di_rs_luar]">
                            </div>
                            <div class="form-group">
                                <label for="form-kk_tanggal_jam">Istirahat Dokter</label>
                                <input type="text" class="form-control" id="form-kk_tanggal_jam" name="dta[lpp_istirahat_dokter]">
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
                                <input type="text" class="form-control" id="form-wp_ya_q1" placeholder="Masukan Wp Ya Q1" name="dt[wp_ya_q1]" value="<?= $kecelakaan_detail_ekternal['wp_ya_q1'] ?>">
                            </div>
                            <div class="form-group" id="ifYes7" style="display:none">
                                <label for="form-wp_ya_q2">Tugas dan instruksi apa yang telah diberikan kepada penderita ?</label>
                                <input type="text" class="form-control" id="form-wp_ya_q2" placeholder="Masukan Wp Ya Q2" name="dt[wp_ya_q2]" value="<?= $kecelakaan_detail_ekternal['wp_ya_q2'] ?>">
                            </div>
                            <div class="form-group" id="ifYes8" style="display:none">
                                <label for="form-wp_ya_q3">Pada saat terjadi kecelakaan, dimana atasan yang bersangkutan berada ?</label>
                                <input type="text" class="form-control" id="form-wp_ya_q3" placeholder="Masukan Wp Ya Q3" name="dt[wp_ya_q3]" value="<?= $kecelakaan_detail_ekternal['wp_ya_q3'] ?>">
                            </div>
                            <div class="form-group" id="ifNo6" style="display:none">
                                <label for="form-wp_tidak_q1">Siapa yang memperintahkan ?</label>
                                <input type="text" class="form-control" id="form-wp_tidak_q1" placeholder="Masukan Wp Tidak Q1" name="dt[wp_tidak_q1]" value="<?= $kecelakaan_detail_ekternal['wp_tidak_q1'] ?>">
                            </div>
                            <div class="form-group" id="ifNo7" style="display:none">
                                <label for="form-wp_tidak_q2">Mengapa hal tersebut dilakukan ?</label>
                                <input type="text" class="form-control" id="form-wp_tidak_q2" placeholder="Masukan Wp Tidak Q2" name="dt[wp_tidak_q2]" value="<?= $kecelakaan_detail_ekternal['wp_tidak_q2'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="form-wp_persyaratan_administrasi">Persyaratan administrasi apa yang di bawa penderita saat terjadi kecelakaan ?</label>
                                <!-- <input type="text" class="form-control" id="form-wp_persyaratan_administrasi" placeholder="Masukan Wp Persyaratan Administrasi" name="dt[wp_persyaratan_administrasi]" value="<?= $kecelakaan_detail_ekternal['wp_persyaratan_administrasi'] ?>"> -->
                                <?php
                                $simpol = 'unchecked';
                                $simper = 'unchecked';
                                $sio = 'unchecked';
                                $simper1 = 'unchecked';
                                $stnk = 'unchecked';

                                $selected_radio = $kecelakaan_detail_internal['pttk_kondisi_lingkungan'];
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
                                <label for="vehicle1"> SIMPOL sesuai dengan kendaraan yang dikemudikan</label><br>
                                <input type="checkbox" id="vehicle2" name="dt[wp_persyaratan_administrasi]" value="simper" <?PHP print $simper; ?>>
                                <label for="vehicle2"> SIMPER sesuai dengan kendaraan yang dikemudikan</label><br>
                                <input type="checkbox" id="vehicle3" name="dt[wp_persyaratan_administrasi]" value="sio" <?PHP print $sio; ?>>
                                <label for="vehicle3"> SIO Untuk alat alat berat perusahaan</label><br>
                                <input type="checkbox" id="vehicle3" name="dt[wp_persyaratan_administrasi]" value="simper1" <?PHP print $simper1; ?>>
                                <label for="vehicle3"> SIMPER alat alat berat sesuai yang dioprasikan</label><br>
                                <input type="checkbox" id="vehicle3" name="dt[wp_persyaratan_administrasi]" value="stnk" <?PHP print $stnk; ?>>
                                <label for="vehicle3"> STNK</label><br>
                            </div>
                            <div class="form-group">
                                <label for="form-wp_masa_aktif_administrasi">Kapan masa berakhirnya persyaratan tersebut di atas ?</label>
                                <input type="text" class="form-control" id="form-wp_masa_aktif_administrasi" placeholder="Masukan Wp Masa Aktif Administrasi" name="dt[wp_masa_aktif_administrasi]" value="<?= $kecelakaan_detail_ekternal['wp_masa_aktif_administrasi'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="form-wp_mengapa">Apabila habis masa berlakunya, mengapa tidak diperpanjang ?</label>
                                <input type="text" class="form-control" id="form-wp_mengapa" placeholder="Masukan Wp Mengapa" name="dt[wp_mengapa]" value="<?= $kecelakaan_detail_ekternal['wp_mengapa'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="form-wp_bgmn_1">Bagaimana kondisi tempat kejadian?</label>
                                <input type="text" class="form-control" id="form-wp_bgmn_1" placeholder="Masukan Wp Bgmn 1" name="dt[wp_bgmn_1]" value="<?= $kecelakaan_detail_ekternal['wp_bgmn_1'] ?>">
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
                                <input type="text" class="form-control" id="form-wp_ya_1" placeholder="Masukan Wp Ya 1" name="dt[wp_ya_1]" value="<?= $kecelakaan_detail_ekternal['wp_ya_1'] ?>">
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
                                <input type="text" class="form-control" id="form-sp_ya_1" placeholder="Masukan Sp Ya 1" name="dt[sp_ya_1]" value="<?= $kecelakaan_detail_ekternal['sp_ya_1'] ?>">
                            </div>
                            <!-- JAGA JARAK -->
                            <div class="form-group">
                                <label for="form-id_kecelakaan" style="font-size:20px">PENYUMBANG TERHADAP TERJADINYA KECELAKAAN</label>
                            </div>
                            <div class="form-group">
                                <label for="form-pttk_kondisi_lingkungan">Bagaimana kondisi lingkungan pada saat itu ?</label>
                                <!-- <input type="text" class="form-control" id="form-pttk_kondisi_lingkungan" placeholder="Masukan Pttk Kondisi Lingkungan" name="dt[pttk_kondisi_lingkungan]" value="<?= $kecelakaan_detail_ekternal['pttk_kondisi_lingkungan'] ?>"> -->
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

                                $selected_radio = $kecelakaan_detail_internal['pttk_kondisi_lingkungan'];
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
                                }  else {
                                    $lainya = 'checked';
                                }
                                ?>
                                <table>
                                    <tr>
                                        <td style="padding-right: 50px">
                                            <input type="radio" name="dt[pttk_kondisi_lingkungan]" value="Hujan" <?PHP print $hujan; ?>>
                                            <label for="Ya">Hujan</label>
                                        </td>
                                        <td>
                                            <input type="radio" name="dt[pttk_kondisi_lingkungan]" value="Licin" <?PHP print $licin; ?>>
                                            <label for="Tidak"> Jalan Licin</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding-right: 75px">
                                            <input type="radio" name="dt[pttk_kondisi_lingkungan]" value="Panas" <?PHP print $panas; ?>>
                                            <label for="Tidak">Panas</label>
                                        </td>
                                        <td>
                                            <input type="radio" name="dt[pttk_kondisi_lingkungan]" value="Jalan Ramai" <?PHP print $jalanramai; ?>>
                                            <label for="Tidak">Jalan Ramai</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="radio" name="dt[pttk_kondisi_lingkungan]" value="Dingin" <?PHP print $dingin; ?>>
                                            <label for="Tidak">Dingin</label>
                                        </td>
                                        <td>
                                            <input type="radio" name="dt[pttk_kondisi_lingkungan]" value="Jalan Sempit" <?PHP print $jalansempit; ?>>
                                            <label for="Tidak">Jalan Sempit</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="radio" name="dt[pttk_kondisi_lingkungan]" value="Kabut" <?PHP print $kabut; ?>>
                                            <label for="Tidak">Kabut</label>
                                        </td>
                                        <td>
                                            <input type="radio" name="dt[pttk_kondisi_lingkungan]" value="Jalan Jelek" <?PHP print $jalanjelek; ?>>
                                            <label for="Tidak">Jalan Jelek</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="radio" name="dt[pttk_kondisi_lingkungan]" value="Gelap" <?PHP print $gelap; ?>>
                                            <label for="Tidak">Gelap</label>
                                        </td>
                                        <td>
                                            <input type="radio" name="dt[pttk_kondisi_lingkungan]" value="Jalan Macet" <?PHP print $jalanmacet; ?>>
                                            <label for="Tidak">Jalan Macet</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="radio" name="dt[pttk_kondisi_lingkungan]" value="Lainya" <?PHP print $lainya; ?>>
                                            <label for="Tidakperlu">Lainya</label>
                                            <input type="text" name="pttk_kondisi_lingkungan_lainnya">
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
                            <div class="form-group">
                                <label for="form-id_kecelakaan" style="font-size:20px">SARAN</label>
                            </div>
                            <div class="form-group">
                                <textarea name="dta[saran]" class="form-control"></textarea>
                            </div>


                            <?php

                            if ($file['dir'] != "") {

                                $types = explode("/", $file['mime']);

                                if ($types[0] == "image") {

                            ?>

                                    <img src="<?= base_url($file['dir']) ?>" style="width: 200px" class="img img-thumbnail">

                                    <br>

                                <?php } else { ?>



                                    <i class="fa fa-file fa-5x text-danger"></i>

                                    <br>

                                    <a href="<?= base_url($file['dir']) ?>" target="_blank"><i class="fa fa-download"></i> <?= $file['name'] ?></a>

                                    <br>

                                    <br>

                                <?php } ?>

                            <?php } ?><div class="form-group">

                                <label for="form-file">File</label>

                                <input type="file" class="form-control" id="form-file" placeholder="Masukan File" name="file">

                            </div>
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