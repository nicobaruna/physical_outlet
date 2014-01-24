<div class="rekapitulations view">
<h2><?php echo __('Rekapitulation'); ?></h2>
	<dl>
		<dt><?php echo __('Issue'); ?></dt>
		<dd>
			<?php echo $this->Html->link($rekapitulation['Issue']['id'], array('controller' => 'issues', 'action' => 'view', $rekapitulation['Issue']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($rekapitulation['User']['id'], array('controller' => 'users', 'action' => 'view', $rekapitulation['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Rekapitulation'), array('action' => 'edit', $rekapitulation['Rekapitulation']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Rekapitulation'), array('action' => 'delete', $rekapitulation['Rekapitulation']['id']), null, __('Are you sure you want to delete # %s?', $rekapitulation['Rekapitulation']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Rekapitulations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rekapitulation'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Issues'), array('controller' => 'issues', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Issue'), array('controller' => 'issues', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
