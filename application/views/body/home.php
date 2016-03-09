<script type="text/javascript">
  var base_url = '<?= base_url()?>';
  var uploadURI = '<?=base_url()?>Welcome/ListFiles';
</script>
<script type="text/javascript">
$(window).load( function(){
     //var bool = listFilesOnServer();
     //if(bool == true){
      jQuery('.camera_wrap').camera();
    //}
});
function listFilesOnServer () {
  var items = [];
  $.getJSON(uploadURI, function(data) {
    $.each(data, function(index, element) {
      items.push('<div data-src="'+base_url+'uploads/slider/'+element+'"></div>');
    });
    $('.camera_wrap').html("").html(items.join(""));
  });
  return true;
}
</script>
<!--==============================content=================================-->
<div id="content">

    <!--==============================slider=================================-->
    <div class="slider">
        <div class="camera_wrap">
          <div data-src="<?=base_url()?>includes/frontend/slider/1.jpg"></div><div data-src="<?=base_url()?>includes/frontend/slider/2.jpg"></div>
        </div>
    </div>
    <!--==============================row1=================================-->
    <div class="row_1">
        <div class="container">
            <p class="title1">WELCOME to berkatsouvenir.com</p>
            <p class="title2">Butuh SOUVENIR MURAH dan BERKUALITAS ? disini tempatnya !!! Jadikan momen spesial anda menjadi KENANGAN yang terindah dengan memilih SOUVENIR yang terbaik dengan harga yang terjangkau</p>
        </div>
    </div>
    <!--==============================row2=================================-->
    <div class="row_2">
        <!-- END OF CONTAINER FOR PROMO ITEMS -->
        <div class="container">
            <div class="row">
                <p class="title1">PROMO SOUVENIR</p>
                <p class="title2">Dapatkan PROMO SOUVENIR MURAH dan BERKUALITAS hanya di berkatsouvenir.com</p>
                <ul class="list1">
                    <?php foreach($promo as $key1 =>$row1){ ?>
                    <li class="col-lg-4 col-md-4 col-sm-4 listbox1">
                        <div class="box1">
                            <a href="<?=base_url()?>single_item<?=$row1['id']?>">
                                <figure><img class="border-box" src="<?=base_url()?><?=$row1['product_image']?>" alt=""></figure>
                                <p><?=$row1['nama_product']?></p>
                            </a>
                        </div>
                    </li>
                    <?php } ?>
                </ul>
            </div>
            <p class="title2"><a class="btn-link btn-link2" href="#">More for promo<span></span></a></p>
        <!-- END OF CONTAINER FOR PROMO ITEMS -->
        <!-- START OF CONTAINER FOR NEW ARRIVAL ITEMS -->
            <div class="row">
                <p class="title1">NEW ARRIVAL</p>
                <p class="title2">BERKAT SOUVENIR menyediakan berbagai jenis SOUVENIR Untuk PROMOSI , WEDDING , DAN LAIN NYA dengan KUALITAS CETAKAN YANG BAIK.</p>
                <ul class="list1">
                    <?php foreach($promo as $key1 =>$row1){ ?>
                    <li class="col-lg-4 col-md-4 col-sm-4 listbox1">
                        <div class="box1">
                            <a href="<?=base_url()?>single_item<?=$row1['id']?>">
                                <figure><img class="border-box" src="<?=base_url()?><?=$row1['product_image']?>" alt=""></figure>
                                <p><?=$row1['nama_product']?></p>
                            </a>
                        </div>
                    </li>
                    <?php } ?>
                </ul>
            </div>
            <p class="title2"><a class="btn-link btn-link2" href="#">More for new arrival<span></span></a></p>
        </div>
        <!-- END OF CONTAINER FOR NEW ARRIVAL ITEMS -->
    </div>
    <!--==============================row3=================================-->
    <div class="row_3">
        <div class="container">
            <p class="title3">How To Order</p>
            <div class="row">
                <ul class="list3">
                    <li class="col-lg-6 col-md-6 col-sm-6">
                        <div class="box4">
                            <figure><img src="<?=base_url()?>includes/frontend/img/page1_img4.jpg" alt=""></figure>
                            <div class="info1 maxheight">
                                <p class="list3title1">1. Pilih jenis produk yang kamu minati.</p>
                            </div>
                        </div>
                    </li>
                    <li class="col-lg-6 col-md-6 col-sm-6">
                        <div class="box4">
                            <figure><img src="<?=base_url()?>includes/frontend/img/page1_img5.jpg" alt=""></figure>
                            <div class="info1 maxheight">
                                <p class="list3title1">2. Kirim detail produk, jumlah/ quantity, kata2 dan design yang kamu minati ke email kami.( design hanya khusus untuk SOUVENIR GELAS & MUG ) </p>
                            </div>
                        </div>
                    </li>
                    <li class="col-lg-6 col-md-6 col-sm-6">
                        <div class="box4">
                            <figure><img src="<?=base_url()?>includes/frontend/img/page1_img6.jpg" alt=""></figure>
                            <div class="info1 maxheight">
                                <p class="list3title1">3. Kami akan segera mereply email kamu disertai detail pembayaran dan ongkos kirim secepatnya</p>
                            </div>
                        </div>
                    </li>
                    <li class="col-lg-6 col-md-6 col-sm-6">
                        <div class="box4">
                            <figure><img src="<?=base_url()?>includes/frontend/img/page1_img7.jpg" alt=""></figure>
                            <div class="info1 maxheight">
                                <p class="list3title1">4. Segera lakukan pembayaran yang telah di sepakati dan dikonfirmasi kepada kami. Produk yang kamu pesan akan selesai kurang lebih dalam waktu 21 hari kerja.( DILUAR ACC DESAIN )</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================row4=================================-->
    <div class="row_4">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 chef row4_col">
                    <h2>About Us</h2>
                    <figure><img src="<?=base_url()?>includes/frontend/img/page1_img8.jpg" alt=""></figure>
                    <p class="title3">Berkat Souvenir</p>
                    <p style="text-align:justify">BERKAT SOUVENIR dirintis sejak Tahun 2011 yang berpusat di Jembatan Lima, JAKARTA BARAT.<br/><br/>
                      BERKAT SOUVENIR menyediakan berbagai jenis SOUVENIR BERKUALITAS dengan HARGA MURAH untuk memenuhi kebutuhan SOUVENIR CUSTOMER kami.<br/><br/>
                      Diawali dari SOUVENIR GELAS & MUG untuk kebutuhan PROMOSI & WEDDING , kini BERKAT SOUVENIR terus BERKEMBANG untuk menyediakan SOUVENIR LAIN NYA bagi para CUSTOMER kami.<br>
                      KePUASan ANDA adalah keBANGGAan KAMI.
                    </p>
                </div>
                <div class="col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-lg-3 col-md-3 col-sm-3 row4_col">
                    <h2>Latest News</h2>
                    <ul class="list2">
                        <?php foreach($latest as $key => $row){?>
                        <li><a href="<?=base_url()?><?=$row['type']?><?=$row['id']?>"><?=$row['name']?></a></li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-lg-3 col-md-3 col-sm-3 locations row4_col">
                    <figure><img src="<?=base_url()?>includes/logofooter.png" alt=""></figure>
                    <hr class="line1">
                    <a href="mailto:berkatsouvenir@yahoo.com" class="btn-link btn-link3"><span></span>berkatsouvenir@yahoo.com</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==============================endcontent=================================-->
