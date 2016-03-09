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
              <h3 class="box-title">Data Master Product</h3>
          </div><!-- /.box-header -->
          <!-- form start -->
          <form role="form" id="form_input" action="<?=base_url()?>Admin/Product/Insert" method="post" enctype="multipart/form-data">
            <div class="box-body">
              <div class="form-group">
                <label for="nama_product">Nama Product</label>
                <input type="text" class="form-control" id="nama_product" name="nama_product" placeholder="Nama Product yang diinginkan">
              </div>
              <div class="form-group">
                <input id="promo" type="checkbox" name="promo" value="1"><label for="promo">Promo
                </label>
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
                <label for="product_image3">Image Produk 3</label>
                <input type="file" name="product_image3" id="product_image3" class="form-control" />
              </div>

              <div class="form-group">
                <label for="product_image4">Image Produk 4</label>
                <input type="file" name="product_image4" id="product_image4" class="form-control" />
              </div>

              <div class="form-group">
                <label for="description">Deskripsi Product</label>
                <textarea name="description" id="description" placeholder="Tulis Deskripsi Produk anda" class="form-control"></textarea>
              </div>

              <!-- SEO TAG -->
              <hr />
              <h4> SEO TAG (For Google Web Crawler) </h4>
                <div class="form-group">
                  <label for="seo_title">SEO Title</label>
                  <textarea maxlength="150" id="seo_title" name="seo_title" class="form-control"></textarea>
                </div>
                <div class="form-group">
                  <label for="seo_keywords">SEO Keywords</label>
                  <textarea maxlength="150" id="seo_keywords" name="seo_keywords" class="form-control"></textarea>
                </div>
                <div class="form-group">
                  <label for="seo_description">SEO Description</label>
                  <textarea maxlength="150" id="seo_description" name="seo_description" class="form-control"></textarea>
                </div>
                <div class="form-group">
                  <label for="seo_author">SEO Authors</label>
                  <textarea maxlength="150" id="seo_author" name="seo_author" class="form-control"></textarea>
                </div>
              <!-- END OF SEO TAG -->

            </div><!-- /.box-body -->
            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div><!-- /.box -->
    </div>   <!-- /.row -->
  </section>
</div>
