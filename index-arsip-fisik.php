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
                    <li>Arsip Fisik</li>
                </ul>



            </div>                        
            <!-- ./page title -->



            <!-- datatables plugin -->
            <div class="wrapper wrapper-white">
                <div class="page-subtitle">
                    <h3>Arsip Fisik</h3>
                    <p>Berisi Data Kearsipan Kegiatan Audit di SPI</p>
                </div> 

                <!-- tabelnya -->
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-sortable searching-table">
                        <thead>
                            <tr>
                                <th>Icon</th>
                                <th>Tahun</th>
                                <th>Auditee</th>
                                <th>Diarsipkan</th>
                                <th>cluster</th>
                                <th>row</th>
                                <th>No. Box</th>
                                <th>Sekat</th>
                                <th>No. Urut</th>
                                <th>Jenis Data</th>
                                <th>Uraian Data</th>
                                <th>Periode Mulai</th>
                                <th>Periode Akhir</th>
                                <th>No. Data</th>
                                <th>Tanggal Data</th>
                                <th>Tingkat Perkembangan</th>
                                <th>Jumlah</th>
                                <th>No. Sprint</th>
                                <th>Tanggal Sprint</th>
                                <th>No. LHA</th>
                                <th>Tgl. LHA</th>
                            </tr>
                        </thead> 
                        
                        <tfoot>
                            <tr>
                                <th></th>
                                <th>Tahun</th>
                                <th>Auditee</th>
                                <th>Diarsipkan</th>
                                <th>cluster</th>
                                <th>row</th>
                                <th>No. Box</th>
                                <th>Sekat</th>
                                <th>No. Urut</th>
                                <th>Jenis Data</th>
                                <th>Uraian Data</th>
                                <th>Periode Mulai</th>
                                <th>Periode Akhir</th>
                                <th>No. Data</th>
                                <th>Tanggal Data</th>
                                <th>Tingkat Perkembangan</th>
                                <th>Jumlah</th>
                                <th>No. Sprint</th>
                                <th>Tanggal Sprint</th>
                                <th>No. LHA</th>
                                <th>Tgl. LHA</th>
                            </tr> 
                        </tfoot>
                        
                        <tbody>
                            <tr>
                                <td>
                                    <div class="checkbox checkbox-inline">
                                        <a href="index-arsip-fisik-input.php" class="btn btn-primary" title="Isi Kesimpulan">Proses</a>
                                    </div>
                                </td>
                               
                                <td>2015</td>
                                <td>Kantor Cabang Sumedang</td>
                                <td>Sudah</td>
                                <td>B</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>2</td>
                                <td>?</td>
                                <td>Laporan Hasil Audit</td>
                                <td>01/01/2016</td>
                                <td>01/09/2016</td>
                                <td>-</td>
                                <td>-</td>
                                <td>copy</td>
                                <td>1</td>
                                <td>SPRINT/240/042015</td>
                                <td>10/10/2016</td>
                                <td>LAP/A/09/SPI/052015</td>
                                <td>26/05/2015</td>

                            </tr>

                             <tr>
                                <td>
                                    <div class="checkbox checkbox-inline">
                                        <a href="index-arsip-fisik-input.php" class="btn btn-primary" title="Isi Kesimpulan">Proses</a>
                                    </div>
                                </td>
                               
                                <td>2015</td>
                                <td>Kantor Cabang Sumedang</td>
                                <td>Belum</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>

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
