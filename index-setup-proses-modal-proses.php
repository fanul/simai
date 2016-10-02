 <div class="modal fade" id="modal_form_setup_proses" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">tambah proses</h4>
            </div>
            <div class="modal-body">

                <div class="form-group-one-unit">
                    <!-- basic wizard -->
                    <div class="row">
                        <div class="wizard">
                            <ul>
                                <li>
                                    <a href="#step-1">
                                        <span class="stepNumber">1</span>
                                        <span class="stepDesc">Step 1<br /><small>Pilih level proses bisnis</small></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#step-2">
                                        <span class="stepNumber">2</span>
                                        <span class="stepDesc">Step 2<br /><small>Isi Variabel</small></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#step-3">
                                        <span class="stepNumber">3</span>
                                        <span class="stepDesc">Step 3<br /><small>Identisifikasi Risiko</small></span>                   
                                    </a>
                                </li>
                                <li>
                                    <a href="#step-4">
                                        <span class="stepNumber">4</span>
                                        <span class="stepDesc">Step 4<br /><small>isi Detail Program Audit</small></span>                   
                                    </a>
                                </li>
                            </ul>
                            <div id="step-1">

                                <label>Pilih <span>level 1</span> &nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_form_tambah_level1">+ level 1</button></label>
                                <select class="form-control selectpicker" data-live-search="true">
                                    <option value="1">Pemasaran</option>
                                    <option value="2">Pelayanan</option>
                                    <option value="3">Keuangan</option>
                                    <option value="4">SDM/Umum</option>
                                </select>

                                <br><br>

                                <label>Pilih <span>level 2</span> &nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_form_tambah_level2">+ level 2</button></label>
                                <select class="form-control selectpicker" data-live-search="true">
                                    <option value="1">Perluasan</option>
                                    <option value="2">Pembinaan</option>
                                    <option value="3">dll</option>
                                </select>
                                <br><br>

                                <label>Pilih <span>level 3</span> &nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_form_tambah_level3">+ level 3</button></label>
                                <select class="form-control selectpicker" data-live-search="true">
                                    <option value="1">bli bli bli</option>
                                    <option value="2">bla bla bla</option>
                                    <option value="3">pemrosesan data potensi PU, BPU & Jakon</option>
                                </select>

                            </div>
                            <div id="step-2">

                               <div class="form-group-one-unit">
                                <div class="row">
                                    <div class="col-md-12">                        
                                        <div class="form-group form-group-custom">
                                            <label>isi <span>Nama Program Audit</span></label>
                                            <input type="text" class="form-control" placeholder="isi Nama Program Audit"/>
                                        </div>                        
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">                        
                                        <div class="form-group form-group-custom">
                                            <label> <span>Kode KKA</span></label>
                                            <input type="text" class="form-control" placeholder="KKA.PA.1"/>
                                        </div>                        
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">                        
                                        <div class="form-group form-group-custom">
                                            <label>isi <span>Nomor PP</span></label>
                                            <input type="text" class="form-control" placeholder="isi nomor PP"/>
                                            <!-- <span class="help-block">Block with help information</span> -->
                                        </div>                        
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">                        
                                        <div class="form-group form-group-custom">
                                            <label>isi <span>Perdir</span></label>
                                            <input type="text" class="form-control" placeholder="isi Perdir"/>
                                        </div>                        
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">                        
                                        <div class="form-group form-group-custom">
                                            <label>isi <span>Juknis</span></label>
                                            <input type="text" class="form-control" placeholder="isi Juknis"/>
                                        </div>                        
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">                        
                                        <div class="form-group form-group-custom">
                                            <label>isi <span>edaran</span></label>
                                            <input type="text" class="form-control" placeholder="isi edaran"/>
                                        </div>                        
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">                        
                                        <div class="form-group form-group-custom">
                                            <label>Macam-Macam <span>Dokumen</span></label>                                
                                            <input type="text" class="tags" value=""/>
                                        </div>                        
                                    </div>
                                </div>

                            </div>
                        </div>                      
                        <div id="step-3">

                            <label>Pilih <span>Jenis Risiko</span></label>
                            <select class="form-control selectpicker" data-live-search="true">
                                <option value="1">Risiko Operasional</option>
                                <option value="2">Pelayanan</option>
                                <option value="3">Keuangan</option>
                                <option value="4">SDM/Umum</option>
                            </select>

                            <br><br>

                            <div class="form-group-one-unit">
                                <div class="row">
                                    <div class="col-md-12">                        
                                        <div class="form-group form-group-custom">
                                            <label>isi <span>Deskripsi Risiko</span></label>
                                            <input type="text" class="form-control" placeholder="isi Diskripsi Risiko"/>
                                            <br>
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_form_tl_audit">Tambah</button>
                                        </div>                        
                                    </div>
                                </div>
                            </div>

                            <div class="form-group-one-unit">
                                <div class="row">
                                    <div class="col-md-12">                        
                                        <div class="form-group form-group-custom">
                                            <?php include "index-setup-proses-modal-proses3-table.php" ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div id="step-4">

                            <div class="form-group-one-unit">
                                <div class="row">
                                    <div class="col-md-12">                        
                                        <div class="form-group form-group-custom">
                                            <label>Isi <span>Tujuan Audit</span></label>
                                            <textarea class="summernote" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group-one-unit">
                                <div class="row">
                                    <div class="col-md-12">                        
                                        <div class="form-group form-group-custom">
                                            <label>Isi <span>Langkah Audit</span></label>
                                            <textarea class="summernote" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                             <div class="form-group-one-unit">
                                <div class="row">
                                    <div class="col-md-12">                        
                                        <div class="form-group form-group-custom">
                                            <label>isi <span> Kriteria Penilaian Simpulan</span></label>
                                            <input type="text" class="form-control" placeholder="isi Diskripsi Risiko"/>
                                            <br>
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_form_tl_audit">Tambah</button>
                                        </div>                        
                                    </div>
                                </div>
                            </div>

                            <div class="form-group-one-unit">
                                <div class="row">
                                    <div class="col-md-12">                        
                                        <div class="form-group form-group-custom">
                                            <?php include "index-setup-proses-modal-proses4-table.php" ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>                                    
                    </div>   
                </div>

            </div>                        
            <!-- ./basic wizard -->
        </div>

    </div>

</div>
</div>

<?php include "index-setup-proses-modal-level1.php" ?>
<?php include "index-setup-proses-modal-level2.php" ?>
<?php include "index-setup-proses-modal-level3.php" ?>