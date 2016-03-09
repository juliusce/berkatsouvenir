<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Update Product <?=$data['nama_product']?>
    </h1>
  </section>
  <section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
          </div><!-- /.box-header -->
            <h3 class="box-title">Data Master Product</h3>
          <!-- form start -->
          <form role="form" id="form_input" action="<?=base_url()?>Admin/Product/Update" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?=$data['id']?>" />
            <div class="box-body">
              <div class="form-group">
                <label for="nama_product">Nama Product</label>
                <input type="text" class="form-control" id="nama_product" name="nama_product" value="<?=$data['nama_product']?>">
              </div>
              <div class="form-group">
                <input id="promo" type="checkbox" name="promo" value="1" <?php if($data['promo'] == 1){?>checked<?php } ?>><label for="promo">Promo
                </label>
              </div>
              <div class="form-group">
                <label for="nama_category">Nama Category</label>
                <select id="nama_category" name="nama_category" class="form-control">
                  <?php foreach($data2 as $row) {?>
                    <option <?php if($row['nama_category'] == $data['nama_category']) {?>selected<?php }?> value="<?=$row['nama_category']?>"><?=$row['nama_category']?></option>
                  <?php } ?>
                </select>
              </div>

              <div class="form-group">
                <label for="product_image">Image Produk</label>
                <a href="<?=base_url()?><?=$data['product_image']?>" target="_blank">Lihat Gambar 1</a>
                <input type="file" name="product_image" id="product_image" class="form-control" />
              </div>

              <div class="form-group">
                <label for="product_image2">Image Produk 2</label>
                <a href="<?=base_url()?><?=$data['product_image2']?>" target="_blank">Lihat Gambar 2</a>
                <input type="file" name="product_image2" id="product_image2" class="form-control" />
              </div>

              <div class="form-group">
                <label for="product_image3">Image Produk 3</label>
                <a href="<?=base_url()?><?=$data['product_image3']?>" target="_blank">Lihat Gambar 2</a>
                <input type="file" name="product_image3" id="product_image3" class="form-control" />
              </div>

              <div class="form-group">
                <label for="product_image4">Image Produk 4</label>
                <a href="<?=base_url()?><?=$data['product_image4']?>" target="_blank">Lihat Gambar 2</a>
                <input type="file" name="product_image4" id="product_image4" class="form-control" />
              </div>

              <div class="form-group">
                <label for="description">Deskripsi Product</label>
                <textarea name="description" id="description" placeholder="Tulis Deskripsi Produk anda" class="form-control"><?=$data['description']?></textarea>
              </div>
            </div><!-- /.box-body -->
            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div><!-- /.box -->
    </div>   <!-- /.row -->
  </section>
</div>
