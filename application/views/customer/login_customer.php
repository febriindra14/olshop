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

<div class="span1"> &nbsp;</div>
	<div class="span4">
		<?php  echo $this->session->flashdata("error"); ?>
		<div class="well">
		<h5>ALREADY REGISTERED ?</h5>

		<form action="<?php echo base_url('login_customer/login_cus')?>" method="post">

		 <div class="control-group">
			<label class="control-label" for="inputEmail">Email</label>
			<div class="controls">
			<input class="span3"  type="text" name="email" placeholder="Email">
		</div>
		</div>
		<div class="control-group">
		<label class="control-label" for="inputPassword">Password</label>
		<div class="controls">
		<input type="password" name="password" class="span3" placeholder="Password">
		</div>
		</div>
		<div class="control-group">
		<div class="controls">
		<button type="submit" class="defaultBtn">Sign in</button> <a href="<?php echo base_url('login_customer/ganti')?>">Forget password?</a>
		</div>
		</div>

		</form>

	</div>
</div>