<div class="trailers index">
	<h2><?php echo __('Trailers'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('tableId'); ?></th>
			<th><?php echo $this->Paginator->sort('TrailerNum'); ?></th>
			<th><?php echo $this->Paginator->sort('Registration'); ?></th>
			<th><?php echo $this->Paginator->sort('PlateNo'); ?></th>
			<th><?php echo $this->Paginator->sort('Capacity'); ?></th>
			<th><?php echo $this->Paginator->sort('Mileage'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($trailers as $trailer): ?>
	<tr>
		<td><?php echo h($trailer['Trailer']['tableId']); ?>&nbsp;</td>
		<td><?php echo h($trailer['Trailer']['TrailerNum']); ?>&nbsp;</td>
		<td><?php echo h($trailer['Trailer']['Registration']); ?>&nbsp;</td>
		<td><?php echo h($trailer['Trailer']['PlateNo']); ?>&nbsp;</td>
		<td><?php echo h($trailer['Trailer']['Capacity']); ?>&nbsp;</td>
		<td><?php echo h($trailer['Trailer']['Mileage']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $trailer['Trailer']['tableId'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $trailer['Trailer']['tableId'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $trailer['Trailer']['tableId']), null, __('Are you sure you want to delete # %s?', $trailer['Trailer']['tableId'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Trailer'), array('action' => 'add')); ?></li>
                <li><?php echo $this->Html->link(__('Back'), 'http://cannon.robertmcclellan.me'); ?></li>
	</ul>
</div>
