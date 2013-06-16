<div class="sites view">
<h2><?php  echo __('Site'); ?></h2>
	<dl>
		<dt><?php echo __('TableId'); ?></dt>
		<dd>
			<?php echo h($site['Site']['tableId']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Location'); ?></dt>
		<dd>
			<?php echo h($site['Site']['Location']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('SiteName'); ?></dt>
		<dd>
			<?php echo h($site['Site']['SiteName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('SiteType'); ?></dt>
		<dd>
			<?php echo h($site['Site']['SiteType']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Site'), array('action' => 'edit', $site['Site']['tableId'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Site'), array('action' => 'delete', $site['Site']['tableId']), null, __('Are you sure you want to delete # %s?', $site['Site']['tableId'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sites'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Site'), array('action' => 'add')); ?> </li>
	</ul>
</div>
