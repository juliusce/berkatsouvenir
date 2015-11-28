<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Input Testimonial Baru
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
            <h3 class="box-title">Data Testimonial</h3>
          <!-- form start -->
          <form role="form" id="form_input" action="<?=base_url()?>Admin/Testimonial/Insert" method="post" enctype="multipart/form-data">
            <div class="box-body">
              <div class="form-group">
                <label for="judul_testimonial">Judul Testmonial</label>
                <input type="text" class="form-control" id="judul_testimonial" name="judul_testimonial" placeholder="Judul Testimonial yang diinginkan">
              </div>

              <div class="form-group">
                <label for="testimonial_image">Image Testimonial</label>
                <input type="file" name="testimonial_image" id="testimonial_image" class="form-control" />
              </div>

              <div class="form-group">
                <label for="description">Deskripsi Product</label>
                <textarea name="description" id="description" placeholder="Tulis Deskripsi Testimonial anda" class="form-control"></textarea>
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
