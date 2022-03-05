<div class="container-fluid">
    <h4>Keranjang Belanja</h4>

    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>jumlah</th>
            <th>Harga</th>
            <th>Sub-Total</th>
        </tr>
        <?php
        $no = 1;
        foreach ($this->cart->contents() as $item) :
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $item['name']; ?></td>
                <td><?php echo $item['qty']; ?></td>
                <td align="right"><?php echo number_format($item['price'], 0, ',', '.'); ?></td>
                <td align="right"><?php echo number_format($item['subtotal'], 0, ',', '.'); ?></td>
            </tr>
        <?php endforeach; ?>
        <tr>
            <td colspan="4"></td>
            <td align="right">Rp. <?php echo number_format($this->cart->total(), 0, ',', '.') ?></td>
        </tr>
    </table>

    <div class="text-right">
        <a href="<?php echo base_url('dashboard/hapus_keranjang') ?>">
            <div class="btn btn-sm btn-danger">Hapus Keranjang</div>
        </a>
        <a href="<?php echo base_url('dashboard/index') ?>">
            <div class="btn btn-sm btn-primary">Lanjutkan Belanja</div>
        </a>
        <a href="<?php echo base_url('dashboard/pembayaran') ?>">
            <div class="btn btn-sm btn-success">Pembayaran</div>
        </a>
    </div>
</div>