<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Kecelakaan Detail Internal
            <small>Tambah</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Master</a></li>
            <li class="#">Kecelakaan Detail Internal</li>
            <li class="active">Tambah</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <form method="POST" action="<?= base_url('master/Kecelakaan_detail_internal/store') ?>" id="upload-create" enctype="multipart/form-data">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <!-- /.box-header -->
                        <div class="box-header">
                            <h5 class="box-title">
                                Tambah Kecelakaan Detail Internal
                            </h5>
                        </div>
                        <div class="box-body">
                            <div class="show_error"></div>
                            <div class="form-group" align="center">
                                <label for="form-jenis_kecelakaan" style="font-size:20px">Jenis Kecelakaan</label><br>
                                <div class="col-md-6">
                                    <input type="radio" id="form-jenis_kecelakaan-1" name="dta[jenis_kecelakaan]" value="1">
                                    <label for="form-jenis_kecelakaan-1">Kecelakaan Kerja</label><br>
                                </div>
                                <div class="col-md-6">
                                    <input type="radio" id="form-jenis_kecelakaan-2" name="dta[jenis_kecelakaan]" value="2">
                                    <label for="form-jenis_kecelakaan-2">Bukan Kecelakaan Kerja</label><br>
                                </div>
                            </div>
                            <div class="form-group">
                                <hr>
                                <label for="form-id_kecelakaan" style="font-size:20px">IDENTITAS PENDERITA</label>
                            </div>
                            <div class="form-group">
                                <label for="form-kk_tanggal_jam">Nama</label>
                                <input type="text" class="form-control" id="form-kk_tanggal_jam" name="dta[ip_nama]" value="<?= $sr['nama'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="form-kk_tanggal_jam">Nomor Induk</label>
                                <input type="text" class="form-control" id="form-kk_tanggal_jam" name="dta[ip_nomor_induk]" value="<?= $sr['nip'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="form-kk_tanggal_jam">Umur</label>
                                <input type="number" class="form-control" id="form-kk_tanggal_jam" name="dta[ip_umur]">
                            </div>
                            <div class="form-group">
                                <label for="form-kk_tanggal_jam">Alamat</label>
                                <textarea class="form-control" id="form-kk_tanggal_jam" name="dta[ip_alamat]"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="form-kk_tanggal_jam">Dep/Biro/Bid</label>
                                <input type="text" class="form-control" id="form-kk_tanggal_jam" name="dta[ip_dep_birobid]" value="<?= $departemen['nama'] ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="form-kk_tanggal_jam">Bagian/Seksi</label>
                                <input type="text" class="form-control" id="form-kk_tanggal_jam" name="dta[ip_bagian_seksi]" value="<?= $bagian['nama'] ?>" readonly>
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
                                <input type="date" class="form-control" id="form-kk_tanggal_jam" name="dt[kk_tanggal_jam]">
                            </div>
                            <div class="form-group">
                                <label for="form-kk_lokasi">Lokasi</label>
                                <input type="text" class="form-control" id="form-kk_lokasi" name="dt[kk_lokasi]">
                            </div>
                            <div class="form-group">
                                <label for="form-kk_penjelasan_kecelakaan">Jelaskan bagaimana kecelakaan terjadi</label>
                                <textarea name="dt[kk_penjelasan_kecelakaan]" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="form-kk_gambar_lokasi">Gambarkan lokasi/sket terjadinya kecelakaan</label>
                                <!-- <input type="text" class="form-control" id="form-kk_gambar_lokasi" placeholder="Masukan Kk Gambar Lokasi" name="dt[kk_gambar_lokasi]"> -->
                                <input type="file" class="form-control" id="form-file" placeholder="Masukan File" name="kk_gambar_lokasi">
                            </div>
                            <div class="form-group">
                                <label for="form-kk_bagian_tubuh_cedera">Bagian tubuh yang cedera</label>
                                <input type="text" class="form-control" id="form-kk_bagian_tubuh_cedera" name="dt[kk_bagian_tubuh_cedera]">
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
                                <label for="form-id_kecelakaan" style="font-size:20px">TUGAS DAN WEWENANG</label>
                            </div>
                            <div class="form-group">
                                <label for="form-tw_apkh_1">Apakah karyawan tersebut melakukan tugas/kegiatan yang merupakan tugas sehari-hari sesuai <span style="font-style: oblique;">job discriptionnya </span>?</label><br>
                                <!-- <input type="text" class="form-control" id="form-tw_apkh_1" placeholder="Masukan Tw Apkh 1" name="dt[tw_apkh_1]"> -->
                                <input type="radio" onclick="javascript:yesnoCheck();" id="yesCheck" name="dt[tw_apkh_1]" value="ya">
                                <label for="Ya">Ya</label><br>
                                <input type="radio" onclick="javascript:yesnoCheck();" id="noCheck" name="dt[tw_apkh_1]" value="tidak">
                                <label for="Tidak">Tidak</label><br>
                            </div>
                            <div class="form-group">
                                <label for="form-tw_apkh_2">Apakah karyawan tersebut dalam melakukan tugas/kegiatannya ada perintah dari atasannya ?</label><br>
                                <!-- <input type="text" class="form-control" id="form-tw_apkh_2" placeholder="Masukan Tw Apkh 2" name="dt[tw_apkh_2]"> -->
                                <input type="radio" onclick="javascript:yesnoCheck();" id="yesCheck1" name="dt[tw_apkh_2]" value="ya">
                                <label for="Ya">Ya</label><br>
                                <input type="radio" onclick="javascript:yesnoCheck();" id="noCheck1" name="dt[tw_apkh_2]" value="tidak">
                                <label for="Tidak">Tidak</label>
                            </div>
                            <div class="form-group">
                                <label for="form-tw_apkh_3">Apakah karyawan tersebut melakukan tugas/kegiatan yang berhubungan dengan kepentingan perusahaan ?</label><br>
                                <!-- <input type="text" class="form-control" id="form-tw_apkh_3" placeholder="Masukan Tw Apkh 3" name="dt[tw_apkh_3]"> -->
                                <input type="radio" onclick="javascript:yesnoCheck();" id="yesCheck2" name="dt[tw_apkh_3]" value="ya">
                                <label for="Ya">Ya</label><br>
                                <input type="radio" onclick="javascript:yesnoCheck();" id="noCheck2" name="dt[tw_apkh_3]" value="tidak">
                                <label for="Tidak">Tidak</label>
                            </div>
                            <div class="form-group" id="ifNo" style="display:none">
                                <label for="form-tw_tidak_q1">Mengapa Melakukan tugas tersebut ?</label>
                                <textarea class="form-control" id="form-tw_tidak_q1" name="dt[tw_tidak_q1]"></textarea>
                            </div>
                            <div class="form-group" id="ifNo1" style="display:none">
                                <label for="form-tw_tidak_q2">Siapa yang seharusnya melakukan tugas/kegiatan tersebut ?</label>
                                <textarea class="form-control" id="form-tw_tidak_q2" name="dt[tw_tidak_q2]"></textarea>
                            </div>
                            <div class="form-group" id="ifNo2" style="display:none">
                                <label for="form-tw_tidak_q3">Siapa yang memerintah penderita melakukan pekerjaan tersebut ?</label>
                                <textarea class="form-control" id="form-tw_tidak_q3" name="dt[tw_tidak_q3]"></textarea>
                            </div>
                            <!-- JAGA JARAK -->
                            <div class="form-group">
                                <label for="form-id_kecelakaan" style="font-size:20px">SISTEM PENGAWASAN</label>
                            </div>
                            <div class="form-group">
                                <label for="form-sp_apkh_1">Apakah atasan langsung penderita berada di tempat kejadian pada saat terjadi kecelakaan kerja ?</label><br>
                                <!-- <input type="text" class="form-control" id="form-sp_apkh_1" placeholder="Masukan Sp Apkh 1" name="dt[sp_apkh_1]"> -->
                                <input type="radio" onclick="javascript:yesnoCheck1();" id="yesCheck3" name="dt[sp_apkh_1]" value="ya">
                                <label for="Ya">Ya</label><br>
                                <input type="radio" onclick="javascript:yesnoCheck1();" id="noCheck3" name="dt[sp_apkh_1]" value="tidak">
                                <label for="Tidak">Tidak</label>
                            </div>
                            <div class="form-group" id="ifYes3" style="display:none">
                                <label for="form-sp_ya_1">Instruksi apa yang telah diberikan kepada penderita ?</label>
                                <textarea class="form-control" id="form-sp_ya_1"  name="dt[sp_ya_1]"></textarea>
                            </div>
                            <div class="form-group" id="ifNo3" style="display:none">
                                <label for="form-sp_tidak_1">Dimana atasan penderita berada ?</label>
                                <textarea class="form-control" id="form-sp_tidak_1"  name="dt[sp_tidak_1]"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="form-sp_apkh_2">Apakah tugas tersebut dilakukan sesai dengan instruksi kerja atau praktek kerja yang biasa dilakukan ?</label><br>
                                <!-- <input type="text" class="form-control" id="form-sp_apkh_2" placeholder="Masukan Sp Apkh 2" name="dt[sp_apkh_2]"> -->
                                <input type="radio" onclick="javascript:yesnoCheck2();" id="yesCheck4" name="dt[sp_apkh_2]" value="ya">
                                <label for="Ya">Ya</label><br>
                                <input type="radio" onclick="javascript:yesnoCheck2();" id="noCheck4" name="dt[sp_apkh_2]" value="tidak">
                                <label for="Tidak">Tidak</label>
                            </div>
                            <div class="form-group" id="ifNo4" style="display:none">
                                <label for="form-sp_tidak_2">Mengapa hal tersebut harus dilakukan ?</label>
                                <textarea class="form-control" id="form-sp_tidak_2"  name="dt[sp_tidak_2]"></textarea>
                            </div>
                            <!-- JAGA JARAK -->
                            <div class="form-group">
                                <label for="form-id_kecelakaan" style="font-size:20px">PENGETAHUAN DAN KETRAMPILAN</label>
                            </div>
                            <div class="form-group">
                                <label for="form-pk__apkh_1">Apakah tugas/pekerjaan tersebut sesuai dengan pengetahuan/pengalaman/ketrampilannya ?</label><br>
                                <!-- <input type="text" class="form-control" id="form-pk__apkh_1" placeholder="Masukan Pk  Apkh 1" name="dt[pk__apkh_1]"> -->
                                <input type="radio" onclick="javascript:yesnoCheck3();" id="yesCheck5" name="dt[pk__apkh_1]" value="ya">
                                <label for="Ya">Ya</label><br>
                                <input type="radio" onclick="javascript:yesnoCheck3();" id="noCheck5" name="dt[pk__apkh_1]" value="tidak">
                                <label for="Tidak">Tidak</label>
                            </div>
                            <div class="form-group" id="ifNo5" style="display:none">
                                <label for="form-pk_tidak_1">Pelatihan apa yang diperlukan ?</label>
                                <textarea class="form-control" id="form-pk_tidak_1"  name="dt[pk_tidak_1]"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="form-pk_apkh_2">Apakah karyawan tersebut telah terbiasa dengan jenis pekerjaan/peralatan/bahan yang ditangani ?</label>
                                <!-- <input type="text" class="form-control" id="form-pk_apkh_2" placeholder="Masukan Pk Apkh 2" name="dt[pk_apkh_2]"> -->
                                <br><input type="radio" onclick="javascript:yesnoCheck4();" id="yesCheck6" name="dt[pk_apkh_2]" value="ya">
                                <label for="Ya">Ya</label><br>
                                <input type="radio" onclick="javascript:yesnoCheck4();" id="noCheck6" name="dt[pk_apkh_2]" value="tidak">
                                <label for="Tidak">Tidak</label>
                            </div>
                            <div class="form-group" id="ifNo6" style="display:none">
                                <label for="form-pk_tidak_2">Pengetahuan/keterampilan apa yang diperlukan ?</label>
                                <textarea class="form-control" id="form-pk_tidak_2" name="dt[pk_tidak_2]"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="form-pk_apkh_3">Apakah karyawan tersebut telah dilatih untuk melakukan pekerjaan tersebut dengan aman ?</label>
                                <!-- <input type="text" class="form-control" id="form-pk_apkh_3" placeholder="Masukan Pk Apkh 3" name="dt[pk_apkh_3]"> -->
                                <br><input type="radio" onclick="javascript:yesnoCheck5();" id="yesCheck7" name="dt[pk_apkh_3]" value="ya">
                                <label for="Ya">Ya</label><br>
                                <input type="radio" onclick="javascript:yesnoCheck5();" id="noCheck7" name="dt[pk_apkh_3]" value="tidak">
                                <label for="Tidak">Tidak</label>
                            </div>
                            <div class="form-group" id="ifNo7" style="display:none">
                                <label for="form-pk_tidak_3">Training K3 apa yang dapat dilakukan untuk mencegah terjadinya kembali kecelakaan kerja tersebut ?</label>
                                <textarea class="form-control" id="form-pk_tidak_3" name="dt[pk_tidak_3]"></textarea>
                            </div>
                            <!-- JAGA JARAK -->
                            <div class="form-group">
                                <label for="form-id_kecelakaan" style="font-size:20px">PENGGUNAAN ALAT PELINDUNG DIRI</label>
                            </div>
                            <div class="form-group">
                                <label for="form-papd_apkh_1">Apakah alat pelindung diri tersedia dan dapat digunakan ?</label>
                                <!-- <input type="text" class="form-control" id="form-papd_apkh_1" placeholder="Masukan Papd Apkh 1" name="dt[papd_apkh_1]"> -->
                                <br><input type="radio" onclick="javascript:yesnoCheck6();" id="yesCheck8" name="dt[papd_apkh_1]" value="ya">
                                <label for="Ya">Ya</label><br>
                                <input type="radio" onclick="javascript:yesnoCheck6();" id="noCheck8" name="dt[papd_apkh_1]" value="tidak">
                                <label for="Tidak">Tidak</label>
                            </div>
                            <div class="form-group" id="ifYes8" style="display:none">
                                <label for="form-papd_ya_1">Alat pelindung diri apa yang digunakan saat itu ?</label>
                                <textarea class="form-control" id="form-papd_ya_1" name="dt[papd_ya_1]"></textarea>
                            </div>
                            <div class="form-group" id="ifNo8" style="display:none">
                                <label for="form-papd_tidak_1">Mengapa alat pelindung diri tidak digunakan ?</label>
                                <textarea class="form-control" id="form-papd_tidak_1" name="dt[papd_tidak_1]"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="form-papd_apd">Alat pelindung diri apa yang sesuai dengan pekerjaan tersebut ?</label>
                                <textarea class="form-control" id="form-papd_apd" name="dt[papd_apd]"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="form-papd_apkh_2">Apakah cara penggunaan alat pelindung diri sudah tepat dan benar ?</label>
                                <!-- <input type="text" class="form-control" id="form-papd_apkh_2" placeholder="Masukan Papd Apkh 2" name="dt[papd_apkh_2]"> -->
                                <br><input type="radio" onclick="javascript:yesnoCheck7();" id="yesCheck9" name="dt[papd_apkh_2]" value="ya">
                                <label for="Ya">Ya</label><br>
                                <input type="radio" onclick="javascript:yesnoCheck7();" id="noCheck9" name="dt[papd_apkh_2]" value="tidak">
                                <label for="Tidak">Tidak</label>
                            </div>
                            <div class="form-group" id="ifNo9" style="display:none">
                                <label for="form-papd_tidak_2">Mengapa alat pelindung diri tidak digunakan dengan benar ?</label>
                                <textarea class="form-control" id="form-papd_tidak_2" name="dt[papd_tidak_2]"></textarea>
                            </div>
                            <!-- JAGA JARAK -->
                            <div class="form-group">
                                <label for="form-id_kecelakaan" style="font-size:20px">KONDISI PERALATAN/DIMANA KECELAKAAN TERJADI</label>
                            </div>
                            <div class="form-group">
                                <label for="form-md_gambar_1">Buat sket gambar dengan jelas situasi alat/peralatan tempat kerja dimana kecelakaan terjadi.</label>
                                <!-- <input type="text" class="form-control" id="form-md_gambar_1" placeholder="Masukan Md Gambar 1" name="dt[md_gambar_1]"> -->
                                <input type="file" class="form-control" id="form-file" placeholder="Masukan File" name="md_gambar_1">
                            </div>
                            <div class="form-group">
                                <label for="form-md_fungsi_alat">Pada kondisi normal apa fungsi alat tersebut(dimana alat/peralatan tersebut) ?</label>
                                <textarea class="form-control" id="form-md_fungsi_alat" name="dt[md_fungsi_alat]"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="form-md_apkh_1">Apakah perubahan/modifikasi yang telah dibuat pada alat tersebut ?</label>
                                <!-- <input type="text" class="form-control" id="form-md_apkh_1" placeholder="Masukan Md Apkh 1" name="dt[md_apkh_1]"> -->
                                <br><input type="radio" onclick="javascript:yesnoCheck8();" id="yesCheck10" name="dt[md_apkh_1]" value="ya">
                                <label for="Ya">Ya</label><br>
                                <input type="radio" onclick="javascript:yesnoCheck8();" id="noCheck10" name="dt[md_apkh_1]" value="tidak">
                                <label for="Tidak">Tidak</label>
                            </div>
                            <div class="form-group" id="ifNo10" style="display:none">
                                <label for="form-md_ya_1">Jelaskan :</label>
                                <textarea class="form-control" id="form-md_ya_1" name="dt[md_ya_1]"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="form-md_apkh_2">Adakah peralatan untuk mengendalikan keadaan emergency(emergency stop pull card switch dll) ?</label>
                                <!-- <input type="text" class="form-control" id="form-md_apkh_2" placeholder="Masukan Md Apkh 2" name="dt[md_apkh_2]"> -->
                                <br><input type="radio" name="dt[md_apkh_2]" value="ya">
                                <label for="Ya">Ya</label><br>
                                <input type="radio" name="dt[md_apkh_2]" value="tidak">
                                <label for="Tidak">Tidak</label>
                            </div>
                            <div class="form-group">
                                <label for="form-md_apkh_3">Adakah alat pelindung mesin / peralatan pelindung yang efektif ?</label>
                                <!-- <input type="text" class="form-control" id="form-md_apkh_3" placeholder="Masukan Md Apkh 3" name="dt[md_apkh_3]"> -->
                                <br><input type="radio" onclick="javascript:yesnoCheck9();" id="yesCheck11" name="dt[md_apkh_3]" value="ya">
                                <label for="Ya">Ya</label><br>
                                <input type="radio" onclick="javascript:yesnoCheck9();" id="noCheck11" name="dt[md_apkh_3]" value="tidak">
                                <label for="Tidak">Tidak</label>
                            </div>
                            <div class="form-group" id="ifNo11" style="display:none">
                                <label for="form-md_tidak_3">Bagaimana untuk pengamanannya ?</label>
                                <textarea class="form-control" id="form-md_tidak_3" name="dt[md_tidak_3]"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="form-md_apkh_4">Apakah pengontrol operasi, pipa-pipa, tangki-tangki di berikan tanda yang cukup jelas ?</label>
                                <!-- <input type="text" class="form-control" id="form-md_apkh_4" placeholder="Masukan Md Apkh 4" name="dt[md_apkh_4]"> -->
                                <br><input type="radio" onclick="javascript:yesnoCheck10();" id="yesCheck12" name="dt[md_apkh_4]" value="ya">
                                <label for="Ya">Ya</label><br>
                                <input type="radio" onclick="javascript:yesnoCheck10();" id="noCheck12" name="dt[md_apkh_4]" value="tidak">
                                <label for="Tidak">Tidak</label>
                            </div>
                            <div class="form-group" id="ifNo12" style="display:none">
                                <label for="form-md_tidak_4">Beri alasan mengapa tidak ditandai dengan jelas ?</label>
                                <textarea class="form-control" id="form-md_tidak_4" name="dt[md_tidak_4]"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="form-md_apkh_5">Apakah perlu menggunakan Safety Tag/ atau Locked out sistem ?</label>
                                <!-- <input type="text" class="form-control" id="form-md_apkh_5" placeholder="Masukan Md Apkh 5" name="dt[md_apkh_5]"> -->
                                <br><input type="radio" onclick="javascript:yesnoCheck11();" id="yesCheck13" name="dt[md_apkh_5]" value="ya">
                                <label for="Ya">Ya</label><br>
                                <input type="radio" onclick="javascript:yesnoCheck11();" id="noCheck13" name="dt[md_apkh_5]" value="tidak">
                                <label for="Tidak">Tidak</label>
                            </div>
                            <div class="form-group" id="ifNo13" style="display:none">
                                <label for="form-md_ya_5">Apakah telah dipergunakan sebagaimana mestinya seperti tersebut pada prosedur Keselamatan Kerja tentang Safety Tag dan Locked Out Sistem ?</label>
                                <textarea class="form-control" id="form-md_ya_5" name="dt[md_ya_5]"></textarea>
                            </div>
                            <!-- JAGA JARAK -->
                            <div class="form-group">
                                <label for="form-id_kecelakaan" style="font-size:20px">SISTEM DAN PROSEDUR</label>
                            </div>
                            <div class="form-group">
                                <label for="form-snp_apkh_1">Adakah Prosedur atau instruksi kerja telah ditetapkan untuk tugas tersebut ?</label>
                                <!-- <input type="text" class="form-control" id="form-snp_apkh_1" placeholder="Masukan Snp Apkh 1" name="dt[snp_apkh_1]"> -->
                                <br><input type="radio" onclick="javascript:yesnoCheck12();" id="yesCheck14" name="dt[snp_apkh_1]" value="ya">
                                <label for="Ya">Ya</label><br>
                                <input type="radio" onclick="javascript:yesnoCheck12();" id="noCheck14" name="dt[snp_apkh_1]" value="tidak">
                                <label for="Tidak">Tidak</label>
                            </div>
                            <div class="form-group" id="ifYes14" style="display:none">
                                <label for="form-snp_ya_1">Apakah prosedur/instruksi kerja perlu diperbaiki ? Jelaskan.</label>
                                <textarea class="form-control" id="form-snp_ya_1" name="dt[snp_ya_1]"></textarea>
                            </div>
                            <div class="form-group" id="ifNo14" style="display:none">
                                <label for="form-snp_tidak_1">Apakah prosedur/instruksi kerja perlu diperbaiki ? Jelaskan.</label>
                                <textarea class="form-control" id="form-snp_tidak_1" name="dt[snp_tidak_1]"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="form-snp_adakah_1">Adakah suatu sistem untuk mengamati bahwa prosedur atau instruksi yang ditetapkan telah diikuti ?</label>
                                <textarea class="form-control" id="form-snp_adakah_1" name="dt[snp_adakah_1]"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="form-snp_apkh_2">Apakah Surat Ijin Keselamatan Kerja telah dibuat dan dilaksanakan ?</label>
                                <!-- <input type="text" class="form-control" id="form-snp_apkh_2" placeholder="Masukan Snp Apkh 2" name="dt[snp_apkh_2]"> -->
                                <br><input type="radio" onclick="javascript:yesnoCheck13();" id="yesCheck15" name="dt[snp_apkh_2]" value="ya">
                                <label for="Ya">Ya</label><br>
                                <input type="radio" onclick="javascript:yesnoCheck13();" id="noCheck15" name="dt[snp_apkh_2]" value="tidak">
                                <label for="Tidak">Tidak</label><br>
                                <input type="radio" onclick="javascript:yesnoCheck13();" id="nochoiseCheck15" name="dt[snp_apkh_2]" value="tidak perlu">
                                <label for="Tidakperlu">Tidak perlu</label>
                            </div>
                            <div class="form-group" id="ifNo15" style="display:none">
                                <label for="form-snp_tidak_2">Mengapa tidak dibuat dan tidak dilaksanakan ?</label>
                                <textarea class="form-control" id="form-snp_tidak_2" name="dt[snp_tidak_2]"></textarea>
                            </div>
                            <!-- JAGA JARAK -->
                            <div class="form-group">
                                <label for="form-id_kecelakaan" style="font-size:20px">PENYUMBANGAN TERHADAP TERJADINYA KECELAKAAN</label>
                            </div>
                            <div class="form-group">
                                <label for="form-pttk_kondisi_lingkungan">Bagaimana Kondisi lingkungan saat itu ?</label><br>
                                <!-- <input type="text" class="form-control" id="form-pttk_kondisi_lingkungan" placeholder="Masukan Pttk Kondisi Lingkungan" name="dt[pttk_kondisi_lingkungan]"> -->
                                <table>
                                    <tr>
                                        <td style="padding-right: 50px">
                                            <input type="checkbox" name="dt[pttk_kondisi_lingkungan]" value="Hujan">
                                            <label for="Ya">Hujan</label>
                                        </td>
                                        <td style="padding-right: 75px">
                                            <input type="checkbox" name="dt[pttk_kondisi_lingkungan]" value="Panas">
                                            <label for="Tidak">Panas</label>
                                        </td>
                                        <td>
                                            <input type="checkbox" name="dt[pttk_kondisi_lingkungan]" value="Ada fume">
                                            <label for="Tidak">Ada fume</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="dt[pttk_kondisi_lingkungan]" value="Getaran">
                                            <label for="Tidak">Getaran</label>
                                        </td>
                                        <td>
                                            <input type="checkbox" name="dt[pttk_kondisi_lingkungan]" value="Ketinggian">
                                            <label for="Tidak">Ketinggian</label>
                                        </td>
                                        <td>
                                            <input type="checkbox" name="dt[pttk_kondisi_lingkungan]" value="Licin">
                                            <label for="Tidak">Licin</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="dt[pttk_kondisi_lingkungan]" value="Kabut">
                                            <label for="Tidak">Kabut</label>
                                        </td>
                                        <td>
                                            <input type="checkbox" name="dt[pttk_kondisi_lingkungan]" value="Dingin">
                                            <label for="Tidak">Dingin</label>
                                        </td>
                                        <td>
                                            <input type="checkbox" name="dt[pttk_kondisi_lingkungan]" value="Kebisingan">
                                            <label for="Tidak">Kebisingan</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="dt[pttk_kondisi_lingkungan]" value="Ada gas">
                                            <label for="Tidak">Ada gas</label>
                                        </td>
                                        <td>
                                            <input type="checkbox" name="dt[pttk_kondisi_lingkungan]" value="Di kedalaman">
                                            <label for="Tidak">Di kedalaman</label>
                                        </td>
                                        <td>
                                            <input type="checkbox" name="dt[pttk_kondisi_lingkungan]" value="Panas sinar matahari">
                                            <label for="Tidak">Panas sinar matahari</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="dt[pttk_kondisi_lingkungan]" value="Lembab">
                                            <label for="Tidak">Lembab</label>
                                        </td>
                                        <td>
                                            <input type="checkbox" name="dt[pttk_kondisi_lingkungan]" value="Ada vapour">
                                            <label for="Tidak">Ada vapour</label>
                                        </td>
                                        <td>
                                            <input type="checkbox" name="dt[pttk_kondisi_lingkungan]" value="Ruang tertutup">
                                            <label for="Tidak">Ruang tertutup</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="dt[pttk_kondisi_lingkungan]" value="Gelap">
                                            <label for="Tidakperlu">Gelap</label>
                                        </td>
                                        <td>
                                            <input type="checkbox" name="dt[pttk_kondisi_lingkungan]" value="Lainya">
                                            <label for="Tidakperlu">Lainya</label>
                                            <input type="text" name="pttk_kondisi_lingkungan_lainnya">
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="form-group">
                                <label for="form-pttk_apkh_1">Apakah keadaan tersebut di atas merupakan faktor dominan terjadinya kecelakaan ? Jelaskan.</label>
                                <textarea class="form-control" id="form-pttk_apkh_1" name="dt[pttk_apkh_1]"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="form-pttk_kesimpulan">Buatlah dan Jelaskan kesimpulan mengenai penyebab kecelakaan, persyaratan yang harus di penuhi oleh korban dan kondisi lain yang ada hubungannya dengan kejadian kecelakaan.</label>
                                <textarea name="dt[pttk_kesimpulan]" class="form-control"></textarea>
                            </div>
                            <!-- JAGA JARAK -->
                            <div class="show_error"></div>
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