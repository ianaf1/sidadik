<?php defined('BASEPATH') or die("ip anda sudah tercatat oleh sistem kami") ?>
<!-- Modal -->


<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>Data Berkas Siswa</h4>
            </div>

            <div class="card-body">
                <p>
                    <small>Jika Tulisan logo <button class="btn btn-sm btn-danger"><i class="fas fa-address-card    "></i></button> Siswa Sudah Mengupload Berkas</small>
                </p>
                <div class="table-responsive">
                    <table style="font-size: 12px" class="table table-striped table-sm" id="table-1">
                        <thead>
                            <tr>
                                <th class="text-center">
                                    No
                                </th>
                                <th>Nama Siswa</th>
                                <th>Kartu Keluarga</th>
                                <th>Ijazah</th>
                                <th>Akta</th>
                                <th>SKTM/KIP</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = mysqli_query($koneksi, "select * from siswa");
                            $no = 0;
                            while ($siswa = mysqli_fetch_array($query)) {
                                $no++;
                            ?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td><?= $siswa['nama_siswa'] ?></td>
                                    <td>
                                        <?php if ($siswa['file_kk'] <> null) { ?><a data-toggle="tooltip" data-placement="top" title="" data-original-title="Kartu Keluarga" href="../<?= $siswa['file_kk'] ?>" target=\"_BLANK\" class="btn btn-sm btn-success"><i class="fas fa-address-card    "></i></a><?php } ?>
                                    </td>
                                    <td>
                                        <?php if ($siswa['file_ijazah'] <> null) { ?><a data-toggle="tooltip" data-placement="top" title="" data-original-title="Ijazah/SKl" href="../<?= $siswa['file_ijazah'] ?>" target=\"_BLANK\" class="btn btn-sm btn-primary"><i class="fas fa-address-card    "></i></a><?php } ?>
                                    </td>
                                    <td>
                                        <?php if ($siswa['file_akte'] <> null) { ?> <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Akta Kelahiran" href="../<?= $siswa['file_akte'] ?>" target=\"_BLANK\" class="btn btn-sm btn-warning"><i class="far fa-address-card    "></i></a><?php } ?>
                                    </td>
                                    <td>
                                        <?php if ($siswa['file_kip'] <> null) { ?><a data-toggle="tooltip" data-placement="top" title="" data-original-title="KIP/SKTM" href="../<?= $siswa['file_kip'] ?>" target=\"_BLANK\" class="btn btn-sm btn-secondary"><i class="fas fa-envelope    "></i></a><?php } ?>
                                        <!-- Button trigger modal -->
                                    </td>
                                </tr>

                            <?php }
                            ?>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>