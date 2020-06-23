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
            Laporan Bulanan
            <small>Detail</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Master</a></li>
            <li class="#">Laporan Bulanan</li>
            <li class="active">Detail</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-header">
                        <div class="col-md-7">
                            <h4><b>DAFTAR PERIKSA (CHECKLIST) SAFETY PATROL OLEH SAFETY REPRESENTATIIVE ATAU SUB P2K3</b></h4>
                        </div>
                        <div class="col-md-5">
                            <div class="col-md-12">
                                <button type="button" class="btn btn-sm btn-info pull-right" onclick="cetak(<?= $form_laporan_bulanan['id'] ?>)" style="margin-right: 5px;"><i class="fa fa-print"></i> Print</button>
                                <?php
                                if ($_SESSION['role_id'] == 1) {
                                    if ($form_laporan_bulanan['status_bulanan'] == 1) {
                                ?>
                                        <button type="button" class="btn btn-sm btn-success pull-right" onclick="validasi(<?= $form_laporan_bulanan['id'] ?>)" style="margin-right: 5px;"><i class="fa fa-refresh"></i> Validasi</button>
                                    <?php
                                    }
                                    ?>
                                    <button type="button" class="btn btn-sm btn-danger pull-right" onclick="hapus(<?= $form_laporan_bulanan['id'] ?>)" style="margin-right: 5px;"><i class="fa fa-trash"></i> Hapus</button>
                                    <button type="button" class="btn btn-sm btn-primary pull-right" onclick="edit(<?= $form_laporan_bulanan['id'] ?>)" style="margin-right: 5px;"><i class="fa fa-pencil"></i> Edit</button>
                                    <?php
                                } else if ($_SESSION['role_id'] == 3) {
                                    if ($form_laporan_bulanan['status_bulanan'] == 0 || $form_laporan_bulanan['status_bulanan'] == 2) {
                                    ?>
                                        <button type="button" class="btn btn-sm btn-success pull-right" onclick="validasi(<?= $form_laporan_bulanan['id'] ?>)" style="margin-right: 5px;"><i class="fa fa-refresh"></i> Validasi</button>
                                    <?php
                                    }
                                    ?>
                                    <button type="button" class="btn btn-sm btn-primary pull-right" onclick="edit(<?= $form_laporan_bulanan['id'] ?>)" style="margin-right: 5px;"><i class="fa fa-pencil"></i> Edit</button>
                                <?php
                                }
                                if ($form_laporan_bulanan['status_bulanan'] == 0) {
                                    $badge_color = 'bg-yellow';
                                } else if ($form_laporan_bulanan['status_bulanan'] == 1) {
                                    $badge_color = 'bg-blue';
                                } else if ($form_laporan_bulanan['status_bulanan'] == 2) {
                                    $badge_color = 'bg-red';
                                } else {
                                    $badge_color = 'bg-green';
                                }
                                ?>
                            </div>
                            <div class="col-md-12" style="margin-top: 15px;">
                                <label class=" pull-right">Status Sekarang <span class='badge badge-pill <?= $badge_color ?>'><?= $master_status_bulanan['nama'] ?></span></label>
                            </div>
                        </div>
                    </div>
                    <div class="box-body">
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
                    </div>
                </div>
                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-header">
                        <div class="col-xs-12">
                            <h4 align="center"><b>LAPORAN HASIL PEMERIKSAAN BULANAN ANGGOTA SAFETY REPRESENTATIIVE & TINDAK LANJUT</b></h4>
                        </div>
                        <div class="box-body">
                            <div class="row">
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
                                            <tr class="bg-info">
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
                                                    <td align="center" style="border-right: 0px;"><span style="font-weight:700"><?= $hasil_temuan ?> <?= $kosong ?></span></th>
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
                                                            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp <?= $ftl['ke'] ?>
                                                        </td>
                                                        <td align="center">
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
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12">
                <h1 style="margin-bottom:15px;font-weight: 400;font-size: 24px;">
                    History Laporan Bulanan
                </h1>
                <div class="row">
                    <ul class="timeline">
                        <?php
                        $history = $this->mymodel->selectWhere('history_validasi', array('id_laporan' => $form_laporan_bulanan['id'], 'jenis' => 'Bulanan'));
                        foreach ($history as $hs) {
                            $status_history = $this->mymodel->selectDataone('master_status_bulanan', array('id' => $hs['status']));
                            $user_history = $this->mymodel->selectDataOne('pegawai', array('id' => $hs['id_user']));
                            $bg = '';
                            $icon = '';
                            if ($hs['status'] == 0) {
                                $bg = 'bg-yellow';
                                $icon = 'fa fa-check';
                            } else if ($hs['status'] == 1) {
                                $bg = 'bg-blue';
                                $icon = 'fa fa-check';
                            } else if ($hs['status'] == 2) {
                                $bg = 'bg-red';
                                $icon = 'fa fa-times';
                            } else {
                                $bg = 'bg-green';
                                $icon = 'fa fa-check';
                            }
                            $date = date_create($hs['tanggal']);
                            $date = date_format($date, "d-m-Y h:i:s");
                        ?>
                            <style>

                            </style>
                            <li>
                                <i class="<?= $icon ?> <?= $bg ?>"></i>
                                <div class="timeline-item">
                                    <h3 class="timeline-header <?= $bg ?>">
                                        <?= $status_history['nama'] ?></h3>
                                    <div class="timeline-body">
                                        <p>Pegawai : <?= $user_history['nama'] ?></p>
                                        <p>Tanggal : <?= $date ?></p>
                                    </div>
                                </div>
                            </li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<div class="modal fade bd-example-modal-sm" tabindex="-1" form_laporan_bulanan="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="modal-delete">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <form method="post" action="<?= base_url('master/Form_laporan_bulanan/delete') ?>">
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
        $("#load-form").load("<?= base_url('master/Form_laporan_bulanan/validasi/') ?>" + id);

    }

    function edit(id) {
        location.href = "<?= base_url('master/Form_laporan_bulanan/edit/') ?>" + id;
    }

    function cetak(id) {
        window.open("<?= base_url('master/Form_laporan_bulanan/cetak/') ?>" + id);
    }

    function hapus(id) {
        $("#modal-delete").modal('show');
        $("#delete-input").val(id);
    }
</script>