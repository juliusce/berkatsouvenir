
<!--==============================content=================================-->
<div id="content">
  <!--==============================row7=================================-->
  <div class="row_7">
      <div class="container">
        <div class="row">
      		<div class="col-lg-8 col-md-8 col-sm-8">
              <h2>Testimonial</h2>
              <p style="text-align:justify">BERKAT SOUVENIR sangat berTERIMA KASIH atas KEPERCAYAAN , DUKUNGAN , KRITIK & MASUKAN yang telah diberikan para CUSTOMER kepada kami. <br/>
                sehingga BERKAT SOUVENIR bisa BERKEMBANG dan MEMENUHI berbagai kebutuhan SOUVENIR para CUSTOMER kami.</p>

              <hr/>
              <div class="row links">
  		          <div class="col-lg-8 col-md-8 col-sm-8">
                  <?php foreach($testimonial as $key) {?>
                    <h3><a href="<?=base_url()?>single_testimonial/<?=$key['id']?>"><?=$key['judul_testimonial']?></a></h3>
                    <img style="width:100%" class="border-box" src="<?=base_url()?><?=$key['testimonial_image']?>" />
                    <p style="text-align:justify"><?=$key['non_tags']?> <a href="<?=base_url()?>single_testimonial/<?=$key['id']?>">Read More >></a></p>
                  <?php } ?>
                </div>
              </div>
           </div>
      		<div class="col-lg-4 col-md-4 col-sm-4">
            <h2>Testimonial by Year</h2>
            <ul class="list2">
              <?php foreach($group_testi as $key2) {?>
                <li><a href="<?=base_url()?>testimonial/<?=date('Y',strtotime($key2['date_created']))?>"><?=date('Y',strtotime($key2['date_created']))?></a></li>
              <?php } ?>
            </ul>
           </div>
          </div>
      </div>
  </div>
</div>
