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
                    <li><a href="#">Dashboard</a></li>                                
                    <li>Database Fraud</li>
                </ul>



            </div>                        
            <!-- ./page title -->



            <!-- datatables plugin -->
            <div class="wrapper wrapper-white">
                <div class="page-subtitle">
                    <h3>Database Fraud</h3>
                    <p>Berisi tentang database fraud di BPJS Ketenagakerjaan</p>
                </div> 

                <!-- tabelnya -->
                <div class="row">
                    <a href="index-fraud-input.php" class="btn btn-primary" title="Investigasi">Tambah</a>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-sortable searching-table">
                        <thead>
                            <tr>
                                <th></th>
                                <th></th>
                                <th>Tahun</th>
                                <th>Auditee</th>
                                <th>Uraian pelanggaran</th>
                                <th>Sanksi</th>
                                <th>Jenis Pelaku</th>
                                <th>Status</th>
                            </tr>
                        </thead> 
                        
                        <tfoot>
                            <tr>
                                <th></th>
                                <th></th>
                                <th>Tahun</th>
                                <th>Auditee</th>
                                <th>Uraian Pelanggaran</th>
                                <th>Sanksi</th>
                                <th>Jenis Pelaku</th>
                                <th>Status</th>
                            </tr> 
                        </tfoot>
                        
                        <tbody>
                            <tr>
                                <td>
                                    <div class="checkbox checkbox-inline">
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#">Edit</button>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#">delete</button>
                                    </div>
                                </td>
                                <td class="details-control"></td>
                                <td>2015</td>
                                <td>Timika</td>
                                <td>Penggelapan Uang Iuran Perusahaan</td>
                                <td>1. Ganti Rugi<br>2. PHK</td>
                                <td>Internal</td>
                                <td>proses</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="checkbox checkbox-inline">
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#">Edit</button>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#">delete</button>
                                    </div>
                                </td>
                                <td class="details-control"></td>
                                <td>2014</td>
                                <td>Ternate</td>
                                <td>Penggelapan Uang Klaim</td>
                                <td>1. Ganti Rugi<br>2. PHK</td>
                                <td>Internal</td>
                                <td>Tuntas</td>
                            </tr>

                        </tbody>



                    </table>
                </div>
                <!-- ./tabelnya -->

            </div>                        
            <!-- ./datatables plugin -->

            <!-- modal -->
            
            <!-- ./modal -->

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
