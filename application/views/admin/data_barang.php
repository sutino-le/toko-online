<div class="container-fluid">
    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambahBarang"><i class="fas fa-plus fa-sm"></i> Tambah Barang</button>

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Keterangan</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
        <?php
        $no = 1;
        foreach ($barang as $brg) :
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $brg->nama_barang; ?></td>
                <td><?php echo $brg->keterangan; ?></td>
                <td><?php echo $brg->kategori; ?></td>
                <td><?php echo $brg->harga; ?></td>
                <td><?php echo $brg->stok; ?></td>
                <td>
                    <div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div>
                    <?php echo anchor('admin/data_barang/edit/' . $brg->id_brg, '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>'); ?>
                    <?php echo anchor('admin/data_barang/hapus/' . $brg->id_brg, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>'); ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>


<!-- Modal -->
<div class="modal fade" id="tambahBarang" tabindex="-1" role="dialog" aria-labelledby="tambahBarangLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahBarangLabel">Tambah Data Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="<?php echo base_url('admin/data_barang/tambah_aksi') ?>" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="nama_barang">Nama Barang</label>
                        <input type="text" class="form-control" name="nama_barang" required>
                    </div>

                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <input type="text" class="form-control" name="keterangan" required>
                    </div>

                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <input type="text" class="form-control" name="kategori" required>
                    </div>

                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="text" class="form-control" name="harga" required>
                    </div>

                    <div class="form-group">
                        <label for="stok">Stok</label>
                        <input type="text" class="form-control" name="stok" required>
                    </div>

                    <div class="form-group">
                        <label for="gambar">Gambar</label><br>
                        <input type="file" class="form-control" name="gambar" required>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
            </form>
        </div>
    </div>
</div>