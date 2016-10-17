<!-- modal form -->
<div class="modal fade" id="modal_tambah_temuanfraud" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="largeModalHead">Tambah Temuan Fraud</h4>
            </div>
            <div class="modal-body">

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
                                <span class="stepDesc"><small>Modus Operandi</small></span>
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
                            <label class="col-md-2 control-label">Pilih <span>Klasifikasi Sebab</span></label>
                            <div class="col-md-8">
                               <select class="form-control selectpicker" data-live-search="true">
                                <option value="1">Human error</option>
                                <option value="2">Kebijakan</option>
                                <option valuce="3">System</option>
                                <option value="4">Fraud</option>
                            </select>

                            <br><br>

                            <textarea class="form-control" placeholder="Belum Ada Sebab"></textarea>

                            <br><br>


                        </div>
                    </div>

                </div>

                <div id="temuan-4">
                    <div class="form-group">
                        <label class="col-md-2 control-label">Pilih <span>Klasifikasi Akibat</span></label>
                        <div class="col-md-8">                        

                            <select class="form-control selectpicker" data-live-search="true">
                                <option value="1">Human error</option>
                                <option value="2">Kebijakan</option>
                                <option valuce="3">System</option>
                                <option value="4">Fraud</option>
                            </select>
                            <br><br>
                            <button type="button" class="btn btn-primary">+ Akibat</button>    
                            <br><br>                     
                            <?php include "index-pelaksanaan-audit-table-akibat.php" ?>
                        </div>
                    </div>
                </div>

                <div id="temuan-5">
                    <div class="form-group">
                        <label class="col-md-2 control-label">Pilih <span>Klasifikasi Rekomendasi</span></label>
                        <div class="col-md-8">                        

                            <select class="form-control selectpicker" data-live-search="true">
                                <option value="1">Human error</option>
                                <option value="2">Kebijakan</option>
                                <option valuce="3">System</option>
                                <option value="4">Fraud</option>
                            </select>
                            <br><br>
                            <button type="button" class="btn btn-primary">+ Rekomendasi</button>    
                            <br><br>                     
                            <?php include "index-pelaksanaan-audit-table-akibat.php" ?>
                        </div>
                    </div>
                </div>

                <div id="temuan-6">
                    <div class="form-group">

                        <label class="col-md-2 control-label">Isi <span>Modus Operandi</span></label>
                        <div class="col-md-8">                        
                            <textarea class="form-control" placeholder="Belum Ada Rencana"></textarea>
                        </div>
                    </div>
                    <!--
                    <div class="form-group">
                        <label class="col-md-2 control-label">Pilih <span>Tanggal Komitmen</span></label>
                        <div class="col-md-8">                        
                            <input type="text" class="form-control datepicker"/>
                        </div>
                    </div>
                    -->
                </div>

            </div>
        </form>


    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Save</button>
    </div>
</div>
</div>
</div>
        <!-- /.modal form -->