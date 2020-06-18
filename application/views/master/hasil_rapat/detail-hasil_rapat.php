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
            Risalah Sidang
            <small>Detail</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Master</a></li>
            <li class="#">Risalah Sidang</li>
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
                        <div class="col-md-8">
                            <h5 class="box-title">
                                Detail Hasil Sidang
                            </h5>
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-12">
                                <button type="button" class="btn btn-sm btn-info pull-right" onclick="cetak(<?= $hasil_rapat['id'] ?>)" style="margin-right: 5px;"><i class="fa fa-print"></i> Print</button>
                                <?php
                                if ($_SESSION['role_id'] == 3) {
                                    if ($hasil_rapat['status_sidang'] == 1) {
                                ?>
                                        <button type="button" class="btn btn-sm btn-success pull-right" onclick="validasi(<?= $hasil_rapat['id'] ?>)" style="margin-right: 5px;"><i class="fa fa-refresh"></i> Validasi</button>
                                        <button type="button" class="btn btn-sm btn-primary pull-right" onclick="edit(<?= $hasil_rapat['id'] ?>)" style="margin-right: 5px;"><i class="fa fa-pencil"></i> Edit</button>
                                    <?php
                                    }
                                    ?>
                                    <button type="button" class="btn btn-sm btn-danger pull-right" onclick="hapus(<?= $hasil_rapat['id'] ?>)" style="margin-right: 5px;"><i class="fa fa-trash"></i> Hapus</button>
                                    <?php
                                } else if ($_SESSION['role_id'] == 2) {
                                    if ($hasil_rapat['status_sidang'] == 0) {
                                    ?>
                                        <button type="button" class="btn btn-sm btn-success pull-right" onclick="validasi(<?= $hasil_rapat['id'] ?>)" style="margin-right: 5px;"><i class="fa fa-refresh"></i> Validasi</button>
                                    <?php
                                    }
                                    ?>
                                <?php
                                }
                                if ($hasil_rapat['status_sidang'] == 0) {
                                    $badge_color = 'bg-yellow';
                                } else if ($hasil_rapat['status_sidang'] == 1) {
                                    $badge_color = 'bg-red';
                                } else {
                                    $badge_color = 'bg-green';
                                }
                                ?>
                            </div>
                            <div class="col-md-12" style="margin-top: 15px;">
                                <label class=" pull-right">Status Sekarang <span class='badge badge-pill <?= $badge_color ?>'><?= $master_status_sidang['nama'] ?></span></label>
                            </div>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="form-group col-md-6">
                            <label for="form-pimpinan_sidang">Sidang</label>
                            <?= $master_jadwal_rapat['nama'] ?>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="form-tanggal">Tanggal</label>
                            <?= $hasil_rapat['tanggal'] ?>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="form-pimpinan_sidang">Pimpinan Sidang</label>
                            <?= $hasil_rapat['pimpinan_sidang'] ?>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="form-jam_mulai">Jam Mulai</label>
                            <?= $hasil_rapat['jam_mulai'] ?>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="form-lokasi">Lokasi</label>
                            <?= $hasil_rapat['lokasi'] ?>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="form-jam_selesai">Jam Selesai</label>
                            <?= $hasil_rapat['jam_selesai'] ?>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="form-pendahuluan">Pendahuluan</label>
                            <?= $hasil_rapat['pendahuluan'] ?>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="form-review">Review</label>
                            <?= $hasil_rapat['review'] ?>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="form-tindak_lanjut">Tindak Lanjut</label>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dynamic_fieldinvoice" style="width:100%;">
                                    <tr>
                                        <th>
                                            Permasalahan
                                        </th>
                                        <th>
                                            Tindakan Perbaikan
                                        </th>
                                        <th>
                                            PIC
                                        </th>
                                        <th>
                                            Status
                                        </th>
                                    </tr>
                                    <?php
                                    $i = 100;
                                    $tindak_lanjut = json_decode($hasil_rapat['tindak_lanjut']);
                                    foreach ($tindak_lanjut as $tl) {
                                        $i++;
                                    ?>
                                        <tr id="rowinvoice<?= $i ?>">
                                            <td>
                                                <?= $tl->permasalahan ?>
                                            </td>
                                            <td>
                                                <?= $tl->tindakan ?>
                                            </td>
                                            <td>
                                                <?= $tl->pic ?>
                                            </td>
                                            <td>
                                                <?= $tl->status ?>
                                            </td>
                                        </tr>
                                    <?php
                                    } ?>
                                </table>
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="form-materi_tambahan">Materi Tambahan</label>
                            <?= $hasil_rapat['materi_tambahan'] ?>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="form-materi_kesehatan">Materi Kesehatan</label>
                            <?= $hasil_rapat['materi_kesehatan'] ?>
                        </div>
                        <div class="col-md-12" align="center">
                            <div class="col-xs-6">
                                Pimpinan Rapat
                            </div>
                            <div class="col-xs-6">
                                Notulis
                            </div>
                        </div>
                        <div class="col-md-12" align="center" style="margin-top: 50px;">
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
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<div class="modal fade bd-example-modal-sm" tabindex="-1" hasil_rapat="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="modal-delete">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <form method="post" action="<?= base_url('master/hasil_rapat/delete') ?>">
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
        $("#load-form").load("<?= base_url('master/hasil_rapat/validasi/') ?>" + id);

    }

    function edit(id) {
        location.href = "<?= base_url('master/hasil_rapat/edit/') ?>" + id;
    }

    function cetak(id) {
        window.open("<?= base_url('master/hasil_rapat/cetak/') ?>" + id);
    }

    function hapus(id) {
        $("#modal-delete").modal('show');
        $("#delete-input").val(id);
    }
</script>