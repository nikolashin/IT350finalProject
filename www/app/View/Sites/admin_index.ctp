<div class="sites index">
	<h2><?php echo __('Sites'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('tableId'); ?></th>
			<th><?php echo $this->Paginator->sort('Location'); ?></th>
			<th><?php echo $this->Paginator->sort('SiteName'); ?></th>
			<th><?php echo $this->Paginator->sort('SiteType'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($sites as $site): ?>
	<tr>
		<td><?php echo h($site['Site']['tableId']); ?>&nbsp;</td>
		<td><?php echo h($site['Site']['Location']); ?>&nbsp;</td>
		<td><?php echo h($site['Site']['SiteName']); ?>&nbsp;</td>
		<td><?php echo h($site['Site']['SiteType']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $site['Site']['tableId'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $site['Site']['tableId'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $site['Site']['tableId']), null, __('Are you sure you want to delete # %s?', $site['Site']['tableId'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Site'), array('action' => 'add')); ?></li>
	</ul>
</div>
