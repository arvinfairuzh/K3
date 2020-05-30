<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">

  <!-- Content Header (Page header) -->

  <section class="content-header">

    <h1>

      Master Jadwal Rapat

      <small>Edit</small>

    </h1>

    <ol class="breadcrumb">

      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>

      <li><a href="#">Master</a></li>

      <li class="#">Master Jadwal Rapat</li>

      <li class="active">Edit</li>

    </ol>

  </section>

  <!-- Main content -->

  <section class="content">

    <form method="POST" action="<?= base_url('master/Master_jadwal_rapat/update') ?>" id="upload-create" enctype="multipart/form-data">

      <input type="hidden" name="id" value="<?= $master_jadwal_rapat['id'] ?>">





      <div class="row">

        <div class="col-xs-12">

          <div class="box">

            <!-- /.box-header -->

            <div class="box-header">

              <h5 class="box-title">

                Edit Master Jadwal Rapat

              </h5>

            </div>

            <div class="box-body">

              <div class="show_error"></div>
              <div class="form-group">

                <label for="form-nama">Nama</label>

                <input type="text" class="form-control" id="form-nama" placeholder="Masukan Nama" name="dt[nama]" value="<?= $master_jadwal_rapat['nama'] ?>">

              </div>
              <div class="form-group">

                <label for="form-tanggal">Tanggal</label>

                <input type="text" class="form-control" id="form-tanggal" placeholder="Masukan Tanggal" name="dt[tanggal]" value="<?= $master_jadwal_rapat['tanggal'] ?>">

              </div>
              <div class="form-group">

                <label for="form-jam_mulai">Jam Mulai</label>

                <input type="text" class="form-control" id="form-jam_mulai" placeholder="Masukan Jam Mulai" name="dt[jam_mulai]" value="<?= $master_jadwal_rapat['jam_mulai'] ?>">

              </div>
              <div class="form-group">

                <label for="form-jam_selesai">Jam Selesai</label>

                <input type="text" class="form-control" id="form-jam_selesai" placeholder="Masukan Jam Selesai" name="dt[jam_selesai]" value="<?= $master_jadwal_rapat['jam_selesai'] ?>">

              </div>
              <div class="form-group">

                <label for="form-lokasi">Lokasi</label>

                <input type="text" class="form-control" id="form-lokasi" placeholder="Masukan Lokasi" name="dt[lokasi]" value="<?= $master_jadwal_rapat['lokasi'] ?>">

              </div>
              <div class="form-group">
                <label for="form-id_ketua">General Manager</label>
                <select style='width:100%' name="dt[id_ketua]" class="form-control select2">
                  <?php
                  $pegawai = $this->mymodel->selectWhere('pegawai', array('status' => 'ENABLE', 'id_role' => 2));
                  foreach ($pegawai as $pegawai_record) {
                    $text = "";
                    if ($pegawai_record['id'] == $master_jadwal_rapat['id_ketua']) {
                      $text = "selected";
                    }
                    $master_kompartemen = $this->mymodel->SelectDataOne('master_kompartemen', array('status' => 'ENABLE', 'id' => $pegawai_record['id_kompartemen']));
                    echo "<option value=" . $pegawai_record['id'] . " " . $text . " >" . $pegawai_record['nama'] . ' - GM ' . $master_kompartemen['nama'] . "</option>";
                  }
                  ?>
                </select>
              </div><?php

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

            window.location.href = "<?= base_url('master/Master_jadwal_rapat') ?>";

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