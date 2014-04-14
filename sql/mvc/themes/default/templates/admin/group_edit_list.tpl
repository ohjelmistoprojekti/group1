<div>
  <table class="table table-condensed">
    <tbody>
	  <tr>
	    <th>#</th>
		<th><?php echo L( 'GROUP_NAME' ); ?></th>
	  </tr>
	  <?php if( isset( $groups ) ): ?>
	  <?php foreach( $groups as $group ): ?>
	  <tr>
	    <td><?php R( $group[ 'id' ] ); ?></td>
		<td><a href="#" data-toggle="modal" data-target="#editModal"><?php R( $group[ 'group' ] ); ?></a></td>
	  </tr>
	  <?php endforeach; ?>
	  <?php endif; ?>
	</tbody>
  </table>
</div>
<div class="modal fade" id="editModal" tabIndex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
	  <div class="modal-header">
	    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h4><?php echo L( 'EDIT_USER' ); ?></h4>
	  </div>
	  <div class="modal-body">
	    <?php R( $group_edit_form ); ?>
	  </div>
	  <div class="modal-footer">
	    <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo L( 'CLOSE' ); ?></button>
		<button type="button" class="btn btn-primary" id="edit_group"><?php echo L( 'EDIT_USER' ); ?></button>
	  </div>
	</div>
  </div>
</div>