
<!-- modal form -->
<div class="modal fade" id="modal_tambah_listsanksi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Sanksi</h4>
            </div>
            <div class="modal-body">

                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_tambah_sanksi">+ Sanksi</button> 
    <br><br>

                <!-- datatables plugin -->
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-sortable">

                        <thead>
                            <tr>
                                <th>Pilih</th>
                                <th>Nama Pelaku</th>
                                <th>Uraian Usulan</th>
                                <th>Nilai</th>
                                <th>Realisasi Sanksi</th>
                                <th>Realisasi Nilai</th>
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
                <td>903 - Kanwil Jakarta</td>
                <td>123</td>
                <td>456</td>
                <td>789</td>
                <td>11</td>

            </tr>
        </tbody>

    </table>
</div>                     
<!-- ./datatables plugin -->

            </div>
        </div>
    </div>
</div>

<?php include "index-pelaksanaan-audit-input-pelaku.php" ?>