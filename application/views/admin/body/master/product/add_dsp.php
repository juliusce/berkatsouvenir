<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Input Product Baru
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
          <form role="form" id="form_input" action="<?=base_url()?>Admin/Product/Insert" method="post" enctype="multipart/form-data">
            <div class="box-body">
              <div class="form-group">
                <label for="nama_product">Nama Product</label>
                <input type="text" class="form-control" id="nama_product" name="nama_product" placeholder="Nama Product yang diinginkan">
              </div>
              <div class="form-group">
                <label for="nama_category">Nama Category</label>
                <select id="nama_category" name="nama_category" class="form-control">
                  <?php foreach($data as $row) {?>
                    <option value="<?=$row['nama_category']?>"><?=$row['nama_category']?></option>
                  <?php } ?>
                </select>
              </div>

              <div class="form-group">
                <label for="product_image">Image Produk</label>
                <input type="file" name="product_image" id="product_image" class="form-control" />
              </div>

              <div class="form-group">
                <label for="product_image2">Image Produk 2</label>
                <input type="file" name="product_image2" id="product_image2" class="form-control" />
              </div>

              <div class="form-group">
                <label for="description">Deskripsi Product</label>
                <textarea name="description" id="description" placeholder="Tulis Deskripsi Produk anda" class="form-control"></textarea>
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
