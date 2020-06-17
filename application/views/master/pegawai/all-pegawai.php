<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">

  <!-- Content Header (Page header) -->

  <section class="content-header">

    <h1>

      Pegawai

      <small>Data</small>

    </h1>

    <ol class="breadcrumb">

      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>

      <li><a href="#">Master</a></li>

      <li class="#">Pegawai</li>

      <li class="active">Data</li>

    </ol>

  </section>

  <!-- Main content -->

  <section class="content">

    <div class="row">

      <div class="col-xs-12">

        <div class="box">

          <!-- /.box-header -->

          <div class="box-header">

            <div class="row">

              <div class="col-md-6">

                <select onchange="loadtable(this.value)" id="select-status" style="width: 150px" class="form-control">

                  <option value="ENABLE">ENABLE</option>

                  <option value="DISABLE">DISABLE</option>



                </select>

              </div>

              <div class="col-md-6">

                <div class="pull-right"> <a href="<?= base_url('master/Pegawai/create') ?>">

                    <button type="button" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Tambah Data</button>

                  </a>

                </div>

              </div>

            </div>
            <hr>
            <div class="row" style="margin-top: 15px;">
              <form method="post" action="<?= base_url('master/pegawai') ?>">
                <div class="col-xs-3">
                  <label for="form-kompartemen">Kompartemen</label>
                  <select style='width:100%' id="kompartemen" name="kompartemen" class="form-control select2">
                    <option value="">Semua</option>
                    <?php
                    $master_kompartemen = $this->mymodel->selectWhere('master_kompartemen', "id != 0");
                    foreach ($master_kompartemen as $master_kompartemen_record) {
                      $text = "";
                      if ($master_kompartemen_record['id'] == $_SESSION['kompartemen']) {
                        $text = "selected";
                      }
                      echo "<option value=" . $master_kompartemen_record['id'] . " $text >" . $master_kompartemen_record['nama'] . "</option>";
                    }
                    ?>
                  </select>
                </div>
                <div class="col-xs-3">
                  <label for="form-departemen">Departemen</label>
                  <select style='width:100%' id="departemen" name="departemen" class="form-control select2">
                    <option value="">Semua</option>
                    <?php
                    $master_departemen = $this->mymodel->selectWhere('master_departemen', "id != 0");
                    foreach ($master_departemen as $master_departemen_record) {
                      $text = "";
                      if ($master_departemen_record['id'] == $_SESSION['departemen']) {
                        $text = "selected";
                      }
                      echo "<option value=" . $master_departemen_record['id'] . " $text >" . $master_departemen_record['nama'] . "</option>";
                    }
                    ?>
                  </select>
                </div>
                <div class="col-xs-3">
                  <label for="form-bagian">Bagian</label>
                  <select style='width:100%' id="bagian" name="bagian" class="form-control select2">
                    <option value="">Semua</option>
                    <?php
                    $master_bagian = $this->mymodel->selectWhere('master_bagian', "id != 0");
                    foreach ($master_bagian as $master_bagian_record) {
                      $text = "";
                      if ($master_bagian_record['id'] == $_SESSION['bagian']) {
                        $text = "selected";
                      }
                      echo "<option value=" . $master_bagian_record['id'] . " $text >" . $master_bagian_record['nama'] . "</option>";
                    }
                    ?>
                  </select>
                </div>
                <div class="col-xs-2">
                  <label for="form-role">Role</label>
                  <select style='width:100%' id="role" name="role" class="form-control select2">
                    <option value="">Semua</option>
                    <?php
                    $master_role = $this->mymodel->selectWhere('role', null);
                    foreach ($master_role as $master_role_record) {
                      $text = "";
                      if ($master_role_record['id'] == $_SESSION['role']) {
                        $text = "selected";
                      }
                      echo "<option value=" . $master_role_record['id'] . " $text >" . $master_role_record['role'] . "</option>";
                    }
                    ?>
                  </select>
                </div>
                <div class="col-xs-1">
                  <button type="submit" class="btn btn-primary" style="margin-top: 25px;"><i class="fa fa-search"></i></button>
                </div>
              </form>
            </div>
          </div>

          <div class="box-body">

            <div class="show_error"></div>



            <div class="table-responsive">

              <div id="load-table"></div>

            </div>

          </div>

          <!-- /.box-body -->

        </div>

        <!-- /.box -->

      </div>

      <!-- /.col -->

    </div>

    <!-- /.row -->

  </section>

  <!-- /.content -->

</div>

<!-- /.content-wrapper -->


<div class="modal fade bd-example-modal-sm" tabindex="-1" pegawai="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="modal-delete">

  <div class="modal-dialog modal-sm">

    <div class="modal-content">

      <form id="upload-delete" action="<?= base_url('master/Pegawai/delete') ?>">

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



<div class="modal fade" id="modal-impor">

  <div class="modal-dialog">

    <div class="modal-content">

      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

        <h4 class="modal-title">Impor Data</h4>

      </div>

      <form action="<?= base_url('fitur/impor/pegawai') ?>" method="POST" enctype="multipart/form-data">



        <div class="modal-body">

          <div class="form-group">

            <label for="">File Excel</label>

            <input type="file" class="form-control" id="" name="file" placeholder="Input field">

          </div>

        </div>

        <div class="modal-footer">

          <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>

          <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>

        </div>

      </form>



    </div>

  </div>

