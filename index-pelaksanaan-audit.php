<?php include "include-header.php" ?>

<!-- page header -->    
<div class="dev-page-header">

    <div class="dph-logo">
        <a href="index.html">Pelaksanaan Audit</a>
        <a class="dev-page-sidebar-collapse">
            <div class="dev-page-sidebar-collapse-icon">
                <span class="line-one"></span>
                <span class="line-two"></span>
                <span class="line-three"></span>
            </div>
        </a>
    </div>

    <!--
    <ul class="dph-buttons pull-right">                    
        <li class="dph-button-stuck">
            <a href="#" class="dev-page-search-toggle">
                <div class="dev-page-search-toggle-icon">
                    <span class="circle"></span>
                    <span class="line"></span>
                </div>
            </a>
        </li>                    
    </ul>                                                
-->
</div>
<!-- ./page header -->

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

                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-sortable searching-table">
                        <thead>
                            <tr>
                                <th>Icon</th>
                                <th>Tahun</th>
                                <th>Auditee</th>
                                <th>Banyak PA</th>
                                <th>Banyak Temuan</th>
                                <th>% progress</th>
                            </tr>
                        </thead> 
                        
                        <tfoot>
                            <tr>
                                <th></th>
                                <th>2016</th>
                                <th>Pelayanan</th>
                                <th>Pelayanan Klaim</th>
                                <th>Klaim JHT</th>
                                <th>Nama PA</th>
                            </tr> 
                        </tfoot>
                        
                        <tbody>
                            <tr>
                                <td>
                                    <div class="checkbox checkbox-inline">
                                        <a href="index-pelaksanaan-audit-input-kesimpulan.php" class="fa fa-share-square-o"></a>
                                    </div>
                                </td>
                                <td>2016</td>
                                <td>Pemasaran</td>
                                <td>Pengelolaan Kepesertaan</td>
                                <td>Pemadanan Data</td>
                                <td>Nama PA...</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="checkbox checkbox-inline">
                                        <a href="index-pelaksanaan-audit-input-kesimpulan.php" class="fa fa-share-square-o"></a>
                                    </div>
                                </td>
                                <td>2016</td>
                                <td>Pelayanan</td>
                                <td>Pelayanan Klaim</td>
                                <td>Klaim JHT</td>
                                <td>Nama PA...</td>
                            </tr> 
                            <tr>
                                <td>
                                    <div class="checkbox checkbox-inline">
                                        <a href="index-pelaksanaan-audit-input-kesimpulan.php" class="fa fa-share-square-o"></a>
                                    </div>
                                </td>
                                <td>2015</td>
                                <td>SDM/UMUM</td>
                                <td>Pengadaan Belanja Modal</td>
                                <td>Belanja Modal Non-Kap</td>
                                <td>Nama PA...</td>                                 
                            </tr>

                        </tbody>



                    </table>
                </div>

            </div>                        
            <!-- ./datatables plugin -->

            <!-- modal form -->
            s
            <!-- /.modal form -->

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
