<!-- modal form -->
<div class="modal fade" id="modal_approve_pelaksanaan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Sanksi</h4>
            </div>
            <div class="modal-body">

                <div class="form-group-one-unit">
                    <div class="row">
                     
                        <!-- tab temuan -->
                        <div class="form-group">
                         <div class="tabs">                            
                            <ul class="nav nav-tabs nav-tabs-arrowed" role="tablist">
                                <li class="active"><a href="#tab1-1" role="tab" data-toggle="tab">Judul Temuan</a></li>
                                <li><a href="#tab1-2" role="tab" data-toggle="tab">Kondisi</a></li>
                                <li><a href="#tab1-3" role="tab" data-toggle="tab">Kriteria</a></li>
                                <li><a href="#tab1-4" role="tab" data-toggle="tab">Sebab</a></li>
                                <li><a href="#tab1-5" role="tab" data-toggle="tab">akibat</a></li>
                                <li><a href="#tab1-6" role="tab" data-toggle="tab">Rekomendasi</a></li>
                                <li><a href="#tab1-7" role="tab" data-toggle="tab">Tanggapan</a></li>
                            </ul>                         
                            <div class="panel-body tab-content">
                                <div class="tab-pane active" id="tab1-1">
                                    <label>Isi <span>Judul Temuan</span></label>                                
                                    <input type="text" class="form-control" placeholder="Belum Ada Judul" />                 
                                </div>
                                <div class="tab-pane" id="tab1-2">
                                    <label>Isi <span>Kondisi</span></label>
                                    <textarea class="form-control" placeholder="Belum Ada Kondisi"></textarea>                           
                                </div>
                                <div class="tab-pane" id="tab1-3">
                                   <label>Isi <span>Kriteria</span></label>
                                   <textarea class="form-control" placeholder="Belum Ada Kriteria"></textarea>            
                               </div>
                               <div class="tab-pane" id="tab1-4">
                                   <label>Pilih <span>Sebab</span> &nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_form_tambah_sebab">+ Sebab</button></label>
                                   <select class="form-control selectpicker" data-live-search="true">
                                    <option value="1">Human Error</option>
                                    <option value="2">Sistem Error</option>
                                    <option value="3">Kebijakan</option>
                                    <option value="4">Fraud</option>
                                </select>

                                <br><br>                        
                            </div>
                            <div class="tab-pane" id="tab1-5">

                                <div class="form-group-one-unit">
                                    <div class="row">
                                        <div class="col-md-12">                        
                                            <div class="form-group form-group-custom">
                                                <label>isi <span>Akibat</span></label>
                                                <input type="text" class="form-control" placeholder="isi akibat"/>
                                                <br>
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#">Tambah</button>
                                            </div>                        
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group-one-unit">
                                    <div class="row">
                                        <div class="col-md-12">                        
                                            <div class="form-group form-group-custom">
                                                <?php 
                                                    //include "index-pelaksanaan-audit-table-akibat.php" 
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="tab-pane" id="tab1-6">
                              <label>Isi <span>Rekomendasi</span></label>
                              <textarea class="form-control" placeholder="Belum Ada Rekomendasi"></textarea>                            
                          </div>
                          <div class="tab-pane" id="tab1-7">
                              <label>Isi <span>Tanggapan</span></label>
                              <textarea class="form-control" placeholder="Belum Ada Tanggapan"></textarea>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- ./tab temuan -->

          </div>
      </div>

  </div>
  <div class="modal-footer">
    <button type="button" class="btn" data-dismiss="modal">Cancel</button>
    <button type="button" class="btn btn-primary" data-dismiss="modal">Save</button>
</div>
</div>
</div>
</div>
        <!-- /.modal form -->