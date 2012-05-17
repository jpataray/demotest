<?php
$host = $_SERVER['HTTP_HOST'];
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <title>Lifecell - Collagen Booster with Resveratrol | South Beach Skincare</title>	
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="checkout/css/style.css" />
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/lifecell.general.js"></script>
    <script type="text/javascript" src="js/script.js"></script>

<style type="text/css">
div.errors { margin:0px; padding:0px; width:280px; position:absolute; background-color: #f0f0f0; border: 10px solid #ba3934; margin-left:541px; padding: 5px; display: none; }
div.errors p { font-weight:bold; text-align:center; font-size:14px; margin:0px; padding:0px; padding-bottom:5px;}
div.errors ol  { margin:0px; padding:0px; padding-left:10px;}
div.errors ol li { list-style-type: disc; margin-left: 10px; }
label.error { display: inline; cursor:pointer; color:#cc0000; margin-left:10px; font-weight:bold; position:absolute; z-index:1000; }
input.error, select.error { border:1px solid #cc0000; }
</style>

<script type="text/javascript" id="wa_u"></script>
<script type="text/javascript">
var wa_account="CACDCCC8C6CECDC8C6CDCD", wa_location=11, wa_pageName=location.pathname;
document.cookie='__support_check=1;path=/';wa_hp='http';
wa_rf=document.referrer;wa_sr=window.location.search;
wa_tz=new Date();if(location.href.substr(0,6).toLowerCase()=='https:')
wa_hp='https';wa_data='&an='+escape(navigator.appName)+
'&sr='+escape(wa_sr)+'&ck='+document.cookie.length+
'&rf='+escape(wa_rf)+'&sl='+escape(navigator.systemLanguage)+
'&av='+escape(navigator.appVersion)+'&l='+escape(navigator.language)+
'&pf='+escape(navigator.platform)+'&pg='+escape(wa_pageName);
wa_data=wa_data+'&cd='+
screen.colorDepth+'&rs='+escape(screen.width+ ' x '+screen.height)+
'&tz='+wa_tz.getTimezoneOffset()+'&je='+ navigator.javaEnabled();
wa_img=new Image();wa_img.src=wa_hp+'://counter.hitslink.com/statistics.asp'+
'?v=1&s='+wa_location+'&eacct='+wa_account+wa_data+'&tks='+wa_tz.getTime();
document.cookie='__support_check=1;path=/;expires=Thu, 01-Jan-1970 00:00:01 GMT';
document.getElementById('wa_u').src=wa_hp+'://counter.hitslink.com/track.js';
</script>

<script src="//static.getclicky.com/js" type="text/javascript"></script>
<script type="text/javascript">try{ clicky.init(66498422); }catch(e){}</script>
<noscript><img alt="Clicky" width="1" height="1" src="//in.getclicky.com/66498422ns.gif" /></noscript>
<script>

function init() {
  $('#quantity').val(0);
  $('#quantity').change();
  $('#promotion-less span').css('visibility', 'hidden');
   $('#quantity').change(function() {
      var qty = $('#quantity').val();
      var sub_total_id = 'span-sub-total';
      var product_price = $('#product-price').val();
      var sub_total = qty * product_price;
      var sub_total_str = ' Sub-Total $' + sub_total.toFixed(2);
      $('#' + sub_total_id).html(sub_total_str);
      if (qty > 1) {
        $('#promotion-less span').css('visibility', 'visible');
      } else {
        $('#promotion-less span').css('visibility', 'hidden');
      }

   });

}
  
   $(init);
</script>

</head>
<body>
<form name="checkout_form" id="checkout_form" method="post" style="display: inline;">
    <div id="container">

        <div id="top-celeb">
          <div id="top-celeb-article-section">
            <div id="top-celeb-articles">
              <h1 class="article-title">You're Now Just One Step Away From Looking Healthier and Younger!</h1>
            </div>
            <div class="celeb-section">
              <img src="checkout/images/jennifer-taylor-celeb.jpg"/>
              <img src="checkout/images/hillary-scott-celeb.jpg"/>

              <img src="checkout/images/paris-hilton-celeb.jpg"/>
              <img src="checkout/images/paula-abdul-celeb.jpg"/>
            </div>
            <div id="lifecell-collagen-booster-product">
              <img src="checkout/images/lifecell-collagen-booster-product.jpg"/>
            </div>
            <div class="made-in-usa-2" style="position: relative; float: right; font-size: 10px; color: rgb(255, 255, 255); left: -47px; top: -184px;">
                <img src="checkout/images/usa-flag.gif"> Made in the USA
            </div>

          </div>
        </div>

      <div id="body-wrapper">
        <div class='leftpanel'>
    			<div class="big-arrow"></div>
    			<!-- layer 1 -->
    			<div class="product-info-l1">
    				<span class='pro'>Product Description</span>
                    <span class="qty-field" style="position: relative; left: 200px;">Quantity</span>
                    <span class='price priceL'>Price</span>
    			</div>
    			<!-- layer 2 -->
    			<div class="product-info-l2">
    				<span class="pro">LifeCell - Collagen Booster with Resveratrol</span>
                    <select name="quantity" id="quantity" style="border: 1px solid #948a8a;">
                        <option value="0">&nbsp;</option>
                        <option value="1">&nbsp;1</option>
                        <option value="2">&nbsp;2</option>
                        <option value="3">&nbsp;3</option>
                        <option value="4">&nbsp;4</option>
                        <option value="5">&nbsp;5</option>

                        <option value="6">&nbsp;6</option>
                        <option value="7">&nbsp;7</option>
                        <option value="8">&nbsp;8</option>
                        <option value="9">&nbsp;9</option>
                        <option value="10">&nbsp;10</option>
                      </select>

                    <span class='price'>$57.77</span>
                    <input type="hidden" id="product-price" value="57.77"/>
			    <div class="clear"></div>

    			</div>
    			<!-- layer 3 -->
    			<div class="product-info-l3">
    				<span id="span-sub-total"> Sub-Total $0.00</span>

                    <input type="hidden" name="sub-total" id="sub-total" value=""/>
    			</div>
    			<!-- layer 4 -->
    			<div class="product-info-l4">
    				<span>
    				Shipping &#38; Handling:
    								   <select name="shippingCost" id="shippingCost" onChange="" style="border:none; text-align:right;">
			      <option value="1.25">USPS First-Class Shipping &nbsp;</option>

				  <option value="19">USPS Express Shipping &nbsp;</option>
			   </select>
			       				$<span class="s_ShippingPrice">6.95</span></span>
                    <input type="hidden" name="shipping-price" id="shipping-price"/>
    			</div>
    			<!-- layer 5 -->
    			<div class="product-info-l5" id="promotion-less">

    				<span> <?php echo date('F jS, Y');?> Promotion -$<span class="s_DiscountField">28.89</span></span>
    			</div>
    			<!-- layer 5 -->
    			<div class="product-info-l6">
    				<span> Order Total (today charge) <span id="calc-grand-total">$1.25</span></span>
    			</div>

    			<!-- left footer -->
    			<div class="trial-date">
    				<img src="checkout/images/united-state-postal-service.jpg" />
					    				<span>Your 30-day trial is estimated to arrive on:</span><br>
    				<span class='dateesti'>Monday, January 3rd, 2011</span>
    			</div>

                <div class="clear"></div>

                <div id="promo-form-section">
                  <div id="promote-fields">
                    <table>
                      <tr>
                        <td><label>Promo Code &raquo; </label></td>
                        <td><input type="text" name="promo-code" id="promo-code"/></td>
                        <td><input type="submit" value="" name="promo-code-submit-btn" id="promo-code-submit-btn"/></td>
                      </tr>

                    </table>
                  </div>
                </div>
                <div class="clear"></div>

				<div class="div_verisign">We know that <span class="text_red_12">protecting your personal information</span> is extremely important to you. Life Cell uses the best and most respected independent companies to monitor and certify that it is safe and secure for you to provide your personal information.</div>
    		</div>

    		<div class='rightpanel'>
            <?php
              $user_agent = $_SERVER['HTTP_USER_AGENT'];
              $is_ie = strpos(strtolower($user_agent), 'msie');
              if (!$is_ie) {
                ?>
                <div style="background: url(&quot;checkout/images/sidebartop.png&quot;) no-repeat scroll 0% 0% transparent; width: 278px; height: 166px; z-index: 1; position: relative; margin-top: -64px; text-align: left; padding-left: 5px; font-size: 14px; color:#fff; ">
				<p style="padding: 70px 0 0 10px;">
					<strong style="text-transform:uppercase; font-size: 16px;">Our apologies.</strong><br>
					<strong>Due to unusually high demand <br>
					Collagen Booster is available <br>
					only for customers with Valid, <br>
					VIP Coupon Code.</strong>
				</p>				
				</div>
                <?php
              } else {
                ?>
                <div style="z-index: 1; position: relative; margin-top: -50px; width: 299px; background: url(checkout/images/hurry-limited-offer-top-bg.png); height: 191px; left: -6px;"></div>
                <?php
              }
            ?>
			

		<div style="background:url(checkout/images/sidebarmid-red.png) top left repeat-x; font-family:Arial; font-size:13px; height: 66px;">
			<p style="padding: 8px 0 0 16px; color: #fff;">
				<strong>Due to high demand <br>
				Collagen Booster is temporarily <br>
				out of stock.</strong>
			</p>
		</div>
		
		<div style="background:url(checkout/images/sidebarbtm.png) top left no-repeat; font-family:Arial; font-size:12px; height: 189px;">
			<p style="padding: 8px 0 0 16px; color: #fff;"><strong style="font-size: 14px;">If you have your Coupon Code,<br>
					please submit it and your<br>
					1 month supply will be sent to<br>
					you FREE of charge, with your<br> 
					next shipment of Lifecell Cream.</strong>
			</p>
			<div style="padding:10px 0 0 10px;">
				<div style="background:url(checkout/images/red-arrow.png) no-repeat 0 0 transparent; height:68px; width:252px; padding-left: 10px;">
				 <p style="padding: 25px 0 0 10px; color: #fff;">
					<strong style="text-transform:uppercase; font-size: 15px;">USE YOUR CODE HERE</strong>
				 </p>
				</div>
			</div>
		</div>
		
		<div style="text-align: left;">
			<div style="padding: 20px 0 0 0;">
				<img src="checkout/images/envelope.png" width="52" height="28" />
				<p style="font-size:12px; padding: 5px 0 0 5px;">
				Email us to <a href="#">support@lifecellcollagenbooster.com</a><br>
				to be notified once it becomes available.
				</>
			</div>
		</div>
			
    		</div>
    	</div>

    	<div class="clear"></div>
          <div class="clear"></div>
          <div id="footer-container-section">
            <div id="footer-border-break"></div>
          </div>

		<div class="copyright">
							  Copyright &copy; South Beach Skincare, Inc. All Rights Resereved.
			<a href="//www.lifecellcollagenbooster.com/spread/tell-a-friend.html" onClick="OpenCenterWindow(this.href,590,720); return false;" target="_blank">Tell a Friend</a> |
            <a href="//www.lifecellcollagenbooster.com/legal/privacy_policy.php" onClick="OpenCenterWindow(this.href,800,600); return false;" target="_blank">Privacy Policy</a> |
            <a href="//www.lifecellcollagenbooster.com/legal/cx_terms_and_conditions.php" onClick="OpenCenterWindow(this.href,800,600); return false;" target="_blank">Terms And Conditions</a>
            <a href="//www.lifecellcollagenbooster.com/returns/" target="_blank">Returns</a> |
            <a href="//www.lifecellcollagenbooster.com/legal/DMCA_policy.html" onClick="OpenCenterWindow(this.href,800,600); return false;" target="_blank">DMCA Policy</a> |
            <a href="//www.lifecellcollagenbooster.com/legal/notice_to_debit_card_users.html" onClick="OpenCenterWindow(this.href,800,600); return false;" target="_blank">Notice to Debit Card Users</a>

		</div>

					<div id="security-logos">
				<center>
                  <img src="checkout/images/mcafee.png" />
                  <img src="checkout/images/verisign.png" />
                  <img src="checkout/images/truste.png" />
                  <img src="checkout/images/authorize.png" />
                  <img src="checkout/images/satisfaction-guarantee.png" />

				</center>
			</div>
			<div class="clear"><br></div>

    </div>

<input type="hidden" name="decline_url" value="http://www.lifecellcollagenbooster.com/cb/checkout.php" />
<input type="hidden" id="recurring_billing" name="recurring_billing" value="YES" />
<input type="hidden" name="subscrInterval" id="subscrInterval" value="60" />
<input type="hidden" name="offer" value="ForceOfferT1" />
<input type="hidden" name="template" value="T1" />

<input name="qty" type="hidden" id="qty" value="1" />

<input type="hidden" name="shipping_country" id="shipping_country" value="" />
<input type="hidden" name="shipping_first_name"  id="shipping_first_name" value="" />
<input type="hidden" name="shipping_last_name" id="shipping_last_name" value="" />
<input type="hidden" name="shipping_company" id="shipping_company" value="" />
<input type="hidden" name="shipping_address" id="shipping_address" value="" />
<input type="hidden" name="shipping_city" id="shipping_city" value="" />
<input type="hidden" name="shipping_state" id="shipping_state" value="" />
<input type="hidden" name="shipping_state_us" id="shipping_state_us" value="" />
<input type="hidden" name="shipping_zip" id="shipping_zip" value="" />

<input type="hidden" name="phone" id="phone" value="" />
<input type="hidden" name="email" id="email" value="" />

<input type="hidden" name="first_name" id="billing_first_name" value="" />
<input type="hidden" name="last_name" id="billing_last_name" value="" />
<input type="hidden" name="company" id="billing_company" value="" />

<input type="hidden" name="__validate" value="CCFB3D4D66EE0C9EA17776DBDC684A0A"  />
</form>

</body>
</html>