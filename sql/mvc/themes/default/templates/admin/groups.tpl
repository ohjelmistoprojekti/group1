<div class="panel-group" id="accordion">  <div class="panel panel-default">    <div class="panel-heading">	  <h4 class="panel-title">	    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><?php echo L( 'ADD_GROUPS' ); ?></a>	  </h4>	</div>	<div id="collapseOne" class="panel-collapse collapse">	  <div class="panel-body">	    <?php R( $group_add_form ); ?>	  </div>	</div>  </div>  <div class="panel panel-default">    <div class="panel-heading">	  <h4 class="panel-title">	    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><?php echo L( 'EDIT_GROUPS' ); ?></a>	  </h4>	</div>	<div id="collapseTwo" class="panel-collapse collapse">	  <div class="panel-body">	    <?php R( $group_edit_list ); ?>	  </div>	</div>  </div>  <div class="panel panel-default">    <div class="panel-heading">	  <h4 class="panel-title">	    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><?php echo L( 'DELETE_GROUPS' ); ?></a>	  </h4>	</div>	<div id="collapseThree" class="panel-collapse collapse">	  <div class="panel-body">	    Delete Users	  </div>	</div>  </div></div>