<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="<?php echo base_url(); ?>assets/images/logo.png" rel="icon">
  <title>Admin - Absensi SMAN 1 Saradan</title>
  <link href="<?php echo base_url(); ?>assets/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url(); ?>assets/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url(); ?>assets/admin/css/ruang-admin.min.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.13.1/b-2.3.3/b-colvis-2.3.3/b-html5-2.3.3/b-print-2.3.3/datatables.min.css"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('Titik1'); ?>">
        <div class="sidebar-brand-icon">
          <img src="<?php echo base_url(); ?>assets/images/logo.png">
        </div>
        <div class="sidebar-brand-text mx-3">Admin Dashboard</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('Dashboard'); ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Home</span></a>
      </li>
      <hr class="sidebar-divider">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('Siswa'); ?>">
          <i class="fas fa-fw fa-users"></i>
          <span>Semua Siswa</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
          aria-expanded="true" aria-controls="collapseBootstrap">
          <i class="far fa-fw fa-window-maximize"></i>
          <span>Data Kelas X</span>
        </a>
        <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Kelas X</h6>
            <a class="collapse-item" href="<?php echo base_url('Siswa/kelas_10_a'); ?>">Kelas X A</a>
            <a class="collapse-item" href="<?php echo base_url('Siswa/kelas_10_b'); ?>">Kelas X B</a>
            <a class="collapse-item" href="<?php echo base_url('Siswa/kelas_10_c'); ?>">Kelas X C</a>
            <a class="collapse-item" href="<?php echo base_url('Siswa/kelas_10_d'); ?>">Kelas X D</a>
            <a class="collapse-item" href="<?php echo base_url('Siswa/kelas_10_e'); ?>">Kelas X E</a>
            <a class="collapse-item" href="<?php echo base_url('Siswa/kelas_10_f'); ?>">Kelas X F</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
          aria-expanded="true" aria-controls="collapseBootstrap">
          <i class="far fa-fw fa-window-maximize"></i>
          <span>Data Kelas XI</span>
        </a>
        <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Kelas XI MIPA</h6>
            <a class="collapse-item" href="<?php echo base_url('Siswa/mipa_1'); ?>">Kelas XI MIPA 1</a>
            <a class="collapse-item" href="<?php echo base_url('Siswa/mipa_2'); ?>">Kelas XI MIPA 2</a>
            <a class="collapse-item" href="<?php echo base_url('Siswa/mipa_3'); ?>">Kelas XI MIPA 3</a>
            <a class="collapse-item" href="<?php echo base_url('Siswa/mipa_4'); ?>">Kelas XI MIPA 4</a>
          </div>
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Kelas XI IPS</h6>
            <a class="collapse-item" href="<?php echo base_url('Siswa/ips_1'); ?>">Kelas XI IPS 1</a>
            <a class="collapse-item" href="<?php echo base_url('Siswa/ips_2'); ?>">Kelas XI IPS 2</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>Laporan Data</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-comments"></i>
          <span>Kritik & Saran</span>
        </a>
      </li>
      <hr class="sidebar-divider">
      <div class="version" id="version-ruangadmin"></div>
    </ul>