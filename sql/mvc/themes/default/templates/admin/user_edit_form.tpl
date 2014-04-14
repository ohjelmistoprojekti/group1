<div>
  <form class="form-horizontal" role="form" action="admin.php?users&edit" method="post">
	<div class="form-group">
	  <label class="col-sm-2 control-label" for="email"><?php echo L( 'EMAIL' ); ?></label>
	  <div class="col-sm-10">
	    <input type="email" class="form-control" name="email" value="<?php R( $old_email ); ?>">
	  </div>
	</div>
	<div class="form-group">
	  <label class="col-sm-2 control-label" for="firstname"> <?php echo L( 'FIRSTNAME' ); ?></label>
	  <div class="col-sm-10">
	    <input type="text" class="form-control" name="firstname" value="<?php R( $old_fname ); ?>">
	  </div>
	</div>
	<div class="form-group">
	  <label class="col-sm-2 control-label" for="lastname"> <?php echo L( 'LASTNAME' ); ?></label>
	  <div class="col-sm-10">
	    <input type="text" class="form-control" name="lastname" value="<?php R( $old_lname ); ?>">
	  </div>
	</div>
	<div class="form-group">
	  <label class="col-sm-2 control-label" for="pass1"><?php echo L( 'PASSWORD' ); ?></label>
	  <div class="col-sm-10">
	    <input id="pass1" class="form-control" type="password" name="password" disabled>
	  </div>
	</div>
	<div class="form-group">
	  <label class="col-sm-2 control-label" for="pass2"><?php echo L( 'RETYPE_PASSWORD'); ?></label>
	  <div class="col-sm-10">
	    <input id="pass2" class="form-control" type="password" name="retype_password" disabled>
	  </div>
	</div>
	<div class="form-group">
	  <label class="col-sm-2 control-label" for="group"><?php echo L( 'GROUP' ); ?></label>
	  <div class="col-sm-10">
	    <select name="group">
		  <option value="" selected></option>
		  <?php if( isset( $groups ) ): ?>
		  <?php foreach( $groups as $group ): ?>
		  <option value="<?php R( $group[ 'id' ] ); ?>"><?php R( $group[ 'name' ] ); ?></option>
		  <?php endforeach; ?>
		  <?php endif; ?>
		</select>
	  </div>
	</div>
	<div class="form-group">
	  <div class="col-sm-offset-2 col-sm-10">
	    <div class="checkbox">
	      <label>
		    <input id="gen_pass" type="checkbox" name="generate_password" checked><?php echo L( 'GENERATE_PASSWORD'); ?>
		  </label>
		</div>
	  </div>
	</div>
	<div class="form-group">
	  <div class="col-sm-offset-2 col-sm-10">
	    <button type="submit" class="btn btn-primary"><?php echo L( 'EDIT_USER' ); ?></button>
	  </div>
	</div>
  </form>
</div>