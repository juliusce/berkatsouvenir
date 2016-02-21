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
          <div data-src="http://localhost/berkatsouvenir/uploads/slider/picture2.jpg"></div><div data-src="http://localhost/berkatsouvenir/uploads/slider/picture1.jpg"></div><div data-src="http://localhost/berkatsouvenir/uploads/slider/picture3.jpg"></div><div data-src="http://localhost/berkatsouvenir/uploads/slider/picture4.jpg"></div>
        </div>
    </div>
    <!--==============================row1=================================-->
    <div class="row_1">
        <div class="container">
            <p class="title1">Welcome Good People!</p>
            <p class="title2">In this special moment in your life... let present a special gift for your special guest.. and make your special day memorable..</p>
        </div>
    </div>
    <hr />
    <!--==============================row2=================================-->
    <div class="row_2">
        <!-- END OF CONTAINER FOR PROMO ITEMS -->
        <div class="container">
            <div class="row">
                <p class="title1">Promo</p>
                <p class="title2">Still a promo stuff on our store, for your beloved guest..</p>
                <ul class="list1">
                    <li class="col-lg-4 col-md-4 col-sm-4 listbox1">
                        <div class="box1">
                            <a href="#">
                                <figure><img src="<?=base_url()?>includes/frontend/img/page1_img1.jpg" alt=""></figure>
                                <p>Women</p>
                            </a>
                        </div>
                    </li>
                    <li class="col-lg-4 col-md-4 col-sm-4 listbox2">
                        <div class="box2">
                            <a href="#">
                                <p>Men</p>
                                <figure><img src="<?=base_url()?>includes/frontend/img/page1_img2.jpg" alt=""></figure>
                            </a>
                        </div>
                    </li>
                    <li class="col-lg-4 col-md-4 col-sm-4 listbox3">
                        <div class="box3">
                            <a href="#">
                                <figure><img src="<?=base_url()?>includes/frontend/img/page1_img3.jpg" alt=""></figure>
                                <p>Children</p>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
            <p class="title2"><a class="btn-link btn-link2" href="#">More for promo<span></span></a></p>
        <!-- END OF CONTAINER FOR PROMO ITEMS -->
        <hr />
        <!-- START OF CONTAINER FOR NEW ARRIVAL ITEMS -->
            <div class="row">
                <p class="title1">New Arrival</p>
                <p class="title2">New arrival stuff on our store, you can choose this new one or that one..</p>
                <ul class="list1">
                    <li class="col-lg-4 col-md-4 col-sm-4 listbox1">
                        <div class="box1">
                            <a href="#">
                                <figure><img src="<?=base_url()?>includes/frontend/img/page1_img1.jpg" alt=""></figure>
                                <p>Women</p>
                            </a>
                        </div>
                    </li>
                    <li class="col-lg-4 col-md-4 col-sm-4 listbox2">
                        <div class="box2">
                            <a href="#">
                                <p>Men</p>
                                <figure><img src="<?=base_url()?>includes/frontend/img/page1_img2.jpg" alt=""></figure>
                            </a>
                        </div>
                    </li>
                    <li class="col-lg-4 col-md-4 col-sm-4 listbox3">
                        <div class="box3">
                            <a href="#">
                                <figure><img src="<?=base_url()?>includes/frontend/img/page1_img3.jpg" alt=""></figure>
                                <p>Children</p>
                            </a>
                        </div>
                    </li>
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
                                <p class="list3title1">Nature</p>
                                <p class="list3title2">Migytafsas deuauyt asares</p>
                                <p class="list3title3">Kictaesaert asetyertya aset aplicibrdedas.</p>
                                <a href="#" class="btn-link btn-link1">learn more<span></span></a>
                            </div>
                        </div>
                    </li>
                    <li class="col-lg-6 col-md-6 col-sm-6">
                        <div class="box4">
                            <figure><img src="<?=base_url()?>includes/frontend/img/page1_img5.jpg" alt=""></figure>
                            <div class="info1 maxheight">
                                <p class="list3title1">Cities</p>
                                <p class="list3title2">Btreasas lisemeyta siqades</p>
                                <p class="list3title3">Kictaesaert asetyertya aset aplicibrdedas.</p>
                                <a href="#" class="btn-link btn-link1">learn more<span></span></a>
                            </div>
                        </div>
                    </li>
                    <li class="col-lg-6 col-md-6 col-sm-6">
                        <div class="box4">
                            <figure><img src="<?=base_url()?>includes/frontend/img/page1_img6.jpg" alt=""></figure>
                            <div class="info1 maxheight">
                                <p class="list3title1">Portraits</p>
                                <p class="list3title2">Dolore nuyfasa kerytertas</p>
                                <p class="list3title3">Kictaesaert asetyertya aset aplicibrdedas.</p>
                                <a href="#" class="btn-link btn-link1">learn more<span></span></a>
                            </div>
                        </div>
                    </li>
                    <li class="col-lg-6 col-md-6 col-sm-6">
                        <div class="box4">
                            <figure><img src="<?=base_url()?>includes/frontend/img/page1_img7.jpg" alt=""></figure>
                            <div class="info1 maxheight">
                                <p class="list3title1">Fashion</p>
                                <p class="list3title2">Fertyuasa mietyas lteasas</p>
                                <p class="list3title3">Kictaesaert asetyertya aset aplicibrdedas.</p>
                                <a href="#" class="btn-link btn-link1">learn more<span></span></a>
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
                    <h2>About Me</h2>
                    <figure><img src="<?=base_url()?>includes/frontend/img/page1_img8.jpg" alt=""></figure>
                    <p class="title3">Vivamus eget</p>
                    <p>Vitaesaert asetyertya asetrde maeciegast nieri vrtye remiad.Molirnatur aut oditaut. onsq ntmagni dolores eo qui ratione. </p>
                    <p class="m_bot1">Nasgaesaert asetyertya asetrde maeciegast nieriti vrtye remiades.Molirnatur aut oditaut.</p>
                    <a href="#" class="btn-link btn-link2">read more<span></span></a>
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
                    <h2>Locations</h2>
                    <figure><img src="<?=base_url()?>includes/frontend/img/smalllogo1.png" alt=""></figure>
                    <p class="title4">28 Jackson Blvd Ste 1020<br>Chicago<br>IL 60604-2340</p>
                    <hr class="line1">
                    <a href="#" class="btn-link btn-link3"><span></span>info@demolink.org</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==============================endcontent=================================-->
