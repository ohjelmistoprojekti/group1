<div>
	<form action="<?php  ?>" method="post">

	<label> <?php echo L( 'USERNAME'); ?><br> <input type = "text" class="form-control" name = "username" value = "<?php R ($old_username); ?>" ></label><br>
	<?php if( $in_add_user ): ?>
	  <label> <?php echo L( 'PASSWORD'); ?><br> <input id="pass1" class="form-control" type = "password" name = "password" disabled></label><br>
	  <label> <?php echo L( 'RETYPE_PASSWORD'); ?><br> <input id="pass2" class="form-control" type = "password" name = "retype_password" disabled></label><br>
	  <label><input id="def_pass" type = "checkbox" name = "default_password" checked> <?php echo L( 'DEFAULT_PASSWORD'); ?></label><br>
	<?php endif; ?>
	<input type="submit" class="btn btn-primary" value="<?php echo L( $user_form_type ); ?>" > <br>
	</form>
</div>