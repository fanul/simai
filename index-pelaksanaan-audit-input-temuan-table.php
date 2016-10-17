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


<!-- modal -->
    <?php include "index-pelaksanaan-audit-input-temuan-wizard.php" ?>
<!-- ./modal -->