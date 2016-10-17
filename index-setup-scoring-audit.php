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
            					<div class="panel panel-default panel-collapsed">
            						<div class="panel-heading">
            							<h3 class="panel-title">Internal Audit Scoring</h3>
            							<ul class="panel-btn">
                                                            <!--
            								<li><a href="#" class="btn btn-warning" data-toggle="modal" data-target="#modal_tambah_sebab">Tambah Internal Audit Scoring</a></li>
                                                      -->
                                                      <li><a href="#" class="btn btn-danger" onClick="dev_panel_fullscreen($(this).parents('.panel')); return false;"><i class="fa fa-compress"></i></a></li>
                                                      <li>
                                                         <a href="#" class="btn btn-danger panel-collapse"><i class="fa fa-angle-up"></i></a>
                                                   </li>                                                
                                             </ul>
                                       </div>
                                       <div class="panel-body">
                                         <?php include "index-setup-scoring-audit-ias1.php" ?>
                                   </div>                                        
                             </div>
                       </div>

                       <div class="row">
                         <div class="panel panel-default panel-collapsed">
                              <div class="panel-heading">
                                   <h3 class="panel-title">Profil Risiko Auditee</h3>
                                   <ul class="panel-btn">
                                                            <!--
            								<li><a href="#" class="btn btn-warning" data-toggle="modal" data-target="#modal_tambah_akibat">Tambah Akibat</a></li>
                                                      -->
                                                      <li><a href="#" class="btn btn-danger" onClick="dev_panel_fullscreen($(this).parents('.panel')); return false;"><i class="fa fa-compress"></i></a></li>
                                                      <li>
                                                         <a href="#" class="btn btn-danger panel-collapse"><i class="fa fa-angle-up"></i></a>
                                                   </li>                                                
                                             </ul>
                                       </div>
                                       <div class="panel-body">
                                          <?php include "index-setup-scoring-audit-ias2.php" ?>
                                    </div>                                        
                              </div>
                        </div>

                        <div class="row">
                              <div class="panel panel-default panel-collapsed">
                                    <div class="panel-heading">
                                          <h3 class="panel-title">Periode Audit Terakhir</h3>
                                          <ul class="panel-btn">
                                                            <!--
                                                            <li><a href="#" class="btn btn-warning" data-toggle="modal" data-target="#modal_tambah_akibat">Tambah Akibat</a></li>
                                                      -->
                                                      <li><a href="#" class="btn btn-danger" onClick="dev_panel_fullscreen($(this).parents('.panel')); return false;"><i class="fa fa-compress"></i></a></li>
                                                      <li>
                                                            <a href="#" class="btn btn-danger panel-collapse"><i class="fa fa-angle-up"></i></a>
                                                      </li>                                                
                                                </ul>
                                          </div>
                                          <div class="panel-body">
                                                <?php include "index-setup-scoring-audit-ias3.php" ?>
                                          </div>                                        
                                    </div>
                              </div>

                              <div class="row">
                                    <div class="panel panel-default panel-collapsed">
                                          <div class="panel-heading">
                                                <h3 class="panel-title">KPI</h3>
                                                <ul class="panel-btn">
                                                            <!--
                                                            <li><a href="#" class="btn btn-warning" data-toggle="modal" data-target="#modal_tambah_akibat">Tambah Akibat</a></li>
                                                      -->
                                                      <li><a href="#" class="btn btn-danger" onClick="dev_panel_fullscreen($(this).parents('.panel')); return false;"><i class="fa fa-compress"></i></a></li>
                                                      <li>
                                                            <a href="#" class="btn btn-danger panel-collapse"><i class="fa fa-angle-up"></i></a>
                                                      </li>                                                
                                                </ul>
                                          </div>
                                          <div class="panel-body">
                                                <?php include "index-setup-scoring-audit-ias4.php" ?>
                                          </div>                                        
                                    </div>
                              </div>

                              <div class="row">
                                    <div class="panel panel-default panel-collapsed">
                                          <div class="panel-heading">
                                          <h3 class="panel-title">Capaian Target</h3>
                                                <ul class="panel-btn">
                                                            <!--
                                                            <li><a href="#" class="btn btn-warning" data-toggle="modal" data-target="#modal_tambah_akibat">Tambah Akibat</a></li>
                                                      -->
                                                      <li><a href="#" class="btn btn-danger" onClick="dev_panel_fullscreen($(this).parents('.panel')); return false;"><i class="fa fa-compress"></i></a></li>
                                                      <li>
                                                            <a href="#" class="btn btn-danger panel-collapse"><i class="fa fa-angle-up"></i></a>
                                                      </li>                                                
                                                </ul>
                                          </div>
                                          <div class="panel-body">
                                                <?php include "index-setup-scoring-audit-ias5.php" ?>
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






