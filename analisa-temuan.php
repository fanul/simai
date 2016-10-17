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
                <h1>Statistik</h1>
                <p>Contoh Diagram</p>

                <ul class="breadcrumb">
                    <li><a href="#">Analisa Audit</a></li>                                
                    <li>Analisa Temuan</li>
                </ul>
            </div>                        
            <!-- ./page title -->                                                

            <!-- nvd3 charts -->
            <div class="wrapper wrapper-white">
                <div class="page-subtitle page-subtitle-centralized">
                    <h3>Banyak Temuan Dalam Rentang Waktu</h3>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div id="nvd3-line" class="chart-holder">
                            <svg></svg>
                        </div>
                    </div>
                </div>
            </div>
            <!--
            <div class="wrapper">
                <div class="page-subtitle">
                    <h3>NVD3 Bar Chart</h3>
                    <p>This is sample of bar chart in nvd3 plugin.</p>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div id="nvd3-tes" class="chart-holder with-3d-shadow with-transitions">
                            <svg></svg>
                        </div>
                    </div>                                
                </div>
            </div>
            --> 
            <div class="wrapper wrapper-white">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-subtitle">
                            <h3>NVD3 Donut Chart</h3>
                            <p>One more sample of chart, its donut chart in nvd3 plugin.</p>
                        </div>
                        <div id="nvd3-donut" class="chart-holder">
                            <svg></svg>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./nvd3 charts -->

            <!-- Copyright -->
                <?php include "include-copyright.php" ?>
            <!-- ./Copyright -->

            <?php include "include-footer.php"?>

