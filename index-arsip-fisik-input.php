<?php include "include-header.php" ?>


<!-- page container -->
<div class="dev-page-container">
    <?php include "include-menu.php" ?>

    <!-- page content -->
    <div class="dev-page-content">                    
        <!-- page content container -->
        <div class="container">

            <!-- page title -->
            <div class="page-title">
                <h1>Sumedang - PKAT 2015</h1>
                <p>Kantor Cabang</p>
                
                <ul class="breadcrumb">
                    <li><a href="#">SIMAI</a></li>
                    <li><a href="#">Arsip Fisik</a></li>
                    <li>Input Arsip</li>
                </ul>
            </div>                        
            <!-- ./page title -->
            
            <div class="wrapper">                   
                <div class="row row-wider">
                    <div class="col-md-3">

                        <!-- sisi kiri -->
                        <div class="profile margin-bottom-0">

                            <!-- 
                            <div class="profile-image">
                                <img src="assets/images/users/user_1.jpg">
                                <!--
                                <div class="profile-badges">
                                    <a href="#" class="profile-badges-left"><i class="fa fa-plus"></i></a>
                                    <a href="#" class="profile-badges-right"><i class="fa fa-camera"></i></a>
                                </div>
                                
                                <div class="profile-status online"></div>
                            </div>
                        -->

                            <!--
                            <div class="profile-info">
                                <!-- <h4>Devin Stephens</h4>
                                <span><i class="fa fa-map-marker"></i> Audit Internal, Banjarmasin</span>
                            </div>
                        -->

                        <div class="profile-info text-left">
                            Kelengkapan Arsip <strong>70%</strong>
                            <div class="progress progress-bar-xs">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
                            </div>
                        </div>
                    </div>

                        <!--
                        <div class="list-group">
                            <a href="#" class="list-group-item active" data-toggle="modal" data-target="#modal_tambah_role"><i class="fa fa-wrench"></i> Tambah Role </a>
                            <!--
                            <a href="#" class="list-group-item"><i class="fa fa-cog"></i> Settings</a>
                            <a href="#" class="list-group-item"><i class="fa fa-comment"></i> Messages <span class="badge badge-info">2</span></a>
                            <a href="#" class="list-group-item"><i class="fa fa-photo"></i> Gallery</a> >                                       
                        </div>
                    -->

                        <!--
                        <div class="panel panel-default panel-muted">
                            
                            <div class="panel-body" style="border-bottom: 0px;">
                                <div class="page-subtitle page-subtitle-centralized margin-bottom-0">
                                    <h3>Your Contacts</h3>
                                    <p>You can remove anyone from your contacts</p>
                                </div>
                            </div>
                            
                            <div class="panel-body list-contacts" style="border-bottom: 0px;">
                                <a href="#" class="list-contacts-item contact-online">
                                    <img src="assets/images/users/user_1.jpg"> Devin Stephens <button class="btn btn-danger btn-clean btn-rounded btn-only-icon pull-right"><i class="fa fa-times"></i></button>
                                </a>
                                <a href="#" class="list-contacts-item contact-online">
                                    <img src="assets/images/users/user_2.jpg"> John Doe <button class="btn btn-danger btn-clean btn-rounded btn-only-icon pull-right"><i class="fa fa-times"></i></button>
                                </a>
                                <a href="#" class="list-contacts-item contact-away">
                                    <img src="assets/images/users/user_3.jpg"> Marissa George <button class="btn btn-danger btn-clean btn-rounded btn-only-icon pull-right"><i class="fa fa-times"></i></button>
                                </a>
                                <a href="#" class="list-contacts-item contact-away">
                                    <img src="assets/images/users/user_4.jpg"> Sydney Reeves <button class="btn btn-danger btn-clean btn-rounded btn-only-icon pull-right"><i class="fa fa-times"></i></button>
                                </a>
                                <a href="#" class="list-contacts-item contact-offline">
                                    <img src="assets/images/users/user_5.jpg"> Karen Spencer <button class="btn btn-danger btn-clean btn-rounded btn-only-icon pull-right"><i class="fa fa-times"></i></button>
                                </a>                                            
                            </div>
                            <div class="panel-body" style="border-top: 0px;">
                                <button class="btn btn-primary btn-rounded btn-clean pull-right">Load more</button>
                            </div>
                        </div>
                    -->
                </div>

                <!-- ./sisi kiri -->

                <div class="col-md-9">

                    <!-- ONE BLOCK -->
                    <div class="page-subtitle margin-bottom-0">
                        <h3>Detail</h3>
                    </div>
                    <div class="form-group-one-unit margin-bottom-40">

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group form-group-custom">
                                    <label>Cluster</label>
                                    <input type="text" class="form-control" value=""/>                                            
                                </div>                        
                            </div>
                            <div class="col-md-3">
                                <div class="form-group form-group-custom">
                                    <label>Row</label>
                                    <input type="text" class="form-control" value=""/>                                            
                                </div>                        
                            </div>
                            <div class="col-md-3">
                                <div class="form-group form-group-custom">
                                    <label>Box</label>
                                    <input type="text" class="form-control" value=""/>                                            
                                </div>                        
                            </div><div class="col-md-3">
                            <div class="form-group form-group-custom">
                                <label>Sekat</label>
                                <input type="text" class="form-control" value=""/>                                            
                            </div>                        
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group form-group-custom">
                                <label>No. Urut</label>
                                <input type="text" class="form-control" value=""/>
                            </div>                        
                        </div>
                        <div class="col-md-3">
                            <div class="form-group form-group-custom">
                                <label>Perkembangan</label>
                                <input type="text" class="form-control" value=""/>                     
                            </div>                        
                        </div>
                        <div class="col-md-3">
                            <div class="form-group form-group-custom">
                                <label>Periode Awal</label>
                                <input type="text" class="form-control datepicker"/>
                            </div>                        
                        </div><div class="col-md-3">
                        <div class="form-group form-group-custom">
                            <label>Periode Akhir</label>
                            <input type="text" class="form-control datepicker"/>

                        </div>                        
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-9">
                     <div class="form-group form-group-custom">
                     <label>Jenis Audit</label>
                        <div class="form-select-wrapper">
                            <select class="form-control">
                                <option selected="selected">LHA</option>
                                <option>Eksternal</option>
                                <option>Lain-Lain</option>
                            </select>
                        </div>
                    </div>                
                </div>
                <div class="col-md-3">
                    <div class="form-group form-group-custom">
                        <label>Jumlah</label>
                        <input type="text" class="form-control" value=""/>
                    </div>                        
                </div>

            </div>


        </div>
        <!-- ./one block -->

        <!-- ONE BLOCK -->
        <div class="page-subtitle margin-bottom-0">
            <h3>Khusus LHA</h3>
        </div>

        <div class="form-group-one-unit margin-bottom-40">

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group form-group-custom">
                        <label>NO. Sprint</label>
                        <input type="text" class="form-control" value=""/>                                            
                    </div>                        
                </div>
                <div class="col-md-6">
                    <div class="form-group form-group-custom">
                        <label>Tanggal Sprint</label>
                        <input type="text" class="form-control datepicker"/>
                    </div>                        
                </div>                      
            </div>


            <div class="row">
                <div class="col-md-6">
                    <div class="form-group form-group-custom">
                        <label>No. LHA</label>
                        <input type="text" class="form-control" value=""/>
                    </div>                        
                </div>
                <div class="col-md-6">
                    <div class="form-group form-group-custom">
                        <label>Tanggal LHA</label>
                        <input type="text" class="form-control datepicker"/>
                    </div>                        
                </div>
            </div>

        </div>
        <!-- ./one block -->


                        <!--
                        <div class="page-subtitle margin-bottom-0">
                            <h3>Role</h3>
                            <p>Hak Akses yang dimiliki</p>
                        </div>
                    -->

                    <!-- tabel hak akses -->
                    <?php //include "index-setup-profile-role-table.php" ?>
                    <!-- ./tabel hak akses -->



                    <div class="row">
                        <div class="col-md-12">                                            
                            <button class="btn btn-danger pull-right">Save</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <?php include "index-setup-profile-modal.php" ?>

        <!-- Copyright -->
        <?php include "include-copyright.php" ?>
        <!-- ./Copyright -->

    </div>
    <!-- ./page content container -->

</div>
<!-- ./page content -->                                               
</div>  
<!-- ./page container -->
<?php include "include-footer.php" ?>