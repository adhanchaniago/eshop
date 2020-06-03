<?php
if ($data->num_rows() > 0) {

   if (isset($url)) {
      echo '<h4>List Item Pada Kategori "'.$url.'"</h4><hr />';
   }
?>
 <!--First row-->
                    <div class="row wow fadeIn" data-wow-delay="0.4s">
                        <div class="col-lg-12">
                            <h2 class="h2-responsive font-bold mb-5">What's new?</h2>
                        </div>
                    </div>
                    <!--/.First row-->
                    <br>
                    <hr class="extra-margins">
<div class="row">
   <?php foreach($data->result() as $key) : ?>
      <div class="col-lg-4">
                            <!--Card-->
                            <div class="card mb-r wow fadeIn" data-wow-delay="0.2s">

           <img class="img-fluid" src="<?= base_url(); ?>assets/upload/<?= $key->gambar; ?>" alt="Card image cap">
               
           <!--Card content-->
                                <div class="card-body">
                                    <!--Title-->
                                    <h5 class="font-bold">
                                        <strong><?= $key->nama_item; ?></strong>
                                    </h5>
                                    <hr>
                                    <!--Text-->
                                    <h4>Rp. <?= number_format($key->harga, 0, ',', '.'); ?>
                                    </h4>

                                    <a href="<?= base_url(); ?>cart/add/<?= $key->id_item; ?>" class="btn btn-info btn-sm">Add To Cart </a>
                                    <a href="<?= base_url(); ?>home/detail/<?= $key->id_item; ?>" class="btn btn-info btn-sm">Detail </a>
                                </div>


         </div>
      </div>
   <?php endforeach; ?>
</div>
<?php
} else {
   echo '<h4>Kategori "'.$url.'" Masih Kosong</h4><hr />';
}
?>
