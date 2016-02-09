<!--==============================content=================================-->
<div id="content">
    <!--==============================row5=================================-->
    <div class="row_5">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-7 reserve_table">
                    <h2><?=$item['nama_product']?></h2>
                    <figure style="width:30%"><img src="<?=base_url()?><?=$item['product_image']?>" style="width:100%" alt=""></figure>
                    <figure style="width:30%">
                      <img src="<?=base_url()?><?=$item['product_image2']?>" style="width:50%" alt=""><img src="<?=base_url()?><?=$item['product_image']?>" style="width:50%" alt=""><br/> <img src="<?=base_url()?><?=$item['product_image']?>" style="width:50%" alt=""><img src="<?=base_url()?><?=$item['product_image2']?>" style="width:50%" alt="">
                    </figure>
                    <p><?=$item['description']?></p>
                </div>

                <div class="col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-lg-4 col-md-4 col-sm-4">
                  <h2>Items with Category "<?=$item['nama_category']?>"</h2>
                  <ul class="list2">
                    <?php foreach($group_item as $key2) {?>
                      <li><a href="<?=base_url()?>single_item/<?=$key2['id']?>"><?=$key2['nama_product']?></a></li>
                    <?php } ?>
                  </ul>
                </div>
            </div>
        </div>
    </div>
</div>
