<div class="container_fluid">
</div>
    <div class="row text-center mt-4">
    
        <?php foreach ($paket_freediving as $prod) : ?>

            <div class="card ml-3 mb-3 mx-auto" style="width: 16rem;">
                <img src="<?php echo base_url().'/uploads/'.$prod->gambar ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title mb-1"><?php echo $prod->nama_prod ?></h5>
                    <medium><?php echo $prod->keterangan ?><medium><br>
                    <span class="badge badge-pill badge-success mb-3">Rp. <?php echo number_format($prod->harga), 0,',','.' ?></span><br>
                    <?php echo anchor('dashboard/add_to_cart/'.$prod->id_prod, '<div class="btn btn-sm btn-primary">Add To Cart</div>') ?>
                    <?php echo anchor('dashboard/detail/'.$prod->id_prod, '<div class="btn btn-sm btn-success">Detail</div>') ?>
                    
                </div>
            </div>

        <?php endforeach; ?>
    </div>
</div>