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
                    <li>Pelaksanaan Audit</li>
                </ul>



            </div>                        
            <!-- ./page title -->



            <!-- datatables plugin -->
            <div class="wrapper wrapper-white">
                <div class="page-subtitle">
                    <h3>Pelaksanaan Audit</h3>
                    <p>Berisi tentang alur pelaksanaan audit</p>
                </div> 

                <!-- tabelnya -->
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-sortable searching-table">
                        <thead>
                            <tr>
                                <th>Icon</th>
                                <th>Tahun</th>
                                <th>Auditee</th>
                                <th>Pelaporan</th>
                                <th>Banyak PA</th>
                                <th>Banyak Kesimpulan</th>
                                <th>Banyak Temuan</th>
                                <th>% progress</th>
                            </tr>
                        </thead> 
                        
                        <tfoot>
                            <tr>
                                <th></th>
                                <th>2016</th>
                                <th>Auditee</th>
                                <th>Pelaporan</th>
                                <th>Banyak PA</th>
                                <th>Banyak Kesimpulan</th>
                                <th>Banyak Temuan</th>
                                <th>% Progress</th>
                            </tr> 
                        </tfoot>
                        
                        <tbody>
                            <tr>
                                <td>
                                    <div class="checkbox checkbox-inline">
                                        <a href="index-pelaksanaan-audit-input-kesimpulan.php" class="btn btn-primary tip" title="Isi Kesimpulan">Kesimpulan</a>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href="index-pelaksanaan-audit-input-temuan.php" class="btn btn-primary tip" title="Isi temuan">Temuan</a>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href="index-pelaksanaan-audit-input-laporan.php" class="btn btn-danger tip" title="Isi Laporan">Laporan</a>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href="lha.pdf" class="btn btn-warning tip" title="Isi temuan">print</a>
                                    </div>

                                </td>
                                <td>2016</td>
                                <td>Jakarta Kelapa Gading</td>
                                <td>
                                    <a href="index-pelaksanaan-audit-pelaporan.php" class=" tip" title="Pelaporan LHA"><i class="fa fa-check">&nbsp;&nbsp;</i>  1. LHA</a><br>
                                    <a href="index-arsip-fisik.php" class=" tip" title="Pelaporan Arsip"><i class="fa fa-times">&nbsp;&nbsp;</i>  2. Arsip Fisik</a><br>
                                </td>
                                <td>15</td>
                                <td>6</td>
                                <td>7</td>
                                <td>30</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="checkbox checkbox-inline">
                                        <a href="index-pelaksanaan-audit-input-kesimpulan.php" class="btn btn-primary tip" title="Isi Kesimpulan">Kesimpulan</a>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href="index-pelaksanaan-audit-input-temuan.php" class="btn btn-primary tip" title="Isi temuan">Temuan</a>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href="index-pelaksanaan-audit-input-laporan.php" class="btn btn-danger tip" title="Isi Laporan">Laporan</a>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href="lha.pdf" class="btn btn-warning tip" title="Isi temuan">print</a>
                                    </div>
                                </td>
                                <td>2016</td>
                                <td>Medan</td>
                                <td>
                                   <a href="index-pelaksanaan-audit-pelaporan.php" class=" tip" title="Pelaporan LHA"><i class="fa fa-times">&nbsp;&nbsp;</i>  1. LHA</a><br>
                                   <a href="index-arsip-fisik.php" class=" tip" title="Pelaporan Arsip"><i class="fa fa-times">&nbsp;&nbsp;</i>  2. Arsip Fisik</a><br>
                               </td>
                               <td>15</td>
                               <td>6</td>
                               <td>7</td>
                               <td>30</td>
                           </tr> 
                           <tr>
                            <td>
                                <div class="checkbox checkbox-inline">
                                    <a href="index-pelaksanaan-audit-input-kesimpulan.php" class="btn btn-primary tip" title="Isi Kesimpulan">Kesimpulan</a>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href="index-pelaksanaan-audit-input-temuan.php" class="btn btn-primary tip" title="Isi temuan">Temuan</a>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href="index-pelaksanaan-audit-input-laporan.php" class="btn btn-danger tip" title="Isi Laporan">Laporan</a>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href="lha.pdf" class="btn btn-warning tip" title="Isi temuan">print</a>  
                                </div>
                            </td>
                            <td>2015</td>
                            <td>Kediri</td>
                            <td>
                               <a href="index-pelaksanaan-audit-pelaporan.php" class=" tip" title="Pelaporan LHA"><i class="fa fa-times">&nbsp;&nbsp;</i>  1. LHA</a><br>
                               <a href="index-arsip-fisik.php" class=" tip" title="Pelaporan Arsip"><i class="fa fa-times">&nbsp;&nbsp;</i>  2. Arsip Fisik</a><br>
                           </td>
                           <td>15</td>
                           <td>6</td>
                           <td>7</td>
                           <td>30</td>                            
                       </tr>

                   </tbody>



               </table>
           </div>
           <!-- ./tabelnya -->

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
