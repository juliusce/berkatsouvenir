<!--==============================content=================================-->
<div id="content">
    <!--==============================row8=================================-->
    <div class="row_8">
        <div class="container">
                 <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 address">
                        <h2>Postal Address</h2>
                        <address>
                            <div class="info">
                                <strong>8901 Marmora Road, Glasgow, D04 89GR.</strong>
                            	<p><span>Telephone:</span> +1 959 603 6035</p>
                            	<p><span>LINE:</span> +1 504 889 9898</p>
                              <p><span>Whatsapp:</span> +1 504 889 9898</p>
                              <p><span>Facebook:</span> +1 504 889 9898</p>
                              <p><span>Google+:</span> +1 504 889 9898</p>
                              <p><span>Instagram:</span> +1 504 889 9898</p>
                            	<p>E-mail: <a href="mailto:#">mail@demolink.org</a></p>
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
