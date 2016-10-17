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
                    <li>Setup Profile</li>
                </ul>



            </div>                        
            <!-- ./page title -->



            <!-- datatables plugin -->
            <div class="wrapper wrapper-white">
                <div class="page-subtitle">
                    <h3>Setup Profile</h3>
                    <p>Berisi tentang alur Setup Profile</p>
                </div> 

                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-sortable searching-table">
                        <thead>
                            <tr>
                                <th>Icon</th>
                                <th>Nama</th>
                                <th>Kode</th>
                                <th>Tipe User</th>
                            </tr>
                        </thead> 
                        
                        <tfoot>
                            <tr>
                                <th></th>
                                <th>Nama</th>
                                <th>Kode</th>
                                <th>Tipe User</th>
                            </tr> 
                        </tfoot>
                        
                        <tbody>
                            <tr>
                                <td>
                                    <div class="checkbox checkbox-inline">
                                        <a href="index-setup-profile-input.php" class="btn btn-primary tip" title="Proses User Agus">Proses</a>
                                    </div>
                                </td>
                                <td>Agus</td>
                                <td>111123</td>
                                <td>Karyawan BPJSTK</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="checkbox checkbox-inline">
                                       <a href="index-setup-profile-input.php" class="btn btn-primary tip" title="Proses User Agus">Proses</a>
                                    </div>
                                </td>
                                <td>OJK</td>
                                <td>OJK</td>
                                <td>Eksternal</td>
                            </tr> 
                            <tr>
                                <td>
                                    <div class="checkbox checkbox-inline">
                                        <a href="index-setup-profile-input.php" class="btn btn-primary tip" title="Proses User Agus">Proses</a>
                                    </div>
                                </td>
                                <td>Kanwil Jakarta</td>
                                <td>903</td>
                                <td>Unit Kerja</td>                       
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
