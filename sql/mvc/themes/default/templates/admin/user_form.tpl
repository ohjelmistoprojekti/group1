<div>
	<form action="<?php  ?>" method="post">

	<label> <?php echo L( 'USERNAME'); ?><br> <input type = "text" name = "username" value = "<?php R ($old_username); ?>" ></label><br>
	<?php if( $in_add_user ): ?>
	  <label> <?php echo L( 'PASSWORD'); ?><br> <input type = "text" name = "password" ></label><br>
	  <label><input type = "checkbox" name = "default_password"><?php echo L( 'DEFAULT_PASSWORD'); ?></label><br>
	<?php endif; ?>
	<input type="submit" value="<?php echo L( $user_form_type ); ?>" > <br>
	</form>
</div>