<div class="jobs view">
<h2><?php  echo __('Job'); ?></h2>
	<dl>
		<dt><?php echo __('TableId'); ?></dt>
		<dd>
			<?php echo h($job['Job']['tableId']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('JobId'); ?></dt>
		<dd>
			<?php echo h($job['Job']['JobId']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('HiringCompany'); ?></dt>
		<dd>
			<?php echo h($job['Job']['HiringCompany']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('WorkType'); ?></dt>
		<dd>
			<?php echo h($job['Job']['WorkType']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('StartDate'); ?></dt>
		<dd>
			<?php echo h($job['Job']['StartDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RateNum'); ?></dt>
		<dd>
			<?php echo h($job['Job']['RateNum']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RateType'); ?></dt>
		<dd>
			<?php echo h($job['Job']['RateType']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FuelSurcharge'); ?></dt>
		<dd>
			<?php echo h($job['Job']['FuelSurcharge']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Location'); ?></dt>
		<dd>
			<?php echo h($job['Job']['Location']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Job'), array('action' => 'edit', $job['Job']['tableId'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Job'), array('action' => 'delete', $job['Job']['tableId']), null, __('Are you sure you want to delete # %s?', $job['Job']['tableId'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job'), array('action' => 'add')); ?> </li>
	</ul>
</div>
