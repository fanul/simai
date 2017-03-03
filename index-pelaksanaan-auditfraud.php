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
                                <th></th>
                                <th>Icon</th>
                                <th>Tahun</th>
                                <th>Auditee</th>
                                <th>Banyak PA</th>
                                <th>Banyak Kesimpulan</th>
                                <th>Banyak Temuan</th>
                                <th>% progress</th>
                            </tr>
                        </thead> 
                        
                        <tfoot>
                            <tr>
                                <th></th>
                                <th></th>
                                <th>2016</th>
                                <th>Auditee</th>
                                <th>Banyak PA</th>
                                <th>Banyak Kesimpulan</th>
                                <th>Banyak Temuan</th>
                                <th>% Progress</th>
                            </tr> 
                        </tfoot>
                        
                        <tbody>
                            <tr>
                                <td class="details-control"></td>
                                <td>
                                    <div class="checkbox checkbox-inline">
                                        <a href="index-pelaksanaan-audit-input-temuanfraud.php" class="btn btn-primary" title="Investigasi">Proses</a>
                                    </div>

                                </td>
                                <td>2016</td>
                                <td>Jakarta Kelapa Gading</td>
                                <td>15</td>
                                <td>6</td>
                                <td>7</td>
                                <td>30</td>
                            </tr>
                            <tr>
                                <td class="details-control"></td>
                                <td>
                                    <div class="checkbox checkbox-inline">
                                        <a href="index-pelaksanaan-audit-input-temuanfraud.php" class="btn btn-primary" title="Investigasi">Proses</a>
                                    </div>

                                </td>
                                <td>2016</td>
                                <td>Medan</td>
                                <td>15</td>
                                <td>6</td>
                                <td>7</td>
                                <td>30</td>
                            </tr> 
                            <tr>
                                <td></td>
                                <td>
                                    <div class="checkbox checkbox-inline">
                                        <a href="index-pelaksanaan-audit-input-temuanfraud.php" class="btn btn-primary" title="Investigasi">Proses</a>
                                    </div>
                                </td>
                                <td>2015</td>
                                <td>Kediri</td>
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
