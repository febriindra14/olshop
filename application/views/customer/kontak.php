<!-- 
	Upper Header Section 

<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="topNav">
		<div class="container">
			<div class="alignR">
				<div class="pull-left socialNw">
					<a href="http://<?php echo ''.$config['share1'];?>"><span class="icon-twitter"></span></a>
					<a href="http://<?php echo ''.$config['share2'];?>"><span class="icon-facebook"></span></a>
					<a href="http://<?php echo ''.$config['share3'];?>"><span class="icon-instagram"></span></a>
				</div>
				<a class="active" href="<?php echo base_url('customer');?>"> <span class="icon-home"></span> Home</a> 
				<a href="<?php echo base_url('customer/akunku')?>"><span class="icon-user"></span> My Account</a> 
				<a href="<?php echo base_url('customer/register')?>"><span class="icon-edit"></span> Free Register </a> 
				<a href="<?php echo base_url('customer/kontak')?>"><span class="icon-envelope"></span> Contact us</a>
				<a href="<?php echo base_url('customer/keranjang')?>"><span class="icon-shopping-cart"></span> <?php echo $jumlah->num_rows(); ?> items <span class="badge badge-warning"> Rp <?php echo number_format($total,0,",","."); ?> </span></a>
				<a href="<?php echo base_url('login_customer/logout')?>" >Logout</a>
			</div>
		</div>
	</div>
</div>
<!-- -->

<div class="span12">
	<hr class="soften">
	<div class="well well-small">
	<h1>Visit us</h1>
	<hr class="soften"/>	
	<div class="row-fluid">
		<div class="span8 relative">
		<iframe style="width:100%; height:350px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.co.uk/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Newbury+Street,+Boston,+MA,+United+States&amp;aq=1&amp;oq=NewBoston,+MA,+United+States&amp;sll=42.347238,-71.084011&amp;sspn=0.014099,0.033023&amp;ie=UTF8&amp;hq=Newbury+Street,+Boston,+MA,+United+States&amp;t=m&amp;ll=42.348994,-71.088248&amp;spn=0.001388,0.006276&amp;z=18&amp;iwloc=A&amp;output=embed"></iframe>

		<div class="absoluteBlk">
		<div class="well wellsmall">
		<h4>Contact Details</h4>
		<h5>
			2601 Mission St.<br/>
			San Francisco, CA 94110<br/><br/>
			 
			info@mysite.com<br/>
			﻿Tel 123-456-6780<br/>
			Fax 123-456-5679<br/>
			web:wwwmysitedomain.com
		</h5>
		</div>
		</div>
		</div>
		
		<div class="span4">
		<h4>Email Us</h4>
		<form class="form-horizontal">
        <fieldset>
          <div class="control-group">
           
              <input type="text" placeholder="name" class="input-xlarge"/>
           
          </div>
		   <div class="control-group">
           
              <input type="text" placeholder="email" class="input-xlarge"/>
           
          </div>
		   <div class="control-group">
           
              <input type="text" placeholder="subject" class="input-xlarge"/>
          
          </div>
          <div class="control-group">
              <textarea rows="3" id="textarea" class="input-xlarge"></textarea>
           
          </div>

            <button class="shopBtn" type="submit">Send email</button>


        </fieldset>
      </form>
		</div>
	</div>
   </div>

</div>   