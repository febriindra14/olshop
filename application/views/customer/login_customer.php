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