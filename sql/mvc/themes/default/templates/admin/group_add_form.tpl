<div>
  <form class="form-horizontal" role="form" action="admin.php?groups&add" method="post">
    <div class="form-group">
	  <label for="name" class="col-sm-2 control-label"><?php echo L( 'GROUP_NAME' ); ?></label>
	  <div class="col-sm-10">
	    <input type="text" class="form-control" name="name">
	  </div>
	</div>
	<div class="form-group">
	  <div class="col-sm-offset-2 col-sm-10">
	    <input type="submit" class="btn btn-primary" value="<?php echo L( 'ADD_GROUP' ); ?>" > <br>
	  </div>
	</div>
  </form>
</div>