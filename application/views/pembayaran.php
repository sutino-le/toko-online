<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
                <?php
                $grand_total = 0;
                if ($keranjang = $this->cart->contents()) {
                    foreach ($keranjang as $item) {
                        $grand_total = $grand_total + $item['subtotal'];
                    }
                    echo "<h5>Total Belanja Anda : Rp. " . number_format($grand_total, 0, ',', '.') . "</h5>";

                ?>
            </div>

            <br><br>

            <h4>Input Alamat Pengiriman dan Pembayaran</h4>

            <form action="<?php echo base_url() ?>dashboard/proses_pesanan" method="post">

                <div class="form-group">
                    <Label>Nama Lengkap</Label>
                    <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Lengkap Anda">
                </div>

                <div class="form-group">
                    <Label>Alamat lengkap</Label>
                    <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Alamat Lengkap Anda">
                </div>

                <div class="form-group">
                    <Label>No. Telepon</Label>
                    <input type="text" name="no_telp" id="no_telp" class="form-control" placeholder="Nomor Telepon Anda">
                </div>

                <div class="form-group">
                    <Label>Jasa Pengiriman</Label>
                    <select name="jasa_pengiriman" id="jasa_pengiriman" class="form-control">
                        <option value="JNE">JNE</option>
                        <option value="TIKI">TIKI</option>
                        <option value="POS Indonesia">POS Indonesia</option>
                        <option value="Go-Jek">Go-Jek</option>
                    </select>
                </div>

                <div class="form-group">
                    <Label>Pilih BANK</Label>
                    <select name="bank_pembayaran" id="bank_pembayaran" class="form-control">
                        <option value="BCA">BCA</option>
                        <option value="BRI">BRI</option>
                        <option value="BNI">BNI</option>
                        <option value="MANDIRI">MANDIRI</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-sm btn-primary">Pesan</button>

            </form>
        <?php
                } else {
                    echo "<h4>Keranjang Anda Masih Kosong...!!!</h4>";
                }
        ?>
        </div>

        <div class="col-md-2"></div>
    </div>
</div>