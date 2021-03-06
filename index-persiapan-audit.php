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
                    <li><a href="#">Listboard</a></li>                                
                    <li>Persiapan Audit</li>
                </ul>



            </div>                        
            <!-- ./page title -->

            <!-- panel tree -->
            <div class="panel panel-default panel-collapsed">
                <div class="panel-heading">
                    <h3 class="panel-title">Pembuatan Laporan</h3>
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
                        </form>
                        <button class="btn btn-primary">Generate Report</button><br>
                    </div>

                    <div class="col-md-3">
                        <label>
                            Laporan yang akan digenerate :
                            <br> Dari Tanggal ... Sampai Tanggal ...
                            <br> Jenis Laporan ....
                            <br> Kriteria Khusus ....
                            <br> Status Audit ....
                            <br> untuk jenis temuan ....
                            <br> untuk auditee ....

                        </label>
                    </div>

                    <!--
                    <div class="col-md-3">
                        <label>
                            Audit Investigasi :
                            <br>Kanwil : <span>0</span>
                            <br>Kantor Cabang : <span>1</span>
                            <br>KCP : <span>0</span>
                        </label>
                    </div>
                -->

            </div>                                        
        </div>

        <!-- ./panel tree -->


        <!-- datatables plugin -->
        <div class="wrapper wrapper-white">
            <div class="page-subtitle">
                <h3>Persiapan Audit</h3>
                <p>Berisi tentang  Persiapan Audit</p>
            </div> 

            <div class="table-responsive">
                <table class="table table-bordered table-striped table-sortable searching-table">
                    <thead>
                        <tr>
                            <th>Icon</th>
                            <th>Tahun</th>
                            <th>Auditee</th>
                            <th>Tipe Audit</th>
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Akhir</th>
                            <th>Komposisi Tim</th>
                            <th>Kelengkapan Administrasi</th>
                            <th>Indeks Internal Audit</th>
                            <th>Indeks Profil Risiko</th>
                            <th>Indeks History Audit</th>
                            <th>Indeks Capaian Target</th>
                        </tr>
                    </thead> 

                    <tfoot>
                        <tr>
                            <th></th>
                            <th>Tahun</th>
                            <th>Auditee</th>
                            <th>Tipe Audit</th>
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Akhir</th>
                            <th>Komposisi Tim</th>
                            <th>Kelengkapan Administrasi</th>
                            <th>Indeks Internal Audit</th>
                            <th>Indeks Profil Risiko</th>
                            <th>Indeks History Audit</th>
                            <th>Indeks Capaian Target</th>
                        </tr> 
                    </tfoot>

                    <tbody>
                        <tr>
                            <td>
                                <div class="checkbox checkbox-inline">
                                    <a href="index-persiapan-audit-input.php" class="btn btn-primary">Proses</a>
                                </div>
                            </td>
                            <td>2016</td>
                            <td>Jember</td>
                            <td>Operasional</td>
                            <td>18-10-2016</td>
                            <td>29-10-2016</td>
                            <td>
                                1. Agus (Ketua Tim)<br>
                                2. Fadlil (Anggota)<br>
                                3. Nigel (Anggota)
                            </td>
                            <td>
                            <i class="fa fa-check">&nbsp;&nbsp;</i>  1. Sprint<br>
                                <i class="fa fa-times">&nbsp;&nbsp;&nbsp;</i>  2. SPPD
                            </td>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkbox checkbox-inline">
                                    <a href="index-persiapan-audit-input.php" class="btn btn-primary">Proses</a>
                                </div>
                            </td>
                            <td>2016</td>
                            <td>Malang</td>
                            <td>Investigasi</td>
                            <td>18-10-2016</td>
                            <td>29-10-2016</td>
                            <td>

                            </td>
                            <td>
                                <i class="fa fa-times">&nbsp;&nbsp;&nbsp;</i>  1. Sprint<br>
                                <i class="fa fa-times">&nbsp;&nbsp;&nbsp;</i>  2. SPPD
                            </td>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                        </tr> 

                    </tbody>



                </table>
            </div>

        </div>                        
        <!-- ./datatables plugin -->

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
