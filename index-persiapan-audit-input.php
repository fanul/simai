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
                        <h1>Input Persiapan Audit</h1>
                        <h2>2016 - Jember</h2>

                        <ul class="breadcrumb">
                            <li>
                                <a href="index-dashboard.php">SIMAI</a>
                            </li>
                            <li>
                                <a href="index-setup-proses.php">Persiapan Audit</a>
                            </li>                                 
                            <li>Input Persiapan Audit</li>
                        </ul>

                    </div>                        
                    <!-- ./page title -->

                    <div class="wrapper">
                        <!-- basic wizard -->
                        <div class="row">
                            <div class="wizard show-submit">
                                <ul>
                                    <li>
                                        <a href="#step-1">
                                            <span class="stepNumber">1</span>
                                            <span class="stepDesc">Step 1<br /><small>Tanggal Pelaksanaan</small></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#step-2">
                                            <span class="stepNumber">2</span>
                                            <span class="stepDesc">Step 2<br /><small>Penugasan Program Audit</small></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#step-3">
                                            <span class="stepNumber">3</span>
                                            <span class="stepDesc">Step 3<br /><small>Komposisi Tim</small></span>                   
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#step-4">
                                            <span class="stepNumber">4</span>
                                            <span class="stepDesc">Step 4<br /><small>Kelengkapan Administrasi</small></span>                   
                                        </a>
                                    </li>
                                </ul>
                                <div id="step-1">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-2">

                                                <label>Tanggal Mulai</label>
                                                <input type="text" class="form-control datepicker"/>

                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-2">

                                                <label>Tanggal Selesai</label>
                                                <input type="text" class="form-control datepicker"/>

                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div id="step-2">

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

                                        <div class="col-md-4" >
                                            <button class="btn"> >> </button><br>
                                            <button class="btn"> << </button>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="panel panel-default">
                                                <div class="panel-body">
                                                    <label>Program Audit Yang Dipilih</label>
                                                    <div id="jstree_default" class="push-down-20">
                                                        <ul>
                                                            <li>Pelayanan - (PAT 2016)</li>
                                                        </ul>
                                                    </div> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>   

                                <div id="step-3">

                                    <div class="row">
                                        <div class="col-md-3">
                                        <label>Pilih <span>Pengawas</span></label>
                                            <select class="form-control selectpicker" data-live-search="true">
                                                <option value="1">Pak Made</option>
                                                <option value="2">Pak Saipul</option>
                                                <option value="3">Pak Yusuf</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <label>Pilih <span>Ketua Tim</span></label>
                                            <select class="form-control selectpicker" data-live-search="true">
                                                <option value="1">Agus</option>
                                                <option value="2">Fadlil</option>
                                                <option value="3">Nigel</option>
                                                <option value="4">Fachreza</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label>Pilih <span>Anggota Tim</span></label>
                                            <select class="form-control selectpicker" data-live-search="true">
                                                <option value="1">Agus</option>
                                                <option value="2">Fadlil</option>
                                                <option value="3">Nigel</option>
                                                <option value="4">Fachreza</option>
                                            </select>
                                        </div>

                                        <div class="col-md-3">
                                            <br>
                                            <button class="btn btn-primary">+ Tambah</button>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <label>List Anggota Tim</label>
                                            <input type="text" class="tags" value="fadlil, fachreza">
                                            <br><br>
                                        </div>
                                    </div>

                                </div>

                                <div id="step-4">

                                    <div class="form-group-one-unit">
                                        <div class="row">

                                            <div class="col-md-6">                        
                                                <div class="form-group form-group-custom">
                                                    <label>Nomor <span>SPPD</span></label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-md-6">                        
                                                <div class="form-group form-group-custom">
                                                    <label>Upload <span>SPPD</span></label><br>
                                                    <input type="file" name="file_1" class="file"/>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">

                                            <div class="col-md-6">                        
                                                <div class="form-group form-group-custom">
                                                    <label>Nomor <span>Sprint</span></label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-md-6">                        
                                                <div class="form-group form-group-custom">
                                                    <label>Upload <span>Sprint</span></label><br>
                                                    <input type="file" name="file_1" class="file"/>
                                                </div>
                                            </div>

                                        </div>

                                    </div>


                                </div>                                    
                            </div>   
                        </div>
                        <!-- ./basic wizard -->

                    </div>

                    <!-- modal -->

                    <!-- ./modal -->

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






