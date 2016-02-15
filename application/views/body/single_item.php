
<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="<?= base_url()?>includes/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

<!-- Add fancyBox -->
<link rel="stylesheet" href="<?= base_url()?>includes/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<script type="text/javascript" src="<?= base_url()?>includes/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>

<!-- Optionally add helpers - button, thumbnail and/or media -->
<link rel="stylesheet" href="<?= base_url()?>includes/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
<script type="text/javascript" src="<?= base_url()?>includes/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript" src="<?= base_url()?>includes/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

<link rel="stylesheet" href="<?= base_url()?>includes/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
<script type="text/javascript" src="<?= base_url()?>includes/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

<link rel="stylesheet" href="<?= base_url()?>includes/fancybox/source/jquery.fancybox.css" type="text/css" media="screen" />
<script type="text/javascript" src="<?= base_url()?>includes/fancybox/source/jquery.fancybox.pack.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox();
	});
</script>
<style>
.border-box{
  border-radius: 46px 46px 46px 46px;
-moz-border-radius: 46px 46px 46px 46px;
-webkit-border-radius: 46px 46px 46px 46px;
border: 5px solid #DBCEA2;
}
</style>
<!--==============================content=================================-->
<div id="content">
    <!--==============================row5=================================-->
    <div class="row_5">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-7 reserve_table">
                    <div class="row" style="margin-left:auto; margin-right:auto">
                      <h2><?=$item['nama_product']?></h2>
                      <div style="text-align:center">
                        <a class="fancybox" rel="group" href="<?=base_url()?><?=$item['product_image']?>"><img width="23%" class="border-box" src="<?=base_url()?><?=$item['product_image']?>" alt="" /></a>
                        <a class="fancybox" rel="group" href="<?=base_url()?><?=$item['product_image2']?>"><img width="23%" class="border-box" src="<?=base_url()?><?=$item['product_image2']?>" alt="" /></a>
                        <a class="fancybox" rel="group" href="<?=base_url()?><?=$item['product_image2']?>"><img width="23%" class="border-box" src="<?=base_url()?><?=$item['product_image2']?>" alt="" /></a>
                        <a class="fancybox" rel="group" href="<?=base_url()?><?=$item['product_image2']?>"><img width="23%" class="border-box" src="<?=base_url()?><?=$item['product_image2']?>" alt="" /></a>
                      </div>
                    </div>
                    <hr/>
                    <div class="row" style="margin-left:auto; margin-right:auto">
                      <p><?=$item['description']?></p>
                    </div>
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
