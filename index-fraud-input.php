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
                                                <span class="stepDesc"><small>Sanksi</small></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#temuan-8">
                                                <span class="stepNumber">8</span>
                                                <span class="stepDesc"><small>Monitoring</small></span>
                                            </a>
                                        </li>                                           
                                    </ul>

                                    <div id="temuan-1">   

                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-md-2 control-label">Pilih Tahun</label>
                                                <div class="col-md-8">
                                                    <select class="form-control selectpicker" data-live-search="true">
                                                        <option value="1">2016</option>
                                                        <option value="2">2015</option>
                                                        <option valuce="3">2014</option>
                                                        <option value="4">2013</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <br><br>
                                            <div class="row">
                                                <label class="col-md-2 control-label">Pilih Auditee</label>
                                                <div class="col-md-8">
                                                    <select class="form-control selectpicker" data-live-search="true">
                                                        <option value="1">908 - Kanwil Sulawesi Maluku</option>
                                                        <option value="2">903 - Kanwil DKI Jakrta</option>
                                                        <option valuce="3">J02 - Jakarta Grogol</option>
                                                        <option value="4">T02 - Gorontalo</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <br><br>

                                            <div class="row">
                                                <label class="col-md-2 control-label">Judul temuan</label>
                                                <div class="col-md-8">
                                                    <textarea class="form-control" placeholder="Belum Ada Judul"></textarea>
                                                </div>
                                                
                                            </div>
                                            <br><br>
                                            <label class="col-md-2 control-label">Modus Operandi</label>
                                            <div class="col-md-8">
                                                <textarea class="form-control" placeholder="Belum Ada Modus"></textarea>
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
                                        <label class="col-md-2 control-label"> Pelaku :</label>
                                        <div class="col-md-3">

                                        </div>
                                        <div class="col-md-3">
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_tambah_pelaku">+ pelaku</button> 
                                        </div>
                                    </div>

                                    <div class="form-group">
                                       <!-- datatables plugin -->
                                       <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-sortable">

                                            <thead>
                                                <tr>
                                                    <th>Pilih</th>
                                                    <th>Nama Pelaku</th>
                                                    <th>Jenis Kelamin</th>
                                                    <th>NPP</th>
                                                    <th>Jabatan</th>
                                                    <th>Uraian</th>
                                                    <th>Keterlibatan</th>
                                                </tr>
                                            </thead> 

                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="checkbox checkbox-inline">
                                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#">Edit</button>
                                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#">delete</button>
                                                        </div>
                                                    </td>
                                                    <td>Jessica</td>
                                                    <td>123</td>
                                                    <td>456</td>
                                                    <td>789</td>
                                                    <td>11</td>
                                                    <td>Pelaku Utama</td>

                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>                     
                                    <!-- ./datatables plugin -->
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
                            <label>Pihak Penyebab</label>
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
                            <label>Pihak </label>
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
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Pilih Jenis nilai</label>
                                    <select class="form-control selectpicker" data-live-search="true">
                                        <option value="1">% - Persentase</option>
                                        <option value="2">Rp - Rupiah</option>
                                        <option value="3">Satuan</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label>Isi Nilai</label>
                                    <input type="text" class="form-control" placeholder="Belum Ada Nilai">
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
                             <label>Pilih Klasifikasi Temuan</label>
                            <br>
                            <select class="form-control selectpicker" data-live-search="true">
                                <option value="1">Human Error</option>
                                <option value="1">System</option>
                                <option value="2">Kebijakan</option>
                            </select>
                            <br><br>
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
                                        <label class="col-md-2 control-label">Pilih Pihak <br>yang diberi sanksi</label>
                                        <div class="col-md-8">
                                            <div class="row">                       
                                                <select class="form-control selectpicker" data-live-search="true">
                                                    <option value="1">Semua Pihak</option>
                                                    <option value="1">Jessica</option>
                                                    <option value="2">Minarni</option>
                                                </select>
                                            </div>
                                            <br><br>

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label>Isi Usulan Sanksi</label>
                                                    <input type="text" class="form-control" placeholder="Belum ada sanksi">
                                                </div>
                                                <div class="col-md-4">
                                                    <label>Isi Usulan Nilai</label>
                                                    <input type="text" class="form-control" placeholder="Belum ada nilai">
                                                </div>
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col-md-4">
                                                     <label>Realisasi Sanksi</label>
                                                    <input type="text" class="form-control" placeholder="Belum ada sanksi">
                                                </div>
                                                <div class="col-md-4">
                                                    <label>Realisasi Nilai</label>
                                                    <input type="text" class="form-control" placeholder="Belum ada nilai">
                                                </div>

                                            </div>

                                            <div class="row">
                                                <br><br>
                                                <button type="button" class="btn btn-primary">+ Sanksi</button>
                                                <br><br>    
                                            </div>

                                            <div class="row">
                                                <!-- datatables plugin -->
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-striped table-sortable">

                                                        <thead>
                                                            <tr>
                                                                <th>Pilih</th>
                                                                <th>Nama Pelaku</th>
                                                                <th>Uraian Usulan</th>
                                                                <th>Nilai</th>
                                                                <th>Realisasi Sanksi</th>
                                                                <th>Realisasi Nilai</th>
                                                            </tr>
                                                        </thead> 

                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="checkbox checkbox-inline">
                                                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#">Edit</button>
                                                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#">delete</button>
                                                                    </div>
                                                                </td>
                                                            <td>903 - Kanwil Jakarta</td>
                                                            <td>123</td>
                                                            <td>456</td>
                                                            <td>789</td>
                                                            <td>11</td>

                                                            </tr>
                                                        </tbody>

                                                    </table>
                                                </div>                     
                                                <!-- ./datatables plugin -->
                                            </div>              
                                            
                                        </div>
                                    </div>
                                </div>

                <div id="temuan-8">
                     <div class="form-group">
                                        <label class="col-md-2 control-label">Pilih Pelaku</label>
                                        <div class="col-md-8">
                                            <div class="row">                       
                                                <select class="form-control selectpicker" data-live-search="true">
                                                    <option value="1">Semua Pihak</option>
                                                    <option value="1">Jessica</option>
                                                    <option value="2">Minarni</option>
                                                </select>
                                            </div>
                                            <br><br>

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label>Tanggal Pengembalian</label>
                                                    <input type="text" class="form-control datepicker" placeholder="Belum ada sanksi">
                                                </div>
                                                <div class="col-md-4">
                                                    <label>Nilai Pengembalian</label>
                                                    <input type="text" class="form-control" placeholder="Belum ada nilai">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <br><br>
                                                <button type="button" class="btn btn-primary">+ Pengembalian</button>
                                                <br><br>    
                                            </div>

                                            <div class="row">
                                                <!-- datatables plugin -->
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-striped table-sortable">

                                                        <thead>
                                                            <tr>
                                                                <th>Pilih</th>
                                                                <th>Nama Pelaku</th>
                                                                <th>Tanggal Pengembalian</th>
                                                                <th>Nilai Pengembalian</th>
                                                            </tr>
                                                        </thead> 

                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="checkbox checkbox-inline">
                                                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#">Edit</button>
                                                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#">delete</button>
                                                                    </div>
                                                                </td>
                                                            <td>Jessica</td>
                                                            <td>123</td>
                                                            <td>456</td>

                                                            </tr>
                                                        </tbody>

                                                    </table>
                                                </div>                     
                                                <!-- ./datatables plugin -->
                                            </div>              
                                            
                                        </div>
                                    </div>
                                </div>
                </div>

            </div>
        </form>
    </div>

</div>

<!-- modal -->
    <?php include "index-pelaksanaan-audit-input-pelaku.php" ?>
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






