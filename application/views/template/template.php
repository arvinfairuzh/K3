<?php

if ($this->session->userdata('session_sop') == "") {
  redirect('login/');
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= TITLE_APPLICATION  ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?= base_url('assets/') ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Select 2 -->

  <link rel="stylesheet" href="<?= base_url('assets/') ?>bower_components/select2/dist/css/select2.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets/') ?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= base_url('assets/') ?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- Material Icons -->
  <link rel="stylesheet" href="<?= base_url('assets/') ?>fonts/material-icons/css/materialdesignicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url('assets/') ?>bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

  <link rel="stylesheet" href="<?= base_url('assets/') ?>dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?= base_url('assets/') ?>dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <!-- <link rel="stylesheet" href="<?= base_url('assets/') ?>bower_components/morris.js/morris.css"> -->
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?= base_url('assets/') ?>bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?= base_url('assets/') ?>bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?= base_url('assets/') ?>bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <link href="<?= FAVICON ?>" rel=icon type=image/png> <link rel="stylesheet" href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome-font-awesome.min.css">

  <style type="text/css">
    @import url('https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700|Poppins:300,400,500,600,700|Raleway:300,400,500,600,700');

    body {
      font-family: Montserrat;
    }
  </style>

  <!-- <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet"> -->
  <link rel="stylesheet" href="<?= base_url('assets/') ?>dist/css/main.css">

  <!-- jQuery 3 -->
  <script src="<?= base_url('assets/') ?>bower_components/jquery/dist/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <!-- <script src="<?= base_url('assets/') ?>bower_components/jquery-ui/jquery-ui.min.js"></script> -->
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <!-- DataTables -->
  <script src="<?= base_url('assets/') ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="<?= base_url('assets/') ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script type="text/javascript">
    $.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings) {
      return {
        "iStart": oSettings._iDisplayStart,
        "iEnd": oSettings.fnDisplayEnd(),
        "iLength": oSettings._iDisplayLength,
        "iTotal": oSettings.fnRecordsTotal(),
        "iFilteredTotal": oSettings.fnRecordsDisplay(),
        "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
        "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
      };
    };

    function idleLogout() {
      var t;
      window.onload = resetTimer;
      window.onmousemove = resetTimer;
      window.onmousedown = resetTimer; // catches touchscreen presses
      window.onclick = resetTimer; // catches touchpad clicks
      window.onscroll = resetTimer; // catches scrolling with arrow keys
      window.onkeypress = resetTimer;

      function logout() {
        window.location.href = '<?= base_url('login/lockscreen?user=' . $this->session->userdata('nip')) ?>';
      }

      function resetTimer() {
        clearTimeout(t);
        t = setTimeout(logout, 900000); // time is in milliseconds //60000 = 1 minutes
      }
    }

    idleLogout();
  </script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script> -->
  <!-- Google Font -->
  <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"> -->

  <style>
    .ui-autocomplete {
      z-index: 2147483647;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    h7,
    p,
    span,
    body {
      font-family: Poppins-Regular, sans-serif !important;
    }
  </style>


  <style type="text/css">
    ::-webkit-scrollbar-track {
      background-color: #1a1b1d;
    }

    ::-webkit-scrollbar {
      width: 5px;
      background-color: #1a1b1d;
    }

    ::-webkit-scrollbar-thumb {
      background-color: #36b554;
    }
  </style>

</head>

<body class="hold-transition <?= SKIN  ?> sidebar-mini fixed" onload="startTime()">
  <?php //print_r($this->session->all_userdata())
  ?>
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="<?= base_url() ?>" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><?= APPLICATION_SMALL  ?> </span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><?= APPLICATION  ?> </span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <li class="dropdown messages-menu">
              <?php
              if ($_SESSION['role_id'] == 1) {
                $status_bulanan = ' AND status_bulanan = 1';
              } else if ($_SESSION['role_id'] == 3) {
                $status_bulanan = ' AND status_bulanan = 0 OR status_bulanan = 2';
              } else {
                $status_bulanan = ' AND status_bulanan = 3';
              }

              $qry = '';
              if (!$_SESSION['role_id'] == 0) {
                $departemen = $_SESSION['id_departemen'];
                $bagian = $_SESSION['id_bagian'];
                $qry = " AND form_laporan_bulanan.departemen = '$departemen' AND form_laporan_bulanan.bagian = '$bagian'";
              }

              $notification = $this->mymodel->selectWithQuery("SELECT form_laporan_bulanan.id,lokasi,master_departemen.nama as departemen,
              master_bagian.nama as bagian,tanggal,value,kabag.nama as id_kabag,
              form_laporan_bulanan.status_bulanan,sr.nama as created_by, master_status_bulanan.nama as nama_status
              FROM form_laporan_bulanan
              LEFT JOIN master_departemen on form_laporan_bulanan.departemen = master_departemen.id
              LEFT JOIN master_bagian on form_laporan_bulanan.bagian = master_bagian.id
              LEFT JOIN pegawai sr on form_laporan_bulanan.created_by = sr.id
              LEFT JOIN pegawai kabag on form_laporan_bulanan.id_kabag = kabag.id
              LEFT JOIN master_status_bulanan on form_laporan_bulanan.status_bulanan = master_status_bulanan.id
              WHERE form_laporan_bulanan.status = 'ENABLE' $qry $status_bulanan");

              if ($_SESSION['role_id'] == 1) {
                $countnotif = count($notification);
              } else if ($_SESSION['role_id'] == 3) {
                $countnotif = count($notification);
              } else {
                $countnotif = 0;
              }
              ?>
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                <i class="fa fa-refresh"></i>
                <span class="label label-danger"> <?= $countnotif ?></span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">Anda Memiliki <?= $countnotif ?> Pemberitahuan Laporan Bulanan</li>
                <li style="padding-top:15px;">

                  <!-- inner menu: contains the actual data -->
                  <ul class="menu">
                    <?php
                    foreach ($notification as $notif) {
                      $date = date_create($notif['tanggal']);
                      $date = date_format($date, "d M Y h:i:s");
                    ?>
                      <a class="notifikasi" href="<?= base_url('master/form_laporan_bulanan/detail/' . $notif['id']) ?>" style="color: black;">

                        <li>
                          <!-- start message -->
                          <div class="col-md-12">
                            <i class="fa fa-clock-o"></i><?= $date ?><br>
                            Laporan Bulanan Nomor <?= $notif['id'] ?> <br>
                            (<?= $notif['nama_status'] ?>)
                            <hr style="padding:5px;margin:5px;">
                          </div>
                        </li>
                      </a>
                    <?php
                    }
                    ?>
                  </ul>
                </li>
                <!-- <li class="footer"><a href="#">See All Messages</a></li> -->
              </ul>
            </li>
            <li class="dropdown messages-menu">
              <?php
              if ($_SESSION['role_id'] == 2) {
                $status_sidang = ' AND status_sidang = 0';
              } else if ($_SESSION['role_id'] == 3) {
                $status_sidang = ' AND status_sidang = 1';
              } else {
                $status_sidang = ' AND status_sidang = 2';
              }

              $kompartemen = '';
              if (!$_SESSION['role_id'] == 0) {
                $kompartemen = $_SESSION['id_kompartemen'];
                $kompartemen = "AND ketua.id_kompartemen = '$kompartemen'";
              }

              $notification = $this->mymodel->selectWithQuery("SELECT hasil_rapat.id,master_jadwal_rapat.nama as id_jadwal,hasil_rapat.pimpinan_sidang,hasil_rapat.tanggal,hasil_rapat.jam_mulai,hasil_rapat.jam_selesai,hasil_rapat.lokasi,pendahuluan,review,tindak_lanjut,materi_tambahan,materi_kesehatan,pegawai.nama as id_notulis,hasil_rapat.status_sidang, master_status_sidang.nama as nama_status
              FROM hasil_rapat
              LEFT JOIN master_jadwal_rapat on hasil_rapat.id_jadwal = master_jadwal_rapat.id
              LEFT JOIN pegawai on hasil_rapat.id_notulis = pegawai.id
              LEFT JOIN master_status_sidang on hasil_rapat.status_sidang = master_status_sidang.id
              LEFT JOIN pegawai ketua on master_jadwal_rapat.id_ketua = ketua.id
              WHERE hasil_rapat.status = 'ENABLE' $kompartemen $status_sidang");

              if ($_SESSION['role_id'] == 2) {
                $countnotif = count($notification);
              } else if ($_SESSION['role_id'] == 3) {
                $countnotif = count($notification);
              } else {
                $countnotif = 0;
              }
              ?>
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                <i class="fa fa-archive"></i>
                <span class="label label-danger"> <?= $countnotif ?></span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">Anda Memiliki <?= $countnotif ?> Pemberitahuan Notulensi Sidang</li>
                <li style="padding-top:15px;">

                  <!-- inner menu: contains the actual data -->
                  <ul class="menu">
                    <?php
                    foreach ($notification as $notif) {
                      $date = date_create($notif['tanggal']);
                      $date = date_format($date, "d M Y h:i:s");
                    ?>
                      <a class="notifikasi" href="<?= base_url('master/form_laporan_bulanan/detail/' . $notif['id']) ?>" style="color: black;">

                        <li>
                          <!-- start message -->
                          <div class="col-md-12">
                            <i class="fa fa-clock-o"></i><?= $date ?><br>
                            Laporan Notulensi Sidang Nomor <?= $notif['id'] ?> <br>
                            (<?= $notif['nama_status'] ?>)
                            <hr style="padding:5px;margin:5px;">
                          </div>
                        </li>
                      </a>
                    <?php
                    }
                    ?>
                  </ul>
                </li>
                <!-- <li class="footer"><a href="#">See All Messages</a></li> -->
              </ul>
            </li>
            <li class="dropdown messages-menu">
              <?php
              if ($_SESSION['role_id'] == 1) {
                $status_kecelakaan = ' AND status_kecelakaan = 1';
              } else if ($_SESSION['role_id'] == 3) {
                if ($_SESSION['id_bagian'] != 16) {
                  $status_kecelakaan = ' AND (status_kecelakaan = 0 OR status_kecelakaan = 5 OR status_kecelakaan = 7)';
                } else {
                  $status_kecelakaan = ' AND (status_kecelakaan = 3 OR status_kecelakaan = 8)';
                }
              } else if ($_SESSION['role_id'] == 6) {
                $status_kecelakaan = ' AND (status_kecelakaan = 2 OR status_kecelakaan = 4 OR status_kecelakaan = 6 OR status_kecelakaan = 9)';
              } else {
                $status_kecelakaan = ' AND status_kecelakaan = 10';
              }

              $qry = '';
              $departemen = $_SESSION['id_departemen'];
              $bagian = $_SESSION['id_bagian'];
              if ($_SESSION['role_id'] == 1) {
                $qry = " AND penderita.id_departemen = '$departemen' AND penderita.id_bagian = '$bagian'";
              } else if ($_SESSION['role_id'] == 3) {
                if ($bagian == 16) {
                  $qry = " ";
                } else {
                  $qry = " AND kabag.id_departemen = '$departemen' AND kabag.id_bagian = '$bagian'";
                }
              } else if ($_SESSION['role_id'] == 5) {
                $qry = " AND penderita.id_departemen = '$departemen'";
              } else if ($_SESSION['role_id'] == 6) {
                $qry = " ";
              }

              $notification = $this->mymodel->selectWithQuery("SELECT kecelakaan_main.id, kecelakaan_main.ip_nama, kecelakaan_main.ip_nomor_induk, kecelakaan_main.ip_dep_birobid, 
              kecelakaan_main.ip_bagian_seksi, se.nama as nama_se, kabag.nama as nama_kabag, k3.nama as nama_k3, 
              penderita.nama as nama_penderita, kecelakaan_main.status_kecelakaan, 
              master_status_kecelakaan.nama as nama_status, kecelakaan_detail_internal.kk_tanggal_jam as tanggal
              FROM kecelakaan_main
              LEFT JOIN kecelakaan_detail_internal on kecelakaan_main.id = kecelakaan_detail_internal.id_kecelakaan
              LEFT JOIN pegawai se on kecelakaan_main.id_se = se.id
              LEFT JOIN pegawai kabag on kecelakaan_main.id_kabag = kabag.id
              LEFT JOIN pegawai k3 on kecelakaan_main.id_k3 = k3.id
              LEFT JOIN pegawai penderita on kecelakaan_main.id_penderita = penderita.id
              LEFT JOIN master_status_kecelakaan on kecelakaan_main.status_kecelakaan = master_status_kecelakaan.id
              WHERE kecelakaan_detail_internal.status = 'ENABLE' $qry $status_kecelakaan");

              $notification2 = $this->mymodel->selectWithQuery("SELECT kecelakaan_main.id, kecelakaan_main.ip_nama, 
              kecelakaan_main.ip_nomor_induk, kecelakaan_main.ip_dep_birobid, kecelakaan_main.ip_bagian_seksi, 
              se.nama as nama_se, kabag.nama as nama_kabag, k3.nama as nama_k3, penderita.nama as nama_penderita, 
              kecelakaan_main.status_kecelakaan, master_status_kecelakaan.nama as nama_status , kecelakaan_detail_ekternal.kk_tanggal_jam as tanggal
              FROM kecelakaan_main 
              LEFT JOIN kecelakaan_detail_ekternal on kecelakaan_main.id = kecelakaan_detail_ekternal.id_kecelakaan 
              LEFT JOIN pegawai se on kecelakaan_main.id_se = se.id 
              LEFT JOIN pegawai kabag on kecelakaan_main.id_kabag = kabag.id 
              LEFT JOIN pegawai k3 on kecelakaan_main.id_k3 = k3.id 
              LEFT JOIN pegawai penderita on kecelakaan_main.id_penderita = penderita.id
              LEFT JOIN master_status_kecelakaan on kecelakaan_main.status_kecelakaan = master_status_kecelakaan.id 
              WHERE kecelakaan_detail_ekternal.status = 'ENABLE' $qry $status_kecelakaan");

              if ($_SESSION['role_id'] == 1) {
                $countnotif = count($notification) + count($notification2);
              } else if ($_SESSION['role_id'] == 3) {
                if ($_SESSION['id_bagian'] != 16) {
                  $status_kecelakaan = ' AND (status_kecelakaan = 0 OR status_kecelakaan = 5 OR status_kecelakaan = 7)';
                } else {
                  $status_kecelakaan = ' AND (status_kecelakaan = 0 OR status_kecelakaan = 5 OR status_kecelakaan = 7)';
                }
              } else if ($_SESSION['role_id'] == 6) {
                $status_kecelakaan = ' AND (status_kecelakaan = 0 OR status_kecelakaan = 5 OR status_kecelakaan = 7)';
              } else {
                $countnotif = 0;
              }
              ?>
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                <i class="fa fa-briefcase"></i>
                <span class="label label-danger"> <?= $countnotif ?></span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">Anda Memiliki <?= $countnotif ?> Pemberitahuan Laporan Kecelakaan</li>
                <li style="padding-top:15px;">

                  <!-- inner menu: contains the actual data -->
                  <ul class="menu">
                    <?php
                    foreach ($notification as $notif) {
                      $date = date_create($notif['tanggal']);
                      $date = date_format($date, "d M Y h:i:s");
                    ?>
                      <a class="notifikasi" href="<?= base_url('master/kecelakaan_detail_internal/detail/' . $notif['id']) ?>" style="color: black;">

                        <li>
                          <!-- start message -->
                          <div class="col-md-12">
                            <i class="fa fa-clock-o"></i><?= $date ?><br>
                            Laporan Kecelakaan Internal Nomor <?= $notif['id'] ?> <br>
                            (<?= $notif['nama_status'] ?>)
                            <hr style="padding:5px;margin:5px;">
                          </div>
                        </li>
                      </a>
                    <?php
                    }
                    ?>
                    <?php
                    foreach ($notification2 as $notif2) {
                      $date = date_create($notif2['tanggal']);
                      $date = date_format($date, "d M Y h:i:s");
                    ?>
                      <a class="notifikasi" href="<?= base_url('master/kecelakaan_detail_ekternal/detail/' . $notif2['id']) ?>" style="color: black;">

                        <li>
                          <!-- start message -->
                          <div class="col-md-12">
                            <i class="fa fa-clock-o"></i><?= $date ?><br>
                            Laporan Kecelakaan Eksternal Nomor <?= $notif2['id'] ?> <br>
                            (<?= $notif2['nama_status'] ?>)
                            <hr style="padding:5px;margin:5px;">
                          </div>
                        </li>
                      </a>
                    <?php
                    }
                    ?>
                  </ul>
                </li>
                <!-- <li class="footer"><a href="#">See All Messages</a></li> -->
              </ul>
            </li>
            <li class="dropdown user user-menu">
              <?php
              $id = $this->session->userdata('id');
              $file = $this->mymodel->selectDataone('file', array('table' => 'user', 'table_id' => $id));
              ?>
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <object data="<?= base_url('webfile/default.png') ?>" type="image/png" class="user-image" alt="User Image">
                  <img src="<?= base_url('webfile/default.png') ?>" class="user-image" alt="User Image">
                </object>
                <span class="hidden-xs"><?= $this->session->userdata('name'); ?></span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <object data="<?= base_url('webfile/default.png') ?>" type="image/png" style="width: 100px;">
                    <img src="<?= base_url('webfile/default.png') ?>" alt="example">
                  </object>

                  <p>
                    <?= $this->session->userdata('name'); ?> - <?php $role = $this->mymodel->selectWhere('role', array('id' => $this->session->userdata('role_id')));
                                                                echo $role[0]['role']; ?>
                  </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <!-- <div class="pull-left"> -->
                  <!-- <a href="<?= base_url('master/user/editUser/') . $this->template->sonEncode($this->session->userdata('id')); ?>" class="btn btn-default btn-flat"><i class="fa fa-user"></i> Profile</a> -->
                  <a href="<?= base_url('login/lockscreen?user=') . $this->session->userdata('nip'); ?>" class="btn btn-default btn-flat"><i class="fa fa-key"></i> Lockscreen</a>
                  <!-- </div> -->
                  <!-- <div class="pull-right"> -->
                  <a href="<?= base_url('login/logout') ?>" class="btn btn-default btn-flat"><i class="fa fa-sign-out"></i> Sign out</a>
                </li>
              </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->
            <!-- <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li> -->
          </ul>
        </div>
      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <form class="sidebar-form">
          <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search..." id="user-data-autocomplete">
            <span class="input-group-btn">
              <button type="button" name="search" id="search-btn" class="btn btn-flat">
                <i class="fa fa-search"></i>
              </button>
            </span>
          </div>
        </form>
        <!-- Sidebar user panel -->
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">MENU BUILD</li>

          <?php
          $role = $this->mymodel->selectDataone('role', ['id' => $this->session->userdata('role_id')]);
          $jsonmenu = json_decode($role['menu']);
          $this->db->order_by('urutan asc');
          $this->db->where_in('id', $jsonmenu);
          $menu = $this->mymodel->selectWhere('menu_master', ['parent' => 0, 'status' => 'ENABLE']);
          foreach ($menu as $m) {
            $this->db->where_in('id', $jsonmenu);
            $parent = $this->mymodel->selectWhere('menu_master', ['parent' => $m['id'], 'status' => 'ENABLE']);
            $this->db->order_by('urutan asc');
            if (count($parent) == 0) {
          ?>
              <li class="<?php if ($page_name == $m['name']) echo "active"; ?>">
                <a href="<?= base_url($m['link']) ?>">
                  <i class="<?= $m['icon'] ?>"></i> <span><?= $m['name'] ?></span>
                  <?php if ($m['notif'] != "") { ?>
                    <span class="pull-right-container">
                      <small class="label pull-right label-danger" id="<?= $m['notif'] ?>">0</small>
                    </span>
                  <?php } ?>
                </a>
              </li>
            <?php } else { ?>

              <li class="treeview <?php if ($page_name == $m['name']) echo "active"; ?>">
                <a href="#">
                  <i class="<?= $m['icon'] ?>"></i> <span><?= $m['name'] ?></span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <?php foreach ($parent as $p) { ?>
                    <li class="<?php if ($page_name == $p['name']) echo "active"; ?>">
                      <a href="<?= base_url($p['link']) ?>">
                        <i class="<?= $p['icon'] ?>"></i> <?= $p['name'] ?>
                        <?php if ($p['notif'] != "") { ?>
                          <span class="pull-right-container">
                            <small class="label pull-right label-danger" id="<?= $p['notif'] ?>">0</small>
                          </span>
                        <?php } ?>
                      </a>
                    </li>
                  <?php } ?>

                </ul>
              </li>
            <?php } ?>
          <?php } ?>





        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>

    <?= $contents ?>

    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <b>Version</b> <?= VERSION ?>
      </div>
      <strong>Copyright <?= COPYRIGHT ?>
    </footer>

    <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
  </div>
  <!-- ./wrapper -->

  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button);
  </script>
  <!-- Canvas JS -->
  <!-- <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script> -->
  <!-- Bootstrap 3.3.7 -->
  <script src="<?= base_url('assets/') ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- Morris.js charts -->
  <script src="<?= base_url('assets/') ?>bower_components/select2/dist/js/select2.full.min.js"></script>
  <script src="<?= base_url('assets/') ?>bower_components/raphael/raphael.min.js"></script>
  <!-- <script src="<?= base_url('assets/') ?>bower_components/morris.js/morris.min.js"></script> -->
  <!-- Sparkline -->
  <script src="<?= base_url('assets/') ?>bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
  <!-- jvectormap -->
  <script src="<?= base_url('assets/') ?>plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="<?= base_url('assets/') ?>plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="<?= base_url('assets/') ?>bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="<?= base_url('assets/') ?>bower_components/moment/min/moment.min.js"></script>
  <script src="<?= base_url('assets/') ?>bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
  <!-- datepicker -->
  <script src="<?= base_url('assets/') ?>bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
  <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
  <!-- Bootstrap WYSIHTML5 -->
  <script src="<?= base_url('assets/') ?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
  <!-- Slimscroll -->
  <script src="<?= base_url('assets/') ?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="<?= base_url('assets/') ?>bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url('assets/') ?>dist/js/adminlte.min.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <!-- <script src="<?= base_url('assets/') ?>dist/js/pages/dashboard.js"></script> -->
  <!-- AdminLTE for demo purposes -->
  <script src="<?= base_url('assets/') ?>dist/js/demo.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {

      $('#user-data-autocomplete').autocomplete({
        source: "<?php echo site_url('home/get_autocomplete'); ?>",

        select: function(event, ui) {
          // $('[name="title"]').val(ui.item.label); 
          // $('[name="description"]').val(ui.item.description); 
          window.location.href = "<?= base_url('master/user/editUser_redirect/') ?>" + ui.item.id;
        }
      });
    });

    var url = window.location;
    // for sidebar menu but not for treeview submenu
    $('ul.sidebar-menu a').filter(function() {
      return this.href == url;
    }).parent().siblings().removeClass('active').end().addClass('active');
    // for treeview which is like a submenu
    $('ul.treeview-menu a').filter(function() {
      return this.href == url;
    }).parentsUntil(".sidebar-menu > .treeview-menu").siblings().removeClass('active menu-open').end().addClass('active menu-open');
  </script>

  <script type="text/javascript">
    $('.select2').select2();

    $('.tgl').datepicker({
      autoclose: true,
      format: 'yyyy-mm-dd'
    });

    $(function() {
      $('.datatable').DataTable()
      $('#example2').DataTable({
        'paging': true,
        'lengthChange': false,
        'searching': false,
        'ordering': true,
        'info': true,
        'autoWidth': false
      })
    });

    function startTime() {
      var today = new Date();
      var hr = today.getHours();
      var min = today.getMinutes();
      var sec = today.getSeconds();
      ap = (hr < 12) ? "<span>AM</span>" : "<span>PM</span>";
      hr = (hr == 0) ? 12 : hr;
      hr = (hr > 12) ? hr - 12 : hr;
      //Add a zero in front of numbers<10
      hr = checkTime(hr);
      min = checkTime(min);
      sec = checkTime(sec);
      document.getElementById("clock").innerHTML = hr + ":" + min + ":" + sec + " " + ap;

      var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
      var days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
      var curWeekDay = days[today.getDay()];
      var curDay = today.getDate();
      var curMonth = months[today.getMonth()];
      var curYear = today.getFullYear();
      var date = curWeekDay + ", " + curDay + " " + curMonth + " " + curYear + " /";
      document.getElementById("date").innerHTML = date;

      var time = setTimeout(function() {
        startTime()
      }, 500);
    }

    function checkTime(i) {
      if (i < 10) {
        i = "0" + i;
      }
      return i;
    }

    /* Fungsi formatRupiah */
    function fungsiRupiah() {
      $(".rupiah").keyup(function() {
        $(this).val(formatRupiah(this.value, ''));
      });

      function formatRupiah(angka, prefix) {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
          split = number_string.split(','),
          sisa = split[0].length % 3,
          rupiah = split[0].substr(0, sisa),
          ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        // tambahkan titik jika yang di input sudah menjadi angka ribuan
        if (ribuan) {
          separator = sisa ? '.' : '';
          rupiah += separator + ribuan.join('.');
        }

        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? '' + rupiah : '');
      }
    }

    fungsiRupiah();

    function maskRupiah(angka) {
      var bilangan = angka;

      var reverse = bilangan.toString().split('').reverse().join(''),
        ribuan = reverse.match(/\d{1,3}/g);
      ribuan = ribuan.join('.').split('').reverse().join('');

      // Cetak hasil  
      return ribuan;
    }
  </script>

</body>

</html>