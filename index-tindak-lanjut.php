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
                    <li>Tindak Lanjut Audit</li>
                </ul>



            </div>                        
            <!-- ./page title -->



            <!-- datatables plugin -->
            <div class="wrapper wrapper-white">
                <div class="page-subtitle">
                    <h3>Tindak Lanjut Audit</h3>
                    <p>Berisi tentang alur Tindak Lanjut audit</p>
                </div> 

                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-sortable searching-table">
                        <thead>
                            <tr>
                                <th>Icon</th>
                                <th>Tahun</th>
                                <th>Auditee</th>
                                <th>Banyak Temuan</th>
                                <th>Temuan Tuntas</th>
                            </tr>
                        </thead> 
                        
                        <tfoot>
                            <tr>
                                <th></th>
                                <th>Tahun</th>
                                <th>Auditee</th>
                                <th>Banyak Temuan</th>
                                <th>Temuan Tuntas</th>
                            </tr> 
                        </tfoot>
                        
                        <tbody>
                            <tr>
                                <td>
                                    <div class="checkbox checkbox-inline">
                                        <a href="index-tindak-lanjut-input.php" class="fa fa-share-square-o"></a>
                                    </div>
                                </td>
                                <td>2016</td>
                                <td>Jember</td>
                                <td>20</td>
                                <td>18</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="checkbox checkbox-inline">
                                        <a href="index-tindak-lanjut-input.php" class="fa fa-share-square-o"></a>
                                    </div>
                                </td>
                                <td>2016</td>
                                <td>malang</td>
                                <td>20</td>
                                <td>18</td>
                            </tr> 
                            <tr>
                                <td>
                                    <div class="checkbox checkbox-inline">
                                        <a href="index-tindak-lanjut-input.php" class="fa fa-share-square-o"></a>
                                    </div>
                                </td>
                                <td>2016</td>
                                <td>medan</td>
                                <td>5</td>
                                <td>1</td>                               
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
