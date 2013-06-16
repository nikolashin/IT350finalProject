<div class="drivers form">
<?php echo $this->Form->create('Driver'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Driver'); ?></legend>
	<?php
		echo $this->Form->input('tableId');
		echo $this->Form->input('DriverLicNum');
		echo $this->Form->input('Name');
		echo $this->Form->input('Insurance');
		echo $this->Form->input('LicenseType');
		echo $this->Form->input('Experience');
		echo $this->Form->input('PayRate');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Driver.tableId')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Driver.tableId'))); ?></li>
		<li><?php echo $this->Html->link(__('List Drivers'), array('action' => 'index')); ?></li>
	</ul>
</div>
