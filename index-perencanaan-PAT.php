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
                            <h1>Perencanaan Audit - Program Audit Tahunan</h1>

                            <ul class="breadcrumb">
                                <li><a href="#">Dashboard</a></li>                                
                                <li>Indeks Halaman Penting</li>
                            </ul>

                        </div>                        
                        <!-- ./page title -->

                        <div class="wrapper wrapper-white">

                            <div class="row">
                                <div class="col-md-6">
                                    <button class="btn btn-primary">+ Tambah Tahun</button>
                                    <button class="btn btn-primary">Save</button>
                                    <button class="btn btn-warning">Copy Tahun Lalu</button>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group-one-unit">
                                        <div class="row">
                                            <div class="col-md-3">                     
                                              <label>Pilih <span>Tahun</span></label>
                                              <select class="form-control selectpicker" data-live-search="true">
                                                <option value="2014">2014</option>
                                                <option value="2015">2015</option>
                                                <option valuce="2016">2016</option>
                                                <option value="2017">2017</option>
                                            </select>
                                        </div>
                                    </div>                       
                                </div>
                            </div>
                        </div>

                        <br><br>

                        <div class="row">

                            <div class="col-md-4">

                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <label>Kumpulan Program Audit</label>

                                        <div id="jstree_checkbox" class="push-down-20">
                                            <ul>
                                                <li>Pemasaran
                                                    <ul>
                                                        <li>Perluasan Kepesertaan PU
                                                            <ul>
                                                                <li>Pencetakan Tanda Peserta
                                                                    <ul>
                                                                        <li>Kode PA : 0100 - Pencetakan KPJ</li>
                                                                        <li>Kode PA : 0200 - Pencetakan Sertifikat</li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li>Pembinaan Kepesertaan PU
                                                            <ul>
                                                                <li>Iuran
                                                                    <ul>
                                                                        <li>Iuran Belum Rinci</li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>Keuangan</li>
                                                <li>SDM/UMUM</li>
                                            </ul>
                                        </div> 
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <button class="btn"> >> </button>
                                <button class="btn"> << </button>
                            </div>

                            <div class="col-md-4">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <label>Program Audit Yang Dipilih</label>
                                        <div id="jstree_default" class="push-down-20">
                                            <ul>
                                                <li>Pelayanan</li>
                                            </ul>
                                        </div> 
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <!-- Copyright -->
                    <?php include "include-copyright.php" ?>
                    <!-- ./Copyright -->

                </div>
                <!-- ./page content container -->

            </div>
            <!-- ./page content -->                                               
        </div>  
        <!-- ./page container -->


        <!-- page footer -->    
        <?php include "include-footer.php" ?>






