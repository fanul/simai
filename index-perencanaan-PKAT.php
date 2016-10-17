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
                        <div class="page-title">e
                            <h1>Perencanaan Audit - Input PKAT</h1>

                            <ul class="breadcrumb">
                                <li><a href="#">Simai</a></li>                                
                                <li>Perencanaan Audit</li>
                                <li>PKAT</li>
                            </ul>

                        </div>                        
                        <!-- ./page title -->

                        <div class="wrapper wrapper-white">

                            <div class="row">
                                <div class="col-md-4">
                                    <button class="btn btn-primary">+ Tambah</button>
                                    <button class="btn btn-warning">Approve</button>
                                </div>
                            </div>
                            <br>

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group-one-unit">
                                        <div class="row">                     
                                          <label>Pilih <span>Tahun</span></label>
                                          <select class="form-control selectpicker" data-live-search="true">
                                            <option value="2014">2014</option>
                                            <option value="2015">2015</option>
                                            <option valuce="2016">2016</option>
                                            <option value="2017">2017</option>
                                        </select>
                                    </div>                       
                                </div>
                            </div>
                        </div>

                        <br><br>


                        <!-- row -->
                        <div class="row">

                            <!-- panel tree -->
                            <div class="panel panel-default panel-collapsed">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Total PKAT (5) &nbsp;&nbsp;&nbsp;<span>2016</span>&nbsp;&nbsp;&nbsp;" Kanwil : (2) - Kantor Cabang : (2) - KCP : (1) "</h3>
                                    <ul class="panel-btn">
                                        <li><a href="#" class="btn btn-danger" onClick="dev_panel_fullscreen($(this).parents('.panel')); return false;"><i class="fa fa-compress"></i></a></li>
                                        <li>
                                            <a href="#" class="btn btn-danger panel-collapse"><i class="fa fa-angle-up"></i></a>
                                        </li>                                                
                                    </ul>
                                </div>
                                <div class="panel-body">

                                    <div class="col-md-6">
                                        <button class="btn btn-danger">Hilangkan Dari PKAT</button><br>

                                        <!-- tree unit kerja -->
                                        <div id="jstree_default" class="push-down-20"></div>
                                        <div id="jstree_checkbox" class="push-down-20">
                                            <ul>

                                                <li>Group Kanwil Jakarta - 3 - [3]
                                                    <ul>
                                                        <li>Kanwil Jakarta - 903</li>
                                                        <li>Kantor Cabang 
                                                            <ul>
                                                                <li>Jakarta Grogol - J02</li>
                                                                <li data-jstree='{"disabled":true, "icon":"glyphicon glyphicon-lock"}'>Jakarta Grogol - J02</li>
                                                                <li>Group Jakarta Grogol - GJ02 - [1]
                                                                    <ul>
                                                                        <li>KCP Cengkareng - J75</li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li>Group Kanwil Sulawesi Maluku - 8 - [1]
                                                    <ul>
                                                        <li>Kanwil Sulawesi Maluku - 908
                                                            
                                                        </li>
                                                    </ul>
                                                </li>

                                            </ul>
                                        </div> 
                                        <!-- ./tree unit kerja -->
                                    </div>

                                    <div class="col-md-3">
                                        <label>
                                            Audit Operasional :
                                            <br>Kanwil : <span>2</span>
                                            <br>Kantor Cabang : <span>1</span>
                                            <br>KCP : <span>1</span>
                                        </label>
                                    </div>


                                    <div class="col-md-3">
                                        <label>
                                            Audit Investigasi :
                                            <br>Kanwil : <span>0</span>
                                            <br>Kantor Cabang : <span>1</span>
                                            <br>KCP : <span>0</span>
                                        </label>
                                    </div>

                                </div>                                        
                            </div>

                            <!-- ./panel tree -->

                        </div>
                        <!-- ./row -->

                        <!-- tabelnya -->

                        <button class="btn btn-warning" data-toggle="modal" data-target="#modal_entry_pkat">Entry ke PKAT</button>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-sortable searching-table">
                                <thead>
                                    <tr>
                                        <th>Icon</th>
                                        <th>Auditee</th>
                                        <th>Audit yang Dilaksanakan</th>
                                        <th>Total Indeks</th>
                                        <th>Indeks Internal Audit</th>
                                        <th>Indeks Profil Risiko</th>
                                        <th>Indeks History Audit</th>
                                        <th>Indeks Capaian Target</th>
                                    </tr>
                                </thead> 

                                <tfoot>
                                    <tr>
                                        <th></th>
                                        <th>Auditee</th>
                                        <th>Audit yang Dilaksanakan</th>
                                        <th>Total Indeks</th>
                                        <th>Indeks Internal Audit</th>
                                        <th>Indeks Profil Risiko</th>
                                        <th>Indeks History Audit</th>
                                        <th>Indeks Capaian Target</th>
                                    </tr> 
                                </tfoot>

                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="checkbox checkbox-inline">
                                                <input type="checkbox" id="check_1" /><label for="check_1"></label>
                                            </div>
                                        </td>
                                        <td>Kanwil - DKI Jakarta - 903</td>
                                        <td>1. Operasional</td>
                                        <td>100</td>
                                        <td>25</td>
                                        <td>25</td>
                                        <td>25</td>
                                        <td>25</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="checkbox checkbox-inline">
                                                <input type="checkbox" id="check_2"/><label for="check_2"></label>
                                            </div>
                                        </td>
                                        <td>KCP - Muantan Singingi - D11</td>
                                        <td>1. Operasional</td>
                                        <td>85</td>
                                        <td>10</td>
                                        <td>25</td>
                                        <td>25</td>
                                        <td>25</td>
                                    </tr> 
                                    <tr>
                                        <td>
                                            <div class="checkbox checkbox-inline">
                                                <input type="checkbox" id="check_3"/><label for="check_3"></label>
                                            </div>
                                        </td>
                                        <td>Kantor Cabang - Jakarta Grogol - J02</td>
                                        <td>
                                            1. Operasional
                                            <br>2. Investigasi
                                        </td>
                                        <td>50</td>
                                        <td>5</td>
                                        <td>5</td>
                                        <td>20</td>
                                        <td>20</td>                            
                                    </tr>

                                </tbody>



                            </table>
                        </div>
                        <!-- ./tabelnya -->

                    </div>

                    <!-- modal -->
                        <?php include "index-perencanaa-PKAT-modal.php" ?>
                    <!-- ./modal -->

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






