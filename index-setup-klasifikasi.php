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
            					<li><a href="index-dashboard.php">SIMAI</a></li>                      
            					<li>Setup Klasifikasi</li>
            				</ul>

            			</div>                        
            			<!-- ./page title -->
            			
            			<div class="wrapper wrapper-white">

            				<div class="row">
            					<div class="panel panel-default panel-collapsed">
            						<div class="panel-heading">
            							<h3 class="panel-title">Klasifikasi Sebab</h3>
            							<ul class="panel-btn">
            								<li><a href="#" class="btn btn-warning" data-toggle="modal" data-target="#modal_tambah_sebab">Tambah Sebab</a></li>
                                                            <li><a href="#" class="btn btn-danger" onClick="dev_panel_fullscreen($(this).parents('.panel')); return false;"><i class="fa fa-compress"></i></a></li>
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
            							<h3 class="panel-title">Klasifikasi Akibat</h3>
            							<ul class="panel-btn">
            								<li><a href="#" class="btn btn-warning" data-toggle="modal" data-target="#modal_tambah_akibat">Tambah Akibat</a></li>
                                                            <li><a href="#" class="btn btn-danger" onClick="dev_panel_fullscreen($(this).parents('.panel')); return false;"><i class="fa fa-compress"></i></a></li>
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
            							<h3 class="panel-title">Klasifikasi Rekomendasi</h3>
            							<ul class="panel-btn">
            								<li><a href="#" class="btn btn-warning" data-toggle="modal" data-target="#modal_tambah_rekomendasi">Tambah Rekomendasi</a></li>
                                                            <li><a href="#" class="btn btn-danger" onClick="dev_panel_fullscreen($(this).parents('.panel')); return false;"><i class="fa fa-compress"></i></a></li>
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
            							<h3 class="panel-title">Klasifikasi Temuan</h3>
            							<ul class="panel-btn">
            								<li><a href="#" class="btn btn-warning" data-toggle="modal" data-target="#modal_tambah_temuan">Tambah Temuan</a></li>
                                                            <li><a href="#" class="btn btn-danger" onClick="dev_panel_fullscreen($(this).parents('.panel')); return false;"><i class="fa fa-compress"></i></a></li>
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






            