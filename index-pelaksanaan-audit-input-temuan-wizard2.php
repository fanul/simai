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
                            <h1>Tambah Temuan</h1>
                            <p>Mock-Up Tentang Tambah Temuan</p>

                            <ul class="breadcrumb">
                                <li><a href="#">SIMAI</a></li>                                
                                <li>Temuan</li>
                                <li>Tambah Temuan</li>
                            </ul>

                        </div>                        
                        <!-- ./page title -->

                        <div class="wrapper wrapper-white">

                            <div class="row">
                             <form action="javascript:alert('Validated!');" role="form" class="form-horizontal" id="wizard-validation">
                                <div class="wizard show-submit wizard-validation">
                                    <ul>
                                        <li>
                                            <a href="#temuan-1">
                                                <span class="stepNumber">1</span>
                                                <span class="stepDesc"><small>Judul temuan</small></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#temuan-2">
                                                <span class="stepNumber">2</span>
                                                <span class="stepDesc"><small>Kondisi</small></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#temuan-3">
                                                <span class="stepNumber">3</span>
                                                <span class="stepDesc"><small>Kriteria</small></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#temuan-4">
                                                <span class="stepNumber">4</span>
                                                <span class="stepDesc"><small>Sebab</small></span>
                                            </a>
                                        </li>   
                                        <li>
                                            <a href="#temuan-5">
                                                <span class="stepNumber">5</span>
                                                <span class="stepDesc"><small>Akibat</small></span>
                                            </a>
                                        </li>    
                                        <li>
                                            <a href="#temuan-6">
                                                <span class="stepNumber">6</span>
                                                <span class="stepDesc"><small>Rekomendasi</small></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#temuan-7">
                                                <span class="stepNumber">7</span>
                                                <span class="stepDesc"><small>Rencana Aksi</small></span>
                                            </a>
                                        </li>                                          
                                    </ul>

                                    <div id="temuan-1">   

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Judul temuan</label>
                                            <div class="col-md-8">
                                                <textarea class="form-control" placeholder="Belum Ada Judul"></textarea>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <label class="col-md-2 control-label"> Status <span>Temuan</span></label>
                                            <div class="col-md-3">
                                               <select>
                                                <option value="0"> Proses</option>
                                                <option value="1"> Closed saat penutupan</option>
                                                <option value="2"> Closed saat pembuatan laporan</option>
                                                <option value="3"> Atensi Direktur Utama</option>
                                                <option value="4"> Tuntas</option>

                                            </select>
                                        </div>
                                    </div>

                                    <br><br>


                                    <div class="form-group">
                                        <label class="col-md-2 control-label"> Unit <span>Penanggung Jawab</span></label>
                                        <div class="col-md-3">
                                            <select class="form-control selectpicker" data-live-search="true">
                                                <option value="1">908 - Kanwil Sulawesi Maluku</option>
                                                <option value="2">T00 - Manado</option>
                                                <option valuce="3">J02 - Jakarta Grogol</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <button type="button" class="btn btn-primary">+ Penanggung Jawab</button> 
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">&nbsp;</label>  
                                        <div class="col-md-8">                              
                                            <input type="text" class="tags" value="908 - Kanwil Jakarta, 42A - Divisi Akuntansi"/>
                                        </div>
                                    </div>

                                </div>

                                <div id="temuan-2">

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Kondisi</label>
                                        <div class="col-md-8">
                                            <textarea class="form-control" placeholder="Belum Ada Kondisi"></textarea>
                                        </div>
                                    </div>

                                </div>

                                <div id="temuan-3">

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Isi <span>Kriteria</span></label>
                                        <div class="col-md-8">
                               <!--
                                <select class="form-control selectpicker" data-live-search="true">
                                    <option value="1">Human error</option>
                                    <option value="2">Kebijakan</option>
                                    <option valuce="3">System</option>
                                    <option value="4">Fraud</option>
                                </select>
                            -->

                            <br><br>

                            <textarea class="form-control" placeholder="Belum Ada Kriteria"></textarea>

                            <br><br>


                        </div>
                    </div>

                </div>

                <div id="temuan-4">
                    <div class="form-group">
                        <label class="col-md-2 control-label">Pilih <span>Klasifikasi Sebab</span></label>
                        <div class="col-md-8">                        

                            <select class="form-control selectpicker" data-live-search="true">
                                <option value="1">Human error</option>
                                <option value="2">Kebijakan</option>
                                <option valuce="3">System</option>
                                <option value="4">Fraud</option>
                            </select>
                            <br><br>
                            <br><br>
                            <label>Pilih Pihak Penanggung jawab</label>
                            <br>
                            <select class="form-control selectpicker" data-live-search="true">
                                <option value="1">Semua Pihak</option>
                                <option value="1">908 - Kanwil Sulawesi Maluku</option>
                                <option value="2">45A - Divisi Keuangan</option>
                            </select>
                            <br><br>
                            <textarea class="summernote" rows="1"></textarea>   
                            <button type="button" class="btn btn-primary">+ Sebab</button>    
                            <br><br>                     
                            <?php include "index-pelaksanaan-audit-table-akibat.php" ?>
                        </div>
                    </div>
                </div>

                <div id="temuan-5">
                    <div class="form-group">
                        <label class="col-md-2 control-label">Pilih <span>Klasifikasi Akibat</span></label>
                        <div class="col-md-8">                        
                            <br><br>
                            <select class="form-control selectpicker" data-live-search="true">
                                <option value="1">Human error</option>
                                <option value="2">Kebijakan</option>
                                <option valuce="3">System</option>
                                <option value="4">Fraud</option>
                            </select>
                            <br><br>
                            <br><br>
                            <label>Pilih Pihak Penanggung jawab</label>
                            <br>
                            <select class="form-control selectpicker" data-live-search="true">
                                <option value="1">Semua Pihak</option>
                                <option value="1">908 - Kanwil Sulawesi Maluku</option>
                                <option value="2">45A - Divisi Keuangan</option>
                            </select>
                            <br><br>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Nilai Probability</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label>Nilai Dampak</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <br><br>
                            <textarea class="summernote" rows="1"></textarea>
                            <br><br>
                            <button type="button" class="btn btn-primary">+ Akibat</button>    
                            <br><br>                     
                            <?php include "index-pelaksanaan-audit-table-akibat.php" ?>
                        </div>
                    </div>
                </div>

                <div id="temuan-6">
                    <div class="form-group">
                        <label class="col-md-2 control-label">Pilih <span>Klasifikasi Rekomendasi</span></label>
                        <div class="col-md-8">                        

                            <select class="form-control selectpicker" data-live-search="true">
                                <option value="1">Human error</option>
                                <option value="2">Kebijakan</option>
                                <option valuce="3">System</option>
                                <option value="4">Fraud</option>
                            </select>
                            <br><br><br><br>
                            <label>Pilih Pihak Penanggung jawab yang diberi rekomendasi</label>
                            <br>
                            <select class="form-control selectpicker" data-live-search="true">
                                <option value="1">Semua Pihak</option>
                                <option value="1">908 - Kanwil Sulawesi Maluku</option>
                                <option value="2">45A - Divisi Keuangan</option>
                            </select>
                            <br><br>
                            <textarea class="summernote" rows="1"></textarea>
                            <br><br>
                            <button type="button" class="btn btn-primary">+ Rekomendasi</button>    
                            <br><br>                     
                            <?php include "index-pelaksanaan-audit-table-akibat.php" ?>
                        </div>
                    </div>
                </div>

                <div id="temuan-7">
                    <div class="form-group">

                        <label class="col-md-2 control-label">Isi <span>Rencana Aksi</span></label>
                        <div class="col-md-8">                        
                            <textarea class="form-control" placeholder="Belum Ada Rencana"></textarea>
                        </div>
                    </div>
                    <div class="form-group">

                        <label class="col-md-2 control-label">Isi <span>Opini Awal</span></label>
                        <div class="col-md-8">                        
                            <textarea class="form-control" placeholder="Belum Ada Opini"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Pilih <span>Tanggal Komitmen</span></label>
                        <div class="col-md-8">                        
                            <input type="text" class="form-control datepicker"/>
                        </div>
                    </div>
                </div>

            </div>
        </form>
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






