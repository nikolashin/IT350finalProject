<div class="jobLoads view">
<h2><?php  echo __('Job Load'); ?></h2>
	<dl>
		<dt><?php echo __('TableId'); ?></dt>
		<dd>
			<?php echo h($jobLoad['JobLoad']['tableId']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TicketNum'); ?></dt>
		<dd>
			<?php echo h($jobLoad['JobLoad']['TicketNum']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TicketOrder'); ?></dt>
		<dd>
			<?php echo h($jobLoad['JobLoad']['TicketOrder']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Quantity'); ?></dt>
		<dd>
			<?php echo h($jobLoad['JobLoad']['Quantity']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($jobLoad['JobLoad']['Description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Job Load'), array('action' => 'edit', $jobLoad['JobLoad']['tableId'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Job Load'), array('action' => 'delete', $jobLoad['JobLoad']['tableId']), null, __('Are you sure you want to delete # %s?', $jobLoad['JobLoad']['tableId'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Job Loads'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job Load'), array('action' => 'add')); ?> </li>
	</ul>
</div>
