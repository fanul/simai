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

                        <!-- page title -->
                        <div class="page-title" id="tour-step-4">
                            <h1>Tree View</h1>
                            <p>jsTree is jquery plugin, that provides interactive trees.</p>
                            
                            <ul class="breadcrumb">
                                <li><a href="#">Dashboard</a></li>
                                <li><a href="#">Ui Kits</a></li>
                                <li>Tree View</li>
                            </ul>
                        </div>                        
                        <!-- ./page title -->
                        
                        
                        <div class="wrapper wrapper-white">
                            <div class="page-subtitle">
                                <h3>Default Sample</h3>
                                <p>Simple sample of file tree</p>
                            </div>
                            
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Panel title</h3>
                                </div>
                                <div class="panel-body">

                                    <div id="jstree_default" class="push-down-20">
                                        <ul>
                                            <li>Root node 1
                                                <ul>
                                                    <li>Child node 1</li>
                                                    <li>Child node 2</li>
                                                    <li>Child node 3</li>
                                                </ul>
                                            </li>
                                            <li class="jstree-open">Root node 2
                                                <ul>
                                                    <li>Child node 1</li>
                                                    <li data-jstree='{"disabled":true}'>Disabled</li>
                                                    <li>Child node 3</li>
                                                </ul>
                                            </li>
                                            <li data-jstree='{"icon":"glyphicon glyphicon-leaf"}'>Custom icon
                                                <ul>
                                                    <li data-jstree='{"icon":"glyphicon glyphicon-star"}'>Child node 1</li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                                <div class="panel-footer">
                                    <div class="panel-footer-text">Panel footer</div>
                                </div>
                            </div>  


                            
                        </div>
                        
                        <div class="wrapper">
                            <div class="page-subtitle">
                                <h3>Checkbox Plugin</h3>
                                <p>Use custom plugin to get checkboxes in tree view plugin</p>
                            </div>
                            
                            <div id="jstree_checkbox" class="push-down-20">
                                <ul>
                                    <li>Root node 1
                                        <ul>
                                            <li>Child node 1</li>
                                            <li>Child node 2</li>
                                            <li>Child node 3</li>
                                        </ul>
                                    </li>
                                    <li class="jstree-open">Root node 2
                                        <ul>
                                            <li>Child node 1</li>
                                            <li>Child node 2</li>
                                            <li>Child node 3</li>
                                        </ul>
                                    </li>
                                    <li>Root node 3</li>
                                </ul>
                            </div>

                            
                             
                        </div>
                        
                        <div class="wrapper wrapper-white">
                            <div class="page-subtitle">
                                <h3>Drag & drop plugin</h3>
                                <p>Use custom plugin to get drag & drop in tree view plugin</p>
                            </div>
                            
                            <div id="jstree_dnd">
                                <ul>
                                    <li>Root node 1
                                        <ul>
                                            <li>Child node 1</li>
                                            <li>Child node 2</li>
                                            <li>Child node 3</li>
                                        </ul>
                                    </li>
                                    <li class="jstree-open">Root node 2
                                        <ul>
                                            <li>Child node 1</li>
                                            <li>Child node 2</li>
                                            <li>Child node 3</li>
                                        </ul>
                                    </li>
                                    <li>Root node 3</li>
                                </ul>
                            </div>                             
                        </div>    
                        
                        <!-- Copyright -->
                        <div class="copyright">
                            <div class="pull-left">
                                &copy; 2015 <strong>Aqvatarius</strong>. All rights reserved.
                            </div>
                            <div class="pull-right">
                                <a href="#">Terms of use</a> / <a href="#">Privacy Policy</a>
                            </div>
                        </div>
                        <!-- ./Copyright -->
                    </div>
                    <!-- ./page content container -->

                </div>
                <!-- ./page content -->                                               
            </div>  
            <!-- ./page container -->

        <!-- ./page wrapper -->
<?php include "include-footer.php" ?>





