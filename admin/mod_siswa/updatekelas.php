
<!-- Modal -->



<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>Data Siswa</h4>
                <div class="card-header-action">
                    <div class="form-group">
                        <label>Pilih jenis update :</label>
                        <select class="form-control" name="update_type">
                            <option></option>
                            <option>Karyawan Tetap</option>
                            <option>Karyawan Kontrak</option>
                        </select>
                        <span class="text-danger"><?php echo $up_type_err; ?></span>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table style="font-size: 12px" class="table table-striped table-sm" id="table-1">
                        <thead>
                            <tr>
                                <!-- <th class="text-center">
                                    No
                                </th> -->
                                <th>Nama Siswa</th>
                                <th>NIS</th>
                                <th>Password</th>
                                <th>L/P</th>
                                <!-- <th>TTL</th> -->
                                <th>Kelas</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = mysqli_query($koneksi, "select * from siswa WHERE status='1'");
                            $no = 0;
                            while ($siswa = mysqli_fetch_array($query)) {
                                $no++;
                            ?>
                                <tr>
                                    <!-- <td><?= $no; ?></td> -->
                                    <td><?= $siswa['nama_siswa'] ?></td>
                                    <td><?= $siswa['nis'] ?></td>
                                    <td><?= $siswa['password'] ?></td>
                                    <td><?= $siswa['jk'] ?></td>
                                    <!-- <td><?= $siswa['tempat_lahir'] ?>, <?= $siswa['tgl_lahir'] ?></td> -->
                                    <td><?= $siswa['kelas'] ?></td>
                                    <td>
                                        <?php if ($siswa['status'] == 1) { ?>
                                            <span class="badge badge-success">Aktif</span>
                                        <?php } elseif ($siswa['status'] == 2) { ?>
                                            <span class="badge badge-danger">Mutasi </span>
                                        <?php } else { ?>
                                            <span class="badge badge-warning">DO/Keluar</span>
                                        <?php } ?>
                                    </td>
                                    <td>
                                    <input type="checkbox" name="kelas" value="$siswa['kelas']">  
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


<script>
    //IMPORT FILE PENDUKUNG 
    $('#form-import').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            type: 'post',
            url: 'mod_siswa/crud_siswa.php?pg=import',
            data: new FormData(this),
            processData: false,
            contentType: false,
            cache: false,
            beforeSend: function() {
                $('form button').on("click", function(e) {
                    e.preventDefault();
                });
            },
            success: function(data) {

                $('#importdata').modal('hide');
                iziToast.success({
                    title: 'Mantap!',
                    message: data,
                    position: 'topRight'
                });
                setTimeout(function() {
                    window.location.reload();
                }, 2000);


            }
        });
    });
</script>

<script>
    var cleaveI = new Cleave('.nis', {

        blocks: [18]

    });

    $('#form-tambah').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'mod_siswa/crud_siswa.php?pg=tambah',
            data: $(this).serialize(),
            beforeSend: function() {
                $('form button').on("click", function(e) {
                    e.preventDefault();
                });
            },
            success: function(data) {

                iziToast.success({
                    title: 'Jos . . .',
                    message: 'data siswa berhasil disimpan',
                    position: 'topRight'
                });
                setTimeout(function() {
                    window.location.reload();
                }, 2000);
                $('#tambahdata').modal('hide');
                //$('#bodyreset').load(location.href + ' #bodyreset');
            }
        });
        return false;
    });

    $('#table-1').on('click', '.hapus', function() {
        var id = $(this).data('id');
        console.log(id);
        swal({
            title: 'Yakin Bos?',
            text: 'Akan menghapus data ini!',
            icon: 'warning',
            buttons: true,
            dangerMode: true,
        }).then((result) => {
            if (result) {
                $.ajax({
                    url: 'mod_siswa/crud_siswa.php?pg=hapus',
                    method: "POST",
                    data: 'id_siswa=' + id,
                    success: function(data) {
                        iziToast.error({
                            title: 'Yups . . .',
                            message: 'Data Siswa Berhasil dihapus',
                            position: 'topRight'
                        });
                        setTimeout(function() {
                            window.location.reload();
                        }, 2000);
                    }
                });
            }
        })

    });
</script>
<script>
    $('#form-konfirmasi').submit(function(e) {
        e.preventDefault();
        swal({
            title: 'Apa kamu yakin ?',
            text: 'Akan Menghapus data anda ?',
            icon: 'warning',
            buttons: true,
            dangerMode: true,
        }).then((result) => {
            if (result) {
                $.ajax({
                    url: 'mod_siswa/crud_siswa.php?pg=konfirmasi',
                    method: "POST",
                    data: $(this).serialize(),
                    success: function(data) {
                        iziToast.success({
                            title: 'Terimakasih!',
                            message: 'Data Berhasil di Hapus',
                            position: 'topRight'
                        });
                        setTimeout(function() {
                            window.location.reload();
                        }, 1000);
                    }
                });
            }
        })

    });
</script>
