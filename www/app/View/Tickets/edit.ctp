<div class="tickets form">
<?php echo $this->Form->create('Ticket'); ?>
	<fieldset>
		<legend><?php echo __('Edit Ticket'); ?></legend>
	<?php
		echo $this->Form->input('tableId');
		echo $this->Form->input('JobId');
		echo $this->Form->input('TicketNum');
		echo $this->Form->input('PONum');
		echo $this->Form->input('TruckNum');
		echo $this->Form->input('DriverID');
		echo $this->Form->input('Date');
		echo $this->Form->input('ToLocation');
		echo $this->Form->input('FromLocation');
		echo $this->Form->input('WaterTicketNum');
		echo $this->Form->input('TrailerNum');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Ticket.tableId')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Ticket.tableId'))); ?></li>
		<li><?php echo $this->Html->link(__('List Tickets'), array('action' => 'index')); ?></li>
	</ul>
</div>
