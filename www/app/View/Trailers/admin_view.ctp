<div class="trailers view">
<h2><?php  echo __('Trailer'); ?></h2>
	<dl>
		<dt><?php echo __('TableId'); ?></dt>
		<dd>
			<?php echo h($trailer['Trailer']['tableId']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TrailerNum'); ?></dt>
		<dd>
			<?php echo h($trailer['Trailer']['TrailerNum']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Registration'); ?></dt>
		<dd>
			<?php echo h($trailer['Trailer']['Registration']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PlateNo'); ?></dt>
		<dd>
			<?php echo h($trailer['Trailer']['PlateNo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Capacity'); ?></dt>
		<dd>
			<?php echo h($trailer['Trailer']['Capacity']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mileage'); ?></dt>
		<dd>
			<?php echo h($trailer['Trailer']['Mileage']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Trailer'), array('action' => 'edit', $trailer['Trailer']['tableId'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Trailer'), array('action' => 'delete', $trailer['Trailer']['tableId']), null, __('Are you sure you want to delete # %s?', $trailer['Trailer']['tableId'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Trailers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trailer'), array('action' => 'add')); ?> </li>
	</ul>
</div>
