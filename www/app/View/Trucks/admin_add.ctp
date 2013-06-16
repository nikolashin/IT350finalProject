<div class="trucks form">
<?php echo $this->Form->create('Truck'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Truck'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Trucks'), array('action' => 'index')); ?></li>
	</ul>
</div>
