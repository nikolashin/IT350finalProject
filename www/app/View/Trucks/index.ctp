<div class="trucks index">
	<h2><?php echo __('Trucks'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('tableId'); ?></th>
			<th><?php echo $this->Paginator->sort('TruckNum'); ?></th>
			<th><?php echo $this->Paginator->sort('LicenceDOT'); ?></th>
			<th><?php echo $this->Paginator->sort('Mileage'); ?></th>
			<th><?php echo $this->Paginator->sort('PlateNo'); ?></th>
			<th><?php echo $this->Paginator->sort('Truck_Type'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($trucks as $truck): ?>
	<tr>
		<td><?php echo h($truck['Truck']['tableId']); ?>&nbsp;</td>
		<td><?php echo h($truck['Truck']['TruckNum']); ?>&nbsp;</td>
		<td><?php echo h($truck['Truck']['LicenceDOT']); ?>&nbsp;</td>
		<td><?php echo h($truck['Truck']['Mileage']); ?>&nbsp;</td>
		<td><?php echo h($truck['Truck']['PlateNo']); ?>&nbsp;</td>
		<td><?php echo h($truck['Truck']['Truck_Type']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $truck['Truck']['tableId'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $truck['Truck']['tableId'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $truck['Truck']['tableId']), null, __('Are you sure you want to delete # %s?', $truck['Truck']['tableId'])); ?>
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
		<li><?php echo $this->Html->link(__('New Truck'), array('action' => 'add')); ?></li>
                <li><?php echo $this->Html->link(__('Back'), 'http://cannon.robertmcclellan.me'); ?></li>
	</ul>
</div>
