<h4><i class="fa fa-shopping-cart"></i> Data Belanja</h4>
<hr />
<br />
<?= validation_errors('<p style="color:red">','</p>'); ?>
<div class="row">
   <table class="table table-responsive">
      <thead>
         <tr>
            <th width="5%" class="center">#</th>
            <th width="40%" class="center">Nama Barang</th>
            <th width="10%" class="center">Berat</th>
            <th width="5%" class="center">Jumlah</th>
            <th width="15%" class="center">Harga Total</th>
            <th width="15%" class="center">opsi</th>
         </tr>
      </thead>
      <tbody>
         <?php
         $i = 1;
         foreach($this->cart->contents() as $key) :
            ?>
         <tr>
            <td class="center"><?= $i++; ?></td>
            <td><?= $key['name']; ?></td>
            <td><?= number_format($key['weight'], 0, ',', '.').' gram'; ?></td>
            <td class="center"><?= $key['qty']; ?></td>
            <td style="text-align:right">Rp. <?= number_format(($key['qty'] * $key['price']), 0, ',', '.'); ?>,-</td>
            <td style="text-align:right">
               <a href="#<?= $key['rowid']; ?>" class="btn-primary"><i class="fa fa-edit"></i></a>
               <a href="<?= base_url(); ?>cart/delete/<?= $key['rowid']; ?>" class="btn-primary" onclick="return confirm('Yakin Ingin menghapus item ini dari keranjang anda ?')"><i class="fa fa-trash"></i></a>
            </td>
         </tr>
      <?php endforeach; ?>
      <tr>
         <td colspan="4" class="center"><b>Total</b></td>
         <td colspan="1" style="text-align:right">Rp. <?= number_format($this->cart->total(), 0, ',','.'); ?>,-</td>
         <td></td>
      </tr>
      </tbody>
   </table>
</div>
<br />
<div class="right">
   <a href="<?=base_url();?>checkout" class="btn blue"><i class="fa fa-shopping-bag"></i> Checkout</a>
   <button type="button" class="btn red" onclick="window.history.go(-1)">Kembali</button>
</div>
<br/>
