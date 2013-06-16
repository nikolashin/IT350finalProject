<div class="jobs form">
<?php echo $this->Form->create('Job'); ?>
	<fieldset>
		<legend><?php echo __('Add Job'); ?></legend>
	<?php
		echo $this->Form->input('JobId');
		echo $this->Form->input('HiringCompany');
		echo $this->Form->input('WorkType');
		echo $this->Form->input('StartDate');
		echo $this->Form->input('RateNum');
		echo $this->Form->input('RateType');
		echo $this->Form->input('FuelSurcharge');
		$options= array('Here' => 'Here', 'There' => 'There');
		echo $this->Form->select('Location', $options);
	//	echo $this->Form->input('Location');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Jobs'), array('action' => 'index')); ?></li>
	</ul>
</div>
