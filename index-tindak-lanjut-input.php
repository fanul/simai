    <?php include "include-header.php" ?>

    <!-- page header -->    
    <div class="dev-page-header">

        <div class="dph-logo">
            <a href="index.html">Tindak Lanjut Audit Audit</a>
            <a class="dev-page-sidebar-collapse">
                <div class="dev-page-sidebar-collapse-icon">
                    <span class="line-one"></span>
                    <span class="line-two"></span>
                    <span class="line-three"></span>
                </div>
            </a>
        </div>

            <!--
            <ul class="dph-buttons pull-right">                    
                <li class="dph-button-stuck">
                    <a href="#" class="dev-page-search-toggle">
                        <div class="dev-page-search-toggle-icon">
                            <span class="circle"></span>
                            <span class="line"></span>
                        </div>
                    </a>
                </li>                    
            </ul>                                                
        -->
    </div>
    <!-- ./page header -->


    <!-- page container -->
    <div class="dev-page-container">

        <!-- page sidebar -->
        <?php include "include-menu.php" ?>
        <!-- ./page sidebar -->

        <!-- page content -->
        <div class="dev-page-content">                    
            <!-- page content container -->
            <div class="container">

                <!-- email template -->
                <div class="dev-email">
                    <!-- email navigation -->
                    <div class="dev-email-navigation">

                        <div class="dev-email-navigation-compose">
                            <a href="#" class="btn btn-success btn-block">
                                <span> 2016 <br>Jakarta Kelapa Gading</span>
                            </a>
                        </div>
                        <!--
                        <div class="dev-email-navigation-labels">
                            <ul>
                                <div class="title">Kertas Kerja Audit</div>     
                                <li><a href="index-pelaksanaan-audit-input-kesimpulan.php" class="active"><i class="fa fa-sitemap"></i> Semua Kertas Kerja</a></li>
                                <li><a href="index-pelaksanaan-audit-input-kesimpulan.php"><i class="fa fa-user"></i> Agus</a></li>
                                <li><a kesimpulanf="index-pelaksanaan-audit-input-kesimpulan.php"><i class="fa fa-user"></i> Fadhil</a></li>
                                <li><a href="index-pelaksanaan-audit-input-kesimpulan.php"><i class="fa fa-user"></i> Fahreza</a></li>
                            </ul>
                        </div>
                    
                    <div class="dev-email-navigation-labels">
                        <ul>
                            <div class="title">Temuan</div>
                            <li><a href="index-pelaksanaan-audit-input-temuan.php"><i class="fa fa-sort-amount-asc"></i> Semua Temuan</a></li>
                            <li><a href="index-pelaksanaan-audit-input-temuan.php"><i class="fa fa-user"></i> Agus</a></li>
                            <li><a href="index-pelaksanaan-audit-input-temuan.php"><i class="fa fa-user"></i> Fadhil</a></li>
                            <li><a href="index-pelaksanaan-audit-input-temuan.php"><i class="fa fa-user"></i> Fahreza</a></li>
                        </ul>
                    </div>
                -->

            </div>
            <!-- ./email navigation -->

            <!-- list of messages -->
            <div class="dev-email-messages">

                <div class="dev-email-message-panel">
                    <div class="checkbox">
                        <input type="checkbox" id="email_messages_checkall"/>
                        <label for="email_messages_checkall">&nbsp;</label>
                    </div>
                    <div class="btn-group pull-right">
                        <button class="btn btn-default"><i class="fa fa-check-square">&nbsp; Approve Selected</i></button>                                        
                    </div>
                </div>

                <div class="dev-email-messages-list">

                    <div class="dev-email-messages-list-item">
                        <div class="dev-email-messages-list-item-toolbar">
                            <div class="checkbox">
                                <input type="checkbox" id="email_message_1"/>
                                <label for="email_message_1">&nbsp;</label>
                            </div>
                                    <!--
                                    <div class="star">
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                -->
                            </div>
                            <div class="dev-email-messages-list-item-info">
                                <div class="name">KODE TEMUAN TEM.2016.903.001 - Kartu belum dicetak  <br> (opsi tampilan 1) </div>
                                <div class="time">KKA.01</div>
                                <div class="message">
                                    Dari Januari 2015 - Agustus 2016, diketahui bahwa kantor cabang tidak dapat melakukan pencatatan dengan baik. terdapat 1500 potensi yang tidak dilakukan penanggulangan dengan baik
                                </div>
                            </div>
                        </div>

                        <div class="dev-email-messages-list-item">
                            <div class="dev-email-messages-list-item-toolbar">
                                <div class="checkbox">
                                    <input type="checkbox" id="email_message_2"/>
                                    <label for="email_message_2">&nbsp;</label>
                                </div>                                          
                            </div>
                            <div class="dev-email-messages-list-item-info">
                                <div class="name">KODE TEMUAN TEM.2016.903.001 - Kartu belum dicetak  <br> (opsi tampilan 2) </div>
                                <div class="time">KKA.01</div>  
                                <div class="message">
                                    Langkah Pemeriksaan :
                                    <br> 1. Melakukan ini itu
                                    <br> 2. Melakukan itu itu
                                    <br> 3. Melakukan ini ini
                                </div>
                            </div>
                        </div>

                        <div class="dev-email-messages-list-item active">
                            <div class="dev-email-messages-list-item-toolbar">
                                <div class="checkbox">
                                    <input type="checkbox" id="email_message_3"/>
                                    <label for="email_message_3">&nbsp;</label>
                                </div>
                                <div class="star">
                                    <i class="fa fa-star-o"></i>
                                </div>                                            
                            </div>
                            <div class="dev-email-messages-list-item-info">
                             <div class="name">KODE TEMUAN TEM.2016.903.001 - Kartu belum dicetak  <br> (opsi tampilan 3) </div>
                             <div class="time">KKA.01</div> 
                             <div class="message">
                                diisi dengan berbagai macam kemungkinan yang mau ditampilkan khususnya dalam informasi Program Audit
                            </div>
                        </div>
                    </div>



                </div>

            </div>
            <!-- ./list of messages -->

            <!-- email message -->
            <div class="dev-email-message">

                <div class="dev-email-message-panel">
                    <div class="btn-group">
                        <button class="btn btn-default"><i class="fa fa-warning"> &nbsp; Reset</i></button>
                        <button class="btn btn-default"><i class="fa fa-prints"> &nbsp; Print</i></button>
                    </div>
                </div>

                <div class="panel panel-default" id="email-panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">KODE TEMUAN TEM.2016.903.001 - Kartu belum dicetak</h3>
                        <ul class="panel-btn">
                            <li><a href="#" class="btn btn-danger" onClick="dev_panel_fullscreen($(this).parents('.panel')); return false;"><i class="fa fa-compress"></i></a></li>
                        </ul>
                    </div>                                                                              
                    <div class="panel-body">
                        <!-- disini -->
                <!--
                <div class="dev-email-message-from">
                    <img src="assets/images/users/user_1.jpg"> Agus                                    
                </div>
                <div class="dev-email-message-date">
                    17:55, 02 Oktober 2016
                </div>
            -->

            <div class="dev-email-message-form">

              <!-- START ACCORDION  -->
              <div class="panel-group accordion">

                <div class="panel panel-default ">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a href="#acc01">
                                Historical Temuan
                                <!-- <span  class="tl_waktu">17:55, 02 Oktober 2016</span> -->
                            </a>
                        </h4>
                    </div>                                
                    <div class="panel-body" id="acc01">

                        <div class="timeline">

                            <div class="timeline-item">
                                <div class="timeline-item-date">15 Oktober 2016, 17:55</div>
                                <div class="timeline-item-image"><img src="assets/images/users/user_3.jpg"></div>
                                <div class="timeline-item-data">
                                    <h4>Opini Awal</h4>
                                    <p class="text-muted">Kami Mengakui adanya hal itu</p>
                                </div>
                            </div>

                            <div class="timeline-item">
                                <div class="timeline-item-date">17 Oktober 2016, 17:55</div>
                                <div class="timeline-item-image"><img src="assets/images/users/user_3.jpg"></div>
                                <div class="timeline-item-data">
                                    <h4>Jawaban Tindak Lanjut #1</h4>
                                    <p class="text-muted">Jawaban atas temuan telah diupload sesuai dengan tertera</p>
                                    <div class="dev-email-message-attachment">

                                        <strong>Bukti Tindak Lanjut:</strong><br>
                                        <a href="#">Screenshoot SIJSTK 1.jpeg</a>, <a href="#">Screenshoot SIJSTK 2.jpeg</a>

                                    </div>
                                </div>
                            </div>

                            <div class="timeline-item timeline-item-even">
                                <div class="timeline-item-date">18 Oktober 2016, 17:55</div>
                                <div class="timeline-item-image"><img src="assets/images/users/user_1.jpg"></div>
                                <div class="timeline-item-data">
                                    <h4>Feedback Tindak Lanjut #1</h4>
                                    <p class="text-muted">Data kurang lengkap masih belum ada bukti non-aktif perusahaaan dari Disnaker</p>
                                </div>
                            </div>

                            <div class="timeline-item">
                                <div class="timeline-item-date">19 Oktober 2016, 17:55</div>
                                <div class="timeline-item-image"><img src="assets/images/users/user_3.jpg"></div>
                                <div class="timeline-item-data">
                                   <h4>Jawaban Tindak Lanjut #2</h4>
                                   <p class="text-muted">Data telah dilengkapi</p>
                                   <div class="dev-email-message-attachment">

                                    <strong>Bukti Tindak Lanjut:</strong><br>
                                    <a href="#">disnaker.jpeg</a>
                                </div>
                            </div>
                        </div>

                        <div class="timeline-item timeline-item-even">
                            <div class="timeline-item-date">18 Oktober 2016, 17:55</div>
                            <div class="timeline-item-image"><img src="assets/images/users/user_1.jpg"></div>
                            <div class="timeline-item-data">
                                <h4>Feedback Tindak Lanjut #2</h4>
                                <p class="text-muted">Data telah lengkap, temuan dinyatakan tuntas</p>
                            </div>
                        </div>

                    </div>

                </div>                                
            </div>

        </div>
        <!-- END ACCORDION -->


    </div>
    <hr>
    <label>Isi Tindak Lanjut</label>
    <div class="form-group">
        <textarea class="form-control" placeholder="" rows="5">
        </textarea>
    </div>

    <div class="row">
        <div class="form-group">
         <div class="col-md-3">
             <label> Status <span>Temuan</span></label>
             <select>
                <option value="0"> Proses</option>
                <option value="1"> Closed saat penutupan</option>
                <option value="2"> Closed saat pembuatan laporan</option>
                <option value="3"> Atensi Direktur Utama</option>
                <option value="4"> Tuntas</option>

            </select>
        </div>
    </div>

    <div class="form-group">
        <input type="file" name="file_1" class="file"/>
        <button class="btn btn-danger pull-right">Send</button>
    </div>

    <div class="dev-email-message-attachment">
        <strong>Kertas Kerja:</strong><br>
        <a href="#">2016-J01-KK.01-Agus.doc</a>, <a href="#">Data Potensi</a>
    </div>

</div>
<!-- panel -->
</div>
</div>
<!-- ./ panel -->
<!-- ./email message -->
</div>
<!-- ./email template -->                        

</div>
<!-- ./page content container -->

<?php include "include-footer.php" ?>
