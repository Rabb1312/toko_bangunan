<<<<<<< HEAD
<div class="container-fluid">

    <div class="card">
        <h5 class="card-header">Detail Produk</h5>
        <div class="card-body">
            <?php foreach ($barang as $brg) : ?>
            <div class="row">
                <div class="col-md4">
                    <img src="<?php echo base_url() . '/uploads/' . $brg->gambar ?> " class="card-img-top">
                </div>
                <div class="col-md8">
                    <table class="table">
                        <tr>
                            <td>Nama Produk</td>
                            <td><strong><?php echo $brg->nama_brg ?></strong></td>
                        </tr>

                        <tr>
                            <td>Keterangan</td>
                            <td><strong><?php echo $brg->keterangan ?></strong></td>
                        </tr>

                        <tr>
                            <td>Kategori</td>
                            <td><strong><?php echo $brg->kategori ?></strong></td>
                        </tr>

                        <tr>
                            <td>Stok</td>
                            <td><strong><?php echo $brg->stok ?></strong></td>
                        </tr>

                        <tr>
                            <td>Harga</td>
                            <td>Rp. <strong>
                                    <div class="btn btn-sm btn-success ">Rp. <?= number_format($brg->harga), '.' ?>
                                    </div>
                                </strong>
                            </td>
                        </tr>
                    </table>
                    <?= anchor('dashboard/tambah_ke_keranjang/' . $brg->id_brg, '<div class="btn btn-sm btn-primary">Tambah ke Keranjang</div>') ?>
                    <?= anchor('dashboard/index/', '<div class="btn btn-sm btn-danger">Kembali</div>') ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
=======
<div class="container-fluid">

    <div class="card">
        <h5 class="card-header">Detail Produk</h5>
        <div class="card-body">
            <?php foreach ($barang as $brg) : ?>
            <div class="row">
                <div class="col-md4">
                    <img src="<?php echo base_url() . '/uploads/' . $brg->gambar ?> " class="card-img-top">
                </div>
                <div class="col-md8">
                    <table class="table">
                        <tr>
                            <td>Nama Produk</td>
                            <td><strong><?php echo $brg->nama_brg ?></strong></td>
                        </tr>

                        <tr>
                            <td>Keterangan</td>
                            <td><strong><?php echo $brg->keterangan ?></strong></td>
                        </tr>

                        <tr>
                            <td>Kategori</td>
                            <td><strong><?php echo $brg->kategori ?></strong></td>
                        </tr>

                        <tr>
                            <td>Stok</td>
                            <td><strong><?php echo $brg->stok ?></strong></td>
                        </tr>

                        <tr>
                            <td>Harga</td>
                            <td>Rp. <strong>
                                    <div class="btn btn-sm btn-success ">Rp. <?= number_format($brg->harga), '.' ?>
                                    </div>
                                </strong>
                            </td>
                        </tr>
                    </table>
                    <?= anchor('dashboard/tambah_ke_keranjang/' . $brg->id_brg, '<div class="btn btn-sm btn-primary">Tambah ke Keranjang</div>') ?>
                    <?= anchor('dashboard/index/', '<div class="btn btn-sm btn-danger">Kembali</div>') ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
>>>>>>> 54cb7b9dc7ed9db817b24b16b9534107d55f22d4
    </div>