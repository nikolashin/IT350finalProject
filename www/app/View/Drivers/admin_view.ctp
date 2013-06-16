<div class="drivers view">
<h2><?php  echo __('Driver'); ?></h2>
	<dl>
		<dt><?php echo __('TableId'); ?></dt>
		<dd>
			<?php echo h($driver['Driver']['tableId']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DriverLicNum'); ?></dt>
		<dd>
			<?php echo h($driver['Driver']['DriverLicNum']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($driver['Driver']['Name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Insurance'); ?></dt>
		<dd>
			<?php echo h($driver['Driver']['Insurance']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LicenseType'); ?></dt>
		<dd>
			<?php echo h($driver['Driver']['LicenseType']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Experience'); ?></dt>
		<dd>
			<?php echo h($driver['Driver']['Experience']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PayRate'); ?></dt>
		<dd>
			<?php echo h($driver['Driver']['PayRate']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Driver'), array('action' => 'edit', $driver['Driver']['tableId'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Driver'), array('action' => 'delete', $driver['Driver']['tableId']), null, __('Are you sure you want to delete # %s?', $driver['Driver']['tableId'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Drivers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Driver'), array('action' => 'add')); ?> </li>
	</ul>
</div>
