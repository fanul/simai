    <!-- START ACCORDION -->
    <div class="panel-group accordion">

        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a href="#acc01">
                        Temuan
                    </a>
                </h4>
            </div>                                
            <div class="panel-body" id="acc01">
                <!-- datatables plugin -->


                <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_tambah_temuan">+ Temuan</button> -->
                <a href="index-pelaksanaan-audit-input-temuan-wizard2.php" class="btn btn-primary">+ Temuan</a>
                <br><br>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-sortable">

                        <thead>
                            <tr>
                                <th>Pilih</th>
                                <th>Tahun</th>
                                <th>Auditee</th>
                                <th>PA</th>
                                <th>Judul Temuan</th>
                                <th>Kondisi</th>
                                <th>Kriteria</th>
                                <th>Sebab</th>
                                <th>Akibat</th>
                                <th>Rekomendasi</th>
                            </tr>
                        </thead> 

                        <tbody>
                            <tr>
                                <td>
                                    <div class="checkbox checkbox-inline">
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#">Edit</button>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#">delete</button>
                                    </div>
                                </td>
                                <td>2016</td>
                                <td>Kanwil DKI Jakarta - 903</td>
                                <td>PA.001.Kepesertaan.Perluasan Kepesertaan.Kartu KPJ</td>
                                <td>Kartu KPJ tidak Dicetak</td>
                                <td>2000 Kartu Belum dicetak</td>
                                <td>PP 56 tahun 2015</td>
                                <td>Human Error - Karyawan tidak melakukannya</td>
                                <td>Risiko Reputasi - trust perusahaan pada BPJS Ketenagakerjaan menurun</td>
                                <td>Sistem - Kantor cabang agar membuat monitoring kartu</td>

                            </tr>
                        </tbody>

                    </table>
                </div>                     
                <!-- ./datatables plugin -->
            </div>                                
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
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
                                                <p class="text-muted">Temuan tentang Perluasan Kepesertaan tidak relevan</p>
                                            </div>
                                        </div>

                                        <div class="timeline-item timeline-item-even">
                                            <div class="timeline-item-date">18 Oktober 2016, 17:55</div>
                                            <div class="timeline-item-image"><img src="assets/images/users/andre.png"></div>
                                            <div class="timeline-item-data">
                                                <h4>Feedback Review #1</h4>
                                                <p class="text-muted">Baik pak kami coba perbarui</p>
                                            </div>
                                        </div>

                                     <div class="timeline-item timeline-item-even">
                                        <div class="timeline-item-date">18 Oktober 2016, 17:55</div>
                                        <div class="timeline-item-image"><img src="assets/images/users/andre.png"></div>
                                        <div class="timeline-item-data">
                                            <h4>Feedback Review #1</h4>
                                            <p class="text-muted">Temuan telah lengkap</p>
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





<!-- modal -->
<?php include "index-pelaksanaan-audit-input-temuan-wizard.php" ?>
    <!-- ./modal -->