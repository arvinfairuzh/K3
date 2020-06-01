<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>Kecelakaan Eksternal</h1>
    <h5 style="padding-left:1px;"></h5>
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-success">
          <div class="panel-heading">
            <!-- FILTER  -->
            <div class="row">
              <div class="col-md-12">
                <?php if ($_SESSION['role_id'] == 1) {
                  ?>
                  <a href="<?= base_url('master/kecelakaan_detail_ekternal/create') ?>">
                    <button type="button" class="btn btn-sm pull-right btn-primary"><i class="fa fa-plus"></i> Tambah Data</button>
                  </a>
                <?php
                }
                ?>
                <a class="btn btn-success pull-right btn-sm" style="margin-right: 5px;" href="<?= base_url('report/Kecelakaan_eksternal/getExcel/') ?>" target="_blank"><i class="fa fa-file-excel-o"></i> Export Excel</a>
              </div>
            </div>
            <!-- FILTER  -->
          </div>
          <div class="panel-body">
            <table class="table table-hover table-bordered" id="idTable" style="width: 100%">
              <thead>
                <tr class="bg-success">
                  <th>No</th>
                  <th>Nama Penderita</th>
                  <th>NIK</th>
                  <th>Departemen</th>
                  <th>Bagian</th>
                  <th>SE</th>
                  <th>Kabag</th>
                  <th>Kabag K3</th>
                  <th>Status</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

  </section>
</div>

<script type="text/javascript">
  function detail(id) {
    location.href = "<?= base_url('master/kecelakaan_detail_ekternal/detail/') ?>" + id;
  }

  var table;
  $(document).ready(function() {
    //datatables
    table = $('#idTable').DataTable({
      "processing": true, //Feature control the processing indicator.
      "serverSide": true, //Feature control DataTables' server-side processing mode.
      "order": [], //Initial no order.
      "scrollX": true,
      // Load data for the table's content from an Ajax source
      "ajax": {
        "url": "<?php echo base_url('report/Kecelakaan_eksternal/ajaxall/') ?>",
        "type": "POST"
      },
      //Set column definition initialisation properties.
      "columnDefs": [{
        "targets": [0], //first column / numbering colum
        "orderable": true, //set not orderable
      }, ],
    });
  });
</script>