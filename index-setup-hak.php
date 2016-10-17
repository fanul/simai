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
      				<h1>Indeks Halaman Penting</h1>
      				<p>Mock-Up Tentang Halaman-Halaman penting yang ada di SIMAI</p>
      				
      				<ul class="breadcrumb">
      					<li><a href="#">Dashboard</a></li>                                
      					<li>Indeks Halaman Penting</li>
      				</ul>

      			</div>                        
      			<!-- ./page title -->


                      <div class="wrapper wrapper-white">

                          <div class="row">
                               <div class="panel panel-default panel-collapsed"><div class="panel-heading">
                                   <h3 class="panel-title">Manajemen Role</h3>
                                   <ul class="panel-btn">
                                                <!--
      								<li><a href="#" class="btn btn-warning" data-toggle="modal" data-target="#modal_tambah_sebab">Tambah Sebab</a></li>
                                                -->
                                                <li>
                                                   <a href="#" class="btn btn-danger panel-collapse"><i class="fa fa-angle-up"></i></a>
                                             </li>                                                
                                       </ul>
                                 </div>
                                 <div class="panel-body">
                                   <?php include "index-setup-proses-modal-proses3-table.php" ?>
                             </div>                                        
                       </div>
                 </div>

                 <div class="row">
                   <div class="panel panel-default panel-collapsed">
                        <div class="panel-heading">
                             <h3 class="panel-title">Manajemen Hak Akses Modul</h3>
                             <ul class="panel-btn">
                                                <!--
      								<li><a href="#" class="btn btn-warning" data-toggle="modal" data-target="#modal_tambah_akibat">Tambah Akibat</a></li>
                                                -->
                                                <li>
                                                   <a href="#" class="btn btn-danger panel-collapse"><i class="fa fa-angle-up"></i></a>
                                             </li>                                                
                                       </ul>
                                 </div>
                                 <div class="panel-body">

                                    <div class="col-md-3">
                                      <div class="form-group-one-unit">
                                        <div class="row">                     
                                          <label>Pilih <span>Role</span></label>
                                          <select class="form-control selectpicker" data-live-search="true">
                                            <option value="Super User">Super User</option>
                                            <option value="Pengawas">Pengawas</option>
                                            <option value="Auditor">Auditor</option>
                                            <option value="Ketua Tim">Ketua Tim</option>
                                            <option value="Ketua SPI">Ketua SPI</option>
                                      </select>
                                      <!-- <span class="help-block">Block with help information</span>-->
                                            </div>                       
                                      </div>
                                      </div>

                                      <div class="col-md-3">
                                            <button class="btn btn-primary">save</button>
                                      </div>


                          <div class="form-group-one-unit">
                              <div class="row">
                                <div id="jstree_default" class="push-down-20">
                                </div>
                                <div id="jstree_checkbox" class="push-down-20">
                                      <ul>
                                          <li>Setup
                                              <ul>
                                                  <li>Program Audit</li>
                                                  <li>Profile</li>
                                                  <li>Klasifikasi</li>
                                                  <li>Hak Akses</li>
                                            </ul>
                                      </li>
                                      <li>Perencanaan Audit
                                        <ul>
                                            <li>Program Audit Tahunan</li>
                                            <li>PKAT</li>
                                      </ul>
                                </li>

                                <li>Persiapan Audit</li>
                                <li>Pelaksanaan Audit</li>
                                <li>Tindak Lanjut Audit</li>
                                <li>Analisa Audit
                                  <ul>
                                      <li>Analisa Temuan</li>
                                      <li>Analisa Sebab</li>
                                </ul>
                          </li>
                    </ul>
              </div> 
        </div>
  </div>

</div>

</div>                                        
</div>

</div>

<!-- modal form -->
<?php include "index-setup-klasifikasi-tambah.php" ?>
<!-- ./modal form -->

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






