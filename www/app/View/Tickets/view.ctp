<div class="tickets view">
<h2><?php  echo __('Ticket'); ?></h2>
	<dl>
		<dt><?php echo __('TableId'); ?></dt>
		<dd>
			<?php echo h($ticket['Ticket']['tableId']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('JobId'); ?></dt>
		<dd>
			<?php echo h($ticket['Ticket']['JobId']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TicketNum'); ?></dt>
		<dd>
			<?php echo h($ticket['Ticket']['TicketNum']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PONum'); ?></dt>
		<dd>
			<?php echo h($ticket['Ticket']['PONum']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TruckNum'); ?></dt>
		<dd>
			<?php echo h($ticket['Ticket']['TruckNum']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DriverID'); ?></dt>
		<dd>
			<?php echo h($ticket['Ticket']['DriverID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($ticket['Ticket']['Date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ToLocation'); ?></dt>
		<dd>
			<?php echo h($ticket['Ticket']['ToLocation']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FromLocation'); ?></dt>
		<dd>
			<?php echo h($ticket['Ticket']['FromLocation']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('WaterTicketNum'); ?></dt>
		<dd>
			<?php echo h($ticket['Ticket']['WaterTicketNum']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TrailerNum'); ?></dt>
		<dd>
			<?php echo h($ticket['Ticket']['TrailerNum']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Ticket'), array('action' => 'edit', $ticket['Ticket']['tableId'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Ticket'), array('action' => 'delete', $ticket['Ticket']['tableId']), null, __('Are you sure you want to delete # %s?', $ticket['Ticket']['tableId'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tickets'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ticket'), array('action' => 'add')); ?> </li>
	</ul>
</div>