</div>



<script type="text/javascript">
  function loadtable(status) {

    var table = '<table class="table table-bordered" id="mytable">' +

      '     <thead>' +

      '     <tr class="bg-success">' +

      '       <th style="width:20px">No</th>' + '<th>NIK</th>' + '<th>Nama</th>' + '<th>Shift</th>' + '<th>Kompartemen</th>' + '<th>Departemen</th>' + '<th>Bagian</th>' + '<th>Jabatan</th>' + '<th>Role</th>' + '       <th style="width:150px">Status</th>' +

      '       <th style="width:150px"></th>' +

      '     </tr>' +

      '     </thead>' +

      '     <tbody>' +

      '     </tbody>' +

      ' </table>';

    // body...

    $("#load-table").html(table)



    var t = $("#mytable").dataTable({

      initComplete: function() {

        var api = this.api();

        $('#mytable_filter input')

          .off('.DT')

          .on('keyup.DT', function(e) {

            if (e.keyCode == 13) {

              api.search(this.value).draw();

            }

          });

      },

      oLanguage: {

        sProcessing: "loading..."

      },

      processing: true,

      serverSide: true,

      ajax: {
        "url": "<?= base_url('master/Pegawai/json?status=') ?>" + status,
        "type": "POST"
      },

      columns: [

        {
          "data": "id",
          "orderable": false
        }, {
          "data": "nip"
        }, {
          "data": "nama"
        }, {
          "data": "shift"
        }, {
          "data": "kompartemen"
        }, {
          "data": "departemen"
        }, {
          "data": "bagian"
        }, {
          "data": "jabatan"
        }, {
          "data": "role"
        },

        {
          "data": "status"
        },

        {
          "data": "view",

          "orderable": false

        }

      ],

      order: [
        [1, 'asc']
      ],

      columnDefs: [{
          targets: [3],
          render: function(data, type, row, meta) {
            if (row['id_role'] == 1) {
              var htmls = row['shift'];
            } else {
              var htmls = "<span class='badge badge-pill badge-secondary'>Tidak Tersedia</span>"
            }
            return htmls;
          }
        },
        {
          targets: [4],
          render: function(data, type, row, meta) {
            if (row['id_role'] != 0) {
              var htmls = row['kompartemen'];
            } else {
              var htmls = "<span class='badge badge-pill badge-secondary'>Tidak Tersedia</span>"
            }
            return htmls;
          }
        },
        {
          targets: [5],
          render: function(data, type, row, meta) {
            if (row['id_role'] != 0 && row['id_role'] != 2) {
              var htmls = row['departemen'];
            } else {
              var htmls = "<span class='badge badge-pill badge-secondary'>Tidak Tersedia</span>"
            }
            return htmls;
          }
        },
        {
          targets: [6],
          render: function(data, type, row, meta) {
            if (row['id_role'] != 0 && row['id_role'] != 2 && row['id_role'] != 4) {
              var htmls = row['bagian'];
            } else {
              var htmls = "<span class='badge badge-pill badge-secondary'>Tidak Tersedia</span>"
            }
            return htmls;
          }
        },
        {
          targets: [9],
          render: function(data, type, row, meta) {
            if (row['status'] == 'ENABLE') {
              var htmls = '<a href="<?= base_url('master/Pegawai/status/') ?>' + row['id'] + '/DISABLE">' +
                '    <button type="button" class="btn btn-sm btn-sm btn-success"><i class="fa fa-home"></i> ENABLE</button>' +
                '</a>';
            } else {
              var htmls = '<a href="<?= base_url('master/Pegawai/status/') ?>' + row['id'] + '/ENABLE">' +
                '    <button type="button" class="btn btn-sm btn-sm btn-danger"><i class="fa fa-home"></i> DISABLE</button>' +
                '</a>';
            }
            return htmls;
          }
        }

      ],

      rowCallback: function(row, data, iDisplayIndex) {

        var info = this.fnPagingInfo();

        var page = info.iPage;

        var length = info.iLength;

        var index = page * length + (iDisplayIndex + 1);

        $('td:eq(0)', row).html(index);

      }

    });

  }





  loadtable($("#select-status").val());



  function edit(id) {

    location.href = "<?= base_url('master/Pegawai/edit/') ?>" + id;

  }

  function hapus(id) {

    $("#modal-delete").modal('show');

    $("#delete-input").val(id);



  }

  $("#upload-delete").submit(function() {

    event.preventDefault();

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

        $(".show_error").slideUp().html("");

      },

      success: function(response, textStatus, xhr) {

        var str = response;

        if (str.indexOf("success") != -1) {

          $(".show_error").hide().html(response).slideDown("fast");



          $(".btn-send").removeClass("disabled").html('Yes, Delete it').attr('disabled', false);

        } else {

          setTimeout(function() {

            $("#modal-delete").modal('hide');

          }, 1000);

          $(".show_error").hide().html(response).slideDown("fast");

          $(".btn-send").removeClass("disabled").html('Yes , Delete it').attr('disabled', false);

          loadtable($("#select-status").val());

        }

      },

      error: function(xhr, textStatus, errorThrown) {



      }

    });

    return false;



  });
</script>