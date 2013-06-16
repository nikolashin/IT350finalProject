<div class="tickets index">
	<h2><?php echo __('Tickets'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('tableId'); ?></th>
			<th><?php echo $this->Paginator->sort('JobId'); ?></th>
			<th><?php echo $this->Paginator->sort('TicketNum'); ?></th>
			<th><?php echo $this->Paginator->sort('PONum'); ?></th>
			<th><?php echo $this->Paginator->sort('TruckNum'); ?></th>
			<th><?php echo $this->Paginator->sort('DriverID'); ?></th>
			<th><?php echo $this->Paginator->sort('Date'); ?></th>
			<th><?php echo $this->Paginator->sort('ToLocation'); ?></th>
			<th><?php echo $this->Paginator->sort('FromLocation'); ?></th>
			<th><?php echo $this->Paginator->sort('WaterTicketNum'); ?></th>
			<th><?php echo $this->Paginator->sort('TrailerNum'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($tickets as $ticket): ?>
	<tr>
		<td><?php echo h($ticket['Ticket']['tableId']); ?>&nbsp;</td>
		<td><?php echo h($ticket['Ticket']['JobId']); ?>&nbsp;</td>
		<td><?php echo h($ticket['Ticket']['TicketNum']); ?>&nbsp;</td>
		<td><?php echo h($ticket['Ticket']['PONum']); ?>&nbsp;</td>
		<td><?php echo h($ticket['Ticket']['TruckNum']); ?>&nbsp;</td>
		<td><?php echo h($ticket['Ticket']['DriverID']); ?>&nbsp;</td>
		<td><?php echo h($ticket['Ticket']['Date']); ?>&nbsp;</td>
		<td><?php echo h($ticket['Ticket']['ToLocation']); ?>&nbsp;</td>
		<td><?php echo h($ticket['Ticket']['FromLocation']); ?>&nbsp;</td>
		<td><?php echo h($ticket['Ticket']['WaterTicketNum']); ?>&nbsp;</td>
		<td><?php echo h($ticket['Ticket']['TrailerNum']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $ticket['Ticket']['tableId'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $ticket['Ticket']['tableId'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $ticket['Ticket']['tableId']), null, __('Are you sure you want to delete # %s?', $ticket['Ticket']['tableId'])); ?>
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
		<li><?php echo $this->Html->link(__('New Ticket'), array('action' => 'add')); ?></li>
                <li><?php echo $this->Html->link(__('Back'), 'http://cannon.robertmcclellan.me'); ?></li>
	</ul>
</div>
