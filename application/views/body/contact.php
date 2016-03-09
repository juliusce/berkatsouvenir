<!--==============================content=================================-->
<div id="content">
    <!--==============================row8=================================-->
    <div class="row_8">
        <div class="container">
                 <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 address">
                        <h2>Our Contact</h2>
                        <address>
                            <div class="info">
                            	<p><span>Telephone:</span> +62 812 8997 9786</p>
                              <p><span></span> +62 838 9779 7667</p>
                            	<p><span>LINE:</span> vieberkatsouvenir</p>
                              <p><span>WA:</span> +62 812 8997 9786</p>
                              <p><span></span> +62 838 9779 7667</p>
                              <p><span>Facebook:</span> Berkat Souvenir Shop</p>
                              <p><span>Google+:</span> Berkatsouvenir@gmail.com</p>
                              <p><span>Instagram:</span> @BerkatSouvenir</p>
                            	<p><span>E-mail:</span>  <a href="mailto:berkatsouvenir@yahoo.com">berkatsouvenir@yahoo.com</a></p>
                            </div>
                        </address>

                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 address">
                        <h2>Contact Form</h2>
                        <form id="contact-form" method="post" action="<?=base_url()?>contact/sent_inquiry" class="contact-form">
                          <div class="success"> Contact form submitted! <strong>We will be in touch soon.</strong> </div>
                          <fieldset>
                            <div class="coll-1">
                              <div class="txt-form">Name<span>*</span></div>
                              <label class="name">
                                <input type="text" Placeholder="Name*" name="name"><br>
                                <span class="error">*This is not a valid name.</span> <span class="empty">*This field is required.</span> </label>
                            </div>
                            <div class="coll-2">
                              <div class="txt-form">Email<span>:</span></div>
                              <label class="email">
                                <input type="email" Placeholder="E-mail*" name="email"><br>
                                <span class="error">*This is not a valid email address.</span> <span class="empty">*This field is required.</span> </label>
                            </div>
                            <div class="coll-3">
                              <div class="txt-form">phone:</div>
                              <label class="phone notRequired">
                                <input type="tel" Placeholder="Phone*" name="tel"><br>
                                <span class="error">*This is not a valid phone number.</span> <span class="empty">*This field is required.</span> </label>
                            </div>
                            <div class="clear"></div>
                            <div>
                              <div class="txt-form">Comment<span>*</span></div>
                              <label class="message">
                                <textarea name="message" placeholder="Message*"></textarea><br>
                                <span class="error">*The message is too short.</span> <span class="empty">*This field is required.</span> </label>
                            </div>
                            <div class="clear"></div>
                          </fieldset>
                          <div class="buttons-wrapper clearfix"><button type="submit" class="btn">Sent</button><strong>*REQUIRED FIELDS</strong></div>
                        </form>
                    </div>
                 </div>
        </div>
    </div>
</div>
<!--==============================footer=================================-->
