



 <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">

    <!-- Content Header (Page header) -->

    <section class="content-header">

      <h1>

        Kecelakaan Detail Internal

        <small>Data</small>

      </h1>

      <ol class="breadcrumb">

        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>

        <li><a href="#">Master</a></li>

        <li class="#">Kecelakaan Detail Internal</li>

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

                  <div class="pull-right">          <a href="<?= base_url('master/Kecelakaan_detail_internal/create') ?>">

                    <button type="button" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Tambah Data</button> 

                  </a>


                  <a href="<?= base_url('fitur/ekspor/kecelakaan_detail_internal') ?>" target="_blank">

                    <button type="button" class="btn btn-sm btn-warning"><i class="fa fa-file-excel-o"></i> Ekspor Data</button> 

                  </a>

                  <button type="button" class="btn btn-sm btn-info" onclick="$('#modal-impor').modal()"><i class="fa fa-file-excel-o"></i> Import Data</button>

                  </div>

                </div>  

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


  <div class="modal fade bd-example-modal-sm" tabindex="-1" kecelakaan_detail_internal="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="modal-delete">

      <div class="modal-dialog modal-sm">

          <div class="modal-content">

              <form id="upload-delete" action="<?= base_url('master/Kecelakaan_detail_internal/delete') ?>">

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

        <form action="<?= base_url('fitur/impor/kecelakaan_detail_internal') ?>" method="POST"  enctype="multipart/form-data">



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

            var table = '<table class="table table-bordered" id="mytable">'+

                   '     <thead>'+

                   '     <tr class="bg-success">'+

                   '       <th style="width:20px">No</th>'+'<th hidden>Id Kecelakaan</th>'+'<th>Kk Tanggal Jam</th>'+'<th>Kk Lokasi</th>'+'<th>Kk Penjelasan Kecelakaan</th>'+'<th>Kk Gambar Lokasi</th>'+'<th>Kk Bagian Tubuh Cedera</th>'+'<th>Tw Apkh 1</th>'+'<th>Tw Apkh 2</th>'+'<th>Tw Apkh 3</th>'+'<th>Tw Tidak Q1</th>'+'<th>Tw Tidak Q2</th>'+'<th>Tw Tidak Q3</th>'+'<th>Sp Apkh 1</th>'+'<th>Sp Ya 1</th>'+'<th>Sp Tidak 1</th>'+'<th>Sp Apkh 2</th>'+'<th>Sp Tidak 2</th>'+'<th>Pk  Apkh 1</th>'+'<th>Pk Tidak 1</th>'+'<th>Pk Apkh 2</th>'+'<th>Pk Tidak 2</th>'+'<th>Pk Apkh 3</th>'+'<th>Pk Tidak 3</th>'+'<th>Papd Apkh 1</th>'+'<th>Papd Ya 1</th>'+'<th>Papd Tidak 1</th>'+'<th>Papd Apd</th>'+'<th>Papd Apkh 2</th>'+'<th>Papd Tidak 2</th>'+'<th>Md Gambar 1</th>'+'<th>Md Fungsi Alat</th>'+'<th>Md Apkh 1</th>'+'<th>Md Ya 1</th>'+'<th>Md Apkh 2</th>'+'<th>Md Apkh 3</th>'+'<th>Md Tidak 3</th>'+'<th>Md Apkh 4</th>'+'<th>Md Tidak 4</th>'+'<th>Md Apkh 5</th>'+'<th>Md Ya 5</th>'+'<th>Snp Apkh 1</th>'+'<th>Snp Ya 1</th>'+'<th>Snp Tidak 1</th>'+'<th>Snp Adakah 1</th>'+'<th>Snp Apkh 2</th>'+'<th>Snp Tidak 2</th>'+'<th>Pttk Kondisi Lingkungan</th>'+'<th>Pttk Apkh 1</th>'+'<th>Pttk Kesimpulan</th>'+'       <th style="width:150px">Status</th>'+

                   '       <th style="width:150px"></th>'+

                   '     </tr>'+

                   '     </thead>'+

                   '     <tbody>'+

                   '     </tbody>'+

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

                ajax: {"url": "<?= base_url('master/Kecelakaan_detail_internal/json?status=') ?>"+status, "type": "POST"},

                columns: [

                    {"data": "id","orderable": false},{"data": "id_kecelakaan"},{"data": "kk_tanggal_jam"},{"data": "kk_lokasi"},{"data": "kk_penjelasan_kecelakaan"},{"data": "kk_gambar_lokasi"},{"data": "kk_bagian_tubuh_cedera"},{"data": "tw_apkh_1"},{"data": "tw_apkh_2"},{"data": "tw_apkh_3"},{"data": "tw_tidak_q1"},{"data": "tw_tidak_q2"},{"data": "tw_tidak_q3"},{"data": "sp_apkh_1"},{"data": "sp_ya_1"},{"data": "sp_tidak_1"},{"data": "sp_apkh_2"},{"data": "sp_tidak_2"},{"data": "pk__apkh_1"},{"data": "pk_tidak_1"},{"data": "pk_apkh_2"},{"data": "pk_tidak_2"},{"data": "pk_apkh_3"},{"data": "pk_tidak_3"},{"data": "papd_apkh_1"},{"data": "papd_ya_1"},{"data": "papd_tidak_1"},{"data": "papd_apd"},{"data": "papd_apkh_2"},{"data": "papd_tidak_2"},{"data": "md_gambar_1"},{"data": "md_fungsi_alat"},{"data": "md_apkh_1"},{"data": "md_ya_1"},{"data": "md_apkh_2"},{"data": "md_apkh_3"},{"data": "md_tidak_3"},{"data": "md_apkh_4"},{"data": "md_tidak_4"},{"data": "md_apkh_5"},{"data": "md_ya_5"},{"data": "snp_apkh_1"},{"data": "snp_ya_1"},{"data": "snp_tidak_1"},{"data": "snp_adakah_1"},{"data": "snp_apkh_2"},{"data": "snp_tidak_2"},{"data": "pttk_kondisi_lingkungan"},{"data": "pttk_apkh_1"},{"data": "pttk_kesimpulan"},

                   {"data": "status"},

                    {   "data": "view",

                        "orderable": false

                    }

                ],

                order: [[1, 'asc']],

                columnDefs : [

                    { targets : [50],

                        render : function (data, type, row, meta) {

                              if(row['status']=='ENABLE'){

                                var htmls = '<a href="<?= base_url('master/Kecelakaan_detail_internal/status/') ?>'+row['id']+'/DISABLE">'+

                                            '    <button type="button" class="btn btn-sm btn-sm btn-success"><i class="fa fa-home"></i> ENABLE</button>'+

                                            '</a>';

                              }else{

                                var htmls = '<a href="<?= base_url('master/Kecelakaan_detail_internal/status/') ?>'+row['id']+'/ENABLE">'+

                                            '    <button type="button" class="btn btn-sm btn-sm btn-danger"><i class="fa fa-home"></i> DISABLE</button>'+

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

            location.href = "<?= base_url('master/Kecelakaan_detail_internal/edit/') ?>"+id;

         }         function hapus(id) {

            $("#modal-delete").modal('show');

            $("#delete-input").val(id);

            

         }

         $("#upload-delete").submit(function(){

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

                beforeSend : function(){

                    $(".btn-send").addClass("disabled").html("<i class='la la-spinner la-spin'></i>  Processing...").attr('disabled',true);

                    $(".show_error").slideUp().html("");

                },

                success: function(response, textStatus, xhr) {

                   var str = response;

                    if (str.indexOf("success") != -1){

                        $(".show_error").hide().html(response).slideDown("fast");

                       

                        $(".btn-send").removeClass("disabled").html('Yes, Delete it').attr('disabled',false);

                    }else{

                         setTimeout(function(){ 

                           $("#modal-delete").modal('hide');

                        }, 1000);

                        $(".show_error").hide().html(response).slideDown("fast");

                        $(".btn-send").removeClass("disabled").html('Yes , Delete it').attr('disabled',false);

                        loadtable($("#select-status").val());

                    }

                },

                error: function(xhr, textStatus, errorThrown) {

            

                }

            });

            return false;

    

        });

  </script>