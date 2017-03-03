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

                            <a class="btn btn-success btn-block" style="background-color: red" data-toggle="modal" data-target="#modal_approve_closing"><span>Closing Audit</span></a>

                            <a class="btn btn-success btn-block" style="background-color: blue" data-toggle="modal" data-target="#modal_approve_finish"><span>Approve Closing</span></a>

                        </div>





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
                                <button class="btn btn-default" data-toggle="modal" data-target="#modal_approve_pelaksanaan"><i class="fa fa-check-square">&nbsp; Approve</i></button>
                                <button class="btn btn-default" data-toggle="modal" data-target="#modal_review_pelaksanaan"><i class="fa fa-text-height">&nbsp; Review</i></button>                                        
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
                                    <i class="fa fa-lock"></i>
                                </div>                                            
                            </div>
                            <div class="dev-email-messages-list-item-info">
                               <div class="name">PA.01 - Perluasan Kepesertaan <br> (opsi tampilan 3) </div>
                               <div class="time">KKA.01</div> 
                               <div class="message">

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
                        <button class="btn btn-default" data-toggle="modal" data-target="#modal_review_pelaksanaan"><i class="fa fa-text-height"> &nbsp; Feedback</i></button>
                        <a class="btn btn-default" href="kka.pdf"><i class="fa fa-prints"> &nbsp; Print</i></a>
                    </div>
                </div>
                
                    <!--
                    <div class="dev-email-message-text">
                        <p>Hi John,</p>
                        <p>An Internet email message consists of three components, the message envelope, the message header, and the message body. The message header contains control information, including, minimally, an originator's email address and one or more recipient addresses. Usually descriptive information is also added, such as a subject header field and a message submission date/time stamp.</p>
                        <p>Email is an information and communications technology. It uses technology to communicate a digital message over the Internet. Users use email differently, based on how they think about it. There are many software platforms available to send and receive. Popular email platforms include Gmail, Hotmail, Yahoo! Mail, Outlook, and many others.</p>
                        <p>&nbsp;</p>
                        <p><strong>Thank you...</strong><br>Carlos Gallagher</p>
                    </div>
                -->

                <div class="panel panel-default" id="email-panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">PA.01 - KK.01 - Perluasan Kepesertaan</h3>
                        <ul class="panel-btn">
                            <li><a href="#" class="btn btn-danger" onClick="dev_panel_fullscreen($(this).parents('.panel')); return false;"><i class="fa fa-compress"></i></a></li>
                        </ul>
                    </div>                                                                              
                    <div class="panel-body">

                        <!-- START ACCORDION -->
                        <div class="panel-group accordion">

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="#acc01">
                                            Kertas Kerja
                                        </a>
                                    </h4>
                                </div>                                
                                <div class="panel-body" id="acc01">
                                    <!-- <div class="dev-email-message-title"></div> -->
                                    <div class="dev-email-message-from">
                                        <img src="assets/images/users/andre.png"> Andre Taulany                             
                                    </div>
                                    <div class="dev-email-message-date">
                                        17:55, 02 Oktober 2016
                                    </div>

                                    <div class="dev-email-message-form">
                                        <div class="form-group">
                                            <label> Hasil Desk-Audit :</label>
                                            <textarea class="form-control" placeholder="Post a quick reply" rows="5">
                                                Dari Januari 2015 - Agustus 2016, diketahui bahwa kantor cabang tidak dapat melakukan pencatatan dengan baik. terdapat 1500 potensi yang tidak dilakukan penanggulangan dengan baik
                                            </textarea>
                                        </div>
                                        <div class="form-group">
                                            <input type="file" name="file_1" class="file"/>
                                        </div>


                                        <div class="form-group">
                                            <label> Hasil Field-Work :</label>
                                            <textarea class="form-control" placeholder="Post a quick reply" rows="5">
                                                Dari Januari 2015 - Agustus 2016, diketahui bahwa kantor cabang tidak dapat melakukan pencatatan dengan baik. terdapat 1500 potensi yang tidak dilakukan penanggulangan dengan baik
                                            </textarea>
                                        </div>
                                        <div class="form-group">
                                            <input type="file" name="file_1" class="file"/>
                                        </div>

                                    </div>




                                    <div class="form-group-one-unit">
                                        <div class="row">
                                            <div class="col-md-12">                        

                                                <?php include "index-pelaksanaan-audit-nilai-simpulan.php" ?>

                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <button class="btn btn-danger pull-right">Isi</button>
                                    </div>
                                </div>                                
                            </div>

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
                                                <p class="text-muted">Sampai dengan saat ini hasil Desk Audit Masih belum ada, tolong dilengkapi</p>
                                            </div>
                                        </div>

                                        <div class="timeline-item timeline-item-even">
                                            <div class="timeline-item-date">18 Oktober 2016, 17:55</div>
                                            <div class="timeline-item-image"><img src="assets/images/users/andre.png"></div>
                                            <div class="timeline-item-data">
                                                <h4>Feedback Review #1</h4>
                                                <p class="text-muted">Data kurang lengkap masih belum ada bukti non-aktif perusahaaan dari Disnaker</p>
                                            </div>
                                        </div>

                                        <div class="timeline-item">
                                            <div class="timeline-item-date">19 Oktober 2016, 17:55</div>
                                            <div class="timeline-item-image"><img src="assets/images/users/ahok.png"></div>
                                            <div class="timeline-item-data">
                                             <h4>Review #2</h4>
                                             <p class="text-muted">Ya Dilengkapi</p>
                                         </div>
                                     </div>

                                     <div class="timeline-item timeline-item-even">
                                        <div class="timeline-item-date">18 Oktober 2016, 17:55</div>
                                        <div class="timeline-item-image"><img src="assets/images/users/andre.png"></div>
                                        <div class="timeline-item-data">
                                            <h4>Feedback Review #2</h4>
                                            <p class="text-muted">Data telah lengkap</p>
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

                                    <div class="timeline-item">
                                        <div class="timeline-item-date">17 Oktober 2016, 17:55</div>
                                        <div class="timeline-item-image"><img src="assets/images/users/ahok.png"></div>
                                        <div class="timeline-item-data">
                                            <h4>Review #4</h4>
                                            <p class="text-muted">Sudah Baik, Saya Approve</p>
                                        </div>
                                    </div>

                                </div>
                            </div>                                
                        </div>



                    </div>
                    <!-- END ACCORDION -->    


                </div>
            </div>



        </div>

        <!-- modal -->
        <?php include "index-pelaksanaan-audit-approve.php" ?>
        <?php include "index-pelaksanaan-audit-review.php" ?>
        <?php include "index-pelaksanaan-audit-closing.php" ?>
        <?php include "index-pelaksanaan-audit-finish.php" ?>

        <!-- ./modal -->

        <!-- ./email message -->

    </div>
    <!-- ./email template -->                        

</div>
<?php include "include-copyright.php" ?>

</div>
<!-- ./page content container -->

<?php include "include-footer.php" ?>
