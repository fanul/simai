<?php include "include-header.php" ?>

<!-- page container -->
<div class="dev-page-container">



    <!-- contoh menu -->                        
    <?php include "include-menu.php" ?>
    <!-- ./contoh menu -->        





    <!-- page content -->
    <div class="dev-page-content">                    
        <!-- page content container -->
        <div class="container">

            <!-- page title -->
            <div class="page-title">

                <ul class="breadcrumb">
                    <li><a href="#">Dashb oard</a></li>                                
                    <li>Setting SLA</li>
                </ul>



            </div>                        
            <!-- ./page title -->

            <!-- panel tree -->
            <div class="panel panel-default panel-collapsed">
                <div class="panel-heading">
                    <h3 class="panel-title">Setting SLA</h3>
                    <ul class="panel-btn">
                        <li><a href="#" class="btn btn-danger" onClick="dev_panel_fullscreen($(this).parents('.panel')); return false;"><i class="fa fa-compress"></i></a></li>
                        <li>
                            <a href="#" class="btn btn-danger panel-collapse"><i class="fa fa-angle-up"></i></a>
                        </li>                                                
                    </ul>
                </div>
                <div class="panel-body">

                    <div class="col-md-6">
                        <form class="form-group">
                        <!--
                            <div class="row">
                                <div class="col-md-3">
                                    <label>Tanggal Mulai</label>
                                    <input type="text" class="form-control datepicker"/>
                                </div>
                                <div class="col-md-3">
                                    <label>Tanggal Akhir</label>
                                    <input type="text" class="form-control datepicker"/>
                                </div>
                                <div class="col-md-6">
                                    <label>Jenis <span>Laporan</span></label>
                                    <select class="form-control selectpicker" data-live-search="true">
                                    <option value="1">Lengkap</option>
                                    <option value="2">Daftar</option>
                                </select>
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
                        -->
                            <div class="row">
                                 <div class="col-md-4">
                                    <label>SLA tenggang waktu </label>
                                    <input type="text" class="form-control" placeholder="Hari Kerja" value="14" />
                                </div>
                            </div>

                        </form>
                        <button class="btn btn-primary">Simpan</button><br>
                    </div>



                </div>                                        
            </div>

            <!-- ./panel tree -->

            <!-- Copyright -->
            <?php include "include-copyright.php" ?>
            <!-- ./Copyright -->

        </div>

    </div>
    <!-- ./page content container -->

</div>


<script type="text/javascript">
  function ayoPrint() {
    window.open('print_program_audit.php');
}

</script>

<!-- ./page content -->                                               
<!-- ./page container -->


<!-- page footer -->    
<?php include "include-footer.php" ?>
