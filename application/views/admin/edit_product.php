<div class="container-fluid">
    <h3><i class="fas fa-edit"></i>EDIT DATA PRODUCT<h3>

    <?php foreach($product as $prod) : ?>

        <form method="post" action="<?php echo base_url(). 'admin/data_product/update' ?>">

        <div class="form-group">
            <label>Nama Product</label>
            <input type="text" name="nama_prod" class="form-control" value="<?php echo $prod->nama_prod ?>">
        </div>

        <div class="form-group">
            <label>Keterangan</label>
            <input type="hidden" name="id_prod" class="form-control" value="<?php echo $prod->id_prod ?>">
            <input type="text" name="keterangan" class="form-control" value="<?php echo $prod->keterangan ?>">
        </div>

        <div class="form-group">
            <label>Kategori</label>
            <input type="text" name="kategori" class="form-control" value="<?php echo $prod->kategori ?>">
        </div>

        <div class="form-group">
            <label>Harga</label>
            <input type="text" name="harga" class="form-control" value="<?php echo $prod->harga ?>">
        </div>

        <div class="form-group">
            <label>stok</label>
            <input type="text" name="stok" class="form-control" value="<?php echo $prod->stok ?>">
        </div>

        <button type="submit" class="btn btn-primary btn-sm"> Simpan </button>

        </form>

    <?php endforeach; ?>
</div>