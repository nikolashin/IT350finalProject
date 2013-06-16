<div class="trucks form">
<?php echo $this->Form->create('Truck'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Truck'); ?></legend>
	<?php
		echo $this->Form->input('tableId');
		echo $this->Form->input('TruckNum');
		echo $this->Form->input('LicenceDOT');
		echo $this->Form->input('Mileage');
		echo $this->Form->input('PlateNo');
		echo $this->Form->input('Truck_Type');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Truck.tableId')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Truck.tableId'))); ?></li>
		<li><?php echo $this->Html->link(__('List Trucks'), array('action' => 'index')); ?></li>
	</ul>
</div>
