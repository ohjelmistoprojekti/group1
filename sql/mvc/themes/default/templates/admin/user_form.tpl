<div>
	<form action="admin.php?users&add" method="post">

	<label> <?php echo L( 'EMAIL' ); ?><br> <input type = "email" class="form-control" name = "email" value = "<?php R ($old_email); ?>" ></label><br>
	<label> <?php echo L( 'FIRSTNAME' ); ?><br> <input type = "text" class="form-control" name = "firstname" value = "<?php R ($old_firstname); ?>" ></label><br>
	<label> <?php echo L( 'LASTNAME' ); ?><br> <input type = "text" class="form-control" name = "lastname" value = "<?php R ($old_lastname); ?>" ></label><br>
	<?php if( $in_add_user ): ?>
	  <label> <?php echo L( 'PASSWORD'); ?><br> <input id="pass1" class="form-control" type = "password" name = "password" disabled></label><br>
	  <label> <?php echo L( 'RETYPE_PASSWORD'); ?><br> <input id="pass2" class="form-control" type = "password" name = "retype_password" disabled></label><br>
	  <label><input id="gen_pass" type = "checkbox" name = "generate_password" checked> <?php echo L( 'GENERATE_PASSWORD'); ?></label><br>
	<?php endif; ?>
	<input type="submit" class="btn btn-primary" value="<?php echo L( $user_form_type ); ?>" > <br>
	</form>
</div>