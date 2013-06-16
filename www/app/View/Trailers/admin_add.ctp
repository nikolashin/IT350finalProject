<div class="trailers form">
<?php echo $this->Form->create('Trailer'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Trailer'); ?></legend>
	<?php
		echo $this->Form->input('TrailerNum');
		echo $this->Form->input('Registration');
		echo $this->Form->input('PlateNo');
		echo $this->Form->input('Capacity');
		echo $this->Form->input('Mileage');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Trailers'), array('action' => 'index')); ?></li>
	</ul>
</div>
