<!-- Content Wrapper. Contains page content -->
<!-- include libraries(jQuery, bootstrap) -->
<!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->

<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<div class="content-wrapper">

  <!-- Content Header (Page header) -->

  <section class="content-header">

    <h1>

      Hasil Rapat

      <small>Tambah</small>

    </h1>

    <ol class="breadcrumb">

      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>

      <li><a href="#">Master</a></li>

      <li class="#">Hasil Rapat</li>

      <li class="active">Tambah</li>

    </ol>

  </section>

  <!-- Main content -->

  <section class="content">

    <form method="POST" autocomplete="off" action="<?= base_url('master/Hasil_rapat/store') ?>" id="upload-create" enctype="multipart/form-data">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-header">
              <h5 class="box-title">
                Tambah Hasil Rapat
              </h5>
            </div>
            <div class="box-body">
              <div class="show_error"></div>
              <div class="form-group col-md-12">
                <label for="form-id_jadwal">Jadwal</label>
                <select style='width:100%' id="jadwal" name="dt[id_jadwal]" class="form-control select2">
                  <?php
                  $master_jadwal_rapat = $this->mymodel->selectWhere('master_jadwal_rapat', null);
                  foreach ($master_jadwal_rapat as $master_jadwal_rapat_record) {
                    echo "<option value=" . $master_jadwal_rapat_record['id'] . ">" . $master_jadwal_rapat_record['nama'] . "</option>";
                  }

                  ?>

                </select>

              </div>
              <div class="form-group col-md-6">

                <label for="form-pimpinan_sidang">Pimpinan Sidang</label>

                <input type="text" readonly id="pimpinan" class="form-control" id="form-pimpinan_sidang" placeholder="Masukan Pimpinan Sidang" name="dt[pimpinan_sidang]">

              </div>
              <div class="form-group col-md-6">

                <label for="form-lokasi">Lokasi</label>

                <input type="text" id="lokasi" class="form-control" id="form-lokasi" placeholder="Masukan Lokasi" name="dt[lokasi]">

              </div>
              <div class="form-group col-md-4">

                <label for="form-tanggal">Tanggal</label>

                <input type="text" class="form-control tgl" value="<?= date('Y-m-d') ?>" id="form-tanggal" placeholder="Masukan Tanggal" name="dt[tanggal]">

              </div>
              <div class="form-group col-md-4">

                <label for="form-jam_mulai">Jam Mulai</label>

                <input type="time" class="form-control" id="form-jam_mulai" value="<?= date('h:i:s') ?>" placeholder="Masukan Jam Mulai" name="dt[jam_mulai]">

              </div>
              <div class="form-group col-md-4">

                <label for="form-jam_selesai">Jam Selesai</label>

                <input type="time" class="form-control" id="form-jam_selesai" placeholder="Masukan Jam Selesai" name="dt[jam_selesai]">

              </div>
              <div class="form-group col-md-12">

                <label for="form-pendahuluan">Pendahuluan</label>

                <textarea id="summernote_1" name="dt[pendahuluan]" class="form-control"></textarea>

              </div>
              <div class="form-group col-md-12">

                <label for="form-review">Review</label>

                <textarea id="summernote_2" name="dt[review]" class="form-control"></textarea>

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
                      <th>
                      </th>
                    </tr>
                    <tr>
                      <td>
                        <textarea class="form-control" name="permasalahan[]" rows="1"></textarea>
                      </td>
                      <td>
                        <textarea class="form-control" name="tindakan[]" rows="1"></textarea>
                      </td>
                      <td>
                        <textarea class="form-control" name="pic[]" rows="1"></textarea>
                      </td>
                      <td>
                        <textarea class="form-control" name="status[]" rows="1"></textarea>
                      </td>
                      <td style="width:5%;">
                        <button type="button" name="addinvoice" id="addinvoice" class="btn btn-primary pull-right"><i class="fa fa-plus"></i></button>
                      </td>
                    </tr>
                  </table>
                </div>
              </div>
              <div class="form-group col-md-12">

                <label for="form-materi_tambahan">Materi Tambahan</label>

                <textarea id="summernote_3" name="dt[materi_tambahan]" class="form-control"></textarea>

              </div>
              <div class="form-group col-md-12">

                <label for="form-materi_kesehatan">Materi Kesehatan</label>

                <textarea id="summernote_4" name="dt[materi_kesehatan]" class="form-control"></textarea>

              </div>
              <div class="form-group col-md-12">

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
  $(document).ready(function() {
    $('#summernote_1').summernote();
    $('#summernote_2').summernote();
    $('#summernote_3').summernote();
    $('#summernote_4').summernote();
    var i = 1;
    $('#addinvoice').click(function() {
      i++;
      $('#dynamic_fieldinvoice').append('<tr id="rowinvoice' + i + '">' +
        '<td>' +
        '<textarea class="form-control" name="permasalahan[]" rows="1"></textarea>' +
        '</td>' +
        '<td>' +
        '<textarea class="form-control" name="tindakan[]" rows="1"></textarea>' +
        '</td>' +
        '<td>' +
        '<textarea class="form-control" name="pic[]" rows="1"></textarea>' +
        '</td>' +
        '<td>' +
        '<textarea class="form-control" name="status[]" rows="1"></textarea>' +
        '</td>' +
        '<td><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove pull-right"><i class="fa fa-trash"></i></button></td>' +
        '</tr>');
      $('.select2').select2();

    });

    $(document).on('click', '.btn_remove', function() {
      var button_id = $(this).attr("id");
      $('#rowinvoice' + button_id + '').remove();
    });

  });

  function get_jadwal(id_jadwal) {
    console.log(id_jadwal)
    if (id_jadwal) {
      $.ajax({
        url: "<?= base_url() ?>ajax/get_jadwal/" + id_jadwal,
        type: "GET",
        dataType: "json",
        success: function(data) {
          if (!$.trim(data)) {
            $("#pimpinan").val('');
            $("#lokasi").val('');
          } else {
            $.each(data, function(key, value) {
              $("#pimpinan").val(value.nama_pegawai);
              $("#lokasi").val(value.lokasi);
            });
          }
        }
      });
    } else {
      $("#pimpinan").val('');
      $("#lokasi").val('');
    }
  }
  $("#jadwal").change(function() {
    get_jadwal($("#jadwal").val());
  });

  get_jadwal($("#jadwal").val());

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

            window.location.href = "<?= base_url('master/Hasil_rapat') ?>";

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