
<!--==============================content=================================-->
<div id="content">
  <!--==============================row7=================================-->
  <div class="row_7">
      <div class="container">
        <div class="row">
      		<div class="col-lg-8 col-md-8 col-sm-8">
              <h2>Article</h2>
              <div class="row links">
  		          <div class="col-lg-8 col-md-8 col-sm-8">
                  <?php foreach($article as $key) {?>
                    <h3><a class="btn-link4" href="<?=base_url()?>single_article/<?=$key['id']?>"><?=$key['judul_article']?></a></h3>
                    <p><?=$key['description']?></p>
                  <?php } ?>
                </div>
              </div>
           </div>
      		<div class="col-lg-4 col-md-4 col-sm-4">
            <h2>Article by Year</h2>
            <ul class="list2">
              <?php foreach($group_article as $key2) {?>
                <li><a href="<?=base_url()?>article/<?=date('Y',strtotime($key2['date_created']))?>"><?=date('Y',strtotime($key2['date_created']))?></a></li>
              <?php } ?>
            </ul>
           </div>
          </div>
      </div>
  </div>
</div>
