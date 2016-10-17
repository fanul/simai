    <?php include "include-header.php" ?>

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
                                <button class="btn btn-default" data-toggle="modal" data-target="#modal_approve_pelaksanaan"><i class="fa fa-check-square">&nbsp; Approve Selected</i></button>                                        
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
                                <div class="name">PA.01 - Perluasan Kepesertaan <br> (opsi tampilan 1) </div>
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
                                <div class="name">PA.01 - Perluasan Kepesertaan <br> (opsi tampilan 2) </div>
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
                               <div class="name">PA.01 - Perluasan Kepesertaan <br> (opsi tampilan 3) </div>
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
                        <h3 class="panel-title">PA.01 - KK.01 - Perluasan Kepesertaan</h3>
                        <ul class="panel-btn">
                            <li><a href="#" class="btn btn-danger" onClick="dev_panel_fullscreen($(this).parents('.panel')); return false;"><i class="fa fa-compress"></i></a></li>
                        </ul>
                    </div>                                                                              
                    <div class="panel-body">

                        <!-- aksi -->
                        <div class="dev-email-message-form">

                          <!-- START ACCORDION  -->
                          <div class="panel-group accordion">

                            <div class="panel panel-default ">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="#acc01">
                                            Jawaban Temuan #1
                                            <span  class="tl_waktu">17:55, 02 Oktober 2016</span>
                                        </a>
                                    </h4>
                                </div>                                
                                <div class="panel-body" id="acc01">

                                    <div class="timeline">                            
                                        <div class="timeline-item">
                                            <div class="timeline-item-date">1 minute ago</div>
                                            <div class="timeline-item-image"><img src="assets/images/users/user_1.jpg"></div>
                                            <div class="timeline-item-data">
                                                <h4>Shannon Freeman</h4>
                                                <p class="text-muted">Purchased a few items in your shop</p>
                                            </div>
                                        </div>

                                        <div class="timeline-item timeline-item-even">
                                            <div class="timeline-item-date">5 minutes ago</div>
                                            <div class="timeline-item-image"><img src="assets/images/users/user_2.jpg"></div>
                                            <div class="timeline-item-data">
                                                <h4>Marissa George</h4>
                                                <p class="text-muted">Posted new article to site</p>
                                            </div>
                                        </div>

                                        <div class="timeline-item">
                                            <div class="timeline-item-date">1 hour ago</div>
                                            <div class="timeline-item-image"><img src="assets/images/users/user_3.jpg"></div>
                                            <div class="timeline-item-data">
                                                <h4>Devin Stephens</h4>
                                                <p class="text-muted">Confirmed a purchase</p>
                                            </div>
                                        </div>

                                        <div class="timeline-item timeline-item-even">
                                            <div class="timeline-item-date">2 hours ago</div>
                                            <div class="timeline-item-image"><img src="assets/images/users/user_4.jpg"></div>
                                            <div class="timeline-item-data">
                                                <h4>Sydney Reeves</h4>
                                                <p class="text-muted">Done something near somewhere</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="dev-email-message-attachment">
                                        <strong>Bukti Tindak Lanjut:</strong><br>
                                        <a href="#">Screenshoot SIJSTK 1.jpeg</a>, <a href="#">Screenshoot SIJSTK 2.jpeg</a>
                                    </div>
                                </div>                                
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="#acc02">
                                            Feedback SPI #1
                                            <span  class="tl_waktu">17:55, 03 Oktober 2016</span>
                                        </a>
                                    </h4>
                                </div>                                
                                <div class="panel-body" id="acc02">
                                    <p>
                                        Temuan belum tuntas karena masih belum ada lampiran dari disnaker
                                    </p>
                                </div>                                
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="#acc03">
                                            Jawaban Temuan #2
                                            <span  class="tl_waktu">17:55, 04 Oktober 2016</span>
                                        </a>
                                    </h4>
                                </div>                                
                                <div class="panel-body" id="acc03">
                                    <p>
                                        Telah dilampirkan surat penon-aktifan dari Disnaker
                                    </p>
                                    <div class="dev-email-message-attachment">
                                        <strong>Bukti Tindak Lanjut:</strong><br>
                                        <a href="#">Surat DIsnaker.jpeg</a>
                                    </div>
                                </div>                                
                            </div>

                            <div class="panel panel-default panel-opened">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="#acc04">
                                            <label>Feedback SPI #2</label>
                                            <span  class="tl_waktu">17:55, 05 Oktober 2016</span>
                                        </a>
                                    </h4>
                                </div>                                
                                <div class="panel-body" id="acc04">
                                    <p>
                                        Syarat sudah memenuhi untuk temuan dianggap tuntas                       </p>
                                    </div>                                
                                </div>

                            </div>
                            <!-- END ACCORDION -->

                        </div>

                    </div>
                </div>

                <div class="form-group">
                    <button class="btn btn-danger pull-right">Isi</button>
                </div>

            </div>

            <!-- modal -->
            <?php include "index-pelaksanaan-audit-approve.php" ?>
            <!-- ./modal -->

            <!-- ./email message -->
            <?php include "include-copyright.php" ?>
        </div>
        <!-- ./email template -->                        

    </div>
    <!-- ./page content container -->

    <?php include "include-footer.php" ?>
