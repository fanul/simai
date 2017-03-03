<?php include "include-header.php" ?>

<!-- page container -->
<div class="dev-page-container">

    <?php include "include-menu.php" ?>

    <!-- page content -->
    <div class="dev-page-content">                    
        <!-- page content container -->
        <div class="container">

            <!-- page title -->
            <div class="page-title">
                <h1>Statistik</h1>
                <p>Contoh Diagram</p>

                <ul class="breadcrumb">
                    <li><a href="#">Analisa Audit</a></li>                                
                    <li>Analisa Temuan</li>
                </ul>
            </div>                        
            <!-- ./page title -->                                                

            <!-- nvd3 charts -->
            <div class="wrapper wrapper-white">

                        <!-- panel tree -->
            <div class="panel panel-default panel-collapsed">
                <div class="panel-heading">
                    <h3 class="panel-title">Statistik Kelompok Temuan Dalam Rentang Waktu Tertentu</h3>
                    <ul class="panel-btn">      
                        <li>
                            <a href="#" class="btn btn-danger panel-collapse"><i class="fa fa-angle-up"></i></a>
                        </li>                                                
                    </ul>
                </div>
                <div class="panel-body">

                    <div class="col-md-6">
                        <form class="form-group">

                            <div class="row">
                                <div class="col-md-3">
                                    <label>Tanggal Mulai</label>
                                    <input type="text" class="form-control datepicker"/>
                                </div>
                                <div class="col-md-3">
                                    <label>Tanggal Akhir</label>
                                    <input type="text" class="form-control datepicker"/>
                                </div>

                                <br><br>
                            </div>

                            <div class="row">
                                <label>Pilih <span>Kriteria Khusus</span></label>
                                <select class="form-control selectpicker" data-live-search="true">
                                    <option value="1">Tidak Ada Kriteria</option>
                                    <option value="2">Belum ditindak lanjuti sama sekali</option>
                                </select>
                                <br><br>
                                <label>Pilih <span>Status Audit</span></label>
                                <select class="form-control selectpicker" data-live-search="true">
                                    <option value="1">Semua</option>
                                    <option value="2">Proses</option>
                                    <option value="3">Tuntas Saat Closing</option>
                                    <option value="4">Tuntas Saat Penyusunan Laporan</option>
                                    <option value="4">Atensi Direktur Utama</option>
                                </select>
                                <br><br>
                                <label>Pilih <span>Jenis Temuan</span></label>
                                <select class="form-control selectpicker" data-live-search="true">
                                    <option value="1">Semua</option>
                                    <option value="2">Tem-2016-0001-Percetakan Kartu</option>
                                    <option value="3">Tem-2016-0002-Percetakan Sertifikat</option>
                                </select>
                                <br><br>
                                <label>Pilih <span>Auditee</span></label>
                                <select class="form-control selectpicker" data-live-search="true">
                                    <option value="0">Semua</option>
                                    <option value="1">908 - Kanwil Sulawesi Maluku</option>
                                    <option value="2">3 - Group Kanwil DKI Jakarta</option>
                                    <option value="3">J02x - Group Kacab Jakarta Grogol</option>
                                    <option value="4">J02 - Jakarta Grogol</option>
                                </select>
                            </div>
                        </form>
                        <button class="btn btn-primary">Tampilkan Statistik</button><br>
                    </div>

                </div>                                        
            </div>

            <!-- ./panel tree -->

                <div class="page-subtitle page-subtitle-centralized">
                    <!-- <h3>Kelompok Temuan Dalam Rentang Waktu</h3> -->
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div id="nvd3-line" class="chart-holder">
                            <svg></svg>
                        </div>
                    </div>
                </div>
            </div>

            <div class="wrapper wrapper-white">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-subtitle">
                            <h3>Komposisi Temuan Audit</h3>
                        </div>
                        <div id="nvd3-donut" class="chart-holder">
                            <svg></svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ./nvd3 charts -->


            <!-- tes chart lain -->
            <div class="wrapper">
                <div class="page-subtitle">
                    <h3>NVD3 Bar Chart</h3>
                    <p>This is sample of bar chart in nvd3 plugin.</p>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div id="chartContainer" class="chart-holder">
                        </div>                                
                    </div>
                </div>
                <!-- ./tes chart lain -->

                <!-- Copyright -->
                <?php include "include-copyright.php" ?>
                <!-- ./Copyright -->

                <?php include "include-footer.php"?>

