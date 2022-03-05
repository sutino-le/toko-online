<div class="container-fluid">
    <h3><i class="fas fa-edit"></i> Edit Data Barang</h3>
    <?php foreach ($barang as $brg) : ?>
        <form action="<?php echo base_url() . 'admin/data_barang/update' ?>" method="post" enctype="multipart/form-data">
            <input type="hidden" class="form-control" name="id_brg" value="<?php echo $brg->id_brg; ?>" required>

            <div class="form-group">
                <label for="nama_barang">Nama Barang</label>
                <input type="text" class="form-control" name="nama_barang" value="<?php echo $brg->nama_barang; ?>" required>
            </div>

            <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <input type="text" class="form-control" name="keterangan" value="<?php echo $brg->keterangan; ?>" required>
            </div>

            <div class="form-group">
                <label for="kategori">Kategori</label>
                <input type="text" class="form-control" name="kategori" value="<?php echo $brg->kategori; ?>" required>
            </div>

            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="text" class="form-control" name="harga" value="<?php echo $brg->harga; ?>" required>
            </div>

            <div class="form-group">
                <label for="stok">Stok</label>
                <input type="text" class="form-control" name="stok" value="<?php echo $brg->stok; ?>" required>
            </div>

            <?php echo anchor('admin/data_barang/', '<button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>'); ?>
            <button type="submit" class="btn btn-primary">Tambah</button>

        </form>

</div>

<?php endforeach; ?>
</div>