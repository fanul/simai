<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- meta section -->
        <title>SIMAI - Contoh Mock UP</title>
        
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
        <meta http-equiv="X-UA-Compatible" content="IE=edge" >
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" >
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" >
        <!-- ./meta section -->
        
        <!-- css styles -->
        <link rel="stylesheet" type="text/css" href="css/blue-white.css" id="dev-css">
        <!-- ./css styles -->                                     
        
        <!--[if lte IE 9]>
        <link rel="stylesheet" type="text/css" href="css/dev-other/dev-ie-fix.css">
        <![endif]-->
        
        <!-- javascripts -->
        <script type="text/javascript" src="js/plugins/modernizr/modernizr.js"></script>
        <!-- ./javascripts -->
        
        <style>
            .dev-page{visibility: hidden;}            
        </style>
    </head>
    <body>
        <!-- set loading layer -->
        <div class="dev-page-loading preloader"></div>
        <!-- ./set loading layer -->       
        
        <!-- page wrapper -->
        <div class="dev-page">
            
            <!-- page header -->    
            <div class="dev-page-header">
                
                <div class="dph-logo">
                    <a href="index.html">Tindak Lanjut Audit</a>
                    <a class="dev-page-sidebar-collapse">
                        <div class="dev-page-sidebar-collapse-icon">
                            <span class="line-one"></span>
                            <span class="line-two"></span>
                            <span class="line-three"></span>
                        </div>
                    </a>
                </div>

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
                
            </div>
            <!-- ./page header -->
            
            <!-- page container -->
            <div class="dev-page-container">

                <!-- page sidebar -->
                <div class="dev-page-sidebar">
                    
                    <ul class="dev-page-navigation">
                        <li class="title">Menu</li>
                        <li class="active">
                            <a href="index.html"><i class="fa fa-desktop"></i> <span>Dashboard</span></a>
                        </li>

                        <!-- contoh menu -->                        
                            <?php include "menu.php" ?>
                        <!-- ./contoh menu -->        



                    </ul>
                </div>
                <!-- ./page sidebar -->
                
                 <!-- page content -->
                <div class="dev-page-content">                    
                    <!-- page content container -->
                    <div class="container">
                        
                        <!-- page title -->
                        <div class="page-title">
                            
                            <ul class="breadcrumb">
                                <li><a href="#">Listboard</a></li>                                
                                <li>Tindak Lanjut Audit</li>
                            </ul>



                        </div>                        
                        <!-- ./page title -->
                            


                        <!-- datatables plugin -->
                        <div class="wrapper wrapper-white">
                            <div class="page-subtitle">
                                <h3>TIndak Lanjut Audit</h3>
                                <p>Berisi tentang tindak lanjut audit yang akan dilakukan</p>
                            </div> 

                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_form">Tambah Tindak Lanjut</button>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_default">Edit</button>

                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-sortable">
                                    <thead>
                                        <tr>
                                            <th>Tahun</th>
                                            <th>Auditee</th>
                                            <th>Banyak Temuan</th>
                                            <th>Temuan Tuntas</th>
                                            <th>Nama KT</th>
                                            <th>Deadline Komitment</th>
                                        </tr>
                                    </thead>                               
                                    <tbody>
                                        <tr>
                                            <td>2016</td>
                                            <td>Jakarta Grogol</td>
                                            <td>30</td>
                                            <td>15</td>
                                            <td>bapak itu tuh</td>
                                            <td>31-12-2016</td>
                                        </tr>
                                        <tr>
                                            <td>2016</td>
                                            <td>Jakarta mampang</td>
                                            <td>30</td>
                                            <td>15</td>
                                            <td>bapak itu tuh</td>
                                            <td>31-12-2016</td>
                                        </tr> 
                                        <tr>
                                            <td>2015</td>
                                            <td>banjarmasin</td>
                                            <td>27</td>
                                            <td>15</td>
                                            <td>bapak itu tuh</td>
                                            <td>31-12-2016</td>
                                        </tr>   
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>                        
                        <!-- ./datatables plugin -->

                        <!-- modal form -->
                        <div class="modal fade" id="modal_form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Tambah Temuan</h4>
                                    </div>
                                    <div class="modal-body">

                                        <div class="form-group-one-unit">
                                            <div class="row">
                                                <div class="col-md-12">                        
                                                    <div class="form-group form-group-custom">
                                                        <label>Tahun <span></span></label>
                                                        <input type="text" class="form-control" placeholder="Masukan Tahun"/>
                                                    </div>                        
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group form-group-custom">
                                                        <label>Auditee <span></span></label>
                                                        <input type="text" class="form-control" placeholder="Masukan Auditee"/>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">                        
                                                    <div class="form-group form-group-custom">
                                                        <label>Masukan Nama KT <span>Siapa nama KTnya</span></label>
                                                        <textarea class="summernote" rows="3"></textarea>
                                                    </div>                        
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.modal form -->


                        <!-- Copyright -->
                        <div class="copyright">
                            <div class="pull-left">
                                &copy; 2016 <strong>SPI</strong>.
                            </div>
                            <div class="pull-right">
                                <a href="#">Contoh</a> / <a href="#">Mock Up Simai</a>
                            </div>
                        </div>
                        <!-- ./Copyright -->
                    </div>
                    <!-- ./page content container -->
                                        
                </div>
                <!-- ./page content -->                                               
            </div>  
            <!-- ./page container -->
            
           
            <!-- page footer -->    
            <div class="dev-page-footer dev-page-footer-fixed"> <!-- dev-page-footer-closed dev-page-footer-fixed -->
                <ul class="dev-page-footer-controls">
                    <li><a href="pages-login.html" class="tip" title="Login"><i class="fa fa-power-off"></i></a></li>
                   
                    <li class="pull-right">
                        <a class="dev-page-sidebar-minimize tip" title="Toggle navigation"><i class="fa fa-outdent"></i></a>
                    </li>
                </ul>
                
                <!-- page footer buttons -->
                <ul class="dev-page-footer-buttons">                    
                    <li><a href="#footer_content_1" class="dev-page-footer-container-open tip" title="summary audit yang berjalan"><i class="fa fa-database"></i></a></li>
                    <!-- demo 2                     
                    <li><a href="#footer_content_2" class="dev-page-footer-container-open"><i class="fa fa-bar-chart"></i></a></li>
                    <!-- ./demo 2 -->
                    <li><a href="#" onclick="return backToTop();" class="dev-page-footer-container-open tip" title="Kembali ke Atas Halaman"><i class="fa fa-server"></i></a></li>
                </ul>
                <!-- ./page footer buttons -->
                <!-- page footer container -->
                <div class="dev-page-footer-container">
                    
                    <!-- loader and close button -->
                    <div class="dev-page-footer-container-layer">
                        <a href="#" class="dev-page-footer-container-layer-button"></a>
                    </div>
                    <!-- ./loader and close button -->                    
                    
                    <!-- informers -->
                    <div class="dev-page-footer-container-content" id="footer_content_1">                        
                        <div class="dev-list-informers">                            
                            <div class="dev-list-informers-item">
                                <div class="chart">
                                    <input class="knob" data-width="100" data-max="100" data-fgColor="#E74E40" value="33" data-angleArc="250" data-angleOffset="-125" data-thickness=".1"/>
                                </div>
                                <div class="info">
                                    <h5>Audit Terlaksana</h5>
                                    <p>S.d Oktober 2016<strong><br>33 Auditee</strong></p>
                                    <p class="text-higlight">33% - <br> Dari Rencana Audit Tahunan</p>
                                </div>
                            </div>
                            
                            <div class="dev-list-informers-item">
                                <div class="chart">
                                    <input class="knob" data-width="100" data-max="100" data-fgColor="#85d6de" value="75" data-thickness=".1"/>
                                </div>
                                <div class="info">
                                    <h5>Temuan <br> Audit Internal<h5>
                                    <p>Tuntas- <strong>75</strong></p>
                                    <p>Belum Tuntas - <strong>25</strong></p>
                                    <p class="text-higlight">Total Temuan 100</p>
                                </div>
                            </div>
                            
                            <div class="dev-list-informers-item">
                                <div class="chart">
                                    <input class="knob" data-width="100" data-max="100" data-fgColor="#82b440" value="62" data-thickness=".1"/>
                                </div>
                                <div class="info">
                                    <h5>Temuan <br> Audit Internal<h5>
                                    <p>Tuntas- <strong>62</strong></p>
                                    <p>Belum Tuntas - <strong>38</strong></p>
                                    <p class="text-higlight">Total Temuan 100</p>
                                </div>
                            </div>                            
                        </div>                        
                    </div>
                    <!-- ./informers -->
                    
                   
                    
                    <!-- projects -->
                    <div class="dev-page-footer-container-content" id="footer_content_3">                        
                        <ul class="dev-list-projects">
                        </ul>                        
                    </div>
                    <!-- ./projects -->
                </div>
                <!-- ./page footer container -->
                
                <ul class="dev-page-footer-controls dev-page-footer-controls-auto pull-right">
                    <li><a class="dev-page-footer-fix tip" title="Fixed footer"><i class="fa fa-thumb-tack"></i></a></li>
                    <li><a class="dev-page-footer-collapse dev-page-footer-control-stuck"><i class="fa fa-dot-circle-o"></i></a></li>
                </ul>
            </div>
            <!-- ./page footer -->
            
            <!-- page search -->
            <div class="dev-search">
                <div class="dev-search-container">
                    <div class="dev-search-form">
                    <form action="index.html" method="post">
                        <div class="dev-search-field">
                            <input type="text" placeholder="Search..." value="Nature">
                        </div>                        
                    </form>
                    </div>
                    <div class="dev-search-results"></div>
                </div>
            </div>
            <!-- page search -->            
        </div>
        <!-- ./page wrapper -->

        <!-- javascript -->
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>       
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
        
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>        
        <script type="text/javascript" src="js/plugins/moment/moment.js"></script>
        
        <script type="text/javascript" src="js/plugins/knob/jquery.knob.min.js"></script>
        <script type="text/javascript" src="js/plugins/sparkline/jquery.sparkline.min.js"></script>
        
        <script type="text/javascript" src="js/plugins/bootstrap-select/bootstrap-select.js"></script>
        
        <script type="text/javascript" src="js/plugins/nvd3/d3.min.js"></script>
        <script type="text/javascript" src="js/plugins/nvd3/nv.d3.min.js"></script>
        <script type="text/javascript" src="js/plugins/nvd3/lib/stream_layers.js"></script>
        
        <script type="text/javascript" src="js/plugins/waypoint/waypoints.min.js"></script>
        <script type="text/javascript" src="js/plugins/counter/jquery.counterup.min.js"></script>        

        <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="js/plugins/sortable/sortable.min.js"></script>
        <script type="text/javascript" src="js/plugins/summernote/summernote.min.js"></script>
                
        <!-- <script type="text/javascript" src="js/dev-settings.js"></script> -->
        <script type="text/javascript" src="js/dev-loaders.js"></script>
        <script type="text/javascript" src="js/dev-layout-default.js"></script>
        <script type="text/javascript" src="js/demo.js"></script>
        <script type="text/javascript" src="js/dev-app.js"></script>
        <script type="text/javascript" src="js/demo-dashboard.js"></script>
        <!-- ./javascript -->

        <!-- tambahan -->
        <script type="text/javascript">
            function backToTop () {
                window.scrollTo(0, 0);
            }
        </script>
        <!-- ./tambahan -->

    </body>
</html>






