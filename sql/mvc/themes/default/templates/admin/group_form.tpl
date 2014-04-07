<div>
	<form action="admin.php?groups&add" method="post">

	<label> <?php echo L( 'GROUP_NAME' ); ?><br> <input type = "text" class="form-control" name = "name" value = "<?php R ($old_name); ?>" ></label><br>
	<input type="submit" class="btn btn-primary" value="<?php echo L( $group_form_type ); ?>" > <br>
	</form>
</div>