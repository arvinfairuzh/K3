<!-- Content Wrapper. Contains page content -->

<style>
  #hidden_div_1,
  #hidden_div_2,
  #hidden_div_3,
  #hidden_div_4,
  #hidden_div_5 {
    display: none;
  }
</style>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Pegawai
      <small>Tambah</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Master</a></li>
      <li class="#">Pegawai</li>
      <li class="active">Tambah</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
    <form method="POST" action="<?= base_url('master/Pegawai/store') ?>" id="upload-create" enctype="multipart/form-data">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-header">
              <h5 class="box-title">
                Tambah Pegawai
              </h5>
            </div>
            <div class="box-body">
              <div class="show_error"></div>
              <div class="form-group">
                <label for="form-nip">NIK</label>
                <input type="text" class="form-control" id="form-nip" placeholder="Masukan NIK" name="dt[nip]">
              </div>
              <div class="form-group">
                <label for="form-nama">Nama</label>
                <input type="text" class="form-control" id="form-nama" placeholder="Masukan Nama" name="dt[nama]">
              </div>
              <div class="form-group">
                <label for="form-id_role">Role</label>
                <select style='width:100%' id="role" name="dt[id_role]" class="form-control select2">
                  <?php
                  $role = $this->mymodel->selectWhere('role', null);
                  foreach ($role as $role_record) {
                    echo "<option value=" . $role_record['id'] . ">" . $role_record['role'] . "</option>";
                  }
                  ?>
                </select>

              </div>
              <div class="form-group" id="hidden_div_1">

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
              <div class="form-group" id="hidden_div_2">

                <label for="form-id_kompartemen">Kompartemen</label>
                <select style='width:100%' id="kompartemen" name="dt[id_kompartemen]" class="form-control select2">
                  <?php
                  $master_kompartemen = $this->mymodel->selectWhere('master_kompartemen', null);
                  foreach ($master_kompartemen as $master_kompartemen_record) {
                    echo "<option value=" . $master_kompartemen_record['id'] . ">" . $master_kompartemen_record['nama'] . "</option>";
                  }
                  ?>
                </select>

              </div>
              <div class="form-group" id="hidden_div_3">

                <label for="form-id_departemen">Departemen</label>
                <select style='width:100%' id="departemen" name="dt[id_departemen]" class="form-control select2">
                  <?php
                  $master_departemen = $this->mymodel->selectWhere('master_departemen', null);
                  foreach ($master_departemen as $master_departemen_record) {
                    echo "<option value=" . $master_departemen_record['id'] . ">" . $master_departemen_record['nama'] . "</option>";
                  }
                  ?>
                </select>

              </div>
              <div class="form-group" id="hidden_div_4">

                <label for="form-id_bagian">Bagian</label>
                <select style='width:100%' id="bagian" name="dt[id_bagian]" class="form-control select2">
                  <?php
                  $master_bagian = $this->mymodel->selectWhere('master_bagian', null);
                  foreach ($master_bagian as $master_bagian_record) {
                    echo "<option value=" . $master_bagian_record['id'] . ">" . $master_bagian_record['nama'] . "</option>";
                  }
                  ?>
                </select>

              </div>
              <div class="form-group" id="hidden_div_5">

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
  function showDiv(value) {
    if (value == 0) {
      document.getElementById('hidden_div_1').style.display = 'none';
      document.getElementById('hidden_div_2').style.display = 'none';
      document.getElementById('hidden_div_3').style.display = 'none';
      document.getElementById('hidden_div_4').style.display = 'none';
      document.getElementById('hidden_div_5').style.display = 'none';
    } else if (value == 2) {
      document.getElementById('hidden_div_1').style.display = 'none';
      document.getElementById('hidden_div_2').style.display = 'block';
      document.getElementById('hidden_div_3').style.display = 'none';
      document.getElementById('hidden_div_4').style.display = 'none';
      document.getElementById('hidden_div_5').style.display = 'block';
    } else if (value == 4) {
      document.getElementById('hidden_div_1').style.display = 'none';
      document.getElementById('hidden_div_2').style.display = 'block';
      document.getElementById('hidden_div_3').style.display = 'block';
      document.getElementById('hidden_div_4').style.display = 'none';
      document.getElementById('hidden_div_5').style.display = 'block';
    } else if (value == 3) {
      document.getElementById('hidden_div_1').style.display = 'none';
      document.getElementById('hidden_div_2').style.display = 'block';
      document.getElementById('hidden_div_3').style.display = 'block';
      document.getElementById('hidden_div_4').style.display = 'block';
      document.getElementById('hidden_div_5').style.display = 'block';
    } else {
      document.getElementById('hidden_div_1').style.display = 'block';
      document.getElementById('hidden_div_2').style.display = 'block';
      document.getElementById('hidden_div_3').style.display = 'block';
      document.getElementById('hidden_div_4').style.display = 'block';
      document.getElementById('hidden_div_5').style.display = 'block';
    }
  }

  $("#role").change(function() {
    showDiv($("#role").val());
  });

  showDiv($("#role").val());

  function get_departemen(id_kompartemen) {
    if (id_kompartemen) {
      $.ajax({
        url: "<?= base_url() ?>ajax/get_departemen/" + id_kompartemen,
        type: "GET",
        dataType: "json",
        success: function(data) {
          $("#departemen").empty();
          if (!$.trim(data)) {
            $("#departemen").append('<option value="">Data Tidak Ditemukan</option>');
          } else {
            $.each(data, function(key, value) {
              $("#departemen").append('<option value="' +
                value.id + '">' + value.nama +
                '</option>');
            });
          }
          get_bagian($("#departemen").val());
        }
      });
    } else {
      $("#departemen").empty();
      $("#departemen").append('<option value="">-Mohon Pilih pic Terlebih Dahulu-</option>');
    }
  }

  function get_bagian(id_departemen) {
    if (id_departemen) {
      $.ajax({
        url: "<?= base_url() ?>ajax/get_bagian/" + id_departemen,
        type: "GET",
        dataType: "json",
        success: function(data) {
          $("#bagian").empty();
          if (!$.trim(data)) {
            $("#bagian").append('<option value="">Data Tidak Ditemukan</option>');
          } else {
            $.each(data, function(key, value) {
              $("#bagian").append('<option value="' +
                value.id + '">' + value.nama +
                '</option>');
            });
          }
        }
      });
    } else {
      $("#bagian").empty();
      $("#bagian").append('<option value="">-Mohon Pilih pic Terlebih Dahulu-</option>');
    }
  }

  $("#kompartemen").change(function() {
    get_departemen($("#kompartemen").val());
    get_bagian($("#departemen").val());
  });
  $("#departemen").change(function() {
    get_bagian($("#departemen").val());
  });

  get_departemen($("#kompartemen").val());
  get_bagian($("#departemen").val());

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