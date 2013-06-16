<div class="trucks view">
<h2><?php  echo __('Truck'); ?></h2>
	<dl>
		<dt><?php echo __('TableId'); ?></dt>
		<dd>
			<?php echo h($truck['Truck']['tableId']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TruckNum'); ?></dt>
		<dd>
			<?php echo h($truck['Truck']['TruckNum']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LicenceDOT'); ?></dt>
		<dd>
			<?php echo h($truck['Truck']['LicenceDOT']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mileage'); ?></dt>
		<dd>
			<?php echo h($truck['Truck']['Mileage']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PlateNo'); ?></dt>
		<dd>
			<?php echo h($truck['Truck']['PlateNo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Truck Type'); ?></dt>
		<dd>
			<?php echo h($truck['Truck']['Truck_Type']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Truck'), array('action' => 'edit', $truck['Truck']['tableId'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Truck'), array('action' => 'delete', $truck['Truck']['tableId']), null, __('Are you sure you want to delete # %s?', $truck['Truck']['tableId'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Trucks'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Truck'), array('action' => 'add')); ?> </li>
	</ul>
</div>
