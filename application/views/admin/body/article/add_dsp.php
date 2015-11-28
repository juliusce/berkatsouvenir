<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Input Article Baru
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
            <h3 class="box-title">Data Article</h3>
          <!-- form start -->
          <form role="form" id="form_input" action="<?=base_url()?>Admin/Article/Insert" method="post" enctype="multipart/form-data">
            <div class="box-body">
              <div class="form-group">
                <label for="judul_testimonial">Judul Article</label>
                <input type="text" class="form-control" id="judul_article" name="judul_article" placeholder="Judul Article yang diinginkan">
              </div>

              <div class="form-group">
                <label for="description">Deskripsi Article</label>
                <textarea name="description" id="description" placeholder="Tulis Deskripsi Article Anda" class="form-control"></textarea>
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
