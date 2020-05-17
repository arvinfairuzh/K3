<form method="POST" action="<?= base_url('master/Pegawai/store') ?>" id="upload-create" enctype="multipart/form-data">

  <div class="show_error"></div>
  <div class="form-group">

    <label for="form-NIK">NIK</label>

    <input type="text" class="form-control" id="form-NIK" placeholder="Masukan NIK" name="dt[nip]">

  </div>
  <div class="form-group">

    <label for="form-nama">Nama</label>

    <input type="text" class="form-control" id="form-nama" placeholder="Masukan Nama" name="dt[nama]">

  </div>
  <div class="form-group">
    <label for="form-id_shift">Shift</label>
    <select style='width:100%' name="dt[id_shift]" class="form-control select2">
      <?php
      $master_shift = $this->mymodel->selectWhere('master_shift', null);
      foreach ($master_shift as $master_shift_record) {
        echo "<option value=" . $master_shift_record['id'] . ">" . $master_shift_record['nama'] . "</option>";
      }
      ?>
    </select>
  </div>
  <div class="form-group">
    <label for="form-id_departemen">Departemen</label>
    <select style='width:100%' name="dt[id_departemen]" class="form-control select2">
      <?php
      $master_departemen = $this->mymodel->selectWhere('master_departemen', null);
      foreach ($master_departemen as $master_departemen_record) {
        echo "<option value=" . $master_departemen_record['id'] . ">" . $master_departemen_record['nama'] . "</option>";
      }
      ?>
    </select>
  </div>
  <div class="form-group">
    <label for="form-id_bagian">Bagian</label>
    <select style='width:100%' name="dt[id_bagian]" class="form-control select2">
      <?php
      $master_bagian = $this->mymodel->selectWhere('master_bagian', null);
      foreach ($master_bagian as $master_bagian_record) {
        echo "<option value=" . $master_bagian_record['id'] . ">" . $master_bagian_record['nama'] . "</option>";
      }
      ?>
    </select>
  </div>
  <div class="form-group">
    <label for="form-id_kompartemen">Kompartemen</label>
    <select style='width:100%' name="dt[id_kompartemen]" class="form-control select2">
      <?php
      $master_kompartemen = $this->mymodel->selectWhere('master_kompartemen', null);
      foreach ($master_kompartemen as $master_kompartemen_record) {
        echo "<option value=" . $master_kompartemen_record['id'] . ">" . $master_kompartemen_record['nama'] . "</option>";
      }
      ?>
    </select>
  </div>
  <div class="form-group">
    <label for="form-id_jabatan">Jabatan</label>
    <select style='width:100%' name="dt[id_jabatan]" class="form-control select2">
      <?php
      $master_jabatan = $this->mymodel->selectWhere('master_jabatan', null);
      foreach ($master_jabatan as $master_jabatan_record) {
        echo "<option value=" . $master_jabatan_record['id'] . ">" . $master_jabatan_record['nama'] . "</option>";
      }
      ?>
    </select>
  </div>
  <div class="form-group">
    <label for="form-id_role">Hak Akses</label>
    <select style='width:100%' name="dt[id_role]" class="form-control select2">
      <?php
      $role = $this->mymodel->selectWhere('role', null);
      foreach ($role as $role_record) {
        echo "<option value=" . $role_record['id'] . ">" . $role_record['role'] . "</option>";
      }
      ?>
    </select>
  </div>
  <div class="form-group">

    <label for="form-file">Foto</label>

    <input type="file" class="form-control" id="form-file" placeholder="Masukan File" name="file">

  </div>
  <hr>


  <button type="submit" class="btn btn-primary btn-send"><i class="fa fa-save"></i> Save</button>

  <button type="reset" class="btn btn-danger"><i class="fa fa-refresh"></i> Reset</button>





</form>




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

            // window.location.href = "<?= base_url('master/Pegawai') ?>";
            $("#load-table").html('');
            loadtable($("#select-status").val());
            $("#modal-form").modal('hide');


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