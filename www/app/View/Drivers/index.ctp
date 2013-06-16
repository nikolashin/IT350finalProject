<div class="drivers index">
	<h2><?php echo __('Drivers'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('tableId'); ?></th>
			<th><?php echo $this->Paginator->sort('DriverLicNum'); ?></th>
			<th><?php echo $this->Paginator->sort('Name'); ?></th>
			<th><?php echo $this->Paginator->sort('Insurance'); ?></th>
			<th><?php echo $this->Paginator->sort('LicenseType'); ?></th>
			<th><?php echo $this->Paginator->sort('Experience'); ?></th>
			<th><?php echo $this->Paginator->sort('PayRate'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($drivers as $driver): ?>
	<tr>
		<td><?php echo h($driver['Driver']['tableId']); ?>&nbsp;</td>
		<td><?php echo h($driver['Driver']['DriverLicNum']); ?>&nbsp;</td>
		<td><?php echo h($driver['Driver']['Name']); ?>&nbsp;</td>
		<td><?php echo h($driver['Driver']['Insurance']); ?>&nbsp;</td>
		<td><?php echo h($driver['Driver']['LicenseType']); ?>&nbsp;</td>
		<td><?php echo h($driver['Driver']['Experience']); ?>&nbsp;</td>
		<td><?php echo h($driver['Driver']['PayRate']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $driver['Driver']['tableId'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $driver['Driver']['tableId'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $driver['Driver']['tableId']), null, __('Are you sure you want to delete # %s?', $driver['Driver']['tableId'])); ?>
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
		<li><?php echo $this->Html->link(__('New Driver'), array('action' => 'add')); ?></li>
                <li><?php echo $this->Html->link(__('Back'), 'http://cannon.robertmcclellan.me'); ?></li>
	</ul>
</div>
