<div class="jobLoads form">
<?php echo $this->Form->create('JobLoad'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Job Load'); ?></legend>
	<?php
		echo $this->Form->input('TicketNum');
		echo $this->Form->input('TicketOrder');
		echo $this->Form->input('Quantity');
		echo $this->Form->input('Description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Job Loads'), array('action' => 'index')); ?></li>
	</ul>
</div>
