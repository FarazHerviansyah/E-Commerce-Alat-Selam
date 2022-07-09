<div class="container-fluid">

<div class="card">
  <h5 class="card-header">Detail Product</h5>
  <div class="card-body">

    <?php foreach($product as $prod): ?>
    <div class="row">
        <div class="col-md-4"> 
            <img src="<?php echo base_url().'/uploads/'.$prod->gambar ?>">
        
        </div>
        <div class="col-md-8">
            <table class="table">
            <tr>
                <td>Nama Product</td>
                <td><strong><?php echo $prod->nama_prod ?></strong></td>
            </tr>

            <tr>
                <td>Keterangan</td>
                <td><strong><?php echo $prod->keterangan ?></strong></td>
            </tr>

            <tr>
                <td>Kategori</td>
                <td><strong><?php echo $prod->kategori ?></strong></td>
            </tr>

            <tr>
                <td>stok</td>
                <td><strong><?php echo $prod->stok ?></strong></td>
            </tr>

            <tr>
                <td>Harga</td>
                <td><strong><div class="btn btn-sm btn-success">Rp. <?php echo number_format($prod->harga,0,',','.') ?></div></strong></td>
            </tr>
        </table>

        <?php echo anchor('dashboard/add_to_cart/'.$prod->id_prod, '<div class="btn btn-sm btn-primary">Add To Cart</div>') ?>
        <?php echo anchor('welcome/','<div class="btn btn-sm btn-danger">Kembali</div>') ?>
    <?php endforeach; ?>
  </div>
</div>
</div>