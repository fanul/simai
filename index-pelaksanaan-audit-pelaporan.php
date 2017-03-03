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
            				<h1>Pelaporan LHA</h1>
            				<p>Mock-Up Tentang Halaman-Halaman penting yang ada di SIMAI</p>
            				
            				<ul class="breadcrumb">
            					<li><a href="index-dashboard.php">SIMAI</a></li>
                                          <li><a href="index-pelaksanaan-audit.php">Pelaksanaan Audit</a></li>
            					<li>Pelaksanaan Audit</li>
            				</ul>

            			</div>                        
            			<!-- ./page title -->
            			
            			<div class="wrapper wrapper-white">

            				<div class="row">
            					<div class="panel panel-default">
            						<div class="panel-heading">
            							<h3 class="panel-title">Klasifikasi Sebab</h3>
            							<ul class="panel-btn">
                                                            <!--
            								<li>
                                                            <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#modal_tambah_sebab">Tambah Sebab</a></li>
                                                            -->
                                                            <li><a href="#" class="btn btn-danger" onClick="dev_panel_fullscreen($(this).parents('.panel')); return false;"><i class="fa fa-compress"></i></a></li>
            								<li>
            									<a href="#" class="btn btn-danger panel-collapse"><i class="fa fa-angle-up"></i></a>
            								</li>                                                
            							</ul>
            						</div>
            						<div class="panel-body">
            							                        <!-- START ACCORDION -->
                                                <div class="panel-group accordion">

                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class=  "panel-title">
                                                                <a href="#acc02">
                                                                    Historical Review
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div class="panel-body" id="acc02">
                                                            <div class="timeline">

                                                                <div class="timeline-item">
                                                                    <div class="timeline-item-date">17 Oktober 2016, 17:55</div>
                                                                    <div class="timeline-item-image"><img src="assets/images/users/ahok.png"></div>
                                                                    <div class="timeline-item-data">
                                                                        <h4>Review #1</h4>
                                                                        <p class="text-muted">LHA mana?</p>
                                                                    </div>
                                                                </div>

                                                                <div class="timeline-item timeline-item-even">
                                                                    <div class="timeline-item-date">18 Oktober 2016, 17:55</div>
                                                                    <div class="timeline-item-image"><img src="assets/images/users/andre.png"></div>
                                                                    <div class="timeline-item-data">
                                                                        <h4>Feedback Review #1</h4>
                                                                        <p class="text-muted">sudah</p>

                                                                        <div class="dev-email-message-attachment">

                                                                        <strong>LHA: </strong><br>
                                                                          <a href="#">LHA1.doc</a>

                                                                    </div>

                                                                    </div>
                                                                </div>

                                                                <div class="timeline-item">
                                                                    <div class="timeline-item-date">19 Oktober 2016, 17:55</div>
                                                                    <div class="timeline-item-image"><img src="assets/images/users/ahok.png"></div>
                                                                    <div class="timeline-item-data">
                                                                     <h4>Review #2</h4>
                                                                     <p class="text-muted">Revisi yah</p>
                                                                 </div>
                                                             </div>

                                                             <div class="timeline-item timeline-item-even">
                                                                <div class="timeline-item-date">18 Oktober 2016, 17:55</div>
                                                                <div class="timeline-item-image"><img src="assets/images/users/andre.png"></div>
                                                                <div class="timeline-item-data">
                                                                    <h4>Feedback Review #2</h4>
                                                                    <p class="text-muted">sudah direvisi</p>

                                                                    <div class="dev-email-message-attachment">

                                                                        <strong>LHA: </strong><br>
                                                                        <a href="#">LHA2.doc</a>
                                                                  </div>                                                                    

                                                                </div>
                                                                </div>


                                                            <div class="timeline-item">
                                                                <div class="timeline-item-date">17 Oktober 2016, 17:55</div>
                                                                <div class="timeline-item-image"><img src="assets/images/users/ahok.png"></div>
                                                                <div class="timeline-item-data">
                                                                    <h4>Review #3</h4>
                                                                    <p class="text-muted">Baiklah</p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>                                
                                                </div>



                                            </div>
                                            <!-- END ACCORDION --> 

                                                  <!-- upload -->
                                                  <div class="row">
                                                      <hr>
                                                      <label>Isi Komentar LHA</label>
                                                      <div class="form-group">
                                                          <textarea class="form-control" placeholder="" rows="5">
                                                          </textarea>
                                                    </div>

                                                    <div class="row">
                                                          <div class="form-group">
                                                               <div class="col-md-3">
                                                                 <label> Status <span>LHA</span></label>
                                                                 <select>
                                                                    <option value="0"> Proses</option>
                                                                    <option value="1"> Approve Pengawas</option>
                                                                    <option value="2"> Approve KSPI</option>
                                                              </select>
                                                        </div>
                                                  </div>

                                                  <div class="form-group">
                                                    <input type="file" name="file_1" class="file"/>
                                                    <button class="btn btn-danger pull-right">Send</button>
                                              </div>

                                              <div class="dev-email-message-attachment">
                                                    <strong>LHA:</strong><br>
                                                    <a href="#">2016-LHA-Jakarta.doc</a>
                                              </div>
                                        </div>
                                  </div>
                                            <!-- ./upload -->

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






            