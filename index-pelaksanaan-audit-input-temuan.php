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
                                <li><a href="index-pelaksanaan-audit-input-kesimpulan.php"><i class="fa fa-sitemap"></i> Semua Kertas Kerja</a></li>
                                <li><a href="index-pelaksanaan-audit-input-kesimpulan.php"><i class="fa fa-user"></i> Agus</a></li>
                                <li><a kesimpulanf="index-pelaksanaan-audit-input-kesimpulan.php"><i class="fa fa-user"></i> Fadhil</a></li>
                                <li><a href="index-pelaksanaan-audit-input-kesimpulan.php"><i class="fa fa-user"></i> Fahreza</a></li>
                            </ul>
                        </div>

                        <div class="dev-email-navigation-labels">
                            <ul>
                                <div class="title">Temuan</div>
                                <li><a href="index-pelaksanaan-audit-input-temuan.php" class="active"><i class="fa fa-sort-amount-asc"></i> Semua Temuan</a></li>
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
                                <button class="btn btn-default" data-toggle="modal" data-target="#modal_approve_pelaksanaan"><i class="fa fa-check-square">&nbsp; Review</i></button>                                    
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
                        <button class="btn btn-default" data-toogle="modal" data-target="#modal_review_pelaksanaan"><i class="fa fa-warning"> &nbsp; Feedback</i></button>
                        <a class="btn btn-default" href="lha.pdf"><i class="fa fa-prints"> &nbsp; Print</i></a>
                    </div>
                </div>

                <!--
                <div class="dev-email-message-from">
                    <img src="assets/images/users/user_1.jpg"> Agus                                    
                </div>
                <div class="dev-email-message-date">
                    17:55, 02 Oktober 2016
                </div>
                    
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
                    <!-- aksi -->
                    <div class="dev-email-message-form">
                            <!-- tab temuan
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

                    <?php include "index-pelaksanaan-audit-input-temuan-table.php" ?>
            </div>

        </div>
    </div>

        <!--        
        <div class="dev-email-message-attachment">
            <strong>Kertas Kerja:</strong><br>
            <a href="#">2016-J01-KK.01-Agus.doc</a>, <a href="#">Data Potensi</a>
        </div>
    -->


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
