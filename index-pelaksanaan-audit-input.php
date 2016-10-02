    <?php include "include-header.php" ?>

    <!-- page header -->    
    <div class="dev-page-header">

        <div class="dph-logo">
            <a href="index.html">Pelaksanaan Audit</a>
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

                        <div class="dev-email-navigation-labels">
                            <ul>
                                <div class="title">Kertas Kerja Audit</div>     
                                <li><a href="#" class="active"><i class="fa fa-sitemap"></i> Semua Kertas Kerja</a></li>
                                <li><a href="#"><i class="fa fa-user"></i> Agus</a></li>
                                <li><a href="#"><i class="fa fa-user"></i> Fadhil</a></li>
                                <li><a href="#"><i class="fa fa-user"></i> Fahreza</a></li>
                            </ul>
                        </div>

                        <div class="dev-email-navigation-labels">
                            <ul>
                                <div class="title">Temuan</div>
                                <li><a href="#"><i class="fa fa-sort-amount-asc"></i> Semua Temuan</a></li>
                                <li><a href="#"><i class="fa fa-user"></i> Agus</a></li>
                                <li><a href="#"><i class="fa fa-user"></i> Fadhil</a></li>
                                <li><a href="#"><i class="fa fa-user"></i> Fahreza</a></li>
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

                <div class="dev-email-message-title">PA.01 - KK.01 - Perluasan Kepesertaan</div>
                <div class="dev-email-message-from">
                    <img src="assets/images/users/user_1.jpg"> Agus                                    
                </div>
                <div class="dev-email-message-date">
                    17:55, 02 Oktober 2016
                </div>
                    <!--
                    <div class="dev-email-message-text">
                        <p>Hi John,</p>
                        <p>An Internet email message consists of three components, the message envelope, the message header, and the message body. The message header contains control information, including, minimally, an originator's email address and one or more recipient addresses. Usually descriptive information is also added, such as a subject header field and a message submission date/time stamp.</p>
                        <p>Email is an information and communications technology. It uses technology to communicate a digital message over the Internet. Users use email differently, based on how they think about it. There are many software platforms available to send and receive. Popular email platforms include Gmail, Hotmail, Yahoo! Mail, Outlook, and many others.</p>
                        <p>&nbsp;</p>
                        <p><strong>Thank you...</strong><br>Carlos Gallagher</p>
                    </div>
                -->

                <div class="dev-email-message-form">
                    <div class="form-group">
                        <textarea class="form-control" placeholder="Post a quick reply" rows="5">
                            Dari Januari 2015 - Agustus 2016, diketahui bahwa kantor cabang tidak dapat melakukan pencatatan dengan baik. terdapat 1500 potensi yang tidak dilakukan penanggulangan dengan baik
                        </textarea>
                    </div>
                    <div class="form-group">
                        <input type="file" name="file_1" class="file"/>
                        <button class="btn btn-danger pull-right">Isi</button>
                    </div>
                </div>
                
                <div class="dev-email-message-attachment">
                    <strong>Kertas Kerja:</strong><br>
                    <a href="#">2016-J01-KK.01-Agus.doc</a>, <a href="#">Data Potensi</a>
                </div>

                <div class="form-group-one-unit">
                    <div class="row">
                        <div class="col-md-12">                        
                            <div class="form-group form-group-custom">
                                <?php include "index-setup-proses-modal-proses4-table.php" ?>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <!-- ./email message -->
        </div>
        <!-- ./email template -->                        

    </div>
    <!-- ./page content container -->

    <?php include "include-footer.php" ?>