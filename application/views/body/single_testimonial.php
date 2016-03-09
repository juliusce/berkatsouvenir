<!--==============================content=================================-->
<div id="content">
    <!--==============================row5=================================-->
    <div class="row_5">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-7 reserve_table">
                    <h2><?=$testi['judul_testimonial']?></h2>
                    <figure style="width:50%"><img src="<?=base_url()?><?=$testi['testimonial_image']?>" style="width:100%" alt=""></figure>
                    <p><?=$testi['description']?></p>
                </div>

                <div class="col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-lg-4 col-md-4 col-sm-4">
                  <h2>Testimonial on "<?=date('Y',strtotime($testi['date_created']))?>"</h2>
                  <ul class="list2">
                    <?php foreach($group_testi as $key2) {?>
                      <li><a href="<?=base_url()?>single_testimonial/<?=$key2['id']?>"><?=$key2['judul_testimonial']?></a></li>
                    <?php } ?>
                  </ul>
                </div>
            </div>
        </div>
    </div>
</div>
